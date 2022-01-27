<?php 

	$conn = new mysqli('localhost', 'root', '' , 'rajib');
	
	// $sql = "CREATE DATABASE rajib" ;
	// $sql = "CREATE TABLE student (st_id int(10) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), address VARCHAR(255), phone VARCHAR(15))" ;

	// $sql = "INSERT INTO student( name, address, phone) VALUES ( 'Md. Rajib' , 'Momeshepara, Taltali, Barguna', ' 01792332909')";
	// $sql = "INSERT INTO student( name, address, phone) VALUES ( 'Someone' , 'example, example, example', ' 56264626')";

	// $sql = "SHOW DATABASES" ;
	// $sql = "USE rajib";
	// $sql = "SHOW TABLES" ;
	// $sql = "DESCRIBE student";




	$check = $conn -> query($sql);



	if($check == true){
		echo "Query is Executed..!" ;
	}else{
		echo " Query is not Executed..!" ;
	}










?>