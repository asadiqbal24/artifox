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
            <div class="section-items">
                <div class="section-content">
                    <div class="section-content1">
                        <img class="section-content1-img" src="./assts/section-content1-img.png" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="section-container">
        <div class="section-items ">
            <p style="font-size:15px;text-align: center;">Please Take a Look and ensure the spelling and design is correct. we will not be held <br> resonsible for any mistake after this proof has been opprovector production</p>
        </div>

        <div class="section-items">
            <input type="checkbox" name="terms" style="margin-right: 15px;"><label style="font-size: 13px;">I Have Looked Over Every Aspect Of This Design and i am approving this design for production</label>
            
        </div>
        <div class="section-items">
            <a href="{{route('final-design-ready')}}" class="small-button" style="text-decoration:none;">Approve and Get Code</a>
        </div>    
        </div>
        
    </section>
</body>
</html>