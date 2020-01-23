<?php
use IntrepidGroup\SampleApplication\Repository\StaticBookRepository;

require_once __DIR__.'/vendor/autoload.php';

// Fetch the collection of books
$bookRepository = new StaticBookRepository();
$books = $bookRepository->fetchAll();

// Render the homepage
$twig = new Twig_Environment(new Twig_Loader_Filesystem(__DIR__.'/src/Twig'));

// Change Twig annotation so it doesn't conflict with Vue
$lexer = new \Twig\Lexer($twig, [
    'tag_variable' => ['${', '}'],
]);
$twig->setLexer($lexer);

$twig->display('html.twig', array('books' => json_encode($books)));
