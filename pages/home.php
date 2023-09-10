<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Robson Barros</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


    <header>
        <h1>Bem vindo ao portfólio<c> MY</c>-<b>WEB</b><d>.app</d></h1>
        <p>Apresentando meus projetos criativo</p>

    </header>
    
    <section class="container-projects">
        <div class="box-project">
            <img src="img/projeto-1.png" alt="Controle de estoque">
            <h2>Controle de Estoque para Mercado</h2>
            <p class="project-description">"Desenvolvemos um Sistema Avançado de Gestão de Produtos que oferece diversas funcionalidades essenciais para o controle eficiente do seu estoque. Com a capacidade de armazenar informações detalhadas sobre os produtos, nossa solução permite que você mantenha uma organização impecável.

As principais funcionalidades do nosso sistema incluem:

Armazenamento de Produtos: Cadastre e mantenha uma base de dados completa e precisa dos produtos em seu estoque.

Listagem Simplificada: Visualize todos os produtos de forma clara e ordenada, facilitando a identificação.

Contabilização Automática: Acompanhe a quantidade de produtos disponíveis automaticamente, mantendo você informado sobre o seu estoque atual.

Funções de Edição: Edite informações dos produtos conforme necessário, garantindo dados sempre atualizados.

Exclusão Eficiente: Remova produtos que não estão mais em seu estoque com apenas alguns cliques.

Nosso sistema foi projetado pensando nas necessidades de gestão de estoque de mercados e estabelecimentos similares. Ele é a ferramenta ideal para manter o controle preciso dos seus produtos, simplificando suas operações diárias e auxiliando na tomada de decisões informadas.

Entre em contato conosco hoje mesmo para conhecer mais detalhes sobre como nosso Sistema de Gestão de Produtos pode transformar a maneira como você administra seu estoque.".</p>
            <a href="#" class="read-more">Ler mais</a>
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




