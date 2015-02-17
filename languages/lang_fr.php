<?php

function datecomplete($lastmodified){
   /* list($date, $time)  =  explode(" ", $lastmodified);
    list($year, $month, $day)  =  explode("-", $date);
    list($hour, $min, $sec)  =  explode(":", $time);
    $months  =  array("janvier", "février", "mars", "avril", "mai", "juin","juillet", "août", "septembre", "octobre", "novembre", "décembre");
    if ($month ! =  0){
        $index_month  =  $month - 1;
    } else {
        $index_month  =  $month;
    }
    return "le $day ".$months[$index_month]." $year";*/
}

//Locales
$locale = 'fr_FR.utf8';


//AJOUTS à traduire
$LANG_phrase_accueil = "Wigowiz réduit l'impact écologique<br />de vos événements !";
$LANG_pensez_creer_compte = "Pensez à créer votre compte !";
$LANG_un_compte_permet_de = "<p>Pensez à créer votre compte pour :</p><ul><li>retirer votre marqueur d'une carte</li><li>gérer vos événements, suivre l'évolution des inscriptions</li><li>participer &agrave; des covoiturages en 1 clic</li><li>déclarer les émissions de CO<sub>2</sub> que vous avez contribué à économiser</li></ul>";
$LANG_un_compte_permet_infobulle = "Un compte vous permet de :\n- gérer vos événements, suivre l'évolution des inscriptions\n- participer &agrave; des covoiturages en 1 clic\n- déclarer les émissions de CO<sub>2</sub> que vous avez contribué à économiser\n- retirer votre marqueur d'une carte";
$LANG_date_passee = "La date de cet événement est passée. <br />Vous ne pouvez plus participer au covoiturage…";
$LANG_invitation = "Bonjour,%0AJ'organise le covoiturage pour «".$_SESSION['evenement']['titre']."» ".datecomplete($_SESSION['evenement']['date_evenement'])." !%0AJe vous propose d'y participer ; cela prend moins d'une minute. %0AEnsemble nous pouvons réduire l'empreinte écologique de cet événement… et faire des économies !%0A%0ALien pour participer : http://www.".$SITE_nom_site."/carte.php?m = ".$_SESSION['evenement']['code']."%0A%0ALa carte à laquelle donne accès ce lien n'est réservée qu'aux seuls participants invités à l'événement. N'hésitez pas à vous y inscrire. %0A%0A".$_SESSION['evenement']['prenom']." ".$_SESSION['evenement']['nom']."%0A%0A%0A%0A__________________________________%0APour en savoir plus sur le service offert par www.".$SITE_nom_site.", cliquez ici : http://www.".$SITE_nom_site.""; 

$LANG_faq3 = "Pourquoi le covoiturage&#8239;? ";
$LANG_faq3_texte = "L'augmentation du prix des carburants, les embouteillages, la pollution et bien sûr le réchauffement climatique, nous obligent aujourd'hui plus que jamais, à remettre en question l'utilisation que nous faisons de la voiture.<br /><br />En réduisant le nombre de véhicules en circulation, le covoiturage participe au développement de léco-mobilité.<br /><br />Ses avantages sont multiples :
<ul>
    <li>Réduction du nombre de véhicules en circulation, diminution des embouteillages</li>
    <li>Baisse de la pollution, réduction des émissions de CO<sub>2</sub></li>
    <li>Économies d'énergie</li>
    <li>Économies pour le conducteur et les passagers</li>
    <li>Réduction des accidents (moins de voitures en circulation et conducteur responsabilisé par la présence de passagers donc plus appliqué dans sa conduite)</li>
    <li>Développement du lien social</li>
