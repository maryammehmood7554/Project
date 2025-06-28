<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "movies-registration");

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $movie = $_POST["movie"];
    $tickets = $_POST["tickets"];
    $seat=$_POST['seat'];
    $date_time=$_POST['date_time'];
    $restrictedMovies = ["bhoot-bangla", "umro_ayyar", "the-nun", "actor-in-law"];
    if ($age < 12 && in_array($movie, $restrictedMovies)) {
        header("location:registeration-form.php?error=You are too young to watch this movie.Please select an age-appropriate movie.");
        exit();
    } else {
        // Ensure session email is set and matches the provided email
        if (isset($_SESSION['email']) && $_SESSION['email'] === $email) {
            $sql = "INSERT INTO movies(name, email, age, movie, tickets,seat,date_time) 
            VALUES('$name','$email','$age','$movie','$tickets','$seat','$date_time')";
            if (mysqli_query($con, $sql)) {
                $_SESSION['movie']=$_POST['movie'];
header('location:trailer.php');

                exit();
            }
        } else {
            header("location:registeration-form.php?invalid=Invalid email detected! Kindly provide a valid address.");
            exit();
        }
    }
}
?>
