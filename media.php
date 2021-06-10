<?php
$title = 'Media';
include './header.php'; ?>

<div class="media-container container-lg">
        <div class="row row-no-gutters my-5 container-lg">

            <div class="title-media text-start col-12 col-xs-6 col-md-6 px-md-0">
                <h1 class="text-center text-md-start font-merriweather-normal .kg-ix-font fw-bold">Media</h1>
            </div>
            <div class="article-back text-end d-none d-md-block col-12 col-md-6 px-md-0">
                <button id="btn-kg-back" class="btn w-auto font-mulish-normal dark-border"><span class="btn-label pe-2"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>Back</button>
            </div>


        </div>


        <div class="row row-no-gutters justify-content-sm-center justify-content-md-start pt-2 pb-md-5 pb-sm-2">
            <div class="col-md-3 img-container">
                <a href="./single-media.php">
                    <figure class="figure py-3 w-100 px-3 px-md-2">
                        <img src="./assets/img/img-article.jpg" class="figure-img img-fluid rounded" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                        <figcaption class="figure-caption text-center kg-iii-font font-poppins-normal dark-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</figcaption>
                    </figure>
                </a>                    
            </div>
            <div class="col-md-3 img-container">
                <a href="./single-media.php">
                    <figure class="figure py-3 w-100 px-3 px-md-2">
                        <img src="./assets/img/media1.jpg" class="figure-img img-fluid rounded" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                        <figcaption class="figure-caption text-center kg-iii-font font-poppins-normal dark-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-md-3 img-container">
                <a href="./single-media.php">
                    <figure class="figure py-3 w-100 px-3 px-md-2">
                        <img src="./assets/img/media2.jpg" class="figure-img img-fluid rounded" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                        <figcaption class="figure-caption text-center kg-iii-font font-poppins-normal dark-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-md-3 img-container">
                <a href="./single-media.php">
                    <figure class="figure py-3 w-100 px-3 px-md-2">
                        <img src="./assets/img/media3.jpg" class="figure-img img-fluid rounded" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                        <figcaption class="figure-caption text-center kg-iii-font font-poppins-normal dark-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <?php include "./footer.php" ?>

    <script>
        $('#kg-main-nav .nav-item .nav-link').each(function(){
            if($(this).text()=='Media'){
                $(this).addClass('active');
            }
        });
    </script>