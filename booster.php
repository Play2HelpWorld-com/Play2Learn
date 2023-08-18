<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Play2 Learn World: Booster</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="images/play2learn_logo.webp" type="image/x-icon">
    <meta name="description" content="Play2 Help World Mission is to help charities while playing fun free games. Feel free to contact us." />
    <meta name="keywords" content="play2earn, free games, fun, rewards, charities, help, games, arcade, play2world, play2helpworld" />
    <meta name="MobileOptimized" content="320" />
    <!-- Animation Css -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Web Fonts -->
    <link href="css/fonts.css" rel="stylesheet">
    <!-- Flaticon Css -->
    <link href="flaticon/web/flaticon.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Signin CSS -->
    <link rel="stylesheet" href="css/signin.css">
    <!-- Contact CSS -->
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script type="text/javascript" src="https://alcdn.msauth.net/lib/1.4.4/js/msal.js" integrity="sha384-fTmwCjhRA6zShZq8Ow5ZkbWwmgp8En46qW6yWpNEkp37MkV50I/V2wjzlEkQ8eWD" crossorigin="anonymous"></script>
    <style>
        #header-banner {
            background-image: url('images/Website Banner_Play2Learn_pc.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 67vh;
        }

        @media screen and (max-width: 600px) {
            #header-banner {
                background-image: url('images/WebsiteBanner_Play2Learn_Mobile.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 70vh;
            }
        }

        .hidden {
            display: none !important;
        }

        .container {
            position: relative;
        }

        .pagination-container {
            width: calc(100% - 2rem);
            display: flex;
            align-items: center;
            /* position: absolute; */
            bottom: 0;
            /* padding: 1rem 0; */
            justify-content: center;
        }

        .pagination-number,
        .pagination-button {
            font-size: 1.1rem;
            background-color: transparent;
            border: none;
            margin: 0.25rem 0.25rem;
            cursor: pointer;
            height: 2.5rem;
            width: 2.5rem;
            border-radius: .2rem;
        }

        .pagination-number:hover,
        .pagination-button:not(.disabled):hover {
            background: #fff;
        }

        .pagination-number.active {
            color: #fff;
            background: #0085b6;
        }

        .bg-info {
            padding: .5rem;
            border-radius: .5rem
        }

        .booster-div {
            display: none;
        }

        .hide {
            display: flex;
            flex-direction: column;
        }

        #amazon {
            cursor: pointer;
        }

        #amazon:hover,
        #amazon:focus {
            color: #ffffff80;
        }
    </style>
</head>

