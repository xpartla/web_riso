<section id="help-you" class="py-5">
    <div class="container">
        <h2 class="mb-4">{{__('How can I help you')}}</h2>
        <div class="help-cards-container">
            <button onclick="handleHelpClick('previous')" class="scroll-arrow left-arrow" aria-label="Scroll left"><i class="fas fa-chevron-left"></i></button>
            <ul class="help-cards-wrapper">
                <li class="help-card">
                    <h4>{{__('Mortgage')}}</h4>
                    <ul class="content">
                        <li>{{__('Complete the necessary formalities')}}</li>
                        <li>{{__('Secure the best offer')}}</li>
                        <li>{{__('Consolidate the mortgage')}}</li>
                        <li>{{__('Increase the mortgage')}}</li>
                        <li>{{__('Early repayment of the mortgage')}}</li>
                    </ul>
                    <div class="icon">
                        <img src="{{ asset('img/icons/mortgage.png') }}" alt="Ikona hypotéky">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('Protection of your assets and securing income')}}</h4>
                    <ul class="content">
                        <li>{{__("Property Insurance")}}</li>
                        <li>{{__("Vehicle Insurance")}}</li>
                        <li>{{__("Income Insurance")}}</li>
                    </ul>
                    <div class="icon icon-big-wrapper">
                        <img class="icon-big" src="{{ asset('img/icons/assets.png') }}" alt="Ikona ochrany majetku">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('Creating a financial boost for a child')}}</h4>
                    <ul class="content">
                        <li>{{__("For Higher Education")}}</li>
                        <li>{{__("Start in Life")}}</li>
                        <li>{{__("Other Goals")}}</li>
                    </ul>
                    <div class="icon icon-big-wrapper">
                        <img class="icon-big" src="{{ asset('img/icons/boost.png') }}" alt="Ikona Rakety">
                    </div>
                </li>
                <li class="help-card">
                    <h4 class="single">{{__('You won’t have to rely solely on the state pension')}}</h4>
                    <div class="icon">
                        <img src="{{ asset('img/icons/retirement.png') }}" alt="Ikona pre Dôchodok">
                    </div>
                </li>
                <li class="help-card">
                    <h4 class="single">{{__("Property Appreciation")}}</h4>
                    <div class="icon icon-big-wrapper">
                        <img class="icon-big" src="{{ asset('img/icons/financial_asset.png') }}" alt="Ikona pre Zhodnocovanie majetku">
                    </div>
                </li>
            </ul>
            <button onclick="handleHelpClick('next')" class="scroll-arrow right-arrow" aria-label="Scroll right"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>
