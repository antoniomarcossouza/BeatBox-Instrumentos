<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    
    <link rel="stylesheet" href="../public/css/styles.css">
		<link rel="stylesheet" href="../public/css/styles-adm.css">
 

    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    
    <title>Beatbox</title>

</head>

<body>
    <div class="main">
        <div class="painel_geral">
            <h1>Lista de Produtos</h1>
        </div>
        <div class="adicionar">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionar">
                Adicionar Produto
            </button>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="coluna-1">Editar</th>
                    <th scope="col" class="coluna-2">#</th>
                    <th scope="col" class="coluna-3">Produto:</th>
                    <th scope="col" class="coluna-4-qtd">Qtd</th>
                    <th scope="col" class="coluna-5">Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <th scope="row">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar">
                            <img class="min" src="../public/img/write_edit_icon.png" alt="Editar" title="Editar" />
                        </button>
                    </th>
                    <td><?= $produto->id ?></td>
                    <td data-toggle="modal" data-target="#vizualizar"><?= $produto->nome ?></td>
          <td class="coluna-4-qtd"><?= $produto->quantidade ?></td>
          <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excluir">
                  <img class="min" src="../public/img/x-icon.png" alt="Excluir" title="Excluir" />
              </button>
          </td>
          </tr>

          <?php endforeach; ?>    
            </tbody>
        </table>
        <div class="modal fade" id="adicionar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true"  action="/produtos/create" method="POST">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalLongoExemplo">
                                Adicionar
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="formGroupExampleInput" name = "nome">Nome do produto: </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Insira o nome do produto" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="exampleFormControlSelect1">Categoria</label>
                                        <select class="form-control" name = "categoria" id="exampleFormControlSelect1">
                                            <option >Selecione uma Categoria</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="formGroupExampleInput2">Quantidade</label>
                                        <input type="text" name="quantidade" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Insira a Quantidade" />
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="formGroupExampleInput2">Preço</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Insira o preço" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descrição do Produto</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <form>
                                    <div class="form-group">
                                      <label for="exampleFormControlFile1">Insira uma imagem</label>
                                      <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1">
                                    </div>
                                </form>
                                <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Fechar
                            </button>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal">
                                Salvar mudanças
                            </button>
                        </div>
</form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
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
                                    <label for="formGroupExampleInput">Nome do produto: </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Insira o nome do produto" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="exampleFormControlSelect1">Categoria</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Selecione uma Categoria</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="formGroupExampleInput2">Quantidade</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Insira a Quantidade" />
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="formGroupExampleInput2">Preço</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Insira o preço" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descrição do Produto</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <form>
                                    <div class="form-group">
                                      <label for="exampleFormControlFile1">Insira uma imagem</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                  </form>
                                
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
        <div class="modal fade" id="vizualizar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalLongoExemplo">
                                Vizualizar
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class = "img-viz">
                                    <img src="img/guitarra_tagima_tg_530_woodstock_stratocaster_2117_4_20191128181745.jpg" alt="Produto" title="Produto">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nome do produto: </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Insira o nome do produto" readonly>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="exampleFormControlSelect1">Categoria</label>
                                        <select class="form-control" id="exampleFormControlSelect1" readonly>
                                            <option>Selecione uma Categoria</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                            <option>Guitarra</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="formGroupExampleInput2">Quantidade</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Insira a Quantidade" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="formGroupExampleInput2">Preço</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Insira o preço" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Descrição do Produto</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"readonly></textarea>
                                </div>
                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Fechar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
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
                    <div class="modal-footer" action="/produto/delete" method="POST">
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
        <div class="paginacao">
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