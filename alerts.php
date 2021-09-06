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
            <h1 class="h1 mt-15">Alerts</h1>
            <p class="color-text mb-3">.alert</p>
            <p class="h5 mt-15">Base</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-column justify-start">
                    <div class="alert primary is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                    <div class="block mt-5">
                        <span class="code">
                            &ltdiv class="alert primary" data-alert_name="example"&gt;<br>
                            &nbsp&ltdiv class="block"&gt;<br>
                            &nbsp&nbspLorem ipsum dolor sit amet, consectetur adipiscing<br>
                            &nbsp&lt/div&gt;<br>
                            &lt/div&gt;<br>
                        </span>
                    </div>
                </div>
            </div>

            <p class="h5 mt-15">Variants</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-column justify-start">
                    <p class="color-text mb-3">.primary</p>
                    <div class="alert primary is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                    <p class="color-text mb-3">.secondary</p>
                    <div class="alert secondary is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                    <p class="color-text mb-3">.text</p>
                    <div class="alert text is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                    <p class="color-text mb-3">.white</p>
                    <div class="alert white is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                    <p class="color-text mb-3">.light</p>
                    <div class="alert light is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                    <p class="color-text mb-3">.dark</p>
                    <div class="alert dark is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                    <p class="color-text mb-3">.success</p>
                    <div class="alert success is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                    <p class="color-text mb-3">.danger</p>
                    <div class="alert danger is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                </div>

                <div class="block direction-column justify-start mt-5">
                    <p class="color-text mb-3">.dismissable</p>
                    <div class="alert primary dismissable is-example mb-5" data-alert_name="example">
                        <div class="block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </div>
                    </div>
                </div>

            </div>

            <p class="h5 mt-15">Example</p>
            <div class="block card direction-column mt-5">
                <div class="block direction-row flex-wrap align-center">
                    <div>
                        <button class="button primary alert-trigger" data-alert_trigger="example2">
                            Launch alert
                        </button>
                        <div class="alert primary dismissable" data-alert_name="example2">
                            <div class="block">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block mt-5">
                    <span class="code">
                        &ltbutton class="button primary" data-alert_trigger="example2"&gt;<br>
                        &nbsp&ltspan&gt;Launch alert&lt/span&gt;<br>
                        &lt/button&gt;<br>
                        &ltdiv class="alert primary dismissable" data-alert_name="example2"&gt;<br>
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

</body>
</html>