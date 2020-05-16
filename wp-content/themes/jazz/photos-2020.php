<!DOCTYPE html>
<div>
<?php include('header.php'); ?>

    <h1>Photos 2020</h1>

<div class="container main"
<!--   -->

    <div class="zoom-gallery">
        <!--
        Width/height ratio of thumbnail and the main image must match to avoid glitches.
        If ratios are different, you may add CSS3 opacity transition to the main image to make the change less noticable.
         -->
        <div class="row">
            <div class="four columns">
                <a class="image-link" href="images/bands2020/Anthony%20and%20the%20Gentlemen%20of%20Jazz%20.JPG" title="Anthony and the Gentlemen of Jazz"><img src="images/bands2020/Anthony%20and%20the%20Gentlemen%20of%20Jazz%20.JPG" alt=""/></a>
            </div>
            <div class="four columns">
                <a class="image-link" href="images/bands2020/Gentlemen%20of%20Jazz%202.JPG" title="Gentlemen of Jazz"><img src="images/bands2020/Gentlemen%20of%20Jazz%202.JPG" alt=""/></a>
            </div>
            <div class="four columns">
                <a class="image-link" href="images/bands2020/Gentlemen%20of%20Jazz%20with%20Anthony%20Minehan.JPG " title="Gentlemen of Jazz with Anthony"><img src="images/bands2020/Gentlemen%20of%20Jazz%20with%20Anthony%20Minehan.JPG" alt=""/></a>
            </div>
        </div>

        <div class="row">
            <div class="four columns">
                <a class="image-link" href="images/bands2020/Gentlemen%20of%20Jazz%202.JPG" title="Gentlemen of Jazz 2"><img src="images/bands2020/Gentlemen%20of%20Jazz%202.JPG" alt=""/></a>
            </div>
            <div class="four columns">
                <a class="image-link" href="images/bands2020/Juhl%20Atkinson%201.JPG" title="Juhl Atkinson"><img src="images/bands2020/Juhl%20Atkinson%201.JPG" alt=""/></a>
            </div>
            <div class="four columns">
                <a class="image-link" href="images/bands2020/Opening%20night%20band.jpg" title="Opening Night Band"><img src="images/bands2020/Opening%20night%20band.jpg" alt=""/></a>
            </div>
        </div>

        <div class="row">
            <div class="four columns">
                <a class="image-link" href="images/bands2020/Sit%20in%20bracket%203.JPG" title="Sit in Bracket 3"><img src="images/bands2020/Sit%20in%20bracket%203.JPG" alt=""/></a>
            </div>
            <div class="four columns">
                <a class="image-link" href="images/bands2020/Sit%20in%20bracket%204.JPG" title="Sit in Bracket 4"><img src="images/bands2020/Sit%20in%20bracket%204.JPG" alt=""/></a>
            </div>
            <div class="four columns">
                <a class="image-link" href="images/bands2020/The%20Crowd%20at%20Fish%20Inn.JPG" title="The Crowd at Fish Inn"><img src="images/bands2020/The%20Crowd%20at%20Fish%20Inn.JPG" alt=""/></a>
            </div>
        </div>
    </div>
</div>

<!-- Magnific Popup core JS file -->
<script src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.zoom-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }

        });
    });
</script>

</body>
</html>
