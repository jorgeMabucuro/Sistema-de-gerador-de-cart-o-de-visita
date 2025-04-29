$(document).ready(function () {
    $('#cadastroForm').on('submit', function (e) {
        let isValid = true;
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let telefonePattern = /^[0-9\s\-\+\(\)]+$/;

        // Verifica campos vazios
        $('#cadastroForm input').each(function () {
            if ($(this).val().trim() === '') {
                alert('Por favor, preencha o campo: ' + $(this).prev('label').text());
                $(this).focus();
                isValid = false;
                return false;
            }
        });

        if (!isValid) {
            e.preventDefault();
            return;
        }

        // Validação de e-mail
        const email = $('#inputEmail4').val().trim();
        if (!emailPattern.test(email)) {
            alert('Por favor, insira um e-mail válido.');
            $('#inputEmail4').focus();
            e.preventDefault();
            return;
        }

        // Validação do gênero
        const genero = $('#inputState').val();
        if (genero === 'escolha...') {
            alert('Por favor, selecione o gênero.');
            $('#inputState').focus();
            e.preventDefault();
            return;
        }

        // Validação de telefone
        const telefone = $('#inputTelefone').val().trim();
        if (!telefonePattern.test(telefone)) {
            alert('Por favor, insira um telefone válido.');
            $('#inputTelefone').focus();
            e.preventDefault();
            return;
        }

        // Validação de senha
        const senha = $('#inputSenha').val().trim();
        if (senha.length < 6) {
            alert('A senha deve ter pelo menos 6 caracteres.');
            $('#inputSenha').focus();
            e.preventDefault();
        }
    });
});
