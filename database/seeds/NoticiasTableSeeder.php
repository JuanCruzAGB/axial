<?php
    use App\Models\Blog\Noticia;
    use Illuminate\Database\Seeder;

    class NoticiasTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            $miembro = Noticia::create([
                'titulo' => 'Evita largas y engorrosas filas: estos son los trámites que ya puedes realizar desde internet en CDMX',
                'imagen' => 'noticias/x3kS7oouXOhL5XrtadKS3HfqedZZ9dU9gP2ynOLu.jpeg',
                'contenido' => '<p>Seguro de desempleo, licencia de conducir y constancia de discapacidad permanente son algunos de los ejemplos donde ya no ser&aacute; necesario acudir a las oficinas gubernamentales. (Foto: Cuartoscuro)</p>

                <p>Durante el&nbsp;<strong>2020</strong>, una de las apuestas m&aacute;s importantes del&nbsp;<strong>Gobierno de la Ciudad de M&eacute;xico</strong>&nbsp;est&aacute; orientada hacia la&nbsp;<strong>digitalizaci&oacute;n&nbsp;</strong>de una importante parte de los&nbsp;<strong>tr&aacute;mites&nbsp;</strong>que pueden realizar los ciudadanos, pues se prev&eacute; que a finales de este a&ntilde;o se puedan llevar a cabo desde la comodidad de casa&nbsp;<strong>cerca de 30 diligencias</strong>.</p>
                
                <p>A partir de&nbsp;<strong>enero</strong>, ser&aacute;n&nbsp;<strong>cinco&nbsp;</strong>los tr&aacute;mites que podr&aacute;n llevarse a cabo de manera digital. Estos son la&nbsp;<strong>constancia de discapacidad permanente</strong>, el&nbsp;<strong>seguro de desempleo</strong>, la&nbsp;<strong>licencia de conducir</strong>, la voluntad anticipada y la inscripci&oacute;n de actos y hechos jur&iacute;dicos.</p>
                
                <p>Para el segundo mes del a&ntilde;o, otros de los documentos que se podr&aacute;n obtener a trav&eacute;s de los servicios en l&iacute;nea ser&aacute;n el&nbsp;<strong>tarjet&oacute;n de parqu&iacute;metros</strong>&nbsp;para residentes, la&nbsp;<strong>constancia de no adeudo de agua</strong>, la&nbsp;<strong>correcci&oacute;n de datos de boleta de agua</strong>&nbsp;e incluso se podr&aacute; llevar a cabo el&nbsp;<strong>cambio de propietario</strong>&nbsp;de la misma boleta.</p>
                
                <p>En&nbsp;<strong>marzo&nbsp;</strong>se espera que se tengan listos otros tres tr&aacute;mites m&aacute;s, los cuales son la&nbsp;<strong>solicitud del permiso para la operaci&oacute;n de establecimientos mercantiles</strong>, la&nbsp;<strong>tarjeta de circulaci&oacute;n digital</strong>&nbsp;y la&nbsp;<strong>constancia de no existencia de registro de inhabilitaci&oacute;n</strong>.</p>',
                'slug' => 'evita-largas-y-engorrosas-filas-estos-son-los-tramites-que-ya-puedes-realizar-desde-internet-en-cdmx',
                'id_usuario' => 1,
            ]);
        }
    }
