<?php





namespace Controllers;

use Models\Animal;
use Models\Content;

class ContentControllers
{
    private $content;
    private $img;
    public function index()
    {
        $this->content = (new Content())->getContent();
        
        foreach ($this->content as $key => $contents) {
            if($contents->getCategorie() == 'accueil'){
                require __DIR__ . '/../Vues/_content.php';
            }
            
        }
        $img =(new Content())->getImageAll();
        $this->img= $img ;
        foreach ($this->content as $key => $contents) {
            if($contents->getCategorie() == 'caroussel'){
            }
            
        }
        require __DIR__ . '/../Vues/_caroussel.php';

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