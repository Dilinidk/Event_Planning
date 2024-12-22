<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">

		body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            width: 100%;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .thank-you-message {
            display: none;
            font-size: 18px;
            color: #28a745;
        }

        .thank-you-message	 {
            display: block;
        }

	</style>

</head>

<body>
	<?php
        $con = mysqli_connect("localhost", "root", "");
        if (!$con)
        {
            die('Could not connect: ' . mysqli_error($con));
        }
        
        mysqli_select_db($con, "webproject");

        //Insert data 
        $sql="INSERT INTO customers (name, email, phNo, subject) VALUES ('$_POST[Name]','$_POST[Email]','$_POST[Number]','$_POST[Subject]')";

        mysqli_query($con, $sql);

        //
        mysqli_close($con);

    ?>

	 <div class="container">
        
        <div id="thankYouMessage" class="thank-you-message">
            <h2>Submitted Successfully!</h2>
            <p>Thank you for your submission.</p>
        </div>

    </div>

</body>
</html>