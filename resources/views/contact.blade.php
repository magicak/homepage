<title>{{ $title }}</title>
@include("partials/header")

<div class="body_wrapper">
    <section class="breadcrumb_area">
        <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Contac Us</h1>
                <p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>
            </div>
        </div>
    </section>

    <section class="contact_info_area sec_pad bg_color">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pr-0">
                    <div class="contact_info_item">
                        <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Office Address</h6>
                        <p class="f_400 f_size_15">Melbourne’s GPO 434 Bourke St. Dhaka VIC 3074, Australia</p>
                    </div>
                    <div class="contact_info_item">
                        <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Contact Info</h6>
                        <p class="f_400 f_size_15"><span class="f_400 t_color3">Phone:</span> <a href="tel:3024437488">(+096) 302 443 7488</a></p>
                        <p class="f_400 f_size_15"><span class="f_400 t_color3">Fax:</span> <a href="tel:3024437488">(+096) 204 353 6684</a></p>
                        <p class="f_400 f_size_15"><span class="f_400 t_color3">Email:</span> <a href="mailto:saasland@gmail.com">saasland@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="contact_form">
                        <form action="contact_process.php" class="contact_form_box" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group text_box">
                                        <input type="text" id="name" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group text_box">
                                        <input type="text" name="email" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group text_box">
                                        <input type="text" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group text_box">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message . . ."></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn_three">Send Message</button>
                        </form>
                        <div id="success">Your message succesfully sent!</div>
                        <div id="error">Opps! There is something wrong. Please try again</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mapbox2">
        <div id="mapBox" class="row m0" data-lat="40.701083" data-lon="-74.1522848" data-zoom="10" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-marker="img/map.png" data-mlat="40.701083" data-mlon="-74.1522848">
        </div>
    </section>

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g"></script>
<script src="{{ asset ("js/gmaps.min.js") }}"></script>
<script src="{{ asset ("js/plugins.js") }}"></script>

@include("partials/footer")
