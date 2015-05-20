<?php

/*
 * Ce fichier contient les textes pour le français.
 */


/*
 * 
 * 
 * Textes génériques
 * 
 * Textes pour le gabarit
 * 
 * Textes pour les alertes par email
 * 
 * Tableau des pays
 * 
 * 
 * Liste des modules :
 * 
 * Agenda
 * Bannières
 * BDD (bases de données)
 * Carte
 * CO2
 * Compte
 * conditions_d_utilisation
 * Configuration
 * contact
 * creer_evenement
 * csv
 * default
 * email
 * faq
 * fonctions
 * footer
 * inscription_evenement
 * liens
 * login
 * message
 * password
 * qrcode
 * 
 */


// Locales
$locale = "fr_FR.utf8";


// Textes génériques
$LANG_meta_description = "Wigowiz&#8239;: plate-forme pour la gestion du covoiturage d'événement familial, institutionnel, sportif ou associatif.";
$LANG_meta_title = "Wigowiz, le covoiturage de vos événements";
$LANG_baseline = "Le covoiturage de vos événements\n";
$LANG_meta_mots = "covoiturage, organiser le covoiturage, covoiturage événementiel, covoiturage professionnel, réseau de covoiturage, plateforme de covoiturage, empreinte écologique, événement, transports doux,compensation carbone,wigowiz, carpooling, voiture, développement durable";

/*
 * Textes pour le gabarit
 */

//Barre des menus
$LANG_vos_evenements = "Vos événements";
$LANG_infos_personnelles = "Vos informations personnelles";
$LANG_modifier_position_perso = "Modifier votre position";
$LANG_mon_compte = "Mon compte";
$LANG_supprimer_compte = "Supprimer votre compte";
$LANG_menu_message = "Message";
$LANG_synchronisation_agenda = "Adresse pour synchroniser votre agenda personnel&#8239;:<br />%url_agenda%";

//Gabarit
$LANG_noscript = "Votre navigateur n'est pas compatible avec JavaScript.";

/*
 * Textes pour les alertes par email
 */

// Inscription à Wigowiz
$LANG_mail_inscription_sujet = "Bienvenue dans Wigowiz";
$LANG_mail_inscription_message = "Votre inscription sur la plateforme de covoiturage Wigowiz est validée. <br />Toute l'équipe vous remercie de votre confiance.";
// Nouvel inscrit à un événement
$LANG_mail_alerte = "Nouvel inscrit au covoiturage de votre événement";
$LANG_mail_alerte_contenu = "Bonjour"
        . "<br />"
        . "Une nouvelle inscription à votre événement vient d'être enregistrée.<br />";


/*
 * Tableau des pays.
 */

$LANG_array_countries = [
    "Andorra" => "Andorre",
    "Belgique" => "Belgique",
    "Bosna i Hercegovina" => "Bosnie-Herzégovine",
    "Canada" => "Canada",
    "Česko" => "République tchèque",
    "Crna Gora" => "Monténégro",
    "Danmark" => "Danemark",
    "Deutschland" => "Allemagne",
    "Eesti" => "Estonie",
    "Éire" => "Irlande",
    "England" => "Royaume-Uni",
    "España" => "Espagne",
    "France" => "France",
    "Hrvatska" => "Croatie",
    "Ísland" => "Islande",
    "Italia" => "Italie",
    "Kosova" => "Kosovo",
    "Latvija" => "Lettonie",
    "Lëtzebuerg" => "Luxembourg",
    "Liechtenstein" => "Liechtenstein",
    "Lietuva" => "Lituanie",
    "Magyarország" => "Hongrie",
    "Malta" => "Malte",
    "Moldova" => "Moldavie",
    "Monaco" => "Monaco",
    "Nederland" => "Pays-Bas",
    "Norge" => "Norvège",
    "Österreich" => "Autriche",
    "Polska" => "Pologne",
    "Portugal" => "Portugal",
    "România" => "Roumanie",
    "San Marino" => "Saint-Marin",
    "Shqipëria" => "Albanie",
    "Slovensko" => "Slovaquie",
    "Slovenija" => "Slovénie",
    "Suisse" => "Suisse",
    "Suomi" => "Finlande",
    "Sverige" => "Suède",
    "United States" => "États-Unis d'Amérique",
    "Vaticano" => "Vatican",
    "Беларусь" => "Biélorussie",
    "България" => "Bulgarie",
    "Сpбија" => "Serbie",
    "Ελλάδα " => "Grèce",
    "Македонија" => "Macédoine",
    "Україна" => "Ukraine"
 ];

