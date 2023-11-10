<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\TemasCartaze> $temasCartazes
 */
?>
<div class="temasCartazes index content">
    <?= $this->Html->link(__('Novo Tema'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Temas Cartazes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th class="text-center"><?= $this->Paginator->sort('id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('inicio') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('fim') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th class="actions text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($temasCartazes as $temasCartaze): ?>
                <tr>
                    <td class="text-center"><?= $this->Number->format($temasCartaze->id) ?></td>
                    <td class="text-center"><?= h($temasCartaze->inicio) ?></td>
                    <td class="text-center"><?= h($temasCartaze->fim) ?></td>
                    <td><?= h($temasCartaze->nome) ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $temasCartaze->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $temasCartaze->id], ['confirm' => __('Você tem certeza que deseja excluir o tema # {0}?', $temasCartaze->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('antrior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de um total de {{count}}')) ?></p>
    </div>
</div>
