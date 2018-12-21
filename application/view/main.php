<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Decimal↔Roman converter</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 align-self-center">
            <div class="form-group">
                <label for="number">Number</label>
                <input type="text" class="form-control" id="number" placeholder="Type roman or decimal number">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 align-self-center">
            <div class="form-group">
                <label for="result">Result</label>
                <input type="text" class="form-control" id="result" disabled>
            </div>
        </div>
    </div>
</div>
</body>
</html>