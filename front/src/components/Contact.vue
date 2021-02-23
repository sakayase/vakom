<template>
  <div id="app">
    <header>
      <ul>
        <li>Prestations</li>
        <li>Blog</li>
        <li>Avis</li>
        <li>A propos</li>
      </ul>
      <a href="https://placeholder.com"><img src="https://via.placeholder.com/120"></a>
      <ul>
        <li>Contact</li>
        <li>Recrutement</li>
      </ul>
    </header>
    <div>
        <div>
          <h1>Nos Coordonnées: </h1>
          <div>
              <section>
                  Engagée et enthousiaste, Bénédicte NICOLAS, met à votre service son professionnalisme acquis au travers d’une expérience pluridisciplinaire de 20 ans qui lui confère une vision à 360° de l’entreprise.
              </section>
              <section>
                  VAKOM, c’est aussi une grande variété de compétences, grâce à un réseau implanté sur le territoire national et international, assurant ainsi proximité et agilité pour vous aider à trouver les réponses à vos problématiques.
              </section>
          </div>
          <div>
            <h2>Telephone:</h2>
            <p>XX.XX.XX.XX.XX</p>
          </div>
          <div>
             <h2>Adresse:</h2>
            <p>
              3517 W. Gray 
              St. Utica, Pennsylvania 57867
            </p>
          </div>
          <div>
            <h2>Email</h2>
            <p>nom@domain.com</p>
          </div>
        </div>
        <form 
          id="form"
          action="https://vuejs.org/"
          @submit="checkForm"
          method="post"
        >
          <div class="names">
            <input type="text" name="" id="" placeholder="Nom">
            <input type="text" name="" id="" placeholder="Prénom">
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
            <button type="submit">Envoyer</button>
            <div class="rgpd">
              <input type="checkbox" name="" id="rgpd">
              <label for="rgpd">RGPD</label>
            </div>
          </div>
        </form>
        <section>
          <h3>Plan d'acces:</h3>
          <a href="https://placeholder.com"><img src="https://via.placeholder.com/885x324"></a>
          
        </section>
    </div>
    <footer>
      <a href="https://placeholder.com"><img src="https://via.placeholder.com/120"></a>
      <div class="reseaux">
        <a href="https://placeholder.com"><img src="https://via.placeholder.com/80"></a>
        <a href="https://placeholder.com"><img src="https://via.placeholder.com/80"></a>
        <a href="https://placeholder.com"><img src="https://via.placeholder.com/80"></a>
      </div>
      <ul>
        <li>Prestation</li>
        <li>Blog</li>
        <li>Avis</li>
        <li>A propos</li>
        <li>Accueil</li>
        <li>Contact</li>
        <li>Recrutement</li>
      </ul>
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
footer {
  background-color: #ed008c;
  color: white;
}
header {
  background-color: #ed008c;
  color: white;
}
.link {
  text-decoration: none;
  color: white;
  background-color: #ed008c;
  margin: 10px;
  border: #ed008c solid 3px;
  border-radius: 6%;
}
ul {
  text-transform: none;
}
.mail{
width: 45%;
}
.city{
width: 45%;
}
form {
  width: 800px;
}
.object{
  width: 100%;
}
.societe{
  width: 100%;
}
section{
    width: 40%;
}
</style>
