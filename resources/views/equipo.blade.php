@extends('layouts.site')

@section('content')

<section class="py-5-home py-5-h-size new-bg">
  <div class="grid-banner-home">



  </div>

</section>

<div class="grid-team background-card-l">
  <div class="uno-team-u">
    <h1 class="text-blues-two font-face-dp s-one-text">
      Mesa directiva
    </h1>
    <h3 class="s-three-ban-text text-blues-two font-face-dp">
      <br>
      Excepteur sint occaecat cupidatat non proident, sunt in <br>
      culpa qui officia deserunt mollit anim id est laborum.
    </h3>
  </div>
  <div class="dos-team-u" style="background-image:url(img/Mesa-directiva.png); background-repeat: round;">
    <label>&nbsp;</label>
  </div>
</div>

<div class="grid-team-two">
  <div class="container-icons-brands-t text-lg-center" >

    <div class="size-card-team" id="ct-uno">
      <div class="card card-pictures ci-one">
        <a onclick="verDetalle(1)" class="stretched-link"></a>
      </div>
      <p class="s-four-text t-pbt text-blues-three font-face-dpbl text-one">Marco López</p>
      <p class="s-four-text t-pbt text-color-letter-content font-face-dp text-one">Socio</p>
    </div>

    <div class="size-card-team" id="ct-dos">
      <div class="card card-pictures ci-two">
        <a onclick="verDetalle(2)" class="stretched-link"></a>
      </div>
      <p class="s-four-text t-pbt text-blues-three font-face-dpbl text-two">Jessica Beitman</p>
      <p class="s-four-text t-pbt text-color-letter-content font-face-dp text-two">Socia</p>
    </div>

    <div class="size-card-team" id="ct-tres">
      <div class="card card-pictures ci-three">
        <a onclick="verDetalle(3)" class="stretched-link"></a>
      </div>
      <p class="s-four-text t-pbt text-blues-three font-face-dpbl text-three">Carolina Agurto</p>
      <p class="s-four-text t-pbt text-color-letter-content font-face-dp text-three">Socia</p>
    </div>

    <div class="size-card-team" id="ct-cuatro">
      <div class="card card-pictures ci-four">
        <a onclick="verDetalle(4)" class="stretched-link"></a>
      </div>
      <p class="s-four-text t-pbt text-blues-three font-face-dpbl text-four">Raúl Abreu</p>
      <p class="s-four-text t-pbt text-color-letter-content font-face-dp text-four">Socio</p>
    </div>

  </div>

</div>

<div class="grid-team-three" style="border: 1px solid #d8d8d8;border-radius: 5px;" id="gc-uno">
  <div class="gtt-uno" style="border: 1px solid #aeaeaf;">
    <img src="../img/Equipo-directivo/marco-antonio-lopez-silva-avatar.png" class="size-team-details">
  </div>
  <div class="gtt-dos text-lg-justify">
    <h1 class="s-two-text text-blues-three font-face-dp">Marco López</h1>
    <h1 class="s-three-text text-blues-three font-face-dp">Socio</h1>
    <p class="s-four-text text-color-letter-content font-face-dp">
      <br>
      Marco Antonio López Silva tiene más de 20 años de experiencia en la gestión de proyectos, análisis y estudios para organismos internacionales y los sectores público y privado. Cuenta con una Maestría en Políticas Públicas de la Universidad de Harvard y es Ingeniero Civil por el ITESM. Se ha especializado en Desarrollo urbano y vivienda, Desarrollo social, Estado de Derecho, entre otros.
    </p>
  </div>
</div>

