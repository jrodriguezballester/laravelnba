<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Portada</title>
    <link rel="stylesheet" type="text/css" media="screen" href={{asset('/css/main.css')}} />
</head>
<body>
    
    @include ("menu")
<div id="content">
    <div id="players">   
    jugadores  
    <?php 

   

foreach ($jugadores as $jugador) {
    echo '<a href="../public/jugador/'.$jugador->codigo.'">'. $jugador->Nombre."</a>";
   
}
?>
    </div>
</div>    
</body>
</html>