const headers = document.querySelectorAll(".accordeon-header");

headers.forEach(header => {
    header.addEventListener("click", function() {
    const content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = 100 + "%";
        }
    });
});

const myself = document.querySelector("#myself");

myself.addEventListener("click", function() {
    const accordeonContainer = document.querySelector("#accordeon-container");
    if (accordeonContainer.style.maxHeight) {
        accordeonContainer.style.maxHeight = null;
    } else {
        accordeonContainer.style.maxHeight = 100 + "%";
    }
});