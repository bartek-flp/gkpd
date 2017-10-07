<?php
/**
 * Module:      pl-PL.lang.php 
 * Description: This module houses all display text in the English language.
 * 
 */
/* 

--------------------------------------------------------------------------------------------------

To translate this file, first make a copy of it and rename it with the language name in the title.

==============================

Use ISO 169-2 Standards for and WWW3C Language Tag Standards for naming of language files. Use the
ALPHA-2 letter code whenever possible. 

ISO 169-2: 
https://www.loc.gov/standards/iso639-2/php/code_list.php

WWW3 Language Tags: 
https://www.w3.org/International/articles/language-tags/

WWW3 Choosing a Language Tag:
https://www.w3.org/International/questions/qa-choosing-language-tags

According to the WWW3:

"Always bear in mind that the golden rule is to keep your language tag as short as possible. Only 
add further subtags to your language tag *if they are needed to distinguish the language from 
something else in the context where your content is used...*

"Unless you specifically need to highlight that you are talking about Italian as spoken in Italy 
you should use it for Italian, and not it-IT. The same goes for any other possible combination."

To determine a subtag, go to the IANA Language Subtag Registry:
http://www.iana.org/assignments/language-subtag-registry

==============================

Items that need translation into other languages are housed here in PHP variables - each start with
a dollar sign ($). The words, phrases, etc. (called strings) that need to be translated are housed
between double-quotes ("). Please, ONLY alter the text between the double quotes!

For example, a translated PHP variable would look like this:

English (US) before translation:
$label_volunteer_info = "Volunteer Info";

Spanish translated:
$label_volunteer_info = "Información de Voluntarios";

Portuguese translated:
$label_volunteer_info = "Informações Voluntário";

==============================

Please note: the strings that need to be translated MAY contain HTML code. Please leave this code
intact! For example:

English (US):
$beerxml_text_008 = "Browse for your BeerXML compliant file on your hard drive and click <em>Upload</em>.";

Spanish:
$beerxml_text_008 = "Buscar su archivo compatible BeerXML en su disco duro y haga clic en <em>Cargar</em>.";

Note that the <em>...</em> tags were not altered. Just the word "Upload" to "Cargar" betewen those tags.

==============================

*/

include (INCLUDES.'url_variables.inc.php');

if (isset($entry_open)) $entry_open = $entry_open;
else $entry_open = "";

if (isset($judge_open)) $judge_open = $judge_open;
else $judge_open = "";

if (isset($judge_closed)) $judge_closed = $judge_closed;
else $judge_closed = "";

if (isset($reg_open)) $reg_open = $reg_open;
else $reg_open = "";

if (isset($total_entries)) $total_entries = $total_entries;
else $total_entries = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($row_limits['prefsEntryLimit'])) $row_limits['prefsEntryLimit'] = $row_limits['prefsEntryLimit'];
else $row_limits['prefsEntryLimit'] = "";

if (isset($row_limits['prefsEntryLimitPaid'])) $row_limits['prefsEntryLimitPaid'] = $row_limits['prefsEntryLimitPaid'];
else $row_limits['prefsEntryLimitPaid'] = "";

$php_version = phpversion();

$j_s_text = "";
if (strpos($section, "step") === FALSE) {
	if ((isset($judge_limit)) && (isset($steward_limit))) {
		if (($judge_limit) && (!$steward_limit)) $j_s_text = "Steward"; // missing punctuation intentional
		elseif ((!$judge_limit) && ($steward_limit)) $j_s_text = "Judge"; // missing punctuation intentional
		else $j_s_text = "Judge or steward"; // missing punctuation intentional
	}
}

// -------------------- Global Labels - mostly used for titles and navigation --------------------
// All labels are capitalized and without punctuation

$label_home = "Strona Główna";
$label_welcome = "Witaj";
$label_comps = "Competition Directory";
$label_info = "Informacje";
$label_volunteers = "Sędziowie";
$label_register = "Zarejestruj";
$label_help = "Pomoc";
$label_print = "Drukuj";
$label_my_account = "Moje konto";
$label_yes = "Tak";
$label_no = "Nie";
$label_low_none = "";
$label_low = "";
$label_med = "";
$label_high = "";
$label_pay = "Opłać wpisowe";
$label_reset_password = "Zresetuj hasło";
$label_log_in = "Zaloguj się";
$label_logged_in = "Zalogowany";
$label_log_out = "Wyloguj";
$label_logged_out = "Wylogowano";
$label_sponsors = "Sponsorzy";
$label_rules = "Regulamin";
$label_volunteer_info = "Informacje dla obsługi";
$label_reg = $label_register;
$label_judge_reg = "Rejestracja sędziów";
$label_steward_reg = "Rejestracja stewardów";
$label_past_winners = "Poprzedni zwycięzcy";
$label_contact = "Kontakt";
$label_style = "Style";
$label_entry = "Zgłoszenie";
$label_add_entry = "Zgłoś swoje piwo";
$label_edit_entry = "Edytuj zgłoszenie";
$label_upload = "Załaduj";
$label_bos = "Grand Prix";
$label_brewer = "Piwowar";
$label_cobrewer = "Drugi Piwowar";
$label_entry_name = "Nazwa piwa";
$label_required_info = "Wymagane info";
if (strpos($section, "step") === FALSE) $label_character_limit = $_SESSION['prefsSpecialCharLimit']." limit znaków - użyj haseł i skrótów aby zmieścić się w limicie. Pozostało znaków: "; 
$label_carbonation = "";
$label_sweetness = "";
$label_strength = "";
$label_color = 	"";
$label_table = "";
$label_standard = "";
$label_super = "";
$label_session = "";
$label_double = "";
$label_blonde = "";
$label_amber = "";
$label_brown = "";
$label_pale = "";
$label_dark = "";
$label_hydromel = "";
$label_sack = "";
$label_still = "";
$label_petillant = "";
$label_sparkling = "";
$label_dry = "";
$label_med_dry = "";
$label_med_sweet = "";
$label_sweet = "";
$label_brewer_specifics = "Brewer's Specifics";
$label_general = "General";
$label_amount_brewed = "Amount Brewed";
$label_specific_gravity = "Specific Gravity";
$label_fermentables = "Fermentables";
$label_malt_extract = "Malt Extract";
$label_grain = "Grain";
$label_hops = "Hops";
$label_hop = "Hop";
$label_mash = "Mash";
$label_steep = "Steep";
$label_other = "Other";
$label_weight = "Weight";
$label_use = "Use";
$label_time = "Time";
$label_first_wort = "First Wort";
$label_boil = "Boil";
$label_aroma = "Aroma";
$label_dry_hop = "Dry Hop";
$label_type = "Type";
$label_bittering = "Bittering";
$label_both = "Both";
$label_form = "Form";
$label_whole = "Whole";
$label_pellets = "Pellets";
$label_plug = "Plug";
$label_extract = "Extract"; 
$label_date = "Date";
$label_bottled = "Bottled";
$label_misc = "Miscellaneous";
$label_minutes = "Mintues";
$label_hours = "Hours";
$label_step = "Step";
$label_temperature = "Temperature";
$label_water = "Water";
$label_amount = "Amount";
$label_yeast = "Yeast";
$label_name = "Imię i nazwisko";
$label_manufacturer = "Manufacturer";
$label_nutrients = "Nutrients";
$label_liquid = "Liquid";
$label_ale = "Ale";
$label_lager = "Lager";
$label_wine = "Wine";
$label_champagne = "Champagne";
$label_boil = "Boil";
$label_fermentation = "Fermentation";
$label_finishing = "Finishing";
$label_finings = "Finings";
$label_primary = "Primary";
$label_secondary = "Secondary";
$label_days = "Days";
$label_forced = "Forced CO2";
$label_bottle_cond = "Bottle Conditioned";
$label_volume = "Volume";
$label_og = "Original Gravity";
$label_fg = "Final Gravity";
$label_starter = "Starter";
$label_password = "Hasło";
$label_judging_number = "Numer sędziowski";
$label_check_in = "Zarejestruj zgłoszenie";
$label_box_number = "Box Number";
$label_first_name = "Imię";
$label_last_name = "Nazwisko";
$label_secret_01 = "Jakie jest Twoje ulubione piwo codzienne?";
$label_secret_02 = "Jak miał na imię Twój pierwszy zwierzak?";
$label_secret_03 = "Jak nazywała się ulica na, której dorastałeś?";
$label_secret_04 = "Nazwisko ulubionego nauczyciela w szkole?";
$label_security_answer = "Odpowiedź bezpieczeństwa";
$label_security_question = "Pytanie bezpieczeństwa";
$label_judging = "Ocenianie";
$label_judge = "Sędzia";
$label_steward = "Steward";
$label_account_info = "Informacje o koncie";
$label_street_address = "Nazwa ulicy";
$label_address = "Adres";
$label_city = "Miasto";
$label_state_province = "Województwo";
$label_zip = "Kod pocztowy";
$label_country = "Kraj";
$label_phone = "Telefon";
$label_phone_primary = "Telefon główny #";
$label_phone_secondary = "Telefon dodatkowy #";
$label_drop_off = "Miejsce dostawy osobistej";
$label_drop_offs = "miejscu dostawy osobistej";
$label_club = "Nazwa browaru domowego";
$label_aha_number = "Numer legitymacji PSPD";
$label_org_notes = "Wiadomość dla organizatorów"; 
$label_avail = "Dostępność";
$label_location = "Lokalizacja";
$label_judging_avail = "Dostępność lokalizacji sędziowania";
$label_stewarding = "Stewardowanie";
$label_stewarding_avail = "Dostępność lokalizacji stewardowania";
$label_bjcp_id = "BJCP ID";
$label_bjcp_mead = "Sędzia cydrów";
$label_bjcp_rank = "Ranga sędziowska";
$label_designations = "Oznaczenia";
$label_judge_sensory = "Sędzia certyfikowany";
$label_judge_pro = "Piwowar zawodowy";
$label_judge_comps = "Udział w konkursach";
$label_judge_preferred = "Preferowane style";
$label_judge_non_preferred = "Nie-preferowane style";
$label_waiver = "Oświadczenie";
$label_add_admin = "Add Admin User Info";
$label_add_account = "Dodaj informacje o koncie";
$label_edit_account = "Edytuj informacje o koncie";
$label_entries = "Twoje zgłoszenia";
$label_confirmed = "Potwierdzone";
$label_paid = "Opłacone";
$label_updated = "Zaktualizowane";
$label_mini_bos = "Mini-BOS";
$label_actions = "Akcje";
$label_score = "Wynik";
$label_winner = "Winner?";
$label_change_email = "Zmień email";
$label_change_password = "Zmień hasło";
$label_add_beerXML = "Dodaj zgłoszenie używając BeerXML";
$label_none_entered = "Brak";
$label_none = "None";
$label_discount = "Zniżka";
$label_subject = "Temat";
$label_message = "Wiadomość";
$label_send_message = "Wyślij wiadomość";
$label_email = "Adres email";
$label_account_registration = "Rejestracja kont";
$label_entry_registration = "Rejestracja zgłoszeń";
$label_entry_fees = "Wpisowe";
$label_entry_limit = "Limit zgłoszeń";
$label_entry_info = "Entry Info";
$label_entry_per_entrant = "Limity zgłoszeń";
$label_categories_accepted = " oraz PSPD - Kategorie konkursowe";
$label_judging_categories = "Kategorie ocenianie";
$label_entry_acceptance_rules = "Zasady konkursu";
$label_shipping_info = "Informacje do wysyłki";
$label_packing_shipping = "Pakowanie i wysyłka";
$label_awards = "Nagrody";
$label_awards_ceremony = "Ceremonia wręczenia nagród";
$label_circuit = "Circuit Qualification";
$label_hosted = "Hosted Edition";
$label_entry_check_in = "Rejestracja piwa na konkurs";
$label_cash = "Gotówka";
$label_check = "Check";
$label_pay_online = "Zapłać online";
$label_cancel = "Anuluj";
$label_understand = "Rozumiem";
$label_fee_discount = "Kwota po zniżce";
$label_discount_code = "Kod zniżkowy";
$label_register_judge = "Rejestrujesz się jako uczestnik, sędzia czy steward?";
$label_register_judge_standard = "Zarejestruj się jako sędzia lub steward (Standard)";
$label_register_judge_quick = "Zarejestruj się jako sędzia lub steward (Szybko)";
$label_all_participants = "Wszyscy uczestnicy";
$label_open = "Dostępna";
$label_closed = "Niedostępna";
$label_judging_loc = "Data i lokalizacja konkursu";
$label_new = "Nowy";
$label_old = "Stary";
$label_sure = "Czy jesteś pewien?";
$label_judges = "Sędziowie";
$label_stewards = "Stewardzi";
$label_staff = "Obsługa";
$label_category = "Kategoria";
$label_delete = "Skasuj";
$label_undone = "To nie może być cofnięte";
$label_bitterness = "Goryczka";
$label_close = "Zamknij";
$label_custom_style = "Style wg. opisu PSPD";
$label_custom_style_types = "Custom Style Types";
$label_assigned_to_table = "Przypisz do stołu";
$label_organizer = "Organizator";
$label_by_table = "Według stołu";
$label_by_category = "Według kategorii";
$label_by_subcategory = "Według podkategorii";
$label_by_last_name = "Według nazwiska";
$label_by_table = "Według stołu";
$label_by_location = "Według lokalizacji";
$label_shipping_entries = "Adres do wysyłki";
$label_no_availability = "No Availability Defined";
$label_error = "Błąd";
$label_round = "Runda";
$label_flight = "Tura";
$label_rounds = "Rundy";
$label_flights = "Tury";
$label_sign_in = "Sign In";
$label_signature = "Podpis";
$label_assignment = "Assignment";
$label_assignments = "Assignments";
$label_letter = "Letter";
$label_re_enter = "Ponów";
$label_website = "Strona www";
$label_place = "Miejsce";
$label_cheers = "Twoje zdrowie";
$label_count = "Count";
$label_total = "Total";
$label_participant = "Uczestnik";
$label_entrant = "Uczestnik";
$label_received = "Otrzymano";
$label_please_note = "Please Note";
$label_pull_order = "Pull Order";
$label_box = "Box";
$label_sorted = "Sorted";
$label_subcategory = "Sub-Category";
$label_affixed = "Etykieta przymocowana?";
$label_points = "Punkty";
$label_comp_id = "BJCP Competition ID";
$label_days = "Dni";
$label_sessions = "Sesje";
$label_number = "Number";
$label_more_info = "Więcej informacji";
$label_entry_instructions = "Instrukcje zgłoszenia";
$label_commercial_examples = "Przykłady komercyjne";
$label_users = "Użytkownicy";
$label_participants = "Uczestnicy";
$label_please_confirm = "Proszę potwierdź";
$label_undone = "To nie może być cofnięte.";
$label_data_retain = "Data to Retain";
$label_comp_portal = "Competition Directory";
$label_comp = "Konkurs";
$label_continue = "Kontynuuj";
$label_host = "Host";
$label_closing_soon = "Niedługo koniec";
$label_access = "Access";
$label_length = "Długość";

