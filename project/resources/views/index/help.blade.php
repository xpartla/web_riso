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
                        <img src="{{ asset('img/icons/mortgage.png') }}" alt="Icon 1">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('Protection of your assets and securing income')}}</h4>
                    <ul class="content">
                        <li>{{__("Property Insurance")}}</li>
                        <li>{{__("Vehicle Insurance")}}</li>
                    </ul>
                    <div class="icon icon-big-wrapper">
                        <img class="icon-big" src="{{ asset('img/icons/assets.png') }}" alt="Icon 1">
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
                        <img class="icon-big" src="{{ asset('img/icons/boost.png') }}" alt="Icon 1">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('You won’t have to rely solely on the state pension')}}</h4>
                    <ul class="content">
                        <li>{{__("You are 25 years old and know that the state will not allow you to retire at 65. Therefore, you will not rely on it and will save €100 per month for 40 years. With proper investment, you will have €324,000 for retirement, which amounts to €1,100 per month.")}}</li>
                    </ul>
                    <div class="icon">
                        <img src="{{ asset('img/icons/retirement.png') }}" alt="Icon 1">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('Last but not least, I can help you with the appreciation of financial assets to prevent them from losing value. We can also review, compare, and plan other goals you want to achieve.')}}</h4>
                    <div class="icon icon-big-wrapper">
                        <img class="icon-big" src="{{ asset('img/icons/financial_asset.png') }}" alt="Icon 1">
                    </div>
                </li>
            </ul>
            <button onclick="handleHelpClick('next')" class="scroll-arrow right-arrow" aria-label="Scroll right"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>
