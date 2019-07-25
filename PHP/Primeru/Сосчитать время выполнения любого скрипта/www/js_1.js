var start = new Date; // засекли время

// что-то сделать
for (var i = 0; i < 100000; i++) {
  var doSomething = i * i * i * i * 500000000000;
}

var end = new Date; // конец измерения

alert( "Цикл занял " + (end - start) + " ms" );




var arr = [];
for (var i = 0; i < 1000; i++) arr[i] = 0;

function walkIn(arr) {
  for (var key in arr) arr[key]++;
}

function walkLength(arr) {
  for (var i = 0; i < arr.length; i++) arr[i]++;
}

function bench(f) {
  var date = new Date();
  for (var i = 0; i < 10000; i++) f(arr);
  return new Date() - date;
}

alert( 'Время walkIn: ' + bench(walkIn) + 'мс' );
alert( 'Время walkLength: ' + bench(walkLength) + 'мс' );