<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <title>Capstone</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Contact Us</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="surfboards.php">SurfBoards</a>
                <a class="dropdown-item" href="skateboards.php">Skateboards <span class="sr-only">(current)</span></a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>
    <?php
      echo '<h1>Skateboard Shop</h1>';
      echo '<div class="container">
      <div class="row" style="display: flex;">
        <div class="col-sm jumbotron d-block" style="position: relative; left: -20px;">
          <a class="swap" href="https://www.amazon.com/Krown-Sunset-Complete-Longboard-Skateboard/dp/B003YQTRT2/ref=sr_1_5?dchild=1&hvadid=78202819157856&hvbmt=bb&hvdev=c&hvqmt=b&keywords=krown%2Blongboard&qid=1606858480&sr=8-5&tag=mh0b-20&th=1" class="mb-4 h-100"><img width="300rem" height="700rem" src="images/Krown_Complete_Longboard_Skateboard_Flame.png" /><img width="300" height="300" src="images/Krown_Complete_Longboard_Skateboard_Flame_2.png" /></a>
            <p></p>
            <p>Name: Krown Complete Longboard Skateboard Flame</p>
            <p>Brand: Krown</p>
            <p>Material: Aluminum</p>
            <p>Color: Red/Black Flame</p>
            <p>Wheel size:	70 Millimeters</p>
            <p><strong>About this item</strong></p>
            <p>65mm wheels/<p>
            <p>Pintail shape</p>
            <p>Arrives assembled and ready to ride</p>
        </div>
        <div class="col-sm jumbotron d-block">
          <a class="swap" href="https://www.amazon.com/Krown-Sunset-Complete-Longboard-Skateboard/dp/B003DVATUE/ref=sr_1_5?dchild=1&hvadid=78202819157856&hvbmt=bb&hvdev=c&hvqmt=b&keywords=krown+longboard&qid=1606857744&sr=8-5&tag=mh0b-20" class="mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/Krown_Complete_Longboard_Skateboard_Woodset_SunSet.png" alt=""><img class="img-fluid img-thumbnail" src="images/Krown_Complete_Longboard_Skateboard_Woodset_SunSet_2.png" alt=""></a>
            <p>Name: Krown Complete Longboard Skateboard Wood SunSet</p>
            <p>Brand: Krown</p>
            <p>Material: Wood</p>
            <p>Color: Wood Sunset</p>
            <p>Durometer: Hardness 78A</p>
            <p>Item Weight: 6 Pounds</p>
            <p><strong>About this item</strong></p>
            <p>Canadian Maple Construction</p>
            <p>9-Inch x 43-Inch Pintail Shape</p>
            <p>Black 65mm 78a Wheels</p>
            <p>6" Silver Trucks</p>
            <p>Black Grip tape</p>
        </div>
        <div class="col-sm jumbotron d-block" style="position: relative; right: -20px;">
          <a class="swap" href="https://www.amazon.com/Krown-Sunset-Complete-Longboard-Skateboard/dp/B003DWE6KM/ref=sr_1_5?dchild=1&hvadid=78202819157856&hvbmt=bb&hvdev=c&hvqmt=b&keywords=krown%2Blongboard&qid=1606857744&sr=8-5&tag=mh0b-20&th=1" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/Krown_Complete_Longboard_Skateboard_Tidal_Wave.png" alt=""><img class="img-fluid img-thumbnail" src="images/Krown_Complete_Longboard_Skateboard_Tidal_Wave_2.png" alt=""></a>
            <p>Name: Krown Complete Longboard Skateboard Tidal Wave</p>
            <p>Brand: Krown</p>
            <p>Material: Maple</p>
            <p>Color: Tidal Wave</p>
            <p>Durometer: Hardness 78A</p>
            <p>Item Weight: 6 Pounds</p>
            <p><strong>About this item</strong></p>
            <ul>
            <p>Canadian Maple Construction</p>
            <p>9-Inch x 43-Inch Pintail Shape</p>
            <p>Black 65mm 78a Wheels</p>
            <p>6" Silver Trucks</p>
            <p>Black Grip tape</p>
        </div>
      </div>
    </div>';
    echo '<div class="container">
      <div class="row" style="display: flex;">
        <div class="col-sm jumbotron d-block" style="position: relative; left: -20px;">
          <a href="https://magnetoboards.com/kids-skateboard-checkered.html" class=" mb-4 h-100"><img id="skateboard_img" class="img-fluid img-thumbnail" src="images/Controller_Skateboard.png" alt=""></a>
          <p><strong>Deck</strong></p>
          <p>Material: Canadian Maple</p>
          <p>Dimensions: 27.5 x 7.75 inches</p>
          <p>FlexStiff</p>
          <p><strong>Trucks</strong></p>
          <p>Material: Gravity Cast Aluminum</p>
          <p>Width 5 inches</p>
          <p>Bushings: SHR - Medium Stiffness</p>
          <p><strong>Wheels</strong></p>
          <p>Material: SHR - High Rebound Urethane</p>
          <p>Size: 52mm</p>
          <p>Hardness: Shore 95A</p>
        </div>
        <div class="col-sm jumbotron d-block">
          <a class="swap" href="https://www.amazon.com/NPET-Skateboard-Complete-Canadian-Concave/dp/B071YYP2T4/ref=sr_1_1?crid=34I8IGRFM6XO5&dchild=1&keywords=flame+skull+skateboard&qid=1607375094&sprefix=flame+skull+%2Caps%2C292&sr=8-1" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/NPET_Fire_Skeleton.png" alt=""><img class="img-fluid img-thumbnail" src="images/NPET_Fire_Skeleton_2.png" alt=""></a>
          <p>Brand: NPET</p>
          <p>Material	Metallic deck PU wheels
          <p>Deck Length	31 Inches</p>
          <p>Color	01 Flame skulls</p>
          <p>Durometer Hardness	95A</p>
          <p>Load-Bearing: 220 LB.</p>
        </div>
        <div class="col-sm jumbotron d-block" style="position: relative; right: -20px;">
          <a class="swap" href="https://www.zumiez.com/element-x-star-wars-mandalorian-mando-child-8-0-skateboard-complete.html" class=" mb-4 h-100"><img id="img" class="img-fluid img-thumbnail" src="images/Star_Wars_Mandalorian_Skateboard.png" alt=""><img id="img" class="img-fluid img-thumbnail" src="images/Star_Wars_Mandalorian_Skateboard_2.png" alt=""></a>
          <div id="paragraph">
            <p>STAR WARS | ELEMENT Mandalorian Quad 8.0" Complete Skateboard</p>
            <p>7-ply maple deck construction with graphics from The Mandalorian</p> 
            <p>5.25" Element brand trucks</p>
            <p>52mm wheels</p>
            <p>Abec 5 bearings</p>
            <p>Grip tape</p> 
            <p>Dimensions: 8.0" x 31.5</p>
            <p>Is Imported</p>
          </div>
        </div>
      </div>
    </div>';
    echo '<div class="container">
    <div class="row" style="display: flex;">
      <div class="col-sm jumbotron d-block" style="position: relative; left: -20px;">
        <a class="swap" href="https://www.amazon.com/Bicycle-Detachable-Mountain-Adjustable-22-44-24/dp/B08F9MWBD1/ref=sr_1_1_sspa?dchild=1&keywords=Mountain+%26+Road+Biking+Helmet&qid=1607377142&sr=8-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExTFVZNjRZRkJDNjJHJmVuY3J5cHRlZElkPUEwOTYzMDA5MTk0SlJRU0ZUQjNCQyZlbmNyeXB0ZWRBZElkPUEwNzYwNzg2MlFQMVQwVzRWMkgwNyZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=0" class=" mb-4 h-100"><img id="skateboard_img" class="img-fluid img-thumbnail flame" src="images/Mountain_And_Road_Biking_Helmet.png" alt=""><img id="skateboard_img" class="img-fluid img-thumbnail flame" src="images/Mountain_And_Road_Biking_Helmet_2.png" alt=""></a>
        <p>Durable impact resistance: The bicycle helmet has passed CPSC certification and is made of high-density, durable imported PC shell + EPS foam. These special impact-resistant materials help reduce the impact of collisions.</p>
        <p>Size adjustable: The rear dial and chin strap are adjustable, suitable for the head circumference of most adults (male and female)</p>
        <p>Safe and lightweight: The outer shell of the cycling helmet is made of durable high-density PC material, with EPS foam inside, which can absorb impact and protect the head in the event of a collision, and has impact resistance</p>
        <p>Design: The matte texture of the integrated molding technology is better than other helmets. The appearance design is streamlined and textured. The size can be set freely</p>
        <p>Heat dissipation: The bicycle helmet is designed with multiple ventilation holes, which are cooled by the air at the front of the helmet and pass through the bicycle helmet to keep the helmet and head cool and ventilated</p>

      </div>
      <div class="col-sm jumbotron d-block">
        <a class="swap" href="https://www.amazon.com/CIGNA-Skateboard-Helmet-Men-Women/dp/B08L71NWWQ/ref=sr_1_3_sspa?dchild=1&gclid=Cj0KCQiAk53-BRD0ARIsAJuNhpuB7Dwjf3N5Mrw7EsBPe0u6AeGDQBDJFTD7BEYuT42XAfvOLg29u_gaAgEqEALw_wcB&hvadid=410003483489&hvdev=c&hvlocphy=9030106&hvnetw=g&hvqmt=e&hvrand=8004804450852691765&hvtargid=kwd-94522655&hydadcr=24657_11410753&keywords=skateboard+helmet&qid=1606954352&sr=8-3-spons&tag=googhydr-20&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExSlo1S1ZBOTdBWjU2JmVuY3J5cHRlZElkPUEwMzY0ODY0MjBCR0xMUVBNMjM3RyZlbmNyeXB0ZWRBZElkPUEwNTQ5MjgwMUlWS1lOOTVKOE5TWiZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/CIGNA_Skateboard_Helmet_Grey.jpg" alt=""><img class="img-fluid img-thumbnail" src="images/CIGNA_Skateboard_Helmet_Grey_2.jpg" alt=""></a>
        <p>🛴AGE RANGE: ages 14 and up. SIZE: 22.5-24 inches /57-61CM. WEIGHT : 247g.</p>
        <p>🛴FEATURING: Charging LED Safety Light; Reflective Strap; Detachable visor; Detachable grey magnetic Goggles; Adjustable dial in the back.</p>
        <p>🛴COMFORT: Lightweight in-mold construction skateboard helmet, Removable inner lining pads , long-lasting and skin-friendly adjustable buckled chin strap.</p>
        <p>🛴VENTILATION: This roller skating helmet equipped with 6 air vents that will help you to keep a cool head and ventilated.</p>
        <p>🛴CUSTOMER SERVICE: Just return the skateboard helmet back for an exchange or refund if you are not satisfied with it. Please feel free to contact us if there is any other problems.</p>
      </div>
      <div class="col-sm jumbotron d-block" style="position: relative; right: -20px;">
        <a class="swap" href="https://www.amazon.com/JBM-Multi-Sports-Skateboarding-Electric-Resistance/dp/B017W0F4DS/ref=sr_1_1_sspa?dchild=1&gclid=Cj0KCQiAk53-BRD0ARIsAJuNhpuB7Dwjf3N5Mrw7EsBPe0u6AeGDQBDJFTD7BEYuT42XAfvOLg29u_gaAgEqEALw_wcB&hvadid=410003483489&hvdev=c&hvlocphy=9030106&hvnetw=g&hvqmt=e&hvrand=8004804450852691765&hvtargid=kwd-94522655&hydadcr=24657_11410753&keywords=skateboard+helmet&qid=1606954148&sr=8-1-spons&tag=googhydr-20&psc=1&smid=A21875UNY3A7GG&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFHMzZWSzRYQVlJMSZlbmNyeXB0ZWRJZD1BMDI3MjEwODNPR0hVVTNUR0pMU1UmZW5jcnlwdGVkQWRJZD1BMDAxNTc3NjIxTFBCTFBQSkExRUcmd2lkZ2V0TmFtZT1zcF9hdGYmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl" class=" mb-4 h-100"><img id="img" class="img-fluid img-thumbnail" src="images/Skateboarding_Helmet_Black.jpg" alt=""><img id="img" class="img-fluid img-thumbnail" src="images/Skateboarding_Helmet_Black_2.jpg" alt=""></a>
        <p>MULTI-SPORTING GEAR: These Adult Bike Helmets are flexible and suitable for Multi-sports activities, include cycling, skateboarding, scootering, inline & roller skating. These helmets would be the essential protective gear for any outdoor sports-lovers.</p>
        <p>HEAD SIZE: Small: 18.1’’-19.7’’, Medium: 19.7’’-22.8’’, Large: 20.9’’-23.2’’. These Cycling helmets come with an adjustable strap which make it flexible to fit the size of Adult. The flexibility of the strap make it a unisex product and would fit both well for both boys and girls.</p>
        <p>IMPACT Resistance:These bike helmets are specially designed for Adult Multi-sports Head protection. The material use is tough and durable PVC & PC, EPS foam which would help absorb the impact and protect the head during impact.</p>
        <p>VENTILATION: Use of multiple vents, special aerodynamic design and breathable foam to reduce sweating and keep staying cool. It also reduces the high body temperature caused by intense body movements.</p>
      </div>
    </div>
  </div>';
  echo '<div class="container">
  <div class="row" style="display: flex;">
    <div class="col-sm jumbotron d-block" style="position: relative; left: -20px;">
      <a class="swap" href="https://www.amazon.com/JBM-international-Adult-Guards-Protective/dp/B016QHMSUA/ref=sr_1_9?crid=3T5ZE1M65KSNT&dchild=1&keywords=adult+knee+and+elbow+pads&qid=1607026243&sprefix=adult+knee+and+e%2Caps%2C245&sr=8-9" class=" mb-4 h-100"><img id="skateboard_img" class="img-fluid img-thumbnail" src="images/JBM_Skateboard_Pads.jpg" alt=""><img id="skateboard_img" class="img-fluid img-thumbnail" src="images/JBM_Skateboard_Pads_2.jpg" alt=""></a>
      <p>Brand: JBM international</p>
      <p>Size: Adult</p>
      <p>Color: Black</p>
      <p>Material: Polyester, Polyethylene, Polypropylene, Plastic, Ethylene Vinyl Acetate</p>
      <p>Item Dimensions: LxWxH	11.2 x 8.6 x 3.8 inches</p>
      <p><strong>About this item</strong></p>
      <p>Made of durable, soft EVA padded material with tough plastic plates</p>
      <p>The most popular protection for skating and other activities</p>
      <p>Multiple adjustable elastic straps fit for various knee girths</p>
      <p>Appropriate for inline skating and riding bikes and scooters and other extreme sports</p>
    </div>
    <div class="col-sm jumbotron d-block">
      <a class="swap" href="https://www.amazon.com/BOSONER-Protective-Rollerblade-Skateboard-Skatings/dp/B07MNPQRZV/ref=sr_1_2_sspa?dchild=1&keywords=BOSONER+Kids+Knee+Pad+Elbow+Pads+Guards&qid=1607377536&sr=8-2-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFHQTJYTVBOVTRQMlUmZW5jcnlwdGVkSWQ9QTA3NTY4MTMyNVJEVkxJUjRONzlWJmVuY3J5cHRlZEFkSWQ9QTA3MzMyNjkzMVkxMjBZMUNaTUg3JndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ==" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/BOSONER_Kids_Knee_Pad_Elbow_Pads_Guards.jpg" alt=""><img class="img-fluid img-thumbnail" src="images/BOSONER_Kids_Knee_Pad_Elbow_Pads_Guards_2.jpg" alt=""></a>
      <p>Multifunctional Protective Gear: FOR KIDS/CHILD, the knee elbow pads with wirst guards are designed for kids sports saftey protection especially for ice and roller cycling skating, Skateboard Hoverboard, biking, cycling, skating, rolling, ATV, BMX and other extrem sports.</p>
      <p>Professional and Comfortable: djustable elastic straps for secure, The thickening desgin will be good protection during sport, Lightweight, ventilated EVA foam provides cool air flow and limits perspiration.</p>
      <p>Boys/ Girls/ Kids Gift for : It is the good choice as the gift for Childrens Day, Birthday, Christmas,etc. Boutique！！！ perfect for any girls, toddle,boys, Its a good present as a children/kids gift.</p>
      <p>PROTECTIVE GEAR SET: 2pcs knee pad, 2pcs elbow pad, 2pcs wrist pad, Size: S Suggest for 3-7 year old. M, Suggest for 6-15 year old, Magic stick to modify the size. (Please check our size chart in the detail picture)</p>
      <p>The pads would make a bit compression to the body for the safty reason, the resonable could allow the body to hold the right position while riding with sport euqipments such as bicycle, skateboad, inline skating, and other outdoor sports such as volleyball basketball bmx bike.</p>
    </div>
    <div class="col-sm jumbotron d-block" style="position: relative; right: -20px;">
      <a class="swap" href="https://www.amazon.com/STARPOW-Protective-Skateboarding-Rollerblading-Snowboarding/dp/B07MWCB55D/ref=sr_1_14?dchild=1&keywords=triple+series+3+pack+pads+black&qid=1607378015&sr=8-14" class=" mb-4 h-100"><img id="img" width="300" height="300" class="img-fluid img-thumbnail" src="images/STARPOW_Knee_Pads.png" alt=""><img id="img" class="img-fluid img-thumbnail" src="images/STARPOW_Knee_Pads_2.png" alt=""></a>
      <p>IMPACT RESISTANT: Made of durable, soft EVA padded material with tough plastic plates. It could protect the user during the multiple sports purpose</p>
      <p>COMPREHENSIVE PROTECTION: The knee pads and elbow pads are sleeves, not just a couple straps. Adjustable elastic straps and long Velcro for secure. During the exercise, the protective gear will not shift and will not affect every action. This will effectively reduce the potential safety hazard caused by accidental falls.</p>
      <p>PRECISE SIZE: Small suits those whose weight is between 26-65lb.Medium suits those whose weight is between 66-110lb. Large suits those whose weight is between 110-166lb. Please measure your size to make sure you choose the right one. Multiple adjustable elastic straps and Velcro closures for secure fit for various knee girths</p>
      <p>MULTIPLE USAGE SCENARIOS: Appropriate for BMX, Rollerblading, Skating, Skateboard, Cycling, Playing scooter and other extreme sports.</p>
      <p>WARRANT: All products from STARPOW have 12 months warranty, your 100% satisfaction is our motivation force.</p>
    </div>
  </div>
  </div>';
  echo '<footer class="footer">Caleb Sonnichsens Capstone 2020</footer>';
  ?>
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Own Made JavaScript-->
    <script src="js/script.js"></script>
</body>
</html>