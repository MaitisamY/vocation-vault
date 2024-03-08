// JavaScript function to toggle between light and dark modes
document.getElementById('theme-mode-toggler').addEventListener('click', function() {
    // Toggle the dark mode class on the body
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

const handleAccountPopup = () => {
    const accountPopup = document.querySelector('.account-popup');
    accountPopup.classList.toggle('show');
}

document.querySelector('.account-btn').addEventListener('click', handleAccountPopup);
