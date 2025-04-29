<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Header.css">
    <link rel="stylesheet" href="css/Footer.css">
    <title>Seu Cartão de Visita</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
</head>

<body>
    <h1>Seu Cartão de Visita</h1> 
    <div id="businessCard"></div>
    <button onclick="downloadPDF()">Baixar PDF</button>

    <script>
        const urlParametro = new URLSearchParams(window.location.search);
        const logo = 'XPTO';
        const nome = urlParametro.get('nome');
        const cargo = urlParametro.get('cargo');
        const departamento = urlParametro.get('departamento');
        const telefone = urlParametro.get('telefone');
        const email = urlParametro.get('email');
        const endereco = urlParametro.get('endereco');

        document.getElementById('businessCard').innerHTML = `
            <p>${logo} </p>
            <p>Nome: ${nome}</p>
            <p>Cargo: ${cargo}</p>
            <p>departamento: ${departamento}</p>
            <p>Telefone: ${telefone}</p>
            <p>Email: ${email}</p>
            <p>Endereço: ${endereco}</p>   
        `;

        async function downloadPDF() {
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();

            doc.text(`Nome: ${nome}`, 20, 10);
            doc.text(`Cargo: ${cargo}`, 20, 20);
            doc.text(`departamento: ${departamento}`, 20, 30);
            doc.text(`Telefone: ${telefone}`, 20, 40);
            doc.text(`Email: ${email}`, 20, 50);
            doc.text(`Endereço: ${endereco}`, 20, 60);

            const img = await fetch(logo).then(res => res.blob()).then(blob => {
                return new Promise((resolve) => {
                    const reader = new FileReader();
                    reader.onloadend = () => resolve(reader.result);
                    reader.readAsDataURL(blob);
                });
            });

            doc.addImage(img,'JPEG', 110,10,50,50)

            doc.save('cartao_de_visita.pdf');
        }
    </script>
</body>

</html>