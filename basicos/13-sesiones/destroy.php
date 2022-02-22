<?php
    session_start();
    session_unset();
    session_destroy();
    echo 'Se destruyeron las sesiones';