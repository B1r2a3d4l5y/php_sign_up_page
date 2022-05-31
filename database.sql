CREATE TABLE users (
    User_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
    first_name VARCHAR(250)NOT NULL,
    last_name VARCHAR(250)NOT NULL,
    email VARCHAR(250) NOT NULL,
    user_name VARCHAR(250) NOT NULL,
    password VARCHAR(250) NOT NULL

);
INSERT INTO users(first_name, last_name, email, user_name, password)VALUES("John", "Doe", "john@example.com", "JohnDoe", "test");