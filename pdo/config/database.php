<?php 
    /* ------------------------------------------------  */
    // Connection Data Base
    try {
    	$conn = new PDO("mysql:host=$host;dbname=$dbnm", $user, $pass);	
    	$conn->exec('set names utf8');
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	// echo "Conexión Exitosa!";
    } catch (PDOException $e) {
    	echo "Error en la conexión: ".$e->getMessage();
    }
    /* ------------------------------------------------  */
    // Add Student
    function addStudent($names, $birthdate, $email, $password, $conn) {
        try {
            $sql = "INSERT INTO users (names, birthdate, email, password) VALUES (:names, :birthdate, :email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(":names", $names);
            $stmt->bindparam(":birthdate", $birthdate);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":password", $password);
            if($stmt->execute()) {
                 return true;
            }else {
                return false;
            }
           
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    /* ------------------------------------------------  */
    //Login
    function login($email, $password, $conn){
        try {
            $sql = "SELECT * FROM users
                    WHERE email = :email
                    AND password = :password
                    LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":password", $password);
            $stmt->execute();
            if($stmt->rowCount()>0){
                $ur = $stmt -> fetch(PDO::FETCH_ASSOC);
                $_SESSION['message']="El estudiante ".$ur['names']." si esta registrado";
                $_SESSION['unames']=$ur['names'];
                $_SESSION['uphoto']=$ur['photo'];
                $_SESSION['urole']=$ur['role'];
                $_SESSION['ustatus']=$ur['status'];
                return true;
            }else{
                $_SESSION['error']="El estudiante no está registrado/Datos Incorrectos";
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            
        }
    }
    /* ------------------------------------------------  */
    //Listar estudiantes
    function listStudents($conn){
        try {
            $sql = "SELECT * FROM users
                    WHERE role = 'Student' ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }