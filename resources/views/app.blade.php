<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="icon" href="/image/logo.png">
    @vite('resources/css/app.css')
    @inertiaHead

    <style>
        body {
            background-image: url('./image/background-imagee.jpg');
            background-color: rgb(212, 224, 212);
            background-repeat: no-repeat;
            background-position: top center;
            background-size: 100%;
            background-position-y: 40%;
            background-attachment: fixed;
        }
        body {
            color: rgb(255, 255, 255);
        }
    </style>
  </head>
  <body>
    @inertia
    @vite('resources/js/app.js')
  </body>
</html>
