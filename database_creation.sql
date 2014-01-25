CREATE TABLE `address_user` (
  `user_id` INT AUTO_INCREMENT,
  `username` VARCHAR(32),
  `password` VARCHAR(40),
  `join_date` DATETIME,
  `first_name` VARCHAR(32),
  `last_name` VARCHAR(32),
  `permission_level` INT(1),
    PRIMARY KEY (`user_id`)
);

CREATE TABLE `permissions` (
`id` INT AUTO_INCREMENT,
`title` VARCHAR(20),
`permission_level` INT(1),
	PRIMARY KEY (`id`)
);

CREATE TABLE `address_test` (
	`id` INT AUTO_INCREMENT,
	`first_name` VARCHAR(40),
	`last_name` VARCHAR(40),
	`gender` VARCHAR(1),
	`address` VARCHAR(100),
	`city` VARCHAR(40),
	`state_code` VARCHAR(2),
	`zip_code` int(5),
	`email_personal` VARCHAR(100),
	`email_business` VARCHAR(100),
	`phone_home` VARCHAR(15),	
	`phone_work` VARCHAR(15),
	`phone_mobile` VARCHAR(15),
	`list_member_1` INT (3),
	`list_member_2` INT (3),
	`list_member_3` INT (3),
	`list_member_4` INT (3),
	`list_member_5` INT (3),
	`list_member_6` INT (3),
	`list_member_7` INT (3),
	`list_member_8` INT (3),
	`list_member_9` INT (3),
	`list_member_10` INT (3),
			PRIMARY KEY (`id`)
);

CREATE TABLE `list_type` (
	`list_id` INT(3) AUTO_INCREMENT,
	`list_name` VARCHAR(40),
		PRIMARY KEY (`list_id`)
);

INSERT INTO `address`.`list_type` (`list_id` ,`list_name`) VALUES (NULL ,'Christmas');
INSERT INTO `address`.`list_type` (`list_id` ,`list_name`) VALUES (NULL ,'Year End Letter');
INSERT INTO `address`.`list_type` (`list_id` ,`list_name`) VALUES (NULL ,'Kids Birthday Invites');
INSERT INTO `address`.`list_type` (`list_id` ,`list_name`) VALUES (NULL ,'All Birthday Invites');
INSERT INTO `address`.`list_type` (`list_id` ,`list_name`) VALUES (NULL ,'Family');

CREATE TABLE `list_members` (
	`ref_num` INT(6) NOT NULL AUTO_INCREMENT,
	`person_id` INT(6),
	`list_id` INT (6),
		PRIMARY KEY (`ref_num`)
);