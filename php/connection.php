<?php

$conn = mysqli_connect('localhost', 'root', '','phpig');
if (!$conn) {
	echo "database error";
}