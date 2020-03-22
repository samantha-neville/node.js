-- USERS table. stores info about a user
CREATE TABLE users
( id            SERIAL       NOT NULL PRIMARY KEY
, name          VARCHAR(100) NOT NULL
, email         VARCHAR(320) NOT NULL
, password      CHAR(60)     NOT NULL
);

-- HOSTS table. stores host info and what user the host is
CREATE TABLE hosts
( id         SERIAL        NOT NULL PRIMARY KEY
, user_id    INT           NOT NULL REFERENCES users(id)
, about_host VARCHAR(1000) NOT NULL 
);

-- RETREATS table. stores any retreat and its info
CREATE TABLE retreats
( id            SERIAL         NOT NULL PRIMARY KEY
, price         DECIMAL(10, 2) NOT NULL
, location      VARCHAR(100)   NOT NULL
, type          VARCHAR(100)   NOT NULL
, description   VARCHAR(2000)  NOT NULL
, start_date    DATE           NOT NULL
, end_date      DATE           NOT NULL
, duration      INT            NOT NULL
, group_size    INT            NOT NULL
, language      VARCHAR(50)    NOT NULL
, cancel_policy VARCHAR(2000)  NOT NULL
, host_id       INT            NOT NULL REFERENCES hosts(id)
);

-- ATTENDEES table. matches users with retreats
-- the table that makes it possible to see any retreat a user has gone to, or all users that went to a certain retreat
CREATE TABLE attendees
( id         SERIAL NOT NULL PRIMARY KEY
, user_id    INT    NOT NULL REFERENCES users(id)
, retreat_id INT    NOT NULL REFERENCES retreats(id)
);


-- added a column to the retreats database later
ALTER TABLE retreats ADD name VARCHAR(100) NOT NULL;

-- added a column to the users database later
ALTER TABLE users ADD last_name VARCHAR(100) NOT NULL;