</ul>";
$LANG_faq4 = "Partage des frais ";
$LANG_faq4_texte = "Le covoiturage permet à tout le monde de faire des économies, en partageant les frais. Mais ce partage n'est pas obligatoire et doit être décidé par le conducteur et le passager au moment de se mettre daccord pour covoiturer.
Il est important que les montants des éventuelles participations soient fixés dès le début et clairs pour tout le monde.<br />
A l'inscription, wigowiz permet à l'utilisateur d'indiquer son souhait concernant le partage des frais.
<br /><br />
<b>Le conducteur ne doit accepter aucune rémunération supérieure à la contribution aux frais</b> et ne réaliser aucun bénéfice sur ses trajets. Sinon, il entre dans le champ du \"transport rémunéré de personnes\" et est assujetti à la souscription dune assurance professionnelle spécifique.
<br /><br />
La meilleure méthode est de <b>diviser le prix total du voyage (carburant + péage) par le nombre de personne chauffeur compris</b>.
En général, <b>on ne compte pas les coûts liés à la voiture</b> (entretien, assurance, ammortissement) car le conducteur aurait de toute façon utilisé son véhicule pour le déplacement.
<br /><br />
Méthode de calcul :<br />
1. le plus simple est de partir sur une base de 7L/100 km (cest une moyenne)  => On rapporte ce chiffre au nombre de km (K) du trajet : (K x 7)/100.<br />
2. on multiplie par le coût moyen du carburant  = > on obtient le « coût carburant » du trajet<br />
3. on ajoute le coût des éventuels péages<br />
4. on divise le total par le nombre de personnes dans la voiture, conducteur compris<br />
<br />
Exemple : 
3 personnes (chauffeur compris) pour un trajet de 150 km avec un péage à 15 €.<br />
Coût carburant (consommation 7l / 100, prix au litre 1.25 €) :<br />
(7*150/100)*1.2  =  13 <br />
Prix du péage : 15 <br />
Coût global du voyage : 15 + 13  =  28 .<br />
Soit pour 3 personnes dans le véhicule, une participation pour les 2 passagers de 28 / 3  =  9 .<br />
<br /><br />
<b>Les sites de recherche ditinéraires indiquent aussi le coût de votre trajet :</b><br />
<a href = 'http://www.viamichelin.fr' target = '_blank'>www.viamichelin.fr</a><br />
<a href = 'http://www.mappy.fr' target = '_blank'>www.mappy.fr</a><br />
<br />
<b>Trouver le carburant le moins cher sur ma route :</b><br />
<a href = 'http://www.prix-carburants.gouv.fr/' target = '_blank'>http://www.prix-carburants.gouv.fr</a>";
$LANG_faq5 = "Assurance ";
$LANG_faq5_texte = "Toutes les personnes transportées sont couvertes par la garantie obligatoire de responsabilité civile du propriétaire du véhicule en cas d'accident. Pour covoiturer, aucune extension de garantie nest donc nécessaire.<br />
Mais il peut être conseillé de déclarer à son assureur la pratique du covoiturage, notamment pour permettre à ce dernier dapprécier les risques garantis et dattirer lattention de lassuré sur certains points.<br />
En particulier, avant de céder le volant à l'un de ses passagers, le conducteur doit vérifier que son contrat ne comporte pas une clause de conduite exclusive.<br />
Même lorsque son contrat inclut le prêt de volant, l'automobiliste doit savoir que si le conducteur occasionnel provoque un accident, cest le souscripteur de lassurance qui sera pénalisé dun malus. Si le conducteur occasionnel est novice, le contrat dassurance peut notamment prévoir lapplication dune franchise plus élevée, qui resterait à la charge du souscripteur. Si vous prêtez le volant, n'oubliez pas qu'en cas d'accident et si votre conducteur est en tort, c'est vous qui paierez le malus. Certaines assurances demandent une déclaration en cas de prêt du véhicule, et exigent que la personne ait deux ans de permis au minimum. Pensez à vous renseigner.";
$LANG_emissions_co2 = "Emissions de CO<sub>2</sub>";
$LANG_emissions_co2_texte = "Dans les pays développés, les déplacements et en particulier l'automobile, représentent une part très importante des émissions de gaz à effet de serre, en particulier le CO<sub>2</sub> (dioxyde de carbone), directement responsables du réchauffement climatique.<br /><br />
Une voiture rejette environ 160 g de CO<sub>2</sub> par km parcouru.<br /><br />
wigowiz vous aide à réduire l'impact écologique de vos événements, en permettant à vos invités de covoiturer plus facilement.
<br /><br />
Pour évaluer plus précisément le taux de CO<sub>2</sub> que votre véhicule rejette, rendez-vous sur le <a href = 'http://www.ademe.fr/auto-diag/transports/rubrique/CarLabelling/SaisieFormulaire/FormulaireMarque2.asp' target = '_blank'>Calculateur de CO<sub>2</sub> de L'ADEME</a> (Agence de l'Environnement et de la Maîtrise de l'Energie)
<br /><br />
Une mine d'informations sur le réchauffement climatique :<br />
<a href = 'http://www.manicore.com' target = '_blank'>www.manicore.com</a>";

$LANG_presse = "Presse"; 

$LANG_demo = "Démonstration !"; 
$LANG_demo_texte1 = "Création d'un événement"; 
$LANG_demo_texte2 = "Inscription au covoiturage d'un événement"; 
$LANG_votre_adresse_idem_evenement = "Votre adresse est identique à celle de l'événement.";


///////////////////////////////////////////
////////////////////////////////////////////

$LANG_bannieres_titre = "Bannières";
$LANG_bannieres = "Ajoutez un lien vers wigowiz.com sur votre site";
$LANG_bannieres_utiliser = "Copier / coller le code suivant dans vos pages :";
$LANG_cacher_mon_adresse = "masquer mon adresse sur la carte";

// PAYS
$LATITUDE_DEFAULT = "46.769968";
$LONGITUDE_DEFAULT = "2.37";

// METAS
$LANG_meta_description = "Wigowiz&#8239;: plate-forme pour la gestion du covoiturage d'événement familial, institutionnel, sportif ou associatif.";
$LANG_meta_title = "Wigowiz, le covoiturage de vos événements";
$LANG_baseline = "Le covoiturage de vos événements\n";
$LANG_meta_mots = "covoiturage, organiser le covoiturage, covoiturage événementiel, covoiturage professionnel, réseau de covoiturage, plateforme de covoiturage, empreinte écologique, événement, transports doux,compensation carbone,wigowiz, carpooling, voiture, développement durable";

// CONNEXION
$LANG_bouton_connexion = "Connexion";
$LANG_mon_compte = "Mon compte";
$LANG_se_deconnecter = "Se déconnecter";
$LANG_erreur_identification = "Erreur d'identification";
$LANG_mot_de_passe_perdu = "Mot de passe perdu ?";
$LANG_creer_un_compte = "Créer un compte";

// CREER EVENEMENT
$LANG_votre_prenom = "Votre prénom";
$LANG_pour_utiliser_ce_site = "Pour utiliser ce site&#8239;:";
$LANG_etape1 = "Créez votre événement";
$LANG_etape2 = "Envoyer le lien aux participants";
$LANG_etape3 = "Découvrez votre carte de covoiturage";
$LANG_texte_bouton_entrer = "créer un événement";
$LANG_titre_etape = "Etape 1/2 : créez votre événement";
$LANG_titre_evenement = "Titre de votre événement : ";
$LANG_date_evenement = "Date de l'événement :";
$LANG_jour = "Jour";
$LANG_mois = "Mois";
$LANG_janvier = "janvier";
$LANG_fevrier = "février";
$LANG_mars = "mars";
$LANG_avril = "avril";
$LANG_mai = "mai";
$LANG_juin = "juin";
$LANG_juillet = "juillet";
$LANG_aout = "août";
$LANG_septembre = "septembre";
$LANG_octobre = "octobre";
$LANG_novembre = "novembre";
$LANG_decembre = "décembre";
$LANG_annee = "Année";
$LANG_veuillez_preciser_date = "Veuillez préciser la date , s.v.p.";
$LANG_date_deja_passee = "La date de l'événement est passée…";
$LANG_description = "Description (facultatif)";
$LANG_cocher_alerte_mail = "Cochez cette case si vous souhaitez recevoir une alerte lorsque quelqu'un s'inscrit au covoiturage de votre événement.";
$LANG_adresse_evenement = "Adresse du lieu de l'événement";
$LANG_cp_evenement = "Code postal du lieu de l'événement";
$LANG_ville_evenement = "Ville du lieu de l'événement";

