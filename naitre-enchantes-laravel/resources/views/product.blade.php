<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Boutique</title>
  <link rel="stylesheet" href="css/style.css">
​
</head>
<body>
​
  <div class="tittle">
    <h1>Boutique</h1>
  </div>
  <div class="content">
  <table>
    <tr>
      <th>Name</th>
      {{-- <th>Address</th>
      <th>Post Code</th>
      <th>City</th>
      <th>Revenue</th> --}}
      <th>Description</th>
      <th>Prix</th>
                  </tr>
   
    <tr>
    <td>{{ $product ?? '' }}</td>
      {{-- <td>{{$company->address}}</td>
      <td>{{$company->post_code}}</td>
      <td>{{$company->city}}</td>
      <td>{{$company->revenue}}</td> --}}
      <td>
        {{ $product ?? '' }}
      </td>
      <td>
        {{ $product ?? '' }}
      </td>
    </tr>
    </table>    
 <div>
    <td>
 

<div class="flex">
  <div class="boutique">
    <img src="img/shop.jpeg" alt="">
  </div>
​
</div>
​
​
​
  <div class="search">
​
    <div class="pink1">
    </div>
    <div class="search_image">
      <img src="img/search.svg.png" alt="search">
    </div>
    <div class="pink2">
    </div>
  </div>
​
  <div class="trait">
    <div class="pink3">
​
    </div>
​
  </div>
​
  <section class="shop">
​
    <div class="shop__products">
      <div class="products">
​
        <div class="products__item">
          <article class="product">
            <img src="img/prelude.png" alt="prelude">
            <h2 class="product__title">5 SÉANCES INDIVIDUELLES « SPÉCIAL PMA »</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/ode.png" alt="ode">
            <h2 class="product__title">ACCOMPAGNEMENTS PARENTS D’ADO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/audio.png" alt="audio">
            <h2 class="product__title">ENTRAÎNEMENT AUDIO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/soliste.png" alt="">
            <h2 class="product__title">ENTRAÎNEMENT E-LEARNING. LIEN POUR TÉLÉCHARGER CI-DESSOUS 197€</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
​
        <div class="products__item">
          <article class="product">
            <img src="img/ode.png" alt="ode">
            <h2 class="product__title">ACCOMPAGNEMENTS PARENTS D’ADO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/ode.png" alt="ode">
            <h2 class="product__title">ACCOMPAGNEMENTS PARENTS D’ADO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/ode.png" alt="ode">
            <h2 class="product__title">ACCOMPAGNEMENTS PARENTS D’ADO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/ode.png" alt="ode">
            <h2 class="product__title">ACCOMPAGNEMENTS PARENTS D’ADO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/ode.png" alt="ode">
            <h2 class="product__title">ACCOMPAGNEMENTS PARENTS D’ADO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/ode.png" alt="ode">
            <h2 class="product__title">ACCOMPAGNEMENTS PARENTS D’ADO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/ode.png" alt="ode">
            <h2 class="product__title">ACCOMPAGNEMENTS PARENTS D’ADO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
        <div class="products__item">
          <article class="product">
            <img src="img/ode.png" alt="ode">
            <h2 class="product__title">ACCOMPAGNEMENTS PARENTS D’ADO</h2>
            <p class="product__text">
              <a class="button js-add-product" href="#" title="Add to cart">
                Ajouter au panier
              </a>
            </p>
          </article>
        </div>
​
      </section>
    </body>
    </html>