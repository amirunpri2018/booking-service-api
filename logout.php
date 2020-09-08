<?php

    // starting session
    session_start();
    
    // destroying session
    session_destroy();

    echo json_encode(
        array('success' => true)
    );

?>