$(function(){
    const $slTestLink = $(".fm-test");
    $slTestLink.on("click", (e) => {
        e.preventDefault();
        console.log("Hello from main.js")
    });
});