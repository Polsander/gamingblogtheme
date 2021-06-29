
const pageCheck = () => {
    const pageUrl = window.location.href;

    let slicedUrl = pageUrl.split('/')
    //slicedUrl = slicedUrl.pop();

    if (slicedUrl[3] ==="blogs") {
        const gaming = document.querySelector("#gaming");
        gaming.classList.add("bigify");
    };

    if (slicedUrl[4] === "guide") {
        const guide = document.querySelector("#guides");
        guide.classList.add("bigify");
    };

    if (slicedUrl[4] === "product") {
        const product = document.querySelector("#gear");
        product.classList.add("bigify");
    };

    if (slicedUrl[4] === "review") {
        const review = document.querySelector("#reviews");
        review.classList.add("bigify");
    };
};

pageCheck();