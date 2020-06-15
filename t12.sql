-- t12.sql
-- kbyron@bmcc.cuny.edu
-- 3-11-2019
--
-- MySQL script (t12.sql) to initialize a MySQL database and two tables: customers and activity
--
-- sample usage: > \xampp\mysql\bin\mysql -u root < t12.sql
--
-- 
DROP DATABASE IF EXISTS csc350;
CREATE DATABASE csc350;
USE csc350;
CREATE TABLE activity (
  a_id varchar(16),
  a_date date,
  a_time time,
  a_event varchar(16),
  a_fstat char,
  a_income decimal(9,2),
  a_tax decimal(9,2)
);
INSERT INTO activity VALUES
  ('bow@yahoo','2019-02-24','06:15:00','register','','',''),
  ('bow@yahoo','2019-02-24','06:20:00','login','','',''),
  ('bow@yahoo','2019-02-24','06:25:00','calc','S',100000.00,21036.75),
  ('bow@yahoo','2019-02-24','06:30:00','logout','','',''),
  ('jack@gmail','2019-02-25','13:15:00','register','','',''),
  ('jack@gmail','2019-02-25','13:20:00','login','','',''),
  ('jack@gmail','2019-02-25','13:25:00','calc','M',100000.00,16587.50),
  ('jack@gmail','2019-02-25','13:30:00','logout','','','');
--
CREATE TABLE customer (
  c_id varchar(16),
  c_pw varchar(32)
);
INSERT INTO customer VALUES 
  ('admin','2bf4d1d51b09c609caa98951b101b8b8'),
  ('bow@yahoo','e99a18c428cb38d5f260853678922e03'),
  ('jack@gmail','b930990c455d18d84f44757a4eb9756a');
--
-- end of script
--
