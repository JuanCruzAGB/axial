<?php
    /** @var array $validation */
?>
<div id="contacto" class="contacto col-12 container-contact100">
    <div class="row wrap-contact100">
        <form class="col-12 col-md-10 col-lg-8 contact-form contact100-form form-validate pb-3 pt-0 mx-auto"
            data-validation="{{$validation}}"
            action="/contactar"
            method="post">
            @csrf
            <div class="row my-4 pt-5 px-3">
                <span class="col-12 contact100-form-title py-4">
                    Contacto
                </span>

                @if($errors->has('nombre'))
                    <div class="nombre col-12 support-tooltip showed" data-tooltip="{{$errors->first('nombre')}}">
                @else
                    <div class="nombre col-12 mb-3">
                @endif
                    <!--  <label class="label-input100 mt-0 mb-3" for="nombre">Nombre</label> -->
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                        <input id="nombre" class="input100" type="text" name="nombre" placeholder="Nombre">
                        <span class="focus-input100"></span>
                    </div>
                </div>

                @if($errors->has('correo'))
                    <div class="correo col-12 support-tooltip showed" data-tooltip="{{$errors->first('correo')}}">
                @else
                    <div class="correo col-12 mb-3">
                @endif
                    <!-- <label class="label-input100 mt-0 mb-3" for="email">Email *</label> -->
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100" type="text" name="correo" placeholder="email@email.com">
                        <span class="focus-input100"></span>
                    </div>
                </div>

                @if($errors->has('telefono'))
                    <div class="telefono col-12 support-tooltip showed" data-tooltip="{{$errors->first('telefono')}}">
                @else
                    <div class="telefono col-12 mb-3">
                @endif
                    <!-- <label class="label-input100 mt-0 mb-3" for="phone">Teléfono *</label> -->
                    <div class="wrap-input100">
                        <input id="phone" class="input100" type="text" name="telefono" placeholder="+54 800 000000">
                        <span class="focus-input100"></span>
                    </div>
                </div>
                
                @if($errors->has('mensaje'))
                    <div class="mensaje col-12 support-tooltip showed" data-tooltip="{{$errors->first('mensaje')}}">
                @else
                    <div class="mensaje col-12 mb-3">
                @endif
                    <!--  <label class="label-input100 mt-0 mb-3" for="message">Mensaje *</label> -->
                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <textarea id="message" class="input100" name="mensaje" placeholder="Escribenos tu mensaje"></textarea>
                        <span class="focus-input100"></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="container-contact100-form-btn">
                        <button class="form-submit contact100-form-btn">
                            Enviar mensaje
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="col-12 col-lg-4 contact-data contact100-more flex-col-c-m pt-5 pl-lg-5">
            <div class="flex-w size1 p-b-47 mt-3 mt-md-5">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-map-marker"></span>
                </div>

                <div class="flex-col size2">
                    <span class="txt1 p-b-20">
                        Dirección
                    </span>

                    <span class="txt2">
                        Huergo 366 6 "A" , Cañitas, CABA
                    </span>
                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-phone-handset"></span>
                </div>

                <div class="flex-col size2">
                    <span class="txt1 p-b-20">
                        Telefonó de contacto
                    </span>

                    <span class="txt3">
                        (011) 4772-7679
                    </span>
                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-envelope"></span>
                </div>

                <div class="flex-col size2">
                    <span class="txt1 p-b-20">
                        Correo de contacto
                    </span>

                    <span class="txt3">
                        info@grupoaxial.org
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>