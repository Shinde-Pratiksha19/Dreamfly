<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>DreamFly Travelling Website</title>

</head>
<style>
    .tour {
        text-align: center;
        margin-top: 40px;
        margin-bottom: 50px;
        font-weight: bold;
    }
    .tour h2:after{
        content: '';
        position: absolute;
        left: 50%;
        /* bottom: 10px; */
        transform: translateX(-50%);
        height: 5px;
        width: 90px;
        border-radius: 2px;
        background-color: orange;
        margin-top: 40px;
    }
    .readmore{
        width: 150px;
        font-weight: bold;
    }

    .carousel-caption {
        color: #fff;
        text-shadow: -2px 2px 2px #000;
        font-weight: 600;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .gallery {

        margin: auto;
        margin-bottom: 30px;
        text-align: center;
        padding: 50px 0px;
        background: #efefef;

    }

    .gallery h2 {

        margin-bottom: 60px;
    }
    .gallery h2:after{
        content: '';
        position: absolute;
        left: 50%;
        /* bottom: 10px; */
        transform: translateX(-50%);
        height: 5px;
        width: 120px;
        border-radius: 1px;
        background-color: orange;
        margin-top: 40px;
    }

    .gallery-box img {
        width: 85%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        cursor: pointer;
        transition: 1S;
    }

    .gallery-box img:hover {

        transform: scale(1.1);
    }

    .gallery-box h4 {
        display: block;
        color: #fff;
        text-shadow: -2px 2px 2px #000;
        font-size: 20px;
        font-weight: 600;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .gallery-box {
        position: relative;
        margin-bottom: 30px;
        /* width: 350px; */

    }

    .btn-warning {
        margin: 10px;
    }
</style>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DreamFly</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"  href=" http://localhost/dreamfly/ome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/tour.php">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/book.php">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="bd-placeholder-img" src="https://source.unsplash.com/1550x500/?travel,adventure" atl="">
                <div class="carousel-caption  d-md-block">
                    <h2>Welcome To DreamFly</h2>
                    <p>choose your destination</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" src="https://source.unsplash.com/1550x500/?travel,temple,tree" atl="">
                <div class="carousel-caption  d-md-block">
                    <h2>Create a Beutiful Memory</h2>
                    <p>choose your destination</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" src="https://source.unsplash.com/1550x500/?travel,temple,forest" atl="">
                <div class="carousel-caption  d-md-block">
                    <h2>Create a Beutiful Memory</h2>
                    <p>choose your destination</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="tour">
        <h2>Top Destination</h2>
    </div>

   






    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg p-3 mb-5 bg-white rounded position-relative border border-dark">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">Most Popular Tours</strong>
                        <h3 class="mb-0">INDIA</h3>
                        <div class="mb-1 text-muted">Save 20%</div>
                        <p class="card-text mb-auto">India is the right place for wild safaris, desert safaris,
                            adventurous activities, spiritual places, and historical places of India.</p>
                            <a  href="http://localhost/dreamfly/tour.php" class="btn btn-warning readmore"  name="readmore">Read More</a>
                    </div>
                    <div class="col-auto  d-lg-block">
                        <img class="bd-placeholder-img" width="300" height="320"
                            src="img/T1.jpg" atl="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg p-3 mb-5 bg-white rounded position-relative border border-dark">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">Most Popular Tours</strong>
                        <h3 class="mb-0">FRANCE</h3>
                        <div class="mb-1 text-muted">Flash sale:20%</div>
                        <p class="mb-auto">France is the largest country in the European Union.Bounded by the Atlantic
                            Ocean and the Mediterranean Sea. </p>
                            <a  href="http://localhost/dreamfly/tour.php" class="btn btn-warning readmore"  name="readmore">Read More</a>
                    </div>
                    <div class="col-auto  d-lg-block">
                        <img class="bd-placeholder-img" width="300" height="320"
                            src="img/T2.jpg" atl="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg p-3 mb-5 bg-white rounded position-relative border border-dark">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">Most Popular Tours</strong>
                        <h3 class="mb-0">SCOTLAND</h3>
                        <div class="mb-1 text-muted">Save 20%</div>
                        <p class="card-text mb-auto">Scotland is generally seen as a destination with beautiful scenery
                            combined with thousands of historic sites and attractions.</p>
                            <a  href="http://localhost/dreamfly/tour.php" class="btn btn-warning readmore"  name="readmore">Read More</a>
                    </div>
                    <div class="col-auto  d-lg-block">
                        <img class="bd-placeholder-img" width="300" height="320"
                            src="img/t3.jpg" atl="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg p-3 mb-5 bg-white rounded position-relative border border-dark">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">Most Popular Tours</strong>
                        <h3 class="mb-0">LONDON</h3>
                        <div class="mb-1 text-muted">save 30%</div>
                        <p class="mb-auto">London is one of the leading tourist destinations in the world and in 2015
                            was ranked as the most visited city in the world</p>
                            <a  href="http://localhost/dreamfly/tour.php" class="btn btn-warning readmore"  name="readmore">Read More</a>
                    </div>
                    <div class="col-auto  d-lg-block">
                        <img class="bd-placeholder-img" width="300" height="320"
                            src="img/T4.jpg" atl="">

                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="gallery">
        <h2>Travelling Gallery</h2>
        <div class="container1">
            <div class="row">
                <div class="col-md-3">
                    <div class="gallery-box">
                        <img src="https://source.unsplash.com/800x700/?Beach,sea" atl="">
                        <h4>Leh Ladakh</h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="gallery-box">
                        <img src="img/G1.jpg" atl="">
                        <h4>Manali</h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="gallery-box">
                        <img src="img/G2.jpg" atl="">
                        <h4>Andaman</h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="gallery-box">
                        <img src="img/G3.jpg" atl="">
                        <h4>Paris</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container1">
            <div class="row">
                <div class="col-md-3">
                    <div class="gallery-box">
                        <img src="img/G5.jpg" atl="">
                        <h4>Goa</h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="gallery-box">
                        <img src="img/G6.jpg" atl="">
                        <h4>Kerala</h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="gallery-box">
                        <img src="img/G7.jpg" atl="">
                        <h4>Los Angeles</h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="gallery-box">
                        <img src="img/G8.jpg" atl="">
                        <h4>Provence</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <center>
            <p>© 2021–2022 travel, Inc.</p>
        </center>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</body>

</html>