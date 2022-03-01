@extends('layouts.app')

@section('content')
    <style>
        /* Create four equal columns that sits next to each other */
        .column {
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column .card {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

    </style>
    <header class="bg-dark py-5 heading">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">News</h1>
                <p class="lead fw-normal text-white-50 mb-0">Stay home, Stay Safe</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row" id="news-container">
                {{-- card --}}
            </div>
        </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        let newsContainer = document.getElementById("news-container");
        fetch('https://newsapi.org/v2/everything?q=covid19&sortBy=popularity&apiKey=c50b7ea9b1914520a1d3ca4c2abe2cdf')
            .then(response => response.json())
            .then(function(data) {
                const covidNews = data;

                for (let i = 1; i < 20; i++) {
                    
                    let cardContainer = document.createElement("div");
                    cardContainer.classList = "col-12 mb-3";

                    let linkToArticle = document.createElement("a");
                    linkToArticle.setAttribute("href", `${covidNews.articles[i].url}`);

                    let card = document.createElement("div");
                    card.classList = "card";

                    let row = document.createElement('div');
                    row.classList = "row g-0";

                    let colSix = document.createElement('div');
                    colSix.classList = "col-md-6";

                    let newsImage = document.createElement('img');
                    newsImage.setAttribute('src', `${covidNews.articles[i].urlToImage}`);
                    newsImage.classList = "img-fluid rounder-start";

                    let colSix2 = document.createElement('div');
                    colSix2.classList = "col-md-6";

                    let cardBody = document.createElement('div');
                    cardBody.classList = "card-body  align-middle";

                    let title = document.createElement("h5");
                    title.classList = "fw-bolder mb-4";
                    title.innerText = covidNews.articles[i].title;
                    
                    let auhtor = document.createElement('p');
                    auhtor.innerHTML = `<b>Author: </b>${covidNews.articles[i].author}`;

                    let cutDate = covidNews.articles[i].publishedAt.split("T");
                    let date = document.createElement('p');
                    date.innerHTML = `<b>Published At: </b>${cutDate[0]}`

                    newsContainer.appendChild(cardContainer);

                    cardContainer.appendChild(linkToArticle);
                    linkToArticle.appendChild(card);
                    card.appendChild(row);

                    row.appendChild(colSix);
                    colSix.appendChild(newsImage);

                    row.appendChild(colSix2);
                    colSix2.appendChild(cardBody);

                    cardBody.appendChild(title);
                    cardBody.appendChild(auhtor);
                    cardBody.appendChild(date);
                }
            });
    </script>
@endsection
