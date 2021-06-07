<!DOCTYPE html>
<html lang="en">
<?php
    require_once 'inc/head.inc'
?>
<style>
    /* Styles for Free Trial page */
    .free-trial-logo {
        max-width: 180px;
    }
    .free-trial-container {
        align-items: stretch;
        height: 100vh;
    }
    .free-trial-content {
        width: 500px;
    }

    .free-trial-image {
        max-width: 460px;
    }
    @media screen and (max-width: 768px) {
        .free-trial-content-container {
            align-items: center;
        }
    }
    @media screen and (max-width: 500px) {
        
        .free-trial-content {
            width: 300px;
        }
        .free-trial-image {
            max-width: 360px;
        } 
    }
</style>
<body>
    
    <div class="sl-l-wrapper">
        <div class="sl-l-block free-trial-container">
            <div class="sl-l-block flex-1 justify-center free-trial-content-container">
                <div class="sl-l-block column free-trial-content">
                    <img class="free-trial-logo" src="https://via.placeholder.com/180x36"/>
                    <h5> Zombie ipsum brains reversus ab cerebellum viral inferno,  </h5>
                    <?php require_once 'inc/free-trial/form.inc' ?>
                </div>
            </div>
            <div class="sl-l-block flex-1 justify-center bg-primary--dark free-trial-content-container">
                <div class="sl-l-block column free-trial-content">
                    <h3 class="color-white text-center"> Zombie ipsum brains reversus ab cerebellum viral inferno,  </h3>
                    <img class="free-trial-image" src="https://via.placeholder.com/460x303" />
                </div>
            </div>
        </div>
    </div>

<script>
    console.log("Js for Free Trial Page")
</script>
</body>
</html>