<?php 

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $link = mysqli_connect("localhost", "krutyie_reg1", "Az1015", "krutyie_reg1");

    mysqli_query($link,"ALTER TABLE `users` AUTO_INCREMENT = 1");
    // mysqli_query($link,"ALTER TABLE `messages` AUTO_INCREMENT = 1");
    // mysqli_query($link,"ALTER TABLE `comments` AUTO_INCREMENT = 1");
?>