<?php

        $email="Aaron@mscas.com";
        if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
            ECHO("$email iS CRT");
        }
        else{
            ECHO("ERROR");
        }
        ?>
