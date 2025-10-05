<?php
$sobre_mi = array(
   'profesion' => 'Diseñadora FrontEnd',
   'ubicacion' => 'Vivo en Barcelona',
   'hobby' => 'Me gusta caminar'
);

$aficiones = array(
   'aficion1' => 'cocinar',
   'aficion2' => 'jugar a videojuegos',
   'aficion3' => 'robar chuches'
);
//esto es pa sitios en verdad no hace falta q lo haga aqui pero bueno cambiar futuro
$sitiosPasado = array(
   'sitio1' => ['nombre' => 'Eslovenia', 'imagen' => 'assets/img/eslovenia.jpg'],
   'sitio2' => ['nombre' => 'Normandia', 'imagen' => 'assets/img/francia.jpg'],
   'sitio3' => ['nombre' => 'Turín', 'imagen' => 'assets/img/italia.jpg'],
   'sitio4' => ['nombre' => 'Copenhague', 'imagen' => 'assets/img/noruega.jpg'],
   'sitio5' => ['nombre' => 'Colonia', 'imagen' => 'assets/img/dinamarca.jpg'],
   'sitio6' => ['nombre' => 'Marruecos(idk)', 'imagen' => 'assets/img/marruecos.jpg'],
   'sitio7' => ['nombre' => 'Dubrovnik', 'imagen' => 'assets/img/croacia.jpg']
);
$sitiosFuturo = array(
   'sitio1' => ['nombre' => 'palencia', 'imagen' => 'assets/img/palencia.jpg'],
   'sitio2' => ['nombre' => 'camino de santiago', 'imagen' => 'assets/img/camino_de_santiago.jpg'],
);

$favPeliculas = array(
   'pelicula1' => ['nombre' => 'Memories of Natsuko', 'imagen' => 'assets/img/memories_of_natsuko.jpg'],
   'pelicula2' => ['nombre' => 'Pokemon 3 The Movie', 'imagen' => 'assets/img/pokemon_3.jpg'],
   'pelicula3' => ['nombre' => 'The Voices', 'imagen' => 'assets/img/the_voices.jpg'],
   'pelicula4' => ['nombre' => 'Saiko! The Large Family', 'imagen' => 'assets/img/saiko.jpg']
);
$generosFav = array(
   'nombre' => ['nombre' => 'Drama', 'imagen' => 'assets/img/placeholder.jpg'],
   'nombre2' => ['nombre' => 'Suspense', 'imagen' => 'assets/img/placeholder.jpg'],
   'nombre3' => ['nombre' => 'Sci-Fi', 'imagen' => 'assets/img/placeholder.jpg']
);
function renderMusica($array)
{
   foreach ($array as $key) {
      echo "<div class='album'>
               <p>{$array[$key]['nombre']}</p>
               <img src='{$array[$key]['imagen']}' alt='{$array[$key]['nombre']}'>
            </div>";
   }
}
function getPerfil()
{
   return [
      "nombre" => "Maria Andreo",
      "edad" => 22,
      "estudios" => ["CFGM de Diseño Grafico", "CFGS de Diseño de Interficies Web UX/UI", "CFGS DAW"],
      "sobreMi" => ["cocinar", "jugar a videojuegos", "robar chuches"]
   ];
}

function ScrollHorizontal($array)
{
   $html = '';

   foreach ($array as $item) {
      

        $html .= "
        <div class='sitio-item'>
            <p>{$item['nombre']}</p>
            <img src='{$item['imagen']}' >
        </div>";
    }

   return $html;
}

// functions.php
function getRestaurantes() {
   
    return [
        [
            'nombre' => 'La fabrica del taco',
            'lat' => 41.37855926825075,   //las coordeanadas siempre se pasan en latitud y logntiud estonces es to facil separarlas 
            'lng' => 2.1575689445930424     
        ],
        [
            'nombre' => 'Bar Celona',
            'lat' => 41.4335290238621,
            'lng' => 2.1969109055759795
        ],
        [
            'nombre' => 'VIPS',
            'lat' => 41.440053269018485,
            'lng' => 2.1981482824297305
        ]
    ];
}
//luego esta funcion solo es para mostrar los btopnes y ponerle el formato a los btn y punch
function renderBotonesRestaurantes($restaurantes) {
    $html = '<div class="restaurantes-lista">';
    foreach ($restaurantes as $r) {
        $nombre = htmlspecialchars($r['nombre']);
        $lat = $r['lat'];
        $lng = $r['lng'];
        $html .= "<button class='btn-restaurante'>$nombre</button>";
    }
    $html .= '</div>';
    return $html;
}

//onclick='moverMapa($lat, $lng)


?>