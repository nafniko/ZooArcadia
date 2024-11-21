<?php

require_once  '../../vendor/autoload.php';
require_once  '../../lib/config.php';
require_once  '../../lib/pdo.php';
require_once  '../../lib/session.php';
require_once  '../../lib/mongodb.php';
require_once  '../../lib/route.php';
require_once  '../../lib/content-index.php';
require_once  "../../lib/gestionboutons.php";
require_once  './../templates/header.php';


$getService= getService($pdo);
?>



    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12 mb-4">
            <div class=" table-responsive container block-contain rounded-4 tab_fix">
                <h2 class="text-white">Listes des Services</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">titre</th>
                            <th scope="col">descriptions</th>
                            <th scope="col">image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
foreach ($getService as $key=>$getServices) { ?>
                            <th class="col-1 col-md-1" scope="row"><?= htmlentities($getServices["idcontent"] )?></th>
                            <td class="col-1 col-md-1"><?= htmlentities($getServices["titre"]) ?></td>
                            <td class="col-3 col-md-2">
                                <p class="d-inline-flex gap-1">
                                    <a class="btn btn-primary" data-bs-toggle="collapse"
                                        href="#collapseExampl<?= htmlentities($getServices["idcontent"] )?>" role="button"
                                        value="<?= htmlentities($getServices["idcontent"] )?>" aria-expanded="false"
                                        aria-controls="collapseExampl<?= htmlentities($getServices["idcontent"] )?>">
                                        descriptions
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExampl<?= htmlentities($getServices["idcontent"] )?>">
                                    <div>
                                        <?= htmlentities($getServices["descriptions"]) ?>
                                    </div>
                                </div>
                            </td>
                            <td class="col-3 col-md-2"><img class="w-25" src="<?= htmlentities($getServices["chemin"])?>"
                                    alt="image"></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        

