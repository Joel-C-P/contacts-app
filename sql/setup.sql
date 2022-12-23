DROP DATABASE IF EXISTS conctacts_app;

CREATE DATABASE conctacts_app;

USE conctacts_app;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    phone_number VARCHAR(255)
);

INSERT INTO contacts (name, phone_number) VALUES("Messi","612433822");s