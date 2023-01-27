<?php 

include("./config.php");

try {
    $mysqli = mysqli_connect(MYSQLHOST, USERNAME, PASSWORD, DATABASE);
} catch (\Throwable $th) {
    // echo "<pre>";
    // print_r($th);
    echo $th->getMessage()."<br> File -> ".$th->getFile()." <br> At Line -> ".$th->getLine();
}

// create table
// CREATE TABLE `users` (
//     `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     `email` VARCHAR(25) NOT NULL,
//     `password` VARCHAR(225) NOT NULL,
//     PRIMARY KEY (`user_id`),
//     UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC) VISIBLE,
//     UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE);

// alter table new_table rename to users;  ignore

?>