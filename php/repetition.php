<?php
    $head="
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>$title</title>
        <link rel=\"stylesheet\" href=\"../css/evo45styles.css\">
    </head>";

    $header="
    <div class=\"header-container\">
        <header>
            <div class=\"navbar\">
                <ul>
                    <li class=\"menu-li\"><a href=\"../php/index.php\">Home</a></li>
                    <li class=\"menu-li\">
                        Alunos
                        <div class=\"dropdown-content\">
                            <a href=\"./alunos_lista.php\">Listar Alunos</a>
                            <a href=\"./aluno_form_cad.php\">Cadastrar Aluno(a)</a>
                        </div>
                    </li>

                    <li class=\"menu-li\">
                        Colaboradores
                        <div class=\"dropdown-content\">
                            <a href=\"./colabs_lista.php\">Listar Colaboradores</a>
                            <a href=\"./colab_form_cad.php\">Cadastrar Colaborador(a)</a>
                        </div>
                    </li>

                    <li class=\"menu-li\">
                        Planos
                        <div class=\"dropdown-content\">
                            <a href=\"./planos_lista.php\">Listar planos</a>
                            <a href=\"./plano_form_cad.php\">Cadastrar plano</a>
                        </div>
                    </li>

                    <li class=\"menu-li\">
                        Professores
                        <div class=\"dropdown-content\">
                            <a href=\"./profes_lista.php\">Listar Professores</a>
                            <a href=\"./profe_form_cad.php\">Cadastrar Professor(a)</a>
                        </div>
                    </li>

                    <li class=\"menu-li\">
                        Administrador
                        <div class=\"dropdown-content\">
                            <a href=\"./usuar_form_cad.php\">Solicitar acesso de administrador</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
    </div>
    ";

    $footer="
        <footer>
        <div class=\"footer-sm\">
            Siga-nos:
                <a href=\"https://facebook.com\" target=\"_blank\">
                    <button class=\"facebook-btn\"></button>
                </a>
                <a href=\"https://instagram.com\" target=\"_blank\">
                    <button class=\"instagram-btn\"></button>
                </a>
                <a href=\"https://whatsapp.com\" target=\"_blank\">
                    <button class=\"whatsapp-btn\"></button>
                </a>
        </div>
        <hr>
        <div>
            <p>© 2023 evo45 - Todos os direitos reservados. &nbsp; / &nbsp; 
            DF-495 - Santa Maria, Brasília - Distrito Federal.</p>
        </div>
        </footer>
    ";

    $recad="
        <div class=\"middle-container\">
        <div class=\"title-container\">
            <h2>Cadastro já inserido!</h2>
            <p>Consulte o administrador.</p>
        </div>
        </div>
    ";
?>
