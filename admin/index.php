<?php
$ua=$_COOKIE["adminua"];
if($ua!=""){
if($ua=="touch"){
header('Location: ./touch');
}else{
header('Location: ./mobile');
}
}else{header('Location: ./touch');}
?>