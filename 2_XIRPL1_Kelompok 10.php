<!DOCTYPE html>
<head>
    <title>Belajar LOOP</title>
</head>
<body>
    <h2>Perualangan</h2>
    <?php
    date_default_timezone_set("asia/jakarta");
    echo date("Y-m-d") . date("h:i:sa");
    echo "<br>";
    for($i=0;$i<=5;$i++){
    for($j=5-$i;$j>=1;$j--){
    echo "* ";
    }
    echo "<br>";
    }
?>
</body>