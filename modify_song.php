<?php require_once './controllers/oneMusicLinker.php' ?>


<?php require_once './templates/header.html' ?>
    <main>  
        <form action="./controllers/modOneSong.php" method="POST">
            <input type="hidden" name="id" value="<?= $tasswirit['id'] ?>">
            <div>
                <label for="title">Titre</label>
                <input type="text" name="title" value="<?= $tasswirit['title'] ?>">
            </div>
            <div>
                <label for="saint_master">Saint Patron</label>
                <input type="text" name="saint_master" value="<?= $tasswirit['saint_master'] ?>">
            </div>
            <div>
                <label for="element">Element</label>
                <input type="text" name="element" value="<?= $tasswirit['element'] ?>">
            </div>
            <div>
                <label for="color_suites">Maison de couleur</label>
                <input type="text" name="color_suites" value="<?= $tasswirit['color_suites'] ?>">
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>