
<h1>Arquivos Gerados</h1>

<?php if (empty($arquivos)): ?>
    <p>Nenhum arquivo gerado.</p>
<?php else: ?>
    <ul>
        <?php foreach ($arquivos as $arquivo): ?>
            <li>
                <?php echo $this->Html->link($arquivo['tamanhoCartaz'], 'html/' . $arquivo['filename'], ['target' => '_blank']); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<p><?php echo $this->Html->link('Voltar', ['action' => 'index']); ?></p>