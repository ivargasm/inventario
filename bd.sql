create database if not exists inventarios;

use inventarios;

create table roles(
    id int AUTO_INCREMENT not null,
    tipo varchar(200) not null,
    constraint pk_role primary key(id)
);


create table usuarios(
    id int AUTO_INCREMENT not null,
    user varchar(100) not null,
    psw varchar(250) not null,
    id_role int not null,
    constraint pk_user primary key(id),
    constraint fk_role foreign key(id_role) references roles(id)
);


create table type_material(
    type_id int AUTO_INCREMENT not null,
    type_dsc varchar(200) not null,
    constraint pk_type primary key(type_id)
);

create table stock(
    stock_id int AUTO_INCREMENT not null,
    type_id int not null,
    NS varchar(100) not null,
    description text not null,
    constraint pk_stock primary key(stock_id),
    constraint fk_stock foreign key(type_id) references type_material(type_id)
);

create table assignment(
    assignment_id int AUTO_INCREMENT not null,
    user_id int not null,
    stock_id int not null,
    constraint pk_aassignment primary key(assignment_id),
    constraint fk_stock_assignment foreign key(stock_id) references stock(stock_id),
    constraint fk_stock_users foreign key(user_id) references users(user_id)
);


insert into role values
(null,"Administrador"),
(null,"Usuario");

insert into users values
(null, "ivargasm","12345",1),
(null, "tbadillo","827ccb0eea8a706c4c34a16891f84e7b",1);

insert into type_material values
(null,"PC Escritorio"),
(null, "Laptop"),
(null, "Smartphone"),
(null,"Monitor");

insert into stock values
(null, 2, "123456","es una lap top");

insert into assignment values
(null,1,1);

insert into stock values
(null, 3, "123456","es un smartphone");

insert into assignment values
(null,1,2);

insert into assignment values
(null,2,2);

SELECT u.user_id, u.user, concat(u.name, " ", u.last_name) nombre, t.type_id, t.type_dsc, s.stock_id, s.NS, s.description FROM `assignment` a
JOIN users u on u.user_id = a.user_id
JOIN stock s on s.stock_id = a.stock_id
JOIN type_material t on t.type_id = s.type_id;