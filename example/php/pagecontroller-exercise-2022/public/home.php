<?php

/**
 * A page controller to bootstrap, prepare and render the response.
 */

// Always use strict mote
declare(strict_types=1);

// Bootstrap the application and load the essentials
require "../config/bootstrap.php";

// Prepare the data variables
$data["title"] = "Home";
$data["main"] = file_get_contents("../content/me.txt");

// Render data variables onto a page layout
render("layout/base.php", $data);
