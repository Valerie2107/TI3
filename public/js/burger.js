let burgerButton = document.querySelector("#burger");

burgerButton.addEventListener("click", openBurger);

function openBurger(){
    console.log("tadaaaa");
    burgerButton.classList.toggle("active");
}
