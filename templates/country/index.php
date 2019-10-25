<table>
    <thead>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>pays</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($obj['data']['country'] as $data) :?>
            <tr>
                <th><?=$data['id']?></th>
                <th><?=$data['nom']?></th>
                <th><?=$data['pays']?></th>
            </tr>
    <?php endforeach;?>
    </tbody>
</table>