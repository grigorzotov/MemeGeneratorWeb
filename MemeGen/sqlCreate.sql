CREATE TABLE users (
	user_id int(20) AUTO_INCREMENT PRIMARY KEY NOT null,
    user_first varchar(256) NOT null,
    user_uid varchar(256) NOT null,
	user_topic varchar(256) NOT null,
    user_pwd varchar(257) NOT null
);

INSERT INTO users (user_first, user_uid, user_topic, user_pwd)
VALUES ('ADMIN', '0000', 'ALL', '1234');

INSERT INTO users (user_first, user_uid, user_topic, user_pwd)
VALUES ('Grigor', '0001', 'CSS_Shapes', 'a123');

INSERT INTO users (user_first, user_uid, user_topic, user_pwd)
VALUES ('Danail', '0002', 'HTML_Shapes', 'b321');