Многомерный массив - массив, кот. внутри содержит другие массивы.

<?

$arr = array(
    array( 'name' => 'Bob', 'age' => '34' ),
    array( 'name' => 'Jon', 'age' => '22' ));

echo '<pre>';
print_r($arr);
echo '<br>';
//выведет весь массив с подмассивами
// Array
// (
//     [0] => Array
//         (
//             [name] => Bob
//             [age] => 34
//         )
//     [1] => Array
//         (
//             [name] => Jon
//             [age] => 22
//         )
// )


echo '<pre>';
print_r($arr[1]);
echo '<br>';
//выведет массив с индексом 1
// Array
// (
//     [name] => Jon
//     [age] => 22
// )


echo '<pre>';
print_r($arr[0]['name']);
//Bob
//выведет значение 'name' массива с индексом "0"