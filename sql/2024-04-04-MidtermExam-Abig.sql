# Answer for 1
SELECT 
    c.customerNumber,
    c.customerName,
    c.creditLimit,
    CONCAT(e.lastName, ' ', e.firstName) AS SalesRepresentative
FROM 
    customers c
JOIN 
    employees e ON c.salesRepEmployeeNumber = e.employeeNumber
WHERE 
    c.creditLimit = (
        SELECT MAX(creditLimit) 
        FROM customers
    );
    
# Answer for 2
SELECT
    CONCAT(e.lastName, ' ', e.firstName) AS Employee,
    CONCAT(m.lastName, ' ', m.firstName) AS Manager
FROM
    employees e
JOIN
    employees m ON e.reportsTo = m.employeeNumber;

	
# Answer for 3
SELECT
    o.orderNumber,
    o.orderDate,
    o.requiredDate,
    o.shippedDate,
    o.status,
    o.comments,
    c.customerNumber,
    c.customerName
FROM
    orders o
JOIN
    customers c ON o.customerNumber = c.customerNumber
WHERE
    o.status = 'Shipped'
    AND o.shippedDate > o.requiredDate;

# Answer for 4
SELECT
    c.customerNumber,
    c.customerName,
    SUM(p.amount) AS total_payments
FROM
    customers c
JOIN
    payments p ON c.customerNumber = p.customerNumber
GROUP BY
    c.customerNumber, c.customerName
ORDER BY
    total_payments DESC
LIMIT 1;

# Answer for 5
SELECT
    p.productCode,
    p.productLine,
    p.productName,
    SUM(od.quantityOrdered) AS totalOrder
FROM
    products p
JOIN
    orderdetails od ON p.productCode = od.productCode
JOIN
    orders o ON od.orderNumber = o.orderNumber
WHERE
    p.productLine = 'Motorcycles'
GROUP BY
    p.productCode, p.productLine, p.productName
ORDER BY
    totalOrder DESC
LIMIT 10;

