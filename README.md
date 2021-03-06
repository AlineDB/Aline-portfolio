# Aline-portfolio

# projet Portfolio Aline De Barros

Dans le cadre du cours de Design Web, création d'un site portfolio afin de présenter mes projets, mes expériences, mon CV et moi-même.

(Tous droits réservés, ne pas reproduire)


## Documents

Vous trouverez l'analyse et les personas [ici](https://github.com/AlineDB/Aline-portfolio/blob/8cf5d4585e2d595c578bf5667efcff27cb049399/Doc/Analyse%20et%20personas%20portfolio.docx)


Vous trouverez le wireframe et le design [ici](https://github.com/AlineDB/Aline-portfolio/blob/8cf5d4585e2d595c578bf5667efcff27cb049399/Doc/portfolio_wireframe_complet.png)


Vous trouverez les scénarios de tests utilisateurs et les résultats pour les prototypes [ici](https://github.com/AlineDB/Aline-portfolio/blob/8cf5d4585e2d595c578bf5667efcff27cb049399/Doc/tests%20utilisateurs%20prototype.docx)

A ce stade le site est en développement, les documents peuvent donc être mis à jour.

[Voici le lien ](https://portfolio.aline-db.be/) afin d'accéder au sitemis en ligne mi mai 2022 pour le présenter au jury le 13 juin 2022.



## Tests

HTML -> via W3C 3 warning concernant des attributs qui ne sont pas nécessaires. 3 erreurs impliquant de DOCTYPE qui est pourtant présent dans le header pour 2 et la dernière concerne une
balise lang dans le head. Après vérification sur MDN, je ne trouve pas une correspondance à ses erreurs.

CSS -> 
via CSS STATS. Concernant les couleurs, Wordpress en génère de lui-même ce qui augmente les déclérations dans le CC malgré l'utilisation réduite de couleur dans le site en lui-même.
Cela est visible pour les couleurs de texte mais aussi les backgrounds.
La même observation s'effectue pour la taille de la typographie. Wordpress en déclare beaucoup.
Au niveau des spécifités, le score le plus bas est de 27 et le plus haut 272. Malheureusement, des pics sont observés dans le premier tiers du graphique. Je n'utilise le sélecteurs d'id que 
pour l'ancre fixe qui permet de retourner en haut de la page et pour le carroussel.

via W3C. Aucune erreur, niveau 3 + SVG. Les seuls avertissements (21) concernane des déclaration effectuées par Wordpress.

GTMETRIX -> Le site est classé au grade A avec une performance à 88% et une structure à 93% pour un serveur au Canada et une utilisation PC.

Liens -> via W3C. Les ancres sont correctes (3). Pour les liens, celui de certaines images sont érronées. Il faut que je vérifie dans le dossier upload. Il porte une attention à deux
liens qui ne bloquent pas les robots. Un lien n'a pas pu être analysé (celui renvoyant vers Amazon) et un lien qu'il indique perdu et qu'il manque un ACL.

Responsive -> via Google test mobile friendly. Pour lui c'est ok.
via I am responsive. Cela est une vérification visuelle sur 4 écrans (mobile, tablette, laptop et desktop). A priori cela semble etre bon.

Accessibilité -> via Wave. Pas d'erreur de contraste. Structure ok. Une erreur concernant un label vide qui est normal car il sert juste pour le burger menu en mobile. Toutes les images
ont un texte de remplacement. La tagline est en alerte car écrite comme un titre mais pas déclarée comme tel.


---------------

# project Portfolio Aline De Barros

As part of the Web Design course, creation of a portfolio site to talk about my projects, my experiences, my CV and myself.

(All rights reserved, do not reproduce)


## Documents

You will find the analysis and the personas [here](https://github.com/AlineDB/Aline-portfolio/blob/8cf5d4585e2d595c578bf5667efcff27cb049399/Doc/Analyse%20et%20personas%20portfolio.docx)


You can find the wireframe and design [here](https://github.com/AlineDB/Aline-portfolio/blob/8cf5d4585e2d595c578bf5667efcff27cb049399/Doc/portfolio_wireframe_complet.png)


You will find the user test scenarios and results for the prototypes [here](https://github.com/AlineDB/Aline-portfolio/blob/8cf5d4585e2d595c578bf5667efcff27cb049399/Doc/tests%20utilisateurs%20prototype.docx)

At this stage the site is under development, so the documents can be updated.

## Tests

HTML -> via W3C 3 warnings concerning attributes that are not necessary. 3 errors involving DOCTYPE which is however present in the header for 2 and the last one concerns a
lang tag in the head. After checking on MDN, I do not find a correspondence to these errors.

CSS ->
via CSS STATS. Concerning colors, Wordpress generates them by itself which increases the declarations in the CC despite the reduced use of color in the site itself.
This is visible for the text colors but also for the backgrounds.
The same observation is made for the size of the typography. Wordpress declares a lot.
In terms of specifications, the lowest score is 27 and the highest 272. Unfortunately, peaks are observed in the first third of the graph. I only use the id selector
for the fixed anchor which allows to go back to the top of the page and for the carousel.

via W3C. No errors, level 3 + SVG. The only warnings (21) concern declarations made by Wordpress.

GTMETRIX -> The site is classified at grade A with a performance at 88% and a structure at 93% for a server in Canada and a PC use.

Links -> via W3C. The anchors are correct (3). For the links, the one of some images are erroneous. I have to check in the upload folder. It pays attention to two
links that do not block the robots. A link could not be analyzed (the one referring to Amazon) and a link that it indicates lost and missing an ACL.

Responsive -> via Google test mobile friendly. For him it's ok.
via I am responsive. This is a visual check on 4 screens (mobile, tablet, laptop and desktop). It seems to be good.

Accessibility -> via Wave. No contrast error. Structure ok. One error concerning an empty label which is normal because it is just for the burger menu in mobile. All images
have a replacement text. The tagline is in alert because written as a title but not declared as such.








[Here is the link ](https://portfolio.aline-db.be/) to access the site, it will be put online in May 2022 to be talked about to the jury mid June.
