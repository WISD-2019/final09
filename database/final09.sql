-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `final09` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `final09`;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(138,	'2014_10_12_000000_create_users_table',	1),
(139,	'2014_10_12_100000_create_password_resets_table',	1),
(140,	'2019_12_31_131019_create_orders_table',	1),
(141,	'2019_12_31_131130_create_sections_table',	1),
(142,	'2019_12_31_131253_create_movies_table',	1),
(143,	'2019_12_31_131308_create_rooms_table',	1),
(144,	'2019_12_31_131416_create_tickets_table',	1);

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `actor` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `movies` (`id`, `name`, `photo_url`, `introduction`, `director`, `actor`, `length`, `start_date`, `created_at`, `updated_at`) VALUES
(1,	'葉問4：完結篇',	'https://capi.showtimes.com.tw/thumbs/b8/b89a3db2ccc921a9aa2e58fed943d0b8.jpeg',	'★聖誕跨年最強I P，葉問十週年精彩完結篇\r\n★甄子丹宗師回歸，十年傳奇最後一戰\r\n★《葉問》原班人馬再創巔峰，葉問為拯救李小龍， 詠春再戰各路高手\r\n \r\n葉問（甄子丹 飾）在妻子過世後，帶著兒子過著簡單生活，他的學生李小龍（陳國坤 飾）遠赴美國，因打破貫例教授洋人武術，得罪當地唐人街的其他武館。\r\n \r\n葉問受邀赴舊金山唐人街，一方面想了解李小龍的狀況，同時想安排叛逆期的兒子赴美唸書。但他卻見到華人慘遭白人歧視與欺壓，甚至被冠上莫需有的罪名，唐人街風聲鶴唳，讓他決定施展全身武藝，主動挑戰白人強武，以詠春及德性服人，立於天地，讓世界看見。',	'葉偉信(Wilson Yip)',	'甄子丹(Donnie Yen), 陳國坤, 史考特艾金斯(Scott Adkins), 吳建豪',	'110分',	'2019-12-20',	'2020-01-07 08:14:02',	'2020-01-07 08:14:02'),
(2,	'兔嘲男孩',	'https://capi.showtimes.com.tw/thumbs/24/2477b6fe5821f0cd8a71be235d57fb32.jpeg',	'★榮獲本屆多倫多影展觀眾票選大獎及導演大獎  強勢問鼎奧斯卡\r\n★諷刺喜劇鬼才大導塔伊加維迪提 自編自導自演 顛覆想像諷刺全新大作\r\n★「黑寡婦」史嘉蕾喬韓森、「胖艾美」瑞貝威爾森眾星齊聚爆笑衝撞「國家機器」 \r\n \r\n一個10歲的小男孩在大時代的動盪下，他要面對…\r\n國家機器的操弄、意識型態的禁錮、家庭信仰的衝突…\r\n他的小腦袋開始錯亂\r\n他要釐出個真理\r\n他要找到他的生存之道\r\n所以…\r\n他要…\r\n吐嘲這個世界、吐嘲他的信仰、吐嘲他的親友\r\n雖然他膽子如兔子般的小\r\n但他卻有著想與世界爭論的吐嘲決心\r\n他是 「兔嘲男孩」\r\n \r\n好萊塢另類鬼才導演—塔伊加維迪提，聯手福斯探照燈推出二戰黑色幽默諷刺大作。喬喬（羅曼格里芬戴維斯 飾） 身為一個希特勒青年團學員，除了滿腔愛國熱血外，還有個神秘的幻想好友，只是他長的竟然和元首—阿道夫希特勒一樣！\r\n \r\n某天當他赫然發現母親（史嘉蕾喬韓森 飾）竟然在家私藏一名猶太少女時，而這名陌生的猶太人並沒有像青年團教官們說的那麼糟糕，喬喬心中的價值觀陷入一片混亂，他只能靠著他那幻想神秘好友，幫助他面對那盲目的愛國情操。',	'塔伊加維迪提(Taika Waititi)',	'史嘉蕾喬韓森(Scarlett Johansson), 瑞貝爾威爾森(Rebel Wilson), 山姆洛克威爾(Sam Rockwell), 史蒂芬默錢特(Stephen Merchant), 塔伊加維迪提(Taika Waititi), Roman Griffin Davis, 阿爾菲艾倫(Alfie Allen), 湯瑪遜麥肯錫(Thomasin McKenzie)',	'109分',	'2020-01-03',	'2020-01-07 16:38:40',	'2020-01-07 16:38:40'),
(3,	'驅魔直播',	'https://capi.showtimes.com.tw/thumbs/0b/0be0a5bd92f3ddd69c79996908ed7fb4.jpeg',	'網路新時代下，德魯與馬克斯開設網路驅魔直播平台，邀請神父對被附身者進行驅靈，全球觀賞人數超過千萬，但幕後竟是為求成名的裝神弄鬼。但沒想到，某次直播招來真正惡靈，班門弄斧的假神父慘遭攻擊，然而點閱率竟創新高，直播該立即中止還是血濺全網…',	'達米恩萊維克(Damien LeVeck)',	'萊恩高斯曼(Ryan Guzman), 亞里克斯安格利絲(Alix Angelis), 凱爾加納(Kyle Gallner), 艾瑪霍爾茲(Emma Holzer)',	'95分',	'2020-01-03',	'2020-01-07 08:39:31',	'2020-01-07 08:39:31'),
(4,	'別告訴她',	'https://capi.showtimes.com.tw/thumbs/90/90c72f2a7ff299af6a0fdfdc511ba7b6.jpeg',	'本片改編自導演自身的真實經歷，透過奧卡菲娜飾演的比莉，細膩地描述中西文化在處理死亡議題上的衝突。當一個華人家族中德高望重的奶奶被診斷出癌症末期，從小由奶奶撫養長大的比莉選擇向奶奶隱瞞病情，藉由舉辦一場假婚禮，號召全家的人回來見奶奶最後一面……',	'王子逸(Lulu Wang)',	'奧卡菲娜(Awkwafina), 馬志, 水原碧衣, 趙淑珍',	'101分',	'2020-01-03',	'2020-01-07 08:40:18',	'2020-01-07 08:40:18'),
(5,	'這一次不再錯過你',	'https://capi.showtimes.com.tw/thumbs/d8/d820af29c81e44b6f46e1cf1eafa2544.jpeg',	'17歲的小波遇上了另一位從清邁搬來的男孩 阿嘟，兩人從陌生人漸漸成為學校裡最好的朋友，卻也不小心跨越友情的界線，對彼此產生了情愫。無法被世俗理解的感情，兩人承受不了輿論壓力，被現實打破的夢想，兩人選擇妥協分開。23年後，波因工作帶著老婆重回家鄉，過往的回憶全都浮上心頭，這段被封印的感情這次讓他鼓起勇氣，想找回阿嘟及屬於他們的盛夏光年……',	'123',	'123',	'123分',	'2019-12-21',	'2020-01-07 08:41:07',	'2020-01-07 08:41:07');

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sheets` int(11) NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_start_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `sheets`, `movie_name`, `section_start_time`) VALUES
(1,	'2020-01-07 08:14:57',	'2020-01-07 08:14:57',	1,	'1',	'00:00:01'),
(2,	'2020-01-07 08:15:20',	'2020-01-07 08:15:20',	1,	'1',	'00:00:01'),
(3,	'2020-01-07 08:15:26',	'2020-01-07 08:15:26',	1,	'1',	'00:00:01'),
(4,	'2020-01-07 08:16:22',	'2020-01-07 08:16:22',	1,	'1',	'00:00:01'),
(5,	'2020-01-07 08:16:30',	'2020-01-07 08:16:30',	1,	'1',	'00:00:01'),
(6,	'2020-01-07 08:19:31',	'2020-01-07 08:19:31',	1,	'1',	'00:00:01'),
(7,	'2020-01-07 08:20:03',	'2020-01-07 08:20:03',	1,	'1',	'00:00:01'),
(8,	'2020-01-07 08:20:16',	'2020-01-07 08:20:16',	1,	'1',	'00:00:01'),
(9,	'2020-01-07 08:20:19',	'2020-01-07 08:20:19',	1,	'1',	'00:00:01'),
(10,	'2020-01-07 08:21:32',	'2020-01-07 08:21:32',	1,	'1',	'00:00:01'),
(11,	'2020-01-07 08:23:04',	'2020-01-07 08:23:04',	1,	'1',	'00:00:01'),
(12,	'2020-01-07 08:23:04',	'2020-01-07 08:23:04',	1,	'1',	'00:00:01'),
(13,	'2020-01-07 08:23:09',	'2020-01-07 08:23:09',	1,	'1',	'00:00:01'),
(14,	'2020-01-07 08:23:14',	'2020-01-07 08:23:14',	1,	'1',	'00:00:01'),
(15,	'2020-01-07 08:23:31',	'2020-01-07 08:23:31',	1,	'1',	'00:00:01'),
(16,	'2020-01-07 08:25:38',	'2020-01-07 08:25:38',	1,	'1',	'00:00:01'),
(17,	'2020-01-07 08:26:02',	'2020-01-07 08:26:02',	1,	'1',	'00:00:01'),
(18,	'2020-01-07 08:26:12',	'2020-01-07 08:26:12',	1,	'1',	'00:00:01'),
(19,	'2020-01-07 08:31:18',	'2020-01-07 08:31:18',	1,	'1',	'00:00:01'),
(20,	'2020-01-07 08:31:45',	'2020-01-07 08:31:45',	1,	'1',	'00:00:01'),
(21,	'2020-01-07 08:32:36',	'2020-01-07 08:32:36',	1,	'1',	'00:00:01'),
(22,	'2020-01-07 08:33:38',	'2020-01-07 08:33:38',	1,	'1',	'00:00:01');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `row` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `row_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sections`;
CREATE TABLE `sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `start_time` time NOT NULL,
  `movie_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sections` (`id`, `start_time`, `movie_id`, `created_at`, `updated_at`) VALUES
