$(function(){
    const SL_BUTTON = $(".home .sl-c-button");
    SL_BUTTON.on("click", (e) => {
        e.preventDefault();
        console.log("Hello from main.js ")
    });
});