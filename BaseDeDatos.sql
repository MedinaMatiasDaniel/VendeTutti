/*   SCRIPT SQL  - Tablas con Restricciones -   */

CREATE TABLE CLIENTE
       (
       IDCLIENTE INT NOT NULL AUTO_INCREMENT,                              
       RAZONSOCIAL VARCHAR(64) NOT NULL,                              
       EMAIL CHAR(128) NOT NULL,                              
       TIPOIVA VARCHAR(64) NOT NULL,                              
       CUIT VARCHAR(64) NOT NULL,                              
       NOMBRE VARCHAR(64) NOT NULL,                              
       DIRECCION VARCHAR(256) NOT NULL,                              
       CP INT NOT NULL,                              
       LOCALIDAD VARCHAR(64) NOT NULL,                              
       PASSWORD VARCHAR(64) NOT NULL,                              
       ACTIVO BOOLEAN NOT NULL,                              
       PRIMARY KEY
               (
               IDCLIENTE
               )
       );



CREATE TABLE CAMION
       (
       IDCAMION INT NOT NULL AUTO_INCREMENT,                              
       MODELO VARCHAR(64) NOT NULL,                              
       MARCA VARCHAR(64) NOT NULL,                              
       PATENTE VARCHAR(64) NOT NULL,                              
       CHOFER VARCHAR(64) NOT NULL,                              
       ACTIVO BOOLEAN NOT NULL,                              
       PRIMARY KEY
               (
               IDCAMION
               )
       );



CREATE TABLE ZONA
       (
       idzona INT NOT NULL AUTO_INCREMENT,                              
       area VARCHAR(128) NOT NULL,                              
       activo BOOLEAN NOT NULL DEFAULT TRUE,                              
       PRIMARY KEY
               (
               IDZONA
               )
       );



CREATE TABLE ARTICULO
       (
       IDARTICULO INT NOT NULL AUTO_INCREMENT,                              
       NOMBRE VARCHAR(128) NOT NULL,                              
       MARCA VARCHAR(64) NOT NULL,                              
       DESCRIPCION VARCHAR(256) NOT NULL,                              
       ACTIVO BOOLEAN NOT NULL,                              
       PRIMARY KEY
               (
               IDARTICULO
               )
       );



CREATE TABLE EMPLEADO
       (
       IDEMPLEADO INT NOT NULL AUTO_INCREMENT,                              
       EMAIL VARCHAR(128) NOT NULL,                              
       PASSWORD VARCHAR(64) NOT NULL,                              
       TIPO VARCHAR(64) NOT NULL,                              
       ACTIVO BOOLEAN NOT NULL,                              
       NOMBRE VARCHAR(60) NOT NULL,                              
       DIRECCION VARCHAR(60) NOT NULL,                              
       LOCALIDAD VARCHAR(60) NOT NULL,                              
       CP INT NOT NULL,                              
       PRIMARY KEY
               (
               IDEMPLEADO
               )
       );



CREATE TABLE ORDEN
       (
       IDORDEN INT NOT NULL AUTO_INCREMENT,                              
       IDCLIENTE INT NOT NULL,                              
       IDCAMION INT NOT NULL,                              
       IDZONA INT NOT NULL,                              
       ESTADO VARCHAR(64) NOT NULL,                              
       FECHAINGRESO DATETIME NOT NULL,                              
       FECHAENTREGA DATETIME NOT NULL,                              
       HORARIO DATETIME NOT NULL,                              
       OBSERVACIONES VARCHAR(256) NOT NULL,                              
       ACTIVO BOOLEAN NOT NULL,                              
       PRIMARY KEY
               (
               IDORDEN
               ),
       FOREIGN KEY
               (
               IDCLIENTE
               )
          REFERENCES CLIENTE
               (
               IDCLIENTE
               ),
       FOREIGN KEY
               (
               IDCAMION
               )
          REFERENCES CAMION
               (
               IDCAMION
               ),
       FOREIGN KEY
               (
               IDZONA
               )
          REFERENCES ZONA
               (
               IDZONA
               )
       );



CREATE TABLE CONTIENE
       (
       IDARTICULO INT NOT NULL,                              
       IDORDEN INT NOT NULL,                              
       PRIMARY KEY
               (
               IDARTICULO,
               IDORDEN
               ),
       FOREIGN KEY
               (
               IDARTICULO
               )
          REFERENCES ARTICULO
               (
               IDARTICULO
               ),
       FOREIGN KEY
               (
               IDORDEN
               )
          REFERENCES ORDEN
               (
               IDORDEN
               )
       );