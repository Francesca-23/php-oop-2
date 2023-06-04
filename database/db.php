<?php 


include_once __DIR__ . '/../models/giochi.php';


$prodottiCani = [
    
    'cibo' => [
        new Cibo(new Categoria(1, 'cane'), '"Puppy Chow" - Crocchette per cuccioli', '10.50€', '...', 'https://images.unsplash.com/photo-1589924691995-400dc9ecc119?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=871&q=80'),
        new Cibo(new Categoria(1, 'cane'), '"Meaty Morsels" - Bocconcini di carne', '12.50€', '...', 'https://images.unsplash.com/photo-1596491123074-fd69f1b7c12d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80'),
        new Cibo(new Categoria(1, 'cane'), '"Wellness Bites" - Snack salutari per cani', '15.30€', '...', 'https://images.unsplash.com/photo-1632236568054-12f36ecee2f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'),

    ],
    'giochi' => [
        new Giochi(new Categoria(1, 'cane'), '"Tug-o-War Fun" - Gioco di tira e molla', '8.30€', '...', 'https://plus.unsplash.com/premium_photo-1668918112517-8ebe0f3eb1f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80'),
        new Giochi(new Categoria(1, 'cane'), '"Chew Champ" - Giocattolo da masticare resistente', '11.60€', '...', 'https://images.unsplash.com/photo-1477884143921-51d0a574ee09?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'),
        new Giochi(new Categoria(1, 'cane'), '"Fetch Frenzy" - Lanciatore di palline', '11.60€', '...', 'https://images.unsplash.com/photo-1606529015398-6d89be60e3c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=813&q=80'),

    ],
    'cucce' => [

    ],
    'abbigliamento' => [

    ],
];

foreach($prodottiCani['cibo'] as $elem){
    echo $elem;
}

?>