DROP USER IF EXISTS 'myhed'@'localhost';
DROP USER IF EXISTS 'test';

CREATE USER 'myhed'@'localhost' IDENTIFIED BY 'toto' 
WITH MAX_QUERIES_PER_HOUR 200 MAX_CONNECTIONS_PER_HOUR 100 PASSWORD 
EXPIRE INTERVAL 1 DAY;

CREATE USER 'test'@'%' IDENTIFIED BY '';

SELECT Host, User, Password, authentication_string, plugin, max_connections FROM mysql.user;
