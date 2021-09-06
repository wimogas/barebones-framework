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
            <h1 class="h1 mt-15">Tags</h1>
            <p class="color-text mb-3">.tag</p>
            <p class="h5 mt-15">Base</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-row flex-wrap align-start">
                    <span class="tag primary mb-3">Lorem ipsum</span>
                </div>
                <div class="block">
                    <span class="code">
                        &ltspan class="tag primary"&gt;Lorem ipsum&lt/span&gt;<br>
                    </span>
                </div>
            </div>
            <p class="h5 mt-15">Variants</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-row flex-wrap align-start">
                    <span class="tag primary mr-5 my-3">.primary</span>
                    <span class="tag secondary mr-5 my-3">.secondary</span>
                    <span class="tag text mr-5 my-3">.text</span>
                    <span class="tag white mr-5 my-3">.white</span>
                    <span class="tag light mr-5 my-3">.light</span>
                    <span class="tag dark mr-5 my-3">.dark</span>
                    <span class="tag success mr-5 my-3">.success</span>
                    <span class="tag danger mr-5 my-3">.danger</span>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>