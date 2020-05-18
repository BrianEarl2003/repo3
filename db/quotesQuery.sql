SELECT * FROM category;

SELECT * FROM quote;

--get max quote COUNT
SELECT COUNT(*) FROM quote;

--show everything from both tables
SELECT * FROM category c JOIN quote q ON c.id=q.category_id;

--category name and content
SELECT category_name, content FROM category c JOIN quote q ON c.id=q.category_id;

--get max quote COUNT from a category
SELECT COUNT(*) FROM category c JOIN quote q ON c.id=q.category_id WHERE c.category_name='Humor';

--list quotes from category
SELECT content FROM category c JOIN quote q ON c.id=q.category_id WHERE c.category_name='Humor';

--list quotes from category
SELECT content FROM category c, quote q WHERE c.id=q.category_id AND c.category_name='Humor';

--List of all quotes
SELECT id, quotee, content FROM quote;

--Random Quote
SELECT id, quotee, content FROM quote q WHERE q.id=floor(random()*(7-1+1)+1);