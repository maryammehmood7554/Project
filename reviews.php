<?php

$db_connect = mysqli_connect("localhost", "root", "", "reviews_ratings");
$select_reviews = "SELECT * FROM reviews";
$reviews = mysqli_query($db_connect, $select_reviews);



include("includes/header.php"); ?>
<!-- Testimonial Start -->
<style>
h5,p,span{
    color:white;
}
</style>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5"style="color:white;">What Our Customers Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <?php if(mysqli_num_rows($reviews) > 0) {
                while($data = mysqli_fetch_assoc($reviews)) { ?>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="https://img.freepik.com/premium-vector/boy-with-hoodie-that-says-hes-boy_1230457-43316.jpg?semt=ais_hybrid" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
               
                    <p><?php echo $data['name'];?></p>
                    <h5 class="mb-1"><?php echo $data['reviews'];?></h5>
                    <span class="fst-italic">Ratings:<?php echo $data['ratings'];?></span>
                </div>
            </div>
            <?php }}?>
           
        </div>
    </div>
</div>
<!-- Testimonial End -->
<?php include("includes/footer.php"); ?>