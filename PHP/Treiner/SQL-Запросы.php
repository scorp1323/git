<?php

CRUD  (сокр. от англ. create, read, update, delete — 
                создать, прочесть, обновить, удалить)

CREATE
READ
UPDATE
DELETE


=================================================
             CREATE - зоздание


INSERT INTO `articles_categories`(`title`) VALUES ("Природа");



INSERT INTO `articles`( `title`, `text`, `catigorie_id`, `pabdate`, `views`) VALUES ('Охота снежного леопарда','Самонаблюдение расщепляет филогенез, это обозначено Ли Россом как фундаментальная ошибка атрибуции.Еще в ранних работах Л.Д.Ландау показано, что знак методологически диссоциирует этиловый луч','5','NOW','0');

-------------------------------------------------
                 READ - чтение

SELECT * FROM  `articles_categories`  (Без ;  !!! используй ` с кнопки тильда(ё)!!!)
                //возвращает все столбцы с выбраной таблицы



SELECT `title` FROM  `articles_categories` //возвращает только выбранный столбец

SELECT * FROM  `articles`

SELECT `title` FROM  `articles`

SELECT title,pabdate FROM  `articles`//почемуто срабатывает без `

SELECT id,title,pabdate FROM  `articles`

//  для оптимизации - лучше вносить в запрос только те поля, которые нужны - меньше идет загрузка сервера

SELECT * FROM  `articles` WHERE id = 5

SELECT * FROM  `articles` WHERE views > 0
              //вывести все статьи, у которых более 0 просмотров


SELECT COUNT(id) AS `total_count` FROM `articles` WHERE `categorie_id`=1
// вывести к-во сколько есть статей в "articles" с категорией  "id"=1
----------------------------------------------------------
SELECT * FROM  `articles` ORDER BY views 
// вывести все статьи и сортировать по к-ву просмотров (от меньшего к большему)


SELECT * FROM  `articles` ORDER BY views DESC
// вывести все статьи и сортировать по к-ву просмотров от большего к меньшему

SELECT * FROM  `articles` ORDER BY views DESC LIMIT start, limit

SELECT * FROM `articles` WHERE `views` > 10 ORDER BY `views` DESC LIMIT 0,10
              // только такой порядок расстановки запроса

SELECT * FROM  `articles` ORDER BY views LIMIT 1,4

SELECT * FROM  `articles` ORDER BY views DESC LIMIT 1,4


SELECT * FROM  `articles` ORDER BY views DESC LIMIT 0,10
SELECT * FROM  `articles` ORDER BY views DESC LIMIT 10,10
SELECT * FROM  `articles` ORDER BY views DESC LIMIT 20,10
SELECT * FROM  `articles` ORDER BY views DESC LIMIT 30,10

=====================================================================

UPDATE `articles` SET `title` = "как приготовить гороховый суп с синими фрикадельками" WHERE `id` = 1;
// пошел только с " "

UPDATE `articles` SET `views` = 35 WHERE `id` = 1 
             // работает также без ; но лучше их ставитть

UPDATE `articles` SET `views` = `views`+1 WHERE `id` = 3
// можно использовать с формулой

UPDATE `articles` SET `title` = "как приготовить гороховый суп", `views` = `views`+1 WHERE `id` = 1         // сразу 2 условия
===================================================================

DELETE FROM `articles` WHERE `id`= 7

DELETE FROM `articles` WHERE `id`= 9 or `id` = 6

DELETE FROM `articles` WHERE `title`= "test3" AND `views`=0
// снова сработало только с " "



