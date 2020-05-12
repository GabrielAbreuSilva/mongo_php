<?php
    $manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

    $db=new \MongoDB\Driver\BulkWrite;

    $db->insert(['nome'=>'Joana','idade'=>31]);

    $manager->executeBulkWrite('raiz.academicos',$db);

?>