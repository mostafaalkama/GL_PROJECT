
<?php
Try
{
$bdd = new PDO('mysql:host=localhost;dbname=projecto;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


</body>
</html>