<?
function datecomplete($lastmodified){
list($date, $time) = explode(" ", $lastmodified);
list($year, $month, $day) = explode("-", $date);
list($hour, $min, $sec) = explode(":", $time);
$months = array("Januari", "Februari", "Mars", "April", "Juni", "Juli",
    "August", "August", "September", "Oktober", "November", "December");
//echo $lastmodified = "le $day ".$months[$month-1]." $year à ${hour}h${min}&nbsp;";
return "den $day ".$months[$month-1]." $year";
}
$LANG_bannieres_titre="Banners";
$LANG_bannieres="Lägg till en länk till wigowiz.com på din webbplats";
$LANG_bannieres_utiliser="Kopiera / klistra in följande kod på dina sidor :";

$LANG_cacher_mon_adresse="dölja min adress på kartan";

// PAYS
$LATITUDE_DEFAULT="59.33318942659219";
$LONGITUDE_DEFAULT="18.08349609375";

// METAS
$LANG_meta_description="Wigowiz : plattform för hantering av bilen för familjen händelse 
institutionella eller samfundet sport.";
$LANG_meta_title="Wigowiz ! ordna samåkning för ditt evenemang";
$LANG_baseline="Ordna samåkning för ditt evenemang";

$LANG_meta_mots="carpool, vi åker tillsammans, carpool, samåkning, ekologiska fotavtryck, evenemang, transporter mild carbon offset";

// CONNEXION
$LANG_bouton_connexion="Logga in";
$LANG_mon_compte="Mitt konto";
$LANG_se_deconnecter="Logout";
$LANG_erreur_identification="Felidentifiering";
$LANG_mot_de_passe_perdu="Glömt lösenord ?";
$LANG_creer_un_compte="Skapa ett konto";

// CREER EVENEMENT
$LANG_votre_prenom="Ditt förnamn :";
$LANG_pour_utiliser_ce_site="För att kunna använda den här webbplatsen  :";
$LANG_etape1="Skapa ditt evenemang";
$LANG_etape2="Skicka länk till deltagarna";
$LANG_etape3="Upptäck ditt kort samåkning";
$LANG_texte_bouton_entrer="Skapa händelse";
$LANG_titre_etape="Steg 1 / 2: Skapa händelse";
$LANG_titre_evenement="Titel ditt evenemang:";
$LANG_date_evenement="Event date :";
$LANG_jour="Dag";
$LANG_mois="Månad";
$LANG_janvier="Januari";
$LANG_fevrier="Februari";
$LANG_mars="Mars";
$LANG_avril="April";
$LANG_mai="Kan";
$LANG_juin="Juni";
$LANG_juillet="Juli";
$LANG_aout="August";
$LANG_septembre="September";
$LANG_octobre="Oktober";
$LANG_novembre="November";
$LANG_decembre="December";
$LANG_annee="År";
$LANG_veuillez_preciser_date="Ange datum";
$LANG_date_deja_passee="Dagen för händelsen har gått...";
$LANG_description="Beskrivning (frivilligt) :";
$LANG_cocher_alerte_mail="Markera denna box om du vill få en varning när någon är i bilen av ditt evenemang";
$LANG_adresse_evenement="Adress till arenan";
$LANG_cp_evenement="Postnummer för handelsplatsidentifieringen";
$LANG_ville_evenement="Stad av händelsen";
$LANG_pays_evenement="Länder för händelsen";
$LANG_enregistrer_changements="Spara ändringar !";
$LANG_bouton_terminer="Mål !";
$LANG_titre_etape2="Steg 2 / 2: Leta upp din händelse";
$LANG_votre_nom="Ditt namn : ";
$LANG_adresse_email="E-post  :";
$LANG_email_pas_valide="Detta brev är inte giltigt";
$LANG_bouton_etape_suivante="Fortsätt till nästa steg ";
$LANG_evenement_non_geolocalise="Adressen till evenemanget kan inte géolocalisée. <br> Flytta markören på kartan till önskad plats och klicka på OK. ";
$LANG_evenement_non_geolocalise_info="Flytta markören till önskad plats och klicka på OK.";
$LANG_evenement_geolocalise_ok="Placeringen av händelsen har ändrats";
$LANG_evenement_modifie_ok="Information om evenemanget har ändrats";
$LANG_modifier_infos="Edit Information";
$LANG_modifier_informations="Ändra information";
$LANG_modifier_position="Ändra position på kartan";
$LANG_modifier_votre_position="Ändra din plats";
$LANG_modifier_position_marqueur="Ändra position märkningsprodukt";
$LANG_lien_pour_participer="Länk  <strong>delta </strong>";
$LANG_lien_pour_administrer="Länk <strong>administrera</strong> :";
$LANG_ajouter_favoris="Lägg till denna artikel till dina favoriter";
$LANG_envoyer_le_lien="E-posta den här artikeln för att alla deltagare";
$LANG_message_automatique="Automatisk meddelande";
$LANG_confirm_annul_alerte="Du behöver inte längre ta emot postnotifiering i framtiden poster i samåkning till detta evenemang. ";
$LANG_suivez_ce_lien="Följ denna länk för att hantera händelsen (ändra, ta bort, etc.).";
$LANG_rappel_des_liens="Recall länkar :";
$LANG_important="Viktigt :";
$LANG_enregistrer_url="Spara adressen till sidan innan du lämnar din webbläsare. <br> Till exempel kan du lägga till dina favoriter / bokmärken.";
$LANG_enregistrer_liens="Spara dessa länkar innan du lämnar webbplatsen. ";
$LANG_ajouter_cette_carte="Lägg detta kort till dina favoriter";

