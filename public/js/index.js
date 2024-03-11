// JavaScript function to toggle between light and dark modes
document.getElementById('theme-mode-toggler').addEventListener('click', function() {

    document.body.classList.toggle('dark-mode');

    // Save theme preference to session storage
    const theme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
    sessionStorage.setItem('theme', theme);

    // Toggle icon to represent mode change
    const icon = document.getElementById('theme-icon');
    icon.classList.toggle('fa-toggle-on');

    // Update tooltip text and position based on theme
    const tooltip = document.querySelector('.tooltiptext');
    const tooltipText = theme === 'dark' ? 'Toggle Light Mode' : 'Toggle Dark Mode';
    const tooltipPosition = theme === 'dark' ? 'left' : 'right';
    tooltip.textContent = tooltipText;
    tooltip.classList.remove('tooltip-right', 'tooltip-left');
    tooltip.classList.add(`tooltip-${tooltipPosition}`);
});

// Apply saved theme preference on page load
const savedTheme = sessionStorage.getItem('theme');
if (savedTheme === 'dark') {

    document.body.classList.add('dark-mode');

    // Apply saved theme preference to icon
    const icon = document.getElementById('theme-icon');
    icon.classList.add('fa-toggle-on');

    // Update tooltip text and position
    const tooltip = document.querySelector('.tooltiptext');
    tooltip.textContent = 'Toggle Light Mode';
    tooltip.classList.remove('tooltip-right');
    tooltip.classList.add('tooltip-left');
}


// Function to toggle account popup visibility
function toggleAccountPopup() {
    const accountPopup = document.querySelector('.account-popup');
    const isOpen = accountPopup.classList.contains('show');

    if (!isOpen) {
        accountPopup.style.animation = 'slideDown 0.3s ease-in-out forwards';
        accountPopup.classList.add('show');
    } else {
        accountPopup.style.animation = 'slideUp 0.3s ease-in-out forwards';
        setTimeout(() => {
            accountPopup.classList.remove('show');
        }, 300); // Adjust the timeout to match the animation duration
    }
}

// Add event listener for account button to toggle account popup
document.getElementById('account-button').addEventListener('click', toggleAccountPopup);

// Add event listener for close button
document.querySelector('.close-btn').addEventListener('click', () => {
    const accountPopup = document.querySelector('.account-popup');
    accountPopup.style.animation = 'slideUp 0.3s ease-in-out forwards';
    setTimeout(() => {
        accountPopup.classList.remove('show');
    }, 300); // Adjust the timeout to match the animation duration
});

// Add event listener for outside click
document.querySelector('.account-popup').addEventListener('click', (event) => {
    if (event.target === document.querySelector('.account-popup')) {
        const accountPopup = document.querySelector('.account-popup');
        accountPopup.style.animation = 'slideUp 0.3s ease-in-out forwards';
        setTimeout(() => {
            accountPopup.classList.remove('show');
        }, 300); // Adjust the timeout to match the animation duration
    }
});


// Content switching between login and signup
const loginButton = document.querySelector('#login-selector');
const signupButton = document.querySelector('#signup-selector');
const loginContainer = document.querySelector('#login-container');
const signupContainer = document.querySelector('#signup-container');

loginButton.addEventListener('click', () => {
    loginContainer.style.display = 'flex';
    signupContainer.classList.remove('show');
    loginButton.classList.add('active');
    signupButton.classList.remove('active');
});

signupButton.addEventListener('click', () => {
    loginContainer.style.display = 'none';
    signupContainer.classList.add('show');
    loginButton.classList.remove('active');
    signupButton.classList.add('active');
});


// Password show/hide toggle for login
const togglePassword = document.querySelector('#toggle-login-password');
const password = document.querySelector('#login-password');
togglePassword.addEventListener('click', function () {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    if (type === 'password') {
        togglePassword.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        togglePassword.innerHTML = '<i class="fas fa-eye"></i>';
    }
});


// Password show/hide toggle for signup
const togglePasswordSignup = document.querySelector('#toggle-signup-password');
const passwordSignup = document.querySelector('#signup-password');
togglePasswordSignup.addEventListener('click', function () {
    // toggle the type attribute
    const type = passwordSignup.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordSignup.setAttribute('type', type);
    // toggle the eye slash icon
    if (type === 'password') {
        togglePasswordSignup.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        togglePasswordSignup.innerHTML = '<i class="fas fa-eye"></i>';
    }
});


