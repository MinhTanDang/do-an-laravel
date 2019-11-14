<?php

use Illuminate\Database\Seeder;

class CauHoiSeeder extends Seeder
{
    public function run(){
        DB::table('cau_hoi')->insert([
            //Thể thao
            ['noi_dung' => 'Giải Grand Slam đầu tiên trong năm là giải nào?', 'linh_vuc_id' => '1', 'phuong_an_a' => 'Austrlia mở rộng', 'phuong_an_b' => 'Wimbledon', 'phuong_an_c' => 'Roland Garos', 'phuong_an_d' => 'Mỹ mở rộng', 'dap_an' => 'A'],
            ['noi_dung' => 'AFC Asian Cup 2011 được tổ chức tại quốc gia nào?', 'linh_vuc_id' => '1', 'phuong_an_a' => 'Qatar', 'phuong_an_b' => 'Hàn Quốc', 'phuong_an_c' => 'Nhật Bản', 'phuong_an_d' => 'Iraq', 'dap_an' => 'A'],
            ['noi_dung' => 'Đội nào lên ngôi vô địch AFC Asian Cup 2011 tổ chức tại Qatar?', 'linh_vuc_id' => '1', 'phuong_an_a' => 'Nhật Bản', 'phuong_an_b' => 'Australia', 'phuong_an_c' => 'Hàn Quốc', 'phuong_an_d' => 'Uzbekistan', 'dap_an' => 'A'],
            ['noi_dung' => 'Việt Nam lần đầu tiên vô địch AFF Cup là vào năm nào?', 'linh_vuc_id' => '1', 'phuong_an_a' => '2004', 'phuong_an_b' => '2006', 'phuong_an_c' => '2008', 'phuong_an_d' => '2010', 'dap_an' => 'A'],
            ['noi_dung' => 'Giải đua xe đạp vòng quanh nước Pháp năm 2001 có mấy chặng đua?', 'linh_vuc_id' => '1', 'phuong_an_a' => '16', 'phuong_an_b' => '21', 'phuong_an_c' => '26', 'phuong_an_d' => '31', 'dap_an' => 'A'],
            ['noi_dung' => 'Đội tuyển bóng đá nào xếp thứ ba tại World Cup 2010?', 'linh_vuc_id' => '1', 'phuong_an_a' => 'Tây Ban Nha', 'phuong_an_b' => 'Hà Lan', 'phuong_an_c' => 'Đức', 'phuong_an_d' => 'Uruguay', 'dap_an' => 'A'],
            ['noi_dung' => 'Trong môn quần vợt thì một năm có bao nhiêu giải Grand Slam được tổ chức?', 'linh_vuc_id' => '1', 'phuong_an_a' => '3', 'phuong_an_b' => '4', 'phuong_an_c' => '5', 'phuong_an_d' => '6', 'dap_an' => 'A'],
            ['noi_dung' => 'Nước nào là nước chủ nhà tại Copa America 2011?', 'linh_vuc_id' => '1', 'phuong_an_a' => 'Argentina', 'phuong_an_b' => 'Boliviar', 'phuong_an_c' => 'Venezuela', 'phuong_an_d' => 'Paraguay', 'dap_an' => 'A'],
            //Lịch sử
            ['noi_dung' => 'Đại Ngu là quốc hiệu của triều đại nào?', 'linh_vuc_id' => '2', 'phuong_an_a' => 'Triều Ngô', 'phuong_an_b' => 'Triều Hồ', 'phuong_an_c' => 'Các chúa Nguyễn', 'phuong_an_d' => 'Nhà Tây Sơn', 'dap_an' => 'A'],
            ['noi_dung' => 'Các vua Hùng đặt quốc hiệu nước ta là gì?', 'linh_vuc_id' => '2', 'phuong_an_a' => 'Văn Lang', 'phuong_an_b' => 'Âu Lạc', 'phuong_an_c' => 'Vạn Xuân', 'phuong_an_d' => 'Đại Việt', 'dap_an' => 'A'],
            ['noi_dung' => 'An Dương Vương đặt quốc hiệu nước ta là gì?', 'linh_vuc_id' => '2', 'phuong_an_a' => 'Âu Lạc', 'phuong_an_b' => 'Vạn Xuân', 'phuong_an_c' => 'Đại Cồ Việt', 'phuong_an_d' => 'Đại Việt', 'dap_an' => 'A'],
            ['noi_dung' => 'Thành cổ Sơn Tây do vị vua nào xây dựng nên vào năm 1822?', 'linh_vuc_id' => '2', 'phuong_an_a' => 'Gia Long', 'phuong_an_b' => 'Minh Mạng', 'phuong_an_c' => 'Thiệu Trị', 'phuong_an_d' => 'Tự Đức', 'dap_an' => 'A'],
            ['noi_dung' => 'Vạn Thắng Vương là ai ?', 'linh_vuc_id' => '2', 'phuong_an_a' => 'Đinh Bộ Lĩnh', 'phuong_an_b' => 'Lê Hoàn', 'phuong_an_c' => 'Lê Lợi', 'phuong_an_d' => 'Nguyễn Huệ', 'dap_an' => 'A'],
            ['noi_dung' => 'Sau khi chiến thắng quân Nam Hán vào năm 938, Ngô Quyền đã đóng đô ở đâu?', 'linh_vuc_id' => '2', 'phuong_an_a' => 'Hoa Lư', 'phuong_an_b' => 'Đại La', 'phuong_an_c' => 'Cổ Loa', 'phuong_an_d' => 'Phú Xuân', 'dap_an' => 'A'],
            ['noi_dung' => 'Hổ Quyền dưới thời nhà Nguyễn là một đấu trường của những cuộc tử chiến giữa hổ và loài động vật nào?', 'linh_vuc_id' => '2', 'phuong_an_a' => 'Bò tót', 'phuong_an_b' => 'Báo', 'phuong_an_c' => 'Voi', 'phuong_an_d' => 'Chó', 'dap_an' => 'A'],
            ['noi_dung' => 'Vị tướng nào dưới thời Hai Bà Trưng là ông tổ của lò vật Mai Động?', 'linh_vuc_id' => '2', 'phuong_an_a' => 'Ông Đông Bảng', 'phuong_an_b' => 'Ông Đồng', 'phuong_an_c' => 'Tam Trinh', 'phuong_an_d' => 'Đào Kỳ', 'dap_an' => 'A'],
            ['noi_dung' => 'Tập “Dư địa chí” được Nguyễn Trãi soạn dưới triều vua nào?', 'linh_vuc_id' => '2', 'phuong_an_a' => 'Lê Thái Tổ', 'phuong_an_b' => 'Lê Thái Tông', 'phuong_an_c' => 'Lê Thánh Tông', 'phuong_an_d' => 'Lê Hiến Tông', 'dap_an' => 'A'],
            //Âm nhạc - Phim
            ['noi_dung' => 'The ASEAN WAY-ca khúc chính thức của ASEAN là sáng tác của nhạc sĩ người nước nào?', 'linh_vuc_id' => '3', 'phuong_an_a' => 'Thái Lan', 'phuong_an_b' => 'Việt Nam', 'phuong_an_c' => 'Singapore', 'phuong_an_d' => 'Malaysia', 'dap_an' => 'A'],
            ['noi_dung' => 'Bộ phim “The Social Network” về mạng xã hội nào đã đạt giải Quả cầu vàng 2011?', 'linh_vuc_id' => '3', 'phuong_an_a' => 'Facebook', 'phuong_an_b' => 'Twitter', 'phuong_an_c' => 'Yahoo Plus', 'phuong_an_d' => 'Opera', 'dap_an' => 'A'],
            ['noi_dung' => 'Lã Thanh Huyền đã tham gia bộ phim nào sau đây?', 'linh_vuc_id' => '3', 'phuong_an_a' => 'Nhà có nhiều cửa sổ', 'phuong_an_b' => 'Đẹp từng centimet', 'phuong_an_c' => 'Blog nàng dâu', 'phuong_an_d' => 'Ngôi nhà hạnh phúc', 'dap_an' => 'A'],
            ['noi_dung' => 'Tác phẩm điện ảnh "Thập diện mai phục3 là của đạo diễn nào?', 'linh_vuc_id' => '3', 'phuong_an_a' => 'Lý An', 'phuong_an_b' => 'Dương Khiết', 'phuong_an_c' => 'Trương Nghệ Mưu', 'phuong_an_d' => 'Ngô Vũ Sâm', 'dap_an' => 'A'],
            ['noi_dung' => 'Trong nhạc phẩm "Hoa sữa" nhạc sĩ Hồng Đăng còn nhắc tới loại cây nào khác?', 'linh_vuc_id' => '3', 'phuong_an_a' => 'Bàng', 'phuong_an_b' => 'Phượng', 'phuong_an_c' => 'Phi lao', 'phuong_an_d' => 'Quất', 'dap_an' => 'A'],
            ['noi_dung' => 'Ai đã lên ngôi Thần tượng âm nhạc Việt Nam 2010?', 'linh_vuc_id' => '3', 'phuong_an_a' => 'Trần Lân Nhã', 'phuong_an_b' => 'Trần Nguyễn Uyên Linh', 'phuong_an_c' => 'Văn Mai Hương', 'phuong_an_d' => 'Lều Phương Anh', 'dap_an' => 'A'],
            ['noi_dung' => 'Giải thưởng Emmy là giải thưởng cao quý của thể loại giải trí nào?', 'linh_vuc_id' => '3', 'phuong_an_a' => 'Truyền hình', 'phuong_an_b' => 'Điện ảnh', 'phuong_an_c' => 'Âm nhạc', 'phuong_an_d' => 'Thể thao', 'dap_an' => 'A'],
            ['noi_dung' => 'Bộ phim "W"của đạo diễn Oliver Stone viết về ai?', 'linh_vuc_id' => '3', 'phuong_an_a' => 'Geroge Walker Bush', 'phuong_an_b' => 'Winston Churchil', 'phuong_an_c' => 'William Shakespear', 'phuong_an_d' => 'Walt Disney', 'dap_an' => 'A'],
            //Địa lý
            ['noi_dung' => 'Sông Bến Hải và sông Thạch Hãn nằm ở tỉnh nào?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Quảng Bình', 'phuong_an_b' => 'Quảng Ninh', 'phuong_an_c' => 'Quảng Trị', 'phuong_an_d' => 'Quảng Ngãi', 'dap_an' => 'A'],
            ['noi_dung' => 'Trong các cây cầu sau, cầu nào là cầu xoay?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Cầu Thanh Trì', 'phuong_an_b' => 'Cầu Thị Nại', 'phuong_an_c' => 'Cầu Sông Hàn', 'phuong_an_d' => 'Cầu Cần Thơ', 'dap_an' => 'A'],
            ['noi_dung' => 'Nước nào ở khu vực Đông Nam Á không có địa giới với bất kỳ nước khác?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Philippines', 'phuong_an_b' => 'Malaysia', 'phuong_an_c' => 'Lào', 'phuong_an_d' => 'Thái Lan', 'dap_an' => 'A'],
            ['noi_dung' => 'Thung lũng nổi tiếng ở Mỹ với ngành công nghệ thông tin được đặt tên theo nguyên tố nào?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Sắt', 'phuong_an_b' => 'Silic', 'phuong_an_c' => 'Asen', 'phuong_an_d' => 'Uran', 'dap_an' => 'A'],
            ['noi_dung' => 'Tổ chức thương mại thế giới có trụ sở đặt tại quốc gia nào ?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Bỉ', 'phuong_an_b' => 'Thuỵ Sỹ', 'phuong_an_c' => 'Hà Lan', 'phuong_an_d' => 'Đức', 'dap_an' => 'A'],
            ['noi_dung' => 'Eo biển nào sau đây là nơi phân cách giữa châu Âu và châu Phi?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Bosphorus', 'phuong_an_b' => 'Bering', 'phuong_an_c' => 'Gibraltar', 'phuong_an_d' => 'Malacca', 'dap_an' => 'A'],
            ['noi_dung' => 'Thành phố nào của Nhật Bản bị tàn phá nặng nề nhất sau thảm hoạ động đất và sóng thần ngày 11/3/2011?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Sendai', 'phuong_an_b' => 'Chiba', 'phuong_an_c' => 'Kobe', 'phuong_an_d' => 'Hiroshima', 'dap_an' => 'A'],
            ['noi_dung' => 'Địa danh nào còn thiếu trong câu ca dao : ....có núi Vọng Phu/Có đầm Thị Nại có cù lao Xanh"?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Phú Yên', 'phuong_an_b' => 'Khánh Hoà', 'phuong_an_c' => 'Long An', 'phuong_an_d' => 'Bình Định', 'dap_an' => 'A'],
            ['noi_dung' => 'Bối cảnh của câu chuyện tỉnh Romeo và Juliet là thành phố nào của nước Ý?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Venice', 'phuong_an_b' => 'Milan', 'phuong_an_c' => 'Rome', 'phuong_an_d' => 'Verona', 'dap_an' => 'A'],
            ['noi_dung' => 'Ngân hàng trung ương châu Âu (ECB) có trụ sở đặt tại thành phố nào?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Brussel', 'phuong_an_b' => 'Frankurt', 'phuong_an_c' => 'Paris', 'phuong_an_d' => 'Geneva', 'dap_an' => 'A'],
            ['noi_dung' => 'Địa danh "Cần Giuộc" trong bài "Văn Tế nghĩa Sĩ Cần Giuộc" hiện nay nằm ở tỉnh nào ?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Long An', 'phuong_an_b' => 'Tiền Giang', 'phuong_an_c' => 'An Giang', 'phuong_an_d' => 'Cần Thơ', 'dap_an' => 'A'],
            ['noi_dung' => 'Bộ phận đất nổi, nhỏ hơn lục địa, xung quanh có biển và đại dương bao quanh gọi là gì ?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Đảo', 'phuong_an_b' => 'Quần đảo', 'phuong_an_c' => 'Hải đảo', 'phuong_an_d' => 'Quốc đảo', 'dap_an' => 'A'],
            ['noi_dung' => 'Cầu Phú Mỹ-cây cầu đẹp và hiện đại nhất thành phố Hồ Chí Minh có hình dáng của chữ cái nào?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'T', 'phuong_an_b' => 'H', 'phuong_an_c' => 'L', 'phuong_an_d' => 'M', 'dap_an' => 'A'],
            ['noi_dung' => 'Quốc gia nào sau đây có chung đường biên giới cả trên đất liên và trên biển với Việt Nam?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Thái Lan', 'phuong_an_b' => 'Lào', 'phuong_an_c' => 'Trung Quốc', 'phuong_an_d' => 'Indonesia', 'dap_an' => 'A'],
            ['noi_dung' => 'Trụ sở của Ban thư ký ASEAN được đặt tại quốc gia nào sau đây?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Thái Lan', 'phuong_an_b' => 'Singapore', 'phuong_an_c' => 'Malaysia', 'phuong_an_d' => 'Indonesia', 'dap_an' => 'A'],
            ['noi_dung' => 'Một hòn đảo của tỉnh Quảng Ngãi nơi được mệnh danh là "Vương quốc hành tỏi". Đó là đảo nào?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Đảo Lý Sơn', 'phuong_an_b' => 'Đảo Cồn Cỏ', 'phuong_an_c' => 'Đảo Thổ Chu', 'phuong_an_d' => 'Đảo Phú Quốc', 'dap_an' => 'A'],
            ['noi_dung' => 'Châu lục nào tiếp giáp với cả Đại Tây Dương và Ấn Độ Dương?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Châu Á', 'phuong_an_b' => 'Châu Phi', 'phuong_an_c' => 'Châu Âu', 'phuong_an_d' => 'Châu Mỹ', 'dap_an' => 'A'],
            //Văn học
            ['noi_dung' => '"Điêu tàn" là tập thơ đầu tiên của nhà thơ nào?', 'linh_vuc_id' => '5', 'phuong_an_a' => 'Anh Thơ', 'phuong_an_b' => 'Thế Lữ', 'phuong_an_c' => 'Bích Khê', 'phuong_an_d' => 'Chế Lan Viên', 'dap_an' => 'A'],
            ['noi_dung' => 'Điền từ còn thiếu trong câu thành ngữ:’”…. Không cứu được …gần”.', 'linh_vuc_id' => '5', 'phuong_an_a' => 'Lính-Tướng', 'phuong_an_b' => 'Chồng-Vợ', 'phuong_an_c' => 'Nước-Lửa', 'phuong_an_d' => 'Chó-Mèo', 'dap_an' => 'A'],
            ['noi_dung' => 'Truyện “Vợ chồng A Phủ” trong tập truyện Tây Bắc của nhà văn Tô Hoài viết về người dân tộc nào?', 'linh_vuc_id' => '5', 'phuong_an_a' => 'Vân Kiều', 'phuong_an_b' => 'Thái', 'phuong_an_c' => 'H’Mông', 'phuong_an_d' => 'Tày', 'dap_an' => 'A'],
            ['noi_dung' => 'Tác phẩm "Thuỷ hử" của Thi Nại Am diễn ra vào triều đại nào của Trung Quốc?', 'linh_vuc_id' => '5', 'phuong_an_a' => 'Triều Tống', 'phuong_an_b' => 'Triều Nguyên', 'phuong_an_c' => 'Triều Minh', 'phuong_an_d' => 'Triều Thanh', 'dap_an' => 'A'],
            ['noi_dung' => 'Nhà thơ Chế Lan Viên (Phan Ngọc Hoan: tên thật) còn có bút danh khác mang tên dòng sông nào?', 'linh_vuc_id' => '5', 'phuong_an_a' => 'Nhật Lệ', 'phuong_an_b' => 'Thạch Hãn', 'phuong_an_c' => 'Thu Bồn', 'phuong_an_d' => 'Bến Hải', 'dap_an' => 'A'],
            ['noi_dung' => 'Chuyện kể đêm Noel, Dế mèn trong lò sưởi là những tác phẩm của nhà văn nào sau đây?', 'linh_vuc_id' => '5', 'phuong_an_a' => 'Mark Twain', 'phuong_an_b' => 'Charles Dicken', 'phuong_an_c' => 'Adersen', 'phuong_an_d' => 'Jean de La Fontaine', 'dap_an' => 'A'],
            ['noi_dung' => 'Có câu tục ngữ"...hết bị đòn,...còn mất vợ"?', 'linh_vuc_id' => '5', 'phuong_an_a' => 'Ăn', 'phuong_an_b' => 'Uống', 'phuong_an_c' => 'Ở', 'phuong_an_d' => 'Mặc', 'dap_an' => 'A'],
            ['noi_dung' => 'Ngọn núi nào được nhắc tới trong bài thơ "Quê mẹ" của Tố Hữu?', 'linh_vuc_id' => '5', 'phuong_an_a' => 'Thiên Thai', 'phuong_an_b' => 'Ngự Bình', 'phuong_an_c' => 'Non Nước', 'phuong_an_d' => 'Hồng Lĩnh', 'dap_an' => 'A'],
            //Y học
            ['noi_dung' => 'Cúm và sởi là những bệnh lây truyền qua đường nào?', 'linh_vuc_id' => '6', 'phuong_an_a' => 'Tiêu hoá', 'phuong_an_b' => 'Hô hấp', 'phuong_an_c' => 'Sinh dục', 'phuong_an_d' => 'Máu', 'dap_an' => 'A'],
            ['noi_dung' => 'Virus sởi lây truyền qua đường nào?', 'linh_vuc_id' => '6', 'phuong_an_a' => 'Tiêu hoá', 'phuong_an_b' => 'Hô hấp', 'phuong_an_c' => 'Máu', 'phuong_an_d' => 'Sinh dục', 'dap_an' => 'A'],
            ['noi_dung' => 'Loại vitamin nào mà cơ thể con người có thể tự tổng hợp được nhờ ánh sáng Mặt Trời?', 'linh_vuc_id' => '6', 'phuong_an_a' => 'Vitamin A', 'phuong_an_b' => 'Vitamin D', 'phuong_an_c' => 'Vitamin E', 'phuong_an_d' => 'Vitamin K', 'dap_an' => 'A'],
            ['noi_dung' => 'Từ nào sau đây chỉ tế bào máu?', 'linh_vuc_id' => '6', 'phuong_an_a' => 'Huyết đồ', 'phuong_an_b' => 'Huyết tương', 'phuong_an_c' => 'Huyết thanh', 'phuong_an_d' => 'Huyết cầu', 'dap_an' => 'A'],
            ['noi_dung' => 'Đâu không phải là một loại tế bào máu?', 'linh_vuc_id' => '6', 'phuong_an_a' => 'Khúc côn cầu', 'phuong_an_b' => 'Hồng cầu', 'phuong_an_c' => 'Tiểu cầu', 'phuong_an_d' => 'Bạch cầu', 'dap_an' => 'A'],
            ['noi_dung' => 'Bệnh nào sau đây không phải bệnh truyền nhiễm?', 'linh_vuc_id' => '6', 'phuong_an_a' => 'Sởi', 'phuong_an_b' => 'Quai bị', 'phuong_an_c' => 'Đậu mùa', 'phuong_an_d' => 'Tiểu đường', 'dap_an' => 'A'],
            //Văn hóa - Sự kiện
            ['noi_dung' => 'Sự kiện giờ Trái Đất, sáng kiến của WWF được tổ chức lần đầu tiên vào năm 2007 tại thành phố nào?', 'linh_vuc_id' => '7', 'phuong_an_a' => 'Sydney', 'phuong_an_b' => 'Tokyo', 'phuong_an_c' => 'Bắc Kinh', 'phuong_an_d' => 'Singapore', 'dap_an' => 'A'],
            ['noi_dung' => 'Phú Yên-tỉnh đăng cai Năm du lịch quốc gia 2011 ở khu vực nào?', 'linh_vuc_id' => '7', 'phuong_an_a' => 'Nam Trung Bộ', 'phuong_an_b' => 'Tây Nguyên', 'phuong_an_c' => 'Đông Bắc Bộ', 'phuong_an_d' => 'Tây Nam Bộ', 'dap_an' => 'A'],
            ['noi_dung' => 'Lễ Hội Gióng chính thức được nhận bằng Di sản văn hoá thế giới vào năm nào?', 'linh_vuc_id' => '7', 'phuong_an_a' => '2008', 'phuong_an_b' => '2009', 'phuong_an_c' => '2010', 'phuong_an_d' => '2011', 'dap_an' => 'A'],
            ['noi_dung' => 'Việt Nam đã đăng cai cuộc thi sắc đẹp nào trong năm 2010?', 'linh_vuc_id' => '7', 'phuong_an_a' => 'Hoa hậu thế giới', 'phuong_an_b' => 'Hoa hậu Trái Đất', 'phuong_an_c' => 'Hoa hậu hoàn vũ', 'phuong_an_d' => 'Hoa hậu quốc tế', 'dap_an' => 'A'],
            ['noi_dung' => 'Loài hoa nào được chọn là Quốc hoa của Việt Nam?', 'linh_vuc_id' => '7', 'phuong_an_a' => 'Hoa sen', 'phuong_an_b' => 'Hoa mai', 'phuong_an_c' => 'Hoa đào', 'phuong_an_d' => 'Hoa hồng', 'dap_an' => 'A'],
            ['noi_dung' => 'Bánh pía là đặc sản có nguồn gốc từ tỉnh nào?', 'linh_vuc_id' => '7', 'phuong_an_a' => 'Bến Tre', 'phuong_an_b' => 'Sóc Trăng', 'phuong_an_c' => 'Bạc Liêu', 'phuong_an_d' => 'Hậu Giang', 'dap_an' => 'A'],
            //Khoa học tự nhiên
            ['noi_dung' => 'Trong các hàm số lượng giác cơ bản, hàm số nào là hàm số chẵn?', 'linh_vuc_id' => '8', 'phuong_an_a' => 'y=sinx', 'phuong_an_b' => 'y=cosx', 'phuong_an_c' => 'y-cotgx', 'phuong_an_d' => 'y=tgx', 'dap_an' => 'A'],
            ['noi_dung' => 'Tập hợp các số thực được ký hiệu bằng chữ cái nào?', 'linh_vuc_id' => '8', 'phuong_an_a' => 'N (Số tự nhiên)', 'phuong_an_b' => 'Z (Số nguyên)', 'phuong_an_c' => 'Q (Số hữu tỷ)', 'phuong_an_d' => 'R (Số thực)', 'dap_an' => 'A'],
            ['noi_dung' => 'Khí nào chiếm 80% thành phần không khí?', 'linh_vuc_id' => '8', 'phuong_an_a' => 'N2', 'phuong_an_b' => 'O2', 'phuong_an_c' => 'H2', 'phuong_an_d' => 'Cl2', 'dap_an' => 'A'],
            ['noi_dung' => 'Vận tốc của sóng âm truyền trong môi trường nào lớn nhất?', 'linh_vuc_id' => '8', 'phuong_an_a' => 'Chân không', 'phuong_an_b' => 'Chất khí', 'phuong_an_c' => 'Chất rắn', 'phuong_an_d' => 'Chất lỏng', 'dap_an' => 'A'],
            ['noi_dung' => 'Côn trùng (sâu bọ) là lớp động vật thuộc ngành động vật nào?', 'linh_vuc_id' => '8', 'phuong_an_a' => 'Động vật nguyên sinh', 'phuong_an_b' => 'Ruột khoang', 'phuong_an_c' => 'Thân mềm', 'phuong_an_d' => 'Chân khớp', 'dap_an' => 'A'],
            ['noi_dung' => 'Công thức hoá học của Oxi già là gì ?', 'linh_vuc_id' => '8', 'phuong_an_a' => 'O2', 'phuong_an_b' => 'O3', 'phuong_an_c' => 'H2O', 'phuong_an_d' => 'H2O2', 'dap_an' => 'A'],
            ['noi_dung' => 'Khí độc Sarin có chứa thành phần nguyên tố Halogen nào?', 'linh_vuc_id' => '8', 'phuong_an_a' => 'Flo', 'phuong_an_b' => 'Clo', 'phuong_an_c' => 'Brom', 'phuong_an_d' => 'Iot', 'dap_an' => 'A'],
            ['noi_dung' => 'Đơn phân của protein là :', 'linh_vuc_id' => '8', 'phuong_an_a' => 'Glucose', 'phuong_an_b' => 'Axit amin', 'phuong_an_c' => 'Axit béo', 'phuong_an_d' => 'Nuclêotit', 'dap_an' => 'A'],
            ['noi_dung' => 'Ure là loại phân nào?', 'linh_vuc_id' => '8', 'phuong_an_a' => 'Phân đạm', 'phuong_an_b' => 'Phân lân', 'phuong_an_c' => 'Phân kali', 'phuong_an_d' => 'Phân NPK', 'dap_an' => 'A']
        ]);
    }
}