// Admin
$label_admin = "Administration";
$label_admin_short = "Admin";
$label_admin_dashboard = "Dashboard";
$label_admin_judging = $label_judging;
$label_admin_stewarding = "Stewarding";
$label_admin_participants = $label_participants;
$label_admin_entries = $label_entries;
$label_admin_comp_info = "Informacje konkursowe";
$label_admin_web_prefs = "Website Preferences";
$label_admin_judge_prefs = "Competition Organization Preferences";
$label_admin_archives = "Archives";
$label_admin_style = $label_style;
$label_admin_styles = "Styles";
$label_admin_dropoff = $label_drop_offs;
$label_admin_judging_loc = $label_judging_loc;
$label_admin_contacts = "Contacts";
$label_admin_tables = "Tables";
$label_admin_scores = "Scores";
$label_admin_bos = $label_bos;
$label_admin_bos_acr = "BOS";
$label_admin_style_types = "Style Types";
$label_admin_custom_cat = "Custom Categories";
$label_admin_custom_cat_data = "Custom Category Entries";
$label_admin_sponsors = $label_sponsors;
$label_admin_entry_count = "Entry Count By Style";
$label_admin_entry_count_sub = "Entry Count By Sub-Style";
$label_admin_custom_mods = "Custom Modules";
$label_admin_check_in = $label_entry_check_in;
$label_admin_make_admin = "Change User Level";
$label_admin_register = "Register a Participant";
$label_admin_upload_img = "Upload Images";
$label_admin_upload_doc = "Upload Scoresheets and Other Documents";
$label_admin_password = "Change User Password";
$label_admin_edit_account = "Edit User Account";

// Sidebar Labels
$label_account_summary = "Podsumowanie konta";
$label_confirmed_entries = "Potwierdzone zgłoszenia";
$label_unpaid_confirmed_entries = "Nieopłacone potwierdzone zgłoszenia";
$label_total_entry_fees = "Opłacone wpisowe";
$label_entry_fees_to_pay = "Do opłacenia";
$label_entry_drop_off = "Dostawa osobista";

// v2.1.9
$label_maintenance = "Maintenance";
$label_judge_info = "Judge Information";
$label_cellar = "My Cellar";
$label_verify = "Zweryfikuj";
$label_entry_number = "Numer zgłoszenia";

// v2.1.10
$label_entry_numbers = "Ilość zgłoszeń"; // For PayPal IPN Email
$label_status = "Status zgłoszczń"; // For PayPal IPN Email
$label_amount = "kwota"; // For PayPal IPN Email
$label_transaction_id = "Numer transakcji"; // For PayPal IPN Email
$label_organization = "Organizacja";
$label_ttb = "TTB Number";
$label_username = "Nazwa użytkownika";
$label_from = "Wiadomość od"; // For email headers
$label_to = "Wiadomość do"; // For email headers
$label_varies = "Różnice";
$label_styles_accepted = "Zaakceptowane style";
$label_judging_styles = "Oceniane style";
$label_select_club = "Wybierz lub wyszukaj swój browar";
$label_select_style = "Wybierz lub odszukaj dla stylu w Twoim zgłoszeniu";
$label_select_country = "Wybierz lub odszukaj Twój kraj";
$label_select_dropoff = "Wybierz miejsce dostarczenia Twojego piwa";
$label_club_enter = "Enter Club Name";
$label_secret_05 = "Jakie jest nazwisko panieńskie Twojej babci?";
$label_secret_06 = "Jakie było imię Twojej pierwszej dziewczyny/chłopaka?";
$label_secret_07 = "Jaka była marka i model Twojego pierwszego pojazdu?";
$label_secret_08 = "Jakie było nazwisko Twojego wychowawcy w liceum?";
$label_secret_09 = "W którym mieście spotkałeś swoją drugą połowę?";
$label_secret_10 = "Jak miał na imię Twój najlepszy przyjaciel w szóstej klasie??";
$label_secret_11 = "Jak nazywa się Twój ulubiony muzyk lub zespół??";
$label_secret_12 = "Jakie miałeś przezwisko w dzieciństwie?";
$label_secret_13 = "Jak miał na nazwisko nauczyciel, który pierwszy postawił Ci \"jedynkę\"??";
$label_secret_14 = "Jak nazywa się Twój ulubiony przyjaciel z dzieciństwa??";
$label_secret_15 = "W którym mieście poznali się Twoi rodzice??";
$label_secret_16 = "Jaki numer telefonu z dzieciństwa najbardziej zapamiętałeś??";
$label_secret_17 = "Jakie było Twoje ulubione miejsce w dzieciństwie??";
$label_secret_18 = "W jakim miejscu całowałeś się po raz pierwszy?";
$label_secret_19 = "W którym mieście pracowałeś po raz pierwszy?";
$label_secret_20 = "W którym mieście spędziłeś Sylwestra 2000 roku?";
$label_secret_21 = "Jak nazywa się szkoła, do której aplikowałeś, ale nie chodziłeś?";
$label_secret_22 = "Jak miała na imię dziewczyna lub chłopak, którego pocałowałeś po raz pierwszy?";
$label_secret_23 = "Jak miała na imię Twoja pierwsza maskotka lub zwierzę?";
$label_secret_24 = "W jakim wieku spotkałeś swoją drugą połowę?";
$label_secret_25 = "Na jakiej ulicy mieszkałeś w pierwszej klasie?";
$label_secret_26 = "Jaka jest prędkość lotu jaskółki bez obciążenia?";
$label_secret_27 = "Jak nazywa się Twój ulubiony program w TV, który już nie jest emitowany?";
$label_pro = "Profesjonalny";
$label_amateur = "Amatorski";
$label_hosted = "Ugoszczony";
$label_edition = "Edycja";
$label_pro_comp_edition = "Edycja profesjonalnego konkursu";
$label_amateur_comp_edition = "Edycja amatorskiego konkursu";
$label_optional_info = "Informacja dodatkowa";
$label_or = "Lub";
$label_admin_payments = "płatności";
$label_payer = "Płatnik";
$label_pay_with_paypal = "Zapłać przez PayPal";
$label_submit = "Wyślij";
$label_id_verification_question = "Pytanie do weryfikacji numeru transakcji";
$label_id_verification_answer = "Odpowiedź do weryfikacji numeru transakcji";
$label_server = "Serwer";
$label_password_reset = "Zresetuj hasło";
$label_id_verification_request = "Pytanie do weryfikacji hasła";
$label_new_password = "Nowe hasło";
$label_confirm_password = "Potwierdź hasło";
$label_with_token = "Z tokenem";
$label_password_strength = "Siła hasła";


