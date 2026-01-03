$(document).ready(function() {
    // Add overlay styles to the page
    if ($('#img-title-styles').length === 0) {
        $('<style id="img-title-styles">')
            .prop('type', 'text/css')
            .html(`
                .img-title-container {
                    position: relative;
                    display: inline-block;
                    overflow: hidden;
                    max-width: 100%;
                }
                .img-title-container.center-block {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                }
                .img-title-container.float-left {
                    float: left;
                }
                .img-title-container.float-right {
                    float: right;
                }
                .img-title-overlay {
                    position: absolute;
                    bottom: -100%;
                    left: 0;
                    width: 100%;
                    background: rgba(0, 0, 0, 0.7);
                    color: white;
                    padding: 10px 15px;
                    font-size: 14px;
                    text-align: center;
                    transition: bottom 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
                    pointer-events: none;
                    box-sizing: border-box;
                    z-index: 100;
                    backdrop-filter: blur(2px);
                }
                .img-title-container:hover .img-title-overlay {
                    bottom: 0;
                }
                .img-title-container img {
                    display: block;
                    max-width: 100%;
                    height: auto;
                }
            `)
            .appendTo('head');
    }

    // Process images after a short delay to ensure they are fully loaded
    setTimeout(function() {
        $('img[title]').each(function() {
            var $img = $(this);
            var titleText = $img.attr('title');
            
            // Skip images that are already wrapped or have empty titles
            if ($img.parent().hasClass('img-title-container') || !titleText || !titleText.trim()) {
                return;
            }

            // Skip small images (less than 80px in width or height)
            var imgWidth = $img.width();
            var imgHeight = $img.height();
            if (imgWidth < 80 || imgHeight < 80) {
                // Keep the title attribute for small images (browser tooltip)
                return;
            }

            // Store the original title and clear it
            $img.data('original-title', titleText);
            $img.removeAttr('title');

            // Create container and overlay
            var $container = $('<div class="img-title-container"></div>');
            
            // Copy layout classes from image to container
            if ($img.hasClass('img-responsive')) {
                $container.addClass('img-responsive');
            }
            if ($img.hasClass('center-block')) {
                $container.addClass('center-block');
            }
            if ($img.hasClass('ombre-image')) {
                $container.addClass('ombre-image');
                $img.removeClass('ombre-image');
            }
            if ($img.hasClass('image-dans-texte')) {
                $container.addClass('image-dans-texte');
                $img.removeClass('image-dans-texte');
            }

            // Handle floated parent or image
            var $parent = $img.parent();
            var parentFloat = $parent.css('float');
            var imgFloat = $img.css('float');
            
            if (parentFloat === 'left' || imgFloat === 'left') {
                $container.addClass('float-left');
            } else if (parentFloat === 'right' || imgFloat === 'right') {
                $container.addClass('float-right');
            }

            // Preserve inline styles if any (like margin)
            var imgStyle = $img.attr('style');
            if (imgStyle) {
                // Move margin from image to container
                var marginMatch = imgStyle.match(/margin[^;]*/gi);
                if (marginMatch) {
                    marginMatch.forEach(function(margin) {
                        $container.css(margin.split(':')[0].trim(), margin.split(':')[1].trim());
                    });
                }
            }
            
            $img.wrap($container);
            $img.after('<div class="img-title-overlay">' + titleText + '</div>');
        });
    }, 100);
});
