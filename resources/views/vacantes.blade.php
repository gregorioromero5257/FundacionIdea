@extends('layouts.site')

@section('content')
<section class="py-5-home py-5-h-size new-bg">
  <div class="grid-banner-home">



    </div>

  </section>

  <div class="grid-team background-card-l">
    <div class="uno-team-u">
      <br>
      <h1 class="text-blues-two font-face-dp s-one-text">
        Únete a Fundación IDEA
      </h1>
      <h3 class="s-three-ban-text text-blues-two font-face-dp">
        <br>
        ¡Súmate a nuestro equipo y ayúdanos a tener un impacto <br>
        significativo en el bienestar social de México y el resto del mundo!
      </h3>
    </div>
    <div class="dos-team-u-v" style="background-image:url(img/otros/vacantes.png); background-repeat: round;">
      <label>&nbsp;</label>
    </div>
  </div>


<!-- <div class="container" > -->
  <div class="grid-text-vacancies text-lg-justify">
    <p class="s-four-text text-color-letter-content font-face-dp">
      <b>Buscamos los mejores talentos para que se unan al equipo,</b> por lo que nuestro proceso de contratación es minucioso y en el transcurso de
      las etapas procuramos dar respuesta a cada duda que tengas. Esto garantiza que tú comprendas completamente quiénes somos, qué
      hacemos y qué esperamos de ti, y al equipo le permite verificar que nuestra cultura sea adecuada para ti y tu desarrollo profesional.
      <br><br>
      Manejamos dos tipos de vacantes: abiertas (disponibles en este momento) y de reclutamiento continuo (vacantes abiertas todo el año para
      conocer los perfiles interesados, aunque no haya una posición para contratación inmediata). Te invitamos a consultarlas y a aplicar a la que se
      adapte a tus necesidades. Dentro de cada una encontrarás las etapas en las que consiste nuestro proceso de reclutamiento.
    </p>
  </div>
<!-- </div> -->
<br>
<!-- <section> -->
<div class="container" >
  <div class="grid-vacantes-detalles">
    <div class="uno-gvd">
      @foreach ($data as $key => $value)
      <div class="card card-vacancies padding-vacancy" style="background-color: #f9f9f9;">
        <div class="card-body">
          <h3 class="text-color-letter-title mt-3 font-face-dpm s-three-text">{{$value['name']}}</h3>
          <p class="text-color-letter-content font-face-dp s-four-text">
            {{$value['short_description']}}
          </p>
          <p class="text-color-letter-content font-face-dp s-four-text"><img src="img/sas.png" height="12">
             <b>Vigencia:
               @if(is_null($value['validity']))
               Vacante de proceso continuo
               @else
               Vacante abierta hasta el {{date_format(date_create($value['validity']),"d/m/Y")}}
               @endif
             </b>
           </p>

          <a class="btn btn-e btn-outline-white-fs-xl-0-n-e " href="{{ action('VacancieController@getvacancy', ['id' => $value['id']]) }}">
              Leer más <img src="img/Leer-mas-e.png" class="img-home-banner"> </a>
        </div>
      </div>
      <br>
      @endforeach
    </div>
    <div class="dos-gvd">
      <div class="card card-vacancies-empty" >
        <div class="card-body" style="padding-right: 2rem;">
          <!-- <div class="px-2"> -->
            <div class="text-center">
              <img src="../img/iuvenia.png" class="img-size-vacancy-one">
            </div>
            <p class="ps-sm-4 text-color-letter-content font-face-dp s-five-text text-lg-justify">
              <b>Fundación IDEA</b> le otorgaron el distintivo
              IUVENIA para Empresas Amigas de los Jóvenes,
              por ser una organización líder en políticas de
              Recursos Humanos, que atrae al mejor talento,
              invierte en él y desarrolla a su gente.
            </p>
            <div class="text-center">
              <img src="../img/Sello-Decálogo.png" class="img-size-vacancy-two">
            </div>
            <p>&nbsp;</p>
            <p class="ps-sm-4 text-color-letter-content font-face-dp s-five-text text-lg-justify">
              <b>Fundación IDEA</b> adoptó el católogo de
              buenas prácticas de inclusión laboral orientadas
              a jóvenes difundido por la Alianza Jóvenes con
              Trabajo Digno
            </p>

          <!-- </div> -->
        </div>
      </div>
<br>
      <div class="card card-vacancies-empty">
        <div class="card-body" style="padding-right: 2rem;">
          <p class="ps-sm-4 text-color-letter-content font-face-dp s-five-text text-lg-justify">
              En <b>Fundación IDEA</b> queda estrictamente
              prohibida cualquier forma de maltrato, violencia,
              discriminación y segregación en materia de:
              apariencia física, cultura, discapacidad, idioma,
              sexo, género, edad, condición social, económica,
              de salud o jurídica, embarazo, estado civil o
              conyugal, religión, origen étnico o nacional y
              orientación sexual.
          </p>
          <p class="ps-sm-4 text-color-letter-content font-face-dp s-five-text text-lg-justify">
            <b>Fundación IDEA</b> mantiene los más altos
            estándares éticos. Estamos comprometidos y
            comprometidas con la prevención de la
            explotación, el abuso y el acoso sexuales, así
            como con otras infracciones éticas.
          </p>
          <br>
          <!-- <a href="https://c-230.com/images/C230%20Poli%CC%81tica%20de%20E%CC%81tica%20y%20Conflictos%20de%20Intere%CC%81s-protegido.pdf" target="_blank" class="ps-sm-4 text-color-letter-content font-face-dp s-five-text">
            <b>POLÍTICA DE ÉTICA Y CONFLICTOS DE INTERÉS</b>
          </a><br><br> -->
          <a href="{{url('/avisoprivacidad')}}" class="ps-sm-4 text-color-letter-content font-face-dp s-five-text">
            <b>AVISO DE PRIVACIDAD</b>
          </a>
        </div>
      </div>

    </div>
  </div>
  <!--  -->
  <br>
</div>
<!-- </section> -->
@endsection
