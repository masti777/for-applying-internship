<html>
    <head>
    <title>NEW ERA RESEARCH AND DEVELOPMENT CENTER</title>
    <link rel ="stylesheet" type="text/css" href="newstore.css">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
	<style>
        body{
          background-color: silver;
        }
         h1{
             color:blue;
             text-align: center;
             font-style:italic;
         }    
        table{
            border:5px solid blue;
            width:1200px;
          
            margin-left:65px;
        }
        th{
            background-color:black;
            color:white;

        }
        td{
            padding:5px;
            background-color:gray;
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
    
    
	<li><a href="adminpage.php">ADMIN PAGE</a></li>
    
	
    
    
    

        <li ><b><a href="login.php"><b>LOGOUT</b></a></li>
        
    </ul>
</nav>
</div>
<br><br>

    <h1>ALL USERS</h1><br><br><br><br><br>
<?php
$conn=mysqli_connect('localhost','root','','intern');
$write="select *from file";
$read= mysqli_query($conn,$write);

?>
     <table>
          <tr>
              <th>first_name</th>
			  <th>email_address</th>
			  <th>github_username</th>		  
			  <th>department</th>
			  <th>gpa</th>
			  <th>pdf</th>
              
			                <th>Action</th>
          </tr>
         
              <?php

                   If(mysqli_num_rows($read)>0)
                   {
                     while($row=mysqli_fetch_array($read))
                     {  

                ?>
                 <tr>
                  <td><?php echo $row['first_name']; ?></td>
				  <td><?php echo $row['email_address']; ?></td>
                  <td><?php echo $row['github_username']; ?></td>				  			   
				  <td><?php echo $row['department']; ?></td> 
				  <td><?php echo $row['gpa']; ?></td>
				  <td><?php echo $row['pdf']; ?></td>
                  
                  <td>
                      <form method="POST" action="admin view users file.php">
                          <button name="delete" value="<?php echo $row['first_name']; ?>">Delete</button>
                        </form>
                  </td>
 
                 </tr>

                <?php


                }
                }
                else{
                    echo "no data is available";
				}
                
				                if(isset($_POST['delete'])){

                    $first_name=$_POST['delete'];
                    $sql = "DELETE FROM file WHERE first_name='$first_name'";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                    echo "<script>alert('files Successfully Deleted')</script>";
                    }
                    else{echo "<script>alert('files Not Deleted')</script>";}
                    }
					if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
          $query=mysqli_query($conn,$sql);

        }
                      <?php
      include 'db.php';

      $sql="SELECT pdf from pdf_file";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['pdf'] ; ?>" width="900" height="500">
    <?php
	}
                 ?>
     
       </table>
</body>
</header>
<footer>
<h2>&copy; copy right reserved.</h2>
<p>coder and designer<br>masti and kidi</p>
</footer>
</html>
