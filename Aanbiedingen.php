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
              ?>
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
    <link rel="stylesheet" type="text/css" href="css/Aanbiedingen.css">
  </head>
	<body>
       <header>
          <section class="item-logo"> <a href="Homepage.php"><img src="images/Gietje2.0kaas.png" alt="Logo" height="80px"; width="80px";></a></section>
        <nav class="item-navbar">
            <ul>
                    
                       <li><a href="Producten.html">Producten</a></li>
                       <li><a href="Aanbiedingen.html">Aanbiedingen</a></li>
                       <li><a href="evenementen.php">Artiesten</a></li>
                       <li><a href="Contact.html">Contact</a></li>
                       <li><a href="Over ons.html">Over ons</a></li>
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
                       
              <main>
              <?php // stap 2, 3 en 4 
      $sql = "SELECT * FROM aanbiedingen";
      if($result = $conn->query($sql)) {
          while($row = $result->fetch_row()) {
            ?>
<div class="column">
      <div class="card">
      <img src="images/<?php echo $row[5];?>.jpg" alt="Jane" style="width: 100%;" height="320px">
        <div class="container">
        <br>
        <p><?php echo $row[1] ?></p> 
        <br>
        <p class="title">Geldig van: <?php echo $row[2]."<br>"."tot en met ".$row[3];?></p> 
        <br>


       <a href="aanbiedingdetails.php?id=<?php echo $row[0];?>"> <button class="button">Aanbieding bekijken</button></a>
         <br>
          <br>
        </div>
      </div>
    </div>

              </main>
          		
  </body>
</html>
<?php
          }
          $result->close();
      }
      // stap 5
      $conn->close();
  
   ?>