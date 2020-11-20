CREATE TABLE `table` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `table` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'A'),
(2, 0, 'B'),
(3, 1, 'C'),
(4, 0, 'D'),
(5, 2, 'E'),
(6, 2, 'F'),
(8, 4, 'G'),
(9, 1, 'H'),
(10, 0, 'I'),
(11, 4, 'J'),
(12, 1, 'K'),
(13, 0, 'L');

ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;