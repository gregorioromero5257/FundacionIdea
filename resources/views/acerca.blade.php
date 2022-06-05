@extends('layouts.site')

@section('content')

<section class="py-5-home py-5-h-size new-bg">
  <div class="grid-banner-home">



    </div>

  </section>

  <div class="grid-team background-card-l">
    <div class="uno-team-u">
      <h1 class="text-blues-two font-face-dp s-one-text">
        Quiénes somos
      </h1>
      <h3 class="s-three-ban-text text-blues-two font-face-dp">
        <br>
        Fundación IDEA es una de las primeras organizaciones que <br>
generan conocimiento y dan asistencia técnica en política <br>
pública en México
      </h3>
    </div>
    <div class="dos-team-u-d" style="background-image:url(img/acerca.png); background-repeat: round;">
      <label>&nbsp;</label>
    </div>
  </div>

  <div class="grid-acerca">
    <div class="text-lg-justify">
      <p class="s-four-text text-color-letter-content font-face-dp">
        Somos una organización sin fines de lucro, independiente y apartidista, cuya misión es diseñar y promover políticas públicas
        innovadoras que generan igualdad de oportunidades para los mexicanos a través del desarrollo económico y la reducción de la
        pobreza; así como ser una fuente confiable de análisis independiente para funcionarios de gobierno y el público en general.<br><br>
        En Fundación IDEA nos dedicamos a generar información y a diseñar políticas que influyan positivamente en el futuro de
        México. Nuestro país enfrenta muchas barreras que impiden su desarrollo económico sostenido así como la movilidad social y
        económica de su población más pobre.<br><br>
        En Fundación IDEA identificamos estas barreras y a tráves del análisis riguroso y la investigación impulsamos los cambios
        necesarios para influir en las decisiones públicas y realizar recomendaciones de políticas adecuadas.<br><br>
        Llevamos a cabo investigación y análisis de la más alta calidad para evaluar las políticas públicas vigentes.<br><br>
        Ofrecemos propuestas creativas y políticamente factibles para resolver los problemas públicos de México.Utilizamos las
        mejores prácticas e ideas a nivel internacional. Nuestro análisis es riguroso y nuestras conclusiones se basan en evidencia
        confiable.
      </p>
    </div>

  </div>



  <div class="grid-team-two">
    <div class="container-icons-brands-t text-lg-center" >

      <div class="size-card-team" id="ct-uno">
        <div class="card card-pictures ci-one">
          <a onclick="verDetalle(1)" class="stretched-link"></a>
        </div>
        <p class="s-four-text t-pbt text-blues-three font-face-dpbl text-one">Marco López</p>
        <!-- <p class="s-four-text t-pbt text-color-letter-content font-face-dp text-one">Socio</p> -->
      </div>

      <div class="size-card-team" id="ct-dos">
        <div class="card card-pictures ci-two">
          <a onclick="verDetalle(2)" class="stretched-link"></a>
        </div>
        <p class="s-four-text t-pbt text-blues-three font-face-dpbl text-two">Jessica Beitman</p>
        <!-- <p class="s-four-text t-pbt text-color-letter-content font-face-dp text-two">Socia</p> -->
      </div>

      <div class="size-card-team" id="ct-tres">
        <div class="card card-pictures ci-three">
          <a onclick="verDetalle(3)" class="stretched-link"></a>
        </div>
        <p class="s-four-text t-pbt text-blues-three font-face-dpbl text-three">Carolina Agurto</p>
        <!-- <p class="s-four-text t-pbt text-color-letter-content font-face-dp text-three">Socia</p> -->
      </div>

      <div class="size-card-team" id="ct-cuatro">
        <div class="card card-pictures ci-four">
          <a onclick="verDetalle(4)" class="stretched-link"></a>
        </div>
        <p class="s-four-text t-pbt text-blues-three font-face-dpbl text-four">Raúl Abreu</p>
        <!-- <p class="s-four-text t-pbt text-color-letter-content font-face-dp text-four">Socio</p> -->
      </div>

    </div>

  </div>

  <div class="grid-team-three" style="border: 1px solid #d8d8d8;border-radius: 5px;" id="gc-uno">
    <div class="gtt-uno" >
      <img src="../img/Equipo-directivo/marco-antonio-lopez-silva-avatar.png" class="size-team-details" onclick="verDetalle(5)">
    </div>
    <div class="gtt-dos text-lg-justify">
      <h1 class="s-two-text text-blues-three font-face-dp">Marco López</h1>
      <!-- <h1 class="s-three-text text-blues-three font-face-dp">Socio</h1> -->
      <p class="s-four-text text-color-letter-content font-face-dp">
        <br>
        Marco Antonio López Silva tiene más de 20 años de experiencia en la gestión de proyectos, análisis y estudios para organismos internacionales y los sectores público y privado. Cuenta con una Maestría en Políticas Públicas de la Universidad de Harvard y es Ingeniero Civil por el ITESM. Se ha especializado en Desarrollo urbano y vivienda, Desarrollo social, Estado de Derecho, entre otros.
      </p>
    </div>
  </div>

  <div class="grid-team-three" style="border: 1px solid #d8d8d8;border-radius: 5px;" id="gc-dos">
    <div class="gtt-uno" >
      <img src="../img/Equipo-directivo/jessica-beitman-maya-avatar.png" class="size-team-details" onclick="verDetalle(5)">
    </div>
    <div class="gtt-dos text-lg-justify">
      <h1 class="s-two-text text-blues-three font-face-dp">Jessica Beitman</h1>
      <!-- <h1 class="s-three-text text-blues-three font-face-dp">Socia</h1> -->
      <p class="s-four-text text-color-letter-content font-face-dp">
        <br>
        Jessica Beitman es una especialista en política pública con más de once años de experiencia trabajando con el sector público y privado en México y otros países. Cuenta con una Maestría en Política Pública por la Universidad de Oxford y es Licenciada en Relaciones Internacionales por la Universidad Iberoamericana. Ha estado involucrada en más de treinta proyectos de diseño, análisis, implementación y evaluación de políticas públicas relacionados con Salud y bienestar, Desarrollo Urbano y vivienda, Estado de Derecho, entre otros.
      </p>
    </div>
  </div>

  <div class="grid-team-three" style="border: 1px solid #d8d8d8;border-radius: 5px;" id="gc-tres">
    <div class="gtt-uno" >
      <img src="../img/Equipo-directivo/carolina-agurto-avatar.png" class="size-team-details" onclick="verDetalle(5)">
    </div>
    <div class="gtt-dos text-lg-justify">
      <h1 class="s-two-text text-blues-three font-face-dp">Carolina Agurto</h1>
      <!-- <h1 class="s-three-text text-blues-three font-face-dp">Socia</h1> -->
      <p class="s-four-text text-color-letter-content font-face-dp">
        <br>
        Carolina Agurto Salazar tiene más de 14 años de experiencia en el diseño, análisis e implementación de políticas públicas para organismos internacionales y los sectores público y privado. Cuenta con una Maestría en Políticas Públicas de la Universidad de Chicago, una concentración en Economía y Política de la Regulación en la Universidad de Stanford, estudios de liderazgo en LSE y es Economista por la Universidad Peruana de Ciencias Aplicadas. Se ha especializado en Fortalecimiento del sector público; Estado de Derecho; Regulación, competencia y comercio; entre otros.
      </p>
    </div>
  </div>


  <div class="grid-team-three" style="border: 1px solid #d8d8d8;border-radius: 5px;" id="gc-cuatro">
    <div class="gtt-uno" >
      <img src="../img/Equipo-directivo/raul-abreu-lastra-avatar.png" class="size-team-details" onclick="verDetalle(5)">
    </div>
    <div class="gtt-dos text-lg-justify">
      <h1 class="s-two-text text-blues-three font-face-dp">Raúl Abreu</h1>
      <!-- <h1 class="s-three-text text-blues-three font-face-dp">Socio</h1> -->
      <p class="s-four-text text-color-letter-content font-face-dp">
        <br>
        Raúl Abreu Lastra es cofundador de Fundación IDEA, con más de 17 años de experiencia profesional que incluyen sector público, consultoría de políticas públicas y emprendimiento de empresas de tecnología. Cuenta con una Maestría en Desarrollo Económico por la escuela de gobierno de la Universidad de Harvard y es Ingeniero Industrial y de Sistemas por el Tecnológico de Monterrey, Campus Monterrey. Además de formar parte del equipo directivo de la organización, se ha especializado en educación, desarrollo rural, desarrollo social, vivienda e inclusión financiera.
      </p>
    </div>
  </div>
