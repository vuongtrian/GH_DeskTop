-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 07, 2020 lúc 02:35 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hoaqua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `img`) VALUES
(1, 'rau quả', 'category-1.jpg'),
(2, 'Trái cây', 'category-2.jpg'),
(3, 'Sinh Tố', 'category-3.jpg'),
(4, 'Các loại hạt', 'category-4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `city`, `zip`, `phone`, `email`, `time`, `status`) VALUES
(12, 'Toan toan', '1170 Quang Trung,Q Go Vap, TPhCm', 'TP HCM', 123123, 12412412, 'levanluyen1939@gmail.com', '2020-03-07 09:22:49', -1),
(14, 'Tien', '1170 Quang Trung,Q Go Vap, TPhCm', 'TP HCM', 123123, 123213, 'abc@gmail.com', '2020-03-09 10:23:15', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `customer_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`customer_id`, `product_id`, `quantity`) VALUES
(12, 3, 1),
(14, 3, 1),
(14, 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` float(100,1) NOT NULL,
  `buy` int(255) NOT NULL,
  `cateid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `detail`, `img`, `weight`, `buy`, `cateid`) VALUES
(1, 'Ớt chuông', 70000, 'Ớt chuông được trồng tại đà lạt và được nhiều người sử dụng để chế biến thức ăn', 'product-1.jpg', 2.0, 1415, 1),
(2, 'Dâu Tây', 60000, 'Dâu Tây được thu hoạch ở Đà Lạt thành phố Sương mù nơi khí hậu thích hợp nhất để trồng dâu tây', 'product-2.jpg', 1.0, 12223, 2),
(3, 'Bắp Cải Tím', 30000, 'Bắp cải tím: tên khoa học là Brassica oleracea var capitata ruba là cây bắp cải có màu tím. Xuất xứ từ Địa Trung Hải, hiện nay được trồng rộng rãi khắp thế giới, thích hợp với khí hậu ôn đới và tại Việt Nam bắp cải tím được trồng nhiều ở Đà Lạt.\r\n', 'product-4.jpg', 1.0, 6123, 1),
(4, 'Cà chua bi', 50000, 'Cà chua bi rất giàu vitamin C, vitamin A và canxi. Những lợi ích sức khỏe của chúng là chất chống oxy hóa đáng chú ý và phòng chống ung thư. Theo WHFoods, trong một nghiên cứu 14 tháng,trên Tạp chí của Viện Ung thư Quốc gia tìm thấy cà chua đóng một vai trò quan trọng trong việc phòng ngừa ung thư tuyến tiền liệt. Cà chua chứa lycopene, chất có liên quan đến công tác phòng chống bệnh tim. Nó cũng có chức năng như một chất chống oxy hóa giúp bảo vệ tế bào.', 'product-5.jpg', 0.3, 1234, 1),
(5, 'Cà rốt', 25000, 'Cà rốt là loại cây có củ, củ to ở phần đầu và nhọn ở phần đuôi, củ cà rốt thường có màu cam hoặc đỏ, phẩn ăn được thường gọi là củ nhưng thực chất đó là phần rễ của cà rốt.', 'product-7.jpg', 0.4, 432, 1),
(6, 'Táo Xanh Hữu Cơ Granny Smith', 170000, 'Táo là một thức ăn tương đối toàn diện, thực sự giúp giữ cơ thể mạnh mẽ và lành mạnh đặc biệt cho thể lực. Táo đặc biệt giúp cho làn da sáng bóng và săn chắc, cũng như một mái tóc óng mượt và khỏe mạnh. <br>Táo chứa pectin, một loại xơ đặc biệt giúp chuyển hóa thức ăn nhanh hơn khi vào cơ thể và giúp cho cơ thể hấp thu tối đa các chất bổ dưỡng.', 'product-10.jpg', 1.0, 989, 2),
(11, 'Ớt hiểm', 12000, 'phân phối dựa trên hoàn toàn nguồn ớt hiểm hữu cơ, nói không hóa chất độc hại, không phân bón hóa học, thuốc trừ sâu, thuốc biến đổi gen hay kích thích tăng trưởng,…không những đảm bảo tiêu chuẩn bảo vệ sực khỏe của người sử dụng mà còn giữ nguyên vị ngon, cay xé lưỡi, làm món ăn thêm hấp dẫn', 'product-12.jpg', 0.1, 0, 1),
(12, 'Tỏi tép hữu cơ', 190000, 'Trang trại rộng hơn 50ha, trồng măng tây là chủ yếu. Ở đây, 1 năm nông dân trồng măng tây và đan xen 2 vụ đậu phộng và 1 vụ', 'product-11.jpg', 0.5, 0, 1),
(13, 'Bí Nhật Hữu Cơ', 45000, '• Bí đỏ là nguồn cung cấp dồi dào vitamin A, đóng vai trò quan trọng cho thị giác, tăng trưởng xương và sự sinh sản, điều hòa hệ miễn dịch và bảo vệ cho da.', 'bi-nhat-huu-co-500x500.jpg', 0.5, 0, 1),
(14, 'Cam Sành Hữu Cơ', 75000, 'Cam sành hữu cơ là loại cam quen thuộc của vùng nhiệt đới Việt Nam. Quả cam sành rất dễ nhận ra nhờ lớp vỏ dày, sần sùi giống bề mặt mảnh sành, và thường có màu lục nhạt (khi chín có sắc cam), các múi thịt có màu cam. Cam sành tại Organic được chọn lựa kỹ càng từ chính nông trại của Organic được chứng nhận USDA, Organic EU, đảm bảo sạch, không hóa chất, không thuốc tăng trưởng, các chất làm biến đổi gen. Có nhiều size theo cân nặng, đáp ứng đủ các nhu cầu của khách hàng,… Cam trái to, mọng nước, vị ngọt chua thanh mát,…', 'cam-sanh-huu-co-500x500.jpg', 1.0, 0, 2),
(15, 'Hạt Lanh Hữu Cơ Arrowhead', 138000, ': Giống như tất cả các loại hạt, hạt lanh có chứa chất béo. Hạt lanh là một nguồn tuyệt vời của axit béo omega-3, những chất béo rất tốt cho tim. Hạt lanh giảm cholesterol xấu, là 1 trong những thực phẩm tốt nhất cho phái nữ, cho phụ nữ mang thai, giúp ổn định huyết áp, dễ ngủ, tốt cho đường ruột…', 'hat-lanh-huu-co-500x500.jpg', 0.4, 0, 4),
(16, 'Hạt Kê Vàng Hữu Cơ HoLo', 195000, '- Lợi tiểu, ngừa sỏi thận, đái tháo đường và tiêu chảy. - Lương thực tốt cho người đau dạ dày và mắc chứng khó tiêu.  - Món ăn tốt cho người bị thấp khớp, làm dịu cơn đau do sinh đẻ', 'Hat-ke-vang-huu-co-HoLo-1kg-500x500.jpg', 1.0, 0, 4),
(17, 'Hạt Lúa Mì Bulgur Hữu Cơ', 158000, 'Giàu chất xơ, giúp tiêu trừ và loại bỏ độc tố và chất béo dư thừa có hại làm tắc nghẽn cơ thể và gây thừa cân, giảm nguy cơ ung thư đại tràng,', 'hat-lua-mi-bulgur-huu-co-bohlsener-500g-500x500.jpg', 0.5, 0, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL DEFAULT 1,
  `customer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `customer_id`) VALUES
(1, 'qt', '1', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`customer_id`,`product_id`) USING BTREE;

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
