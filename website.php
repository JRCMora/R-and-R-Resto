<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>R&R Resto</title>
	<!--
		
	TemplateMo 558 Klassy Cafe

	https://templatemo.com/tm-558-klassy-cafe

	-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/klassy-cafe-template1.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start *****  -->

    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="website.php" class="logo">
                            <img src="assets/images/logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#locate">Locate A Restaurant</a></li>
                            <li class="scroll-to-section"><a href="#bestquality">Best Quality Restaurant</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>R&R Resto</h4>
                            <h6>Locate A Restaurant!</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#locate">Locate Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                            <br>
                            <h3>
                            Our website is all about different kinds of restaurants. 
                            This website is programmed to find your desired restaurant. 
                            Our website will help you find the restaurant that suits your preferences.
                            </h3>
                        </div>
                        
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    <br />
    <hr />
    <br />
    <!-- Locate A Restaurant -->
    <section id="locate">
        <div>
            <h2 class="locateHeader">Locate A Restaurant</h2>
            <br />
            <form action="#locate" method="POST">
                            <b>Search Keyword:</b>
                            <input type="text" placeholder="Locate a Restaurant" name="search" class="input1"> <button type="submit" name="filter" class="button button">Filter</button><br><br>

                            <button class="button button1" name="brooklyn" type="submit">Brooklyn</button>
                            <button class="button button2" name="queens" type="submit">Queens</button>
                            <button class="button button3" name="manhattan" type="submit">Manhattan</button>
                            <button class="button button4" name="bronx" type="submit">Bronx</button>
                            <button class="button button5" name="staten" type="submit">Staten Island</button><br><br>
            </form>
            <table class="table table-bordered" id="locateTable">
                <?php
                include 'connection.php';
                $a = $colResto->aggregate([['$match' => (object) []]]);

                if (isset($_POST['filter'])) {
                    $searchBox = $_POST['search'];
                    $a = $colResto->aggregate([['$match' => ['$or' => [['name' => ['$regex' => $searchBox, '$options' => 'i']], ['cuisine' => ['$regex' => $searchBox, '$options' => 'i']]]]]]);
                }

                if (isset($_POST['brooklyn'])) {
                    $a = $colResto->find(['borough' => 'Brooklyn']);
                } else if (isset($_POST['queens'])) {
                    $a = $colResto->find(['borough' => 'Queens']);
                } else if (isset($_POST['manhattan'])) {
                    $a = $colResto->find(['borough' => 'Manhattan']);
                } else if (isset($_POST['bronx'])) {
                    $a = $colResto->find(['borough' => 'Bronx']);
                } else if (isset($_POST['staten'])) {
                    $a = $colResto->find(['borough' => 'Staten Island']);
                }       
                ?>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Borough</th>
                        <th>Cuisine</th>
                        <th>Address</th>
                        <th>Grades</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=0;
                        foreach ($a as $contentResto) {   
                            if($i>=30)
                            break;?>
                            <tr class="contentTable">
                                <td><?php echo $contentResto['name'] ?></td>
                                <td><?php echo $contentResto['borough'];  ?></td>
                                <td><?php echo $contentResto['cuisine'];  ?></td>
                                <td>
                                    <ul>
                                        <li><?php echo $contentResto['address']['building'];  ?></li>
                                        <li><?php echo $contentResto['address']['street'];  ?></li>
                                        <li><?php echo $contentResto['address']['zipcode'];  ?></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><?php echo $contentResto['grades']['0']['date'];  ?></li>
                                        <li><?php echo $contentResto['grades']['0']['grade'];  ?></li>
                                        <li><?php echo $contentResto['grades']['0']['score'];  ?></li>
                                    </ul>
                                </td>
                            </tr>
                    <?php
                        $i++;}
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Locate A Restaurant Ends -->
    <br />
    <hr>
    <br />
    
    <!-- Best Quality Restaurant -->
    <section id="bestquality">
        <div>
        <div>
            <h2 class="locateHeader">Best Quality Restaurants</h2>
            <br />
            <form action="#bestquality" method="POST">
                            <b>Search Keyword:</b>
                            <input type="text" placeholder="Locate a Restaurant" name="search" class="input1"> <button type="submit" name="filter" class="button button">Filter</button><br><br>
            </form>
            <table class="table table-bordered" id="locateTable">
                <?php
                include 'connection.php';
                $a1 = $colResto->aggregate([[
                    '$project' => [
                        'id' => 1, 'borough' => 1, 'cuisine' => 1,
                        'address' => 1, 'grades' => 1, 'name' => 1, 'sumScore' =>
                        ['$sum' => ['$sum' => '$grades.score']]
                    ],
                    ]]);
                        
                if (isset($_POST['filter'])) {
                    $searchBox = $_POST['search'];
                    $a1 = $colResto->aggregate([
                        [
                            '$project' => [
                                'id' => 1, 'borough' => 1, 'cuisine' => 1, 
                                'address' => 1, 'grades' => 1, 'name' => 1,
                                'sumScore' => ['$sum' => ['$sum' => '$grades.score']]
                            ]
                        ],
                        ['$match' => ['$or' => [['name' => ['$regex' => $searchBox, '$options' => 'i']], ['cuisine' => ['$regex' => $searchBox, '$options' => 'i']]]]]
                    ]);
                }
                ?>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Borough</th>
                        <th>Cuisine</th>
                        <th>Address</th>
                        <th>Grades</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=0;
                        foreach ($a1 as $contentResto) {   
                            ?>
                            <?php if ($contentResto['sumScore'] > 90) { 
                                if($i>=30)
                                break;?>
                            <tr class="contentTable">
                                <td><?php echo $contentResto['name'] ?></td>
                                <td><?php echo $contentResto['borough'];  ?></td>
                                <td><?php echo $contentResto['cuisine'];  ?></td>
                                <td>
                                    <ul>
                                        <li><?php echo $contentResto['address']['building'];  ?></li>
                                        <li><?php echo $contentResto['address']['street'];  ?></li>
                                        <li><?php echo $contentResto['address']['zipcode'];  ?></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><?php echo $contentResto['grades']['0']['date'];  ?></li>
                                        <li><?php echo $contentResto['grades']['0']['grade'];  ?></li>
                                        <li><?php echo $contentResto['sumScore'];  ?></li>
                                    </ul>
                                </td>
                            </tr>
                    <?php
                        $i++;}
                    }
            
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Best Quality Restaurant Ends -->
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="website.php"><img src="assets/images/logo2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.
                        
                        <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
            });
        });

    </script>
</html>