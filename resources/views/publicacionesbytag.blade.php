@extends('layouts.site')

@section('content')

<section class="py-5-home py-5-h-size new-bg">
  <div class="grid-banner-home">



    </div>

  </section>

  <div class="grid-publications-one-s background-card-l">
    <div class="uno-team-u-s">

      <h1 class="text-blues-two font-face-dp s-one-text">
        @if($id == 1)
        <img src="../img/Iconos/uno.png" class="icono-home-size">
        Emprendimiento
        @elseif($id == 2)
        <img src="../img/Iconos/dos.png" class="icono-home-size">
        Innovación
        @elseif($id == 3)
        <img src="../img/Iconos/ocho.png" class="icono-home-size">
        Desarrollo social
        @elseif($id == 4)
        <img src="../../img/Iconos/siete.png" class="icono-home-size">
        Educación
        @elseif($id == 5)
        <img src="../img/Iconos/cinco.png" class="icono-home-size">
        Salud
        @elseif($id == 6)
        <img src="../img/Iconos/seis.png" class="icono-home-size">
        Desarrollo humano
        @elseif($id == 7)
        <img src="../img/Iconos/nueve.png" class="icono-home-size">
        Juventud
        @elseif($id == 9)
        <img src="../img/Iconos/tres.png" class="icono-home-size">
        Tecnología
        @elseif($id == 10)
        <img src="../img/Iconos/cuatro.png" class="icono-home-size">
        Seguridad y justicia
        @endif
      </h1>

    </div>
  </div>


  @foreach ($arreglo as $key_p => $value_p)

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
              <div class="uno-gbc">
                <h1 class="text-color-letter-card mt-3 font-face-dp s-four-text">
                  {{$value->title_es}}
                </h1>
              </div>
              <div class="slider-card">
                  <div class="slide-card">
                    <img src="{{ asset('https://fundacionidea.org.mx/storage/thumbnails/' . $value->thumbnail) }}">

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
  @endforeach


  @endsection
