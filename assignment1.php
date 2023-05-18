<?php

$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae.
Sint ducimus facilis accusantium molestias nam numquam voluptatem eum
nemo tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum
amet illo pariatur voluptas fuga harum possimus error magnam nulla,
perferendis ipsum quia id laboriosam quam optio dolorum tenetur?
Blanditiis praesentium repellendus, asperiores temporibus nobis ipsa officia
deleniti fugiat minus doloribus? Ipsum aspernatur in quae maiores nemo
dolorum distinctio ea qui enim. Voluptas perferendis voluptatibus, corporis
accusantium sunt obcaecati, aut iure maiores, quam reiciendis quibusdam?
Placeat excepturi exercitationem enim explicabo. Sequi!";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment_1</title>
</head>
<body>
    <p><?php 
     //Type this string in a p tag
    echo $string;
    ?></p>
    <h3><?php
     /*Search for PHP built-in function to get the length of this string and
      print this length in h3*/
     echo strlen($string); 
     ?></h3>
    <p><?php
     /*Search for PHP built-in function to remove (replace) any (?) from this
      string and type the new string in any HTML element.*/ 
     echo str_replace('?',' ',$string);
     ?></p>
    <p><?php
     /*Search for PHP built-in function to make a string's first character of
      all the words uppercase. */
     echo ucwords($string);
     ?> </p>
    <h5><?php
    $name = "mohamed Khaled";
     /**Search for PHP built-in function to reverse this string and type the
      new string in h5.*/
     echo $new_name=strrev($name);
     ?></h5>
    <?php 
    //Search for PHP built-in function to compare between the reversed
    //string and this variable
    echo strcmp($name,$new_name);
    ?>
    <br>
    <?php
     /*Search for PHP built-in function to transform a string into all
      uppercase letters.
     */
     echo strtoupper($name);
     ?>
    <br>
    <?php
     /*Search for PHP built-in function to transform a string into all
     lowercase letters.
     */
     echo strtolower($name);
     ?>
    <br>
    <?php
     /*Search for PHP built-in function to make a string's first character
      uppercase. */
     echo ucfirst($name);
     ?>
    <h1>What is the difference between single and double quotes in PHP?</h1>
    <ul>
        <li>single quotes:display things almost completely</li>
        <li>parsed In case \' & \\ </li>
        <br>
        <li> double quotes:parsed everything and valu</li>
        <li>You can isolate valu using{}</li>
    </ul>

    <?php
    $name0='Morad';
     //Double-quoted string once using (escaping characters)
     echo "Hello “my name is {$name0}” <br>I love programming \ Back-End is easy". str_repeat('&nbsp',15)."  PHP is awesome".'<br>';
      echo'<br>';
     //once again using HEREDOC
     echo <<<TEXT
     Hello “my name is {$name0}” <br>I love programming \ Back-End is easy \t PHP is awesome
     TEXT;

    ?>
</body>
</html>
