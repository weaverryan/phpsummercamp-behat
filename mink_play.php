<?php

require __DIR__.'/vendor/autoload.php';

use Behat\Mink\Driver\GoutteDriver;

// Important object #1
$driver = new GoutteDriver();


// Important object #2
$session = new \Behat\Mink\Session($driver);
$session->start();

$session->visit('http://2014.phpsummercamp.com/');
echo "Status Code          ".$session->getStatusCode()."\n";
echo "Current URL          ".$session->getCurrentUrl()."\n";


// Important object #3
/** @var \Behat\Mink\Element\DocumentElement $page */
$page = $session->getPage();
echo "First 160 chars      ".substr($page->getText(), 0, 20)."\n";

// Important object #4 NodeElement
$node = $page->find('css', '.navbar-nav a');
echo "First menu link text ".$node->getText()."\n";

// find by the "text"
$node2 = $page->findLink('Extras');
$node2->click();

echo "The new page URL is  ".$session->getCurrentUrl()."\n";

$session->stop();

