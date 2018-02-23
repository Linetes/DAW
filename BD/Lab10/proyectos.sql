BULK INSERT a1207499.a1207499.[Proyectos]
   FROM 'e:\wwwroot\a1207499\proyectos.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )