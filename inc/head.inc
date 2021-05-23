<?php
    $d = dir("./dist");
    $files = scandir($d->path);
    $js_files = [];
    foreach ($files as $file) {
        if (strpos($file, '.js') !== false) {
            if (strpos($file, 'LICENSE') == false) {
                $js_file = "<script async src='./dist/" . $file . "'></script>";
                array_push($js_files, $js_file);
            }

        }
        if (strpos($file, '.css') !== false) {
            $css_file = "./dist/" . $file;
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Layer Design System - Playground</title>
    <?php 
        foreach ($js_files as $js) {
            echo ($js);
        };
    ?>
    <link rel="stylesheet" href="<?php echo $css_file ?>">
    <link rel="stylesheet" href="https://use.typekit.net/yhp0ziy.css">
</head>