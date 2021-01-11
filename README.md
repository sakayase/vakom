# Presentation

Ceci est un projet de site vitrine pour la societé VAKOM Lens.
Projet réalisé dans le cadre de la formation Dev-Web Popschool Lens (Titre pro nv 4)


# Maquette

https://www.figma.com/file/YikBNuYZSQA6pZ4An66Wtc/VAKOM-Mockup?node-id=0%3A1

## Selections de typo 
Spectral & karla
https://fontpair.co/pairing/spectral-and-karla

Poppins & ptserif
https://fontpair.co/pairing/poppins-and-ptserif

Mavenpro
https://fontpair.co/pairing/mavenpro-and-mavenpro

Open Sans & Lora
https://fonts.google.com/specimen/Open+Sans
https://fonts.google.com/specimen/Lora

## Images

- Image bureau (mail)

- Attente : Images fournies par VAKOM mère

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