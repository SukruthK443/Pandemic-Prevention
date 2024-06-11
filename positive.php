<!DOCTYPE html>
<html lang="en">
<head>
    <header>
        <a href="index.php">
        <img src="AdobeStock_331522813-2048x1365-removebg-preview.png"></a>
    </header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Test Results and Prevention</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
  z-index: 999;
  text-align: center;
  height: 300px;
  top: 0%;
  left: 0%;
  right: 0%;
}

        body {
            background-color: #eef2f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 20px;
        }

        ul li {
            background-color: #f4f4f4;
            margin-bottom: 10px;
            padding: 10px 20px;
            border-radius: 5px;
            color: black;
            font-weight: 450;
        }

        strong {
            color: #007bff;
        }

        h2 {
            margin-top: 20px;
            color: #333;
        }

        p {
            padding: 0 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="font-size: 60px; font-family: 'Courier New';">TEST RESULTS</h1>
        <ul>
        <li><strong>Test Date:  </strong><span id = 'date'><script> var date = new Date(); document.getElementById("date").innerHTML=date;</script></span></li>
            <li><strong>Test Type:</strong> Online Diagnostics</li>
            <li><strong>Result:</strong> <strong style="color: red;">MAYBE POSITIVE</strong></li>
        </ul>

        <h2 style="text-align: center;">Prevention Measures and Guidelines</h2><br>
        <p style="font-weight: 500;">Protect yourself and others:</p>
        <ul>
            <li>Get vaccinated as soon as it's your turn.</li>
            <li>Wear a mask properly (covering both nose and mouth).</li>
            <li>Maintain physical distance of at least 1 meter from others.</li>
            <li>Avoid crowds and close contact.</li>
            <li>Practice good hand hygiene by washing hands frequently.</li>
            <li>Improve indoor ventilation.</li>
            <li>Follow local health guidelines.</li>
        </ul>
        <div class="note">
            <p><strong>Note:</strong> The results provided here are based on online self-reported diagnostics and should not be compared with professional laboratory tests. They are intended for preliminary guidance only. If you suspect you have COVID-19, please consult a healthcare provider for a formal diagnosis and treatment plan.</p>
        </div>
    </div>
</body>
</html>
