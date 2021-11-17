
<?php
session_start();
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"banks");
if(!$con){
    die("Connection failed");

}
$_SESSION['user']=$_POST['user'];
$_SESSION['sender']=$_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
    <link rel="stylesheet" href="acustomer.css">



<!-- Including the bootstrap CDN -->
<link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    





</head>
<body onload="loader()">
<!-- loader for splash screen -->
<div id="loading">
    <div class="wrapper flex-center">
        <div class="container">
            <div class="container-dot dot-a">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-b">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-c">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-d">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-e">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-f">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-g">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-h">
            <div class="dot"></div>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><b>PARTNER BANK </b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transferrecords.php"><b>Transfer records</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewcustomers.php"><b>View Customers</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php"><b>Contact us</b></a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
  </ul>
  
 <!-- The slideshow -->
 <div class="carousel-inner">
    <div class="carousel-item ">
      <img src="img/1p3.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item ">
      <img src="img/1p5.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item active">
      <img src="img/1p1.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/1p2.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/1p4.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/1p6.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    


<div class="acustomer" style="margin:2%;">
<div class="row">
    <div class="col-sm" style="padding:1% 3%;">
 
    
    <div style="padding-top:2%;display:inline;"><h4 class="font-weight-bold" style="color:black;font-family: 'Copperplate Gothic Light';font-size:2em;;display:inline;margin:10px 5px 0px 5px;padding-top:1%">Customer Details</h4>
    </div>
        <br><br><br><br>
        <div style="font-size:1.2em;">
        <?php
        if (isset($_SESSION['user']))
        {
          $user=$_SESSION['user'];
          $result=mysqli_query($con,"SELECT * FROM customers WHERE Name='$user'");
          while($row=mysqli_fetch_array($result))
          {
            echo "<p><b class='font-weight-bold'>User ID</b> &nbsp;: ".$row['customer_id']."</p><br>";
            echo "<p name='sender'><b class='font-weight-bold'>Name&nbsp;&nbsp;</b>&nbsp;&nbsp;: ".$row['name']."</p><br>";
            echo "<p><b class='font-weight-bold'>Email ID</b> : ".$row['email']."</p><br>";
            echo "<p><b class='font-weight-bold'>Balance</b>&nbsp; :&nbsp;<b>&#8377;</b> ".$row['current_balance']."</p>";
          }         
        }
      ?>
      </div>
    </div>
    <div class="col-sm" style="padding:1% 3%;">
        <div >
                    <form action="transfer.php" method="POST">
                        
                    
                    <div style="padding-top:2%;display:inline;">
                    <span class="font-weight-bold" style="color:#000000;font-size:1.8em;line-height:1em;display:inline;margin:10px 5px 0px 5px;padding-top:1%">Money Transfer</span>
                    </div><br><br>
                    <b style="font-size:1.2em;">Sender :</b> : <span style="font-size:1.2em;"><input id="myinput" name="sender" disabled type="text" style="width:40%;border:none;" value='<?php echo "$user";?>'></input></span>

                        <br><br><br>
                        <b style="font-size:1.2em;">Select Reciever:</b>
                <select name="reciever" id="dropdown" required>
                    <option>Select Reciever</option>
                <?php
                $db = mysqli_connect("localhost", "root", "", "banks");
                $res = mysqli_query($db, "SELECT * FROM customers WHERE Name!='$user'");
                while($row = mysqli_fetch_array($res)) {
                    echo("<option> "."  ".$row['name']."</option>");
                }
                ?>
                </select>
                <br><br><br>
                        <b style="font-size:1.2em;">Amount to be transferred &#8377;:</b>
                        <input name="amount" type="number" style="width:35%;" min="100" required>
                        <br><br><br>
                        <button id="transfer"  name="transfer" class="btn btn-success" ><b>Transfer</b></button>
                        </form>
        </div>
    </div>
</div>

<br><br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">

 <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" >
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Partner Bank
          </h6>
          <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
           Ducimus, rerum. Voluptatibus nostrum iusto velit repudiandae asperiores
            veniam laboriosam!
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Product Services
          </h6>
          <p>
            <a href="#!" class="text-reset">Credit card</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Visa CC</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Easy Emi</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Speed Transfer</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Annual Charges</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New Delhi, NY 16612, India</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            partnerbank@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 859 674 5895</p>
          <p><i class="fas fa-print me-3"></i> + 985 664 2229</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Partner Bank :
    <a class="text-reset fw-bold" href="#"> Designed & Created By Yash K Tarale</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
setTimeout(function(){$('#loading').hide();}, 3000); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>


</html>










