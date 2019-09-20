//Called from /inc/widgets.php for widgets requiring JavaScript
jQuery(document).ready(function() {
  currentPos = andurilScrollPos(); //Init position

  autoScroll = true;

  andurilStartScroll();

  (function() { //Set currentPos when scrolling stops
    var timer;
    jQuery('.widgetScrollArea').bind('scroll',function() {
      clearTimeout(timer);
      timer = setTimeout(refresh , 150);
    });
    var refresh = function() {
      currentPos.setPos(jQuery('.widgetScrollArea').scrollTop());
    };
  })();

  jQuery('.widgetScrollArea').mouseout(function() { //Restart scroll animation when mouse leaves
    andurilScroll();
  });
});

function andurilStartScroll() {
  setTimeout(function() {
    andurilScroll();
  },3000);
}

function andurilScrollPos() {
  var y = 0;
  return {
    getPos: function() {
      return y;
    },
    setPos: function(newY) {
      y = newY;
    }
  }
}

function andurilScroll() {
  var targetPos = currentPos.getPos() + andurilScrollSpeed; //andurilScrollSpeed is defined in the widget (/inc/widgets.php) since it's a widget setting
  var targetMax = jQuery('.widgetScrollArea').prop('scrollHeight') -320; //The 320 is for the height of the display element
  if (targetPos >= targetMax) { //We're at the bottom. So wait 3 secs, scroll to top, wait three secs, then start again
    setTimeout(function() {
      if ((currentPos.getPos() + andurilScrollSpeed) >= targetMax) { //Make sure we're still at the bottom in case user scrolled back during pause
        jQuery('.widgetScrollArea').animate({
            scrollTop: 0
        }, 500);
        setTimeout(function() {
          currentPos.setPos(0);
          andurilScroll();
        },3000);
      }
    },3000);
    return;
  }
  currentPos.setPos(targetPos);
  if (jQuery('.widgetScrollArea:hover').length == 0) {
    jQuery('.widgetScrollArea').animate({
      scrollTop: targetPos
    },100,'linear',andurilScroll);
  }
}
