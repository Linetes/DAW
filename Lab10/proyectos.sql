BULK INSERT a1207499.a1207499.[Projectos]
   FROM 'e:\wwwroot\a1207499\projectos.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )