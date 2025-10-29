// Mobile menu toggle
const sidebar = document.getElementById('sidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');
const menuToggle = document.getElementById('menuToggle');
const sidebarClose = document.getElementById('sidebarClose');

function toggleSidebar() {
    sidebar.classList.toggle('active');
    sidebarOverlay.classList.toggle('active');
}

menuToggle.addEventListener('click', toggleSidebar);
sidebarOverlay.addEventListener('click', toggleSidebar);
sidebarClose.addEventListener('click', toggleSidebar);

// Close sidebar when clicking a nav item on mobile
document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
            toggleSidebar();
        }
    });
});

// Button group interactions
document.querySelectorAll('.btn-group button').forEach(btn => {
    btn.addEventListener('click', function() {
        this.parentElement.querySelectorAll('button').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});

// Search toggle functionality
const searchToggle = document.getElementById('searchToggle');
const headerSearch = document.getElementById('headerSearch');

searchToggle.addEventListener('click', function() {
    headerSearch.classList.toggle('active');
    
    if (headerSearch.classList.contains('active')) {
        // Focus on the input when search is opened
        setTimeout(() => {
            headerSearch.querySelector('input').focus();
        }, 100);
    }
});

// Close search when clicking outside on mobile
document.addEventListener('click', function(event) {
    if (window.innerWidth <= 768 && 
        headerSearch.classList.contains('active') &&
        !headerSearch.contains(event.target) &&
        !searchToggle.contains(event.target)) {
        headerSearch.classList.remove('active');
    }
});

// Close search on escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && headerSearch.classList.contains('active')) {
        headerSearch.classList.remove('active');
    }
});

// User profile dropdown functionality
const userProfile = document.getElementById('userProfile');
const userDropdown = document.getElementById('userDropdown');

userProfile.addEventListener('click', function(event) {
    event.stopPropagation();
    userDropdown.classList.toggle('active');
});

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    if (!userProfile.contains(event.target)) {
        userDropdown.classList.remove('active');
    }
});

// Close dropdown on escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && userDropdown.classList.contains('active')) {
        userDropdown.classList.remove('active');
    }
});

// Close dropdown when clicking on dropdown items
document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function() {
        userDropdown.classList.remove('active');
    });
});