<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('img5.css')}}">
    <title>Artifox Studios</title>
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="nav-container">
                <div class="nav-items">
                    <img class="nav-logo" src="./assts/Image 13.png" alt="logo">
                </div>
                <div class="nav-items">
                    <h1 class="h1-white-font nav-center-item">Design online center</h1>
                </div>
                <div class="nav-items">
                    <input type="text" id="search" placeholder="Search">
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="section-container">
            <div class="section-items section-end">
                <div class="section-buttons small-button">
                    Back to website
                </div>
                <div class="section-buttons small-button">
                    Back to etsy
                </div>
            </div>
            <div class="section-items">
                <h3 class="h3-yellow-font">You Are Working On:</h3>
                <p class="p-black-font">HCO1 - 19MM Heart Tag With Heart Cut-Out</p>
            </div>
            <div class="section-items section-end">
                <div class="section-content">
                    <div class="section-content1">
                        <img class="section-content1-img" src="{{asset('storage/temp/images/'.\Session::getID().'/'.\Session::getID().'.png')}}" style="width: 100%;" alt="">
                    </div>
                    <div class="section-content2">
                        <div class="section-content2-container1">
                            <h1 class="h1-red-font">Huzzah!</h1>
                            <p class="p-red-font">Your design have been saved</p>
                        </div>
                        <div class="section-content2-container2">
                            <h1 class="h1-grey-font">Your Design Identifier Code Is:</h1>
                            <input id="zeros-number" type="text" value="{{\Session::get('identifier')}}" style="font-size: 2rem;
    color: red;
    text-align: center;
    width: 30rem;
    padding: 0.5rem 0.9rem;
    border-radius: 2rem;
    border: 0.2rem solid #c7c7c7;
    outline: none;">
                            <p class="p-black-font">Please copy this code and submit it to us when placing your order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>