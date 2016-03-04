<?php

try {
    nonExistentFunction();
} catch (\Throwable  $e) {
    var_dump($e);
}