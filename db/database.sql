create database wad_handson;

use wad_handson;

create table 'product'(
    id int(11) primary key NOT NULL auto_increment,
    name varchar(100),
    type varchar(100),
    price int(100),
    stock int(100)
);