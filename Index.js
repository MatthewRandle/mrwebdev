const contact = document.getElementsByClassName("contact")[0];

function scrollToContact() {
    contact.scrollIntoView();
}

function scrollToTop() {
    window.scrollTo(0, 0);
}

const inputs = document.querySelectorAll("input");
const navbar = document.getElementsByClassName("navbar")[0];
const footer = document.getElementsByTagName("footer")[0];

inputs.forEach(input => {
    input.addEventListener("focus", () => {
        input.parentElement.classList.add("focused");
        addHide();
    })

    input.addEventListener("blur", () => {
        let inputValue = input.value;
        //nothing input so undo focus
        if (inputValue == "") {
            input.parentElement.classList.remove("focused");
            input.classList.remove("filled");
        }
        else {
            input.classList.add("filled");
        }

        removeHide();
    })
});

const textArea = document.getElementsByTagName("textarea")[0];

textArea.addEventListener("focus", () => {
    addHide();
})

textArea.addEventListener("blur", () => {
    removeHide();
})


function addHide() {
    navbar.classList.add("hide");
    footer.classList.add("hide");
}

function removeHide() {
    navbar.classList.remove("hide");
    footer.classList.remove("hide");
}