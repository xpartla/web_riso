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
                        <img src="{{ asset('img/icons/owner.png') }}" alt="Icon 1">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('Protection of your assets and securing income')}}</h4>
                    <ul class="content">
                        <li><p>something</p></li>
                    </ul>
                    <div class="icon">
                        <img src="{{ asset('img/icons/owner.png') }}" alt="Icon 1">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('Creating a financial boost for a child')}}</h4>
                    <ul class="content">
                        <li><p>something</p></li>
                    </ul>
                    <div class="icon">
                        <img src="{{ asset('img/icons/owner.png') }}" alt="Icon 1">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('Creating a reserve for unexpected situations')}}</h4>
                    <ul class="content">
                        <li><p>something</p></li>
                    </ul>
                    <div class="icon">
                        <img src="{{ asset('img/icons/owner.png') }}" alt="Icon 1">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('You won’t have to rely solely on the state pension')}}</h4>
                    <ul class="content">
                        <li><p>something</p></li>
                    </ul>
                    <div class="icon">
                        <img src="{{ asset('img/icons/owner.png') }}" alt="Icon 1">
                    </div>
                </li>
                <li class="help-card">
                    <h4>{{__('Appreciation of financial assets or financing a new kitchen or car')}}</h4>
                    <ul class="content">
                        <li><p>something</p></li>
                    </ul>
                    <div class="icon">
                        <img src="{{ asset('img/icons/owner.png') }}" alt="Icon 1">
                    </div>
                </li>
            </ul>
            <button onclick="handleHelpClick('next')" class="scroll-arrow right-arrow" aria-label="Scroll right"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>
