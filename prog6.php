<?php
echo"____";
?>
<?php
$fp=fopen("first.txt","r");
$count=fread($fp,1024);
fclose($fp);
$count=$count+1;
echo"<p> Page views:".$count."</p>"
$fp=fopen("first.txt","w");
fwrite($fp,$count);
fclose($fp);
?>

