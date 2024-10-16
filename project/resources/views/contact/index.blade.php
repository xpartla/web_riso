@include('components.header')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Richard Masaryk - Kontakt | Kontaktné Informácie | Stretnutie</title>
<meta name="description" content="Prejdite si moju kontaktnú sekciu, kde nájdete rôzne informácie o mne, ako linky na sociálne siete, alebo si priamo odtiaľto dohodnite online stretnutie.">
<meta name="robots" content="index, follow">
@include('components.header-2')
@include('components.nav')
<section class="contact-section py-5">
    <div class="container">
        <div class="row align-items-start mb-5">
            <div class="col-lg-6">
                <div class="contact-info p-4 rounded">
                    <h1>{{__("Get in Touch")}}</h1>
{{--                    <p class="social-icons">--}}
{{--                        <a href="https://www.instagram.com/" target="_blank" class="me-2 social">--}}
{{--                            <i class="fa-brands fa-instagram fa-2xl"></i>--}}
{{--                        </a>--}}
{{--                        <a href="https://www.facebook.com/" target="_blank" class="me-2 social">--}}
{{--                            <i class="fa-brands fa-facebook fa-2xl"></i>--}}
{{--                        </a>--}}
{{--                        <a href="https://twitter.com/" target="_blank" class="me-2 social">--}}
{{--                            <i class="fa-brands fa-twitter fa-2xl"></i>--}}
{{--                        </a>--}}
{{--                        <a href="https://www.linkedin.com/" target="_blank" class="me-2 social">--}}
{{--                            <i class="fa-brands fa-linkedin fa-2xl"></i>--}}
{{--                        </a>--}}
{{--                    </p>--}}
                    <p class="underlined">{{__("Richard Masaryk")}}</p>
                    <p><strong>{{__("Email")}}: </strong> {{__("richard@richardmasaryk.sk")}}</p>
                    <p><strong>{{__("Phone")}}: </strong> {{__("0902 933 200")}}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="contact-form p-4 rounded" onsubmit="sendMail(event)">
                    <div class="mb-3">
                        <label for="subject" class="form-label">{{__("Subject")}}</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">{{__("Message")}}</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">{{__("Send Message")}}</button>
                </form>
            </div>
        </div>
        <div class="row align-items-start mt-5">
            <div class="col-lg-6">
                <h2>{{__("Book a Consultation")}}</h2>
                <p>{{__("If you are interested in my services, please schedule a non-binding consultation from the available slots, where we can discuss what you might need.")}}</p>
            </div>
            <div class="col-lg-6">
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/richard-masaryk-towerfinance?hide_gdpr_banner=1&background_color=f7f9fb&text_color=606c38&primary_color=283618" style="min-width:320px;height:700px;"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <!-- Calendly inline widget end -->
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/contact.js')}}"></script>
<script>
    function sendMail(event) {
        event.preventDefault();

        var subject = document.getElementById('subject').value;
        var message = document.getElementById('message').value;

        var mailtoLink = 'mailto:richard@richardmasaryk.sk'
            + '?subject=' + encodeURIComponent(subject)
            + '&body=' + encodeURIComponent(message);

        window.location.href = mailtoLink;
    }
</script>
@include('components.footer')
