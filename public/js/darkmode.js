function modeDark(){ 
    isDark = localStorage.getItem("locStor_dark");
    if(isDark==='true'){    //booléens automatiquement changés en string par localstorage
        localStorage.setItem("locStor_dark",'false');
        body.classList.remove("dark");
        console.log("darkmode chargé");
    }else{
        localStorage.setItem("locStor_dark",'true');
        body.classList.add("dark");
        console.log("lightmode chargé");
    }
}

let body = document.querySelector("body");
let isDark = localStorage.getItem("locStor_dark"); /*did user already put somethingin local storage? */
let darkModeButton = document.querySelector("#dark_mode");

darkModeButton.addEventListener("click",modeDark);

if(isDark==='true') { //les booléens sont automatiquement changés en string par localstorage (JSON??)
    body.classList.add("dark");
}