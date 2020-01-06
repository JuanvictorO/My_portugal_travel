<div class="row">
   <div class="col-md-12">
      <div class="table-data__tool">
         <div class="table-data__tool-left">
            <h1 class="title-1 pt-0 "><?= $titulo_conteudo?></h1>
         </div>
         <div class="table-data__tool-right">
            <button data-toggle="modal" data-target="#adicionarUsuario" class="au-btn au-btn-icon au-btn--blue au-btn--small">
            <i class="fas fa-user-plus"></i>Adicionar usuário</button>
         </div>
      </div>
      <?= getMsg('msgSuperuserUsuarios'); ?>
      <!-- DATA TABLE-->
      <div class="table-responsive m-b-40">
         <table class="table table-hover ">
            <thead class="thead-dark">
               <tr>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Tipo</th>
                  <th class="text-center">Situação</th>
                  <th class="text-center">Status</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  foreach ($usuarios as $usuario) {
                  
                  $user_groups = $this->ion_auth->get_users_groups($usuario->id)->row();
                  
                  if ($usuario->active == 1) {
                     $ativo_inativo = '<td class="text-center"><span class="btn btn-success btn-sm disabled">ATIVO</span></td>';
                  }else {
                      $ativo_inativo = '<td class="text-center"><span class="btn btn-danger btn-sm disabled">INATIVO</span></td>';
                  }
                   
                  echo '<tr>
                           <td>'.$usuario->username.'</td>
                           <td>'.$usuario->email.'</td>
                           <td>'.$user_groups->description.'</td>
                           '.$ativo_inativo.'
                           ';
                           
                  ?>
               <td class="text-center">
                  <div class="col table-data-feature">
                     <span data-toggle="tooltip" title="Editar">
                     <button type="button" class="item" data-toggle="modal" data-target="#editarUsuario<?= $usuario->id ?>">
                     <i class="far fa-edit"></i>
                     </button>
                     </span>
                     <span class="px-2" data-toggle="tooltip" title="Deletar">
                     <button class="item"  data-toggle="modal" data-target="#deletarUsuario<?= $usuario->id ?>">
                     <i class="fas fa-trash-alt"></i>
                     </button>
                     </span>
                     <span  data-toggle="tooltip" title="Mais informações">
                     <button class="item"  data-toggle="modal" data-target="#detalhesUsuarios<?= $usuario->id ?>">
                     <i class="fas fa-info"></i>
                     </button>
                     </span>
                  </div>
               </td>
               <?php 
                  echo "</tr>"; 
                  ?>
               <!-- Modal de excluir -->
               <div class="modal fade" id="deletarUsuario<?= $usuario->id ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="title-2">Confirmar exclusão</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                              <strong>Atenção!</strong> Esta ação não pode ser desfeita.    
                           </div>
                           <form action="<?= base_url('superuser/deletarUsuario/').$usuario->id?>" method="post" >
                              <div class="form-group">
                                 <label class="control-label mb-1">Usuário</label>
                                 <input disabled type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $usuario->username ?>">
                              </div>
                              <div class="form-group">
                                 <label class="control-label mb-1">E-mail</label>
                                 <input disabled type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $usuario->email ?>">
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                 <input type="submit" value="Excluir" class="btn btn-danger" name="submit">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Modal editar usuário -->
               <div class="modal fade" id="editarUsuario<?= $usuario->id ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="title-2">Editar usuário</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form action="<?= base_url('superuser/editarUsuario') ?>" method="post" >
                              <div class="form-group">
                                 <label class="control-label mb-1">Usuário</label>
                                 <input maxlength="100" name="nome" type="text" class="form-control" value="<?= $usuario->username ?>">
                              </div>
                              <div class="form-group">
                                 <label class="control-label mb-1">E-mail</label>
                                 <input maxlength="255" name="email" type="text" class="form-control" value="<?= $usuario->email ?>">
                              </div>
                              <div class="form-group">
                                 <label class="control-label mb-1">Senha</label>
                                 <input name="senha" type="password" class="form-control" value="<?= $usuario->password?>" >
                                 <small>ATENÇÃO: É necessário uma senha de no mínimo 8 caracteres</small>
                              </div>
                              <div class="row">
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label class="control-label mb-1">Status</label>
                                       <div class="input-group">
                                          <select name="status" id="select" class="form-control">
                                             <option <?php if($usuario->active == 0) echo "selected"; ?> value="0">Inativo</option>
                                             <option <?php if($usuario->active == 1) echo "selected"; ?> value="1">Ativo</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <label class="control-label mb-1">Tipo</label>
                                    <div class="input-group">
                                       <select disabled="" name="tipo" id="select" class="form-control">
                                          <option <?php if($user_groups->id == 1) echo "selected"; ?> value="1">Admin</option>
                                          <option <?php if($user_groups->id == 2) echo "selected"; ?> value="2">Editor</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <input name="id" type="hidden" class="form-control" value="<?= $usuario->id ?>">
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                 <input type="submit" name="enviar" value="Salvar" class="btn btn-info">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- DETALHES USUARIOS -->
               <div class="modal fade" id="detalhesUsuarios<?= $usuario->id ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="title-2">Detalhes usuário</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form action="" method="post">
                              <div class="form-group">
                                 <label class="control-label mb-1">Nome</label>
                                 <input disabled type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $usuario->username ?>">
                              </div>
                              <div class="form-group">
                                 <label class="control-label mb-1">E-mail</label>
                                 <input disabled type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $usuario->email ?>">
                              </div>
                              <div class="row">
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label class="control-label mb-1">Tipo</label>
                                       <input disabled type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $user_groups->description ?>">
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <label class="control-label mb-1">Situação</label>
                                    <div class="input-group">
                                       <select disabled name="select" id="select" class="form-control">
                                          <option <?php if($usuario->active == 0) echo "selected"; ?> value="0">Inativo</option>
                                          <option <?php if($usuario->active == 1) echo "selected"; ?> value="1">Ativo</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label mb-1">Data de cadastro</label>
                                 <input disabled type="text" class="form-control" value="<?= converterUnix($usuario->created_on)?>">
                              </div>
                              <div class="form-group">
                                 <label class="control-label mb-1">Ultimo acesso</label>
                                 <input disabled type="text" class="form-control" value="<?php if (converterUnix($usuario->last_login)== NULL) {echo "O usuário não fez o primeiro acesso";} else { echo converterUnix($usuario->last_login);   } ?>">
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } //Fecha foreach  ?>
            </tbody>
         </table>
      </div>
      <!-- END DATA TABLE  -->
   </div>
