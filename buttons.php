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
            <h1 class="h1 mt-15">Buttons</h1>
            <p class="color-text mb-3">.button</p>
            <p class="h5 mt-15">Base</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-row flex-wrap align-start">
                    <button class="button primary mb-3">Lorem ipsum</button>
                </div>
                <div class="block">
                    <span class="code">
                        &ltbutton class="button primary"&gt;Lorem ipsum&lt/button&gt;<br>
                    </span>
                </div>
            </div>
            <p class="h5 mt-15">Variants</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-row flex-wrap align-start">
                    <button class="button primary mr-5 my-3">.primary</button>
                    <button class="button secondary mr-5 my-3">.secondary</button>
                    <button class="button text mr-5 my-3">.text</button>
                    <button class="button white mr-5 my-3">.white</button>
                    <button class="button light mr-5 my-3">.light</button>
                    <button class="button dark mr-5 my-3">.dark</button>
                    <button class="button success mr-5 my-3">.success</button>
                    <button class="button danger mr-5 my-3">.danger</button>
                </div>
            </div>
            <p class="h5 mt-15">Sizes</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-column flex-wrap align-start">
                    <button class="button primary small my-3">.small</button>
                    <button class="button primary large my-3">.large</button>
                    <button class="button primary full my-3">.full</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>