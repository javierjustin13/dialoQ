const anchorTags = document.querySelectorAll("a");
const preventSpamClicks = (anchorTag) => {
    let isDisabled = false;

    anchorTag.addEventListener("click", () => {
        if (isDisabled) return;

        isDisabled = true;

        setTimeout(() => {
            isDisabled = false;
        }, 1000);
    });
};

// Apply preventSpamClicks to all anchor tags
for (const anchorTag of anchorTags) {
    preventSpamClicks(anchorTag);
}
