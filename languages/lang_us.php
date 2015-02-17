<?
function datecomplete($lastmodified){
list($date, $time) = explode(" ", $lastmodified);
list($year, $month, $day) = explode("-", $date);
list($hour, $min, $sec) = explode(":", $time);
$months = array("January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December");
//echo $lastmodified = "le $day ".$months[$month-1]." $year à ${hour}h${min}&nbsp;";
return "on ".$months[$month-1]." ".$day."th $year";
}




$LANG_demo="View!"; 
$LANG_demo_texte1="Creating an event"; 
$LANG_demo_texte2="Join carpooling an event"; 
$LANG_votre_adresse_idem_evenement="Your address is the same as the event.";

$LANG_phrase_accueil="Wigowiz reduces the environmental impact<br> of your events!";
$LANG_pensez_creer_compte="Remember to create your account!";




$LANG_bannieres_titre="Banners";
$LANG_bannieres="Add a link to wigowiz.com on your website";
$LANG_bannieres_utiliser="Copy / paste the following code in your pages :";
$LANG_cacher_mon_adresse="hide my address on the map";
 

// PAYS
$LATITUDE_DEFAULT="34.97600151317588";
$LONGITUDE_DEFAULT="-83.21044921875";


// METAS
$LANG_meta_description="Wigowiz: a platform for the management of carpools for family, institutional, sports or NGO events";
$LANG_meta_title="Wigowiz! organize carpooling for your events";
$LANG_meta_mots="carpool, we go together, carpooling, ecological footprint, event, transportation mild carbon offset, car, sustainability, sustainable development";
$LANG_baseline="Carpooling for your events";

// CONNEXION
$LANG_bouton_connexion="Login";
$LANG_mon_compte="My Account";
$LANG_se_deconnecter="Logout";
$LANG_erreur_identification="Misidentification";
$LANG_mot_de_passe_perdu="Lost password?";
$LANG_creer_un_compte="Create an account";

// CREER EVENEMENT
$LANG_votre_prenom="Your first name:";
$LANG_pour_utiliser_ce_site="To use this site :";
$LANG_etape1="Create your event";
$LANG_etape2="Send link to participants";
$LANG_etape3="Discover your carpooling map";
$LANG_texte_bouton_entrer="Create Event";
$LANG_titre_etape="Step 1 / 2: Create Event";
$LANG_titre_evenement="Title of Your Event: ";
$LANG_date_evenement="Event date:";
$LANG_jour="Day";
$LANG_mois="Month";
$LANG_janvier="January";
$LANG_fevrier="February";
$LANG_mars="March";
$LANG_avril="April";
$LANG_mai="May";
$LANG_juin="June";
$LANG_juillet="July";
$LANG_aout="August";
$LANG_septembre="September";
$LANG_octobre="October";
$LANG_novembre="November";
$LANG_decembre="December";
$LANG_annee="Year";
$LANG_veuillez_preciser_date="Please specify the date";
$LANG_date_deja_passee="The date of the event is passed...";
$LANG_description="Description (optional):";
$LANG_cocher_alerte_mail="Check this box if you wish to receive an alert when someone subscribes to the carpool of your event.";
$LANG_adresse_evenement="Address of venue";
$LANG_cp_evenement="Postcode of the venue";
$LANG_ville_evenement="City of the venue";
$LANG_pays_evenement="Country of the venue";
$LANG_enregistrer_changements="Save changes!";
$LANG_bouton_terminer="Done!";
$LANG_titre_etape2="Step 2 / 2: Locate your event";
$LANG_votre_nom="Your name: ";
$LANG_adresse_email="Your e-mail :";
$LANG_email_pas_valide="This email is not valid";
$LANG_bouton_etape_suivante="Next step ";
$LANG_evenement_non_geolocalise="The address of the event was not recognized. <br> Move the marker on the map to the desired location and click OK. ";
$LANG_evenement_non_geolocalise_info="Move the marker to the desired location and click OK.";
$LANG_evenement_geolocalise_ok="The position of the event has been changed";
$LANG_evenement_modifie_ok="The information of the event has been changed";
$LANG_modifier_infos="Edit Information";
$LANG_modifier_informations="Edit information";
$LANG_modifier_position="Change the position on the map";
$LANG_modifier_votre_position="Change your location";
$LANG_modifier_position_marqueur="Change the position of the marker";
$LANG_lien_pour_participer="Link to <strong>participate </strong>";
$LANG_lien_pour_administrer="Link to <strong>manage</strong>:";
$LANG_ajouter_favoris="Add this link to your Favorites";
$LANG_envoyer_le_lien="Email this link to all participants";
$LANG_message_automatique="Automatic message";
$LANG_confirm_annul_alerte="You will no longer receive email alerts in case of future subscriptions to the carpool of this event. ";
$LANG_suivez_ce_lien="Follow this link to manage the event (change, delete, etc.)";
$LANG_rappel_des_liens="Recall links:";
$LANG_important="Important:";
$LANG_enregistrer_url="Please save the URL of this page before you leave your browser. <br> For example, you can add it to your favorites / bookmarks.";
$LANG_enregistrer_liens="Save these links before leaving this page. ";
$LANG_ajouter_cette_carte="Add this map to your Favorites";

