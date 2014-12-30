DROP TABLE IF EXISTS `cards`;
CREATE TABLE  `cards` (
  `card_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each card, unique index',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `card_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `card_address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_job_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`card_id`),
  UNIQUE KEY `user_name` (`card_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='card data';