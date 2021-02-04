# VAKOM LENS  
  
## Entités :   
*Form*  
Permet a l'utilisateur d'envoyer un formulaire pour contacter le gérant du site.  
Possibilité de choisir un *objet* dans une liste prédefinie.  
Todo: Affichage d'un formulaire sur un URL different selon l'objet  
(exemple: vakom.com/conseil ramène vers le formulaire avec l'*objet* conseil déjà selectionné dans le formulaire)  
  
*User*  
Uniquement pour l'administrateur du site.  
  
*Article*  
Articles rédigés par l'user uniquement.  
Affichage publique  
Todo:  
- Limiter l'acces aux fonctions d'edition, de création et de suppession pour les utilisateurs non logués.
- Afficher la liste des commentaires liés à chaques articles (acces a l'entité commentaire dans article)

*Commentaire*  
Possibilité de rédiger un commentaire obligatoirement lié à un article pour tout les utilisateurs (non logués)  
Todo:  
- Ajouter la possibilité de report un commentaire 

## Todo  
  
Créer la newsletter qui envoie un mail à chaque article publié
*(swiftmailer ?)*  
  
Rajouter une thumbnail pour les articles