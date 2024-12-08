const flashContainer = document.querySelector("#flash-message-container");

setTimeout(() => {
    flashContainer.style.transform = "translateY(0.5rem)";
    flashContainer.style.opacity = "0";
}, 3000);
