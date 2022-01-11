<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<form method="post" action="utils/traitement.php">
    <div id="form">
        <label for="text_1">Texte 1 </label><input type="text" id="text_1" name="text_1">
        <br>
        <br>
        <label for="text_2">Texte 2 </label><input type="text" id="text_2" name="text_2">
        <br>
        <br>
        <div id="text_to_add">
            <label for="text_3">Texte 3 </label><input type="text" id="text_3" name="text_3">
            <br>
            <br>
        </div>
    </div>

    <button type="button" id="add_text">+ Ajout zone de texte</button>


    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<script>
    var button = document.getElementById("add_text");
    var text_to_add = document.getElementById("text_to_add");
    var doc = document.getElementById("form");

    button.onclick = function () {

        try {
            var cloned = text_to_add.cloneNode(true);
            doc.appendChild(cloned)


        } catch (e) {
            alert(e)
        }

    }
</script>
</body>
</html>