/*
 * Module "agenda"
 */

$LANG_agenda = "Aucun événement à venir.";


/*
 * Module "bannières"
 */

$LANG_bannieres = "Ajoutez un lien vers Wigowiz sur votre site";
$LANG_bannieres_titre = "Bannières";
$LANG_bannieres_utiliser = "Copier / coller le code suivant dans vos pages&#8239;:";

/*
 * Module "carte"
 */

$LANG_carte_alerte_inscrit = "<p>Vous êtes déjà inscrit à cet événement.</p>";
$LANG_carte_alerte_aujourdhui = "\n\r<h2>L'événement a lieu aujourd'hui. Ça va être chaud pour y aller :(</h2>";
$LANG_carte_participer = "Participer";
$LANG_carte_participer_placeholder = "Participer à l'événement";
$LANG_carte_desinscrire = "Se désinscrire";
$LANG_carte_desinscrire_placeholder = "Ne plus participer à l'événement";
$LANG_date_passee = "La date de cet événement est passée. <br />Vous ne pouvez plus participer au covoiturage…";
$LANG_carte_titre_evenement = "Événement&#8239;:";
$LANG_carte_date_evenement = "Date de l'événement&#8239;:";
$LANG_carte_cree_par = "Crée par&#8239:";
$LANG_date_debut = "du %debut au %fin";


/*
 * Module "CO2"
 */

$LANG_emissions_co2 = "Émissions de CO<sub>2</sub>";
$LANG_emissions_co2_texte = "Dans les pays développés, les déplacements et en particulier l'automobile, représentent une part très importante des émissions de gaz à effet de serre, en particulier le CO<sub>2</sub> (dioxyde de carbone), directement responsables du réchauffement climatique."
        . "\n<br /><br />\n"
        . "Une voiture rejette environ 160 g de CO<sub>2</sub> par km parcouru."
        . "\n<br /><br />\n"
        . "Wigowiz vous aide à réduire l'impact écologique de vos événements, en permettant à vos invités de covoiturer plus facilement."
        . "\n<br /><br />\n"
        . "Pour évaluer plus précisément le taux de CO<sub>2</sub> que votre véhicule rejette, rendez-vous sur le <a href = 'http://www.ademe.fr/auto-diag/transports/rubrique/CarLabelling/SaisieFormulaire/FormulaireMarque2.asp' target = '_blank'>Calculateur de CO<sub>2</sub> de L'ADEME</a> (Agence de l'Environnement et de la Maîtrise de l'Energie)"
        . "\n<br /><br />\n"
        . "Une mine d'informations sur le réchauffement climatique&#8239;:"
        . "\n<br />\n"
        . "<a href='http://www.manicore.com' target='_blank'>www.manicore.com</a>.";


/*
 * Module "Compte"
 */

//Section "agenda"
$LANG_compte_titre_agenda = "Votre agenda";
$LANG_aucun_evenement = "Aucun événement à venir.";
//Section "message"
$LANG_compte_titre_message = "Messages";
$LANG_compte_aucun_message = "Vous n'avez aucun nouveau message";
$LANG_compte_un_message = "nouveau message";
$LANG_compte_plusieurs_messages = "nouveaux messages";
$LANG_compte_cadre_message = "Vous avez";
//Section "créer un compte"
$LANG_un_compte_permet_de = "<p>Pensez à créer votre compte pour&#8239;:</p>\n"
        . "<ul>\n"
        . "<li>retirer votre marqueur d'une carte</li>\n"
        . "<li>gérer vos événements, suivre l'évolution des inscriptions</li>\n"
        . "<li>participer &agrave; des covoiturages en 1 clic</li>\n"
        . "<li>déclarer les émissions de CO<sub>2</sub> que vous avez contribué à économiser</li>\n"
        . "</ul>\n";
