<!-- src/Template/Promocoes/index.php -->
<h3><?= empty($loja_selecionada) ? "Selecione a loja" : "Promoções" ?></h3>

<?php if ( empty($loja_selecionada) ): ?>

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

<?php endif; ?>

<?php if ( !empty($loja_selecionada) ): ?>

<?= $this->Form->create(null, ['url' => ['action' => 'index'], 'id' => 'filter-form', 'type' => 'get']) ?>
<select name="loja_selecionada_id" required class="hiden">
    <?php foreach ($lojas as $apoUsuarioloja): ?>
        <?php $loja = $apoUsuarioloja->Loja; ?>
        <option value="<?= $loja ?>"  <?= $loja_selecionada == $loja ? 'selected=""' : '' ?>><?= $loja ?></option>
    <?php endforeach; ?>
</select>

<div class="search-container">
    <?php
        $classes_entradas = $vigencia == "E" ? "active" : "";
        $classes_vigencias = $vigencia == "V" && $livramento == "N" ? "active" : "";
        $livramento_externas = $livramento == 'Y' ? "active" : "";
    ?>
    <?= $this->Form->input('busca', ['placeholder' => 'Filtrar produtos por NOME ou CÓDIGO INTERNO', 'type' => 'text', 'value' => $search, 'onkeydown' => 'handleKeyDown(event)']) ?>
    <?= $this->Form->button('Limpar Busca', ['id' => 'clear-button', 'onclick' => 'event.preventDefault(); clearForm();']) ?>
    <?= $this->Form->button('Buscar', ['id' => 'search-button', 'onclick' => 'event.preventDefault(); searchFormSubmit();']) ?>
</div>

<div class="filter-container">

    <select name="tema" class="tema" id="select_tema">
        <option value="">Tema Padrão</option>
        <?php  foreach ($temas as $tema): ?>
            <option value="<?= $tema['diretorio'] ?>" selected=""><?= $tema['nome'] ?></option>
        <?php endforeach; ?>
    </select>

    <select name="cartaz_tipo">
        <option value="">[Filtrar por tipo de promoção]</option>
        <?php foreach ($filtros_tipos as $filtro_tipo): ?>
            <option value="<?= $filtro_tipo ?>"  <?= $filter_type == $filtro_tipo ? 'selected=""' : '' ?>><?= $filtro_tipo ?></option>
        <?php endforeach; ?>
    </select>
    <?= $this->Form->button('Filtrar', ['id' => 'filter-button', 'onclick' => 'event.preventDefault(); filterTypeFormSubmit();']) ?>

</div>
<?= $this->Form->end() ?>

<div class="row buttons-container">
    <?= $this->Form->button('Vigências', ['id' => 'terms-button', 'onclick' => 'event.preventDefault(); goToTerms();', 'class' => 'button-outline ' . $classes_vigencias]) ?>
    <?= $this->Form->button('Entradas', ['id' => 'inners-button', 'onclick' => 'event.preventDefault(); goToInners();', 'class' => 'button-outline ' . $classes_entradas]) ?>
    <?= $loja_selecionada == '011' ? $this->Form->button('Exeterna', ['id' => 'livramento-button', 'onclick' => 'event.preventDefault(); goToLivramento();', 'class' => 'button-outline ' . $livramento_externas]) : ''; ?>
</div>

<?php endif; ?>


<?php if ( !empty($loja_selecionada) ): ?>
<?= $this->Form->create(null, ['url' => ['action' => 'imprimir'], 'target' => '_blank']) ?>

<input type="hidden" required name="loja_selecionada_id" value="<?= $loja_selecionada ?>" />
<input type="hidden" id="input_tema" name="input_tema" value="<?= ($temas) ? $temas[count($temas)-1]['diretorio'] : ""; ?>">

