CREATE TABLE client
(
  id            SERIAL           PRIMARY KEY,
  name          VARCHAR(100)     NOT NULL,
  password      VARCHAR(255)     NOT NULL,
  client_type   VARCHAR(15)      NOT NULL       DEFAULT 'user'
);

CREATE TABLE message
(
  id            SERIAL           PRIMARY KEY,
  message       TEXT
);

CREATE TABLE package
(
  id            SERIAL           PRIMARY KEY,
  package       VARCHAR(45)      NOT NULL,
  description   TEXT             NOT NULL
);

CREATE TABLE calendar
(
  id            SERIAL           PRIMARY KEY,
  appt          DATE             NOT NULL
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
  appointment   TIME(4)          NOT NULL,
  user_id       INT              NOT NULL          REFERENCES client(id),
  calendar_id   INT              NOT NULL          REFERENCES calendar(id),
  package_id    INT              NOT NULL          REFERENCES package(id),
  message_id    INT              NOT NULL          REFERENCES message(id)
);

INSERT INTO client (name, password) VALUES
('cgardner', 'bob'),
('bgardner', 'spaghetti'),
('pdiddy', 'irock'),
('fitz','password');

INSERT INTO package (package, description) VALUES
('Family', '1.5 hours of photos split between upto two locations'),
('Dance', 'Photos for up to 12 couples'),
('Sports', 'Induvidual and Team Photos'),
('Engagements', '1.5 hours of photos in a two locations'),
('Wedding', '2.5 hours of photos in a three locations');

INSERT INTO calendar(appt) VALUES
('2019-02-13'),
('2019-03-18'),
('2019-01-29'),
('2019-05-15');

INSERT INTO message (message)
VALUES
('Just wondering what kind of Camera you use?'),
('Do you have any location reccommendations?');

INSERT INTO appointment(appointment, user_id, calendar_id, package_id, message_id)
VALUES
('12:30', 1, 2, 2, 1),
('1:00', 3, 1, 1, 2),
('8:30', 4, 3, 3, 1);


ALTER TABLE client ADD COLUMN client_type VARCHAR(10) NOT NULL DEFAULT 'user';

SELECT appt FROM calendar JOIN calendar cal ON cal.id = a.calendar_id WHERE EXTRACT(MONTH FROM appt) = 02;

SELECT appointment, appt
FROM appointment a
JOIN calendar cal ON cal.id = a.calendar_id WHERE EXTRACT(MONTH FROM appt) = 02;
