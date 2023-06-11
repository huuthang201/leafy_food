<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="title" content="LeafyFood - Chăm sóc sức khỏe, thưởng thức cuộc sống">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trạng thái thanh toán</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <style>
        body {
            padding: 40px;
        }
        .columns {
            text-align: center;
        }
        .column {
            box-shadow: inset 0 0 0 2px #05371d;
            border-radius: 8px;
            display: inline-block;
            padding: 50px;
            width: 60%;
            color: #05371d;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            line-height: 1.4em;
        }
        .divider {
            width: 40%;
            height: 2px;
            margin-left: auto;
            margin-right: auto;
            background-color: #05371d;
            border: 0 none;
            margin-top: 14px;
            margin-bottom: 40px;
        }
        .success-extras p {
            color: #05371d;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 2em;
            font-weight: 300;
            padding: 0 0 20px 0;
            line-height: 1.2em;
        }
        p.success-lrg {
            font-size: 2.4em;
        }
        .fa-check-circle {
            color: #05371d;
            font-size: 6em;
            margin: 0 0 30px 0;
        }
        .action.primary {
            background: #05371d;
            border: none;
            color: #fff;
            display: inline-block;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 300;
            font-size: 1.4rem;
            box-sizing: border-box;
            vertical-align: middle;
            padding: 20px 20px;
            margin: 20px 0 0 0;
            text-decoration: none;
        }
        .action.primary:hover {
            background: #05371d;
        }
        @media screen and (max-width: 600px) { 
            .column{
            width: 80%;
            }
	    }
    </style>
</head>
<body>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="PefvQbePmuX6e2ZN">
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup'">
                <div class="success-extras">
                    {!! $message == 'Successful.' ? "<i class='far fa-check-circle'></i>" : "<i class='fa-solid fa-xmark'></i>" !!}
                    <p>{{ $message == 'Successful.' ? 'Cảm ơn bạn đã mua hàng tại LeafyFood!' : 'Thông báo!' }}</p>
                    <p class="success-lrg">
                        {{ $message == 'Successful.' ? 'Ngồi xuống, thư giãn và chờ shipper giao hàng tới cho bạn!' : 'Thanh toán bị hủy!' }}
                    </p>
                    <hr class="divider">
                </div>
            </div>
            <div class="checkout-success">
                <p>Thông tin đơn hàng của bạn:</p>
                <p>Khách hàng: <b><span>{{ $name }}</span></b>.</p>
                <p>Mã đơn hàng: <span>{{ $orderId }}</span>.</p>
                <p>Mã giao dịch: <span>{{ $transId }}</span>.</p>
                <p>Trạng thái: <span>{{ $message == 'Successful.' ? 'Đơn hàng của bạn đã thanh toán thành công' : 'Đơn hàng của bạn đã thanh toán thất bại' }}</span>.</p>
                <div class="actions-toolbar">
                    <div class="primary">
                        <a class="action primary continue" href="/shop-grid">{{ $message == 'Successful.' ? 'Tiếp tục mua hàng' : 'Quay lại trang chủ' }}</a>
                    </div>
                </div>
            </div>
            <div id="registration" data-bind="scope:'registration'">
                <br>
                <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll"></div>
                <div>
                    <p data-bind="i18n: 'You can track your order status by creating an account.'">{{ $message == 'Successful.' ? 'Bạn có thể theo dõi trạng thái đơn hàng của mình bằng cách liên hệ với chúng tôi.' : 'Nếu đây không phải do bạn, vui lòng liên hệ với chúng tôi.' }}</p>
                    <p><span data-bind="i18n: 'Email Address'">Email</span>: <span data-bind="text: getEmailAddress()">leafyfood@gmail.com</span></p>
                    <p><span data-bind="i18n: 'Email Address'">Số điện thoại</span>: <span data-bind="text: getEmailAddress()">1900 6868</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>