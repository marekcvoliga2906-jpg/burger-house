CREATE TABLE users (
    users_id INT(11) AUTO_INCREMENT PRIMARY KEY not NULL,
    users_uid TINYTEXT not null,
    users_pwd VARCHAR(255) not null,
    users_email TINYTEXT not null
);