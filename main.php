<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['event']) && $_POST['event'] === 'click') {
    if (isset($_POST['option1'])) {

      echo "Se hizo clic en el Botón A";
    } elseif (isset($_POST['option2'])) {
      
      echo "Se hizo clic en el Botón B";
    } elseif (isset($_POST['option3'])) {
      
      echo "Se hizo clic en el Botón C";
    };
  };
  echo "q"
};

?>