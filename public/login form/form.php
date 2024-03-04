<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <link rel="stylesheet" href="./assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./style.css">

    <style>

    </style>

</head>
<body>
    <section>
        <div class="container">
            <div class="row my-auto">
                <div class="col-sm-6 my-auto">
                    <div class="owl-carousel">
                        <div class="item">
                            <img src="./images/1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="./images/2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="./images/3.jpg" alt="">
                        </div>

                        
                    </div>
                </div>

                <div class="col-sm-6 form my-auto">
                    <div class="my-auto">
                        <h2>Welcome!</h2>
                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <label class="full" for="email">Email</label>
                            <input class="full" type="email" name="email" id="email">
                            <label class="full" for="pass">Password</label>
                            <input class="full" type="password" name="pass" id="pass">
                            
                            <div class="forgot">
                                <div class="remember">
                                    <input type="checkbox" name="isRemember" id="check">
                                    <label for="check">Remeber me</label>
                                </div>
                                
                                <a href="#">Forgot Password?</a>
                            </div>
                            <br>

                            <button name="save">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    
    <script src="./assets/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="./script.js"></script>

    <script>
       $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            items: 1,
            autoplay: true,
            dots: true
        });


    </script>
</body>
</html>