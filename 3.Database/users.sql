-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2019 lúc 05:26 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_login_system`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `access_level` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `access_code` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=confirmed',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact_number`, `address`, `password`, `access_level`, `access_code`, `status`, `created`, `modified`) VALUES
(1, 'manh', 'nguyen', 'tienvv62@wru.vn', '33333333', 'hn', '$2y$10$wVXEAqVuE4VZFlbg.MaPc.QadeeyntMk8pabbTF2DXTvHC5tJ4hDi', 'Admin', '', 1, '2019-01-03 03:31:54', '2019-01-04 04:16:32'),
(27, 'ko', 'nguyen', 'kiem1305@gmail.com', '44425252', 'hk', '$2y$10$6h36qyz3SomDkwVZN3Eq4.kgRPO0Um2RbE2bovsSlcQ8BoEGXp8ym', 'Customer', '', 1, '2019-01-03 00:14:22', '2019-01-02 16:14:22'),
(32, 'cong', 'nguyen', 'kiemt@gmail.com', '55555555', 'hh', '$2y$10$IA3/vp7RCkQnXH9/YNLCOedb/I8aco7Cjmqu7/xKUTK4pKsmzZd6a', 'Customer', '', 1, '2019-01-03 04:00:20', '2019-01-02 20:00:20'),
(33, 'ko', 'nguyen', 'kien@gmail.com', '55444411', 'hn', '$2y$10$onboODBN1918FJg3goXABOqOyhCuvP7hSx5aqEFFJLXE4xzIB5L.y', 'Customer', '', 1, '2019-01-03 04:00:55', '2019-01-02 20:00:55'),
(35, 'tien', 'nguyen', 'kiemtien1305@gmail.com', '33333333', 'hd', '$2y$10$nQcm32y90o2toJTSBdgUtuAjwrle4YFEECFH5MR7CrWa7j5ZcNOyG', 'Customer', 'XOTo1ziBsfMmleFvMXF61MzyXfEb9IU1', 1, '2019-01-03 14:24:05', '2019-01-04 04:10:06'),
(40, 'phai', 'vu', 'phaivv@gmail.com', '351555', 'HN', '$2y$10$S8z62tqcEvtM7UHUCu5NZu0CNYiUfCSth9kZt8rOfdnRTY2AY5RIu', 'Customer', '', 1, '2019-01-04 12:17:16', '2019-01-04 04:17:16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
