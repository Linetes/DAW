BULK INSERT a1207499.a1207499.[Proveedores]
   FROM 'e:\wwwroot\a1207499\proveedores.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )