<?php
 if(filter_has_var(INPUT_POST, 'submit')){
   echo'submited';
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="css/style.css">
  

  <title>Welcome to CarlosBranco Webpage</title>
</head>
<body id="Home">
  <header class="hero">
    <div id="navbar" class="navbar top">
      <h1 class="logo">
        <span class="text-primary"><i></i>Carlos</span>Branco</h1>
        
        <nav>
          <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="index.html#about">Quem sou</a></li>
            <li><a href="index.html#cases">Treinos</a></li>
            <li><a href="index.html#blog">Afiliado</a></li>
            <li><a href="index.html#contact">Contactos</a></li>
          </ul>
        </nav>
      </div>
      <div class="content">
        <h1>Apaixonado por Musculação</h1>
        <p>O sucesso só tem dois amigos: Determinação e Persistência</p>
        <!--<a href="#About" class="btn"><i class="fas fa-chevron-right"></i>Read More</a>-->
      </div>
  </header>
  <main>
    <!--ABOUT: ICONS-->
    <div>
      <h1 class="perf">PERFIL </h1>
    </div>
   <!--ABOUT: SOLUTIONS-->
    <section id="about" class="solutions flex-columns">
      <div class="row">
        <div class="column">
          <div class="column-1">
            <img src="../img/home/people.jpg" alt="people">
          </div>
        </div>
        <div class="column">
          <div class="column-2 bg-primary">
            <h2>Quem sou</h2>
            <p>Nasci no dia 08 de Abril de 1976, na Freguesia de São Jorge de Arroios em Lisboa e fui batizado com o nome de Carlos Miguel Simões Branco.
              Desde esse momento sou considerado um cidadão do Mundo, pleno dos meus direitos e deveres perante a Humanidade.
              Desde muito cedo o desporto e atividade física faz parte da minha vida ...   
              </p>
              <a href="quemsou.html" class="btn btn-outline">
              <i class="fas fa-chevron"></i>
              Saiba mais</a>
          </div>
        </div>
      </div>
    </section>
    <section class="icons bg-light">
      <div class="flex-items">
        <div>
          <i class="fas fa-music fa-2x"></i>
          <div>
            <h3>Música</h3>
            <p>A importância da música na vida das pessoas nunca foi tão evidente como hoje.
              O modo moderno de vida, rico em ansiedade e insatisfação, onde o tempo voa, empurra as pessoas para a procura do contraste com a vida quotidiana.
              Assim, a música tornou-se indispensável na minha vida, prover de forma ajustada formas de ensinamento simples e prático.
              
              </p>
          </div>
        </div>
      <div>
          <i class="fas fa-earth-europe fa-2x"></i>
          <div>
            <h3>Viagens</h3>
            <p>O Mundo é um lugar singular e tornou-se o nosso lar.
              O meu sonho é conhecer cada canto deste nosso Mundo. 
              A 10 de Janeiro de 2005, foi a minha primeira viagem fora de Portugal, Andorra.
              Gostei imenso de lá ter ido, tem umas paisagens lindas, onde a neve é rainha, cobria todo o horizonte e onde aprendi pela primeira vez andar de esqui.       
              
              </p>
          </div>
        </div>
        <div>
          <i class="fas fa-solid fa-hashtag fa-2x"></i>
          <div>
            <h3>Redes Sociais</h3>
            <p>Têm sido sem dúvida uma ferramenta que tenho usado desde o início da minha busca pelo conhecimento, tanto em musculação, alimentação e a minha própria promoção na internet.
              Muitos dos conteúdos que tenho produzido ao longo destes anos, são sem dúvida uma montra privilegiada nos dias de hoje e as redes sociais têm feito o seu caminho.
              
              </p>
          </div>
        </div>
      </div>
    </section>
<!--TREINOS-->
<section id="cases" class="cases flex-grid section-padding">
<header class="section-header">
  <h4>---</h4>
  <h2>TREINOS</h2>
  
  <p>O meu dia a dia no ginásio</p>
<div class="row">
  <div class="column">
    <a href="img/cases/cases1.jpg" data-lightbox="cases" data-title="Lorem ipsum 
    dolor sit amet consectetur adipisicing elit. In, eaque!">
    <img src="img/cases/cases1.jpg" alt=""/>
    <h3>Ombros</h3>
  </a>
   <a href="img/cases/cases2.jpg" data-lightbox="cases" data-title="Lorem ipsum 
   dolor sit amet consectetur adipisicing elit. In, eaque!">
    <img src="img/cases/cases2.jpg" alt=""/>
    <h3>Costas</h3>
  </a>
   </div>
  <div class="column">
    <a href="img/cases/cases3.jpg" data-lightbox="cases" data-title="Lorem ipsum 
   dolor sit amet consectetur adipisicing elit. In, eaque!">
    <img src="img/cases/cases3.jpg" alt=""/>
    <h3>Braços</h3>
  </a>
  <a href="img/cases/cases4.jpg" data-lightbox="cases" data-title="Lorem ipsum 
  dolor sit amet consectetur adipisicing elit. In, eaque!">
   <img src="img/cases/cases4.jpg" alt=""/>
   <h3>Pernas</h3>
 </a>
  </div>
  <div class="column">
    <a href="img/cases/cases5.jpg" data-lightbox="cases" data-title="Lorem ipsum 
   dolor sit amet consectetur adipisicing elit. In, eaque!">
    <img src="img/cases/cases5.jpg" alt=""/>
    <h3>Abdominais</h3>
  </a>
  <a href="img/cases/cases6.jpg" data-lightbox="cases" data-title="Lorem ipsum 
  dolor sit amet consectetur adipisicing elit. In, eaque!">
   <img src="img/cases/cases6.jpg" alt=""/>
   <h3>Peito</h3>
 </a>
  </div>
</div>
<a href="post1.html" class="btn"><i class="btn-treino"></i>Veja os videos</a>
</section>
<!--BLOG-->
<section id="blog" class="blog flex-columns flex-reverse">
  <div class="row">
    <div class="column">
      <div class="column-1">
        <img src="../img/home/blog.jpg" alt="people">
      </div>
    </div>
    <div class="column">
      <div class="column-2 bg-dark">
        <h1>COD PROMOCIONAL: BRANCO10 <img src="../img/blog/zumub.png" class="zumub" alt=""></h1>
        <h2>Gama de Produtos</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Quasi tenetur odit dolores beatae voluptates, ipsum voluptatibus
          aliquid deserunt, ab ratione qui esse, quaerat maxime iusto velit placeat?
          Nulla, soluta placeat.</p>
          <a href="https://zumub.com" class="btn btn-outline">
          <i class="fas fa-chevron"></i>
          Compre aqui</a>
      </div>
    </div>
  </div>
</section>
<!--TEAM-->
<section id="team" class="team section-padding">
  <header class="section-header">
    <h4>---</h4>
    <h2>As minhas sugestões</h2>
    <p>---</p>
  <div class="flex-items">
    <div>
      <img src="img/team/person1.jpg" alt="">
      <h4>Creatina</h4>
      <p>Ref:</p>
    </div>
    <div>
      <img src="img/team/person2.jpg" alt="">
      <h4>Proteína</h4>
      <p>Ref:</p>
    </div>
    <div>
      <img src="img/team/person3.jpg" alt="">
      <h4>Omega3</h4>
      <p>Ref:</p>
    </div>
  </div>
  </section>
  <!--CONTACT-->
  <section id="contact" class="contact flex-columns">
    <div class="row">
      <div class="column">
        <div class="column-1">
          <img src="img/home/contact.jpg" alt="people">
        </div>
      </div>
      <div class="column">
        <div class="column-2 bg-light">
          <h2>Request Call Back</h2>
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> class="callback-form" >
           <div class="form-control">
             <label for="name"></label>
            <input type="text" name="name" id="name" placeholder="Enter name" required>
           </div>
           <div class="form-control">
            <label for="email"></label>
           <input type="email" name="email" id="email" placeholder="Enter email" required>
          </div>
          <div class="form-control">
            <label for="subject"></label>
           <input type="subject" name="subject" id="subject" placeholder="Enter subject" required>
          </div>
          <div class="form-control">
            <textarea 
            class="text-input message-input" 
            placeholder="Enter Message"
            name="message" required
            ></textarea>
          <input type="submit" value="Send" id="submit" class="btn">
          </form>
         </div>
      </div>
    </div>
  </section>
</header>
  </main>
  <footer class="footer bg-dark">
    <div class="social">
      <a href="https://www.facebook.com/branco.carlosm"><i class="fab fa-facebook fa-2x"></i></a>
      <a href="https://www.instagram.com/branco.carlosm/"><i class="fab fa-instagram fa-2x"></i></a>
      <a href="https://linkedin.com/in/carlos-miguel-branco-329b1970"><i class="fab fa-linkedin fa-2x"></i></a>
    </div>
    <p>Copyright &copy; 2022 - <a href="www.filipebrazinha.pt">filipeBrazinha.pt</a> </p>
  </footer>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
  <script src="js/lightbox.min.js"></script>
  <script>
    const navbar = document.getElementById('navbar');
      let scrolled = false;
   
      window.onscroll = function () {
          if (window.pageYOffset > 100) {
              navbar.classList.remove('top');
              if (!scrolled) {
                  navbar.style.transform = 'translateY(-70px)';
              }
              setTimeout(function () {
                  navbar.style.transform = 'translateY(0)';
                  scrolled = true;
              }, 200);
          } else {
              navbar.classList.add('top');
              scrolled = false;
          }
      }
      $('#navbar a, .btn').on('click', function (e) {
      if (this.hash !== '') {
        e.preventDefault();

        const hash = this.hash;

        $('html, body').animate(
          {
            scrollTop: $(hash).offset().top - 100,
          },
          800
        );
      }
    });
      </script>
</body>
</html>