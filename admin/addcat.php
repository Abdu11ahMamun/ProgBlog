<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");	
        session_start();
	
?>
<?php 
//if($_SESSION['userRole']=='1'){ 
  //  echo "<script>window.location='index.php';</script>";
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
        <!--Navigation part starts-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li>
                <a class="navbar-brand" href="#">
                  <img src="../images/pro_logo.png" width="50" height="50" alt="">
                </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">User Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inbox.php">Inbox</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="postlist.php">Visit Website</a>
                </li>

                <li class="nav-item">
				<?php //if(Session::get('userRole')=='1'){ ?>
                    <a class="nav-link" href="adduser.php">Add User</a>
					<?php //} ?>
				
				</li>
                <li class="nav-item">
                    <a class="nav-link" href="userlist.php">User List</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
        <div class="container">
    <br>

           
                <h2>Add New Category</h2>
               <div class="block copyblock"> 
                   <?php
                   if (isset($_POST['name']) && !empty($_POST['name'])) {
                       $name = $_POST['name'];
                         $query = "INSERT INTO tbl_category(name)  VALUES ('$name')";  
                         $catinsert = mysqli_query( $connect, $query)
                         or die("Can not execute query");
                         if($catinsert)
                         {
                            echo "<span class='success'>Catergory Inserted Successfully </span>";
                         }
                         else
                         {
                            echo "<span class='error'>Catergory Not Inserted Successfully </span>";
                         }

                       
                   }else{
                        echo "<span class='error'>Field must not be empty! </span>";
                   }
                   ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
            
</body>
</html>

