
CREATE DATABASE restaurante;

CREATE TABLE tbl_rol(
    rol_id INT AUTO_INCREMENT,
    rol_name VARCHAR (50),
    PRIMARY KEY (rol_id)
);

CREATE TABLE tbl_employee(
    employee_id INT AUTO_INCREMENT,
    employee_key VARCHAR (255),
    employee_name VARCHAR (50),
    employee_surname VARCHAR (50),
    employee_phone VARCHAR (50),
    employee_age VARCHAR (50),
    employee_gender VARCHAR (50),
    employee_job VARCHAR(50),
    rol_id INT,
    PRIMARY KEY (employee_id),
    FOREIGN KEY (rol_id) REFERENCES tbl_rol(rol_id)
);

CREATE TABLE tbl_estatus(
    est_id INT AUTO_INCREMENT,
    est_name VARCHAR (50),
    PRIMARY KEY(est_id)
);

CREATE TABLE tbl_restaurante(
    tbl_id INT AUTO_INCREMENT,
    tbl_type VARCHAR (20),
    tbl_chair VARCHAR(20),
    est_id INT,
    PRIMARY KEY(tbl_id),
    FOREIGN KEY (est_id) REFERENCES tbl_estatus(est_id)
);


CREATE TABLE tbl_menu(
    menu_id  INT AUTO_INCREMENT,
    menu_name VARCHAR (20),
    PRIMARY KEY (menu_id)
);

CREATE TABLE tbl_menuCompleto(
    menuc_id INT AUTO_INCREMENT,
    menuc_name VARCHAR (50),
    menuc_img MEDIUMBLOB,
    menu_id INT,
    PRIMARY KEY (menuc_id),
    FOREIGN KEY (menu_id) REFERENCES tbl_menu (menu_id)
);

ALTER TABLE tbl_employee AUTO_INCREMENT = 201816439


INSERT INTO `tbl_rol` (`rol_id`, `rol_name`) VALUES 
(NULL, 'Admin'), 
(NULL, 'Gerente'),
(NULL, 'Mesero');

INSERT INTO `tbl_employee` (`employee_id`, `employee_key`, `employee_name`, `employee_surname`, `employee_phone`, `employee_age`, `employee_gender`, `employee_job`, `rol_id`) VALUES 
(NULL, '1', 'Rogelio', 'Navarrete', '5614341249', '21', 'Masculino', 'Administrador', '1'),
(NULL, '1', 'Monserrat', 'Aguilar', '5535499776', '25', 'Femenino', 'Gerente', '2'),
(NULL, '1', 'Saori', 'Figueroa', '5645123654', '18', 'Femenino', 'Mesero', '3');

INSERT INTO `tbl_estatus` (`est_id`, `est_name`) VALUES
(1, 'Disponible'),
(2, 'Ocupada'),
(3, 'En cobro'),
(4, 'Sobremesa');

INSERT INTO `tbl_restaurante` (`tbl_id`, `tbl_type`, `tbl_chair`, `est_id`) VALUES 
(NULL, 'Mesa', '4', '1'), (NULL, 'Mesa', '6', '1'), (NULL, 'Mesa', '2', '1'), 
(NULL, 'Mesa', '6', '1'), (NULL, 'Mesa', '8', '1'), (NULL, 'Mesa', '10', '1'), 
(NULL, 'Mesa', '6', '1'), (NULL, 'Mesa', '12', '1'), (NULL, 'Mesa', '8', '1'), 
(NULL, 'Mesa', '4', '1'), (NULL, 'Mesa', '2', '1'), (NULL, 'Mesa', '4', '1'), 
(NULL, 'Mesa', '2', '1'), (NULL, 'Mesa', '8', '1'), (NULL, 'Mesa', '2', '1'), 
(NULL, 'Mesa', '4', '1'), (NULL, 'Mesa', '8', '1');

INSERT INTO `tbl_menu` (`menu_id`, `menu_name`) VALUES 
(NULL, 'Hamburguesa'), 
(NULL, 'Ensalada'), 
(NULL, 'Caldos'), 
(NULL, 'Cortes'), 
(NULL, 'Tacos'), 
(NULL, 'Postres'), 
(NULL, 'Refrescos'), 
(NULL, 'Bar');

