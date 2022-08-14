// nav's animation
window.addEventListener('scroll', function(){
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);

    const logoHeader = document.querySelector('.logoHeader');
    logoHeader.classList.toggle('active', window.scrollY > 0);
});

// home button
function home(){
    window.location.href = url('#banner');
};

// Toggle Menu
function toggleMenu(){
    const menuToggle = document.querySelector('.menuToggle');
    menuToggle.classList.toggle('active');

    const navigation = document.querySelector('.navigation');
    navigation.classList.toggle('active');
}