<div class="grid-team-three" style="border: 1px solid #d8d8d8;border-radius: 5px;" id="gc-dos">
  <div class="gtt-uno" style="border: 1px solid #aeaeaf;">
    <img src="../img/Equipo-directivo/jessica-beitman-maya-avatar.png" class="size-team-details">
  </div>
  <div class="gtt-dos text-lg-justify">
    <h1 class="s-two-text text-blues-three font-face-dp">Jessica Beitman</h1>
    <h1 class="s-three-text text-blues-three font-face-dp">Socia</h1>
    <p class="s-four-text text-color-letter-content font-face-dp">
      <br>
      Jessica Beitman es una especialista en política pública con más de once años de experiencia trabajando con el sector público y privado en México y otros países. Cuenta con una Maestría en Política Pública por la Universidad de Oxford y es Licenciada en Relaciones Internacionales por la Universidad Iberoamericana. Ha estado involucrada en más de treinta proyectos de diseño, análisis, implementación y evaluación de políticas públicas relacionados con Salud y bienestar, Desarrollo Urbano y vivienda, Estado de Derecho, entre otros.
    </p>
  </div>
</div>

<div class="grid-team-three" style="border: 1px solid #d8d8d8;border-radius: 5px;" id="gc-tres">
  <div class="gtt-uno" style="border: 1px solid #aeaeaf;">
    <img src="../img/Equipo-directivo/carolina-agurto-avatar.png" class="size-team-details">
  </div>
  <div class="gtt-dos text-lg-justify">
    <h1 class="s-two-text text-blues-three font-face-dp">Carolina Agurto</h1>
    <h1 class="s-three-text text-blues-three font-face-dp">Socia</h1>
    <p class="s-four-text text-color-letter-content font-face-dp">
      <br>
      Carolina Agurto Salazar tiene más de 14 años de experiencia en el diseño, análisis e implementación de políticas públicas para organismos internacionales y los sectores público y privado. Cuenta con una Maestría en Políticas Públicas de la Universidad de Chicago, una concentración en Economía y Política de la Regulación en la Universidad de Stanford, estudios de liderazgo en LSE y es Economista por la Universidad Peruana de Ciencias Aplicadas. Se ha especializado en Fortalecimiento del sector público; Estado de Derecho; Regulación, competencia y comercio; entre otros.
    </p>
  </div>
</div>


<div class="grid-team-three" style="border: 1px solid #d8d8d8;border-radius: 5px;" id="gc-cuatro">
  <div class="gtt-uno" style="border: 1px solid #aeaeaf;">
    <img src="../img/Equipo-directivo/raul-abreu-lastra-avatar.png" class="size-team-details">
  </div>
  <div class="gtt-dos text-lg-justify">
    <h1 class="s-two-text text-blues-three font-face-dp">Raúl Abreu</h1>
    <h1 class="s-three-text text-blues-three font-face-dp">Socio</h1>
    <p class="s-four-text text-color-letter-content font-face-dp">
      <br>
      Raúl Abreu Lastra es socio cofundador de C230 Consultores, con más de 17 años de experiencia profesional que incluyen sector público, consultoría de políticas públicas y emprendimiento de empresas de tecnología. Cuenta con una Maestría en Desarrollo Económico por la escuela de gobierno de la Universidad de Harvard y es Ingeniero Industrial y de Sistemas por el Tecnológico de Monterrey, Campus Monterrey. Además de formar parte del equipo directivo de la organización, se ha especializado en educación, desarrollo rural, desarrollo social, vivienda e inclusión financiera
    </p>
  </div>
