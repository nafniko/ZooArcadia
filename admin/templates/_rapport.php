<div class="row  align-items-start">
 
<div class="col-md-12 mb-4">
<h2 class=" text-white pt-4 text-center ">Compte rendu des veterinaires</h2>

            <div class="table-responsive block-contain rounded-4 p-4 fix ">
                <table class="table  ">
                    <thead>
                        <tr>
                            <?php foreach (array_keys($rapports[0]) as $rapport) { ?>
                            <th scope="col"><?= $rapport ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rapports as $rapport) { ?>
                        <tr>
                            <?php foreach ($rapport as $value) { ?>
                            <td><?= htmlentities($value) ?></td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>