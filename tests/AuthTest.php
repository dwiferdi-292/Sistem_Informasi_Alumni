<?php

require_once 'AuthStub.php';

$auth = new AuthStub();

echo "=== UNIT TEST LOGIN ===\n";

$result1 = $auth->login("admin", "12345");

if ($result1 === true) {
    echo "TEST 1 PASSED\n";
} else {
    echo "TEST 1 FAILED\n";
}

$result2 = $auth->login("admin", "salah");

if ($result2 === false) {
    echo "TEST 2 PASSED\n";
} else {
    echo "TEST 2 FAILED\n";
}