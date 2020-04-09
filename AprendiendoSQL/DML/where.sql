# CONSULTAS CON UNA CONDICION#

SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
OPERADORES DE COMPARACION 
Igual           =
Distinto        !=
Menor que       <
Mayor que       >
Menor o igual   <=
Mayor o igual   >=
Entre           between A and B
En              in
Es nulo         is null
No nulo         is not null 
Como            like
No es como      not like 

*/

#EJMEPLOS#

# NOMBRE Y APELLIDO DE LOS USUARIOS QUE SE REGISTRARON EN EL 2019#
SELECT  nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

# NOMBRE Y APELLIDO DE LOS USUARIOS QUE  NO SE REGISTRARON EN EL 2019#
SELECT  nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);


