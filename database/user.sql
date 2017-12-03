CREATE TABLE `ass2_ltw`.`user` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(50) NOT NULL , 
    `password` VARCHAR(50) NOT NULL , 
    `email` VARCHAR(50) NOT NULL , 
    `session` INT(1) NOT NULL , 
    `firstname` VARCHAR(50) NOT NULL , 
    `lastname` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
	
	INSERT INTO `user` (`id`, `username`, `password`, `email`, `session`, `firstname`, `lastname`) VALUES
(1, 'admin', '123456', '', '', '', ''),
(2, 'ad', '123456', '', '', '', '');
