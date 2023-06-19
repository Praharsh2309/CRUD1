<?php

        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DATABASE","crud1");

        $con=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
         
        if(!$con)
        {
            die("failed");
        }
        // else{
        //     echo "yess";
        // }


?>