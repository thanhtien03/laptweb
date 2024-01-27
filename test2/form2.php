<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form1</title>
</head>
<style>
    h1{
        text-align: center;
    }
    label{
        margin-left: 450px;
    }
    input {
        margin-left: 70px;
        margin-bottom: 20px;
    }
    .tinhtong{
        margin-left: 450px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 10px;
    }
    .tinhhieu{
        margin-left: 15px;
    }
</style>
<body>
    <h1>Tính tích 2 số</h1>
    
    <?php
function is_number($value) {
    return is_numeric($value);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["num1"];
    $width = $_POST["num2"];
    $resultMessage = "";
    if (empty($length) || empty($width)) {
        echo "<p style='color: red;'>Vui lòng nhập dữ liệu hợp lệ.</p>";
    } elseif (!is_number($length) || !is_number($width)) {
        echo "<p style='color: red;'>Vui lòng nhập giá trị số hợp lệ.</p>";
    } else {
        $area = $length * $width;
    }
    echo $resultMessage;
}
?>

    <form method="post">
        <label for="num1">số a</label>
        <input type="text" name="num1" required>
        <br>
        <label for="num2">số b</label>
        <input type="text" name="num2" required>
        <br>
        <input class="tinhtong" type="submit" value="Tính Tổng">
        
        <input  class="tinhhieu" type="text" name="tinhtong" value="<?php echo $area; ?>">
        
    </form>
</body>
</html>

