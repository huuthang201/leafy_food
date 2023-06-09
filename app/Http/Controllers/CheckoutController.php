<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        if ($user) {
            $param['id'] = $user->id;
            $param['name'] = $user->name;
            $param['email'] = $user->email;
        }
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        // Count total products in cart
        if ($user) {
            $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        }
        if (!isset($totalProductsInCart)) {
            $param['totalProductsInCart'] = 0;
        } else {
            $param['totalProductsInCart'] = $totalProductsInCart;
        }
        // Count total products favorite
        if ($user) {
            $totalProductsFavorite = Favorite::where('user_id', $param['id'])->count();
        }
        if (!isset($totalProductsFavorite)) {
            $param['totalProductsFavorite'] = 0;
        } else {
            $param['totalProductsFavorite'] = $totalProductsFavorite;
        }
        // Get data cart
        if ($user) {
            $dataCart = Cart::where('user_id', $param['id'])->get();
        } else {
            $dataCart = [];
        }
        // get data product && calculate total price
        $totalPrice = 0;
        foreach ($dataCart as $key => $value) {
            $dataProduct = Product::find($value->product_id);
            $dataCart[$key]['product_name'] = $dataProduct->product_name;
            $dataCart[$key]['number'] = $dataProduct->number;
            $dataCart[$key]['unit'] = $dataProduct->unit;
            $dataCart[$key]['product_price'] = $dataProduct->price;
            $dataCart[$key]['product_image'] = $dataProduct->image;
            $totalPrice += $dataProduct->price * $value->quantity;
        }
        $param['feeShip'] = 30000;
        $param['discount'] = 0;
        $param['dataCart'] = $dataCart;
        // dd($param['dataCart']);
        $param['totalPrice'] = $totalPrice; 
        return view('checkout', $param);
    }

    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    /**
     * Show the application dashboard.
     *
     * No	Tên	Số thẻ	Hạn ghi trên thẻ	OTP	Trường hợp test
     * 1	NGUYEN VAN A	9704 0000 0000 0018	03/07	OTP	Thành công
     * 2	NGUYEN VAN A	9704 0000 0000 0026	03/07	OTP	Thẻ bị khóa
     * 3	NGUYEN VAN A	9704 0000 0000 0034	03/07	OTP	Nguồn tiền không đủ
     * 4	NGUYEN VAN A	9704 0000 0000 0042	03/07	OTP	Hạn mức thẻ
     * 
     * 
     * No	Name	Number	Card Expdate	CVC	OTP	Test Case
     * 1	NGUYEN VAN A	5200 0000 0000 1096	05/24	111	OTP	Card Successful
     * 2	NGUYEN VAN A	5200 0000 0000 1104	05/24	111	OTP	Card failed
     * 3	NGUYEN VAN A	4111 1111 1111 1111	05/24	111	No OTP	Card Successful
     */
    public function checkout(Request $request)
    {
        $totalCheckout = $request->totalCheckout;
        $payMomo = $request->momo;
        if (isset($payMomo)) {
            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
            $partnerCode = 'MOMOBKUN20180529';
            $accessKey = 'klm05TvNBzhg7h7j';
            $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
            $orderInfo = "Thanh toán đơn hàng LeafyFood qua MoMo";
            $amount = $totalCheckout;
            $orderId = time() . "";
            $redirectUrl = env('APP_URL') . "/checkout-success?name=" . $request->name;
            $ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
            $extraData = "";
            $requestId = time() . "";
            $requestType = "payWithATM";
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            $data = array(
                'partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            );
            $result = $this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json

            return redirect($jsonResult['payUrl']);
        }
    }

    /**
     * Show the application dashboard.
     *
     * No	Tên	Số thẻ	Hạn ghi trên thẻ	OTP	Trường hợp test
     * 1	NGUYEN VAN A	9704 0000 0000 0018	03/07	OTP	Thành công
     * 2	NGUYEN VAN A	9704 0000 0000 0026	03/07	OTP	Thẻ bị khóa
     * 3	NGUYEN VAN A	9704 0000 0000 0034	03/07	OTP	Nguồn tiền không đủ
     * 4	NGUYEN VAN A	9704 0000 0000 0042	03/07	OTP	Hạn mức thẻ
     * 
     * 
     * No	Name	Number	Card Expdate	CVC	OTP	Test Case
     * 1	NGUYEN VAN A	5200 0000 0000 1096	05/24	111	OTP	Card Successful
     * 2	NGUYEN VAN A	5200 0000 0000 1104	05/24	111	OTP	Card failed
     * 3	NGUYEN VAN A	4111 1111 1111 1111	05/24	111	No OTP	Card Successful
     */
    public function checkout_success (Request $request) {
        $data = $request->all();
        if($data['message'] == 'Successful.') {
            $userID = Auth::user()->id;
            Cart::where('user_id', $userID)->delete();
        }
        Bill::create([
            'user_id' => Auth::user()->id,
            'bill_detail' => json_encode($data),
        ]);
        return view('checkout-success', $data);
    }
}
