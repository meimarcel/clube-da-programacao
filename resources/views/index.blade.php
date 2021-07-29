@extends('layouts.app-guest')
@section('content')
<!--- Image Slider -->
<header id="slides">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">	
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item img1 active">
				<div class="carousel-caption">
					<img class="logo" src="img/CDP-LOGO.png">
					<h1 class="display-2 logo-home">Clube da Programacao</h1>
					<h3>Espalhando Conhecimento</h3>
					<a class="a-light js-scroll-trigger" href="#sobre"><button type="button" class="btn btn-outline-light btn-lg">Sobre</button></a>
					<a href="{{ url('/#') }}"><button type="button" class="btn btn-primary btn-lg">Revista CDP</button></a>
				</div>
			</div>
			<div class="carousel-item img2">
				<div class="carousel-caption sem-img">
					<h1 class="display-2">Apaixonados por Tecnologia</h1>
					<h3>Sempre aprendendo coisas novas</h3>
				
				</div>
			</div>
			<div class="carousel-item img3">
				<div class="carousel-caption sem-img">
					<h1 class="display-2">Amantes de Café</h1>
					<h3>O combustível que nos sustenta</h3>		
				</div>
			</div>
			
		</div>
	</div>

	<!--- Jumbotron -->

	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<p class="lead">
					O Clube da Programação oferece aos alunos de todas as instituições de ensino um 
					portal para compartilhar conhecimento, seja por meio de artigos científicos ou por meio de textos
					direcionados, esse portal nós chamamos de Revista CDP, um projeto nascido na UESPI mas sem fronteiras
					acadêmicas.
				</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="{{ url('/#') }}"><button type="button" class="btn btn-outline-secondary btn-lg">Revista CDP</button></a>
			</div>
		</div>
	</div>

</header>

<section class="section-page" id="sobre">
<!--- Welcome Section -->
<div class="container">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="site-heading text-center text-white d-lg-block">
				<span class="site-heading-upper">Clube da Programação</span>
				<span class="site-heading-lower text-primary mb-3"></span>
				<hr class="line" />
			</h1>
			<p class="lead">O Clube da Programação é um projeto de extensão da Universidade Estadual do Piauí - UESPI, 
			cujo objetivo desde o dia de sua idealização é o de fortalecer os laços entre os alunos e professores do Curso de Ciências
			da Computação, bem como promover eventos, cursos e workshops com os mais diversos temas e propósitos.
		</p>
		</div>
	</div>
</div>


<!--- Three Column Section -->
<div class="container ">
	<div class="row text-center ">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-laptop-code"></i>
			<h3>PROGRAMAÇÃO</h3>
			<p>Um dos principais objetivos do Clube é o fortalecimento do conhecimento
				técnico e básico de programação, isso é feito através das competições de programação,
				sendo a Maratona de Computação a maior delas, aonde procuramos treinar e incentivar
				os alunos a participar e desenvolver as suas Skills.
			</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-microscope"></i>
			<h3>PESQUISA</h3>
			<p>O Clube também promove e incentiva o desenvolvimento de pesquisa por parte dos alunos,
				bem como encontros com pesquisadores de outras áreas de conhecimento para a efetiva participação de nossos
				alunos em outros campos de pesquisa, fortalecendo o vínculo acadêmico na universidade e criando networks 
				válidos para o futuro.
			</p>
		</div>
		<div class="col-sm-12 col-md-4">
			<i class="fas fa-people-arrows"></i>
			<h3>COOPERAÇÃO</h3>
			<p>O Clube surgiu na intenção da cooperação entre os alunos e professores para troca de conhecimento e 
				experiência, uma aproximação maior entre a convivência acadêmica e o mercado de trabalho, e desmistificar
				a teoria de que na computação o que se aprende e vê nas universidades não se aplica ao mercado.
		</div>
	</div>
</div>

<!--- Two Column Section -->
<div class="container ">
	<div class="row">
		<div class="col-md-12 col-lg-6">
			<h2>Venha crescer conosco...</h2>
			<p>O Clube promove constantemente encontros e eventos, a inscrição para esses e outros
				eventos poderá ser efetuada aqui no nosso site, ou através de outras plataformas
				previamente divulgadas.
			</p>
			<!-- <p>Para integrar a equipe é necessário apenas entrar com um pedido de participação, clicando no botão abaixo
				você irá para o formulário, preencha ele com os seus dados e informe o motivo pelo qual deseja se juntar a nós

			</p>
			<br>
			<a href="/manutencao" class="btn btn-primary">Junte-se a nós</a> -->
		</div>
		<div class="col-lg-6">
			<img src="img/dev-team.jpg" class="img-fluid">
		</div>
	</div>
</div>

</section>

<section class="section-page" id="eventos">
	<!-- eventos-->
		<div class="container">
			<h1 class="site-heading text-center text-white  d-lg-block">
				<span class="site-heading-upper">Eventos</span>
				<span class="site-heading-lower text-primary mb-3">Alguns eventos realizados</span>
				<hr class="line" />
			</h1>
		</div>
	
		<section class="page-section">
			<div class="container">
			<div class="product-item">
				<div class="product-item-title d-flex">
				<div class="bg-faded p-5 d-flex ml-auto rounded">
					<h2 class="section-heading mb-0">
					<span class="section-heading-upper">Meetups Sobre Tecnologia</span>
					<span class="section-heading-lower">Coffee and Code</span>
					</h2>
				</div>
				</div>
				<img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/coffee_and_code.jpg" alt="">
				<div class="product-item-description d-flex mr-auto">
				<div class="bg-faded p-5 rounded">
					<p class="mb-0">O Coffee and Code foi um evento idealizado para ser uma conversa simples e direta entre alunos, professores, pesquisadores e profissionais das áreas de TI, sempre trazendo convidados com muito entusiasmo e compartilhando experiências e conhecimento.</p>
				</div>
				</div>
			</div>
			</div>
		</section>
	
		<section class="page-section">
			<div class="container">
			<div class="product-item">
				<div class="product-item-title d-flex">
				<div class="bg-faded p-5 d-flex mr-auto rounded">
					<h2 class="section-heading mb-0">
					<span class="section-heading-upper">Competições para o aprimoramento da programação</span>
					<span class="section-heading-lower">Maratona Coding Arena</span>
					</h2>
				</div>
				</div>
				<img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/coding1.jpg" alt="">
				<div class="product-item-description d-flex ml-auto">
				<div class="bg-faded p-5 rounded">
					<p class="mb-0">O Coding Arena é uma competição aos moldes da Maratona da Programação, por meio dela medimos o nível de conhecimento em programação dos alunos do curso e incentivamos a desenvolver o raciocínio lógico para a resolução de problemas.</p>
				</div>
				</div>
			</div>
			</div>
		</section>
	
		<section class="page-section">
			<div class="container">
			<div class="product-item">
				<div class="product-item-title d-flex">
				<div class="bg-faded p-5 d-flex ml-auto rounded">
					<h2 class="section-heading mb-0">
					<span class="section-heading-upper">Aprendendo a ensinar</span>
					<span class="section-heading-lower">Minicursos</span>
					</h2>
				</div>
				</div>
				<img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/cursos.png" alt="">
				<div class="product-item-description d-flex mr-auto">
				<div class="bg-faded p-5 rounded">
					<p class="mb-0">O Clube também realiza minicursos visando complementar conhecimento nas áreas técnicas e também ajudar a desenvolver outras Skills que são importantes para todo programador.</p>
				</div>
				</div>
			</div>
			</div>
		</section>
</section>


<section class="section-page" id="time">
<!--- Meet the team -->
<div class="container">
		<h1 class="site-heading text-center text-white  d-lg-block">
			<span class="site-heading-upper">Membros</span>
			<span class="site-heading-lower text-primary mb-3">Conheça nossos membros</span>
			<hr class="line" />
		</h1>
</div>
<!-- <div class="container">
	<h1 class="sub">ORIENTADORES</h1>
	<div class="row">
		<div class="col-md-6">
			<div class="card profile-card-1">
				<div class="background"></div>
				<img src="img/avatar.png" alt="profile-image" class="profile"/>
				<div class="card-content">
					<h2>Líliam Leal<small>Professora Orientadora</small></h2>
					<div class="icon-block">
						<a href="" target="_blank"> <i class="fab fa-github social-icons"></i></a>
						<a href="" target="_blank"> <i class="fab fa-instagram social-icons"></i></a>
						<a href="" target="_blank"> <i class="fab fa-linkedin-in social-icons"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6" style="float:left;">
			<div class="card profile-card-1">
				<div class="background"></div>
				<img src="img/avatar.png" alt="profile-image" class="profile"/>
				<div class="card-content">
					<h2>Marcus Vinícius<small>Professor Orientador</small></h2>
					<div class="icon-block">
						<a href="" target="_blank"> <i class="fab fa-github social-icons"></i></a>
						<a href="" target="_blank"> <i class="fab fa-instagram social-icons"></i></a>
						<a href="" target="_blank"> <i class="fab fa-linkedin-in social-icons"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--- Cards team --> <!--
