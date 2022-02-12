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
            <h1 class="h1 mt-15">Dropdowns</h1>
            <p class="color-text mb-3">.dropdown</p>
            <p class="h5 mt-15">Base</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-row flex-wrap align-center">
                    <div>
                        <button class="button dropdown-trigger primary" data-dropdown_trigger="btn">
                            <span>Button</span>
                            <i class="ri-arrow-down-s-line"></i>
                        </button>
                        <div class="dropdown" data-dropdown_name="btn">
                            <div class="block p-3">
                                Item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block mt-5">
                    <span class="code">
                        &ltbutton class="button dropdown-trigger primary" data-dropdown_trigger="btn"&gt;<br>
                        &nbsp&ltspan&gt;Button&lt/span&gt;<br>
                        &nbsp&lti class="icon medium filter-white ml-1"&gt;<br>
                        &nbsp&nbsp&ltimg src="./assets/icons/arrow.svg" /&gt;<br>
                        &nbsp&lt/i&gt;<br>
                        &lt/button&gt;<br>
                        &ltdiv class="dropdown" data-dropdown_name="btn"&gt;<br>
                        &nbsp&ltdiv class="block p-3"&gt;<br>
                        &nbsp&nbspItem<br>
                        &nbsp&lt/div&gt;<br>
                        &lt/div&gt;<br>
                    </span>
                </div>

                <div class="mt-5">
                    <a href="#" class="link dropdown-trigger primary" data-dropdown_trigger="link">
                        <span>Link</span>
                        <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <div class="dropdown" data-dropdown_name="link">
                        <div class="block p-3">
                            Item
                        </div>
                    </div>
                </div>

                <div class="block mt-5">
                    <span class="code">
                        &lta href="#" class="link dropdown-trigger primary" data-dropdown_trigger="link"&gt;<br>
                        &nbsp&ltspan&gt;Link&lt/span&gt;<br>
                        &nbsp&lti class="icon medium filter-primary"&gt;<br>
                        &nbsp&nbsp&ltimg src="./assets/icons/arrow.svg" /&gt;<br>
                        &nbsp&lt/i&gt;<br>
                        &lt/a&gt;<br>
                        &ltdiv class="dropdown" data-dropdown_name="link"&gt;<br>
                        &nbsp&ltdiv class="block p-3"&gt;<br>
                        &nbsp&nbspItem<br>
                        &nbsp&lt/div&gt;<br>
                        &lt/div&gt;<br>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>