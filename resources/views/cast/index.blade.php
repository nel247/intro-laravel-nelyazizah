<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($casts as $key => $cast) { ?>
                <tr>
                    <td><?= $cast->id ?></td>
                    <td><?= $cast->nama ?></td>
                    <td><?= $cast->umur ?></td>
                    <td><?= $cast->bio ?></td>
                    <td><a href="/cast/<?= $cast->id ?>">View</a></td>
                </tr>
                <?php } ?>
        </tbody>
        <a href="/cast/create">Tambah cast</a>

    </table>
</body>
</html>