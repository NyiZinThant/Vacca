@extends('layouts.app')

@section('content')
    <header class="bg-dark py-5">
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
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="news-container">
                {{-- card --}}
            </div>
        </div>
        </div>
    </section>
    <script>
        let newsContainer = document.getElementById("news-container");
        fetch('https://newsapi.org/v2/everything?q=covid19&sortBy=popularity&apiKey=c50b7ea9b1914520a1d3ca4c2abe2cdf')
            .then(response => response.json())
            .then(function(data) {
                const covidNews = data;
                console.log(covidNews.articles[1].url);
                for (let i = 1; i < 20; i++) {
                    console.log(covidNews.articles[i].urlToImage);
                    let linkToArticle = document.createElement("a");
                    linkToArticle.setAttribute("href", `${covidNews.articles[i].url}`);

                    let newsImage = document.createElement('img');
                    newsImage.setAttribute('src', `${covidNews.articles[i].urlToImage}`);
                    newsImage.classList = "card-img-top";

                    let cardContainer = document.createElement('div');
                    cardContainer.classList = "col mb-5";

                    let card = document.createElement('div');
                    card.classList = "card h-100";

                    let cardHead = document.createElement('div');
                    cardHead.classList = "card-header";

                    let cardBody = document.createElement('div');
                    cardBody.classList = "card-body p-4 text-center";

                    let title = document.createElement("h5");
                    title.classList = "fw-bolder";
                    title.innerText = covidNews.articles[i].title;


                    cardHead.appendChild(newsImage);
                    cardBody.appendChild(title);
                    card.appendChild(cardHead);
                    card.appendChild(cardBody);
                    cardContainer.appendChild(card);
                    linkToArticle.appendChild(cardContainer);
                    newsContainer.appendChild(linkToArticle);
                }
            });
    </script>
@endsection
