<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .contact-1{
            width: 50%;
        }
        .contact2{
            background: #f1f1f19c;
            padding: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark position-sticky top-0 w-100" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" style="width: 50%" href="#"><img width="30%" src="images/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                
                <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="#about">About</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="#service">Services</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="#training">Training</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="#stories">Stories</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="/contact.html">Contact</a>
                </li>
            </ul>
            
            </div>
        </div>
    </nav>

    <?php

 if(isset($_POST["email"])) {
    //echo "<script type='text/javascript'>alert('mail method run.');</script>";  
	$Body = "Name: ".$_POST["name"]
    ."<br/><br/>"."Email: ".$_POST["email"]
    ."<br/><br/>"."Phone: ".$_POST["phone"]
    ."<br/><br/>"."Message: ".$_POST["message"]
    ;
    
    $to="prajjalsaxena@gmail.com";
    $subject="Contact form submitted ".$_POST["name"];
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
if(!mail($to,$subject,$Body,$headers)){
        echo "<script type='text/javascript'> alert('Some error occoured');</script>";
}else{
        echo "<script type='text/javascript'>alert('Thankyou for contacting us , we will reachout soon!');</script>";
    };
    
 }else{
     echo "<script type='text/javascript'>alert('other case ran');</script>";
 }

?>

  
    <footer>
        <div class="container">
            <div class="row footer">
                <div class="col-md-4">
                   <img src="./images/logo.png" alt=""> 
                   <p>Fat Loss | Muscle building | Strength Training</p>
                   <p>Core Exercises | Balance Training</p>
                    <p>Flexibility And Stretching | Health Improvement</p>
                </div>
                <div class="col-md-4 d-md-flex flex-md-column align-items-center">
                    <h1 class="margtop">Follow Us</h1>
                    <div class="row follow-us">
                        <div class="col-3">
                            <i class="fa fa-facebook-square text-light" aria-hidden="true"></i>
                        </div>
                        <div class="col-3">
                            <i class="fa fa-twitter-square text-light" aria-hidden="true"></i>
                        </div>
                        <div class="col-3">
                            <i class="fa fa-instagram text-light" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1 class="margtop">Contact Us</h1>
                    <p>info@thefitnessstudio.in</p>
                    <p>+91 9990991010</p>
                </div>
            </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>