<?php
$cars = array("jazz","city","thar","swift");
echo "I like ".$cars[0]. ", ".$cars[1].", ".$cars[2]." and ".$cars[3].".<br/>";
echo count($cars);
echo "<br/>";
#indexed array
for($i=0;$i<count($cars);$i++){
    echo $cars[$i]." ";
}
echo "<br/>";
print_r($cars);
echo "<br/>";
var_dump($cars);
echo "<br/>";
#associative array
$age = array("amar"=>"34","binod"=>"45","civam"=>"12","divya"=>"45");
echo "the age of divya is " . $age['divya'].".<br/>";
echo"<br/>";
foreach($age as $x => $y){
    echo "The age of " . $x . " is ".$y.".<br/>"; 
}
echo "<br/>";

#Multidimensional Arrays
$cars = array(
    array("volvo","15","5"),
    array("BMW","34","12"),
    array("audi","45","23"),
    array("Thar","100","9")
);


?>