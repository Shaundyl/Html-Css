<?php

require_once __DIR__ . '/src/HtmlGenerator/Interfaces/HtmlElementInterface.php';
require_once __DIR__ . '/src/HtmlGenerator/Interfaces/HtmlGeneratorInterface.php';
require_once __DIR__ . '/src/HtmlGenerator/Elements/HtmlElement.php';
require_once __DIR__ . '/src/HtmlGenerator/Factories/HtmlGenerator.php';

use HtmlGenerator\Factories\HtmlGenerator;

// Print the DOCTYPE declaration
echo "<!DOCTYPE html>\n";

// Create HTML structure
$html = HtmlGenerator::create('html')
    ->setAttribute('lang', 'en')
    ->addChild(
        HtmlGenerator::create('head')
            ->addChild(
                HtmlGenerator::create('meta')
                    ->setAttribute('charset', 'UTF-8')
            )
            ->addChild(
                HtmlGenerator::create('meta')
                    ->setAttribute('name', 'author')
                    ->setAttribute('content', 'Roderick A. Bandalan')
            )
            ->addChild(
                HtmlGenerator::create('title')
                    ->setContent('Libretto Books')
            )
            ->addChild(
                HtmlGenerator::create('link')
                    ->setAttribute('rel', 'stylesheet')
                    ->setAttribute('type', 'text/css')
                    ->setAttribute('href', 'styles/libretto.css')
            )
            ->addChild(
                HtmlGenerator::create('link')
                    ->setAttribute('rel', 'stylesheet')
                    ->setAttribute('type', 'text/css')
                    ->setAttribute('href', 'styles/libmenu.css')
            )
    )
    ->addChild(
        HtmlGenerator::create('body')
            ->addChild(
                HtmlGenerator::create('section')
                    ->setAttribute('id', 'header')
                    ->addChild(
                        HtmlGenerator::create('section')
                            ->setAttribute('id', 'lefthead')
                    )
                    ->addChild(
                        HtmlGenerator::create('section')
                            ->setAttribute('id', 'righthead')
                    )
            )
            ->addChild(
                HtmlGenerator::create('section')
                    ->setAttribute('id', 'mainmenubar')
                    ->addChild(
                        HtmlGenerator::create('ul')
                            ->setAttribute('id', 'mainmenu')
                            ->addChild(
                                HtmlGenerator::create('li')
                                    ->addChild(
                                        HtmlGenerator::create('a')
                                            ->setAttribute('href', '#')
                                            ->setContent('Home')
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('li')
                                    ->addChild(
                                        HtmlGenerator::create('a')
                                            ->setAttribute('href', '#')
                                            ->setContent('Reading')
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('ul')
                                            ->setAttribute('class', 'sub1')
                                            ->addChild(
                                                HtmlGenerator::create('li')
                                                    ->addChild(
                                                        HtmlGenerator::create('a')
                                                            ->setAttribute('href', '#')
                                                            ->setContent('Novels')
                                                    )
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('li')
                                                    ->addChild(
                                                        HtmlGenerator::create('a')
                                                            ->setAttribute('href', '#')
                                                            ->setContent('Hardbound')
                                                    )
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('li')
                                                    ->addChild(
                                                        HtmlGenerator::create('a')
                                                            ->setAttribute('href', '#')
                                                            ->setContent('Paperback')
                                                    )
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('li')
                                                    ->addChild(
                                                        HtmlGenerator::create('a')
                                                            ->setAttribute('href', '#')
                                                            ->setContent('Comics')
                                                    )
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('li')
                                                    ->addChild(
                                                        HtmlGenerator::create('a')
                                                            ->setAttribute('href', '#')
                                                            ->setContent('Categories')
                                                    )
                                            )
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('li')
                                    ->addChild(
                                        HtmlGenerator::create('a')
                                            ->setAttribute('href', '#')
                                            ->setContent('Featured')
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('li')
                                    ->addChild(
                                        HtmlGenerator::create('a')
                                            ->setAttribute('href', '#')
                                            ->setContent('Orders')
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('li')
                                    ->addChild(
                                        HtmlGenerator::create('a')
                                            ->setAttribute('href', '#')
                                            ->setContent('Deal & Offers')
                                    )
                            )
                    )
            )
            ->addChild(
                HtmlGenerator::create('section')
                    ->setAttribute('id', 'maincontainer')
                    ->addChild(
                        HtmlGenerator::create('section')
                            ->setAttribute('id', 'headline')
                            ->addChild(
                                HtmlGenerator::create('section')
                                    ->setAttribute('id', 'headlleft')
                                    ->addChild(
                                        HtmlGenerator::create('img')
                                            ->setAttribute('src', 'images/hunger_games_trilogy.jpg')
                                            ->setAttribute('title', 'The Hunger Games Trilogy')
                                            ->setAttribute('alt', 'The Hunger Games Trilogy')
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('section')
                                    ->setAttribute('id', 'headlright')
                                    ->addChild(
                                        HtmlGenerator::create('br')
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('br')
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('span')
                                            ->setAttribute('class', 'headlineimpact')
                                            ->setContent('Special Offer!!!')
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('br')
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('span')
                                            ->setAttribute('class', 'headlinetext')
                                            ->setContent('Limited stocks only!!!')
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('br')
                                    )
                            )
                    )
                    ->addChild(
                        HtmlGenerator::create('section')
                            ->setAttribute('id', 'left')
                    )
                    ->addChild(
                        HtmlGenerator::create('section')
                            ->setAttribute('id', 'right')
                            ->addChild(
                                HtmlGenerator::create('span')
                                    ->setAttribute('class', 'blockheadings')
                                    ->setContent('Book News')
                            )
                            ->addChild(
                                HtmlGenerator::create('section')
                                    ->setAttribute('id', 'placeholder')
                                    ->addChild(
                                        HtmlGenerator::create('section')
                                            ->setAttribute('class', 'sections')
                                            ->addChild(
                                                HtmlGenerator::create('p')
                                                    ->setContent('Literature')
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('span')
                                                    ->setAttribute('class', 'sectiontext')
                                                    ->setContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;')
                                            )
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('section')
                                            ->setAttribute('class', 'sections')
                                            ->addChild(
                                                HtmlGenerator::create('p')
                                                    ->setContent('Arts')
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('span')
                                                    ->setAttribute('class', 'sectiontext')
                                                    ->setContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;')
                                            )
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('br')
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('section')
                                            ->setAttribute('class', 'sections')
                                            ->addChild(
                                                HtmlGenerator::create('p')
                                                    ->setContent('Drama')
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('span')
                                                    ->setAttribute('class', 'sectiontext')
                                                    ->setContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;')
                                            )
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('section')
                                            ->setAttribute('class', 'sections')
                                            ->addChild(
                                                HtmlGenerator::create('p')
                                                    ->setContent('Science/Fiction')
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('span')
                                                    ->setAttribute('class', 'sectiontext')
                                                    ->setContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;')
                                            )
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('br')
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('section')
                                            ->setAttribute('class', 'sections')
                                            ->addChild(
                                                HtmlGenerator::create('p')
                                                    ->setContent('Horror')
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('span')
                                                    ->setAttribute('class', 'sectiontext')
                                                    ->setContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;')
                                            )
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('section')
                                            ->setAttribute('class', 'sections')
                                            ->addChild(
                                                HtmlGenerator::create('p')
                                                    ->setContent('Love Story')
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('span')
                                                    ->setAttribute('class', 'sectiontext')
                                                    ->setContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;')
                                            )
                                    )
                            )
                    )
            )
            ->addChild(
                HtmlGenerator::create('section')
                    ->setAttribute('id', 'footer')
                    ->addChild(
                        HtmlGenerator::create('span')
                            ->setAttribute('id', 'copyrighttext')
                            ->setContent('Copyright &copy; International Web Development, All rights reserved 2013')
                    )
            )
            ->addChild(
                HtmlGenerator::create('br')
            )
    )
    ->render();

$file = 'libretto.html';
file_put_contents($file, "<!DOCTYPE html>\n" . $html);
    
echo "HTML file 'libretto.html' has been generated successfully.";
