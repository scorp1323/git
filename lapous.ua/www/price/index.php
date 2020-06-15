<?php
header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================


include_once "../implementer/implementer.php";
 include_once "../implementer/MyFunctions.php";
include_once '../basa/proba.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="style_price.css">
</head>
<body>

<?

$result = $db->prepare("SELECT *   FROM price_oll ");

$result->execute();


echo '<table>';
echo '<caption><h3><b>Прайс ветеринарной клиники "Лапоус"<b></h3></caption>';

echo '<th class="first th">№ п\п</th>
    <th class="th">Наименование услуги</th>
    <th class="th">Цена, грн</th>
  </tr>';

if($result->rowCount() > 0) {
$i = 0;
  while($res = $result->fetch(PDO::FETCH_BOTH)) {
 $i++;

 echo '
 <tr class="line">
 <td class="first num">'; echo $i,'</td>';
echo '<td class="second service_name">', $res['service'], '</td>';
echo '<td class="third cost">', $res['cost'], '</td>';
echo '</tr>';  

  
  }
}

echo '</table>'; 
?>
	




</body>
</html>





<?


