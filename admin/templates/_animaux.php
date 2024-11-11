<div class="col">
            <div class="col-md-12 col-sm-12 mb-4">
<h2 class=" text-white pt-4 text-center ">Listes des animaux</h2>

                <div class="table-responsive block-contain fix rounded-4 p-4">
                    <table class="table p-3 ">
                        <thead>
                            <tr>
                                <?php foreach (array_keys($getAnimauxList[0]) as $getAnimauxLists) { ?>
                                <th scope="col"><?= $getAnimauxLists ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($getAnimauxList as $getAnimauxLists) { ?>
                            <tr>
                                <?php foreach ($getAnimauxLists as $value) { ?>
                                <td><?= htmlentities($value) ?></td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>