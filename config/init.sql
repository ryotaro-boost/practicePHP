create database practice_login_php;

grant all on practice_login_php.* to dbuser@localhost identified by 'practice365';

use practice_login_php

create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);

desc users;

/*
docker exec -it dockerPractice_db_1 bash
mysql -u root -p
secret
*/