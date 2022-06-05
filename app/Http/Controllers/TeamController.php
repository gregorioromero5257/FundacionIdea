<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function getdata($id)
    {
      $texto ='';
      $data = [
        'marco' => 'Marco Antonio López Silva tiene más de 20 años de experiencia en la gestión de proyectos, análisis y estudios para organismos internacionales y los sectores público y privado. Cuenta con una Maestría en Políticas Públicas de la Universidad de Harvard y es Ingeniero Civil por el ITESM. Se ha especializado en Desarrollo urbano y vivienda, Desarrollo social, Estado de Derecho, entre otros.',
        'jessica' => 'Jessica Beitman es una especialista en política pública con más de once años de experiencia trabajando con el sector público y privado en México y otros países. Cuenta con una Maestría en Política Pública por la Universidad de Oxford y es Licenciada en Relaciones Internacionales por la Universidad Iberoamericana. Ha estado involucrada en más de treinta proyectos de diseño, análisis, implementación y evaluación de políticas públicas relacionados con Salud y bienestar, Desarrollo Urbano y vivienda, Estado de Derecho, entre otros.',
        'carolina' => 'Carolina Agurto Salazar tiene más de 14 años de experiencia en el diseño, análisis e implementación de políticas públicas para organismos internacionales y los sectores público y privado. Cuenta con una Maestría en Políticas Públicas de la Universidad de Chicago, una concentración en Economía y Política de la Regulación en la Universidad de Stanford, estudios de liderazgo en LSE y es Economista por la Universidad Peruana de Ciencias Aplicadas. Se ha especializado en Fortalecimiento del sector público; Estado de Derecho; Regulación, competencia y comercio; entre otros.',
        'raul' => 'Raúl Abreu Lastra es socio cofundador de C230 Consultores, con más de 17 años de experiencia profesional que incluyen sector público, consultoría de políticas públicas y emprendimiento de empresas de tecnología. Cuenta con una Maestría en Desarrollo Económico por la escuela de gobierno de la Universidad de Harvard y es Ingeniero Industrial y de Sistemas por el Tecnológico de Monterrey, Campus Monterrey. Además de formar parte del equipo directivo de la organización, se ha especializado en educación, desarrollo rural, desarrollo social, vivienda e inclusión financiera',
      ];

      if ($id == 1) {
        $texto = $data['marco'];
      }elseif ($id == 2) {
        $texto = $data['jessica'];
      }elseif ($id == 3) {
        $texto = $data['carolina'];
      }elseif ($id == 4) {
        $texto = $data['raul'];
      }

      return view('team',compact('texto','id'));

    }
}
