<?php

Conversion failed when converting the varchar value '12x' to data type int.
// тип данных - не число, а тип varchar, поетому при запросе ОБЯЗАТЕЛЬНО  бери в кавычки!!! 


SELECT model, speed, hd
FROM PC
WHERE price < 600 AND 
cd BETWEEN '12x' AND '24x';
//выдаст ошибку - нельзя сравнивать два текстовых данных