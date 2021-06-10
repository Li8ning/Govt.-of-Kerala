<?php
$title = 'Article Page';
include './header.php'; ?>

    <div class="article-container">

        <div class="container-lg">
            <div class="article-back text-end d-none d-md-block">
                <button id="btn-kg-back" class="btn w-auto font-mulish-normal dark-border"><span class="btn-label pe-2"><i class="fa fa-angle-double-left"></i></span>Back</button></button>
            </div>
            <div class="row row-no-gutters justify-content-center pt-2 pb-md-5 pb-sm-2">
                <div class="col-12 col-md-4 col-lg-3 text-left ps-md-0">
                    <img class="img-fluid article-current-img w-100 mb-md-5" src="./assets/img/img-article.jpg" />
                    <div class="article-sidebar kg-iv-font d-none d-md-block">
                        <?php
                        $sidebar_title = 'Related Articles';
                        include './sidebar.php';
                        ?>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8 text-left ms-lg-4 my-4 my-md-0">
                    <h1 class="article-current-title fw-bold mb-3 head-dark kg-ix-font font-merriweather-normal mx-3 mx-lg-0 text-center text-md-start">Lorem ipsum dolor sit amet consectiue emor adipiscin elit.</h1>
                    <p class="article-schema mt-1 bg-white ms-sm-3 text-center text-md-start">
                        <span class="article-author text-white font-poppins-normal bg-blue">Author Name</span>
                        <span>&nbsp;&nbsp;</span>
                        <span class="article-date text-blue font-poppins-normal">01/01/2021</span>
                    </p>
                    <div class="article-content font-roboto-normal kg-iii-font mx-3 mx-lg-0 mt-4 mt-md-0">
                        <div class="article-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet mollis sollicitudin. Cras fringilla et ipsum sit amet mattis. Morbi a elementum ante. Mauris facilisis lorem quis augue placerat egestas. Aenean ipsum
                                magna, tempor ut iaculis nec, efficitur in lectus. Mauris ut fermentum nisl. Duis id leo velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet mollis sollicitudin. Cras fringilla et ipsum sit
                                amet mattis. Morbi a elementum ante. Mauris facilisis lorem quis augue placerat egestas. Aenean ipsum magna, tempor ut iaculis nec, efficitur in lectus. Mauris ut fermentum nisl. Duis id leo velit.Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Phasellus aliquet mollis sollicitudin. Cras fringilla et ipsum sit amet mattis. Morbi a elementum ante. Mauris facilisis lorem quis augue placerat egestas. Aenean ipsum magna, tempor ut
                                iaculis nec, efficitur in lectus. Mauris ut fermentum nisl. Duis id leo velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet mollis sollicitudin. Cras fringilla et ipsum sit amet mattis. Morbi
                                a elementum ante. Mauris facilisis lorem quis augue placerat egestas. Aenean ipsum magna, tempor ut iaculis nec, efficitur in lectus. Mauris ut fermentum nisl. Duis id leo velit.Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Phasellus aliquet mollis sollicitudin. Cras fringilla et ipsum sit amet mattis. Morbi a elementum ante. Mauris facilisis lorem quis augue placerat egestas. Aenean ipsum magna, tempor ut iaculis nec, efficitur in lectus.
                                Mauris ut fermentum nisl. Duis id leo velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet mollis sollicitudin. Cras fringilla et ipsum sit amet mattis. Morbi a elementum ante. Mauris facilisis
                                lorem quis augue placerat egestas. Aenean ipsum magna, tempor ut iaculis nec, efficitur in lectus. Mauris ut fermentum nisl. Duis id leo velit.Lorem ipsum d olor sit amet, consectetur adipiscing elit. </p>
                            <p> aliquet mollis sollicitudin. Cras fringilla et ipsum sit amet mattis. Morbi a elementum ante. Mauris facilisis lorem quis augue placerat egestas. Aenean ipsum magna, tempor ut iaculis nec, efficitur in lectus. Mauris ut fermentum
                                nisl. Duis id leo velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet mollis sollicitudin. Cras fringilla et ipsum sit amet mattis. Morbi a elementum ante. Mauris facilisis lorem quis </p>
                        </div>
                        <div class="my-md-5 px-0">
                            <div class="row container-lg article-images ">
                                <div class="col-12 col-md-4 d-block article-content-images px-xs-0 px-md-1"><img src="./assets/img/article1.jpg" class="rounded mx-md-2 my-2 w-100 mx-sm-0 img-fluid"></div>
                                <div class="col-12 col-md-4 d-block article-content-images px-xs-0 px-md-1"><img src="./assets/img/article2.jpg" class="rounded mx-md-2 my-2 w-100 mx-sm-0 img-fluid"></div>
                                <div class="col-12 col-md-4 d-block article-content-images px-xs-0 px-md-1"><img src="./assets/img/article3.jpg" class="rounded mx-md-2 my-2 w-100 mx-sm-0 img-fluid"></div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="article-sidebar kg-iv-font d-sm-block d-md-none">
                <?php
                $sidebar_title = 'Related Articles';
                include './sidebar.php';
                ?>
            </div>
        </div>
    </div>


    <!-- Footer-->
    <?php include "./footer.php" ?>