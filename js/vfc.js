$(document).ready(function () {
    $('#cadastroForm').on('submit', function (e) {
        e.preventDefault();

        $('.error').remove();
        $('input, select').css('border', '');

        let hasError = false;

        function validateField(selector, message) {
            let field = $(selector);
            if (field.val().trim() === '') {
                field.css('border', '1px solid red');
                field.after(`<div class="error" style="color:red; font-size: 12px;">${message}</div>`);
                hasError = true;
            }
        }

        validateField('#inputName', 'Preencha este campo');
        validateField('#inputEmail', 'Preencha este campo');
        validateField('#inputCargo', 'Preencha este campo');
        validateField('#inputEndereco', 'Preencha este campo');
        validateField('#inputDepartamneto', 'Preencha este campo');
        validateField('#inputSenha', 'Preencha este campo');
        validateField('#inputTelefone', 'Preencha este campo');
        validateField('#inputState', 'Selecione o seu genero')

        let telefone = $('#inputTelefone').val().trim();
        if (telefone !== '' && !/^\d{9}$/.test(telefone)) {
            $('#inputTelefone').css('border', '1px solid red');
            $('#inputTelefone').after('<div class="error" style="color:red; font-size: 12px;">Telefone deve conter exatamente 9 dígitos</div>');
            hasError = true;
        }

        if (!hasError) {
            this.submit(); 
        }
    });
});