</div>
<!-- ADICIONAR -->
<div class="modal fade" id="adicionarUsuario" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="title-2" id="exampleModalLabel">Adicionar usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form class="form-verifica" action="<?= base_url('superuser/adicionarUsuario') ?>" method="post">
               <div class="form-group">
                  <label class="control-label mb-1">*Nome completo</label>
                  <input maxlength="100" required name="nome" type="text" class="form-control nome-usuario" value="">
               </div>
               <div class="form-group">
                  <label class="control-label mb-1">*E-mail</label>
                  <input maxlength="255" type="email" name="email" class="form-control email-usuario" required value="">
               </div>
               <div class="form-group">
                  <label class="control-label mb-1">*Senha</label>
                  <input id="senha_add" name="senha" type="password" class="input-senha form-control senha-usuario" required>
                  <small>ATENÇÃO: É necessário uma senha de no mínimo 8 caracteres</small>
               </div>
               <div class="row">
                  <div class="col-6">
                     <label class="control-label mb-1">Tipo</label>
                     <div class="input-group">
                        <select name="group" id="group" class="form-control">
                           <option value="1">Administrador</option>
                           <option selected="selected" value="2">Editor</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-6">
                     <label class="control-label mb-1">Status</label>
                     <div class="input-group">
                        <select name="active" id="active" class="form-control">
                           <option selected="selected" value="1">Ativo</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="modal-footer mt-4 pr-0 text-right">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <input type="submit" value="Adicionar" class="btn btn-success">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>