// -------------------- Headers --------------------
// Missing punctuation intentional for all
if (strpos($section, "step") === FALSE) {
	if ($_SESSION['jPrefsQueued'] == "N") $assign_to = "Flights"; else $assign_to = "Tables";
}
$header_text_000 = "Setup was successful.";
$header_text_001 = "You are now logged in and ready to further customize your competition's site.";
$header_text_002 = "However, your config.php permissions file could not be changed.";
$header_text_003 = "It is highly recommended that you change the server permissions (chmod) on the config.php file to 555. To do this, you will need to access the file on your server.";
$header_text_004 = "Additionally, the &#36;setup_free_access variable in config.php is currently set to TRUE. For security reasons, the setting should returned to FALSE. You will need to edit config.php directly and re-upload to your server to do this.";
$header_text_005 = "Informacja dodana.";
$header_text_006 = "Informacja edytowana.";
$header_text_007 = "Wystąpił błąd.";
$header_text_008 = "Proszę spróbować ponownie.";
$header_text_009 = "You must be an administrator to access the admin functions.";
$header_text_010 = "Zmień";
$header_text_011 = $label_email;
$header_text_012 = $label_password;
$header_text_013 = "Adres email już istnieje. Użyj innego.";
$header_text_014 = "Wystąpił problem z ostatnim poleceniem, proszę spróbować ponownie.";
$header_text_015 = "Twoje hasło jest nieprawidłowe.";
$header_text_016 = "Podaj właściwy adres email.";
$header_text_017 = "Wybacz, wystąpił problem z próbą ostatniego logowania.";
$header_text_018 = "Login jest już używany.";
$header_text_019 = "Być może masz już konto?";
$header_text_020 = "Jeśli tak, zaloguj się tu.";
$header_text_021 = "Nazwa użytkownika nie jest prawidłowym adresem e-mail.";
$header_text_022 = "Podaj właściwy adres email.";
$header_text_023 = "The characters you entered in the CAPTCHA section below were not correct.";
$header_text_024 = "Podane adresy e-mail nie są zgodne.";
$header_text_025 = "The AHA number you entered is already in the system.";
$header_text_026 = "Your online payment has been received.";
$header_text_027 = "Please make sure to print the receipt and attach it to one of your entries as proof of payment.";
$header_text_028 = "Your online payment has been cancelled.";
$header_text_029 = "The code has been verified.";
$header_text_030 = "Sorry, the code you entered was incorrect.";
if (strpos($section, "step") === FALSE) $header_text_031 = "You must log in and have admin privileges to access the ".$_SESSION['contestName']." administration functions.";
$header_text_032 = "Wybacz, wystąpił problem z próbą Twojego ostatniego logowania.";
$header_text_033 = "Upewnij się czy adres email i hasło są poprawne.";
$header_text_034 = "Twoje hasło zostało losowo wygenerowane i ustawione jako ".$go;
$header_text_035 = "- you can now log in using your current username and the new password.";
$header_text_036 = "Zostałeś wylogowany.";
$header_text_037 = "Zalogować ponownie?";
$header_text_038 = "Twoja odpowiedź na pytanie bezpieczeństwa nie jest prawidłowa.";
$header_text_039 = "Your ID verification information has been sent to the email address associated with your account.";
$header_text_040 = "Twoja wiadomość została wysłana do ";
$header_text_041 = "The characters you entered in the CAPTCHA section below were not correct.";
$header_text_042 = "Email został zaktualizowany.";
$header_text_043 = "Hasło zostało zaktualizowane.";
$header_text_044 = "Informacja skasowana z sukcesem.";
$header_text_045 = "You should verify all your entries imported using BeerXML.";
$header_text_046 = "Zostałeś zarejestrowany.";
$header_text_047 = "Osiągnąłeś limit zgłoszeń.";
$header_text_048 = "Twoje zgłoszenie nie zostało dodane.";
$header_text_049 = "Osiągnąłeś limit zgłoszeń w podkategoriach.";
$header_text_050 = "Set Up: Install DB Tables and Data";
$header_text_051 = "Set Up: Create Admin User";
$header_text_052 = "Set Up: Add Admin User Info";
$header_text_053 = "Set Up: Set Website Preferences";
$header_text_054 = "Set Up: Add Competition Info";
$header_text_055 = "Set Up: Add Judging Locations";
$header_text_056 = "Set Up: Add Drop-Off Locations";
$header_text_057 = "Set Up: Designate Accepted Styles";
$header_text_058 = "Set Up: Set Judging Preferences";
$header_text_059 = "Import an Entry Using BeerXML";
$header_text_060 = "Your entry has been recorded.";
$header_text_061 = "Your entry has been confirmed.";
$header_text_065 = "All received entries have been checked and those not assigned to tables have been assigned.";
$header_text_066 = "Info deleted successfully.";
$header_text_067 = "The suffix you entered is already in use, please enter a different one.";
$header_text_068 = "The specified competition data has been cleared.";
$header_text_069 = "Archives created successfully. ";
$header_text_070 = "Click the archive name to view."; 
$header_text_071 = "Remember to update your ".$label_admin_comp_info." and your ".$label_admin_judging_loc." if you are starting a new competition.";
$header_text_072 = "Archive \"".$filter."\" deleted.";
$header_text_073 = "The records have been updated.";
$header_text_074 = "The username you have entered is already in use.";
$header_text_075 = "Add another drop-off location?";
$header_text_076 = "Add another judging location, date, or time?";
$header_text_077 = "The table that was just defined does not have any associated styles.";
$header_text_078 = "One or more pieces of required data are missing - outlined in red below.";
$header_text_079 = "The email addresses you entered do not match.";
$header_text_080 = "The AHA number you entered is already in the system.";
$header_text_081 = "All entries have been marked as paid.";
$header_text_082 = "All entries have been marked as received.";
$header_text_083 = "All unconfirmed entries are now marked as confirmed.";
$header_text_084 = "All participant assignments have been cleared.";
$header_text_085 = "A judging number you entered wasn't found in the database.";
$header_text_086 = "All entry styles have been converted from BJCP 2008 to BJCP 2015.";
$header_text_087 = "Data has been deleted from the database.";
$header_text_088 = "The judge/steward has been added successfully. Remember to assign the user as a judge or steward before assigning to tables.";
$header_text_089 = "The file has been uploaded successfully. Check the list to verify.";
$header_text_090 = "The file that was attempted to be uploaded is not an accepted file type.";
$header_text_091 = "The file has been deleted.";
$header_text_092 = "The test email has been generated. Be sure to check your spam folder.";
$header_text_093 = "The user&rsquo;s password has been changed. Be sure to let them know what their new password is!";
$header_text_094 = "Change permission of user_images folder to 755 has failed.";
$header_text_095 = "You will need to change the folder&rsquo;s permission manually. Consult your FTP program or ISP&rsquo;s documentation for chmod (folder permissions).";
$header_text_096 = "Judging Numbers have been regenerated.";
$header_text_097 = "Your installation has been set up successfully!";
$header_text_098 = "FOR SECURITY REASONS you should immediately set the &#36;setup_free_access variable in config.php to FALSE.";
$header_text_099 = "Otherwise, your installation and server are vulerable to security breaches.";
$header_text_100 = "Log in now to access the Admin Dashboard";
$header_text_101 = "Your installation has been updated successfully!";
$header_text_102 = "Adres email się nie zgadza.";
$header_text_103 = "Zaloguj się, aby uzyskać dostęp do konta.";
$header_text_104 = "You do not have sufficient access priveliges to view this page.";
$header_text_105 = "Musisz podać dodatkowe informacje aby Twoje zgłoszenie zostało zaakceptowane i potwierdzone.";
$header_text_106 = "Uzupełnij pola poniżej zaznaczone na czerwono.";
$header_text_107 = "Wybierz styl.";
$header_text_108 = "This entry cannot be accepted or confirmed until a style has been chosen. Unconfirmed entries may be deleted from the system without warning.";

// v2.1.9
$header_text_109 = "Zostałeś zarejestrowany jako steward.";
$header_text_110 = "All entries have been un-marked as paid.";
$header_text_111 = "All entries have been un-marked as received.";

// v2.1.10
$header_text_112 = "Nie masz wystarczających uprawnień dostępu do wykonania tej czynności.";
$header_text_113 = "Możesz edytować tylko własne informacje o koncie.";
$header_text_114 = "Jako administrator możesz zmieniać informacje o koncie użytkownika poprzez ścieżkę: Admin> Wpisy i uczestnicy> Zarządzaj uczestnikami.";
$header_text_115 = "Wyniki zostały opublikowane.";
$header_text_116 = "Jeśli nie otrzymasz e-maila w spodziewanym terminie, skontaktuj się z organizatorem, aby zresetować hasło.";

// -------------------- Navigation --------------------


// -------------------- Alerts --------------------
if (strpos($section, "step") === FALSE) {
	if (($judge_limit) && (!$steward_limit)) $j_s_text = "Steward"; // missing punctuation intentional
	elseif ((!$judge_limit) && ($steward_limit)) $j_s_text = "Judge"; // missing punctuation intentional
	else $j_s_text = "Judge or steward"; // missing punctuation intentional
}
$alert_text_000 = "Grant users top-level admin and admin access with caution.";
$alert_text_001 = "Data clean-up completed.";
$alert_text_002 = "The &#36;setup_free_access variable in config.php is currently set to TRUE.";
$alert_text_003 = "For security reasons, the setting should returned to FALSE. You will need to edit config.php directly and re-upload the file to your server.";
$alert_text_005 = "No drop-off locations have been specified.";
$alert_text_006 = "Add a drop-off location?";
$alert_text_008 = "No judging dates/locations have been specified.";
$alert_text_009 = "Add a judging location?";
$alert_text_011 = "No competition contacts have been specified.";
$alert_text_012 = "Add a competition contact?";
$alert_text_014 = "Your current style set is BJCP 2008.";
$alert_text_015 = "Do you want to convert all entries to BJCP 2015?";
$alert_text_016 = "Are you sure? This action will convert all entries in the database to conform to the BJCP 2015 style guidelines. Categories will be 1:1 where possible, however some specialty styles may need to be updated by the entrant.";
$alert_text_017 = "To retain functionality, the conversion must be performed <em>before</em> defining tables.";
$alert_text_019 = "All unconfirmed entries have been deleted from the database.";
$alert_text_020 = "Unconfirmed entries are highlighted and denoted with a <span class=\"fa fa-lg fa-exclamation-triangle text-danger\"></span> icon below.";
$alert_text_021 = "Owners of these entries should be contacted. These entries are not included in fee calculations.";
$alert_text_023 = "Add a Drop-Off Location?";
$alert_text_024 = $label_yes;
$alert_text_025 = $label_no;
$alert_text_027 = "Rejestracja do konkursu jeszcze się nie rozpoczęła.";
$alert_text_028 = "Rejestracja do konkursu została zamknięta.";
$alert_text_029 = "Adding entries is not available.";
$alert_text_030 = "The competition entry limit has been reached.";
$alert_text_031 = "Your personal entry limit has been reached.";
if (strpos($section, "step") === FALSE) $alert_text_032 = "You will be able to add entries on or after ".$entry_open.".";
if (strpos($section, "step") === FALSE) $alert_text_033 = "Registration will open ".$reg_open.".";
$alert_text_034 = "Please return then to register your account.";
if (strpos($section, "step") === FALSE) $alert_text_036 = "Entry registration will open ".$entry_open.".";
$alert_text_037 = "Please return then to add your entries to the system.";
if (strpos($section, "step") === FALSE) $alert_text_039 = "Judge and steward registration will open ".$judge_open.".";
$alert_text_040 = "Please return then to register as a judge or steward.";
$alert_text_042 = "Entry registration is open!";
if (strpos($section, "step") === FALSE) $alert_text_043 = "A total of ".$total_entries." entries have been added to the system as of ".$current_time.".";
$alert_text_044 = "Registration will close ".$entry_closed.".";
$alert_text_046 = "The entry limit nearly reached!";
if (strpos($section, "step") === FALSE) $alert_text_047 = $total_entries." of ".$row_limits['prefsEntryLimit']." maximum entries have been added into the system as of ".$current_time.".";
$alert_text_049 = "The entry limit has been reached.";
if (strpos($section, "step") === FALSE) $alert_text_050 = "The limit of ".$row_limits['prefsEntryLimit']." entries has been reached. No further entries will be accepted.";
$alert_text_052 = "The paid entry limit has been reached.";
if (strpos($section, "step") === FALSE) $alert_text_053 = "The limit of ".$row_limits['prefsEntryLimitPaid']." <em>paid</em> entries has been reached. No further entries will be accepted.";
$alert_text_055 = "Registration is closed.";
$alert_text_056 = "If you already registered an account,";
$alert_text_057 = "zaloguj się tutaj"; // lower-case and missing punctuation intentional
$alert_text_059 = "Rejestracja zgłoszeń jest zamknięta.";
if (strpos($section, "step") === FALSE) $alert_text_060 = "A total of ".$total_entries." entries were added into the system.";
$alert_text_062 = "Możliwość dostawy osobistej jest już zamknięta.";
$alert_text_063 = "Piwa konkursowe w punkcie dostawy osobisyej nie są już przyjmowane.";
$alert_text_065 = "Mozliwość wysyłki piwa jest zamknięta.";
$alert_text_066 = "Piwa konkursowe nie są już przyjmowane.";
if (strpos($section, "step") === FALSE) $alert_text_068 = $j_s_text." registration open.";
$alert_text_069 = "Register here"; // missing punctuation intentional
if (strpos($section, "step") === FALSE) $alert_text_070 = $j_s_text." registration will close ".$judge_closed.".";
$alert_text_072 = "Limit rejestracji sędziów został osiągnięty.";
$alert_text_073 = "Rejestracje jako sędzia nie są już przyjmowane.";
$alert_text_074 = "Rejestracja jako steward jest nadal dostępna.";
$alert_text_076 = "Limit rejestracji stewardów został już osiągnięty.";
$alert_text_077 = "Brak możliwości rejestracji jako steward.";
$alert_text_078 = "Rejestracja jako sędzia jest nadal dostępna.";
$alert_text_080 = "Niepoprawne hasło.";
$alert_text_081 = "Hasło jest poprawne.";

