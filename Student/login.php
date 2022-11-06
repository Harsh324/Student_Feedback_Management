<!DOCTYPE html>
<html>
<head>
	<title>Student login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>

    <div class="cont">
        <form action="log.php"  method="post">
            <div class="form sign-in">
                <h2>Student Sign In</h2>

                <?php if(isset($_GET['error'])){ ?>
                    <p class = "error"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>

                <label>
                    <span>Registration No</span>
                    <input type="text", name="regno">
                </label>
                <label>
                    <span>Password</span>
                    <input type="password", name="password">
                </label>
                <button class="submit" type="submit">Sign In</button>
                <p class="forgot-pass">Forgot Password ?</p>
            </div>
        </form>

        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up">
                    <h2>New here?</h2>
                    <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img-text m-in">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                </div>
            </div>

            <form action="register.php" method = "post">
                <div class="form sign-up">
                    <h2>Student Sign Up</h2>

                    <?php if(isset($_GET['error'])){ ?>
                        <p class = "error"> <?php echo $_GET['error']; ?> </p>
                    <?php } ?>

                    <label>
                        <span>Name</span>
                        <input type="text", name="name">
                    </label>

                    <label>
                        <span>Password</span>
                        <input type="password", name="password">
                    </label>

                    <label>
                        <span>Registration No</span>
                        <input type="text", name="regno">
                    </label>

                    <button type="submit" class="submit">Sign Up Now</button>
                </div>
            </form>
        </div>
    </div>

<script type="text/javascript" src="Js/script.js"></script>
</body>
</html>