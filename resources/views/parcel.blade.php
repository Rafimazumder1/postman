<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Custom Auth Laravel')</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/ss.css">
    
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
      <header>
        <div class="logo">
        <img class="log" src="img/postman.png" alt="Log">
        </div>
        <div class="navbar">
          <a href="#home"><b>Home</a>
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#services">Aria</a>
          <a href="#services">Track</a>
          <a href="#services">Transport</a>
          <a href="#contact">Contact</a>

          </b>
        </div>
      </header>
      <div class="container">
        <div class="card">
            <div class="parent">
                <div class="top-div">
                   <img src="https://imgur.com/3U0Yawd.png">
                   <h3>Eden</h3>
                </div>
                <ul class="progress-bar">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <!--<li></li>-->
                </ul>
            </div>    
            <div class="main active">
                <div class="content">
                   <h4>Sender Information</h4>

                </div>
                <div class="input-text">
                    <input type="text" placeholder="Steve Jobs" id="full-name" require>
                    <span>Full Name</span>
                </div>
                <div class="input-text">
                  <input type="text" placeholder="Steve Jobs" id="full-name" require>
                  <span>Email</span>
              </div>
                <div class="input-text"> 
                    <input type="text" placeholder="Steve">
                    <span>Display Name</span>
                </div>
                <div class="input-text"> 
                  <input type="text" placeholder="Steve">
                  <span>Display Name</span>
                  </div>
                  <div class="input-text"> 
                    <input type="text" placeholder="Steve">
                    <span>Display Name</span>
                    </div>

                <div class="button">
                    <button class="create-workspace">Create Workspace</button>
                </div>
                
            </div> 
            <div class="main">
                
                <div class="content">
                   <h4>Let's set up a home for all your work</h4>
                   <p>You can always create another workspace later.</p>
                </div> 
                <div class="input-text">
                    <input type="text" placeholder="Eden" require>
                    <span>Workspace Name</span>
                </div>
                <div class="input-text">
                    <input type="text" placeholder="Example : https://www.google.com/">
                    <span>Workspace URL(optional)</span>
                </div>
                <div class="button button_gap">
                    <button class="back-click">Back</button>
                    <button class="next-click">Next</button>
                </div>
                
            </div>
             <div class="main">
               
                <div class="content">
                   <h4>How are you planning to use Eden?</h4>
                   <p>We'll stream line your setup accordingly.</p>
                </div>
                <div class="radio-text">
                    <input type="radio" name="Select" id="radio-button-1">
                     
                    <input type="radio" name="Select" id="radio-button-2">
                    <label for="radio-button-1" class="radio-button-1">
                        <i class="fa fa-user"></i>
                        <h5>For Myself</h5>
                        <p>Write better.Think more clearly.Stay organized.</p>
                        
                    </label>
                    <label for="radio-button-2" class="radio-button-2">
                        <i class="fa fa-users"></i>
                          <h5>With my team</h5>
                          <p>Wikis,docs,tasks and projects all in one space.</p>
                    </label>
                    
                    
                </div>
                <div class="button button_gap1">
                    <button class="back-click">Back</button>
                    <button class="finish-click">Finish</button>
                </div>
                
            </div>
            <div class="main">
               
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                </svg>
                <div class="content">
                   <h2>Congratulations! <span id="shown_name"></span></h2>
                   <p>You have completed onboarding,you can start using the Eden!</p>
                </div>
                <div class="button launch">
                    <button>Launch Eden</button>
                </div>
                
            </div>
           
            
        </div>
        
    </div>
    <script src="{{ asset('js/parcel.js') }}"></script>

  </body>
</html>