$LANG_compte_creer_civilite = "Civilités";
$LANG_compte_creer_coordonnees = "Coordonnées";
$LANG_compte_creer_securite = "Sécurité et vie privée";
$LANG_compte_creer_infos_utiles = "Informations utiles";
$LANG_votre_nom = "Votre nom";
$LANG_votre_prenom = "Votre prénom";
$LANG_numero_tel = "Votre numéro de téléphone";
$LANG_cacher_mon_email = "Masquer mon email sur la carte";
$LANG_cacher_mon_email_suite = "Les autres participants pourront vous contacter via le site. <br /> Votre adresse email ne sera pas affichée.";
$LANG_votre_adresse = "Votre adresse";
$LANG_votre_ville = "Votre ville";
$LANG_votre_pays = "Votre pays";
$LANG_compte_creer_pays_defaut = "Choisir votre pays";
$LANG_votre_cp = "Votre code postal";
$LANG_choisissez_motdepasse = "Choisissez un mot de passe";
$LANG_confirmer = "Confirmer votre mot de passe";
$LANG_vous_avez_un_vehicule = "Vous avez un véhicule (mais pouvez aussi être le passager d'un autre)";
$LANG_pas_de_vehicule = "Vous n'avez pas de véhicule";
$LANG_cacher_mon_adresse = "masquer mon adresse sur la carte";
$LANG_commentaire_participant = "Commentaire (il apparaitra à côté de vos coordonnées)";
$LANG_bouton_terminer = "Terminer !";
$LANG_bouton_annuler = "Annuler";
//Section "ajuster".
$LANG_deplacez_marqueur = "Cliquez pour déplacer votre marqueur sur la carte, et cliquez sur Validez pour enregistrer la nouvelle position";
$LANG_modifier_votre_position = "Modifier votre position";
$LANG_compte_ajuster_bouton = "Validez votre position";
$LANG_compte_ajuster_latitude = "Latitude&#8239;:";
$LANG_compte_ajuster_longitude = "Longitude&#8239;:";
//Section "supprimer".
$LANG_compte_supprimer_titre = "Supprimer votre compte";
$LANG_compte_supprimer_texte = "\t\t\t\t<p>La suppression de votre compte est définitive.</p>"
        . "\t\t\t\t<p>Elle entraine la suppression de tous les événement que vous avez créés.</p>";
$LANG_compte_supprimer_label = "Êtes-vous sûr de vouloir supprimer votre compte&#8239;?";
$LANG_compte_supprimer_submit = "Supprimer";


/*
 * Module "Condition d'utilisation"
 */

$LANG_conditions_utilisation = "Conditions d'utilisation";
$LANG_responsabilite = "Responsabilité";
$LANG_responsabilite_texte = "<p>Les utilisateurs de ce site agissent sous leur seule et entière responsabilité pour l'organisation de leurs trajets en covoiturage. </p> <p>Le site wigowiz.com est un service de mise en relation. En aucun cas sa responsabilité ne sera engagée quant au déroulement d'un trajet effectué après une mise en contact par son biais. </p> ";
$LANG_traitement_donnees = "Traitement des données personnelles";
$LANG_donnes_personnelles_texte = "<p>Conformément à la loi n°78-17 du 6 janvier 1978, vous disposez d'un droit d'accès et de rectification sur les données personnelles vous concernant, en vous adressant au webmaster du site.</p><p>En aucun cas il ne sera fait d'autre usage de vos données personnelles que ce à quoi elles sont destinées, à savoir le fonctionnement du site et l'affichage des marqueurs sur la carte d'un événement. </p> <p>Nous nous engageons à ne pas vendre, prêter, louer ou céder à un tiers vos données personnelles, pour quelque utilisation que ce soit. </p> <p>Nous nous réservons le droit de vous prévenir par email lors de la mise en ligne de nouvelles fonctionnalités sur le site. </p>";
$LANG_affichage_donnes = "Affichage des données";
$LANG_affichage_donnes_suite = "<p>La carte de covoiturage d'un événement n'est accessible qu'aux personnes ayant reçu le lien de participation. Les autres utilisateurs ne peuvent pas accéder à vos données. Si vous le souhaitez vous pouvez en outre décider de masquer votre email ainsi que votre adresse sur la carte lors de votre inscription à un covoiturage. Si vous décidez de masquer votre email, les autres participants pourront néanmoins vous envoyer un message par le biais du site. </p>";
$LANG_conservations = "Conservation des données";
$LANG_conservations_suite = "<p>Les données concernant un événement sont conservées pendant 7 jours après la date de l'événement. Passé ce délai, elles sont soit détruites, soit conservées à des fins statistiques uniquement.</p>";
$LANG_obligations = "Obligations des utilisateurs";
$LANG_obligations_suite = "<p>Les utilisateurs du site wigowiz.com s'engagent à fournir des informations exactes les concernant, lors de l'inscription au service. Dans le cas où ces informations seraient inexactes, périmées ou incomplètes, www.wigowiz.com serait en droit de résilier le compte de l'utilisateur.</p>";

/*
 * Module "configuration
 */

//Pour l'instant aucun texte


/*
 * Module "contact"
 */

$LANG_contact = "Contact";
$LANG_votre_message = "Votre message :";
$LANG_envoyer_message_contact = "Envoyer le message !";
$LANG_votre_email = "Votre email :";
$LANG_verifier_email = "Merci de vérifier l'émail saisi";
$LANG_veuiller_saisir_message = "Veuillez saisir un message, s.v.p.";
$LANG_contact_antispam = "Antispam&#8239;: Combien font cinq et trois&#8239;?";
$LANG_contact_merci_message = "Merci de votre message";
$LANG_votre_message_envoye = "Votre message a bien été envoyé !";
$LANG_retour_accueil = "Retour à l'accueil";


/*
 * Module "creer_evenement"
 */

$LANG_titre_etape = "Étape 1/2 : créez votre événement";
$LANG_titre_evenement = "Titre de votre événement&#8239;";
$LANG_date_evenement = "Date de l'événement&#8239;";
$LANG_description = "Description&#8239;";
$LANG_heure_evenement = "Heure du début de l'événement&#8239;:";
$LANG_date_fin = "Date de la fin de l'événement&#8239;:";
$LANG_heure_fin = "Heure du début de l'événement&#8239;:";
$LANG_erreur_date = "Erreur sur les dates : la date de fin doit être postérieure à la date de début";
$LANG_je_participe = "Je participe au covoiturage de cet événement";
$LANG_cocher_alerte_mail = "Cochez cette case si vous souhaitez recevoir une alerte lorsque quelqu'un s'inscrit au covoiturage de votre événement.";
$LANG_adresse_evenement = "Adresse du lieu de l'événement";
$LANG_cp_evenement = "Code postal du lieu de l'événement";
$LANG_ville_evenement = "Ville du lieu de l'événement";
$LANG_bouton_etape_suivante = "Passer à l'étape suivante";
//Section ajuster
$LANG_creer_evenement_ajuster_enregistrer = "enregistrer" ;
$LANG_creer_evenement_ajuster_annuler = "annuler";
//Section "liens"
$LANG_evenement_cree_par = "Événement créé par ";
$LANG_lien_pour_participer = "Lien pour participer";
$LANG_creer_evenement_bouton_automatique = "Bouton automatique";
$LANG_creer_evenement_inserer = "Insérez ce bouton dans vos pages en collant ce code";
$LANG_creer_evenement_qrcode_titre = "QRcode de l'événement";
$LANG_creer_evenement_qrcode_petit = "Image de petite taille pour le Web.";
$LANG_creer_evenement_qrcode_moyen = "Image de taille moyenne pour l'impression.";
$LANG_creer_evenement_qrcode_grand = "Image de grande taille pour l'impression grand format.";
//Section "liste"
$LANG_mes_evenements = "Mes événements";
$LANG_liste_evenement_creer = "Les événements que vous avez créés";
$LANG_liste_evenement_supprimer = "Supprimer";
$LANG_liste_evenement_modifier = "Modifier";
$LANG_liste_evenement_nbr_participant = "Nombre de participants";
$LANG_liste_evenement_statistiques = "Statistiques";
$LANG_liste_evenement_bouton_supprimer_label = "Supprimer les événements sélectionnés";
$LANG_liste_evenement_bouton_supprimer = "supprimer";
$LANG_liste_evenement_participer = "Les événements auxquels vous avez participés";
$LANG_liste_evenement_se_desinscrire = "Se désinscrire";
$LANG_liste_evenement_titre = "Titre";
$LANG_liste_evenement_date = "Date";
$LANG_liste_evenement_description = "Description";
$LANG_liste_evenement_bouton_desinscrire_label = "Se désinscrire des événements sélectionnés";
$LANG_liste_evenement_bouton_desinscrire = "Se désinscrire";


