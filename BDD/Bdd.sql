
CREATE DATABASE BDD_SITE;
use BDD_SITE;
-- Create the table in the specified schema
CREATE TABLE Contact
(
    ContactID INT NOT NULL PRIMARY KEY, -- primary key column
    Nom [VARCHAR](50) NOT NULL,
    Mail [VARCHAR](50) NOT NULL,
    Msg [VARCHAR](250) NOT NULL
    -- specify more columns here
);
INSERT INTO Contact
( -- columns to insert data into
 [Nom], [Mail], [Msg]
)
VALUES
( -- first row: values for the columns in the list above
 "Jules Dupont", "exemple@mail.com", "Je serai intéréssé par la création d'un site en votre compagnie"
);
