const getWindowSize = () => {
    const w = window.innerWidth;
    const h = window.innerHeight;
    let breakpoint = "----Breakpoint: Mobile (max-width:380px)"
    if (w >= 1024) {
        breakpoint = "----Breakpoint: Desktop"
    } else if (w > 380 && w < 1024) {
        breakpoint = "----Breakpoint: Tablet (max-width:1024px)"
    }
    console.log(breakpoint);
};

window.onresize = getWindowSize;

