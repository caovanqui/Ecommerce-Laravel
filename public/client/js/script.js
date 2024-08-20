$('.brand-slide-carousel').owlCarousel({
    loop:true,
    margin:24,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:false,
    dots:true,
    responsive: {
        0: {
            items:2,
        }, 
        576: {
            items:3,
        }, 
        992: {
            items:4,
        }, 
    }
});
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))