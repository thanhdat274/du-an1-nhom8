-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2021 lúc 03:15 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_nhom8`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL COMMENT 'địa chỉ email',
  `password` varchar(50) NOT NULL COMMENT 'mật khẩu',
  `name` varchar(255) NOT NULL COMMENT 'họ và tên',
  `address` varchar(255) NOT NULL COMMENT 'địa chỉ',
  `phone` int(50) NOT NULL COMMENT 'số diện thoại',
  `image` varchar(255) NOT NULL COMMENT 'hình ảnh',
  `role` int(10) NOT NULL COMMENT 'vài trò'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `email`, `password`, `name`, `address`, `phone`, `image`, `role`) VALUES
(6, 'nguyenthanhdat27042002@gmail.com', '1234', 'Thành Đạt Nguyễn', 'phường vạn phúc, quận hà đông, thành phó hà nội', 823865966, 'http://localhost:81/Du-an1-nhom8/public/upload/619e0d48ad879-Screenshot (910).png', 1),
(7, 'toilaai27042002@gmail.com', '1234', 'thành đạt', '', 0, 'http://localhost:81/Du-an1-nhom8/public/upload/61a35d31cfe7f-FHD_4K_Wallpaper_2021 (4).png', 1),
(8, 'nguyenthanhdat27042002@gmail.com', '12345', 'Thành Đạt Nguyễn', 'phường vạn phúc, quận hà đông, thành phó hà nội', 823865962, '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL COMMENT 'id',
  `name` varchar(255) NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'NGUYỄN THÀNH ĐẠT '),
(3, 'abcd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL COMMENT 'id',
  `name` varchar(255) NOT NULL COMMENT 'Tên sản phẩm',
  `price` int(10) NOT NULL COMMENT 'Giá sản phẩm',
  `image` varchar(255) NOT NULL COMMENT 'Ảnh chính',
  `image1` varchar(255) DEFAULT NULL COMMENT 'Ảnh phụ 1',
  `image2` varchar(255) DEFAULT NULL COMMENT 'Ảnh phụ 2',
  `image3` varchar(255) DEFAULT NULL COMMENT 'Ảnh phụ 3',
  `promotional_price` int(10) NOT NULL COMMENT 'Giá khuyến mãi',
  `description` varchar(255) NOT NULL COMMENT 'Mô tả',
  `view` int(10) NOT NULL DEFAULT 0 COMMENT 'Lượt xem',
  `date` varchar(50) NOT NULL COMMENT 'Ngày nhập',
  `id_cate` int(11) NOT NULL COMMENT 'Id danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `image1`, `image2`, `image3`, `promotional_price`, `description`, `view`, `date`, `id_cate`) VALUES
(7, 'nguyễn thanhdajt', 1000000, 'http://localhost:81/Du-an1-nhom8/public/upload/61a3378287230-Screenshot (924).png', 'http://localhost:81/Du-an1-nhom8/public/upload/61a3378287475-Screenshot (925).png', 'http://localhost:81/Du-an1-nhom8/public/upload/61a3378288524-Screenshot (922).png', 'http://localhost:81/Du-an1-nhom8/public/upload/61a337828876c-Screenshot (1).png', 1000000000, 'kkkkkkkkkkkkkkkkkkkkkk', 0, '28/11/2021', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_ibfk_1` (`id_cate`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
