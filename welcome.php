<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location:login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome---<?php echo $_SESSION['username'];?></title>
    <link rel="icon" href="LoginSys/favicon.ico" type="image/x-icon">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@200..800&family=Noto+Sans+Kannada:wght@100&family=Tiro+Devanagari+Hindi&family=Tiro+Kannada&display=swap" rel="stylesheet">
    <style>
      #myIframe {
  position: fixed;
  bottom: 20px; /* Adjust the distance from the bottom */
  right: 20px; /* Adjust the distance from the right */
  width: 300px; /* Adjust the width of the iframe */
  height: 400px; /* Adjust the height of the iframe */
  border: none; /* Remove the border */
}

      /* Custom CSS to adjust padding */
    .navbar-nav {
      padding-left: 0; /* Remove default left padding */
    }
    .nav-item {
      padding-left: 0; /* Remove default left padding */
    }
    /* Custom CSS to increase padding size */
    .nav-link {
      padding: 15px 20px; /* Adjust padding size as needed */
    }
    .navbar-custom {
      background-color: #64b5f6 !important; /* Change the background color to #64b5f6 */
    }
    .logo img {
      max-width: 70px;
      margin-right: 10px;
    }
    /* Custom CSS for the floating window modal */
    .modal-header {
      background-color: #007bff;
      color: #fff;
    }
    .modal-body {
      padding: 20px;
    }
    /* Custom styles */
    #floating-calendar {
      position: fixed;
      top: 65%;
      right: 0;
      transform: translateY(-50%);
      background-color: #007bff;
      padding: 2px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .ui-datepicker-calendar td span.green {
      background-color: #007bff !important;
      color: #fff;
      border-radius: 50%;
      padding: 0 5px;
    }
    /* Custom CSS for the slideshow */
    .carousel-item {
      height: 500px; /* Adjust the height as per your requirement */
      position:relative;
    }
    .logo img {
            max-width: 70px;
            margin-right: 10px;
        }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.5); /* Adjust the opacity as needed */
    }
    .navbar-nav {
      padding-left: 0; /* Remove default left padding */
    }
    .nav-item {
      padding-left: 0; /* Remove default left padding */
    }
    /* Custom CSS to increase padding size */
    .nav-link {
      padding: 15px 20px; /* Adjust padding size as needed */
    }
    .navbar-custom {
      background-color: #64b5f6 !important; /* Change the background color to #64b5f6 */
    }
    #carouselExampleIndicators{
      margin-top: 75px;
    }
    .name{
      margin-top: 110px;
    }
    footer {
      background-color: #64b5f6;
      padding: 20px 0;
      text-align: center;
    }
    .samesize{
      width: 150px;
      height: 150px;
    }
    h4 {
    font-family: BioRhyme; /* Specify the font family */
    font-size: 36px; /* Specify the font size */
    font-weight: bold; /* Specify the font weight */
    color: #333; /* Specify the font color */
    /* You can add more styling properties as needed */
  }
  </style>
  </head>
  <body>
    <?php
    require 'partials/_nav.php'
    ?>
    <script src="script.js"></script>
    <script type="text/javascript">
      function googleTranslateElementInit() {
          new google.translate.TranslateElement(
              {pageLanguage: 'en'},
              'google_translate_element'
          );
      } 
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <div class="alert name" role="alert">
        <script src="script.js"></script>
    <script type="text/javascript">
      function googleTranslateElementInit() {
          new google.translate.TranslateElement(
              {pageLanguage: 'en'},
              'google_translate_element'
          );
      } 
    </script>
     <div class="modal fade" id="checkboxModal" tabindex="-1" role="dialog" aria-labelledby="checkboxModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="checkboxModalLabel">Checkboxes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
    <form action="">
        <div class="form-group">
            <label for="checkbox1">After breakfast</label>
            <input type="checkbox"  id="checkbox1">
        </div>
        <div class="form-group">
            <label for="checkbox2">After Lunch</label>
            <input type="checkbox"  id="checkbox2">
        </div>
        <div class="form-group">
            <label for="checkbox3">After dinner</label>
            <input type="checkbox"  id="checkbox3">
        </div>
    </form>
</div>

        </div>
      </div>
    </div>
  </div>

  <div id="floating-calendar" class="shadow rounded">
    <h5 class="text-center mb-3">Upcoming Checkups</h5>
    <input type="text" id="datepicker">
  </div>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <div id="google_translate_element"></div>
        <h4 class="alert-heading" style >Welcome  <?php echo $_SESSION['username'];?></h4>
        <p>
        <!-- <p> Welcome <?php echo $_SESSION['username'];?>  to HealthSync</p> -->
        </p>
        <hr />
        <!-- <p class="mb-0">
          You can log out whenver u feel like  to  <a href="/loginsys/logout.php">logout.</a> 
        </p> -->
      </div>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3">
        <nav class="navbar navbar-dark navbar-custom">
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="#">Create a New Profile</a></li> -->
            <li class="nav-item"><a class="nav-link" href="/loginsys/try.php">Add  a New Member</a></li>
            <li class="nav-item"><a class="nav-link" href="appointment.html">Book an Appointment</a></li>
            <li class="nav-item"><a class="nav-link" href="videoconsult.html">Online Consultation</a></li>
            <li class="nav-item"><a class="nav-link" href="pharmacy.html">Pharmacy</a></li>
            <li class="nav-item"><a class="nav-link" href="hospital.html">Hospitals</a></li>
            <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:5000">Upload Prescription</a></li>
            <li class="nav-item"><a class="nav-link" href="bp.html">Upload Vitals</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-9">
        <!-- Main Content Area -->
        <!-- Slideshow -->
