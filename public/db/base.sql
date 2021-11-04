CREATE DATABASE restaurante;

CREATE TABLE rol(
    rol_id INT,
    rol_name VARCHAR (50),
    PRIMARY KEY (rol_id)
);

CREATE TABLE employee(
    employee_id INT,
    employee_key VARCHAR (255),
    employee_name VARCHAR (50),
    employee_surname VARCHAR (50),
    employee_phone VARCHAR (50),
    employee_age VARCHAR (50),
    employee_gender VARCHAR (50),
    employee_job VARCHAR(50),
    rol_id INT,
    PRIMARY KEY (employee_id),
    FOREIGN KEY (rol_id) REFERENCES rol(rol_id)
);

CREATE TABLE tbl_restaurante(
    tbl_id INT AUTO_INCREMENT,
    tbl_type VARCHAR (20),
    tbl_chair VARCHAR(20),
    tbl_count VARCHAR (50),
    est_id INT,
    PRIMARY KEY(tbl_id),
    FOREIGN KEY (est_id) REFERENCES tbl_estatus(est_id)
);
INSERT INTO `tbl_restaurante` (`tbl_id`, `tbl_type`, `tbl_chair`, `est_id`) VALUES (NULL, 'Mesa', '4', '1'), (NULL, 'Mesa', '6', '1'), (NULL, 'Mesa', '2', '1'), (NULL, 'Mesa', '6', '1'), (NULL, 'Mesa', '8', '1'), (NULL, 'Mesa', '10', '1'), (NULL, 'Mesa', '6', '1'), (NULL, 'Mesa', '12', '1'), (NULL, 'Mesa', '8', '1'), (NULL, 'Mesa', '4', '1'), (NULL, 'Mesa', '2', '1'), (NULL, 'Mesa', '4', '1'), (NULL, 'Mesa', '2', '1'), (NULL, 'Mesa', '8', '1'), (NULL, 'Mesa', '2', '1'), (NULL, 'Mesa', '4', '1'), (NULL, 'Mesa', '8', '1');

CREATE TABLE tbl_estatus(
    est_id INT,
    est_name VARCHAR (50),
    PRIMARY KEY(est_id);
);
INSERT INTO `tbl_estatus` (`est_id`, `est_name`) VALUES
(1, 'Disponible'),
(2, 'Ocupada'),
(3, 'En cobro'),
(4, 'Sobremesa');

CREATE TABLE tbl_menu(
    menu_id  INT AUTO_INCREMENT,
    menu_name VARCHAR (20),
    PRIMARY KEY (menu_id)
);
INSERT INTO `tbl_menu` (`menu_id`, `menu_name`) VALUES (NULL, 'Hamburguesa'), (NULL, 'Ensalada'), (NULL, 'Caldos'), (NULL, 'Cortes'), (NULL, 'Tacos'), (NULL, 'Postres'), (NULL, 'Refrescos'), (NULL, 'Bar');

CREATE TABLE tbl_menuCompleto(
    menuc_id INT AUTO_INCREMENT,
    menuc_name VARCHAR (50),
    menuc_img MEDIUMBLOB,
    menu_id INT,
    PRIMARY KEY (menuc_id),
    FOREIGN KEY (menu_id) REFERENCES tbl_menu (menu_id)
);


