<!DOCTYPE html>
<html lang="en">
<head>
<header>
	<a href="index.php">
	<img src="AdobeStock_331522813-2048x1365-removebg-preview.png"></a>
</header>
<link rel="icon" type="image/png" href="coronavirus.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Diagnostic Form</title>
    <style>

        img{
        scale: 100%;
        display: block;
        object-fit: cover;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5%;
        }

        title{
            text-align: center;
            align-content: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }

    </style>


</head>
<body>
        <br><br>
    <h1 style="text-align:center; font-size:50px">Diagnostic Form</h1><br><br>
    <form id="covidForm" action="process_diagnostics.php" method='POST'>
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="name" required><br>
            <br>
            <label for="phone">Phone Number:</label>
            <input type="number" id="phone" name="ph" required><br>
            <input type="submit" value="Next">
        
        </form>