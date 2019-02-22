const postCards = document.querySelectorAll(".post-card-body");
const descriptions = document.querySelectorAll(".post-card-body > p");

descriptions.forEach(function(description) {
    if (description.textContent.length > 125) {
        const str = description.textContent.slice(0, 125) + '...';
        description.textContent = str;
    }
});
