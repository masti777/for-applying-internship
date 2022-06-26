
<html>
<head>
<title>NERD PLC</title>
<link rel ="stylesheet" type="text/css" href="pretty.css">
<script type="text/javascript">
        function ifValueEmpty() {
          if (document.getElementById('first_name').value == "") {
            alert('please enter your name');
            return false;
          }
		  if (document.getElementById('last_name').value == "") {
            alert('please enter your lastname');
            return false;
          }
          if (document.getElementById('password').value == "") {
            alert('please enter your password');
            return false;
          }
          if (document.getElementById('email').value == "") {
            alert('please enter your Email');
            return false;
          }
       
        }
      </script>

      <!--php-->
      
</head>
<body>
<header>

<h1>NEW ERA RESEARCH AND DEVELOPMENT CENTER</h1>

 <div class="top">
    
    
    <nav>
    <img class ="logo" src="logo.PNG">
    <ul>
    <li><a href="home.php">HOME</a></li>
	<li><a href="about.php">ABOUT</a></li>
    <li><a href="contact.php">CONTACT</a></li>
	<li><a href="login.php">LOGIN</a></li>
	
</ul>
</nav>
</div>


    <center>
               <div class="middle" align="center">
<br><br><br><br><br><br>
 <form method="POST" name="myform" action="usersignup.php" onsubmit="return ifValueEmpty()">

 FIRST NAME: <input type="text" name="first_name" placeholder="enter your first name" class="input" id="first_name"/>
 <br><br><br>
 
 LAST NAME:<input type="text" name="last_name" placeholder="enter your last name"  class="input" id="last_name"/>
 <br><br><br>

Email address:<input type="label" name="email_address" placeholder="someone@gmail.COM" class="input" id="email"/>
 <br><br><br>
PASSWORD:<input type="password" name="password"  class="input" id="password"/>
  <br><br><br>

   <br>
   <input type="submit" value="sign up" />
  
   <br>
 </b> </i> 
 
   </form>
</div>
           
    </center>
</body>
</header>
</html>