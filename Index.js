let controller = new ScrollMagic.Controller({
    globalSceneOptions: {
        triggerHook: 0,
        reverse: true
    }
});


//responsive
let responsiveSprite = document.getElementsByClassName("responsiveSprite")[0];
new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: ".responsive",
    duration: 2200
})
.setPin(".section_content--responsive")
.addTo(controller);

// build step frame scene
for (var i = 1; i <= 55; i++) {
    new ScrollMagic.Scene({
        triggerElement: '.responsive',
        offset: i * 40
    })
    .setClassToggle(responsiveSprite, 'responsiveSprite' + i)
    .addTo(controller);
}


//fast section
let stopwatchSprite = document.getElementsByClassName("stopwatchSprite")[0];
new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: ".fast",
    duration: 1200
})
.setPin(".section_content--fast")
.addTo(controller);

// build step frame scene
for (var i = 1; i <= 30; i++) {
    new ScrollMagic.Scene({
        triggerElement: '.fast',
        offset: i * 40
    })
    .setClassToggle(stopwatchSprite, 'stopwatchSprite' + i)
    .addTo(controller);
}

//seo section
let seoSprite = document.getElementsByClassName("seoSprite")[0];
new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: ".seo",
    duration: 1200
})
    .setPin(".section_content--seo")
    .addTo(controller);

// build step frame scene
for (var i = 1; i <= 30; i++) {
    new ScrollMagic.Scene({
        triggerElement: '.seo',
        offset: i * 40
    })
    .setClassToggle(seoSprite, 'seoSprite' + i)
    .addTo(controller);
}

let navbarContact = document.getElementsByClassName("navbar_contact")[0];

//scroll trigger for navbar contact button
new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: ".contact"
})
.setClassToggle(navbarContact, "navbar_contact--transparent")
.addTo(controller);

function scrollToContact() {
    let contact = document.getElementsByClassName("contact")[0];
    contact.scrollIntoView();
}