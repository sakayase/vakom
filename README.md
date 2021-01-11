# BDD

## Site 
(Modularité du site)

- Tarifs (img agenda formation)
- Type de formation
- Avis client
- Client
- Indicateur de satisfaction
- Livrets d'acceuil etc..

## Form
### Personne
[Message many to one Personne]
- nom   
- prenom    
- mail    
- ville   
- societé   

### Message 
[Personne one to many Message]
- objet     
- content   

## Blog
### Article 
[Commentaire many to one Article]
- title     [title one to one content]
- content   [content one to one resumé]
- resumé    
- date      [date one to many title]
(Pas d'auteur car Benedicte Vincent auteur unique)

### Commentaire
[Article one to many Commentaire]
- commentaire
- user (uniquement commentaire)