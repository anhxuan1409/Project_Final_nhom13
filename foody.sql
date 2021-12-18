-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2021 lúc 03:03 PM
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
-- Cơ sở dữ liệu: `foody`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_saler`
--

CREATE TABLE `db_saler` (
  `saler_id` int(10) UNSIGNED NOT NULL,
  `saler_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `saler_email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `saler_pass` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `saler_add` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `saler_phone` varchar(60) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `db_saler`
--

INSERT INTO `db_saler` (`saler_id`, `saler_name`, `saler_email`, `saler_pass`, `saler_add`, `saler_phone`) VALUES
(1, 'yen_dh', 'yendh@gmail.com', '123', 'Hà Nội', '0896745231');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_user`
--

CREATE TABLE `db_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_pass` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_add` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `user_phone` varchar(60) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `db_user`
--

INSERT INTO `db_user` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_add`, `user_phone`) VALUES
(1, 'aloha', 'aloha@gmail.com', '123', 'Hà Nội\r\n', '0987654321');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_saler`
--
ALTER TABLE `db_saler`
  ADD PRIMARY KEY (`saler_id`),
  ADD UNIQUE KEY `saler_name` (`saler_name`),
  ADD UNIQUE KEY `saler_email` (`saler_email`);

--
-- Chỉ mục cho bảng `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_saler`
--
ALTER TABLE `db_saler`
  MODIFY `saler_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `db_user`
--
ALTER TABLE `db_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
