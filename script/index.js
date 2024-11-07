try {
    document.getElementById('hamburger').addEventListener('click', function () {
        const body = document.body;

        if (body.classList.contains('hamburger-closed')) {
            body.classList.remove('hamburger-closed');
            body.classList.add('hamburger-open');
        } else {
            body.classList.remove('hamburger-open');
            body.classList.add('hamburger-closed');
        }
    });
} catch (error) { }




/**********************/
/**** accordion ***/
/**********************/
try {
    document.addEventListener('DOMContentLoaded', function () {
        const accordionGroups = document.querySelectorAll('.accordion-group');

        accordionGroups.forEach(group => {
            const accItems = group.querySelectorAll('.accordion-item');
            const accButtons = group.querySelectorAll('.accordion');

            // Zet de eerste accordion-item in elke groep standaard op actief
            if (accItems.length > 0) {
                const firstItem = accItems[0];
                firstItem.classList.add('active');
            }

            accButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const panel = this.nextElementSibling;

                    // Sluit alle andere panelen binnen dezelfde groep
                    accItems.forEach(item => {
                        if (item !== this.parentElement) {
                            item.classList.remove('active');
                        }
                    });

                    // Toggle de actieve status van de aangeklikte accordion-item
                    if (this.parentElement.classList.contains('active')) {
                        this.parentElement.classList.remove('active');
                    } else {
                        this.parentElement.classList.add('active');
                    }
                });
            });
        });
    });
} catch (error) { }



try {
    var swiperCompanies = new Swiper(".swipercompanies", {
        spaceBetween: 18,
        lazy: false,
        freeMode: true,
        loop: true,
        speed: 20000,
        allowTouchMove: false, // Swipe uitschakelen
        autoplay: {
            delay: 0,
            disableOnInteraction: false, // Altijd doorgaan, zelfs bij interactie
        },
        slidesPerView: "auto",
        breakpoints: {
            640: {
                speed: 20000,
                spaceBetween: 18,
            },
            768: {
                speed: 20000,
                spaceBetween: 18,
            },
            1024: {
                speed: 20000,
                spaceBetween: 20,
            },
        },
    });
} catch (error) { }

