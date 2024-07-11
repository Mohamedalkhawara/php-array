<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colored Text Example</title>
    <style>
        .red { color: red; }
        .green { color: green; }
        .blue { color: blue; }
        .white { color: white; background-color: black; width: fit-content; }
        .green { color: green; }
        .red { color: red; }
    </style>
</head>
<body>
    <?php
    echo "------------------task 1 -------------------";
    echo "<br>";
echo "<br>";


    $colors = array('red', 'green', 'blue');

    $color1 = $colors[0];
    $color2 = $colors[1];
    $color3 = $colors[2];

    $paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: "
        . "the <span class=\"$color1\">$color1</span> carpet, the <span class=\"$color2\">$color2</span> lawn, the <span class=\"$color3\">$color3</span> house, the leaden sky. "
        . "The new president and his first lady. - Richard M. Nixon";

    echo $paragraph;


echo "<br>";
echo "<br>";
echo "------------------task 2 -------------------";
echo "<br>";
echo "<br>";

$colors = array('white', 'green', 'red');

    echo "<ul>";

    foreach ($colors as $color) {
        echo "<li class=\"$color\">$color</li>";
    }

    echo "</ul>";

    echo "<br>";
echo "<br>";
echo "------------------task 3 -------------------";
echo "<br>";
echo "<br>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid" );


foreach($cities as $contry => $capital){
    echo "the capital of {$contry} is {$capital}<br>";
}

echo "<br>";
echo "------------------task 4 -------------------";
echo "<br>";
echo "<br>";

$color = array (4 => 'white', 6 => 'green', 11=> 'red');

foreach($color as $number => $colors){
    echo "the first index is : $colors <br>";
}

echo "<br>";
echo "------------------task 5 -------------------";
echo "<br>";
echo "<br>";

$array = array(1, 2, 3, 4, 5);

$location = 3;
$new_item = '$';

array_splice($array, $location, 0, $new_item);

echo implode($array);

echo "<br>";
echo "------------------task 6 -------------------";
echo "<br>";
echo "<br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);

foreach($fruits as $key =>$value){
    echo "$key = $value <br>";
}

echo "<br>";
echo "------------------task 7 -------------------";
echo "<br>";
echo "<br>";

$temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73);

$average_temperature = array_sum($temperature) / count($temperature);

sort($temperature);

$lowest_temperatures = array_slice($temperature, 0, 5);
$highest_temperatures= array_slice($temperature,-5);

echo "the average is : $average_temperature <br>";
echo "the lowest temperatiores is :" .  implode(", ",$lowest_temperatures) . "<br>";
echo "the highest temperatiores is : "  . implode(", ", $highest_temperatures);

echo "<br>";
echo "------------------task 8 -------------------";
echo "<br>";
echo "<br>";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$merged_array = array_merge($array1, $array2);

echo "Array\n(\n <br>";
foreach ($merged_array as $key => $value) {
    echo "    [$key] => $value\n <br>" ;
}
echo ")\n";


echo "<br>";
echo "------------------task 9 -------------------";
echo "<br>";
echo "<br>";


$colors = array("red", "blue", "white", "yellow");

$upperColors = array_map('strtoupper', $colors);

echo "Array\n(\n <br>";
foreach($upperColors as $value){
    echo "   $value\n <br>";
}
echo ")\n";

echo "<br>";
echo "------------------task 10 -------------------";
echo "<br>";
echo "<br>";


$colors = array("RED","BLUE", "WHITE","YELLOW");

$upperColors = array_map('strtolower', $colors);

echo "Array\n(\n <br>";
foreach($upperColors as $value){
    echo "   $value\n <br>";
}
echo ")\n";

echo "<br>";
echo "------------------task 11 -------------------";
echo "<br>";
echo "<br>";

$start = 200;
$end = 250;

$divisibleByFour = array();

for($i=$start; $i<= $end; $i++){
    if($i %4 == 0){
        $divisibleByFour[]=$i;
    }
}

echo "numbers divisible by 4 :<br> ";
echo implode(", ", $divisibleByFour);

echo "<br>";
echo "------------------task 12 -------------------";
echo "<br>";
echo "<br>";


$words = array("abcd","abc","de","hjjj","g","wer");

$shortest_length = strlen($words[0]);
$longest_length = strlen($words[0]);

foreach($words as $string){
    $length = strlen($string);
    if($length < $shortest_length){
        $shortest_length = $length;
    }
    if($length> $longest_length){
        $longest_length = $length;
    }
}

echo "Shortest string length: $shortest_length<br>";
echo "Longest string length: $longest_length<br>"; 

echo "<br>";
echo "------------------task 13 -------------------";
echo "<br>";
echo "<br>";

$num1 = 10;
$num2 = 30;
$totalNumber = 10;

$uniqueNumbers = [];

while(count($uniqueNumbers) < $totalNumber){
    $randomNumber = rand($num1, $num2);
    if (!in_array($randomNumber, $uniqueNumbers)) {
        $uniqueNumbers[] = $randomNumber;
        echo "Unique random numbers: " . implode(", ", $uniqueNumbers);

    }
}

echo "<br>";
echo "------------------task 14 -------------------";
echo "<br>";
echo "<br>";

$array1 = array( 2,1, 0, 10, 12, 6);
$min=$array1[0];
for ($i=0;$i<count($array1);$i++){
if($array1[$i]!=0){
    if($array1[$i]<$min){
        $min=$array1[$i];
    }
}
}







echo "<br>";
echo "------------------task 15 -------------------";
echo "<br>";
echo "<br>";



function bubbleSortDescending($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

$input = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];
$output = bubbleSortDescending($input);

print_r($output);
echo array_unique($array1);

echo "<br>";
echo "------------------task 16 -------------------";
echo "<br>";
echo "<br>";

function floorWithPrecision($number, $precision, $separator) {
    $multiplier = pow(10, $precision);
    
    $flooredNumber = floor($number * $multiplier) / $multiplier;
    
    $formattedNumber = number_format($flooredNumber, $precision, $separator, '');
    
    return $formattedNumber;
}

$number1 = 1.155;
$precision1 = 2;
$separator1 = ".";

$number2 = 100.25781;
$precision2 = 4;
$separator2 = ".";

$number3 = -2.9636;
$precision3 = 3;
$separator3 = ".";

echo floorWithPrecision($number1, $precision1, $separator1) . "\n"; 
echo floorWithPrecision($number2, $precision2, $separator2) . "\n"; 
echo floorWithPrecision($number3, $precision3, $separator3) . "\n";

echo "<br>";
echo "------------------task 16 -------------------";
echo "<br>";
echo "<br>";



























    ?>
</body>
</html>