//PARTICIPER
$LANG_votre_adresse_non_localisee="Your address was not recognized. <br> Move the marker on the map, zoom to your address, and click OK ";
$LANG_votre_adresse_pas_precise="Your address is not specific enough, your marker is in an already occupied position.";
$LANG_deplacez_marqueur="Move the marker on the map, click on Confirm to save the new position";
$LANG_modifier_vos_coordonnees="Edit your details";
$LANG_nom_pseudo="Your name (or nickname):";
$LANG_numero_tel="Your phone number:";
$LANG_email="Email address:";
$LANG_cacher_mon_email="hide my email.";
$LANG_cacher_mon_email_suite="Other participants may contact you via the site. <br> Your email address will not be displayed.";
$LANG_votre_adresse="Your address:";
$LANG_votre_ville="Your city: ";
$LANG_votre_pays="Your country: ";
$LANG_votre_cp="Your postcode: ";
$LANG_vous_avez_un_vehicule="You have a vehicle (but can also be a passenger on another vehicle)";
$LANG_pas_de_vehicule="You do not have a car";
$LANG_possede_vehicule="Own a vehicle (but may be the passenger on another vehicle)";
$LANG_ne_possede_vehicule="Do not have a vehicle";
$LANG_plus_serons="The higher the number of participants, the greater the reduction of our ecological footprint";
$LANG_pas_de_participants="There are currently no participants";


$LANG_commentaire_participant="Comment (it will appear next to your details):";
$LANG_seuls_les_visiteurs="Only visitors who have received the link to participate in this event will have access to your information";
$LANG_vous_etes_ajoute="You are added!";
$LANG_en_participant="By participating in the carpool, you agree to the Terms and Conditions of wigowiz.com";
$LANG_vos_infos="Enter your information";
$LANG_envoyer_message="Send a message to ";
$LANG_votre_message="Your message:";
$LANG_envoyer_message_contact="Send message!";
$LANG_donnes_ajoutees="Your data has been added to the map!";


//COMMUNS
$LANG_bouton_envoyer="Send";
$LANG_bouton_enregistrer="Save!";
$LANG_bouton_annuler="Cancel";
$LANG_veuillez_saisir_ce_champ="Please fill out this field";
$LANG_veuillez_points="Please fill out this field...";
$LANG_veuillez_points_suite="... or this one";
$LANG_rester_identifie="Stay logged in a few days";
$LANG_participant="participant";
$LANG_participants="participants";


//DON
$LANG_merci="Thank you!";
$LANG_confirm_don="Your gift has been registered. <br> <br> Thank you for your support!";

//FAQ
$LANG_faq1="What can this site be used for?";
$LANG_faq1_texte="This site is used to organize carpooling for events: weddings, business meetings, NGO meetings, training, sports competitions <br> ... The idea that gave birth to this site is to provide a simple and effective, no-frills tool. It only takes two clicks to create an event. Two clicks are enough to participate in the carpool of an event. <br> In an unpretentious way, wigowiz.com helps you reduce the environmental cost of your events. ";
$LANG_faq2="How much does it cost to use this site? ";
$LANG_faq2_texte="Using wigowiz.com is free. If you wish to support the project of this site, you can make a donation to help its development and encourage its creator. ";

//TEMOIGANGES
$LANG_temoignages="Testimonials";
$LANG_temoignages_texte="How do you use this site? Have you reduced the number of cars traveling to your event? To send us your testimony, thank you for using the contact form. ";
$LANG_ecrivez_nous="Write Us";


//CONTACT
$LANG_votre_email="Your email:";
$LANG_verifier_email="Thank you for verifying the email given";
$LANG_veuiller_saisir_message="Please enter a message.";
$LANG_votre_message_envoye="Your message has been sent!";
$LANG_retour_accueil="Back to Home";

