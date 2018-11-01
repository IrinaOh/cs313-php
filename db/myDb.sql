CREATE TABLE client
(
    client_id serial PRIMARY KEY,
    first_name VARCHAR (20) NOT NULL,
    last_name VARCHAR (20) NOT NULL,
    email VARCHAR (100) NOT NULL,
    phone_number INTEGER NOT NULL
);
CREATE TABLE photoshoot
(
    photoshoot_id serial PRIMARY KEY,
    photoshoot_type VARCHAR (50),
    photoshoot_length INTEGER,
    photoshoot_number_of_people INTEGER,
    photoshoot_number_of_images INTEGER,
    photoshoot_number_of_outfits INTEGER
);
CREATE TABLE schedule
(
    schedule_id serial PRIMARY KEY,
    schedule_date INTEGER,
    schedule_time INTEGER,
    schedule_location VARCHAR (100),
    schedule_client_id INTEGER references client(client_id),
    schedule_photoshoot_id INTEGER references photoshoot(photoshoot_id)
);
CREATE TABLE feedback
(
    feedback_id serial PRIMARY KEY,
    feedback_content TEXT,
    feedback_client_id INTEGER references client(client_id),
    feedback_photoshoot_id INTEGER references photoshoot(photoshoot_id)
);
INSERT INTO photoshoot
	(photoshoot_type, photoshoot_length, photoshoot_number_of_people, photoshoot_number_of_images, photoshoot_number_of_outfits) 
VALUES 
	('High School Senior Portrait', 1, 1, 30, 2),
	('Family Portrait', 1, 1, 30, 2),
	('Studio Portrait', 1, 1, 30, 2),
	('Couples Portrait', 1, 1, 30, 2),
	('Mini Session Portrait', 0.5, 1, 30, 2);


UPDATE photoshoot
SET  photoshoot_number_of_people = 5
WHERE
 photoshoot_id = 2;

UPDATE photoshoot
SET  photoshoot_number_of_people = 2
WHERE photoshoot_id = 4;

UPDATE photoshoot
SET  photoshoot_number_of_people = 3
WHERE photoshoot_id = 3;