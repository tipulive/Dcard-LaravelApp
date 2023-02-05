<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dark Mode</title>
    <link rel="stylesheet" href="css/Qrstyle.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Dots&display=swap"
      rel="stylesheet"
    />
    </style>
  </head>
  <body>
  @php
    $counter = 1;
    $cards = DB::select("SELECT * from cards");

@endphp

@foreach ($cards as $card)



    <div class="container">
      <div class="card-mode-icon" >
        <span class="material-symbols-outlined light-mode-icon" > light_mode </span>
      </div>
      <div class="card-wrapper">
        <div class="map">
          <img src="images/map.png" class="card-map" alt="map">
        </div>
        <h2 class="card-type">Dcard</h2>
        <div class="chip">
          <img src="https://i.postimg.cc/VsCYcM46/chip.png" class="card-chip" alt="card-chip">
        </div>
        <div class="card-left">
          <h3 class="card-bin-number">{{chunk_split($card->CardNumber, 4, ' ')}}</h3>
          <p class="card-date">valid through <span>09/2025</span></p>
          <!--<p class="card-owner">Eric Ford</p>-->
        </div>
        <div class="card-circle-right">


        </div>
        <div class="myQr">
        <img src="images/Qr/{{$card->filename}}.png">
        </div>
      </div>
      <hr>

    </div>

@endforeach






    <script src="script.js"></script>
  </body>

</html>
