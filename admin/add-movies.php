<?php 
$con = mysqli_connect("localhost", "root", "", "movies");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $category = $_POST['category'];

   
    $movie_name = $_POST['name'];
    $trailer = $_POST['trailer'];

    $sql_movie = "INSERT INTO movies (name, description, image, category,value) 
                  VALUES ('$name', '$description', '$image', '$category','$name')";
    

    $conn = mysqli_connect("localhost", "root", "", "trailers");

$sql_trailer = "INSERT INTO trailer (name, trailer_link) 
                    VALUES ('$movie_name', '$trailer')";
    if(mysqli_query($con, $sql_movie) && mysqli_query($conn, $sql_trailer)){
        header("Location: admin_dashboard.php?message=Record Created Successfully!");
        exit();
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinepax</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .form-label {
            font-weight: bold;
            color: maroon;
        }

        .form-control {
            border: 2px solid maroon;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: maroon;
            box-shadow: 0 0 5px rgba(128, 0, 0, 0.5);
        }

        .button-danger {
            background-color: maroon;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .button-danger:hover {
            background-color: #800000;
        }

        .mb-3 {
            margin-bottom: 15px;
        }
    </style>
</head>
<body class="" style="background: linear-gradient(to bottom, #FFB3B3, #FFD9D9, #F5F5F5)">

    <form action="" method="POST">  
        <div class="mb-3">
            <label class="form-label">Movie Name</label>
            <input type="text" class="form-control" name="name" required placeholder="Enter the movie name">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" required name="description" placeholder="Enter the movie description">
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="text" required class="form-control" name="image">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label><br>
            <input type="radio" name="category" required value="kids"> Kids
            <input type="radio" name="category" required value="adult"> Adult
        </div>
        <hr>
        <div class="mb-3">
            <label class="form-label">Trailer Link</label>
            <input type="text" class="form-control" name="trailer" placeholder="Enter the trailer link">
        </div>
        <button type="submit" class="button-danger btn" name="submit">Submit</button>
    </form>
</body>
</html>
/