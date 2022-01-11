-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2022 lúc 04:17 AM
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
-- Cơ sở dữ liệu: `btlweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `idAd` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Addministrators` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`idAd`, `name`, `pass`, `id_Addministrators`) VALUES
(2, 'yen', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(3, 'chinh', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(4, 'xuan', 'c4ca4238a0b923820dcc509a6f75849b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `administrators`
--

CREATE TABLE `administrators` (
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Addministrators` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `administrators`
--

INSERT INTO `administrators` (`name`, `pass`, `id_Addministrators`) VALUES
('chinh', 'c4ca4238a0b923820dcc509a6f75849b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `foods`
--

CREATE TABLE `foods` (
  `food_isbn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_Category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_descr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_price` decimal(6,2) NOT NULL,
  `idAd` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `foods`
--

INSERT INTO `foods` (`food_isbn`, `food_title`, `food_image`, `food_Category`, `food_descr`, `food_price`, `idAd`) VALUES
('950', 'Phở bò', 'img/img_addfood/pho.jpg', 'Món chính', '', '70.00', 4),
('960', 'Thịt trâu', 'img/img_addfood/thit_trau.jpg', 'Món chính', '', '200.00', 4),
('961', 'Tokbokki', 'img/img_addfood/toboki.jpg', 'Đồ ăn vặt', '', '20.00', 4),
('962', 'Thịt xiên', 'img/img_addfood/xien1-2323.jpg', 'Đồ ăn vặt', '', '20.00', 4),
('963', 'Xôi', 'img/img_addfood/xoi-yen.jpg', 'Món chính', '', '20.00', 4),
('965', 'Bimbim', 'img/img_addfood/bimbim.jpg', 'Đồ ăn vặt', '', '12.00', 4),
('966', 'Coca', 'img/img_addfood/coca.jpg', 'Đồ uống', '', '8.00', 4),
('970', 'Trà sữa', 'img/img_addfood/trà-sữasugar.jpg', 'Đồ uống', '', '20.00', 4),
('971', 'Bánh đa', 'img/img_addfood/banhda.jpg', 'Đồ ăn nhanh', '', '20.00', 4),
('972', 'Bánh mỳ', 'img/img_addfood/banh-mi.jpg', 'Đồ ăn nhanh', '', '25.00', 4),
('973', 'Bún đậu mắn tôm', 'img/img_addfood/bun-dau-mam-tom.jpg', 'Món chính', '', '40.00', 4),
('974', 'Bún hải sản', 'img/img_addfood/hai-san.jpg', 'Đồ ăn nhanh', '', '35.00', 4),
('975', 'Gà rán', 'img/img_addfood/ga_kfc.jpg', 'Đồ ăn nhanh', '', '70.00', 4),
('976', 'Cà phê', 'img/img_addfood/cafe.jpg', 'Đồ uống', '', '20.00', 4),
('977', 'Pizza', 'img/img_addfood/pizza-i.jpg', 'Đồ ăn nhanh', '', '100.00', 4),
('978', 'Bánh tráng', 'img/img_addfood/banh_trang.jpg', 'Đồ ăn vặt', '', '120.00', 4),
('979', 'Bún ốc', 'img/img_addfood/1.jpg', 'Món chính', NULL, '35.00', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `foods_add`
--

CREATE TABLE `foods_add` (
  `food_ad_id` int(10) NOT NULL,
  `food_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_author` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_descr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `date_add` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_ship` timestamp NOT NULL DEFAULT current_timestamp(),
  `ship_address` char(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `amount` decimal(6,2) DEFAULT 0.00,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`orderid`, `userid`, `date`, `date_ship`, `ship_address`, `sdt`, `amount`, `order_status`) VALUES
(10, 5, '2022-01-09 17:00:00', '2022-01-14 17:00:00', 'Hà Nội', 357537163, '70.00', 'Đang xử lý'),
(11, 5, '2022-01-10 17:00:00', '2022-01-15 17:00:00', 'Hà Nội', 357538164, '220.00', 'Đang xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) NOT NULL,
  `food_isbn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_price` float DEFAULT 0,
  `quantity` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`orderid`, `food_isbn`, `item_price`, `quantity`) VALUES
(10, '979', 0, 2),
(11, '971', 0, 1),
(11, '960', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` int(10) NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` datetime DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `status`, `code`, `avatar`, `address`, `city`) VALUES
(5, 'Nguyễn ', 'Anh Xuân', 'ngctrngnh@gmail.com', '$2y$10$tLto2pjJnK26k7MdTK/QU.vAftJ7RDnIP1HAmmQRD9MKR9Rh6wS72', '2022-01-10 13:21:04', 1, '6d56b19e26180377c0d272fbade42678', './administrators/img/img_user/', '', ''),
(6, 'Dương', 'Hoàng Yến', 'duonghoangien001@gmail.com', '$2y$10$GXdEcg2dYMvUCJIo6rw2iufRlWjuSSwFYzyd7e23Gmjq8jav7/cnW', '2022-01-10 17:14:35', 0, '42f136a1dc560c540b2a7dfcf949a5e6', './administrators/img/', '', ''),
(11, 'An', 'An', 'anguyenxuan2001@gmail.com', '$2y$10$.o3IGtLkzBY8X1L/ejdzXeP9de.FEpLTi2jE5UJVis1tT20SsliV6', '2022-01-10 17:24:16', 1, '8603c0ebf65aac0f1fe821d2be76380d', './administrators/img/', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAd`),
  ADD KEY `admin_ibfk_1` (`id_Addministrators`);

--
-- Chỉ mục cho bảng `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id_Addministrators`);

--
-- Chỉ mục cho bảng `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_isbn`),
  ADD KEY `foods_ibfk_2` (`idAd`);

--
-- Chỉ mục cho bảng `foods_add`
--
ALTER TABLE `foods_add`
  ADD PRIMARY KEY (`food_ad_id`),
  ADD KEY `userid` (`userid`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `userid` (`userid`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `orderid` (`orderid`),
  ADD KEY `food_isbn` (`food_isbn`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `idAd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id_Addministrators` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `foods_add`
--
ALTER TABLE `foods_add`
  MODIFY `food_ad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_Addministrators`) REFERENCES `administrators` (`id_Addministrators`);

--
-- Các ràng buộc cho bảng `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_ibfk_2` FOREIGN KEY (`idAd`) REFERENCES `admin` (`idAd`);

--
-- Các ràng buộc cho bảng `foods_add`
--
ALTER TABLE `foods_add`
  ADD CONSTRAINT `foods_add_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`food_isbn`) REFERENCES `foods` (`food_isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