//PARTICIPER
$LANG_votre_adresse_non_localisee="Din adress kunde inte géolocalisée. <br> Flytta markören på kartan, Zomm till din adress på en plats och klicka på OK ";
$LANG_votre_adresse_pas_precise="Din adress är inte tillräckligt tydligt, din markör ovanpå en redan upptagen.";
$LANG_deplacez_marqueur="Flytta markören på kartan, klicka på  Bekräfta för att spara det nya läget";
$LANG_modifier_vos_coordonnees="Ändra dina uppgifter";
$LANG_nom_pseudo="Ditt namn (eller smeknamn) :";
$LANG_numero_tel="Ditt telefonnummer :";
$LANG_email="E-postadress :";
$LANG_cacher_mon_email="Dölj min email.";
$LANG_cacher_mon_email_suite="De övriga deltagarna får kontakta dig via webbplatsen. <br> Din e-postadress visas inte.";
$LANG_votre_adresse="Avsändare :";
$LANG_votre_ville="Din stad : ";
$LANG_votre_pays="Ditt land : ";
$LANG_votre_cp="Ditt postnummer : ";
$LANG_vous_avez_un_vehicule="Du har ett fordon (men kan också vara en person till en annan)";
$LANG_pas_de_vehicule="Du har inte en bil";
$LANG_possede_vehicule="Egna fordon (men får passageraren på en annan)";
$LANG_ne_possede_vehicule="Har du inget fordon";
$LANG_plus_serons="Ju fler vi är benägna att delta, desto större minskning av vårt ekologiska fotavtryck. ";
$LANG_pas_de_participants="Det finns för närvarande inga deltagare";


$LANG_commentaire_participant="Kommentera (det kommer att visas bredvid dina uppgifter) :";
$LANG_seuls_les_visiteurs="Endast de besökare som har fått länken för att delta i detta evenemang kommer att ha tillgång till din information";
$LANG_vous_etes_ajoute="Du är läggas !";
$LANG_en_participant="Genom att delta i carpool godkänner du Användarvillkor utlisation Site wigowiz.com";
$LANG_vos_infos="Skriv in dina uppgifter";
$LANG_envoyer_message="Skicka ett meddelande";
$LANG_votre_message="Ditt meddelande :";
$LANG_envoyer_message_contact="Skicka meddelande !";
$LANG_donnes_ajoutees="Dina uppgifter har lagts till kartan !";


//COMMUNS
$LANG_bouton_envoyer="Skicka";
$LANG_bouton_enregistrer="Spara !";
$LANG_bouton_annuler="Avbryt";
$LANG_veuillez_saisir_ce_champ="Fyll i detta område";
$LANG_veuillez_points="Veuillez remplir ce champ...";
$LANG_veuillez_points_suite="... eller att";
$LANG_rester_identifie="Stanna inloggad för ett par dagar";
$LANG_participant="deltagare";
$LANG_participants="deltagarna";


//DON
$LANG_merci="Tack !";
$LANG_confirm_don="Din gåva har registrerats. <br> <br> Tack för ert stöd !";

//FAQ
$LANG_faq1="Vad kan den här webbplatsen tjänar?";
$LANG_faq1_texte="Denna webbplats används för att organisera samåkning för evenemang: bröllop, affärsmöten, förenings-möten, utbildning, sport tävlingar <br> ... Tanken att födde den här webbplatsen är att ge en enkel och effektiv, utan krusiduller. Två klick för att skapa en händelse. Två klick för att delta i samåkning till en händelse. <br> opretentiöst, wigowiz.com hjälper dig att minska de miljömässiga kostnaderna för ditt evenemang. ";
$LANG_faq2="Hur mycket är den här platsen? ";
$LANG_faq2_texte="Använda wigowiz. Com är gratis. Om du vill stödja detta projekt kan du donera för att främja dess utveckling och dess upphovsman. ";

//TEMOIGANGES
$LANG_temoignages="Testimonials";
$LANG_temoignages_texte="Hur du använder denna webbplats? Har du minskat antalet bilar reser till ditt evenemang? Om du vill skicka oss dina vittnesbörd, tack för att du använder kontaktformuläret. ";
$LANG_ecrivez_nous="Kontakta oss";


//CONTACT
$LANG_votre_email="Din e-post :";
$LANG_verifier_email="Tack för att verifiera e-post innan";
$LANG_veuiller_saisir_message="Ange ett meddelande";
$LANG_votre_message_envoye="Ditt meddelande har skickats !";
$LANG_retour_accueil="Tillbaka till Hem";

