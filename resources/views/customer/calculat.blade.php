@include('welcome')

<title>Trip Cost Calculator</title>
  <!-- Add jQuery library -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/yt-player/3.5.1/ytplayer.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/yt-player@3.5.1"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
  </script>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous">

  <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

  <div class='container'>
    <h1 class='page-header text-center'> Parcel Cost Calculator</h1>
    <div class='jumbotron'>
      <form>
        Distance (km): <input id='distance' type="number" class="form-control" value="100">
        <!-- todo: Use Google maps to input trip start and end, calculate distance -->
        Petrol Price (cents per litre): 
        <!-- todo: Get local petrol price from API -->
        <input id='cost_per_litre' type="number" value="145" class="form-control">
        Litres per 100 km:
        <!-- todo: Allow user to enter car model and automatically get L/100km from scraped data -->
        <input id='litres_per_100km' type="number" value="7" class="form-control">
        Trip Cost
        <input id='output' class="form-control" type="text" readonly>
        <input type="submit" onclick='calculate_cost()' class="btn btn-primary btn-submit form-control">
      </form>
    </div>
  </div>

  <script>
    $("form").submit(function (e) {
      e.preventDefault();
    });

    function calculate_cost() {
      let liters_per_100km = $("#litres_per_100km").val();
      let cost_per_litre = $("#cost_per_litre").val();
      let distance = $("#distance").val();
      let trip_cost = (liters_per_100km * cost_per_litre / 100) * distance;
      $('#output').val('৳' + trip_cost.toFixed(2)); // fix to display two decimal places
    }
  </script>

</body>
</html>
