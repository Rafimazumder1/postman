<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal information</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/rl.css">
    <script src="{{ asset('js/app.js') }}"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>
<body>
    
    <div class="wrapper_r">
        <div class="registration_form">
          <div class="title">
            Parsonal Information
          </div>
      
          <form encrypt="multipart/form-data" method="POST" action="{{url('/delivery_form')}}">
            <div class="form_wrap">
              <div class="input_grp"   onsubmit="return FormValidation('');">
                {{ csrf_field()}}

                <div class="input_wrap">
                  <label for="name">sender Name</label>
                  <input type="text"placeholder="sender name" name="name">
                </div>
                <div class="input_wrap">
                  <label for="phone">Phone Number</label>
                  <input type="phone" placeholder="phone number" name="phone">
                </div>
              </div>
              <div class="input_wrap">
                <label for="email">Email Address</label>
                <input type="text" placeholder="Email" name="email">
              </div>
              <div class="input_wrap">
                <label for="text">Parcel Type</label>
                <input type="text" placeholder="parcel type" name="parcel_Type">
              </div>
              <div class="input_wrap">
                <label for="date">parcel picup date</label>
                <input type="date" placeholder="parcel picup date" name="parcel_pickup_date">
              </div>

              <div class="input_wrap">
                <label for="text">parcel pickup address</label>
                <input type="text" placeholder="parcel pickup address" name="parcel_pickup_address">
              </div>



              <div class="input_wrap">
                <label for="receive name">receive name</label>
                <input type="text" placeholder="parcel Receiver name" name= "receive_name">
              </div>

              <div class="input_wrap">
                <label for="receive phone">receive phone</label>
                <input type="text" placeholder="receiver phone" name= "receive_phone">
              </div>

              <div class="input_wrap">
                <label for="receive email">receive name</label>
                <input type="email" placeholder="parcel pickup email" name= "receive_email">
              </div>

              <div class="input_wrap">
                <label for="city">City</label>
                <input type="text" placeholder="parcel received city" name="receive_city">
              </div>

              <div class="input_wrap">
                <label for="parcel received address">received address</label>
                <input type="text" placeholder="parcel received address" name= "receive_address">
              </div>
              <div class="input_wrap">
                <button type="submit" value="submit" class="submit_btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>

</body>
</html>