<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Sign Up</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        h1{
            font-family: cursive;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>Doctor Sign Up</h1>
    </header>

    <div class="container">
        <form id="doctorSignUpForm">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="type">Type</label>
            <select name="type" id="type">
                <option value="speacialist_doctor">Speacialist Doctor</option>
                <option value="primaryCare_doctor">Primary Care Doctor</option>
            </select>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign Up</button>
        </form>
    </div>

    <!-- Add your JavaScript code here (if needed) -->

</body>
</html>
