var slider = document.querySelector("#slider");
var slides = document.querySelectorAll(".slide");
var slider_indicators = document.querySelectorAll(".controls label");

var count_slides = slides.length;

var check = function(e){
    var indicator_id = event.target.id;
    for(var i = 0; i < count_slides; i++){
        var indicator_node_id = slider_indicators[i].getAttribute("id");
        if(indicator_id == indicator_node_id){
            for(var j = 0; j < count_slides; j++){
                slides[j].classList.remove("active");
                slider_indicators[j].classList.remove("current-indicator");
            }
            slides[i].classList.add("active");
            event.target.classList.add("current-indicator");            
        }
    }
};
