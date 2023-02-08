create database takalo;
use takalo;

create table users(
    iduser int AUTO_INCREMENT,
    nom varchar(20),
    prenom varchar(30),
    genre varchar(20),
    email varchar(50),
    password varchar(20),
    contact varchar(20),
    admin int,
    primary key (iduser)
);

create table category(
    idcategory int AUTO_INCREMENT,
    nomcategory varchar(20),
    primary key (idcategory)
);

create table object(
    idobject int AUTO_INCREMENT,
    idcategory int,
    name varchar(20),
    description varchar(100),
    prixestime double,
    primary key (idobject),
    foreign key (idcategory) references category(idcategory)
);

create table image(
    idimage int AUTO_INCREMENT,
    idobject int,
    image varchar(20),
    primary key (idimage),
    foreign key (idobject) references object(idobject) 
);

insert into users(nom,prenom,sexe,email,password,contact,admin) values ('MIANDRISON','Hasinjo','Homme','hasinjo@gmail.com','hasinjo123','0342515475',0);
insert into users(nom,prenom,sexe,email,password,contact,admin) values ('RABEMANANTSOA','Christian','Homme','christian@gmail.com','christian123','0346225659',1);
insert into users(nom,prenom,sexe,email,password,contact,admin) values ('ANDRIANARIVELO','Hendriniaina','Femme','hendry@gmail.com','hendry123','0344304734',0);

insert into category(nomcategory) values ('Vetements');
insert into category(nomcategory) values ('Sante et beaute');
insert into category(nomcategory) values ('Technologie');
insert into category(nomcategory) values ('Produits artisanaux');
insert into category(nomcategory) values ('Articles de Sports');
insert into category(nomcategory) values ('Produit pour animaux de compagnie');

insert into object(idcategory,name,description,prixestime) values (1,'Robe','Une robe tres chic et elegante avec un corsage tres court,assemble par une couture sous la poitrine',15000);
insert into object(idcategory,name,description,prixestime) values (1,'Jupe','Une valeur sure,la jupe trapeze convient a toutes morphologies,ajustee a la taille.Ce modele a une ligne structuree,sans godets',10000);






