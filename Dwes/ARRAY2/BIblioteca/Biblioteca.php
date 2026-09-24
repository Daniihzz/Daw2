<?php
$biblioteca = [
    "Ciencia Ficcion" => [
        [
            "titulo" => "Fundación",
            "autores" => ["Isaac Asimov"],
            "anio" => 1951,
            "ejemplares" => [
                "Central" => 5,
                "Norte" => 2,
                "Sur" => 0
            ],
            "resenas" => [
                ["usuario" => "ana92", "nota" => 5, "comentario" => "Imprescindible"],
                ["usuario" => "luis_r", "nota" => 4, "comentario" => "Muy buena"]
            ]
        ],
        [
            "titulo" => "Neuromante",
            "autores" => ["William Gibson"],
            "anio" => 1984,
            "ejemplares" => [
                "Central" => 1,
                "Norte" => 0
            ]
            // esta obra aún no tiene reseñas
        ]
    ],
    "Historia" => [
        [
            "titulo" => "Sapiens",
            "autores" => ["Yuval Noah Harari"],
            "anio" => 2011,
            "ejemplares" => [
                "Central" => 8,
                "Norte" => 3,
                "Sur" => 4
            ],
            "resenas" => [
                ["usuario" => "marta_h", "nota" => 5, "comentario" => "Cambia la forma de ver el mundo"],
                ["usuario" => "pedro22", "nota" => 3, "comentario" => "Interesante pero denso"],
                ["usuario" => "sofia_l", "nota" => 4, "comentario" => "Muy recomendable"]
            ]
        ]
    ],
    "Poesía" => [
        [
            "titulo" => "Veinte poemas de amor",
            "autores" => ["Pablo Neruda"],
            "anio" => 1924
            // sin ejemplares ni reseñas todavía (recién catalogado)
        ]
    ]
];


/* ============================================================
   EJERCICIOS DE ACCESO A VALORES
   Usa la variable $biblioteca definida arriba. Escribe el código
   justo debajo de cada enunciado.
   ============================================================ */

// 1) Muestra el título del segundo libro de la categoría "Ciencia Ficción".
echo"<br>";echo $biblioteca["Ciencia Ficcion"][1]["titulo"];



// 2) Muestra el autor de "Sapijapon vsens" (recuerda que "autores" es un array,
//    aunque en este caso solo tenga un elemento).
echo"<br>";echo $biblioteca["Historia"][0]["autores"][0];



// 3) Muestra cuántos ejemplares hay en la sede "Norte" del libro
//    "Fundación".
echo"<br>";echo $biblioteca["Ciencia Ficcion"][0]["ejemplares"]["Norte"];


// 4) Muestra la nota que puso el usuario "pedro22" en su reseña de
//    "Sapiens" (accede directamente por posición dentro del array
//    de reseñas).
echo"<br>";echo $biblioteca["Historia"][0]["resenas"][1]["nota"];


// 5) Comprueba si "Neuromante" tiene la clave "resenas" definida.
//    Muestra un mensaje distinto según el resultado.
echo"<br>";if(isset($biblioteca["Ciencia Ficcion"][1]["resenas"])){
    echo "EXISTE";
} else {
    echo "No existe esta categoria";
}

// 6) Comprueba si "Veinte poemas de amor" tiene la clave "ejemplares".
//    Si no la tiene, añádele una con 0 ejemplares en "Central".
echo"<br>";if(!isset($biblioteca["Poesia"]["ejemplares"])){
    $biblioteca["Poesia"][0]["ejemplares"]["central"] = 0;
}


// 7) Cambia el año de publicación de "Neuromante" a 1984 → 1985
//    (modifica directamente el array $biblioteca).
$biblioteca["Ciencia Ficcion"][1]["anio"] = "1985"; 
echo$biblioteca["Ciencia Ficcion"][1]["anio"];
/* ============================================================
   EJERCICIOS DE RECORRIDO (BUCLES)
   Recorre $biblioteca con foreach (anidando tantos bucles como
   necesites según la profundidad del dato).
   ============================================================ */

// 8) Recorre todas las categorías y, dentro de cada una, muestra el
//    título de cada libro, con el formato:
//    "Ciencia Ficción -> Fundación"

for($i = 0; $i<count($biblioteca);$i++){
    echo $k[$i];
}


// 9) Recorre todo el array y muestra únicamente los libros publicados
//    ANTES del año 1980, junto con su categoría.


// 10) Recorre todos los libros y, para los que tengan "ejemplares",
//     suma el total de ejemplares en todas las sedes y muéstralo así:
//     "Sapiens: 15 ejemplares en total"


// 11) Recorre todos los libros y detecta si alguna sede tiene 0
//     ejemplares de algún libro. Muestra avisos con el formato:
//     "Fundación no tiene ejemplares en Sur"


// 12) Recorre todos los libros que tengan "resenas" y calcula la nota
//     media de cada uno (redondeada a 1 decimal). Muestra:
//     "Sapiens - nota media: 4.0"


// 13) Recorre TODO el array (categorías, libros y reseñas) y cuenta
//     cuántas reseñas en total tienen nota igual o superior a 4,
//     mostrando el total al final junto con el título del libro que
//     acumula más reseñas de ese tipo.


// 14) Recorre las categorías y muestra cuántos libros hay en cada una,
//     ordenando el resultado de mayor a menor número de libros
//     (pista: guarda los totales en un array nuevo y ordénalo con
//     arsort() antes de recorrerlo para mostrarlo).