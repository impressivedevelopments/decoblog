const slider = document.querySelector("#slider"),
    slides = document.querySelectorAll(".slide"),
    indicators = document.querySelectorAll(".controls label"),
    up = document.querySelector("#prev"),
    down = document.querySelector("#next");

// const count_slides = slides.length;

// const slide = {
//     slides              : slides,
//     current_slide       : slides[0],
//     indicators          : indicators,
//     current_indicator   : indicators[0]
// };

// var check = function(e){
//     slide['current_indicator'] = event.target;
//     changeSlide(slide); 
// };

// up.addEventListener('click', function(){
//     slide['current_indicator'] = slide['current_indicator'].previousElementSibling;
//     changeSlide(slide);
//     if(slide['current_indicator'] == up){
//         slide['current_indicator'] = slide['indicators'][count_slides - 1];
//         slide['current_slide'] = slide['slides'][count_slides - 1];
//         changeSlide(slide);
//     }   
// });

// down.addEventListener('click', function(){
//     slide['current_indicator'] = slide['current_indicator'].nextElementSibling;
//     changeSlide(slide);
//     if(slide['current_indicator'] == down){
//         slide['current_indicator'] = slide['indicators'][0];
//         slide['current_slide'] = slide['slides'][0];
//         changeSlide(slide);
//     }   
// });

// function changeSlide(slide){
//     for(var i = 0; i < count_slides; i++){
//         if(slide['current_indicator'].id == slide['indicators'][i].getAttribute("id")){
//             for(var j = 0; j < count_slides; j++){
//                 slide['slides'][j].classList.remove("active");
//                 slide['indicators'][j].classList.remove("current-indicator");
//             }
//             slide['current_slide'] = slide['slides'][i];
//             slide['current_slide'].classList.add("active");           
//             slide['current_indicator'].classList.add("current-indicator");
//         }
//     }
// };

indicators.forEach(function(indicator, i) {
    indicator.addEventListener('click', function() {
        if (!indicator.classList.contains("current-indicator")) {
            indicators.forEach(function(indicator, i) {
                indicator.classList.remove("current-indicator");
                slides[i].classList.remove("active");
            });
            indicator.classList.add("current-indicator");
            slides[i].classList.add("active");
        }        
    });
});

// down.addEventListener('click', function() {
//     indicators.forEach(function(indicator, i) {
//         if (indicator.classList.contains("current-indicator")) {
//             indicator.classList.remove("current-indicator");
//             slides[i].classList.remove("active");

//             const currentIndicator = indicator.nextElementSibling;
//             currentIndicator.classList.add("current-indicator");

//             const currentSlide = slide[i].nextElementSibling;
//             currentSlide.classList.add("active");

//             break;
//             // I need to try method some()
//                 indicators.some()
//         }
//     });
//     const currentIndicator = indicators.filter(function(indicator, i) {
//         if (indicator.classList.contains("current-indicator")) {
//             indicator.classList.remove("current-indicator")
//             const currentIndicator = indicator.nextElementSibling;
//             currentIndicator.classList.add("current-indicator");

//             const currentSlide = slide[i].nextElementSibling;
//             currentSlide.classList.add("active");
//             return indicator;
//         }
//     });
// });
