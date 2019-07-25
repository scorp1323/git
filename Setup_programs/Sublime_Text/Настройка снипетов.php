1 - создаем свой снипет
2 - Tools->Новый снипет
4 - появится новый снипет
<snippet>
  <content><![CDATA[
Hello, ${1:this} is a ${2:snippet}.
]]></content>
  <!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
  <!-- <tabTrigger>hello</tabTrigger> -->
  <!-- Optional: Set a scope to limit where the snippet will trigger -->
  <!-- <scope>source.python</scope> -->
</snippet>


5 - свой снипет вводится вместо строки 
    Hello, ${1:this} is a ${2:snippet}.

<snippet>
  <content><![CDATA[
<!DOCTYPE html>
<html lang="ru,en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Описание сайта">
  <meta name="keywords" content="Ключевые слова">

  <linc rel="stylesheet" href="style.css">

  <linc rel="shotcut icon" href="/favicon.ico" type="image/x-icon">
    <script src="js.js"></script>
  <title>Тестовая страница</title>

  <!-- [if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    [endif]-->

</head>
<body>
  <div class="main">
    
  </div>
</body>
</html>
]]></content>
  <!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
  <!-- <tabTrigger>hello</tabTrigger> -->
  <!-- Optional: Set a scope to limit where the snippet will trigger -->
  <!-- <scope>source.python</scope> -->
</snippet>

6 - в строке <!-- <tabTrigger>hello</tabTrigger> -->
вводим имя снипета, по кот. он будет активироваться
(вместо  hello ) и раскоментируем ее
  <tabTrigger>myhtml5</tabTrigger>

7 - сохранить снипет с таким же именем myHTML5 без расширения