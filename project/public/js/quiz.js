document.addEventListener('DOMContentLoaded', () => {
    const startQuizBtn = document.getElementById('startQuizBtn');
    const quizIntro = document.querySelector('.quiz-intro');
    const quizContainer = document.querySelector('.quiz-container');
    const questionContainer = document.getElementById('questionContainer');
    const nextQuestionBtn = document.getElementById('nextQuestionBtn');
    const progressBar = document.getElementById('progressBar');
    const quizComplete = document.querySelector('.quiz-complete');
    const finalScore = document.getElementById('finalScore');
    const feedbackForm = document.getElementById('feedbackForm');

    const questions = [
        {
            question: window.translations.question_1,
            choices: [window.translations.choices.a_a, window.translations.choices.a_b, window.translations.choices.a_c, window.translations.choices.a_d, ],
            correct: window.translations.choices.a_b
        },
        {
            question: window.translations.question_2,
            choices: [window.translations.choices.b_a, window.translations.choices.b_b],
            correct: window.translations.choices.b_a
        },
        {
            question: window.translations.question_3,
            choices: [window.translations.choices.c_a, window.translations.choices.c_b, window.translations.choices.c_c, window.translations.choices.c_d, ],
            correct: window.translations.choices.c_a
        },
        {
            question: window.translations.question_4,
            choices: [window.translations.choices.d_a, window.translations.choices.d_b, window.translations.choices.d_c, window.translations.choices.d_d, ],
            correct: window.translations.choices.d_d
        },
        {
            question: window.translations.question_5,
            choices: [window.translations.choices.e_a, window.translations.choices.e_b],
            correct: window.translations.choices.e_b
        },
        {
            question: window.translations.question_6,
            choices: [window.translations.choices.f_a, window.translations.choices.f_b, window.translations.choices.f_c, window.translations.choices.f_d, ],
            correct: window.translations.choices.f_c
        },
        {
            question: window.translations.question_7,
            choices: [window.translations.choices.g_a, window.translations.choices.g_b, window.translations.choices.g_c, window.translations.choices.g_d, ],
            correct: window.translations.choices.g_d
        },
        {
            question: window.translations.question_8,
            choices: [window.translations.choices.h_a, window.translations.choices.h_b, window.translations.choices.h_c, window.translations.choices.h_d, ],
            correct: window.translations.choices.h_c
        },
        {
            question: window.translations.question_9,
            choices: [window.translations.choices.i_a, window.translations.choices.i_b, window.translations.choices.i_c, window.translations.choices.i_d, ],
            correct: window.translations.choices.i_a
        },
        {
            question: window.translations.question_10,
            choices: [window.translations.choices.j_a, window.translations.choices.j_b, window.translations.choices.j_c, window.translations.choices.j_d, ],
            correct: window.translations.choices.j_b
        },
    ];

    let currentQuestionIndex = 0;
    let score = 0;

    function showQuestion() {
        questionContainer.style.opacity = '0';
        setTimeout(() => {
            questionContainer.innerHTML = '';
            const questionObj = questions[currentQuestionIndex];
            const questionElement = document.createElement('h5');
            questionElement.textContent = questionObj.question;
            questionContainer.appendChild(questionElement);

            questionObj.choices.forEach((choice, index) => {
                const choiceInput = document.createElement('input');
                choiceInput.type = 'radio';
                choiceInput.name = 'quizChoice';
                choiceInput.value = choice;
                choiceInput.id = `choice-${index}`;

                const choiceLabel = document.createElement('label');
                choiceLabel.classList.add('d-block', 'py-2');
                choiceLabel.setAttribute('for', `choice-${index}`);
                choiceLabel.textContent = choice;

                questionContainer.appendChild(choiceInput);
                questionContainer.appendChild(choiceLabel);
            });

            questionContainer.style.opacity = '1';
        }, 300);
        nextQuestionBtn.style.display = 'inline-block';
    }

    function updateProgress() {
        const progressPercentage = ((currentQuestionIndex + 1) / questions.length) * 100;
        progressBar.style.width = progressPercentage + '%';
        progressBar.setAttribute('aria-valuenow', progressPercentage);
    }

    startQuizBtn.addEventListener('click', () => {
        quizIntro.style.display = 'none';
        quizContainer.style.display = 'block';
        quizContainer.style.opacity = '0';
        setTimeout(() => {
            quizContainer.style.opacity = '1';
            showQuestion();
            updateProgress();
        }, 100);
    });

    nextQuestionBtn.addEventListener('click', () => {
        const selectedChoice = document.querySelector('input[name="quizChoice"]:checked');
        if (!selectedChoice) {
            alert('Please select an answer!');
            return;
        }

        if (selectedChoice.value === questions[currentQuestionIndex].correct) {
            score++;
        }

        currentQuestionIndex++;

        if (currentQuestionIndex < questions.length) {
            showQuestion();
            updateProgress();
        } else {
            quizContainer.style.display = 'none';
            finalScore.innerHTML = `You scored ${score} out of ${questions.length}`;
            quizComplete.style.display = 'block';
        }
    });

    feedbackForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const userEmail = document.getElementById('userEmail').value;
        const userQuestion = document.getElementById('userQuestion').value;

        if (!userEmail || !userQuestion) {
            alert('Please fill in both fields!');
            return;
        }

        // Simulate sending email - replace with actual email sending mechanism
        alert(`Email sent to ${userEmail} with question: ${userQuestion}`);

        feedbackForm.reset();
    });
});
