-- Creacion la tabla Productos
CREATE TABLE Productos (
    ID_producto NUMBER PRIMARY KEY,
    Nombre VARCHAR2(50),
    Detalles CLOB,
    ID_dieta NUMBER,
    Ingredientes CLOB,
    PuestosRequeridos NUMBER,
    Precio NUMBER(10, 2)
);

--Creacion tabla Servicios
CREATE TABLE Servicios (
    ID_servicio NUMBER PRIMARY KEY,
    Nombre VARCHAR2(50),
    Descripcion CLOB,
    Precio NUMBER(10, 2)
);

-- Creacion de la tabla Suministros
CREATE TABLE Suministros (
    ID_suministro NUMBER PRIMARY KEY,
    Nombre VARCHAR2(50),
    Descripcion CLOB,
    Cantidad NUMBER,
    Precio NUMBER(10, 2)
);


--Crecion tabla ingredientes
CREATE TABLE Ingredientes (
    ID_ingrediente NUMBER PRIMARY KEY,
    Nombre VARCHAR2(50),
    Cantidad NUMBER,
    Precio NUMBER(10, 2)
);

CREATE TABLE Puestos (
    ID_Puesto NUMBER PRIMARY KEY,
    Nombre varchar2(50),
    Salario Number(10,2)
);

-- Crear la tabla PuestosPorProducto
CREATE TABLE PuertosPorProducto (
    ID_Producto NUMBER,
    ID_puesto NUMBER,
    PRIMARY KEY (ID_Producto, ID_puesto),
    FOREIGN KEY (ID_Producto) REFERENCES Productos(ID_producto),
    FOREIGN KEY (ID_puesto) REFERENCES Puestos(ID_puesto)
);

-- Crear la tabla IngredientesPorProducto
CREATE TABLE IngredientesPorProducto (
    ID_PRODUCTO NUMBER,
    ID_INGREDIENTE NUMBER,
    PRIMARY KEY (ID_PRODUCTO, ID_INGREDIENTE),
    FOREIGN KEY (ID_PRODUCTO) REFERENCES Productos(ID_producto),
    FOREIGN KEY (ID_INGREDIENTE) REFERENCES Ingredientes(ID_ingrediente)
);

-- Creacion la tabla PuertosPorServicio
CREATE TABLE PuertosPorServicio (
    ID_SERVICIO NUMBER,
    ID_PUESTO NUMBER,
    PRIMARY KEY (ID_SERVICIO, ID_PUESTO),
    FOREIGN KEY (ID_SERVICIO) REFERENCES Servicios(ID_servicio),
    FOREIGN KEY (ID_PUESTO) REFERENCES Puestos(ID_puesto)
);

-- Crear la tabla ProductosPorServicio
CREATE TABLE ProductosPorServicio (
    ID_SERVICIO NUMBER,
    ID_PRODUCTO NUMBER,
    PRIMARY KEY (ID_SERVICIO, ID_PRODUCTO),
    FOREIGN KEY (ID_SERVICIO) REFERENCES Servicios(ID_servicio),
    FOREIGN KEY (ID_PRODUCTO) REFERENCES Productos(ID_producto)
);

-- Crear la tabla SuministrosPorServicio
CREATE TABLE SuministrosPorServicio (
    ID_SERVICIO NUMBER,
    ID_SUMINISTRO NUMBER,
    PRIMARY KEY (ID_SERVICIO, ID_SUMINISTRO),
    FOREIGN KEY (ID_SERVICIO) REFERENCES Servicios(ID_servicio),
    FOREIGN KEY (ID_SUMINISTRO) REFERENCES Suministros(ID_suministro)
);

-- Creacion la tabla Dieta
CREATE TABLE tipo_Dieta (
    ID_dieta NUMBER PRIMARY KEY,
    Nombre VARCHAR2(50),
    Detalle CLOB
);

-- Creacion de la tabla Estado
CREATE TABLE Estado (
    ID_estado NUMBER PRIMARY KEY,
    Nombre VARCHAR2(20)
);

-- Creacion de la tabla Roles
CREATE TABLE Roles (
    ID_rol NUMBER PRIMARY KEY,
    Nombre VARCHAR2(20),
    Detalles CLOB
);


-- Creacion la tabla tel_clientes
CREATE TABLE tel_clientes (
    ID_clientes NUMBER,
    Telefono number,
    PRIMARY KEY (ID_clientes, Telefono),
    FOREIGN KEY (ID_clientes) REFERENCES Clientes(ID_cliente)
);



-- Creacion la tabla correos_clientes
CREATE TABLE correos_clientes (
    ID_cliente NUMBER,
    Correo VARCHAR2(25),
    PRIMARY KEY (ID_cliente, Correo),
    FOREIGN KEY (ID_cliente) REFERENCES Clientes(ID_cliente)
);

