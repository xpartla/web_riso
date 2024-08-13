<section id="customer-types" class="py-5">
    <div class="container">
        <h2 class="mb-4">{{__('Who are my customers')}}</h2>
        <div class="customer-cards-container">
            <button onclick="handleClick('previous')" class="scroll-arrow left-arrow" aria-label="Scroll left"><i class="fas fa-chevron-left"></i></button>
            <ul class="customer-cards-wrapper">
                <li class="customer-card">
                    <div class="icon"><img src="{{ asset('img/icons/student.png') }}" alt="Icon 1"></div>
                    <div class="content">
                        <h4>{{__('University students')}}</h4>
                        <p>{{__('Who think about the future and know they have to help themselves.')}}</p>
                    </div>
                </li>
                <li class="customer-card">
                    <div class="icon"><img src="{{ asset('img/icons/family.png') }}" alt="Icon 2"></div>
                    <div class="content">
                        <h4>{{__('Young families')}}</h4>
                        <p>{{__('Who want to organize their finances, check contracts, and set up effective work with them.')}}</p>
                    </div>
                </li>
                <li class="customer-card">
                    <div class="icon"><img src="{{ asset('img/icons/young.png') }}" alt="Icon 3"></div>
                    <div class="content">
                        <h4>{{__('Young people')}}</h4>
                        <p>{{__('Who started working after school and would like to develop good financial habits.')}}</p>
                    </div>
                </li>
                <li class="customer-card">
                    <div class="icon"><img src="{{ asset('img/icons/mature.png') }}" alt="Icon 1"></div>
                    <div class="content">
                        <h4>{{__('Mature and knowledgeable people')}}</h4>
                        <p>{{__("Who have their finances under control but don't have as much time to follow rapidly changing trends and regularly reflect on the financial market.")}}</p>
                    </div>
                </li>
                <li class="customer-card">
                    <div class="icon"><img src="{{ asset('img/icons/foreign.png') }}" alt="Icon 1"></div>
                    <div class="content">
                        <h4>{{__('Foreigners')}}</h4>
                        <p>{{__('Who want to stay in Slovakia and would like help with managing their finances.')}}</p>
                    </div>
                </li>
                <li class="customer-card">
                    <div class="icon"><img src="{{ asset('img/icons/freelance.png') }}" alt="Icon 1"></div>
                    <div class="content">
                        <h4>{{__('Freelancers and entrepreneurs')}}</h4>
                        <p>{{__("Who know the state won't take care of them and want to have a well-planned and prepared future, or want to appreciate their hard-earned financial assets.")}}</p>
                    </div>
                </li>
                <li class="customer-card">
                    <div class="icon"><img src="{{ asset('img/icons/employees.png') }}" alt="Icon 1"></div>
                    <div class="content">
                        <h4>{{__('Employees')}}</h4>
                        <p>{{__("Who, like freelancers and entrepreneurs, want to appreciate their hard-earned financial assets or feel the need to plan and set up finances.")}}</p>
                    </div>
                </li>
                <li class="customer-card">
                    <div class="icon"><img src="{{ asset('img/icons/company.png') }}" alt="Icon 1"></div>
                    <div class="content">
                        <h4>{{__('Companies')}}</h4>
                        <p>{{__('Small, medium, or large, who want to offer their employees benefits in the form of education, a 3rd pillar, their own pension fund, and other options provided by the financial market.')}}</p>
                    </div>
                </li>
            </ul>
            <button onclick="handleClick('next')" class="scroll-arrow right-arrow" aria-label="Scroll right"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>
