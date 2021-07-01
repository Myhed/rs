DROP ROLE IF EXISTS 'developer';

CREATE ROLE 'developer' WITH ADMIN 'root'@'localhost';

GRANT 'developer' TO 'myhed'@'localhost';

SET DEFAULT ROLE 'developer' FOR 'myhed'@'localhost';

GRANT SELECT, INSERT ON inscription.users TO 'developer';

SELECT Host, User, Password, is_role, default_role FROM mysql.user;