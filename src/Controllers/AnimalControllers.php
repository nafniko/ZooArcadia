<?php





namespace Controllers;

use Models\Animal;

class AnimalControllers
{
    private $animaux;
    public function index()
    {
        $this->animaux = (new Animal())->getAnimalsWithImages();
        $animaux = $this->animaux;
            echo '<h1 class="text-center text-white mt-4">Nos animaux</h1>';
                 
        require_once __DIR__ . '/../Vues/test.php';
     
    }

    public function show()
    {
        $id = $_GET['id'];
        $animal = new Animal($id);
        require __DIR__ . '/../Views/animal/show.php';
    }

    public function create()
    {
        require __DIR__ . '/../Views/animal/create.php';
    }

    public function store()
    {
        $animal = new Animal();
        $animal->setPrénom($_POST['prenom']);
        $animal->setImages($_POST['images']);
        $animal->setRace($_POST['race']);
        $animal->setHabitat($_POST['habitat']);
        header('Location: /index.php?controller=animal&action=index');
    }
}