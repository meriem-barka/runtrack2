<?php

function Gras($str){

}

function Cesar($str, $decalage){
  $min = ['a','b','c','d','e','f','g','h','i','j','k','l'];
  $max = ['A','B','C','D','E','F','G','H','I','J','K','L'];
}

function Plateforme($str){

}

?>
<h2>Formulaire</h2>

<form action='#' method="get">

  <input type='text' name='str' value='' size=40>

  <select name='fonction' size="1">
    <option value=''>--Choose an option--</option>
    <option value='gras'><b>Gras</b></option>
    <option value='cesar'>Cesar</option>>
    <option value='plateforme'>Plateforme</option>>
  </select><br/>

  <button type='submit'>Envoyer !</button>

</form>
