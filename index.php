<?php
$pais= array();
$pais["Mexico"]=array("Guadalajara","Monterrey","Puebla","Nayarit","Veracruz");
$pais["España"]=array("Madrid","Barcelona","Valencia","Zaragoza","Sevilla");
$pais["Portugal"]=array("Porto","Horta","Tavira","Sines","Faro");
$pais["Argentina"]=array("Buenos Aires","Santa Fe","Cordoba","La Plata","San Juan");
$pais["Brasil"]=array("Sao Paulo","Rio de Janeiro","Tierra Alta","Cairu","Buena Vista");
$pais["Chile"]=array("Santiago","Valparaiso","Consepcion","Temuco","La Serena");
$pais["Bolivia"]=array("Pando","Santa Cruz","La Paz","Tarija","Beni");
$pais["Panama"]=array("San Felipe","San Francisco","Pedregal","Santa Ana","Ancon");
$pais["Alemania"]=array("Berlin","Munich","Hamburgo","Stuttgart","Colonia");
$pais["Francia"]=array("Paris","Tolouse","San Etien","Marcella","Orleans");

echo "<ul>";
foreach($pais as $pais=>$ciudades){
echo "<li>".$pais."<ul>";

foreach($ciudades as $ciudad){
echo "<li>". $ciudad."</il>";
}
 echo "</ul></li>";
}
 
?>