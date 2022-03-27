<?php

    pre_r($_POST);
    pre_r($_FILES);


?>

<?php

function pre_r($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

?>