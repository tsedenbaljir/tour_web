-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2020 at 03:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `blanks`
--

CREATE TABLE `blanks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blanks`
--

INSERT INTO `blanks` (`id`, `data`, `created_at`, `updated_at`) VALUES
(1, '<p>Hello World</p>', '2020-04-25 21:42:23', '2020-04-25 21:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_english`
--

CREATE TABLE `comment_english` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_english`
--

INSERT INTO `comment_english` (`id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'valandroy', 'The camp is so peaceful after the Trans Siberian. It is about 90 minutes drive but the park itself is worth it. We visited start of October so only one other couple staying. The Gers are very comfy and a great experience. The fire was lit when we arrived and the young girls keep it going for you, even stoking it again at 6am. The girls also carried our luggage for us.The food was terrific, with plenty to eat and there is hot water for a cuppa in your ger.The bathrooms are seperate but very clean and the water was hot.', '2020-04-25 21:42:24', '2020-04-25 21:42:24'),
(2, 'Heather K', 'Absolutely Excellent in Every Way. WE LOVED TAMIR CAMP! This ger camp is tucked away in a place of extraordinary beauty. Trails everywhere, each one leading to a unique view. Delicious food, felt totally cared for by the Tamir staff. Immaculate facility. Glorious! We didn\'t want to leave.', '2020-04-25 21:42:24', '2020-04-25 21:42:24'),
(3, 'Kate T', 'We had an excellent experience at the Tamir Wellness Camp where we stayed as part of a Real Russia Trans-Mongolian Train Tour. The ger was clean and spacious and very comfortable - we slept incredibly well during our stay. ... The food was tasty and we also paid extra for a massage in the dedicated \'massage ger\' which was very relaxing. This is a great location for exploring the surrounding area including Turtle Rock and the Genghis Khan monument - highly recommend!!', '2020-04-25 21:42:24', '2020-04-25 21:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `comment_header`
--

CREATE TABLE `comment_header` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_mongolia`
--

CREATE TABLE `comment_mongolia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_mongolia`
--

INSERT INTO `comment_mongolia` (`id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'valandroy', 'The camp is so peaceful after the Trans Siberian. It is about 90 minutes drive but the park itself is worth it. We visited start of October so only one other couple staying. The Gers are very comfy and a great experience. The fire was lit when we arrived and the young girls keep it going for you, even stoking it again at 6am. The girls also carried our luggage for us.The food was terrific, with plenty to eat and there is hot water for a cuppa in your ger.The bathrooms are seperate but very clean and the water was hot.', '2020-04-25 21:42:24', '2020-04-25 21:42:24'),
(2, 'Heather K', 'Absolutely Excellent in Every Way. WE LOVED TAMIR CAMP! This ger camp is tucked away in a place of extraordinary beauty. Trails everywhere, each one leading to a unique view. Delicious food, felt totally cared for by the Tamir staff. Immaculate facility. Glorious! We didn\'t want to leave.', '2020-04-25 21:42:24', '2020-04-25 21:42:24'),
(3, 'Kate T', 'We had an excellent experience at the Tamir Wellness Camp where we stayed as part of a Real Russia Trans-Mongolian Train Tour. The ger was clean and spacious and very comfortable - we slept incredibly well during our stay. ... The food was tasty and we also paid extra for a massage in the dedicated \'massage ger\' which was very relaxing. This is a great location for exploring the surrounding area including Turtle Rock and the Genghis Khan monument - highly recommend!!', '2020-04-25 21:42:24', '2020-04-25 21:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_mn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone_number`, `location`, `location_mn`, `email`, `created_at`, `updated_at`) VALUES
(1, '+976 9911 2044', 'Tamir Camp Road, Terelj, Nalaikha, 12770, Mongolia', 'Tamir Camp Road, Terelj, Nalaikha, 12770, Mongolia', 'info@tamirwellness.com', '2020-04-25 21:42:23', '2020-04-25 21:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `home_headers`
--

CREATE TABLE `home_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_09_130250_book', 1),
(4, '2019_06_10_062911_comment', 1),
(5, '2019_06_12_025502_comment_header', 1),
(6, '2019_06_13_051241_contact', 1),
(7, '2019_06_17_083811_create_roles_table', 1),
(8, '2019_06_17_084556_create_user_role_table', 1),
(9, '2019_06_19_054607_create_blanks_table', 1),
(10, '2019_06_20_062904_create_services_table', 1),
(11, '2019_06_20_063559_create_home_headers_table', 1),
(12, '2019_06_22_075637_create_service_mongolias_table', 1),
(13, '2019_06_22_185538_create_comment_mongolias_table', 1),
(14, '2019_06_20_062904_create_notes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `desc`, `src`, `data`, `created_at`, `updated_at`) VALUES
(1, 'eeeeeeeeeeeeeeeeeeee', 'weoooooo', '/image/upload/1587896114.png', '<p>asdfasdf asdf asdf asdf</p><p>as&nbsp;</p><p>sda</p><p>f</p><p>&nbsp;</p><p>asf&nbsp;</p><p>af</p><p>asdf</p><p>asd</p>', '2020-04-26 02:15:14', '2020-04-26 02:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'inbox', 'Read & Archive inbox', '2020-04-25 21:42:23', '2020-04-25 21:42:23'),
(2, 'home', 'Add & Remove Home items', '2020-04-25 21:42:23', '2020-04-25 21:42:23'),
(3, 'comment', 'Add & Remove Comment items', '2020-04-25 21:42:23', '2020-04-25 21:42:23'),
(4, 'contact', 'Edit contact items', '2020-04-25 21:42:23', '2020-04-25 21:42:23'),
(5, 'service', 'Edit & remove Services', '2020-04-25 21:42:23', '2020-04-25 21:42:23'),
(6, 'blank', 'Edit & remove Blank', '2020-04-25 21:42:23', '2020-04-25 21:42:23'),
(7, 'admin', 'Can do anything', '2020-04-25 21:42:23', '2020-04-25 21:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `service_english`
--

CREATE TABLE `service_english` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_english`
--

INSERT INTO `service_english` (`id`, `title`, `desc`, `src`, `data`, `created_at`, `updated_at`) VALUES
(1, 'БИ ХЭРХЭН ЗУРАГАА ДАРЖ ЯНЗАЛДАГ ВЭ?', 'За амласан ёсоороо би та бүхэндээ хэрхэн зурагаа авхуулж, янзалдаг мѳн ямар аппликейшн ашигладаг талаараа хүргэж байна ❤️<br>\r\n\r\nѲѳртѳѳ хадгалаад аваарай 😇', '/image/upload/1587883049.png', '<p><br>Би аялалдаа ямар ч камер авж явдаггүй.😅 Учир нь үүргэвчтэй аялал хийхэд том камер бас дагалдах хэрэгслүүд нь надад авч явахад хэцүү байдаг. 😁 Түүний оронд маш сайн пиксельтэй зураг дарах утсанд мѳнгѳѳ харамладаггүй шүү. 👍<br>Зураг сайн дардаг, цэнэгээ удаан барьдаг утас сонгох нь ухаалаг сонголт санагддаг. ✌️<br>Зѳвлѳгѳѳ:<br>1. Зурагаа янзалахаас битгий тѳвѳгшѳѳгѳѳрэй 🥰<br>Миний бодлоор ямар ч зураг байсан тохирсон ѳнгѳний засвар хийчихэд үнэхээр гоё болчихдог санагддаг. 😊 Би ѳѳрѳѳ тод зурагнуудад маш их дуртай учраас тод эффектуудыг ѳгѳхѳѳсѳѳ айдаггүй 👍 Энэ зургыг Photoshop Express дээр Gleam гэдэг эффект ашигласан 😊<br><br>❗Дараах аппликейшнуудыг ашигладаг:<br>- Photoshop Express<br>- Snapseed<br>- Picsart<br>- Enlight Pixaloop<br>-VSCO гэх мэт.<br><br>2. Зурагаа авхуулахдаа утасныхаа gridlines ашиглаарай 🙏<br>Энэ тохиргоо нь таныг зураг дарахад хэмжээг тааруулах зорилготой 😇 Далийлгаагүй, тэгш хэмэнд авхуулсан, хэмжээ нь тэнцвэртэй гарсан зураг маш гоё харагддаг 😊<br>3. Ѳѳр ѳнцѳгѳѳс авахыг хичээгээрэй 🥰<br>Бидний нүдний хардаг ѳнцѳг нэг л ѳнцѳгт бүх зүйлийг хараад хэвшчихсэн учир уйтгартай байдаг ✌️Тэгэхээр ѳѳр ѳнцѳгѳѳс авах нь бүтээлч харагдуулна шүү 😊<br>4. Фокусаа тааруулаарай 🙏<br>Сүүлийн үеийн ухаалаг утаснууд автоматаар тааруулдаг ч хѳдѳлгѳѳнтэй зураг дарахад фокус сарнидаг учир та бүхэн зураг дарахаас ѳмнѳ байнга фокусаа тааруулаад сурчихад илүүдэхгүй 😇<br>5. Зурагаа авсныхаа дараа тодорхой хугацаанд хѳдѳлгѳѳнгүй тогтоож хурц зураг аваарай. ✌️ Хурц буюу sharpening хийсэн зураг үнэхээр энгийн зурагнаас тэс ондоо зураг харагддаг шүү. 😇<br>Миний PAGE дээр LIKE дарж дараагийн хямд аялалтай хамт байгаарай 👍</p>', '2020-04-25 22:37:29', '2020-04-25 22:37:29'),
(2, 'Яг өвлийн саруудад аялахад хамгийн тохиромжтой улс, орон? ✌️', 'Миний хувьд мэдээж халуун, чийглэг уур амьсгалтай улс, орнууд байдаг. Тэр дундаас Та бүхэндээ📍 ТАЙЛАНД улс руу аялах тухай өөрийн зөвлөмжийг хүргэж байна. 🥰<br>\r\n\r\n                1. Байр, буудал захиалга:<br>\r\n\r\n                Ер нь хаашаа ч аялсан байр буудал захиалахдаа байршлыг харах маш чухал байдаг 😇 Байршлыг сонгохдоо далайн эргийн яг хажууд авбал үнэтэй тусах учраас 15-30 минут алхаад орох газрыг сонгодог. ✌️ </p>', '/image/upload/1587883815.png', '<p>2. Байр буудлын захиалга хийхдээ купон ашиглаарай. 👍<br>Та энэхүү линкээр орж байр захиалахдаа 80.000 тѳгрѳгний хѳнгѳлѳлт эдлээрэй.(<a href=\"https://www.airbnb.ru/c/nomine11?currency=RUB\" target=\"_blank\">Энд дарна уу.</a>)<br>❗www.hotellook.com (<a href=\"http://beta.itpdarkhan.mn/www.hotellook.com\" target=\"_blank\">Энд дарна уу.</a>) энэ сайт их дажгүй санагдсан шүү. Бүх захиалгын сайтуудыг харьцуулаад хамгийн хямд үнийг гаргадаг юм байна лээ. 👍<br>3. Үнэтэй буудалд орох шаардлагагүй 🤩<br>Халуун орон руу аялахад байр буудалдаа ѳдѳржин байх шаардлага гардаггүй ба оройдоо бараг хонох гэж л ирэх учраас илүү зардал гаргах хэрэг байна уу? 😇 Ѳдрийн 30-50.000 тѳгрѳгт ёстой боломжийн хѳѳрхѳн буудалд орчихно шүү.<br>4. Мѳнгѳ, валют 💵<br>Аль болох бэлэн мѳнгѳ авч явах.👌 Тайландад АТМ-ээс бэлэн мѳнгѳ авахад 15-20.000 тѳгрѳгний шимтгэл авч байна лээ. Аймар байгаа биз? 😱<br>Мөн Монголоос шууд Батаа солиулаад авч явсан нь дээр санагдсан. 😇 Миний хувьд Монголоос доллар солиулж авч яваад тэндээ ахиад батаа солиулж байснаас, Монголоосоо шууд Бат аваад явсан нь дээр санагдсан шүү. Монголд Батыг Худалдаа хөгжлийн банк / Trade and Development Bank сольж байсан.<br>5. Ѳдрийн аялал авахдаа маш сайн судалж байж аваарай. ✌️ Та Тайланд орныг зорих гэж байгаа бол нэг ѳдрийн бүх зүйл нь орсон аяллууд маш зүгээр шүү. Бүх зүйл нь багтсан аяллууд хэмнэлттэй тусна. 🤩 Гэхдээ аяллаа сонгохдоо маш сайн судалгаа хийхгүй бол яг адил аяллууд маш том үнийн зѳрүүтэй байдаг. 😊<br>6. Хоол ундаа Makro гэдэг дэлгүүрээс аваад жимс ногоогоо захаас авсан нь маш хэмнэлттэй. ✌️Далайн эрэг рүүгээ ресторанууд нь ер нь үнэтэй байдаг бол бага зэрэг хол байдаг ресторануудад ороход хоол нь 6000-12000 тѳгрѳгний үнэтэй байсан.<br>7. Тайландад явахдаа юу ч худалдан авсан үнийг нь буулгаж байгаарай ✌️<br>Ингээд л МѲРѲѲДЛИЙНХѲѲ📍 ТАЙЛАНД улсад хэн нэгэн, ямар нэгэн компанид мѳнгѳ тѳлѳх шаардлагагүйгээр ѳѳрсдѳѳ ХАМГИЙН ХЯМДААР аялаад ирэх боломжтой шүү ✌️<br>Миний PAGE дээр LIKE дарж дараагийн хямд аялалтай хамт байгаарай 👍</p>', '2020-04-25 22:50:15', '2020-04-25 22:50:15'),
(3, 'aaaaaaaaaaa', 'wenyaaaa', '/image/upload/1587891705.png', '<p><img src=\"/image/upload/1587891666.png\" style=\"width: 938px;\" class=\"fr-fic fr-dib\"></p><p><img src=\"/image/upload/1587891682.png\" style=\"width: 962px;\" class=\"fr-fic fr-dib\"></p><p>dfgdfgddfgdf</p><p>dfgdfg</p>', '2020-04-26 01:01:45', '2020-04-26 01:03:19'),
(4, 'aaaaaaaaaaaaaaaaaa', 'wenyaa', '/image/upload/1587896031.png', '<p>aasdfaasdf aasf d</p>', '2020-04-26 02:13:51', '2020-04-26 02:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `service_mongolia`
--

CREATE TABLE `service_mongolia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sWr6o3m2xd', 'admin@brainstall.com', NULL, '$2y$10$Zy2GiB2CEikmfY1GINrtx.KGiDMBR4MXCKJm15O.ka.5nIBZu7/ru', NULL, '2020-04-25 21:42:24', '2020-04-25 21:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blanks`
--
ALTER TABLE `blanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_english`
--
ALTER TABLE `comment_english`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_header`
--
ALTER TABLE `comment_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_mongolia`
--
ALTER TABLE `comment_mongolia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_headers`
--
ALTER TABLE `home_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_english`
--
ALTER TABLE `service_english`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_mongolia`
--
ALTER TABLE `service_mongolia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blanks`
--
ALTER TABLE `blanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_english`
--
ALTER TABLE `comment_english`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment_header`
--
ALTER TABLE `comment_header`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_mongolia`
--
ALTER TABLE `comment_mongolia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_headers`
--
ALTER TABLE `home_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_english`
--
ALTER TABLE `service_english`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_mongolia`
--
ALTER TABLE `service_mongolia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
