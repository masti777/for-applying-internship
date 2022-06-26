<html>
    <head>
    <title>NERD PLC</title>
    <link rel ="stylesheet" type="text/css" href="pretty.css">
    </head>
    <body> 
    <header>
    
    <h1>NERD PLC</h1>
    
    <div class="top">
    
    
    
    <nav>
    <img class ="logo" src="logo.PNG">
    <ul>
    <li><a href="home.php">HOME</a></li>
    
    <li><a href="user.php">USER</a></li>
    
		<li><a href="adminlog.php">ADMIN LOGIN</a></li>
        <li ><b><a href="login.php"><b>LOGOUT</b></a></li>
        
    </ul>
</nav>
</div>

<center>
<br><br><br><br><br>
<h3>ADD INFORMATION ABOUT YOURSELF</h3><br />
<div>
<form name="add" action="linkfile.php" method="post" onsubmit="return validateform();">
    <label for="first_name"><b>FIRST NAME</b></label><br>
    <input type="text" id="first_name" required name="first_name" placeholder="enter your first name"  /> <br /><br />
		<label for="email_address"><b>EMAIL</b></label><br>
    <input type="label"  required name="email_address" placeholder="enter your email address"/> <br /> <br />
	<label for="github_username"><b>GITHUB USERNAME</b></label><br>
    <input type="label" id="github_username" required name="github_username" placeholder="enter github username"/> <br /> <br />
    <label for="department"><b>DEPARTMENT</b></label><br>
    <input type="text" id="department" required name="department" placeholder="enter your department"  /> <br /><br />
	<label for="gpa"><b>GPA</b></label><br>
    <input type="label" id="gpa" required name="gpa" placeholder="enter your gpa"  /> <br /><br />
		<label for="pdf"><b>PDF</b></label><br>
    <input type="file" id="pdf" required name="pdf" accept=".pdf,.doc ,.jpg,.png, .zip" placeholder="enter your cv"  /> <br /><br />
    <button type="submit" onclick="ifValueEmpty()" onclick="ifhavevalue()">ADD</button><br><br>
    </form>
    </div>
    </center>
</body>
</header>
<footer>
<h2>&copy; copy right reserved.</h2>
<p>coder and designer<br>masti and kidi</p>
</footer>
</html>
