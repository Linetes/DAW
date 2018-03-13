-- La suma de las cantidades e importe total de todas las entregas realizadas durante el 97.
SET DATEFORMAT dmy;

SELECT SUM(Cantidad) AS 'Cantidades', SUM(Costo) AS 'Importe Total'
FROM Materiales M, Entregan E
WHERE E.Clave = M.Clave
AND Fecha BETWEEN '01/01/1997' AND '31/12/1997'

-- Para cada proveedor, obtener la razón social del proveedor, número de entregas e importe total de las entregas realizadas.

SELECT Pr.RazonSocial, COUNT(Pr.RFC) AS 'Numero de Entregas',SUM(Costo) AS 'Importe Total'
FROM Proveedores Pr, Entregan E, Materiales M
WHERE Pr.RFC = E.RFC
AND E.Clave = M.Clave
GROUP BY Pr.RazonSocial

-- Por cada material obtener la clave y descripción del material, la cantidad total entregada, la mínima cantidad entregada, la máxima cantidad entregada, el importe total de las entregas de aquellos materiales en los que la cantidad promedio entregada sea mayor a 400.

SELECT M.Clave, Descripcion, SUM(Cantidad) AS 'Cantidad Total Entregada', MIN(Cantidad) AS 'Cantidad Minima Entregada', MAX(Cantidad) AS 'Cantidad Maxima Entregada', SUM(Costo) AS 'Importe Total'
FROM Materiales M, Entregan E
WHERE M.Clave = E.Clave
GROUP BY M.Clave, Descripcion
HAVING AVG(Cantidad) > 400

-- Para cada proveedor, indicar su razón social y mostrar la cantidad promedio de cada material entregado, detallando la clave y descripción del material, excluyendo aquellos proveedores para los que la cantidad promedio sea menor a 500.
SELECT Pr.RazonSocial, AVG(Cantidad), M.Clave, Descripcion
FROM Proveedores Pr, Materiales M, Entregan E
WHERE Pr.RFC = E.RFC
AND M.Clave = E.Clave
GROUP BY RazonSocial, Descripcion, M.Clave
HAVING AVG(Cantidad) > 500

-- Mostrar en una solo consulta los mismos datos que en la consulta anterior pero para dos grupos de proveedores: aquellos para los que la cantidad promedio entregada es menor a 370 y aquellos para los que la cantidad promedio entregada sea mayor a 450.
SELECT Pr.RazonSocial, AVG(Cantidad), M.Clave, Descripcion
FROM Proveedores Pr, Materiales M, Entregan E
WHERE Pr.RFC = E.RFC
AND M.Clave = E.Clave
GROUP BY RazonSocial, Descripcion, M.Clave
HAVING AVG(Cantidad) < 370 OR AVG(Cantidad) > 450

--

INSERT INTO Materiales VALUES (1440,'Pozole R1', 222.00, 2.00);
INSERT INTO Materiales VALUES (1450,'Pozole R2', 333.00, 2.01);
INSERT INTO Materiales VALUES (1460,'Pozole R3', 444.00, 2.02);
INSERT INTO Materiales VALUES (1470,'Pozole R4', 555.00, 2.03);
INSERT INTO Materiales VALUES (1480,'Pozole R5', 666.00, 2.04);

SELECT *
FROM Materiales

-- Clave y descripción de los materiales que nunca han sido entregados.
SELECT Clave, Descripcion
FROM Materiales
WHERE Clave NOT IN(SELECT Clave
                   FROM Entregan)

-- Razón social de los proveedores que han realizado entregas tanto al proyecto 'Vamos México' como al proyecto 'Querétaro Limpio'.
SELECT DISTINCT RazonSocial
FROM Proveedores Pr, Proyectos P, Entregan E
WHERE Pr.RFC = E.RFC
AND P.Numero = E.Numero
AND Denominacion = 'Vamos Mexico'
AND RazonSocial IN(SELECT RazonSocial
                   FROM Proveedores Pr, Proyectos P, Entregan E
                   WHERE Pr.RFC = E.RFC
                   AND P.Numero = E.Numero
                   AND Denominacion = 'Queretaro Limpio')

-- Descripción de los materiales que nunca han sido entregados al proyecto 'CIT Yucatán'.
SELECT DISTINCT Descripcion
FROM Materiales M, Entregan E, Proyectos P
WHERE M.Clave = E.Clave
AND P.Numero = E.Numero
AND Descripcion NOT IN(SELECT M.Descripcion
                        FROM Materiales M, Entregan E, Proyectos P
                        WHERE M.Clave = E.Clave
                        AND P.Numero = E.Numero
                        AND P.Denominacion = 'CIT Yucatan')

-- Razón social y promedio de cantidad entregada de los proveedores cuyo promedio de cantidad entregada es mayor al promedio de la cantidad entregada por el proveedor con el RFC 'VAGO780901'.

INSERT INTO Proveedores VALUES ('VAGO780901','Prueba');
SELECT * FROM Proveedores
INSERT INTO Entregan VALUES (1440, 'VAGO780901', 5008, '2018-03-12', 300);


SELECT * FROM Entregan

SELECT RazonSocial, AVG(Cantidad) AS 'Average Cantidad'
FROM Proveedores Pr, Entregan E
WHERE Pr.RFC = E.RFC
GROUP BY RazonSocial
HAVING AVG(Cantidad) > (SELECT AVG(Cantidad)
                        FROM Entregan E2, Proveedores P2
                        WHERE P2.RFC = E2.RFC
                        AND P2.RFC = 'VAGO780901'
                        GROUP BY P2.RFC)

-- RFC, razón social de los proveedores que participaron en el proyecto 'Infonavit Durango' y cuyas cantidades totales entregadas en el 2000 fueron mayores a las cantidades totales entregadas en el 2001.
SET DATEFORMAT dmy;

SELECT Pr.RFC, RazonSocial
FROM Proveedores Pr, Entregan E, Proyectos P
WHERE Pr.RFC = E.RFC
AND P.Numero = E.Numero
AND Denominacion = 'Infonavit Durango'
AND E.Fecha BETWEEN '01/01/2000' AND '31/12/2000'
GROUP BY Pr.RFC, RazonSocial
HAVING SUM(Cantidad) > (SELECT SUM(E2.Cantidad)
                        FROM Proveedores Pr2, Entregan E2, Proyectos P2
                        WHERE Pr2.RFC = E2.RFC
                        AND P2.Numero = E2.Numero
                        AND Denominacion = 'Infonavit Durango'
                        AND E2.Fecha BETWEEN '01/01/2001' AND '31/12/2001'
                        GROUP BY Pr2.RFC, RazonSocial)