<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link
  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="css/start.css">
</head>
<body>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/351264/pexels-photo-351264.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Los Angeles" class="d-block" style="width:100%" height="900px">
      <div class="carousel-caption" style="text-align: center ">

        <h1  class="animate__animated animate__backInLeft delay-5s" style="color: rgba(43, 43, 114, 0.47)"><span style="float: left; display: inline-block;color:chocolate;
        
         background-size: 100%; 
         background-repeat: no-repeat; width:5.0em; height: 8em; text-indent: 550px; top:10px; 
         margin-left: 5px; position: relative;font-size: 70px;  ">RappiPay</span>Entidad financiera</h1>
                <p class="animate__animated animate__backInRight" style="height:4 rem; font-size:50px;" >Text for the first slide.</p>

      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/273250/pexels-photo-273250.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h1 class="animate__animated animate__backInLeft" style="color:black">An animated element</h1>

        <p>Text for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/2403251/pexels-photo-2403251.jpeg?auto=compress&cs=tinysrgb&w=600" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h1>Slide 3 Heading</h1>
        <p>Text for the third slide.</p>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
  <h3>Carousel Example</h3>
  <p>The following example shows how to create a basic carousel with indicators and controls.</p>
</div>








</body>
</html>
