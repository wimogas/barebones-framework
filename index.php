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
    <script src=<?php echo $js_file ?> ></script>
</head>
<body>
    
    <div class="home">
    
        <section class="sl-l-section">
            <div class="sl-l-block">

                <div class="sl-l-block__item">
                    <button class="sl-c-button">Hello World</button>
                </div>

                <div class="sl-l-block__item">
                    <button class="sl-c-button">Hello World</button>
                </div>

            </div>
        </section>
        
    </div>


</body>
</html>