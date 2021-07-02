DROP PROCEDURE IF EXISTS maProcedure;
DROP PROCEDURE IF EXISTS maProcedure2;
DROP PROCEDURE IF EXISTS inscription;

DELIMITER //

    CREATE PROCEDURE maProcedure(IN params INT)
        BEGIN
            SET params = params + 1;
            SELECT params;
        END //

    CREATE PROCEDURE maProcedure2()
        BEGIN
            SET @params = @params + 2;
            SELECT @params;
        END //

        CREATE PROCEDURE inscription(
            IN email VARCHAR(255),
            IN pseudo VARCHAR(255),
            IN mdp VARCHAR(255),
            IN sexe ENUM('f', 'm', 'o'),
            IN dateNaissance DATE
        )
        DETERMINISTIC
        LANGUAGE SQL
        CONTAINS SQL
        MODIFIES SQL DATA
        BEGIN
            DECLARE EXIT HANDLER FOR SQLEXCEPTION
            BEGIN
                SELECT 'error catched';
                ROLLBACK;
            END;
                START TRANSACTION;
                    INSERT INTO users(`email`, `pseudo`, `password`, `sexe`, `date_naissance`) 
                    VALUES(email, pseudo, mdp, sexe, dateNaissance);
                SELECT 'toto';
                COMMIT;
        END //
DELIMITER ;