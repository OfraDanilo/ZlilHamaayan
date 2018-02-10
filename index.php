<?php

////* LESSON 1 *////
// if (isset($_POST["name"]))
// {
//    $var=$_POST["name"];
// }
/* GET => shows the new entered data in the address bar ; POST => doesn't show the entered data */

// $var3=6;
// $var2="<html>
//    <head></head>
//    <body>  
//    <h1>Hello!!</h1>
//    <form action='http://localhost/lessons/index.php' method='POST'>
//    <input type='text' name='name'></input> <br/>
//    <input type='submit' name='Submit'>
//    </form>  
//    </body>
//    </html>";

/* Print_r() = display array ; echo = display var ; echo $var[0] = display array in index 0 */
// print_r($var);
// echo $var[0];
// echo $var2;

////* LESSON 2 *////
// else
// {
//    $var=array("Yaoz","Leia","Bar");
// }

/* adds item to an array */
// array_push($var, "Jinja");
/* removes the last item from an array */
// array_pop($var);
/* replaces an item in array in specific index */
// $var[2]="Bob";

// foreach($var as $index)
// {
//    echo $index;
//    echo "<br>";
// }

////* LESSON 3 *////
// if (isset($_POST["name"]))
// {
//    $var=$_POST["name"];
// }

// else
// {
//     $var=array
//         (
//         array("Yaoz",22,18),
//         array("Leia",15,13),
//         array("Bar",5,2)
//         );
// }

if (isset($_POST["lessons"]))
{
    $var=$_POST["lessons"];
}

else
{
    $var=array("Yaoz","Leia","Bar");
}

$var2="<html>
    <head></head>
    <body>  
    <h1>Hello!!</h1>
    <form action='http://localhost/lessons/index.php' method='POST'>
    <input type='text' name='name'>Your Name</input> <br/>
    <b>What lessons do you want to learn?</b><br/>
    <select name='lessons[]' size='4' multiple>
    <option value='mysql'>My SQL</option>
    <option value='web_dev'>Web Dev</option>
    <option value='JS'>JavaScript</option>
    </select>
    <input type='submit' name='Submit'>
    </form>  
    </body>
    </html>";


foreach($var as $index)
{
    echo $index." ";
    echo "<br>";
}

echo $var2;

?>