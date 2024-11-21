<?php 

if(!isset($_SESSION['user']) ) {
    header("location: /pages/connexion.php");
  };
    switch($_SESSION['user']['roles']){
        case 1 : // role veterinaire
          if($_SERVER['SCRIPT_NAME'] !== '/admin/index.php' && $_SERVER['SCRIPT_NAME'] !== '/admin/pages/rapport.php'){
            header('Location: /erreur.php?error=erreur');
              exit();
          };
          break;
          case 2 : // role employé
              if($_SERVER['SCRIPT_NAME'] === '/admin/pages/employee.php.php'&& $_SERVER['SCRIPT_NAME'] === '/admin/pages/rapport.php'){
                header('Location: /erreur.php?error=erreur');

                  exit();
              };
              break;
              case 3 : //role admin
                  break;
      }
      $errors=[];

      if (isset($_POST["connexion"])){
          $email=$_POST['email'];
          $password=$_POST['Passwords'];
          $user=verifyUsers($pdo,$email,$password);
          if ($user){
              
              session_regenerate_id(true);
              $_SESSION["user"]= $user;
              
              header("location: /admin/index.php");
              
          }else{
              $errors[]= "L'email ou le mot de passe est incorrect" ;
          }      
      };


if(isset($_POST['createAnimal'] )){

$CreateAnimaux=CreateAnimaux($pdo);
header("Location: /index.php");
exit();
}
if(isset($_POST['deleteAnimal'] )){

    $deleteAnimaux=deleteAnimaux($pdo);
    header("Location: /index.php");
    exit();
    }

    if(isset($_POST['poster'])){
        $avis= htmlentities($_POST["avis"]);
        $pseudo= htmlentities($_POST["pseudo"]);
        
        $collection = $bdd->avis;
            try {
                $avisdata = [
                    'pseudo' => $pseudo,
                    'avis' => $avis,
                    
                ];
                $result = $collection->insertOne($avisdata);
                echo "avis inséré : " . $result->getInsertedId() . "<br>";
                header("Location: /index.php");
                exit();
            } catch (Exception $e) {
                echo "Erreur lors de l'insertion : " . $e->getMessage() . "<br>";
            }
        }

        
if(isset($_POST['updateArticle'])){
    $updatesArticles= updatesArticles($pdo);
    header("Location:/admin/pages/articles.php");
    exit();
}

if(isset($_POST['updateimg'])){

    $updatesImage= updatesImage($pdo);
    header("Location: /admin/pages/articles.php");
    exit();
}

if(isset($_POST['createUser'])){

    $createUser=createUser($pdo);
    header("Location: /admin/pages/employee.php");
    exit();
}
if(isset($_POST['submit'] )){
    $newRapports=createRapport($pdo);
    header("Location:/admin/pages/rapport.php");
    exit();
};
if(isset($_POST['com'] )){
    $createAvis=createAvis($pdo);
    header("Location: /admin/pages/rapport.php");
    exit();
    };

if(isset($_GET['recent'])){
    $rapports=getRapportASC($pdo); 
   
  };

  if(isset($_GET['ancien'])){
    $rapports=getRapportDesc($pdo); 
    
  };

  if(isset($_GET['race'])){
    $rapports=getRapportRace($pdo); 
   
  };

  if(isset($_POST['repas'] )){
    $createRepas=createRepas($pdo);
    header("Location:/admin/pages/repas.php");
    exit();
    
    };

    if(isset($_POST['createArticle'])){
  
        if($_POST['page']==='Article' ){
 
         $type='contenu';
        }
        
        if($_POST['page']==='Service' ){
 
         $type='service';
     }
     
     $createArticle=createArticle($pdo,$type);
    }