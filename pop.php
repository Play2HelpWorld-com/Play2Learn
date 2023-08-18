<script type="text/javascript" src="https://alcdn.msauth.net/lib/1.4.4/js/msal.js"
    integrity="sha384-fTmwCjhRA6zShZq8Ow5ZkbWwmgp8En46qW6yWpNEkp37MkV50I/V2wjzlEkQ8eWD"
    crossorigin="anonymous"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
<link rel="stylesheet" href="css/signin.css">
    
<div class="custom-model-main">
            <div class="custom-model-inner">        
            <div class="close-btn">×</div>
                <div class="custom-model-wrap">
                    <div class="pop-up-content-wrap">
                     
                            <div class="col-12">
                            <div class="mr-auto" style=" margin-left: 57px !important; height: 48px;">
                            <div id="g_id_onload"
                             data-client_id="993323105500-ilachf52q3qhbg4g5joepunb8nrnriqc.apps.googleusercontent.com"
                             data-context="signin"
                             data-callback="onSignIn"
                              data-ux_mode="popup"
                            data-auto_prompt="false">
                            </div>
                            <div class="g_id_signin"
                            data-type="standard"
                            data-shape="pill"
                            data-theme="outline"
                            data-text="signin_with"
                            data-size="large"
                            data-logo_alignment="left"
                             data-width="400">
                            </div>
                            </div>
                            </div>
                            <!--<div class="col-12 social_btn">
                                <span class="col-1">
                                    <img src="assets/social_logos/apple_logo.png" alt="Apple logo">
                                </span>
                                <span class="col-10 pr-5">
                                    <a>Sign in with Apple</a>
                                </span>
                            </div>-->
                            <div class="col-12 social_btn">
                                <span class="col-1">
                                    <img src="assets/social_logos/microsoft_logo.png" alt="Microsoft logo">
                                </span>
                                <span class="col-10 pr-5">
                                    <a href="javascript:void(0)"
                                        id="signIn" onclick="signIn()">Sign in with Microsoft</a> 
                                </span>
                            </div>
                            <div class="col-12 social_btn">
                                <span class="col-1">
                                <img src="assets/social_logos/facebook_logo.png" alt="Facebooklogo">
                                </span>
                                <span class="col-10 pr-5">
                                    <a href="javascript:void(0)"
                                        onclick="fbLogin()">Sign in with Facebook</a>
                                </span>
                            </div>
                    </div>
                </div>  
            </div>  
            <div class="bg-overlay"></div>
        </div> 


        <script type="text/javascript" src="js/authConfig.js"></script>
  <script type="text/javascript" src="js/graphConfig.js"></script>
  <script type="text/javascript" src="js/ui.js"></script>

  <!-- replace next line with authRedirect.js if you would like to use the redirect flow -->
  <!-- <script type="text/javascript" src="./authRedirect.js"></script>   -->
  <script type="text/javascript" src="js/authPopup.js"></script>
  <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>

  <script type="text/javascript" src="js/graph.js"></script>
  <script src="google.js"></script>
  <script src="facebook.js"></script>

