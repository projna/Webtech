<?php require_once "../DataService/person_service.php"; ?>    
<?php
    $person= getAllPersons();

    echo json_encode($person);
    ?>