</div>




  <div class="grid-acerca-dos background-card-r">
    <div class="gad-uno" style="background-image:url(img/mapa.png); background-repeat: round;">

    </div>
    <div class="gad-dos">
      <div class="texto text-lg-end">
        <h1 class="text-blues-three font-face-dp">200</h1>
        <p class="s-five-text text-color-letter-content font-face-dp">Proyectos ejecutados por Fundación IDEA  Business-to-business branding A/B testing agile development churn rate virality network effects. </p>
      </div>
      <div class="texto text-lg-end">
        <h1 class="text-blues-three font-face-dp">200</h1>
        <p class="s-five-text text-color-letter-content font-face-dp">Proyectos ejecutados por Fundación IDEA  Business-to-business branding A/B testing agile development churn rate virality network effects. </p>
      </div>
      <div class="texto text-lg-end">
        <h1 class="text-blues-three font-face-dp">200</h1>
        <p class="s-five-text text-color-letter-content font-face-dp">Proyectos ejecutados por Fundación IDEA  Business-to-business branding A/B testing agile development churn rate virality network effects. </p>
      </div>

    </div>

  </div>

  <div class="grid-acerca-tres background-card-l">
    <div class="gat-uno text-lg-justify">
      <h3 class="text-color-letter-title mt-3 font-face-dpm s-two-text">Nuestros servicios</h3>
      <p class="s-four-text text-color-letter-content font-face-dp">
        [Texto de CVI] Alpha hackathon ramen ecosystem gamification conversion learning curve success first mover advantage.Alpha hackathon ramen ecosystem gamification conversion learning curve success first mover advantage. Paradigm shift validation hackathon low hanging fruit release infrastructure A/B testing. Value proposition business model canvas incubator. Analytics partnership agile development interaction design burn rate. Rockstar graphical user interface partner network interaction design advisor creative freemium infrastructure direct mailing monetization. Lean startup ecosystem growth hacking ownership handshake crowdfunding incubator business plan backing facebook mass market. Supply chain handshake validation burn rate venture gen-z infographic ownership. Business-to-business branding A/B testing agile development churn rate virality network effects. Prototype leverage client buyer termsheet focus A/B testing vesting period traction business plan. Conversion pitch crowdfunding client seed round virality strategy bootstrapping holy grail.Alpha hackathon ramen ecosystem gamification conversion learning curve success first mover advantage. Paradigm shift
      </p>
    </div>
    <div class="gat-dos">
      <label for="">&nbsp;</label>
    </div>
  </div>

  <div class="grid-acerca">
    <div class="text-lg-justify">
      <h3 class="text-color-letter-title mt-3 font-face-dpm s-two-text">Nuestros aliados</h3>
      <p class="s-four-text text-color-letter-content font-face-dp">
        [Texto de CVI] Alpha hackathon ramen ecosystem gamification conversion learning curve success first mover advantage.Alpha hackathon ramen ecosystem gamification conversion learning curve success first mover advantage. Paradigm shift validation hackathon low hanging fruit release infrastructure A/B testing. Value proposition business model canvas incubator. Analytics
      </p>
    </div>

  </div>

  <div class="grid-acerca-brands text-lg-center" >
    <div class="gab-a">
      <br>
      <h3 class="text-color-letter-title font-face-dpm s-four-text text-decoration-titles">
        Instituciones públicas de México
      </h3>
    </div>
    <div class="gab-a">
      <h3 class="text-color-letter-title font-face-dpm s-four-text text-decoration-titles">
        Instituciones públicas extranjeras
      </h3>
    </div>
    <div class="gab-a">
      <h3 class="text-color-letter-title font-face-dpm s-four-text text-decoration-titles">
        Organismos multilaterales
      </h3>
    </div>
    <div class="gab-a">
      <h3 class="text-color-letter-title font-face-dpm s-four-text text-decoration-titles">
        Instituciones académicas
      </h3>
    </div>
    <div class="gab-a">
      <h3 class="text-color-letter-title font-face-dpm s-four-text text-decoration-titles">
        Fundaciones y empresas privadas
      </h3>
    </div>
  </div>



<br><br>

<script>
function verDetalle(d) {

  console.log(d);
  var uno = document.getElementById('ct-uno');
  var dos = document.getElementById('ct-dos');
  var tres = document.getElementById('ct-tres');
  var cuatro = document.getElementById('ct-cuatro');

  var uno_g = document.getElementById('gc-uno');
  var dos_g = document.getElementById('gc-dos');
  var tres_g = document.getElementById('gc-tres');
  var cuatro_g = document.getElementById('gc-cuatro');

  console.log(uno.style);
  // uno.style.display ="none";
  // dos.style.display ="none";
  // tres.style.display ="none";
  // cuatro.style.display ="none";
  //
  // if (d == 1) {
  //   uno_g.style.display = "grid";
  // }else if (d == 2) {
  //   dos_g.style.display = "grid";
  // }else if (d == 3) {
  //   tres_g.style.display = "grid";
  // }else if (d == 4) {
  //   cuatro_g.style.display = "grid";
  // }


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
