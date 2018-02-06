<?php
define("namn", "Welcome to a Night X productions!");




function createLista($array){

  foreach ($array as $key => $info) {
      
    echo "<ul><li>Film: $key Info: $info </li></ul>";
  }
}

function showForm($array){
  echo "<br/>"; 
  echo "<form method='GET' action='nysida.php'>";
  echo "<select name='selected'>";
  foreach ($array as $key => $info) {
      
    echo "<option value='$key'>$key</option>";
  };
  
  echo "</select>";
  echo "<button type='submit'>Tryck</button>";
  echo "</form>";
};
function showMoreInfo($array){
  // print_r( $_GET );
  // echo "<br/>";
  // print_r( $array );
  // echo "<br/>";

  // echo "<br/>";
  // print_r( $array[$_GET['selected']] );
  // echo "<br/>";

  echo "<p">.$array[$_GET['selected']];."</p>";
  
  echo "<br/>";
  
  echo "Key:".$_GET['selected'];
  
  
}





