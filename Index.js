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
//.setPin(".responsiveSprite")
.setPin(".responsive")
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
    duration: 1160
})
    //.setPin(".responsiveSprite")
    .setPin(".fast")
    .addTo(controller);

// build step frame scene
for (var i = 1; i <= 29; i++) {
    new ScrollMagic.Scene({
        triggerElement: '.fast',
        offset: i * 40
    })
        .setClassToggle(stopwatchSprite, 'stopwatchSprite' + i)
        .addTo(controller);
}



let navbarLogo = document.getElementsByClassName("navbar_logo")[0];

//scroll trigger for navbar logo
new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: ".responsive",
    duration: 2200 + window.innerHeight
})
//.setPin(".responsiveSprite")
.setClassToggle(navbarLogo, "navbar_logo--orange")
.addTo(controller);

let navbarContact = document.getElementsByClassName("navbar_contact")[0];

//scroll trigger for navbar contact button
new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: ".fast",
    duration: window.innerHeight
})
//.setPin(".responsiveSprite")
.setClassToggle(navbarContact, "navbar_contact--purple")
.addTo(controller);