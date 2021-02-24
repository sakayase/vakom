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
        <div class="main_sect">
          <div>
            <h1>Nos Coordonnées: </h1>
            <div class="paragraphs">
                <p>
                    Engagée et enthousiaste, Bénédicte NICOLAS, met à votre service son professionnalisme acquis au travers d’une expérience pluridisciplinaire de 20 ans qui lui confère une vision à 360° de l’entreprise.
                </p>
                <p>
                    VAKOM, c’est aussi une grande variété de compétences, grâce à un réseau implanté sur le territoire national et international, assurant ainsi proximité et agilité pour vous aider à trouver les réponses à vos problématiques.
                </p>
            </div>
              <div class="info">
                <div class="ct">
                  <h2>Telephone:</h2>
                  <p>XX.XX.XX.XX.XX</p>
                </div>
                <div class="ct">
                  <h2>Adresse:</h2>
                  <p>
                    3517 W. Gray 
                    St. Utica, Pennsylvania 57867
                  </p>
                </div>
                <div class="ct">
                  <h2>Email</h2>
                  <p>nom@domain.com</p>
                </div>
              </div>
            </div>
          </div>
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
        <section>
          <h3>Plan d'acces:</h3>
          <div class="map"><a href="https://placeholder.com"><img src="https://via.placeholder.com/885x324" class="map__img"></a></div>
          
        </section>
        <div class="retour_acc"><a href="accueil" class="link accueil">Retour à l'accueil</a></div>
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
  name: 'Contact'
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
.link {
  text-decoration: none;
  color: white;
  background-color: #ed008c;
  opacity: 50%;
  margin: 10px;
  border: #ed008c solid 3px;
  border-radius: 6%;
  margin: auto;
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
button{
  background-color: #ed008c;
  color: white;
  border: #ed008c solid 3px;
  border-radius: 5px;
  opacity: 50%;
}

@media screen and (min-width: 900px) {
  .info {
  display: flex;
}
.name {
  width: 41%;
}
.surname {
  width: 41%;
}
.mail {
  width: 41%;
}
.city {
  width: 41%;
}
footer {
  height: 200px;
}
.ctr {
  font-size: 1rem;
  width: 49%;
  text-align: right;
}
.pbaa {
  font-size: 1rem;
  width: 50%;
  margin: 0;
  padding-left: 0;
}
ol {
  list-style: none;
  text-align: right;
  font-size: 1rem;
  padding: 0;
  width: 20%;
  padding-right: 5px;
}
.paragraphs {
  display: flex;
  justify-content: space-around;
}
p {
  width: 30%;
}
.header_img__img {
  height: 120px;
}
}
</style>
