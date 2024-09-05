// script.js
document.addEventListener('DOMContentLoaded', () => {
    const counters = [
        { id: 'jumlah-siswa', endValue: 120 },
        { id: 'tenaga-pendidik', endValue: 20 },
        { id: 'tata-usaha', endValue: 6 }
    ];

    counters.forEach(counter => {
        const element = document.getElementById(counter.id);
        let currentValue = 0;
        const increment = counter.endValue / 100; // Adjust the speed of the counting

        const updateCounter = () => {
            if (currentValue < counter.endValue) {
                currentValue += increment;
                element.textContent = Math.ceil(currentValue);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = counter.endValue;
            }
        };

        updateCounter();
    });
});



document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.getElementById('navbar');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) { // Adjust the scroll position as needed
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});