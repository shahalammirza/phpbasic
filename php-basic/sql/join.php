INNER JOIN:

================
SELECT valvee.firstName, valvee.lastName, orders.orderNuber
FROM valvee 
INNER JOIN orders
ON valvee.id = orders.valveeId
ORDER BY valvee.lastName;

LEFT JOIN:

=================
SELECT valvee.firstName, valvee.lastName, orders.orderNuber
FROM valvee 
LEFT JOIN orders
ON valvee.id = orders.valveeId
ORDER BY valvee.lastName;

RIGHT JOIN:

================
SELECT valvee.firstName, valvee.lastName, orders.orderNuber
FROM valvee
RIGHT JOIN orders 
ON valvee.id = orders.valveeId
ORDER BY valvee.lastName;


