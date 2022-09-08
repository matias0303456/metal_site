<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $__env->yieldContent('title'); ?>
</head>

<body>

    <header>
        <h1>
            El portal del metal
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="/">
                        Inicio
                    </a>
                </li>
                <li>Géneros</li>
                <li>
                    <a href="/bandas">
                        Bandas
                    </a>
                </li>
                <li>Álbumes</li>
                <li>Canciones</li>
                <li>Integrantes</li>
                <li>
                    <a href="/paises">
                        Países
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <footer>
        El portal del metal | Todos los derechos reservados &copy; <?= date('Y') ?>
    </footer>

</body>

</html><?php /**PATH C:\Users\Matias\Desktop\proyectos\metal_site\resources\views/layout.blade.php ENDPATH**/ ?>