<div id="carouselExampleIndicators" class="carousel slide" data-interval="2000" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div id="carouselExampleRide" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="logo.jpg" class="d-block w-100" alt="Slide 1">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <img src="slide2.jpg" class="d-block w-100" alt="Slide 2">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <img src="slide3.jpg" class="d-block w-100" alt="Slide 3">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <img src="slide4.jpg" class="d-block w-100" alt="Slide 4">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <img src="slide5.jpg" class="d-block w-100" alt="Slide 5">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <img src="slide6.jpg" class="d-block w-100" alt="Slide 6">
        <div class="overlay"></div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleRide" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleRide" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</div>
      </div></div></div>
        
      <section>
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <h1 class="text-center">What does our webpage provide?</h1>
              <p class="text-center">A super website catering to all the health needs from booking 
                  appointments, to managing prescriptions, ambulance, family doctor etc.</p>
          </div>
      </div>
  </div>
  </section>
  <section>
    <div class="container mt-5">
      <div class="row">
          <div class="col-md-4">
              <div class="rounded-box mb-4">
                  <img src="1-removebg-preview.png" class="img-fluid samesize" alt="Image 1" >
                  <div class="p-3">
                      <p><b>Get inspired by real-life success stories of individuals who have transformed their health and lives, and learn how you can do the same</b></p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="rounded-box mb-4 ">
                  <img src="2.jpg" class="img-fluid samesize" alt="Image 2">
                  <div class="p-3">
                      <p><b>Stay informed with our regular updates on the latest health trends, news, and breakthroughs in the world of wellness.</b></p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="rounded-box mb-4 ">
                  <img src="3-removebg-preview.png" class="img-fluid samesize" alt="Image 3">
                  <div class="p-3">
                      <p><b>Explore our interactive tools and resources designed to help you track your progress, set goals, and achieve optimal health.</b></p>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-4">
              <div class="rounded-box mb-4 ">
                  <img src="4.jpg" class="img-fluid samesize" alt="Image 4">
                  <div class="p-3">
                      <p><b>Join our vibrant community of health enthusiasts and embark on a journey towards a happier, healthier you</b></p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="rounded-box mb-4 ">
                  <img src="5.jpg" class="img-fluid samesize" alt="Image 5">
                  <div class="p-3">
                      <p><b>Join our vibrant community of health enthusiasts and embark on a journey towards a happier, healthier you</b></p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="rounded-box mb-4 ">
                  <img src="6.jpg" class="img-fluid samesize" alt="Image 6">
                  <div class="p-3">
                      <p><b>Empower yourself with the knowledge to lead a healthier life through our comprehensive health articles and expert advice.</b></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
    
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>&copy; 2024 Your Company. All rights reserved.</p>
          </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript and Bootstrap dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Your custom JavaScript -->
  <script>
    // JavaScript to handle profile actions
    $(document).ready(function() {
      // Event listener for "Create New Profile" link
      $("#create-profile-link").click(function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Redirect to the signup page
        window.location.href = "signup.html"; // Replace "signup.html" with your actual signup page URL
      });

      // Event listener for "Add New Member" link
      $("#add-member-link").click(function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Redirect to a page where user can add a new family member
        window.location.href = "add-member.html"; // Replace "add-member.html" with the URL of the page for adding family members
      });
    });
  </script>
  
  
  <iframe id="myIframe" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/55c5aa0a-3a24-4ecf-8a83-3cd8aae08c66"></iframe>


  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // JavaScript to handle profile actions
    $(document).ready(function() {
      // Event listener for "Create New Profile" link
      $("#create-profile-link").click(function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Redirect to the signup page
        window.location.href = "signup.html"; // Replace "signup.html" with your actual signup page URL
      });

      // Event listener for "Add New Member" link
      $("#add-member-link").click(function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Redirect to a page where user can add a new family member
        window.location.href = "add-member.html"; // Replace "add-member.html" with the URL of the page for adding family members
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#datepicker").datepicker({
        beforeShowDay: function(date) {
          var day = date.getDate();
          return [day === 15, 'green', '15th of the month'];
        },
        onSelect: function(dateText) {
          alert('Physical Checkup on ' + dateText);
        },
        dateFormat: "yy-mm-dd"
      });

      // Event listener for "Create New Profile" link
      $("#create-profile-link").click(function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Redirect to the signup page
        window.location.href = "signup.html"; // Replace "signup.html" with your actual signup page URL
      });

      // Event listener for "Add New Member" link
      $("#add-member-link").click(function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Redirect to a page where user can add a new family member
        window.location.href = "add-member.html"; // Replace "add-member.html" with the URL of the page for adding family members
      });
    });
  </script>
</body>
</html>