/*
 * Module "CSV"
 */

$LANG_csv_ligne_entête = "\"Nom\","
                . "\"Prénom\","
                . "\"Adresse\","
                . "\"Code Postal\","
                . "\"Ville\","
                . "\"Pays\","
                . "\"Email\","
                . "\"Téléphone\","
                . "\"Latitude\","
                . "\"Longitude\","
                . "\"Distance en KM\""
                . "\n";


/*
 * Module "default"
 */

$LANG_etape1 = "Créez votre événement";
$LANG_etape2 = "Envoyer le lien aux participants";
$LANG_etape3 = "Découvrez votre carte de covoiturage";
$LANG_texte_bouton_entrer = "Créer un événement";
$LANG_phrase_accueil = "Wigowiz réduit l'impact écologique de vos événements !";
$LANG_nbr_evenement = "événements ont déjà été créés&#8239;!";


/*
 * Module "FAQ"
 */

$LANG_FAQ = "FAQ";
$LANG_faq1 = "À quoi sert Wigowiz ?";
$LANG_faq1_texte = "Ce site vous permet d'organiser le covoiturage pour vos événements : mariages, rencontres professionnelles, rassemblements associatifs, formations, compétitions sportives…<br />L'idée qui a donné naissance à wigowiz est d'offrir un service simple et efficace, sans superflu. Deux clics suffisent à créer un événement. Deux clics suffisent à participer au covoiturage d'un événement."
        . "<br />"
        . "Sans prétention, Wigowiz vous aide à réduire limpact écologique de vos événements et permet à vos invités de faire des économies et des rencontres&#8239;!";
$LANG_faq2 = "Combien coûte l'utilisation de ce site ?";
$LANG_faq2_texte = "L'utilisation de Wigowiz est gratuite.<br />Vous appréciez ce service de covoiturage ? Il vous fait réaliser des économies ? Pour nous aider à le développer et à financer les frais techniques du site, vous pouvez faire un don, même de 1 euro.";
$LANG_faq3 = "Pourquoi le covoiturage&#8239;?";
$LANG_faq3_texte = "L'augmentation du prix des carburants, les embouteillages, la pollution et bien sûr le réchauffement climatique, nous obligent aujourd'hui plus que jamais, à remettre en question l'utilisation que nous faisons de la voiture.<br /><br />En réduisant le nombre de véhicules en circulation, le covoiturage participe au développement de léco-mobilité.<br /><br />Ses avantages sont multiples :
<ul>
    <li>Réduction du nombre de véhicules en circulation, diminution des embouteillages</li>
    <li>Baisse de la pollution, réduction des émissions de CO<sub>2</sub></li>
    <li>Économies d'énergie</li>
    <li>Économies pour le conducteur et les passagers</li>
    <li>Réduction des accidents (moins de voitures en circulation et conducteur responsabilisé par la présence de passagers donc plus appliqué dans sa conduite)</li>
    <li>Développement du lien social</li>
