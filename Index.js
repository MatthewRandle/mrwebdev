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

textArea.addEventListener("focusout", () => {
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

document.getElementsByTagName("form")[0].addEventListener("submit", submitForm)

async function submitForm(e) {
    e.preventDefault();

    const text = document.getElementById("message").value;
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;

    await fetch("https://i5fr14z3pk.execute-api.us-east-1.amazonaws.com/prod", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            text,
            name,
            email
        })
    });

    const contactSection = document.getElementById("contact");
    const successSection = document.getElementById("contact-success");

    contactSection.style.display = "none";
    successSection.style.display = "flex";
}