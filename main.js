document.addEventListener("DOMContentLoaded", () => {
    let newitemButton = document.querySelector(".newitem_button"); 
    let registerBox = document.querySelector("#register-box"); 
    let closeButton = document.querySelector("#close-button"); 

    newitemButton.addEventListener("click", () => {
        registerBox.style.display = "block"; 
    });

    closeButton.addEventListener("click", () => {
        registerBox.style.display = "none"; 
    });
});


