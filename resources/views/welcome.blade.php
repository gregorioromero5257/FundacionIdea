
@extends('layouts.site')

@section('content')

<section class="py-5-home">
  <div class="grid-banner-home">

    <div class="pd-text-b">
      <h1 class="text-white font-face-dpl s-one-ban-text">
        En Fundación IDEA nos dedicamos a<br>
      generar información y a diseñar políticas<br>
        que influyan positivamente en el futuro</h1>

        <p class="text-white s-three-ban-text font-face-dp">
          Ofrecemos propuestas creativas y políticamente factibles para resolver <br>
  los problemas públicos de México
        </p>
      </div>

    </div>

  </section>

  <div class="grid-home-uno background-card-l">
    <div class="grid-home-uno-suno">
      <h3 class="text-blues font-face-dpbl s-two-text">
        QUIÉNES SOMOS
      </h3>
      <label class="border-line-top">&nbsp;</label>
    </div>
    <div class="grid-home-uno-sdos">

      <div class="ghusd-uno text-lg-justify">
        <p class="s-four-text text-color-letter-content font-face-dp">
          Fundación IDEA es una de las primeras organizaciones que generan
conocimiento y dan asistencia técnica en política pública en México. Somos
una organización sin fines de lucro, independiente y apartidista, cuya misión
es diseñar y promover políticas públicas innovadoras que generan igualdad
de oportunidades para los mexicanos a través del desarrollo económico y la
reducción de la pobreza; así como ser una fuente confiable de análisis
independiente para funcionarios de gobierno y el público en general.
        </p>
        <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('acerca')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
        <br><br>
      </div>
      <div class="ghusd-dos" style="background-image:url(img/otros/Que-hacemos.jpg); background-repeat: round;">
        <h1>&nbsp;</h1>
      </div>
    </div>

  </div>




    <div class="grid-home-uno background-card-l">
      <div class="grid-home-uno-suno">
        <h3 class="text-blues font-face-dpbl s-two-text">
          PUBLICACIONES Y PROYECTOS
        </h3>
        <label class="border-line-top">&nbsp;</label>
      </div>
      <div class="grid-home-list-pp" >
        <div class="container-icons-brands " >

          @foreach ($publicaciones as $key_p => $value_p)

          <div class="card card-home">
            <div class="card-body">
              <div class="grid-body-card">
                <div class="uno-gbc">
                  <h1 class="text-color-letter-card mt-33 font-face-dp s-four-text-dos">
                    {{$value_p->title_es}}
                  </h1>
                  <div class="badge-aling">
                    @foreach ($value_p->tags as $key_t => $value_t)
                    <span class="badge badge-info first-lt" style="background:#59982f;">{{$value_t->name}}</span>
                    @endforeach
                  </div>
                </div>
                <div class="slider-card">
                    <div class="slide-card">
                      <!-- https://fundacionidea.org.mx/storage/thumbnails/PrevencionProactivaDeEnfermedadesCronicas_1536699828.jpg -->
                        <img src="{{ url('/storage/thumbnails/' . $value_p->thumbnail) }}" >

                    </div>
                </div>
                <!-- <div class="dos-gbc" style="background-image:url(img/uno.jpg); background-repeat: round; height: 250px;">
                  <div class="badge-aling">
                    <span class="badge badge-info" style="background:#59982f;">Tag temática</span>
                  </div>
                </div> -->
              </div>
              <a href="{{url('/publication/'.$value_p->id)}}" class="stretched-link"></a>

            </div>
          </div>
          @endforeach




        </div>




      </div>
      <div class="button-seccion">
        <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('publications')}}">Ver todas las publicaciones <img src="img/Leer-mas.png" class="img-home-banner"> </a>
      </div>
    </div>

    <div class="grid-home-uno background-card-r">
      <div class="grid-home-uno-suno">
        <h3 class="text-blues font-face-dpbl s-two-text">
          PRENSA
        </h3>
        <label class="border-line-top">&nbsp;</label>
      </div>

      <div class="grid-home-list-pp" >
        <div class="container-icons-brands " >


          @foreach ($prensa as $key_p => $value_p)

          <div class="card card-home">
            <div class="card-body">
              <div class="grid-body-card">
                <div class="uno-gbc">
                  <h1 class="text-color-letter-card mt-33 font-face-dp s-four-text-dos">
                    {{$value_p->title_es}}
                  </h1>
                </div>
                <div class="slider-card">
                    <div class="slide-card">
                      <!-- https://fundacionidea.org.mx/storage/thumbnails/PrevencionProactivaDeEnfermedadesCronicas_1536699828.jpg -->
                        <img src="{{ url('/storage/thumbnails/' . $value_p->thumbnail) }}">
                        <div class="badge-aling">
                          @foreach ($value_p->tags as $key_t => $value_t)
                          <span class="badge badge-info first-lt" style="background:#59982f;">{{$value_t->name}}</span>
                          @endforeach
                        </div>
                    </div>
                </div>
                <!-- <div class="dos-gbc" style="background-image:url(img/uno.jpg); background-repeat: round; height: 250px;">
                  <div class="badge-aling">
                    <span class="badge badge-info" style="background:#59982f;">Tag temática</span>
                  </div>
                </div> -->
              </div>
              <a href="{{url('/prensadetalle/'.$value_p->id)}}" class="stretched-link"></a>
            </div>
          </div>
          @endforeach


        </div>




      </div>

      <div class="button-seccion">
        <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('prensa')}}">Ver prensa <img src="img/Leer-mas.png" class="img-home-banner"> </a>
      </div>
    </div>

    <!-- <div class="grid-home-uno background-card-l">
      <div class="grid-home-uno-suno">
        <h3 class="text-blues font-face-dpbl s-two-text">
          AGENDA
        </h3>
        <label class="border-line-top">&nbsp;</label>
      </div>
      <div class="grid-home-list-pp-agenda" >

        <div class="card card-home-agenda">
          <div class="card-body">
            <div class="grid-body-card-agenda">
              <div class="uno-gbc-a">
                <br>
                <h1 class="text-white mt-3 font-face-dp s-one-text-s">
                  20
                </h1>
                <p class="text-white font-face-dpb s-one-text-s" style="margin-bottom: 4px;">Octubre</p>
                <label class="border-line-top-sub">&nbsp;</label>
                <p class="text-white font-face-dpb s-one-text-s" style="margin-top : -20px;">12:00</p>
                <br>
              </div>
              <div class="dos-gbc-a">
                <h3 class="text-color-letter-agen mt-3 font-face-dp s-four-text">
                  Sed lacinia risus in egestas tincidunt
                </h3>
                <p class="s-four-text text-color-letter-content font-face-dpbl">
                  Webinar
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-home-agenda">
          <div class="card-body">
            <div class="grid-body-card-agenda">
              <div class="uno-gbc-a">
                <br>
                <h1 class="text-white mt-3 font-face-dp s-one-text-s">
                  20
                </h1>
                <p class="text-white font-face-dpb s-one-text-s" style="margin-bottom: 4px;">Octubre</p>
                <label class="border-line-top-sub">&nbsp;</label>
                <p class="text-white font-face-dpb s-one-text-s" style="margin-top : -20px;">12:00</p>
                <br>
              </div>
              <div class="dos-gbc-a">
                <h3 class="text-color-letter-agen mt-3 font-face-dp s-four-text">
                  Sed lacinia risus in egestas tincidunt
                </h3>
                <p class="s-four-text text-color-letter-content font-face-dpbl">
                  Webinar
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-home-agenda">
          <div class="card-body">
            <div class="grid-body-card-agenda">
              <div class="uno-gbc-a">
                <br>
                <h1 class="text-white mt-3 font-face-dp s-one-text-s">
                  20
                </h1>
                <p class="text-white font-face-dpb s-one-text-s" style="margin-bottom: 4px;">Octubre</p>
                <label class="border-line-top-sub">&nbsp;</label>
                <p class="text-white font-face-dpb s-one-text-s" style="margin-top : -20px;">12:00</p>
                <br>
              </div>
              <div class="dos-gbc-a">
                <h3 class="text-color-letter-agen mt-3 font-face-dp s-four-text">
                  Sed lacinia risus in egestas tincidunt
                </h3>
                <p class="s-four-text text-color-letter-content font-face-dpbl">
                  Webinar
                </p>
              </div>
            </div>
          </div>
        </div>



      </div>
      <div class="button-seccion">
        <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('#')}}">Ver eventos anteriores <img src="img/Leer-mas.png" class="img-home-banner"> </a>
      </div>
    </div> -->

    <div class="grid-home-uno-blue background-card-blue">
      <div class="grid-home-uno-suno">
        <h3 class="text-white font-face-dpbl s-three-text">
          ÚNETE A FUNDACIÓN IDEA
        </h3>
        <h3 class="text-white mt-3 font-face-dpl s-four-text">
          Estamos constantemente en búsqueda de talento. Si estás interesado en <br> ingresar a Fundación IDEA, revisa nuestras vacantes:
        </h3><br>
        <a class="btn btn-w btn-outline-white-fs-w" href="{{ url('vacantes')}}">Vacantes <img src="img/Leer-mas-b.png" class="img-home-banner"> </a>
        <br><br>
      </div>
    </div>
    @endsection
