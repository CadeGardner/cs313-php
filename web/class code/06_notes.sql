CREATE TABLE course
(
  id                 SERIAL            PRIMARY KEY,
  course_name        VARCHAR(60)       NOT NULL,
  course_code        VARCHAR(10)       NOT NULL
);

CREATE TABLE note
(
  id                 SERIAL            PRIMARY KEY,
  note_date          DATE              NOT NULL,
  note_content       TEXT              NOT NULL,
  course_id          INT               NOT NULL           REFERENCES course(id)
);

INSERT INTO course(course_name, course_code) VALUES
('Web II', 'CS313'),
('Web I', 'CS213');
