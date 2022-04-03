<?php


    echo "<h1> Please Confirm Your Data </h1>";
$fullname= $_POST['fname']." ".$_POST['lname'];

 $skills="";
for($i=0;$i < count($_POST['skill']) ;$i++)
 $skills=$skills." ".$_POST['skill'][$i]  ;

    echo "Full Name >>>>>>>>>.".$fullname;
    echo "<br>";
    echo "Address >>>>>>>>>>>>. ".$_POST['address'];
    echo "<br>";
    echo "Yor Skill >>>>>>>>>>> ". $skills;
    echo "<br>";
    echo "Department>>>>>>>>>>> ".$_POST['Department'];
    ?>



