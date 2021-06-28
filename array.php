<?php
//This part is for filtering the array
if (isset($_POST['submit'])){
    $number = $_POST['filter_input'];
    $arrays =[
        ['id'=>1,'price'=>5],
        ['id'=>1,'price'=>10],
        ['id'=>2,'price'=>20],
        ['id'=>3,'price'=>30],
        ['id'=>4,'price'=>40],
        ['id'=>5,'price'=>50],
        ['id'=>6,'price'=>60],
        ['id'=>7,'price'=>70],
        ['id'=>8,'price'=>80],
        ['id'=>2,'price'=>20],
        ['id'=>2,'price'=>20],
        ['id'=>2,'price'=>20],
    ];

    $array = array_filter(
        $arrays,
        function ($arrays) use ($number) {
            return ($arrays['price'] > $number);
        }
    );
    echo '<pre>'. print_r($array, 1) .'</pre>';
    getSum($array);
}
//function for Sum
function getSum($array){
    echo 'Sum is '.array_sum(array_column($array,'price'));
}