<br><br>

<script>
function verDetalle(d) {


  var uno = document.getElementById('ct-uno');
  var dos = document.getElementById('ct-dos');
  var tres = document.getElementById('ct-tres');
  var cuatro = document.getElementById('ct-cuatro');

  var uno_g = document.getElementById('gc-uno');
  var dos_g = document.getElementById('gc-dos');
  var tres_g = document.getElementById('gc-tres');
  var cuatro_g = document.getElementById('gc-cuatro');





  if (d == 1) {
    uno.style.display ="none";
    dos.style.display ="none";
    tres.style.display ="none";
    cuatro.style.display ="none";
    uno_g.style.display = "grid";
  }else if (d == 2) {
    uno.style.display ="none";
    dos.style.display ="none";
    tres.style.display ="none";
    cuatro.style.display ="none";
    dos_g.style.display = "grid";
  }else if (d == 3) {
    uno.style.display ="none";
    dos.style.display ="none";
    tres.style.display ="none";
    cuatro.style.display ="none";
    tres_g.style.display = "grid";
  }else if (d == 4) {
    uno.style.display ="none";
    dos.style.display ="none";
    tres.style.display ="none";
    cuatro.style.display ="none";
    cuatro_g.style.display = "grid";
  }else if (d == 5) {
    uno.style.display ="grid";
    dos.style.display ="grid";
    tres.style.display ="grid";
    cuatro.style.display ="grid";

    uno_g.style.display = "none";
    dos_g.style.display = "none";
    tres_g.style.display = "none";
    cuatro_g.style.display = "none";
  }


}

//funcion para cualquier clic en el documento
document.addEventListener("click", function(e){
var uno = document.getElementById('ct-uno');
var dos = document.getElementById('ct-dos');
var tres = document.getElementById('ct-tres');
var cuatro = document.getElementById('ct-cuatro');

var uno_g = document.getElementById('gc-uno');
var dos_g = document.getElementById('gc-dos');
var tres_g = document.getElementById('gc-tres');
var cuatro_g = document.getElementById('gc-cuatro');
//obtiendo informacion del DOM para
var clic = e.target;

if (clic.className == "main") {
  uno.style.display ="grid";
  dos.style.display ="grid";
  tres.style.display ="grid";
  cuatro.style.display ="grid";

  uno_g.style.display = "none";
  dos_g.style.display = "none";
  tres_g.style.display = "none";
  cuatro_g.style.display = "none";
}

}, false);
</script>

  @endsection
