@extends('layouts.adminapp')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Vaccine Chart</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Latest 5 Registered Form</h5>
                            </div>
                            <div class="card-body">
                                @foreach ($latest as $value)
                                    <div class="d-flex justify-content-between mb-2">
                                        <span style="width: 50%"><b>{{ $value->name }}</b></span>
                                        <span>{{ $value->email }}</span>
                                        <span class="card-subtitle text-muted small">
                                            {{ $value->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Age Chart</h5>
                            </div>
                            <div class="card-body" style="height: 50vh">
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('script')
    <script>
        const barLabels = ["Pfizer", "CoviShield", "Sinovac"];
        var vaccData = [
            JSON.parse(`<?= $vaccData[0] ?>`),
            JSON.parse(`<?= $vaccData[1] ?>`),
            JSON.parse(`<?= $vaccData[2] ?>`)
        ];
        const barData = {
            labels: barLabels,
            datasets: [{
                label: "Used Vaccine Count",
                data: vaccData,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                ],
                borderWidth: 1
            }]
        }
        const barConfig = {
            type: 'bar',
            data: barData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        const barChart = new Chart(
            document.getElementById('barChart'),
            barConfig
        );
        var ageData = [
            JSON.parse(`<?= $ageData[0] ?>`),
            JSON.parse(`<?= $ageData[1] ?>`),
            JSON.parse(`<?= $ageData[2] ?>`)
        ];
        const pieData = {
            labels: [
                'Younger than 36',
                'Around 48 years old',
                'Older than 62'
            ],
            datasets: [{
                label: 'total person',
                data: ageData,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
        const pieConfig = {
            type: 'pie',
            data: pieData,
            options: {
                maintainAspectRatio: false,
            }
        };
        const pieChart = new Chart(
            document.getElementById('pieChart'),
            pieConfig
        );
    </script>
@endsection
