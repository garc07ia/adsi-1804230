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
                $_SESSION['uid']=$ur['id'];
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
    /* ------------------------------------------------  */
    // Save Student
    function saveStudent($names, $birthdate, $email, $photo, $password, $conn) {
        try {
            $sql = "INSERT INTO users (names, birthdate, email, photo, password) VALUES (:names, :birthdate, :email, :photo, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(":names", $names);
            $stmt->bindparam(":birthdate", $birthdate);
            $stmt->bindparam(":email", $email);
             $stmt->bindparam(":photo", $photo);
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
    //Show Student
    function showStudent($id, $conn){
        try {
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(":id", $id);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();   
        }
    }
    // Update Student
     function updateStudent($id, $names, $birthdate, $email, $photo, $conn) {
        try {
            if($photo != null){
                $sql = "UPDATE users SET names = :names, birthdate = :birthdate, email = :email,
                photo = :photo WHERE id = :id";
            } else {
                $sql = "UPDATE users SET names = :names, birthdate = :birthdate, email = :email WHERE id = :id";
            }
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(":id", $id);
            $stmt->bindparam(":names", $names);
            $stmt->bindparam(":birthdate", $birthdate);
            $stmt->bindparam(":email", $email);
            if($photo != null){
             $stmt->bindparam(":photo", $photo);
            }
            if($stmt->execute()) {
                 return true;
            }else {
                return false;
            }
           
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    //*--------------------------------------------------------*
    function deleteStudent($id, $conn) {
            try {
                $sql = "DELETE FROM users WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindparam(":id", $id);
                if($stmt->execute()) {
                     return true;
                }else {
                    return false;
                }
               
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        //*----------------------------------------*
        // Update Subject
     function updateSubject($id, $name, $conn) {
        try {
            
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(":id", $id);
            $stmt->bindparam(":name", $name);
            if($stmt->execute()) {
                 return true;
            }else {
                return false;
            }
           
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    //*-------------------------------*
    // Delete Subject
    function deleteSubject($id, $conn) {
            try {
                $sql = "DELETE FROM subjects WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindparam(":id", $id);
                if($stmt->execute()) {
                     return true;
                }else {
                    return false;
                }
               
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        //*---------------------------------------*
        // Save Subject
        function saveSubject($id, $name, $conn) {
            try {
                $sql = "INSERT INTO subjects (id, name) VALUES (:id, :name)";
                $stmt = $conn->prepare($sql);
                $stmt->bindparam(":id", $id);
                $stmt->bindparam(":name", $name);
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
        //Listar Materias
        function listSubject($conn){
            try {
                $sql = "SELECT * FROM subjects";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }