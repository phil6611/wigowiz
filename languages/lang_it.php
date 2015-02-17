<?
function datecomplete($lastmodified){
list($date, $time) = explode(" ", $lastmodified);
list($year, $month, $day) = explode("-", $date);
list($hour, $min, $sec) = explode(":", $time);
$months = array("Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno",
    "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre");
//echo $lastmodified = "le $day ".$months[$month-1]." $year à ${hour}h${min}&nbsp;";
return "el $day ".$months[$month-1]." $year";
}

$LANG_bannieres_titre="Banner";
$LANG_bannieres="Aggiungi un link a wigowiz.com sul tuo sito web";
$LANG_bannieres_utiliser="Copia / incolla il seguente codice nelle tue pagine :";

$LANG_cacher_mon_adresse="nascondere il mio indirizzo sulla mappa";


// PAYS
$LATITUDE_DEFAULT="43.7393520791547";
$LONGITUDE_DEFAULT="12.041015625";

// METAS
$LANG_meta_description="Wigowiz : piattaforma per la gestione del carpooling per evento di famiglia, istituzionalo, sportiva o associativo.";
$LANG_meta_title="Wigowiz ! carpooling per organizzare i vostri eventi";
$LANG_baseline="Carpooling per organizzare i vostri eventi";

$LANG_meta_mots="Carpool, andremo insieme, Carpool, car pooling, impronta ecologica, evento, il trasporto di carbonio lieve compensare";


// CONNEXION
$LANG_bouton_connexion="Accesso";
$LANG_mon_compte="Il mio account";
$LANG_se_deconnecter="Logout";
$LANG_erreur_identification="Errori di identificazione";
$LANG_mot_de_passe_perdu="Hai dimenticato la password ?";
$LANG_creer_un_compte="Crea un account";

// CREER EVENEMENT
$LANG_votre_prenom="Il tuo nome :";
$LANG_pour_utiliser_ce_site="Per utilizzare questo sito  :";
$LANG_etape1="Crea il tuo evento";
$LANG_etape2="Invia link ai partecipanti";
$LANG_etape3="Scopri la tua carta di carpooling";
$LANG_texte_bouton_entrer="Crea evento";
$LANG_titre_etape="Fase 1 / 2: Creazione di eventi";
$LANG_titre_evenement="Titolo della manifestazione :";
$LANG_date_evenement="Data :";
$LANG_jour="Giorno";
$LANG_mois="Mese";
$LANG_janvier="Gennaio";
$LANG_fevrier="Febbraio";
$LANG_mars="Marzo";
$LANG_avril="Aprile";
$LANG_mai="maggio";
$LANG_juin="Giugno";
$LANG_juillet="Luglio";
$LANG_aout="Agosto";
$LANG_septembre="Settembre";
$LANG_octobre="Ottobre";
$LANG_novembre="Novembre";
$LANG_decembre="Dicembre";
$LANG_annee="Anno";
$LANG_veuillez_preciser_date="Si prega di specificare la data";
$LANG_date_deja_passee="La data dell'avvenimento è passata...";
$LANG_description="Descrizione (Facoltativa) :";
$LANG_cocher_alerte_mail="Seleziona questa casella se augurate ricevere ricevere un'allerta quando qualcuno si iscrive al carpooling del vostro evento.";
$LANG_adresse_evenement="Indirizzo del luogo dell'evento";
$LANG_cp_evenement="Codice postale del luogo dell'evento";
$LANG_ville_evenement="Città del luogo dell'evento";
$LANG_pays_evenement="Paesi del luogo dell'evento";
$LANG_enregistrer_changements="Salva modifiche !";
$LANG_bouton_terminer="Fine !";
$LANG_titre_etape2="Passo 2 / 2: Individuare il vostro evento";
$LANG_votre_nom="Il tuo nome: ";
$LANG_adresse_email="E-mail :";
$LANG_email_pas_valide="Questa email non è valido";
$LANG_bouton_etape_suivante="Procedere alla fase successiva ";
$LANG_evenement_non_geolocalise="L'indirizzo dell'evento non poteva essere localizzato. <br> Spostare il marcatore sulla mappa nella posizione desiderata e fare clic su OK. ";
$LANG_evenement_non_geolocalise_info="Sposta l'indicatore nella posizione desiderata e fare clic su OK.";
$LANG_evenement_geolocalise_ok="La posizione dell'evento è stata cambiata";
$LANG_evenement_modifie_ok="Le informazioni dell'evento è stata cambiata";
$LANG_modifier_infos="Modifica informazioni";
$LANG_modifier_informations="Modifica informazioni";
$LANG_modifier_position="Modificare la posizione sulla mappa";
$LANG_modifier_votre_position="Cambia la tua località";
$LANG_modifier_position_marqueur="Modificare la posizione del marcatore";
$LANG_lien_pour_participer="Link <strong>partecipare </strong>";
$LANG_lien_pour_administrer="Link <strong>amministrare</strong> :";
$LANG_ajouter_favoris="Aggiungi questo articolo ai tuoi preferiti";
$LANG_envoyer_le_lien="Invia questo articolo a tutti i partecipanti";
$LANG_message_automatique="Messaggio automatico";
$LANG_confirm_annul_alerte="Non  riceverai più messaggi di allerto per maglio all'epoca delle future iscrizioni al carpooling di questo avvenimento. ";
$LANG_suivez_ce_lien="Seguire questo link per gestire l'evento (modificare, eliminare)";
$LANG_rappel_des_liens="Ricorda link :";
$LANG_important="Importante :";
$LANG_enregistrer_url="Si prega di salvare l'indirizzo di questa pagina prima di lasciare il vostro browser. <br> Per esempio, è possibile aggiungere ai vostri favoriti / bookmarks.";
$LANG_enregistrer_liens="Salva questi collegamenti prima di lasciare questa pagina. ";
$LANG_ajouter_cette_carte="Aggiungi questa scheda ai tuoi preferiti";

//PARTICIPER
$LANG_votre_adresse_non_localisee="Il tuo indirizzo non può essere localizzato. <br> Spostare il marcatore sulla mappa, Zomm al tuo indirizzo per la posizione, e fare clic su OK. ";
$LANG_votre_adresse_pas_precise="Il tuo indirizzo non è sufficiente, il marcatore sovrapposti un posto già occupato.";
$LANG_deplacez_marqueur="Sposta il marcatore sulla mappa e fare clic su OK per salvare la nuova posizione";
$LANG_modifier_vos_coordonnees="Crea i tuoi dati";
$LANG_nom_pseudo="Il tuo nome (o pseudo) :";
$LANG_numero_tel="Il tuo numero di telefono :";
$LANG_email="Indirizzo e-mail :";
$LANG_cacher_mon_email="nascondere la mia e-mail.";
$LANG_cacher_mon_email_suite="Gli altri partecipanti possono contattare l'utente tramite il sito. <br> Il tuo indirizzo e-mail non sarà affisso.";
$LANG_votre_adresse="Mittente :";
$LANG_votre_ville="La vostra città : ";
$LANG_votre_pays="Il vostro paese : ";
$LANG_votre_cp="Il codice postale : ";
$LANG_vous_avez_un_vehicule="È necessario disporre di un veicolo (ma può anche essere un passeggero a un altro)";
$LANG_pas_de_vehicule="Se non si dispone di un auto";
$LANG_possede_vehicule="Il proprietario di un veicolo (ma può essere il passeggero su un altro)";
$LANG_ne_possede_vehicule="Non possiedo un veicolo";
$LANG_plus_serons="Quanto più siamo propensi a partecipare, maggiore è la riduzione della nostra impronta ecologica. ";
$LANG_pas_de_participants="Non ci sono attualmente partecipanti";


$LANG_commentaire_participant="Commento (che verrà visualizzato accanto ai tuoi dettagli) :";
$LANG_seuls_les_visiteurs="Solo i visitatori che hanno ricevuto il link per partecipare a questo evento avranno accesso alle informazioni";
$LANG_vous_etes_ajoute="Si sono aggiunti !";
$LANG_en_participant="Partecipando al Carpool, l'utente accetta i Termini di utilizzazione sito wigowiz.com";
$LANG_vos_infos="Inserisci i tuoi dati";
$LANG_envoyer_message="Invia un messaggio ";
$LANG_votre_message="Il tuo messaggio :";
$LANG_envoyer_message_contact="Invia messaggio !";
$LANG_donnes_ajoutees="I vostri dati sono stati aggiunti alla mappa !";


//COMMUNS
$LANG_bouton_envoyer="Inviare";
$LANG_bouton_enregistrer="Salvare !";
$LANG_bouton_annuler="Annulla";
$LANG_veuillez_saisir_ce_champ="Si prega di compilare questo campo";
$LANG_veuillez_points="Si prega di compilare questo campo...";
$LANG_veuillez_points_suite="... o che la";
$LANG_rester_identifie="Rimani collegato in pochi giorni";
$LANG_participant="partecipante";
$LANG_participants="partecipanti";


//DON
$LANG_merci="Grazie !";
$LANG_confirm_don="Il tuo regalo è stato registrato. <br> <br> Grazie per il vostro sostegno !";

//FAQ
$LANG_faq1="Che cosa può servire questo sito?";
$LANG_faq1_texte="Questo sito è stato utilizzato per organizzare il car pooling per eventi: matrimoni, meeting aziendali, riunioni, corsi di formazione, competizioni sportive <br> ... L'idea che ha dato alla luce questo sito è quello di fornire un semplice ed efficace, senza fronzoli. Due clic per creare un evento. Due scatti sono abbastanza a partecipare a un evento di car pooling. <br> senza pretese, wigowiz.com ti aiuta a ridurre il costo ambientale dei vostri eventi. ";
$LANG_faq2="Quanto è questo sito? ";
$LANG_faq2_texte="Uso wigowiz. Com è gratuito. Se desideri sostenere questo progetto, è possibile donare a contribuire a promuovere il suo sviluppo e il suo creatore. ";

//TEMOIGANGES
$LANG_temoignages="Testimonianze";
$LANG_temoignages_texte="Come si usa questo sito? Avete ridotto il numero di auto in viaggio per il vostro evento? Per inviarci la tua testimonianza, la ringrazio per aver scelto di utilizzare il modulo di contatto. ";
$LANG_ecrivez_nous="Scriveteci";


//CONTACT
$LANG_votre_email="Il tuo indirizzo email :";
$LANG_verifier_email="Grazie per verificare l'e-mail prima";
$LANG_veuiller_saisir_message="Si prega di inserire un messaggio";
$LANG_votre_message_envoye="Il messaggio è stato inviato !";
$LANG_retour_accueil="Torna alla Home";

//CONDITION D'UTILISATION
$LANG_responsabilite="responsabilità";
$LANG_responsabilite_texte="<p>Gli utenti di questo sito agisce sotto la loro unica ed intera responsabilità di organizzare i loro viaggi Carpool. </ P> wigowiz.com Il sito è un servizio di relazioni formali. In nessun caso la responsabilità sarà sostenute nello svolgimento di un viaggio effettuato dopo una formale contatto con esso </p> ";
$LANG_traitement_donnees="Trattamento dei dati personali";
$LANG_donnes_personnelles_texte="<p>In conformità con la legge n ° 78-17 del 6 gennaio 1978, avete il diritto di accesso e rettifica dei dati personali che la riguardano, contattando il webmaster del sito. </ p> In ogni caso, sarà fatto altro uso dei vostri dati personali a cui sono destinati, vale a dire il funzionamento del sito e visualizzare i marcatori sulla mappa d un evento. </ P> Ci si impegna a non vendere, prestare, vendere o affittare a terzi i tuoi dati personali per qualunque sia l'impiego. </ P> Ci riserviamo il diritto di notifica via email quando il lancio di nuove funzionalità del sito </p>";
//PIED
$LANG_contact="Contatto";
$LANG_temoignages="Testimonianze";
$LANG_FAQ="FAQ";
$LANG_conditions_utilisation="Condizioni di Utilizzo";

//COMPTE
$LANG_mon_compte="Il mio account";
$LANG_vos_evenements="I vostri eventi";
$LANG_infos_personnelles="Le vostre informazioni personali";
$LANG_mes_evenements="I miei Eventi";
$LANG_acceder_compte="Vai al mio account";
$LANG_compte_motdepasse="Password";
$LANG_un_compte_permet="Un account ti permette : ";
$LANG_compte1="accesso diretto agli eventi in cui si partecipa, o che hai creato più bisogno di ricordare gli URL carte. ";
$LANG_compte2="cambiare il tuo indirizzo, la posizione, il numero di posti all'interno del veicolo, se necessario";
$LANG_compte3="ti iscrivi alla newsletter per essere informato di miglioramenti e nuove funzionalità che verranno presto.";
$LANG_compte_deja_inscrit="Questo indirizzo email è già registrato.";
$LANG_erreur_mail="Errore in indirizzo e-mail.";
$LANG_choisissez_motdepasse="Scegli una password : ";
$LANG_saisir_motdepasse="Si prega di inserire una password";
$LANG_confirmer="... confermare";
$LANG_motsdepasse_diffrents="Le password non corrispondono";
$LANG_infos_modifiees="I vostri dati personali è stata modificata";
$LANG_modifier_position_perso="Cambia la tua località";
$LANG_position_modifiee="La vostra posizione è stata modificata";
$LANG_motdepasse_perdu="Password Recovery";
$LANG_renvoi_motdepasse="Invia la mia password";
$LANG_email_inconnu="Questo indirizzo email è sconosciuto";
$LANG_motdepasse_renvoye="La tua password deve essere inviato per posta";
$LANG_rappel_motdepasse="Ricorda Password";
$LANG_lien_de_participation="Partecipazione Link : ";
$LANG_lien_de_administration="Link Amministrazione : ";
$LANG_supprimer_cet_evenement="Elimina questo evento";

$LANG_deplace_marqueur="Sposta il marcatore";
$LANG_derniere_etape="Fase finale :";
$LANG_identifier_les_marqueurs="Individuare i marcatori sul tuo viaggio";
$LANG_contactez_les_participants="Oppure contattare le partecipanti";
$LANG_organisez_votre_venue="Organizzare insieme la vostra venuta";
$LANG_email_protege="E-mail protetto";
$LANG_message_defaut="Ciao, vorrei Carpool con voi";

//MAILS
$LANG_mail_alerte="Incluso nella nuova vettura del vostro evento";
$LANG_mail_alerte_contenu="Ciao, una nuova voce è stata registrata per l'auto del vostro evento";
$LANG_mail_alerte_contenu2="\nPer vedere la mappa di Carpool del vostro evento, fai clic qui :\nhttp://www.wigowiz.com/admin_carte.php?m=".$_SESSION['evenement']['code_admin']."\n\n\n----\nSe non si desidera ricevere mail di questo evento, fai clic qui :\nhttp://www.wigowiz.com/admin_carte.php?a=annule_alerte&m=".$_SESSION['evenement']['code_admin']."";
$LANG_vous_avez_un_message="Hai un messaggio";
$LANG_evenement_cree_par="Evento creato da ";
$LANG_ne_plus_participer="Cancellare la mia partecipazione a questo evento";
$LANG_je_participe="I carpooling partecipare a questo evento";






$LANG_paypal="<form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
<input type='hidden' name='cmd' value='_s-xclick'>
<input type='hidden' name='hosted_button_id' value='6185878'>
<input type='image' src='https://www.paypal.com/it_IT/IT/i/btn/btn_donate_SM.gif' border='0' name='submit' alt='PayPal - Il sistema di pagamento online più facile e sicuro!'>
<img alt='' border='0' src='https://www.paypal.com/fr_FR/i/scr/pixel.gif' width='1' height='1'>
</form>
";
?>