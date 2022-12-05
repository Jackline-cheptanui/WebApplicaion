
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
<link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />
<script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/index.js') }}" rel="stylesheet">

</head>
<body>
    <nav>

        <div class="logo">
            <h1  id="logs" class="animate__animated animate__bounce animate__delay-2`98    12s"> SMART HOUSES</h1>
            <input id="searchbar" onkeyup="search_name()" type="text"
        name="search" placeholder="Search names..">
         </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#About">About Us</a></li>
        </ul>
            <div class="burger">
                 <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
    </div>
    </nav>
    <header class="head containers">
        <video loop muted autoplay poster="https://media.istockphoto.com/id/1352173615/photo/nairobi-skyline.jpg?s=612x612&w=is&k=20&c=1pEyUvPwTVFxpOsrL_Rg5HA1KZZyxeTe656gQ_CNHy4=" class="fullscreen-bg__video" style="width: 98.85vw;">
        </video>
        </div>
    <div id="About">
        <div class="container">
            <h3 id="h3">ABOUT US</h3>
            <p id="p">
                When it comes to houses in Kenya, Our web Applicationis perhaps as high end as it gets.That simply means 
                we have excellent building served within beautifully decorated establishments found in one of the most iconic 
                locations in the city- Nairobi.Our web Application offers a wide variety of expertlty  features and a regional choice..<br> <br> 
                    <span id="span">SPECIAL HOUSE </span> 
                        </p>
        <div class="row" id ="housee1">
                <div class="col-md-4">
                    <div class="card"  style="width: 18rem;" onmouseover="setNewImage()" onmouseout="setOldImage()" >
                        <div class="containeroverlay">
                        <img id="house1"  class="card-img-top"  src=" images/Cappucino.jpg"alt="Card image cap"></div>
                        <div class="card-body">
                          <h5 class="card-title">Expresso Tonic</h5>
                          <p class="card-text">mkkol</p>
                          <button type="button" class="shop" onclick="openForm()" style="   text-align: center;
                          background-color:#D2691E ;
                          padding: 10px;
                          border-radius: 5px;
                          text-decoration: none;
                          color:white;
                          border: none;
                          margin-left: 90px;">order</button>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem;" onmouseover="setNewImage1()" onmouseout="setOldImage1()">
                        <img id="house2" class="card-img-top" src="https://media.istockphoto.com/id/1352173615/photo/nairobi-skyline.jpg?s=612x612&w=is&k=20&c=1pEyUvPwTVFxpOsrL_Rg5HA1KZZyxeTe656gQ_CNHy4=" alt="Avatar" style="width:100%">
                        <div class="card-body">
                          <h5 class="card-title">Irish Coffee</h5>
                          <p class="card-text">uhjkm</p>
                          <button type="button" class="shop" onclick="openForm()" style="   text-align: center;
                          background-color:#D2691E ;
                          padding: 10px;
                          border-radius: 5px;
                          text-decoration: none;
                          color:white
                          ;border: none;
                          margin-left: 90px;">update</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;" onmouseover="setNewImage2()" onmouseout="setOldImage2()">
                        <img id="chouse3" class="card-img-top" src="https://media.istockphoto.com/id/1352173615/photo/nairobi-skyline.jpg?s=612x612&w=is&k=20&c=1pEyUvPwTVFxpOsrL_Rg5HA1KZZyxeTe656gQ_CNHy4=" alt="Avatar" style="width:100%">
                        <div class="card-body">
                          <h5 class="card-title">Iced Latte</h5>
                          <p class="card-text">uhjkm</p>
                          <button type="button" class="shop" onclick="openForm()" style="   text-align: center;
                          background-color:#D2691E ;
                          padding: 10px;
                          border-radius: 5px;
                          text-decoration: none;
                          color:white
                          ;border: none;
                          margin-left: 90px;">update</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id ="housee2">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;" onmouseover="setNewImage3()" onmouseout="setOldImage3()">
                        <img id="house4" class="card-img-top" src="https://media.istockphoto.com/id/1352173615/photo/nairobi-skyline.jpg?s=612x612&w=is&k=20&c=1pEyUvPwTVFxpOsrL_Rg5HA1KZZyxeTe656gQ_CNHy4=" alt="Avatar" style="width:100%">
                        <div class="card-body">
                          <h5 class="card-title">Correto</h5>
                          <p class="card-text">yhj</p>
                          <button type="button" class="shop" onclick="openForm()" style="   text-align: center;
                          background-color:#D2691E ;
                          padding: 10px;
                          border-radius: 5px;
                          text-decoration: none;
                          color:white
                          ;border: none;
                          margin-left: 90px;">update</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;" onmouseover="setNewImage4()" onmouseout="setOldImage4()">
                        <img id="house5" class="card-img-top" src="https://media.istockphoto.com/id/1352173615/photo/nairobi-skyline.jpg?s=612x612&w=is&k=20&c=1pEyUvPwTVFxpOsrL_Rg5HA1KZZyxeTe656gQ_CNHy4=" alt="Avatar" style="width:100%">
                        <div class="card-body">
                          <h5 class="card-title">Affogato</h5>
                          <p class="card-text">yhjn</p>
                          <button type="button" class="shop" onclick="openForm()" style="   text-align: center;
                          background-color:#D2691E ;
                          padding: 10px;
                          border-radius: 5px;
                          text-decoration: none;
                          color:white
                          ;border: none;
                          margin-left: 90px;">update</button>
                         
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;" onmouseover="setNewImage5()" onmouseout="setOldImage5()">
                        <img id="house6" class="card-img-top" src="https://media.istockphoto.com/id/1352173615/photo/nairobi-skyline.jpg?s=612x612&w=is&k=20&c=1pEyUvPwTVFxpOsrL_Rg5HA1KZZyxeTe656gQ_CNHy4=" alt="Avatar" style="width:100%">
                        <div class="card-body">
                          <h5 class="card-title">Mocha</h5>
                          <p class="card-text">uhjn</p>
                          <button type="button" class="shop" onclick="openForm()" style="   text-align: center;
                          background-color:#D2691E ;
                          padding: 10px;
                          border-radius: 5px;
                          text-decoration: none;
                          color:white
                          ;border: none;
                          margin-left: 90px;">update</button>
                        </div>
                    </div>
                </div>
             </div>
    </div>

    <script src="index.js"><script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   </body> 
</html> 