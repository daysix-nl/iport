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
        speed: 60000,

        autoplay: {
            delay: 0,
            disableOnInteraction: false,
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

