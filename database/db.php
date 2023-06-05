<?php 

include_once __DIR__ . '/../models/cibo.php';
include_once __DIR__ . '/../models/giochi.php';
include_once __DIR__ . '/../models/cucce.php';
include_once __DIR__ . '/../models/abbigliamento.php';

$description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';

$prodottiCani = [
    
    'cibo' => [
        new Cibo(new Categoria('cane'), '"Puppy Chow" - Crocchette per cuccioli', '10.50€', $description, 'https://images.unsplash.com/photo-1589924691995-400dc9ecc119?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=871&q=80', '30kcal'),
        new Cibo(new Categoria('cane'), '"Meaty Morsels" - Bocconcini di carne', '12.50€', $description, 'https://images.unsplash.com/photo-1596491123074-fd69f1b7c12d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80', '60kcal'),
        new Cibo(new Categoria('cane'), '"Wellness Bites" - Snack salutari per cani', '15.30€', $description, 'https://images.unsplash.com/photo-1632236568054-12f36ecee2f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80', '40kcal'),

    ],
    'giochi' => [
        new Giochi(new Categoria('cane'), '"Tug-o-War Fun" - Gioco di tira e molla', '8.30€', $description, 'https://plus.unsplash.com/premium_photo-1668918112517-8ebe0f3eb1f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80', 'gomma'),
        new Giochi(new Categoria('cane'), '"Chew Champ" - Giocattolo da masticare resistente', '11.60€', $description, 'https://images.unsplash.com/photo-1477884143921-51d0a574ee09?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80', 'corda'),
        new Giochi(new Categoria('cane'), '"Fetch Frenzy" - Lanciatore di palline', '11.60€', $description, 'https://images.unsplash.com/photo-1606529015398-6d89be60e3c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=813&q=80', 'plastica'),

    ],
    'cucce' => [
        new Cucce(new Categoria('cane'), '"PetPals" - Cuccia in tessuto', '30.60€', $description, 'https://plus.unsplash.com/premium_photo-1663127442778-3b635cc838d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80', '40x50'),
        new Cucce(new Categoria('cane'), '"PawHut" - Cuccia in legno', '45.30€', $description, 'https://images.unsplash.com/photo-1618302079147-6b0e4ec21e07?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80', '30x40'),
        new Cucce(new Categoria('cane'), '"Petmate" - Cuccia in plastica', '28.60€', $description, 'https://images.unsplash.com/photo-1511976773147-53cdbeb9fa8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80', '40x60'),

    ],
    'abbigliamento' => [
        new Abbigliamento(new Categoria('cane'), '"Ruffwear" - Maglione in lana', '16.60€', $description, 'https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=464&q=80', 'S'),
        new Abbigliamento(new Categoria('cane'), '"Hurtta" - Giacca impermeabile', '19.40€', $description, 'https://images.unsplash.com/photo-1583337426008-2fef51aa841d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80', 'M'),
        new Abbigliamento(new Categoria('cane'), '"Fitwarm" - Pigiama in pile', '13.60€', $description, 'https://images.unsplash.com/photo-1583511655826-05700d52f4d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80', 'L'),

    ],
];

$prodottiGatti = [
    
    'cibo' => [
        new Cibo(new Categoria('gatto'), '"Whiskerlicious Delight" - Cibo umido per gatti', '11.50€', $description, 'https://images.unsplash.com/photo-1591324535489-9c78376631dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80', '60kcal'),
        new Cibo(new Categoria('gatto'), '"Meow Mix" - Crocchette per gatti', '17.50€', $description, 'https://images.unsplash.com/photo-1616668983570-a971956d8928?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=386&q=80', '50kcal'),
        new Cibo(new Categoria('gatto'), '"Natural Nibbles" - Crocchette naturali per gatti', '15.30€', $description, 'https://images.unsplash.com/photo-1577349516274-37ff88a53627?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80', '40kcal'),

    ],
    'giochi' => [
        new Giochi(new Categoria('gatto'), '"Feather Frenzy" - Gioco con piume per gatti', '16.30€', $description, 'https://images.unsplash.com/photo-1545249390-6bdfa286032f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=344&q=80', 'piume'),
        new Giochi(new Categoria('gatto'), '"Catnip Craze" - Giocattolo con catnip per gatti', '15.60€', $description, 'https://images.unsplash.com/photo-1601758065893-25c11bfa69b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=439&q=80', 'corda'),
        new Giochi(new Categoria('gatto'), '"Mouse Mania" - Gioco interattivo', '12.60€', $description, 'https://images.unsplash.com/photo-1526459329141-dc905db63046?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80', 'plastica'),

    ],
    'cucce' => [
        new Cucce(new Categoria('gatto'), '"Cozy Cat Haven" - Cuccia accogliente per gatti', '32.60€', $description, 'https://images.unsplash.com/photo-1603099441991-033b812734db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=731&q=80', '40x50'),
        new Cucce(new Categoria('gatto'), '"Snuggle Paws Cottage" - Cuccia per gatti', '46.30€', $description, 'https://images.unsplash.com/photo-1669891890402-b9c544348bb9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80', '30x40'),
        new Cucce(new Categoria('gatto'), '"Modular Kitty Retreat" - Cuccia modulare per gatti', '26.60€', $description, 'https://images.unsplash.com/photo-1661005446093-df1f9a9e43d1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80', '40x60'),

    ],
    'abbigliamento' => [
        new Abbigliamento(new Categoria('gatto'), '"Purrfect Pajamas" - Pigiama perfetto per gatti', '13.60€', $description, 'https://images.unsplash.com/photo-1610878237189-81306e16bd89?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80', 'S'),
        new Abbigliamento(new Categoria('gatto'), '"Kitty Couture" - Alta moda felina', '18.40€', $description, 'https://images.unsplash.com/photo-1622422350763-0c61d784a5c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=643&q=80', 'M'),
        new Abbigliamento(new Categoria('gatto'), '"Cozy Cat Sweater" - Maglione per gatti', '15.60€', $description, 'https://images.unsplash.com/photo-1637929955294-bb4d829285ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=928&q=80', 'L'),

    ],
];

?>