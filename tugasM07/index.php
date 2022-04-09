<?php
$string = "D3 Rekayasa Perangkat Lunak Aplikasi";
echo substr($string, 3) . "<br>";
echo substr($string, -8) . "<br>";
echo substr($string, 3, 24);
// --------------------------------------------------
$strings = array(
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain'
);
$strings2 = str_replace(
    array(
        'Abdullah',
        'kucing',
        'lucu',
        'bermain'
    ),
    array(
        'Abdurrahman',
        'bebek',
        'gemuk',
        'berenang'
    ),
    $strings
);
echo "<br>";
foreach ($strings2 as $value) {
    echo "<br>";
    echo $value;
}
// --------------------------------------------------
echo "<br>";
echo "<br>";
$str = 'My Password';
$user = 'username';
echo sprintf("haval160,4:\t\"%s\"->%s", $str.$user, hash("haval160,4", $str.$user));
echo "<br>";
echo sprintf("md5:\t\"%s\"->%s", $str.$user, hash("md5", $str.$user));
echo "<br>";
echo sprintf("sha1:\t\"%s\"->%s", $str.$user, hash("sha1", $str.$user));
// --------------------------------------------------
echo "<br>";
echo "<br>";
function primeCheck($number){
    if ($number == 1)
    return 0;
    
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
        return 0;
    }
    return 1;
}
function cekPrima($n, $m){

    $jumlah = 0;
    for ($i=$n; $i <= $m; $i++) { 
        if (primeCheck($i) == 1) $jumlah++;
    }
    return $jumlah;
}
echo ("Ditemukan ".cekPrima(1, 11)." bilangan prima");
?>