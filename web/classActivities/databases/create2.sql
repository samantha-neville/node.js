
-- start of team activity
DROP TABLE IF EXISTS topics;

CREATE TABLE topics
(
   id      SERIAL        NOT NULL PRIMARY KEY
 , name    VARCHAR(100)  NOT NULL

);

INSERT INTO topics(name) VALUES ('Faith');
INSERT INTO topics(name) VALUES ('Sacrifice');
INSERT INTO topics(name) VALUES ('Charity');


-- start of team activity
DROP TABLE IF EXISTS scripture_topics;

CREATE TABLE scripture_topics
(
   id           SERIAL NOT NULL PRIMARY KEY
 , scripture_id INT NOT NULL REFERENCES scriptures(id)
 , topic_id     INT NOT NULL REFERENCES topics(id)
);

-- INSERT INTO topics(name) VALUES ('Faith');
-- INSERT INTO topics(name) VALUES ('Sacrifice');
-- INSERT INTO topics(name) VALUES ('Charity');