// v2.1.10
$alert_text_082 = "Ponieważ rejestrujesz się jako sędzia lub steward, nie możesz dodawać wpisów do swojego konta. Tylko przedstawiciele organizacji mogą dodawać wpisy do swoich kont.";
$alert_text_083 = "Adding and edting of entries is not available.";
$alert_text_084 = "As an Administrator, you can add an entry to an organization's account by using the &quot;Add Entry For...&quot; dropdown menu on the Admin &gt; Entries and Participants &gt; Manage Entries page.";
$alert_text_085 = "You will not be able to print any entry's paperwork (bottle labels, etc.) until payment for it has been confirmed and it has been marked as &quot;paid&quot; below.";

$alert_email_valid = "Adres email jest poprawny!";
$alert_email_not_valid = "Adres email nie jest poprawny!";
$alert_email_in_use = "Podany adres email jest już zarejestrowany. Proszę podaj inny.";
$alert_email_not_in_use = "Sukces! Podany adres email jeszcze nie jest wykorzystany.";


// ----------------------------------------------------------------------------------
// Public Pages
// ----------------------------------------------------------------------------------

// v2.1.9
$comps_text_000 = "Wybierz konkurs do którego chcesz dołączyć.";
$comps_text_001 = "Aktualny konkurs:";
$comps_text_002 = "Obecnie nie ma żadnych konkursów przyjmujących zgłoszenia.";
$comps_text_003 = "Obecnie nie ma żdanych konkursów, których okres przyjmowania zgłoszeń kończy się w ciągu 7 dni.";

// -------------------- BeerXML --------------------

$beerxml_text_000 = "Importing entries is not available.";
$beerxml_text_001 = "has been uploaded and the brew has been added to your list of entries.";
$beerxml_text_002 = "Sorry, that file type is not allowed to be uploaded.  Only .xml file extensions are allowed.";
$beerxml_text_003 = "The file size is over 2MB.  Please adjust the size and try again.";
$beerxml_text_004 = "Invalid file specified.";
$beerxml_text_005 = "However, it has not been confirmed. To confirm your entry, access your entries list for further instructions. Or, you can add upload another BeerXML entry below.";
$beerxml_text_006 = "Your server's version of PHP does not support the BeerXML import feature.";
if (strpos($section, "step") === FALSE) $beerxml_text_007 = "PHP version 5.x or higher is required &mdash; this server is running PHP version ".$php_version.".";
$beerxml_text_008 = "Browse for your BeerXML compliant file on your hard drive and click <em>Upload</em>.";
$beerxml_text_009 = "Choose BeerXML File";
$beerxml_text_010 = "No file chosen...";
$beerxml_text_011 = "entries added"; // lower-case and missing punctuation intentional
$beerxml_text_012 = "entry added"; // lower-case and missing punctuation intentional

// -------------------- Best of Show --------------------
// None


// -------------------- Brew (Add Entry) --------------------

if ($section == "brew") {
	$brew_text_000 = "Click for specifics about style"; // missing punctuation intentional
	$brew_text_001 = "Sędziowie nie będą znali nazwy Twojego piwa.";
	$brew_text_002 = "[disabled - style entry limit reached]"; // missing punctuation intentional
	$brew_text_003 = "[disabled - style entry limit reached for user]"; // missing punctuation intentional
	$brew_text_004 = "Konkretny typ, specjalne dodatki, styl klasyczny, moc i/lub kolor są wymagane.";
	$brew_text_005 = "Wymagana moc"; // missing punctuation intentional
	$brew_text_006 = "Wymagane nasycenie CO2"; // missing punctuation intentional
	$brew_text_007 = "Wymagany poziom słodyczy"; // missing punctuation intentional
	$brew_text_008 = "Jeśli zgłaszasz piwo w kategorii \"Milk Stout z owocami\", obowiązkowo wypełnij pole poniżej informacją o użytych owocach. Pozostałe style nie wymagają podawania dodatkowych informacji o piwie.";
	$brew_text_009 = "Wymagania dla"; // missing punctuation intentional
	$brew_text_010 = "Ten styl wymaga podania informacji. Proszę uzupełnić.";
	$brew_text_011 = "Nazwa piwa jest wymagana.";
	$brew_text_012 = "***NOT REQUIRED*** Provide ONLY if you wish the judges to fully consider what you write here when evaluating and scoring your entry. Use to record specifics that you would like judges to consider when evaluating your entry that you have NOT SPECIFIED in other fields (e.g., mash technique, hop variety, honey variety, grape variety, pear variety, etc.).";
	$brew_text_013 = "DO NOT use this field to specify special ingredients, classic style, strength (for beer entries), or color.";
	$brew_text_014 = "Provide only if you wish the judges to fully consider what you specify when evaluating and scoring your entry.";
	$brew_text_015 = "Type of extract (e.g., light, dark) or brand.";
	$brew_text_016 = "Type of grain (e.g., pilsner, pale ale, etc.)";
	$brew_text_017 = "Type of ingredient or name.";
	$brew_text_018 = "Hop name.";
	$brew_text_019 = "Numbers only (e.g., 12.2, 6.6, etc.).";
	$brew_text_020 = "Name of strain (e.g., 1056 American Ale).";
	$brew_text_021 = "Wyeast, White Labs, etc.";
	$brew_text_022 = "1 smackpack, 2 vials, 2000 ml, etc.";
	$brew_text_023 = "Primary fermentation in days.";
	$brew_text_024 = "Saccharification rest, etc.";
	$brew_text_025 = "Secondary fermentation in days.";
	$brew_text_026 = "Other fermentation in days.";

	//v2.1.10
	$brew_text_027 = "This Brewers Association style requires a statement from the brewer regarding the special nature of the product. See the <a href=\"https://www.brewersassociation.org/resources/brewers-association-beer-style-guidelines/\" target=\"_blank\">BA Style Guidelines</a> for specific guidance.";
	$brew_text_028 = "***NIEWYMAGANE*** Dodaj informację, która jest wymieniona w opisie stylu jako element, który MOŻESZ określić.";
	$brew_text_029 = "Admin editing disabled. Your profile is considered a personal profile and not a organizational profile, and thus, not eligible to add entries. To add an entry for an organization, access the Manage Entries list and choose an organization from the &quot;Add an Entry For...&quot; dropdown.";
}

// -------------------- Brewer (Account) --------------------

if (($section == "brewer") || ($section == "register") || ($section == "step2") || (($section == "admin") && ($go == "entrant")) || (($section == "admin") && ($go == "judge"))) {
	$brewer_text_000 = "Podaj tylko <em>jedno</em> nazwisko piwowara. Nazwisko drugiego piwowara będziesz mógł podać podczas zgłaszania piwa.";
	$brewer_text_001 = "Wybierz jedno. Pytanie będzie uzyte do zweryfikowania Twojej osoby w przypadku zagubienia hasła.";
	if (strpos($section, "step") === FALSE) $brewer_text_002 = "You can also <a href=\"".$edit_user_password_link."\">change your password now</a> if you wish.";
	$brewer_text_003 = "To be considered for a GABF Pro-Am brewing opportunity you must be an AHA member.";
	$brewer_text_004 = "Provide any information that you believe the competition organizer should know (e.g., allergies, special dietary restrictions, shirt size, etc.).";
	$brewer_text_005 = "Nie dotyczy";
	$brewer_text_006 = "Jeżeli jesteś sędzią i chcesz wziąć udział w procesie oceny podczas konkursu zaznacz TAK.";
	$brewer_text_007 = "Czy posiadasz odpowiednią wiedzę do oceny cydrów?";
	$brewer_text_008 = "* The <em>Non-BJCP</em> rank is for those who haven't taken the BJCP Beer Judge Entrance Exam, and are <em>not</em> a professional brewer.";
	$brewer_text_009 = "** The <em>Provisional</em> rank is for those have taken and passed the BJCP Beer Judge Entrance Exam, but have not yet taken the BJCP Beer Judging Exam.";
	$brewer_text_010 = "Only the first two designations will appear on your printed scoresheet labels.";
	$brewer_text_011 = "W ilu konkursach brałeś do tej pory udział jako <strong>".strtolower($label_judge)."</strong>?";
	$brewer_text_012 = "Wybierz swoje GŁÓWNE PREFERENCJE. Pozostawienie stylu nieoznaczonego - będzie odbierane jako możliwe do oceny – nie ma potrzeby wybierania wszytskich stylów.";
	$brewer_text_013 = "Click or tap the button above to expand the non-preferred styles to judge list.";
	$brewer_text_014 = "Nie ma potrzeby wyboru stylów w których startujesz. System nie dopuści Cię do oceny stylu, w którym wystawiasz swoje piwo.";
	$brewer_text_015 = "Czy chesz pracować jako steward w tym konkursie?";
	$brewer_text_016 = "Mój udział w konkursie jako sędzia jest całkowicie dobrowolny i bezpłatny. Rozumiem, że udział podczas oceny piwa wiąże się z konsumpcją pewnej ilości alkoholu, która może wpływać na moje zdrowie i robię to na własną odpowiedzialność.";
	$brewer_text_017 = "Klliknij powyższy guzik, aby wybrać style preferowane.";
	$brewer_text_018 = "Zaznaczając to pole, oświadczam że biorę odpowiedzialność za własne działania i zwalniam organizatorów konkursu od jakiejkoliwek odpowiedzialności wynikającej z następstw mojego dobrowolnego udziału w konkursie.";
	
	// v2.1.9
	$brewer_text_019 = "If you are planning to serve as a judge in any competition, click or tap the button above to enter your judge-related information.";
	$brewer_text_020 = "Czy chcesz pracować jako wolontariusz/pomocnik przy tym konkursie?";
	$brewer_text_021 = "Czasami potrzebujemy dodatkowych kilku rąk do pomocy, więc jeżeli wyrazisz chęć do pomocy, to odezwiemy się do Ciebie w miarę potrzeby. Zawsze możesz także zgłosić się do pracy w roli stewarda podczas konkursu.";

	// v2.1.10
	$brewer_text_022 = "Podczas dodawania zgłoszenia będziesz mógł wskazać drugiego piwowara.";
	$brewer_text_023 = "Wybierz &quot;None&quot; jeśli nie jesteś związany z żadnym browarem domowym. Wybierz &quot;Other&quot; jeśli Twojego browaru nie ma na liście - <strong>możesz użyć wyszukiwania</strong>.";

}	

// -------------------- Contact --------------------

if ($section == "contact") {
	
	$contact_text_000 = "Użyj linków poniżej, aby skontaktować się z osobami odpowiedzialnymi za konkurs:";
	$contact_text_001 = "Uzyj formularza poniżej, aby wysłać maila do organizatorów. Pola oznaczone gwiazdką, są wymagane.";
	$contact_text_002 = "Dodatkowa kopia została wysłana na Twój adres email.";
	$contact_text_003 = "Czy chcesz wysłać kolejną wiadomość?";

}

// -------------------- Default (Home) -------------------

