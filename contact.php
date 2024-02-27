<?php
    $nume = $_POST["Name"];
    $email = $_POST["Email"];
    $subiect = $_POST["Subiect"];
    $mesaj = $_POST["Message"];
    $conn=mysqli_connect("localhost", "12c2023_cstrugari", "v4nqfdSe", "12c2023_cstrugari" , "3306") or die("Connection failed");
    $sql = "INSERT INTO jmekerie.terci(Nume, Email, Subiect, Mesaj) VALUES ('{$nume}', '{$email}', '{$subiect}', '{$mesaj}' )";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    mysqli_close($conn);
?>