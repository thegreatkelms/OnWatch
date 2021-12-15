<?php
    require_once('./config/dbconn.php');
    $db = new crud();
    $result=$db->view_book();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <title>First Term Exam</title>
</head>
<body>
        <header>    
			<div id="header">
				<div id="logo">
					<a href="adminhome.php"> <img id = "logopic" src = "img/logo.png" /></a>
				</div>
				<div id="navigation">
					<ul>
						<a href="viewbook.php"><li class="link">Booking</li></a>
						<a href="movies.php"><li class="link">Movie</li></a>
                        <a href="packages.php"><li class="link">Packages</li></a>
						<a href="login.php"><li class="link">Logout</li></a>
					</ul>
				</div>
			</div>
		</header>
    <div class="container py-5">
		<div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> Book Records </h2>
                    </div>
                    <div class="card-body">
                        <?php
                              $db->display_message(); 
                              $db->display_message();
                              $db->display_message();
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 10%"> ID </td>
                                <td style="width: 10%"> Name </td>
                                <td style="width: 10%"> Contact </td>
                                <td style="width: 10%"> Email </td>
                                <td style="width: 10%"> Movie Name </td>
                                <td style="width: 10%"> Date</td>
                                <td style="width: 10%"> Time </td>
                                <td style="width: 30%" colspan="2">Action</td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $data['id'] ?></td>
                                    <td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['contact'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['image_text'] ?></td>
                                    <td><?php echo $data['date'] ?></td>
                                    <td><?php echo $data['time'] ?></td>
                                    <td><a href="editbook.php?U_ID=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="delbook.php?D_ID=<?php echo $data['id'] ?>" class="btn btn-info">Delete</a></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>