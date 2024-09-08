document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-link');
    const nightModeToggle = document.querySelector('#nightModeToggle');
    const body = document.body;

    navLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            gsap.to(link, {
                duration: 0.3,
                scale: 1.1,
                color: 'var(--alt-secondary-color)',
                ease: 'power2.out'
            });
            link.classList.add('hovered');
        });

        link.addEventListener('mouseleave', () => {
            gsap.to(link, {
                duration: 0.3,
                scale: 1,
                color: 'var(--secondary-color)',
                ease: 'power2.out'
            });
            link.classList.remove('hovered');
        });
    });

    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        navbar.classList.toggle('shrink', window.scrollY > 50);
    });

    const dropdownToggle = document.querySelector('#languageDropdown');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownToggle.addEventListener('click', (e) => {
        e.preventDefault();
        const isVisible = dropdownMenu.style.display === 'block';

        gsap.to(dropdownMenu, {
            duration: 0.5,
            opacity: isVisible ? 0 : 1,
            y: isVisible ? -10 : 0,
            onComplete: () => {
                dropdownMenu.style.display = isVisible ? 'none' : 'block';
            }
        });
    });

    document.addEventListener('click', (e) => {
        if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
            gsap.to(dropdownMenu, {
                duration: 0.5,
                opacity: 0,
                y: -10,
                onComplete: () => {
                    dropdownMenu.style.display = 'none';
                }
            });
        }
    });

    // Modern text rotation
    class TxtRotate {
        constructor(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.isDeleting = false;
            this.tick();
        }

        tick() {
            const i = this.loopNum % this.toRotate.length;
            const fullTxt = this.toRotate[i];

            this.txt = this.isDeleting
                ? fullTxt.substring(0, this.txt.length - 1)
                : fullTxt.substring(0, this.txt.length + 1);

            this.el.innerHTML = `<span class="wrap">${this.txt}</span>`;

            let delta = 300 - Math.random() * 100;
            if (this.isDeleting) delta /= 2;

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(() => this.tick(), delta);
        }
    }

    window.onload = () => {
        const elements = document.querySelectorAll('.txt-rotate');
        elements.forEach(el => {
            const toRotate = el.getAttribute('data-rotate');
            const period = el.getAttribute('data-period');
            if (toRotate) {
                new TxtRotate(el, JSON.parse(toRotate), period);
            }
        });

        const css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
        document.body.appendChild(css);
    };

    // Image animation using GSAP
    const images = document.querySelectorAll('.main-section img');

    images.forEach(image => {
        let isPhaseThree = false;

        // Initial animation on scroll into view
        gsap.from(image, {
            scrollTrigger: {
                trigger: image,
                start: "top 80%",  // Starts animation when the top of the image hits 80% of the viewport height
                toggleActions: "play none none none"
            },
            duration: 1,
            opacity: 0,
            y: 50,
            ease: 'power2.out'
        });

        function getClipPath() {
            if (window.matchMedia("(max-width: 992px)").matches) {
                return {
                    phase1: 'polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%)',
                    phase2: 'polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%)',
                    phase3: 'polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%)',
                };
            } else {
                return {
                    phase1: 'polygon(25% 0%, 99% 0%, 75% 100%, 1% 100%)',
                    phase2: 'polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%)',
                    phase3: 'polygon(0% 0%, 75% 0%, 99% 100%, 25% 100%)'
                };
            }
        }

        image.addEventListener('mouseenter', () => {
            gsap.to(image, {
                duration: 0.5,
                clipPath: getClipPath().phase2,
                ease: 'power2.out'
            });
        });

        image.addEventListener('mouseleave', () => {
            gsap.to(image, {
                duration: 0.5,
                clipPath: isPhaseThree ? getClipPath().phase1 : getClipPath().phase3,
                ease: 'power2.out',
                onComplete: () => {
                    isPhaseThree = !isPhaseThree;
                }
            });
        });

        window.addEventListener('resize', () => {
            gsap.set(image, { clipPath: getClipPath().phase1 });
            isPhaseThree = false;
        });
    });


    const calculatorBtn = document.querySelector('.cta-container .btn-secondary');
    calculatorBtn.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector('#calculator').scrollIntoView({
            behavior: 'smooth'
        });
    });


    let resultsChart;

    var slider = document.getElementById("time");
    var output = document.getElementById("outputValue");
    output.innerHTML = slider.value;
    slider.oninput = function() {
        output.innerHTML = this.value;
    }

    window.calculate = function() {
        const goal = document.getElementById('goal').value;
        const time = parseInt(document.getElementById('time').value, 10);
        const cost = parseFloat(document.getElementById('cost').value);
        const strategy = document.getElementById('strategy').value;

        const translations = window.translations;

        let rates;
        switch(strategy) {
            case 'conservative':
                rates = { pessimistic: 0, realistic: 0.02, optimistic: 0.04 };
                break;
            case 'balanced':
                rates = { pessimistic: 0.02, realistic: 0.05, optimistic: 0.07 };
                break;
            case 'aggressive':
                rates = { pessimistic: 0.05, realistic: 0.075, optimistic: 0.10 };
                break;
        }

        let intervals, labels;
        if (time < 3) {
            intervals = time * 12 / 3; // 3-month intervals
            labels = Array.from({length: intervals}, (v, i) => `${i * 3 + 3} mes.`);
        } else {
            intervals = time;
            labels = Array.from({length: time}, (v, i) => new Date().getFullYear() + i);
        }

        const futureValues = {
            pessimistic: calculateFutureValue(cost, rates.pessimistic, intervals, time),
            realistic: calculateFutureValue(cost, rates.realistic, intervals, time),
            optimistic: calculateFutureValue(cost, rates.optimistic, intervals, time)
        };

        createChart(labels, futureValues.pessimistic, futureValues.realistic, futureValues.optimistic);

        const feedback = translations.feedback
            .replace(':goal', translations[goal])
            .replace(':time', time)
            .replace(':cost', cost)
            .replace(':strategy', translations[strategy]);
        document.getElementById('feedback').innerText = feedback;
    };
    function calculateFutureValue(principal, annualRate, intervals, years) {
        const futureValues = [];
        const compoundingsPerYear = intervals < years * 12 ? 12 : 1;
        for (let i = 1; i <= intervals; i++) {
            const timePeriod = i / compoundingsPerYear;
            const futureValue = principal * Math.pow(1 + annualRate / compoundingsPerYear, compoundingsPerYear * timePeriod);
            futureValues.push(futureValue.toFixed(2));
        }
        return futureValues;
    }

    function createChart(labels, pessimistic, realistic, optimistic) {
        const ctx = document.getElementById('resultsChart').getContext('2d');

        if (resultsChart) {
            resultsChart.destroy();
        }

        const translations = window.translations;

        setTimeout(() => {
            resultsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: translations.pessimistic,
                            data: pessimistic,
                            borderColor: 'rgba(204, 204, 204, 1)',
                            fill: false
                        },
                        {
                            label: translations.realistic,
                            data: realistic,
                            borderColor: 'rgba(188, 108, 37, 1)',
                            backgroundColor: 'rgba(188, 108, 37, 0.2)',
                            fill: true
                        },
                        {
                            label: translations.optimistic,
                            data: optimistic,
                            borderColor: 'rgba(96, 108, 56, 1)',
                            fill: false
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            title: {
                                display: true,
                                text: translations.future_value
                            },
                            grid: {
                                display: false
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: translations.time
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    elements: {
                        line: {
                            tension: 0.3
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    const value = Math.round(tooltipItem.raw);
                                    const formattedValue = new Intl.NumberFormat('fr-FR').format(value);
                                    return formattedValue + '€';
                                }
                            }
                        }
                    }
                }
            });
        }, 0);
    }


    // GSAP animations for hover effects
    const customerCards = document.querySelectorAll('.customer-card');

    customerCards.forEach(card => {
        card.addEventListener('mouseover', () => {
            gsap.to(card, { scale: 1.1, duration: 0.3 });
        });

        card.addEventListener('mouseout', () => {
            gsap.to(card, { scale: 1, duration: 0.3 });
        });
    });

    // CTA button click event
    const ctaButton = document.querySelector('.cta-button');
    ctaButton.addEventListener('click', () => {
        window.location.href = 'https://calendly.com/richard-masaryk-towerfinance'; // Replace with your actual meeting setup link
    });

    // GSAP animations for the benefits section
    gsap.registerPlugin(ScrollTrigger);

    gsap.from('.cta-section', {
        opacity: 0,
        duration: 1,
        scale: 0.8,
        delay: 0.6,
        scrollTrigger: {
            trigger: '#benefits',
            start: 'top 80%',
            toggleActions: 'play none none none'
        }
    });

    gsap.to('.cta-button', {
        scale: 1.05,
        duration: 0.5,
        ease: 'power1.inOut',
        repeat: -1,
        yoyo: true,
        scrollTrigger: {
            trigger: '#benefits',
            start: 'top 80%',
            toggleActions: 'play none none none'
        }
    });

    const icons = document.querySelectorAll('.icon img');
    icons.forEach(icon => {
        gsap.from(icon, {
            opacity: 0,
            duration: 1,
            y: -20,
            ease: 'bounce.out',
            delay: 0.2,
            scrollTrigger: {
                trigger: icon,
                start: 'top 80%',
                toggleActions: 'play none none none'
            }
        });
    });


    //SERVICES

    // Title hover animation using GSAP
    const titles = document.querySelectorAll('.services-section h2, .services-section h1');

    titles.forEach(title => {
        title.addEventListener('mouseenter', () => {
            gsap.to(title, {
                duration: 0.3,
                color: '#78866B',
                scale: 1.05,
                ease: 'power2.out'
            });
        });

        title.addEventListener('mouseleave', () => {
            gsap.to(title, {
                duration: 0.3,
                color: '#333',
                scale: 1,
                ease: 'power2.out'
            });
        });
    });

});

const list = document.querySelector(".customer-cards-wrapper");
const item = document.querySelector(".customer-card");
const itemWidth = item.offsetWidth;

function handleClick(direction) {
    var dist = itemWidth
    if(direction === "previous") {
        list.scrollBy({ left: -dist, behavior: "smooth" });
    } else {
        list.scrollBy({ left: dist, behavior: "smooth" });
    }
}

const helpList = document.querySelector(".help-cards-wrapper");
const helpItem = document.querySelector(".help-card");
const helpItemWidth = helpItem.offsetWidth;
function handleHelpClick(direction) {
    var dist = helpItemWidth
    if(direction === "previous") {
        helpList.scrollBy({ left: -dist, behavior: "smooth" });
    } else {
        helpList.scrollBy({ left: dist, behavior: "smooth" });
    }
}
