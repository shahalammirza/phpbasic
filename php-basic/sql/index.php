INSERT:

================================
INSERT INTO books VALUES('null','shajahan','346571','civil','math','01965152715','khulna','2020-2-09'),
('null','shamim','346573','mecanical','english','01965152815','rajshahi','2020-2-10');



INSERT INTO books VALUES('null','billal','346574','power','NULL','01965152915','khulna','2020-2-09'),
('null','hredoy','346575','cmt','NULL','01965152015','rajshahi','2020-2-10');


INSERT INTO books (name,roll,dept) VALUES('abir','346574','science');


SELECT:

================================
SELECT * FROM books;


SELECT id,name,dept FROM books;


SELECT DISTINCT dept FROM books;


SELECT * FROM books
WHERE id = 2;



SELECT * FROM books 
WHERE books_name IS NULL;


SELECT * FROM books
WHERE books_name IS NOT NULL;


SELECT * FROM books
WHERE id BETWEEN 2 and 6;


SELECT * FROM books
WHERE id IN(1,6,8);


SELECT * FROM books
WHERE name LIKE 'sha%';


SELECT * FROM books 
WHERE books_name LIKE '%gy';


SELECT * FROM books 
WHERE books_name LIKE '%lo%';


SELECT * FROM books 
WHERE id=1 AND dept= 'cmt';


SELECT * FROM books
WHERE id = 1 OR name = 'shamim'; 


SELECT * FROM books
ORDER BY id;


SELECT * FROM books
ORDER BY id ASC;


SELECT * FROM books
ORDER BY id DESC;


SELECT * FROM books
LIMIT 1,4;


SELECT * FROM books
LIMIT 0,4;



UPDATE:


================================

UPDATE books 
SET books_name = 'practical'
WHERE id = 2;


UPDATE books 
SET name = 'Mirza'
WHERE id = 1;



DELETE:


================================

DELETE FROM books
WHERE id = 9;





AGGREGATE FUNCTION:

================================
SELECT count(roll) FROM books;


SELECT AVG(roll)FROM books;


SELECT MAX(roll) FROM books;


SELECT MIN(roll) FROM books;


SELECT SUM(roll) FROM books;


GROUP BY:

=================================

SELECT house,COUNT(house)
FROM books
WHERE id > 2
GROUP BY house;



SELECT house,COUNT(house)FROM books
GROUP BY house;


UNION:

=================================
SELECT id, name
FROM books
WHERE dept = 'power'
UNION
SELECT id, name
FROM books
WHERE dept = 'cmt';



max valuer all DATA:

================================
SELECT * FROM orders
WHERE orderNuber = (SELECT MAX(orderNuber) FROM orders);