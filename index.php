<?php 

// Monica Zarate - A01310492
// Web Scripting - Assignment 1

// Hello and welcome! This PHP application reads information about the villagers that currently live on my Animal Crossing island, and displays a profile card for each of them.

// We are importing our init file, and since we're using require_once for the files there, it's ok if we use require only.
// We're also bringing in the data about our villagers, we'll need to have access to it in order to create our profile cards.

// The head, header and footer are being included via partials.

// We are making use of a foreach loop in order to display the villagers cards, this loop will remain functional no matter the number of villagers we have.

// The cards come from the 'card' partial, which is were we're building with the information we're receiving from data/villagers.php & data/npcs.php

require('init.php');
require('data/npcs.php');
require('data/villagers.php');

?><!DOCTYPE html>
<html lang="en">
    <?php require('partials/global/head.php'); ?>
    <body>
        <?php require('partials/global/header.php'); ?>
        <h2>Get to know my current villagers</h2>
        <div class="flex wrapper">
            <?php foreach($villagers as $resident): ?>
                    <?php include('partials/residents/card.php'); ?>
            <?php endforeach; ?>
        </div>
        <h2>Get to know my Resident Services</h2>
        <div class="flex wrapper">
            <?php foreach($npcs as $resident): ?>
                    <?php include('partials/residents/card.php'); ?>
            <?php endforeach; ?>
        </div>
        <?php require('partials/global/footer.php'); ?>
    </body>
</html>