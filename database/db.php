<?php 

include_once __DIR__ . '/../models/cibo.php';
include_once __DIR__ . '/../models/giochi.php';
include_once __DIR__ . '/../models/cucce.php';
include_once __DIR__ . '/../models/abbigliamento.php';

$description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';

$prodottiCani = [
    
    'cibo' => [
        new Cibo(new Categoria(1, 'cane'), '"Puppy Chow" - Crocchette per cuccioli', '10.50€', $description, 'https://images.unsplash.com/photo-1589924691995-400dc9ecc119?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=871&q=80', '30kcal'),
        new Cibo(new Categoria(1, 'cane'), '"Meaty Morsels" - Bocconcini di carne', '12.50€', $description, 'https://images.unsplash.com/photo-1596491123074-fd69f1b7c12d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80', '60kcal'),
        new Cibo(new Categoria(1, 'cane'), '"Wellness Bites" - Snack salutari per cani', '15.30€', $description, 'https://images.unsplash.com/photo-1632236568054-12f36ecee2f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80', '40kcal'),

    ],
    'giochi' => [
        new Giochi(new Categoria(1, 'cane'), '"Tug-o-War Fun" - Gioco di tira e molla', '8.30€', $description, 'https://plus.unsplash.com/premium_photo-1668918112517-8ebe0f3eb1f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80', 'gomma'),
        new Giochi(new Categoria(1, 'cane'), '"Chew Champ" - Giocattolo da masticare resistente', '11.60€', $description, 'https://images.unsplash.com/photo-1477884143921-51d0a574ee09?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80', 'corda'),
        new Giochi(new Categoria(1, 'cane'), '"Fetch Frenzy" - Lanciatore di palline', '11.60€', $description, 'https://images.unsplash.com/photo-1606529015398-6d89be60e3c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=813&q=80', 'plastica'),

    ],
    'cucce' => [
        new Cucce(new Categoria(1, 'cane'), '"PetPals" - Cuccia in tessuto', '30.60€', $description, 'https://images.unsplash.com/photo-1618302079147-6b0e4ec21e07?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80', '40x50'),
        new Cucce(new Categoria(1, 'cane'), '"PawHut" - Cuccia in legno', '45.30€', $description, 'https://images.unsplash.com/photo-1618302079147-6b0e4ec21e07?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80', '30x40'),
        new Cucce(new Categoria(1, 'cane'), '"Petmate" - Cuccia in plastica', '28.60€', $description, 'https://images.unsplash.com/photo-1618302079147-6b0e4ec21e07?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80', '40x60'),

    ],
    'abbigliamento' => [
        new Abbigliamento(new Categoria(1, 'cane'), '"Ruffwear" - Maglione in lana', '16.60€', $description, 'https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=464&q=80', 'S'),
        new Abbigliamento(new Categoria(1, 'cane'), '"Hurtta" - Giacca impermeabile', '19.40€', $description, 'https://images.unsplash.com/photo-1583337426008-2fef51aa841d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80', 'M'),
        new Abbigliamento(new Categoria(1, 'cane'), '"Fitwarm" - Pigiama in pile', '13.60€', $description, 'https://images.unsplash.com/photo-1583511655826-05700d52f4d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80', 'L'),

    ],
];

?>