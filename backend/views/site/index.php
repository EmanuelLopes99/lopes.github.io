<?php

/* @var $this yii\web\View */
use \yii\widgets\LinkPager;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
     <!-- Visão geral do site -->
      <div class="panel panel-default">
           <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Visão Geral Do Site</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                         <?php print_r($contarUsuario)?>
                    </h2>
                    <h4>Usuarios</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                         <?php print_r($contarPost) ?>
                    </h2>
                    <h4>Posts</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt " aria-hidden="true"></span> 
                        <?php print_r($contarComentarios)?>
                    </h2>
                    <h4>Comentarios</h4>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- Ultimos Postagem -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Ultimos Postagens</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                      <thead>
                          <tr>
                            <td>Titulo</td>
                            <td>Conteudo</td>
                            <td>Capa</td>
                            <td>Anexo</td>
                          </tr> 
                      </thead>
                      <tbody>
                        <?php foreach ($mostrarPost as $key => $post): ?>
                            <tr>
                                <td><?php echo $post['title'] ?></td>
                                <td><?php echo $post['content'] ?></td>
                                <td><?php echo $post['capa'] ?></td>
                                <td><?php echo $post['imagemPost'] ?></td>
                              </tr>
                          <?php endforeach ?>
                      </tbody>
                </table>
              </div>
              <div class="panel-footer btn btn-block bb"><a href="index.php?r=post/index">Ver Todos</a></div>
            </div>

            <!--Mostar comentario -->
            <div class="col-md-13">
                  <div class="panel panel-default">
                       <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Ultimos Comentarios</h3>
                        </div>

                        <div class="panel-body">
                             <table class="table table-striped table-hover">
                                  <thead>
                                      <tr>
                                        <td><span class="glyphicon glyphicon-user"> Usuarios</span></td>
                                         <td><span class="glyphicon glyphicon-pencil"> Post</span></td>
                                        <td><span class="glyphicon glyphicon-list-alt"> Comentarios</span></td>
                                        </tr> 
                                  </thead>
                                  <tbody>
                                    <?php foreach ($mostrarComentario as $key => $coment): ?>
                                        <tr>
                                            <td><?php echo $coment['nome'] ?></td>
                                            <td><?php echo $coment['title'] ?></td>
                                            <td><?php echo $coment['coment'] ?></td>
                                          </tr>
                                  <?php endforeach ?>
                                  </tbody>
                            </table>
                        </div>
                         <div class="panel-footer btn btn-block bb"><a href="index.php?r=comentario/index">Ver Todos</a></div>
                    </div>
            </div>
</div>

