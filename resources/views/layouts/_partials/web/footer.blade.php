<style>
    .see_more{
        color: #fff;
        border-radius: 5px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .see_more:hover{
        color: #08AED7;
        font-size: 13px;
    }
    .loading{
        color: #fff;
        transition: all 0.5s ease;
        display: none;
    }

    .loading span{
        height: 4px;
        width: 4px;
        border-radius: 50%;
        background: #ffffff;
    }
    .loading span:nth-child(1){
        animation: loading 1s ease-in-out infinite;
    }
    .loading span:nth-child(2){
        animation: loading 1s ease-in-out 0.2s infinite;
    }
    .loading span:nth-child(3){
        animation: loading 1s ease-in-out 0.4s infinite;
    }

    @keyframes loading{
        0%{
            opacity: 0;
        }
        50%{
            opacity: 1;
        }
        100%{
            opacity: 0;
        }
    }

</style>
<footer>
    <section id="footer">
        <div class="container">
            <div class="row footer-top" style="color:#CFCFCF">
                <div class="col-md-6 col-sm-6" data-sal="slide-left" data-sal-delay="200" data-sal-duration="800"
                    data-sal-easing="ease">
                    <div class="footer_item_1" style="
                                    margin: auto;
                                    text-align: left;
                                ">
                        <h5>Contact Information</h5>
                        <div class="footer_text" style="
                            margin: auto;
                            text-align: left;
                        ">
                            B2M Technologies Ltd. :<br>
                            House #75A, Road 5/A, 4th floor<br>
                            Dhanmondi, Dhaka 1209, <br>Bangladesh.<br>
                            <i class="fa fa-phone"></i> <a href="tel:+8801732701937" style="color:#CFCFCF">(+880) 1732701937</a><br>
                            <i class="fa fa-envelope"></i> <a href="mailto:admin@gmail.com" style="color:#CFCFCF">admin@gmail.com</a><br>
                            <i class="fa fa-globe"></i> <a href="http://b2m-tech.com/" target="_blank" style="color:#CFCFCF">http://b2m-tech.com/</a><br>
                            <i class="fa-brands fa-whatsapp"></i>
                            <a href="https://api.whatsapp.com/send/?phone=01732701937&text=hello&type=phone_number&app_absent=0"
                            style="color:#CFCFCF" target="_blank">(+880) 1732701937</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-sal="slide-left" data-sal-delay="200" data-sal-duration="800"
                    data-sal-easing="ease">
                    <div class="footer_item_1" style="margin: auto;text-align: left;">
                        <h5>Privacy Policy</h5>
                        <div class="footer_text" style="margin: auto;text-align: justify;">
                            Buysellbd values your privacy. This Privacy Policy describes how we (Buysellbd or “the product” or its developer “B2M
                            Technologies Ltd” Join venture company with “Zing mobile” or “B2M”) handle user data
                            <br>
                            <a href="{{route('privacy-policy.index')}}">
                                <span class="see_more">See More</span>
                                <span class="loading">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row copy">
                    <div class="col-md-3 col-sm-6 padding_0">
                        <div class="footer_logo" data-sal="slide-left" data-sal-delay="200" data-sal-duration="800"
                            data-sal-easing="ease">
                            <img src="{{asset('web/assets/images/logo/light-mode.png')}}" style="max-height: 60px"
                                alt="Buy Sell Bd"></div>
                    </div>
                    <div class="col-md-6 copy_text_sm_last" data-sal="slide-up" data-sal-delay="200"
                        data-sal-duration="800" data-sal-easing="ease">
                        <div class="copy_text">

                            <p>Copyright © 2023 B2M Technologies. All rights reserved | <a
                                    href="http://b2m-tech.com/" target="_blank">Sitemap</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="copy_social_link" data-sal="slide-right" data-sal-delay="300"
                            data-sal-duration="800" data-sal-easing="ease">
                            <a target="_blank" href="#">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                                    class="svg-inline--fa fa-facebook-f " role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512">
                                    <path fill="currentColor"
                                        d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z">
                                    </path>
                                </svg>
                            </a>
                            <a target="_blank" href="#">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
                                    class="svg-inline--fa fa-linkedin-in " role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M100.3 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.6 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.3 61.9 111.3 142.3V448z">
                                    </path>
                                </svg>
                            </a>
                            <a target="_blank" href="#">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube"
                                    class="svg-inline--fa fa-youtube " role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M549.7 124.1c-6.281-23.65-24.79-42.28-48.28-48.6C458.8 64 288 64 288 64S117.2 64 74.63 75.49c-23.5 6.322-42 24.95-48.28 48.6-11.41 42.87-11.41 132.3-11.41 132.3s0 89.44 11.41 132.3c6.281 23.65 24.79 41.5 48.28 47.82C117.2 448 288 448 288 448s170.8 0 213.4-11.49c23.5-6.321 42-24.17 48.28-47.82 11.41-42.87 11.41-132.3 11.41-132.3s0-89.44-11.41-132.3zm-317.5 213.5V175.2l142.7 81.21-142.7 81.2z">
                                    </path>
                                </svg>
                            </a>
                            <a target="_blank" href="#">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                                    class="svg-inline--fa fa-instagram " role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function(){
            $('.see_more').hover(function(){
                $(".loading").show();
            });
            $('.see_more').mouseleave(function(){
                $(".loading").hide();
            });
        });
    </script>
</footer>
