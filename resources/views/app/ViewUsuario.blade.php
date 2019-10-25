<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>BobWaiter - Perfil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="/css/all.min.css" type="text/css" rel="stylesheet">
        <link href="/css/app.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="fadeInDown listViewApp">      
        <div class="container py-3">
                <div class="row">
                    <div class="mx-auto col-sm-6 mb-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0" style="text-align: center;"><b>Cadastro</b></h4>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off">
                                    <div class="form-group row">
                                        <label class="col-lg-3 mb-0 col-form-label form-control-label"><b>Nome</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control" style="background-color: #f6f6f6;" type="text" placeholder="Informe seu nome">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 mb-0 col-form-label form-control-label"><b>CPF</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control mascaracpf" style="background-color: #f6f6f6;" type="text" placeholder="Informe seu CPF">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 mb-0 col-form-label form-control-label"><b>Senha</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control" style="background-color: #f6f6f6;" type="password" placeholder="Informe sua senha">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 mb-0 col-form-label form-control-label"><b>Endereço</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control" style="background-color: #f6f6f6;" type="text" placeholder="Informe seu endereço">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 mb-0 col-form-label form-control-label"><b>Bairro</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control" style="background-color: #f6f6f6;" type="url" placeholder="Informe seu bairro">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 mb-0 col-form-label form-control-label"><b>Cidade</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control" style="background-color: #f6f6f6;" type="url" placeholder="Informe sua cidade">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 mb-0 col-form-label form-control-label"><b>Estado</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control" style="background-color: #f6f6f6;" type="text" placeholder="Informe seu estado">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 mb-0 col-form-label form-control-label"><b>Telefone</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control mascaratelefone" style="background-color: #f6f6f6;" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 mb-0 col-form-label form-control-label"><b>Data Nasc.</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control" style="background-color: #f6f6f6;" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="button" class="btn btn-red-app mb-0" value="Confirmar">
                                            <input type="button" id="voltar-login" class="btn btn-red-app mb-0" value="Voltar" style="width: 240px;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navFooter" data-role="navbar" data-iconpos="bottom">
                <ul>
                    <li><a href="{{ url('app/estabelecimentos') }}" id="home" data-icon="grid">Inicio</a></li>
                    <li><a href="#" id="pedidos" data-icon="star">Pedidos</a></li>
                    <li><a href="{{ url('app/usuario/perfil') }}" id="perfil" data-icon="gear">Perfil</a></li>
                </ul>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="https://kit.fontawesome.com/67c671c2e1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="/js/jquery.mask.min.js"></script>
        <script src="/js/app.js"></script>        
        <script src="/js/usuario.js"></script>
    </body>
</html>