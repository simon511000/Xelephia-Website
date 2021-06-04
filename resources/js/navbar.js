const navbar = document.querySelector('#navbar')
const header = document.querySelector('#header')

const navbarOptions = {
    rootMargin: '-90px 0px 0px 0px'
}

const navbarObserver = new IntersectionObserver(function(entries, navbarObserver) {
    entries.forEach(entry => {
        if(!entry.isIntersecting) {
            navbar.classList.replace('navbar-initial', 'navbar-scrolled')
        } else {
            navbar.classList.replace('navbar-scrolled', 'navbar-initial')
        }
    })
}, navbarOptions)

navbarObserver.observe(header)