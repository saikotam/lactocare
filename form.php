<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Lactocare">
    <meta name="description" content="Helping mothers initiate and boost lactation the natural way since 40 yrs with approved and extensively tested products. Breastfeeding and breastmilk.">
    <meta name="keywords" content="Breastfeeding, breast milk, breastmilk, breast-milk, lactation, ayurvedic, natural, herbal, no side effects, mother, baby, shatavari, shunti, ela, tvag, cinnamon, asparagus, cardamum, ">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="5 days">
    
    <link rel="icon" href="img/favicon.ico">
    <title>LACTOCARE</title>
    
    <link rel="canonical" href="http://www.lactocare.ml/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Place your stylesheet here-->
    <link href="/css1.css" rel="stylesheet" type="text/css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-94FNK46C7W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-94FNK46C7W');
</script>
</head>

<body>
<div class="fixed-top"><img alt="design" src="/img/Picture1.svg" class="img-fluid"> </div>
<div class="fixed-bottom"><img alt="design" src="/img/Picture2.svg" class="img-fluid"></div>
<div class="fixed-bottom text-right"><img alt="yes yes logo" src="/img/Leaves.svg" class="leve"></div>

  
<nav class="navbar navbar-expand-md navbar-light fixed-top">
    
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-right" id="navbarsExampleDefault"  style="background-color: rgb(255,255,255,1);">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
                <a class="nav-link active" href="http://lactocare.ml">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="http://lactocare.ml/#ing">Ingredients<span class="sr-only">(current)</span></a>
            </li>
           <li class="nav-item">
                <a class="nav-link active" href="http://lactocare.ml/#bene">Benefits<span class="sr-only">(current)</span></a>
            </li>
            <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>-->
        </ul>
        
    </div>
</nav>
<div class="fixed-top"><a href="http://www.lactocare.ml/"><img alt="yes yes logo" src="/img/yes.svg" class="logo"> </a></div>     

    <main role="main" class="container">
     
<br>
<br>
<br>
<br>
<div class="shadow p-3 mb-5 bg-white rounded">
<?php
$name = $num = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    
  }
  if (empty($_POST["num"])) {
    $numErr = "Contact Number is required";
  } else {
    $num = $_POST["num"];
  }
}

$servername = "fdb29.awardspace.net";
$username = "3521067_nums";
$password = "S)n!}:9K4dIG8uGj";
$dbname = "3521067_nums";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$stmt = "INSERT INTO numb (name, num)
VALUES ('$name', '$num')";

if ($con->query($stmt) === TRUE) {
  echo "<h3>Thank You. We will ping you shortly.</h3>";
} else {
  echo "Error: " . $con->error;
}

$con->close();
 
?>

</div>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="text-centre"><h3>You can also:</h3>
            <p><a href="tel:+919533790847"><button type="button" class="btn btn-primary btn-lg">Call Us</button></a></p>
            <p><a href="https://api.whatsapp.com/send?phone=+919533790847&text=Hello%2c%20I%20am%20interested%20in%20Lactocare%20Granules.%20Please%20provide%20more%20details.&source=&data=&app_absent="><button type="button" class="btn btn-w btn-lg shadow p-3 rounded">Whatsapp Us</button></a></p>
            <p><a href="mailto:yesyespharmaceuticals@gmail.com"><button type="button" class="btn btn-primary btn-lg">Email Us</button></a></p>
            <p>+919533790847</p>
        </div>
        </div>


    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/scroll.js"></script>
</body>
</html>