CREATE TABLE scriptures
(
  id             SERIAL             PRIMARY KEY,
  book           VARCHAR(20)        NOT NULL,
  chapter        SMALLINT           NOT NULL,
  verse          SMALLINT           NOT NULL,
  content        TEXT               NOT NULL
  );

  CREATE TABLE topic (
    id           SERIAL             PRIMARY KEY,
    name         VARCHAR(100)       NOT NULL
    );

CREATE TABLE scriptures_topic (
  id             SERIAL            PRIMARY KEY,
  topic_id       INT               REFERENCES topic(id),
  scriptures_id  INT               REFERENCES scriptures(id)
  );

INSERT INTO scriptures (book, chapter, verse, content) VALUES
('John', 1, 5,
 'And the alight shineth in darkness; and the darkness comprehended it not.'),

('D&C', 88, 49,
'The light shineth in darkness, and the darkness comprehendeth
it not; nevertheless, the day shall come when you shall comprehend even God,
being quickened in him and by him.'),

('D&C', 93, 28,
'He that keepeth his commandments receiveth truth and light,
until he is glorified in truth and knoweth all things.'),

('Mosiah', 16, 9,
'He is the light and the life of the world; yea, a light that is endless,
that can never be darkened; yea, and also a life which is endless,
that there can be no more death.');

INSERT INTO topic (name) VALUES
('Faith'),
('Sacrifice'),
('Charity');
