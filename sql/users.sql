CREATE TABLE `users`
(
    `id`       int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name`     varchar(100) COLLATE utf8mb4_bin NOT NULL,
    `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
    `email`    varchar(100) COLLATE utf8mb4_bin NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin
