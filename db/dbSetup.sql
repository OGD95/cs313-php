DROP TABLE IF EXISTS conditions;
DROP TABLE IF EXISTS manufacturers;
DROP TABLE IF EXISTS sports;

CREATE TABLE conditions (
	condition_id SERIAL PRIMARY KEY,
	card_condition VARCHAR (50)
);

INSERT INTO conditions(card_condition)
VALUES('Poor'), 
	  ('Fair'), 
	  ('Good'), 
      ('Very Good'), 
      ('Very Good-Excellent'),
      ('Excellent'),
      ('Excellent-Mint'),
      ('Near Mint'),
      ('Near Mint-Mint'),
      ('Mint'),
      ('Gem Mint');

CREATE TABLE manufacturers (
	manufacturer_id SERIAL PRIMARY KEY,
	manufacturer VARCHAR (50)
);

INSERT INTO manufacturers(manufacturer)
VALUES('Topps'), 
	  ('Upper Deck'), 
      ('Panini'), 
      ('Fleer'), 
      ('Bowman');

CREATE TABLE sports (
	sport_id SERIAL PRIMARY KEY,
	sport VARCHAR (50)
);

INSERT INTO sports(sport)
VALUES('Football'),
	  ('Baseball'),
      ('Basketball'),
      ('Hockey'),
      ('UFC'),
      ('Soccer');

CREATE TABLE IF NOT EXISTS accounts (
	account_id SERIAL PRIMARY KEY,
	password VARCHAR (50) NOT NULL,
	username VARCHAR (50) UNIQUE NOT NULL,
	shipping_address VARCHAR (100) NOT NULL,
	first_name VARCHAR (50) NOT NULL,
	last_name VARCHAR (50) NOT NULL,
	created_on TIMESTAMP NOT NULL
);

CREATE TABLE IF NOT EXISTS card_listings (
	listing_id SERIAL PRIMARY KEY,
	account_id INT NOT NULL,
	sport_id INT NOT NULL,
	condition_id INT NOT NULL,
	manufacrurer_id INT NOT NULL,
	athlete_first_name VARCHAR (50) NOT NULL,
	athlete_last_name VARCHAR (50) NOT NULL,
	description TEXT,
	CONSTRAINT fk_account
		FOREIGN KEY (account_id)
			REFERENCES accounts(account_id),
	CONSTRAINT fk_sport
		FOREIGN KEY (sport_id)
			REFERENCES sports(sport_id),
	CONSTRAINT fk_condition
		FOREIGN KEY (condition_id)
			REFERENCES conditions(condition_id),
	CONSTRAINT fk_manufacturer
		FOREIGN KEY (manufacturer_id)
			REFERENCES manufacturers(manufacturer_id)
);
	