create database artpeer_db;
use artpeer_db;

-- User Table --
create table user (
	userid int unsigned not null auto_increment primary key,
	email varchar (50) not null,
	password 	char (40) not null
);

-- The attributes of arts. --
create table art {
	artid int unsigned not null auto_increment primary key
};

-- Give the manager right to control db. --
grant select, insert, update, delete
on artpeer_db.*
to artpeer_manager identified by 'art9236peer';

사람 - 이메일/비밀번호/주소/성향
작품 - 작품번호/