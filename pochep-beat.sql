-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 27 2018 г., 17:25
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pochep-beat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'locale', 'text', 'Locale', 0, 1, 1, 1, 1, 0, '', 12),
(12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '', 12),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(22, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, '', 9),
(23, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(24, 4, 'name', 'text', 'Имя', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(25, 4, 'description', 'text_area', 'Описание', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(26, 4, 'position', 'text', 'Должность', 0, 1, 1, 1, 1, 1, NULL, 5),
(27, 4, 'sphere', 'text', 'Сфера', 0, 1, 1, 1, 1, 1, NULL, 6),
(28, 4, 'created_at', 'timestamp', 'Время создания', 0, 0, 1, 0, 0, 0, NULL, 7),
(29, 4, 'updated_at', 'timestamp', 'Время обновления', 0, 0, 0, 0, 0, 0, NULL, 8),
(30, 4, 'image', 'image', 'Картинка', 1, 1, 1, 1, 1, 1, '{\"quality\":\"80%\",\"upsize\":true}', 4),
(31, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(32, 5, 'photo', 'image', 'Фото', 1, 1, 1, 1, 1, 1, '{\"quality\":\"80%\",\"upsize\":true}', 3),
(33, 5, 'created_at', 'timestamp', 'Время создания', 0, 1, 1, 0, 0, 1, NULL, 4),
(34, 5, 'updated_at', 'timestamp', 'Время обновления', 0, 0, 0, 0, 0, 0, NULL, 5),
(35, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(36, 6, 'name', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(37, 6, 'video', 'text_area', 'Ресурс (для интеграции)', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(38, 6, 'created_at', 'timestamp', 'Время создания', 0, 1, 1, 0, 0, 1, NULL, 4),
(39, 6, 'updated_at', 'timestamp', 'Время обновления', 0, 0, 0, 0, 0, 0, NULL, 5),
(40, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(41, 7, 'name', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(42, 7, 'track', 'file', 'Трек', 0, 1, 1, 1, 1, 1, NULL, 3),
(43, 7, 'preview', 'image', 'Preview', 1, 1, 1, 1, 1, 1, '{\"quality\":\"80%\",\"upsize\":true}', 4),
(44, 7, 'created_at', 'timestamp', 'Время создания', 0, 0, 1, 0, 0, 1, NULL, 5),
(45, 7, 'updated_at', 'timestamp', 'Время обновления', 0, 0, 0, 0, 0, 0, NULL, 6),
(46, 5, 'name', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(47, 7, 'date', 'date', 'Дата выхода', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 5),
(48, 7, 'author', 'text', 'Исполнитель', 0, 0, 1, 1, 1, 1, '{\"default\":\"POCHEP BEAT\"}', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, NULL, '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(4, 'persons', 'persons', 'Команда', 'Команда', 'voyager-people', 'App\\Person', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-25 09:46:50', '2018-07-25 09:46:50'),
(5, 'photos', 'photos', 'Фото', 'Фото', 'voyager-photo', 'App\\Photo', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-25 10:36:43', '2018-07-25 10:36:43'),
(6, 'videos', 'videos', 'Видео', 'Видео', 'voyager-video', 'App\\Video', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-25 10:43:04', '2018-07-25 10:43:04'),
(7, 'tracks', 'tracks', 'Track', 'Tracks', 'voyager-music', 'App\\Track', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-25 10:46:54', '2018-07-25 10:46:54');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-07-23 14:13:41', '2018-07-23 14:13:41');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2018-07-23 14:13:41', '2018-07-23 14:13:41', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2018-07-23 14:13:41', '2018-07-23 14:13:41', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2018-07-23 14:13:41', '2018-07-23 14:13:41', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2018-07-23 14:13:41', '2018-07-23 14:13:41', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2018-07-23 14:13:41', '2018-07-23 14:13:41', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2018-07-23 14:13:41', '2018-07-23 14:13:41', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2018-07-23 14:13:41', '2018-07-23 14:13:41', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2018-07-23 14:13:41', '2018-07-23 14:13:41', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2018-07-23 14:13:41', '2018-07-23 14:13:41', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2018-07-23 14:13:41', '2018-07-23 14:13:41', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2018-07-23 14:13:42', '2018-07-23 14:13:42', 'voyager.hooks', NULL),
(12, 1, 'Команда', '', '_self', 'voyager-people', NULL, NULL, 15, '2018-07-25 09:46:50', '2018-07-25 09:46:50', 'voyager.persons.index', NULL),
(13, 1, 'Фото', '', '_self', 'voyager-photo', NULL, NULL, 16, '2018-07-25 10:36:43', '2018-07-25 10:36:43', 'voyager.photos.index', NULL),
(14, 1, 'Видео', '', '_self', 'voyager-video', NULL, NULL, 17, '2018-07-25 10:43:04', '2018-07-25 10:43:04', 'voyager.videos.index', NULL),
(15, 1, 'Музыка', '', '_self', 'voyager-music', '#000000', NULL, 18, '2018-07-25 10:46:54', '2018-07-25 10:47:38', 'voyager.tracks.index', 'null');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(2, 'browse_bread', NULL, '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(3, 'browse_database', NULL, '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(4, 'browse_media', NULL, '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(5, 'browse_compass', NULL, '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(6, 'browse_menus', 'menus', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(7, 'read_menus', 'menus', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(8, 'edit_menus', 'menus', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(9, 'add_menus', 'menus', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(10, 'delete_menus', 'menus', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(11, 'browse_roles', 'roles', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(12, 'read_roles', 'roles', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(13, 'edit_roles', 'roles', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(14, 'add_roles', 'roles', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(15, 'delete_roles', 'roles', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(16, 'browse_users', 'users', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(17, 'read_users', 'users', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(18, 'edit_users', 'users', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(19, 'add_users', 'users', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(20, 'delete_users', 'users', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(21, 'browse_settings', 'settings', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(22, 'read_settings', 'settings', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(23, 'edit_settings', 'settings', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(24, 'add_settings', 'settings', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(25, 'delete_settings', 'settings', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(26, 'browse_hooks', NULL, '2018-07-23 14:13:42', '2018-07-23 14:13:42'),
(27, 'browse_persons', 'persons', '2018-07-25 09:46:50', '2018-07-25 09:46:50'),
(28, 'read_persons', 'persons', '2018-07-25 09:46:50', '2018-07-25 09:46:50'),
(29, 'edit_persons', 'persons', '2018-07-25 09:46:50', '2018-07-25 09:46:50'),
(30, 'add_persons', 'persons', '2018-07-25 09:46:50', '2018-07-25 09:46:50'),
(31, 'delete_persons', 'persons', '2018-07-25 09:46:50', '2018-07-25 09:46:50'),
(32, 'browse_photos', 'photos', '2018-07-25 10:36:43', '2018-07-25 10:36:43'),
(33, 'read_photos', 'photos', '2018-07-25 10:36:43', '2018-07-25 10:36:43'),
(34, 'edit_photos', 'photos', '2018-07-25 10:36:43', '2018-07-25 10:36:43'),
(35, 'add_photos', 'photos', '2018-07-25 10:36:43', '2018-07-25 10:36:43'),
(36, 'delete_photos', 'photos', '2018-07-25 10:36:43', '2018-07-25 10:36:43'),
(37, 'browse_videos', 'videos', '2018-07-25 10:43:04', '2018-07-25 10:43:04'),
(38, 'read_videos', 'videos', '2018-07-25 10:43:04', '2018-07-25 10:43:04'),
(39, 'edit_videos', 'videos', '2018-07-25 10:43:04', '2018-07-25 10:43:04'),
(40, 'add_videos', 'videos', '2018-07-25 10:43:04', '2018-07-25 10:43:04'),
(41, 'delete_videos', 'videos', '2018-07-25 10:43:04', '2018-07-25 10:43:04'),
(42, 'browse_tracks', 'tracks', '2018-07-25 10:46:54', '2018-07-25 10:46:54'),
(43, 'read_tracks', 'tracks', '2018-07-25 10:46:54', '2018-07-25 10:46:54'),
(44, 'edit_tracks', 'tracks', '2018-07-25 10:46:54', '2018-07-25 10:46:54'),
(45, 'add_tracks', 'tracks', '2018-07-25 10:46:54', '2018-07-25 10:46:54'),
(46, 'delete_tracks', 'tracks', '2018-07-25 10:46:54', '2018-07-25 10:46:54');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `persons`
--

CREATE TABLE `persons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sphere` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `persons`
--

INSERT INTO `persons` (`id`, `name`, `description`, `image`, `position`, `sphere`, `created_at`, `updated_at`) VALUES
(1, 'Яценко Мария', 'Участник коллектива \"POCHEP BEAT\"', 'persons\\July2018\\heqKdYjmJybom3HNlIHG.jpg', 'Балет', 'Хореограф', '2018-07-26 08:33:01', '2018-07-26 08:33:01'),
(2, 'lebedev', 'Участник коллектива \"POCHEP BEAT\"', 'persons\\July2018\\0LQk9pFG1yE0FmGqFYJN.jpg', 'Балет', 'Хореограф', '2018-07-26 08:33:01', '2018-07-26 08:37:53'),
(3, 'mihno', 'Участник коллектива \"POCHEP BEAT\"', 'persons\\July2018\\4NAZtHP9FDntHQ0yrG99.jpg', 'Балет', 'Хореограф', '2018-07-26 08:33:01', '2018-07-26 08:38:06'),
(4, 'pochep', 'Участник коллектива \"POCHEP BEAT\"', 'persons\\July2018\\elArUhTfA0y78iytKTgs.png', 'Балет', 'Хореограф', '2018-07-26 08:33:01', '2018-07-26 08:38:22'),
(5, 'zamkova', 'Участник коллектива \"POCHEP BEAT\"', 'persons\\July2018\\tyz86lHTLpVT2vQDivqE.jpg', 'Балет', 'Хореограф', '2018-07-26 08:33:01', '2018-07-26 08:38:46'),
(6, 'guturya', 'Участник коллектива \"POCHEP BEAT\"', 'persons\\July2018\\s7ATRJisP9KnH3bixMgp.jpg', 'Балет', 'Хореограф', '2018-07-26 08:33:01', '2018-07-26 08:39:36');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Фото', 'photos\\July2018\\ssMXjo7N7k0Kvu5rTqGn.jpg', '2018-07-26 08:43:54', '2018-07-26 08:49:32'),
(2, 'Фото', 'photos\\July2018\\J2cgwASaaiHrd3vO9NaL.jpg', '2018-07-26 08:44:07', '2018-07-26 08:49:51'),
(3, 'Фото', 'photos\\July2018\\xgBa9zNOIOx6ccmrXIYe.png', '2018-07-26 08:44:17', '2018-07-26 08:50:06'),
(4, 'Фото', 'photos\\July2018\\3ILzoE6pnSoiMUNzjuC0.jpg', '2018-07-26 08:44:26', '2018-07-26 08:50:15'),
(5, 'Фото', 'photos\\July2018\\gzuA0lHhlL67T6ltR9sy.jpg', '2018-07-26 08:44:36', '2018-07-26 08:50:27'),
(6, 'Фото', 'photos\\July2018\\d3DpZ4Bo6BqDlpHMOzfD.jpg', '2018-07-26 08:44:47', '2018-07-26 08:50:34');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(2, 'user', 'Normal User', '2018-07-23 14:13:41', '2018-07-23 14:13:41'),
(3, 'moderator', 'Moderator', '2018-07-27 09:51:48', '2018-07-27 09:51:48');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\July2018\\GhVwts8WJ35iKqfuBkw5.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Pochep Beat', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', '«Наша жизнь фантастически прекрасна, и мы её хотим прожить наяву. Думаем это приятнее, чем мечтать ….. »', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\July2018\\yUSuyCZu7PFtu7DYYuHc.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\July2018\\DC1m3NJyyudbFNbYtJps.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(13, 'site.mail', 'Mail', 'romanpochepbeat@gmail.com', NULL, 'text', 8, 'Site'),
(14, 'site.phone', 'Phone', '+380679808700', NULL, 'text', 9, 'Site'),
(16, 'site.about_text', 'About us text', 'Мы играем музыку, которая нравится в первую очередь нам. Музыку, которую мы способны почувствовать, как свою, и донести эти чувства до зрителя. Мы хотим, чтобы вы окунулись в нее, и на время, пока идет концерт, забыли обо всех тревогах и проблемах. Наша музыка изменит ритм вашей жизни. Драйв, стихия, страсть - все это в наших руках! Свободолюбцы и бунтари - мы способны простую мелодию превратить в шквал эмоций и зажечь ваши сердца. Наш коллектив награжден множественными музыкальными премиями, в числе которых: «Человек года 2015», а также «Музыкальная премия года 2017» в номинации «Талант и признание».', NULL, 'text_area', 7, 'Site'),
(18, 'site.phone_2', 'Phone 2', '+380668084083', NULL, 'text', 11, 'Site'),
(19, 'site.instagram', 'Instagram', 'https://www.instagram.com/pochepbeat', NULL, 'text', 13, 'Site'),
(20, 'site.facebook', 'Facebook', 'https://www.facebook.com/groups/PochepBeat/', NULL, 'text', 12, 'Site');

-- --------------------------------------------------------

--
-- Структура таблицы `tracks`
--

CREATE TABLE `tracks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tracks`
--

INSERT INTO `tracks` (`id`, `name`, `track`, `link`, `preview`, `author`, `date`, `created_at`, `updated_at`) VALUES
(1, 'POCHEP BEAT - Forever', '[{\"download_link\":\"tracks\\\\July2018\\\\NDuldDMjBeOobWn96C6U.mp3\",\"original_name\":\"POCHEP BEAT - Forever.mp3\"}]', NULL, 'tracks\\July2018\\VscZMGwZ4rqBvpxtH9lD.png', 'POCHEP BEAT', '2018-07-16', '2018-07-26 09:50:19', '2018-07-26 10:00:54'),
(2, 'POCHEP BEAT - Mein Herz Brennt', '[{\"download_link\":\"tracks\\\\July2018\\\\Egfml4GPKf8oUHCXdJtL.mp3\",\"original_name\":\"POCHEP BEAT - Mein Herz Brennt.mp3\"}]', NULL, 'tracks\\July2018\\XAhCwFqQWpX6MbaoKHhB.jpg', 'POCHEP BEAT', '2018-07-17', '2018-07-26 09:51:47', '2018-07-26 10:00:48'),
(3, 'Pochep Beat - Wanders', '[{\"download_link\":\"tracks\\\\July2018\\\\XtTLUJ7nVX1UEv5nGUse.mp3\",\"original_name\":\"Pochep Beat - Wanders.mp3\"}]', NULL, 'tracks\\July2018\\xi1DsjH3e1PjeQ1wM5in.jpg', 'POCHEP BEAT', '2018-07-18', '2018-07-26 09:53:15', '2018-07-26 10:00:43');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@admin.com', 'users\\July2018\\vGVXhfXgpMvL8BjuSGJl.jpg', '$2y$10$mvyKlnjt062Q2Wa/KC3t1.WHdC6TyuH7YGwCvzyYCg6y.AkbRKnrS', 'xPytvS2t5h6DWqS5rKX6oPAm7jDoy7Bkh4oaJIwNKMhLDCKeIZbO1IBHnGST', '{\"locale\":\"en\"}', '2018-07-23 14:14:32', '2018-07-23 14:16:03'),
(2, 3, 'pochep', 'pochep@admin.com', 'users\\July2018\\spCfFZlhv3h6yP6s0dBG.png', '$2y$10$IUUnMLUGZF1.nK0N2yfx/.NWBLZEt3SIrJU08o8edCbps7Oj76efC', 'imzXpIaFwQ0nz7l506XWSrV5sUy7qi1KRnbs0gRkgD8USuMS6hhWrBwYNSe7', '{\"locale\":\"ru\"}', '2018-07-27 09:52:31', '2018-07-27 09:53:01');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `name`, `video`, `created_at`, `updated_at`) VALUES
(1, 'Pochep Beat ( Roman Pochep) Cover version 2015', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6n_K3yq5-JM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2018-07-27 09:33:00', '2018-07-27 09:42:11'),
(2, 'Роман Почеп \"Pochep Beat\" Exclusive Music Project . Wanders (Cover version)', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6n_K3yq5-JM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2018-07-27 09:36:00', '2018-07-27 09:44:37'),
(3, 'Ocean Soul Роман Почеп Exclusive Music Project. POCHEP BEAT!!! шоу-балет Flash !!!', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6n_K3yq5-JM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2018-07-27 09:37:00', '2018-07-27 09:44:49'),
(4, 'BANANA POCHEP BEAT 19 11 2016', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6n_K3yq5-JM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2018-07-27 09:37:00', '2018-07-27 09:45:02'),
(5, 'Pochep Beat - Ohne Dich (Rammstein cover)', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6n_K3yq5-JM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2018-07-27 09:37:00', '2018-07-27 09:45:15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT для таблицы `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
