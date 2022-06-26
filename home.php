<html>
    <head>
    <title>NEW ERA RESEARCH AND DEVELOPMENT CENTER</title>
    <link rel ="stylesheet" type="text/css" href="pretty.css">
	<style type="text/css">
.container {

    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    margin-top: -180px;
    
}

.container .content {
    min-height: 50vh;
      font-family: cursive;
    font-weight:bold;
    background:#ffffffc9 ;
    text-align: center;
    padding: -1200px;
    border-radius: 5px;
    box-shadow: 0 5px 10px #0000001a;
   
    width: 400px;
    margin-top: 100px;
}

.container .content .btn {
    display: inline-block;
    padding: 10px 30px;
    font-size: 15px;
    background:#39504e;
    color: #fff;
    margin: 0 5px;
    text-transform: capitalize;
}

.container .content .btn:hover {
    background: #c95512f3;
}
.container .content form table td{
    font-family: 'Poppins', sans-serif;
    
    padding: 10px 15px;
    font-size: 17px;
}
.container .content form table tr input{
    
    width: 100%;
    padding: 5px 5px;
    font-size: 17px;
 
    background: #eee;
    border-radius: 5px;
}
.container .content  span h2  {

    font-family: 'Poppins', sans-serif;
    background: brown;
    color: #fff;
   padding:5px 10px;
  
    
}
.container .content a{

font-family: 'Poppins', sans-serif;
color: brown;
padding:5px 10px;
text-decoration:none;

}

    </style>
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
	
	
	
</ul>
</nav>
</div>
<div class="slider">

</div>



<div class="container" align="center">
<div class="content">
<span><h2>User Login</h2></span>


<form method="post" action="log.php" onsubmit="return ifvalueEmpty()>
<table border="0" align="center" cellpadding="5" cellspacing="5">
<tr><td colspan="2" align="center"></td></tr>

<tr><td >Password : </td><td><input type="password" class="pwd" name="password" placeholder="Password" required id="password"required="required"><p></p><br></td></tr>
<tr><td >Email:<input name="email" type="email" class="name" placeholder="Email" required id="email" required="required"></td></tr>
<tr><td colspan="2" align="center"><input class="btn" type="submit" value="Login" /></td></tr>
</table>
</form>
<a href="SIGNUP1.php" >New User Click Here</a>
<br>
<br>
<a href="adminlog.php" >Admin Login</a>

</div>
</div>
</header>
<footer>
<h2>&copy; copy right reserved.</h2>
<p>coder and designer<br>masti and kidi</p>

</footer>
</body>
</html>