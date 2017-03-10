<?php

    session_unset();
    session_destroy();

    $redirection = URL;

    header("Location: $redirection");
