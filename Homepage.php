
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="J vd HAM">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/Homepage.css">
  </head>
	<body>
  <header>

  <section class="item-logo"> <a href="Homepage.php"><img src="images/Gietje2.0kaas.png" alt="Logo" height="80px"; width="80px";></a></section>
        <nav class="item-navbar">
            <ul>
                       <li><a href="Producten.html">Producten</a></li>
                       <li><a href="Aanbiedingen.html">Aanbiedingen</a></li>
                       <li><a href="Artiesten.html">Artiesten</a></li>
                       <li><a href="Over ons.html">Over ons</a></li>
                       <li><a href="Contact.html">Contact</a></li>
            </ul>
           </nav>
           <details class="item-hamburger">
        <summary >
            <h1>&#9776;</h1>
        </summary>
        <nav>
             <ul class="item-navigatie">
                <li><a href="Homepage.php">Homepage</a></li>
                <li><a href="Producten.html">producten</a></li>
                <li><a href="Artiesten.html">Artiesten</a></li>
                <li><a href="Aanbiedingen.html">Aanbiedingen</a></li>
                <li><a href="Over ons.html">Over ons</a></li>
                <li><a href="Contact.html">Contact</a></li>
             </ul>
        </nav>
    </details>
  </header>
  <div class="row">

     <?php
      //stap 1
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "energy2";
      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error) {
          die("Connection failed: "  . $conn->connect_error);
      }
     
            // stap 2, 3 en 4 
      $sql = "SELECT * FROM evenementen LIMIT 0,3";
      if($result = $conn->query($sql)) {
          while($row = $result->fetch_row()) {
  
              ?>
  
  <div class="column">
      <div class="card">
      <img src="images/<?php echo $row[5];?>.jpg" alt="Jane" style="width: 100%;" height="320px">
        <div class="container">
        <br>
          <p class="title"><img src="images/calender.png" height="20px" ; width="20px" ;><?php echo $row[1];?></p>
          <br>


       <a href="evenementdetails.php?id=<?php echo $row[0];?>"> <button class="button">Evenement bekijken</button></a>
         <br>
          <br>
        </div>
      </div>
    </div>
  
  <?php
          }
          $result->close();
      }
      // stap 5
      $conn->close();
  
   ?>
  
  
    </div>
    <canvas id="myCanvas">
      Your browser does not support the canvas tag.
    </canvas>
  
    <script>
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      ctx.fillStyle = "red";
      ctx.fillRect(20, 20, 75, 50);
  
  
      ctx.globalAlpha = 0.2;
      ctx.fillStyle = "blue";
      ctx.fillRect(50, 50, 75, 50);
      ctx.fillStyle = "green";
      ctx.fillRect(80, 80, 75, 50);
    </script>
  
    <canvas id="myCanvas2">
      Your browser does not support the canvas tag.
    </canvas>
  
    <script>
      var c = document.getElementById("myCanvas2");
      var ctx = c.getContext("2d");
      ctx.fillStyle = "red";
      ctx.fillRect(80, 20, 75, 50);
  
  
      ctx.globalAlpha = 0.2;
      ctx.fillStyle = "blue";
      ctx.fillRect(50, 50, 75, 50);
      ctx.fillStyle = "green";
      ctx.fillRect(20, 80, 75, 50);
    </script>
  
    <section id="item-strawberry">
      <div class="shadow"><img src="images/Strawberry.png" alt="Strawberry" height="300px" ; width="400px" ;></div>
  
    </section>
    <section class="item-blikjes">
      <img src="images/New Tropical.png" alt="Tropical" height="300px" ; width="400px" ;>
      <img src="images/Lemon.png" alt="Lemon" height="300px" ; width="400px" ;>
      <img src="images/Apple.png" alt="Apple" height="300px" ; width="400px" ;>
    </section>
  
  
  
  
  
  </body>
</html>