<!DOCTYPE html> 
<html>
<head>
	<title>Thank you!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="TSW WebCoder">
</head>
<body>
    <div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
        <p>Thank you for booking your product. We will get back to you shortly. Please click <a href="product.php" style="text-decoration: none; color #0986d9 !important;;">here </a> if you are not redirected within a few seconds.</p>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        setTimeout(function () {
            window.location.replace("product.php"); //will redirect to main page 
        }, 5000); //will call the function after 5 secs.
    </script>   
</body>
</html>