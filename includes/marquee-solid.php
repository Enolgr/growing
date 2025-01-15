<?php
$tips = [
    "Cuidado Básico de Plantas de Interior: Técnicas esenciales para mantenerlas saludables.",
    "Identificación y Clasificación de Plantas: Reconoce y cuida diversas especies.",
    "Propagación de Plantas: Multiplica tu jardín con métodos avanzados.",
    "Introducción a Plantas Carnívoras: Cuidados y adaptaciones especiales.",
    "Jardinería Vertical: Crea jardines en espacios pequeños.",
    "Cuidado de Suculentas y Cactus: Consejos prácticos y prevención de plagas.",
    "Terrarios: Diseño y mantenimiento de mini-ecosistemas.",
    "Plantas Medicinales: Cultivo y usos para la salud diaria.",
    "Jardines Urbanos: Transforma balcones en oasis verdes.",
    "Diseño de Jardines Temáticos: Crea espacios únicos paso a paso.",
    "Hidroponía en Casa: Cultivo sin tierra de forma sencilla.",
    "Microjardines: Mini-jardines para espacios reducidos.",
    "Plantas Aromáticas: Cultivo y uso en la cocina diaria.",
    "Plantas de Sombra: Selección y cuidado en lugares con poca luz.",
    "Plantas Ornamentales: Embellece interiores y exteriores.",
    "Plantas Purificadoras: Mejora la calidad del aire en casa.",
    "Jardinería Ecológica: Prácticas sostenibles para cuidar tu jardín.",
    "Plantas Tropicales: Cuidados específicos para climas no tropicales.",
    "Plantas de Floración: Cómo lograr una floración abundante.",
    "Jardinería Creativa: Arte y diseño con plantas únicas."
];


// Barajar los tips y concatenarlos
shuffle($tips);
$marqueeText = implode(" &nbsp;&nbsp;<img src='./img/icons/hoja.svg'/>&nbsp;&nbsp;", $tips);
<<<<<<< HEAD
echo "<marquee class='random-marquee-solid'>$marqueeText</marquee>";
=======
echo "<marquee class='random-marquee-solid' >$marqueeText</marquee>";

>>>>>>> main
?>
