<?php
    $conn = mysqli_connect("localhost","root","");
    $database = mysqli_select_db($conn, 'customers');

    if(isset($_POST['savesugg'])){

        $suggestionName = $_POST['suggestionName'];
        $suggestionEmail = $_POST['suggestionEmail'];
        $suggestionComment = $_POST['suggestionComment'];

        $query = "INSERT INTO suggestiondata (`suggestionName`,`suggestionEmail`,`suggestionComment`) VALUES ('$suggestionName','$suggestionEmail','$suggestionComment')";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            echo '<script> alert("Data Saved"); </script>';
            header('Location: index.html');
        }
        else{
            echo '<script> alert("Data Not Saved"); </script>';
        }
    }
?>
