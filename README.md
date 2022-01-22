# Rest countries : Web dynamique / API 

Brief en plusieurs parties CDA + DWWM.


## Technologies avec lesquelles j'ai travaillé
<p>
<img  width="50px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apache/apache-original-wordmark.svg" />
<img width="50px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" />
<img width="50px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" />
<img width="50px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
<img width="50px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" />
<img width="50px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bash/bash-original.svg" />




</p>

## Contexte du projet
Réaliser un prototype Web responsive en anglais qui permet de consulter des informations sur les pays de la région Europe. Nous souhaitons à terme pouvoir consulter ces informations sous forme de liste, de tableau, de cards puis disposer d’une géolocalisation de chaque pays. Les données sur les pays proviennent de l’API publique et gratuite Rest countries.

## Modalités pédagogiques
Travail et rendu individuel mais il n’est pas interdit de s’entraider, bien au contraire !


<details>
<summary>Partie 1</summary>
<h3>Référentiels de compétences</h3>
Les compétences professionnelles du référentiel « CDA » couvertes par ce projet sont :
    • AT1 / CP4 : Développer la partie frontend d’une interface utilisateur web (Imiter)
Les compétences professionnelles du référentiel « DWWM » couvertes par ce projet sont :
    • AT1 / CP2 : Réaliser une interface utilisateur web statique et adaptable (Imiter)
    • AT1 / CP3 : Développer une interface utilisateur web dynamique (Imiter)
<h3>Partie 1 du projet</h3>
    • Initialiser un nouveau projet « rest-countries »
    • Implémenter une page index.php qui répond aux spécifications suivantes :
        ◦ Titre du document : Eu - European region countries
        ◦ Doit avoir une icône de favoris (favicon)
        ◦ Une barre de navigation en haut toujours visible même quand on défile la page
        ◦ La barre de navigation ne contient à ce stade que le logo « Eu » en texte avec un lien qui renvoie vers la page index.php
        ◦ Le style de la barre de navigation est dark
        ◦ Comportement en termes d’adaptabilité :
            ▪ Tout le contenu de la page doit être centré pour écran xl, seul la couleur de fond de l’entête est visible sur toute la largeur
            ▪ Quand on passe le breakpoint md le « burger menu » apparaît même s’il est vide pour le moment car aucun élément dans la barre de navigation
        ◦ Titre principal de la page : European region countries
        ◦ Un paragraphe qui contient le texte : Made with HTML 5 and PHP, with the help of Bootstrap 5.
        ◦ Dans le paragraphe précédent il doit y avoir un lien externe (autre onglet) qui renvoie vers https://getbootstrap.com/docs/5.0/getting-started/introduction/ sur le texte Bootstrap 5
        ◦ La liste des pays de la région Europe précédée du titre : List of countries
        ◦ Après la liste un paragraphe cite la source des pays avec le texte : Source: REST Countries.
        ◦ Dans le paragraphe précédent il doit y avoir un lien externe (autre onglet) qui renvoie vers : https://restcountries.com/ 
    • Implémenter un script json.php qui répond aux spécifications suivantes :
        ◦ Est exécuté au chargement de la page index.php
        ◦ Au chargement une fonction render() est appelée
        ◦ Cette fonction récupère la liste des noms officiels de pays de la région Europe depuis l’API Rest countries (sauvegarder le JSON dans un fichier index.json et l’ajouter dans un sous-dossier json du projet)
        ◦ Cette fonction itère sur le tableau des pays récupéré en JSON pour construire dynamiquement la liste à afficher dans la page index.html à l’aide d’un gabarit (template literal)
        ◦ Le résultat de cette construction doit être inséré dans la balise ul correspondante
        ◦ Pas de gestion des erreurs
</details>



