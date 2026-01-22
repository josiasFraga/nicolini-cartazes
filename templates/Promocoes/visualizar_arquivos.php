
<h1>Arquivos Gerados</h1>

<?php if (empty($arquivos)): ?>
    <p>Nenhum arquivo gerado.</p>
<?php else: ?>
    <?php
    $grupos = [
        'Papel Amarelo' => [],
        'Papel Branco' => [],
        'Outros' => []
    ];

    foreach ($arquivos as $arquivo) {
        if (strpos($arquivo['filename'], '-a.html') !== false) {
            $grupos['Papel Amarelo'][] = $arquivo;
        } elseif (strpos($arquivo['filename'], '-b.html') !== false) {
            $grupos['Papel Branco'][] = $arquivo;
        } else {
            $grupos['Outros'][] = $arquivo;
        }
    }
    ?>

    <?php foreach ($grupos as $titulo => $itens): ?>
        <?php if (!empty($itens)): ?>
            <h3><?= h($titulo) ?></h3>
            <ul>
                <?php foreach ($itens as $item): ?>
                    <li>
                        <?php echo $this->Html->link($item['tamanhoCartaz'], 'html/' . $item['filename'], ['target' => '_blank']); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<p><?php echo $this->Html->link('Voltar', ['action' => 'index']); ?></p>