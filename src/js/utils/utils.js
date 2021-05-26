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

export const truncate = (str, n) => {
    return (str.length > n) ? str.substr(0, n-1) + "\u2026" : str;
};
