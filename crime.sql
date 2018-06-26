DROP DATABASE IF EXISTS crime;

CREATE DATABASE crime;

USE crime

CREATE table crime(
num varchar(5), 
lat decimal(4,2), 
lng decimal(4,2), 
hour char(2),
assault varchar(4), 
atheft varchar(4), 
dui varchar(4), 
fraud varchar(4), 
mur varchar(4), 
child varchar(4),
other varchar(4), 
sex varchar(4), 
theft varchar(4), 
traff varchar(4), 
wpn varchar(4)

);
