<?

function datecomplete($lastmodified){
list($date, $time) = explode(" ", $lastmodified);
list($year, $month, $day) = explode("-", $date);
list($hour, $min, $sec) = explode(":", $time);
$months = array("Januar", "Februar", "März", "April", "Mai", "Juni",
    "Juli", "August", "September", "Oktober", "November", "Dezember");
//echo $lastmodified = "le $day ".$months[$month-1]." $year à ${hour}h${min}&nbsp;";
return "das $day ".$months[$month-1]." $year";
}


$LANG_bannieres_titre="Banner";
$LANG_bannieres="Fügen Sie einen Link zu wigowiz.com auf Ihrer Website";
$LANG_bannieres_utiliser="Kopiere den folgenden Code in Ihre Seiten :";

$LANG_cacher_mon_adresse="Ausblenden meine Adresse auf der Karte";

// PAYS
$LATITUDE_DEFAULT="51.193115244645874";
$LONGITUDE_DEFAULT="10.30517578125";

// METAS
$LANG_meta_description="Wigowiz : Plattform für die Verwaltung des Car Ereignis Familie, 
institutionellen, Sportler oder Vereine.";
$LANG_meta_title="Wigowiz ! planen Car Ihrer Events";
$LANG_baseline="Planen car Ihrer Events";

$LANG_meta_mots="Fahrgemeinschaften Gehen wir gemeinsam, Fahrgemeinschaften, Car, \"ökologischer Fußabdruck\", Veranstaltung, Verkehr milden Ausgleich Kohlenstoff";

// CONNEXION
$LANG_bouton_connexion="Anmeldung";
$LANG_mon_compte="Mein Konto";
$LANG_se_deconnecter="Trennen";
$LANG_erreur_identification="Fehler bei der Anmeldung";
$LANG_mot_de_passe_perdu="Passwort vergessen?";
$LANG_creer_un_compte="Konto erstellen";

// CREER EVENEMENT
$LANG_votre_prenom="Ihr Vorname :";
$LANG_pour_utiliser_ce_site="Zur Nutzung dieser Website  :";
$LANG_etape1="Erstellen Sie Ihre Veranstaltung";
$LANG_etape2="Schicke den Link an die Teilnehmer";
$LANG_etape3="Entdecken Sie Ihre Karte Car";
$LANG_texte_bouton_entrer="Ein Ereignis";
$LANG_titre_etape="Schritt 1 / 2: Erstellen Sie das Ereignis";
$LANG_titre_evenement="Titel der Veranstaltung: ";
$LANG_date_evenement="Datum des Ereignisses :";
$LANG_jour="Tag";
$LANG_mois="Monat";
$LANG_janvier="Januar";
$LANG_fevrier="Februar";
$LANG_mars="März";
$LANG_avril="April";
$LANG_mai="Mai";
$LANG_juin="Juni";
$LANG_juillet="Juli";
$LANG_aout="August";
$LANG_septembre="September";
$LANG_octobre="Oktober";
$LANG_novembre="November";
$LANG_decembre="Dezember";
$LANG_annee="Jahr";
$LANG_veuillez_preciser_date="Bitte geben Sie an dem Tag";
$LANG_date_deja_passee="Das Datum des Ereignisses ist abgelaufen...";
$LANG_description="Beschreibung (optional):";
$LANG_cocher_alerte_mail="Aktivieren Sie diese Option, wenn Sie möchten, erhalten eine Benachrichtigung, wenn jemand sich im Car Ihrer Veranstaltung.";
$LANG_adresse_evenement="Adresse des Veranstaltungsortes";
$LANG_cp_evenement="Postleitzahl des Veranstaltungsortes";
$LANG_ville_evenement="Stadt des Veranstaltungsortes";
$LANG_pays_evenement="Land des Veranstaltungsortes";
$LANG_enregistrer_changements="Änderungen speichern !";
$LANG_bouton_terminer="Fertig !";
$LANG_titre_etape2="Schritt 2 / 2: suchen Sie nach Ihrem Event";
$LANG_votre_nom="Ihr Name : ";
$LANG_adresse_email="E-Mail-Adresse  :";
$LANG_email_pas_valide="Diese E-Mailadresse ist ungültig";
$LANG_bouton_etape_suivante="Den nächsten Schritt ";
	$LANG_evenement_non_geolocalise="Die Adresse der Veranstaltung konnte nicht räumlich lokalisiert.<br>Verschieben Sie die Markierung auf der Karte an die gewünschte Stelle, und klicken Sie auf OK. ";
$LANG_evenement_non_geolocalise_info="Verschieben Sie die Markierung an der gewünschten Stelle, und klicken Sie auf OK.";
$LANG_evenement_geolocalise_ok="Die Position des Ereignisses wurde geändert";
$LANG_evenement_modifie_ok="Die Informationen der Veranstaltung wurde geändert";
$LANG_modifier_infos="Informationen ändern";
$LANG_modifier_informations="Informationen ändern";
$LANG_modifier_position="Ändern Sie die Position auf der Karte";
$LANG_modifier_votre_position="Position ändern";
$LANG_modifier_position_marqueur="Ändern Sie die Position der Markierung";
$LANG_lien_pour_participer="Link zum <strong>Teilnahme</strong>";
$LANG_lien_pour_administrer="Link zum <strong>verwalten</strong> :";
$LANG_ajouter_favoris="Link hinzufügen zu den Favoriten";
$LANG_envoyer_le_lien="Schicken Sie diesen Link an alle Teilnehmer";
$LANG_message_automatique="Automatische Nachricht";
$LANG_confirm_annul_alerte="Sie erhalten weitere Benachrichtigung per E-Mail bei weiteren Eintragungen in das Car von diesem Event. ";
$LANG_suivez_ce_lien="Folgen Sie diesem Link, um das Ereignis (ändern, löschen usw.)";
$LANG_rappel_des_liens="Rückruf Links :";
$LANG_important="Wichtig :";
$LANG_enregistrer_url="Speichern Sie bitte diese Adresse, bevor Sie Ihren Browser. <br>Sie können z. B. zu Ihren Favoriten / Bookmarks.";
$LANG_enregistrer_liens="Speichern Sie diese Links, bevor Sie diese Seite verlassen. ";
$LANG_deplace_marqueur="Verschieben der Markierung";
$LANG_derniere_etape="Letzte Etappe";
$LANG_identifier_les_marqueurs="Identifizieren Sie die Markierungen auf Ihrer Reise";
$LANG_contactez_les_participants="Kontakt zu dem oder den betreffenden Teilnehmer";
$LANG_organisez_votre_venue="Planen Sie Ihren Besuch aller";
$LANG_votre_nom="Ihr Name: ";



//PARTICIPER
$LANG_votre_adresse_non_localisee="Ihre Adresse konnte nicht gefunden werden Geo.<br>Verschieben Sie die Markierung auf der Karte, bis Zomm Ihre Adresse in Position, und klicken Sie auf Bestätigen. ";
$LANG_votre_adresse_pas_precise="Ihre Adresse ist nicht präzise genug ; Ihre gewählte Marker eine bereits belegt.";
$LANG_deplacez_marqueur="Verschieben Sie die Markierung auf der Karte, und klicken Sie auf Bestätigen, um die neue Position";
$LANG_modifier_vos_coordonnees="Ihre Daten ändern";
$LANG_nom_pseudo="Ihr Name(oder Pseudo)";
$LANG_numero_tel="Ihre Telefonnummer :";
$LANG_email="E-Mail-Adresse :";
$LANG_cacher_mon_email="Verstecken mein email.";
$LANG_cacher_mon_email_suite="Die anderen Teilnehmer können Sie Kontakt über die Website. <br> Ihre E-Mail-Adresse wird nicht angezeigt.";
	$LANG_votre_adresse="Ihre Adresse :";
$LANG_votre_ville="Ihre Stadt : ";
$LANG_votre_pays="Ihr Land : ";
$LANG_votre_cp="Ihre Postleitzahl : ";
$LANG_vous_avez_un_vehicule="Sie haben ein Auto (sondern können auch als Passagier in einem anderen)";
$LANG_pas_de_vehicule="Sie haben kein Auto";
$LANG_commentaire_participant="Kommentar (wird es neben Ihrer persönlichen Daten) :";
$LANG_seuls_les_visiteurs="Nur Besucher, die den Link zur Teilnahme an dieser Veranstaltung haben Zugriff auf Ihre Daten";
$LANG_vous_etes_ajoute="Sie ergänzt !";
$LANG_en_participant="Durch die Teilnahme am Car, akzeptieren Sie die Allgemeinen Geschäftsbedingungen von Benutzern der Website";
$LANG_vos_infos="Geben Sie Ihre";
$LANG_possede_vehicule="Besitzt ein Kraftfahrzeug (aber kann der Passagier in einem anderen)";
$LANG_ne_possede_vehicule="Nicht über Fahrzeug";
$LANG_plus_serons="Wir werden viele beteiligen, desto größer wird die Reduzierung von unseren ökologischen Fußabdruck. ";
$LANG_pas_de_participants="Noch keine Teilnehmer";
$LANG_donnes_ajoutees="Ihre Daten wurden in die Karte !";

$LANG_ajouter_cette_carte="Dieses Karte zu den Favoriten";

//COMMUNS
$LANG_bouton_envoyer="Senden";
$LANG_bouton_enregistrer="Speichern !";
$LANG_bouton_annuler="Abbrechen";
$LANG_veuillez_saisir_ce_champ="Bitte füllen Sie dieses Feld";
$LANG_veuillez_points="Bitte füllen Sie dieses Feld...";
$LANG_veuillez_points_suite="... oder ist die";
$LANG_rester_identifie="Angemeldet bleiben ein paar Tage";
$LANG_participant="Teilnehmer";
$LANG_participants="Teilnehmer";

//DON
$LANG_merci="Danke !";
$LANG_confirm_don="Ihre Spende wurde registriert. <br><br>Danke für Ihre Unterstützung !";

//FAQ
$LANG_faq1="Was kann dieser Website ?";
$LANG_faq1_texte="Diese Website dient der Organisation des Car für Ihre Veranstaltungen: Hochzeiten, Geschäftstreffen, Versammlungen Vereine, Ausbildung, sportliche Wettkämpfe...<br>Die Idee, die zur Entstehung dieser Website ist es, einen einfachen und effizienten ohne überflüssig. Zwei Klicks auf ein Ereignis. Zwei Klicks zur Teilnahme am Car eines Ereignisses. <br> Ohne Anspruch wigowiz.com hilft Ihnen, zu einer Verringerung der ökologischen Ihre Veranstaltungen. ";
$LANG_faq2="Was kostet die Benutzung dieser Website ? ";
$LANG_faq2_texte="Die Verwendung von wigowiz. De ist kostenlos. Wenn Sie dieses Projekt unterstützen möchten, können Sie eine Spende, um zu helfen, seine Entwicklung und Förderung ihres Schöpfers. ";

//TEMOIGANGES
$LANG_temoignages="Zeugnisse";
$LANG_temoignages_texte="Wie nutzen Sie diese Seite? Sie reduziert die Zahl der Autos, die an Ihrer Veranstaltung? Für uns Ihre Erfahrungen, danke, das Kontakt-Formular. ";
$LANG_ecrivez_nous="Schreiben Sie uns";

$LANG_votre_email="Ihre E-Mail :";
$LANG_verifier_email="Danke, ob E-Mail eingegeben";
$LANG_veuiller_saisir_message="Bitte geben Sie eine Nachricht";
$LANG_votre_message_envoye="Ihre Nachricht wurde gesendet !";
$LANG_retour_accueil="Home";
$LANG_votre_message="Ihre Nachricht :";
$LANG_envoyer_message_contact="Nachricht senden !";
$LANG_envoyer_message="Senden Sie eine Nachricht an ";

//CONDITION D'UTILISATION
$LANG_responsabilite="Verantwortung";
$LANG_responsabilite_texte="<p> Benutzer dieser Website unterstehen die einzige und alleinige Verantwortung für die Organisation der Fahrt in Fahrgemeinschaften. </ p> wigowiz.com Die Website ist ein Service für die Beziehung. In keinem Fall seiner Verantwortung nicht verpflichtet, über den Ablauf einer Fahrt nach einer in seinem Rahmen. </ p> ";
$LANG_traitement_donnees="Verarbeitung personenbezogener Daten";
$LANG_donnes_personnelles_texte="<p> Gemäß Gesetz Nr. 78-17 vom 6. Januar 1978 haben Sie ein Recht auf Auskunft und Berichtigung von persönlichen Angaben, die Sie an den Webmaster der Website . </ p> Auf keinen Fall darf durch andere Verwendung Ihrer persönlichen Daten, dass das, wofür sie bestimmt sind, nämlich den Betrieb der Website und die Anzeige der Markierungen auf die Karte für ein Ereignis. </ p> Wir verpflichten uns nicht verkaufen, verleihen, vermieten oder Weitergabe an eine andere Ihre persönlichen Daten, aus welchem Einsatz auch immer. </ p> Wir behalten uns das Recht vor, Sie per E-Mail bei der Online-Funktionen auf der Website. </ p>";

