<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Cartão de Visita</title>
    <link rel="stylesheet" href="cartaoo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Ho1iXnWXRmkgfL0vOQFUbC+yH+PL0ZxMhrRYF7TTFfLhN3TMBxkCzLDRnpP0H5KxVMEfS3Th2R4a44Uvn9JVA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
</head>
<body>
    <h1>Cartão de Visita</h1> 
    <div id="businessCard" class="card-preview">
        <div class="card">
            <div class="left">
                <h2>XPTO</h2>
                <!-- <p><i class="fas fa-phone"></i> <span ></span></p>
                <p><i class="fas fa-envelope"></i> <span ></span></p>
                <p><i class="fas fa-map-marker-alt"></i> <span ></span></p> -->
            </div>
            <div class="right">
                <h3 id="nome"></h3>
                <p id="cargo"></p>
                <p id="departamento">Departamento:<i class="fas fa-building"></i></p>
                <p id="endereco"><i class="fas fa-map-marker-alt"></i></p>
                <p id="telefone"><i class="fas fa-phone"></i></p>
                <p id="email"><i class="fas fa-envelope"></i></p>
            </div>
        </div>
    </div>
    <a href="./formularioDocv.html"><button>Criar novo cartão</button></a>
    <button onclick="downloadPDF()">Baixar PDF</button>

    <script>
        const params = new URLSearchParams(window.location.search);
        document.getElementById("nome").textContent = params.get("nome");
        document.getElementById("cargo").textContent = params.get("cargo");
        document.getElementById("departamento").textContent = params.get("departamento");
        document.getElementById("telefone").textContent = params.get("telefone");
        document.getElementById("email").textContent = params.get("email");
        document.getElementById("endereco").textContent = params.get("endereco");

        function downloadPDF() {
            const { jsPDF } = window.jspdf;
            html2canvas(document.querySelector(".card")).then(canvas => {
                const imgData = canvas.toDataURL("image/png");
                const pdf = new jsPDF("l", "mm", [90, 50]);
                pdf.addImage(imgData, "PNG", 0, 0, 90, 50);
                pdf.save("cartao_de_visita.pdf");
            });
        }
    </script>
</body>
</html>
