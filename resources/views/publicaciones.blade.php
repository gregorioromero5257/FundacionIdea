@extends('layouts.site')

@section('content')

<section class="py-5-home py-5-h-size new-bg">
  <div class="grid-banner-home">



  </div>

</section>

<div class="grid-publications-one background-card-l">
  <div class="uno-team-u">
    <h1 class="text-blues-two font-face-dp s-one-text">
      Publicaciones
    </h1>
    <h3 class="s-three-ban-text text-blues-two font-face-dp">
      <br>
      <!-- Excepteur sint occaecat cupidatat non proident, sunt in <br> -->
      <!-- culpa qui officia deserunt mollit anim id est laborum. -->
    </h3>
  </div>
  <!-- <div class="dos-team-u-p dos" >

    <h3 class="font-face-dpbl s-four-text" style="color : #74BA45;">
      PUBLICACIONES POR TEMÁTICA</h3>
      <br><br>
      <div class="grid-icon-tematics">

        <div class="icon-home-c">
          <a  href="{{ action('PublicationController@getByTag', ['id' => 1]) }}">
            <img src="img/Iconos/uno.png" class="icono-home-size">
            <p class="s-five-text text-color-letter-icon font-face-dpm">Emprendimiento</p>
          </a>
        </div>
        <div class="icon-home-c">
          <a href="{{ action('PublicationController@getByTag', ['id' => 2]) }}">
            <img src="img/Iconos/dos.png" class="icono-home-size">
            <p class="s-five-text text-color-letter-icon font-face-dpm">Innovación</p>
          </a>
        </div>
        <div class="icon-home-c">
          <a href="{{ action('PublicationController@getByTag', ['id' => 9]) }}">
            <img src="img/Iconos/tres.png" class="icono-home-size">
            <p class="s-five-text text-color-letter-icon font-face-dpm">Tecnología</p>
          </a>

        </div>
        <div class="icon-home-c">
          <a href="{{ action('PublicationController@getByTag', ['id' => 10]) }}">
            <img src="img/Iconos/cuatro.png" class="icono-home-size">
            <p class="s-five-text text-color-letter-icon font-face-dpm">Seguridad y<br>justicia</p>
          </a>

        </div>
        <div class="icon-home-c">
          <a href="{{ action('PublicationController@getByTag', ['id' => 5]) }}">
            <img src="img/Iconos/cinco.png" class="icono-home-size">
            <p class="s-five-text text-color-letter-icon font-face-dpm">Salud</p>
          </a>

        </div>
        <div class="icon-home-c">
          <a href="{{ action('PublicationController@getByTag', ['id' => 6]) }}">
            <img src="img/Iconos/seis.png" class="icono-home-size">
            <p class="s-five-text text-color-letter-icon font-face-dpm">Desarrollo <br>humano</p>
          </a>

        </div>
        <div class="icon-home-c">
          <a href="{{ action('PublicationController@getByTag', ['id' => 4]) }}">
            <img src="img/Iconos/siete.png" class="icono-home-size">
            <p class="s-five-text text-color-letter-icon font-face-dpm">Educación</p>
          </a>
        </div>
        <div class="icon-home-c">
          <a href="{{ action('PublicationController@getByTag', ['id' => 3]) }}">
            <img src="img/Iconos/ocho.png" class="icono-home-size">
            <p class="s-five-text text-color-letter-icon font-face-dpm">Desarrollo social</p>
          </a>
        </div>
        <div class="icon-home-c">
          <a href="{{ action('PublicationController@getByTag', ['id' => 7]) }}">
            <img src="img/Iconos/nueve.png" class="icono-home-size">
            <p class="s-five-text text-color-letter-icon font-face-dpm">Juventud</p>
          </a>
        </div>

      </div>

    </div> -->
  </div>


  @foreach ($arreglo as $key_p => $value_p)
  @if(count($value_p['posts']) > 0)
  <div class="grid-home-uno background-card-r">
    <div class="grid-home-uno-suno-s-p">
      <h3 class="text-blues-three font-face-dpbl s-two-text">
        {{$value_p['anio']}}
      </h3>
    </div>
    <div class="grid-home-list-pp" >
      <div class="container-icons-brands-p " >

        @foreach ($value_p['posts'] as $key => $value)


        <div class="card card-home">
          <div class="card-body">
            <div class="grid-body-card">
              <div class="uno-gbc sc-desc-dos">
                <h1 class="text-color-letter-card mt-3 font-face-dp s-four-text-dos">
                  {{$value->title_es}}
                </h1>
              </div>
              <div class="slider-card">
                <div class="slide-card">
                  <img src="{{ url('/storage/thumbnails/' . $value->thumbnail) }}">
                  <div class="badge-aling">
                    @foreach ($value->tags as $key_t => $value_t)
                    <span class="badge badge-info first-lt" style="background:#59982f;">{{$value_t->name}}</span>
                    @endforeach
                  </div>

                </div>
              </div>
            </div>
            <a href="{{url('/publication/'.$value->id)}}" class="stretched-link"></a>

          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>
  @endif
  @endforeach


  @endsection