<body>

    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i> <br>top</a>

    <!-- Preloader start -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- Preloader end -->

    <div data-scroll='0' class="full_width">

        <div class="container">
            <?php include('navbar.php') ?>
        </div>
        <div id="header-banner"></div>
        <!--web_header wrapper end-->

        <?php include('sidenav.php') ?>
        <!-- responsive web_header end -->

    </div>

    <!-- Booster content starts -->
    <div class="row items-container bottom-wrapper">
        <p>&nbsp;<br>&nbsp;</p>
    </div>

    <div class="container my-4">
        <h1 class="col-12">Offers for you!</h1>

        <div class="row">
            <div class="my-3 col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <img class="img-fluid" src="images/offers/Amazon Promos 4x.png" alt="Amazon Promo">
            </div>
            <div class="my-3 col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <img class="img-fluid" src="images/offers/Add Video 2x.png" alt="Add Video">
            </div>
            <div class="my-3 col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <img class="img-fluid" src="images/offers/Easy Surveys 2x.png" alt="Each surveys">
            </div>
            <div class="my-3 col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <img class="img-fluid" src="images/offers/Free Apps 2x.png" alt="Free Apps 2x.png">
            </div>
            <div class="my-3 col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <img class="img-fluid" src="images/offers/Free Trial 2x.png" alt="Free Trial 2x.png">
            </div>
            <div class="my-3 col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <img class="img-fluid" src="images/offers/Fun Stuff 2x.png" alt="Fun Stuff 2x.png">
            </div>
            <div class="my-3 col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <img class="img-fluid" src="images/offers/Social Post 2x.png" alt="Social Post 2x.png">
            </div>
            <div class="my-3 col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <img class="img-fluid" src="images/offers/Update Profile 2x.png" alt="Update Profile 2x.png">
            </div>
            <div class="my-3 col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <img class="img-fluid" src="images/offers/Fun Ads 2x.png" alt="Fun Ads 2x.png">
            </div>
        </div>
        <h4 class="col-12">Check out these amazing booster products</h4>
        <div class="col-12 d-flex align-items-center justify-content-center">
            <a id="amazon" class="web_btn_style bg-info m-1 border-radius-2" alt="up game link"><i class="mx-1 fab fa-amazon"></i>Show Amazon offers</a>
        </div>

        <div class="booster-div">
            <div class=" my-4">
                <div class="row" id="paginated-list" data-current-page="1" aria-live="polite">
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B0B1GVQ67M&asins=B0B1GVQ67M&linkId=c214af60abbfb1324c1c99396e8a35d7&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B07F5ZNBHG&asins=B07F5ZNBHG&linkId=7d08eb680f448cefcdc01a41ad1bc543&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <!-- <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B08C96BG9H&asins=B08C96BG9H&linkId=44d636bebbccf1a04d0e14e879c68b79&show_border=true&link_opens_in_new_window=true"></iframe></div>   -->
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09VSLNDLJ&asins=B09VSLNDLJ&linkId=ed5974b3427b910eb7626ce576fc82eb&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09Z9K12P2&asins=B09Z9K12P2&linkId=abe93dfcf093a471b9ae4f3b765736d5&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B07F2YJRN2&asins=B07F2YJRN2&linkId=a1e77a97875eb417fcecbe95d32c1c28&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09NW4FN2R&asins=B09NW4FN2R&linkId=3fa0a3bec917eb4831621d9da7131604&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <!-- <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B0B6228XBM&asins=B0B6228XBM&linkId=70b8cda937920515335ac3ffd74206f8&show_border=true&link_opens_in_new_window=true"></iframe></div> -->
                    <!-- <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09BXQ4HMB&asins=B09BXQ4HMB&linkId=ae78501ee9d91be3f72e787e216ce88d&show_border=true&link_opens_in_new_window=true"></iframe></div> -->
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B00FMWWN6U&asins=B00FMWWN6U&linkId=92d92dd06a8e640f3d3c640b437fac6a&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B08BY8BZS4&asins=B08BY8BZS4&linkId=c2dcb4406a0b7a7b59d18461f0652273&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B097B2HQ5R&asins=B097B2HQ5R&linkId=6497be67939f1db8c633570624fc684d&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <!-- <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09RMH9B6F&asins=B09RMH9B6F&linkId=dfcbbf8668fead14cb5abf14de26d71a&show_border=true&link_opens_in_new_window=true"></iframe></div> -->
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09FHC7CPM&asins=B09FHC7CPM&linkId=a08143189346bb066d62fc96d53902ab&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09PKTYKGZ&asins=B09PKTYKGZ&linkId=a3cf0aa15b3eb2a06bfe3b5bc3696a3a&show_border=true&link_opens_in_new_window=true"></iframe></div>
                    <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B0927D8S51&asins=B0927D8S51&linkId=d0ce3f3ea3161e84f8577ede0d19ef6a&show_border=true&link_opens_in_new_window=true"></iframe></div>
                </div>
            </div>

            <nav class="pagination-container">
                <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
                    &lt;
                </button>

                <div id="pagination-numbers">

                </div>

                <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
                    &gt;
                </button>
            </nav>
        </div>
    </div>

    <!-- Booster content ends -->


    <?php include('footer.php') ?>
    <!-- footer wrapper end-->
    <!-- Sign in popup -->

    <?php include('pop.php') ?>
    <!-- Sign in popup ends-->

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- Contact Form js -->
    <script src="js/contact_form.js"></script>
    <script src="js/custom.js"></script>
    <!-- Boostrap, jquery and popper link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Signin script -->
    <script src="js/signin.js"></script>

    <!-- replace next line with authRedirect.js if you would like to use the redirect flow -->
    <!-- <script type="text/javascript" src="./authRedirect.js"></script>   -->
    <script type="text/javascript" src="js/authPopup.js"></script>
    <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>

    <script type="text/javascript" src="js/graph.js"></script>
    <script src="google.js"></script>
    <script src="facebook.js"></script>
    <script src="js/booster.js"></script>
    <!-- Signin script ends -->
    <script>
        $("#amazon").click(() => {
            $(".booster-div").toggleClass('hide');
        })
    </script>
    <script>
        $(document).ready(function() {
            console.log(localStorage.getItem('email'));
            if (localStorage.getItem("logged_in")) {

                console.log('here');
                $.ajax({
                    type: 'POST',
                    url: 'all_activity.php',
                    async: false, //IMPORTANT, the call will be synchronous
                    data: {
                        email: localStorage.getItem("email"),
                        activity_name: "Checking Booster Page",
                        website: 'Play2LearnWorld'
                    },
                    success: function(response) {
                        console.log(response);
                    }

                }).done(function(data) {
                    console.log('complete');
                });
            }
        });
    </script>
</body>

</html>