if ($section == "default") {
		
	$default_page_text_000 = "Brak możliwości dostarczenia piwa osobiście.";
	$default_page_text_001 = "Dodaj punkt dostawy osobistej";
	$default_page_text_002 = "Brak dat sędziowania/brak lokalizacji konkursu.";
	$default_page_text_003 = "Dodać lokalizację sędziowania?";
	$default_page_text_004 = "Winning Entries";
	$default_page_text_005 = "Winners will be posted on or after";
	$default_page_text_006 = "Witaj";
	$default_page_text_007 = "Szczegóły Twojego konta i lista zgłoszeń konkursowych.";
	$default_page_text_008 = "Zobacz szczegóły swojego konta.";
	$default_page_text_009 = "Best of Show Winners";
	$default_page_text_010 = "Winning Entries";
	$default_page_text_011 = "System recpcji piwa na konkursy piw domowych. Załóż konto, dodawaj lub modyfikuj swoje zgłoszenia.";
	$default_page_text_012 = "You can even pay your entry fees online if you wish.";
	$default_page_text_013 = "Organizatorzy konkursu";
	$default_page_text_014 = "Organizatorzy konkursu";
	$default_page_text_015 = "Skontaktuj się z organizatorami poprzez ";
	$default_page_text_016 = "oraz współpracujący z nami";
	$default_page_text_017 = "podczas";
	$default_page_text_018 = "Download the Best of Show winners in PDF format.";
	$default_page_text_019 = "Download the Best of Show winners in HTML format.";
	$default_page_text_020 = "Download the winning entries in PDF format.";
	$default_page_text_021 = "Download the winning entries in HTML format.";
	$default_page_text_022 = "Dziękujemy za zainteresowanie "; 
	$default_page_text_023 = "organizowanym przez";
	
	$reg_open_text_000 = "Rejestracja sędziów i stewardów jest ";
	$reg_open_text_001 = "Otwarta";
	$reg_open_text_002 = "Jeśli chcesz wziąć udział w konkursie jako sędzia lub steward,";
	$reg_open_text_003 = "zarejestruj się";
	$reg_open_text_004 = "Jeśli posiadasz już konto, zaloguj się i wybierz <em>Edytuj konto</em> z menu Moje Konto oznaczone";
	$reg_open_text_005 = "ikoną w górnym menu.";
	$reg_open_text_006 = "W związku z tym, że już się zarejestrowałeś,";
	$reg_open_text_007 = "zweryfikuj swoje konto";
	$reg_open_text_008 = "czy zgłosiłeś się już do konkursu jako sędzia lub steward.";
	$reg_open_text_009 = "Jeśli chcesz być sędzią lub stewardem, 	If you are willing to judge or steward, please return to register on or after";
	$reg_open_text_010 = "Rejestracja zgłoszeń konkursowych jest ";
	$reg_open_text_011 = "Aby dodać zgłoszenie do systemu";
	$reg_open_text_012 = "załóż nowe konto w systemie  ";
	$reg_open_text_013 = "jeśli masz już swoje konto.";
	$reg_open_text_014 = "skorzystaj z formularza rejestracji";
	
	// v2.1.9
	$reg_open_text_015 = "Rejestracja sędziów jest";
	$reg_open_text_016 = "Rejestracja stewardów jest";
	
	$reg_closed_text_000 = "Thanks and Good Luck To All Who Entered the";
	$reg_closed_text_001 = "Obecnie jest";
	$reg_closed_text_002 = "zarejestrowanych użytkowników, sędziów i stewardów.";
	$reg_closed_text_003 = "zarejestrowanych zgłoszeń";
	$reg_closed_text_004 = "zarejestrowanych uczestników, sędziów, i stewardów.";
	$reg_closed_text_005 = "Jako";
	$reg_closed_text_006 = "received and processed entries (this number will update as entries are picked up from drop-off locations and organized for judging).";
	$reg_closed_text_007 = "Competition judging dates are yet to be determined. Please check back later.";
	$reg_closed_text_008 = "Map to";
	
	$judge_closed_000 = "Dziękujemy wszystkim za udział w";
	$judge_closed_001 = "There were";
	$judge_closed_002 = "entries judged and";
	$judge_closed_003 = "registered participants, judges, and stewards.";
	
}

// -------------------- Entry Info --------------------

if ($section == "entry") {
	
	$entry_info_text_000 = "You will be able to create your account beginning";
	$entry_info_text_001 = "do";
	$entry_info_text_002 = "Judges and stewards may register beginning";
	$entry_info_text_003 = "za zgłoszenie";
	$entry_info_text_004 = "Możesz utworzyć swoje konto od dnia dzisiejszego do ";
	$entry_info_text_005 = "Sędziowie i stewardzi mogą rejestrować się teraz do";
	$entry_info_text_006 = "Rejestracja dla";
	$entry_info_text_007 = "sędziów i stewardów";
	$entry_info_text_008 = "akceptowana do";
	$entry_info_text_009 = "Rejestracja jest <strong class=\"text-danger\">zamknięta</strong>.";
	$entry_info_text_010 = "Witaj";
	$entry_info_text_011 = "Szczegóły konta i llista zgłoszeń.";
	$entry_info_text_012 = "Aby przejść do swojego konta, kliknij tu.";
	$entry_info_text_013 = "per entry after the";
	$entry_info_text_014 = "You will be able to add your entries to the system beginning";
	$entry_info_text_015 = "Możesz zgłaszać swoje piwa do konkursu od dzisiaj do";
	$entry_info_text_016 = "Rejstracja do konkursu jest <strong class=\"text-danger\">zamknięta</strong>.";
	$entry_info_text_017 = "for unlimited entries.";
	$entry_info_text_018 = "for AHA members.";
	$entry_info_text_019 = "Występuje limit";
	$entry_info_text_020 = "zgłoszeń na ten konkurs.";
	$entry_info_text_021 = "Każdy uczestnik może zgłosić maksymalnie ";
	$entry_info_text_022 = "zgłoszeń na ten konkurs";
	$entry_info_text_023 = "piwa do konkursu";
	$entry_info_text_024 = "piwo do każdej kategorii";
	$entry_info_text_025 = "entries per sub-category";
	$entry_info_text_026 = "exceptions are detailed below";
	$entry_info_text_027 = "podkategoria";
	$entry_info_text_028 = "podkategorie";
	$entry_info_text_029 = "entry for the following";
	$entry_info_text_030 = "entries for for the following";
	$entry_info_text_031 = "Po założeniu konta i zgłoszeniu swoich piw do konkursu opłać wpisowe za każde zgłoszenie. Opłaty należy dokonać na konto nr: 82 1540 1287 2001 6200 5272 0002 Bank Ochrony Środowiska S.A. O/Rzeszów podając w tytule przelewu: <strong>VII WKPD + imię i nazwisko piwowara + liczba zgłoszeń do konkursu + informacje o byciu członkiem PSPD (przykładowo: VII WKPD Michał Jaskólski 4 nr leg.). </strong>(w przypadku browaru domowego i kilku piwowarów należy wskazać nazwisko jednego piwowara na którego zostało założone konto, a jeśli korzysta się ze zniżki dla członków PSPD należy podać nazwisko członka Stowarzyszenia).";
	$entry_info_text_032 = $label_cash;
	$entry_info_text_033 = $label_check.", made out to";
	$entry_info_text_034 = "Karty płatnicze/kredytowe poprzez PayPal";
	$entry_info_text_035 = "Data oceny konkursowej nie została jeszcze ustalona. Spróbuj ponownie później.";
	$entry_info_text_036 = "Recepcja piwa na konkurs możliwa od ";
	$entry_info_text_037 = "Wyślij swoje piwa do:";
	$entry_info_text_038 = "Starannie zapakuj swoje piwa. Zabezpiecz butelki przed przypadkowym stłuczeniem podczas przesyłki. Najlepiej zawiń każdą butelkę osobno w folię ochronną. Nie upychaj na siłę butelek do kartonu! Wolne miejsce wypełnij materiałami zapewniającymi amortyzację.";
	$entry_info_text_039 = "Oznacz paczkę napisem: <em>Ostrożnie. Nie rzucać - szkło.</em>";
	$entry_info_text_040 = "Wydrukuj etykietę nadawczą ze swojego konta i umieść ją na paczce lub zaadresuj paczkę ręcznie.";
	$entry_info_text_041 = "W przypadku gdyby piwa uległy uszkodzeniu podczas przesyłki postaramy się skontaktować z Tobą jak najszybciej i ustalić możliwość dosłania dodatkowych butelek.";
	$entry_info_text_042 = "Podczas wysyłki skorzystaj najlepiej z usług kurierskich.";
	$entry_info_text_043 = "Butelki z piwem konkursowym będą przyjmowane w terminie od ";
	$entry_info_text_044 = "Mapka do";
	$entry_info_text_045 = "Kliknij aby uzyskać szczegółowe informacje";
	$entry_info_text_046 = "Kliknij na nazwę kategorii, aby zapoznać się z opisem stylu.";
	
	// v2.1.10
	$entry_info_text_047 = "Jeśli nazwa stylu jest podświetlnona jako hiperłącze, posiada określon opis stylu. Kliknij lub stuknij w nazwę, aby uzyskać dostęp do opisów stylów PSPD.";
}

// -------------------- Footer --------------------

// -------------------- Judge Info --------------------

// -------------------- List (User Entry List) --------------------

if (($section == "list") || ($section == "account")) {
	
	$brewer_entries_text_000 = "There is a known issue with printing from the Firefox browser.";
	$brewer_entries_text_001 = "Masz niepotwierdzone zgłoszenia.";
	$brewer_entries_text_002 = "Dla każdego zgłoszenia z ikoną <span class=\"fa fa-lg fa-exclamation-circle text-danger\"></span>, kliknij w ikonę <span class=\"fa fa-lg fa-pencil text-primary\"></span> aby przejrzeć i potwierdzić wszystkie dane zgłoszenia. Niepotwierdzone zgłoszenia mogą zostać usunięte z sytemu bez ostrzeżenia.";
	$brewer_entries_text_003 = "You CANNOT pay for your entries until all entries are confirmed.";
	$brewer_entries_text_004 = "Masz zgłoszenia, które wymagają podania konkretnego typu, składnika specjalnego, stylu klasycznego, mocy i/lub koloru.";
	$brewer_entries_text_005 = "Dla każdego zgłoszenia z ikoną <span class=\"fa fa-lg fa-exclamation-circle text-danger\"></span>, kliknij w ikonę <span class=\"fa fa-lg fa-pencil text-primary\"></span> aby wprowadzić wymagane informacje. Zgłoszenia bez wprowadzonych wymaganych informacji mogą zostać usunięte z systemu bez ostrzeżenia.";
	$brewer_entries_text_006 = "Download judges&rsquo; scoresheets for";
	$brewer_entries_text_007 = "Style NOT Entered";
	$brewer_entries_text_008 = "Entry Form and";
	$brewer_entries_text_009 = "Bottle Labels";
	$brewer_entries_text_010 = "Print Recipe Form for";
	$brewer_entries_text_011 = "Also, you will not be able to add another entry since the entry limit for the competition has been reached. Click Cancel in this box and then edit the entry instead if you wish to keep it.";
	$brewer_entries_text_012 = "Are you sure you want to delete the entry called";
	$brewer_entries_text_013 = "You will be able to add entries on or after";
	$brewer_entries_text_014 = "Nie posiadasz żadnych zgłoszeń w konkursie.";
	$brewer_entries_text_015 = "You cannot delete your entry at this time.";
	
	// v2.1.10
	$brewer_entries_text_016 = "Zgłoszony styl nie jest akceptowany";
	$brewer_entries_text_017 = "Wpisy nie będą wyświetlane w formie jako \"otrzymane\" do czasu, aż personel konkursu zaznaczy je jako \"otrzymane\" w systemie. Zazwyczaj dzieje się to po wszystkich otrzymanych zgłoszeniach.";
	
	//v2.1.10
	$brewer_entries_text_018 = "Nie będziesz mógł wydrukować dokumentów tego(etykiet na butelkę itp.), Dopóki płatność nie zostanie oznaczona jako zapłacona.";
	
	if (SINGLE) $brewer_info_000 = "Hello";
	else $brewer_info_000 = "Dziękujemy za dołączenie do ";
	$brewer_info_001 = "Szczegóły Twojego konta zostały zaktualizowane w ";
	$brewer_info_002 = "Poświęć chwilę i <a href=\"#entries\">zweryfikuj swoje zgłoszenia</a>";
	$brewer_info_003 = "nie zapomnij ich opłacić</a>";
	$brewer_info_004 = "za zgłoszenie";
	$brewer_info_005 = "An American Homebrewers Association (AHA) membership is required if one of your entries is selected for a Great American Beer Festival Pro-Am.";
	$brewer_info_006 = "Wydrukuj etykietę nadawczą i umieść na paczce z piwami.";
	$brewer_info_007 = "Wydrukuj etykietę nadwaczą";
	$brewer_info_008 = "You have already been assigned to a table as a";
	$brewer_info_009 = "If you wish to change your availabilty and/or withdraw your role, contact the competition organizer or judge coordinator.";
	$brewer_info_010 = "You have already been assigned as a";
	$brewer_info_011 = "i";
}

