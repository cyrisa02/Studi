<?php

require_once '17Student.php';
require_once '17Course.php';
require_once '17Teacher.php';
require_once '17functions.php';

$french = new Course('Français', 'La langue de Molière');
$computerScience = new Course('Informatique', 'Apprendre à développer des sites internet');
$john = new Student('John', 'Doe', [$french, $computerScience]);
$laure = new Teacher('Laure', 'Dupond', $computerScience);

displayDescription($french);
displayDescription($computerScience);
displayDescription($john);
displayDescription($laure);

//Dans ce défi, vous allez réaliser une application permettant de gérer des étudiants et des professeurs pour une université. Le but de cet exercice est d'utiliser tout ce que nous avons vu dans ce chapitre pour minimiser les répétitions de code : soyez donc attentifs aux copiés/collés !

//Une université gère des professeurs, des étudiants et les cours qui leur sont associés.

//Un professeur possède un prénom, un nom de famille et enseigne une matière : chaque professeur ne peut enseigner qu'une seule matière. Un élève possède un prénom, un nom de famille et une liste de matières qu'il souhaite suivre. Enfin, une matière est composée d'un titre et d'une description.

//Le résumé de chacun de ces éléments (professeur, élève ou matière) doit pouvoir être affiché sur le site Internet de l'université. Ce résumé sera simplement composé d'un titre de niveau 3 et d'une description, contenue dans une balise p.

//Le titre d'un étudiant est son nom suivi de son prénom, celui d'un professeur est similaire, mais préfixé de "Professeur" et celui d'une matière est simplement son titre.

//La description d'un étudiant est la liste de titres des matières qu'il étudie, celle d'un professeur est le nom de la matière qu'il enseigne, et celle d'une matière est simplement sa description.

//Indice
//Utilisez une classe abstraite permettant de centraliser tout ce qu'il y a en commun entre un étudiant et un professeur.

//Pensez au fait qu'il doit être facile d'inverser le nom et le prénom des étudiants et des professeurs, par exemple.
