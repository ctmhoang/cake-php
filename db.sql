CREATE TABLE `users`
(
    `id`        INTEGER PRIMARY KEY,
    `email`     VARCHAR(255) NOT NULL,
    `password`  VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL,
    `lastname`  VARCHAR(255) NOT NULL,
    `created`   DATETIME     NOT NULL,
    `modified`  DATETIME     NOT NULL
);
INSERT INTO users
VALUES (1, 'jane@localhost.com', '$2a$10$8a2X7OwiHv2aUk9TKL3ILeLxmlr6XQ1uWhFP45adAHpUJNNWAmwQq', 'Jane', 'Smiths',
        '2020-09-18 23:45:34', '2021-01-02 19:19:55');
INSERT INTO users
VALUES (2, 'john@localhost.com', 'testing', 'John', 'Smith', '2020-09-18 23:45:34', '2020-09-18 23:45:34');
INSERT INTO users
VALUES (3, 'robert@localhost.com', 'testing', 'Robert', 'Davis', '2020-09-18 23:45:34', '2020-09-18 23:45:34');
INSERT INTO users
VALUES (4, 'mary@localhost.com', 'testing', 'Mary', 'Taylor', '2020-09-18 23:45:34', '2020-09-18 23:45:34');
CREATE TABLE `tags`
(
    `id`       INTEGER PRIMARY KEY,
    `name`     VARCHAR(255) NOT NULL,
    `created`  DATETIME     NOT NULL,
    `modified` DATETIME     NOT NULL
);
INSERT INTO tags
VALUES (1, 'technology', '2020-09-19 00:18:38', '2020-09-19 00:19:24');
INSERT INTO tags
VALUES (2, 'business', '2020-09-19 00:18:43', '2020-09-19 00:19:28');
INSERT INTO tags
VALUES (3, 'software', '2020-09-19 00:18:46', '2020-09-19 00:19:36');
INSERT INTO tags
VALUES (4, 'search', '2020-09-19 00:18:51', '2020-09-19 00:19:42');
INSERT INTO tags
VALUES (5, 'news', '2020-09-19 00:18:54', '2020-09-19 00:20:01');
INSERT INTO tags
VALUES (6, 'programming', '2021-01-20 00:19:49', '2021-01-20 00:19:49');
INSERT INTO tags
VALUES (7, 'animal', '2021-01-20 00:19:49', '2021-01-20 00:19:49');
INSERT INTO tags
VALUES (8, 'hardware', '2021-01-20 00:19:49', '2021-01-20 00:19:49');
INSERT INTO tags
VALUES (9, 'audio', '2021-01-03 20:26:46', '2021-01-03 20:26:46');
INSERT INTO tags
VALUES (10, 'programming', '2021-01-03 20:26:52', '2021-01-03 20:26:52');
INSERT INTO tags
VALUES (11, 'php', '2021-01-03 20:26:57', '2021-01-03 20:26:57');
INSERT INTO tags
VALUES (12, 'cakephp', '2021-01-03 20:27:05', '2021-01-03 20:27:05');
INSERT INTO tags
VALUES (13, 'advertising', '2021-01-03 20:27:27', '2021-01-03 20:27:27');
INSERT INTO tags
VALUES (14, 'javascript', '2021-01-03 20:27:40', '2021-01-03 20:27:40');
INSERT INTO tags
VALUES (15, 'html', '2021-01-03 20:27:43', '2021-01-03 20:27:43');
INSERT INTO tags
VALUES (16, 'design', '2021-01-03 20:27:48', '2021-01-03 20:27:48');
INSERT INTO tags
VALUES (17, 'research', '2021-01-03 20:28:01', '2021-01-03 20:28:01');
INSERT INTO tags
VALUES (18, 'music', '2021-01-03 20:28:04', '2021-01-03 20:28:04');
INSERT INTO tags
VALUES (19, 'videos', '2021-01-03 20:28:09', '2021-01-03 20:28:09');
INSERT INTO tags
VALUES (20, 'ux', '2021-01-03 20:28:17', '2021-01-03 20:28:17');
INSERT INTO tags
VALUES (21, 'ui', '2021-01-03 20:28:21', '2021-01-03 20:28:21');
INSERT INTO tags
VALUES (22, 'mobile', '2021-01-03 20:28:36', '2021-01-03 20:28:36');
CREATE TABLE `bookmarks_tags`
(
    `id`          INTEGER PRIMARY KEY,
    `bookmark_id` INT(11) NOT NULL,
    `tag_id`      INT(11) NOT NULL
);
INSERT INTO bookmarks_tags
VALUES (1, 1, 1);
INSERT INTO bookmarks_tags
VALUES (2, 1, 4);
INSERT INTO bookmarks_tags
VALUES (3, 2, 5);
INSERT INTO bookmarks_tags
VALUES (4, 3, 2);

CREATE TABLE IF NOT EXISTS `bookmarks`
(
    `id`       INTEGER PRIMARY KEY,
    `user_id`  INT(11),
    `title`    VARCHAR(255) NOT NULL,
    `url`      VARCHAR(255) NOT NULL,
    `created`  DATETIME     NOT NULL,
    `modified` DATETIME     NOT NULL
    );
INSERT INTO bookmarks
VALUES (1, 1, 'Google', 'https://www.google.com/', '2020-09-19 00:19:49', '2020-09-19 00:19:49');
INSERT INTO bookmarks
VALUES (2, 1, 'Yahoo', 'https://www.yahoo.com/', '2021-01-01 00:19:49', '2021-01-01 00:19:49');
INSERT INTO bookmarks
VALUES (3, 2, 'Apple', 'https://www.apple.com/', '2021-01-20 00:19:49', '2021-01-20 00:19:49');