<table>
    <thead>
        <tr>
            <th>
                <?= $this->Form->checkbox('marcar-todos', ['id' => 'marcar-todos-checkbox', 'onclick' => 'marcarTodosCheckbox()', 'checked' => "checked"]) ?>
            </th>
            <th>Descrição</th>
            <th>Descrição Mídia</th>
            <th class="text-center">Valor</th>
            <th class="text-center">Valor Normal</th>
            <th class="text-center">Valor Clube</th>
            <th>Limite</th>
            <th>Tipo</th>
            <th>Descrição na Impressão</th>
            <th>Cartaz</th>
            <th>Tamanho do Cartaz</th>
            <th>Quantidade de Cópias</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($promocoes as $promocao): ?>
            <?php
            $disabled = '';
            $fadeClass = '';
            $checked = true;

            if ($promocao->tipoCartaz === null) {
                continue;
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
                <td class="text-center"><?= $promocao->vigencia == 'E' ? 'Hoje' : 'Vigente'; ?></td>
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
                            'value' => 'A6'
                        ]
                    ) ?>
                </td>
                <td>
                    <?= $this->Form->input('quantidade_copias_' . $promocao->idprom, [
                        'placeholder' => 'Quantidade de cópias',
                        'type' => 'number',
                        'min' => '1',
                        'value' => '1',
                        'disabled' => $disabled,
                        'required' => 'required'
                    ]) ?>
                </td>
                <!-- Adicione outras colunas relevantes aqui -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= "<br/>Promoções encontradas = " . count($promocoes); ?><br />
<?= $this->Form->button('Imprimir') ?>
<?= $this->Form->end() ?>
<?php endif; ?>
<?= $this->Html->css('custom.css') ?>
<script>
    function filterFormSubmit() {
        var form = document.getElementById('filter-form');
        var selectedLojaId = form.elements['loja_selecionada_id'].value;

        var newUrl =  '/promocoes/index/' + selectedLojaId;
        window.location.href = newUrl;
    }
    function marcarTodosCheckbox() {
        var checkboxes = document.getElementsByName('selecionados[]');
        var marcarTodosCheckbox = document.getElementById('marcar-todos-checkbox');

        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = marcarTodosCheckbox.checked;
        }
    }

    function searchFormSubmit() {
        var form = document.getElementById('filter-form');
        var selectedLojaId = form.elements['loja_selecionada_id'].value;
        var searchQuery = form.elements['busca'].value;
        var typeSelected = form.elements['cartaz_tipo'].value;

        var newUrl = '/promocoes/index/' + selectedLojaId + '/<?= $vigencia ?>/<?= $livramento ?>?search=' + searchQuery + '&type=' + typeSelected;
        window.location.href = newUrl;
    }

    function filterTypeFormSubmit() {
        var form = document.getElementById('filter-form');
        var selectedLojaId = form.elements['loja_selecionada_id'].value;
        var searchQuery = form.elements['busca'].value;
        var typeSelected = form.elements['cartaz_tipo'].value;

        var newUrl = '/promocoes/index/' + selectedLojaId + '/<?= $vigencia ?>/<?= $livramento ?>?search=' + searchQuery + '&type=' + typeSelected;
        window.location.href = newUrl;
    }

    function clearForm() {
        var form = document.getElementById('filter-form');
        form.elements['busca'].value = '';
    }
    function handleKeyDown(event) {
        if (event.keyCode === 13) { // Verifica se a tecla pressionada é a tecla "Enter"
            event.preventDefault(); // Evita o comportamento padrão de envio do formulário
            searchFormSubmit(); // Aciona a função de envio do formulário de pesquisa
        }
    }

    function goToInners() {
        var form = document.getElementById('filter-form');
        var selectedLojaId = form.elements['loja_selecionada_id'].value;
        var newUrl = '/promocoes/index/' + selectedLojaId + '/E';
        window.location.href = newUrl;
    }

    function goToTerms() {
        var form = document.getElementById('filter-form');
        var selectedLojaId = form.elements['loja_selecionada_id'].value;
        var newUrl = '/promocoes/index/' + selectedLojaId + '/V';
        window.location.href = newUrl;
    }

    function goToLivramento() {
        var form = document.getElementById('filter-form');
        var selectedLojaId = form.elements['loja_selecionada_id'].value;
        var newUrl = '/promocoes/index/' + selectedLojaId + '/V/Y';
        window.location.href = newUrl;
    }

    function goToNoLivramento() {
        var form = document.getElementById('filter-form');
        var selectedLojaId = form.elements['loja_selecionada_id'].value;
        var newUrl = '/promocoes/index/' + selectedLojaId + '/V/N';
        window.location.href = newUrl;
    }

    document.addEventListener('DOMContentLoaded', function() {
        var selectTema = document.getElementById('select_tema');
        var inputTema = document.getElementById('input_tema');

        selectTema.addEventListener('change', function() {
            inputTema.value = this.value;
        });
    });

</script>

