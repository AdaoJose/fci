<?php
$dominio = 'http://modig.com.br/weblive';
?>
<?php

					
				
					
							echo'<!-- Navigation -->';
							echo' <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">';
							echo'<!-- Brand and toggle get grouped for better mobile display -->';
							echo'
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="index.html">LiveDoos - Web</a>
								</div>';
							echo'<!-- Top Menu Items -->
								<ul class="nav navbar-right top-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
										<ul class="dropdown-menu message-dropdown">
											<li class="message-preview">
												<a href="#">
													<div class="media">
														<span class="pull-left">
															<img class="media-object" src="http://placehold.it/50x50" alt="">
														</span>
														<div class="media-body">
															<h5 class="media-heading"><strong>John Smith</strong>
															</h5>
															<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
															<p>Lorem ipsum dolor sit amet, consectetur...</p>
														</div>
													</div>
												</a>
											</li>';
								   
									   
											echo'<li class="message-footer">
												<a href="#">Read All New Messages</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
										<ul class="dropdown-menu alert-dropdown">
											<li>
												<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
											</li>
										 
											<li class="divider"></li>
											<li>
												<a href="#">Ver todos</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>'.$login.'<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li>
												<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="'.$dominio.'/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
											</li>
										</ul>
									</li>
								</ul>';
								
								echo'<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->';
								echo'<div class="collapse navbar-collapse navbar-ex1-collapse">';
								echo'<ul class="nav navbar-nav side-nav">';
								echo'<li class="active">';
								echo'<a href="'.$dominio.'/index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>';
								echo'</li>';
								echo'<li>
									<a href="'.$dominio.'/categoria/index.php"><i class="fa fa-fw fa-table"></i>Categoria</a>
									</li>';
									echo'<li>
										<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Templates <i class="fa fa-fw fa-caret-down"></i></a>
										<ul id="demo" class="collapse">
										<li>
										<a href="'.$dominio.'/videos/novo_video.php">Novo template</a>
										</li>
										<li>
										<a href="'.$dominio.'/videos/index.php">Administrar galeria</a>
										</li>
										</ul>
										</li>';
										echo'<li>
										<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
										<ul id="demo" class="collapse">
										<li>
										<a href="'.$dominio.'/usuarios/novo_usuario.php">Novo template</a>
										</li>
										<li>
										<a href="'.$dominio.'/usuarios/index.php">Administrar usuarios</a>
										</li>
										</ul>
										</li>';
										echo'<li>
										<a href="javascript:;" data-toggle="collapse" data-target="#audio"><i class="fa fa-fw fa-arrows-v"></i> &Aacute;udio <i class="fa fa-fw fa-caret-down"></i></a>
										<ul id="audio" class="collapse">
										<li>
										<a href="'.$dominio.'/audio/novo-arquivo.php">Novo Audio</a>
										</li>
										<li>
										<a href="'.$dominio.'/audio/index.php">Administrar galeria</a>
										</li>
										</ul>
										</li>';
										echo'<li>
										<a href="javascript:;" data-toggle="collapse" data-target="#vitrine"><i class="fa fa-fw fa-arrows-v"></i> Vitrine Profissional <i class="fa fa-fw fa-caret-down"></i></a>
										<ul id="vitrine" class="collapse">
										<li>
										<a href="'.$dominio.'/vitrine/novo-profissional.php">Novo Profissional</a>
										</li>
										<li>
										<a href="'.$dominio.'/vitrine/index.php">Administrar Profissionais</a>
										</li>
										<li>
										<a href="'.$dominio.'/vitrine/artigos.php">Administrar Artigos</a>
										</li>
										</ul>
										</li>';
									echo'<li>
										<a href="javascript:;" data-toggle="collapse" data-target="#video"><i class="fa fa-fw fa-arrows-v"></i> Not&iacute;cias<i class="fa fa-fw fa-caret-down"></i></a>
										<ul id="video" class="collapse">
											<li>
												<a href="'.$dominio.'/blog/novo.php">Nova noticia</a>
											</li>
											<li>
												<a href="'.$dominio.'/blog/index.php">Administrar</a>
											</li>
											<li>
												<a href="'.$dominio.'/blog/galeria-artigo.php">Galeria de fotos</a>
											</li>
										</ul>
										</li>';
										echo'<li>
										<a href="javascript:;" data-toggle="collapse" data-target="#ins"><i class="fa fa-fw fa-arrows-v"></i> Institucional<i class="fa fa-fw fa-caret-down"></i></a>
										<ul id="ins" class="collapse">
											<li>
												<a href="'.$dominio.'/contato/info.php">Contato</a>
											</li>
											<li>
												<a href="'.$dominio.'/contato/quem-somos.php?cat=1">Quem somos</a>
											</li>
											
										</ul>
										</li>';
									echo'<li>
										<a href="javascript:;" data-toggle="collapse" data-target="#matogrosso"><i class="fa fa-fw fa-arrows-v"></i>Mato Grosso<i class="fa fa-fw fa-caret-down"></i></a>
										<ul id="matogrosso" class="collapse">
										<li>
										<a href="'.$dominio.'/institucional/novo.php">Novo</a>
										</li>';
										?>
										
										
										<?php
                            
									echo'</ul>
										</li>';
									echo'<li>';
									echo"<a href=\"$dominio/publicidade/index.php\"><i class=\"fa fa-fw fa-dashboard\"></i>Publicidade</a>";
									echo'</li>
										
										</ul>
										</div>
										<!-- /.navbar-collapse -->
										</nav>';
										
								
				
						
?>

       
            
            
            
            
            
                
                    
                        
                    
                    
                    
                      
                 
                    
                    
                    
