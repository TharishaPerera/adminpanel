const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

// SHOW SIDEBAR
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

// CLOSE SIDEBAR
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

// CHANGE THEME
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span').className.toggle('active');
})