// -------------------- Login --------------------

// -------------------- Past Winners --------------------
if ($section == "past_winners") {
	$past_winners_text_000 = "View past winners:";
}

// -------------------- Pay for Entries --------------------

if ($section == "pay") {
	
	$pay_text_000 = "możliwość opłaty wpisowego minęła.";
	$pay_text_001 = "Skontaktuj się z organizatorami jeżeli masz jakieś pytania.";
	$pay_text_002 = "poniżej znajdziesz podsumowanie Twoich płatności za zgłoszone piwa.";
	$pay_text_003 = "Opłata wynosi ";
	$pay_text_004 = "za zgłoszenie";
	$pay_text_005 = "per entry after the";
	$pay_text_006 = "for unlimited entries";
	$pay_text_007 = "Twoje opłaty zostały zrabatowane do ";
	$pay_text_008 = "Łączna opłata za wszystkie zgłoszenia wynosi ";
	$pay_text_009 = "Musisz jeszcze opłacić ";
	$pay_text_010 = "Całe wpisowe zostało opłacone. Dziękujemy!";
	$pay_text_011 = "Masz jeszcze ";
	$pay_text_012 = "nieopłaconych, potwierdzonych zgłoszeń.";
	$pay_text_013 = "Attach a check for the entire entry amount to one of your bottles. Checks should be made out to";
	$pay_text_014 = "Your check carbon or cashed check is your entry receipt.";
	$pay_text_015 = "Attach cash payment for the entire entry amount in a <em>sealed envelope</em> to one of  your bottles.";
	$pay_text_016 = "Your returned score sheets will serve as your entry receipt.";
	$pay_text_017 = "Your payment confirmation email is your entry receipt. Include a copy with your entries as proof of payment.";
	$pay_text_018 = "Click the <em>Pay with PayPal</em> button below to pay online.";
	$pay_text_019 = "Please note that a transaction fee of";
	$pay_text_020 = "will be added into your total.";
	$pay_text_021 = "To make sure your PayPal payment is marked <strong>paid</strong> on <strong>this site</strong>, make sure to click the <em>Return to...</em> link on PayPal&rsquo;s confirmation screen <strong>after</strong> you have sent your payment. Also, make sure to print your payment receipt and attach it to one of your entry bottles.";
	$pay_text_022 = "Make Sure to Click <em>Return To...</em> After Paying Your Fees";
	$pay_text_023 = "Jeżeli jesteś członkiem PSPD, to użyj kodu rabatowego <strong>PSPD</strong>, aby otrzymać zniżkę do wpisowego (wpisz słowo 'PSPD' poniżej i kliknij 'Zweryfikuj'). </br></br>Opłaty należy dokonać na konto nr: 82 1540 1287 2001 6200 5272 0002 Bank Ochrony Środowiska S.A. O/Rzeszów podając w tytule przelewu: VII WKPD + imię i nazwisko piwowara (w przypadku browaru domowego należy wskazać nazwisko jednego piwowara, a jeśli korzysta się ze zniżki dla członków PSPD należy podać nazwisko członka Stowarzyszenia) + liczba zgłoszeń do konkursu + informacje o byciu członkiem PSPD (przykładowo: VII WKPD Michał Jaskólski 4 nr leg.). ";
	$pay_text_024 = "Całe wpisowe zostało opłacone. Dziękujemy!";
	$pay_text_025 = "Nie posiadasz jeszcze żadnych zgłoszeń.";
	$pay_text_026 = "You cannot pay for your entries because one or more of your entries is unconfirmed.";
	$pay_text_027 = "Click <em>My Account</em> above to review your unconfirmed entries.";
	$pay_text_028 = "You have unconfirmed entries that are <em>not</em> reflected in your fee totals below.";
	$pay_text_029 = "Please go to your entry list to confirm all your entry data. Unconfirmed entries may be deleted from the system without warning.";

	// v2.1.10
	$pay_text_030 = "By clicking the &quot;I Understand&quot; button below, you will be directed to PayPal to make your payment. Once you have <strong>completed</strong> your payment, PayPal will redirect you back to this site and will email you a receipt for the transaction. <strong>If your payment was successful, your paid status will be updated automatically. Please note that you may need wait a few minutes for the payment status to be updated.</strong> Be sure to refresh the pay page or access your entries list.";
	$pay_text_031 = "About to Leave this Site";
	
}

// -------------------- QR --------------------

if ($section == "qr") {
	
	$qr_text_017 = sprintf("%04d",$view[0]);
	$qr_text_018 = $view[1];
	$qr_text_019 = sprintf("%06d",$view[1]);
	$qr_text_020 = sprintf("%04d",$view[0]);
	
	$qr_text_000 = $alert_text_080;
	$qr_text_001 = $alert_text_081;
	$qr_text_002 = sprintf("Entry number %s is checked in with <span class=\"text-danger\">%s</span> as its judging number.",$qr_text_017,$qr_text_018);
	$qr_text_003 = "If this judging number is <em>not</em> correct, <strong>re-scan the code and re-enter the correct judging number.";
	$qr_text_004 = sprintf("Entry number %s is checked in.",$qr_text_018);
	$qr_text_005 = sprintf("Entry number %s was not found in the database. Set the bottle(s) aside and alert the competition organizer.",$qr_text_018);
	$qr_text_006 = sprintf("The judging number you entered - %s - is already assigned to entry number %s.",$qr_text_019,$qr_text_020);
	$qr_text_007 = "QR Code Entry Check-In";
	$qr_text_008 = "To check in entries via QR code, please provide the correct password. You will only need to provide the password once per session - be sure to keep the QR Code scanning app open.";
	$qr_text_009 = "Assign a judging number and/or box number to entry";
	$qr_text_010 = "ONLY inupt a judging number if your competition is using judging number labels at sorting.";
	$qr_text_011 = "Six numbers with leading zeros - e.g., 000021.";
	$qr_text_012 = "Be sure to double-check your input and affix the appropriate judging number labels to each bottle and bottle label (if applicable).";
	$qr_text_013 = "Judging number must be six digits.";
	$qr_text_014 = "Waiting for scanned QR code input.";
	$qr_text_015 = "Launch or go back to your mobile device's scanning app to scan a QR code.";
	$qr_text_016 = "Need a QR Code scanning app? Search <a href=\"https://play.google.com/store/search?q=qr%20code%20scanner&c=apps&hl=en\" target=\"_blank\">Google Play</a> (Android) or <a href=\"https://itunes.apple.com/store/\" target=\"_blank\">iTunes</a> (iOS).";
	$qr_text_017 = "A QR Code scanning app is required to utilize this feature.";
	$qr_text_018 = "Launch the app on your mobile device, scan a QR Code located on a bottle label, enter the required password, and check in the entry.";
	
}


// -------------------- Registration Open --------------------

// -------------------- Registration Closed --------------------

// -------------------- Register --------------------

if (($section == "register") || ($action == "register")) {
	
	$register_text_000 = "Is the volunteer ";
	$register_text_001 = "Are you ";
	$register_text_002 = "Rejestracja została zamknięta.";
	$register_text_003 = "Dziękujemy za zainteresowanie.";
	$register_text_004 = "Dane podawane w formularzu są potrzebne tylko do obsługi konkursu i nie będą przekazywane nikomu innemu.";
	$register_text_005 = "Twoje nazwisko i nazwa browaru domowego mogą zostać podane do publicznej wiadomości w przypadku wygranej.Żadne inne dane nie będą upubliczniane.";
	$register_text_006 = "Reminder: You are only allowed to enter one region and once you have registered at a location, you will NOT be able to change it.";
	$register_text_007 = "Quick";
	$register_text_008 = "Zarejestruj";
	$register_text_009 = "a Judge/Steward";
	$register_text_010 = "a Participant";
	$register_text_011 = "Aby zarejestrować się do konkursu stwórz najpierw swoje konto wypełniając poniższy formularz.";
	$register_text_012 = "Quickly add a participant to the competition&rsquo;s judge/steward pool. A dummy address and phone number will be used and a default password of <em>bcoem</em> will be given to each participant added via this screen.";
	$register_text_013 = "Entry into this competition is conducted completely online.";
	$register_text_014 = "To add your entries and/or indicate that you are willing to judge or steward (judges and stewards can also add entries), you will need to create an account on our system.";
	$register_text_015 = "Your email address will be your user name and will be used as a means of information dissemination by the competition staff. Please make sure it is correct.";
	$register_text_016 = "Once you have registered, you can proceed through the entry process.";
	$register_text_017 = "Each entry you add will automatically be assigned a number by the system.";
	$register_text_018 = "Wybierz jedno. Pytanie będzie wykorzystane do zweryfikowania Twojej osoby w przypadku odzyskiwania hasła.";
	$register_text_019 = "Podaj adres email.";
	$register_text_020 = "Adres email się nie zgadza.";
	$register_text_021 = "Adres email służy jako login.";
	$register_text_022 = "Podaj hasło.";
	$register_text_023 = "Podaj odpowiedź do swojego pytania bezpieczeństwa.";
	$register_text_024 = "Twoja odpowiedź powinna by znana tylko Tobie! Nie przekazuj jej nikomu";
	$register_text_025 = "Podaj imię.";
	$register_text_026 = "Podaj nazwisko.";
	$register_text_027 = "";
	$register_text_028 = "Podaj ulicę.";
	$register_text_029 = "Podaj miasto.";
	$register_text_030 = "Podaj województwo.";
	$register_text_031 = "Podaj kod pocztowy.";
	$register_text_032 = "Podaj numer telefonu głównego.";
	$register_text_033 = "Tylko członkowie PSPD są uprawnieni do uzyskania zniżki na wpisowe do konkursu (pole nieobowiązkowe).";
	$register_text_034 = "To register, you must check the box, indicating that you agree to the waiver statement.";

	// v2.1.10
	$register_text_035 = "Informacje przekazane poza nazwą organizacji są ściśle związane z zapisami i kontaktami.";
	$register_text_036 = "Warunkiem przystąpienia do konkursu jest dostarczenie wskazanych informacji, w tym adres e-mail i numer telefonu osoby kontaktowej. Nazwa organizacji może zostać wyświetlona, jeśli jeden z Twoich wpisów zostanie umieszczony. Żadne inne informacje nie zostaną podane do publicznej wiadomości.";
	$register_text_037 = "Potwierdzenie rejestracji";
	$register_text_038 = "Administrator zarejestrował Twoje konto. Poniżej znajduje się potwierdzenie wprowadzenia informacji:";
	$register_text_039 = "Dziękujemy za zarejestrowanie konta. Poniżej przedstawiono potwierdzenie podanych przez Ciebie informacji:";
	$register_text_040 = "Jeśli którakolwiek z powyższych informacji jest nieprawidłowa,";
	$register_text_041 = "zaloguj się do swojego konta";
	$register_text_042 = "i dokonaj niezbędnych zmian. Życzymy powodzenia w konkursie!";
	$register_text_043 = "Nie odpowiadaj na ten e-mail, ponieważ jest generowany automatycznie. Konto źródłowe nie jest aktywne lub monitorowane.";
	$register_text_044 = "Proszę podać nazwę organizacji.";
	$register_text_045 = "Podaj nazwę browaru, itp. Sprawdź informacje o konkursie, czy akceptuje style piwa przez Ciebie zgłoszone.";
	$register_text_046 = "Tylko dla organizacji amerykańskich.";
	$register_text_047 = "";
	$register_text_048 = "";
	$register_text_049 = "";
	
}

