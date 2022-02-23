@extends('layouts.app')

@section('content')
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Covid-19</h1>
                <p class="lead fw-normal text-white-50 mb-0">Stay home, Stay Safe</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="covid-container">
                {{-- card --}}
            </div>
        </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <script>
        let covidContainer = document.getElementById('covid-container');
        fetch('https://api.covid19api.com/summary')
            .then(response => response.json())
            .then(function(data) {
                const covidData = data;
                for (let i = 0; i < 30; i++) {
                    let cardContainer = document.createElement('div');
                    cardContainer.classList = "col mb-5";

                    let card = document.createElement('div');
                    card.classList = "card h-100";

                    let cardBody = document.createElement('div');
                    cardBody.classList = "card-body p-4 text-center";

                    let country = document.createElement("h5");
                    country.classList = "fw-bolder";
                    country.innerText = covidData.Countries[i].Country;

                    let total = document.createElement('p')
                    total.classList = "mb-0";
                    total.innerText = `Total Comfirm : ${covidData.Countries[i].TotalConfirmed}`;

                    let death = document.createElement('p');
                    death.classList = "mb-0";
                    death.innerText = `Total Death : ${covidData.Countries[i].TotalDeaths}`;


                    cardBody.appendChild(country);
                    cardBody.appendChild(total);
                    cardBody.appendChild(death);
                    card.appendChild(cardBody);
                    cardContainer.appendChild(card);
                    covidContainer.appendChild(cardContainer);
                }
            });
    </script>
@endsection
