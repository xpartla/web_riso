@include('components.header')
@include('components.nav')
<section class="about-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="animated-title">
                    <div class="text-top">
                        <div>
                            <span>{{__("Richard Masaryk:")}}</span>
                            <span>{{__("Partner in")}}</span>
                        </div>
                    </div>
                    <div class="text-bottom">
                        <div>{{__("Your wealth growth")}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="image-hover-container">
                    <img src="{{asset('img/general/test.png')}}" alt="Description Image" class="img-fluid about-img">
                    <div class="hover-content">
                        <p>{{__("I offer you a long-term partnership focused on effective planning and growing your wealth. I became interested in the capital market during my bilingual studies at a business academy, and my enthusiasm for this field continued throughout my law studies. I applied my knowledge in practice and actively grew my finances. Before becoming a private advisor, I worked in the budget and finance department and studied economics and management.")}}</p>
                        <p>{{__("In my free time, I enjoy sports and exploring the world with my fiancée. Recently, we adopted our dog, Fénix, from a shelter, and we take joy in every small progress he makes.")}}</p>
                    </div>
                    <div class="hover-hint">{{__("Learn More")}}</div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="services-section">
                    <h2 id="faq">{{__("FAQ")}}</h2>
                </div>
                <div class="faq-section">
{{--otazky su v controlleri                    --}}
                    @foreach($faqs[app()->getLocale()] as $faq)
                        <div class="faq-item">
                            <div class="faq-question">{{ $faq['question'] }} <i class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">{{ $faq['answer'] }}</div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/about.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.image-hover-container');
        const hoverHint = document.querySelector('.hover-hint');
        const hoverContent = document.querySelector('.hover-content');
        const image = document.querySelector('.image-hover-container img');

        hoverHint.addEventListener('click', function() {
            hoverContent.classList.toggle('active');
            image.classList.toggle('active');
            hoverHint.classList.toggle('inactive');
            container.classList.toggle('stretch');
        });
    });
</script>

@include('components.footer')
