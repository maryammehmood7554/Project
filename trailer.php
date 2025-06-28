<?php
session_start();
if (!isset($_SESSION['movie']) || empty($_SESSION['movie'])) {
    header('Location: registeration-form.php');
    exit();
}
$movie = $_SESSION['movie']; 
$con = mysqli_connect("localhost", "root", "", "trailers");
$query = "SELECT * FROM trailer";
$result = mysqli_query($con, $query);
$trailers = array();
while ($row = mysqli_fetch_assoc($result)) {
    $trailers[$row['name']] = $row['trailer_link'];
}
$trailer = $trailers[$movie];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinepax</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
        body {
    margin: 0;
    padding: 0;
    background: linear-gradient(to bottom, #1a0000, #4b0000, #000000);
    font-family: 'Poppins', sans-serif;
    text-align: center;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.container-fluid {
    margin-top: auto;
    padding: 10px 0;
    background-color: maroon;
}

        /* Movie Title Styling */
        .movie-title {
            font-size: 3rem;
            font-weight: bold;
            margin-top: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: white;
            font-family:garamond;
    background: linear-gradient(to right,rgb(101, 16, 16), rgb(255, 181, 181), rgb(101, 16, 16));
    border:2px solid white;
         }
        /* Trailer Container */
        #trailer-container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            opacity: 0;
            transform: scale(0.9);
            animation: fadeInScale 1s ease-out forwards 1s;
        }

        iframe {
            width: 80%;
            max-width: 900px;
            height: 500px;
            border: 5px solid rgba(255, 255, 255, 0.5);
            border-radius: 15px;
            box-shadow: 0px 0px 40px rgba(255, 0, 0, 0.6);
        }

        /* Animation Effects */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
    </style>
</head>
<body>
    <br>
<div class="text-center">
    <a href="index.php?msg=Booking Successful!" class="btn btn-danger">
        ⬅ Go Back
    </a>
</div>

    <h1 class="movie-title">Now Playing: <?php echo ucfirst($movie); ?></h1>

    <div id="trailer-container">
    <?php if ($trailer == 'Not Available'): ?>
            <p class="error-message alert alert-danger">🚫 Trailer Not Available</p>
        <?php else: ?>
            <iframe src="<?php echo $trailer; ?>" frameborder="0" allowfullscreen></iframe>
        <?php endif; ?>       
</div>
<div class="container-fluid text-light" style="background-color:maroon">
            <div class="copyright  ms-5">
                <div class="row">
                    <div class="text-center text-md-start">
                        &copy; <a class="border-bottom text-light" href="#">Cinepax</a>, All Right Reserved.
                    </div>
                   
                </div>
            </div>
        </div>

</body>
</html>