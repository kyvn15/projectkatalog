<?php
    $server = "localhost" ;
    $user = "root" ;
    $pass = '' ;
    $db = "sangraha_pustaka_db" ;

    $koneksi = mysqli_connect ($server , $user , $pass , $db);

    if ( mysqli_connect_errno() ) {
        echo "Failed to connect to MySQL : " . mysqli_connect_error() ;
        exit ();
    }
?>