$LANG_pays_evenement = "Pays du lieu de l'événement";
$LANG_enregistrer_changements = "Enregistrer les changements";
$LANG_bouton_terminer = "Terminer !";
$LANG_titre_etape2 = "Etape 2/2 : localisez votre événement";
$LANG_votre_nom = "Votre nom";
$LANG_adresse_email = "Votre adresse e-mail";
$LANG_email_pas_valide = "Cet email n'est pas valide";
$LANG_bouton_etape_suivante = "Passer à l'étape suivante";
$LANG_evenement_non_geolocalise = "L'adresse de l'événement n'a pas pu être géolocalisée.<br />Déplacez le marqueur sur la carte jusqu'à l'endroit voulu, et cliquez sur Valider. ";
$LANG_evenement_non_geolocalise_info = "Déplacez le marqueur à l'endroit voulu, et cliquez sur Valider.";
$LANG_evenement_geolocalise_ok = "La position de l'événement a bien été modifiée";
$LANG_evenement_modifie_ok = "Les informations de l'événement ont bien été modifiées";
$LANG_modifier_infos = "Modifier les infos";
$LANG_modifier_informations = "Modifier les informations";
$LANG_modifier_position = "Modifer la position sur la carte";
$LANG_modifier_votre_position = "Modifier votre position";
$LANG_modifier_position_marqueur = "Modifer la position du marqueur";
$LANG_lien_pour_participer = "Lien pour <strong>participer</strong>";
$LANG_lien_pour_administrer = "Lien pour <strong>administrer</strong> :";
$LANG_ajouter_favoris = "Ajouter ce lien à vos favoris";
$LANG_envoyer_le_lien = "Envoyez ce lien à tous les participants";
$LANG_message_automatique = "Message automatique";
$LANG_confirm_annul_alerte = "Vous ne receverez plus d'alerte par mail lors des futures inscriptions au covoiturage de cet événement. ";
$LANG_suivez_ce_lien = "Suivez ce lien pour gérer l'événement (changer, effacer, etc.)";
$LANG_rappel_des_liens = "Rappel des liens :";
$LANG_important = "Important :";
$LANG_enregistrer_url = "Enregistrez s'il vous plaît l'adresse de cette page avant de quitter votre navigateur. <br />Vous pouvez par exemple l'ajouter à vos favoris / signets.";
$LANG_enregistrer_liens = "Enregistrez ces liens avant de quitter cette page. ";
$LANG_ajouter_cette_carte = "Ajouter cette carte à vos favoris";

