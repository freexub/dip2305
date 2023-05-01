-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 01 2023 г., 20:32
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dip2305`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounting`
--

CREATE TABLE IF NOT EXISTS `accounting` (
  `id` int(11) NOT NULL,
  `entity_id` int(11) NOT NULL,
  `frequency` varchar(50) NOT NULL COMMENT 'частота',
  `level` varchar(50) NOT NULL COMMENT 'Уровень',
  `converting` varchar(50) NOT NULL COMMENT 'преобразование',
  `scope` varchar(50) NOT NULL COMMENT 'предел',
  `difference` varchar(50) NOT NULL COMMENT 'Разница',
  `height` varchar(50) NOT NULL COMMENT 'Высота',
  `azimuth` varchar(50) NOT NULL COMMENT 'Азимут',
  `polarization` varchar(50) NOT NULL COMMENT 'Поляризация',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `accounting`
--

INSERT INTO `accounting` (`id`, `entity_id`, `frequency`, `level`, `converting`, `scope`, `difference`, `height`, `azimuth`, `polarization`, `date_create`, `date_update`) VALUES
(1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '2021-05-10 17:44:41', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1580647000);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/bank/*', 2, NULL, NULL, NULL, 1638685068, 1638685068),
('/cabinet/*', 2, NULL, NULL, NULL, 1638655879, 1638655879),
('/data/*', 2, NULL, NULL, NULL, 1586801576, 1586801576),
('/data/create', 2, NULL, NULL, NULL, 1586801576, 1586801576),
('/debug/*', 2, NULL, NULL, NULL, 1580646943, 1580646943),
('/entity/*', 2, NULL, NULL, NULL, 1592821292, 1592821292),
('/gii/*', 2, NULL, NULL, NULL, 1580646929, 1580646929),
('/groups/*', 2, NULL, NULL, NULL, 1592821288, 1592821288),
('/hosp/*', 2, NULL, NULL, NULL, 1638647363, 1638647363),
('/pages/*', 2, NULL, NULL, NULL, 1587407320, 1587407320),
('/pages/view', 2, NULL, NULL, NULL, 1587407368, 1587407368),
('/personal/*', 2, NULL, NULL, NULL, 1682744783, 1682744783),
('/profile/*', 2, NULL, NULL, NULL, 1580647167, 1580647167),
('/rbac/*', 2, NULL, NULL, NULL, 1580646925, 1580646925),
('/signal/*', 2, NULL, NULL, NULL, 1592821578, 1592821578),
('/site/delete-user', 2, NULL, NULL, NULL, NULL, NULL),
('/site/index', 2, NULL, NULL, NULL, NULL, NULL),
('/site/user-add', 2, NULL, NULL, NULL, NULL, NULL),
('/site/users', 2, NULL, NULL, NULL, NULL, NULL),
('admin', 1, 'admin', NULL, NULL, 1580646991, 1580646991),
('bankAccess', 2, NULL, NULL, NULL, 1638685082, 1638685082),
('cabinetAccess', 2, NULL, NULL, NULL, 1638655893, 1638655893),
('debug', 2, 'debug', NULL, NULL, 1580646981, 1580646981),
('Entity', 2, NULL, NULL, NULL, 1592821610, 1592821610),
('gii', 2, 'gii', NULL, NULL, 1580646971, 1580646971),
('Groups', 2, NULL, NULL, NULL, 1592821633, 1592821633),
('hospAccess', 2, NULL, NULL, NULL, 1638647375, 1638647375),
('pages', 2, NULL, NULL, NULL, 1587407331, 1587407331),
('personalAccess', 2, NULL, NULL, NULL, 1682744805, 1682744805),
('profileAccess', 2, NULL, NULL, NULL, 1638646223, 1638646223),
('rbac', 2, 'rbac', NULL, NULL, 1580646959, 1580646959),
('Signal', 2, NULL, NULL, NULL, 1592821595, 1592821595),
('user', 1, 'user', NULL, NULL, 1580651268, 1580651268),
('userAccess', 2, 'user', NULL, NULL, 1580651215, 1580651259);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('bankAccess', '/bank/*'),
('cabinetAccess', '/cabinet/*'),
('admin', '/data/*'),
('userAccess', '/data/create'),
('debug', '/debug/*'),
('Entity', '/entity/*'),
('gii', '/gii/*'),
('Groups', '/groups/*'),
('hospAccess', '/hosp/*'),
('pages', '/pages/*'),
('userAccess', '/pages/view'),
('personalAccess', '/personal/*'),
('profileAccess', '/profile/*'),
('rbac', '/rbac/*'),
('Signal', '/signal/*'),
('admin', '/site/delete-user'),
('userAccess', '/site/index'),
('admin', '/site/user-add'),
('admin', '/site/users'),
('admin', 'bankAccess'),
('admin', 'cabinetAccess'),
('admin', 'debug'),
('admin', 'Entity'),
('admin', 'gii'),
('admin', 'Groups'),
('admin', 'hospAccess'),
('admin', 'pages'),
('admin', 'personalAccess'),
('admin', 'profileAccess'),
('admin', 'rbac'),
('admin', 'Signal'),
('admin', 'userAccess'),
('user', 'userAccess');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `bank_chart`
--

CREATE TABLE IF NOT EXISTS `bank_chart` (
  `id` int(11) NOT NULL COMMENT 'Номер',
  `user_id` int(11) NOT NULL COMMENT 'сотрудник',
  `termenal_id` int(11) NOT NULL DEFAULT '1' COMMENT 'Терминал',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата',
  `type` int(2) NOT NULL DEFAULT '0' COMMENT 'Тип'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bank_chart`
--

INSERT INTO `bank_chart` (`id`, `user_id`, `termenal_id`, `date`, `type`) VALUES
(1, 1, 1, '2021-12-05 08:38:43', 0),
(2, 1, 1, '2021-12-05 17:45:37', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `bank_departments`
--

CREATE TABLE IF NOT EXISTS `bank_departments` (
  `id` int(11) NOT NULL COMMENT 'Номер отдела',
  `name` varchar(150) NOT NULL COMMENT 'Название отдела'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bank_departments`
--

INSERT INTO `bank_departments` (`id`, `name`) VALUES
(1, 'IT отдел'),
(2, 'Служба безопасности'),
(3, 'Кассир'),
(4, 'Директор');

-- --------------------------------------------------------

--
-- Структура таблицы `bank_pages`
--

CREATE TABLE IF NOT EXISTS `bank_pages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `about` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bank_pages`
--

INSERT INTO `bank_pages` (`id`, `name`, `about`, `active`) VALUES
(1, 'Что такое банковские реквизиты?', 'Наименование или Фамилия Имя Отчество клиента\r\nИНН клиента\r\nКПП клиента (обязателен ТОЛЬКО при платежах в бюджет, в остальных случаях может не указываться)\r\nДвадцатизначный номер банковского счета (расчетного, текущего)\r\nНаименование и местонахождение (город) банка, где у клиента открыт счет', 0),
(2, 'Как с нами связаться?', 'Вы можете связаться с нами любым удобным для вас способом\r\n\r\n \r\n\r\nЧерез сайт\r\n\r\nОтправьте заявку в нашу службу поддержки прямо на этом сайте. Для этого нажмите на кнопку Отправить запрос в верхней части страницы, опишите вашу проблему и укажите контактные данные, чтобы мы могли с вами связаться.\r\n\r\nПо электронной почте\r\n\r\nНапишите нам письмо на адрес hello@sirius.kz', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `bank_profile`
--

CREATE TABLE IF NOT EXISTS `bank_profile` (
  `user_id` int(11) NOT NULL COMMENT 'Пользователь',
  `full_name` varchar(250) NOT NULL COMMENT 'Полное имя',
  `iin` int(13) NOT NULL COMMENT 'ИИН',
  `adderess` varchar(500) NOT NULL COMMENT 'Адрес',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата создания',
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Последняя дата редактирования',
  `active` int(11) NOT NULL DEFAULT '0' COMMENT 'Статус',
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bank_profile`
--

INSERT INTO `bank_profile` (`user_id`, `full_name`, `iin`, `adderess`, `date_create`, `date_update`, `active`, `department_id`) VALUES
(1, 'Василий Пупкин', 954455663, 'Проспект Нурсултана-Назарбаева, 50, 17', '2021-12-05 04:46:33', '2021-12-05 08:34:33', 0, 1),
(2, 'Иванов Иван', 12154512, 'ул. Абая, 11/1, 17', '2021-12-05 14:59:08', NULL, 0, 1),
(4, 'Ирина Сергеевна', 22233442, 'ул. Гоголя, 21', '2021-12-05 15:00:17', NULL, 0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `bank_profile_departments`
--

CREATE TABLE IF NOT EXISTS `bank_profile_departments` (
  `id` int(11) NOT NULL COMMENT 'Номер',
  `user_id` int(11) NOT NULL COMMENT 'Сотрудник',
  `department_id` int(11) NOT NULL COMMENT 'Отдел',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата назначения',
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Дата изменения',
  `active` int(11) NOT NULL DEFAULT '0' COMMENT 'Статус'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `cabinet_book`
--

CREATE TABLE IF NOT EXISTS `cabinet_book` (
  `id` int(11) NOT NULL COMMENT 'Номер',
  `title` varchar(500) NOT NULL COMMENT 'Заголовок',
  `content` text NOT NULL COMMENT 'Описание',
  `user_id` int(11) NOT NULL COMMENT 'Автор',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата добавление',
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Последняя дата редактирования',
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cabinet_book`
--

INSERT INTO `cabinet_book` (`id`, `title`, `content`, `user_id`, `date_create`, `date_update`, `active`) VALUES
(1, 'Обслуживание принтера с инвентарным номером №00001', 'Произвести ремонт принтера, не печатает.', 1, '2021-12-05 05:39:19', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `cabinet_departments`
--

CREATE TABLE IF NOT EXISTS `cabinet_departments` (
  `id` int(11) NOT NULL COMMENT 'Номер отдела',
  `name` varchar(150) NOT NULL COMMENT 'Название отдела',
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cabinet_departments`
--

INSERT INTO `cabinet_departments` (`id`, `name`, `color`) VALUES
(1, 'IT отдел', 'info'),
(2, 'Служба безопасности', 'warning'),
(3, 'Кассир', 'success'),
(4, 'Директор', 'primary');

-- --------------------------------------------------------

--
-- Структура таблицы `cabinet_pages`
--

CREATE TABLE IF NOT EXISTS `cabinet_pages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `about` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cabinet_pages`
--

INSERT INTO `cabinet_pages` (`id`, `name`, `about`, `active`) VALUES
(1, 'Почему нам доверяют покупатели?', 'Обеспечиваем безупречное обслуживание. Работаем для вас с понедельника по субботу с 9:00 до 18:00 . К вашим услугам опытные продавцы-консультанты, которые ответят на любые вопросы по ассортименту товаров, помогут с выбором оптимального варианта и оформлением заказа.\r\nПод заказ привозим редкие модели телефонов, аксессуаров и запасных частей.\r\nДля наших клиентов предусмотрены гибкие условия оплаты заказа, Курьерская доставка по г. Караганды(день в день).Заказ до 10.000 тг. доставка по городу 500 тенге, юго-восток 1000 тенге, майкудук, пришахтинск от 1100. В другие микрорайоны Караганды уточнять по номеру 87012685848. Бесплатно от 10.000тг. в черте города. В другие города по договоренности, так же узнавать по выше указанному номеру телефона.\r\nЗвоните, пишите будем очень Вам рады!', 0),
(2, 'Как с нами связаться?', 'ИП Садуакасов Б.К Mobila.Company\r\n+7 (776) 808-98-58\r\nАнара Ериковна\r\nКомиссарова 36,214 кабинет, Караганда, Казахстан\r\n+77768089858', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `cabinet_position`
--

CREATE TABLE IF NOT EXISTS `cabinet_position` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cabinet_position`
--

INSERT INTO `cabinet_position` (`id`, `name`, `active`) VALUES
(1, 'Директор', 0),
(2, 'Бухгалтер', 0),
(3, 'Юрист', 0),
(4, 'Начальник СБ', 0),
(5, 'Сотрудник СБ', 0),
(6, 'Инженер', 0),
(7, 'Менеджер', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `cabinet_profile`
--

CREATE TABLE IF NOT EXISTS `cabinet_profile` (
  `user_id` int(11) NOT NULL COMMENT 'Пользователь',
  `full_name` varchar(250) NOT NULL COMMENT 'Полное имя',
  `iin` varchar(13) NOT NULL COMMENT 'ИИН',
  `adderess` varchar(500) NOT NULL COMMENT 'Адрес',
  `date_create` datetime DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата создания',
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Последняя дата редактирования',
  `active` int(11) DEFAULT '0' COMMENT 'Статус'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cabinet_profile`
--

INSERT INTO `cabinet_profile` (`user_id`, `full_name`, `iin`, `adderess`, `date_create`, `date_update`, `active`) VALUES
(1, 'Василий Пупкин', '954455663', 'Проспект Нурсултана-Назарбаева, 50, 17', '2021-12-05 04:46:33', NULL, 0),
(2, 'Семёнов Игнат', '55886665452', 'Ленина 4, кв. 12', '2023-04-13 00:00:00', '2023-04-30 07:08:04', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `cabinet_profile_departments`
--

CREATE TABLE IF NOT EXISTS `cabinet_profile_departments` (
  `id` int(11) NOT NULL COMMENT 'Номер',
  `user_id` int(11) NOT NULL COMMENT 'Сотрудник',
  `department_id` int(11) NOT NULL COMMENT 'Отдел',
  `position_id` int(11) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата назначения',
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Дата изменения',
  `active` int(11) NOT NULL DEFAULT '0' COMMENT 'Статус'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `about` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `about`, `active`) VALUES
(1, 'Инженер электрик', 'Группа реагирования на предприятиях', 0),
(2, 'Инженер монтажник', 'Группа реагирования на предприятиях, промежуточные работы', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `hosp_book`
--

CREATE TABLE IF NOT EXISTS `hosp_book` (
  `id` int(11) NOT NULL COMMENT 'Номер',
  `profile_id` int(11) NOT NULL COMMENT 'Номер личного дела',
  `title` varchar(500) NOT NULL COMMENT 'Заголовок',
  `content` text NOT NULL COMMENT 'Описание',
  `user_id` int(11) NOT NULL COMMENT 'Автор',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата добавление',
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Последняя дата редактирования'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hosp_book`
--

INSERT INTO `hosp_book` (`id`, `profile_id`, `title`, `content`, `user_id`, `date_create`, `date_update`) VALUES
(1, 1, 'Вакцинация', 'Прошел первый этап вакцинации', 1, '2021-06-02 14:46:52', '2021-12-04 20:47:20'),
(2, 1, 'Вакцинациия', 'Прошел второй этап вакцинации', 1, '2021-06-23 11:03:00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `hosp_category`
--

CREATE TABLE IF NOT EXISTS `hosp_category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hosp_category`
--

INSERT INTO `hosp_category` (`id`, `name`, `price`, `active`) VALUES
(1, 'Мужская стрижка', 2500, 0),
(2, 'Маникюр', 5000, 0),
(3, 'Женская стрижка', 4000, 0),
(4, 'Окрашивание мужское', 5000, 0),
(5, 'Окрашивание женское', 5000, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `hosp_order`
--

CREATE TABLE IF NOT EXISTS `hosp_order` (
  `id` int(11) NOT NULL COMMENT 'Уникальный номер',
  `category_id` int(11) NOT NULL COMMENT 'Категория',
  `profile_id` int(11) NOT NULL COMMENT 'Клиент',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата',
  `active` int(11) NOT NULL DEFAULT '0' COMMENT 'Статус'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hosp_order`
--

INSERT INTO `hosp_order` (`id`, `category_id`, `profile_id`, `date_create`, `active`) VALUES
(1, 1, 1, '2022-05-09 14:34:04', 1),
(2, 2, 1, '2022-05-09 15:00:52', 0),
(3, 4, 1, '2022-05-09 15:01:13', 0),
(5, 2, 1, '2022-05-09 15:39:12', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `hosp_pages`
--

CREATE TABLE IF NOT EXISTS `hosp_pages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `about` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hosp_pages`
--

INSERT INTO `hosp_pages` (`id`, `name`, `about`, `active`) VALUES
(5, 'Парикмахерские инструменты: набор для работы стилиста', 'Парикмахерское оборудование для мастеров и стилистов\r\nРасчески\r\n\r\nПарикмахер в основном использует три вида расчесок, каждая из которых необходима для определенного действия.\r\nРасческа "хвостик" – это расческа с тонкой длинной ручкой и частыми зубьями. С помощью этой расчески мастер во время работы разделяет пряди волос. Такие расчески бывают пластиковые и металлические, металлические удобны для начеса и выполнения стрижек, пластиковые применяются при окрашивании и химической завивке, так как металл может вступить в реакцию с химическими красителями.\r\n\r\nРасческа с длинными редкими зубьями применяется для расчесывания длинных волос или волос с нарушенной структурой. Она минимально повреждает волосы, поэтому эту же расческу используют при работе с волосами, пострадавшими от химической завивки.\r\n\r\nРасческа для тушевки разделена на две половины, на одной из которых зубья разрежены, а на другой достаточно часты. Это довольно длинная расческа с узким полотном. Применяется разнообразно, при стрижках и создании причесок.\r\n\r\nЩетки\r\n\r\nКруглая щетка (брашинг) бывает разных диаметров. Эта щетка чаще всего применяется при укладке феном и при подкручивании прядей.\r\n\r\nСкелетная щетка - плоская или выгнутая щетка с прорезями, необходимая в первую очередь при укладке феном. В отличие от брашинга она не подкручивает пряди, в просто приподнимает их у корня, придавая объем. Прорези необходимы щетке для того, чтобы горячий воздух из фена беспрепятственно проходил через нее.\r\n\r\nМассажная щетка - это полукруглая щетка, используемая в основном при расчесывании. Она придает волосам пышность и легкость. В парикмахерской лучше использовать щетку с металлическими зубьями, так как ее будет проще дезинфицировать. При выборе массажной щетки следует обратить внимание на качество зубцов – они должны быть гладкие, резиновая основа щетки должна быть мягкой.\r\n\r\nНожницы\r\n\r\nПарикмахерские ножницы. Классические парикмахерские ножницы должны быть изготовлены из стали и остро заточены. Кольца в этих ножницах должны быть расположены так, чтобы в одном кольце располагался большой палец, в другом - безымянный, при этом во втором кольце может быть установлен усиливающий рычаг, на который кладется мизинец.\r\n\r\nФилировочные ножницы используются для придания прическе легкости и естественности. Эти ножницы имеют на своем полотне зубья, благодаря чему при стрижке длина волос на концах становится разной. В парикмахерской удобнее использовать двусторонние филировочные ножницы.\r\n\r\nЗажимы\r\n\r\nУ каждого парикмахера должен быть набор зажимов для волос. Они бывают пластмассовыми и металлическими, лучше иметь и те и другие.\r\n\r\nФен\r\n\r\nДля работы в парикмахерской или салоне красоты лучше всего применять фен, по форме напоминающий пистолет. Фен применяется для сушки, укладки волос, а также для придания ми объема и пышности.\r\n\r\nПлойки\r\n\r\nПлойка с гладкой поверхностью и боковым зажимом необходима для завивки локонов и укладки волос. Для более крупных локонов используются плойки большего диаметра.\r\n\r\nПлойка с пластмассовыми шипами необходима для создания пышных естественных локонов.\r\n\r\nОпрыскиватель.\r\n\r\nНужен для смачивания волос во время стрижки, однако многие парикмахеры предпочитают перед стрижкой вымыть голову клиенту.', 0),
(6, 'Эффективная стерилизация инструментов - соблюдаем асептику', 'Сухожаровые шкафы сегодня нашли широкое применение в медицине, косметологии, лабораториях и в других областях. Они предназначены для стерилизации различных инструментов и материалов с помощью горячего воздуха при температуре до 300 °С. Благодаря возможности регулировать температурный режим сушка и стерилизация осуществляются с высокой эффективностью.\r\n\r\nВ зависимости от заданной температуры в сухожаровом стерилизаторе могут обрабатываться: перевязочные материалы, операционная одежда, хирургические и косметологические инструменты, изделия из силиконовой резины, стекла и др.\r\n\r\nНужная температура устанавливается с помощью реле. Для того чтобы обеспечить нормальный процесс стерилизации, предварительно из шкафа удаляют влажный воздух. Это достигается путем нагрева камеры до температуры +70…+80 °С при открытой дверце. Затем шкаф закрывают и нагревают камеру до +150…+170 °С.\r\n\r\nСтерилизатор сухожаровой может работать в различных режимах в зависимости от поставленной задачи. Так, для стерилизации металлических изделий процесс осуществляют при температуре +180 °С в течение 1 часа. Прочие материалы, как правило, «прожаривают» при температуре +100 °С в течение 2,5 часов.\r\n\r\nВ настоящее время рынок предлагает потребителю множество модификаций данного оборудования, производимого европейскими и азиатскими брендами. По своим техническим характеристикам продукция может существенно отличаться. Например, объем камеры стерилизаторов варьируется от 15 до 1000 литров и более. Доступные версии, как правило: ECO, STD и TOP. Циркуляция воздуха также может быть естественной или принудительной.\r\n\r\nСегодня стерилизатор сухожаровой все чаще применяют в салонах красоты. Чтобы предупредить возможное инфицирование клиента парикмахеры, а равно мастера, выполняющие маникюр (педикюр), в обязательном порядке стерилизуют свой инструмент в термошкафу. Однако осуществлять данную процедуру следует правильно, не допуская перегрева и резкого охлаждения стерилизуемого материала. Чтобы избежать последнего, нельзя открывать дверцу шкафа вскоре после окончания стерилизации. Это приведет к порче металлического инструмента или стеклянной (фарфоровой) посуды. Микротрещин, нарушения структуры стали и подобных повреждений можно легко избежать, если позволить температуре в сухожаровом шкафу опуститься до нормы самостоятельно.', 0),
(7, 'Гласперленовые стерилизаторы - безопасная красота', 'Для того чтобы быть неотразимой, каждая женщина приходит в салон красоты. Опытный мастер берет в руки инструменты и приступает к созданию того самого образа, который так пленяет мужчин и вызывает плохо скрываемую зависть у подруг.\r\n\r\nКаждое посещение салона дает возможность почувствовать себя помолодевшей сразу на несколько лет. И это уже не говоря о том заряде положительных эмоций и хорошем настроении, которое гарантировано на несколько дней, а то и недель. Но такой эффект посещение салона красоты способно оказать на вас только в том случае, если мастер не нарушал правила стерилизации инструментов, которыми пользовался.\r\n\r\nСегодня уже ушли в прошлое времена, когда практически единственным способом надежной стерилизации был спирт и специальные растворы. Им на смену пришли ультрафиолетовые и ультразвуковые устройства. Но и они не часто применяются в салонах красоты, сегодня и их сменили гласперленовые стерилизаторы.\r\n\r\nКакие преимущества имеет гласперленовый стерилизатор?\r\n \r\n\r\nКомпактность.\r\nЭтот компактный прибор может быть установлен в любом удобном для вас месте - на туалетном столике, столике-тележке, небольшой полочке.\r\n\r\nПростота использования.\r\nОсобенно привлекательными качествами гласперленового стерилизатора можно назвать простоту использования и неизменно безупречный результат. Всего через 10-15 минут после включения в сеть прибор готов к работе. А процесс стерилизации инструмента, в зависимости от его конфигурации и особенностей конструкции, занимает от 20 секунд до 3 минут.\r\n\r\nБыстрый нагрев и медленное остывание.\r\nСреди других преимуществ прибора можно назвать также быстрый нагрев и медленное остывание. Таким образом, можно экономить время работы с ним, ведь гласперленовые стерилизаторы не требуют постоянного подогрева. Время работы прибора в режиме готовности до момента остывания составляет 20 минут. Дезинфекционную обработку можно проводить для более чем 100 инструментов: ножницы, пилки, боры, скальпели, иглы и другие.\r\n\r\nВнутренняя колба гласперленового стерилизатора заполнена стеклянными шариками. Во время работы они разогреваются до температуры 200-290 градусов. Рабочая поверхность маникюрного и косметологического инструмента, помещенного в гласперленовый стерилизатор, под воздействием такого температурного режима быстро очищается от разных возбудителей инфекции.\r\n\r\nДаже в том случае, если походам в салоны красоты вы предпочитаете самостоятельное выполнение основных косметологических процедур, пополнить ваш арсенал инструментов небольшим и удобным стерилизатором никогда не будет лишним. Вряд ли вы можете обеспечить стерильные условия хранения собственного инструмента. И его предварительная стерилизация сможет защитить вас от неприятных последствий несоблюдения асептики.\r\n\r\nТем более что наряду с компактностью, экономичностью, простотой эксплуатации и абсолютной безопасностью для окружающей среды, это прибор характеризует еще и невысокая стоимость, доступная любому семейному бюджету.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `hosp_profile`
--

CREATE TABLE IF NOT EXISTS `hosp_profile` (
  `id` int(11) NOT NULL COMMENT 'Номер',
  `full_name` varchar(250) NOT NULL COMMENT 'Полное имя',
  `iin` varchar(20) NOT NULL COMMENT 'ИИН',
  `adderess` varchar(500) NOT NULL COMMENT 'Адрес',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата создания',
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Последняя дата редактирования',
  `active` int(11) NOT NULL DEFAULT '0' COMMENT 'Статус'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hosp_profile`
--

INSERT INTO `hosp_profile` (`id`, `full_name`, `iin`, `adderess`, `date_create`, `date_update`, `active`) VALUES
(1, 'Иванов Иван', '77776661234', 'ул. Абая, 11/1, 17', '2021-12-05 02:10:28', '2022-05-09 08:59:25', 0),
(2, 'Петров Петр', '77782246', 'Ленина 61, 18', '2021-12-05 03:30:10', NULL, 0),
(3, 'Ержан Сергеевич', '9722665', 'Крылова 5, 71', '2021-12-05 03:30:57', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1580273576),
('m140602_111327_create_menu_table', 1580273579),
('m160312_050000_create_user', 1580273579);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `about` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `about`, `active`) VALUES
(1, 'Анализ поля ближней зоны', '<p>При помощи пробника поля ближней зоны были выявлены источники помех и механизмы связи. Для этого были слегка изменены настройки осциллографа, особенно следующие:</p>\r\n\r\n<ul>\r\n	<li>Снижена чувствительность: <strong>5 мВ/дел вместо 1 мВ/дел</strong>. Во время измерения с помощью пробников поля ближней зоны возникают относительно высокие уровни. Чтобы избежать перегрузки необходимо понизить чувствительность</li>\r\n	<li>Изменен масштаб по вертикали: в диалоговом окне настроек БПФ был изменен масштаб вертикальной оси с помощью опции &quot;manual range&quot;, чтобы БПФ спектр полностью отображался на экране и был более читабелен</li>\r\n</ul>\r\n\r\n<p>На следующих страницах приведены фотографии, снимки экрана и пояснения, показывающие способы работы с пробниками поля ближней зоны и обнаружения источников помех.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:14px"><strong>Итоги выявления ЭМП</strong></span></p>\r\n\r\n<ul>\r\n	<li>На основе результатов измерения поля в дальней зоне с помощью анализа поля ближней зоны и тока РЧП удалось обнаружить источники помех и определить механизмы связи</li>\r\n	<li>Были обнаружены следующие источники помех: процессор (интерфейс RGMII), модули LAN PHY и основной преобразователь напряжения. Дальнейший анализ показал, что синфазные помехи связываются через питание модулей LAN PHY, а также через конвертер сети LAN на кабеле LAN. Связь с кабелем трубки возникает через процессор или как гальваническая связь из-за трассировки платы</li>\r\n	<li>На основе проведенного анализа можно предложить меры по значительному снижению ВЧ излучения, например, фильтрация и согласованная нагрузка, изменения в трассировке платы в районе интерфейса RGMII (обратный тракт для синфазного тока), улучшения заземляющего соединения для экрана кабеля LAN, улучшения системы шины питания (с более низким импедансом) для модулей LAN PHY и процессора, а также улучшения трассировки и изменения в цепи в районе основного преобразователя напряжения</li>\r\n</ul>\r\n', 0),
(3, 'Измерения тока РЧП в соединительных линиях', '<p>На первом этапе проводится измерение уровня помех во всех соединительных линиях и определение максимума. Наибольший ток РЧП протекает через синий кабель LAN (см. рис. 4-9). Этот кабель является критической антенной для устранения связи с дальней зоной. Для измерений использовался токовый пробник с передаточным импедансом 20 дБОм. Предусилитель не использовался. Таким образом, уровень тока РЧП можно вычислить напрямую как отображаемый на экране осциллографа уровень напряжения (в дБмкВ) минус 20 дБ. В описанном ниже примере вычисленный ток равнялся 14 дБмкА (или 5 мкА), исходя из отображаемого уровня напряжения в <strong>34 дБмкВ на 375 МГц.</strong> Это уже критический уровень, согласно оценке.&nbsp;</p>\r\n\r\n<p>Помимо излучений на частоте 250 МГц и 375 МГц, которые были обнаружены в поле дальней зоны, можно также наблюдать и другие излучения, такие как широкополосная помеха на частоте 360 МГц. Последняя, однако, не является проблемой для электромагнитной совместимости (см. измерения поля в дальней зоне) и поэтому в дальнейшем не учитывается.</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fio` varchar(150) NOT NULL,
  `position` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'W_EjlLE5vy-u092E_bTnctfnOOEe_DjR', '$2y$13$QQ9e8BXAU2eu6PgJ75pkU.7ngIeZSZXuOrlU.74/uMJpYfPfR0fZK', NULL, 'k.shtefan@kstu.kz', 10, 1527151406, 1547315815),
(2, 'test', 'x10WbfxXULMGC3u2Fgnz8kr2JypGbM36', '$2y$13$QQ9e8BXAU2eu6PgJ75pkU.7ngIeZSZXuOrlU.74/uMJpYfPfR0fZK', NULL, 'test@ok.kz', 10, 1592850140, 1592850140),
(4, 'test4', '3hbE5CJqU402lGhBc1-WgSBnnhxiuxjC', '$2y$13$w24BShoE/Ito/JrqdeodL.ZIn8qzVRvjsIMjn9I3PPX6MKjqgXmLu', NULL, 'test4@ok.kz', 10, 1592855968, 1592855968);

-- --------------------------------------------------------

--
-- Структура таблицы `users_group`
--

CREATE TABLE IF NOT EXISTS `users_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_group`
--

INSERT INTO `users_group` (`id`, `user_id`, `group_id`, `active`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0),
(3, 4, 1, 0),
(4, 2, 2, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounting`
--
ALTER TABLE `accounting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `bank_chart`
--
ALTER TABLE `bank_chart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `bank_departments`
--
ALTER TABLE `bank_departments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bank_pages`
--
ALTER TABLE `bank_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bank_profile`
--
ALTER TABLE `bank_profile`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Индексы таблицы `bank_profile_departments`
--
ALTER TABLE `bank_profile_departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Индексы таблицы `cabinet_book`
--
ALTER TABLE `cabinet_book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cabinet_departments`
--
ALTER TABLE `cabinet_departments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cabinet_pages`
--
ALTER TABLE `cabinet_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cabinet_position`
--
ALTER TABLE `cabinet_position`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cabinet_profile`
--
ALTER TABLE `cabinet_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `cabinet_profile_departments`
--
ALTER TABLE `cabinet_profile_departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hosp_book`
--
ALTER TABLE `hosp_book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hosp_category`
--
ALTER TABLE `hosp_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hosp_order`
--
ALTER TABLE `hosp_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Индексы таблицы `hosp_pages`
--
ALTER TABLE `hosp_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hosp_profile`
--
ALTER TABLE `hosp_profile`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_group`
--
ALTER TABLE `users_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounting`
--
ALTER TABLE `accounting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `bank_chart`
--
ALTER TABLE `bank_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `bank_departments`
--
ALTER TABLE `bank_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер отдела',AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `bank_pages`
--
ALTER TABLE `bank_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `bank_profile_departments`
--
ALTER TABLE `bank_profile_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер';
--
-- AUTO_INCREMENT для таблицы `cabinet_book`
--
ALTER TABLE `cabinet_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `cabinet_departments`
--
ALTER TABLE `cabinet_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер отдела',AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `cabinet_pages`
--
ALTER TABLE `cabinet_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `cabinet_position`
--
ALTER TABLE `cabinet_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `cabinet_profile`
--
ALTER TABLE `cabinet_profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Пользователь',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `cabinet_profile_departments`
--
ALTER TABLE `cabinet_profile_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер';
--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `hosp_book`
--
ALTER TABLE `hosp_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `hosp_category`
--
ALTER TABLE `hosp_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `hosp_order`
--
ALTER TABLE `hosp_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Уникальный номер',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `hosp_pages`
--
ALTER TABLE `hosp_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `hosp_profile`
--
ALTER TABLE `hosp_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users_group`
--
ALTER TABLE `users_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
