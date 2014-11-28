CREATE DATABASE awesome_test_db;

USE awesome_test_db;

CREATE TABLE awesome_things(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(64),
	percent TINYINT
);

INSERT INTO awesome_things (name, percent)
VALUES 
	('Wooden sunglasses', 72),
	('Pabst Blue Ribbon', 85),
	('Bands no one has heard of', 100),
	('Vintage clothing', 67);

SELECT CONCAT(name, ': ', percent, '% awesome, which means I\'m onboard')
FROM awesome_things
WHERE percent>75
ORDER BY percent DESC;

DROP DATABASE awesome_test_db;