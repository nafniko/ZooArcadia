<div class="row  align-items-start">
        <div class="col-md-12 mb-4">
            <div class="table-responsive block-contain rounded-4 p-4">
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