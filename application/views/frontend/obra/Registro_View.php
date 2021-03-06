<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--  Botão para voltar para a pré-visualização  -->
<?php echo form_open('pre_visualizacao_obra'); ?>
    <button type="submit"> Voltar a pré-visualização </button>
<?php echo form_close();?>
<!--  FIM  -->

<div>

	<?php
    foreach ($resultado as $obra){ ?>
      <fieldset>
          <legend> <?php echo $obra->nome_objeto ?> </legend>

          <!-- Inicio do codigo de visualizar exposições -->
          <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
          <?php echo form_open('Obra_Controller/visualizar_exposicoes/'.$obra->id_obra); ?>
              <button type="submit"> Visualizar exposições </button>
          <?php echo form_close();?>
          <!-- Fim do codigo de visualizar exposições -->

          <!-- Inicio do codigo de visualizar restaurações -->
          <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
          <?php echo form_open('Obra_Controller/visualizar_restauracoes/'.$obra->id_obra); ?>
              <button type="submit"> Visualizar restaurações </button>
          <?php echo form_close();?>
          <!-- Fim do codigo de visualizar restaurações -->


          <!-- Inicio do codigo de Update -->
          <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
          <?php echo form_open('Obra_Controller/atualizar_obra/'.$obra->id_obra); ?>
              <!-- <input  type="hidden" name="txt-id" value="<?php echo $obra->id_obra ?>"/> -->
              <button type="submit" name="txt-atualizar" value=""> Editar Obra </button>
          <?php echo form_close();?>
          <!-- Fim do codigo de Update -->


          <!-- Botão de exclusão que chama um modal para verificar se o usuário deseja mesmo excluir a obra-->
          <button type="button" data-toggle="modal" data-target="#myModal">Excluir obra</button>

          <!-- Modal de exclusão de obra -->
          <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Tem certeza que deseja excluir a obra?</h4>
                      </div>

                      <div class="modal-footer">
                          <div class="col-md-2">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                          </div>
                          <div class="col-md-2"></div>
                          <div class="col-md-2">
                              <?php echo form_open('Obra_Controller/remover_obra/'.$obra->id_obra); ?>
                                  <button type="submit" class="btn btn-primary"> Sim </button>
                              <?php echo form_close();?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Fim modal de exclusão de obra -->

          <br>
          <br>
          <br>
          <p>
              Id da Obra: <?php echo $obra->id_obra ?>
          </p> 
          <p>
             Numero atual: <?php echo $obra->num_atual ?>
          </p>
          <p>
             <?php echo $obra->num_anterior ?>
          </p>
          <p>
             <?php echo $obra->fichas_relacionadas ?>
          </p>
          <p>
             <?php echo $obra->nome_objeto ?>
          </p> 
          <p>
             <?php echo $obra->titulo ?>
          </p> 
          <p>
             <?php echo $obra->classe ?>
          </p> 
          <p>
             <?php echo $obra->sub_classe ?>
          </p> 
          <p>
             <?php echo $obra->material ?>
          </p> 
          <p>
             <?php echo $obra->tecnica ?>
          </p> 
          <p>
             <?php echo $obra->inscricoes_marcas ?>
          </p> 
          <p>
             <?php echo $obra->epoca ?>
          </p> 
          <p>
             <?php echo $obra->autoria ?>
          </p>
          <p>
             <?php echo $obra->origem ?>
          </p>
          <p>
             <?php echo $obra->procedencia ?>
          </p>
          <p>
             <?php echo $obra->imagem ?>
          </p>
          <p>
             <?php echo $obra->conservacao ?>
          </p>
          <p>
             <?php echo $obra->localizacao ?>
          </p>
          <p>
             <?php echo $obra->altura ?>
          </p>
          <p>
             <?php echo $obra->largura ?>
          </p>
          <p>
             <?php echo $obra->comprimento ?>
          </p>
          <p>
             <?php echo $obra->profundidade ?>
          </p>
          <p>
             <?php echo $obra->diametro ?>
          </p>
          <p>
             <?php echo $obra->peso ?>
          </p>
          <p>
             <?php echo $obra->circunferencia ?>
          </p>
          <p>
             <?php echo $obra->resp_preenc_tec ?>
          </p>
          <p>
             <?php echo $obra->nome_fotografo ?>
          </p>
          <p>
             <?php echo $obra->resp_digitacao ?>
          </p>
          <p>
             <?php echo $obra->data_digitacao ?>
          </p>
          <p>
             <?php echo $obra->resp_revisao ?>
          </p>
          <p>
             <?php echo $obra->data_revisao ?>
          </p>
          <p>
             <?php echo $obra->resp_alteracao ?>
          </p>
          <p>
             <?php echo $obra->data_alteracao ?>
          </p>
          <p>
             <?php echo $obra->descricao_objeto ?>
          </p>
          <p>
             <?php echo $obra->carac_tecnica ?>
          </p>
          <p>
             <?php echo $obra->carac_inconografica ?>
          </p>
          <p>
             <?php echo $obra->carac_estilistica ?>
          </p>
          <p>
             <?php echo $obra->dados_historicos ?>
          </p>
          <p>
             <?php echo $obra->publicacao ?>
          </p>
          <p>
             <?php echo $obra->fontes_primarias ?>
          </p>
          <p>
             <?php echo $obra->fontes_bib ?>
          </p>
          <p>
             <?php echo $obra->modo_aquisicao ?>
          </p>
          <p>
             <?php echo $obra->data_aquisicao ?>
          </p>
          <p>
             <?php echo $obra->id_funcionario ?>
          </p>  
      </fieldset>
    <?php
    }?>
</div>
