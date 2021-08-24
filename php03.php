<?php
function product($result){

    return $result * 2;
}

echo product(3) . "\n";
echo "<br>";

?>

<?php
function add($a, $b){

    $result = $a + $b;

    return $result;
}

echo add($a = 1, $b = 3) . "\n";
echo "<br>";

?>


<?php
$arr = array(1, 3, 5, 7, 9);

function pro($arr){
  $result=1;
  foreach ($arr as $value) {
    $result *= $value;
  }

  return $result;
}
echo "計算結果: " . pro($arr);
echo "<br>";

?>


<?php
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
      if($max_number < $a){
        $max_number = $a;
      }
    
    }
    return $max_number;
  }

  echo max_array($arr);
  echo "<br>";

?>


<?php 
$html_text = "<h1> Hello world </h1>";
echo $html_text;

$html_text = strip_tags($html_text);
echo $html_text;
echo "<br>";

?>

<?php
$fruits = array("orange", "grape");
array_push($fruits, "apple", "strawberry");
print_r($fruits);
echo "<br>";

?>

<?php
$array1 = [1, 2];
$array2 = [10, 20];
$array3 = [100, 200];
 
$array = array_merge($array1, $array2, $array3);
 
print_r($array);
echo "<br>";

?>

<?php 

echo time();
echo "<br>";

$timestamp = mktime(0, 0, 0, 2, 28, 1998);
echo $timestamp;
echo "<br>";
echo date( "Y/m/d" , $timestamp ) ;
?>
