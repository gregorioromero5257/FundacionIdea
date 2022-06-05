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
    <div class="dos-team-u" style="background-image:url(../img/Mesa-directiva.png); background-repeat: round;">
      <label>&nbsp;</label>
    </div>
  </div>

  <div class="grid-team-three" style="border: 1px solid #d8d8d8;border-radius: 5px;">
    <div class="gtt-uno" style="border: 1px solid #aeaeaf;">
      @if($id == 1)
      <img src="../img/Equipo-directivo/marco-antonio-lopez-silva-avatar.png" class="size-team-details">
      @elseif($id == 2)
      <img src="../img/Equipo-directivo/jessica-beitman-maya-avatar.png" class="size-team-details">
      @elseif($id == 3)
      <img src="../img/Equipo-directivo/carolina-agurto-avatar.png" class="size-team-details">
      @elseif($id == 4)
      <img src="../img/Equipo-directivo/raul-abreu-lastra-avatar.png" class="size-team-details">
      @endif
    </div>
    <div class="gtt-dos text-lg-justify">
      @if($id == 1)
      <h1 class="s-two-text text-blues-three font-face-dp">Marco López</h1>
      <h1 class="s-three-text text-blues-three font-face-dp">Socio</h1>
      @elseif($id == 2)
      <h1 class="s-two-text text-blues-three font-face-dp">Jessica Beitman</h1>
      <h1 class="s-three-text text-blues-three font-face-dp">Socia</h1>
      @elseif($id == 3)
      <h1 class="s-two-text text-blues-three font-face-dp">Carolina Agurto</h1>
      <h1 class="s-three-text text-blues-three font-face-dp">Socia</h1>
      @elseif($id == 4)
      <h1 class="s-two-text text-blues-three font-face-dp">Raúl Abreu</h1>
      <h1 class="s-three-text text-blues-three font-face-dp">Socia</h1>
      @endif
      <p class="s-four-text text-color-letter-content font-face-dp">
        <br>
        {{$texto}}
      </p>
    </div>
  </div>
  <div >

  </div>

@endsection
