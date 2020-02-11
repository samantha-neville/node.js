-- DROP TABLE IF EXISTS w5_family_members;
-- DROP TABLE IF EXISTS w5_relationships;

-- CREATE TABLE w5_relationships
-- (
--    id          SERIAL       NOT NULL PRIMARY KEY
--  , description VARCHAR(100) NOT NULL
-- );

-- CREATE TABLE w5_family_members
-- (
--    id              SERIAL       NOT NULL PRIMARY KEY
--  , first_name      VARCHAR(100)  NOT NULL
--  , last_name       VARCHAR(100)  NOT NULL
--  , relationship_id INT NOT NULL REFERENCES w5_relationships(id)
-- );


-- INSERT INTO w5_relationships(description) VALUES ('mother');
-- INSERT INTO w5_relationships(description) VALUES ('father');
-- INSERT INTO w5_relationships(description) VALUES ('wife');
-- INSERT INTO w5_relationships(description) VALUES ('husband');
-- INSERT INTO w5_relationships(description) VALUES ('son');
-- INSERT INTO w5_relationships(description) VALUES ('daughter');
-- INSERT INTO w5_relationships(description) VALUES ('brother');

-- INSERT INTO w5_family_members(first_name, last_name, relationship_id) VALUES ('Shannon', 'Christensen', 1);
-- INSERT INTO w5_family_members(first_name, last_name, relationship_id) VALUES ('Allen', 'Christensen', 2);
-- INSERT INTO w5_family_members(first_name, last_name, relationship_id) VALUES ('Samantha', 'Neville', 3);
-- INSERT INTO w5_family_members(first_name, last_name, relationship_id) VALUES ('Jared', 'Neville', 4);
-- INSERT INTO w5_family_members(first_name, last_name, relationship_id) VALUES ('Myles', 'Neville', 5);



-- start of team activity
DROP TABLE IF EXISTS scriptures;

CREATE TABLE scriptures
(
   id      SERIAL        NOT NULL PRIMARY KEY
 , book    VARCHAR(100)  NOT NULL
 , chapter INT  NOT NULL
 , verse   INT  NOT NULL
 , content VARCHAR(1000) NOT NULL
);

INSERT INTO scriptures(book, chapter, verse, content) VALUES ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.');
INSERT INTO scriptures(book, chapter, verse, content) VALUES ('Doctrine and Covenants', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall bcomprehend even God, being quickened in him and by him.');
INSERT INTO scriptures(book, chapter, verse, content) VALUES ('Doctrine and Covenants', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');
INSERT INTO scriptures(book, chapter, verse, content) VALUES ('Mosiah', 16, 9, 'He is the alight and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');






