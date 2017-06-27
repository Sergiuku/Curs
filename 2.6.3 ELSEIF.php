<?php
$rol = 'administrator';
if('autentificat' === $rol):
    echo 'esti autentificat';
elseif('moderator' === $rol):
    echo 'esti moderator';
elseif ('administrator' === $rol):
    echo 'esti administrator';
endif;