DROP SCHEMA IF EXISTS KARS;
CREATE DATABASE KARS;	
USE KARS;


CREATE TABLE Customer (
customer_id INT PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(20) NOT NULL,
user_pass VARCHAR(25),
email VARCHAR(30)  NOT NULL,
country VARCHAR(5),
user_role INT
);

CREATE TABLE Book_Event( 
booking_id INT PRIMARY KEY AUTO_INCREMENT, 
event_name varchar(20),
first_name varchar(20), 
last_name varchar(20),
email varchar(30), 
phone varchar(10)
); 

CREATE TABLE Book_trip( 
booking_id INT PRIMARY KEY AUTO_INCREMENT, 
package_name varchar(20),
first_name varchar(20), 
last_name varchar(20),
email varchar(30), 
phone varchar(10),
vehicle_type varchar(20)
); 

CREATE TABLE Payment( 
payment_id INT PRIMARY KEY, 
price FLOAT, 
time_of_payment TIME, 
date_paid DATE, 
amount_paid float, 
payment_status VARCHAR(15), 
account_name VARCHAR(25), 
booking_id INT, 
CHECK(payment_status in ('Full payment', 'Half payment')),
FOREIGN KEY (booking_id) REFERENCES Booking (booking_id)
ON DELETE CASCADE
ON UPDATE CASCADE);


Create Table MobileMoney( 
payment_id int primary key, 
Ntwrk VARCHAR(12), 
Tel_no CHAR(10),
FOREIGN KEY(payment_id) REFERENCES Payment(payment_id)
ON DELETE CASCADE
ON UPDATE CASCADE); 


Create Table BankTransfer( 
payment_id INT, 
bank_name VARCHAR(20), 
bank_branch VARCHAR(30),
FOREIGN KEY(payment_id) REFERENCES Payment (payment_id)
ON DELETE CASCADE
ON UPDATE CASCADE); 

 

