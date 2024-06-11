
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

        input[type="button"] {
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
    <form id="covidForm">
            <label for="symptoms" style="font-size:20px;">Symptoms:</label>
            <br>
            Cough
			<input type="checkbox" name="symptoms">
			</div>
			<div>
			Shortness of Breath
			<input type="checkbox" name="symptoms">
			</div>
			<div>
			Fever
			<input type="checkbox"  name="symptoms">
			</div>
			<div>
			Chills
			<input type="checkbox"  name="symptoms">
			</div>	
			<div>
			Muscle Pain
			<input type="checkbox"  name="symptoms">
			</div>
			<div>
			Headache
			<input type="checkbox"  name="symptoms">
			</div>
			<div>
			Shaking
			<input type="checkbox"  name="symptoms">
			</div>
			<div>
			Loss of taste or smell 
			<input type="checkbox"  name="symptoms">
			</div><br>

        <label for="temperature">Body Temperature (°F):</label>
        <input type="number" id="temperature" name="temperature" step="1" required><br>

        <label for="symptoms">Other Symptoms (If any):</label>
        <textarea id="symptoms" name="othsymptoms" rows="4" cols="50"></textarea><br>

        <input type="button" value="Diagnose" onclick="checkSymptoms()">
        
    </form>

    <div id="result"></div>

    <script>
        function checkSymptoms() {
            const symptoms = document.querySelectorAll('input[name="symptoms"]:checked');
            const numSymptoms = symptoms.length;
            const temperature = parseFloat(document.getElementById('temperature').value);

            if (numSymptoms >= 5 || (temperature >= 99 && numSymptoms >= 3)) {
                window.location.href = 'positive.php';
            } else {
                window.location.href = 'negative.php';
            }
        }
    </script>