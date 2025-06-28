<?php include("includes/header.php");?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade rounded shadow" data-bs-ride="carousel">
                
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <!-- Carousel Items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel.jpg" class="d-block w-100 rounded" alt="Slide 1">
                        <div class="carousel-caption d-none d-md-block bg-opacity-50 rounded p-2"style="background-color:black;">
                            <h5>Experience the Best Cinema</h5>
                            <p>Watch the latest movies in stunning quality.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" class="d-block w-100 rounded" alt="Slide 2">
                        <div class="carousel-caption d-none d-md-block bg-opacity-50 rounded p-2"style="background-color:black;">
                            <h5>Exclusive Premieres</h5>
                            <p>Catch the most anticipated movie releases.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" class="d-block w-100 rounded" alt="Slide 3">
                        <div class="carousel-caption d-none d-md-block bg-opacity-50 rounded p-2"style="background-color:black;">
                            <h5>Amazing Visuals</h5>
                            <p>Enjoy movies with breathtaking effects.</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<br><br><br>
<h1 class="display-5 mb-5 text-center text-light border border-5 border-dark"
style="font-family:garamond;background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(128, 0, 0, 0.8)); font-style:bold;  box-shadow: 2px 3px grey; ">
Highly Recommended Movies</h1>
<div class="container">
      
  <div class="row">
     <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden" style="box-shadow: 0 4px 8px black;">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/mufasa.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/mufasa.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <h5 class="text-light fw-medium mb-2">Mufasa</h5>
                            <p class="lh-base mb-0" style="color:white">The Lion King</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden" style="box-shadow: 0 4px 8px black;">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/actor-in-law.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/actor-in-law.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <h5 class="text-light fw-medium mb-2">Actor in Law</h5>
                            <p class="lh-base mb-0"style="color:white">The Pakistani socio-comedy film follows the life of a young lawyer with a flair for dramatics. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden" style="box-shadow: 0 4px 8px black;">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/spiderman.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/spiderman-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <h5 class="text-light fw-medium mb-2">Spiderman</h5>
                            <p class="lh-base mb-0"style="color:white"> "With great power, comes great responsibility" and "Hey, I'm Spider-Man!"</p>
                        </div>
                    </div>
                </div>
  </div>
</div>
<?php include("includes/footer.php");?>