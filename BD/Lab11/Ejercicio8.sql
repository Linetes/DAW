--1.- Actrices de “Las brujas de Salem”.
SELECT nombre
FROM Actor
WHERE sexo = 'F'
AND nombre IN (SELECT nombre
         		   FROM Elenco E
         		   WHERE titulo = 'Las brujas de Salem')

SELECT A.nombre
FROM Elenco E, Actor A
WHERE E.nombre = A.nombre
AND E.titulo = 'Las brujas de Salem'
AND sexo = 'F'

--2.- Nombres de los actores que aparecen en películas producidas por MGM en 1995.
SELECT nombre
FROM Elenco
WHERE titulo IN (SELECT titulo
                 FROM pelicula
                 WHERE nomestudio = 'MGM'
                 AND año = 1995)


SELECT E.nombre
FROM Elenco E, Pelicula P
WHERE E.titulo = P.titulo
AND año=1995
AND nomestudio = 'MGM'

--3.- Películas que duran más que “Lo que el viento se llevó” (de 1939).
SELECT titulo
FROM Películas P
WHERE duración > (SELECT duración
                  FROM película
                  WHERE titulo = 'Lo que el viento se llevó'
                 	AND año = 1938)

--4.- Productores que han hecho más películas que George Lucas.
SELECT PR.nombre, count(p.idproductor) as 'n. peliculas'
FROM Productor PR, Pelicula P
WHERE P.idproductor = PR.idproductor
AND 'n.peliculas' > (SELECT count(P.idproductor)
                    FROM Pelicula P, Productor PR
                    WHERE P.idproductor = PR.idproductor
                    AND PR.nombre= 'George Lucas'
                    GROUP BY PR.nombre)

--5.- Nombres de los productores de las películas en las que ha aparecido Sharon Stone.
SELECT nombre
FROM Productores
WHERE idproductor = (SELECT idproductor
                    FROM Película P, Elenco E
                    WHERE P.titulo = E.titulo
                    AND E.nombre = 'Sharon Stone')

SELECT P.nombre
FROM Productores P, Película Pe, Elenco E
WHERE P.idproductor = Pe.idproductor
AND Pe.titulo = E.titulo
AND E.nombre = 'Sharon Stone'

--6.- Título de las películas que han sido filmadas más de una vez
SELECT titulo, COUNT(titulo) as 'repeticiones'
FROM Peliculas
GROUP BY titulo
HAVING repeticiones > 1
