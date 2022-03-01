<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $form[0]->id }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .container , html, body{
            background-color: white
        }
        .title{
            margin-bottom: 5px
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mb-2">
                <h3 class="fw-bolder">Form Id({{ $form[0]->id }}) Details</h3>
            </div>
            <div class="col-12 mb-2">
                <p class="title"><b>Name</b></p>
                <p>{{ $form[0]->name }}</p>
            </div>
            <div class="col-12 mb-2">
                <p class="title"><b>Age</b></p>
                <p>{{ $form[0]->age }}</p>
            </div>
            <div class="col-12 mb-2">
                <p class="title"><b>Email</b></p>
                <p>{{ $form[0]->email }}</p>
            </div>
            <div class="col-12 mb-2">
                <p class="title"><b>Nrc</b></p>
                <p>{{ $form[0]->nrc }}</p>
            </div>
            <div class="col-12 mb-2">
                <p class="title"><b>Address</b></p>
                <p>{{ $form[0]->address }}</p>
            </div>
            <div class="col-12 mb-2">
                <p class="title"><b>Vaccine Name</b></p>
                <p>{{ $form[0]->vaccine->name }}</p>
            </div>
            <div class="col-12 mb-2">
                <p class="title"><b>Requested At</b></p>
                <p>{{ $form[0]->created_at }}</p>
            </div>
        </div>
    </div>
</body>
</html>