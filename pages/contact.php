<?php 
require_once  '../lib/config.php';
require_once  '../lib/pdo.php';
require_once  '../lib/session.php';
require_once  '../lib/mongodb.php';
require_once  '../lib/route.php';
require_once  '../lib/content-index.php';
require_once  '../templates/_header.php';

?>

<h1 class="container text-white pt-4 ">Nous Contacter</h1>
            
            <div class=" container mb-3 pb-2">
             
                <div class=" block-contain rounded-4 ">
                    <div class=" container mt-4 rounded-4">
                        
                        <form action="/pages/contact-verif.php" method="post" class=" text-white">
                            <div class="mb-3 pt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Pierre@visteur.fr" required>
                            </div>
                            <div class="mb-3 pt-3">
                                <label for="email" class="form-label">objet</label>
                                <input type="objet" class="form-control" id="objet" name="objet" placeholder="objet" required>
                            </div>
                            <div class="mb-3 pt-3">
                                <label for="message" class="form-label">Votre Message</label>
                                <textarea class="form-control" id="message" name="message" placeholder="Message !" rows="3" required></textarea>
                            </div>
                            <div class="col-auto ">
                                <button type="submit" name="submit" class="btn btn-primary mb-3">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       
<?php

require_once __DIR__ . '/../templates/_footer.php';

; ?>