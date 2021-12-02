<!DOCTYPE html>

<head>
    <title>Book Club Register</title>
</head>


<body>


<body style="background-color:#c2d2ff"> <!--style allows the manipulation or text, images, or backgrounds-->

    <h1 style="font-family:'Times New Roman'; color:#000000" align="center">
        
        Book Club Register

    </h1> 

     <center><!--center element allows photos to be centered-->


            <img src="book.jpg" align="middle" />
            
    </center>

    <br>
     <p align="center"><b><?php echo $message; ?></b></p>

<form style="text-align: center" action="register.php?action=register" method="POST">
 

  <div class="container">
  
  <br>
    
    <label for="firstname"><b>First Name</b></label>
    <br>
    <input type="text" placeholder="Enter First Name" name="firstname" required>
    <br><br>
    <label for="lastname"><b>Last Name</b></label>
    <br>
    <input type="text" placeholder="Enter Last Name" name="lastname" required>
    <br><br>
    <label for="email"><b>Email</b></label>
    <br>
    <input type="text" placeholder="Enter Email" name="email" required>
    <br><br>
    <label for="password"><b>Password</b></label>
    <br>
    <input type="text" placeholder="Enter Password" name="password" required>
    <br><br>

  </div>

  <div class="container">
  <br>
    <button type="submit">Register</button>
    <br><br>
    <span class="register"><a href="login.php">Back To Login</a></span>
  </div>
</form>


</body>


</html>
