<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- font awsome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
  
    <link rel="stylesheet" href="/CLASS_1/style.css" >
    <!-- title icon -->
    <link rel="shortcut icon" type="image/png" href="/CLASS_1/image/logo.jpg">
    <title>Login</title>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <?php
        $uname = "";
        $err_uname = "";
        $pass = "";
        $err_pass = "";
        $hasError = false;
        $err_message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["uname"])) 
            {
                $err_uname = "Username Required";
                $hasError = true;
            } 
            else 
            {
                $uname = htmlspecialchars($_POST["uname"]);
            }
            if (empty($_POST["pass"])) 
            {
                $err_pass = "Password Required";
                $hassError = true;
            } 
            else 
            {
                $pass = htmlspecialchars($_POST["pass"]);
            }
       /*     if (!$hasError) 
            {
                //database?
            }
            else
            {
                $err_message = "Invalid username or password";
            }    */
        }
    ?>


  <body>
  <?php include('header.php'); ?>

   <!-- navbar -->

<br> 
    
<div class="center ">
            <legend ><h1>Login</h1></legend>
                <form action="login_code.php" method="post">
                    <table >
                        <tr>
                            <td><span>Username:</span> </td>
                            <td><input class="txt_field" type="text" value="" placeholder="Username" name="uname"><br><span ><?php echo $err_uname; ?></span> </td>
                        </tr>
                        
                        <tr>
                            <td><span>Password:</span></td>
                            <td><input class="txt_field" type="password" placeholder="Password" name="pass"><br><span ><?php echo $err_pass; ?></span></td>

                        </tr>
                        <tr>
                        <td colspan="2" ><a class="fr" href="#"> Forgot Password?</a> </td>
                        </tr>
                            
                        <tr>
                            <td colspan="2" ><input class="btn-outline-success m-1 login" type="submit" value="Login" name="login">
                        </tr>
                                <td></td>
                                <td colspan="2" ><span style="color: red;"><?php echo $err_message; ?></span></td>
                        </tr>
                        <tr>
                        <td colspan="2"></label><a class="fr" href="registration.php"> Not Registrated yet? Sign Up</a> </td>
                        </tr>
                    </table>
                    <br> <br> <br>

                </form>
    </div>
        <br> <br> <br>
        <br> <br> <br>
        <br> <br> <br>
        <br> <br> <br>
         <br> <br><br>
        <br> <br> <br>
        <br> <br> <br>
     <br><br><br>

     <?php include('footer.html'); ?>
   <!--footer-->




  </body>
</html>
