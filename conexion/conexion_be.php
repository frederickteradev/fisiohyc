<?php 
    $conexion =mysqli_connect("localhost", "root", "", "neuro_mundo");
    $conexion->set_charset("utf8");

         $DB_host="localhost";
         $DB_user="root";
         $DB_pass="";
         $DB_name="neuro_mundo";

   try {
                     
                     $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user,$DB_pass);
                     $DB_con->exec("SET CHARACTER SET utf8");
                     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     

                    } catch (PDOException $e) {

                     print "¡Error!: " . $e->getMessage() . "<br/>";
                     echo "Error al conectar a la base de datos. " . $e->getMessage() . "<br/>";
  }
?>