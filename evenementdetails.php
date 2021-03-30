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
        $sql = "SELECT * FROM evenementen 
        LEFT JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id 
        LEFT JOIN locaties ON evenementen.locatie_id = locaties.locatie_id 
        WHERE evenement_id=".$_GET['id'];
        if($result = $conn->query($sql)) {
            $row = $result->fetch_row();
        }
           ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Sidney Kempers">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/evenementen.css">
	
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
  <body>

         
            <section class="item-evenementinfo">
            <img class="item-foto" src="images/<?php echo $row[5];?>.jpg" alt="afbeelding van het evenement" height="700px" width="1200px";>

            <article class="item-tijd">
                <h1><b>Datum & Tijd</b></h1>
                <p>
                  <?php
                    echo $row[1];
                  ?>
                 <br> <br> 
                 <h1><b>Locatie:</b></h1>
                 <br>
                  <?php
                       echo $row[15]."<br>". $row[16];
                  
                  ?>
                </p>
            </article>

            <article class="item-artiest">
                <h1>Artiest:</h1>
                <p>
                  <?php
          
                        echo $row[7];
                      
                  ?>                              
                </p>
                    </article>

          <article class="item-mobile-info">
            <h1><b>Datum & Tijd</b></h1>
                
                  <?php
                        echo $row[1];
                  ?>
                 <br> <br> 
                 <h1><b>Locatie:</b></h1>
                 <br>
                  <?php
                       echo $row[15]."<br>". $row[16];
                  
                  ?>
                  <h1>Artiest:</h1>
                  <?php
                        echo $row[7];
                      
                  ?>
            </articcle>
            </section>
       
      
    </body>
	</body>
</html>
<?php      
              
            $result->close();
        
        // stap 5
        $conn->close();
    
     ?>