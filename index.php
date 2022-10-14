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
                <form action="user_data.php" method="post">
                    <div><input name="fullname" class="formitem" type="text"  minlength="5" maxlength="50" placeholder="Name">
                        <div class="errormessage">Name cannot be empty or less than 5 characters</div>
                    </div>

                    <div><input required name="email" class="formitem" type="email"
                            placeholder="E- mail">
                        <div class="errormessage">Looks like this is not an email</div>
                    </div>

                    <div class="formitem">
                    <select name="doby">
                        <script language="javascript">
                        var min=1988;
                        var max=2022;

                        for(i=min; i<=max; i++)
                        {
                        document.write("<option required value='"+i+"'>"+i+"</option>");
                        }
                        </script>
 </select>
 
  <select name="dobm">
 <script language="javascript">
var myarray= new Array("January","Febrary","March","April","May","June","July","august","September","October","November","December");
for(j=0;j<12;j++)
{
document.write("<option required value='"+myarray[j]+"'>"+myarray[j]+"</option>");
}
</script>
 </select>
  <select name="dobd">
 <script language="javascript">

var days= new Array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
for(y=0;y<31;y++)
{
document.write("<option required value='"+days[y]+"'>"+days[y]+"</option>");
}
</script>
 </select>

                    </div>

                    <div>
                        <select required class="formitem" name="gender" id="gender">
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
                    </div>

                    <div><input required name="country" class="formitem" type="text"  minlength="5" maxlength="20" placeholder="Country">
                        <div class="errormessage">Country cannot be empty</div>
                    </div>
					<div><input required name="password" class="formitem" type="password"  minlength="8" placeholder="Password">
                        <div class="errormessage">Password cannot be less than 8 characters</div>
                    </div>
					<div><input required name="cpassword" class="formitem" type="password"  minlength="8"  placeholder="confirm Paswword">
                        <div class="errormessage">Confirm Password must match Password</div>
                    </div>

                    <div><input name="sub" class="formitemsubmit" type="submit" value="SUBMIT"></div>

                    <small>Have an account Already ? <span style="color: red;"><a href="login.php">    Login Here     </a></span> </small>
                </form>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>