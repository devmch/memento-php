<?php
    include_once 'db/includes/header.php';
?>
<title>Log in — memento</title>
</head>
<body>

<?php
    include_once 'db/includes/nav.php';
?>


<section class="signup-form aalign">
    <div style="padding: 25px;font-size: 1.5rem;">
        <div class="title sysText" style="text-align: center;">Log in</div>
    </div>
    <div class="modal-bodyi">
        <form class="form" action="db/includes/login.inc.php" method="post" style="background-color: var(--b);border: none;">
            <input class="input3" type="text" name="uid" placeholder="Username/Email..." style="margin-bottom:15px;">
            <input class="input3"  type="password" name="pwd" placeholder="Password..." style="margin-bottom:5px;">

            <small class="" style="font-weight: 300">Forgot password?</small>

            <div class="modal-spc" style="text-align:center;">
                <button class="modal-btn" type="submit" name="submit">Log in</button>
            </div>
        </form>


    </div>

    <?php
        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login!</p>";
            }
        }
    ?>

</section>



<div id="preloader" class="loader"></div>
<footer class="footer" style="position:fixed;">

    <p class="copy">© Memento by <a href="https://magnushvidtfeldt.com" target="_blank"> Magnus Hvidtfeldt</a></p>

</footer>



<?php
    include_once 'db/includes/footer.php';
?>

<link rel="stylesheet" href="css/palette-selector.css">