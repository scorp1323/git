<?php
//так всегда начинается php код(файл)
//=====================================================

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================
?>
<select>
  <?php
    for($i = 1910; $i<=2010; $i++) {
      echo "<option value=\$i\">$i</option>";
    }


?>
</select>&nbsp


<select>
  <option value="1910">1910</option>
  <option value="1911">1911</option>
  <option value="1912">1912</option>
  <option value="1913">1913</option>


</select><br>



































<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>