</ul>";
$LANG_faq4 = "Partage des frais";
$LANG_faq4_texte = "<p>Le covoiturage permet à tout le monde de faire des économies, en partageant les frais. Mais ce partage n'est pas obligatoire et doit être décidé par le conducteur et le passager au moment de se mettre daccord pour covoiturer.Il est important que les montants des éventuelles participations soient fixés dès le début et clairs pour tout le monde."
        . "<br />"
        . "À l'inscription, Wigowiz permet à l'utilisateur d'indiquer son souhait concernant le partage des frais.</p>"
        . "<p><strong>Le conducteur ne doit accepter aucune rémunération supérieure à la contribution aux frais</strong> et ne réaliser aucun bénéfice sur ses trajets. Sinon, il entre dans le champ du \"transport rémunéré de personnes\" et est assujetti à la souscription dune assurance professionnelle spécifique."
        . "</p>"
        . "<p>La meilleure méthode est de <strong>diviser le prix total du voyage (carburant + péage) par le nombre de personne chauffeur compris</strong>.En général, <strong>on ne compte pas les coûts liés à la voiture</strong> (entretien, assurance, ammortissement) car le conducteur aurait de toute façon utilisé son véhicule pour le déplacement."
        . "</p>"
        . "<p>Méthode de calcul :</p>"
        . "<ol>"
        . "\t<li>le plus simple est de partir sur une base de 7L/100 km (cest une moyenne)  => On rapporte ce chiffre au nombre de km (K) du trajet : (K x 7)/100.</li>"
        . "\t<li>on multiplie par le coût moyen du carburant  = > on obtient le « coût carburant » du trajet</li>"
        . "\t<li>on ajoute le coût des éventuels péages</li>"
        . "\t<li>on divise le total par le nombre de personnes dans la voiture, conducteur compris</li>"
        . "</ol>"
        . "<p>Exemple :<br />"
        . "3 personnes (chauffeur compris) pour un trajet de 150 km avec un péage à 15 €."
        . "<br />"
        . "Coût carburant (consommation 7l / 100, prix au litre 1.25 €) :"
        . "<br />"
        . "(7*150/100)*1.2  =  13"
        . "<br />Prix du péage : 15"
        . "<br />Coût global du voyage : 15 + 13  =  28"
        . "<br />Soit pour 3 personnes dans le véhicule, une participation pour les 2 passagers de 28 / 3  =  9"
        . "<br /><br /><br />"
        . "<strong>Les sites de recherche ditinéraires indiquent aussi le coût de votre trajet :</strong>"
        . "<br />"
        . "<a href = 'http://www.viamichelin.fr' target = '_blank'>www.viamichelin.fr</a>"
        . "<br /><a href = 'http://www.mappy.fr' target = '_blank'>www.mappy.fr</a>"
        . "<br /><br /><strong>Trouver le carburant le moins cher sur ma route :</strong>"
        . "<br />"
        . "<a href = 'http://www.prix-carburants.gouv.fr/' target = '_blank'>http://www.prix-carburants.gouv.fr</a>"
        . "</p>";
$LANG_faq5 = "Assurance";
$LANG_faq5_texte = "Toutes les personnes transportées sont couvertes par la garantie obligatoire de responsabilité civile du propriétaire du véhicule en cas d'accident. Pour covoiturer, aucune extension de garantie nest donc nécessaire.<br />
Mais il peut être conseillé de déclarer à son assureur la pratique du covoiturage, notamment pour permettre à ce dernier dapprécier les risques garantis et dattirer lattention de lassuré sur certains points.<br />
En particulier, avant de céder le volant à l'un de ses passagers, le conducteur doit vérifier que son contrat ne comporte pas une clause de conduite exclusive.<br />
Même lorsque son contrat inclut le prêt de volant, l'automobiliste doit savoir que si le conducteur occasionnel provoque un accident, cest le souscripteur de lassurance qui sera pénalisé dun malus. Si le conducteur occasionnel est novice, le contrat dassurance peut notamment prévoir lapplication dune franchise plus élevée, qui resterait à la charge du souscripteur. Si vous prêtez le volant, n'oubliez pas qu'en cas d'accident et si votre conducteur est en tort, c'est vous qui paierez le malus. Certaines assurances demandent une déclaration en cas de prêt du véhicule, et exigent que la personne ait deux ans de permis au minimum. Pensez à vous renseigner.";


