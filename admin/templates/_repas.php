<div class=" col-lg-6 col-sm-12 ">
    <h2 class=" text-white pt-4 text-center ">compte rendu des repas</h2>
    
                <div class=" block-contain m-1 rounded-4 p-4">
                    <div class=" text-center">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <?php 
                             
                                foreach (array_keys($getRepas[0]) as $getRepa) { ?>
                                        <th scope="col"><?=$getRepa ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($getRepas as $getRepa) { ?>
                                    <tr>
                                        <?php foreach ($getRepa as $value) { ?>
                                        <td><?= htmlentities($value) ?></td>
                                        <?php } ?>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>