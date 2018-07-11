<?php

$array = array( 'Митрофан', 'чувак' => 'Жорж', 'Афоня' );

foreach ( $array as $i => $item ) {
	echo $i . ') ' . $item . ', ';
}

echo '<hr>';

$array2 = [ 'a', 34, $array, '!!!', '???' ];

// перебор массива
foreach ( $array2 as $value ) {

	// если элемент не является массивом
	if ( ! is_array( $value ) ) {
		echo $value;
	} else {
		//print_r( $value );
		foreach ( $value as $i => $item ) {
			echo ( $i + 1 ) . ') ' . $item . ', ';
		}
	}
}

$array_1 = [
	'a_2_1' => [
		'a_3_1' => [
			'a_4' => [ 'a', 'b', 'c', ],
		],
		'a_3_2' => [
			'a_4_1' => [ 'a', 'b', 'c', ],
			'a_4_2' => [ 'a', 'b', 'c', ],
			'a_4_3' => [ 'a', 'b', 'c', ],
		],
		'a_3_3' => [
			'a_4' => [ 'a', 'b', 'c', ],
		],
	],
	'a_2_2' => [
		'a_3_1' => [
			'a_4' => [ 'a', 'b', 'c', ],
		],
		'a_3_2' => [
			'a_4' => [ 'a', 'b', 'c', ],
		],
		'a_3_3' => [
			'a_4' => [ 'a', 'b', 'c', ],
		],
	],
	'a_2_3' => [
		'a_3_1' => [
			'a_4' => [ 'a', 'b', 'c', ],
		],
		'a_3_2' => [
			'a_4' => [ 'a', 'b', 'c', ],
		],
		'a_3_3' => [
			'a_4' => [ 'a', 'b', 'c', ],
		],
	],
];

print_r( $array_1 );


$array = array(
	'белорус' => 'Митрофан',
	'еврей'   => 'Жорж',
	'русский' => 'Афоня'
);

echo '<hr>';
echo $array['белорус'];

foreach ( $array as $i => $item ) {
	echo $i . ') ' . $item . ', ';
}

$data = [
	'pair'    => 'USD-BTC',
	'price'   => 6350,
	'buy'     => 14,
	'sell'    => 20,
	'av_buy'  => 6400,
	'av_sell' => 6700,
];
print_r( $data );
echo 'пара ' . $data['pair'] . ' торгуется по цене ' . $data['price'] . '$';
echo '<hr>';
print_r( implode( ', ', array_keys( $data ) ) );


$array = array(
	'Митрофан', // 0
	'Жорж', // 1
	'Афоня', // 2
	'Женя',
	'Тихомир',
	'Ярополк',
	'Ослябе',
	'Пересвет',
	'Яхонт',
	'Янис',
	'Федот',
	'Крамол',
	'Крит',
	'Ярополк',
);

/*
1) Взять массив и собрать второй массив, котором элементы расположены в обратном поряке

Чтобы получить индекс последнего элемента, надо - из числа элементов массива вычесть единицу!

*/
$start = microtime(true);

$array2 = [];
$n      = sizeof( $array );
// перебор массива в обратном порядке
for ( $i = $n - 1; $i >= 0; $i -- ) {

	//
	if ( $i % 2 == 0 ) {
		$array2[] = $array[ $i ];
	}
}

$name = 'Ярополк';
echo '<hr>';

$finish = microtime(true);

$delta = $finish - $start;

echo $delta . ' сек.';
echo "<br>";
/*
1. Создать массив, состаящий из 1000 случайных чисел от 1 до 1000
2. Узнать присутствует ли в сформированном массиве число Х
3. Понять, какой из 2-х методов работает быстрее.
*/


echo in_array( $name, $array );


foreach ( $array as $value ) {
	if ( $name == $value ) {
		echo '<div>Да, ' . $name . ' в списке!</div>';
		break;
	}
}

echo '<hr>';
print_r( $array );
print_r( $array2 );

echo "<hr>";
// старт времени
$start = microtime(true);
//  создание случайных чисел
function randarr( $N, $min = 1, $max = 1000) {
    return array_map(
        function() use( $min, $max) {
            return rand( $min, $max);
        },
        array_pad( [], $N, 1)
    );
}
echo "<pre>";
print_r( randarr(15));
echo "</pre>";

//филлиш - стоп времени
$finish = microtime(true);
$delta = $finish - $start;
echo $delta . ' сек.';