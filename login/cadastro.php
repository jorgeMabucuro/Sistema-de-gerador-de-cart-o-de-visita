<?php
    session_start();
    include './../BD/conexao.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
        $cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $departamento = filter_input(INPUT_POST, 'departamento', FILTER_SANITIZE_STRING);
        $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
        $genero = $_POST['gselect'];
    
        if (
            empty($nome) || empty($email) || empty($endereco) || empty($cargo) ||
            empty($telefone) || empty($departamento) || empty($_POST['senha'])
        ) {
            // $_SESSION['popup'] = [
            //     'tipo' => 'erro',
            //     'titulo' => 'Erro',
            //     'mensagem' => 'Por favor, preencha todos os campos obrigatórios.'
            // ];
            header('Location: formularioCadastro.php');
            exit();
        }
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['popup'] = [
                'tipo' => 'erro',
                'titulo' => 'Email inválido',
                'mensagem' => 'Insira um email válido.'
            ];
            header('Location: formularioCadastro.php');
            exit();
        }
    
        if (strlen($telefone) !== 9 || !is_numeric($telefone)) {
            // $_SESSION['popup'] = [
            //     'tipo' => 'erro',
            //     'titulo' => 'Telefone inválido',
            //     'mensagem' => 'O telefone deve ter exatamente 9 dígitos numéricos.'
            // ];
            header('Location: formularioCadastro.php');
            exit();
        }
    
        if ($genero == 'escolha...') {
            // $_SESSION['popup'] = [
            //     'tipo' => 'erro',
            //     'titulo' => 'Gênero não selecionado',
            //     'mensagem' => 'Por favor, selecione seu gênero.'
            // ];
            header('Location: formularioCadastro.php');
            exit();
        }
    
        // Verifica se o email já existe
        $stmt = $bd->prepare("SELECT idusuario FROM usuario WHERE email = ?");
        $stmt->execute([$email]);
    
        if ($stmt->rowCount() > 0) {
            $_SESSION['popup'] = [
                'tipo' => 'erro',
                'titulo' => 'Email já cadastrado',
                'mensagem' => 'Esse email já está em uso.'
            ];
            header('Location: formularioCadastro.php');
            exit();
        }
    
        // Insere novo usuário
        $ins = $bd->prepare("INSERT INTO usuario (nome, cargo, departamento, telefone, email, endereco, genero, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
        if ($ins->execute([$nome, $cargo, $departamento, $telefone, $email, $endereco, $genero, $senha])) {
            $_SESSION['popup'] = [
                'tipo' => 'sucesso',
                'titulo' => 'Cadastro concluído',
                'mensagem' => 'Usuário cadastrado com sucesso'
            ];
            header('Location: login.php');
            exit();
        } else {
            $_SESSION['popup'] = [
                'tipo' => 'erro',
                'titulo' => 'Erro no cadastro',
                'mensagem' => 'Houve um erro ao cadastrar o usuário. Tente novamente.'
            ];
            header('Location: formularioCadastro.php');
            exit();
        }
    }
    


?>