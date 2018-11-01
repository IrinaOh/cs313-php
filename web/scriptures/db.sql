-- week 5
CREATE TABLE scripture --removed "s" at the end
(
	scripture_id serial PRIMARY KEY NOT NULL,
	book varchar(30) NOT NULL,
	chapter integer NOT NULL,
	verse integer NOT NULL,
	content text NOT NULL
);

INSERT INTO scripture
	(book, chapter, verse, content)
VALUES
	('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.'),
	('Doctrine and Covenants', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'),
	('Doctrine and Covenants', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'),
	('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');

-- week 6
CREATE TABLE topic
(
  topic_id serial PRIMARY KEY NOT NULL,
  name varchar(30) NOT NULL
);

INSERT INTO topic
  (name)
VALUES
  ('Faith'),
  ('Sacrifice'),
  ('Charity');

CREATE TABLE scripture_topic
(
  scripture_topic_id serial PRIMARY KEY NOT NULL,
  scripture_id integer NOT NULL REFERENCES scripture(scripture_id), --using REFERENCES clause to define a foreign key constraint
  topic_id integer NOT NULL REFERENCES topic(topic_id)
);

--join table query
SELECT s.book, s.chapter, s.verse, s.content, t.name
FROM scripture_topic st
	JOIN topic t
		ON st.topic_id = t.topic_id;
	JOIN scripture s
		ON st.scripture_id = s.scripture_id;

--week7
CREATE TABLE account(
account_id serial PRIMARY KEY,
account_username VARCHAR(80) NOT NULL,
account_password VARCHAR(80) NOT NULL
);