$( window ).on("resize", function() {
    const W = $(window).width();
    const H = $(window).height();
    let B = "----Breakpoint: Mobile (max-width:380px)"
    if (W >= 1024) {
        B = "----Breakpoint: Desktop"
    } else if (W > 380 && W < 1024) {
        B = "----Breakpoint: Tablet (max-width:1024px)"
    }
    console.log(B)
});