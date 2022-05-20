<?php
require_once('dbconfig.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
    or die("Can not connect");	
$i=1;
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
                <li class="nav-item ">
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

        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link  " href="home.php">Post list</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="catlist.php">Category List</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="userlist.php">User List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="examlist.php">Exam List</a>
                    </li>
                    
                  </ul>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="panel-title" >Exam List</h3>
                        <a href="add_exam.php" class="btn btn-success"  >Add Exam</a>
                    </div>
                </div>
            </div>
                    <table id="exam_data_table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Exam Title</th>
                                <!-- <th>Question</th> -->
                                <th>Create Date</th>
                                <th>Question</th>
                                <th>Solution</th>
                                <th>points</th>
                                <th>Action</th>
                             
                            </tr>
                        </thead>
                        <tbody>


                        <?php
	//Category Delete
	if (isset($_GET['delexamid'])){
		$delid= $_GET['delexamid'];
	
        $delquey = mysqli_query( $connect, "DELETE from exam_table where exam_id='$delid' ")
		or die("Can not execute query");
        
	
		if( $delquey )
				{
				echo "<span class='success'>Post Deleted Successfully </span>";
				}
				else
				{
				echo "<span class='error'>Post Not Deleted  ! </span>";
				}
	}
?>
                       
<?php
error_reporting(0);

$link = mysqli_connect("localhost", "root", "", "tbl_blog");
$status = 'OK';
if (mysqli_connect_errno()) {
    $status = 'ERROR';
    $content = mysqli_connect_error();
}

$query = "SELECT * from exam_table ORDER By exam_datatime DESC;";

if ($result = mysqli_query($link, $query)) {
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {


?>

<tr >
    
<td><?php echo $i; ?></td>
<td><?php echo $row['exam_title']; ?></td>
<td><?php echo $row['exam_datatime']; ?></td>
<td><?php echo $row['question']; ?></td>
	<td><?php echo $row['solution']; ?></td>
	<td><?php echo $row['point']; ?></td>

<td><a href="viewexam.php?viewexamid=<?php echo $row['exam_id']; ?>">View</a> 
||<a href="editexam.php?editexamid=<?php echo $row['exam_id']; ?>">Edit</a> 
|| <a onclick="return confirm('Are you sure to Delete this post?')" href="?delexamid=<?php echo $row['exam_id']; ?>">Delete</a>
</td> 
</tr>

<?php// } } ?>

<?php     }
}
//$data = ["status" => $status, "content" => $content];

header('Content-type: application/json');
echo json_encode($data); // get all products in json format.
?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
          </div>
    </div>




</body>
</html>