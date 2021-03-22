-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2020 lúc 04:59 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_kone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_11_020444_edti_tbl_admin', 1),
(5, '2020_11_11_063356_create_tbl_topic', 2),
(6, '2020_11_11_063440_create_tbl_item_topic', 2),
(7, '2020_11_11_064002_creat_tbl_news', 2),
(8, '2020_11_14_112950_create_tbl_user', 3),
(9, '2020_11_14_144033_creat_tbl_comment', 4),
(10, '2020_11_15_044323_creat_tbl_reply_comment', 5);

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
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'mitomxao605', '96C468756C220212051F69C47640C93B', 'Dang Khoa', '0923570561', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `cmt_id` bigint(20) UNSIGNED NOT NULL,
  `cmt_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `cmt_created_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`cmt_id`, `cmt_content`, `news_id`, `id`, `cmt_created_at`, `updated_at`) VALUES
(4, 'Hay quá !', 16, 2, '2020-11-17', NULL),
(8, 'Amazing good job em !!', 24, 1, '2020-12-02', NULL),
(9, 'Hay quá , amazing goodjob', 19, 1, '2020-12-07', NULL),
(10, 'Hay quá', 22, 1, '2020-12-07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_item_topic`
--

CREATE TABLE `tbl_item_topic` (
  `item_topic_id` int(10) UNSIGNED NOT NULL,
  `item_topic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_topic_describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int(10) NOT NULL,
  `item_topic_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_topic_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_topic_index` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_item_topic`
--

INSERT INTO `tbl_item_topic` (`item_topic_id`, `item_topic_name`, `item_topic_describe`, `topic_id`, `item_topic_slug`, `item_topic_amount`, `item_topic_index`) VALUES
(5, 'Photoshop', '<p>Photoshop - Chỉnh sửa ảnh nghệ thuật</p>', 5, 'photoshop', '2', 1),
(6, 'Lightroom', '<p>Lightroom - Xử l&iacute; ảnh hậu k&igrave;</p>', 5, 'lightroom', '0', 0),
(7, 'Lập trình php', '<p>Lập tr&igrave;nh web với php</p>', 5, 'lap-trinh-php', '0', 0),
(8, 'Premiere', '<p>Premiere - Những thước phim ho&agrave;n chỉnh</p>', 5, 'premiere', '0', 0),
(9, 'Giải trí', '<p>Giải tr&iacute;</p>', 6, 'giai-tri', '1', 1),
(10, 'Âm nhạc', '<p>&Acirc;m nhạc v&agrave; những th&ocirc;ng tin về showbiz</p>', 6, 'am-nhac', '1', 1),
(11, 'Du lịch', '<p>Du lịch v&agrave; những trải nghiệm th&uacute; vị, review</p>', 6, 'du-lich', '0', 0),
(12, 'Xã hội', '<p>X&atilde; hội</p>', 6, 'xa-hoi', '1', 0),
(13, 'Giáo dục', '<p>Th&ocirc;ng tin về gi&aacute;o dục v&agrave; những cập nhật mới nhất từ bộ gi&aacute;o dục</p>', 6, 'giao-duc', '0', 0),
(14, 'Thế giới', '<p>Thế giới</p>', 6, 'the-gioi', '0', 0),
(15, 'Tin tức thể thao', '<p>Thể thao n&oacute;ng hổi kh&ocirc;ng thể bỏ lỡ</p>', 7, 'tin-tuc-the-thao', '2', 1),
(16, 'Lịch thi đấu', '<p>Lịch thi đấu của c&aacute;c giải đấu b&oacute;ng đ&aacute;&nbsp;h&agrave;ng đầu thế giới</p>\r\n\r\n<p>&nbsp;</p>', 7, 'lich-thi-dau', '0', 0),
(17, 'Khám phá', '<p>Thể thao kh&aacute;m ph&aacute;</p>', 7, 'kham-pha-the-thao', '0', 0),
(18, 'Software', '<p>Phần mềm miễn ph&iacute;</p>', 5, 'software', '0', 0),
(19, 'Mạng', '<p>An to&agrave;n v&agrave; bảo mật hệ thống th&ocirc;ng tin, mạng v&agrave; quản trị mạng</p>', 5, 'mang', '1', 0),
(20, 'test', '<p>test</p>', 9, 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_view` int(11) DEFAULT NULL,
  `news_like` int(11) DEFAULT NULL,
  `news_cmt` int(11) DEFAULT NULL,
  `news_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_img_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `item_topic_id` int(10) DEFAULT NULL,
  `news_index` int(11) DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_content`, `news_view`, `news_like`, `news_cmt`, `news_slug`, `news_img_upload`, `topic_id`, `item_topic_id`, `news_index`, `created_at`, `updated_at`) VALUES
(16, 'Hướng dẫn hack pass wifi dạng WP2 mới nhất', '<p><strong><u>Bước 1:</u></strong>&nbsp;Đầu ti&ecirc;n c&aacute;c b&aacute;c cần chuẩn bị phần mềm&nbsp;Backtrack 5 r2, đ&acirc;y l&agrave; phần mềm chuy&ecirc;n d&ugrave;ng để hack pass wifi to&agrave;n cầu, rất đơn giản v&agrave; dễ sử dụng, n&oacute; như l&agrave; một bản hệ điều h&agrave;nh linux chạy tạm thời. C&aacute;c b&aacute;c c&oacute; thể mua ở tiệm băng đĩa hoặc nh&agrave; b&aacute;c n&agrave;o r&atilde;nh rỗi th&igrave; mua đĩa trắng về rồi burn ra đĩa cũng được<br />\r\nlink tải c&oacute; thể tham khảo ở đ&acirc;y:&nbsp;<a href=\"http://www.backtrack-linux.org/downloads/\">http://www.backtrack-linux.org/downloads/</a></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"https://4.bp.blogspot.com/--4mIevhlVfg/VKFxXgdvO-I/AAAAAAAAAAs/HbjFsrNOCR0/s1600/vi8b.jpg\"><img src=\"https://4.bp.blogspot.com/--4mIevhlVfg/VKFxXgdvO-I/AAAAAAAAAAs/HbjFsrNOCR0/s1600/vi8b.jpg\" style=\"height:241px; width:320px\" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>tải backtrack r2</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tải về file ISO, rồi c&aacute;c b&aacute;c ghi v&agrave;o đĩa hay USB theo c&aacute;ch b&igrave;nh thường<br />\r\nc&ograve;n nếu m&aacute;y nh&agrave; b&aacute;c n&agrave;o cấu h&igrave;nh cao th&igrave; c&oacute; thể sử dụng m&aacute;y ảo: tham khảo ở video sau:<br />\r\n<a href=\"https://www.youtube.com/watch?v=WDrXz-HkVV4\">https://www.youtube.com/watch?v=WDrXz-HkVV4</a><br />\r\nRi&ecirc;ng m&igrave;nh th&igrave; m&igrave;nh d&ugrave;ng đĩa, (1đĩa/12k)<br />\r\nxong bước chuẩn bị</p>\r\n\r\n<p>------------------------------------------------------------------------------------------</p>\r\n\r\n<p><strong><u>Bước 2</u>:</strong>&nbsp;Cho đĩa backtack v&agrave;o m&aacute;y t&iacute;nh, boot b&igrave;nh thường:<br />\r\n<br />\r\nChọn c&aacute;i đầu ti&ecirc;n l&agrave;&nbsp;Backtrack text<br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p><a href=\"http://sinhvienit.net/url/?http%3A%2F%2F2.bp.blogspot.com%2F-RcybmI20dSE%2FU0dsBgtvCBI%2FAAAAAAAAAEI%2FrGcjZ2XWjeo%2Fs1600%2Fnen-mua-lapyop-o-dau.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://2.bp.blogspot.com/-RcybmI20dSE/U0dsBgtvCBI/AAAAAAAAAEI/rGcjZ2XWjeo/s640/nen-mua-lapyop-o-dau.jpg\" style=\"height:341px; width:400px\" /></a></p>\r\n\r\n<p><br />\r\n<br />\r\n<br />\r\n<strong><u>Bước 3</u>:</strong>&nbsp;Sau đ&oacute; sẽ hiện ra thế n&agrave;y: ta g&otilde;&nbsp;startx&nbsp;v&agrave;o<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p><a href=\"http://sinhvienit.net/forum/hack-wifi-bang-backtrack-5.330343.html\" id=\"vtlai_auto_link_back_1\" target=\"_blank\" title=\" Hack wifi bằng backtrack 5\"><img alt=\"\" src=\"https://4.bp.blogspot.com/-CuTCqpgYa5c/U0dsfP88QRI/AAAAAAAAAEM/U7YH5P6SjQc/s400/thegioilaptop.jpg\" /></a></p>\r\n\r\n<p><br />\r\n<br />\r\n<br />\r\n<strong><u>Bước 4</u>:</strong>&nbsp;đợi ra m&agrave;n h&igrave;nh ch&iacute;nh,&nbsp;ta click chọn thẻ&nbsp;command&nbsp;ở g&oacute;c tr&aacute;i ph&iacute;a dưới m&agrave;n h&igrave;nh<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p><a href=\"http://sinhvienit.net/url/?http%3A%2F%2F1.bp.blogspot.com%2F-UkG2hHTkAxQ%2FU0dtASdGJrI%2FAAAAAAAAAEU%2FluStt07-nUY%2Fs1600%2Fungdungphanmem.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://1.bp.blogspot.com/-UkG2hHTkAxQ/U0dtASdGJrI/AAAAAAAAAEU/luStt07-nUY/s640/ungdungphanmem.jpg\" style=\"height:250px; width:400px\" /></a></p>\r\n\r\n<p><u>Bước 5:</u>&nbsp;g&otilde; v&agrave;o c&acirc;u lệnh sau&nbsp;airmon-ng start wlan0<br />\r\nnếu n&oacute; hiện ra&nbsp;d&ograve;ng chữ Monitor mode enable on mon0 l&agrave; ok<br />\r\nc&ograve;n nếu n&oacute; ko hiện ra, th&igrave; th&ocirc;i c&aacute;c bạn đừng n&ecirc;n hack l&agrave;m g&igrave; nữa<br />\r\n<u>Bước 6:</u>Ta d&ugrave;ng lệnh<em>&nbsp;</em>airodump-ng mon0&nbsp;để t&igrave;m BSSID.</p>\r\n\r\n<p><a href=\"http://tranminhtuyen.files.wordpress.com/2013/06/2.png\"><img alt=\"Image\" id=\"i-125\" src=\"https://lh4.googleusercontent.com/proxy/X7ZGqH05OUQSpqyLqrgrFCyd07ch8aFhIvlW1FUS3pJF9zOv31wZVexy9S10GOkBJWrP6iti6DnNCMlFyRRpJFusyFEhQyRu2DZwuPNH08U=s0-d\" /></a></p>\r\n\r\n<p>Sau đ&oacute;, n&oacute; sẽ d&ograve; ra tất cả c&aacute;c mạng wifi của nh&agrave; h&agrave;ng x&oacute;m hay qu&aacute;n cafe gần nh&agrave; bạn đang bật, ở đ&acirc;y ch&uacute;ng ta sẽ copy lại m&atilde; BSSID m&agrave; ch&uacute;ng ta muốn hack pass.<br />\r\n<u>Bước 7:</u>&nbsp; v&agrave; lệnh cuối&nbsp;reaver - i mon0 &ndash;b BSSID &ndash;vv&nbsp;( 2 chữ v, ko phải w),................. ngồi đợi<br />\r\n<br />\r\n<strong><u>MỘT SỐ CH&Uacute; &Yacute;:</u></strong>&nbsp;</p>\r\n\r\n<p><strong>Muốn hack được pass wifi th&igrave; AP&nbsp;phải enable t&iacute;nh năng WPS.</strong></p>\r\n\r\n<p>Lệnh xem AP c&oacute; enable WPS kh&ocirc;ng</p>\r\n\r\n<p><em>wash -i mon0&nbsp;</em></p>\r\n\r\n<p>Nếu ở cột WPS Locked c&oacute; hiện chứ YES hoặc NO l&agrave; c&oacute; enable, c&ograve;n để trống l&agrave; kh&ocirc;ng c&oacute;.</p>\r\n\r\n<p>YES l&agrave; bị lock rồi, phải DOS n&oacute; để n&oacute; chuyển về NO l&agrave; crack được.</p>\r\n\r\n<p>Lệnh dos</p>\r\n\r\n<p><em>mdk3 mon0 a -a BSSID</em></p>\r\n\r\n<p><strong>Kinh nghiệm khi xuất hiện 3 lỗi sau do 1 bạn trong HVA online chia sẽ:</strong></p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh crack password (chạy lệnh reaver) nếu xuất hiện một trong ba d&ograve;ng sau:</p>\r\n\r\n<p>a/ WARNING: Detected AP rate limiting, waiting 60 seconds before re-checking th&igrave; Modem bị tấn c&ocirc;ng c&oacute; phần tự động ph&aacute;t hiện v&agrave; chống crack password theo c&aacute;ch n&agrave;y. Nếu mạng Wi-Fi l&uacute;c đầu chưa crack c&oacute; WPS Locked l&agrave; No nhưng đang crack th&igrave; chuyển sang Yes =&gt; d&ugrave;ng lệnh DoS tấn c&ocirc;ng để Modem bị qu&aacute; tải v&agrave; buộc phải restart, nhờ đ&oacute; c&oacute; thể chuyển WPS Locked về lại No như trước để tiếp tục crack, c&acirc;u lệnh l&agrave;: mdk3 mon0 a -a BSSID. Với trường hợp n&agrave;y, th&igrave; n&ecirc;n chuyển sang giao diện đồ họa để c&oacute; thể mở đồng thời nhiều cửa sổ giao diện g&otilde; d&ograve;ng lệnh khi vừa tấn c&ocirc;ng DoS Modem vừa muốn kiểm tra xem Modem đ&atilde; chuyển WPS Locked về lại No hay chưa.</p>\r\n\r\n<p>b/ WARNING: Failed to associate with BSSID (ESSID: T&ecirc;n mạng Wi-Fi) th&igrave; c&oacute; 4 khả năng sau xảy ra:<br />\r\n+ Modem bị tấn c&ocirc;ng DoS đ&atilde; treo.<br />\r\n+ Modem bị tấn c&ocirc;ng đ&atilde; tắt WPS.<br />\r\n+ S&oacute;ng Wi-Fi yếu, chập chờn do m&ocirc;i trường c&oacute; nhiều vật cản.<br />\r\n+ Modem bị tấn c&ocirc;ng đ&atilde; lọc MAC hoặc/v&agrave; ẩn ESSID để ph&ograve;ng chống crack password theo c&aacute;ch n&agrave;y.<br />\r\n=&gt; Kh&ocirc;ng crack password mạng Wi-Fi đ&oacute; nữa cho khỏi mất c&ocirc;ng (Với ba trường hợp sau)! Tiếp tục crack password mạng Wi-Fi với trường hợp đầu như sau: dừng chạy lệnh mdk3 (đ&atilde; n&oacute;i ở tr&ecirc;n), chờ một l&uacute;c (0,25 đến 0,5 giờ) th&igrave; reaver sẽ l&agrave;m việc tiếp tục b&igrave;nh thường do Modem tự hồi phục được lỗi n&agrave;y!</p>\r\n\r\n<p>c/ WARNING: Receive timeout occurred =&gt; Modem bị tấn c&ocirc;ng DoS đ&atilde; treo! Tiếp tục crack password mạng Wi-Fi như sau: tiếp tục chạy lệnh mdk3 cho tới khi chạy lại lệnh reaver gặp th&ocirc;ng b&aacute;o như trường hợp b th&igrave; dừng lại, hoặc chờ một l&uacute;c (0,25 đến 0,5 giờ) th&igrave; reaver sẽ l&agrave;m việc tiếp tục b&igrave;nh thường do Modem tự hồi phục được lỗi n&agrave;y!<br />\r\n<br />\r\nNgo&agrave;i ra trong những trường hợp c&aacute;c b&aacute;c muốn dừng việc hack n&agrave;y, để h&ocirc;m sau l&agrave;m tiếp c&aacute;c b&aacute;c c&oacute; thể ấn&nbsp;CTRL&nbsp;+ C&nbsp;=&gt; &nbsp;file đang hack dở nằm ở trong&nbsp;root/usr/local/etc/reaver/BSSID.wpc&nbsp;copy file đ&oacute; v&agrave;o usb , hum sau l&agrave;m tiếp, cũng sử dụng c&acirc;u lệnh&nbsp;reaver - i mon0 &ndash;b BSSID &ndash;vv &nbsp;rồi ấn chữ Y<br />\r\n&nbsp;</p>\r\n\r\n<p>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng !</p>', 13, NULL, 2, 'huong-dan-hack-pass-wifi-dang-wp2', 'backtrack-7607-1.jpg', 5, 19, 1, '2020-11-18', NULL),
(19, 'Cắt vật thể thủy tinh ra khỏi nền', '<div><span style=\"font-size:16px\">H&ocirc;m nay K&nbsp;- one click sẽ hướng dẫn c&aacute;c bạn t&aacute;ch một vật thể thủy tinh ra khỏi nền chỉ với 10 bước m&agrave; vẫn giữ nguy&ecirc;n chất trong suốt của thủy tinh , phục vụ cho c&ocirc;ng việc của ch&uacute;ng ta</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\">Sử dụng phần mềm photoshop</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 1</u></strong> : Chuẩn bị một bức h&igrave;nh c&oacute; vật thể thủy tinh</span></span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_1.png\" style=\"height:736px; width:1366px\" /></span></span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 2</u></strong>: d&ugrave;ng c&ocirc;ng cụ pentool để chọn v&ugrave;ng chọn quanh vật thể</span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_2.png\" style=\"height:576px; width:221px\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\">Ta được kết quả:</span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_3.png\" style=\"height:736px; width:1366px\" /></span></span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 3 </u></strong>: Ấn [ Ctrl + J ] 2 lần để nh&acirc;n đ&ocirc;i vật thể ra 2 layer kh&aacute;c nhau</span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_4.png\" style=\"height:334px; width:338px\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 4</u></strong> : Ở layer tr&ecirc;n c&ugrave;ng ta ấn [ ctrl + shift + U] để chuyển vật thể th&agrave;nh trắng đen</span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_5.png\" style=\"height:705px; width:622px\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 5</u></strong> : ngay tr&ecirc;n layer vừa mới chuyển trắng đen xong, ta ấn [ ctrl +&nbsp; alt + 2 ] để tạo v&ugrave;ng chọn thủy tinh</span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_6.png\" style=\"height:710px; width:537px\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 6</u></strong> : ấn [ ctrl + J ] để nh&acirc;n đ&ocirc;i v&ugrave;ng chọn thủy tinh</span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_7.png\" style=\"height:377px; width:290px\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 7</u></strong>&nbsp; : chọn layer ph&iacute;a tr&ecirc;n ảnh gốc vật thể, rồi tạo lớp layer mark</span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_8.png\" style=\"height:402px; width:266px\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 8</u></strong> : Sử dụng c&ocirc;ng cụ brush&nbsp;</span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_9.png\" style=\"height:505px; width:345px\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 9</u></strong> : Tắt hiển thị layer trắng đen , tắt ảnh gốc, tr&ecirc;n lớp layer mask ta bắt đầu x&oacute;a c&aacute;c nền sau thủy tinh.</span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_10.png\" style=\"height:296px; width:228px\" /></span></span></div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Bước 10</u></strong>: X&oacute;a layer trắng đen, gộp 2 layer bằng c&aacute;ch [ crtl + e]</span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_11.png\" style=\"height:230px; width:248px\" /></span></span></div>\r\n\r\n<div style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\">Vậy l&agrave; xong, giờ ta sử dụng tr&ecirc;n mọi nền kh&aacute;c nhau th&igrave; vẫn hiện thị chất liệu thủy tinh </span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/ckfinder/userfiles/images/18_12.png\" style=\"height:505px; width:349px\" /></span></span></div>', 11, NULL, 2, 'cat-vat-the-thuy-tinh-ra-khoi-nen', 'maxresdefault.jpg', 5, 5, 1, '2020-11-20', NULL),
(20, 'Ý tưởng thiết kế 1 – Tạo nếp gấp cho text', '<p><span style=\"font-size:16px\">H&ocirc;m nay K-one click sẽ hướng dẫn cho c&aacute;c bạn l&agrave;m một &yacute; tưởng thiết kế cho text</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:16px\">Phục vụ cho việc l&agrave;m poster, print-ad, quảng c&aacute;o,...<br />\r\nSử dụng phần mềm photoshop</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:16px\">Bước 1: Chuẩn bị 1 nền + 1 text</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_1.png\" style=\"height:400px; width:732px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp;<br />\r\nNhớ Rasterize type để chuyển từ dạng text chữ sang dạng layer, bằng c&aacute;ch click chuột phải v&agrave;o layer text chọn Rasterize Type</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_2.png\" style=\"height:400px; width:711px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Bước 2 : sử dụng c&ocirc;ng cụ lasso tool</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_3.png\" style=\"height:297px; width:146px\" /><br />\r\n&nbsp;<br />\r\nVẽ một đường cắt ngang text<br />\r\n&nbsp;<img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_4.png\" style=\"height:400px; width:510px\" /><br />\r\nLần lượt ấn [ ctrl + X ] để cắt, v&agrave; [ ctrl + v ] để d&aacute;n, tr&ecirc;n cửa sổ layer ta được 2 layer, 1 layer của phần text ph&iacute;a tr&ecirc;n,v&agrave; 1 layer của phần text ph&iacute;a dưới như sau</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_5.png\" style=\"height:300px; width:569px\" /><br />\r\n&nbsp;<br />\r\nBước 3 : &nbsp;Tắt layer của phần text tr&ecirc;n, chọn v&agrave;o background m&agrave;u, ta lại sử dụng c&ocirc;ng cụ Lasso tool v&agrave; vẽ như h&igrave;nh<br />\r\n<img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_6.png\" style=\"height:400px; width:572px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ấn [ ctrl &nbsp;+ J ] để nh&acirc;n đ&ocirc;i layer m&agrave;u&nbsp;</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_7.png\" style=\"height:219px; width:235px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Bước 4 : ta th&ecirc;m fx cho n&oacute; bằng c&aacute;ch nhấn chuột phải, chọn blending opiton</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_8.png\" style=\"height:400px; width:711px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp;<br />\r\nBước 5 &nbsp;: chọn hiệu ứng drop shadow v&agrave; chỉnh c&aacute;c th&ocirc;ng số như h&igrave;nh -&gt; rồi bấm ok</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_9.png\" style=\"height:478px; width:630px\" /><br />\r\n&nbsp;<br />\r\nBước 6 : ta tạo 1 lớp layer mới v&agrave; đặt dưới tất cả c&aacute;c layer text -&gt; chọn phim I để lấy m&agrave;u của nền v&agrave; sử dụng c&ocirc;ng cụ brush vẽ như h&igrave;nh</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_10.png\" style=\"height:400px; width:720px\" /><br />\r\n&nbsp;<br />\r\nBước 7 : Ho&agrave;n th&agrave;nh, giờ chỉ gần trang tr&iacute; th&ecirc;m cho đẹp th&ocirc;i&nbsp;</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/20/20_11.jpg\" style=\"height:400px; width:553px\" /></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng !!!</span><br />\r\n&nbsp;</p>', 2, NULL, 0, 'y-tuong-thiet-ke-1', '20.11.jpg', 5, 5, 1, '2020-11-20', NULL),
(21, 'Vừa mới \"quẩy\" hết mình trong Rap Việt, dàn sao thí sinh lại tiếp tục \"xuất chiêu\" trong một cuộc thi mới.', '<p><span style=\"font-size:16px\">Vừa mới &quot;quẩy&quot; hết m&igrave;nh trong Rap Việt; 16 Typh, Duy Andy, AK49 v&agrave; cả R.Tee lại khiến Rap fan đứng ngồi kh&ocirc;ng y&ecirc;n khi tiếp tục &quot;xuất chi&ecirc;u&quot; trong một cuộc thi mới.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Trong b&agrave;i đăng mới đ&acirc;y, những ch&agrave;ng trai &quot;v&agrave;ng&quot; của Rap Việt một lần nữa đ&atilde; khiến người h&acirc;m mộ Rap đ&atilde; mắt đ&atilde; tai trong video mới nhất. Được biết, c&aacute;c rapper đang tham gia thử th&aacute;ch mới toanh.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">16 Typh đ&atilde; l&agrave;m ngay 1 &quot;freeverse&quot; ngẫu hứng dựa tr&ecirc;n ch&iacute;nh trải nghiệm của m&igrave;nh:</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&quot;Anh đ&atilde; từng ph&aacute;t tờ rơi, đ&atilde; từng b&ecirc; lễ/ Từng l&agrave;m chạy b&agrave;n, v&agrave; từng b&ecirc; trễ.</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>Từng mở qu&aacute;n rượu, nh&acirc;m nhi c&agrave; ph&ecirc;/ Từng b&aacute;n quần &aacute;o, từng l&agrave;m đủ nghề&quot;.</em></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><em><img alt=\"\" src=\"/ckfinder/userfiles/images/21/photo-1-1603436058263387139712.jpg\" style=\"height:517px; width:500px\" /></em></span></p>\r\n\r\n<p><span style=\"font-size:16px\">H&agrave;ng loạt fan nữ đ&atilde; đổ gục trước chất giọng v&agrave; thần th&aacute;i của 16 Typh. Nhiều bạn c&ograve;n &quot;b&igrave;nh loạn&quot;: &quot;Ng&agrave;y xưa cũng đi b&ecirc; lễ m&agrave; sao kh&ocirc;ng gặp anh&quot; rồi th&igrave; &quot;kh&ocirc;ng th&iacute;ch nghe chơi chơi ạ th&iacute;ch nghe thiệt thiệt &agrave;&quot;, &quot;Đẹp trai lại c&ograve;n rap hay&quot;.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&ocirc;ng đứng ngo&agrave;i cuộc chơi, Duy Andy cũng l&agrave;m ngay một b&agrave;i g&oacute;p vui. Anh ch&agrave;ng lập tức nhận về v&ocirc; số ủng hộ từ fan.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/21/photo-1-16034360617241255105040.jpg\" style=\"height:511px; width:500px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ch&agrave;ng rapper khẳng định muốn th&agrave;nh c&ocirc;ng th&igrave; kh&ocirc;ng thể lười biếng, cũng đừng ngồi đ&oacute; m&agrave; ganh tị với người kh&aacute;c:&nbsp;<em>&quot;Đừng m&agrave; ngồi đ&oacute;, n&oacute;i xong cười cười / Cười người h&ocirc;m trước h&ocirc;m sau a người cười&quot;.</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đ&acirc;y l&agrave; cuộc thi đang được cộng đồng mạng hưởng ứng nồng nhiệt. Cơ hội đ&atilde; tới để c&aacute;c bạn trẻ s&aacute;ng tạo chất ri&ecirc;ng, thể hiện c&aacute; t&iacute;nh v&agrave; quan điểm c&aacute; nh&acirc;n. Một l&yacute; do nữa khiến Rap Battle thu h&uacute;t được đ&ocirc;ng đảo cộng đồng mạng quan t&acirc;m l&agrave; chủ đề tham gia kh&aacute; rộng. Người tham gia c&oacute; thể chọn rap về t&igrave;nh y&ecirc;u, bạn b&egrave;, gia đ&igrave;nh&hellip; miễn sao c&oacute; thể thể hiện nỗ lực vượt l&ecirc;n ch&iacute;nh m&igrave;nh mỗi ng&agrave;y.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/21/photo-2-1603436061732674013615.jpg\" style=\"height:236px; width:500px\" /></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/21/image007-16034361819591766521909.png\" style=\"height:212px; width:500px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Rất nhiều b&agrave;i dự thi đ&atilde; được upload l&ecirc;n Facebook của người d&ugrave;ng. Chỉ cần t&igrave;m kiếm hashtag #momorapbattle l&agrave; c&oacute; thể dễ d&agrave;ng t&igrave;m thấy những bản Rap &quot;chất chơi&quot; kh&ocirc;ng k&eacute;m g&igrave; c&aacute;c Rapper chuy&ecirc;n nghiệp.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Được biết, đ&acirc;y l&agrave; cuộc thi được MoMo v&agrave; Binz tổ chức với t&ecirc;n gọi ch&iacute;nh thức l&agrave; &quot;Mọi số 1 đều bắt đầu từ số 0&quot;. Với những th&agrave;nh quả đ&atilde; đạt được: 20 triệu người d&ugrave;ng, 120.000 điểm chấp nhận thanh to&aacute;n, t&ecirc;n tuổi của MoMo - danh hiệu si&ecirc;u ứng dụng V&iacute; điện tử số 1 Việt Nam l&agrave; qu&aacute; đủ để bảo chứng cho sự tầm cỡ v&agrave; độ tin cậy của cuộc thi (theo kết quả khảo s&aacute;t v&agrave; b&igrave;nh chọn của độc giả tạp ch&iacute; nhịp cầu đầu tư tại Việt Nam từ th&aacute;ng 8/2020 đến th&aacute;ng 8/2021).</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Phần thưởng của Rap Battle l&agrave; 1.000 chiếc &aacute;o hoodie &quot;Trendsetter&quot; từng xuất hiện trong MV &quot;021&quot; của Binz cho 1.000 b&agrave;i dự thi xuất sắc v&agrave; may mắn. Đặc biệt, b&agrave;i rap hay nhất sẽ được ch&iacute;nh Binz chia sẻ tr&ecirc;n trang c&aacute; nh&acirc;n của m&igrave;nh. Thời gian nộp bài dự thi k&eacute;o d&agrave;i từ ngày 11/10 - 26/10/2020. Tham khảo th&ocirc;ng tin chi tiết về Rap Battle&nbsp;<a href=\"https://momo.vn/tin-tuc/tin-tuc-su-kien/cuoc-thi-rap-battle-moi-so-1-deu-bat-dau-tu-so-0-1432\" rel=\"nofollow\" target=\"_blank\" title=\"tại đây\">tại đ&acirc;y</a>.</span></p>', 4, NULL, 0, 'vua-moi-quay-het-minh-trong-rapviet-dan-thi-sinh-lai-tiep-tuc-tham-gia-cuoc-thi-moi', 'hanh_or_16_typh_ccvv.jpg', 6, 9, 1, '2020-11-20', NULL),
(22, 'Chưa kịp khai trương, cửa hàng Apple Center đã buộc phải gỡ logo \"táo khuyết\"', '<p><span style=\"font-size:16px\">Được biết ph&iacute;a Apple Store đ&atilde; y&ecirc;u cầu của h&agrave;ng n&agrave;y phải gỡ bỏ logo Apple trước ng&agrave;y 27/11 tới đ&acirc;y.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đầu th&aacute;ng 11, cộng đồng mạng x&ocirc;n xao trước th&ocirc;ng tin một cửa h&agrave;ng kh&aacute; giống Apple Store chuẩn bị khai trương tại H&agrave; Nội. Cửa h&agrave;ng c&oacute; diện t&iacute;ch lớn, tọa lạc tại một trong những khu phố sầm uất bậc nhất thủ đ&ocirc;, với t&ecirc;n gọi Apple Center ở ph&iacute;a trước đi k&egrave;m biểu tượng logo quả t&aacute;o cắn dở ph&aacute;t s&aacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">D&ugrave; b&aacute;n t&iacute;n b&aacute;n nghi nhưng nhiều người đ&atilde; ngay lập tức nhận ra cửa h&agrave;ng n&agrave;y kh&ocirc;ng phải Apple Store ch&iacute;nh h&atilde;ng của nh&agrave; &quot;t&aacute;o khuyết&quot;. Cho đến hiện tại, Apple Store mới xuất hiện ở 2 quốc gia thuộc khu vực Đ&ocirc;ng Nam &Aacute; l&agrave; Singapore (3 cửa h&agrave;ng) v&agrave; Th&aacute;i Lan (1 cửa h&agrave;ng). C&aacute;c cửa h&agrave;ng n&agrave;y c&oacute; đặc điểm chung l&agrave; ph&iacute;a mặt tiền chỉ xuất hiện duy nhất logo &quot;t&aacute;o khuyết&quot; ph&aacute;t s&aacute;ng, kh&ocirc;ng đi k&egrave;m t&ecirc;n gọi &quot;Apple Store&quot; hay &quot;Apple Center&quot; hoặc bất cứ từ ngữ n&agrave;o li&ecirc;n quan đến Apple.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/22/photo1605922687222-160592268793638702497.jpg\" style=\"height:300px; width:479px\" /></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Mới đ&acirc;y, nguồn tin của Zing đ&atilde; ch&iacute;nh thức x&aacute;c nhận cửa h&agrave;ng &quot;Apple Center&quot; n&oacute;i tr&ecirc;n kh&ocirc;ng thuộc danh s&aacute;ch c&aacute;c đại l&yacute; ủy quyền tại Việt Nam, c&agrave;ng kh&ocirc;ng phải Apple Store.</span></p>', 6, NULL, 2, 'chua-kip-khai-truong-cua-hang-apple-fake-da-buoc-go-logo', 'photo1605922687222-160592268793638702497.jpg', 6, 12, 1, '2020-11-21', NULL),
(23, 'Tổ đội Bạn Có Tài Mà sắp trở lại đường đua RapViet với loạt MV mới', '<p><span style=\"font-size:16px\">Với việc cho ra mắt MV 6 Chill, tổ đội rap Bạn c&oacute; t&agrave;i m&agrave; ch&iacute;nh thức trở lại đường đua Rapviet c&ugrave;ng với những &ocirc;ng lớn BTS, &quot;d&acirc;n chơi x&oacute;m&quot; của MCK v&agrave; Justatee hay Hồng t&agrave;n của tổ đội rap miền t&acirc;y G5R , Tượng của YC,....<br />\r\n<br />\r\nChỉ trong 10 tiếng ra mắt, MV đ&atilde; lọt top #47 trending v&agrave; vẫn chưa c&oacute; dấu hiệu dừng lại</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><iframe align=\"middle\" frameborder=\"0\" height=\"315\" scrolling=\"no\" src=\"https://www.youtube.com/embed/sK17eMaPo0Y\" width=\"560\"></iframe></p>\r\n\r\n<p><span style=\"font-size:16px\">BẠN C&Oacute; T&Agrave;I M&Agrave; hay BCTM l&agrave; 1 giải freestyle được ưa th&iacute;ch ở Việt Nam. Giải qui tụ nhiều freestyler giỏi v&agrave; tương t&aacute;c với nhiều rapper m&aacute;u mặt trong RV. Kh&aacute;c với DISSNEELAND, tuy kh&ocirc;ng ch&uacute; trọng c&aacute;c khả năng chơi chữ, BCTM mang đậm t&iacute;nh freestyle v&agrave; battle của họ c&oacute; beat, giới hạn thời gian 1 v&ograve;ng. Ban Tổ chức gồm c&aacute;c rapper như: Kh&aacute;nh Jayz, Dick, S&oacute;i (Cao Minh T&agrave;i),...<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<img alt=\"\" src=\"/ckfinder/userfiles/images/23/maxresdefault.jpg\" style=\"height:400px; width:711px\" /><br />\r\n<br />\r\nTiền th&acirc;n l&agrave; một giải freestyle v&agrave; rapper Dick đ&atilde; đứng ra tập hợp c&aacute;c anh em để tạo th&agrave;nh một nh&oacute;m rap của những người c&ugrave;ng đam m&ecirc;. Kết quả thu được l&agrave; những b&agrave;i nhạc, MV triệu view điển h&igrave;nh như series Sống cho hết đời thanh xu&acirc;n, Anh đ&atilde; lớn hơn thế nhiều - Dick,Michelle Nguyễn, Anh biết - X&aacute;m,Dblue,....hay nhiều b&agrave;i nhạc kh&aacute;c cũng được đ&oacute;n nhận từ những rapper trẻ tuổi v&agrave; đầy t&agrave;i năng.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"/ckfinder/userfiles/images/23/Bctm.jpg\" style=\"height:400px; width:400px\" /><br />\r\n<br />\r\n<br />\r\n<br />\r\nC&oacute; thể n&oacute;i , năm 2020 l&agrave; một năm b&ugrave;ng nổ của Rap việt với loạt hits, nhiều rapper được biến đến, d&ograve;ng nhạc rap được biết đến nhiều hơn, hay nổi bật nhất l&agrave; sự xuất hi&ecirc;n của 2 chương tr&igrave;nh lớn d&agrave;nh được sự quan t&acirc;m l&oacute;n từ đ&ocirc;ng đảo kh&aacute;n giả mọi lứa tuổi. Hy vọng trong tương lai kh&ocirc;ng xa, kh&ocirc;ng chỉ Bạn c&oacute; t&agrave;i m&agrave;, m&agrave; sẽ c&oacute; nhiều nh&oacute;m rap kh&aacute;c ra đời, nhiều rapper t&agrave;i năng được biết đến, nhiều b&agrave;i nhạc hay kh&aacute;c nữa. Shout -out Rapviet.</span><br />\r\n<br />\r\n&nbsp;</p>', 6, NULL, 0, 'ban-co-tai-ma-sap-tro-lai-duong-dua-rapviet-bang-loat-mv -moi', '126844098_3784476334936773_863855398825971399_o.jpg', 6, 10, 1, '2020-11-23', NULL),
(24, 'MU tái đấu PSG cúp C1: Cavani bắt bài đội cũ, giúp “Quỷ đỏ” sớm đi tiếp?', '<p><span style=\"font-size:16px\">Trận lượt về giữa MU v&agrave; PSG ở v&ograve;ng bảng Champions League năm nay sẽ l&agrave; cơ hội tốt để t&acirc;n binh Edinson Cavani chứng tỏ gi&aacute; trị của m&igrave;nh khi ch&acirc;n s&uacute;t thượng hạng n&agrave;y c&oacute; dịp đối đầu đội b&oacute;ng m&agrave; anh từng gi&agrave;nh kh&ocirc;ng &iacute;t vinh quang.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Điểm s&aacute;ng từ Cavani</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&aacute;c hẳn chiến thắng nhọc nhằn v&agrave; c&oacute; phần may mắn khi vượt qua West Brom 1-0 ở v&ograve;ng 9 giải Ngoại hạng Anh, rạng s&aacute;ng 25/11, vẫn tr&ecirc;n s&acirc;n nh&agrave; Old Trafford, MU đ&atilde; đ&egrave; bẹp Istanbul Basaksehir 4-1 tại lượt trận thứ tư bảng H Champions League (c&uacute;p C1).</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đ&acirc;y kh&ocirc;ng phải l&agrave; đối thủ dễ chơi khi c&aacute;ch đ&acirc;y 3 tuần, &quot;Quỷ đỏ&quot;&nbsp;từng thua đội b&oacute;ng của HLV Okan Buruk 1-2 tr&ecirc;n đất Thổ Nhĩ Kỳ. Đ&ograve;i nợ s&ograve;ng phẳng Istanbul Basaksehir ở Old Trafford, MU chứng tỏ họ ho&agrave;n to&agrave;n c&oacute; thể chơi tấn c&ocirc;ng b&ugrave;ng nổ v&agrave; hiệu quả với sơ đồ 4-3-2-1.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Trong sơ đồ n&agrave;y, t&acirc;n binh Edinson Cavani đ&oacute;ng vai tr&ograve; rất quan trọng. Ng&ocirc;i sao người Uruguay ch&iacute;nh l&agrave; tiền đạo&nbsp;trung t&acirc;m thu h&uacute;t hậu vệ đối phương gi&uacute;p 2 tiền đạo c&aacute;nh Marcus Rashford v&agrave; Anthony Martial, cũng như tiền vệ Bruno Fernandes, c&oacute; nhiều khoảng trống hơn để thuận lợi dứt điểm.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Theo thống k&ecirc; của trang Whoscored, trong trận đấu với Istanbul Basaksehir vừa qua ở Old Trafford, Cavani đ&atilde; đạt thang điểm kh&aacute; tốt ở mức 7/10, tung ra 3 c&uacute; dứt điểm, chuyền b&oacute;ng ch&iacute;nh x&aacute;c tới 96%, c&oacute; 1 pha r&ecirc; b&oacute;ng th&agrave;nh c&ocirc;ng v&agrave; chiến thắng trong 1 pha kh&ocirc;ng chiến. Đ&oacute; l&agrave; thống k&ecirc; kh&ocirc;ng hề tồi với một cầu thủ đ&atilde; 33 tuổi v&agrave; mới &quot;ch&acirc;n ướt ch&acirc;n r&aacute;o&quot; đến một đội b&oacute;ng lớn như MU.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cavani đ&atilde; c&oacute; b&agrave;n thắng ra mắt giải Ngoại hạng Anh khi ấn định m&agrave;n lội ngược d&ograve;ng với tỷ số 3-1 của MU tr&ecirc;n s&acirc;n của Everton h&ocirc;m 7/11. Đ&aacute;ng ch&uacute; &yacute;, h&ocirc;m 29/11 vừa qua, ch&iacute;nh ch&acirc;n s&uacute;t 33 tuổi n&agrave;y sắm vai người h&ugrave;ng khi v&agrave;o s&acirc;n từ hiệp 2 v&agrave; đ&oacute;ng g&oacute;p 1 pha kiến tạo c&ugrave;ng c&uacute; đ&uacute;p b&agrave;n thắng để gi&uacute;p &quot;Quỷ đỏ&quot; thắng ngược Southampton 3-2, d&ugrave; họ bị đội chủ s&acirc;n St. Mary&#39;s dẫn trước 2 b&agrave;n ở v&ograve;ng 10 giải đấu số 1 xứ sở sương m&ugrave;.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/24/mu-2.jpg\" style=\"height:403px; width:650px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ng&ocirc;i sao c&oacute; biệt danh &quot;V&otilde; sĩ đấu b&ograve;&quot; hiện đang t&igrave;m kiếm pha lập c&ocirc;ng đầu ti&ecirc;n cho &quot;Quỷ đỏ&quot; ở Champions League năm nay.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cavani sẽ c&oacute; cơ hội l&agrave;m điều đ&oacute; nếu anh được HLV Ole Gunnar Solskjaer tung v&agrave;o s&acirc;n ở trận đại chiến khi MU đ&oacute;n tiếp PSG l&uacute;c 3h rạng s&aacute;ng 3/12 (giờ Việt Nam) sắp tới ở lượt trận &aacute;p ch&oacute;t. Đ&oacute; l&agrave; trận đấu m&agrave; &quot;nửa đỏ th&agrave;nh Manchester&quot; chỉ cần kh&ocirc;ng thua &quot;g&atilde; nh&agrave; gi&agrave;u nước Ph&aacute;p&quot; l&agrave; sẽ chắc chắn đảm bảo 1 trong 2 vị tr&iacute; dẫn đầu bảng H v&agrave; sớm đoạt v&eacute; dự&nbsp;<a href=\"https://www.24h.com.vn/cup-c1-champions-league-c153.html\" title=\"vòng 1/8 Champions League\">v&ograve;ng 1/8 Champions League</a>&nbsp;m&ugrave;a n&agrave;y sớm 1 lượt trận v&ograve;ng bảng.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">MU đấu đương kim &aacute; qu&acirc;n ch&acirc;u &Acirc;u PSG, Cavani ch&iacute;nh l&agrave; người hiểu đội b&oacute;ng n&agrave;y nhất. Tiền đạo 33 tuổi người Uruguay ch&iacute;nh l&agrave; kỷ lục gia ghi b&agrave;n nhiều nhất đội chủ s&acirc;n C&ocirc;ng vi&ecirc;n c&aacute;c Ho&agrave;ng tử với 200 lần &quot;nhả đạn&quot; sau 301 lần ra s&acirc;n tr&ecirc;n mọi đấu trường.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>&quot;Bom tấn&quot; MU chờ cơ hội gieo sầu đội b&oacute;ng cũ</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cavani từng c&ugrave;ng Neymar v&agrave; Kylian Mbappe tạo n&ecirc;n &quot;c&acirc;y đinh ba&quot;&nbsp;tấn c&ocirc;ng v&ocirc; c&ugrave;ng lợi hại của PSG. Thế nhưng, tiền đạo sinh năm 1987 đ&atilde; kh&ocirc;ng được HLV Thomas Tuchel trọng dụng m&ugrave;a trước với chỉ 22 trận được ra s&acirc;n m&ugrave;a trước v&agrave; ghi vỏn vẹn 7 b&agrave;n cho &quot;Le Parisien&quot;.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Sắp tới, gặp lại đội b&oacute;ng cũ, Cavani c&oacute; thể l&agrave; &quot;qu&acirc;n b&agrave;i tẩy&quot; đ&aacute;ng gờm m&agrave; HLV Solskjaer v&agrave; MU chuẩn bị để đối ph&oacute; với PSG, đối thủ cạnh tranh trực tiếp ng&ocirc;i đầu bảng v&agrave; v&eacute; đi tiếp với họ. Cựu tiền đạo Napoli c&oacute; khả năng đ&aacute;nh đầu hay dứt điểm bằng cả 2 ch&acirc;n rất tốt. Anh c&ograve;n l&agrave; mẫu tiền đạo c&oacute; khả năng l&agrave;m tường, hay thu h&uacute;t hậu vệ đối phương ấn tượng.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/24/MU-tai-dau-PSG-cup-C1-Cavani-gieo-sau-doi-cu-giup-Quy-do-som-di-tiep-neymar-cavani-mbappe-1606291853-82-width660height509.jpg\" style=\"height:509px; width:660px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đ&oacute; sẽ l&agrave; một trong những &quot;ng&oacute;n đ&ograve;n&quot; lợi hại trong thế trận m&agrave; MU c&oacute; thể chơi ph&ograve;ng ngự chặt - phản c&ocirc;ng nhanh theo đ&uacute;ng sở trường của họ để bắt PSG nếm tr&aacute;i đắng như khi &quot;Quỷ đỏ&quot; đ&aacute;nh bại đội b&oacute;ng nước Ph&aacute;p ngay ở Paris h&ocirc;m 21/10 tại lượt trận ra qu&acirc;n tại Champions League m&ugrave;a n&agrave;y. Biết đ&acirc;u đấy, định mệnh c&oacute; thể chọn Cavani &quot;x&eacute; lưới&quot; đội b&oacute;ng cũ để gi&uacute;p đội b&oacute;ng mới của anh sớm đi tiếp.</span></p>', 4, NULL, 1, 'mu-tai-dau-psg-cup-c1-cavani-bat-bai-doi-cu-giup-quy-do-di-tiep', 'mu-2.jpg', 7, 15, 1, '2020-12-02', NULL),
(25, 'Son Heung Min làm điên đảo Ngoại hạng Anh: Báo Hàn Quốc hé lộ bí mật bất ngờ', '<p><span style=\"font-size:18px\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Truyền th&ocirc;ng H&agrave;n Quốc dậy s&oacute;ng sau m&agrave;n tr&igrave;nh diễn đỉnh cao của tiền đạo Son Heung Min, gi&uacute;p Tottenham vượt qua Arsenal.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Son Heung Min g&oacute;p c&ocirc;ng v&agrave;o cả 2 b&agrave;n thắng của&nbsp;<a href=\"https://www.24h.com.vn/tottenham-hotspur-c48e4412.html\" style=\"color:blue; text-decoration:underline\" title=\"Tottenham\">Tottenham</a>&nbsp;trước Arsenal, tiếp tục cho thấy khả năng chớp thời cơ tuyệt vời v&agrave; sự kết hợp xuất sắc với Harry Kane. B&agrave;n thắng mở tỉ số của Son l&agrave; một pha b&oacute;ng mang t&iacute;nh khoảnh khắc, khi ng&ocirc;i sao người H&agrave;n Quốc trong v&ograve;ng v&acirc;y của c&aacute;c hậu vệ Arsenal đ&atilde; tung c&uacute; cứa l&ograve;ng ch&acirc;n phải từ khoảng c&aacute;ch 23m v&agrave;o g&oacute;c xa, khiến Bernd Leno chỉ &ldquo;bay người cho c&oacute;&rdquo;.</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/25/Son-Heung-Min-ghi-sieu-pham-ha-Arsenal-Bao-Han-Quoc-he-lo-bi-mat-bat-ngo-fdfd-1607333299-916-width660height409.jpg\" style=\"height:372px; width:600px\" /></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><em><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Leno l&agrave;m nền cho si&ecirc;u phẩm của Son</span></em></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Truyền th&ocirc;ng H&agrave;n Quốc dậy s&oacute;ng sau si&ecirc;u phẩm n&agrave;y. Tờ Chosun d&agrave;nh phần lớn th&ocirc;ng tin tr&ecirc;n trang chủ mục thể thao để n&oacute;i về Son, t&ocirc;n vinh pha lập c&ocirc;ng rất đặc biệt của cầu thủ con cưng.</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tờ Chosun cho hay b&agrave;n thắng n&agrave;y đặc biệt ở chỗ n&oacute; được ghi ở khoảng c&aacute;ch tầm trung b&ecirc;n ngo&agrave;i v&ograve;ng cấm, điều m&agrave; Son kh&ocirc;ng l&agrave;m được nhiều trong v&agrave;i năm gần đ&acirc;y. M&ugrave;a 2018/19, Son c&oacute; 4 pha lập c&ocirc;ng từ ngo&agrave;i v&ograve;ng cấm trong 12 b&agrave;n thắng c&oacute; được ở&nbsp;<a href=\"https://www.24h.com.vn/bong-da-ngoai-hang-anh-c149.html\" style=\"color:blue; text-decoration:underline\" title=\"Ngoại hạng Anh\">Ngoại hạng Anh</a>. M&ugrave;a 2019/20, anh c&oacute; 11 b&agrave;n nhưng kh&ocirc;ng c&oacute; b&agrave;n n&agrave;o từ ngo&agrave;i v&ograve;ng cấm.</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">N&ecirc;n biết, b&agrave;n thắng ở khoảng c&aacute;ch xa nhất m&agrave; Son c&oacute; được từ khi chuyển đến Ngoại hạng Anh chơi b&oacute;ng l&agrave; pha lập c&ocirc;ng v&agrave;o lưới West Ham ở trận đấu v&agrave;o ng&agrave;y 5/1/2018, khi anh ghi điểm ở khoảng c&aacute;ch 23m, rất tương tự với khoảng c&aacute;ch của si&ecirc;u phẩm v&agrave;o lưới Arsenal mới đ&acirc;y.</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tờ b&aacute;o H&agrave;n Quốc h&eacute; lộ từ thời c&ograve;n chơi b&oacute;ng ở&nbsp;<a href=\"https://www.24h.com.vn/bong-da-duc-c152.html\" style=\"color:blue; text-decoration:underline\" title=\"Bundesliga\">Bundesliga</a>&nbsp;cho Hamburg v&agrave; Leverkusen, Son đ&atilde; được biết đến l&agrave; một cầu thủ c&oacute; khả năng dứt điểm từ ngo&agrave;i v&ograve;ng cấm thượng hạng. Được biết khi c&ograve;n l&agrave; một cầu thủ trẻ, anh thường xuy&ecirc;n luyện tập kỹ năng n&agrave;y với bố của m&igrave;nh, &ocirc;ng Son Woong Jeong, người cũng từng l&agrave; một cầu thủ b&oacute;ng đ&aacute;.</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><img alt=\"\" src=\"/ckfinder/userfiles/images/25/Son-Heung-Min-ghi-sieu-pham-ha-Arsenal-Bao-Han-Quoc-he-lo-bi-mat-bat-ngo-dfdd-1607333397-469-width660height446.jpg\" style=\"height:405px; width:600px\" /></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><em><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">B&aacute;o H&agrave;n Quốc đưa tin d&agrave;y đặc về Son</span></em></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Chia sẻ sau trận đấu, ch&iacute;nh Son cũng thừa nhận đ&acirc;y l&agrave; &ldquo;vị tr&iacute; s&uacute;t b&oacute;ng m&agrave; t&ocirc;i đ&atilde; luyện tập rất nhiều, nhưng t&ocirc;i kh&ocirc;ng thể ngờ đường b&oacute;ng lại bay đi như vậy&rdquo;. Tiền đạo người H&agrave;n Quốc c&ograve;n tỏ ra h&oacute;m hỉnh với c&acirc;u đ&ugrave;a rằng anh &ldquo;kh&ocirc;ng thể khi&ecirc;m tốn được nữa v&igrave; b&agrave;n thắng n&agrave;y qu&aacute; đẹp&rdquo;.</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Nếu như ở b&agrave;n mở tỉ số, Son được Kane kiến tạo th&igrave; đến cuối hiệp một, ng&ocirc;i sao người H&agrave;n Quốc đ&atilde; c&oacute; pha &ldquo;đ&aacute;p lễ&rdquo; khi nhả b&oacute;ng cực đẹp để Kane dứt điểm quyết đo&aacute;n nh&acirc;n đ&ocirc;i c&aacute;ch biệt cho Spurs. T&iacute;nh từ đầu m&ugrave;a ở Ngoại hạng Anh, Son v&agrave; Kane đ&atilde; kết hợp với nhau trong tổng cộng 11 b&agrave;n.</span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Xa hơn nữa, t&iacute;nh từ trước đến nay, bộ đ&ocirc;i n&agrave;y c&ugrave;ng nhau đ&atilde; ghi đến 31 b&agrave;n ở Ngoại hạng Anh v&agrave; chỉ c&ograve;n k&eacute;m cặp ghi nhiều b&agrave;n nhất trong lịch sử l&agrave; Didier Drogba v&agrave; Frank Lampard (36 b&agrave;n). Với đ&agrave; n&agrave;y, cặp &ldquo;song s&aacute;t&rdquo; của Spurs ho&agrave;n to&agrave;n c&oacute; thể tạo n&ecirc;n một kỷ lục mới ở m&ugrave;a n&agrave;y.</span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>', 4, NULL, 0, 'son-heung-ming-lam-dien-dao-ngoai-hang-anh-bao-han-quoc-he-lo-bi-mat', 'Video-Tottenham---Arsenal-dinh-cao-Son-Heung-Min---Harry-Kane-tot-1607275501-792-width660height372.jpg', 7, 15, 1, '2020-12-08', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_reply_comment`
--

CREATE TABLE `tbl_reply_comment` (
  `reply_cmt_id` bigint(20) UNSIGNED NOT NULL,
  `reply_cmt_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `cmt_id` int(11) NOT NULL,
  `reply_cmt_created_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_reply_comment`
--

INSERT INTO `tbl_reply_comment` (`reply_cmt_id`, `reply_cmt_content`, `id`, `cmt_id`, `reply_cmt_created_at`, `updated_at`) VALUES
(7, 'phản hồi', 1, 4, '2020-11-17', NULL),
(15, 'goob', 1, 9, '2020-12-07', NULL),
(16, 'phản hồi', 1, 10, '2020-12-07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_topic`
--

CREATE TABLE `tbl_topic` (
  `topic_id` int(10) UNSIGNED NOT NULL,
  `topic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_topic`
--

INSERT INTO `tbl_topic` (`topic_id`, `topic_name`, `topic_describe`, `topic_amount`, `topic_color`) VALUES
(5, 'Công nghệ', '<p>Chủ đề về c&ocirc;ng nghệ, m&aacute;y t&iacute;nh, th&ocirc;ng tin, thủ thuật, phần cứng, phần mềm</p>', NULL, 'cata-primary'),
(6, 'Đời sống', '<p>Chủ đề về đời sống</p>', NULL, 'cata-warning'),
(7, 'Thể thao', '<p>Chủ đề về thể thao</p>', NULL, 'cata-success'),
(8, 'Cửa hàng', '<p>Cửa h&agrave;ng</p>', NULL, 'cata-danger');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đăng Khoa', 'mitomxao605@gmail.com', NULL, 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2020-11-13 17:00:00', NULL),
(2, 'Messi', 'messi@gmail.com', NULL, 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2020-11-16 17:00:00', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Chỉ mục cho bảng `tbl_item_topic`
--
ALTER TABLE `tbl_item_topic`
  ADD PRIMARY KEY (`item_topic_id`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `tbl_reply_comment`
--
ALTER TABLE `tbl_reply_comment`
  ADD PRIMARY KEY (`reply_cmt_id`);

--
-- Chỉ mục cho bảng `tbl_topic`
--
ALTER TABLE `tbl_topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_user_email_unique` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `cmt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_item_topic`
--
ALTER TABLE `tbl_item_topic`
  MODIFY `item_topic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_reply_comment`
--
ALTER TABLE `tbl_reply_comment`
  MODIFY `reply_cmt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_topic`
--
ALTER TABLE `tbl_topic`
  MODIFY `topic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