(1,	'17:00:00',	1,	'2020-01-07 08:14:06',	'2020-01-07 08:14:06'),
(2,	'19:00:00',	2,	'2020-01-07 08:41:22',	'2020-01-07 08:41:22'),
(3,	'10:20:00',	2,	'2020-01-07 08:41:26',	'2020-01-07 08:41:26'),
(4,	'12:30:00',	3,	'2020-01-07 08:41:31',	'2020-01-07 08:41:31'),
(5,	'13:10:00',	3,	'2020-01-07 08:41:35',	'2020-01-07 08:41:35'),
(6,	'19:00:00',	4,	'2020-01-07 08:41:40',	'2020-01-07 08:41:40'),
(7,	'12:30:00',	4,	'2020-01-07 08:41:45',	'2020-01-07 08:41:45'),
(8,	'13:10:00',	5,	'2020-01-07 08:41:58',	'2020-01-07 08:41:58'),
(9,	'14:30:00',	5,	'2020-01-07 08:42:07',	'2020-01-07 08:42:07');

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE `tickets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1,	'wei',	'test@gmail.com',	NULL,	'$2y$10$U6KFQG.gFsSNp9eGVhXi1.GHjU4G9AmZ6.GW26nJraKV2IOf6Guvu',	NULL,	'2020-01-07 08:14:49',	'2020-01-07 08:14:49',	0),
(3,	'user',	'user@gmail.com',	NULL,	'$2y$10$n2IlXBWEIfKjEM2VLFR9Gubmf1yI.zGAbgSSEMrrgmJ2LP7A9eLEy',	NULL,	'2020-01-07 08:43:13',	'2020-01-07 08:43:13',	1);

-- 2020-01-07 17:25:39
