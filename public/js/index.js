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


// Add event listener for account button to toggle account popup
document.getElementById('account-button').addEventListener('click', () => {
    const accountPopup = document.querySelector('.account-popup');
    accountPopup.classList.toggle('show');

    if (accountPopup.classList.contains('show')) {
        accountPopup.style.animation = 'slideDown 0.3s ease-in-out forwards';
    } else {
        accountPopup.style.animation = 'slideUp 0.3s ease-in-out forwards';
    }
});

// Add event listener for close button
document.querySelector('.close-btn').addEventListener('click', () => {
    const accountPopup = document.querySelector('.account-popup');
    accountPopup.classList.remove('show');
});

// Add event listener for outside click
document.querySelector('.account-popup').addEventListener('click', (event) => {
    if (event.target === document.querySelector('.account-popup')) {
        const accountPopup = document.querySelector('.account-popup');
        accountPopup.classList.remove('show');
    }
});


