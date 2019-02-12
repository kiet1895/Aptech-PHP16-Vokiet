
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    merge: true,
    autoplay:true,
    autoplayTimeout:10000,
    responsive: {
        678: {
        mergeFit: true
        },
        1000: {
        mergeFit: false
        }
    }
    });
    $('input[type=radio][name=exampleRadis]').change(function () {
        if ($("input[name='exampleRadis']:checked").val() == 'option1') {
            $(".ngayve").hide();
        }
        if ($("input[name='exampleRadis']:checked").val() == 'option2') {
            $(".ngayve").show();
        }
    });  
});