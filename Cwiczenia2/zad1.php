<html>
<body>
<form enctype="multipart/form-data" action="" method="post">
    <input name="Pierwsza" type="number"/>
    <input name="Druga" type="number"/>
    <select name="operation">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="submit" name="submit" value="Oblicz" class="btn btn-primary"/><br/>
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $temp = 0;
    $first = $_POST['Pierwsza'];
    $second = $_POST['Druga'];
    $sign = $_POST['operation'];
    switch($sign) {
        case 'add':
            $temp = $first + $second;
            break;
        case 'subtract':
            $temp = $first - $second;
            break;
        case 'multiply':
            $temp = $first * $second;
            break;
        case 'divide':
            $temp = $first / $second;
            break;
        default:
            break;
    }
    echo $temp;
}
?>