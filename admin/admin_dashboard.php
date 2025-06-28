<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:../login.php");
    exit();
}
$con = mysqli_connect("localhost", "root", "", "movies-registration");
$select = "SELECT * FROM movies";
$runquery = mysqli_query($con, $select);
$conn= mysqli_connect("localhost", "root", "", "movies");
$selectt = "SELECT * FROM movies";
$query = mysqli_query($conn, $selectt);

$connect= mysqli_connect("localhost", "root", "", "login");
$Select = "SELECT * FROM login";
$login = mysqli_query($connect, $Select);

$db_connect = mysqli_connect("localhost", "root", "", "reviews_ratings");
$select_reviews = "SELECT * FROM reviews";
$reviews = mysqli_query($db_connect, $select_reviews);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
    <title>Cinepax</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            display: flex;
        }
        .sidebar {
            width: 260px;
            height: 100vh;
            background: linear-gradient(to right, #4a0c2c, #000000);
            color: white;
            padding: 20px;
            position: fixed;
            transition: all 0.3s;
        }
        .sidebar h4 {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
            transition: 0.3s;
            margin-left:10px;
        }
        .sidebar a:hover {
            background: white;
            color: black;
        }
        .content {
            margin-left: 280px;
            padding: 30px;
            width: 100%;
        }
        .table{
            border-radius: 8px;
            overflow: hidden;
            border:4px solid maroon; 
        }
        .table th {
            background: linear-gradient(to right, #4a0c2c,rgb(58, 29, 29));
            color: white;
        }
        .btn-danger:hover {
            background: darkred;
        }
        .btn-warning:hover {
            background: grey;
        }
        h3{
            background: linear-gradient(to right, #4a0c2c, #000000);
            color:white;
            box-shadow:2 2 3 grey;
        }
    </style>
</head>
<body>
    <div class="sidebar">
    <i class="fa-solid fa-user fa-8x ms-5"></i>
        <h4 class="mt-3">🎬 Admin Panel</h4>
        <a href="#" onclick="show('login')">⬆️ Login</a>
        <a href="#" onclick="show('registration')">📋 Registrations</a>
        <a href="#" onclick="show('movies')">🎥 Movies</a>
        <a href="#" onclick="show('reviews')">📋 Reviews</a>
        <a href="logout.php">🚪 Logout</a>
    </div>

    <div class="content mt-3 me-3" id="login" style="display:none;" >
        <h3 style="font-family:georgia">⬆️ Login</h3>
        <div class="table-responsive">

        <table class="table table-bordered table-striped">
            <tr>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
             </tr>
            <?php if(mysqli_num_rows($login) > 0) {
                while($dataa = mysqli_fetch_assoc($login)) { ?>
                    <tr>
                        <td><?php echo $dataa['email']; ?></td>            
                        <td><?php echo $dataa['password']; ?></td>
                        <td><?php echo $dataa['role']; ?></td>
                    </tr>
                <?php } 
            } ?>
        </table>
        </div>
    </div>
   
    <div class="content mt-3 me-3" id="registration" style="display:none;">
    <h3 style="font-family: Georgia; display: flex; align-items: center; gap: 8px;">
    📋 <span style="color: white;">Registration</span>
</h3>
<div style="background:rgb(216, 214, 214); padding: 12px; border-radius: 8px; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
    <p style="margin: 0; font-size: 16px; font-weight: bold; color: #333;">
        Total Registered Users:
    </p>
    <h4 style="margin: 5px 0; color: #8B0000; font-size: 22px;">
        <?php echo $rows = mysqli_num_rows($runquery); ?>
    </h4>
</div>

<div class="table-responsive">

        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Movies</th>
                <th>Tickets</th>
                <th>Seat</th>
                <th>Date & Time</th>
                <th>Booking Date</th>
                <th colspan="2" class="text-center">Options</th>
            </tr>
            <?php if(mysqli_num_rows($runquery) > 0) {
                while($data = mysqli_fetch_assoc($runquery)) { ?>
                    <tr>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['age']; ?></td>
                        <td><?php echo $data['movie']; ?></td>
                        <td><?php echo $data['tickets']; ?></td>
                        <td><?php echo $data['seat']; ?></td>
                        <td><?php echo $data['date_time']; ?></td>
                        <td><?php echo $data['booking_date']; ?></td>
         <td><a href="delete.php?users=<?php   echo $data['id']?>" class="btn btn-danger">🗑 Delete</a></td>
      <td> <a href="update.php?users=<?php   echo $data['id']?>" class="btn btn-warning">✏ Update</a></td>
                       
                    </tr>
                <?php } 
            } ?>
        </table>
    </div>
        </div>    
 

    <div class="content  mt-3 " id="movies" style="display:none;">
    <div class="d-flex justify-content-between align-items-center mb-3 w-100">
    <h3 class="fw-bold text-maroon w-100">🎥 Movies Section</h3>
    <a href="add-movies.php" class="btn btn-warning fw-bold">+ Add Movies</a>
</div>   
<div class="table-responsive">

    <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Category</th>
                <th colspan="2" class="text-center">Options</th>
            </tr>
            <?php if(mysqli_num_rows($query) > 0) {
                while($info = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?php echo $info['name']; ?></td>
                        <td><?php echo $info['description']; ?></td>
                        <td><?php echo $info['image']; ?></td>
                        <td><?php echo $info['category']; ?></td>
                        
         <td><a href="delete-movie.php?movie=<?php   echo $info['id']?>" class="btn btn-danger">🗑 Delete</a></td>
      <td> <a href="update-movie.php?movie=<?php   echo $info['id']?>" class="btn btn-warning">✏ Update</a></td>

      
                       
                    </tr>
                <?php } 
            } ?>
        </table>
        </div>
    </div>

    
<div class="content mt-3 me-3" id="reviews" style="display:none;" >
        <h3 style="font-family:georgia">📋 Reviews Section</h3>

     
    <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Reviews</th>
                <th>Ratings</th>
            </tr>
            <?php if(mysqli_num_rows($reviews) > 0) {
                while($Data = mysqli_fetch_assoc($reviews)) { ?>
                    <tr>
                        <td><?php echo $Data['name']; ?></td>
                        <td><?php echo $Data['reviews']; ?></td>
                        <td><?php echo $Data['ratings']; ?></td>                
                    </tr>
                <?php } 
            } ?>
        </table>

    </div>

    <script>
        function show(section) {
            document.getElementById('login').style.display = 'none';
            document.getElementById('registration').style.display = 'none';
            document.getElementById('movies').style.display = 'none';
            document.getElementById('reviews').style.display = 'none';
            document.getElementById(section).style.display = 'block';
        }
    </script>
</body>
</html>