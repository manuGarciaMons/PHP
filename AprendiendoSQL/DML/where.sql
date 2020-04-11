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

Operadores Logicos
OR
ADN
NOT

COMODINES
Cualquier cant de caracteres: %
Un caracter desconocido: _

*/
#EJEMPLOS#

# NOMBRE Y APELLIDO DE LOS USUARIOS QUE SE REGISTRARON EN EL 2019#
SELECT  nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

# NOMBRE Y APELLIDO DE LOS USUARIOS QUE  NO SE REGISTRARON EN EL 2019#
SELECT  nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

#MOSTRAR EL EMAIL DE LOS USUARIOS CUYO APELLIDO CONTENGA LA LETRA A Y ADEMAS QUE SU CONTRASEÑA SEA 1234#
SELECT email FROM  usuarios  WHERE apellidos LIKE '%a%' AND password = '1234';

#SACAR TODOS LOS REGISTROS DE LA TABLA USUARIOS CUYO AÑO SEA PAR #
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 =0);

# SACAR TODOS LOS REGISTROS DE LA TABLA USUARIOS CUYO NOMBRE TENGA MAS DE 5 LETAS Y QUE ADEMAS SE HAYA REGISTRADO ANTES DE 2020, Y MOSTRAR EL NOMBRE EN MAYUSCULA
SELECT UPPER(nombre), apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha)< 2020;

SELECT * FROM usuarios ORDER BY id ASC;
SELECT * FROM usuarios ORDER BY id DESC;
SELECT * FROM  usuarios LIMIT 3;
SELECT * FROM  usuarios LIMIT 3,6;

