<?php
$x=0;
#while loop
while($x++<10){
    echo "$x ";
}
?>
<br/>

<?php
#do-while loop
do{
    echo "$x ";
}while($x++<20);
?>
<br/>

<?php
#for loop
for($x=21;$x<=30;$x++){
    echo "$x ";
}
?>
<br />
<?php
#for each loop
$colors = array("red","green","orange","yellow","cyan","blue");
foreach($colors as $x){
    echo "$x ";
}
echo "<br/>";
print_r($colors);
echo "<br/>";
var_dump($colors);
?>
<br/>

<?php
$age = array("amar"=>"20","binod"=>"21","cai"=>"22","damn"=>"23");
foreach($age as $x => $val){
    echo "$x : $val, ";
}
echo "<br/>";
print_r($age);
echo "<br/>";
var_dump($age);
?>
<br/>

