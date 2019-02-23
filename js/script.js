const postCards = document.querySelectorAll(".post-card-body");
const descriptions = document.querySelectorAll(".post-card-body > p");

descriptions.forEach(function(description) {
    if (description.textContent.length > 125) {
        const str = description.textContent.slice(0, 125) + '...';
        description.textContent = str;
    }
});

const popup = document.querySelector('.popup'),
      popupButton = document.querySelector('.popup-button'),
      popupClose = document.querySelector('.popup-close');
popupButton.addEventListener('click',function (){
    if(popup.classList.contains("hidden")) {
        popup.classList.remove('hidden');
    }
});
popupClose.addEventListener('click', function() {
        popup.classList.add('hidden');
});