CREATE TABLE person
( id            SERIAL       NOT NULL PRIMARY KEY
, first_name    VARCHAR(100) NOT NULL
, last_name     VARCHAR(320) NOT NULL
, birthday      VARCHAR(60)  NOT NULL
);

CREATE TABLE relationships
(
    id SERIAL NOT NULL PRIMARY KEY
,   parent_id INT NOT NULL REFERENCES person(id)
,   child_id  INT NOT NULL REFERENCES person(id)
);