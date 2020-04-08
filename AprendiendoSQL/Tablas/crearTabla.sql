/**
Tipos de datos 
int(n) ENTERO
integer(n) ENTERO
varchar(n) ALFANUMERICO 
char(n) ALFANUMERICO
float(n, nro de decimales) DECIMAL
date, time, timestamp
text  65535 caracteres
mediumtext 16 millones caracteres
longtext 4 billones de caracteres


CREAR TABLA
*/

CREATE TABLE usuarios (
id     int(11)  auto_increment not null,
nombre   varchar(100) not null,
apellidos varchar(255) not null,
email   varchar(100) not null,
password varchar(255) default'0000'
constraint pk_usuarios primary key(id)
);