<div class="container ">
	<h1 class="sub">ALUNOS</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="card profile-card-1">
				<div class="background"></div>
				<img src="img/adickson.jpeg" alt="profile-image" class="profile"/>
				<div class="card-content">
				<h2>Adickson Jr<small>Aluno<br>8º Período</small></h2>
				<div class="icon-block">
					<a href="https://github.com/adicksonjr" target="_blank"><i class="fab fa-github social-icons"></i></a>
					<a href="https://www.instagram.com/" target="_blank"> <i class="fab fa-instagram social-icons"></i></a>
					<a href="https://www.linkedin.com/in/adickson-vernek-6b12721a0/" target="_blank"> <i class="fab fa-linkedin-in social-icons"></i></a></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card profile-card-1">
				<div class="background"></div>
				<img src="img/denilson.jpg" alt="profile-image" class="profile"/>
				<div class="card-content">
				<h2>Denilson Moura<small>Aluno<br>7º Período</small></h2>
				<div class="icon-block">
					<a href="https://github.com/denilsondmoura" target="_blank"><i class="fab fa-github social-icons"></i></a>
					<a href="https://www.instagram.com/denilson_d_moura/" target="_blank"> <i class="fab fa-instagram social-icons"></i></a>
					<a href="https://www.linkedin.com/in/denilson-d-moura-068897133/" target="_blank"> <i class="fab fa-linkedin-in social-icons"></i></a></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card profile-card-1">
				<div class="background"></div>
				<img src="img/lucas.png" alt="profile-image" class="profile"/>
				<div class="card-content">
				<h2>Lucas Pinheiro<small>Aluno<br>8º Período</small></h2>
				<div class="icon-block">
					<a href="https://github.com/luccasph" target="_blank"><i class="fab fa-github social-icons"></i></a>
					<a href="https://www.instagram.com/luccasph_95/" target="_blank"> <i class="fab fa-instagram social-icons"></i></a>
					<a href="https://www.linkedin.com/in/lucas-pinheiro-462794152/" target="_blank"> <i class="fab fa-linkedin-in social-icons"></i></a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="card profile-card-1">
				<div class="background"></div>
				<img src="img/marcel.jpg" alt="profile-image" class="profile"/>
				<div class="card-content">
					<h2>Mei Marcel<small>Aluno<br>8º Período</small></h2>
					<div class="icon-block">
						<a href="https://github.com/meimarcel" target="_blank"> <i class="fab fa-github social-icons"></i></a>
						<a href="https://www.instagram.com/meimarcel/" target="_blank"> <i class="fab fa-instagram social-icons"></i></a>
						<a href="https://www.linkedin.com/in/marcel-mei-288912189/" target="_blank"> <i class="fab fa-linkedin-in social-icons"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card profile-card-1">
				<div class="background"></div>
				<img src="img/jhon.jpeg" alt="profile-image" class="profile"/>
				<div class="card-content">
				<h2>Jhon Wilker<small>Aluno<br>9º Período</small></h2>
				<div class="icon-block">
					<a href="https://github.com/jhonwilker" target="_blank"><i class="fab fa-github social-icons"></i></a>
					<a href="https://www.instagram.com/jhonwilkersousa/" target="_blank"> <i class="fab fa-instagram social-icons"></i></a>
					<a href="https://www.linkedin.com/in/jhon-wilker-sousa-93b880129/" target="_blank"> <i class="fab fa-linkedin-in social-icons"></i></a></div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card profile-card-1">
				<div class="background"></div>
				<img src="img/thalyson.jpg" alt="profile-image" class="profile"/>
				<div class="card-content">
				<h2>Thalyson L.<small>Aluno<br>9º Período</small></h2>
				<div class="icon-block">
					<a href="https://github.com/ThalysonLeonardo" target="_blank"><i class="fab fa-github social-icons"></i></a>
					<a href="https://www.instagram.com/thalysonleonardo/" target="_blank"> <i class="fab fa-instagram social-icons"></i></a>
					<a href="https://www.linkedin.com/in/thalyson-leonardo-ti/" target="_blank"> <i class="fab fa-linkedin-in social-icons"></i></a></div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card profile-card-1">
				<div class="background"></div>
				<img src="img/willy.jpg" alt="profile-image" class="profile"/>
				<div class="card-content">
				<h2>Willy Oliveira<small>Aluno<br>8º Período</small></h2>
				<div class="icon-block">
					<a href="https://github.com/willyoliv" target="_blank"><i class="fab fa-github social-icons"></i></a>
					<a href="https://www.instagram.com/willy_oliv/" target="_blank"> <i class="fab fa-instagram social-icons"></i></a>
					<a href="https://www.linkedin.com/in/willy-oliveira-6b02731a0/" target="_blank"> <i class="fab fa-linkedin-in social-icons"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</div> -->
</section>
@endsection