// -------------------- Sidebar --------------------

$sidebar_text_000 = "Rejestracja sędziów i stewardów";
$sidebar_text_001 = "Rejestracja stewardów";
$sidebar_text_002 = "Rejestracja sędziów";
$sidebar_text_003 = "Rejestracja zamknięta. Limit sędziów i stewardów został osiągnięty.";
$sidebar_text_004 = "do";
$sidebar_text_005 = "Rejestracja kont możliwa pomiędzy ";
$sidebar_text_006 = "is Open for Judges or Stewards Only";
$sidebar_text_007 = "is Open for Stewards Only";
$sidebar_text_008 = "is Open for Judges Only";
$sidebar_text_009 = "Zgłoszenia piw są akceptowane";
$sidebar_text_010 = "The competition paid entry limit has been reached.";
$sidebar_text_011 = "The competition entry limit has been reached.";
$sidebar_text_012 = "Zobacz swoją listę zgłoszeń.";
$sidebar_text_013 = "Kliknij tu i opłać swoje zgłoszenia.";
$sidebar_text_014 = "Entry fees do not include unconfirmed entries.";
$sidebar_text_015 = "You have unconfirmed entries - action is needed to confirm.";
$sidebar_text_016 = "Zobacz swoją listę zgłoszeń.";
$sidebar_text_017 = "Pozostało";
$sidebar_text_018 = "do osiągnięcia limitu";
$sidebar_text_019 = "na uczestnika";
$sidebar_text_020 = "Osiągnąłeś limit zgłoszeń";
$sidebar_text_021 = "w tym konkursie";
$sidebar_text_022 = "Butelki z piwami konkursowymi będą przyjmowane w ";
$sidebar_text_023 = "miejscu konkursu od";
$sidebar_text_024 = "Data konkursu nie została ustalona. Sprawdź później.";
$sidebar_text_025 = "zostało zarejestrowanych od dnia ";
	

// -------------------- Sponsors --------------------
// NONE


// -------------------- Styles ---------------------

$styles_entry_text_07C = "The entrant must specify whether the entry is a Munich Kellerbier (pale, based on Helles) or a Franconian Kellerbier (amber, based on Marzen). The entrant may specify another type of Kellerbier based on other base styles such as Pils, Bock, Schwarzbier, but should supply a style description for judges.";
$styles_entry_text_09A = "The entrant must specify whether the entry is a pale or a dark variant.";
$styles_entry_text_10C = "The entrant must specify whether the entry is a pale or a dark variant.";
$styles_entry_text_21B = "Entrant must specify a strength (session: 3.0-5.0%, standard: 5.0-7.5%, double: 7.5-9.5%); if no strength is specified, standard will be assumed. Entrant must specify specific type of Specialty IPA from the library of known types listed in the Style Guidelines, or as amended by the BJCP web site; or the entrant must describe the type of Specialty IPA and its key characteristics in comment form so judges will know what to expect. Entrants may specify specific hop varieties used, if entrants feel that judges may not recognize the varietal characteristics of newer hops. Entrants may specify a combination of defined IPA types (e.g., Black Rye IPA) without providing additional descriptions. Entrants may use this category for a different strength version of an IPA defined by its own BJCP subcategory (e.g., session-strength American or English IPA) - except where an existing BJCP subcategory already exists for that style (e.g., double [American] IPA). Currently Defined Types: Black IPA, Brown IPA, White IPA, Rye IPA, Belgian IPA, Red IPA.";
$styles_entry_text_23F = "The type of fruit used must be specified. The brewer must declare a carbonation level (low, medium, high) and a sweetness level (low/none, medium, high).";
$styles_entry_text_24C = "Entrant must specify blond, amber, or brown biere de garde. If no color is specified, the judge should attempt to judge based on initial observation, expecting a malt flavor and balance that matches the color.";
$styles_entry_text_25B = "The entrant must specify the strength (table, standard, super) and the color (pale, dark).";
$styles_entry_text_27A = "The entrant must either specify a style with a BJCP-supplied description, or provide a similar description for the judges of a different style. If a beer is entered with just a style name and no description, it is very unlikely that judges will understand how to judge it. Currently defined examples: Gose, Piwo Grodziskie, Lichtenhainer, Roggenbier, Sahti, Kentucky Common, Pre-Prohibition Lager, Pre-Prohibition Porter, London Brown Ale.";
$styles_entry_text_28A = "The entrant must specify either a base beer style (classic BJCP style, or a generic style family) or provide a description of the ingredients/specs/desired character. The entrant must specify if a 100% Brett fermentation was conducted. The entrant may specify the strain(s) of Brettanomyces used, along with a brief description of its character.";
$styles_entry_text_28B = "The entrant must specify a description of the beer, identifying the yeast/bacteria used and either a base style or the ingredients/specs/target character of the beer.";
$styles_entry_text_28C = "Entrant must specify the type of fruit, spice, herb, or wood used. Entrant must specify a description of the beer, identifying the yeast/bacteria used and either a base style or the ingredients/specs/target character of the beer. A general description of the special nature of the beer can cover all the required items.";
$styles_entry_text_29A = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of fruit used. Soured fruit beers that aren't lambics should be entered in the American Wild Ale category.";
$styles_entry_text_29B = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of fruit and spices, herbs, or vegetables (SHV) used; individual SHV ingredients do not need to be specified if a well-known blend of spices is used (e.g., apple pie spice).";
$styles_entry_text_29C = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of fruit used. The entrant must specify the type of additional fermentable sugar or special process employed.";
$styles_entry_text_30A = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of spices, herbs, or vegetables used; individual ingredients do not need to be specified if a well-known blend of spices is used (e.g., apple pie spice).";
$styles_entry_text_30B = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of spices, herbs, or vegetables used; individual ingredients do not need to be specified if a well-known blend of spices is used (e.g., pumpkin pie spice). The beer must contain spices, and may contain vegetables and/or sugars.";
$styles_entry_text_30C = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of spices, sugars, fruits, or additional fermentables used; individual ingredients do not need to be specified if a well-known blend of spices is used (e.g., mulling spice).";
$styles_entry_text_31A = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of alternative grain used.";
$styles_entry_text_31B = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of sugar used.";
$styles_entry_text_32A = "The entrant must specify a Classic Style base beer. The entrant must specify the type of wood or smoke if a varietal smoke character is noticeable.";
$styles_entry_text_32B = "The entrant must specify a base beer style; the base beer does not have to be a Classic Style. The entrant must specify the type of wood or smoke if a varietal smoke character is noticeable. The entrant must specify the additional ingredients or processes that make this a specialty smoked beer.";
$styles_entry_text_33A = "The entrant must specify the type of wood used and the char level (if charred). The entrant must specify the base style; the base style can be either a classic BJCP style (i.e., a named subcategory) or may be a generic type of beer (e.g., porter, brown ale). If an unusual wood has been used, the entrant must supply a brief description of the sensory aspects the wood adds to beer.";
$styles_entry_text_33B = "The entrant must specify the additional alcohol character, with information about the barrel if relevant to the finished flavor profile. The entrant must specify the base style; the base style can be either a classic BJCP style (i.e., a named subcategory) or may be a generic type of beer (e.g., porter, brown ale). If an unusual wood or ingredient has been used, the entrant must supply a brief description of the sensory aspects the ingredients adds to the beer.";
$styles_entry_text_34A = "The entrant must specify the name of the commercial beer being cloned, specifications (vital statistics) for the beer, and either a brief sensory description or a list of ingredients used in making the beer. Without this information, judges who are unfamiliar with the beer will have no basis for comparison.";
$styles_entry_text_34B = "The entrant must specify the styles being mixed. The entrant may provide an additional description of the sensory profile of the beer or the vital statistics of the resulting beer.";
$styles_entry_text_34C = " The entrant must specify the special nature of the experimental beer, including the special ingredients or processes that make it not fit elsewhere in the guidelines. The entrant must provide vital statistics for the beer, and either a brief sensory description or a list of ingredients used in making the beer. Without this information, judges will have no basis for comparison.";
$styles_entry_text_M1A = "Entry Instructions: Entrants must specify carbonation level and strength. Sweetness is assumed to be DRY in this category. Entrants may specify honey varieties.";
$styles_entry_text_M1B = "Entrants must specify carbonation level and strength. Sweetness is assumed to be SEMI-SWEET in this category. Entrants MAY specify honey varieties.";
$styles_entry_text_M1C = "Entrants MUST specify carbonation level and strength. Sweetness is assumed to be SWEET in this category. Entrants MAY specify honey varieties.";
$styles_entry_text_M2A = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants may specify the varieties of apple used; if specified, a varietal character will be expected. Products with a relatively low proportion of honey are better entered as a Specialty Cider. A spiced cyser should be entered as a Fruit and Spice Mead. A cyser with other fruit should be entered as a Melomel. A cyser with additional ingredients should be entered as an Experimental mead.";
$styles_entry_text_M2B = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants may specify the varieties of grape used; if specified, a varietal character will be expected. A spiced pyment (hippocras) should be entered as a Fruit and Spice Mead. A pyment made with other fruit should be entered as a Melomel. A pyment with other ingredients should be entered as an Experimental Mead.";
$styles_entry_text_M2C = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants must specify the varieties of fruit used. A mead made with both berries and non-berry fruit (including apples and grapes) should be entered as a Melomel. A berry mead that is spiced should be entered as a Fruit and Spice Mead. A berry mead containing other ingredients should be entered as an Experimental Mead.";
$styles_entry_text_M2D = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants must specify the varieties of fruit used. A stone fruit mead that is spiced should be entered as a Fruit and Spice Mead. A stone fruit mead that contains non-stone fruit should be entered as a Melomel. A stone fruit mead that contains other ingredients should be entered as an Experimental Mead.";
$styles_entry_text_M2E = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants must specify the varieties of fruit used. A melomel that is spiced should be entered as a Fruit and Spice Mead. A melomel containing other ingredients should be entered as an Experimental Mead. Melomels made with either apples or grapes as the only fruit source should be entered as Cysers and Pyments, respectively. Melomels with apples or grapes, plus other fruit should be entered in this category, not Experimental.";
$styles_entry_text_M3A = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants must specify the types of spices used, (although well-known spice blends may be referred to by common name, such as apple pie spices). Entrants must specify the types of fruits used. If only combinations of spices are used, enter as a Spice, Herb, or Vegetable Mead. If only combinations of fruits are used, enter as a Melomel. If other types of ingredients are used, enter as an Experimental Mead.";
$styles_entry_text_M3B = "Entrants MUST specify carbonation level, strength, and sweetness. Entrants MAY specify honey varieties. Entrants MUST specify the types of spices used (although well-known spice blends may be referred to by common name, such as apple pie spices).";
$styles_entry_text_M4A = "Entrants MUST specify carbonation level, strength, and sweetness. Entrants MAY specify honey varieties. Entrants MAY specify the base style or beer or types of malt used. Products with a relatively low proportion of honey should be entered in the Spiced Beer category as a Honey Beer.";
$styles_entry_text_M4B = "Entrants MUST specify carbonation level, strength, and sweetness. Entrants MAY specify honey varieties. Entrants MUST specify the special nature of the mead, providing a description of the mead for judges if no such description is available from the BJCP.";
$styles_entry_text_M4C = "Entrants MUST specify carbonation level, strength, and sweetness. Entrants MAY specify honey varieties. Entrants MUST specify the special nature of the mead, whether it is a combination of existing styles, an experimental mead, or some other creation. Any special ingredients that impart an identifiable character MAY be declared.";
$styles_entry_text_C1E = "Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 categories). Entrants MUST state variety of pear(s) used.";
$styles_entry_text_C2A = "Entrants MUST specify if the cider was barrel-fermented or aged. Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 levels).";
$styles_entry_text_C2B = "Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 categories). Entrants MUST specify all fruit(s) and/or fruit juice(s) added.";
$styles_entry_text_C2C = "Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 levels).";
$styles_entry_text_C2D = "Entrants MUST specify starting gravity, final gravity or residual sugar, and alcohol level. Entrants MUST specify carbonation level (3 levels).";
$styles_entry_text_C2E = "Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 categories). Entrants MUST specify all botanicals added. If hops are used, entrant must specify variety/varieties used.";
$styles_entry_text_C2F = "Entrants MUST specify all ingredients. Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 categories).";


