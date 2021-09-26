$( ".Bar" ).each(function() {
    let percent = $(this).attr('data-value');
    percent = percent * 100 / 30;

    //For too high values :
    if(percent > 100){
        percent = 100;
    }

    //$(this).css('width', percent+'%' );

    //With animation as asked :
    $(this).animate({width: percent+'%' }, 2000);
});

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("pgb").style.width = scrolled + "%";
}

