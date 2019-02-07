CREATE TABLE client
(
  id            SERIAL           PRIMARY KEY,
  name          VARCHAR(100)     NOT NULL,
  password      VARCHAR(60)      NOT NULL
);

CREATE TABLE message
(
  id            SERIAL           PRIMARY KEY,
  message       TEXT
);

CREATE TABLE package
(
  id            SERIAL           PRIMARY KEY,
  name          VARCHAR(45)      NOT NULL,
  description   TEXT             NOT NULL
);

CREATE TABLE calendar
(
  id            SERIAL           PRIMARY KEY,
  date          DATE             NOT NULL
);

CREATE TABLE instant_message
(
  id            SERIAL           PRIMARY KEY,
  user_id       INT              NOT NULL          REFERENCES client(id),
  message_id    INT              NOT NULL          REFERENCES message(id)
);

CREATE TABLE appointment
(
  id            SERIAL           PRIMARY KEY,
  appointment   TIME             ,
  user_id       INT              NOT NULL          REFERENCES client(id),
  calendar_id   INT              NOT NULL          REFERENCES calendar(id),
  package_id    INT              NOT NULL          REFERENCES package(id),
  message_id    INT              NOT NULL          REFERENCES message(id)
);
