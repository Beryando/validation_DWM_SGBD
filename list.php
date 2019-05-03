<?php require './controllers/musicLinker.php' ?>

    <?php require './templates/header.html' ?>
    
    <main>
        <div>
            <table>
                <tr>
                    <th>Titre</th>
                    <th>Saint patron</th>
                    <th>Element</th>
                    <th>Maison de couleur</th>
                    <th>Supprimer</th>
                    <th>Update</th>
                </tr>
                <?php foreach($tasswirit as $song): ?>
                    <tr>
                        <td><?= $song['title'] ?></td>
                        <td><?= $song['saint_master'] ?></td>
                        <td><?= $song['element'] ?></td>
                        <td><?= $song['color_suites'] ?></td>
                        <td>
                            <form action="./controllers/deleteAsong.php" method="POST">
                                <input type="hidden" name="id" value="<?= $song['id'] ?>">
                                <input type="submit" value="X">
                            </form>
                        </td>
                        <td>
                            <form action="./modify_song.php" method="POST">
                                <input type="hidden" name="id" value="<?= $song['id'] ?>">
                                <input type="submit" value="U">
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </main>

</body>
</html>