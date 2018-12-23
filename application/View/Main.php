<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../public/css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../public/js/converter.js"></script>

    <title>Decimal↔Roman converter</title>
</head>
<body>
<div class="container">
    <p>Arabic ⇄ Roman</p>
    <div class="numeral group">
        <input type="text" id="number" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Numeral</label>
    </div>
    <div>
        <div id="result"></div>
        <div class="copy-button"></div>
    </div>
</div>
<table class="legend">
    <tbody>
    <tr>
        <td>Римская цифра</td>
        <td>Арабская цифра</td>
    </tr>
    <tr>
        <td>I</td>
        <td>1</td>
    </tr>
    <tr>
        <td>V</td>
        <td>5</td>
    </tr>
    <tr>
        <td>X</td>
        <td>10</td>
    </tr>
    <tr>
        <td>L</td>
        <td>50</td>
    </tr>
    <tr>
        <td>C</td>
        <td>100</td>
    </tr>
    <tr>
        <td>D</td>
        <td>500</td>
    </tr>
    <tr>
        <td>M</td>
        <td>1000</td>
    </tr>
    </tbody>
</table>
</body>
</html>