//PARTICIPER
$LANG_votre_adresse_non_localisee = "Votre adresse n'a pas pu être géolocalisée.<br />Déplacez votre marqueur sur la carte, zommez jusqu'à votre adresse pour le positionner, et cliquez sur Validez. ";
$LANG_votre_adresse_pas_precise = "Votre adresse n'est pas assez précise ; votre marqueur superpose une place déjà occupée.";
$LANG_deplacez_marqueur = "Déplacez votre marqueur sur la carte, et cliquez sur Validez pour enregistrer la nouvelle position";
$LANG_modifier_vos_coordonnees = "Modifier vos coordonnées";
$LANG_nom_pseudo = "Votre nom (ou pseudo) :";
$LANG_numero_tel = "Votre numéro de téléphone";
$LANG_email = "Adresse email";
$LANG_cacher_mon_email = "masquer mon email sur la carte";
$LANG_cacher_mon_email_suite = "Les autres participants pourront vous contacter via le site. <br /> Votre adresse email ne sera pas affichée.";
$LANG_votre_adresse = "Votre adresse";
$LANG_votre_ville = "Votre ville";
$LANG_votre_pays = "Votre pays";
$LANG_votre_cp = "Votre code postal";
$LANG_vous_avez_un_vehicule = "Vous avez un véhicule (mais pouvez aussi être le passager d'un autre)";
$LANG_pas_de_vehicule = "Vous n'avez pas de véhicule";
$LANG_possede_vehicule = "Possède un véhicule (mais peut être le passager d'un autre)";
$LANG_ne_possede_vehicule = "Ne possède pas de véhicule";
$LANG_plus_serons = "Plus nous serons nombreux à participer, plus grande sera la réduction de notre empreinte écologique. ";
$LANG_pas_de_participants = "Il n'y a pas encore de participants";


$LANG_commentaire_participant = "Commentaire (il apparaitra à côté de vos coordonnées)";
$LANG_seuls_les_visiteurs = "Seuls les visiteurs qui ont reçu le lien de participation à cet événement auront accès à vos informations";
$LANG_vous_etes_ajoute = "Vous êtes ajouté !";
$LANG_en_participant = "En vous inscrivant à ce covoiturage, vous acceptez les conditions générales d'utlisation du site wigowiz.com";
$LANG_vos_infos = "Saisissez vos informations";
$LANG_envoyer_message = "Envoyer un message à";
$LANG_votre_message = "Votre message :";
$LANG_envoyer_message_contact = "Envoyer le message !";
$LANG_donnes_ajoutees = "Vos données ont bien été ajoutées à la carte !";


//COMMUNS
$LANG_bouton_envoyer = "Envoyer";
$LANG_bouton_enregistrer = "Enregistrer !";
$LANG_bouton_annuler = "Annuler";
$LANG_veuillez_saisir_ce_champ = "Veuillez remplir ce champ, s.v.p.";
$LANG_veuillez_points = "Veuillez remplir ce champ…";
$LANG_veuillez_points_suite = "… ou celui-la, s.v.p.";
$LANG_rester_identifie = "Rester identifié quelques jours";
$LANG_participant = "participant";
$LANG_participants = "participants";
$LANG_aucovoiturage = " au covoiturage";

//DON
$LANG_merci = "Merci !";
$LANG_confirm_don = "Votre don a bien été enregistré. <br /><br />Merci pour votre soutien !";

//FAQ
$LANG_faq1 = "À quoi sert wigowiz ?";
$LANG_faq1_texte = "Ce site vous permet d'organiser le covoiturage pour vos événements : mariages, rencontres professionnelles, rassemblements associatifs, formations, compétitions sportives…<br />L'idée qui a donné naissance à wigowiz est d'offrir un service simple et efficace, sans superflu. Deux clics suffisent à créer un événement. Deux clics suffisent à participer au covoiturage d'un événement. <br />Sans prétention, wigowiz vous aide à réduire limpact écologique de vos événements et permet à vos invités de faire des économies et des rencontres ! ";
$LANG_faq2 = "Combien coûte l'utilisation de ce site ? ";
$LANG_faq2_texte = "L'utilisation de wigowiz est gratuite.<br />Vous appréciez ce service de covoiturage ? Il vous fait réaliser des économies ? Pour nous aider à le développer et à financer les frais techniques du site, vous pouvez faire un don, même de 1 euro.";

//TEMOIGANGES
$LANG_temoignages = "Témoignages";
$LANG_temoignages_texte = "Comment utilisez-vous ce site ? Avez-vous réduit le nombre de voiture se rendant à votre événement ? Pour nous envoyez votre témoignage, merci d'utiliser le formulaire de contact. ";
$LANG_ecrivez_nous = "Ecrivez-nous";


