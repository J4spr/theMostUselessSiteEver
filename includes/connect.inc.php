<?php
$connection = new mysqli("localhost", "root", "", "hashingdb");

if ($connection->connect_errno) {
    echo "Something went wrong trying to connect to the database :/
    \n\nStacktrace (" . $connection->connect_errno . "): " . $connection->connect_error . "";
}
/* Copyright (c) 2023 Jasper Verbruggen. All rights reserved. */