<?php
    use App\Models\Blog\Miembro;
    use Illuminate\Database\Seeder;

    class MiembrosTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            $miembro = Miembro::create([
                'nombre' => 'Dr. Eduardo Galaretto',
                'titulo' => 'Director Médico',
                'puesto' => 'Jefe de Ortopedia y Traumatologia',
                'imagen' => 'miembros/7Px7Q408KQ9k9GgpqQ1byStQqWARc9CwhKhLmvXX.jpeg',
                'cv' => '<p>Eduardo Galaretto naci&oacute; en la ciudad de Caracara&ntilde;&aacute; de la provincia de Santa Fe.</p>

                <p>Egres&oacute; como M&eacute;dico en la Universidad Nacional de Rosario.</p>
                
                <p>Su residencia en Ortopedia y Traumatolog&iacute;a la curs&oacute; en el Sanatorio Laprida de la misma Ciudad.</p>
                
                <p>Su formaci&oacute;n de post grado comenz&oacute; en el Hospital de Pediatr&iacute;a Juan P. Garrahan donde realizo un Fellow en el Servicio de Columna por 2 a&ntilde;os. Luego realiz&oacute; rotaciones por los centros m&aacute;s prestigiosos de Estados Unidos y Europa siempre enfocado en Patolog&iacute;a de la columna Vertebral.</p>
                
                <p>Miembro Titular de la Asociaci&oacute;n Argentina de Patologia de la Columna Vertebral.</p>
                
                <p>Miembro Titular de la Asociacion Argentina de Ortopedia y Traumatologia.</p>
                
                <p>Cirujano espinal certificado por la Asociaci&oacute;n Argentina de Patolog&iacute;a de la Columna Vertebral.</p>
                
                <p>M&eacute;dico de Planta Permanente del Hospital de Pediatr&iacute;a Juan P. Garrahan.</p>
                
                <p>M&eacute;dico Consultor del Sanatorio de Ni&ntilde;os de la Ciudad de Rosario.</p>
                
                <p>M&eacute;dico Consultor del Centro de Ortopedia y Traumatolog&iacute;a de la Ciudad de Rosario.</p>
                
                <p>M&eacute;dico de Planta Permanente del Hospital Universitario Austral.</p>
                
                <p>Director M&eacute;dico del Servicio de Columna Vertebral de Axial Grupo M&eacute;dico.</p>',
                'link' => 'https://ar.linkedin.com/in/eduardo-galaretto-31b6ab33',
                'slug' => 'dr-eduardo-galaretto',
                'id_usuario' => 1,
            ]);
            $miembro = Miembro::create([
                'nombre' => 'Dr. Cristian Fuster',
                'titulo' => 'Medico Neurocirujano',
                'puesto' => 'Jefe de Neurocirugía',
                'imagen' => 'miembros/hGdfYThZr1liRoio3ogFHFIk8FFtRbS1ObguM045.jpeg',
                'cv' => '<p>El&nbsp;<strong>Dr. Cristian&nbsp;Fuster</strong>&nbsp;es Neurocirujano, argentino, naci&oacute; en Charata en la provincia del Chaco.&nbsp;</p>

                <p>Egres&oacute; como m&eacute;dico de la Universidad Barcel&oacute; (Buenos Aires) en el a&ntilde;o 1999 y complet&oacute; su formaci&oacute;n&nbsp;&nbsp;neuroquir&uacute;rgica en el instituto FLENI.</p>
                
                <p>Actualmente desarrolla su actividad profesional practicando&nbsp;<strong>intervenciones quir&uacute;rgicas cerebrales y cirug&iacute;as mini invasivas ( tubulares y endosc&oacute;picas) de la columna vertebral.</strong></p>
                
                <p>Es director acad&eacute;mico de la Diplomatura en Deporte y Neurociencias de la Universidad&nbsp;&nbsp;Favaloro.</p>
                
                <p>Entre los a&ntilde;os 2014 y 2016 ocup&oacute; el cargo de&nbsp;<strong>Director M&eacute;dico del Hospital Universitario de la Fundaci&oacute;n Favaloro.</strong></p>
                
                <p>En el a&ntilde;o 2013, fue quien intervino quir&uacute;rgicamente de un hematoma&nbsp;&nbsp;cerebral subdural, a la entonces&nbsp;<strong>Sra. Presidenta de la Naci&oacute;n Cristina Fernandez de Kichner.</strong></p>
                
                <p>En el a&ntilde;o 2015, recibi&oacute; la menci&oacute;n de honor&nbsp;&ldquo;<strong>Senador Domingo&nbsp;Faustino Sarmiento</strong>&rdquo;,&nbsp;en reconocimiento a su obra destinada a mejorar la calidad de vida de sus semejantes.</p>
                
                <p>Fue&nbsp;miembro del equipo de neurocirug&iacute;a del Hospital Austral, Jefe de neurocirug&iacute;a y director m&eacute;dico del&nbsp;<strong>Instituto de Neurociencias de la Fundaci&oacute;n Favaloro.</strong></p>',
                'link' => 'https://www.linkedin.com/in/cristian-fuster-0645702a',
                'slug' => 'dr-cristian-fuster',
                'id_usuario' => 1,
            ]);
            $miembro = Miembro::create([
                'nombre' => 'Dr. Norberto Fernandez',
                'titulo' => 'Medico Especialista en Ortopedia y Traumatologia',
                'puesto' => 'Patologia Espinal',
                'imagen' => 'miembros/VkbkxVMWCNEWTMHQoORfXqBhvo7LbwdnhBB5jG5b.jpeg',
                'cv' => '<p>M&eacute;dico egresado de la Universidad Nacional de La Plata (2002)</p>

                <p>Residente de Ortopedia y Traumatolog&iacute;a de Hospital Cosme Argerich (2003-2007), Jefe de residentes (2007-2008)</p>
                
                <p>Beca Bi-anual de perfeccionamiento en Patolog&iacute;a Espinal del Hospital Garrahan. (2008-2010)</p>
                
                <p>M&eacute;dico de planta del servicio de Patolog&iacute;a de la Columna Vertebral del Hospital Argerich y ex m&eacute;dico del Hospital de Alta Complejidad El Cruce.</p>
                
                <p>Especialista universitario en Ortopedia y Traumatolog&iacute;a.</p>
                
                <p>Miembro certificado de la Sociedad Argentina de Patolog&iacute;a de la Columna Vertebral (SAPCV) y de la Asociaci&oacute;n Argentina de Ortopedia y Traumatolog&iacute;a (AAOT).</p>',
                'link' => 'https://www.linkedin.com/in/norberto-fernandez-95834aa8',
                'slug' => 'dr-norberto-fernandez',
                'id_usuario' => 1,
            ]);
            $miembro = Miembro::create([
                'nombre' => 'Dr. Nicolas Coombes',
                'titulo' => 'Médico Especialista en Ortopedia y Traumatología',
                'puesto' => 'Patologia Espinal',
                'imagen' => 'miembros/kVb3pElMCYi2zjpkWm08sD0lREOs0iqNDSVVbVwi.jpeg',
                'cv' => '<p>M&eacute;dico cirujano egresado de la Universidad Nacional del Nordeste (2006)</p>

                <p>Residencia Completa de Ortopedia y Traumatolog&iacute;a Hospital Julio C. Perrando Resistencia - Chaco (2007-2010)</p>
                
                <p>Fellowship AOSpine Short-Term en Deformidades Espinales Pedi&aacute;trica (Hospital Garrahan) (2010)</p>
                
                <p>Beca de Perfeccionamiento en Deformidades Espinales Pedi&aacute;tricas (Hospital Garrahan 2011-2012)</p>
                
                <p>Fellowship en el Instituto de Rehabilitaci&oacute;n Psicof&iacute;sica de Buenos Aires (IREP) CIRUGIA DE COLUMNA DEL ADULTO (2012-2013)</p>
                
                <p>Miembro de la Sociedad Argentina de Patolog&iacute;a de Columna Vertebral (SAPCV) y de la Asociaci&oacute;n Argentina de Ortopedia Traumatolog&iacute;a (AAOT)</p>',
                'link' => 'https://www.linkedin.com/in/cristian-fuster-0645702a',
                'slug' => 'dr-nicolas-coombes',
                'id_usuario' => 1,
            ]);
        }
    }
