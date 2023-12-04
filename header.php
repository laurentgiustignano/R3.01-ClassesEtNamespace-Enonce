<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="laurent.giustignano">

    <title>Demo Perso</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/custom.min.css" rel="stylesheet">
</head>
<body class="bg-primary">
<div class="container ">
    <div class="jumbotron">
<?php

/**
 * Permet d'afficher un élément en détail dans la page html avec la balise pre
 * @param $variable : l'élément à afficher
 * @return void
 */
function debug($variable) : void {
    echo "<pre class='border rounded bg-secondary'>" . print_r($variable, true) . "</pre>";
}