CREATE TABLE clientes ( 
    id_cliente INT NOT NULL AUTO_INCREMENT , 
    nombre_cliente VARCHAR(20) NOT NULL , 
    apellido_cliente VARCHAR(20) NOT NULL , 
    documento_cliente VARCHAR(14) NOT NULL , 
    direccion_cliente VARCHAR(50) NOT NULL , 
    telefono_cliente VARCHAR(20) NOT NULL , 
    PRIMARY KEY (id_cliente)
);

CREATE TABLE productos ( 
    id_producto INT NOT NULL AUTO_INCREMENT , 
    descripcion_producto VARCHAR(100) NOT NULL , 
    preciocompra_producto int(11) NOT NULL , 
    precioventa_producto int(11) NOT NULL ,
    cod_producto VARCHAR(100) NOT NULL ,
    PRIMARY KEY (id_producto)
);

CREATE TABLE venta ( 
    id_venta INT NOT NULL AUTO_INCREMENT , 
    id_cliente int NOT NULL , 
    fecha_venta date NOT NULL , 
    total_venta int(11) NOT NULL ,
    estado_venta VARCHAR(14) NOT NULL ,
    PRIMARY KEY (id_venta),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

CREATE TABLE ventadetalle ( 
    id_ventadetalle INT NOT NULL AUTO_INCREMENT , 
    id_venta INT NOT NULL  , 
    precio_venta int NOT NULL , 
    id_producto int NOT NULL , 
    cantidad_venta int(11) NOT NULL ,
    PRIMARY KEY (id_ventadetalle),
    FOREIGN KEY (id_venta) REFERENCES venta(id_venta),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE pedido ( 
    id_pedido INT NOT NULL AUTO_INCREMENT , 
    fecha_pedido date NOT NULL , 
    id_cliente int NOT NULL ,
    estado_pedido VARCHAR(14) NOT NULL ,
    PRIMARY KEY (id_pedido),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

CREATE TABLE pedidosdetalle ( 
    id_pedidodetalle INT NOT NULL AUTO_INCREMENT , 
    id_pedido INT NOT NULL  , 
    id_producto int NOT NULL , 
    cantidad_pedido int NOT NULL ,
    PRIMARY KEY (id_pedidodetalle),
    FOREIGN KEY (id_pedido) REFERENCES pedido(id_pedido),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE usuario(
    id_usuario INT NOT NULL AUTO_INCREMENT , 
    nombre_usuario VARCHAR (30) NOT NULL , 
    email_usuario VARCHAR (40) NOT NULL , 
    password_usuario VARCHAR (30) NOT NULL , 
    PRIMARY KEY (id_usuario)
);