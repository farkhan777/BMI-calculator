<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/maintenance.png"/>
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="contact1">
        <div class="container-contact1">
            <form action="index.php" method="post">
                <div class="wrap-input1 validate-input">
                    <input class="input1" type="number" placeholder="Your Height (Meters)" required name="height" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                    ">
                    <span class="shadow-input1"></span>
                </div>
                <div class="wrap-input1 validate-input">
                    <input class="input1" type="number" name="weight" placeholder="Your Weight (Kilograms)">
                    <span class="shadow-input1"></span>
                </div>
                <div class="container-contact1-form-btn">
                    <input type="submit" class="contact1-form-btn">
                </div>
            </form>
            <?php
                $Height = $_POST["height"];
                $Weight = $_POST["weight"];

                $Result = $Weight / ($Height * $Height);

                echo "<p style='font-family: Montserrat-ExtraBold; color: #00e0ff; font-size: 1.5rem; text-align: center;'>Your BMI :<br>".$Result."</p>";
                

                if($Result < 18.5){
                    echo "<p style='font-family: Montserrat-ExtraBold; font-size: 1.5rem; text-align: center; color: #fff64f;'>Underweight</p>";
                }elseif($Result <= 24.9 && $Result >= 18.5){
                    echo "<p style='font-family: Montserrat-ExtraBold; font-size: 1.5rem; text-align: center; color: #03fc7f;'>Normal Weight</p>";
                }elseif($Result >= 25 && $Result <= 29.9){
                    echo "<p style='font-family: Montserrat-ExtraBold; font-size: 1.5rem; text-align: center; color: #ff6500;'>Overweight</p>";
                }else{
                    echo "<p style='font-family: Montserrat-ExtraBold; font-size: 1.5rem; text-align: center; color: #ff003c;'>Obesity</p>";
                }
            ?>
        </div>
    </div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>