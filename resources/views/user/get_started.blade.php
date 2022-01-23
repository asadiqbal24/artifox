<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Style Sheet -->
    <link rel="stylesheet" href="{{asset('usercss/style.css')}}">
    <title>Artifox Studios</title>
</head>
<body>
    <div class="layout">
        <div class="container">
            <div class="container-img">
                <h1 class="h1-white-font">Welcome</h1>
                <img class="main-img" src="{{asset('assts/Image 12.png')}}" alt="Image" width="12px" height="12px">
                <h1 class="h1-white-font">Online Design Center</h1>
            </div>
            <div class="container-text">
                <h1 class="h1-grey-font">Get Started</h1>
                <p class="p-grey-font">Please Enter The Product ID Number To Get Started On Your Design</p>
                <input class="small-grey-font" id="Enter" type="text" placeholder="Product Identifier ID">
                <a class="btn-style btn-white-font btn-background" href="{{route('welcome')}}" style="text-decoration: none; text-align: center;">Start Designing</a>
            </div>
        </div>
    </div>
    
</body>
</html>