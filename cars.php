<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css" class="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Book A Trip</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0; margin: 0;  border: 0;">
        <a class="navbar-brand" href="indextt.html">Travel.</a>
        <button
          class="navbar-toggler"
          type="button"
          style=" width: 100px; "
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button >
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="float: right;">
          <div class="navbar-nav">
            <!-- <a class="nav-item nav-link active" href="indextt.html"
              >Travel. <span class="sr-only">(current)</span></a
            > -->
            <a class="nav-item nav-link" href="indextt.html">Home</a>
            <a class="nav-item nav-link" href="events.html">Events</a>

            <a class="nav-item nav-link" href="Find A Trip.html">Find a Trip</a>
            <a class="nav-item nav-link" href="cars.html">Vehicles</a>
            <!-- <a class="nav-item nav-link" href="Guest.html">About</a> -->
            <!-- <a class="nav-item nav-link" href="inspiration.php">Inspiration</a> -->
          </div>
        </div>
        <div class="form-inline">

          
          <a href="signup.html"><button style="color:black" class="btn btn-outline" type="submit"><i class="fas fa-user"></i>Sign Up</button></a>
          <a href="login.html"><button style="color:black" class="btn btn-outline" type="submit"><i class="fas fa-sign-in"></i>Log In</button></a>
        </div>
      </nav>

    <div>
        <div class="container">

            <div  id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner" >
                <div class="item active" >
                  
                  <img src="Pictures/cars2.jpg" alt="Los Angeles" style="height: 550px; width: 100%;  ">
                  <div class="carousel-caption d-none d-md-block">
                  
  
                  </div>
                
                </div>
  
          
                <div class="item" >
                  <img src="Pictures/cars3.jpg" alt="Chicago" style=" height: 550px;width:100%;  ">
                  <div class="carousel-caption d-none d-md-block">
                 
                  </div>
                </div>
              
                <!-- <div class="item" >
                    <img src="pictures/cars4.jpg" alt="Chicago" style="width:100%;  ">
                    <div class="carousel-caption d-none d-md-block">
                      <h4 style="font-weight:bolder; font-size: 250%; ">Your Dates. Your Destinations. <br> Our Planning and Expertise</h4>
                      <p style="font-weight:bold; font-size: 120%; ">Your one-stop resource for all-encompassing personalized trips <br> for you and your companions to anywhere you want to go using private or commercial air.
                      </p>
                    </div>
                  </div> -->

                  <div class="item" >
                    <img src="Pictures/cars1.jpg" alt="Chicago" style="height: 550px; width:100%;  ">
                    <div class="carousel-caption d-none d-md-block">
                      
                    </div>
                  </div>
               
              </div>
          
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
 
      

    <section class="booking">

        <h1 class="heading">book your trip</h1>

        <form action="book_form.php" method="POST" class="book-form">

            <div class="flex">

                <div class="inputBox">
                    <span>Pick a City :</span>
                    <input type="text" placeholder="City" name="name">

                </div>

                <div class="inputBox">
                    <span>First name :</span>
                    <input type="text" placeholder="First name" name="email">

                </div>

                <div class="inputBox">
                    <span>Category:</span>
                    <input type="number" placeholder="Car Type" name="phone">

                </div>
                <div class="inputBox">
                    <span>Last name:</span>
                    <input type="text" placeholder="Last name" name="address">

                </div> <br> <br>
                
                <div class="inputBox">
                    <span>Title :</span>
                    <input type="text" placeholder="Mr/Miss/Mrs/Ms" name="location">

                </div>

                <div class="inputBox">
                    <span> Number of guests:</span>
                    <input type="number" placeholder="number of guests" name="guests">

                </div>

                <div class="inputBox">
                    <span>Pick a Date :</span>
                    <input type="date" name="arrival">

                </div>
                <div class="inputBox">
                    <span>Phone:</span>
                    <input type="text" name="leaving">

                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">





        </form>

    </section>



    </div>



















    <section class="footer">


        <div class="box-container">


            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-home"></i> Home</a>
                <a href="event.php"><i class="fas fa-calendar"></i>Events</a>
                <a href="trip.php"><i class="fas fa-plane"></i>Find a trip</a>

            </div>

            <div class="box">
                <h3>Contact Us</h3>
                <a href="#"> <i class="fas fa-phone"></i> +233 50 707 88 99</a>
                <a href="#"><i class="fas fa-envelope"></i>info@adda.com</a>
                <a href="#"><i class="fas fa-map"></i>No 71 University Avenue Accra</a>
            </div>

            <div class="box">
                <h3>Follow Along<h3>
                        <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                        <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                        <a href="#"> <i class="fab fa-youtube"></i>youtube</a>


            </div>


        </div>
        <h1 style="text-align:center">Enriching Lives Through Travel</h1>



    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"></script>    <script type="javascript" src="script.js"></script>
</body>

</html>