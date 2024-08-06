<section id="calculator" class="py-5">
    <div class="container calculator-section">
        <h2 class="mb-4">{{__("Watch your investment potential")}}</h2>
        <p class="lead mb-4">{{__("Use the calculator to see the best way to invest.")}}</p>
        <div class="row">
            <div class="col-lg-6">
                <form id="calculator-form">
                    <div class="mb-3">
                        <label for="goal" class="form-label">{{__('Goals')}}</label>
                        <select id="goal" class="form-select">
                            <option value="goal1">{{__("Early repayment of the mortgage")}}</option>
                            <option value="goal2">{{__("Build a sufficient reserve")}}</option>
                            <option value="goal3">{{__("Save for children's college or start in life")}}</option>
                            <option value="goal4">{{__("Create a retirement fund")}}</option>
                            <option value="goal5">{{__("Appreciate financial assets")}}</option>
                            <option value="goal6">{{__("Other goals (car, vacation, kitchen)")}}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">{{__("Investment horizon")}}</label>
                        <select id="time" class="form-select">
                            <option value="3">3 Years</option>
                            <option value="5">5 Years</option>
                            <option value="20">20 Years</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cost" class="form-label">{{__("Investment amount")}}</label>
                        <select id="cost" class="form-select">
                            <option value="low">{{__("One-time")}}</option>
                            <option value="medium">{{__("One-time")}}</option>
                            <option value="high">{{__("One-time")}}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="periodicity" class="form-label">{{__("Savings method")}}</label>
                        <select id="periodicity" class="form-select">
                            <option value="one-time">{{__( "One-time")}}</option>
                            <option value="monthly">{{__("Monthly")}}</option>
                            <option value="quarterly">{{__("Quarterly")}}</option>
                            <option value="annually">{{__("Annually")}}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strategy" class="form-label">{{__("Strategy")}}</label>
                        <select id="strategy" class="form-select">
                            <option value="aggressive">{{__("Dynamic")}}</option>
                            <option value="balanced">{{__("Balanced")}}</option>
                            <option value="conservative">{{__("Conservative")}}</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary calculator-button" onclick="calculate()">{{__( "Calculate")}}</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h4>{{__("Results")}}</h4>
                <canvas id="resultsChart"></canvas>
                <div id="feedback" class="mt-4"></div>
            </div>
        </div>
    </div>
</section>
