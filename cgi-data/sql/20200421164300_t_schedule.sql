CREATE TABLE `t_schedule` (
  `id_schedule` int(11) NOT NULL AUTO_INCREMENT COMMENT 'スケジュールID',
  `id_event` int(11)  DEFAULT NULL COMMENT 'イベント情報ID',
  `event_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'イベント詳細URL',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'タイトル',
  `start` datetime NOT NULL COMMENT '開始日時',
  `period` int(11) NOT NULL COMMENT '期間（分）',
  `entry_date` datetime NOT NULL COMMENT '登録日',
  `update_date` datetime DEFAULT NULL COMMENT '更新日',
  PRIMARY KEY (`id_schedule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='スケジュール'