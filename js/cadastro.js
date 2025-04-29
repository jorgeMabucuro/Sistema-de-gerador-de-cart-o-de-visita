

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("cadastroForm");
    const btn = document.getElementById("btnSubmit");
  
    btn.addEventListener("click", () => {
      const nome = document.getElementById("inputName").value.trim();
      const email = document.getElementById("inputEmail4").value.trim();
      const endereco = document.getElementById("inputEndereco").value.trim();
      const cargo = document.getElementById("inputCargo").value.trim();
      const departamento = document.getElementById("inputdepartamneto").value.trim();
      const genero = document.getElementById("inputState").value;
      const telefone = document.getElementById("inputTelefone").value.trim();
      const senha = document.getElementById("inputSenha").value;

    const mostrarErroPreview = (mensagem) => {
        document.getElementById("previewContent").innerHTML = `
          <h5 class="text-danger text-center">Erro</h5>
          <div class="alert alert-danger text-center" role="alert">
            ${mensagem}
          </div>
          <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-secondary" onclick="fecharPreview()">Fechar</button>
          </div>
        `;
        document.getElementById("previewModal").style.display = "block";
      };
      
  
      // Validações
      if (!nome || !email || !endereco || !cargo || !departamento || !genero || !telefone || !senha) {
        mostrarErroPreview("Preencha todos os campos!");
        return;
      }
  
      if (genero === "escolha...") {
        mostrarErroPreview("Por favor, selecione o género.");
        return;
      }
  
      if (!email.includes("@") || !email.includes(".")) {
        mostrarErroPreview("Email inválido.");
        return;
      }
  
      if (telefone.length !== 9 || isNaN(telefone)) {
        mostrarErroPreview("Telefone inválido. Deve ter 9 dígitos numéricos.");
        return;
      }


    const previewHTML = `
  <h5>Pré-visualização dos Dados</h5>
  <ul class="list-group text-start mb-3">
    <li class="list-group-item"><strong>Nome:</strong> ${nome}</li>
    <li class="list-group-item"><strong>Email:</strong> ${email}</li>
    <li class="list-group-item"><strong>Endereço:</strong> ${endereco}</li>
    <li class="list-group-item"><strong>Cargo:</strong> ${cargo}</li>
    <li class="list-group-item"><strong>Departamento:</strong> ${departamento}</li>
    <li class="list-group-item"><strong>Gênero:</strong> ${genero}</li>
    <li class="list-group-item"><strong>Telefone:</strong> ${telefone}</li>
    <li class="list-group-item"><strong>Senha:</strong> ${"*".repeat(senha.length)}</li>
  </ul>
  <div class="d-flex justify-content-center gap-3">
    <button class="btn btn-success" id="confirmarEnvio">Confirmar</button>
    <button class="btn btn-secondary" onclick="fecharPreview()">Editar</button>
  </div>
`;

  
      document.getElementById("previewContent").innerHTML = previewHTML;
      document.getElementById("previewModal").style.display = "block";
  
      document.getElementById("confirmarEnvio").onclick = () => form.submit();
    });
  });
  
  function fecharPreview() {
    document.getElementById("previewModal").style.display = "none";
  }
  