//CONDITION D'UTILISATION
$LANG_responsabilite="Disclaimer";
$LANG_responsabilite_texte="<p> Användare av denna webbplats fungerar som deras enda och hela ansvaret för att organisera sina resor carpool. </ P> wigowiz.com Webbplatsen är en tjänst från formell relation. Under inga omständigheter ansvaret kommer att uppstå vid genomförandet av en resa som görs efter en formell kontakt genom den. </ P> ";
$LANG_traitement_donnees="Behandling av personuppgifter";
$LANG_donnes_personnelles_texte="<p> enlighet med lag nr 78-17 av den 6 januari 1978 har du rätt att få tillgång till och korrekta personuppgifter om dig, genom att kontakta den webbansvariga för webbplatsen . </ p> I vilket fall som helst kommer det att ske på annat sätt använda dina personliga uppgifter som de är avsedda, nämligen drift av webbplats och visa markörer på karta i en händelse. </ P> Vi kommer inte att sälja, låna, hyra ut eller sälja till en tredje part dina personuppgifter oavsett användningsområde. </ P> Vi förbehåller oss rätten att meddela dig via e-post när lanseringen av nya funktioner på webbplatsen. </ P>";
//PIED
$LANG_contact="Kontakt";
$LANG_temoignages="Testimonials";
$LANG_FAQ="FAQ";
$LANG_conditions_utilisation="Terms of Use";

//COMPTE
$LANG_mon_compte="Mitt konto";
$LANG_vos_evenements="Dina evenemang";
$LANG_infos_personnelles="Din personliga information";
$LANG_mes_evenements="Min Evenemang";
$LANG_acceder_compte="Gå till mitt konto";
$LANG_compte_motdepasse="Lösenord";
$LANG_un_compte_permet="Ett konto kan du : ";
$LANG_compte1="direkt tillgång till händelser som du deltar i, eller som du har skapat fler måste komma ihåg webbadresserna kort. ";
$LANG_compte2="ändra din adress, din position, antalet platser i din bil om det behövs";
$LANG_compte3="du prenumerera på nyhetsbrevet som skall hållas informerade om förbättringar och nya funktioner som kommer snart.";
$LANG_compte_deja_inscrit="Den här e-postadressen är redan registrerad.";
$LANG_erreur_mail="Fel i e-postadress.";
$LANG_choisissez_motdepasse="Välj ett lösenord : ";
$LANG_saisir_motdepasse="Vänligen ange ett lösenord";
$LANG_confirmer="... bekräfta";
$LANG_motsdepasse_diffrents="Lösenorden matchar inte";
$LANG_infos_modifiees="Din personliga information har ändrats";
$LANG_modifier_position_perso="Ändra din plats";
$LANG_position_modifiee="Din position har ändrats";
$LANG_motdepasse_perdu="Password Recovery";
$LANG_renvoi_motdepasse="Skicka mitt lösenord";
$LANG_email_inconnu="Den här e-postadressen är okänd";
$LANG_motdepasse_renvoye="Ditt lösenord måste skickas med post";
$LANG_rappel_motdepasse="Hämta Lösenord";
$LANG_lien_de_participation="Deltagande Länk : ";
$LANG_lien_de_administration="Länk Administration : ";
$LANG_supprimer_cet_evenement="Ta bort den här händelsen";

$LANG_deplace_marqueur="Flytta markören";
$LANG_derniere_etape="Sista etappen :";
$LANG_identifier_les_marqueurs="Identifiera markörer på din resa";
$LANG_contactez_les_participants="Eller kontakta de berörda deltagarna";
$LANG_organisez_votre_venue="Ordna alla dina plats";
$LANG_email_protege="Email skyddas";
$LANG_message_defaut="Hej, jag skulle carpool med dig";

//MAILS
$LANG_mail_alerte="Ingår i ny bil ditt evenemang";
$LANG_mail_alerte_contenu="Hej, En ny post har noterats för bilen ditt evenemang";
$LANG_mail_alerte_contenu2="\nOm du vill se karta över carpool ditt evenemang, klicka här :\nhttp://www.wigowiz.com/admin_carte.php?m=".$_SESSION['evenement']['code_admin']."\n\n\n----\nOm du inte vill ta emot postnotifiering för detta evenemang, klicka här :\nhttp://www.wigowiz.com/admin_carte.php?a=annule_alerte&m=".$_SESSION['evenement']['code_admin']."";
$LANG_vous_avez_un_message="Du har ett budskap";
$LANG_evenement_cree_par="Event skapas av ";

$LANG_ne_plus_participer="Avbryta mitt deltagande i detta evenemang";
$LANG_je_participe="Jag deltar i samåkning till detta evenemang";





$LANG_paypal="<form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
<input type='hidden' name='cmd' value='_s-xclick'>
<input type='hidden' name='hosted_button_id' value='6186005'>
<input type='image' src='https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>
<img alt='' border='0' src='https://www.paypal.com/fr_FR/i/scr/pixel.gif' width='1' height='1'>
</form>";

?>