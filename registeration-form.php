<?php 
session_start();
if(!isset($_SESSION['email'])){
    header("location: login.php");
    exit(); 
}
include("includes/header.php"); 
?>
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
    background: rgba(255, 255, 255, 0.9); 
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 10px 20px rgba(255, 255, 255, 0.2);
    text-align: left;  
    transform: scale(0.9);
    transition: transform 1s ease-in-out;
    z-index: 2;
    width: 100%;
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
        background: black;
        color:white;
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
        color:white;
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
<body onload="openCurtains()">

<!-- Curtain Effect -->
<div class="curtain curtain-left"></div>
<div class="curtain curtain-right"></div>

<!-- Spotlight Background -->
<div class="spotlight"></div>

<!-- Form Section -->
 <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
        <h5 class="movie-title ms-5">🎬 Book Your Movie Ticket </h5>
 <!-- Error Message -->
 <?php if (isset($_GET['error'])) { ?>
 
    <div class="alert alert-danger d-flex align-items-center" role="alert">
  <i class="bi bi-exclamation-triangle-fill me-2"></i>
  <?php echo $_GET['error']; ?>
</div>
    <?php } ?>
    
    <?php if (isset($_GET['invalid'])) { ?>
 <div class="alert alert-danger d-flex align-items-center" role="alert">
<i class="bi bi-exclamation-triangle-fill me-2"></i>
<?php echo $_GET['invalid']; ?>
</div>
 <?php } ?>
       <!-- registration form  -->   
       <form action="register-process.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" name="name" required placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" name="age" required min="3" placeholder="Enter your age">
            </div>
            <div class="mb-3">
                <label for="movie" class="form-label">Select Movie</label>
                <select class="form-select" id="movie" name="movie" required>
                    <option value="" disabled selected>🎥 Select a Movie</option>
                    
                    <?php 
        
        $con = mysqli_connect("localhost", "root", "", "movies");
        $query = "SELECT value, name FROM movies";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['value'] . '">' . $row['name'] . '</option>';
        }
        ?>
    </select>
</div>

            <div class="mb-3">
                <label class="form-label">No. of Tickets</label>
                <input type="number" class="form-control" name="tickets" min="1" required placeholder="Choose tickets">
            </div>
            <div class="mb-3">
                <label class="form-label">Seat Category</label>
                <select class="form-select" id="seat" name="seat"  style="font-family:'Times New Roman', monospace; 
                width: 260px; font-weight:700;"required>
                    <option value="" disabled selected>Select a Seat Category</option>
                    <option value="premium">Premium &nbsp;&nbsp;&nbsp; (1200PKR)</option>
                    <option value="standard">Standard &nbsp;&nbsp;&nbsp; (950PKR)</option>
                    <option value="economy">Economy &nbsp;&nbsp;&nbsp; (700PKR)</option>
                </select>
</div>
<div class="mb-3">
                <label class="form-label">Date&Time Of Movie</label>
                <select class="form-select" name="date_time" required>
                    <option value="" disabled selected>Select a Date&Time For Movie</option>
                    <option value="6/7/25 & 6:00 PM">6/7/25 & 6:00 PM</option>
                    <option value="4/7/25 & 9:00 PM">4/7/25 & 9:00 PM</option>
        <option value="5/7/25 & 5:00PM">5/7/25 & 5:00PM</option>
    </select>
    
</div>

            
            <button type="submit" class="button-danger btn" name="submit">Book Now</button>
        </form>
        <!-- registration form end -->
    </div>
</div>
<script>
    function openCurtains() {
        document.body.classList.add("open");
    }
</script>
<div class="container-fluid text-light" style="background-color:maroon">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-light" href="#">Cinepax</a>, All Right Reserved.
                    </div>
                   
                </div>
            </div>
        </div>
 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    

    
</body>

</html>