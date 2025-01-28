<?php

namespace Models;

use Models\Models;
use PDO;

class Animal extends Models
{
    private $id;
    private $prénom;
    private $images;
    private $race;
    private $habitat;
    private $values;
    private $chemin;
    private $infos;
    private $obj;

    
    public function __construct($data = [])
    {
      
     
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPrenom()
    {
        return $this->prénom;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPrénom($prenom)
    {
        $this->prénom = $prenom;
    }

    public function setImages($images)
    {
        $this->images = $images;
    }

    public function setRace($race)
    {
        $this->race = $race;
    }

    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;
    }

    public function getAnimals()
    {

       return $this->getAll('animaux', 'Models\Animal');
    }

    
    public function getAnimalsWithImages()
    {

       return $this->getAllWhithImages('animaux', 'Models\Animal');
    }
    public function createAnimal()
    {

        $this->create($this->values);
    }

    public function getChemin()
    {
        return $this->chemin;
    }

    public function setChemin($chemin)
    {
        $this->chemin = $chemin;
    }

    public function getInfos()
    {
        return $this->infos;
    }

    public function setInfos($infos)
    {
        $this->infos = $infos;
    }





}
