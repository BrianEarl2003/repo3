DROP TABLE IF EXISTS quote;
DROP TABLE IF EXISTS course;

CREATE TABLE category(
    id SERIAL PRIMARY KEY,
    category_name VARCHAR(256) NOT NULL UNIQUE
    );

CREATE TABLE quote(
    id SERIAL PRIMARY KEY,
    category_id INT NOT NULL REFERENCES category(id),
    quotee TEXT NOT NULL,
    content TEXT NOT NULL
    );

INSERT INTO category (category_name) VALUES ('Humor');
INSERT INTO category (category_name) VALUES ('Inspirational');
INSERT INTO category (category_name) VALUES ('Religious');
INSERT INTO category (category_name) VALUES ('Historical');
INSERT INTO category (category_name) VALUES ('Educational');

Insert INTO quote (category_id, quotee, content) VALUES (1, 'Mark Twain', 'Get your facts first, then you can distort them as you please.');
Insert INTO quote (category_id, quotee, content) VALUES (2, 'Henry Ford', 'Whether you think you can, or you think you can''t--you''re right.');
Insert INTO quote (category_id, quotee, content) VALUES (3, 'Nephi', 'And my father dwelt in a tent.');
Insert INTO quote (category_id, quotee, content) VALUES (4, 'Abraham Lincoln', 'The best way to get a bad law repealed is to enforce it strictly.');
Insert INTO quote (category_id, quotee, content) VALUES (5, 'Albert Einstein', 'The only thing that interferes with my learning is my education.');