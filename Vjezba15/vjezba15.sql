CREATE DATABASE IF NOT EXISTS RegistracijaKorisnika;
USE RegistracijaKorisnika;

CREATE TABLE IF NOT EXISTS Korisnici (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    country VARCHAR(255),
    CONSTRAINT unique_email UNIQUE (email),
    CONSTRAINT unique_username UNIQUE (username)
);

INSERT INTO Korisnici (first_name, last_name, email, username, password, country) VALUES
('Ivica', 'Ivic', 'ivica@mail.com', 'ivica123', 'pass123', 'HR'),
('Mark', 'Smith', 'mark.smith@mail.com', 'mark456', 'pass', 'CA');
