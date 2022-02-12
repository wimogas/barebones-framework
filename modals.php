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
            <h1 class="h1 mt-15">Modals</h1>
            <div class="block direction-row justify-start">            
                <span class="tag danger">beta</span>
                <p class="color-text ml-3">.modal</p>
            </div>
            <p class="h5 mt-15">Base</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-column justify-start">
                    <div class="modal is-example mb-5" data-modal_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                    <div class="block mt-5">
                        <span class="code">
                            &ltdiv class="modal" data-modal_name="example"&gt;<br>
                            &nbsp&ltdiv class="block"&gt;<br>
                            &nbsp&nbspLorem ipsum dolor sit amet, consectetur adipiscing<br>
                            &nbsp&lt/div&gt;<br>
                            &lt/div&gt;<br>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>