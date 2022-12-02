<?php
for($i=0;$i<=10;$i++){
if($i==4)
break;
echo "$i ";
}
?>
<br/>
<?php
for($i=0;$i<=10;$i++){
    if($i==4){
        continue;
    }
    echo "$i ";
}
