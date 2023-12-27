
use lab;


CREATE TABLE regform (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    regno VARCHAR(20) NOT NULL,
    fname VARCHAR(255) NOT NULL,
    date_of_birth DATE NOT NULL,
    email VARCHAR(255) NOT NULL,
    degree VARCHAR(255) NOT NULL,
    tel VARCHAR(15) NOT NULL,
    photo VARCHAR(255) NOT NULL
);