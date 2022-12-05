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

 var_dump($cars);
 echo "<br/><br/>";
print_r($cars);
echo "<br/><br/>";
echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . "<br/>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . "<br/>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . "<br/>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . "<br/>";
echo "<br/><br/>";

for($x=0;$x<4;$x++){
    echo "<p><b>row number: $x</b></p>";
    echo "<ul>";
    for($y=0;$y<3;$y++){
        echo "<li>".$cars[$x][$y]."</li>";
    }
    echo "</ul>";
}
echo "<br/><br/>";
?>

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>