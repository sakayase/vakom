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
      <section class="conseil">
        <h1>Conseil</h1>
        <div>
        <h2>Description</h2>
        <p>
          Accompagnement dans la conduite du changement stratégique et organisationnel, développement des ressources humaines et des compétences (GPEC), qualité de vie au travail, gouvernance d’entreprise

          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
        </p>
        </div>
        <div>
          <h2>Section 2</h2>
          <p>
            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.

            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. 
            Consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. 
          </p>
        </div>
        <a href="tarifs" class="link tarifs">Voir les tarifs</a>
        <a href="cgv" class="link cgv">Conditions générales de vente</a>
      </section>
      <hr class="split">
      <section class="contact">
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
            <a href="accueil" class="link accueil">Retour à l'accueil</a>
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
  name: 'Conseil'
}
</script>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
footer {
  background-color: #a6ce39;
  color: white;
}
header {
  background-color: #a6ce39;
  color: white;
}
.link {
  text-decoration: none;
  color: white;
  background-color: #a6ce39;
  margin: 10px;
  border: #a6ce39 solid 3px;
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
</style>
