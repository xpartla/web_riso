<section id="calculator" class="py-5">
    <div class="container calculator-section">
        <h2 class="mb-4">Calculate Your Strategy</h2>
        <p class="lead mb-4">Use our calculator to estimate the outcomes of your strategy based on various scenarios.</p>
        <div class="row">
            <div class="col-lg-6">
                <form id="calculator-form">
                    <div class="mb-3">
                        <label for="goal" class="form-label">Goal</label>
                        <select id="goal" class="form-select">
                            <option value="goal1">Increase Revenue</option>
                            <option value="goal2">Expand Market</option>
                            <option value="goal3">Improve Efficiency</option>
                            <option value="goal4">Reduce Costs</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <select id="time" class="form-select">
                            <option value="3">3 Years</option>
                            <option value="5">5 Years</option>
                            <option value="20">20 Years</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cost" class="form-label">Cost</label>
                        <select id="cost" class="form-select">
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="periodicity" class="form-label">Periodicity</label>
                        <select id="periodicity" class="form-select">
                            <option value="one-time">One-time</option>
                            <option value="monthly">Monthly</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="annually">Annually</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strategy" class="form-label">Strategy</label>
                        <select id="strategy" class="form-select">
                            <option value="aggressive">Aggressive</option>
                            <option value="balanced">Balanced</option>
                            <option value="conservative">Conservative</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary calculator-button" onclick="calculate()">Calculate</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h4>Results</h4>
                <canvas id="resultsChart"></canvas>
                <div id="feedback" class="mt-4"></div>
            </div>
        </div>
    </div>
</section>
