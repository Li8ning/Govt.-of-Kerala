<?php
$title = 'Single Media';
include './header.php';?>
<div class="container">
<div class="row py-3">
    <div class="kg-back text-end d-none d-md-block">
        <button id="btn-kg-back" class="btn w-auto font-mulish-normal dark-border"><span class="btn-label pe-2"><i class="fa fa-angle-double-left"></i></span>Back</button></button>
    </div>
</div>
</div>

<div class="container-md">    
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-9">
            <div class="media-gallery">
                <a href="./assets/img/single_media_1.jpg" class="glightbox">
                    <img src="./assets/img/single_media_1.jpg" alt="image" />
                </a>
                <a href="./assets/img/single_media_2.jpg" class="glightbox">
                    <img src="./assets/img/single_media_2.jpg" alt="image" />
                </a>
                <a href="./assets/img/single_media_3.jpg" class="glightbox">
                    <img src="./assets/img/single_media_3.jpg" alt="image" />
                </a>
                <a href="./assets/img/single_media_4.jpg" class="glightbox">
                    <img src="./assets/img/single_media_4.jpg" alt="image" />
                </a>
                <a href="./assets/img/single_media_5.jpg" class="glightbox">
                    <img src="./assets/img/single_media_5.jpg" alt="image" />
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
            <div class="galleries-sidebar kg-ii-font ps-3 ps-lg-4">
                <?php
                $sidebar_title = 'Related Galleries';
                include './sidebar.php';
                ?>
            </div>
            
        </div>
    </div>
</div>
<?php include './footer.php';?>
<script>
    $('#kg-main-nav .nav-item .nav-link').each(function(){
        if ($(this).text() == 'Media') {
            $(this).addClass('active');
        }
    });
    // Lightbox Configure
    var lightbox = GLightbox({
        loop: true,
        svg:
            {
                'close': '<img src="./assets/svg/x-circle.svg">',
                'next': '<i class="fas fa-chevron-right"></i>',
                'prev': '<i class="fas fa-chevron-left"></i>'
            }
    });
    lightbox.on('slide_after_load',()=>{
        const loaded_img = $('.gslide-image img');
        if ($('.chkbox-label').hasClass('dark')) {
            loaded_img.addClass('dark');
        }
        else if(!$('.chkbox-label').hasClass('dark')){
            loaded_img.removeClass('dark');
        }      
    });
</script>