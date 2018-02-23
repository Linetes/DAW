SET DATEFORMAT dmy

BULK INSERT a1207499.a1207499.[Entregan]
   FROM 'e:\wwwroot\a1207499\entregan.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )