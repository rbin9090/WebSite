

<?php include 'header.php';?>
   
    <section class="container-projects">
        <div class="box-project">
            <img src="img/projeto-1.png" alt="Controle de estoque">
            <h2>Controle de Estoque para Mercado</h2>
            <p class="project-description">"Desenvolvemos um Sistema Avançado de Gestão de Produtos que oferece diversas funcionalidades essenciais para o ...</p>

<?php


if (isset($_POST['mercado'])) {

 function location($url) {
    header("Location: $url");
    exit; 
}

// Exemplo de uso da função para redirecionar o usuário para outra página
$novapagina = $mercado;
location($novapagina);


}




?>
<form method="POST">
            <input type="submit"  value="ler mais" name="mercado"><!--class="read-more"-->
        </div>
        <div class="box-project">
            <img src="img/sistema-escolar.png" alt="Project 2">
            <h2>Project 2 Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="project2-details.html">Learn More</a>
        </div>
                <div class="box-project">
            <img src="img/agendamento.png" alt="Controle de estoque">
            <h2>Controle de Estoque para Mercado</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="project1-details.html">Learn More</a>
        </div>
                <div class="box-project">
            <img src="img/portal.png" alt="Controle de estoque">
            <h2>Controle de Estoque para Mercado</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="project1-details.html">Learn More</a>
        </div>
        <!-- Add more project divs as needed -->
    </section>

    </form>
    
    <footer>
        <p>Contact me at <a href="mailto:contact@example.com">contact@example.com</a></p>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const readMoreLink = document.querySelector(".read-more");
        const projectDescription = document.querySelector(".project-description");

        readMoreLink.addEventListener("click", function(event) {
            event.preventDefault();
            projectDescription.style.maxHeight = "none";
            readMoreLink.style.display = "none";
        });
    });
</script>
</body>
</html>