-- Crear la tabla Clientes
CREATE TABLE Clientes (
    ID_cliente NUMBER PRIMARY KEY,
    cedula VARCHAR2(20) UNIQUE,
    Nombre VARCHAR2(20),
    Apellido1 VARCHAR2(20),
    Apellido2 VARCHAR2(20),
    Direccion VARCHAR2(20),
    Tipo_dieta NUMBER,
    Alergia VARCHAR2(20),
    Estado NUMBER,
    Rol NUMBER,
    FOREIGN KEY (Tipo_dieta) REFERENCES Tipo_dieta(ID_dieta),
    FOREIGN KEY (Estado) REFERENCES Estado(ID_estado),
    FOREIGN KEY (Rol) REFERENCES Roles(ID_rol)
);

-- Crear la tabla Empleados
CREATE TABLE Empleados (
    ID_empleado NUMBER PRIMARY KEY,
    Cedula NUMBER,
    Nombre VARCHAR2(20),
    Apellido1 VARCHAR2(20),
    Apellido2 VARCHAR2(20),
    Direccion VARCHAR2(50),
    FechaIngreso DATE,
    ID_PUESTO number,
    Salario NUMBER,
    Estado NUMBER,
    Rol NUMBER,
    FOREIGN KEY (Rol) REFERENCES Roles(ID_rol),
    FOREIGN KEY (Estado) REFERENCES Estado(ID_estado),
    FOREIGN KEY (ID_PUESTO) REFERENCES Puestos(ID_puesto)
);

CREATE TABLE tel_empleados (
    ID_empleado NUMBER,
    Telefono number,
    PRIMARY KEY (ID_empleado, Telefono),
    FOREIGN KEY (ID_empleado) REFERENCES empleados(ID_empleado)
);



-- Creacion la tabla correos_clientes
CREATE TABLE correos_empleados (
    ID_empleado NUMBER,
    Correo VARCHAR2(25),
    PRIMARY KEY (ID_empleado, correo),
    FOREIGN KEY (ID_empleado) REFERENCES empleados(ID_empleado)
);


CREATE TABLE Eventos (
    ID_evento NUMBER PRIMARY KEY,
    Descripcion VARCHAR2(255),
    ID_cliente NUMBER, -- Clave foránea para la columna "id_cliente"
    ID_servicio NUMBER, -- Clave foránea para la columna "id_servicio"
    FechaYHora TIMESTAMP,
    Direccion VARCHAR2(255),
    Precio NUMBER,
    FOREIGN KEY (ID_cliente) REFERENCES Clientes(ID_cliente),
    FOREIGN KEY (ID_SERVICIO) REFERENCES Servicios(ID_servicio)

)

-- Crear la tabla Calendario
CREATE TABLE Calendario (
    ID_calendario NUMBER PRIMARY KEY,
    Fecha DATE,
    ID_eventos NUMBER, -- Clave foránea para la columna "id_eventos"
    FOREIGN KEY (ID_eventos) REFERENCES Eventos(ID_evento)
);

Create table Empleado_por_Evento(
    id_evento number,
    id_empleado number,
    PRIMARY KEY (ID_empleado, id_evento),
    FOREIGN KEY (ID_evento) REFERENCES Eventos(ID_evento),
    FOREIGN KEY (ID_empleado) REFERENCES empleados(ID_empleado)
);

CREATE TABLE Cotizacion (
    ID_cotizacion NUMBER PRIMARY KEY,
    Fecha DATE,
    ID_cliente NUMBER, -- Clave foránea para la columna "id_cliente"
    Detalles CLOB,
    FOREIGN KEY (ID_cliente) REFERENCES Clientes(ID_cliente)
);

CREATE TABLE Feedback(
    ID_Feed number primary key,
    id_cliente number,
    Detalles CLOB,
    FOREIGN KEY (ID_cliente) REFERENCES Clientes(ID_cliente)
);

CREATE TABLE Facturacion (
     ID_Facturacion number primary key,
     id_cliente number,
     descripcion varchar(45),
     FechaFactura date,
     id_empleado number,
     Monto number(10,2),
     FOREIGN KEY (ID_cliente) REFERENCES Clientes(ID_cliente),
     FOREIGN KEY (id_empleado) REFERENCES empleados(ID_empleado)

);

CREATE TABLE Tipo_Transaccion(
     ID_Transaccion number primary key,
     Nombre varchar (35),
     Detalles clob,
     id_facturacion number,
     FOREIGN KEY (ID_facturacion) REFERENCES facturacion(ID_facturacion)
     );