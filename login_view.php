<!DOCTYPE html>

<head>
    <title>Book Club</title>
</head>

<body style="background-color:#c2d2ff"> <!--style allows the manipulation or text, images, or backgrounds-->

    <h1 style="font-family:'Times New Roman'; color:#000000" align="center">
        
        Book Club

    </h1> 

     <center><!--center element allows photos to be centered-->


            <img src="book.jpg" align="middle" />
            
    </center>

    <br>
    <p align="center"><b>
      <?php echo $message;?>
    </b>
    </p>
<form style="text-align:center" action="login.php?action=validate" method="POST">
 

  <div class="container">
  
  <br>
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <br><br>

    <label for="password"><b>Password</b></label><br>
    <input type="text" placeholder="Enter Password" name="password" required>
    
    <br><br>

    <button type="submit">Login</button>

  </div>

  <div class="container">
  <br>
  <span class="register"><a href="register.php">Register</a></span>
  </div>
</form>


</body>


</html>
