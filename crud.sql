 create database if not exists crud;
 use crud;

          create table  etudiant(
          matricule int primary key auto_increment,
          nom varchar(30) not null,
          prenom varchar(30) not null,
          sexe char(1) not null,
          ddn date not null,
          tel int(8) not null);
          
          create table enseignant(
          iden int primary key auto_increment, 
          nom varchar(25) not null, 
          prenom varchar(25),
          sexe char(1) not null,
          email varchar(50) not null, 
          adresse varchar(50) not null );
          
          create table salle(
          ids int primary key auto_increment,
          numero int not null, 
          libelle varchar(15) not null,
          nbre_etudiant int not null);
         
          create table cours(
          idc int primary key auto_increment,
          libelle varchar(30) not null, 
          iden int,matricule int,
          ids int,
          constraint fkmat foreign key (matricule) references etudiant(matricule),
          constraint fkiden foreign key (iden) references enseignant(iden),
          constraint fkids foreign key (ids) references salle(ids));

          create table users (
          id INT PRIMARY KEY AUTO_INCREMENT,
          username VARCHAR(50) NOT NULL UNIQUE,
          password VARCHAR(255) NOT NULL,
          email VARCHAR(100) NOT NULL UNIQUE);
