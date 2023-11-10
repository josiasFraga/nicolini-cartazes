$(document).ready(function() {
    $('.btn-upload').click(function() {
        var size = $(this).data('size');
        var loja = $(this).data('loja');
        var inputFile = $('#input_' + size + '_' + loja);
        inputFile.click();

        inputFile.change(function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Atualiza a pré-visualização da imagem
                    $('#preview_' + size + '_' + loja).attr('src', e.target.result);

                    // Atualiza as dimensões
                    var image = new Image();
                    image.src = e.target.result;
                    image.onload = function() {
                        var width = image.width;
                        var height = image.height;
                        // Atualize aqui a descrição da dimensão
                        // Por exemplo:
                        $('li.li_largura_' + size + '_' + loja).html('Largura: ' + width + 'px');
                        $('li.li_altura_' + size + '_' + loja).html('Altura: ' + height + 'px');
                    };
                };
                reader.readAsDataURL(file);
            }
        });
    });
});