// -------------------- User (Edit Email) --------------------

$user_text_000 = "Wymagany jest nowy adres email.";
$user_text_001 = "Podaj stare hasło.";
$user_text_002 = "Podaj nowe hasło.";
$user_text_003 = "Zaznacz to pole, aby kontynuować zmianę adresu email.";
$user_text_004 = "";

// -------------------- Volunteers --------------------

if ($section == "volunteers") {
	
	$volunteers_text_000 = "Jeśli posiadasz już konto i chcesz zgłosić swój udział jako sędzia lub steward,";
	$volunteers_text_001 = "i wybierz <em>Edytuj konto</em> z menu Moje Konto oznaczonego";
	$volunteers_text_002 = "ikoną w górnym prawym rogu";
	$volunteers_text_003 = "i";
	$volunteers_text_004 = "Jesli jeszcze nie posiadasz swojego konta zarejestruj się i zgłoś do konkursu jako sędzia lub steward";
	$volunteers_text_005 = "W związku z tym, że już się zarejestrowałeś,";
	$volunteers_text_006 = "zweryfikuj swoje konto";
	$volunteers_text_007 = "czy zgłosiłeś się już do konkursu jako sędzia lub steward";
	$volunteers_text_008 = "If you are willing to judge or steward, please return to register on or after";
	
	// v2.1.9
	$volunteers_text_009 = "Dostaniesz informację o przyjęciu Twojego zgłoszenia do konkursu jak tylko zostanie ono rozpatrzone przez szefa jury.";
	$volunteers_text_010 = "";
	
}


$login_text_000 = "Jesteś już zalogowany.";
$login_text_001 = "Podany e-mail nie został zarejestrowany w systemie.";
$login_text_002 = "Chcesz spróbować jeszcze raz?";
$login_text_003 = "Czy już zarejestrowałeś konto?";
$login_text_004 = "Zapomniałeś hasła?";
$login_text_005 = "Zresetuj je";
$login_text_006 = "Aby zresetować hasło, wprowadź adres e-mail podany podczas rejestracji.";
$login_text_007 = "Zweryfikuj";
$login_text_008 = "Losowo wygenerowane.";
$login_text_009 = "<strong>Niedostępne.</strong> Twoje konto zostało utworzone przez administratora a Twoja &quot;sekretna odpowiedź&quot; została wygenerowana losowo. Skontaktuj się z administratorem strony aby odzyskać swoje hasło.";
$login_text_010 = "Lub skorzystaj z opcji e-mail poniżej.";
$login_text_011 = "Twoje pytanie bezpieczeństwa to...";
$login_text_012 = "Jeśli nie otrzymałeś wiadomości e-mail,";
$login_text_013 = "Na Twój adres e-mail zostanie wysłana wiadomość z pytaniem kontrolnym i odpowiedzią. Pamiętaj aby sprawdzić folder SPAM.";
$login_text_014 = "kliknij tu aby ponownie wysłać";
$login_text_015 = "Jeśli nie pamiętasz odpowiedzi na pytanie bezpieczeństwa, skontaktuj się z administratorem strony.";
$login_text_016 = "Wyślij przez wiadomość e-mail";

//v2.1.10
$login_text_017 = "Wyślij mi na adres email moją odpowiedź na pytanie bezpieczeństwa";
$login_text_018 = "Wymagana jest nazwa użytkownika (adres e-mail).";
$login_text_019 = "Wymagane jest Twoje hasło";
$login_text_020 = "Podany token jest nieprawidłowy lub został już użyty. Aby wygenerować nowy token resetowania hasła, skorzystaj z funkcji Nie pamiętam hasła.";
$login_text_021 = "Żądany token wygasł. Aby wygenerować nowy token resetowania hasła, skorzystaj z funkcji Nie pamiętam hasła.";
$login_text_022 = "Wprowadzony e-mail nie jest powiązany z dostarczonym tokenem. Proszę spróbuj ponownie.";
$login_text_023 = "Hasła nie są poprawne. Proszę spróbuj ponownie.";
$login_text_024 = "Wymagane jest hasło potwierdzające.";
$login_text_025 = "Zapomniałeś hasła?";
$login_text_026 = "Wpisz poniżej swój adres e-mail i nowe hasło.";
$login_text_027 = "Twoje hasło zostało zresetowane. Możesz teraz logować się przy użyciu nowego hasła.";


// -------------------- Winners --------------------

$winners_text_000 = "No winners have been entered for this table. Please check back later.";
$winners_text_001 = "Winning entries have not been posted yet. Please check back later.";
$winners_text_002 = "Your chosen award structure is to award places by table. Select the award places for the table as a whole below.";
$winners_text_003 = "Your chosen award structure is to award places by category. Select the award places for each overall category below (there may be more than one at this table).";
$winners_text_004 = "Your chosen award structure is to award places by sub-category. Select the award places for each sub-category below (there may be more than one at this table).";

//v 2.1.10
$winners_text_005 = "Zwycięzca konkursu nie został jeszcze ogłoszony. Prosimy sprawdzić stronę później.";


// ----------------------------------------------------------------------------------
// Output
// ----------------------------------------------------------------------------------

$output_text_000 = "Thank you for entering our competition";
$output_text_001 = "A summary of your entries, scores, and places is below.";
$output_text_002 = "Summary for";
$output_text_003 = "entries were judged";
$output_text_004 = "Your scoresheets could not be properly generated. Please contact the organizers of the competition.";
$output_text_005 = "No judge/steward assignments have been defined";
$output_text_006 = "for this location";
$output_text_007 = "If you would like to print blank table cards, close this window and choose <em>Print Table Cards: All Tables</em> from the <em>Reporting</em> menu.";
$output_text_008 = "Please be sure to check if your BJCP Judge ID is correct. If it is not, or if you have one and it is not listed, please enter it on the form.";
$output_text_009 = "If your name is not on the list below, sign in on the attached sheet(s).";
$output_text_010 = "To receive judging credit, please be sure to enter your BJCP Judge ID correctly and legibly.";
$output_text_011 = "No assignments have been made.";
$output_text_012 = "Total entries at this location";
$output_text_013 = "No participants provided notes to organizers.";
$output_text_014 = "The following are the notes to organizers entered by judges.";
$output_text_015 = "No participants provided notes to organizers.";
$output_text_016 = "Post-Judging Entry Inventory";
$output_text_017 = "If there are no entries showing below, flights at this table have not been assigned to rounds.";
$output_text_018 = "If entries are missing, all entries have not been assigned to a flight or round OR they have been assigned to a different round.";
$output_text_019 = "If there are no entries below, this table has not been assigned to a round.";
$output_text_020 = "No entries are eligible.";
$output_text_021 = "Entry Number / Judging Number Cheat Sheet";
$output_text_022 = "The points in this report are derived from the official BJCP Sanctioned Competition Requirements, available at";
$output_text_023 = "includes Best of Show";
$output_text_024 = "BJCP Points Report";
$output_text_025 = "Total Staff Points Available";
$output_text_026 = "Styles in this category are not accepted in this competition.";
$output_text_027 = "link to Beer Judge Certification Program Style Guidelines";
$output_text_028 = "";
$output_text_029 = "";
$output_text_030 = "";

// Maintenance

// v2.1.9
$maintenance_text_000 = "Strona w trakcie prac technicznych.";
$maintenance_text_001 = "Proszę spróbuj później.";

// v2.1.10
// PayPal Response
$paypal_response_text_000 = "Twoja płatność została dokonana. Szczegóły transakcji są tu podane dla Twojej wygody.";
$paypal_response_text_001 = "Otrzymasz oficjalne powiadomienie z systemu PayPal pod adresem podanym poniżej.";
$paypal_response_text_002 = "Życzymy powodzenia w konkursie!";
$paypal_response_text_003 = "Nie odpowiadaj na ten e-mail, ponieważ jest generowany automatycznie. Konto źródłowe nie jest aktywne lub monitorowane.";
$paypal_response_text_004 = "PayPal przetwarza Twoją transakcję.";
$paypal_response_text_005 = "Status płatności PayPal jest:";
$paypal_response_text_006 = "Odpowiedź z konta PayPal to \"nieprawidłowa\". Spróbuj ponownie dokonać płatności.";
$paypal_response_text_007 = "Skontaktuj się z organizatorem konkursu jeśli masz jakieś pytania.";
$paypal_response_text_008 = "Nieważna płatność PayPal";
$paypal_response_text_009 = "Szczegóły płatności PayPal";

// v2.1.10
// Password reset email text
$pwd_email_reset_text_000 = "Zażądano zweryfikowania konta w";
$pwd_email_reset_text_001 = "System używa funkcji weryfikacji email. Jeśli tego nie zainicjowałeś skontaktuj się z organizatorem konkursu.";
$pwd_email_reset_text_002 = "Odpowiedź na numer weryfikacji jest weryfikowane.";
$pwd_email_reset_text_003 = "Zażądano zmiany hasła w";
$pwd_email_reset_text_004 = "stronie internetowej. Jeśli nie zainicjowałeś tego, nie martw się. Twoje hasło nie może być zresetowane bez kliknięcia w poniższy link:";
$pwd_email_reset_text_005 = "Aby zresetować hasło kliknij w poniższy link lub kopiuj i wklej go do przeglądarki.";
$pwd_email_reset_text_006 = "";
$pwd_email_reset_text_007 = "";
$pwd_email_reset_text_008 = "";
$pwd_email_reset_text_009 = "";
$pwd_email_reset_text_010 = "";

// ----------------------------------------------------------------------------------
// Various conditionals
// ----------------------------------------------------------------------------------

if (strpos($section, "step") === FALSE) $alert_text_032 = $alert_text_032; else $alert_text_032 = "";
if (strpos($section, "step") === FALSE) $alert_text_033 = $alert_text_033; else $alert_text_033 = "";
if (strpos($section, "step") === FALSE) $alert_text_036 = $alert_text_036; else $alert_text_036 = "";
if (strpos($section, "step") === FALSE) $alert_text_039 = $alert_text_039; else $alert_text_039 = "";
if ((strpos($section, "step") === FALSE) && ($_SESSION['prefsProEdition'] == 0)) $alert_text_043 = $alert_text_043; else $alert_text_043 = "";
if ((strpos($section, "step") === FALSE) && ($_SESSION['prefsProEdition'] == 0)) $alert_text_047 = $alert_text_047; else $alert_text_047 = "";
if (strpos($section, "step") === FALSE) $alert_text_050 = $alert_text_050; else $alert_text_050 = "";
if (strpos($section, "step") === FALSE) $alert_text_053 = $alert_text_053; else $alert_text_053 = "";
if ((strpos($section, "step") === FALSE) && ($_SESSION['prefsProEdition'] == 0)) $alert_text_060 = $alert_text_060; else $alert_text_060 = "";
if (strpos($section, "step") === FALSE) $alert_text_068 = $alert_text_068; else $alert_text_068 = "";
if (strpos($section, "step") === FALSE) $alert_text_070 = $alert_text_070; else $alert_text_070 = "";
if (strpos($section, "step") === FALSE) $label_character_limit = $label_character_limit; else $label_character_limit = "";
if (strpos($section, "step") === FALSE) $header_text_031 = $header_text_031; else $header_text_031 = "";
if (strpos($section, "step") === FALSE) $beerxml_text_007 = $beerxml_text_007; else $beerxml_text_007 = "";

// ----------------------------------------------------------------------------------
// Admin Pages - Admin pages will be included in a future release
// ----------------------------------------------------------------------------------
// if ($section == "admin") include(LANG.'en_admin.lang.php');

?>
