#MODIFICAR FILAS#
UPDATE usuarios SET fecha = CURDATE() WHERE id = 4; 
UPDATE usuarios SET fecha = '2020-07-09', apellidos = "ADMIN"  WHERE id = 4; 