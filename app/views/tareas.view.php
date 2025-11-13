
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
<header>
    <h1>Mi Lista de Tareas</h1>
</header>
<main>
    <ul>
        <?php
        foreach ($tareas as $tarea) : ?>
            <?php echo renderizarTarea($tarea); ?>
        <?php endforeach; ?>
    </ul>
</main>
<footer>
    <p>© <?php echo date('Y'); ?> TaskFlow</p>
</footer>
</body>
</html>

