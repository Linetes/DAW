BULK INSERT a1207499.a1207499.[Materiales]
   FROM 'e:\wwwroot\a1207499\materiales.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
BULK INSERT a1207499.a1207499.[Proveedores]
   FROM 'e:\wwwroot\a1207499\proveedores.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
BULK INSERT a1207499.a1207499.[Proyectos]
   FROM 'e:\wwwroot\a1207499\proyectos.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
SET DATEFORMAT dmy -- especificar formato de la fecha
BULK INSERT a1207499.a1207499.[Entregan]
   FROM 'e:\wwwroot\a1207499\entregan.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )