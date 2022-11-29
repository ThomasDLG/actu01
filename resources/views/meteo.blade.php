<?php
    $meteoIcons = array(
        "Clear" => '<i class="fa-solid fa-sun"></i>',
        "Clouds" => '<i class="fa-solid fa-cloud"></i>',
        "Drizzle" => '<i class="fa-solid fa-cloud-showers-heavy"></i>',
        "Rain" => '<i class="fa-solid fa-cloud-showers-heavy"></i>',
        "Thunderstorm" => '<i class="fa-solid fa-cloud-bolt"></i>',
        "Snow" => '<i class="fa-solid fa-snowflake"></i>',
        "Mist" => '<i class="fa-solid fa-cloud-fog"></i>',
    );
?>

@extends('layouts.app')
@section('title')
    Actu01 - Météo
@endsection

@section('content')
<article>
    <div class="container">
        <h2 class="tags">Météo</h2>
        <div class="meteo">
            <?php
                $weather = new OpenWeather();
                $current = $weather->getCurrentWeatherByCityName('Compiègne', 'metric');
            ?>
            <div class="meteo-location">
                <h3 class="uppercase">{{$current['location']['name']}}</h3>
                <p>{{$current['condition']['desc']}}</p>
            </div>
            <div class="meteo-temp">
                <span>{{$current['forecast']['temp']}}°</span>
                <div class="meteo-temp-stat">
                    <span>Max. {{$current['forecast']['temp_max']}}°</span>
                    <span>Min. {{$current['forecast']['temp_min']}}°</span>
                </div>
            </div>
            <div class="meteo-icon">
                <?php
                    $condition = $current['condition']['name'];
                    echo $meteoIcons[$condition];
                ?>
            </div>
        </div>
    </div>
</article>
@endsection