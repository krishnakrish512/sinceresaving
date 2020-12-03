<?php

$include_files = [
    "src/setup.php",
    "src/acf.php",
    "src/filter.php",
    "src/helper.php",
    "src/classes/Cooperative_Nav_Walker.php",

];

array_walk( $include_files, function ( $file ) {
    if ( ! locate_template( $file, true, true ) ) {
        trigger_error( sprintf( "Could not find %s", $file ), E_USER_ERROR );
    }
} );

unset( $include_files );