//PIED
$LANG_contact="Kontakt";
$LANG_temoignages="Zeugnisse";
$LANG_FAQ="FAQ";
$LANG_conditions_utilisation="Nutzungsbedingungen";

//COMPTE
$LANG_mon_compte="Mein Konto";
$LANG_vos_evenements="Ihre Veranstaltungen";
$LANG_infos_personnelles="Ihre persönlichen Daten";
$LANG_mes_evenements="Meine Ereignisse";
$LANG_acceder_compte="Auf mein Konto zugreifen";
$LANG_compte_motdepasse="Passwort";
$LANG_un_compte_permet="Ein Konto können Sie : ";
$LANG_compte1="direkten Zugriff auf die Veranstaltungen, an denen Sie teilnehmen, oder die Sie erstellt haben, brauchen halten urls Karten. ";
$LANG_compte2="Änderung Ihrer Kontaktdaten, Ihrer Position, die Anzahl der in Ihrem Fahrzeug gegebenenfalls";
$LANG_compte3="schreiben Sie sich für den Newsletter auf dem Laufenden gehalten werden Verbesserungen und neuen Funktionen, womit das demnächst.";
$LANG_compte_deja_inscrit="Dieser E-Mail ist bereits registriert.";
$LANG_erreur_mail="Fehler in der E-Mail-Adresse.";
$LANG_choisissez_motdepasse="Wählen Sie ein Passwort : ";
$LANG_saisir_motdepasse="Bitte geben Sie ein Passwort :";
$LANG_confirmer="... bestätigen";
$LANG_motsdepasse_diffrents="Passwörter stimmen nicht überein";
$LANG_infos_modifiees="Ihre persönlichen Daten wurden geändert";
$LANG_modifier_position_perso="Position ändern";
$LANG_position_modifiee="Position wurde geändert";
$LANG_motdepasse_perdu="Passwort Recovery";
$LANG_renvoi_motdepasse="Empfangen Mein Passwort";
$LANG_email_inconnu="Diese email unbekannt";
$LANG_motdepasse_renvoye="Ihr Kennwort hat Ihnen auf Anfrage per Mail";
$LANG_rappel_motdepasse="Rückruf Ihr Passwort";
$LANG_email_protege="Email geschützt";
$LANG_message_defaut="Hallo, ich würde sie mit Fahrgemeinschaft";





//MAILS
$LANG_mail_alerte="In neues Auto Ihrer Veranstaltung";
$LANG_mail_alerte_contenu="Hallo, ein neuer Eintrag wurde für das Auto Ihrer Veranstaltung";
$LANG_mail_alerte_contenu2="\nUm zu sehen, die Karte der Fahrgemeinschaft Ihrer Veranstaltung, klicken Sie hier :\nhttp://www.wigowiz.com/admin_carte.php?m=".$_SESSION['evenement']['code_admin']."\n\n\n----\nWenn Sie nicht mehr erhalten möchten Mail-Benachrichtigung für diese Veranstaltung, klicken Sie hier :\nhttp://www.wigowiz.com/admin_carte.php?a=annule_alerte&m=".$_SESSION['evenement']['code_admin']."";
$LANG_vous_avez_un_message="Sie haben eine Nachricht";
$LANG_evenement_cree_par="Veranstaltung von ";
$LANG_ne_plus_participer="Meine Teilnahme an dieser Veranstaltung";
$LANG_je_participe="Ich kann in Fahrgemeinschaften zu dieser Veranstaltung";






$LANG_paypal="<form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
<input type='hidden' name='cmd' value='_s-xclick'>
<input type='hidden' name='hosted_button_id' value='6185930'>
<input type='image' src='https://www.paypal.com/de_DE/DE/i/btn/btn_donate_SM.gif' border='0' name='submit' alt='Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.'>
<img alt='' border='0' src='https://www.paypal.com/fr_FR/i/scr/pixel.gif' width='1' height='1'>
</form>";

?>