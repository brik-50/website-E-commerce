<?php 
define("MYHOST","localhost");
define("MYUSER","root");
define("MYPASS","");


$conn=mysqli_connect(MYHOST,MYUSER,MYPASS);


if (!$conn){
    echo "Fail " ;
}
else{
    echo('work');
}


    




?>