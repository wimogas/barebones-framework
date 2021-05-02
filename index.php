<!DOCTYPE html>
<html lang="en">
<?php
    $d = dir("./dist");
    $files = scandir($d->path);
    foreach ($files as $file) {
        if (strpos($file, '.js') !== false) {
            $js_file = "./dist/" . $file;
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boilerplate Framework</title>
    <script async src="<?php echo $js_file ?>"></script>
</head>
<body>

<?php include 'home.php'; ?>

</body>
</html>