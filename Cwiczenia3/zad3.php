<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
function read($file)
{
    if (file_exists($file)) {
        $files = scandir($file);
    }else{
        echo ("Directory $file doesn't exists!");
        return;
    }
    foreach ($files as $file) {
        echo $file . "<br>";
    }
}
function create($path, $file)
{
    if (file_exists($path.$file)) {
        echo("File $file already exists!");
    }else{
        mkdir($path.$file, 0777, true);
        echo("File $file has been created!");
    }

}
function delete($path, $file)
{
    if (file_exists($path.$file)) {
        if (is_dir($path.$file) && count(scandir($path.$file)) == 2) {
            rmdir($path.$file);
            echo("Directory $file has been deleted!");
        }else{
            echo("Directory $path$file is not empty!");
        }
    }else{
        echo("Directory $file doesn't exists!");
    }
}
function pick($path, $file, $option)
{
    switch ($option) {
        case 'r':
            return read($path.$file);
        case 'c':
            return create($path,$file);
        case 'd':
            return delete($path, $file);
        default:
            break;
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $path = $_POST['path'];
    $file = $_POST['file'];
    $option = $_POST['option'];
    pick($path, $file, $option);
}
?>
</body>
</html>