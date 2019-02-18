var slider = document.querySelector("#slider");
var slides = document.querySelectorAll(".slide");
var indicators = document.querySelectorAll(".controls label");
var up = document.querySelector("#prev");
var down = document.querySelector("#next");

var i, j;
var count_slides = slides.length;

var slide = {
    slides              : slides,
    current_slide       : slides[0],
    indicators          : indicators,
    current_indicator   : indicators[0]
};

var check = function(e){
    slide['current_indicator'] = event.target;
    changeSlide(slide); 
};

up.addEventListener('click', function(){
    slide['current_indicator'] = slide['current_indicator'].previousElementSibling;
    changeSlide(slide);
    if(slide['current_indicator'] == up){
        slide['current_indicator'] = slide['indicators'][count_slides - 1];
        slide['current_slide'] = slide['slides'][count_slides - 1];
        changeSlide(slide);
    }   
});

down.addEventListener('click', function(){
    slide['current_indicator'] = slide['current_indicator'].nextElementSibling;
    changeSlide(slide);
    if(slide['current_indicator'] == down){
        slide['current_indicator'] = slide['indicators'][0];
        slide['current_slide'] = slide['slides'][0];
        changeSlide(slide);
    }   
});

function changeSlide(slide){
    for(i = 0; i < count_slides; i++){
        if(slide['current_indicator'].id == slide['indicators'][i].getAttribute("id")){
            for(j = 0; j < count_slides; j++){
                slide['slides'][j].classList.remove("active");
                slide['indicators'][j].classList.remove("current-indicator");
            }
            slide['current_slide'] = slide['slides'][i];
            slide['current_slide'].classList.add("active");           
            slide['current_indicator'].classList.add("current-indicator");
        }
    }
};


// var check = function(e){
//     var indicator_id = event.target.id;
//     for(i = 0; i < count_slides; i++){
//         var indicator_node_id = slider_indicators[i].getAttribute("id");
//         if(indicator_id == indicator_node_id){
//             for(j = 0; j < count_slides; j++){
//                 slides[j].classList.remove("active");
//                 slider_indicators[j].classList.remove("current-indicator");
//             }
//             slides[i].classList.add("active");
//             event.target.classList.add("current-indicator");
//             console.log(slide);            
//         }
//     }
// };

// for(i = 0; i < count_slides; i++){
//     var current_indicator = slider_indicators[i];
//     if(current_indicator.classList.contains("current-indicator")){
//         var next_current_indicator = current_indicator.nextElementSibling;
//         for(j = 0; j < count_slides; j++){
//             slides[j].classList.remove("active");
//         }
//         current_indicator.classList.remove("current-indicator");
//         next_current_indicator.classList.add("current-indicator");
//         slides[i].classList.add("active");
//         //console.log(next_current_indicator);
//         break;
//     }
// }

// if(current_slide < count_slides){        
//     var current_indicator = slider_indicators[current_slide];
//     if(current_indicator.classList.contains("current-indicator")){
//         var next_current_indicator = current_indicator.nextElementSibling;
//         for(j = 0; j < count_slides; j++){
//             slides[j].classList.remove("active");
//         }
//         current_slide++;
//         current_indicator.classList.remove("current-indicator");
//         next_current_indicator.classList.add("current-indicator");
//         current_indicator = next_current_indicator;
//         slides[current_slide].classList.add("active");            
//     }        
// } 
// else{
//     current_slide = 0;
// }