//CONDITION D'UTILISATION
$LANG_responsabilite="Disclaimer";
$LANG_responsabilite_texte="<p> Users of this site act in their sole and entire responsibility for organizing their carpool. </ p> The site wigowiz.com is a networking tool. In no case the responsibility will be incurred in the conduct of a journey made after a formal contact through it. </ p> ";
$LANG_traitement_donnees="Processing of personal data";
$LANG_donnes_personnelles_texte="<p> In accordance with the law n ° 78-17 of 6 January 1978, you have the right to access and correct personal data concerning you, by contacting the webmaster of the site . </ p> In no case the personal data you provide will be used in any other way than what they where intended for, namely the operation of the site and to display markers on the map of an event. </ p> We will not sell, lend, rent or hand over to a third party your personal information for any use whatsoever. </ p> We reserve the right to notify you by email when the launch of new features on the site occur. </ p>";
//PIED
$LANG_contact="Contact";
$LANG_temoignages="Testimonials";
$LANG_FAQ="FAQ";
$LANG_conditions_utilisation="Terms and Conditions";

//COMPTE
$LANG_mon_compte="My Account";
$LANG_vos_evenements="Your events";
$LANG_infos_personnelles="Your personal information";
$LANG_mes_evenements="My Events";
$LANG_acceder_compte="Go to my account";
$LANG_compte_motdepasse="Password";
$LANG_un_compte_permet="An account allows you: ";
$LANG_compte1="To gain direct access to events in which you participate, or that you have created, you no longer need to recall the urls of your maps. ";
$LANG_compte2="to change your address, your position, the number of seats in your vehicle if necessary";
$LANG_compte3="to subscribe to the newsletter in order to be kept informed of improvements and new features.";
$LANG_compte_deja_inscrit="This email address is already registered.";
$LANG_erreur_mail="Error in email address.";
$LANG_choisissez_motdepasse="Choose a password: ";
$LANG_saisir_motdepasse="Please enter a password";
$LANG_confirmer="... confirm";
$LANG_motsdepasse_diffrents="Passwords do not match";
$LANG_infos_modifiees="Your personal information has been modified";
$LANG_modifier_position_perso="Change your location";
$LANG_position_modifiee="Your position has been amended";
$LANG_motdepasse_perdu="Password Recovery";
$LANG_renvoi_motdepasse="Send my password";
$LANG_email_inconnu="This email address is unknown";
$LANG_motdepasse_renvoye="Your password has been sent by email";
$LANG_rappel_motdepasse="Recall Password";
$LANG_lien_de_participation="Participation Link: ";
$LANG_lien_de_administration="Administration Link: ";
$LANG_supprimer_cet_evenement="Delete this event";

$LANG_deplace_marqueur="Move the marker";
$LANG_derniere_etape="Final step:";
$LANG_identifier_les_marqueurs="Identify the markers located somewhere on your journey";
$LANG_contactez_les_participants="Contact the relevant participant(s)";
$LANG_organisez_votre_venue="Co-organize your journey";
$LANG_email_protege="Email protected";
$LANG_message_defaut="Hello, I would like to carpool with you";

//MAILS
$LANG_mail_alerte="A new subscription to the carpool of your event";
$LANG_mail_alerte_contenu="Hello, \nA new entry has just been recorded for the carpool of your event";
$LANG_mail_alerte_contenu2="\nTo see the carpooling map of your event, click here:\nhttp://www.wigowiz.com/admin_carte.php?m=".$_SESSION['evenement']['code_admin']."\n\n\n----\nIf you do not want to receive mail alerts for this event, click here:\nhttp://www.wigowiz.com/admin_carte.php?a=annule_alerte&m=".$_SESSION['evenement']['code_admin']."";
$LANG_vous_avez_un_message="You have a message";
$LANG_evenement_cree_par="Event created by ";
$LANG_ne_plus_participer="Cancel my participation in this event";
$LANG_je_participe="I participate in the carpool of this event";


$LANG_paypal="<form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
<input type='hidden' name='cmd' value='_s-xclick'>
<input type='hidden' name='hosted_button_id' value='6185977'>
<input type='image' src='https://www.paypal.com/en_GB/i/btn/btn_donate_SM.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online.'>
<img alt='' border='0' src='https://www.paypal.com/fr_FR/i/scr/pixel.gif' width='1' height='1'>
</form>";
?>