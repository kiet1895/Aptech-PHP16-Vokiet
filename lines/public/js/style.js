
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    merge: true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive: {
        678: {
        mergeFit: true
        },
        1000: {
        mergeFit: false
        }
    }
    });
})