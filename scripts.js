document.addEventListener('DOMContentLoaded', function() {

    const progressBar = document.getElementById('scroll-progress');

    if (progressBar) {
        function updateProgressBar() {
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            progressBar.style.width = scrollPercent + '%';
        }

        window.addEventListener('scroll', updateProgressBar);
        updateProgressBar();
    }

    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (hamburger && mobileMenu) {

        hamburger.addEventListener('click', function(e) {
            e.stopPropagation(); 
            mobileMenu.classList.toggle('active');
        });

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
            });
        });

        document.addEventListener('click', function(e) {
            if (
                mobileMenu.classList.contains('active') &&
                !mobileMenu.contains(e.target) &&
                !hamburger.contains(e.target)
            ) {
                mobileMenu.classList.remove('active');
            }
        });
    }
});
