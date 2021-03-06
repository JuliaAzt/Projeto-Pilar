<h1> Pré Visualização Funcionario</h1>

<?php echo form_open('inicio'); ?>
    <button type="submit" > Voltar inicio </button>
<?php echo form_close();?>

<!-- Pega o id do funcionario atualmente logado -->
    <?php $id_func_Logado = $this->session->userdata('usuariologado')->id_funcionario; ?>

    <!-- Passa o id do funcionario atualmente logado para a função de busca -->
    <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$id_func_Logado); ?>
        <button type="submit" name="txt-visualizar" value=""> Visualizar Próprio Perfil </button>
    <?php echo form_close();?> 

<!-- Permite todas as operações do CRUD para um administrador -->
<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1) { ?>

    <p>Este usuário logado é um Administrador de id_tipoFuncionario == 1 </p>
    <p> Criar função para reinserir o funcionario no sistema </p>

    <a type="button" href= "<?php echo base_url('cadastrar_funcionario') ?>" >Cadastrar funcionário</a>
    
    <br>
    <br>

    <fieldset>
        <legend> Gerenciar Usuários</legend>
        <!-- Exibe todos os usuários cadastrados -->
        <?php foreach ($funcionarios as $funcionario){ ?>
            <fieldset>
                <legend><?php  echo $funcionario->nome ?></legend>
                <p> Tipo: <?php  echo $funcionario->id_tipoFuncionario ?> </p>
                <p> Situação: <?php  echo $funcionario->situacao ?> </p>
                <p> Id: <?php  echo $funcionario->id_funcionario ?> </p>
                <p> Pessoal do frontend vejam se é interessante colocar os dados do registro acima um na frente do outro, para ocupar menos espaço.<br>
                Esta é uma mensagem do programador do passado Fagner ^^. <br>
                Reparem também que a situação do funcionário pode ser 0 ou 1, sendo 0 inativo e 1 ativo<br>
                então criem um boxmodel com uma tabela para funcionarios ativos e outra para funcionarios inativos lado a lado ok? (Apenas sugestão) <br>
                QQ dúvida me perguntem</p>
            
                <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
                <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$funcionario->id_funcionario); ?>
                    <button type="submit" name="txt-visualizar" value=""> Visualizar Registro </button>
                <?php echo form_close();?>

                <!-- Para fazer a exclusão logica, a situação do usuário é mudada para o valor zero '0' -->
                <?php if ($funcionario->situacao == 1) {?>
                    <?php echo form_open('excuirL'); ?>
                        <input  type="hidden" name="txt-id" value="<?php echo $funcionario->id_funcionario ?>"/>
                        <input  type="hidden" name="txt-situacao" value="0"/>
                        <button type="submit"> Excluir Usuário do Sistema </button>
                    <?php echo form_close();?>
                <?php
                }?>

                <!-- Para fazer a inclusao logica, a situação do usuário é mudada para o valor um '1' -->
                <?php if ($funcionario->situacao == 0) {?>
                    <?php echo form_open('incluirL'); ?>
                        <input  type="hidden" name="txt-id" value="<?php echo $funcionario->id_funcionario ?>"/>
                        <input  type="hidden" name="txt-situacao" value="1"/>
                        <button type="submit"> Reinserir Usuário No sistema </button>
                    <?php echo form_close();?>
                <?php
                }?>
            </fieldset>
        <?php }?>
    </fieldset>

    <!-- Colocar um código c link para gerenciar usuários. CRUD -->
<?php }?>

<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 2) { ?>
    <p>Este usuário logado é um Supervisor</p>
    <a type="button" href= "<?php echo base_url('perfil') ?>" >Editar Perfil</a>
    
<?php }?>

<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 3) { ?>
    <p>Este usuário logado é um Auxiliar</p>
    <a type="button" href= "<?php echo base_url('perfil') ?>" >Editar Perfil</a>

<?php }?>