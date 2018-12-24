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
<div class="wrapper">
    <article class="legend">
        <div>
            <h2>Roman numerals</h2>
            <p>
                Everyone is certainly familiar with Roman numerals. You met them, for example, on a clock or in the
                designation of a blood group. Roman designations of numbers are now better known than any other ancient
                number system. This is explained not so much by some special advantages of the Roman system, but by the
                enormous influence that the Roman Empire enjoyed in the relatively recent past.
            </p>
        </div>

        <div>
            <h2>Arabic numerals</h2>
            <p>
                Writing Arabic numerals consisted of straight line segments, where the number of angles corresponded to the
                size of the sign. Probably, one of the Arab mathematicians once suggested the idea - to associate the
                numerical value of a digit with the number of angles in its shape.
                Over time, the corners smoothed out, and the numbers became familiar to us. For many centuries, the whole
                world has been using the Arabic number writing system. With these ten icons you can easily express
                tremendous values.
            </p>
        </div>

        <div>
            <h2>Rules</h2>
            <p>
                In the modern world, Roman numerals are used quite often, this site was created to simplify the task of
                converting a Roman number to Arabic and vice versa. You can also try it yourself! Here are a few rules:
                <br>
                1) In the case when a large figure is in front of a smaller one, they are added, for example, 6 is recorded
                in the Roman system as VI (5 + 1).
                <br>
                2) When a smaller number is in front of a larger one, they are subtracted, for example, 4 is recorded in the
                Roman system as IV (5-1).
                <br>
                3) The same figure can not be used more than 3 times in a row. Therefore, the number 3 looks like III, and
                the number 4 is already IV
                <br>
                4) It is also necessary to take into account - in the classical system of Roman numerals, the number on the
                right must be no more than what is multiplied by ten on the left. For example, for this 99 will be XCIX, not
                IC.
            </p>
        </div>
    </article>
    <table class="legend">
        <tbody>
        <tr>
            <td>Roman numeral</td>
            <td>Arabic numeral</td>
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
</div>
</body>
</html>