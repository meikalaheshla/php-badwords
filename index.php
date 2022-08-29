<?php 

$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
echo '<pre>';
var_dump($paragrafo);
echo '</pre>';
$badword = $_GET['badword'];
$new_paragrafo = str_replace($badword,'***',$paragrafo);
echo $new_paragrafo;

var_dump($new_paragrafo);
echo strlen($new_paragrafo)

?>
