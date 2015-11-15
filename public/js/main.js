


$(".box-social").hover(
    function() {
        $( this ).addClass("infinite  swing animated");
    }, function() {
        $( this ).removeClass("infinite  swing animated");
    }
);

//these options are common to all skills
var options = {

    //prevents the text vanishing on redraw (when tooltip shows on hover)
    showTooltips: false,
    responsive:true,
    segmentShowStroke : false,
    percentageInnerCutout : 80,

    //nicer than default bouncing
    animationEasing: "easeOut",

    //bit smoother with less steps
    animationSteps: 40,

    //do once on completion rather than every frame/draw cycle
    onAnimationComplete: function () {

        //setup the font and center it's position
        this.chart.ctx.font = 'Normal 34px Roboto Slab';
        this.chart.ctx.fillStyle = 'white';
        this.chart.ctx.textAlign = 'center';
        this.chart.ctx.textBaseline = 'middle';

        //put the pabel together based on the given 'skilled' percentage
        var valueLabel = this.segments[0].value + ' %';

        //find the center point
        var x = this.chart.canvas.clientWidth / 2;
        var y = this.chart.canvas.clientHeight / 2;

        //hack to center different fonts
        var x_fix = 0;
        var y_fix = 2;

        //render the text
        this.chart.ctx.fillText(valueLabel, x + x_fix, y + y_fix);
    }
};


new WOW().init();

window.onbeforeunload = function(){
    window.scrollTo(0,0);
}


$(window).bind("load", function() {
    $('body').addClass('loaded');
});


$(document).ready(function() {

    //Scroll animation
    $('#header-section a, #button-myservice a').click(function(){
        var scroll_start =  $(document).scrollTop();
        var height = $( $.attr(this, 'href') ).offset().top - scroll_start;
        height = height<0?height*(-1):height;

        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 250+height*0.5 >2500? 2500:250+height*0.5 );
        return false;
    });

    // Chart.js



    $('#Myskills').owlCarousel({
        items:3
    });

    //cycle through each skill
    $('.skill').each(function () {

        //get this skill's percentage and color
        var skilledPercentage = $(this).attr('skilled-pct');

        //create a custom data set
        var data = [{
            //the amount that represents 'skilled' percentage
            value: skilledPercentage,
            color: "#C03B44"
        }, {
            //the amount that represents 'unskilled' percentage
            value: 100 - skilledPercentage,
            color: '#2A2A2A'
        }];

        //now draw the chart on this skill canvas with the custom data set
        var ctx = $(this).get(0).getContext("2d");
        chart = new Chart(ctx).Doughnut(data, options);

        // Calcul des paddings dans les slides pour aligner le contenu
        $(".slick-slide").each(function(){
            $(this).children().css("padding-left",($(this).width()-$('.skill').width())/2);
        });
    });

    // Resize window
    var height = $(window).height();
    $("#home-section").height(height);
    $("#home-container").css("padding-top",height/2.5);

    $(window).resize(function() {
        var height = $(window).height();
        $("#home-section").height(height);
        $("#home-container").css("padding-top",height/2.5);
    });


    $(document).scroll(function() {
        var scroll_start = $(this).scrollTop();
        var lama = 50;
        var opacity_offset = ($("#home-section").height() - (scroll_start - lama))/$("#home-section").height();
        if(scroll_start > 20) {
            $('#header-section').css('background-color', '#2A2A2A');
            $('#home-section').css('opacity', opacity_offset);
        } else {
            $('#header-section').css('background-color', 'transparent');
            $('#home-section').css('opacity', 1);
        }

    });

});