//CONTACT
$LANG_votre_email = "Votre email :";
$LANG_verifier_email = "Merci de vérifier l'émail saisi";
$LANG_veuiller_saisir_message = "Veuillez saisir un message, s.v.p.";
$LANG_votre_message_envoye = "Votre message a bien été envoyé !";
$LANG_retour_accueil = "Retour à l'accueil";

//CONDITION D'UTILISATION
$LANG_responsabilite = "Responsabilité";
$LANG_responsabilite_texte = "<p>Les utilisateurs de ce site agissent sous leur seule et entière responsabilité pour l'organisation de leurs trajets en covoiturage. </p> <p>Le site wigowiz.com est un service de mise en relation. En aucun cas sa responsabilité ne sera engagée quant au déroulement d'un trajet effectué après une mise en contact par son biais. </p> ";
$LANG_traitement_donnees = "Traitement des données personnelles";
$LANG_donnes_personnelles_texte = "<p>Conformément à la loi n°78-17 du 6 janvier 1978, vous disposez d'un droit d'accès et de rectification sur les données personnelles vous concernant, en vous adressant au webmaster du site.</p><p>En aucun cas il ne sera fait d'autre usage de vos données personnelles que ce à quoi elles sont destinées, à savoir le fonctionnement du site et l'affichage des marqueurs sur la carte d'un événement. </p> <p>Nous nous engageons à ne pas vendre, prêter, louer ou céder à un tiers vos données personnelles, pour quelque utilisation que ce soit. </p> <p>Nous nous réservons le droit de vous prévenir par email lors de la mise en ligne de nouvelles fonctionnalités sur le site. </p>";
$LANG_affichage_donnes = "Affichage des données";
$LANG_affichage_donnes_suite = "<p>La carte de covoiturage d'un événement n'est accessible qu'aux personnes ayant reçu le lien de participation. Les autres utilisateurs ne peuvent pas accéder à vos données. Si vous le souhaitez vous pouvez en outre décider de masquer votre email ainsi que votre adresse sur la carte lors de votre inscription à un covoiturage. Si vous décidez de masquer votre email, les autres participants pourront néanmoins vous envoyer un message par le biais du site. </p>";
$LANG_conservations = "Conservation des données";
$LANG_conservations_suite = "<p>Les données concernant un événement sont conservées pendant 7 jours après la date de l'événement. Passé ce délais, elles sont soit détruites, soit conservées à des fins statistiques uniquement.</p>";
$LANG_obligations = "Obligations des utilisateurs";
$LANG_obligations_suite = "<p>Les utilisateurs du site wigowiz.com s'engagent à fournir des informations exactes les concernant, lors de l'inscription au service. Dans le cas où ces informations seraient inexactes, périmées ou incomplètes, www.wigowiz.com serait en droit de résilier le compte de l'utilisateur.</p>";

//PIED
$LANG_contact = "Contact";
$LANG_temoignages = "Témoignages";
$LANG_FAQ = "FAQ";
$LANG_conditions_utilisation = "Conditions d'utilisation";

