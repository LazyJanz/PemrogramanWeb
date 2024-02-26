<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $NIM = $_POST['NIM'];

            echo "<h2>Hello, $name!</h2>";
            echo "<p>Email Anda: $email</p>";
            echo "<p>NIM Anda: $NIM</p>";
        }
        ?>
    </div>
</body>
</html>
