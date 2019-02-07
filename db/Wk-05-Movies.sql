/* Create a source first and then connections later */

CREATE TABLE actor
(
    actor_id         SERIAL          PRIMARY KEY,
    name             VARCHAR(100)    NOT NULL

);

CREATE TABLE movie
(
    movie_id         SERIAL          PRIMARY KEY,
    title            VARCHAR(100)    NOT NULL,
    year             SMALLINT

);

/* Time to insert some data!! */

INSERT INTO movie(title, year) VALUES('Return of the Jedi', 1983);
INSERT INTO movie(title, year) VALUES
('The Wizard of Oz', 1939),
('Harry Potter and the Chamber of Secrets', 2002),
('The Return of the King', 2003);

SELECT * FROM movie;

INSERT INTO actor(name) VALUES
('Orlando Bloom'),
('Elijah Wood'),
('Jackie Chan'),
('Mel Gibson'),
('Daniel Radcliffe');

UPDATE actor SET name = 'Melvin Gibson' WHERE id=4;

/* Now the relationship many to many table */

CREATE TABLE movie_actor
(
    movie_actor_id      SERIAL       PRIMARY KEY,
    movie_id            INT          NOT NULL        REFERENCES movie(movie_id),
    actor_id            INT          NOT NULL        REFERENCES actor(actor_id)
);


INSERT INTO movie_actor(movie_id, actor_id) VALUES
(2,3),
(3,5),
(1,4),
(4,2),
(4,1);

SELECT * FROM movie m
JOIN movie_actor ma ON m.movie_id = ma.movie_id
JOIN actor a ON ma.actor_id = a.actor_id
WHERE title = 'The Return of the King';

SELECT a.name, m.title FROM movie m
JOIN movie_actor ma ON m.movie_id = ma.movie_id
JOIN actor a ON ma.actor_id = a.actor_id
WHERE title = 'The Return of the King';

/* You can use AS to rename columns during the query and the names of the
columns are what we use in our php  */
