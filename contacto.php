<?php
include ("header.php");
?>
<title>Hotel Andes - Contacto</title>
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/contacto.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">                    
                    <div class="title">
                        <h1>Contacto</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section fifty six -->
    <section class="section-fifty-six">
        <div class="auto-container">
            <div class="row">
                <div class="col-4">
                    <div class="block-fifty-six">
                        <div class="icon"><i class="flaticon-open"></i></div>
                        <div class="icon-border"></div>
                        <h3>Email</h3>
                        <div class="text"><br><a href="mailto:reservas@hotelandesperu.com" style="color:#777777">reservas@hotelandesperu.com</a></div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="block-fifty-six">
                        <div class="icon"><i class="flaticon-call-2"></i></div>
                        <div class="icon-border"></div>
                        <h3>Celular / Teléfono</h3>
                        <div class="text" ><a href=""style="color:#777777">+51 914 926 229</a><br> <a href="" style="color:#777777">(084) 259 354</a></div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="block-fifty-six">
                        <div class="icon"><i class="flaticon-location-2"></i></div>
                        <div class="icon-border"></div>
                        <h3>Dirección</h3>
                        <div class="text">Jirón Sucre 538, <br>Urubamba 08661</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- map section -->
    <section class="map-section">
        <div class="contact-map">            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.7352669764377!2d-72.11901202503918!3d-13.304470566591483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916ddd1f4f5544c7%3A0xeb7f216c293c21c6!2sHotel%20Andes%20de%20Urubamba!5e0!3m2!1ses!2spe!4v1711253311521!5m2!1ses!2spe" width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- contact section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image"><img src="assets/images/contacto1.jpg" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-block">
                       <div class="sub-title">Formulario</div>
                       <h2 class="sec-title mb-30" >Contacto</h2>
                       <div class="text">Llena el siguiente formulario y nos pondremos en contacto contigo en la brevedad.</div>
                        <!-- form -->
                        <div class="contact-form style-two">
                            <form method="post" action="inc/sendemail.php" id="contact-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="form_name" value="" placeholder="Nombre" required>
                                    </div>                      
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Email" required>
                                    </div>                        
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="form_phone" value="" placeholder="Celular" required>
                                    </div>                        
                                    <div class="form-group col-md-6">
                                        
                                    </div>                        
                                    <div class="form-group col-md-12">
                                        <textarea name="form_message" class="form-control" placeholder="Mensaje"></textarea>
                                    </div>                        
                                    <div class="form-group col-md-12">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Enviar</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- form end -->
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
include ("footer.php");
?>