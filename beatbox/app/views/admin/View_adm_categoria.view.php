<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
        
    <script src="https://kit.fontawesome.com/736c040bb4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/public/css/styles-adm.css"/>
    <link rel="stylesheet" href="/public/css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <title>Beatbox ADM - Categoria</title>

</head>

<body>
    <div class="main">
        <!-- ///////////Título da página///////////// -->
        <div class="painel_geral">
            <h1>Categorias</h1>
        </div>

        <!-- ///////////Botão para adicionar///////////// -->
        <div class="adicionar">
            <button class="btn btn-primary" data-toggle="modal" data-target="#adicionar">
                Adicionar Categoria
            </button>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="coluna-1">Editar</th>
                    <th scope="col" class="coluna-2">#</th>
                    <th scope="col" class="coluna-3">Categoria:</th>
                    <th scope="col" class="coluna-4 col-email">Qtd</th>
                    <th scope="col" class="coluna-5">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">
                        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#editar">
                            <img class="min" src="img/write_edit_icon.png" alt="Editar" title="Editar" />
                        </button>
                    </td>
                    <td>1</td>
                    <td data-toggle="modal" data-target="#listar">Guitarras</td>
                    <td class="col-email">10</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#excluir">
                            <img class="min" src="img/x-icon.png" alt="Excluir" title="Excluir" />
                        </button>
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#editar">
                            <img class="min" src="img/write_edit_icon.png" alt="Editar" title="Editar" />
                        </button>
                    </td>
                    <td>2</td>
                    <td data-toggle="modal" data-target="#listar">Amplificadores</td>
                    <td class="col-email">10</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#excluir">
                            <img class="min" src="img/x-icon.png" alt="Excluir" title="Excluir">
                        </button>
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#editar">
                            <img class="min" src="img/write_edit_icon.png" alt="Editar" title="Editar">
                        </button>
                    </td>
                    <td>3</td>
                    <td data-toggle="modal" data-target="#listar">Pianos</td>
                    <td class="col-email">10</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#excluir">
                            <img class="min" src="img/x-icon.png" alt="Excluir" title="Excluir">
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="modal fade" id="adicionar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalLongoExemplo">Adicionar Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nome-categoria">Nome da Categoria: </label>
                                <input type="text" class="form-control" id="categoria-nome-new"
                                    placeholder="Insira o nome da Categoria" />
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="prodlist">
                                        <form>
                                            <input type="checkbox" id="prod1" name="prod1">
                                            <label for="vehicle1"> Guitarra Flying V</label><br>
                                            <input type="checkbox" id="prod2" name="prod2">
                                            <label for="vehicle2"> Bateria batmuito</label><br>
                                            <input type="checkbox" id="prod3" name="prod3">
                                            <label for="vehicle3"> Amplificador Ampere</label><br>
                                            <input type="checkbox" id="prod4" name="prod4">
                                            <label for="vehicle1"> Guitarra Flying V</label><br>
                                            <input type="checkbox" id="prod5" name="prod5">
                                            <label for="vehicle2"> Bateria batmuito</label><br>
                                            <input type="checkbox" id="prod6" name="prod6">
                                            <label for="vehicle3"> Amplificador Ampere</label><br>
                                        </form>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="formGroupExampleInput2">Quantidade</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Insira a Quantidade" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descrição da Categoria</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Fechar
                        </button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Salvar mudanças
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalLongoExemplo">
                                Editar
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="nome-categoria">Nome da Categoria: </label>
                                    <input type="text" class="form-control" id="categoria-nome-edt"
                                        placeholder="Insira o nome da Categoria" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="prodlist">
                                            <form>
                                                <input type="checkbox" id="prod1" name="prod1">
                                                <label for="vehicle1"> Guitarra Flying V</label><br>
                                                <input type="checkbox" id="prod2" name="prod2">
                                                <label for="vehicle2"> Bateria batmuito</label><br>
                                                <input type="checkbox" id="prod3" name="prod3">
                                                <label for="vehicle3"> Amplificador Ampere</label><br>
                                                <input type="checkbox" id="prod4" name="prod4">
                                                <label for="vehicle1"> Guitarra Flying V</label><br>
                                                <input type="checkbox" id="prod5" name="prod5">
                                                <label for="vehicle2"> Bateria batmuito</label><br>
                                                <input type="checkbox" id="prod6" name="prod6">
                                                <label for="vehicle3"> Amplificador Ampere</label><br>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput2">Quantidade</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Insira a Quantidade" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descrição da Categoria</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Fechar
                            </button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                Salvar mudanças
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalLongoExemplo">Excluir</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Tem certeza que deseja excluir o item selecionado ?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Excluir e Salvar mudanças
                        </button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Não
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="listar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalLongoExemplo">Produtos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="prodlist">
                            <p>Guitarra V</p>
                            <p>Guitarra Tagima</p>
                            <p>Guitarra Guibson</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Ok
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="paginacao ">
            <nav aria-label="Navegação de página exemplo">
              <ul class="pagination justify-content-center ">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="View_Produtos.html">1</a></li>
                <li class="page-item"><a class="page-link" href="View_Produtos - 2.html">2</a></li>
                <li class="page-item"><a class="page-link" href="View_Produtos - 3.html">3</a></li>
                <li class="page-item"><a class="page-link" href="View_Produtos - 2.html">Próximo</a>
                </li>
              </ul>
            </nav>
          </div>
    </div>
</body>

</html>