<?php

$con=mysqli_connect("localhost","root","","movies-registration");
if($_GET["users"]){
    $get_update=$_GET["users"];
    $select="SELECT*FROM movies WHERE id = $get_update";
    $run= mysqli_query($con, $select);
   $data=mysqli_fetch_assoc($run);
    //print_r($data);

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $movie = $_POST["movie"];
    $tickets = $_POST["tickets"];
    $seat=$_POST['seat'];
    $date_time=$_POST['date/time'];

    $update="UPDATE movies SET name='$name', email='$email',
     age= '$age',movie='$movie',tickets='$tickets',seat='$seat',date_time='$date_time' WHERE id= $get_update";
    $runquery=mysqli_query($con, $update);
    if($runquery){
        header("location:admin_dashboard.php");
    };
};
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Poppins:wght@300;400&display=swap');

    body {
        background: radial-gradient(circle, #2a0000, #000); /* Dark cinematic feel */
        font-family: 'Poppins', sans-serif;
        
        overflow: auto;
    }

    /* Curtain Animation */
    .curtain {
        position: fixed;
        top: 0;
        width: 50%;
        height: 100%;
        background: maroon;
        z-index: 10;
        transition: all 1.5s ease-in-out;
    }

    .curtain-left {
        left: 0;
    }

    .curtain-right {
        right: 0;
    }

    /* Move curtains out of view after animation */
    .open .curtain-left {
        transform: translateX(-100%);
    }

    .open .curtain-right {
        transform: translateX(100%);
    }

    /* Spotlight Effect */
    .spotlight {
        position: fixed;
        top: 50%;
        left: 50%;
        width: 150%;
        height: 150%;
          transform: translate(-50%, -50%);
        z-index: 1;
    }

    /* Form Styling */
    .form-container {
        position: relative;
        max-width: 500px;
        background: rgba(255, 255, 255, 0.9); /* Light contrast */
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0px 10px 20px rgba(255, 255, 255, 0.2);
        text-align: center;
        transform: scale(0.9);
        transition: transform 1s ease-in-out;
        z-index: 2;
    }
    .form-container {
    position: relative;
    max-width: 500px;
    background: rgba(255, 255, 255, 0.9); /* Light contrast */
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 10px 20px rgba(255, 255, 255, 0.2);
    text-align: left;  /* Align text and inputs properly */
    transform: scale(0.9);
    transition: transform 1s ease-in-out;
    z-index: 2;
    width: 100%; /* Ensure responsiveness */
}

.open .form-container {
    transform: scale(1);
}

.form-container .form-label {
    font-weight: bold;
    color: black;
}

.form-container .form-control,
.form-container .form-select {
    display: block;
    width: 100%;
    background: white;
    border: 2px solid maroon;
    color: black;
}

.form-container .form-control:focus,
.form-container .form-select:focus {
    border-color: #800000;
    box-shadow: 0px 0px 10px maroon;
}

/* Adjust container for form */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;  /* Ensure full-screen centering */
}

    .open .form-container {
        transform: scale(1);
    }

    .button-danger {
        width: 100%;
        background: maroon;
        border: none;
        transition: all 0.3s;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 8px;
        padding: 12px;
    }

    .button-danger:hover {
        background: #800000;
        color: white;
        box-shadow: 0 0 15px maroon;
    }

    .movie-title {
        font-family: 'Cinzel', serif;
        font-size: 22px;
        background: linear-gradient(to right, maroon, black);
        color: white;
        padding: 10px;
        border-radius: 8px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        display: inline-block;
    }

    label {
        font-weight: bold;
        color: black;
    }

    .form-control, .form-select {
        background: white;
        border: 2px solid maroon;
        color: black;
    }

    .form-control:focus, .form-select:focus {
        border-color: #800000;
        box-shadow: 0px 0px 10px maroon;
    }
</style>

</head>
<body class="" style="background: linear-gradient(to bottom, #FFB3B3, #FFD9D9, #F5F5F5)">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
        <h5 class="movie-title" style="margin-left:30%">🎬 Edit Here</h5>
  
    <form action="" method="POST">  
    <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" name="name" value="<?php  echo $data['name']?>" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php  echo $data['email']?>" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" name="age"  min="3"value="<?php  echo $data['age']?>" placeholder="Enter your age">
            </div>
            <div class="mb-3">
                <label class="form-label">Select Movie</label>
                <select class="form-select" name="movie" >
                    <option value="" disabled selected>🎥 Select a Movie</option>
                    <option value="frozen">Frozen</option>
                    <option value="pathan">Pathan</option>
                    <option value="bhoot-bangla">Bhoot Bangla</option>
                    <option value="spiderman">Spiderman</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="mufasa">Mufasa</option>
                    <option value="the-nun">The Nun</option>
                    <option value="bee">Bee Movie</option>
                    <option value="jungle-book">The Jungle Books</option>
                    <option value="actor-in-law">Actor In Law</option>
                    <option value="kung-fu-panda">Kung Fu Panda</option>
                    <option value="minions">Minions</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">No. of Tickets</label>
                <input type="number" class="form-control"value="<?php  echo $data['tickets']?>" name="tickets" min="1"  placeholder="Choose tickets">
            </div>
            <div class="mb-3">
    <label class="form-label">Seat Category</label>
    <select class="form-select" id="seat" name="seat" required>
        <option value="" disabled selected>Select a Seat Category</option>
        <option value="premium">Premium</option>
        <option value="standard">Standard</option>
        <option value="economy">Economy</option>
    </select>
</div>

            <div class="mb-3">
                <label class="form-label">Date&Time Of Movie</label>
                <select class="form-select" name="date/time" required>
        <option value="" disabled selected>Select a Date&Time For Movie</option>
        <option value="6/7/25 & 6:00 PM">6/7/25 & 6:00 PM</option>
        <option value="4/7/25 & 9:00 PM">4/7/25 & 9:00 PM</option>
        <option value="5/7/25 & 5:00PM">5/7/25 & 5:00PM</option>
    </select>
            
            </div>
            <button type="submit" class="button-danger btn" name="submit">Book Now</button>
    
    </form>
</div>
</div>  
</body>
</html>