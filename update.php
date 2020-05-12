<?php
    $manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

    $up=new \MongoDB\Driver\BulkWrite;

    $up->update(['nome'=>'Afronésio'], ['$set'=>['nome'=>'Afronésio dos Santos']]);

    $manager->executeBulkWrite('raiz.academicos',$up);

?>