CREATE DATABASE shareboard;
USE shareboard;
CREATE TABLE users (
	id INT (1) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR (30),
	email VARCHAR (50),
	password VARCHAR (10),
	register_date DATETIME
);
CREATE TABLE shares (
	id INT (1) AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR (50),
	body VARCHAR (255),
	link VARCHAR (255),
	user_id int(1),
	create_date DATETIME
);
/*
INSERT INTO users (name, email, password, register_date)
VALUES
	(
		'sabrina',
		'sabrinabgbc@email.com',
		'123',
		NOW()
	);
*/