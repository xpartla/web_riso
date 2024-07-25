@include('components.header')
@include('components.nav')

<section class="main-section py-5 services-section">
    <div class="container">
        <h1 class="mb-4">Our Services</h1>
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2><span>Administration</span></h2>
                <div class="p-bg ps-2 pe-2 pt-2">
                    <p>Our finance administration service ensures that all financial operations are managed efficiently and accurately. We handle everything from bookkeeping to payroll management, allowing you to focus on growing your business.</p>
                    <p>Our finance administration service ensures that all financial operations are managed efficiently and accurately. We handle everything from bookkeeping to payroll management, allowing you to focus on growing your business.</p>
                </div>
                <div>
                    <p class="btn-text fw-bold">Would you like an online consultation?</p>
                    <a href="#" class="btn btn-primary btn-lg mb-3">Reservation</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/general/service.jpg')}}" alt="Finance Administration" class="img-fluid">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-6 order-lg-2">
                <h2><span>Investment Advice</span></h2>
                <div class="p-bg ps-2 pe-2 pt-2">
                    <p>With our investment advice, you receive expert guidance on how to maximize your returns and build a robust investment portfolio. We tailor our strategies to your specific needs and risk tolerance.</p>
                    <p>With our investment advice, you receive expert guidance on how to maximize your returns and build a robust investment portfolio. We tailor our strategies to your specific needs and risk tolerance.</p>
                </div>
                <div>
                    <p class="btn-text fw-bold">Do you wish to learn more?</p>
                    <a href="#" class="btn btn-primary btn-lg mb-3">Visit FAQ</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <img src="{{asset('img/general/service.jpg')}}" alt="Investment Advice" class="img-fluid">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-6">
                <h2><span>Financial Audit</span></h2>
                <div class="p-bg ps-2 pe-2 pt-2">
                    <p>Our financial audit services provide a thorough review of your financial statements and operations. We help you ensure compliance with regulations and identify areas for improvement to enhance your financial health.</p>
                    <p>Our financial audit services provide a thorough review of your financial statements and operations. We help you ensure compliance with regulations and identify areas for improvement to enhance your financial health.</p>
                </div>
                <div>
                    <p class="btn-text fw-bold">Read more about this topic in our articles section </p>
                    <a href="#" class="btn btn-primary btn-lg mb-3">Articles</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/general/service.jpg')}}" alt="Financial Audit" class="img-fluid">
            </div>
        </div>

    </div>
</section>

@include('components.footer')