/*
 * Module "inscription_evenement"
 */

$LANG_inscription_titre = "S'inscrire à un événement";
$LANG_inscription_pas_inscrit = "Pas encore inscrit sur Wigowiz";
$LANG_inscription_texte_creation_compte = "Pour pouvoir vous inscrire à un événement vous devez posséder un compte Wigowiz.";
$LANG_inscription_deja_inscrit = "Déjà inscrit";

/*
 * Module "liens"
 */

$LANG_liens = "Une liste de liens utiles";
$LANG_liens_titre = "Quelques liens";


/*
 * Module "login"
 */

$LANG_adresse_email = "Votre adresse e-mail";
$LANG_login_password = "Votre mot de passe";
$LANG_bouton_connexion = "Connexion";
$LANG_creer_un_compte = "Créer un compte";
$LANG_se_deconnecter = "Se déconnecter";
$LANG_deconnexion = "Déconnexion";
$LANG_texte_deconnexion = "<p>Vous êtes déconnecté</p>\n\r";
$LANG_login_erreur_connexion = "<p>Identifiants incorrects</p>";
$LANG_login_titre_inscrire = "Connectez-vous pour pouvoir vous inscrire.";


/*
 * Module "Message"
 */

//Formulaire de rédaction d'un message.
$LANG_message_evenement = "Événement&#8239;";
$LANG_message_destinataire = "Destinataire&#8239;";
$LANG_message_texte_message = "Votre message";
$LANG_message_submit = "Envoyer";
$LANG_message_reset = "Annuler";
//Formulaires avec les listes de messages
$LANG_message_titre = "Message";
$LANG_message_message_recu = "Messages reçus";
$LANG_message_date = "Date";
$LANG_message_sujet = "Sujet";
$LANG_message_expediteur = "Expéditeur";
$LANG_message_etat = "État";
$LANG_message_destinaire = "Destinataire";
$LANG_message_datatable_empty = "Aucun message trouvé";
$LANG_message_datatable_info = "Message _START_ à _END_ sur _TOTAL_ messages";
$LANG_message_datatable_infoEmpty = "Message 0 à 0 sur 0 message";
$LANG_message_datatable_infoFiltered = "(filtered from _MAX_ total entries)";
$LANG_message_datatable_thousands = " ";//Attention sert pour séparer les milliers
$LANG_message_datatable_lengthMenu = "Afficher _MENU_ messages";
$LANG_message_datatable_loadingRecords = "Chargement…";
$LANG_message_datatable_processing = "Traitement en cours…";
$LANG_message_datatable_search = "Rechercher&#8239;:";
$LANG_message_datatable_searchPlaceholder_recu = "Rechercher un message reçu";
$LANG_message_datatable_searchPlaceholder_emis = "Rechercher un message émis";
$LANG_message_datatable_zeroRecords = "Aucun message trouvé";
$LANG_message_datatable_first = "Première page";
$LANG_message_datatable_last = "Dernière page";
$LANG_message_datatable_next = "Page suivante";
$LANG_message_datatable_previous = "Page précédente";
$LANG_message_datatable_sortAscending = ": activer pour trier la colonne par ordre croissant";
$LANG_message_datatable_sortDescending = ": activer pour trier la colonne par ordre décroissant";
//Section "lire un message"
$LANG_message_lire_expediteur = "Expéditeur&#8239;:";
$LANG_message_lire_date = "Date&#8239;:";
$LANG_message_lire_evenement = "Événement&#8239;:";


/*
 * Modules "password"
 */

//Pour l'instant aucun texte


/*
 * Modules "qrcode"
 */

//À priori pas besoin de texte