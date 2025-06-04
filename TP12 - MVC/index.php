<?php

// Autoloader
spl_autoload_register(function ($class) {
    $path = '' . str_replace('\\', '/', $class) . '.class.php';
    if (file_exists($path)) {
        include $path;
    } else {
        echo "Fichier introuvable : $path\n";
    }
});

use classes\TaskController;
use classes\TaskView;

$taskContr = new TaskController();
$taskView = new TaskView();

$taskContr->addTask("Ranger la maison", "Il faut ranger la maison c'est le bazar.");
$taskContr->addTask("Faire la vaiselle", "Ça s'accumule dans l'évier.");
$taskContr->addTask("Réserver les billets pour l'Italie", "Réserver les billert d'avion pour le voyage en Juillet.");
$taskContr->addTask("Préparation soirée", "Préparer la soirée de départ de Joris.");

?>

<html lang="fr">
<head>
    <link rel="stylesheet" href="index.css">
    <title>TaskList</title>
</head>
<body>
<?php
echo $taskView->displayTasks($taskContr->getTaskList());
?>
</body>
</html>