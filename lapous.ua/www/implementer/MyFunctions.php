<?php

function GetURL($ollPublication) {
  foreach($ollPublication as $item) {

$seno=  $_SERVER['REQUEST_URI']; 
$igla = $item['name_php'];
#echo $igla, '<br>';

$ogon = '/articles/';
#echo $ogon, '<br>';

$php =  $ogon . $igla . '.php';
#echo $php, '<br><br>;

if ($php == $seno) {
	$is_article_title = html_entity_decode($item['title']);
	$is_article_content = html_entity_decode($item['content']);
	$is_article_date = $item['date'];
	$is_article_autor = $item['author_name'];

	echo '<h3>' . $is_article_title . '</h3>';
  echo $is_article_content . '<br><br>';
  echo '<b>' . '&#8195;' . $is_article_date . '&#8195; &#8194; &#8195;' . '</b>' ;
  echo 'Автор статьи:' . '&#8195;' . '<b>' . $is_article_autor . '</b>' ;
} } }


function Get_Oll_Publication($ollPublication, $www){
  foreach($ollPublication as $item) {
  #echo '<xmp>';
echo '<a href="';
echo $www;
echo '/';
echo ($item['name_php']);
echo '.php';
echo '" ';
echo 'title="';
echo ($item['title']);
echo '">';
echo ($item['title']);
echo '</a>';
echo '<br>';
} }



function GET_Header($root) {
echo '<!DOCTYPE html>';
echo '<html lang=' . '"en, ru"' . '>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Ветеринарная клиника ' . '"Лапоус"' . '</title>';
echo '<link rel=' . '\'StyleSheet\'' . ' type=' . '\'text/css\'' . 'href=' . '"../../css/style.css"' . '  />';
echo '</head>';
echo '<body>
<!-- подключаем горизонтальное меню -->';	
include_once "$root/horisontell_meny.php";
}


function GET_Wrapper($ollPublication) {
echo '<div class=' . '"wrapper"' . '>';
echo '<div class=' . '"wrapper1"' . '>';
echo '<div class=' . '"wr1_1"' . '>';
echo '<h1>Ветеринарная клиника  ' . '"Лапоус"' . '</h1><br>';
echo '</div></div>';
echo '<!-- ----------------------- -->';
echo '<div class=' . '"row1"' . '>';
echo '<div class=' . '"Publication"' . 'style=' . '"background-color:#008080;"' . '>';

GetURL($ollPublication);

echo '</div><div class=' . '"column3" ' . 'style=' . '"background-color:#FFEFD5;"' . '>';
echo '<a href=' . '"http://lapous.com.ua/articles" ';
echo 'title=' . '"';
print_r($ollPublication['0']['title']);
echo '">';
echo '<b>Все статьи:</b></a><br>';

}


function GET_Futer($root) {
echo 'Истории</div></div></div>';
echo '<!-- -------------------------------------- -->';
echo '<footer>';
echo '<!-- подключаем футер -->';
include_once "$root/footer.php";
echo '</footer>';
echo '</body>';
echo '</html>';
}