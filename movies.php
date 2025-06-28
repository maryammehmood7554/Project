<?php include("includes/header.php"); ?>

<?php 
// Connect to movies database
$con = mysqli_connect("localhost", "root", "", "movies");
$select = "SELECT * FROM movies";
$runquery = mysqli_query($con, $select);

// Connect to trailers database
$con_trailer = mysqli_connect("localhost", "root", "", "trailers");
$query_trailers = "SELECT * FROM trailer";
$result_trailers = mysqli_query($con_trailer, $query_trailers);


$trailers = array();
while ($row = mysqli_fetch_assoc($result_trailers)) {
    $trailers[$row['name']] = $row['trailer_link'];
}

?>
<style>
   .head {
    font-size: 3rem;
            font-weight: bold;
            margin-top: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: white;
            font-family:garamond;
    background: linear-gradient(to right,rgb(101, 16, 16), rgb(255, 181, 181), rgb(101, 16, 16));
    border:2px solid white;
    text-align:center;
}
   iframe {
        display: block;
    margin: auto;
    width: 80%;
    max-width: 900px;
    height: 500px;
    border: 5px solid rgba(255, 255, 255, 0.5);
    border-radius: 15px;
    box-shadow: 0px 0px 40px rgba(255, 0, 0, 0.6);
        }

</style>
<div style="background-color:black;">
<!-- Page Header Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center text-white"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), 
            url('img/bg-color.jpg'); background-size: cover; background-position: center; 
            height: 500px; position: relative;">
            <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); 
            font-size: 5rem; font-weight: bold; color: white; font-family:georgia;">MOVIES</h1>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <!-- Filter Buttons -->
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 fs-4 active text-light" data-filter="*">All</li>
                    <li class="mx-2 fs-4 text-light" data-filter=".kids">For Kids</li>
                    <li class="mx-2 fs-4 text-light" data-filter=".adult">For Adults</li>
                </ul>
            </div>
        </div>

        <!-- Movies -->
        <div class="row g-4 portfolio-container">
            <?php 
            if(mysqli_num_rows($runquery) > 0) {
                while($data = mysqli_fetch_assoc($runquery)) { 
                    // Assign category class based on the database value
                    $category_class = ($data['category'] == 'kids') ? 'kids' : 'adult';
                    $movie_name = $data['value'];
                    $trailer_link = isset($trailers[$movie_name]) ? $trailers[$movie_name] : "#"; 
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item <?php echo $category_class; ?> wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden" style="box-shadow: 0 4px 8px black;">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo $data['image']; ?>" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="<?php echo $data['image']; ?>" 
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <button style="background-color:maroon;" class="btn text-light text-center"
        onclick="playTrailer('<?php echo $trailer_link; ?>')">
        Watch Trailer
    </button>
    <script>
    function playTrailer(trailerUrl) {
        document.getElementById('frame').src = trailerUrl;
        document.getElementById('frame').scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
</script>    
                        </div>
                    </div>
                    <div class="p-4" style="border:2px double white">
                        <h4 class="text-light mb-2"><?php echo $data['name']; ?></h4>
                        <h5 class="lh-base text-light mb-0"><?php echo $data['description']; ?></h5>
                    </div>
                </div>
            </div>
            <?php 
                } 
            } ?>
        </div>
    </div>
</div>
<!-- Projects End -->
</div>
<h1 class="head">The Trailer Will Begin Here</h1>
<iframe src=""frameborder="0" allowfullscreen name="trailer" id="frame"></iframe>

<?php include("includes/footer.php"); ?>
