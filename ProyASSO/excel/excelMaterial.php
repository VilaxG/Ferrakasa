<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Carga masiva de Material</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>

<body>
    <div class="conatiner mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-3">
                <input class="form-control" type="file" id="input" accept=".xls,.xlsx">
            </div>
            <div class="col-2">
                <button class="btn btn-primary" id="button" disabled>Mostrar datos</button>
            </div>
            <div class="col-2">
                <button class="btn btn-warning" id="subir" disabled>Subir</button>
            </div>
        </div>
        <div class="row">
            <div class="col-11">
                <div id="jsondata" style="margin-left: 10%;"></div>
            </div>
        </div>
    </div>
</body>
<script src="excelMaterial.js"></script>

</html>