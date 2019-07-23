<?php
$con = mysqli_connect("localhost","root","");
$cr=mysqli_query($con,"create database if not exists kagarama");
$sel= mysqli_select_db($con,"kagarama");
mysqli_query($con,"create table if not exists librarian(librarianId int(20) primary key not null,name varchar (100) not null,
email varchar(100) unique not null,password varchar(100) not null)");

mysqli_query($con,"create table if not exists student(studentId int(20) primary key not null auto_increment,name varchar (100) not null,
username varchar(50) unique not null,year varchar(100) not null,class varchar(20) not null, admissionNumber varchar(50) not null)");

mysqli_query($con,"create table if not exists staff(staffId int(20) primary key not null auto_increment,name varchar (100) not null,
email varchar(100) unique not null,telephone varchar(13) not null)");

$a=mysqli_query($con,"create table if not exists book(bookId int(20) primary key not null auto_increment,
isbn varchar(20) unique not null,title varchar(100) not null,author varchar(100) not null,publisher varchar(100) not null,edition int(20) not null,dateOfPublish timestamp  not null,dateOfReceipt timestamp  not null,status varchar(100) not null)");
//timestamp  not null DEFAULT CURRENT_TIMESTAMP
 mysqli_query($con,"create table if not exists checkOuts(lentId int(20) primary key not null auto_increment,
borrowerCategory varchar(100) not null,borrowerId varchar(100) not null,dateOfLend timestamp  not null,dateOfReturn timestamp  not null,fine int(20),status varchar(20),bookId int(20) not null,isbn varchar(20) not null)");
//table for payment references
mysqli_query($con,"CREATE table IF NOT EXISTS reference(id int(20) primary key not null auto_increment,ref int(200) not null )");
//checkins table
 mysqli_query($con,"CREATE table IF NOT EXISTS checkIns(id int(20) primary key not null auto_increment,returnDate timestamp  not null DEFAULT CURRENT_TIMESTAMP, borrowerCategory varchar(20) not null,borrowerId  varchar(20) not null, bookId int(20) not null,isbn varchar(20) not null)");


	?>
