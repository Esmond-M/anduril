jQuery(document).ready(function($) {
  //Check for galleries
  renderGallery();

  //Smooth scroll
  if (location.hash) {
    $('html,body').animate({
      scrollTop: $(window.location.hash).offset().top -60
    }, 1000);
  }

  //And we scrollify all in-page links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .not('[href^="#collapse"]')
  .click(function(event) {
    // On-page links
    if (
      (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      ||
      location.pathname == this.pathname)
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top -60 //The minus 60 is for the navbar; adjust accordingly
        }, 1000);
      }
    }
  });

  //Restyle galleries
  function renderGallery() {
    var galleriesArray = [];
    $('.gallery').each(function(index) {
      var galleryArray = [];
      $(this).find('.gallery-item').each(function(index) {
        var galleryObj = {};
        var link = $(this).find('a').attr('href');
        var src = $(this).find('img').attr('src');
        var cap = $(this).find('.gallery-caption').text().replace(/(\r\n|\n|\r|\t)/gm,"");
        galleryObj.link = link;
        galleryObj.url = src;
        galleryObj.caption = cap;
        galleryArray.push(galleryObj);
      });
      galleriesArray.push(galleryArray);
      $(this).html('<div class="row galleryCanvas" id="galleryCanvas' + index + '"></div>');
      $(galleryArray).each(function(imageIndex) {
        $('#galleryCanvas' + index).append('<div class="col-sm-3 galleryThumbnailContainer"><a href="' + this.link + '?sidebar=no"><img src="' + this.url + '" class="galleryThumbnail" /></a></div>');
      });
      $(this).show();
    });
  }

});
