var controller = new ScrollMagic.Controller();


$(function () { // wait for document ready
    // build scene
    new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 690})
                    .setPin("#pin1")
                    .addTo(controller);

    new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 695})
                    .setPin("#pin2")
                    .addTo(controller);

});


const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    getSpeed: true,
    gestureDirection: "both"
});