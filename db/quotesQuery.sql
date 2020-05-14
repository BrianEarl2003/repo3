SELECT * FROM category;

SELECT * FROM quote;

SELECT * FROM category c JOIN quote q ON c.id=q.category_id;

SELECT category_name, content FROM category c JOIN quote q ON c.id=q.category_id;

SELECT content FROM category c JOIN quote q ON c.id=q.category_id WHERE c.category_name='Humor';

SELECT content FROM category c, quote q WHERE c.id=q.category_id AND c.category_name='Humor';