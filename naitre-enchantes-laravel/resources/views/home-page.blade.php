<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
  <title>Naître Enchantés</title>
</head>
<body>
  @extends('layouts.app')
  @section('content')
  <h1>NAITRE ENCHANTES</h1>
  <div class="container_colored_blocks">
    <div class="main_colored_block">
      <h2 class="parents">PARENTS</h2>
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <a href="#">VOIR PLUS</a>
    </div>
    <div class="secundary_colored_block">
      <div class="professional_block">
        <h2 class="professionals">PROFESSIONNELS</h2>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <a href="#">VOIR PLUS</a>
      </div>
      <div class="maternity_block">
        <h2 class="maternity">MATERNITE</h2>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <a href="#">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="helping_out">
    <div>
      <h3>D’abord un accompagnement</h3>
      <p>des femmes enceintes et de leurs conjoints, lancée en 2010 par Magali Dieux, coach en développement personnel. Inspirée par les sciences comportementales et cognitives, les théories systémiques et aussi par la longue expérience artistique de Magali Dieux, la démarche utilise un ensemble de techniques sur mesure qui développent et maintiennent le lien entre la mère, son partenaire, les équipes médicales et l’enfant. L’ensemble des outils est regroupé sous l’appellation EVA – Expression Vocale Ajustée – et peut s’appliquer avant et pendant l’accouchement.</p>
      <p>Les activités de Naître Enchantés se sont ensuite élargies à l’accompagnement des parents au-delà de la naissance, en conservant une approche coaching et à la formation des professionnels de la périnatalité à l’accompagnement des futurs parents.</p>  
      <a href="#">VOIR PLUS</a>
    </div>
    <div class="magali">
      <img src="../img/trees.jpeg" alt="arbres" class="trees">
      <h4>Magali Dieux</h4>
      <p>coach en développement personnel.</p>
      <a href="#">REJOIGNEZ-NOUS</a>
    </div>  
  </div>
  <h2>Accoucher dans la joie même avec la pandémie </h2>
  <div class="joy">
    <div class="video">
      <iframe src="https://youtu.be/wqJ45dLov4c" title="Présentation de l'accompagnement 'spécial COVID 19'"></iframe>
    </div>
    <div class="covid">
      <div>
        <h3>cov 19</h3>
        <p>Pendant la COVID, Magali nous a apporté des clés pour gérer le stress et accueillir l’arrivée de notre premier bébé sereinement. Chacun un rôle, chacun sa place et des exercices pour s’y préparer ! L’accouchement fut un moment magique, serein et où nous jouions un rôle tous les trois : papa, bébé et moi. L’équipe médicale ne connaissait pas mais nous a fait confiance. Nous avions notre bulle d’intimité dans un hôpital près de Lille plutôt habitué aux méthodes « classiques ». C’était intense, respectueux de mon corps et de celui du bébé. C’était adapté pour nous ! J’ai vibré ! Je recommande sans réserve !</p>
        <p>Merci pour cette intervention d’une très grande qualité. Dès le début, le fait d’entendre que l’on a le « droit » à la joie » et à « la confiance en soi » sans pour autant être insensible au contexte m’a fait beaucoup de bien car je ressentais un réel décalage avec mes amies qui s’étonnaient de mon enthousiasme résistant à leur discours alarmiste.
        </p>
      </div>
    </div>
  </div>
  <h2 class="blog">BLOG</h2>
  <div class="main_container_blog">
    <div class="containers_blog">
      <div class="small_containers_blog">
        <h4>NOS ENFANTS À LA MAISON, C’EST QUOI QUI COINCE…</h4>
        <p>Les enfants à la maison. Une mère donne à manger à son enfant au travers de l’écran de la télé. </p>
        <button>Voir plus</button>
      </div>
      <div class="small_containers_blog">
        <h4>5 TRUCS POUR UN NOURRISSON FACILE</h4>
        <p>Au pays de l’amour, le temps comptable n’existe pas.</p>
        <button>Voir plus</button>
      </div>
      <div class="small_containers_blog">
        <h4>ENCHANTEZ VOS FIV, PMA ET AUTRES ACRONYMES INTIMES !</h4>
        <p>La PMA, une magnifique opportunité</p>
        <button>Voir plus</button>
      </div>
    </div>
    <div class="containers_blog">
      <div class="small_containers_blog">
        <h4>LES FRANÇAISES ENCEINTES NE VEULENT PAS CHOISIR UN CAMP</h4>
        <p>Attention : les premières lignes de cet article vont peut-être vous choquer. Au point que vous n’aurez pas envie de lire la suite. Ce serait dommage. Il s’agit seulement d’un petit aperçu, certes caricatural, du climat dans lequel évoluent les Françaises enceintes, depuis des années, et ça continue…</p>
        <button>Voir plus</button>
      </div>
      <div class="small_containers_blog">
        <h4>ACTRICE DE SA CESARIENNE</h4>
        <p>Et le père ? Pourquoi ne serait-il pas, lui aussi, acteur ? Ouvrir le ventre d’un être humain pour en sortir un autre être humain, voilà une situation qui n’est ni banale, ni anodine, ni dénuée de risques. Donc, le père maintient un lien avec la mère qui maintient un lien avec l’enfant. Et le merveilleux reprend sa place. En bref : on lâche rien.</p>
        <button>Voir plus</button>
      </div>
      <div class="small_containers_blog">
        <h4>QUEL SUPER PARENT ETES-VOUS ?</h4>
        <p>Sans avoir besoin de regarder dans une boule de cristal, je peux déjà vous dire que vous êtes un parent qui s’efforce de répondre au mieux, aux quatre principales obligations : morales, éducatives, matérielles et culturelles. Alors pour ceux et celles qui n’ont pas suivi une double formation d’ingénieur-DRH, vous êtes pour moi, d’ors et déjà, des SUPERS PARENTS !</p>
        <button>Voir plus</button>
      </div>
    </div>
    <div class="containers_blog">
      <div class="small_containers_blog">
        <h4>COMMENT LA COVID A INSPIRÉ L’ACCOUCHEMENT 3.0 ?</h4>
        <p>400 couples ont pu bénéficier de l’accompagnement en ligne: Comment gérer le stress de l’accouchement en période Covid-19.</p>
        <button>Voir plus</button>
      </div>
      <div class="small_containers_blog">
        <h4>LE TOP DU COACHING AU SERVICE DE L’ENFANTEMENT</h4>
        <p>J’entends trop : « On verra bien »</p>
        <button>Voir plus</button>
      </div>
      <div class="small_containers_blog">
        <h4>0 % DE DÉPRESSION POST PARTUM AVEC LA « MÉTHODE EVA » !</h4>
        <p>Retrouver l’article de Magali dans le journal enjoy family</p>
        <button>Voir plus</button>
      </div>
    </div>
  </div>
  <div class="partners">
    <h2>Nos partenaires</h2>
    <div class="main_container_partners">
      <div class="containers_partners">
        <h4>ILS NOUS FONT CONFIANCE...</h4>
        <p>Nos partenaires Naître enchantés pendant la pandémie</p>
        <button>Voir plus</button>
      </div>
      <div class="containers_partners">
        <h4>ILS PARLENT DE NOUS</h4>
        <p>Ils soutiennent les parents Naître enchantés pendant la pandémie</p>
        <button>Voir plus</button>
      </div>
      <div class="containers_partners">
        <h4>ILS SONT FORMES NAITRE ENCHANTES</h4>
        <p>Ils savent ce que les parents Naître enchantés mettent en place pendant la pandémie  </p>
        <button>Voir plus</button>
      </div>
    </div>
  </div>
  <div class="main_container_book">
    <div class="text_book">
      <h5>Le livre</h5>
      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</p>
    </div>
    <div class="picture_book">
      <img src="../img/livre.png" alt="couverture du livre: pour une grossesse et une naissance heureuses">
    </div>
  </div>


  @endsection
</body>
</html>