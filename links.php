<!DOCTYPE html>
<html lang="en">
<?php
    require_once 'inc/head.php'
?>
<body>
<?php
    require_once 'inc/nav.inc'
?>
<div class="wrapper">
    <div class="container">
        <div class="block direction-column p-5">
            <h1 class="h1 mt-15">Links</h1>
            <p class="h5 mt-15">Base</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-row flex-wrap align-center">
                    <a class="link primary my-3" href="#">Lorem ipsum</a>
                </div>

                <div class="block mt-5">
                    <span class="code">
                        &lta class="link primary" href="#"&gt;Lorem ipsum&lt/a&gt;<br>
                    </span>
                </div>

            </div>

            <p class="h5 mt-15">Variants</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-row flex-wrap align-center">
                    <a class="link primary mr-5 my-3" href="#">.primary</a>
                    <a class="link secondary mr-5 my-3" href="#">.secondary</a>
                    <a class="link text mr-5 my-3" href="#">.text</a>
                    <a class="link white bg-dark p-3 mr-5 my-3" href="#">.white</a>
                    <a class="link light mr-5 my-3" href="#">.light</a>
                    <a class="link dark mr-5 my-3" href="#">.dark</a>
                    <a class="link success mr-5 my-3" href="#">.success</a>
                    <a class="link danger mr-5 my-3" href="#">.danger</a>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>