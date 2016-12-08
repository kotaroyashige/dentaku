<?php
if( empty($_POST['x']) & empty($_POST['y']) ){
    $x = $y = 0;
}else{
    $x = $_POST['x'];
    $y = $_POST['y'];
}

$ope = $_POST['operator'];

if ($x == "") {
    echo "<span>※半角数字を入力してください</span>";
    $x = ""; $y = "";
} else if ($y == "") {
    echo "<span>※半角数字を入力してください</span>";
    $x = ""; $y = "";
} else if (!is_numeric($x)){
    echo "<span>※半角数字を入力してください</span>";
    $x = ""; $y = "";
} else if (!is_numeric($y)) {
    echo "<span>※半角数字を入力してください</span>";
    $x = ""; $y = "";
}

switch ($ope) {
    case "+";
        $answer = $x + $y;
        break;

    case "-";
        $answer = $x - $y;
        break;

    case "*";
        $answer = $x * $y;
        break;

    case "/";
        if ($x == 0) {
            $answer = 0;
        } else if ($y == 0){
            echo "<span>※0で割ることはできません</span>";
            $answer = "";
        } else {
            $answer = $x / $y;
        }
        break;
}
$z = $answer;


?>

<html>
<head>
</head>
<body>
<form method="POST" action="cal.php">
            <input type="text" name="x" value="<?php echo($x); ?>">
                <select name="operator">
                <option value="+">＋</option>
                <option value="-">－</option>
                <option value="*">×</option>
                <option value="/">÷</option>


            <input type="text" name="y" value="<?php echo($y); ?>">＝
            <input type="text" name="A" value="<?php echo($z); ?>">
            <input type="submit" value="計算">
            <input type="reset" value="クリア">
</form>
</body>
</html>
