<?php
    include_once 'db/includes/header.php';
?>
<title>sign up - memento</title>
</head>
<body>

<?php
    include_once 'db/includes/nav.php';
?>


<section class="signup-form aalign">
    <div style="padding: 25px;font-size: 1.5rem;">
        <div class="title sysText" style="text-align: center;">Sign up</div>
    </div>
    <div class="modal-bodyi">
        <form class="form" action="db/includes/signup.inc.php" method="post" style="background-color: var(--b);border: none;">
            <input class="input3" type="text" name="name" placeholder="Full name..." style="margin-bottom:15px;">
            <input class="input3"  type="text" name="email" placeholder="Email..." style="margin-bottom:15px;">
            <input class="input3"  type="text" name="uid" placeholder="Username..." style="margin-bottom:15px;">
            <input class="input3"  type="password" name="pwd" placeholder="Password..." style="margin-bottom:15px;">
            <input class="input3"  type="password" name="pwdrepeat" placeholder="Repeat Password..." style="margin-bottom:5px;">
            
            <small class="" style="font-weight: 300">Forgot password?</small>

            <div class="modal-spc" style="text-align:center;">
                <button class="modal-btn" type="submit" name="submit">Sign up</button>
            </div>
        </form>


    </div>

    <?php
        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper username!</p>";
            }
            else if($_GET["error"] == "invalidemail") {
                echo "<p>Choose a proper email!</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords don't match!</p>";
            }
            else if($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            }
            else if($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken!</p>";
            }
            else if($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
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