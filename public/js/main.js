/*$(document).ready(function() {
$(".navbar-items li a").click(function () {
	$(this).addClass('ddd')
	  $(this).parent().addClass("active").siblings().removeClass("active");  
   
});
});*/


$(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })

  openAllPanels = function(aId) {
    console.log("setAllPanelOpen");
    $(aId + ' .panel-collapse:not(".in")').collapse('show');
  }
  closeAllPanels = function(aId) {
    console.log("setAllPanelclose");
    $(aId + ' .panel-collapse.in').collapse('hide');
  }
     
});

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("fullscreen_bg").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("fullscreen_bg").style.marginLeft = "0";
}




