INSERT INTO `social_networks` (`id`, `icon_id`, `social_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 0, '2021-07-09 12:48:45', '2021-07-15 04:29:05', NULL),
(2, 2, 1, '2021-07-15 04:29:25', '2021-07-15 04:29:25', NULL),
(3, 4, 2, '2021-07-15 04:29:44', '2021-07-15 04:29:44', NULL),
(4, 5, 3, '2021-07-15 04:30:09', '2021-07-15 04:30:09', NULL),
(5, 6, 4, '2021-07-15 04:30:26', '2021-07-15 04:30:26', NULL);

INSERT INTO `social_network_translations` (`id`, `social_network_id`, `name`, `locale`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'فيسبوك', 'ar', NULL, NULL, NULL),
(2, 1, 'Facebook', 'en', NULL, NULL, NULL),
(3, 2, 'تويتر', 'ar', NULL, NULL, NULL),
(4, 2, 'twitter', 'en', NULL, NULL, NULL),
(5, 3, 'سكايب', 'ar', NULL, NULL, NULL),
(6, 3, 'Skype', 'en', NULL, NULL, NULL),
(7, 4, 'لينكد ان', 'ar', NULL, NULL, NULL),
(8, 4, 'LinkedIn', 'en', NULL, NULL, NULL),
(9, 5, 'واتس اب', 'ar', NULL, NULL, NULL),
(10, 5, 'Whatsapp', 'en', NULL, NULL, NULL);
