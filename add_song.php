
    <?php require_once './templates/header.html' ?>
    <main>
        <form action="./controllers/addOneSong.php" method="POST">
            <div>
                <label for="title">Titre</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="saint_master">Saint Patron</label>
                <input type="text" name="saint_master">
            </div>
            <div>
                <label for="element">Element</label>
                <input type="text" name="element" >
            </div>
            <div>
                <label for="color_suites">Maison de couleur</label>
                <input type="text" name="color_suites">
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>