//COMPTE
$LANG_mon_compte = "Mon compte";
$LANG_vos_evenements = "Vos événements";
$LANG_infos_personnelles = "Vos informations personnelles";
$LANG_mes_evenements = "Mes événements";
$LANG_acceder_compte = "Accéder à mon compte";
$LANG_compte_motdepasse = "Mot de passe";
$LANG_un_compte_permet = "Un compte vous permet&#8239;: ";
$LANG_compte1 = "d'accéder directement aux événements auxquels vous participez, ou que vous avez créés ; plus besoin de retenir les urls des cartes. ";
$LANG_compte2 = "de modifier vos coordonnées, votre position, le nombre de place dans votre véhicule le cas échéant";
$LANG_compte3 = "de vous inscrire à la newsletter pour être tenu au courant des améliorations et nouvelles fonctionnalités.";
$LANG_compte_deja_inscrit = "Cet email est déjà inscrit.";
$LANG_erreur_mail = "Erreur dans l'adresse email.";
$LANG_choisissez_motdepasse = "Choisissez un mot de passe";
$LANG_saisir_motdepasse = "Veuillez saisir un mot de passe";
$LANG_confirmer = "Confirmer votre mot de passe";
$LANG_motsdepasse_diffrents = "Les mots de passe ne correspondent pas";
$LANG_infos_modifiees = "Vos informations personnelles ont bien été modifiées";
$LANG_modifier_position_perso = "Modifier votre position";
$LANG_position_modifiee = "Votre position a bien été modifiée";
$LANG_motdepasse_perdu = "Récupération de mot de passe";
$LANG_renvoi_motdepasse = "Recevoir mon mot de passe";
$LANG_email_inconnu = "Cet email est inconnu";
$LANG_motdepasse_renvoye = "Votre mot de passe vient de vous être envoyé par mail";
$LANG_rappel_motdepasse = "Rappel de votre mot de passe";
$LANG_lien_de_participation = "Lien de participation : ";
$LANG_lien_de_administration = "Lien d'administration : ";
$LANG_supprimer_cet_evenement = "Supprimer cet événement";

$LANG_deplace_marqueur = "Déplacer votre marqueur";
$LANG_derniere_etape = "Dernière étape :";
$LANG_identifier_les_marqueurs = "Identifiez les marqueurs situés sur votre trajet";
$LANG_contactez_les_participants = "Contacter le ou les participants concernés";
$LANG_organisez_votre_venue = "Organisez votre venue ensemble";
$LANG_email_protege = "Email protégé";
$LANG_message_defaut = "Bonjour, j'aimerais beaucoup covoiturer avec vous";

//MAILS
$LANG_mail_alerte = "Nouvel inscrit au covoiturage de votre événement";
//$LANG_mail_alerte_contenu = "Bonjour, \nL'inscription de ".htmlspecialchars(stripslashes($_POST['prenom_participant']))." ".htmlspecialchars(stripslashes($_POST['nom_participant']))." vient d'être enregistrée pour le covoiturage de votre événement";
$LANG_mail_alerte_contenu = "Bonjour <br /> Une nouvelle inscription à votre événement vient d'être enregistrée.<br />";
$LANG_mail_alerte_contenu2 = "\nPour consulter la carte de covoiturage de votre événement, cliquez ici :\n".$SITE_nom_site."admin_carte.php?m = ".$_SESSION['evenement']['code_admin']."\n\n\n----\nSi nous ne souhaitez plus recevoir d'alerte mail pour cet événement, cliquez ici :\nhttp://www.wigowiz.com/admin_carte.php?a = annule_alerte&m = ".$_SESSION['evenement']['code_admin']."";
$LANG_vous_avez_un_message = "Vous avez un message";

//Email inscription à wigowiz.
$LANG_mail_inscription_sujet = "Bienvenue dans Wigowiz";
$LANG_mail_inscription_message = "Votre inscription sur la plateforme de covoiturage Wigowiz est validée. <br />Toute l'équipe vous remercie de votre confiance.";

//Carte ?
$LANG_evenement_cree_par = "Événement créé par ";
$LANG_ne_plus_participer = "Annuler ma participation à cet événement";
$LANG_je_participe = "Je participe au covoiturage de cet événement";

//PAYPAL
$LANG_paypal = "<form action = 'https://www.paypal.com/cgi-bin/webscr' method = 'post'>
    <input type = 'hidden' name = 'cmd' value = '_s-xclick'>
    <input type = 'hidden' name = 'hosted_button_id' value = '6185948'>
    <input type = 'image' src = 'https://www.paypal.com/fr_FR/FR/i/btn/btn_donate_SM.gif' border = '0' name = 'submit' alt = 'PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !'>
    <image alt = '' border = '0' src = 'https://www.paypal.com/fr_FR/i/scr/pixel.gif' width = '1' height = '1'>
</form>";

?>