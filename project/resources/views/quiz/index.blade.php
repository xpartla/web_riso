@include('components.header')
@include('components.nav')
<!-- Main Section -->
<div class="quiz-body">
    <section class="quiz-intro py-5 text-center">
        <div class="container">
            <h1 class="mb-4">{{__("Welcome to the quiz!")}}</h1>
            <p class="lead mb-4">{{__("Test your knowledge in the field of financial literacy")}}</p>
            <button class="btn btn-primary btn-lg" id="startQuizBtn">{{__("Start Quiz")}}</button>
        </div>
    </section>

    <section class="quiz-container py-5" style="display:none;">
        <div class="container">
            <div class="progress mb-4">
                <div class="progress-bar" id="progressBar" role="progressbar" style="width: 0;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div id="questionContainer" class="mb-4"></div>
            <button class="btn btn-primary" id="nextQuestionBtn" style="display:none;">{{__("Next Question")}}</button>
        </div>
    </section>

    <section class="quiz-complete py-5 text-center" style="display:none;">
        <div class="container">
            <h2 id="finalScore"></h2>
            <form id="feedbackForm" class="mt-4">
                <div class="mb-3">
                    <label for="userEmail" class="form-label">{{__("Your Email")}}</label>
                    <input type="email" class="form-control" id="userEmail">
                </div>
                <div class="mb-3">
                    <label for="userQuestion" class="form-label">{{__("Your Question")}}</label>
                    <textarea class="form-control" id="userQuestion" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">{{__("Send")}}</button>
            </form>
            <h2 class="pt-3">{{__("Or set up an online consultation")}}</h2>
            <button class="btn btn-primary">{{__("Reservation")}}</button>
        </div>
    </section>
</div>
<script>
    window.translations = {
        question_1: @json(__('quiz.question_1')),
        question_2: @json(__('quiz.question_2')),
        question_3: @json(__('quiz.question_3')),
        question_4: @json(__('quiz.question_4')),
        question_5: @json(__('quiz.question_5')),
        question_6: @json(__('quiz.question_6')),
        question_7: @json(__('quiz.question_7')),
        question_8: @json(__('quiz.question_8')),
        question_9: @json(__('quiz.question_9')),
        question_10: @json(__('quiz.question_10')),
        choices: @json(__('quiz.choices')),
        score : @json(__('quiz.score'))
    };
</script>
<script src="{{asset('js/quiz.js')}}"></script>
@include('components.footer')
