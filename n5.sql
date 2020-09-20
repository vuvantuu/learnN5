-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 19, 2020 lúc 12:25 PM
-- Phiên bản máy phục vụ: 8.0.18
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `musicplayer`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `token`, `image`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$h7e51zZ/zGKsHhehggI4AudM1tVG9gOqRo0cx36z7VoqAUfgDJuou', NULL, NULL, NULL, 'b705d4713dfd10c8e60fc8046bd24a54', '1600499280.png'),
(2, 'tuu', 'tuu@gmail.com', NULL, '$2y$10$mFIal0V5cmJW1ot4b/47nOQZGufOihfl1YiD5TIYoRpKydEqWL.gK', NULL, NULL, NULL, '27bb040e2bf42a46f4e88c344f906aae', '1600507091.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videoData`
--

CREATE TABLE `videoData` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idYoutube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.booking.com%2Fhotel%2Fus%2Fjw-marriott-los-angeles-l-a-live-california.vi.html&psig=AOvVaw35utLtfX4joIJG7xQIemeM&ust=1600425172774000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLCnzcT-7-sCFQAAAAAdAAAAABAD'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `videoData`
--

INSERT INTO `videoData` (`id`, `name`, `idYoutube`, `image`) VALUES
(12, 'lesson 1', 'wDpsF90DoeI', '169.png'),
(13, 'lesson 2', 'Y13YOdclzMA', '24.png'),
(14, 'lesson 3', 'ngeRgzef5v', '346.png'),
(15, 'lesson 4', 'VdqddfTSNC0', '494.png'),
(16, 'lesson 5', '1asNdTdCme8', '525.png'),
(17, 'lesson 6', '79xmA0Qd6q4', '626.png'),
(18, 'lesson 7', 'RlqS7KW2p8k', '736.png'),
(19, 'lesson 8', 'cfla_C4KJMg', '882.png'),
(20, 'lesson 9', '7hsqJiF2p_c', '932.jpeg'),
(21, 'lesson 10', 'xdGCZosnEII', '1094.jpeg'),
(22, 'lesson 11', 'JdaoVZ57GbI', '117.jpeg'),
(23, 'lesson 12', 'Zx7OT3uLgfo', '1238.png'),
(24, 'lesson 13', 'f1TfjQ3GYgA', '1342.png'),
(25, 'lesson 14', 'Nnbje4djYpg', '1480.png'),
(26, 'lesson 15', 'CzZJYEam1Oc', '1511.png'),
(27, 'lesson 16', 'jOgxIIqeTH4', '1645.png'),
(28, 'lesson 17', 'FU4WCJupEQ0', '1798.jpeg'),
(29, 'lesson 18', 'eR4uzqLmr4I', '1840.png'),
(30, 'lesson 19', 'YbpUnQeKHAE', '1971.png'),
(31, 'lesson 20', 'jYn7fAvXI4c', '2064.png'),
(32, 'lesson 21', 'SiUwpKKx-Y', '210.png'),
(33, 'lesson 22', 'aRIQL8h-og4', '2257.png'),
(34, 'lesson 23', 'tmlqaZY3IPM', '2327.png'),
(35, 'lesson 24', 'o0tlYEkJhg0', '2432.png'),
(36, 'lesson 25', 'UbzpBQbKN7w', '2573.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `videoData`
--
ALTER TABLE `videoData`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `videoData`
--
ALTER TABLE `videoData`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
