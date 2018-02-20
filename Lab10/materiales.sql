BULK INSERT a1207499.a1207499.[Materiales]
   FROM 'e:\wwwroot\a1207499\materiales.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )