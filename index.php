<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Tend</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<!-- ícones -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> 

    <style type="text/css">
  // Card      
        h5 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
}

.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

// Fim de card

    </style>
</head>
	
<body>
<!-- Inicio de nav -->
	
<body id="page-top" name="page-top" class="active">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!-- Navigation -->
    	<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="nav-btn btn-dark btn-lg accordion-toggle pull-left" title="Follow Us" role="tab" id="social-collapse" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></a>
					<a id="menu-toggle" href="#" class="nav-btn btn-dark btn-lg toggle">
						<i class="fa fa-bars" style="color:#fff;"></i>
					</a>
					<a id="to-top" class="btn btn-lg btn-inverse" href="#top">
						<span class="sr-only">Toggle to Top Navigation</span>
						<i class="fa fa-chevron-up"></i>
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse js-navbar-collapse">
                		<ul class="nav navbar-nav navbar-left">
                			<a class="navbar-brand" href="index.html">
                						<img height="20" width="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAB+0lEQVR4AcyYg5LkUBhG+1X2PdZGaW3btm3btm3bHttWrPomd1r/2Jn/VJ02TpxcH4CQ/dsuazWgzbIdrm9dZVd4pBz4zx2igTaFHrhvjneVXNHCSqIlFEjiwMyyyOBilRgGSqLNF1jnwNQdIvAt48C3IlBmHCiLQHC2zoHDu6zG1iXn6+y62ScxY9AODO6w0pvAqf23oSE4joOfH6OxfMoRnoGUm+de8wykbFt6wZtA07QwtNOqKh3ZbS3Wzz2F+1c/QJY0UCJ/J3kXWJfv7VhxCRRV1jGw7XI+gcO7rEFFRvdYxydwcPsVsC0bQdKScngt4iUTD4Fy/8p7PoHzRu1DclwmgmiqgUXjD3oTKHbAt869qdJ7l98jNTEblPTkXMwetpvnftA0LLHb4X8kiY9Kx6Q+W7wJtG0HR7fdrtYz+x7iya0vkEtUULIzCjC21wY+W/GYXusRH5kGytWTLxgEEhePPwhKYb7EK3BQuxWwTBuUkd3X8goUn6fMHLyTT+DCsQdAEXNzSMeVPAJHdF2DmH8poCREp3uwm7HsGq9J9q69iuunX6EgrwQVObjpBt8z6rdPfvE8kiiyhsvHnomrQx6BxYUyYiNS8f75H1w4/ISepDZLoDhNJ9cdNUquhRsv+6EP9oNH7Iff2A9g8h8CLt1gH0Qf9NMQAFnO60BJFQe0AAAAAElFTkSuQmCC" class="img-responsive pull-left" alt="Responsive image">
                					 TendeTudo</a>
                			<li class="dropdown mega-dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Livros <span class="caret"></span></a>				
                				<ul class="dropdown-menu mega-dropdown-menu">
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Destaques</li>                            
                                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                    <h4><small>Extraordinário</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">R$ 39,99 </button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Adicionar ao carrinho</button>       
                                                </div><!-- End Item -->
                                               
												  <div class="item">
                                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                    <h4><small>A culpa é das estrelas</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">R$ 27,99 </button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Adicionar ao carrinho </button>        
                                                </div><!-- End Item -->
                                                
												  <div class="item">
                                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                    <h4><small>Ansiedade</small></h4>                                        
                                                    <button class="btn btn-primary" type="button"> R$ 19,99 </button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Adicionar ao carrinho</button>      
                                                </div><!-- End Item -->                                
                                              </div><!-- End Carousel Inner -->
                                              <!-- Controls -->
                                              <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Anterior</span>
                                              </a>
                                              <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Próximo</span>
                                              </a>
                                            </div><!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="#">Ver mais coleção <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Categorias</li>
                							<li><a href="#">Autoajuda</a></li>
                                            <li><a href="#">Literatura brasileira</a></li>
                                            <li><a href="#">Literatura estrangeira</a></li>
                							<li><a href="#"> Educacionais </a></li>
                							<li class="divider"></li>
                							<li class="dropdown-header">Procura rápida</li>
                                            <li><a href="#">Lançamentos</a></li>
                							<li><a href="#">Mais vendidos</a></li>
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Didáticos</li>
                							<li><a href="#">Administração</a></li>
                							<li><a href="#">Direito</a></li>
                							<li><a href="#">Filosofia</a></li>                            
                							<li><a href="#">Psicologia</a></li>							
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Outros</li>
                                            <li><a href="#">Biografias</a></li>
                							<li><a href="#">Infantil</a></li>
                							<li><a href="#">Religião</a></li>
                							<li><a href="#">Teen</a></li>                         
                						</ul>
                					</li>
                				</ul>				
                			</li>
                            <li class="dropdown mega-dropdown">
                    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Eletronicos <span class="caret"></span></a>				
                				<ul class="dropdown-menu mega-dropdown-menu">
                					<li class="col-sm-3">
                    					<ul>
                							<li class="dropdown-header">Categorias</li>
                							<li><a href="#">Eletrodomésticos</a></li>
                                            <li><a href="#">Tv e audio</a></li>
                                            <li><a href="#">Ar-condicionado e ventilador</a></li>
                							<li><a href="#">Eletroportáteis</a></li>
                							
											<li class="divider"></li>
                							<li class="dropdown-header">Procura rápida</li>
                                            <li><a href="#">Lançamentos</a></li>
                							<li><a href="#">Mais vendidos</a></li>
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Popular</li>
                							<li><a href="#">Celular</a></li>
                							<li><a href="#">Aparelhos fixos</a></li>
                							<li><a href="#">Acessórios</a></li>                            
                							<li><a href="#">Games</a></li>							
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Informárica</li>
                                            <li><a href="#">Notebook</a></li>
                							<li><a href="#">Acessórios notebook</a></li>
                							<li><a href="#">Tablet/Ipad</a></li>
                							<li><a href="#">Acessórios tablet</a></li>                         
                						</ul>
                					</li>
                                    <li class="col-sm-3">
                    					<ul>
                							<li class="dropdown-header">Destaques</li>                            
                                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                    <h4><small>Notebook Dell </small></h4>                                        
                                                    <button class="btn btn-primary" type="button">R$ 2999,99 </button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Adicionar ao carrinho</button>       
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                    <h4><small>Samsung s7</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">R$ 1999,99 </button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Adicionar ao carrinho</button>        
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                    <h4><small>Micro-ondas Consul CM020</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">R$ 349,99 </button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Adicionar ao carrinho</button>      
                                                </div><!-- End Item -->                                
                                              </div><!-- End Carousel Inner -->
                                              <!-- Controls -->
                                              <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Anterior</span>
                                              </a>
                                              <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Próximo</span>
                                              </a>
                                            </div><!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="#">Ver todos <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                						</ul>
                					</li>
                				</ul>				
                			</li>
                            
							<li><a href="#">Quem somos</a></li>
                		</ul>
                        
					<ul class="nav navbar-nav navbar-right" style="padding-right: 5% ">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a class="nav-link" href="#modalLogin" data-toggle="modal" data-target="#modalLogin">Entrar</a></li>
							  
							 <!-- Modal -->
									<div class="modal" id="modalLogin">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<h5 class="modal-title">Login</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">×</span>
											</button>
										  </div>
										  <div class="modal-body">
										   <div class="form-group">
												 <label for="Email1">Email</label>
												 <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
										  </div>
											<div class="form-group">
												<label for="Password1">Senha</label>
												<input type="password" class="form-control" id="Password1" placeholder="Digite sua senha">
											</div>
										  </div>
										  <div class="modal-footer">
											<button type="button" class="btn btn-primary">Logar</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
										  </div>
										</div>
									  </div>
									</div>

							<!-- fim de Modal -->
							  
                            <li><a href="cadastro.html">Criar cadastro</a></li>
                            
                            <li class="divider"></li>
							<li><a href="#">Minha conta</a></li>
                            <li><a href="novoproduto.php">Área administrador</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Carrinho</a></li>
                      </ul>
                	</div><!-- /.nav-collapse -->
			</div><!-- /.container-fluid -->
			
			
		</nav> <!-- Fim de nav-->
	
		<nav id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<a id="menu-close" href="#" class="btn btn-danger pull-right hidden-md hidden-lg toggle"><i class="fa fa-times"></i></a>
				<li class="sidebar-brand">
					<a href="#top">Home</a>
				</li>
				<li>
					<a href="/" title="Go to Top">Quem somos</a>
				</li>
				<li>
					<a href="/about" title="Go to About Us section">Categorias</a>
				</li>
				<li>
					<a href="/resume" title="Navigate to Jonathan Adcox IT Resume">Carrinho</a>
				</li>
				<li>
					<a href="/portfolio" title="Navigate to 'Our Services' section">Ajuda</a>
				</li>
				<!-- Future Development
				<li>
					<a href="#portfolio">Portfolio</a>
				</li> -->
				<li>
					<a href="/blog" title="Our Blog">Blog</a>
				</li>
				<li>
					<a data-toggle="modal" data-href="#loginModal" data-target="#loginModal" style="cursor:pointer;"> Hosting</a>
				</li>
			</ul>
		</nav>
		
		<aside id="accordion" class="social text-vertical-center">
			<div class="accordion-social">
				<ul class="panel-collapse collapse in nav nav-stacked" role="tabpanel" aria-labelledby="social-collapse" id="collapseOne">
					<li><a href="https://www.facebook.com/soldierupdesigns" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/soldierupdesign" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
					<li><a href="https://www.plus.google.com/+soldierupdesigns" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
				</ul>
			</div>
		</aside>
        
		<div class="masthead">
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">


                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="1"></li>
                    <li data-target="#bs-carousel" data-slide-to="2"></li>
                </ol>
      
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-1"></div>
                            <div class="hero">
                                <hgroup>
                                    <h1>We are creative</h1>        
                                    <h3>Get start your next awesome project</h3>
                                </hgroup>
                            <button class="btn btn-hero btn-lg" role="button">See all features</button>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-2"></div>
                            <div class="hero">        
                                <hgroup>
                                    <h1>We are smart</h1>        
                                    <h3>Get start your next awesome project</h3>
                                </hgroup>       
                                <button class="btn btn-hero btn-lg" role="button">See all features</button>
                            </div>
                        </div>
                        <div class="item slides">
                            <div class="slide-3"></div>
                                <div class="hero">        
                                    <hgroup>
                                        <h1>We are amazing</h1>        
                                        <h3>Get start your next awesome project</h3>
                                    </hgroup>
                                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
                                </div>
                            </div>
                        </div> 
                    </div>
		        </div>
            </div>
        </div>
	
	
	<!-- Início de variedade -->
    <div class="container" style="padding: 10%">
        <div class="row mb-5">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-primary ">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <blockquote class="card-blockquote p-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                        <footer>
                            <small>
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Tawshif Ahsan Khan</h4>
                        <div class="meta card-text">
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm">Follow</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block">
                        <figure class="profile profile-inline">
                            <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm">Follow</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block">
                        <figure class="profile profile-inline">
                            <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm">Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	 <!-- Fim de variedade -->
	
	
	
	<!-- Início footer -->	  
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>TendeTudo</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer">
                            
							<a href="#"><i class="fab fa-instagram fa-3x" aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-3x" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Navegação </h2>
                        <ul>
                            <li><a href="#">Minha Conta</a></li>
                            <li><a href="#">Meus Pedidos</a></li>
                            <li><a href="#">Lista de Desejos</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <li><a href="#">Celulares e Games</a></li>
                            <li><a href="#">Eletronicos</a></li>
                            <li><a href="#">Livros</a></li>
                            <li><a href="#">Informática</a></li>
                            <li><a href="#">Roupas</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Digite seu e-mail">
                                <input type="submit" value="enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2018 TendeTudo Treinamentos. <a href="http://www.hcode.com.br" target="_blank">tendetudo.com.br</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Fim do footer -->
    
	
	
</body>

<!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>

<script type="text/javascript">

$(document).ready(function()
{
    /* smooth scrolling for scroll to top */
    $('#to-top').bind('click', function()
    {
        $('body,html').animate({
            scrollTop: 0}, 
            2500);
    });

    //Easing Scroll replace Anchor name in URL and Offset Position
    $(function(){
        $('a[href*=#]:not([href=#])').click(function()
        {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top -420
                    }, 3500, 'easeOutBounce');
                    return false;
                }
            }
        });
    });
});
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});

/*!
    * Sidebar.js - Bootstrap Sidebar Hover Event toggle attribute
    * onHover
    
    * Version: v2.5.8

    * LGPL v3 LICENSE INFO
    * This file is part of a Sidebar Bootstrap Element. Copyright
    * 2015 Soldier-up Designs - Website Development Company.

    * sidebar.js is a free software: you can redistribute it and/or modify
    * it under the terms of the GNU Lesser General Public License as published by
    * the Free Software Foundation, either version 3 of the License, or
    * (at your option) any later version.

    * sidebar.js is distributed as a free tool that can help you
    * add a few extra dynamics to your Web Design code. However,
    * this code and any associated code "IS" "WITHOUT ANY WARRANTY";
    * without even the implied warranty of "MERCHANTABILITY" or
    * "FITNESS FOR A PARTICULAR PURPOSE".  See the GNU Lesser
    * General Public License for more details.
*/

/*! 
    ======================= Notes ===============================
    * Used to close Sidebar on jQuery Element "Mouseleave" Event 
    * This was a pain in the Ass to create 
    * and to not break the rest of the jQuery 
    * and Bootstrap API Script ()Did that once or twice in
    - Development)
    ========== END Crude Vocabulary (...and notes) ==============
*/

/*! 
    ================= ^ Ranting Stops Here ^ ====================
    ==================== Code Starts Below ======================
*/

$(document).ready(function()
{
    
    // Closes the sidebar menu on menu-close button click event
    $("#menu-close").click(function(e)                          //declare the element event ...'(e)' = event (shorthand)
    {
                                                                // - will not work otherwise")
        $("#sidebar-wrapper").toggleClass("active");            //instead on click event toggle active CSS element
        e.preventDefault();                                     //prevent the default action ("Do not remove as the code
        
        /*!
        ======================= Notes ===============================
        * see: .sidebar-wrapper.active in: style.css
        ==================== END Notes ==============================
        */
    });                                                         //Close 'function()'

    // Open the Sidebar-wrapper on Hover
    $("#menu-toggle").hover(function(e)                         //declare the element event ...'(e)' = event (shorthand)
    {
        $("#sidebar-wrapper").toggleClass("active",true);       //instead on click event toggle active CSS element
        e.preventDefault();                                     //prevent the default action ("Do not remove as the code
    });

    $("#menu-toggle").bind('click',function(e)                  //declare the element event ...'(e)' = event (shorthand)
    {
        $("#sidebar-wrapper").toggleClass("active",true);       //instead on click event toggle active CSS element
        e.preventDefault();                                     //prevent the default action ("Do not remove as the code
    });                                                         //Close 'function()'

    $('#sidebar-wrapper').mouseleave(function(e)                //declare the jQuery: mouseleave() event 
                                                                // - see: ('//api.jquery.com/mouseleave/' for details)
    {
        /*! .toggleClass( className, state ) */
        $('#sidebar-wrapper').toggleClass('active',false);      /* toggleClass: Add or remove one or more classes from each element
                                                                in the set of matched elements, depending on either the class's
                                                                presence or the value of the state argument */
        e.stopPropagation();                                    //Prevents the event from bubbling up the DOM tree
                                                                // - see: ('//api.jquery.com/event.stopPropagation/' for details)
                                                                
        e.preventDefault();                                     // Prevent the default action of the event will not be triggered
                                                                // - see: ('//api.jquery.com/event.preventDefault/' for details)
    });
});
// Closes the sidebar menu on menu-close button click event
$("#menu-close").click(function(e)                          //declare the element event ...'(e)' = event (shorthand)
{
                                                            // - will not work otherwise")
    $("#sidebar-wrapper").toggleClass("active");            //instead on click event toggle active CSS element
    e.preventDefault();                                     //prevent the default action ("Do not remove as the code
    
    /*!
    ======================= Notes ===============================
    * see: .sidebar-wrapper.active in: style.css
    ==================== END Notes ==============================
    */
});                                                         //Close 'function()'


</script>