try {
    var swiperNews = new Swiper(".swipernews", {
        slidesPerView: "auto",
        centeredSlides: true,
        initialSlide: 1,
        spaceBetween: 18,
        lazy: false,
        breakpoints: {
            640: {
                slidesPerView: "auto",
                centeredSlides: true,
                initialSlide: 1,
                spaceBetween: 18,
            },
            768: {
                slidesPerView: "auto",
                centeredSlides: true,
                initialSlide: 1,
                spaceBetween: 40,
            },
            1200: {
                slidesPerView: 3,
                centeredSlides: false,
                initialSlide: 1,
                spaceBetween: 60,
            },
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
} catch (error) { }

try {
    var swiperQuote = new Swiper(".swiperquote", {
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
} catch (error) { }

try {
    var swiperQuote = new Swiper(".swiperlookbook", {
        spaceBetween: 20,
        slidesPerView: "auto",
        freeMode: true,
        loop: true,
        allowTouchMove: false, // Swipe uitschakelen
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
} catch (error) { }

try {
    var swiperQuote = new Swiper(".swiperlookbookmobile", {
        spaceBetween: 20,
        slidesPerView: "auto",
        freeMode: true,
        loop: true,
        allowTouchMove: false, // Swipe uitschakelen
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }

try {
    var swiperQuote = new Swiper(".swiperquote-2", {
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
} catch (error) { }

try {
    var swiper = new Swiper(".swiperteam", {
        slidesPerView: "auto",
        spaceBetween: 15,
        freeMode: true,
        breakpoints: {
            640: {
                spaceBetween: 20,
            },
            768: {
                spaceBetween: 30,
            },
            1200: {
                spaceBetween: 40,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }

try {
    var swiper = new Swiper(".swiperevents", {
        slidesPerView: "auto",
        spaceBetween: 15,
        freeMode: true,
        breakpoints: {
            640: {
                spaceBetween: 20,
            },
            768: {
                spaceBetween: 30,
            },
            1200: {
                spaceBetween: 40,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }

try {
    document.addEventListener('DOMContentLoaded', function () {
        // Selecteer de eerste button binnen de .map-menu container
        const firstButton = document.querySelector('.map-menu button');

        if (firstButton) {
            // Voeg de .active class toe aan de eerste button
            firstButton.classList.add('active');
        }
    });
} catch (error) { }


try {
    // Selecteer alle buttons met de class 'location'
    var buttons = document.querySelectorAll('.location');

    // Voeg een event listener toe aan elke button
    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Haal de waarde van het data-value attribuut op
            var inputValue = this.getAttribute('data-value');

            // Plaats de waarde in het inputveld
            document.getElementById('wpsl-search-input').value = inputValue;

            // Verwijder de 'active' class van alle knoppen
            buttons.forEach(function (btn) {
                btn.classList.remove('active');
            });

            // Voeg de 'active' class toe aan de knop waarop is geklikt
            this.classList.add('active');

            // Simuleer een klik op de zoekknop of submit het formulier
            document.getElementById('wpsl-search-btn').click();
        });
    });
} catch (error) { }


try {
    // Selecteer de .google-map div
    let googleMapDiv = document.querySelector('.google-map');

    // Zoek de <style> tag binnen deze div en verwijder deze
    if (googleMapDiv) {
        let styleTag = googleMapDiv.querySelector('style');
        if (styleTag) {
            styleTag.remove(); // Verwijder de <style> tag
        }
    }
} catch (error) { }


try {

    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;

        // Verberg alle tabcontent
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Verwijder de class 'active' van alle tablinks
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Toon de huidige tab en voeg de 'active' class toe aan de knop
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Standaard de eerste tab openen
    document.getElementsByClassName("tablinks")[0].click();
} catch (error) { }



try {
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.map-menu .location');
        const facts = document.querySelectorAll('.map-fact p');

        // Functie om de juiste paragraaf de 'active' klasse te geven en andere te verwijderen
        function updateFacts(value) {
            facts.forEach(fact => {
                if (fact.getAttribute('data-value') === value) {
                    fact.classList.add('active'); // Voeg de 'active' klasse toe aan de juiste paragraaf
                } else {
                    fact.classList.remove('active'); // Verwijder de 'active' klasse van andere paragrafen
                }
            });
        }

        // Event listeners toevoegen aan de knoppen
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const value = button.getAttribute('data-value');

                // Actieve knop bijwerken
                buttons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Feit tonen
                updateFacts(value);
            });
        });

        // Standaard de eerste paragraaf met 'active' klasse tonen bij laden
        if (buttons.length > 0) {
            const defaultValue = buttons[0].getAttribute('data-value');
            updateFacts(defaultValue);
        }
    });
} catch (error) { }


try {
    document.addEventListener('DOMContentLoaded', function () {
        // Selecteer het element dat je wilt animeren
        const counter = document.querySelector('#count');
        const targetNumber = parseInt(counter.getAttribute('data-target')); // Het doelgetal (150)
        const duration = 2000; // De duur van de animatie in milliseconden

        // Functie om het getal geleidelijk te laten oplopen
        const countUp = (element, target, duration) => {
            let start = 0;
            let increment = target / (duration / 16); // Hoeveel we per frame verhogen (ongeveer 60 fps)

            const updateCounter = () => {
                start += increment;
                if (start < target) {
                    element.innerText = Math.ceil(start);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.innerText = target; // Zorg ervoor dat het eindgetal precies bereikt wordt
                }
            };

            requestAnimationFrame(updateCounter);
        };

        // Maak een Intersection Observer om te detecteren wanneer het element in beeld komt
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    countUp(counter, targetNumber, duration);
                    observer.unobserve(entry.target); // Stop met observeren nadat het getal is opgelopen
                }
            });
        }, {
            threshold: 0.5 // Start de animatie wanneer minstens 50% van het element zichtbaar is
        });

        // Observeer het element
        observer.observe(counter);
    });
} catch (error) { }


try {
    document.addEventListener('gesturestart', function (e) {
        e.preventDefault();
    });
} catch (error) { }