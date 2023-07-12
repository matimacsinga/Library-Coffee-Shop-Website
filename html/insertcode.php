<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'customers');

    if(isset($_POST['savedata'])){

        $bookAmount = $_POST['bookAmount'];
        $customerEmail = $_POST['customerEmail'];

        $query = "INSERT INTO orderdata (`bookAmount`,`customerEmail`) VALUES ('$bookAmount','$customerEmail')";
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            echo '<script> alert("Data Saved"); </script>';
            header('Location: index.html');
        }
        else{
            echo '<script> alert("Data Not Saved"); </script>';
        }
    }
?>
