<?php 
$con = mysqli_connect("localhost", "root", "", "reviews_ratings");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$reviews=$_POST['reviews'];
$ratings=$_POST['ratings'];
$sql = "INSERT INTO reviews(name,reviews, ratings) VALUES('$name','$reviews','$ratings')";
if (mysqli_query($con, $sql)) {
header("location:reviews.php?Thankyou For Your Reviews");
exit();
    }
}



include("includes/header.php");
?>
 <!-- About Start -->
<style>
 .review-container {
    background: #ffe6e6;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 60%;
    margin: 20px auto;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background: #ff6666;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background: #cc0000;
}

.star:hover {
    transform: scale(1.2);
}

.star.clicked {
    color: red !important;
    pointer-events: none; 
}
</style>
 <div class="container-fluid" style="background: url('img/bg.jpg') no-repeat center center fixed;
background-size: cover; opacity:0.7; my-5; px-lg-0;">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4 text-light">Cinepax – The Ultimate Movie Experience</h1> 
                        </div>
                        <p class="mb-4 pb-2 text-light" style="font-size:20px">
Cinepax is your premier destination for an unparalleled cinematic experience. With state-of-the-art screens, immersive sound systems, and luxurious seating, 
we bring the magic of movies to life. Whether you're watching the latest blockbuster, an action-packed thriller, or a heartwarming drama, Cinepax ensures every moment is unforgettable.
Enjoy a wide selection of snacks, from classic buttery popcorn to gourmet treats, making your movie night even more
 special. Our theaters are designed for comfort and convenience, offering online booking, VIP lounges, and private screening options.
Step into Cinepax and let the world of cinema captivate you!</p>
                          <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center" style="background-color: #FFB3B3; width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-danger"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-danger mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0 text-light">Happy Clients</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center" style="background-color: #FFB3B3; width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-danger"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-danger mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0 text-light">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="movies.php" class="btn btn-danger py-3 px-5">Explore More</a>

    
<div class="container-box"> 
    <?php if (isset($_GET['msg'])) { ?>
      <div class="alert alert-success d-flex align-items-center justify-content-between" role="alert">
        <div>
          <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
<?php }?>
    </div>
 <div class="review-container">
    <h2>⭐ Leave a Review</h2>

<form action="" method="post">
    <input type="text" name="name" placeholder="Enter Your Name Here"><br>
    <input type="textarea" name="reviews" placeholder="Enter Your Reviews Here"><hr>
   <div id="stars">
        <a onclick="rate(1)"><i class="fa-solid fa-star star" id="star1"></i></a>
        <a onclick="rate(2)"><i class="fa-solid fa-star star" id="star2"></i></a>
        <a onclick="rate(3)"><i class="fa-solid fa-star star" id="star3"></i></a>
        <a onclick="rate(4)"><i class="fa-solid fa-star star" id="star4"></i></a>
        <a onclick="rate(5)"><i class="fa-solid fa-star star" id="star5"></i></a>
      </div>

    <p>Ratings <span id="total">0</span></p>
    <input type="hidden" name="ratings" id="ratings-input" value="0">


    <script>
        let currentRating = 0;

    function rate(selected) {
      if (selected === currentRating) {
        currentRating -= 1;
      } else {
        currentRating = selected;
      }

      for (let i = 1; i <= 5; i++) {
        const star = document.getElementById("star" + i);
        if (i <= currentRating) {
          star.classList.add("clicked");
        } else {
          star.classList.remove("clicked");
        }
      }

      document.getElementById("total").innerText = currentRating;
      document.getElementById("ratings-input").value = currentRating;
    }
    

</script>
    <button name="submit">Submit</button>    
</div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<?php include("includes/footer.php");?>
