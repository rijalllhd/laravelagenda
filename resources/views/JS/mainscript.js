// dropdown navbar
    document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelectorAll('.relative');

    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener('mouseenter', function () {
            this.querySelector('.absolute').classList.remove('hidden');
        });

        dropdown.addEventListener('mouseleave', function () {
            this.querySelector('.absolute').classList.add('hidden');
        });
    });
});

// toggle dark mode
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark')
}

    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function () {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
});

//dropdown toggle table data
const dropdownToggle = document.getElementById('dropdownToggle');
const dropdownMenu = document.getElementById('dropdownMenu');

dropdownToggle.addEventListener('click', function() {
    dropdownMenu.classList.toggle('hidden');
});

window.addEventListener('click', function(event) {
    if(!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden');
    }
});

//toggle table data
const buttonR1 = document.getElementById('buttonR1');
const buttonR2 = document.getElementById('buttonR2');
const buttonR3 = document.getElementById('buttonR3');
const buttonK1 = document.getElementById('buttonK1');
const buttonK2 = document.getElementById('buttonK2');
const buttonK3 = document.getElementById('buttonK3');

const tableR1 = document.getElementById('tableR1');
const tableR2 = document.getElementById('tableR2');
const tableR3 = document.getElementById('tableR3');
const tableK1 = document.getElementById('tableK1');

buttonR1.addEventListener('click', function() {
    toggleTable(tableR1);
    hideTable(tableR2);
    hideTable(tableR3);
    hideTable(tableK1);
});

buttonR2.addEventListener('click', function() {
    toggleTable(tableR2);
    hideTable(tableR1);
    hideTable(tableR3);
    hideTable(tableK1);
});

buttonR3.addEventListener('click', function() {
    toggleTable(tableR3);
    hideTable(tableR1);
    hideTable(tableR2);
    hideTable(tableK1);
});

buttonK1.addEventListener('click', function() {
    toggleTable(tableK1);
    hideTable(tableR1);
    hideTable(tableR2);
    hideTable(tableR3);
});

function toggleTable(table) {
    table.classList.toggle('hidden');
}

function hideTable(table) {
    table.classList.add('hidden');
}

