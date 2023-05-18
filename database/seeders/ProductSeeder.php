<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'product_name' => 'Bún ngô eat clean, bún khô gia truyền',
            'category_id' => 1,
            'price' => 43000,
            'description' => 'Bún ngô eat clean, bún khô gia truyền',
            'quantity' => 100,
            'image' => 'https://bizweb.dktcdn.net/thumb/large/100/458/914/products/bun-ngo-2-1671982030102.jpg?v=1671982090000',
            'status' => 1,
            ],
            [
            'product_name' => 'Bún gạo ngũ sắc eat clean, healthy 1kg',
            'category_id' => 1,
            'price' => 78000,
            'description' => 'Ngoài những danh lam thắng cảnh đắm say lòng người, Cao Bằng còn nổi tiếng trứ danh với Bún khô Ngũ sắc
            Mỗi loại bún khô được chế biến từ một nguyên liệu có màu đặc trưng, ví dụ bún ngô làm nguyên liệu ngô tẻ có màu vàng. Ngoài ra còn có bún làm từ gạo lứt đỏ, lá chùm ngây màu xanh lá, hoa đậu biếc màu xanh trời, lá cẩm màu tím, khoai lang tím, hay quả gấc hoặc bún trộn từ các màu trên.
            Với nguyên liệu 100% từ tự nhiên, không phẩm màu hay chất bảo quản, Bún ngũ sắc Cao Bằng được phân phối bởi Tây Nguyên Food - Việt Nam tự tin mang đến cho bạn trải nghiệm tốt nhất.
            Vì sản xuất theo phương pháp thủ công và rau củ tự nhiên nên Bún ngũ sắc Cao Bằng rất rốt cho sức khoẻ và cơ thể.
            Tây Nguyên Food - Việt Nam',
            'quantity' => 110,
            'image' => 'https://bizweb.dktcdn.net/thumb/large/100/458/914/products/bun-ngu-sac-3-1671980512410.jpg?v=1671980546000',
            'status' => 1,
            ],
            [
            'product_name' => 'Bún gạo lứt đỏ',
            'category_id' => 1,
            'price' => 77000,
            'description' => '<p><br>
                1: Kiểm soát tốt cân nặng, tránh béo phì5 CÔNG DỤNG TUYỆT VỜI NHẤT CỦA BÚN GẠO LỨT ĐỎ&nbsp;<br>
                2: Cực tốt cho người bị tiểu đường<br>
                3: Ngăn ngừa các bệnh về tim mạch<br>
                4: Hỗ trợ tiêu hóa tốt, ổn định đường ruột<br>
                5: Bổ sung chất cho cho xương<br>
                Vậy, bạn đã thử qua Bún gạo lứt đỏ nguyên chất 100% nhà Tây Nguyên Food chưa?&nbsp;<br>
                Cam kết 100% nguyên chất, không chất bảo quản</p>',
            'quantity' => 90,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/bun-gao-lut-do-2-1671980785810.jpg?v=1671980792297',
            'status' => 1,
            ],
            [
            'product_name' => 'Mỳ chũ gạo lứt eat clean Tây Nguyên Food',
            'category_id' => 2,
            'price' => 99000,
            'description' => '<p>Nói đến mỳ chũ, chắc chắn nhiều người sẽ không còn xa lạ. Vì nó góp một phần vào bữa ăn của mỗi gia đình Việt. Trong đó, loại mỳ được đánh giá chất lượng ngon, có độ dai và được nhiều người thích nhất là mỳ chũ Lục Ngạn. Đây là loại mỳ nổi tiếng, chính hiệu được người Bắc Giang tự tay sản xuất ra. Để tạo ra những sợi mỳ vừa dai,vừa ngọt bùi, người làng nghề phải tiến hành rất nhiều công đoạn rất công phu. Sợi mỳ dai ngon và ngọt bùi có thể dùng làm phở, hủ tiếu, phở xào hoặc nhúng để ăn lẩu… sợi mì không bị nát! Mỳ chũ nhà làm trực tiếp nên mọi người yên tâm về chất lượng nhé. Sợi mì trắng đục chứ không trắng trong như hàng ngoài chợ bán!<br>
                Mỳ dành cho người ăn kiêng, giảm béo, ăn theo chế độ healthy ko tinh bột xấu</p>
            <p>Mỳ chũ có thể kết hợp với nhiều nguyên liệu như xào thịt bò, xào cần tây, xào măng tây, &nbsp;nấu gà, để có được những món ăn hấp dẫn. Thưởng thức món ăn dân giã này bạn sẽ thấy khác hẳn với vị bún, phở được làm theo cách công nghiệp. Sợi mỳ dai, không tạo cảm giác khó chịu đối với người bị dạy dày. Đặc biệt lựa chọn mỳ chũ cho trẻ nhỏ rất an toàn.&nbsp;</p>',
            'quantity' => 99,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/my-chu-lut-5-1671983815684.jpg?v=1671983822930',
            'status' => 1,
            ],
            [
            'product_name' => 'Mỳ chũ rau củ eat clean 1kg',
            'category_id' => 2,
            'price' => 106000,
            'description' => '<p>Nói đến mỳ chũ, chắc chắn nhiều người sẽ không còn xa lạ. Vì nó góp một phần vào bữa ăn của mỗi gia đình Việt. Trong đó, loại mỳ được đánh giá chất lượng ngon, có độ dai và được nhiều người thích nhất là mỳ chũ Lục Ngạn. Đây là loại mỳ nổi tiếng, chính hiệu được người Bắc Giang tự tay sản xuất ra. Để tạo ra những sợi mỳ vừa dai,vừa ngọt bùi, người làng nghề phải tiến hành rất nhiều công đoạn rất công phu. Sợi mỳ dai ngon và ngọt bùi có thể dùng làm phở, hủ tiếu, phở xào hoặc nhúng để ăn lẩu… sợi mì không bị nát! Mỳ chũ nhà làm trực tiếp nên mọi người yên tâm về chất lượng nhé. Sợi mì trắng đục chứ không trắng trong như hàng ngoài chợ bán!<br>
                Mỳ dành cho người ăn eat clean, ăn theo chế độ healthy ko tinh bột xấu</p>
            <p>Mỳ chũ có thể kết hợp với nhiều nguyên liệu như xào thịt bò, xào cần tây, xào măng tây, &nbsp;nấu gà, để có được những món ăn hấp dẫn. Thưởng thức món ăn dân giã này bạn sẽ thấy khác hẳn với vị bún, phở được làm theo cách công nghiệp. Sợi mỳ dai, không tạo cảm giác khó chịu đối với người bị dạy dày. Đặc biệt lựa chọn mỳ chũ cho trẻ nhỏ rất an toàn.&nbsp;</p>',
            'quantity' => 99,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/my-chu-rau-cu-3-1671983370506.jpg?v=1671983778900',
            'status' => 1,
            ],

            [
            'product_name' => 'Gạo lứt tím than',
            'category_id' => 3,
            'price' => 59900,
            'description' => '<p>“Ăn gạo lứt khô và ngán, không ngọt vị như cơm thường làm dễ nản”<br>
                Đây có phải thường là lý do chính cản trở mọi người trong việc duy trì lối ăn uống lành mạnh giúp trẻ da, đẹp dáng, tăng sức đề kháng cho cơ thể?<br>
                Vậy mời bạn thử qua Gạo lứt tím than Sóc Trăng nhà Tây Nguyên Food - Việt Nam.<br>
                Với đặc tính hạt gạo dài - dẻo - thơm ngon tuyệt đối.&nbsp;<br>
                🍃 Bạn có thể nấu ngay mà không cần ngâm ạ!<br>
                Tỉ lệ nước gấp 1.5 lần gạo<br>
                Lưu ý: khi bạn vo gạo mà thấy sắc tố tím ra nước thì đừng lo, đấy là sắc tố tự nhiên của gạo ạ 🌱&nbsp;<br>
                Các bạn để ý những loại thực phẩm mà có màu sắc đặc biệt luôn mang lại nhiều dinh dưỡng hơn so với thông thường ấy ạ ^^&nbsp;<br>
                Gạo lứt tím than Sóc Trăng:&nbsp;<br>
                Made in Việt Nam<br>
                Thông tin dinh dưỡng/100Gr<br>
                + Calories: 125<br>
                + Fat: 1<br>
                + Carbs: 26<br>
                + Protein: 2.9<br>
                - Tác dụng: tốt cho người tiểu đường, thừa cân, tạo cảm giác no lâu hơn, hỗ trợ cho việc kiểm soát cholesterol<br>
                * Lưu Ý: Nên sử dụng sản phẩm trong 2 tháng để sản phẩm được tốt nhất</p>',
            'quantity' => 99,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/gao-tim-than-soc-trang-4-1671976273287.jpg?v=1671976852143',
            'status' => 1,
            ],
            [
            'product_name' => 'Gạo lứt dẻo Điện Biên healthy',
            'category_id' => 3,
            'price' => 59900,
            'description' => '<p>Gạo lứt là một trong những loại ngũ cốc lành mạnh và đem lại nhiều lợi ích cho sức khỏe. Bổ sung gạo lứt thường xuyên giúp cải thiện sức khỏe tim mạch, kiểm soát cân nặng, nuôi dưỡng làn da từ sâu bên trong. Hiện nay, gạo lứt thường được thêm vào khẩu phần ăn vì nó giàu chất dinh dưỡng nhưng lại cung cấp ít năng lượng. So với gạo trắng và lúa mì, gạo lứt cung cấp ít calo hơn nhưng nhiều chất xơ, vitamin và khoáng chất hơn. Những thành phần này sẽ giúp bạn no lâu hơn và giảm lượng thức ăn nạp vào cơ thể mỗi ngày.</p>
            <p>Ngoài ra, gạo lứt chứa hàm lượng đường, chất béo và tinh bột thấp nên có thể làm giảm sự tích tụ của các mô mỡ ở vùng bụng và hỗ trợ quá trình giảm cân đáng kể. Ngoài ra, gạo lứt không chứa gluten - một loại protein được tìm thấy trong nhiều loại ngũ cốc khác như lúa mì và lúa mạch.</p>
            <p>Ăn gạo lứt khô và ngán, không ngọt vị như cơm thường làm dễ nản”<br>
                Đây có phải thường là lý do chính cản trở mọi người trong việc duy trì lối ăn uống lành mạnh giúp trẻ da, đẹp dáng, tăng sức đề kháng cho cơ thể?<br>
                Vậy mời bạn thử qua Gạo lứt dẻo Điện Biên nhà Tây Nguyên Food - Việt Nam.<br>
                Với đặc tính hạt gạo dài - dẻo - thơm ngon tuyệt đối.&nbsp;<br>
                Bạn có thể nấu ngay mà không cần ngâm ạ!</p>
            <p>Tỉ lệ nước gấp 1.5 lần gạo<br>Lưu ý: khi bạn vo gạo mà thấy ra màu nước thì đừng lo, đấy là sắc tố tự nhiên của gạo ạ&nbsp;<br>Các bạn để ý những loại thực phẩm mà có màu sắc đặc biệt luôn mang lại nhiều dinh dưỡng hơn so với thông thường ấy ạ ^^&nbsp;</p>',
            'quantity' => 120,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/gao-lut-deo-dien-bien-1-1671976795254.jpg?v=1671977601847',
            'status' => 1,
            ],
            [
            'product_name' => 'Bánh canh ngũ sắc, thực phẩm eat clean, bún khô healthy',
            'category_id' => 4,
            'price' => 112000,
            'description' => '<p>Eat clean là cách tiếp cận ăn uống tập trung vào thực phẩm tươi sạch, càng tinh khiết càng tốt. Khi ăn sạch, bạn ăn trái cây, rau xanh, thực phẩm giàu protein với chất béo tốt và ngũ cốc nguyên hạt như gạo lứt, yến mạch… và hạn chế đồ chiên rán, chế biến sẵn, nhiều gia vị và nhiều dầu mỡ.</p>
            <p>Bánh canh là tinh hoa của ẩm thực Việt nhưng lại chứa lượng mỡ trong nước dùng khá nhiều. Vậy thì làm sao để ta có thể vừa eat clean vừa có thể thưởng thức được tinh hoa của dân tộc bây giờ?&nbsp;</p>
            <p>Nghe có vẻ là một câu hỏi khó, tuy nhiên khi bạn đến với Tây Nguyên Food, các bạn không cần phải lo lắng làm sao để vừa ăn có thể ăn ngon vừa có thể eat clean, Tây Nguyên Food có thể đảm bảo với các bạn rằng, bánh canh ngũ sắc&nbsp;ở đây vẫn giữ được tinh túy của món bánh canh truyền thống, đồng thời lượng calo lại không cao tí nào, vô cùng phù hợp với dân eat clean hay các bạn đang giảm cân nha.</p>
            <p>5 CÔNG DỤNG TUYỆT VỜI NHẤT CỦA BÁNH CANH<br> 1: Kiểm soát tốt cân nặng, tránh béo phì<br> 2: Cực tốt cho người bị tiểu đường<br> 3: Ngăn ngừa các bệnh về tim mạch<br> 4: Hỗ trợ tiêu hóa tốt, ổn định đường ruột<br> 5: Bổ sung chất cho cho xương<br> Cam kết 100% nguyên chất, không chất bảo quản&nbsp;</p>',
            'quantity' => 100,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/banh-canh-ngu-sac-3-1671989026574.jpg?v=1671989110820',
            'status' => 1,
            ],
            [
            'product_name' => 'Bánh canh gạo lứt, thực phẩm eat clean, bánh canh healthy',
            'category_id' => 4,
            'price' => 112000,
            'description' => '<p>Eat clean là cách tiếp cận ăn uống tập trung vào thực phẩm tươi sạch, càng tinh khiết càng tốt. Khi ăn sạch, bạn ăn trái cây, rau xanh, thực phẩm giàu protein với chất béo tốt và ngũ cốc nguyên hạt như gạo lứt, yến mạch… và hạn chế đồ chiên rán, chế biến sẵn, nhiều gia vị và nhiều dầu mỡ.</p>
            <p>Bánh canh là tinh hoa của ẩm thực Việt nhưng lại chứa lượng mỡ trong nước dùng khá nhiều. Vậy thì làm sao để ta có thể vừa eat clean vừa có thể thưởng thức được tinh hoa của dân tộc bây giờ?&nbsp;</p>
            <p>Nghe có vẻ là một câu hỏi khó, tuy nhiên khi bạn đến với Tây Nguyên Food, các bạn không cần phải lo lắng làm sao để vừa ăn có thể ăn ngon vừa có thể eat clean, Tây Nguyên Food có thể đảm bảo với các bạn rằng, bánh canh ngũ sắc&nbsp;ở đây vẫn giữ được tinh túy của món bánh canh truyền thống, đồng thời lượng calo lại không cao tí nào, vô cùng phù hợp với dân eat clean hay các bạn đang giảm cân nha.</p>
            <p>5 CÔNG DỤNG TUYỆT VỜI NHẤT CỦA BÁNH CANH<br> 1: Kiểm soát tốt cân nặng, tránh béo phì<br> 2: Cực tốt cho người bị tiểu đường<br> 3: Ngăn ngừa các bệnh về tim mạch<br> 4: Hỗ trợ tiêu hóa tốt, ổn định đường ruột<br> 5: Bổ sung chất cho cho xương<br> Cam kết 100% nguyên chất, không chất bảo quản&nbsp;</p>',
            'quantity' => 110,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/banh-canh-gao-lut-1-1671984421710.jpg?v=1671984550897',
            'status' => 1,
            ],
            [
            'product_name' => 'Nui ống ngũ sắc, đồ ăn eat clean cho cuộc sống healthy',
            'category_id' => 5,
            'price' => 105000,
            'description' => '<p>Nui được làm chủ yếu từ: bột mì, bột gạo, trứng, nước và một số rau củ tạo màu như: chùm ngây, đậu biếc, gấc, ngô, cẩm. Sau khi trộn bột với trứng và nước xong, người ta sẽ cho thêm phụ gia vào để tạo thành khối bột đồng nhất. Cuối cùng đem đi ép khuôn và sấy khô để tạo thành nui.</p>
            <p>Khác với những sợi mì dài quen thuộc của Việt Nam, mì có nhiều hình dạng phong phú và độc đáo như hình tròn, xoắn, ống tròn, ống lớn, hình ngôi sao, con bướm, ... với nhiều màu sắc lộng lẫy. Trong loại nui ống ngũ sắc này có chứa một lượng lớn tinh bột, protein, canxi, sắt, chất xơ,…cùng một số vitamin có trong gạo tạo nên hàm lượng chất dinh dưỡng của nó sẽ cao hơn so với các loại nui thông thường khác.</p>
            <p>Ngoài ra, người ta còn sản xuất ra món mì xào đậm đà, hương vị độc đáo. Món ăn vặt này được trẻ em cũng như người lớn yêu thích.</p>
            <p>Tuy nui ống ngon là vậy, nhưng nếu không biết chế biến đúng cách với nguồn nguyễn liệu phù hợp, chúng ta dễ dàng kiểm soát được cân nặng của mình. Nhưng các bạn đừng lo lắng, chuyện gì khó đã có Tây Nguyễn Food lo, đến với Tây Nguyên Food, các bạn sẽ có nui ống đặc biệt được làm từ 100% tự nhiên, vừa ngon miệng lại vừa eat clean đúng không nào.</p>
            <p>Một vài lưu ý khi lựa chọn mua nui gạo dinh dưỡng<br>Sản phẩm này chỉ thực sự tốt khi bạn mua đúng loại nui gạo rau củ chính hãng, vì trên thị trường hiên nay có rất nhiều &nbsp;đơn vị sử dụng màu hóa chất để tạo màu cho sản phẩm và gắn mác sản phẩm tự nhiên. Và đương nhiên giá thành sẽ rẻ hơn rất nhiều so với sản phẩm chính hãng, chính vì thế bạn phải thật tinh ý và lựa chọn điểm cung cấp uy tín để gửi gắm niềm tin.</p>',
            'quantity' => 200,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/nui-ong-ngu-sac-1-1671985503404.jpg?v=1671985509867',
            'status' => 1,
            ],
            [
            'product_name' => 'Nui ống gạo lứt, nui hữu cơ eat clean',
            'category_id' => 5,
            'price' => 105000,
            'description' => '<p>Nui được làm chủ yếu từ: bột mì, bột gạo, trứng, nước và một số rau củ tạo màu như: chùm ngây, đậu biếc, gấc, ngô, cẩm. Sau khi trộn bột với trứng và nước xong, người ta sẽ cho thêm phụ gia vào để tạo thành khối bột đồng nhất. Cuối cùng đem đi ép khuôn và sấy khô để tạo thành nui.</p>
            <p>Khác với những sợi mì dài quen thuộc của Việt Nam, mì có nhiều hình dạng phong phú và độc đáo như hình tròn, xoắn, ống tròn, ống lớn, hình ngôi sao, con bướm, ... với nhiều màu sắc lộng lẫy. Trong loại nui ống ngũ sắc này có chứa một lượng lớn tinh bột, protein, canxi, sắt, chất xơ,…cùng một số vitamin có trong gạo tạo nên hàm lượng chất dinh dưỡng của nó sẽ cao hơn so với các loại nui thông thường khác.</p>
            <p>Ngoài ra, người ta còn sản xuất ra món mì xào đậm đà, hương vị độc đáo. Món ăn vặt này được trẻ em cũng như người lớn yêu thích.</p>
            <p>Tuy nui ống ngon là vậy, nhưng nếu không biết chế biến đúng cách với nguồn nguyễn liệu phù hợp, chúng ta dễ dàng kiểm soát được cân nặng của mình. Nhưng các bạn đừng lo lắng, chuyện gì khó đã có Tây Nguyễn Food lo, đến với Tây Nguyên Food, các bạn sẽ có nui ống đặc biệt được làm từ 100% tự nhiên, vừa ngon miệng lại vừa eat clean đúng không nào.</p>
            <p>Một vài lưu ý khi lựa chọn mua nui gạo dinh dưỡng<br>Sản phẩm này chỉ thực sự tốt khi bạn mua đúng loại nui gạo rau củ chính hãng, vì trên thị trường hiên nay có rất nhiều &nbsp;đơn vị sử dụng màu hóa chất để tạo màu cho sản phẩm và gắn mác sản phẩm tự nhiên. Và đương nhiên giá thành sẽ rẻ hơn rất nhiều so với sản phẩm chính hãng, chính vì thế bạn phải thật tinh ý và lựa chọn điểm cung cấp uy tín để gửi gắm niềm tin.</p>',
            'quantity' => 120,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/nui-ong-gao-lut-2-1671984941563.jpg?v=1671984948467',
            'status' => 1,
            ],
            [
            'product_name' => 'Ngũ cốc Granola siêu hạt, mật ong nguyên chất 100%',
            'category_id' => 6,
            'price' => 118000,
            'description' => '<p><strong>GRANOLA</strong> - trên thị trường rất nhiều granola giá rẽ - Tại sao tây nguyên food không chạy theo xu hướng giá rẽ mà vẫn theo châm ngôn “Ăn sạch – sống khoẻ”?</p>
            <p><strong>Granola</strong> ngũ cốc siêu hạt dinh dưỡng vị ngọt tự nhiên từ mật ong chỉ 10% yến mạch.</p>
            <p>Với châm ngôn “Ăn sạch – sống khoẻ”, giúp người tiêu dùng có những bữa ăn lành mạnh, khoa học và đầy đủ dưỡng chất, tây nguyên food luôn nỗ lực, mang những dòng sản phẩm ưu việt và hữu ích nhất đến với khách hàng. Các sản phẩm tại tây nguyên food đều được kiểm định chất lượng, chứng minh nguồn gốc xuất xứ rõ ràng, giúp khách hàng an tâm khi sử dụng.</p>
            <p><strong>Thông tin sản phẩm:</strong></p>
            <p>- Thương hiệu: Tây Nguyên Food</p>
            <p>- Xuất xứ: Việt Nam</p>
            <p>- Đạt tiêu chuẩn vệ sinh ATTP Số: 63/2022/NNPTNT-DL</p>
            <p>- Quy cách đóng gói: hộp 500Gr</p>
            <p>- Ngày sản xuất: in trên bao bì</p>
            <p>- Hạn sử dụng: 6 tháng kể từ ngày sản xuất</p>
            <p>- Vị truyền thống sấy mật ong nguyên chất.</p>
            <p><strong>Thành phần:</strong> Hạnh nhân, óc chó vàng, óc chó đỏ, macca, hạt điều, bí xanh, yến mạch, nho khô, mật ong rừng, hoa quả khô theo mùa (nam việt quất, dừa sấy khô nguyên vị, chanh dây sấy dẻo, hồng táo giòn, dâu tây…)</p>',
            'quantity' => 100,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/granola-3-1671987006548.jpg?v=1681179931617',
            'status' => 1,
            ],
            [
            'product_name' => 'Yến mạch Úc tươi siêu ngon eatclean & healthy',
            'category_id' => 6,
            'price' => 42000,
            'description' => '<p>Ngũ cốc Yến Mạch được dùng rộng rãi ở Châu Âu, vì rất ngon và bổ dưỡng khi quấy với bột, với sữa, trứng, nước xương hoặc thịt (tôm, lươn, …) bằm cho trẻ em từ 5 tháng tuổi trở lên, người ốm, người cao tuổi; bởi vậy Yến Mạch được sử dụng thường xuyên trong các bữa ăn của nhà trẻ, trường học, bệnh viện hay ở các gia đình có em bé, người già.</p>
            <p>Thực phẩm ăn kiêng:<br>
                Ngũ cốcc yến mạch có thể chế biến rất nhiều món ăn ăn kiêng ngon miệng như bánh nướng, bánh kếp, bánh mỳ nướng,… Bạn sẽ hấp thụ được lượng chất xơ gấp đôi so với hàm lượng mà các chất bột khác mang lại, nhưng lại chứa rất ít calo.<br>
                – Tăng khả năng vận động của cơ bắp<br>
                – Chống ung thư</p>
            <p>Ăn sáng với ngũ cốc yến mạch mỗi ngày sẽ giúp phòng ngừa nguy cơ ung thư vú. Đặc biệt đối với phụ nữ ở thời kỳ tiền mãn kinh, có hiện tượng thừa chất xơ từ các loại ngũ cốc, thì yến mạch sẽ giúp giảm nguy cơ tăng lượng chất xơ trong cơ thể, điều hòa nội tiết.</p>
            <p>Chăm sóc sắc đẹp:<br>
                Theo bác sĩ chuyên khoa da liễu Amy Wechsler đến từ New York, làm mặt nạ đắp mặt hoặc rửa mặt hàng ngày bằng bột yến mạch có công dụng tẩy các chất bẩn nơi lỗ chân lông trên mặt, nhờ có dưỡng chất saponin chống lão hóa hiệu quả và làm mịn da.<br>
                Pha 1/2 cốc nhỏ yến mạch với 1/2 chén nước nóng, 1/4 chén mật ong, quấy đều, để nguội và thoa đắp một lớp mỏng, đều lên mặt. Để mặt nạ 10 phút rồi rửa sạch bằng nước mát.</p>
            ',
            'quantity' => 100,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/yen-mach-1-1671988415306.jpg?v=1671988427003',
            'status' => 1,
            ],
            [
            'product_name' => 'Thanh gạo lứt siêu hạt',
            'category_id' => 7,
            'price' => 89000,
            'description' => '<p>Việt Nam cũng có món bánh ăn kiêng, ăn vặt healthy siêu ngon là thanh gạo lứt chứ đâu phải chỉ nước ngoài...<br>
                Gạo lứt của nước mình tốt thì khỏi bàn rồi, bao nhiêu công năng, cho bao nhiêu đối tượng chắc mọi người cũng biết, đặc biệt cho người tiểu đường, người ăn kiêng.<br>
                Nay Tây Nguyên Food làm một phiên bản mới hơn, tiện lợi hơn, ngon hơn mà vẫn đảm bảo Healthy, nhiều dinh dưỡng là Thanh Gạo lứt chà bông và thanh gạo lứt mix siêu hạt rong biển<br>
                Thanh Gạo lứt chà bông ăn kiêng của Tây Nguyên Food không dừng lại ở việc dùng những nguyên liệu tốt, healthy cho sức khoẻ, mà kết hợp nhiều giá trị dinh dưỡng thiết yếu khác và tạo cảm giác ngon miệng.<br>
                Thành phần:<br>
                - Gạo lứt<br>
                - Hạt: hạt hạnh nhân, hạt macca, hạt điều, hạt bí xanh, hạt chia, hạt hướng dương và nho khô<br>
                - Mạch nha<br>
                - Chà bông hoặc rong biển<br>
                - KHÔNG ĐƯỜNG<br>
            <p>',
                'quantity' => 100,
                'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/thanh-lut-cha-bong-1-1671987620968.jpg?v=1671987643813',
                'status' => 1,
                ],
                [
                'product_name' => 'Đường Ăn Kiêng Mivolis 1200V Xuất Xứ Đức',
                'category_id' => 8,
                'price' => 96000,
                'description' => '
            <p>ĐƯỜNG ĂN KIÊNG MIVOLIS 1200 viên</p>
            <p>Xuất xứ: Đức</p>
            <p>Hạn dùng: 2 năm từ ngày sản xuất</p>
            <p>Viên đường ăn kiêng Mivolis Substoff có vị ngọt đậm đà như hương vị tự nhiên, đảm bảo được khẩu vị và cảm quan của người sử dụng. Hơn thế, nó chỉ chứa một lượng calo rất thấp. Vì vậy, bạn không cần quá lo lắng về vấn đề tích tụ mỡ thừa cũng như tăng đường huyết sau khi sử dụng.</p>
            <p>Mivolis Substoff rất nịnh đồ uống, đặc biệt là cafe và cacao. Sản phẩm có thể được sử dụng để làm ngọt đồ uống nóng và lạnh.</p>
            <p>1 viên đường ăn kiêng = 1 thìa cà phê đường (khoảng 4,4 g)</p>
            <p>1200 viên = khoảng 5,28 kg đường</p>',
            'quantity' => 100,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/duong-mivolis-1-1671990381462.jpg?v=1671990386537',
            'status' => 1,
            ],
            [
            'product_name' => 'Đường ăn kiêng Splenda cho người bệnh tiểu đường, ăn kiêng, eat clean',
            'category_id' => 8,
            'price' => 59000,
            'description' => '<p>ĐƯỜNG SPLENDA Xuất xứ mỹ</p>
            <p>50 gói tách lẻ từ hộp 1.200 gói nên mua lẻ sẽ ko có hộp nhé chỉ đóng túi zip như hình</p>
            <p>Thành phần: 100% đường splenda</p>
            <p>Xuất xứ: Mỹ</p>
            <p>Hạn dùng: 2 năm từ ngày sản xuất&nbsp;trên bao bì</p>
            <p>Đường ăn kiêng Splenda dành cho người tiểu đường, ăn kiêng, Ăn Eat Clean, béo phì và chị em ăn theo chế độ Das, low carb, Keto....Chị em mang thai muốn kiêng do tiểu đường thai kỳ cũng nên tham khảo nhé ạ.</p>
            <p>Xuất xứ: Mỹ (USA)</p>
            <p>Ai đang muốn giảm cân hay mắc bệnh tiểu đường thì đường ăn kiêng là 1 trong những thứ ko thể thiếu trong tủ đồ gia vị của mình ạ.</p>
            <p>Với hàm lượng dinh dưỡng và đường là 0% thì chúng ta thoải mái ăn mà ko sợ bị nhiễm đường vào cơ thể. Đường ăn kiêng ko chứa năng lượng và giảm tới 90% calor khi sử dụng.</p>
            <p>Đường ăn kiêng có thể dùng để nấu các món ăn thay đường kính hoặc mì chính, làm các món bánh yêu thích, hay các loại đồ uống.</p>
            <p>Nó ngọt giống như đường kính, chỉ cần 1 lượng nhỏ đã thay đổi hoàn toàn vị giác của mình</p>
            <p>Gói nhỏ tiện dụng 1g/ gói.</p>',
            'quantity' => 100,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/duong-splenda-1-1671990209477.jpg?v=1671990252810',
            'status' => 1,
            ],


            [
            'product_name' => 'Dầu xịt ăn kiêng Olive Oil Member\'s Mark - Net WT 7 OZ (198g)',
            'category_id' => 8,
            'price' => 196000,
            'description' => '<p>Dầu xịt ăn kiêng Olive Oil Member\'s Mark - Net WT 7 OZ (198g) (khoảng 700 lần xịt)</p>
                        <p>SẢN PHẨM ĐẠT ĐỦ TIÊU CHUẨN FDI TRONG NUTRIFACT ALL 0<br>
                            Thành phần :<br>
                            0 kcal<br>
                            0 cholesterol<br>
                            0 fats<br>
                            0 sodium</p>
                        <p>☘ Xuất sứ : Mỹ</p>',
            'quantity' => 100,
            'image' => 'https://bizweb.dktcdn.net/thumb/medium/100/458/914/products/dau-olive-1-1671989974879.jpg?v=1671989982353',
            'status' => 1,
            ]
        ];

        foreach ($data as $key => $value) {
            Product::create($value);
        }
    }
}
