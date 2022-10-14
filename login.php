<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regform.css">
    <title>Registration Form</title>
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
</head>

<body>
    <main>
        <div class="container">
            <div class="text">
                <h1>Learn to code by </h1> <h1>  watching others</h1>
                <p class="learn">See how experienced developers solve problems in real time.</p>
                <p class="learn">Watching scripted tutorials is great, but understanding but understanding how <br>
                    developers think is valuable.</p>
            </div>
            <div class="form">
                <div class="subscribe">
                    <p><b>Try it free 7 days</b> then $20/mo. thereafter</p>
                </div>
                <form action="login_auth.php" method="post">

                    <div><input required name="email" class="formitem" type="email"
                            placeholder="E- mail">
                        <div class="errormessage">Looks like this is not an email</div>
                    </div>
                    
					<div><input required name="password" class="formitem" type="password"  minlength="8" placeholder="Password">
                        <div class="errormessage">Password cannot be less than 8 characters</div>
                    </div>
					

                    <div><input name="sub" class="formitemsubmit" type="submit" value="Login"></div>

                    <small> Don't have an account  ? <span style="color: red;"><a href="index.php">    Signup Here     </a></span> </small>
                </form>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>