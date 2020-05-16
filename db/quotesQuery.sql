SELECT * FROM category;

SELECT * FROM quote;

SELECT * FROM category c JOIN quote q ON c.id=q.category_id;

SELECT category_name, content FROM category c JOIN quote q ON c.id=q.category_id;

SELECT content FROM category c JOIN quote q ON c.id=q.category_id WHERE c.category_name='Humor';

SELECT content FROM category c, quote q WHERE c.id=q.category_id AND c.category_name='Humor';
--List of all quotes
SELECT id, quotee, content FROM quote;
--Random Quote
SELECT id, quotee, content FROM quote q WHERE q.id=floor(random()*(7-1+1)+1)::int;