CREATE TABLE `trade_units`(
	`unit_id` int(10) UNSIGNED AUTO_INCREMENT,
	`unit_num` char(10) NOT NULL,
	`m_unit_num` char(10) NOT NULL,
	`bank` char(50) NOT NULL,
	`stock_fee` float(10) NOT NULL,
	`fund_fee` float(10) NOT NULL,
	`block_fee` float(10) NOT NULL,
	`lessor` char(50) NOT NULL,
	`unit_status` char(50) NOT NULL,
	`create_date` DATETIME,
	PRIMARY KEY(`unit_id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;