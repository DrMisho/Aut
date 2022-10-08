INSERT INTO `genders` (`id`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'm', '2018-12-13 04:29:37', '2018-12-13 04:29:37', NULL),
(2, 'f', '2018-12-13 04:29:53', '2018-12-13 04:29:53', NULL);

INSERT INTO `gender_translations` (`id`, `gender_id`, `name`, `locale`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Male', 'en', NULL, NULL, NULL),
(2, 1, 'ذكر', 'ar', NULL, NULL, NULL),
(3, 2, 'Female', 'en', NULL, NULL, NULL),
(4, 2, 'انثى', 'ar', NULL, NULL, NULL);
