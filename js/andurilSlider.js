jQuery(document).ready(function($) {

   if ($('.contentSlider').length > 0) { //Only do the below where widgetSliderArea element exists

       var scrollList = $('.widgetSliderArea'),
           currentScroll = scrollList.scrollLeft(),
           scrollIncrement = $('.widgetSliderArea').width(),
           maxScroll = scrollList.prop('scrollWidth') - scrollIncrement,
           itemScrollWidth = $('.widgetItemWrapper').width();

       $('.widgetControlContainerLeft').click(function() {
           slider_scroll(-1);
       });

       $('.widgetControlContainerRight').click(function() {
           slider_scroll(1);
       });

       function slider_scroll(dir) {
           //Reset vars in case things have changed
           currentScroll = scrollList.scrollLeft();
           scrollIncrement = $('.widgetSliderArea').width();
           maxScroll = scrollList.prop('scrollWidth') - scrollIncrement;
           itemScrollWidth = $('.widgetItemWrapper').width();

           var scrollListKids = scrollList.children();
           var scrollAreaLeft = scrollList.offset().left;
           var itemOffsetArray = [];
           $(scrollListKids).each(function() {
             itemOffsetArray.push(($(this).offset().left) - scrollAreaLeft);
           });

           var target;

           var i = itemOffsetArray.length;
           while (itemOffsetArray[--i] > scrollAreaLeft);
           if (dir > 0) {
             target = currentScroll + itemOffsetArray[++i];
             if (currentScroll > maxScroll - 10) {
               target = 0;
             }
           }
           else {
             target = currentScroll + itemOffsetArray[--i];
             if (currentScroll < 10) {
               target = maxScroll;
             }
           }

            scrollList.animate({
                scrollLeft: target
            },200,'swing', function() {
              if (scrollList.scrollLeft() > (maxScroll - 10)) {
                  scrollList.scrollLeft(maxScroll);
              }
              else if  (scrollList.scrollLeft < 10) {
                scrollList.scrollLeft(0);
              }
            });
       }
   }
});
