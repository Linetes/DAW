-- Materiales Add, Modificar, Borrar

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'creaMaterial' AND type = 'P')
                DROP PROCEDURE creaMaterial
            GO

            CREATE PROCEDURE creaMaterial
                @uclave NUMERIC(5,0),
                @udescripcion VARCHAR(50),
                @ucosto NUMERIC(8,2),
                @uimpuesto NUMERIC(6,2)
            AS
                INSERT INTO Materiales VALUES(@uclave, @udescripcion, @ucosto, @uimpuesto)

  EXECUTE creaMaterial 5000,'Martillos Acme',250,15

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'modificaMaterial' AND type = 'P')
                DROP PROCEDURE modificaMaterial
            GO

            CREATE PROCEDURE modificaMaterial
                @uclave NUMERIC(5,0),
                @udescripcion VARCHAR(50),
                @ucosto NUMERIC(8,2),
                @uimpuesto NUMERIC(6,2)
            AS
                UPDATE Materiales
                SET Descripcion = @udescripcion, Costo = @ucosto, PorcentajeImpuesto = @uimpuesto
                WHERE Clave = @uclave

  EXECUTE modificaMaterial 5000,'Martillos Acme 2',255,20

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'borraMaterial' AND type = 'P')
                DROP PROCEDURE borraMaterial
            GO

            CREATE PROCEDURE borraMaterial
                @uclave NUMERIC(5,0)
            AS
                DELETE FROM Materiales
                WHERE Clave = @uclave

  EXECUTE borraMaterial 5000

-- Proyectos Add, Modificar, Borrar

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'creaProyecto' AND type = 'P')
                DROP PROCEDURE creaProyecto
            GO

            CREATE PROCEDURE creaProyecto
                 @unumero NUMERIC(5,0),
                 @udenominacion VARCHAR(50)
            AS
                INSERT INTO Proyectos VALUES(@unumero, @udenominacion)

  EXECUTE creaProyecto 5020,'Queretaro Limpio'

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'modificaProyecto' AND type = 'P')
                DROP PROCEDURE modificaProyecto
            GO

            CREATE PROCEDURE modificaProyecto
                @unumero NUMERIC(5,0),
                @udenominacion VARCHAR(50)
            AS
                UPDATE Proyectos
                SET Denominacion = @udenominacion
                WHERE Numero = @unumero

  EXECUTE modificaProyecto 5020,'Queretaro No Limpio'

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'borraProyecto' AND type = 'P')
                DROP PROCEDURE borraProyecto
            GO

            CREATE PROCEDURE borraProyecto
                @unumero NUMERIC(5,0)
            AS
                DELETE FROM Proyectos
                WHERE Numero = @unumero

  EXECUTE borraProyecto 5020

-- Proveedor Add, Modificar, Borrar

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'creaProveedor' AND type = 'P')
                DROP PROCEDURE creaProveedor
            GO

            CREATE PROCEDURE creaProveedor
                 @uRFC CHAR(13),
                 @urazonSocial VARCHAR(50)
            AS
                INSERT INTO Proveedores VALUES(@uRFC, @urazonSocial)

  EXECUTE creaProveedor IIII800101,'Oviedo'

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'modificaProveedor' AND type = 'P')
                DROP PROCEDURE modificaProveedor
            GO

            CREATE PROCEDURE modificaProveedor
                @uRFC CHAR(13),
                @urazonSocial VARCHAR(50)
            AS
                UPDATE Proveedores
                SET RazonSocial = @urazonSocial
                WHERE RFC = @uRFC

  EXECUTE modificaProveedor IIII800101,'Aguilar'

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'borraProveedor' AND type = 'P')
                DROP PROCEDURE borraProveedor
            GO

            CREATE PROCEDURE borraProveedor
                @uRFC CHAR(13)
            AS
                DELETE FROM Proveedores
                WHERE RFC = @uRFC

  EXECUTE borraProveedor IIII800101

-- Entregan Add, Modificar, Borrar

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'creaEntregan' AND type = 'P')
                DROP PROCEDURE creaEntregan
            GO

            CREATE PROCEDURE creaEntregan
                 @uclave NUMERIC(5),
                 @uRFC CHAR(13),
                 @unumero NUMERIC(5),
                 @ufecha DateTime,
                 @ucantidad NUMERIC(8,2)
            AS
                INSERT INTO Entregan VALUES(@uclave, @uRFC, @unumero, @ufecha, @ucantidad)

  EXECUTE creaEntregan 1000, DDDD800101, 5010, '2002-06-10', 400

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'modificaEntregan' AND type = 'P')
                DROP PROCEDURE modificaEntregan
            GO

            CREATE PROCEDURE modificaEntregan
                 @uclave NUMERIC(5),
                 @uRFC CHAR(13),
                 @unumero NUMERIC(5),
                 @ufecha DateTime,
                 @ucantidad NUMERIC(8,2)
            AS
                UPDATE Entregan
                SET Fecha = @ufecha, Cantidad = @ucantidad
                WHERE Clave = @uclave
                AND RFC = @uRFC
                AND Numero = @unumero

  EXECUTE modificaEntregan 1000, DDDD800101, 5010, '2010-06-10', 500

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'borraEntregan' AND type = 'P')
                DROP PROCEDURE borraEntregan
            GO

            CREATE PROCEDURE borraEntregan
                 @uclave NUMERIC(5),
                 @uRFC CHAR(13),
                 @unumero NUMERIC(5)
            AS
                DELETE FROM Entregan
                WHERE Clave = @uclave
                AND RFC = @uRFC
                AND Numero = @unumero

  EXECUTE borraEntregan 1000, DDDD800101, 5010


IF EXISTS (SELECT name FROM sysobjects WHERE name = 'queryMaterial' AND type = 'P')
  DROP PROCEDURE queryMaterial

GO

  CREATE PROCEDURE queryMaterial
      @udescripcion VARCHAR(50),
      @ucosto NUMERIC(8,2)

  AS
      SELECT * FROM Materiales WHERE descripcion
      LIKE '%'+@udescripcion+'%' AND costo > @ucosto
  GO

EXECUTE queryMaterial 'Lad',20