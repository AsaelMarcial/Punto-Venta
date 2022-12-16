@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú principal</title>

    <!-- css básico -->
    <link rel="stylesheet" href="/css/home.css">
</head>

<div class="contenedor-inicio">
    <div class="animacion-inicio">
        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_snmohqxj/lottie_step2/data.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>    
    </div>

    <div class="informacion-inicio">
        <span class="texto-inicio"> 
            <?php echo $fechaActual = date('d/m/y') ?> 
        </span>

        <span class="texto-inicio" id="reloj" onload="currentTime()"></span>

        <span class="texto-inicio"> Personas beneficiadas: </span>

        <?php
            $d=rand(1,6);
        ?>

        <?php if ($d == 1): ?>
            <span class="texto-fraces"> "Cocinar con amor te alimenta el alma&#129505" </span>

        <?php elseif ($d == 2): ?>
            <span class="texto-fraces"> "En esta cocina pasan cosas mágicas&#10024" </span>

        <?php elseif ($d == 3): ?>
            <span class="texto-fraces"> "La cocina es el corazón de la casa&#9749" </span>

        <?php elseif ($d == 4): ?>
            <span class="texto-fraces"> "Hoy me comeré la vida a mordisquitos&#127790" </span>

        <?php elseif ($d == 4): ?>
            <span class="texto-fraces"> "Barriga llena, corazón contento&#128150" </span>

        <?php elseif ($d == 5): ?>
            <span class="texto-fraces"> "Si algo te hace feliz cómete el doble&#128523" </span>

        <?php elseif ($d == 6): ?>
            <span class="texto-fraces"> "Llena la vida con los mejores ingredientes&#127858" </span>

        <?php endif ?>
    </div> 
</div>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


@endsection
