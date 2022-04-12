<?php
session_start();
    $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['SalvaNews'])) {
    $filename = $_FILES["immagineNews"]["name"];
    $tempname = $_FILES["immagineNews"]["tmp_name"];    
    $folder = "Assets/Img/news/".$filename;

    $title = $_POST['newsTitle'];
    $description = $_POST['newsDescription'];

          
    $db = mysqli_connect("localhost", "root", "", "sitoarcheologico");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO `newshome` (titolo,descrizione,foto,nomefoto,link) VALUES ('$title','$description ','$filename','','#')";
  
        // Execute query
        mysqli_query($db, $sql);


    $_SESSION['OutputMessage'] = "ciao";
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Caricamento avvenuto con successo!";
        }else{
            $msg = "Errore nel caricamento";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM `newshome`");
  $_SESSION['OutputMessage'] = $msg;
  header('Location: privateHome.php');

?>