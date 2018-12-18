<?php

chdir(getenv('HOME') . '/code/web/wp-content/themes/wpexample');

print "\n====== Running 'composer install in sage theme' ======\n\n";
passthru('composer install 2>&1');
