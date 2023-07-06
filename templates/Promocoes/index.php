<!-- src/Template/Promocoes/index.php -->
<h1>Promoções</h1>

<?= $this->Form->create(null, ['url' => ['action' => 'index'], 'id' => 'filter-form', 'type' => 'get']) ?>

<div class="filter-container">
    <select name="loja_selecionada_id" required>
        <?php foreach ($lojas as $apoUsuarioloja): ?>
            <?php $loja = $apoUsuarioloja->Loja; ?>
            <option value="<?= $loja ?>"  <?= $loja_selecionada == $loja ? 'selected=""' : '' ?>><?= $loja ?></option>
        <?php endforeach; ?>
    </select>

    <?= $this->Form->button('Filtrar', ['id' => 'filter-button', 'onclick' => 'event.preventDefault(); filterFormSubmit();']) ?>
</div>

<?= $this->Form->end() ?>


<?= $this->Form->create(null, ['url' => ['action' => 'imprimir'], 'target' => '_blank']) ?>

<input type="hidden" required name="loja_selecionada_id" value="<?= $loja_selecionada ?>" />

<table>
    <thead>
        <tr>
            <th></th> <!-- Coluna para a checkbox -->
            <th>Descrição</th>
            <th>Descrição Mídia</th>
            <th class="text-center">Valor</th>
            <th class="text-center">Valor Normal</th>
            <th class="text-center">Valor Clube</th>
            <th>Limite</th>
            <th>Descrição na Impressão</th>
            <th>Cartaz</th>
            <th>Tamanho do Cartaz</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($promocoes as $promocao): ?>
            <?php
            $disabled = '';
            $fadeClass = '';
            $checked = true;

            if ($promocao->tipoCartaz === null) {
                $disabled = 'disabled';
                $fadeClass = 'fade';
                $checked = false;
            }
            ?>
            <tr class="<?= $fadeClass ?>">
                <td>
                    <?= $this->Form->checkbox('selecionados[]', ['value' => $promocao->idprom, 'checked' => $checked, 'disabled' => $disabled]) ?>
                    <?= $this->Form->input('tipo_cartaz_' . $promocao->idprom, ['value' =>$promocao->tipoCartaz, 'disabled' => $disabled, 'required' => 'required', 'type' => 'hidden']) ?>
                </td>
                <td><?= h($promocao->descricao) ?></td>
                <td><?= h($promocao->descricaomidia) ?></td>
                <td class="text-center"><?= number_format($promocao->VlrVenda, 2, ',', '.') ?></td>
                <td class="text-center"><?= number_format($promocao->VlrVendaNormal, 2, ',', '.') ?></td>
                <td class="text-center"><?= $promocao->precoclube > 0 ? number_format($promocao->precoclube, 2, ',', '.') : '' ?></td>
                <td class="text-center"><?= $promocao->limite ?></td>
                <td>
                    <?= $this->Form->input('descricao_impressao_' . $promocao->idprom, [
                        'placeholder' => 'Descrição na impressão',
                        'value' => !empty($promocao->descricaomidia) ? $promocao->descricaomidia : $promocao->descricao,
                        'disabled' => $disabled,
                        'required' => 'required'
                    ]) ?>
                </td>
                <td><?= $promocao->tipoCartaz ?></td>
                <td>
                    <?= $this->Form->select(
                        'tamanho_cartaz_' . $promocao->idprom,
                        [
                            'A3' => 'A3 (42x29,7cm)', 
                            'A4' => 'A4 (21x29,7cm)', 
                            'A5' => 'A5 (21x29,7cm) (2 por folha)', 
                            'A6' => 'A6 (21x29,7cm) (8 por folha)', 
                        ],
                        [
                            'empty' => 'Selecione o tamanho do cartaz', 
                            'disabled' => $disabled, 
                            'required' => 'required',
                            'value' => 'A4'
                        ]
                    ) ?>
                </td>
                <!-- Adicione outras colunas relevantes aqui -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= "<br/>Total = " . count($promocoes); ?><br />
<?= $this->Form->button('Imprimir') ?>
<?= $this->Form->end() ?>
<?= $this->Html->css('custom.css') ?>
<script>
    function filterFormSubmit() {
        var form = document.getElementById('filter-form');
        var selectedLojaId = form.elements['loja_selecionada_id'].value;

        var newUrl =  '/promocoes/index/' + selectedLojaId;
        window.location.href = newUrl;
    }
</script>

