select *
from materiales

select * from materiales
where clave=1000

select clave,rfc,fecha from entregan

select * from materiales,entregan
where materiales.clave = entregan.clave

select * from entregan,proyectos
where entregan.numero < = proyectos.numero

(select * from entregan where clave=1450)
union
(select * from entregan where clave=1300)

select * from entregan where clave=1450 OR clave=1300

(select clave from entregan where numero=5001)
intersect
(select clave from entregan where numero=5018)

select * from entregan where NOT clave=1000

select * from entregan,materiales

SET DATEFORMAT dmy
SELECT DISTINCT Descripcion
FROM Materiales, Entregan
WHERE Fecha BETWEEN '01-JAN-2000' AND '31/12/2000'

SET DATEFORMAT dmy
SELECT P.Numero, P.Denominacion, E.Fecha, E.Cantidad
FROM Proyectos P, Entregan E
WHERE P.Numero = E.Numero
ORDER BY E.Fecha DESC

SELECT * FROM Materiales where Descripcion LIKE 'Si%'

SELECT * FROM materiales where Descripcion LIKE 'Si'

DECLARE @foo varchar(40);
DECLARE @bar varchar(40);
SET @foo = '¿Que resultado';
SET @bar = ' ¿¿¿??? '
SET @foo += ' obtienes?';
PRINT @foo + @bar;

SELECT RFC FROM Entregan WHERE RFC LIKE '[A-D]%';
SELECT RFC FROM Entregan WHERE RFC LIKE '[^A]%';
SELECT Numero FROM Entregan WHERE Numero LIKE '___6';

SELECT Clave,RFC,Numero,Fecha,Cantidad
FROM Entregan
WHERE Numero Between 5000 and 5010;

SELECT RFC,Cantidad, Fecha,Numero
FROM [Entregan]
WHERE [Numero] Between 5000 and 5010 AND
Exists ( SELECT [RFC]
FROM [Proveedores]
WHERE RazonSocial LIKE 'La%' and [Entregan].[RFC] = [Proveedores].[RFC] )

SELECT RFC,Cantidad, Fecha,Numero
FROM [Entregan]
WHERE [Numero] Between 5000 and 5010 AND
RFC NOT IN ( SELECT [RFC]
FROM [Proveedores]
WHERE RazonSocial LIKE 'La%' and [Entregan].[RFC] = [Proveedores].[RFC] )

SELECT TOP 2 * FROM Proyectos

SELECT TOP 1 Numero FROM Proyectos

ALTER TABLE materiales ADD PorcentajeImpuesto NUMERIC(2,6);
UPDATE materiales SET PorcentajeImpuesto = 2*clave/1000;
SELECT * FROM Materiales

SELECT Denominacion, SUM(Costo*Cantidad*(1+PorcentajeImpuesto/100)) as "Total A Pagar"
FROM Materiales M, Entregan E, Proyectos P
WHERE E.Clave = M.Clave AND E.Numero = P.Numero
GROUP BY Denominacion

CREATE VIEW Top_2_Proyectos("Numero", "Denominacion") as
SELECT TOP 2 * FROM Proyectos

SELECT * FROM Top_2_Proyectos

CREATE VIEW Prueba_1("clave","descripcion","costo") as
select Clave, Descripcion, Costo
from materiales
SELECT * FROM Prueba_1

CREATE VIEW Prueba_2("Descripcion") as
SELECT DISTINCT Descripcion
FROM Materiales, Entregan
WHERE Fecha BETWEEN '01-JAN-2000' AND '31/12/2000'

SELECT * FROM Prueba_2

CREATE VIEW Prueba_3("Clave","RFC","Numero","Fecha","Cantidad") as
select * from entregan where NOT clave=1000

SELECT * FROM Prueba_3

SET DATEFORMAT DMY;

CREATE VIEW Prueba_4("Descripcion") as
select DISTINCT descripcion
from materiales, entregan
where materiales.clave=entregan.clave AND
Fecha BETWEEN '01/01/00' AND '31/12/00';

SELECT * FROM Prueba_4

CREATE VIEW Prueba_5("Clave","RFC","Numero","Fecha","Cantidad") as
SELECT Clave,RFC,Numero,Fecha,Cantidad
FROM Entregan
WHERE Numero Between 5000 and 5010;

SELECT * FROM Prueba_5

select m.clave, descripcion
from materiales m, proyectos p, entregan e
where m.clave = e.clave and e.numero = p.numero
and p.denominacion = 'Mexico sin ti no estamos completos'

select m.clave, descripcion
from materiales m, entregan e, proveedores pr
where m.clave = e.clave and pr.rfc = e.rfc
and pr.razonSocial = 'Acme tools'

select rfc
from entregan
where fecha between '01/01/00' and '31/12/00'
group by rfc
having avg(cantidad)>=300

select descripcion, sum(cantidad) as 'total entregas'
from entregan e, materiales m
where e.clave = m.clave and fecha between '01/01/00' and '31/12/00'
group by descripcion

select top 1 clave
from entregan
where fecha between '01/01/01' and '31/12/01'
group by clave
order by sum(cantidad) desc

select descripcion
from materiales
where descripcion like '%ub%'

select denominacion, sum(costo*cantidad*(1+porcentajeImpuesto/100)) as 'total a pagar'
from materiales m, entregan e, proyectos p
where e.clave = m.clave and e.numero = p.numero
group by denominacion

create view a as
select denominacion, e.RFC, pr.RazonSocial
from proyectos p, entregan e, proveedores pr
where denominacion = 'Educando en coahuila'
and e.numero = p.numero and pr.RFC = e.RFC

select * from a

select denominacion, e.RFC, pr.RazonSocial
from proyectos p, entregan e, proveedores pr
where denominacion = 'Educando en coahuila'
and e.numero = p.numero and pr.RFC = e.RFC

select costo, descripcion
from proyectos p, entregan e, materiales m, proveedores pr
where denominacion = 'Televisa%' and  pr.RazonSocial LIKE 'Educando en Coahuila'
and e.numero = p.numero and m.clave = e.clave

select descripcion, count(e.clave) as "Cantidad de veces entregado" , sum(e.Cantidad * m.Costo) as "Total del costo"
from entregan e, materiales m
where m.Clave = e.Clave
group by descripcion