<?php
include 'index.php';

if (add(2, 3) === 5) {
    echo "TEST PASSED\n";
    exit(0);
} else {
    echo "TEST FAILED\n";
    exit(1);
}
?>