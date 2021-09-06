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
            <h1 class="h1 mt-15">Blocks</h1>
            <p class="color-text mb-3">.block</p>
            <p class="h5 mt-15">Base</p>
            <p class="my-5">Rows</p>
            <div class="block direction-column">
                <div class="block direction-row justify-start">
                    <div class="block bg-light color-white p-10 mr-5">Block item 1</div>
                    <div class="block bg-light color-white p-10">Block item 2</div>
                </div>
                <div class="block mt-5">
                    <span class="code">
                        &ltdiv class="block direction-row mt-5"&gt;<br>
                        &nbsp&ltdiv class="block bg-light color-white p-10 mr-5"&gt;Block item 1&lt/div&gt;<br>
                        &nbsp&ltdiv class="block bg-light color-white p-10"&gt;Block item 2&lt/div&gt;<br>
                        &lt/div&gt;
                    </span>
                </div>

                <div class="block direction-row justify-between mt-10">
                    <div class="block bg-light color-white w-100 align-center p-10 mr-5">Block item 1</div>
                    <div class="block bg-light color-white w-100 align-center p-10">Block item 2</div>
                </div>
                <div class="block mt-5">
                    <span class="code">
                        &ltdiv class="block direction-row justify-between mt-10"&gt;<br>
                        &nbsp&ltdiv class="block bg-light color-white w-100 align-center p-10 mr-5"&gt;Block item 1&lt/div&gt;<br>
                        &nbsp&ltdiv class="block bg-light color-white w-100 align-center p-10"&gt;Block item 2&lt/div&gt;<br>
                        &lt/div&gt;
                    </span>
                </div>

                <p class="mt-10 mb-5">Columns</p>
                <div class="block direction-column">
                    <div class="block bg-light color-white align-center p-10 mb-5">Block item 1</div>
                    <div class="block bg-light color-white align-center p-10">Block item 2</div>
                </div>
                <div class="block mt-5">
                    <span class="code">
                        &ltdiv class="block direction-column mt-5"&gt;<br>
                        &nbsp&ltdiv class="block bg-light color-white p-10"&gt;Block item 1&lt/div&gt;<br>
                        &nbsp&ltdiv class="block bg-light color-white p-10"&gt;Block item 2&lt/div&gt;<br>
                        &lt/div&gt;
                    </span>
                </div>
            </div>
            <p class="h5 mt-15">Variants</p>
            <p class="my-5">Cards</p>
            <div class="block card w-100 mb-10">
                <div class="block w-100">
                    <span class="code">
                        &ltdiv class="block card"&gt;<br>
                        &nbsp...<br>
                        &lt/div&gt;
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>