<section class="main-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                <div class="txt-rotate-container">
                    <h1 class="mb-4">{{ __("Financial expertise does not come from a suit, but from ") }}<span class="txt-rotate" data-period="2000" data-rotate='@json($words)'></span></h1>
                </div>                <p class="lead mb-4">{{__('My goal is to provide high-quality financial services and advice tailored to everyone. Therefore, my main focus is not on how I look, but on how I can help you achieve your financial goals. Your well-being and satisfaction are my priorities, not superficial impressions.')}}</p>
                <a href="https://calendly.com/richard-masaryk-towerfinance" class="btn btn-primary">{{__('Schedule a meeting')}}</a>
                <div class="cta-container mt-4 text-lg-end">
                    <p class="lead mb-4">{{__('Try the investment calculator to see how quickly you can achieve your goals. I will also give you a brief commentary on each calculation.')}}</p>
                    <a rel="noopener" target="_blank" href="#calculator" class="btn btn-secondary">{{__('Use the calculator')}}</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('img/general/portrait.jpg') }}" alt="Portrét poskytovateľa finančných služieb" class="img-fluid">
            </div>
        </div>
    </div>
</section>
