@include('components.header')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Richard Masaryk | Ponuka mojich služieb</title>
<meta name="description" content="Môžete sa dozvedieť viac o službách ktoré Vám ponúkam, ako napríklad Finančná Správa, Finančný Audit, Investičné poradenstvo a nezáväzné konzultácie.">
<meta name="robots" content="index, follow">
@include('components.header-2')
@include('components.nav')

<section class="main-section py-5 services-section">
    <div class="container">
        <h1 class="mb-4">{{__("My services")}}</h1>
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2><span>{{__('Financial management')}}</span></h2>
                <div class="p-bg ps-2 pe-2 pt-2">
                    <p>{{__('Do you want to be sure of your decisions in the financial market? I offer you long-term cooperation, during which we will analyze your current situation, set goals, and prepare a path to achieve them. If you decide to cooperate, we will actively work on your portfolio. We will communicate and evaluate progress regularly. I will provide you with current information from the financial market so that we can respond flexibly. I am here for you, whether you need help with travel insurance or tailored investment strategies.')}}</p>
                </div>
                <div>
                    <p class="btn-text fw-bold">{{__("Would you like an online consultation?")}}</p>
                    <a href="https://calendly.com/richard-masaryk-towerfinance" class="btn btn-primary btn-lg mb-3 services-btn">{{__("Reservation")}}</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/general/management.png')}}" alt="Finančná správa ikona" class="img-fluid">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-6 order-lg-2">
                <h2><span>{{__('Financial audit')}}</span></h2>
                <div class="p-bg ps-2 pe-2 pt-2">
                    <p>{{__("Are you unsure if you have your finances set up correctly and are using the best products on the financial market? Contact me. We will go through all your contracts to better understand your goals and reasons for choosing specific products. Based on this, I will prepare a comparison of financial products and provide clear information, including hidden fees and conditions. Then you can decide if you want to continue the cooperation.")}}</p>
                </div>
                <div>
                    <p class="btn-text fw-bold">{{__("Do you wish to learn more about me?")}}</p>
                    <a href="{{ route('about.index') }}#faq" class="btn btn-primary btn-lg mb-3 services-btn">{{__("Visit FAQ")}}</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <img src="{{asset('img/general/audit.png')}}" alt="Finančný audit ikona" class="img-fluid">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-6">
                <h2><span>{{__("Investment advice")}}</span></h2>
                <div class="p-bg ps-2 pe-2 pt-2">
                    <p>{{__("Do you want to start investing and don't know how? Book a date, during which we will discuss: the investment period, the amount you want to invest, and your target amount. This information will help me present all options to you. Then you can decide if you want to continue with one of the offered options.")}}</p>
                </div>
                <div>
                    <p class="btn-text fw-bold">{{__("Read more about this topic in our articles section")}}</p>
                    <a href="{{ route('articles.index') }}" class="btn btn-primary btn-lg mb-3 services-btn">{{__("Articles")}}</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/general/advice.png')}}" alt="Investičné poradenstvo ikona" class="img-fluid">
            </div>
        </div>

    </div>
</section>

@include('components.footer')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all rows that contain both an image and a button
        const rows = document.querySelectorAll('.services-section .row');

        rows.forEach(row => {
            const image = row.querySelector('img');
            const button = row.querySelector('.services-btn');

            if (image && button) {
                // Add event listeners to the image
                image.addEventListener('mouseover', () => {
                    button.classList.add('hovered'); // Add class when hovering the image
                });

                image.addEventListener('mouseout', () => {
                    button.classList.remove('hovered'); // Remove class when not hovering the image
                });
            }
        });
    });
</script>
