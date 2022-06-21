<!DOCTYPE html>

    <head>
        <title> Aula GIT </title>
    
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/bootstrap.css">

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 h-300px text-white text-center">
                    <h1 class="text-banner"> Aprendendo GIT </h1>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 mt-3 p-0">
                    <ul class="list-group">
                        <li class="list-group-item"> <a href="#GitPull"> Git Pull </a> </li>
                        <li class="list-group-item"> <a href="#GitPush"> Git Push </a> </li>
                        <li class="list-group-item"> <a href="#GitCommit"> Git Commit </a> </li>
                        <li class="list-group-item"> <a href="#GitBranch"> Git Branch </a> </li>
                        <li class="list-group-item"> <a href="#GitStatus"> Git Status </a> </li>
                    </ul>
                </div>

                <div class="col-md-8 col-lg-8 col-sm-12">
                    <div class="card mt-3">
                        <div class="card-body" id="GitStatus">
                            <p> 
                                Git pull atualiza seu diretório local com todas as mudanças que 
                                foram feitas no repositório, serve para manter seus arquivos 
                                sempre atualizados na última versão do projeto
                            </p>

                        </div>

                        <div class="card-footer">
                            André Fontoura - 21/06/2022
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body" id="GitPush">
                            <p> 
                                Envia todas as suas alterações para o repositório remoto, 
                                esse comando tem algumas peculiaridades;
                            </p>

                            <p>
                                É necessário adicionar os arquivos que serão enviados via 
                                ‘git add’ ou então ‘git add .’ muito cuidado com o ‘.’.
                            </p>

                            <p> ex: </p>
                            <p> git add c:\laragon\projeto1\index.php </p>
                            <p> git add . </p>
                            <p> git commit -m ‘Mensagem’ </p>
                            <p> git push </p>
                        </div>

                        <div class="card-footer">
                            André Fontoura - 21/06/2022
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body" id="GitCommit">
                            <p> Adiciona arquivos para serem enviados via git commit. </p>

                            <p> git commit -m “mensagem” </p>
                        </div>

                        <div class="card-footer">
                            André Fontoura - 21/06/2022
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body" id="GitBranch">
                            <p> Uma das grandes vantagens do git é a criação de ‘branchs’ (ramos) do seu projeto. Você 
                                enquanto usuário pode criar branchs a partir de qualquer lugar. 
                            </p>

                            <p> Dado curioso é que a ‘branch’ raiz é sempre a ‘main’ (ou master em alguns projetos antigos)
                                 e o nome da branch não existe uma lógica específica para ser criada.
                            </p>
                            
                            <p> A branch serve para você salvar o estado de arquivos em um determinado ponto e editá-los 
                                sem que haja alteração do conteúdo adicional, dessa forma é possível testar o seu sistema 
                                com características diferentes antes de incrementar o código original e tornar a reversão 
                                mais fácil caso você crie algum erro ou bug.
                            </p>
                            
                            <p> Curiosidade: O termo ‘master’ e ‘slave’ que eram antigamente utilizados como nomes principais
                                 de branch foram alterados em respeito a antigos costumes hoje abominados pelo sociedade
                            </p>
                        </div>

                        <div class="card-footer">
                            André Fontoura - 21/06/2022
                        </div>
                    </div>
                    

                    <div class="card mt-3">
                        <div class="card-body" id="GitPull">
                            <p> git status </p>

                            <p> lista arquivos editados em seu repositório </p>

                        </div>

                        <div class="card-footer">
                            André Fontoura - 21/06/2022
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="js/jquery.js"></script>    
    <script src="js/bootstrap.js"></script>
</html>