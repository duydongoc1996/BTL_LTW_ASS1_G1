CREATE TABLE `ass2_ltw`.`user` ( 
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(50) NOT NULL , 
    `password` VARCHAR(50) NOT NULL , 
    `email` VARCHAR(50) NOT NULL , 
    `session` INT(1) NOT NULL , 
    `firstname` VARCHAR(50) NOT NULL , 
    `lastname` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`(10))) ENGINE = InnoDB;