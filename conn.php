<?php
    $server="localhost";
    $user="root";
    $password="";
    $database="newcrud";

    $conn=mysqli_connect($server,$user,$password,$database) or die("Connection Failed");

    // $conn = mysqli_connect("localhost","root","","newcrud") or die("Connection Failed");

?>