<template>
  <div id="app">
    <header>
      <ul class="pbaa">
        <li class="pbaa__p header__list">Prestations</li>
        <li class="header__list">-</li>
        <li class="pbaa__b header__list">Blog</li>
        <li class="header__list">-</li>
        <li class="pbaa__a1 header__list">Avis</li>
        <li class="header__list">-</li>
        <li class="pbaa__a2 header__list">A propos</li>
      </ul>
      <ul class="ctr header__list">
        <li class="ctr__ct header__list">Contact</li>
        <li class="header__list">-</li>
        <li class="ctr__r header__list">Recrutement</li>
      </ul>
      <div class="header_img"><a href="https://placeholder.com"><img src="https://via.placeholder.com/120" class="header_img__img"></a></div>
    </header>
    <div>
      <section class="conseil">
        <h1>Conseil</h1>
        <div>
        <h2>Description</h2>
        <p>
          Accompagnement dans la conduite du changement stratégique et organisationnel, développement des ressources humaines et des compétences (GPEC), qualité de vie au travail, gouvernance d’entreprise

          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
        </p>
        </div>
        <div class="section2">
          <h2>Section 2</h2>
          <p>
            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.

            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. 
            Consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. 
          </p>
        </div>
        <div class="links">
          <a href="tarifs" class="link tarifs">Voir les tarifs</a>
          <a href="cgv" class="link cgv">Conditions générales de vente</a>
        </div>
      </section>
      <hr class="split">
      <section class="contact">
        <form 
          id="form"
          method="post"
        >
        <div class="form__fields">
          <div class="names">
            <input type="text" name="" id="" class="name"  placeholder="Nom">
            <input type="text" name="" id="" class="surname" placeholder="Prénom">
          </div>
          <div>
            <input type="text" name="" id="" placeholder="E-mail" class="mail">
            <input type="text" name="" id="" placeholder="Ville" class="city">
          </div>
          <div>
            <input type="text" name="" id="" placeholder="Nom de la société" class="societe"> 
            <input type="text" name="" id="" placeholder="Objet"  class="object">
          </div>
          <textarea name="" id="" cols="30" rows="10" placeholder="Votre message ici"></textarea>
          <div>
        </div>
        <div class="sub_rgpd">
          <div class="rgpd">
              <input type="checkbox" name="" id="rgpd">
              <label for="rgpd">Je confirme avoir pris connaissance de blablabla rgpd toussa</label>
            </div>
          <button type="submit">Envoyer</button>
        </div>
          </div>
        </form>
            <div class="retour_acc"><a href="accueil" class="link accueil">Retour à l'accueil</a></div>
      </section>
    </div>
     <footer>
      <a href="https://placeholder.com" class="footer__img"><img src="https://via.placeholder.com/120" class="footer__img__img"></a>
      <div class="reseaux">
        <a href="https://placeholder.com" class="res_img_a"><img src="https://via.placeholder.com/80" class="res_img"></a>
        <a href="https://placeholder.com" class="res_img_a"><img src="https://via.placeholder.com/80" class="res_img"></a>
        <a href="https://placeholder.com" class="res_img_a"><img src="https://via.placeholder.com/80" class="res_img"></a>
      </div>
      <ol>
        <li>Prestation</li>
        <li>Blog</li>
        <li>Avis</li>
        <li>A propos</li>
        <li>Accueil</li>
        <li>Contact</li>
        <li>Recrutement</li>
      </ol>
    </footer>
  </div>
</template>



<script>
export default {
  name: 'Conseil'
}
</script>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.header_img {
  display: flex;
  justify-content: center;
}
.header_img__img {
  height: 80px;
}
ul {
  list-style: none;
  display: inline-block;
}
.header__list {
  display: inline-block;
  padding: 1px;
}
.ctr {
  font-size: 0.5rem;
  width: 49%;
  text-align: right;
}
.pbaa {
  font-size: 0.5rem;
  width: 50%;
  margin: 0;
  padding-left: 0;
}
h1 {
  font-size: 1.5rem;
}
h2 {
  font-size: 1rem;
}
h3 {
  font-size: 0.90rem;
  width: 30%;
}
p {
  font-size: 0.75rem;
}
.main_sect {
  width: 90%;
  margin: auto;
}
.ct {
  width: 50%;
  text-align: center;
  margin: auto;
}
header {
  background-color: #ed008c;
  color: white;
}
.links {
  display: flex;
}
.link {
  text-decoration: none;
  color: white;
  background-color: #ed008c;
  margin: 10px;
  border: #ed008c solid 3px;
  border-radius: 6%;
  margin: auto;
}
.cvg {
  text-align: right;
}
.name {
  width: 40%;
  margin-right: 4px;
  margin-bottom: 5px;
}
.surname {
  width: 40%;
  margin-left: 4px;
  margin-bottom: 5px;
}
.mail {
  width: 40%;
  margin-right: 4px;
  margin-bottom: 5px;
}
.city {
  width: 40%;
  margin-left: 4px;
  margin-bottom: 5px;
}
.societe {
  width: 85%;
  margin-bottom: 5px;
}
.object {
  width: 85%;
  margin-bottom: 5px;
}
textarea {
  width: 87%;
  margin-bottom: 5px;
}
form {
  width: 90%;
  margin: auto;
}
.form__fields {
  text-align: center;
}
.sub_rgpd {
  text-align: start;
  margin-left: 6%;
}
label {
  font-size: 0.75rem;
}
.map {
  display: flex;
  justify-content: center;
}
.map__img{
  height: 150px;
}
.retour_acc {
  display: flex;
  margin: 30px;
}
section {
width: 90%;
margin: auto;
}
footer {
  background-color: #ed008c;
  color: white;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.reseaux {
  display: flex;
  width: 40%;
  justify-content: space-between;
  align-items: center;
}
.res_img {
  width: 100%;
}
.res_img_a {
  width: 30%;
  height: 50px;
}
ol {
  list-style: none;
  text-align: right;
  font-size: 0.75rem;
  padding: 0;
  width: 20%;
  padding-right: 5px;
}
.footer__img {
  width: 20%;
  text-align: center;

}
.footer__img__img {
  width: 80%;
}
.section2 {
  margin-bottom: 50px;
}
</style>
