function readMore(button) {
    const dots = button.parentNode.querySelector(".dots");
    const moreText = button.parentNode.querySelector(".more");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        button.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        button.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
