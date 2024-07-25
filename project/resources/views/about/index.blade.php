@include('components.header')
@include('components.nav')
<section class="about-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="animated-title">
                    <div class="text-top">
                        <div>
                            <span>Richard Masaryk</span>
                            <span>áno podobám sa</span>
                        </div>
                    </div>
                    <div class="text-bottom">
                        <div>na apple design</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="image-hover-container">
                    <img src="{{asset('img/general/test.png')}}" alt="Description Image" class="img-fluid about-img">
                    <div class="hover-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis eros eu tincidunt euismod. Nullam pretium lorem in semper rutrum. Suspendisse luctus ac neque pulvinar cursus. Suspendisse feugiat, dolor at sodales vehicula, dolor risus consequat orci, vel cursus quam lacus sit amet quam.</p>
                        <!--<button class="btn btn-primary mt-3 hover-btn">Go to FAQ</button> -->
                    </div>
                    <div class="hover-hint">Learn more</div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="services-section">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="faq-section">
                    <div class="faq-item">
                        <div class="faq-question">Question 1 <i class="fas fa-chevron-down"></i></div>
                        <div class="faq-answer">Answer to question 1.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Question 2 <i class="fas fa-chevron-down"></i></div>
                        <div class="faq-answer">Answer to question 2.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Question 3 <i class="fas fa-chevron-down"></i></div>
                        <div class="faq-answer">Answer to question 3.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/about.js')}}"></script>
@include('components.footer')
