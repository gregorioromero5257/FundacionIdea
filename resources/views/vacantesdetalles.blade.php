@extends('layouts.site')

@section('content')
<section class="py-5-home py-5-h-size new-bg">
  <div class="grid-banner-home">



    </div>

  </section>

  <div class="grid-team background-card-l">
    <div class="uno-team-u">
      <br>
      <h3 class="text-blues-two font-face-dp s-two-text">
        {{$data[0]['name']}}
      </h3>
      <h3 class="s-three-ban-text text-color-letter-content font-face-dp">
        <br>
        {{$data[0]['short_description']}}
      </h3>
      <p class="text-color-letter-content s-four-text font-face-dp">
        <img src="../img/sas.png" class="img-home-banner">
         <b>Vigencia:
           @if(is_null($data[0]['validity']))
           Vacante de proceso continuo
           @else
           hasta el {{date_format(date_create($data[0]['validity']),"d/m/Y")}}
           @endif
         </b>
        </p>
    </div>
    <div class="dos-team-u-v" style="background-image:url(../img/otros/vacantes.png); background-repeat: round;">
      <label>&nbsp;</label>
    </div>
  </div>


<!-- <section> -->
<div class="container" style="background-color: #f9f9f9;">
  <div class="grid-vacantes-detalles">
    <div class="tres-gvd">
      <label>&nbsp;</label>
    </div>
    <div class="uno-gvd">

      <div class="card card-vacancies-empty-sb">
        <div class="card-body">
          <div class="px-2 align-items-center">
            <h3 class="text-blues-three font-face-dpbl s-four-text">Requisitos</h3>
            <div class="px-4 text-color-letter-content s-four-text font-face-dp" >
              {!! $data[0]['requirements'] !!}
            </div>
          </div>
        </div>
      </div>
      <div class="card card-vacancies-empty-sb">
        <div class="card-body">
          <div class="px-2 align-items-center">
            <h3 class="text-blues-three font-face-dpbl s-four-text">Experiencia y conocimientos deseables</h3>
            <div class="px-4 text-color-letter-content s-four-text font-face-dp" >
              {!! $data[0]['experience'] !!}
            </div>
          </div>
        </div>
      </div>
      <div class="card card-vacancies-empty-sb">
        <div class="card-body">
          <div class="px-2 align-items-center">
            <h3 class="text-blues-three font-face-dpbl s-four-text">¿Qué ofrecemos?</h3>
            <div class="px-4 text-color-letter-content s-four-text font-face-dp" >
              {!! $data[0]['offer'] !!}
            </div>
          </div>
        </div>
      </div>

      <div class="card card-vacancies-empty-sb">
        <div class="card-body">
          <div class="card card-vacancies px padding-vacancy">
            <div class="card-body">
              <p class="text-color-letter-content font-face-dp s-four-text">
                Aplica enviando tu CV (sin foto) a <a href="mailto:reclutamiento@fundacionidea.org.mx?Subject=Interes vacante {{$data[0]['name']}}"
                 target="_blank" class="text-blues-three font-face-dpbl s-four-text">reclutamiento<span class="font-arroba">@</span>fundacionidea.org.mx</a>, mencionando
                en el asunto del correo la posición a la que estás aplicando. A la brevedad
                recibirás respuesta de nuestra parte.
              </p>
            </div>
          </div>
          @if($data[0]['type'] == 1 || $data[0]['type'] == 2 || $data[0]['type'] == 3 || $data[0]['type'] == 4)
          <p class="pt-2 text-color-letter-content font-face-dp s-four-text">Solicitar un empleo o emprender un nuevo rumbo profesional implica un gran
esfuerzo y presionar "Enviar" en la solicitud puede ser intimidante, lo sabemos y
aspiramos a que el proceso sea lo más sencillo posible, así que te invitamos a
consultar la infografía de nuestro proceso de reclutamiento.</p>
@endif
<div class="row">
  <div class="col-md-12 mb-5 mb-md-0">
    @if($data[0]['type'] == 1)
    <div class="pt-4-n">
    <img src="../img/otros/04.png" class="img-process zoom" style="z-index: 2;">
    </div>
    @elseif($data[0]['type'] == 2)
    <div class="pt-4-n">
    <img src="../img/otros/03.png" class="img-process zoom" style="z-index: 2;">
    </div>
    @elseif($data[0]['type'] == 3)
    <div class="pt-4-n">
    <img src="../img/otros/01.png" class="img-process zoom" style="z-index: 2;">
    </div>
    @elseif($data[0]['type'] == 4)
    <div class="pt-4-n">
    <img src="../img/otros/02.png" class="img-process zoom" style="z-index: 2;">
    </div>
    @endif

  </div>
</div>

        </div>
      </div>



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
          <a href="#" class="ps-sm-4 text-color-letter-content font-face-dp s-five-text">
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
