<nav class="navegacao">
    <li>
        <a href="../index.php">Inicial</a>
    </li>
    <?php foreach ($categorias as $categoria): ?>
        <li>
            <a href="<?= '../index.php?categoria=' . $categoria['id'].'&n='.$categoria['nome']?>" name="<?= $categoria['nome']; ?>" ><?= $categoria['nome']; ?>
        </li>
    <?php endforeach; ?>
</nav>