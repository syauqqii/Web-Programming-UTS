// Logic UP Button (Pojok - Kanan - Bawah)
document.getElementById('top-button').addEventListener('click',function(){
  window.scrollTo(0,0);
});

$(window).scroll(function(){
  var threshold = 300;
  var position = (($(document).height() - $(window).height()) - $(window).scrollTop()) / threshold;
  if (position <= 7){
    $("#top-button").show();
  } else {
    $("#top-button").hide();
  }
});
// End Logic

// Toggle Day Night Theme
$('#switch1').on('click', function(){
  $('body').toggleClass('night')
})

$(document).ready(function(){
  var date = new Date();
  var current_time = date.getHours();
  if (current_time > 19 || current_time < 4)
    // If time is after (7 malam) or before (4 pagi), night theme
    document.body.className = "night";
  else
    // day theme
    document.body.className = "";
});

$(window).load(function() {
  $("#top-button").hide();
});

$('.project_used span').on({
  mouseover: function() {
    event.preventDefault();
    $(this).animate({opacity: 0.25});
  },
  mouseout: function() {
    event.preventDefault();
    $(this).animate({opacity: 1});
  }
});