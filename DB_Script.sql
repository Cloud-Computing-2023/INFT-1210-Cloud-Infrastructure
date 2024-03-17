CREATE TABLE employee (id SERIAL PRIMARY KEY, fname VARCHAR NOT NULL, lname VARCHAR NOT NULL,
position VARCHAR ,created_at TIMESTAMPTZ DEFAULT Now() );

INSERT INTO employee (fname,lname) VALUES ('Gwyneth','Lopes');

INSERT INTO employee (fname,lname) VALUES ('Garreth','Lopes');

INSERT INTO employee (fname,lname) VALUES ('Ezra','Lopes');
INSERT INTO employee (fname,lname) VALUES ('Aziel','Lopes');
INSERT INTO employee (fname,lname) VALUES ('Dwayne','Lopes');
