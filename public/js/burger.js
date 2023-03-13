let burgerButton = document.querySelector("#burger");
let divMenu = document.querySelector("#menu");

burgerButton.addEventListener("click", openBurger);

function openBurger(){
    console.log("tadaaaa");
    divMenu.classList.toggle("active");
}
