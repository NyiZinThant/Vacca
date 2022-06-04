<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $form[0]->id }}</title>
    <style>
        .container-cu,
        html,
        body {
            background-color: white;
            margin: 10px 30px;
        }

        .my-5-cu {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .row-cu {
            display: flex;
            flex-wrap: wrap;
        }

        .title {
            margin-bottom: 5px
        }

        .col-12-cu {
            flex: 0 0 auto;
            width: 100%;
        }

        .mb-2-cu {
            margin-bottom: 0.5rem !important;
        }

    </style>
</head>

<body>
    <div class="container-cu my-5-cu">
        <div class="row-cu">
            <div class="col-12-cu mb-2-cu">
                <h3 class="fw-bolder">Form Id({{ $form[0]->id }}) Details</h3>
            </div>
            <div class="col-12-cu mb-2-cu">
                <p class="title"><b>Name</b></p>
                <p>{{ $form[0]->name }}</p>
            </div>
            <div class="col-12-cu mb-2-cu">
                <p class="title"><b>Age</b></p>
                <p>{{ $form[0]->age }}</p>
            </div>
            <div class="col-12-cu mb-2-cu">
                <p class="title"><b>Email</b></p>
                <p>{{ $form[0]->email }}</p>
            </div>
            <div class="col-12-cu mb-2-cu">
                <p class="title"><b>Nrc</b></p>
                <p>{{ $form[0]->nrc }}</p>
            </div>
            <div class="col-12-cu mb-2-cu">
                <p class="title"><b>Address</b></p>
                <p>{{ $form[0]->address }}</p>
            </div>
            <div class="col-12-cu mb-2-cu">
                <p class="title"><b>Vaccine Name</b></p>
                <p>{{ $form[0]->vaccine->name }}</p>
            </div>
            <div class="col-12-cu mb-2-cu">
                <p class="title"><b>Requested At</b></p>
                <p>{{ $form[0]->created_at }}</p>
            </div>
        </div>
    </div>
</body>

</html>
