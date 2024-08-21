<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .quiz-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        .question {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .options {
            list-style: none;
            padding: 0;
        }

        .options li {
            margin: 10px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="quiz-container">
    <div class="question">¿Cuanto tardas en bañarte?</div>
    <ul class="options">
        <li><button onclick="checkAnswer(this)">A) 5 min</button></li>
        <li><button onclick="checkAnswer(this)">B) 10 min</button></li>
        <li><button onclick="checkAnswer(this)">C) 15 min</button></li>
        <li><button onclick="checkAnswer(this)">D) 20 min o mas</button></li>
    </ul>
</div>

<script>
    function checkAnswer(button) {
        const correctAnswer = "C) París";
        if (button.textContent === correctAnswer) {
            alert("¡Correcto!");
        } else {
            alert("Incorrecto. Inténtalo de nuevo.");
        }
    }
</script>

</body>
</html>