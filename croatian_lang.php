<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Ime';
$lang['options']              = 'Postavke';
$lang['submit']               = 'Spremi';
$lang['added_successfully']    = '%s uspješno dodano.';
$lang['updated_successfully']  = '%s uspješno ažurirano.';
$lang['edit']                 = 'Uredi %s';
$lang['add_new']              = 'Dodaj nov/u/o/i %s';
$lang['deleted']              = '%s izbrisano';
$lang['problem_deleting']     = 'Problem kod brisanja %s';
$lang['is_referenced']        = 'ID %s se već koristi.';
$lang['close']                = 'Zatvori';
$lang['send']                 = 'Pošalji';
$lang['cancel']               = 'Odustani';
$lang['go_back']              = 'Idi nazad';
$lang['error_uploading_file'] = 'Pogreška kod slanja datoteke';
$lang['load_more']            = 'Učitaj više';
$lang['cant_delete_default']  = 'Nemoguće je obrisati zadanog %s';

# Invoice General
$lang['invoice_status_paid']                = 'Plaćeno';
$lang['invoice_status_unpaid']              = 'Neplaćeno';
$lang['invoice_status_overdue']             = 'U valuti';
$lang['invoice_status_not_paid_completely'] = 'Djelomično plaćeno';

$lang['invoice_pdf_heading'] = 'RAČUN';

$lang['invoice_table_item_heading']            = 'Artikal';
$lang['invoice_table_quantity_heading']        = 'Kol';
$lang['invoice_table_rate_heading']            = 'Stopa';
$lang['invoice_table_tax_heading']             = 'Porez';
$lang['invoice_table_amount_heading']          = 'Iznos';
$lang['invoice_subtotal']                      = 'Suma stavke';
$lang['invoice_adjustment']                    = 'Podešavanje';
$lang['invoice_total']                         = 'Ukupno';
$lang['invoice_vat']                           = 'OIB';
$lang['invoice_bill_to']                       = 'Naplatiti na';
$lang['invoice_data_date']                     = 'Datum računa:';
$lang['invoice_data_duedate']                  = 'Do datuma:';
$lang['invoice_received_payments']             = 'Transakcije';
$lang['invoice_no_payments_found']             = 'Nisu pronađene uplate za ovaj račun';
$lang['invoice_note']                          = 'Bilješka:';
$lang['invoice_payments_table_number_heading'] = 'Uplata #';
$lang['invoice_payments_table_mode_heading']   = 'Način plaćanja';
$lang['invoice_payments_table_date_heading']   = 'Datum';
$lang['invoice_payments_table_amount_heading'] = 'Iznos';


# Announcements
$lang['announcement']                 = 'Obavijest';
$lang['announcement_lowercase']       = 'obavijest';
$lang['announcements']                = 'Obavijesti';
$lang['announcements_lowercase']      = 'obavijesti';
$lang['new_announcement']             = 'Nova Obavijest';
$lang['announcement_name']            = 'Naslov';
$lang['announcement_message']         = 'Poruka';
$lang['announcement_show_to_staff']   = 'Pokaži djelatnicima';
$lang['announcement_show_to_clients'] = 'Pokaži klijentima';
$lang['announcement_show_my_name']    = 'Prikaži moje ime';

# Clients
$lang['clients']                               = 'Klijenti';
$lang['client']                                = 'Klijent';
$lang['new_client']                            = 'Novi klijent';
$lang['client_lowercase']                      = 'klijent';
$lang['client_delete_tooltip']                 = 'Svi podaci o klijentima biti će izbrisani. Ugovori, zahtjevi, bilješke. NAPOMENA: Ako se računi pronađu, klijent neće biti izbrisan. Te račune morate dodijeliti drugom klijentu kako biste zadržali broj računa';
$lang['customer_delete_invoices_warning']      = 'Ovaj kupac ima račune vezane za sebe. Ne možete izbrisati ovog kupca. Prebacite računa na drugog kupca, a zatim izbrišite postojećeg.';
$lang['client_firstname']                      = 'Ime';
$lang['client_lastname']                       = 'Prezime';
$lang['client_email']                          = 'E-pošta';
$lang['client_company']                        = 'Tvrtka';
$lang['client_vat_number']                     = 'OIB';
$lang['client_address']                        = 'Adresa';
$lang['client_city']                           = 'Grad';
$lang['client_postal_code']                    = 'Poštanski broj';
$lang['client_state']                          = 'Županija';
$lang['client_password']                       = 'Šifra';
$lang['client_password_change_populate_note']  = 'Bilješka: ako popunite ovo polje, šifra će se promijeniti na ovom kontaktu.';
$lang['client_password_last_changed']          = 'Šifra je zadnji puta promijenjena:';
$lang['login_as_client']                       = 'Prijavi se kao klijent';
$lang['client_invoices_tab']                   = 'Računi';
$lang['contracts_invoices_tab']                = 'Ugovori';
$lang['contracts_tickets_tab']                 = 'Zahtjevi';
$lang['contracts_notes_tab']                   = 'Bilješke';
$lang['client_invoice_number_table_heading']   = 'Račun #';
$lang['client_invoice_date_table_heading']     = 'Datum';
$lang['client_invoice_due_date_table_heading'] = 'Do Datuma';
$lang['client_string_table_heading']           = 'Klijent';
$lang['client_amount_table_heading']           = 'Iznos';
$lang['client_status_table_heading']           = 'Status';
$lang['note_description']                      = 'Tekst bilješke';

$lang['client_string_contracts_table_heading']      = 'Klijent';
$lang['client_start_date_contracts_table_heading']  = 'Datum početka';
$lang['client_end_date_contracts_table_heading']    = 'Datum završetka';
$lang['client_description_contracts_table_heading'] = 'Opis';
$lang['client_do_not_send_welcome_email']           = 'Ne šalji email dobrodošlice';

$lang['clients_notes_table_description_heading'] = 'Opis';
$lang['clients_notes_table_addedfrom_heading']   = 'Dodano iz';
$lang['clients_notes_table_dateadded_heading']   = 'Datum dodavanja';
$lang['clients_list_full_name']   = 'Puno ime';
$lang['clients_list_last_login']  = 'Zadnja prijava';

# Contracts
$lang['contracts']                = 'Ugovori';
$lang['contract']                 = 'Ugovor';
$lang['new_contract']             = 'Novi ugovor';
$lang['contract_lowercase']       = 'ugovor';
$lang['contract_start_date']      = 'Datum početka';
$lang['contract_end_date']        = 'Datum završetka';
$lang['contract_subject']         = 'Naslov';
$lang['contract_description']     = 'Opis';
$lang['contract_subject_tooltip'] = 'Naslov je vidljiv i klijentu';
$lang['contract_client_string']   = 'Klijent';
$lang['contract_attach']          = 'Prikvači dokument';

$lang['contract_list_client']     = 'Klijent';
$lang['contract_list_subject']    = 'Naslov';
$lang['contract_list_start_date'] = 'Datum početka';
$lang['contract_list_end_date']   = 'Datum završetka';

# Currencies
$lang['currencies']           = 'Valute';
$lang['currency']             = 'Valuta';
$lang['new_currency']         = 'Nova valuta';
$lang['currency_lowercase']   = 'valuta';
$lang['base_currency_set']    = 'Ovo je sada glavna valuta.';
$lang['make_base_currency']   = 'Postavi kao glavnu valutu';
$lang['base_currency_string'] = 'Glavna Valuta';

$lang['currency_list_name']   = 'Ime';
$lang['currency_list_symbol'] = 'Simbol';


$lang['currency_add_edit_description'] = 'Oznaka valute';
$lang['currency_add_edit_rate']        = 'Simbol';

$lang['currency_edit_heading'] = 'Uredi valutu';
$lang['currency_add_heading']  = 'Dodaj novu valutu';


# Department
$lang['departments']          = 'Odjeli';
$lang['department']           = 'Odjel';
$lang['new_department']       = 'Novi odjel';
$lang['department_lowercase'] = 'odjel';

$lang['department_name']             = 'Naziv odjela';
$lang['department_email']            = 'Email odjela';
$lang['department_hide_from_client'] = 'Sakri klijentu?';
$lang['department_list_name']        = 'Naziv';

# Email Templates
$lang['email_templates']                        = 'Email Predlošci';
$lang['email_template']                         = 'Email Predložak';
$lang['email_template_lowercase']               = 'email predložak';
$lang['email_templates_lowercase']              = 'email predlošci';
$lang['email_template_ticket_fields_heading']   = 'Zahtjevi';
$lang['email_template_invoices_fields_heading'] = 'Računi';
$lang['email_template_clients_fields_heading']  = 'Klijenti';

$lang['template_name']                                      = 'Naziv predloška';
$lang['template_subject']                                   = 'Naslov';
$lang['template_fromname']                                  = 'Od imena';
$lang['template_fromemail']                                 = 'Od Email-a';
$lang['send_as_plain_text']                                 = 'Pošalji kao običan tekst';
$lang['email_template_disabled']                             = 'Onemogućeno';
$lang['email_template_email_message']                       = 'Email poruka';
$lang['available_merge_fields']                             = 'Omogući spajanje polja';
# Home
$lang['dashboard_string']                                   = 'Kontrolna ploča';
$lang['home_latest_todos']                                  = 'Najnoviji';
$lang['home_no_latest_todos']                               = 'Nema novih';
$lang['home_latest_finished_todos']                         = 'Zadnji odrađeni';
$lang['home_no_finished_todos_found']                       = 'Nema odrađenih';
$lang['home_todo_heading']                                  = 'Osobni zadaci';
$lang['home_tickets_awaiting_reply_by_department']          = 'Zahtjevi koji čekaju odgovor prema odjelu';
$lang['home_tickets_awaiting_reply_by_status']              = 'Zahtjevi koji čekaju odgovor prema statusu';
$lang['home_this_week_events']                              = 'Događaji u ovom tjednu';
$lang['home_upcoming_events_next_week']                     = 'Nadolazeći događaji sljedeći tjedan';
$lang['home_event_added_by']                                = 'Događaj dodao';
$lang['home_public_event']                                  = 'Javni događaj';
$lang['home_weekly_payment_records']                        = 'Tjedni zapisi o plaćanjima';
$lang['home_weekend_ticket_opening_statistics']             = 'Statistika tjednog otvaranja zahtjeva';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Podjeli dokumente, ideje, prijedloge...';
$lang['new_post']                                           = 'Objava';
$lang['newsfeed_upload_tooltip']                            = 'Savjet: Povucite i ispustite datoteke za prijenos';
$lang['newsfeed_all_departments']                           = 'Svim odjelima';
$lang['newsfeed_pin_post']                                  = 'Prikvači objavu';
$lang['newsfeed_unpin_post']                                = 'Odkvači objavu';
$lang['newsfeed_delete_post']                               = 'Izbriši';
$lang['newsfeed_published_post']                            = 'Objavljeno';
$lang['newsfeed_you_like_this']                             = 'Sviđa ti se ovo';
$lang['newsfeed_like_this']                                 = 'sviđa mi se';
$lang['newsfeed_one_other']                                 = 'ostalo';
$lang['newsfeed_you']                                       = 'Ti';
$lang['newsfeed_and']                                       = 'i';
$lang['newsfeed_you_and']                                   = 'Ti i';
$lang['newsfeed_like_this_saying']                          = 'Kao ovo';
$lang['newsfeed_unlike_this_saying']                        = 'Za razliku od ovoga';
$lang['newsfeed_show_more_comments']                        = 'Prikaži više komentara';
$lang['comment_this_post_placeholder']                      = 'Komentiraj ovu objavu..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Kolege kojima se sviđa ova objava';
$lang['newsfeed_comment_likes_modal_heading']               = 'Kolege kojima se sviđa ovaj komentar';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Ova objava je vidljiva samo sljedećim odjelima: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Stavke računa';
$lang['invoice_item']                                       = 'Stavka računa';
$lang['new_invoice_item']                                   = 'Nova stavka';
$lang['invoice_item_lowercase']                             = 'Stavka računa';

$lang['invoice_items_list_description'] = 'Opis';
$lang['invoice_items_list_rate']        = 'Stopa';
$lang['invoice_items_list_tax']         = 'Porez';

$lang['invoice_item_add_edit_description'] = 'Opis';
$lang['invoice_item_add_edit_rate']        = 'Stopa';
$lang['invoice_item_add_edit_tax']         = 'Porez';
$lang['invoice_item_add_edit_tax_select']  = 'Odaberi porez';

$lang['invoice_item_edit_heading'] = 'Uredi stavku';
$lang['invoice_item_add_heading']  = 'Dodaj novu stavku';

# Invoices


$lang['invoices']                       = 'Računi';
$lang['invoice']                        = 'Račun';
$lang['invoice_lowercase']              = 'račun';
$lang['create_new_invoice']             = 'Izradi novi račun';
$lang['view_invoice']                   = 'Prikaži račun';

$lang['invoice_payment_recorded']       = 'Račun označen kao plaćen';
$lang['invoice_payment_record_failed']  = 'Neuspješno označavanje računa plaćenim';
$lang['invoice_sent_to_client_success'] = 'Račun je uspješno poslan klijentu';
$lang['invoice_sent_to_client_fail']    = 'Greška prilikom slanja računa';
$lang['invoice_reminder_send_problem']  = 'Greška slanja računa zbog isteka valute';
$lang['invoice_overdue_reminder_sent']  = 'Podsjetnik za račun izvan valute je uspješno poslan';

$lang['invoice_details']              = 'Pojedinosti računa';
$lang['invoice_view']                 = 'Prikaz računa';
$lang['invoice_select_customer']      = 'Kupac';
$lang['invoice_add_edit_number']      = 'Broj računa';
$lang['invoice_add_edit_date']        = 'Datum računa';
$lang['invoice_add_edit_duedate']     = 'Do datuma';
$lang['invoice_add_edit_currency']    = 'Valuta';
$lang['invoice_add_edit_client_note'] = 'Napomena klijenta';
$lang['invoice_add_edit_admin_note']  = 'Napomena administratora';

$lang['invoice_add_edit_search_item']  = 'Pretraži stavke';
$lang['invoices_toggle_table_tooltip'] = 'Uključi tablicu';

$lang['edit_invoice_tooltip']                   = 'Uredi račun';
$lang['delete_invoice_tooltip']                 = 'Izbriši račun. Napomena: Sva plaćanja po ovom računu će biti izbrisana (ukoliko postoje).';
$lang['invoice_sent_to_email_tooltip']          = 'Pošalji na Email';
$lang['invoice_already_send_to_client_tooltip'] = 'Ova račun je već poslana klijentu %s';
$lang['send_overdue_notice_tooltip']            = 'Pošalji podsjetnik o isteku valute';
$lang['invoice_view_activity_tooltip']          = 'Dnevnik aktivnosti';
$lang['invoice_record_payment']                 = 'Zabilježite plaćanje';

$lang['invoice_send_to_client_modal_heading']    = 'Pošalji račun klijentu';
$lang['invoice_send_to_client_attach_pdf']       = 'Prikvači račun u PDF-ue';
$lang['invoice_send_to_client_preview_template'] = 'Pretpregled email predloška';

$lang['invoice_dt_table_heading_number']  = 'Račun #';
$lang['invoice_dt_table_heading_date']    = 'Datum';
$lang['invoice_dt_table_heading_client']  = 'Klijent';
$lang['invoice_dt_table_heading_duedate'] = 'Do Datuma';
$lang['invoice_dt_table_heading_amount']  = 'Iznos';
$lang['invoice_dt_table_heading_status']  = 'Status';

$lang['record_payment_for_invoice']              = 'Zabilježite plaćanje za';
$lang['record_payment_amount_received']          = 'Iznos zaprimljen';
$lang['record_payment_date']                     = 'Datum plaćanja';
$lang['record_payment_leave_note']               = 'Ostavite napomenu';
$lang['invoice_payments_received']               = 'Primljene uplate';
$lang['invoice_record_payment_note_placeholder'] = 'Napomena administratora';
$lang['no_payments_found']                       = 'Nisu pronađena plaćanja za ovaj račun';
$lang['invoice_email_link_text']                 = 'Prikaz računa';

# Payments
$lang['payments']                             = 'Plaćanja';
$lang['payment']                              = 'Plaćanje';
$lang['payment_lowercase']                    = 'plaćanje';
$lang['payments_table_number_heading']        = 'Plaćanje #';
$lang['payments_table_invoicenumber_heading'] = 'Račun #';
$lang['payments_table_mode_heading']          = 'Način plaćanja';
$lang['payments_table_date_heading']          = 'Datum';
$lang['payments_table_amount_heading']        = 'Iznos';
$lang['payments_table_client_heading']        = 'Klijent';
$lang['payment_not_exists']                   = 'Plaćanje ne postoji';

$lang['payment_edit_for_invoice']     = 'Plaćanja za račun';
$lang['payment_edit_amount_received'] = 'Iznos zaprimljen';
$lang['payment_edit_date']            = 'Datum plaćanja';
$lang['payment_edit_lave_note']       = 'Ostavite napomenu';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Naslov';
$lang['kb_article_add_edit_group']   = 'Grupa';
$lang['kb_string']                   = 'Baza znanja';
$lang['kb_article']                  = 'Članak';
$lang['kb_article_lowercase']        = 'članak';
$lang['kb_article_new_article']      = 'Novi članak';
$lang['kb_article_disabled']         = 'Onemogućeno';
$lang['kb_article_description']      = 'Opis članka';

$lang['kb_table']                      = 'Popis';
$lang['kb_no_articles_found']          = 'Nisu pronađeni članci baze znanja';
$lang['kb_dt_article_name']            = 'Naziv članka';
$lang['kb_dt_group_name']              = 'Grupa';
$lang['new_group']                     = 'Nova Grupa';
$lang['kb_group_add_edit_name']        = 'Naziv grupe';
$lang['kb_group_add_edit_description'] = 'Kratak opis';
$lang['kb_group_add_edit_disabled']    = 'Onemogućeno';
$lang['kb_group_add_edit_note']        = 'Napomena: Svi članci u ovoj grupi bit će skriveni ako je označeno onemogućeno';
$lang['group_table_name_heading']      = 'Ime';
$lang['group_table_isactive_heading']  = 'Aktivno';
$lang['kb_no_groups_found']            = 'Nisu pronađene grupe baza znanja';

# Mail Lists
$lang['mail_lists']                           = 'Popisi elektronička pošta';
$lang['mail_list']                            = 'Popis elektronička pošta';
$lang['new_mail_list']                        = 'Novi popis elektronička pošta';
$lang['mail_list_lowercase']                  = 'popis elektronička pošta';
$lang['custom_field_deleted_success']         = 'Obrisano je proizvoljno polje';
$lang['custom_field_deleted_fail']            = 'Problem sa brisanjem proizvoljnog polja';
$lang['email_removed_from_list']              = 'Elektronička pošta je uklonjena sa popisa';
$lang['email_remove_fail']                    = 'Uklanjanje e-adrese sa popisa je neuspješno';
$lang['staff_mail_lists']                     = 'Popis adresa elektroničkih pošta djelatnika';
$lang['clients_mail_lists']                   = 'Popis adresa elektroničkih pošta klijenata';
$lang['mail_list_total_imported']             = 'Ukupno uvezenih adresa elektroničke pošte: %s';
$lang['mail_list_total_duplicate']            = 'Ukupno duplikata: %s';
$lang['mail_list_total_failed_to_insert']     = 'Neuspješno umetanje adresa elektroničke pošte: %s';
$lang['mail_list_total_invalid']              = 'Nevažeća adresa elektroničke pošte: %s';
$lang['cant_edit_mail_list']                  = 'Ne možete uređivati ovaj popis jer se popunjava automatski';
$lang['mail_list_add_edit_name']              = 'Naziv popis adresa elektroničke pošte';
$lang['mail_list_add_edit_customfield']       = 'Dodaj proizvoljno polje';
$lang['mail_lists_viewing_emails']            = 'Pregledavanje adresa elektroničke pošte s popisa';
$lang['mail_lists_view_email_email_heading']  = 'Adrese elektroničke pošte';
$lang['mail_lists_view_email_date_heading']   = 'Datum dodavanja';
$lang['add_new_email_to']                     = 'Dodaj novu adresu elektroničke pošte na %s';
$lang['import_emails_to']                     = 'Uvezi adrese elektroničke pošte na %s';
$lang['mail_list_new_email_edit_add_label']   = 'Adrese elektronička pošta';
$lang['mail_list_import_file']                = 'Uvezi datoteku';
$lang['mail_list_available_custom_fields']    = 'Dostupna proizvoljna polja';
$lang['submit_import_emails']                 = 'Uvezi adrese elektroničke pošte';
$lang['btn_import_emails']                    = 'Uvezi adrese elektroničke pošte (Excel)';
$lang['btn_add_email_to_list']                = 'Dodaj adrese elektroničke pošte ovom popisu';
$lang['mail_lists_dt_list_name']              = 'Naziv popisa';
$lang['mail_lists_dt_datecreated']            = 'Datum stvaranja';
$lang['mail_lists_dt_creator']                = 'Tvorac';
$lang['email_added_to_mail_list_successfully'] = 'Adresa elektroničke pošte dodana na popisu';
$lang['email_is_duplicate_mail_list']         = 'Adresa elektroničke pošte već postoji na popisu';

# Media
$lang['media_files']            = 'Datoteke';

# Payment modes
$lang['new_payment_mode']       = 'Novi način plaćanja';
$lang['payment_modes']          = 'Načini Plaćanja';
$lang['payment_mode']           = 'Način Plaćanja';
$lang['payment_mode_lowercase'] = 'način plaćanja';
$lang['payment_modes_dt_name']  = 'Naziv načina plaćanja';

$lang['payment_mode_add_edit_name'] = 'Naziv načina plaćanja';
$lang['payment_mode_edit_heading']  = 'Uredi način plaćanja';
$lang['payment_mode_add_heading']   = 'Dodaj novi način plaćanja';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Novi unaprijed definirani odgovor';
$lang['predefined_replies']                = 'Predefinirani Odgovori';
$lang['predefined_reply']                  = 'Predefinirani Odgovori';
$lang['predefined_reply_lowercase']        = 'predefinirani odgovori';
$lang['predefined_replies_dt_name']        = 'Naziv predefiniranog odgovora';
$lang['predefined_reply_add_edit_name']    = 'Naziv predefiniranog odgovora';
$lang['predefined_reply_add_edit_content'] = 'Sadržaj odgovora';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Novi prioritet';
$lang['ticket_priorities']             = 'Prioriteti Zahtjeva';
$lang['ticket_priority']               = 'Prioritet Zahtjeva';
$lang['ticket_priority_lowercase']     = 'prioritet zahtjeva';
$lang['no_ticket_priorities_found']    = 'Nije pronađen niti jedan prioritet zahtjeva';
$lang['ticket_priority_dt_name']       = 'Naziv prioriteta zahtjeva';
$lang['ticket_priority_add_edit_name'] = 'Naziv prioriteta';

# Reports
$lang['kb_reports']                         = 'Izvješća članaka baze znanja';
$lang['sales_reports']                      = 'Izvješća prodaje';
$lang['reports_choose_kb_group']            = 'Odaberi Grupu';
$lang['reports_sales_select_report_type']   = 'Odaberite Vrstu Izvješća';
$lang['report_kb_yes']                      = 'Da';
$lang['report_kb_no']                       = 'Ne';
$lang['report_kb_no_votes']                 = 'Još nema glasova';
$lang['report_this_week_leads_conversions'] = 'Ovotjedne pretvorbe potencijalnih kupaca';
$lang['report_leads_sources_conversions']   = 'Pretvorba potencijalnih kupaca po izvoru';
$lang['report_leads_monthly_conversions']   = 'Mjesečno';
$lang['sales_report_heading']               = 'Izvješće Prodaje';
$lang['report_sales_type_income']           = 'Ukupan Prihod';

$lang['report_sales_type_customer']                    = 'Izvješće kupaca';
$lang['report_sales_base_currency_select_explanation'] = 'Morate odabrati valutu jer imate račune s različitim valutama';
$lang['report_sales_from_date']                        = 'Od Datuma';
$lang['report_sales_to_date']                          = 'Do Datuma';


$lang['report_sales_months_all_time']      = 'Cijelo vrijeme';
$lang['report_sales_months_six_months']    = 'Zadnjih 6 mjeseci';
$lang['report_sales_months_twelve_months'] = 'Zadnjih 12 mjeseci';
$lang['report_sales_months_custom']        = 'Proizvoljno';
$lang['reports_sales_generated_report']    = 'Generirano izvješće';



$lang['reports_sales_dt_customers_client']                = 'Kupac';
$lang['reports_sales_dt_customers_total_invoices']        = 'Računi ukupno';
$lang['reports_sales_dt_items_customers_amount']          = 'Iznos';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Iznos sa porezom';

# Roles
$lang['new_role']           = 'Nova Uloga';
$lang['all_roles']          = 'Sve Uloge';
$lang['roles']              = 'Uloge Djelatnika';
$lang['role']               = 'Uloga';
$lang['role_lowercase']     = 'uloga';
$lang['roles_total_users']  = 'Ukupno Korisnika: ';
$lang['roles_dt_name']      = 'Naziv Uloge';
$lang['role_add_edit_name'] = 'Naziv Uloge';

# Service
$lang['new_service']           = 'Nova Usluga';
$lang['services']              = 'Usluge';
$lang['service']               = 'Usluga';
$lang['service_lowercase']     = 'usluga';
$lang['services_dt_name']      = 'Naziv Usluge';
$lang['service_add_edit_name'] = 'Naziv Usluge';

# Settings
$lang['settings']                     = 'Postavke';
$lang['settings_updated']             = 'Postavke Ažurirane';
$lang['settings_save']                = 'Spremi Postavke';
$lang['settings_group_general']       = 'Opće';
$lang['settings_group_localization']  = 'Lokalizacija';
$lang['settings_group_tickets']       = 'Zahtjevi';
$lang['settings_group_sales']         = 'Financije';
$lang['settings_group_email']         = 'Elektronička pošta';
$lang['settings_group_clients']       = 'Klijenti';
$lang['settings_group_newsfeed']      = 'Vijesti';
$lang['settings_group_cronjob']       = 'Ponavljajući Zadatak';

$lang['settings_yes']                                        = 'Da';
$lang['settings_no']                                         = 'Ne';
$lang['settings_clients_default_theme']                      = 'Zadana Tema Klijenata';
$lang['settings_clients_allow_registration']                 = 'Dozvoli Klijentima Registraciju';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Dozvoli da baza znanja bude vidljiva bez registracije';

$lang['settings_cron_send_overdue_reminder']                 = 'Pošalji podsjetnik za račun van valute';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Pošalji podsjetnik za račun van valute kupcu po ažuriranju statusa nakon Ponavljajućeg Zadatka';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Automatkski pošalji podasjetnik nakon (dana)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Automatski ponovno pošalji podsjetnik nakon (dana)';

$lang['settings_email_host']      = 'SMTP Domaćin';
$lang['settings_email_port']      = 'SMTP Vrata';
$lang['settings_email']           = 'SMTP elektronička pošta';
$lang['settings_email_password']  = 'SMTP Šifra';
$lang['settings_email_charset']   = 'Set Znakova e-pošte';
$lang['settings_email_signature'] = 'Potpis u e-pošti';

$lang['settings_general_company_logo']                = 'Logo Tvrtke';
$lang['settings_general_company_logo_tooltip']        = 'Preporučene dimenzije: 150px x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Ukloni logo tvrtke';
$lang['settings_general_company_name']                = 'Naziv Tvrtke';
$lang['settings_general_company_main_domain']         = 'Glavna Domena Tvrtke';
$lang['settings_general_use_knowledgebase']           = 'Upotrijebite bazu znanja';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Ako dopustite ovu opciju baza znanja će se prikazati i kupcima';
$lang['settings_general_tables_limit']                = 'Ograničenje broja stranica tablice';
$lang['settings_general_default_staff_role']          = 'Zadana Uloga Djelatnika';
$lang['settings_general_default_staff_role_tooltip']  = 'Kada dodate novog djelatnika, ta će uloga biti odabrana prema zadanim postavkama';

$lang['settings_localization_date_format']      = 'Format Datuma';
$lang['settings_localization_default_timezone'] = 'Zadana Vremenska Zona';
$lang['settings_localization_default_language'] = 'Zadani Jezik';


$lang['settings_newsfeed_max_file_upload_post']    = 'Maksimalan broj datoteka na objavi';
$lang['settings_newsfeed_max_file_size']           = 'Maksimalna veličina datoteke (MB)';

$lang['settings_reminders_contracts']         = 'Podsjetnik o isteku ugovora prije';
$lang['settings_reminders_contracts_tooltip'] = 'Obavijest o isteku ugovora u danima';

$lang['settings_tickets_use_services']             = 'Koristi Usluge';
$lang['settings_tickets_max_attachments']          = 'Maksimalan broj dodataka na zahtjev';
$lang['settings_tickets_allow_departments_access'] = 'Dopustite djelatnicima pristup samo zahtjevima koje pripadaju odjelu djelatnika';
$lang['settings_tickets_allowed_file_extensions']  = 'Dopušteni privici';

$lang['settings_sales_general']                                    = 'Opće';
$lang['settings_sales_general_note']                               = 'Opće postavke';
$lang['settings_sales_invoice_prefix']                             = 'Prefiks broja računa';
$lang['settings_sales_decimal_separator']                          = 'Decimalni razdjelnik';
$lang['settings_sales_thousand_separator']                         = 'Razdjelnik tisućica';
$lang['settings_sales_currency_placement']                         = 'Položaj oznake valute';
$lang['settings_sales_currency_placement_before']                  = 'Prije Iznosa';
$lang['settings_sales_currency_placement_after']                   = 'Poslije Iznosa';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Klijent mora biti prijavljen da bi vidio račun';
$lang['settings_sales_next_invoice_number']                        = 'Sljedeći broj računa';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Postavite ovo polje na 1 ako želite početi od početka';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Umanji broj računa za obrisani račun';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Želite li umanjiti broj računa kada se izbriše ptrhodni račun? npr. Ako je označeno Da i prije brisanja računa je broj računa 15, sljedeći broj računa će se umanjiti za 1, biti će 14. Ako je postavljeno Ne broj sljedećeg računa će ostati 15. Ako ste postavili brisanje samo na zadnjem računu na NE, trebali biste postaviti tu opciju na NE da zadrži sljedeći broj računa odnosno da se broj računa ne umanjuje';
$lang['settings_sales_invoice_number_format']                      = 'Format Brojeva Na Računu';
$lang['settings_sales_invoice_number_format_year_based']           = 'Temeljeno Na Godini';
$lang['settings_sales_invoice_number_format_number_based']         = 'Temeljeno Na Broju (000001)';


$lang['settings_sales_company_info_note']    = 'Ove će se informacije prikazati na računma / predračunima / plaćanjima i ostalim PDF dokumentima gdje je potrebna informacija tvrtke';
$lang['settings_sales_company_name']         = 'Naziv Tvrtke';
$lang['settings_sales_address']              = 'Adresa';
$lang['settings_sales_city']                 = 'Grad';
$lang['settings_sales_country_code']         = 'Pozvini broj zemlje';
$lang['settings_sales_postal_code']          = 'Poštanski broj';
$lang['settings_sales_phonenumber']          = 'Telefon';

# Leads
$lang['new_lead']       = 'Novi Potencijalni Kupac';
$lang['leads']          = 'Potencijalni Kupci';
$lang['lead']           = 'Potencijalni kupac';
$lang['lead_lowercase'] = 'potencijalni kupac';
$lang['leads_all']      = 'Svi';

$lang['leads_canban_notes']  = 'Bilješke: %s';
$lang['leads_canban_source'] = 'Izvor: %s';

$lang['lead_new_source']            = 'Novi Izvor';
$lang['lead_sources']               = 'Izvor Potencijalnog Kupca';
$lang['lead_source']                = 'Izvor Potencijalnog Kupca';
$lang['lead_source_lowercase']      = 'izvor potencijalnog kupca';
$lang['leads_sources_not_found']    = 'Nije pronađen niti jedan izvor potencijalnih kupaca';
$lang['leads_sources_table_name']   = 'Naziv Izvora';
$lang['leads_source_add_edit_name'] = 'Naziv Izvora';

$lang['lead_new_status']         = 'Novi status potencijalnog kupca';
$lang['lead_statuss']            = 'Status Potencijalnog Kupca';
$lang['lead_status']             = 'Status Potencijalnog Kupca';
$lang['lead_status_lowercase']   = 'status potencijalnog kupca';
$lang['leads_status_table_name'] = 'Naziv Statusa';

$lang['leads_status_add_edit_name']  = 'Naziv Statusa';
$lang['leads_status_add_edit_order'] = 'Narudžba';

$lang['lead_statuses_not_found']      = 'Nisu Pronađeni Statusi Potencijalnih Kupaca';
$lang['leads_search']                 = 'Provjeri Potencijalne Kupce';

$lang['leads_table_total'] = 'Ukupno Potencijalnih Kupaca: %s';

$lang['leads_dt_name']         = 'Ime';
$lang['leads_dt_email']        = 'E-pošta';
$lang['leads_dt_phonenumber']  = 'Telefon';
$lang['leads_dt_assigned']     = 'Dodijeljeno';
$lang['leads_dt_status']       = 'Status';
$lang['leads_dt_last_contact'] = 'Zadnje kontaktirano';

$lang['lead_add_edit_name']                 = 'Ime';
$lang['lead_add_edit_email']                = 'E-pošta';
$lang['lead_add_edit_phonenumber']          = 'Telefon';
$lang['lead_add_edit_source']               = 'Izvor';
$lang['lead_add_edit_status']               = 'Status Potencijalnog Kupca';
$lang['lead_add_edit_assigned']             = 'Dodijeljeno';
$lang['lead_add_edit_datecontacted']        = 'Datum Kontakta';
$lang['lead_add_edit_contacted_today']      = 'Kontaktiran Danas';
$lang['lead_add_edit_activity']             = 'Dnevnik Aktivnosti';
$lang['lead_add_edit_notes']                = 'Bilješke';
$lang['lead_add_edit_add_note']             = 'Dodaj Bilješku';
$lang['lead_not_contacted']                 = 'Nisam Kontaktirao Ovog Potencijalnog Kupca';
$lang['lead_add_edit_contacted_this_lead']  = 'Došao Sam U Kontakt Sa Ovim Potencijalnim Kupcem';
$lang['lead_confirmation_canban_contacted'] = 'Jeste li uspjeli stupiti u kontakt sa ovim potencijalnim kupcem?';

# Misc
$lang['access_denied']              = 'Pristup Odbijen';
$lang['prev']                       = 'Prethodni';
$lang['next']                       = 'sljedeći';

# Datatables
$lang['dt_paginate_first']          = 'Prvi';
$lang['dt_paginate_last']           = 'Zadnji';
$lang['dt_paginate_next']           = 'Slijedeći';
$lang['dt_paginate_previous']       = 'Prethodni';
$lang['dt_empty_table']             = 'Nema pronađenih {0}';
$lang['dt_search']                  = 'Traži...';
$lang['dt_zero_records']            = 'Nisu pronađeni zapisi koji se podudaraju';
$lang['dt_loading_records']         = 'Učitavam...';
$lang['dt_length_menu']             = 'Prikaži unose od menija _MENU_';
$lang['dt_info_filtered']           = '(filtrirano iz _MAX_ ukupno {0})';
$lang['dt_info_empty']              = 'Prikazuje 0 do 0 od 0 {0}';
$lang['dt_info']                    = 'Prikazuje _START_ do _END_ od _TOTAL_ {0}';
$lang['dt_empty_table']             = 'Nema pronađenih {0}';
$lang['dt_sort_ascending']          = ' aktivirajte za sortiranje stupca prema gore';
$lang['dt_sort_descending']         = ' aktivirajte za sortiranje stupca prema dolje';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s sent invoice overdue reminder';

# Weekdays
$lang['wd_monday']    = 'Ponedjeljak';
$lang['wd_tuesday']   = 'Utorak';
$lang['wd_thursday']  = 'Četvrtak';
$lang['wd_wednesday'] = 'Srijeda';
$lang['wd_friday']    = 'Petak';
$lang['wd_saturday']  = 'Subota';
$lang['wd_sunday']    = 'Nedjelja';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Kontrolna Ploča';
$lang['als_clients']   = 'Klijenti';
$lang['als_leads']     = 'Potencijalni Kupci';

$lang['als_contracts'] = 'Ugovori';

$lang['als_all_tickets'] = 'Svi Zahtjevi';
$lang['als_sales']       = 'Prodaja';

$lang['als_staff'] = 'Djelatnici';
$lang['als_tasks'] = 'Aktivnosti';
$lang['als_kb']    = 'Baza Znanja';

$lang['als_surveys']               = 'Ankete';
$lang['als_media']                 = 'Mediji';
$lang['als_reports']               = 'Izvještaji';
$lang['als_reports_sales_submenu'] = 'Prodaja';
$lang['als_reports_leads_submenu'] = 'Potencijalni Kupci';
$lang['als_kb_articles_submenu']   = 'Članci BZ';
$lang['als_utilities']             = 'Alati Podrške';
$lang['als_announcements_submenu'] = 'Obavijesti';
$lang['als_mail_lists_submenu']    = 'Popis Elektroničke pošte';
$lang['als_calendar_submenu']      = 'Kalendar';
$lang['als_activity_log_submenu']  = 'Dnevnik Aktivnosti';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Zahtjevi';
$lang['acs_ticket_priority_submenu']           = 'Prioriteti Zahtjeva';
$lang['acs_ticket_statuses_submenu']           = 'Satusi Zahtjeva';
$lang['acs_ticket_predefined_replies_submenu'] = 'Unaprijed Definirani Odgovori';
$lang['acs_ticket_services_submenu']           = 'Usluge';
$lang['acs_departments']                       = 'Odjeli';
$lang['acs_leads']                             = 'Potencijalni Kupci';
$lang['acs_leads_sources_submenu']             = 'Izvori';
$lang['acs_leads_statuses_submenu']            = 'Statusi';
$lang['acs_sales_taxes_submenu']               = 'Porezne Stope';
$lang['acs_sales_currencies_submenu']          = 'Valute';
$lang['acs_sales_payment_modes_submenu']       = 'Načini Plaćanja';
$lang['acs_email_templates']                   = 'Predlošci Elektroničke pošte';
$lang['acs_roles']                             = 'Uloge';
$lang['acs_settings']                          = 'Postavke';

# Tickets
$lang['new_ticket']                                         = 'Otvori Novi Zahtjev';
$lang['tickets']                                            = 'Zahtjevi';
$lang['ticket']                                             = 'Zahtjev';
$lang['ticket_lowercase']                                   = 'zahtjev';
$lang['support_tickets']                                    = 'Zahtjevi za podrškom';
$lang['support_ticket']                                     = 'Zahtjev za podršku';
$lang['ticket_settings_to']                                 = 'Za';
$lang['ticket_settings_email']                              = 'Elektronička pošta';
$lang['ticket_settings_departments']                        = 'Odjel';
$lang['ticket_settings_service']                            = 'Usluga';
$lang['ticket_settings_priority']                           = 'Prioritet';
$lang['ticket_settings_subject']                            = 'Naslov';
$lang['ticket_settings_assign_to']                          = 'Dodijeli Zahtjev (zadano je trenutni korisnik)';
$lang['ticket_settings_assign_to_you']                      = 'Vi';
$lang['ticket_settings_select_client']                      = 'Odaberite Klijenta';
$lang['ticket_add_body']                                    = 'Sadržaj Zahtjeva';
$lang['ticket_add_attachments']                             = 'Dodaci';
$lang['ticket_no_reply_yet']                                = 'Još Nema Odgovora';
$lang['new_ticket_added_successfully']                        = 'Zahtjeva #%s uspješno dodano';
$lang['replied_to_ticket_successfully']                       = 'Odgovoreno na #%s uspješno';
$lang['ticket_settings_updated_successfully']                = 'Postavke zahtjeva su uspješno ažurirane';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Postavke zahtjeva su uspješno ažurirane - preraspodijeljen na odjel %s';
$lang['ticket_dt_subject']                                  = 'Naslov';
$lang['ticket_dt_department']                               = 'Odjel';
$lang['ticket_dt_service']                                  = 'Usluga';
$lang['ticket_dt_submitter']                                = 'Kupac';
$lang['ticket_dt_status']                                   = 'Status';
$lang['ticket_dt_priority']                                 = 'Prioritet';
$lang['ticket_dt_last_reply']                               = 'Zadnji Odgovor';

$lang['ticket_single_add_reply']                  = 'Dodaj Odgovor';
$lang['ticket_single_add_note']                   = 'Dodaj Bilješku';
$lang['ticket_single_other_user_tickets']         = 'Ostali Zahtjevi';
$lang['ticket_single_settings']                   = 'Postavke';
$lang['ticket_single_priority']                   = 'Prioritet: %s';
$lang['ticket_single_last_reply']                 = 'Posljednji Odgovor: %s';
$lang['ticket_single_ticket_note_by']             = 'Dodao Bilješku Na Zahtjev %s';
$lang['ticket_single_note_added']                 = 'Bilješka dodana: %s';
$lang['ticket_single_change_status']              = 'Promjena Statusa';
$lang['ticket_single_assign_to_me_on_update']     = 'Dodijeli Ovaj Zahtjev Na Mene Automatski';
$lang['ticket_single_insert_predefined_reply']    = 'Umetni Predefinirani Odgovor';
$lang['ticket_single_insert_knowledge_base_link'] = 'Umetni link baze znanja';
$lang['ticket_single_attachments']                = 'Privici';
$lang['ticket_single_add_response']               = 'Dodaj Odgovor';
$lang['ticket_single_note_heading']               = 'Bilješka';
$lang['ticket_single_add_note']                   = 'Dodaj bilješku';
$lang['ticket_settings_none_assigned']            = 'Ništa';
$lang['ticket_status_changed_successfully']        = 'Promjena Statusa Zahtjeva';
$lang['ticket_status_changed_fail']               = 'Problem Sa Promjenom Statusa Zahtjeva';

$lang['ticket_staff_string']                    = 'Djelatnici';
$lang['ticket_client_string']                   = 'Klijent';
$lang['ticket_posted']                          = 'Objavljeno: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Umetni Predefinirani Odgovor';
$lang['ticket_kb_link_heading']                 = 'Umetni link baze znanja';
$lang['ticket_access_by_department_denied']     = 'Nemate Dozvoljen Pristup Ovom Zahtjevu. Ovaj Zahtjev Pripada Odjelu Kojem Vi Ne Pripadate.';

# Staff
$lang['new_staff']                       = 'Novi Djelatnik';
$lang['staff_members']                   = 'Djelatnici';
$lang['staff_member']                    = 'Djelatnik';
$lang['staff_member_lowercase']          = 'djelatnik';
$lang['staff_profile_updated']           = 'Vaš Profil Je Ažuriran';
$lang['staff_old_password_incorrect']     = 'Vaša stara šifra nije točna';
$lang['staff_password_changed']          = 'Vaša šifra je promijenjena';
$lang['staff_problem_changing_password'] = 'Došlo je do problema kod promjene Vaše šifre';
$lang['staff_profile_string']            = 'Profil';

$lang['staff_cant_remove_main_admin']          = 'Nemoguće je ukloniti glavnog administratora';
$lang['staff_cant_remove_yourself_from_admin'] = 'Nemoguće je ukloniti administratorsku ulogu sa samog sebe';

$lang['staff_dt_name']       = 'Ime i Prezime';
$lang['staff_dt_email']      = 'Elektronička pošta';
$lang['staff_dt_last_Login'] = 'Zadnja Prijava';
$lang['staff_dt_active']     = 'Aktivan';

$lang['staff_add_edit_firstname']             = 'Ime';
$lang['staff_add_edit_lastname']              = 'Prezime';
$lang['staff_add_edit_email']                 = 'E-pošta';
$lang['staff_add_edit_phonenumber']           = 'Telefon';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Članovi Odjela';
$lang['staff_add_edit_role']                  = 'Uloge';
$lang['staff_add_edit_permissions']           = 'Dozvole';
$lang['staff_add_edit_administrator']         = 'Administrator';
$lang['staff_add_edit_password']              = 'Šifra';
$lang['staff_add_edit_password_note']         = 'Bilješka: ako ispunite ova polja, šifra će biti izmjenjena na ovom korisniku.';
$lang['staff_add_edit_password_last_changed'] = 'Zadnja Izmjena Šifre';
$lang['staff_add_edit_notes']                 = 'Bilješke';
$lang['staff_add_edit_note_description']      = 'Opis bilješke';

$lang['staff_notes_table_description_heading'] = 'Bilješka';
$lang['staff_notes_table_addedfrom_heading']   = 'Dodana Iz';
$lang['staff_notes_table_dateadded_heading']   = 'Datum dodavanja';

$lang['staff_admin_profile']         = 'Ovo je profil administratora';
$lang['staff_profile_notifications'] = 'Obavijesti';
$lang['staff_profile_departments']   = 'Odjeli';

$lang['staff_edit_profile_image']                     = 'Slika Profila';
$lang['staff_edit_profile_your_departments']          = 'Odjeli';
$lang['staff_edit_profile_change_your_password']      = 'Promjenite šifru';
$lang['staff_edit_profile_change_old_password']       = 'Stara šifra';
$lang['staff_edit_profile_change_new_password']       = 'Nova šifra';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Ponovite novu šifru';

# Surveys
$lang['new_survey']                    = 'Nova Anketa';
$lang['surveys']                       = 'Ankete';
$lang['survey']                        = 'Anketa';
$lang['survey_lowercase']              = 'anketa';
$lang['survey_no_mail_lists_selected'] = 'Nema Označenog Popisa Elektronička pošta';
$lang['survey_send_success_note']      = 'Sve Ankete(%s) će biti poslane putem ponavljajućeg posla';
$lang['survey_result']                 = 'Rezultat Ankete: %s';
$lang['question_string']               = 'Pitanje';
$lang['question_field_string']         = 'Polje';

$lang['survey_list_view_tooltip']         = 'Pogledaj Anketu';
$lang['survey_list_view_results_tooltip'] = 'Pogledaj Rezultate';

$lang['survey_add_edit_subject']                   = 'Naslov Ankete';
$lang['survey_add_edit_email_description']         = 'Opis ankete (Opis Elektroničke pošte)';
$lang['survey_include_survey_link']                = 'Uključi vezu na ankete u potpisu';
$lang['survey_available_mail_lists_custom_fields'] = 'Dostupna prilagođena polja iz popisa elektronička pošta';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Prilagođena polja mogu se koristiti za uređivač e-pošte.';
$lang['survey_add_edit_short_description_view']    = 'Kratki opis ankete (pogledajte opis)';
$lang['survey_add_edit_from']                      = 'Od (prikazano u e-poruci)';
$lang['survey_add_edit_redirect_url']              = 'URL preusmjeravanja ankete';
$lang['survey_add_edit_red_url_note']              = 'Po završetku ankete će korisnik biti preusmjeren na (ostavite praznu za preusmjerenje na ovu stranicu)';
$lang['survey_add_edit_disabled']                  = 'Onemogućeno';
$lang['survey_add_edit_only_for_logged_in']        = 'Samo za prijavljene sudionike (djelatnike, kupce)';
$lang['send_survey_string']                        = 'Pošalji Anketu';
$lang['survey_send_mail_list_clients']             = 'Klijenti';
$lang['survey_send_mail_list_staff']               = 'Djelatnici';
$lang['survey_send_mail_lists_string']             = 'Popisi Elektronička pošta';
$lang['survey_send_mail_lists_note_logged_in']     = 'Napomena: Ako šaljete anketu preko popisa elektronička pošta opcija Samo za prijavljene sudionike mora biti odznačena';
$lang['survey_send_string']                        = 'Pošalji';

$lang['survey_send_to_total']  = 'Pošalji na ukupno %s elektronička pošta';
$lang['survey_send_till_now']  = 'Do sada';
$lang['survey_send_finished']  = 'Završetak ankete: %s';
$lang['survey_added_to_queue'] = 'Ova je anketa stavljena u red čekanja za ponavljajući posao %s';

$lang['survey_questions_string']          = 'Pitanja';
$lang['survey_insert_field']              = 'Umetni Polje';
$lang['survey_field_checkbox']            = 'Potvrdi Okvir';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Polje Unosa';
$lang['survey_field_textarea']            = 'Područje Teksta';
$lang['survey_question_required']         = 'Obavezno';
$lang['survey_question_only_for_preview'] = 'Samo za pretpregled';
$lang['survey_create_first']              = 'Prvo biste trebali stvoriti anketu, a potom ćete moći dodavati pitanja u istu.';


$lang['survey_dt_name']               = 'Ime';
$lang['survey_dt_total_questions']    = 'Ukupno Pitanja';
$lang['survey_dt_total_participants'] = 'Ukupno Sudionika';
$lang['survey_dt_date_created']       = 'Stvoreno Dana';
$lang['survey_dt_active']             = 'Aktivno';

$lang['survey_text_questions_results'] = 'Rezultat tekstualnih pitanja';
$lang['survey_view_all_answers']       = 'Pogledajte sve odgovore';

# Staff Tasks
$lang['new_task']       = 'Nova Aktivnost';
$lang['tasks']          = 'Aktivnosti';
$lang['task']           = 'Aktivnost';
$lang['task_lowercase'] = 'aktivnost';
$lang['comment_string'] = 'Komentar';

$lang['task_marked_as_complete'] = 'Odrađene aktivnosti';
$lang['task_follower_removed']   = 'Nositelj je uspješno uklonjen';
$lang['task_assignee_removed']   = 'Operativac je uspješno uklonjen';

$lang['task_no_assignees'] = 'Nema nositelja za ovu aktivnost';
$lang['task_no_followers'] = 'Nema operativaca za ovu aktivnost';

$lang['task_list_all']            = 'Svi';
$lang['task_list_not_assigned']   = 'Nije Dodijeljeno';
$lang['task_list_duedate_passed'] = 'Datum Dospijeća';
$lang['tasks_dt_name']            = 'Ime';
$lang['task_single_priority']               = 'Prioritet';
$lang['task_single_start_date']             = 'Datum početka';
$lang['task_single_due_date']               = 'Završetak';
$lang['task_single_finished']               = 'Završeno';
$lang['task_single_mark_as_complete']       = 'Označi kao završeno';
$lang['task_single_edit']                   = 'Uredi';
$lang['task_single_delete']                 = 'Izbriši';
$lang['task_single_assignees']              = 'Nositelji';
$lang['task_single_assignees_select_title'] = 'Dodijeli zadatak';
$lang['task_single_followers']              = 'Operativci';
$lang['task_single_followers_select_title'] = 'Dodaj Operativce';
$lang['task_single_insert_media_link']      = 'Umetnite poveznicu na medij';
$lang['task_single_add_new_comment']        = 'Dodaj Komentar';

$lang['task_add_edit_subject']     = 'Naslov';
$lang['task_add_edit_priority']    = 'Prioritet';
$lang['task_priority_low']         = 'Nizak';
$lang['task_priority_medium']      = 'Srednji';
$lang['task_priority_high']        = 'Visok';
$lang['task_priority_urgent']      = 'Hitno';
$lang['task_add_edit_start_date']  = 'Početak';
$lang['task_add_edit_due_date']    = 'Završetak';
$lang['task_add_edit_description'] = 'Opis Aktivnosti';

# Taxes
$lang['new_tax']       = 'Novi Porez';
$lang['taxes']         = 'Porezi';
$lang['tax']           = 'Porez';
$lang['tax_lowercase'] = 'porez';
$lang['tax_dt_name']   = 'Naziv Poreza';
$lang['tax_dt_rate']   = 'Stopa (postotak)';

$lang['tax_add_edit_name'] = 'Naziv Poreza';
$lang['tax_add_edit_rate'] = 'Stopa Poreza (postotak)';
$lang['tax_edit_title']    = 'Uredi porez';
$lang['tax_add_title']     = 'Dodaj Novi Porez';

# Ticket Statuses
$lang['new_ticket_status']       = 'Novi Status Zahtjeva';
$lang['ticket_statuses']         = 'Statusi Zahtjeva';
$lang['ticket_status']           = 'Status Zahtjeva';
$lang['ticket_status_lowercase'] = 'status zahtjeva';

$lang['ticket_statuses_dt_name']      = 'Naziv Statusa Zahtjeva';
$lang['no_ticket_statuses_found']     = 'Nema pronađenih statusa zahtjeva';
$lang['ticket_statuses_table_total']  = 'Ukupno %s';
$lang['ticket_status_add_edit_name']  = 'Naziv Statusa Zahtjeva';
$lang['ticket_status_add_edit_color'] = 'Odaberi Boju';
$lang['ticket_status_add_edit_order'] = 'Poredak Statusa';

# Todos
$lang['new_todo']                  = 'Novi osobni zadatak';
$lang['my_todos']                  = 'Moji osobni zadaci';
$lang['todo']                      = 'Osobni Zadaci';
$lang['todo_lowercase']            = 'osobni zadaci';
$lang['todo_status_changed']       = 'Promjenjen je status osobnog zadatka';
$lang['todo_add_title']            = 'Dodaj Novi Osobni Zadatak';
$lang['add_new_todo_description']  = 'Opis osobnog zadatka';
$lang['no_finished_todos_found']   = 'Nema Završenih Osobnih Zadataka';
$lang['no_unfinished_todos_found'] = 'Nema Pronađenih Osobnih Zadataka';
$lang['unfinished_todos_title']    = 'Nezavršenih osobnih zadataka';
$lang['finished_todos_title']      = 'Zadnji Odrađeni Osobni Zadaci';

# Authentication
$lang['password_changed_email_subject']             = 'Vaša šifra je promijenjena';
$lang['password_reset_email_subject']               = 'Resetirajte Vašu lozinku na %s';
# Utilities
$lang['utility_activity_log']                       = 'Dnevnik Aktivnosti';
$lang['utility_activity_log_filter_by_date']        = 'Filtriraj Po Datumu';
$lang['utility_activity_log_dt_description']        = 'Opis';
$lang['utility_activity_log_dt_date']               = 'Datum';
$lang['utility_activity_log_dt_staff']              = 'Djelatnici';
$lang['utility_calendar_new_event_title']           = 'Dodaj novi događaj';
$lang['utility_calendar_new_event_start_date']      = 'Početak';
$lang['utility_calendar_new_event_end_date']        = 'Završetak';
$lang['utility_calendar_new_event_make_public']     = 'Javni Događaj';
$lang['utility_calendar_event_added_successfully']   = 'Novi događaj je uspješno dodan';
$lang['utility_calendar_event_deleted_successfully'] = 'Događaj je obrisan';
$lang['utility_calendar_new_event_placeholder']     = 'Naslov Događaja';


# Navigation
$lang['nav_notifications']          = 'Obavijesti';
$lang['nav_my_profile']             = 'Moj Profil';
$lang['nav_edit_profile']           = 'Uredi Profil';
$lang['nav_logout']                 = 'Odjava';
$lang['nav_no_notifications']       = 'Nisu Pronađene Obaijesti';
$lang['nav_view_all_notifications'] = 'Pogledaj Sve Obavijesti';
$lang['nav_customizer_tooltip']     = 'Prilagodi Postavke';
$lang['nav_notifications_tooltip']  = 'Prikaži Obavijesti';

## Clients
$lang['clients_required_field'] = 'Ovo polje je obavezno';

# Footer
$lang['clients_copyright'] = 'Sva prava pridržana %s';

# Announcements
$lang['clients_announcement_from']  = 'Od: ';
$lang['clients_announcement_added'] = 'Dodano: ';

# Contracts
$lang['clients_contracts']               = 'Ugovori';
$lang['clients_contracts_dt_subject']    = 'Naslov';
$lang['clients_contracts_dt_start_date'] = 'Početak';
$lang['clients_contracts_dt_end_date']   = 'Završetak';

# Home
$lang['clients_quick_invoice_info']                = 'Brze Informacije o Računima';
$lang['clients_home_currency_select_tooltip']      = 'Morate odabrati valutu jer imate račune s različitim valutama';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Preuzmi';

$lang['clients_my_invoices']        = 'Računi';
$lang['clients_invoice_dt_number']  = 'Račun #';
$lang['clients_invoice_dt_date']    = 'Datum';
$lang['clients_invoice_dt_duedate'] = 'Do Datuma';
$lang['clients_invoice_dt_amount']  = 'Iznos';
$lang['clients_invoice_dt_status']  = 'Status';

# Profile
$lang['clients_profile_heading'] = 'Profil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Ime';
$lang['clients_lastname']  = 'Prezime';
$lang['clients_email']     = 'Adresa Elektroničke pošte';
$lang['clients_company']   = 'Tvrtka';
$lang['clients_vat']       = 'OIB';
$lang['clients_phone']     = 'Telefon';
$lang['clients_country']   = 'Država';
$lang['clients_city']      = 'Grad';
$lang['clients_address']   = 'Adresa';
$lang['clients_zip']       = 'Poštanski broj';
$lang['clients_state']     = 'Županija';
# Used for edit profile and register END

$lang['clients_register_password']        = 'Šifra';
$lang['clients_register_password_repeat'] = 'Ponovite Šifru';
$lang['clients_edit_profile_update_btn']  = 'Ažurirajte';

$lang['clients_edit_profile_change_password_heading'] = 'Promijenite šifru';
$lang['clients_edit_profile_old_password']            = 'Stara šifra';
$lang['clients_edit_profile_new_password']            = 'Nova šifra';
$lang['clients_edit_profile_new_password_repeat']     = 'Ponovi šifru';
$lang['clients_edit_profile_change_password_btn']     = 'Izmijeni šifru';
$lang['clients_profile_last_changed_password']        = 'Šifra je zadnji puta promijenjena %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Baza Znanja';
$lang['clients_knowledge_base_articles_not_found'] = 'Nisu pronađeni članci u bazi znanja';
$lang['clients_knowledge_base_find_useful']        = 'Je li vam ovaj članak bio koristan?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Da';
$lang['clients_knowledge_base_find_useful_no']     = 'Ne';
$lang['clients_article_only_1_vote_today']         = 'Možete glasati jednom u 24 sata';
$lang['clients_article_voted_thanks_for_feedback'] = 'Hvala Vam na povratnoj informaciji';

# Tickets
$lang['clients_ticket_open_subject']                = 'Otvoreni Zahtjev';
$lang['clients_ticket_open_departments']            = 'Odjel';
$lang['clients_tickets_heading']                    = 'Zahtjevi za podrškom';
$lang['clients_ticket_open_service']                = 'Služba';
$lang['clients_ticket_open_priority']               = 'Prioritet';
$lang['clients_latest_tickets']                     = 'Najnoviji zahtjevi';
$lang['clients_ticket_open_body']                   = 'Sadržaj zahtjeva';
$lang['clients_ticket_attachments']                 = 'Prilog';
$lang['clients_ticket_posted']                      = 'Objavljeno: %s';
$lang['clients_single_ticket_string']               = 'Zahtjev';
$lang['clients_single_ticket_replied']              = 'Odgovoreno: %s';
$lang['clients_single_ticket_information_heading'] = 'Informacije o zahtjevu';

$lang['clients_tickets_dt_number']     = 'Zahtjev #';
$lang['clients_tickets_dt_subject']    = 'Naslov';
$lang['clients_tickets_dt_department'] = 'Odjel';
$lang['clients_tickets_dt_service']    = 'Služba';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Zadnji odgovor';

$lang['clients_ticket_single_department']        = 'Odjel: %s';
$lang['clients_ticket_single_submitted']          = 'Predano: %s';
$lang['clients_ticket_single_status']            = 'Status:';
$lang['clients_ticket_single_priority']          = 'Prioritet: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Dodaj Odgovor';
$lang['clients_ticket_single_add_reply_heading'] = 'Dodaj odgovor ovom zahtjevu';

# Login
$lang['clients_login_heading_no_register'] = 'Molimo Vas da se prijavite';
$lang['clients_login_heading_register']    = 'Molimo Vas da se registrirate ili prijavite';
$lang['clients_login_email']               = 'Adresa Elektroničke pošte';
$lang['clients_login_password']            = 'Šifra';
$lang['clients_login_remember']            = 'Zapamti me';
$lang['clients_login_login_string']        = 'Prijava';

# Register
$lang['clients_register_string']  = 'Registracija';
$lang['clients_register_heading'] = 'Registracija';

# Navigation
$lang['clients_nav_login']     = 'Prijava';
$lang['clients_nav_register']  = 'Registracija';
$lang['clients_nav_invoices']  = 'Račun';
$lang['clients_nav_contracts'] = 'Ugovori';
$lang['clients_nav_kb']        = 'Baza Znanja';
$lang['clients_nav_profile']   = 'Profil';
$lang['clients_nav_logout']    = 'Odjava';

# Datatables
$lang['clients_dt_paginate_first']    = 'Prvi';
$lang['clients_dt_paginate_last']     = 'Zadnji';
$lang['clients_dt_paginate_next']     = 'Slijedeći';
$lang['clients_dt_paginate_previous'] = 'Prethodni';
$lang['clients_dt_empty_table']       = 'Nema pronađenih {0}';
$lang['clients_dt_search']            = 'Pretraga:';
$lang['clients_dt_zero_records']      = 'Nije pronađen niti jedan zapis';
$lang['clients_dt_loading_records']   = 'Učitavnje...';
$lang['clients_dt_length_menu']       = 'Prikaži _MENU_ ';
$lang['clients_dt_info_filtered']     = '(filtrirano iz _MAX_ ukupno {0})';
$lang['clients_dt_info_empty']        = 'Prikazuje 0 od 0 od 0 {0}';
$lang['clients_dt_info']              = 'Prikazuje _START_ do _END_ od _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'Nema pronađenih {0}';
$lang['clients_dt_sort_ascending']    = 'aktivirajte za sortiranje klijenata uzlazno';
$lang['clients_dt_sort_descending']   = 'aktivirajte kako biste sortirali klijente silazno';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Račun';
$lang['payment_for_string']                            = 'Uplata za';
$lang['payment_date']                                  = 'Datum plaćanja:';
$lang['payment_view_mode']                             = 'Način plaćanja:';
$lang['payment_total_amount']                          = 'Ukupni iznos';
$lang['payment_table_invoice_number']                  = 'Broj Računa';
$lang['payment_table_invoice_date']                    = 'Datum Računa';
$lang['payment_table_invoice_amount_total']            = 'Iznos Računa';
$lang['payment_table_payment_amount_total']            = 'Plaćeni Iznos';
$lang['payments_table_transaction_id']                 = 'ID transakcije: %s';
$lang['payment_getaway_token_not_found']               = 'Token nije pronađen';
$lang['online_payment_recorded_success']               = 'Uplata je uspješno zabilježena';
$lang['online_payment_recorded_success_fail_database'] = 'Plaćanje je uspješno, ali nije uspjelo umetanje plaćanja u bazu podataka, kontaktirajte administratora';

# Leads
$lang['lead_convert_to_client']                   = 'Pretvori u klijenta';
$lang['lead_convert_to_email']                    = 'E-pošta';
$lang['lead_convert_to_client_firstname']         = 'Ime';
$lang['lead_convert_to_client_lastname']          = 'Prezime';
$lang['lead_email_already_exists']                = 'E-mail potencijalnog kupca već postoji u bazi';
$lang['lead_to_client_base_converted_success']    = 'Potencijalni kupac je uspješno pretvoren u klijenta';
$lang['lead_have_client_profile']                 = 'Ovaj Potencijalni Kupac Ima Profil Klijenta.';
$lang['lead_converted_edit_client_profile']       = 'Uredi Profil';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Pregledaj račun kao kupac';
$lang['invoice_add_edit_recurring']                                           = 'Ponavljajući račun?';
$lang['invoice_add_edit_recurring_no']                                        = 'Ne';
$lang['invoice_add_edit_recurring_month']                                     = 'Svakog %s mjeseca';
$lang['invoice_add_edit_recurring_months']                                    = 'Svakih %s mjeseci';
$lang['invoices_list_all']                                                    = 'Svi';
$lang['invoices_list_not_have_payment']                                       = 'Neplaćeni Računi';
$lang['invoices_list_recurring']                                               = 'Ponavljajući računi';
$lang['invoices_list_made_payment_by']                                        = '%s je platio';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Stvori novi ponavljajući račun samo ako je račun označen kao plaćen?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Ako je ovo polje označeno sa DA i ponavljajuća račun nema status PLAĆENO, nova račun neće biti stvorena.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Automatski pošalji novi račun kupcu';
$lang['view_invoice_pdf_link_pay']                                            = 'Plati Račun';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Bankovni Računi / Opis';
$lang['payment_mode_add_edit_description_tooltip'] = 'Ovdje možete postaviti detalje o bankovnim računima. Biti će prikazano na HTML Računa';
$lang['payment_modes_dt_description']              = 'Bankovni Računi / Opis';
$lang['payment_modes_add_edit_announcement']       = 'Bilješka: Načini plaćanja iz popisa se odnose na offline načine plaćanja. Online načini plaćanja se mogu podesiti u  Postavi -> Postavke -> Pristupnici za plaćanja';
$lang['payment_mode_add_edit_active']              = 'Aktivan';
$lang['payment_modes_dt_active']                   = 'Aktivan';

# Contracts
$lang['contract_not_found'] = 'Ugovor nije pronađen. Možda je izbrisan. Provjerite dnevnik aktivnosti';

# Settings
$lang['setting_bar_heading']                 = 'Postavi';
$lang['settings_group_online_payment_modes'] = 'Pristupnici za plaćanja';
$lang['settings_paymentmethod_mode_label']   = 'Oznaka';
$lang['settings_paymentmethod_active']       = 'Aktivan';
$lang['settings_paymentmethod_currencies']   = 'Valute (odvojeno zarezom)';
$lang['settings_paymentmethod_testing_mode'] = 'Omogući Testni način';

$lang['settings_paymentmethod_paypal_username']  = 'PayPal API Korisničko Ime';
$lang['settings_paymentmethod_paypal_password']  = 'PayPal API Šifra';
$lang['settings_paymentmethod_paypal_signature'] = 'API Potpis';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Tajni Ključ';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Javni Ključ';
$lang['settings_limit_top_search_bar_results']             = 'Podesi Limit Rezultata Pretrage na';

# Quick Actions
$lang['qa_create_invoice']  = 'Novi Račun';
$lang['qa_create_task']     = 'Novi Zadatak';
$lang['qa_create_client']   = 'Novi Klijent';
$lang['qa_create_contract'] = 'Novi Ugovor';
$lang['qa_create_kba']      = 'Novi Članak Baze Znanja';
$lang['qa_create_survey']   = 'Stvori Anketu';
$lang['qa_create_ticket']   = 'Novi Zahtjev';
$lang['qa_create_staff']    = 'Novi Djelatnik';

## Clients
$lang['client_phonenumber'] = 'Telefon';

# Main Clients
$lang['clients_register']                          = 'Registracija';
$lang['clients_profile_updated']                   = 'Vaš profil je ažuriran';
$lang['clients_successfully_registered']           = 'Hvala Vam na registraciji';
$lang['clients_account_created_but_not_logged_in'] = 'Vaš račun je stvoren ali niste prijavljeni u sustav automatski. Molim Vas da se pokušate prijaviti.';
# Tickets
$lang['clients_tickets_heading']                   = 'Zahtjevi za Podršku Klijenata';

# Payments
$lang['payment_for_invoice'] = 'Plaćanja za račune';
$lang['payment_total']       = 'Ukupno: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Online Plaćanja';
$lang['invoice_html_online_payment_button_text'] = 'Plati Sad';
$lang['invoice_html_payment_modes_not_selected'] = 'Molimo Vas da odaberete način plaćanja';
$lang['invoice_html_amount_blank']               = 'Ukupna suma može biti prazna ili 0';
$lang['invoice_html_offline_payment']            = 'Offline Plaćanja';
$lang['invoice_html_amount']                     = 'Iznos';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Vidljivost';
$lang['dt_button_reload']             = 'Ponovno učitaj';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Ispis';
$lang['is_not_active_export']         = 'Ne';
$lang['is_active_export']             = 'Da';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Napredne Postavke';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Dozvoli načine plaćanja za ovaj račun';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Stvoreni računi od ovog ponavljajućeg računa';
$lang['invoice_add_edit_no_payment_modes_found']         = 'Nema pronađenih načina plaćanja!';
$lang['invoice_html_total_pay']                          = 'Ukupno: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Naziv Predloška';
# General
$lang['discount_type']                      = 'Vrsta Popusta';
$lang['discount_type_after_tax']            = 'Prije oporezivanja';
$lang['discount_type_before_tax']           = 'Nakon oporezivanja';
$lang['terms_and_conditions']               = 'Uvjeti korištenja';
$lang['reference_no']                       = 'Preporuka #';
$lang['no_discount']                        = 'Nema popusta';
$lang['view_stats_tooltip']                 = 'Pregledajte Brzu Statistiku';
# Clients
$lang['zip_from_date']                      = 'Od Datuma:';
$lang['zip_to_date']                        = 'Do Datuma:';
$lang['client_zip_payments']                = 'ZIP Payments';
$lang['client_zip_invoices']                = 'ZIP Invoices';
$lang['client_zip_estimates']               = 'ZIP Estimates';
$lang['client_zip_status']                  = 'Status';
$lang['client_zip_status_all']              = 'Sve';
$lang['client_zip_payment_modes']           = 'Platio je';
$lang['client_zip_no_data_found']           = 'Nema pronađenih %s';

# Payments
$lang['payment_mode']         = 'Način Plaćanja';
$lang['payment_view_heading'] = 'Plaćanje';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Dozvoli kljientima da izmijene iznos za uplatu (za online plaćanja)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Koliko elektroničke pošta po satu';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Ova postavka se koristi kada se šalju ankete. Ponavljajući posao ankete će poslati x elektroničkih pošti po satu. Pojedini Some pružatelji usluga hostinga imaju limit slanja elektroničke pošte po satu.';
$lang['settings_delete_only_on_last_invoice']                       = 'Brisanje računa je dozvoljeno samo za zadnju izdanu';
$lang['settings_sales_estimate_prefix']                             = 'Prefiks broja predračuna';
$lang['settings_sales_next_estimate_number']                        = 'Naredni broj predračuna';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Postavi ovo polje na 1 ako želite početi ispočetka';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Umanji broj predračuna po brisanju';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Želite li umanjiti brojanje predračuna za jedan kada je predračun izbrisan? npr. Ukoliko postavite ovu opciju na DA i prije brisanja bi broj slijedećeg predračuna bio 15, on će se umanjiti na 14. Ako je ova postavka postavljena na NE broj predračuna će ostati 15. Ako ste postavili mogučnost brisanja samo zadnjeg preračuna na NE trebali biste postaviti ovu opciju na NE kako biste zadržali naredni broj predračuna bez umanjenja.';
$lang['settings_sales_estimate_number_format']                      = 'Format broja predračuna';
$lang['settings_sales_estimate_number_format_year_based']           = 'Bazirano na godini';
$lang['settings_sales_estimate_number_format_number_based']         = 'Bazirano na broju (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Brisanje predračuna je dozvoljeno samo po zadnjem računu';
$lang['settings_cron_invoice_heading']                              = 'Račun';
$lang['settings_send_test_email_heading']                           = 'Pošalji probnu elektroničku poštu';
$lang['settings_send_test_email_subheading']                        = 'Pošalji probnu elektroničku poštu kako bi bili sigurni da su postavke Vašeg SMTP servera postavljene ispravno.';
$lang['settings_send_test_email_string']                            = 'Adresa elektroničke pošte';
$lang['settings_smtp_settings_heading']                             = 'SMTP Postavke';
$lang['settings_smtp_settings_subheading']                          = 'Postavi glavnu adresu elektroničke pošte';

$lang['settings_sales_heading_general']                             = 'Opće';
$lang['settings_sales_heading_invoice']                             = 'Račun';
$lang['settings_sales_heading_estimates']                           = 'Predračuni';
$lang['settings_sales_heading_company']                             = 'Tvrtka';
$lang['settings_sales_cron_invoice_heading']                        = 'Račun';

# Tasks
$lang['tasks_dt_datestart'] = 'Početak';
$lang['tasks_dt_priority']  = 'Prioritet';

# Invoice General
$lang['invoice_discount'] = 'Popust';

# Settings
$lang['settings_rtl_support_admin']                                   = 'DNL Područje Administratora (S desna na lijevo)';
$lang['settings_rtl_support_client']                                  = 'DNL Područje Klijenata (S desna na lijevo)';
$lang['acs_language_editor']                                          = 'Uređivač Jezika';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Automatski pretvori predračun u račun po klijentovom prihvaćanju istog';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Isključi predračune u statusu skice iz područja klijenta';

# Months
$lang['January']   = 'Siječanj';
$lang['February']  = 'Veljača';
$lang['March']     = 'Ožujak';
$lang['April']     = 'Travanj';
$lang['May']       = 'Svibanj';
$lang['June']      = 'Lipanj';
$lang['July']      = 'Srpanj';
$lang['August']    = 'Kolovoz';
$lang['September'] = 'Rujan';
$lang['October']   = 'Listopad';
$lang['November']  = 'Studeni';
$lang['December']  = 'Prosinac';

# Time ago function translate
$lang['time_ago_just_now']  = 'Upravo';
$lang['time_ago_minute']    = 'prije jedne minute';
$lang['time_ago_minutes']   = 'Prije %s minuta';
$lang['time_ago_hour']      = 'prije sat vremena';
$lang['time_ago_hours']     = 'prije %s sati';
$lang['time_ago_yesterday'] = 'jučer';
$lang['time_ago_days']      = 'prije %s dana';
$lang['time_ago_week']      = 'prije tjedan dana';
$lang['time_ago_weeks']     = 'prije %s tjedana';
$lang['time_ago_month']     = 'prije mjesec dana';
$lang['time_ago_months']    = 'prije %s mjeseci';
$lang['time_ago_year']      = 'prije jedne godine';
$lang['time_ago_years']     = 'prije %s godina';


# Estimates
$lang['estimates']                          = 'Predračuni';
$lang['estimate']                           = 'Predračun';
$lang['estimate_lowercase']                 = 'predračun';
$lang['create_new_estimate']                = 'Stvori Novi Predračun';
$lang['view_estimate']                      = 'Pogledaj Predračun';
$lang['estimate_sent_to_client_success']    = 'Predračun je uspješno poslan klijentu';
$lang['estimate_sent_to_client_fail']       = 'Problem kod slanja predračuna klijentu';
$lang['estimate_reminder_send_problem']     = 'Problem sending estimate overdue reminder';
$lang['estimate_details']                   = 'Detalji Predračuna';
$lang['estimate_view']                      = 'Prikaži Predračun';
$lang['estimate_select_customer']           = 'Kupac';
$lang['estimate_add_edit_number']           = 'Broj Predračuna';
$lang['estimate_add_edit_date']             = 'Datum Predračuna';
$lang['estimate_add_edit_expirydate']       = 'Datum Isteka';
$lang['estimate_add_edit_currency']         = 'Valuta';
$lang['estimate_add_edit_client_note']      = 'Napomena Klijenta';
$lang['estimate_add_edit_admin_note']       = 'Napomena Administratora';
$lang['estimate_add_edit_new_item']         = 'Nova Stavka';
$lang['estimate_add_edit_search_item']      = 'Pretraživanje Stavki';
$lang['estimates_toggle_table_tooltip']     = 'Uključi Tablicu';
$lang['estimate_add_edit_advanced_options'] = 'Napredne Postavke';
$lang['estimate_vat']                       = 'OIB';
$lang['estimate_to']                        = 'Za';
$lang['estimates_list_all']                 = 'Svi';

$lang['estimate_invoiced_date']                  = 'Predračun je fakturiran %s';
$lang['edit_estimate_tooltip']                   = 'Uredi predračun';
$lang['delete_estimate_tooltip']                 = 'Izbriši predračun';
$lang['estimate_sent_to_email_tooltip']          = 'Pošalji na e-adresu';
$lang['estimate_already_send_to_client_tooltip'] = 'Ovaj predračun je već poslan klijentu %s';
$lang['estimate_view_activity_tooltip']          = 'Dnevnik aktivnosti';

$lang['estimate_send_to_client_modal_heading']    = 'Pošalji predračun klijentu';
$lang['estimate_send_to_client_attach_pdf']       = 'Prikvači predračun u PDF-u';
$lang['estimate_send_to_client_preview_template'] = 'Pretpregled predloška e-pošte';

$lang['estimate_dt_table_heading_number']     = 'Predračun #';
$lang['estimate_dt_table_heading_date']       = 'Datum';
$lang['estimate_dt_table_heading_client']     = 'Kupac';
$lang['estimate_dt_table_heading_expirydate'] = 'Datum isteka';
$lang['estimate_dt_table_heading_amount']     = 'Iznos';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'Pogledaj Predračun';
$lang['estimate_convert_to_invoice'] = 'Pretvori u račun';
# Home
$lang['home_unfinished_tasks']       = 'Nedovršene aktivnosti';

# Clients
$lang['client_estimates_tab'] = 'Predračuni';
$lang['client_payments_tab']  = 'Uplate';


# Estimate General
$lang['estimate_pdf_heading']            = 'PREDRAČUN';
$lang['estimate_table_item_heading']     = 'Stavka';
$lang['estimate_table_quantity_heading'] = 'Kol';
$lang['estimate_table_rate_heading']     = 'Stopa';
$lang['estimate_table_tax_heading']      = 'PDV';
$lang['estimate_table_amount_heading']   = 'Iznos';
$lang['estimate_subtotal']               = 'Međusuma';
$lang['estimate_adjustment']             = 'Podešavanje';
$lang['estimate_discount']               = 'Popust';
$lang['estimate_total']                  = 'Ukupno';
$lang['estimate_to']                     = 'Za';
$lang['estimate_data_date']              = 'Datum predračuna';
$lang['estimate_data_expiry_date']       = 'Datum isteka';
$lang['estimate_note']                   = 'Bilješka:';
$lang['estimate_status_draft']           = 'Skica';
$lang['estimate_status_sent']            = 'Poslano';
$lang['estimate_status_declined']        = 'Odbijeno';
$lang['estimate_status_accepted']        = 'Prihvaćeno';
$lang['estimate_status_expired']         = 'Isteklo';
$lang['estimate_note']                   = 'Bilješka:';

# Quick create
$lang['qa_create_estimate'] = 'Stvori Predračun';
$lang['qa_create_lead']     = 'Stvori Potencijalnog Kupca';


## Clients
$lang['clients_estimate_dt_number']             = 'Predračun #';
$lang['clients_estimate_dt_date']               = 'Datum';
$lang['clients_estimate_dt_duedate']            = 'Datum isteka';
$lang['clients_estimate_dt_amount']             = 'Iznos';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Predračuni';
$lang['clients_decline_estimate']               = 'Odbij';
$lang['clients_accept_estimate']                = 'Prihvati';
$lang['clients_my_estimates']                   = 'Predračuni';
$lang['clients_estimate_invoiced_successfully']  = 'Zahvaljujemo se na prihvaćanju predračuna. Molimo Vas da pregledate račun po prihvaćenom predračunu';
$lang['clients_estimate_accepted_not_invoiced'] = 'Hvala Vam na prihvaćanju predračuna';
$lang['clients_estimate_declined']              = 'Predračun otkazan. Možete ga prihvatiti u bilo koje vrijeme prije datuma isteka označenog na predračunu';
$lang['clients_estimate_failed_action']         = 'Nije uspjelo poduzimanje traženih radnji na ovom predračunu';
$lang['client_add_edit_profile']                = 'Profil';

# Custom Fields
$lang['custom_field']                          = 'Proizvoljno polje';
$lang['custom_field_lowercase']                = 'proizvoljno polje';
$lang['custom_fields']                         = 'Proizvoljna Polja';
$lang['custom_fields_lowercase']               = 'proizvoljna polja';
$lang['new_custom_field']                      = 'Novo Proizvoljno Polje';
$lang['custom_field_name']                     = 'Naziv polja';
$lang['custom_field_add_edit_type']            = 'Vrsta';
$lang['custom_field_add_edit_belongs_top']     = 'Polje pripada';
$lang['custom_field_add_edit_options']         = 'Postavke';
$lang['custom_field_add_edit_options_tooltip'] = 'Only use for Select, Checkbox types. Populate the field by separating the options by coma. eq. apple,orange,banana';
$lang['custom_field_add_edit_order']           = 'Poredak';

$lang['custom_field_dt_field_to']       = 'Pripada';
$lang['custom_field_dt_field_name']     = 'Ime';
$lang['custom_field_dt_field_type']     = 'Vrsta';
$lang['custom_field_add_edit_active']   = 'Aktivno';
$lang['custom_field_add_edit_disabled'] = 'Onemogućeno';

# Ticket replies
$lang['ticket_reply']           = 'Odgovor na Zahtjev';
$lang['ticket_reply_lowercase'] = 'odgovor na zahtjev';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Proizvoljna Polja';

# Contracts
$lang['contract_types']          = 'Vrste Ugovora';
$lang['contract_type']           = 'Vrsta Ugovora';
$lang['new_contract_type']       = 'Nova vrsta ugovora';
$lang['contract_type_lowercase'] = 'Ugovor';
$lang['contract_type_name']      = 'Naziv';

$lang['contract_types_list_name'] = 'Vrsta Ugovora';

# Customizer Menu
$lang['acs_contracts']      = 'Ugovori';
$lang['acs_contract_types'] = 'Vrste Ugovora';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Dugi Opis';
# Customers
$lang['client_delete_invoices_warning']    = 'Ovaj klijent ima na sebe vezane predračune ili račune. Ne možete obrisati ovog klijenta. Prebacite sve račune na drugog klijenta te ih onda izbrišite.';
$lang['clients_list_phone']                = 'Telefon';
$lang['client_expenses_tab']               = 'Troškovi';
$lang['customers_summary']                 = 'Sažetak Klijenata';
$lang['customers_summary_active']          = 'Aktivni Kontakti';
$lang['customers_summary_inactive']        = 'Neaktivni Kontakti';
$lang['customers_summary_logged_in_today'] = 'Kontakti koji su se prijavili danas';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Adrese e-pošte';
$lang['admin_auth_forgot_password_heading']           = 'Zaboravljena lozinka';
$lang['admin_auth_login_heading']                     = 'Prijava';
$lang['admin_auth_login_email']                       = 'Adresa Elektroničke pošte';
$lang['admin_auth_login_password']                    = 'Lozinka';
$lang['admin_auth_login_remember_me']                 = 'Zapamti me';
$lang['admin_auth_login_button']                      = 'Prijava';
$lang['admin_auth_login_fp']                          = 'Zaboravljena lozinka?';
$lang['admin_auth_reset_password_heading']            = 'Resetiraj lozinku';
$lang['admin_auth_reset_password']                    = 'Lozinka';
$lang['admin_auth_reset_password_repeat']             = 'Ponovite Lozinku';
$lang['admin_auth_invalid_email_or_password']         = 'Pogrešna elektronička pošta ili lozinka';
$lang['admin_auth_inactive_account']                  = 'Račun je neaktivan';
# Calender
$lang['calendar_estimate']                            = 'Predračun';
$lang['calendar_invoice']                             = 'Račun';
$lang['calendar_contract']                            = 'Ugovor';
$lang['calendar_customer_reminder']                     = 'Podsjetnik za klijenta';
$lang['calendar_event']                               = 'Događaj';
$lang['calendar_task']                                = 'Zadatak';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Obriši Potencijalne Kupce';
$lang['lead_attachments']                             = 'Privici';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Financije';
# Settings

$lang['settings_show_sale_agent_on_invoices']         = 'Prikaži prodajnog predstavnika na računu';
$lang['settings_show_sale_agent_on_estimates']        = 'Prikaži prodajnog predstavnika na predračunu';
$lang['settings_predefined_predefined_term']          = 'Predefinirani Uvjeti Korištenja';
$lang['settings_predefined_clientnote']               = 'Predefinirana napomena klijenta';
$lang['settings_custom_pdf_logo_image_url']           = 'Proizvoljni link do loga tvrtke za PDF datoteke';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Vjerojatno ćete imati problema s transparentnošću PNG slika koja se obrađuju na različite načine ovisno o korištenoj verziji php-imagick ili php-gd. Pokušajte ažurirati php-imagick i onemogućiti php-gd
. Ako ostavite ovo polje prazno koristiti će se već poslani logo.';

# General
$lang['sale_agent_string']               = 'Prodajni Predstavnik';
$lang['amount_display_in_base_currency'] = 'Iznos je prikazan u vašoj glavnoj valuti - Koristite samo ovaj izvještaj ako koristite samo 1 valutu za prihod i troškove.';
# Leads
$lang['leads_summary']                                         = 'Sažetak Potencijalnih Kupaca';

# Contracts
$lang['contract_value']                 = 'Vrijednost Ugovora';
$lang['contract_trash']                 = 'Smeće';
$lang['contracts_view_trash']           = 'Pogledaj smeće';
$lang['contracts_view_all']             = 'Sve';
$lang['contracts_view_exclude_trashed'] = 'Izuzmi obrisane ugovore';
$lang['contract_value_tooltip']         = 'Glavna valuta će se koristiti.';
$lang['contract_trash_tooltip']         = 'Ukoliko premjestite ugovor u smeće isti neće biti prikazan na strani klijenta, neće biti uključen u grafove i ostalu statistiku, također prema zadanome neće biti prikazan na popisu svih ugovora.';
$lang['contract_summary_active']              = 'Aktivan';
$lang['contract_renew_heading']               = 'Obnovi Ugovor';
$lang['contract_summary_heading']             = 'Sažetak Ugovora';
$lang['contract_summary_expired']             = 'Isteklo';
$lang['contract_summary_about_to_expire']     = 'Ističe ubrzo';
$lang['contract_summary_recently_added']      = 'Nedavno dodano';
$lang['contract_summary_trash']               = 'Smeće';
$lang['contract_summary_by_type']             = 'Ugovori prema vrsti';
$lang['contract_summary_by_type_value']       = 'Vrijednost ugovora po vrsti';
$lang['contract_renewed_successfully']        = 'Ugovor je uspješno obnovljen';
$lang['contract_renewed_fail']                = 'Problem sa obnovom ugovora. Kontaktirajte administratora.';
$lang['no_contract_renewals_found']           = 'Obnove ovog ugovora nisu pronađene';
$lang['no_contract_renewals_history_heading'] = 'Povijest Obnove Ugovora';
$lang['contract_renewed_by']                  = '%s je obnovio ovaj ugovor';
$lang['contract_renewal_deleted']             = 'Obnova uspješno obrisana';
$lang['contract_renewal_delete_fail']         = 'Neuspjeh kod brisana obnove ugovora. Kontaktirajte administratora.';

$lang['contract_renewal_new_value'] = 'Nova Vrijednost Ugovora: %s';
$lang['contract_renewal_old_value'] = 'Stara Vrijednost Ugovora: %s';

$lang['contract_renewal_new_start_date'] = 'Novi Datum Početka: %s';
$lang['contract_renewal_old_start_date'] = 'Stari datum početka je bio: %s';

$lang['contract_renewal_new_end_date'] = 'Novi datum završetka: %s';
$lang['contract_renewal_old_end_date'] = 'Stari datum završetka: %s';
$lang['contract_attachment']           = 'Privitak';
$lang['contract_attachment_lowercase'] = 'Privici';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Praćenje Ciljeva';
$lang['als_expenses']           = 'Troškovi';
$lang['als_reports_expenses']   = 'Troškovi';
$lang['als_expenses_vs_income'] = 'Troškovi naspram Prihoda';

# Invoices
$lang['invoice_attach_file']           = 'Dodaj Datoteku';
$lang['invoice_mark_as_sent']          = 'Označi kao poslano';
$lang['invoice_marked_as_sent']        = 'Račun je označen kao poslan';
$lang['invoice_marked_as_sent_failed'] = 'Neuspješno označavanje računa poslanim';

# Quick Actions
$lang['qa_new_goal']    = 'Postavi novi cilj';
$lang['qa_new_expense'] = 'Zabilježi Trošak';

# Goals Tracking
$lang['goals']                                         = 'Ciljevi';
$lang['goal']                                          = 'Cilj';
$lang['goals_tracking']                                = 'Praćenje Ciljeva';
$lang['new_goal']                                      = 'Novi Cilj';
$lang['goal_lowercase']                                = 'cilj';
$lang['goal_start_date']                               = 'Početak';
$lang['goal_end_date']                                 = 'Završetak';
$lang['goal_subject']                                  = 'Naslov';
$lang['goal_description']                              = 'Opis';
$lang['goal_type']                                     = 'Vrsta Cilja';
$lang['goal_achievement']                              = 'Uspjeh';
$lang['goal_contract_type']                            = 'Vrsta Ugovora';
$lang['goal_notify_when_fail']                         = 'Obavijesti djelatnike kada cilj nije postignut';
$lang['goal_notify_when_achieve']                      = 'Obavijesti djelatnike kada je cilj postignut';
$lang['goal_progress']                                 = 'Napredak';
$lang['goal_total']                                    = 'Ukupno: %s';
$lang['goal_result_heading']                           = 'Napredak Cilja';
$lang['goal_income_shown_in_base_currency']            = 'Ukupan prihod je prikazan u glavnoj valuti';
$lang['goal_notify_when_end_date_arrives']             = 'Djelatnici će biti obaviješteni kada se dostigne datum završetka (Zahtijeva ponavljajući posao).';
$lang['goal_staff_members_notified_about_achievement'] = 'Djelatnici će biti obaviješteni o postizanju ovog cilja';
$lang['goal_staff_members_notified_about_failure']     = 'Djelatnici će biti obaviješteni o nepostizanju ovog cilja';
$lang['goal_notify_staff_manually']                     = 'Obavijesti djelatnike ručno';
$lang['goal_notify_staff_notified_manually_success']    = 'Djelatnici su obaviješteni o rezultatu ovog cilja';
$lang['goal_notify_staff_notified_manually_fail']       = 'Neuspjeh kod obavještavanja djelatnika o rezultatu ovog cilja';

$lang['goal_achieved'] = 'Postignuto';
$lang['goal_failed']   = 'Neuspjeh';
$lang['goal_close']    = 'Jako blizu postignuća';

$lang['goal_type_total_income']                                         = 'Ukupan prihod';
$lang['goal_type_convert_leads']                                        = 'Pretvori X Potencijalnih kupaca';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Povećajte broj korisnika';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Pretvorba potencijalnih kupaca je isključena';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Povećajte broj korisnika';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Pretvorba potencijalnih kupaca je uključena';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Ugovori prema vrsti';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Izračunava se od datuma unesenog u bazu podataka';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Ugovori prema vrsti';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Izračunava se od datuma početka ugovora';
$lang['goal_type_total_estimates_converted']                         = 'X procjenjuje pretvorbu ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Prikazati će se samo predračuni koji će se pretvoriti u račune';
$lang['goal_type_income_subtext']                                    = 'Prihod će se izračunati u osnovnoj valuti (neće se pretvoriti)';
# Payments
$lang['payment_transaction_id']                                      = 'ID Transakcije';
# Settings Menu
$lang['acs_expenses']                                                = 'Troškovi';
$lang['acs_expense_categories']                                      = 'Kategorije Troškova';
# Expenses
$lang['expense_category']                                            = 'Kategorija Troška';
$lang['expense_category_lowercase']                                  = 'kategorija troška';
$lang['new_expense']                                                 = 'Zabilježi Trošak';
$lang['expense_add_edit_name']                                       = 'Naziv Kategorije';
$lang['expense_add_edit_description']                                = 'Opis Kategorije';
$lang['expense_categories']                                          = 'Kategorije Troškova';
$lang['new_expense_category']                                        = 'Nova Kategorija';
$lang['dt_expense_description']                                      = 'Opis';
$lang['expense']                                                     = 'Trošak';
$lang['expenses']                                                    = 'Troškovi';
$lang['expense_lowercase']                                           = 'trošak';
$lang['expense_add_edit_tax']                                        = 'PDV';
$lang['expense_add_edit_customer']                                   = 'Kupac';
$lang['expense_add_edit_currency']                                   = 'Valuta¸';
$lang['expense_add_edit_note']                                       = 'Bilješka';
$lang['expense_add_edit_date']                                       = 'Datum Troška';
$lang['expense_add_edit_amount']                                     = 'Iznos';
$lang['expense_add_edit_billable']                                   = 'Naplaćuje se';
$lang['expense_add_edit_attach_receipt']                             = 'Priloži Potvrdu';
$lang['expense_add_edit_reference_no']                               = 'Preporuka #';
$lang['expense_receipt']                                             = 'Potvrda Troška';
$lang['expense_receipt_lowercase']                                   = 'potvrda troška';
$lang['expense_dt_table_heading_category']                           = 'Kategorija';
$lang['expense_dt_table_heading_amount']                             = 'Iznos';
$lang['expense_dt_table_heading_date']                               = 'Datum';
$lang['expense_dt_table_heading_reference_no']                       = 'Preporuka #';
$lang['expense_dt_table_heading_customer']                           = 'Kupac';
$lang['expense_dt_table_heading_payment_mode']                       = 'Način Plaćanja';
$lang['expense_converted_to_invoice']                                = 'Trošak uspješno pretvoren u račun';
$lang['expense_converted_to_invoice_fail']                           = 'Neuspješno pretvaranje troška u račun, provjerite dnevnik grešaka.';
$lang['expense_copy_success']                                        = 'Trošak je uspješno kopiran.';
$lang['expenses_list_all']                                           = 'Sve';
$lang['expense_copy_fail']                                           = 'Pogreška kod kopiranja troška. Molimo Vas da provjerite nepohodna polja i pokušate ponovno';
$lang['expenses_list_billable']                                      = 'Naplativo';
$lang['expenses_list_non_billable']                                  = 'Nenaplativo';
$lang['expenses_list_invoiced']                                      = 'Fakturirano';
$lang['expenses_list_unbilled']                                      = 'Nije fakturirano';
$lang['expenses_list_recurring']                                     = 'Ponavljajuće';
$lang['expense_invoice_delete_not_allowed']                          = 'Ovaj trošak se ne može obrisati. Trošak je već fakturiran.';
$lang['expense_convert_to_invoice']                                  = 'Pretvori u račun';
$lang['expense_edit']                                                = 'Uredi trošak';
$lang['expense_delete']                                              = 'Briši';
$lang['expense_copy']                                                = 'Kopiraj';
$lang['expense_invoice_not_created']                                 = 'Račun nije stvoren';
$lang['expense_billed']                                              = 'Naplaćeno';
$lang['expense_not_billed']                                          = 'Račun nije plaćen';
$lang['expense_customer']                                            = 'Klijent';
$lang['expense_note']                                                = 'Bilješka:';
$lang['expense_date']                                                = 'Datum:';
$lang['expense_ref_noe']                                             = 'Pre #:';
$lang['expense_tax']                                                 = 'PDV:';
$lang['expense_amount']                                              = 'Iznos:';
$lang['expense_recurring_indicator']                                 = 'Ponavljajuće';
$lang['expense_already_invoiced']                                    = 'Ovaj trošak je već fakturiran';
$lang['expense_recurring_auto_create_invoice']                       = 'Automatski stvori račun';
$lang['expense_recurring_send_custom_on_renew']                      = 'Pošalji račun na e-adresu klijenta kada je trošak ponovno kreiran';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Ako je ova mogućnost odabrana, račun za klijenta će biti automatski kreirana po obnovi troška.';
$lang['report_expenses_full']                                        = 'Cijeli Izvještaj';
$lang['expenses_yearly_by_categories']                               = 'Troškovi Godišnje po Kategorijama';
$lang['total_expenses_for']                                          = 'Ukupni troškovi za'; // year
$lang['expenses_report_for']                                         = 'Troškovi za'; // year
# Custom fields
$lang['custom_field_required']                                       = 'Neophodno';
$lang['custom_field_show_on_pdf']                                    = 'Prikaži na PDF-u';
$lang['custom_field_leads']                                          = 'Potencijalni Kupci';
$lang['custom_field_customers']                                      = 'Klijenti';
$lang['custom_field_staff']                                          = 'Djelatnici';
$lang['custom_field_contracts']                                      = 'Ugovori';
$lang['custom_field_tasks']                                          = 'Zadaci';
$lang['custom_field_expenses']                                       = 'Troškovi';
$lang['custom_field_invoice']                                        = 'Računi';
$lang['custom_field_estimate']                                       = 'Predračuni';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Privatne Bilješke Djelatnika';


# Business News
$lang['business_news'] = 'Poslovne Vijesti';

# Navigation
$lang['nav_todo_items']               = 'Osobni zadaci';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Vrsta Ugovora';
# Version 1.0.5
# General
$lang['no_tax']                             = 'Nema PDV-a';
$lang['numbers_not_formatted_while_editing'] = 'Stopa u polju za unos nije formatirana prilikom uređivanja / dodavanja stavke i ne bi trebala ostati formatirana, ne pokušavajte ručno oblikovati ovdje.';
# Contracts
$lang['contracts_view_expired']             = 'Isteklo';
$lang['contracts_view_without_dateend']     = 'Ugovori bez datuma završetka';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Ugovori';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Opće Opcije';
$lang['invoice_table_item_description']          = 'Opis';
$lang['invoice_recurring_indicator']             = 'Ponavljajuće';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Predračun je uspješno pretvoren u račun';
$lang['estimate_table_item_description']         = 'Opis';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Ne možete izbrisati osnovnu valutu. Morate dodijeliti novu osnovnu valutu izbrisati ovu.';
$lang['invoice_copy']              = 'Kopirajte Račun';
$lang['invoice_copy_success']      = 'Račun Uspješno Kopiran';
$lang['invoice_copy_fail']         = 'Kopiranje računa nije uspjelo';
$lang['invoice_due_after_help']    = 'Postavite nulu da biste izbjegli izračun';

$lang['show_shipping_on_invoice'] = 'Prikaži pojedinosti o dostavi na računu';

# Estimates
$lang['show_shipping_on_estimate']         = 'Prikaži pojedinosti o dostavi na predračunu';
$lang['is_invoiced_estimate_delete_error'] = 'Ovaj je predračun fakturiran. Ne možete izbrisati predračun';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Dostava';
$lang['customer_profile_details'] = 'Detalji klijenta';
$lang['billing_shipping']         = 'Naplata & Dostava';
$lang['billing_address']          = 'Adresa Naplate';
$lang['shipping_address']         = 'Adresa Dostave';

$lang['billing_street']  = 'Ulica';
$lang['billing_city']    = 'Grad';
$lang['billing_state']   = 'Županija';
$lang['billing_country'] = 'Država';
$lang['billing_zip']     = 'Poštanski broj';

$lang['shipping_street']                    = 'Ulica';
$lang['shipping_city']                      = 'Grad';
$lang['shipping_state']                     = 'Županija';
$lang['shipping_zip']                       = 'Poštanski broj';
$lang['shipping_country']                   = 'Država';
$lang['get_shipping_from_customer_profile'] = 'Dohvatite pojedinosti o dostavi s profila kupca';

# Customer
$lang['customer_file_from']                                    = 'Od %s';
$lang['customer_default_currency']                             = 'Zadana Valuta';
$lang['customer_no_attachments_found']                         = 'Nema pronađenih dodataka';
$lang['customer_update_address_info_on_invoices']              = 'Ažurirajte podatke o dostavi / naplati na svim prethodnim računma / predračunima';
$lang['customer_update_address_info_on_invoices_help']         = 'Ako ažurirate ovo polje, podaci o dostavi i naplati bit će ažurirani na sve račune i predračune. Napomena: Na račune s statusom plaćeni neće biti utjecaja.';
$lang['setup_google_api_key_customer_map']                     = 'Postavite google api ključ kako biste pogledali na kartu korisnika';
$lang['customer_attachments_file']                             = 'Datoteka';
$lang['client_send_set_password_email']                        = 'Pošaljite e-poštu sa uputama za postavljanje lozinke';
$lang['customer_billing_same_as_profile']                      = 'Isti kao i podaci o klijentu';
$lang['customer_billing_copy']                                 = 'Kopiraj Adresu Naplate';
$lang['customer_map']                                          = 'Karta';
$lang['set_password_email_sent_to_client']                     = 'E-mail za postavljanje lozinke uspješno je poslan na kontakt';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profil je ažuriran i e-pošta za postavljanje lozinke uspješno je poslana na kontakt';
$lang['customer_attachments']                                  = 'Datoteke';
$lang['customer_longitude']                                    = 'Zemljopisna dužina (Google karte)';
$lang['customer_latitude']                                     = 'Zemljopisna širina (Google karte)';

# Authentication
$lang['admin_auth_set_password']          = 'Lozinka';
$lang['admin_auth_set_password_repeat']   = 'Ponovite Lozinku';
$lang['admin_auth_set_password_heading']  = 'Postavite Lozinku';
$lang['password_set_email_subject']       = 'Postavite novu lozinku za %s';
# General
$lang['apply']                            = 'Potvrdi';
$lang['department_calendar_id']           = 'Google Kalendar ID';
$lang['kan_ban_string']                   = 'Ploča';
$lang['localization_default_language']    = 'Zadani Jezik';
$lang['system_default_string']            = 'Sistemski Zadano';
$lang['advanced_options']                 = 'Napredne Postavke';
# Expenses
$lang['expense_list_invoice']             = 'Fakturirano';
$lang['expense_list_billed']              = 'Naplaćeno';
$lang['expense_list_unbilled']            = 'Nije Fakturirano';
# Leads
$lang['lead_merge_custom_field']          = 'Spoji kao proizvoljno polje';
$lang['lead_merge_custom_field_existing'] = 'Spoji sa poljem iz baze podataka';
$lang['lead_dont_merge_custom_field']     = 'Ne spajaj';
$lang['no_lead_notes_found']              = 'Nisu pronađene oznake potencijalnih kupaca';
$lang['leads_view_list']                  = 'Popis';
$lang['lost_leads']                       = 'Izgubljeni potencijalni kupci';
$lang['junk_leads']                       = 'Stari potencijalni kupci';
$lang['lead_mark_as_lost']                = 'Označi kao izgubljeno';
$lang['lead_unmark_as_lost']              = 'Odznačite potencijalnog kupca kao izgubljenog';
$lang['lead_marked_as_lost']              = 'Potencijalni kupac je uspješno označen kao izgubljen';
$lang['lead_unmarked_as_lost']            = 'Potencijalni kupac je uspješno odznačen kao izgubljen';
$lang['leads_status_color']               = 'Boja';

$lang['lead_mark_as_junk']     = 'Prebaci u smeće';
$lang['lead_unmark_as_junk']   = 'Vrati iz smeća';
$lang['lead_marked_as_junk']   = 'Potencijalni kupac uspješno prebačen u smeće';
$lang['lead_unmarked_as_junk'] = 'Potencijalni kupac uspješno maknut iz smeća';

$lang['lead_not_found']                                                      = 'Potencijalni Kupac Nije Pronađen';
$lang['lead_lost']                                                           = 'Izgubljen';
$lang['lead_junk']                                                           = 'Smeće';
$lang['leads_not_assigned']                                                  = 'Nije Dodijeljeno';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Sakrij od klijenta';
$lang['contract_edit_overview']                                              = 'Pregled Ugovora';
$lang['contract_attachments']                                                = 'Privici';
# Tasks
$lang['task_view_make_public']                                               = 'Pretvori u javno';
$lang['task_is_private']                                                     = 'Privatna Aktivnost';
$lang['task_finished']                                                       = 'Završeno';
$lang['task_single_related']                                                 = 'Povezano s';
$lang['task_unmark_as_complete']                                             = 'Odznači kao završeno';
$lang['task_unmarked_as_complete']                                           = 'Aktivnost je označena kao nezavršena';
$lang['task_relation']                                                       = 'Povezano';
$lang['task_public']                                                         = 'Javno';
$lang['task_public_help']                                                    = 'Ako postavite ova aktivnost kao javnu bit će vidljiva za sve djelatnike. Inače će biti vidljiva samo članovima koji su odgovorni, operativci, stvaratelji ili administratori';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Izlazni PDF dokumenti iz područja administratora na klijentovom jeziku';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Ako je ova opcija postavljena da npr. zadani jezik je engleski i klijent ima zadani jezik francuski, pdf dokument će biti izdan na klijentovom jeziku';
$lang['settings_cron_surveys']                                               = 'Ankete';
$lang['settings_default_tax']                                                = 'Zadani PDV';
$lang['setup_calendar_by_departments']                                       = 'Postavljanje kalendara po Odjelima';
$lang['settings_calendar']                                                   = 'Kalendar';
$lang['settings_sales_invoice_due_after']                                    = 'Račun dospijeva nakon (dana)';
$lang['settings_google_api']                                                 = 'Google API ključ';
$lang['settings_gcal_main_calendar_id']                                      = 'Google ID kalendara';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Ovo je glavni kalendar tvrtke. Prikazat će se svi događaji iz ovog kalendara. Ako želite odrediti kalendar na temelju odjela, možete dodati u odjelu Google kalendar ID.';

$lang['show_on_calendar']                  = 'Prikaži na kalendaru';
$lang['show_invoices_on_calendar']         = 'Računi';
$lang['show_estimates_on_calendar']        = 'Predračune';
$lang['show_contracts_on_calendar']        = 'Ugovore';
$lang['show_tasks_on_calendar']            = 'Zadatke';
$lang['show_customer_reminders_on_calendar'] = 'Podsjetnici Klijenata';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Kopiraj proizvoljna polja na profil korisnika';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Ako bilo koje od sljedećih prilagođenih polja ne postoji za kupca, automatski će se stvoriti s istim imenom, inače će samo vrijednost biti kopirana iz vodećeg profila.';
$lang['lead_profile']                                                = 'Profil';
$lang['lead_is_client']                                              = 'Klijent';
$lang['leads_kan_ban_notes_title']                                   = 'Bilješke';
$lang['leads_email_integration_folder_no_encryption']                = 'Nema šifriranja';
$lang['leads_email_integration']                                     = 'Integracija e-pošte';
$lang['leads_email_active']                                          = 'Aktivan';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Adresa e-pošte (prijava)';
$lang['leads_email_integration_password']                            = 'Lozinka';
$lang['leads_email_integration_default_source']                      = 'Zadani izvor';
$lang['leads_email_integration_check_every']                         = 'Provjeri svakih (minuta)';
$lang['leads_email_integration_default_assigned']                    = 'Odgovoran za novog potencijanog kupca';
$lang['leads_email_encryption']                                      = 'Šifriranje';
$lang['leads_email_integration_updated']                             = 'Integracija e-poštom ažurirana';
$lang['leads_email_integration_default_status']                      = 'Zadani Status';
$lang['leads_email_integration_folder']                              = 'Mapa';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Obavijesti kada je potencijalni klijent uvezen';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Samo provjerite ne otvorene e-poruke';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Skripta će automatski postaviti e-poštu koja će se otvoriti nakon provjere. To se koristi za sprečavanje provjere svih poruka e-pošte. Nije preporučeno da onemogučite ovu opciju ako imate puno poruka e-pošte i imate puno poslanih poruka e-pošte koje ste postavili za ponude';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Obavijestite hoćete li poslati e-poruku više puta';
$lang['leads_email_integration_test_connection']                     = 'Isprobajte IMAP vezu';
$lang['lead_email_connection_ok']                                    = 'IMAP veza je dobra';
$lang['lead_email_connection_not_ok']                                = 'IMAP veza nije u redu';
$lang['lead_email_activity']                                         = 'Aktivnost e-pošte';
$lang['leads_email_integration_notify_roles']                        = 'Obavijestiti ulogu';
$lang['leads_email_integration_notify_staff']                        = 'Obavijestiti djelatnike';
$lang['lead_public']                                                 = 'Javno';
# Knowledge Base

$lang['kb_group_color']                = 'Boja';
$lang['kb_group_order']                = 'Poredak';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Skupni PDF izvoz';
$lang['bulk_export_pdf_payments']      = 'Plaćanja';
$lang['bulk_export_pdf_estimates']     = 'Predračuni';
$lang['bulk_export_pdf_invoices']      = 'Računi';
$lang['bulk_pdf_export_button']        = 'Izvezi';
$lang['bulk_pdf_export_select_type']   = 'Odaberite vrstu';
$lang['no_data_found_bulk_pdf_export'] = 'Nisu pronađeni podaci za izvoz';
$lang['bulk_export_status_all']        = 'Svi';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Plaćanja izvršena od strane';
$lang['bulk_export_include_tag']       = 'Uključi oznaku';
$lang['bulk_export_include_tag_help']  = 'npr. Izvorni ili Kopija. Oznaka će biti izdana u PDF-u. Preporučuje se upotreba samo 1 oznake';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Nisu pronađeni unaprijed definirani odgovori';
## Clients area
$lang['clients_contract_attachments']  = 'Privici';
# Backup
$lang['backup_type_full']              = 'Potpuna sigurnosna kopija';
$lang['backup_type_db']                = 'Sigurnosna kopija baze podataka';

$lang['auto_backup_options_updated']     = 'Ažurirane su mogućnosti automatskog sigunosnog kopiranja';
$lang['auto_backup_every']               = 'Stvori sigurnosnu kopiju svakih x (dana)';
$lang['auto_backup_enabled']             = 'Omogućeno (Zahtjeva ponavljajući posao)';
$lang['auto_backup']                     = 'Auto sigurnosna kopija';
$lang['backup_delete']                   = 'Sigurnosna kopija obrisana';
$lang['create_backup']                   = 'Stvori sigurnosnu kopiju';
$lang['backup_success']                  = 'Sigurnosna kopija je stvorena uspješno';
$lang['utility_backup']                  = 'Sigurnosna kopija baze podataka';
$lang['utility_create_new_backup_db']    = 'Stvori sigurnosnu kopiju baze podataka';
$lang['utility_backup_table_backupname'] = 'Sigurnosna kopija';
$lang['utility_backup_table_backupsize'] = 'Veličina sigurnosne kopije';
$lang['utility_backup_table_backupdate'] = 'Datum';
$lang['utility_db_backup_note']          = 'Obavijest: Zbog ograničenog vremena izvršenja i memorije dostupne PHP-u, sigurnosna kopija vrlo velikih baza podataka možda neće biti moguća. Ako je vaša baza podataka vrlo velika, možda ćete morati izraditi sigurnosnu kopiju izravno s vašeg SQL poslužitelja putem naredbenog retka ili će administrator Vašeg poslužitelja to učiniti za vas ako nemate root privilegije.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Ponude';
$lang['clients_nav_support']   = 'Podrška';
# General
$lang['more']                  = 'Više';
$lang['add_item']              = 'Dodaj stavku';
$lang['goto_admin_area']       = 'Idi na polje administratora';
$lang['click_here_to_edit']    = 'Kliknite ovdje za uređivanje';
$lang['delete']                = 'Izbriši %s';
$lang['welcome_top']           = 'Bok %s :)';

# Customers
$lang['customer_permissions']         = 'Dozvole';
$lang['customer_permission_invoice']  = 'Računi';
$lang['customer_permission_estimate'] = 'Predračuni';
$lang['customer_permission_proposal'] = 'Ponude';
$lang['customer_permission_contract'] = 'Ugovori';
$lang['customer_permission_support']  = 'Podrška';


#Tasks
$lang['task_related_to'] = 'Povezan je sa';

# Send file
$lang['custom_file_fail_send']    = 'Neuspjeh kod slanja datoteke';
$lang['custom_file_success_send'] = 'Datoteka je uspješno poslana %s';
$lang['send_file_subject']        = 'Naslov Elektroničke pošte';
$lang['send_file_email']          = 'Elektronička pošta';
$lang['send_file_message']        = 'Poruka';
$lang['send_file']                = 'Pošalji Datoteku';
$lang['add_checklist_item']       = 'Stavka na popisu';
$lang['task_checklist_items']     = 'Stavke na popisu';

# Import
$lang['default_pass_clients_import'] = 'Zadana lozinka za sve kontakte';
$lang['simulate_import']             = 'Simulirajte uvoz';
$lang['import_upload_failed']        = 'Prijenos nije uspio';
$lang['import_total_imported']       = 'Ukupno je uvezeno: %s';
$lang['import_leads']                = 'Uvezi potencijalne kupce';
$lang['import_customers']            = 'Uvezi Klijente';
$lang['choose_csv_file']             = 'Odaberi CSV Datoteku';
$lang['import']                      = 'Uvezi';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Izvor';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Ponude';

# Invoices
$lang['delete_invoice'] = 'Izbriši';

# Calendar
$lang['calendar_lead_reminder'] = 'Podsjetnik potencijalnog kupca';

$lang['items']      = 'Stavke';
$lang['support']    = 'Podrška';
$lang['new_ticket'] = 'Novi zahtjev';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Dodaj podsjetnik klijentu';
$lang['lead_set_reminder_title']        = 'Dodaj podsjetnik potencijalnom kupcu';
$lang['set_reminder_tooltip']           = 'Ova vam opcija omogućuje da nikad ne zaboravite ništa o svojim klijentima.';
$lang['client_reminders_tab']           = 'Podsjetnici';
$lang['leads_reminders_tab']            = 'Podsjetnici';

# Tickets
$lang['delete_ticket_reply']  = 'Izbriši odgovor';
$lang['ticket_priority_edit'] = 'Uredi prioritet';
$lang['ticket_priority_add']  = 'Dodajte prioritet';
$lang['ticket_status_edit']   = 'Uređivanje statusa zahtjeva';
$lang['ticket_service_edit']  = 'Uređivanje Usluge Zahtjeva';
$lang['edit_department']      = 'Uredi Odjel';

# Expenses
$lang['edit_expense_category']                                    = 'Uređivanje kategorije troškova';
# Settings
$lang['customer_default_country']                                 = 'Zadana Država';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Zahtijevajte klijenta da bude prijavljen da bi vidio predračun';
$lang['set_reminder']                                             = 'Postavi Podsjetnik';
$lang['set_reminder_date']                                        = 'Datum obavijesti';
$lang['reminder_description']                                     = 'Postavi opis';
$lang['reminder_notify_me_by_email']                              = 'Pošaljite i e-poštu za ovaj podsjetnik';
$lang['reminder_added_successfully']                               = 'Podsjetnik je uspješno dodan. Bit ćete obaviješteni na vrijeme.';
$lang['reminder_description']                                     = 'Opis';
$lang['reminder_date']                                            = 'Datum';
$lang['reminder_staff']                                           = 'Podsjeti';
$lang['reminder_is_notified']                                     = 'Je obaviješten?';
$lang['reminder_is_notified_boolean_no']                          = 'Ne';
$lang['reminder_is_notified_boolean_yes']                         = 'Da';
$lang['reminder_set_to']                                          = 'Postavi podsjetnik na';
$lang['reminder_deleted']                                         = 'Podsjetnik je uspješno obrisan';
$lang['reminder_failed_to_delete']                                = 'Brisanje podsjetnika nije uspjelo';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Prikaži stanje računa / predračuna na PDF-u';
$lang['email_piping_default_priority']                            = 'Zadani prioritet na zahtjevu';
$lang['show_lead_reminders_on_calendar']                          = 'Podsjetnici potencijalnih kupaca';
$lang['tickets_piping']                                           = 'Email Piping';																						
$lang['email_piping_only_replies']                                = 'Samo odgovori putem e-pošte';
$lang['email_piping_only_registered']                             = 'Pipe Only on Registered Users';																	

# Estimates
$lang['view_estimate_as_client']         = 'Pogledajte predračun kao kupac';
$lang['estimate_mark_as']                = 'Označi kao %s';
$lang['estimate_status_changed_success'] = 'Status predračuna izmijenjen';
$lang['estimate_status_changed_fail']    = 'Promjena stanja predračuna nije uspjela';
$lang['estimate_email_link_text']        = 'Pogledaj Predračun';

# Proposals
$lang['proposal_to']                            = 'Tvrtka / Naziv';
$lang['proposal_date']                          = 'Datum';
$lang['proposal_address']                       = 'Adresa';
$lang['proposal_phone']                         = 'Telefon';
$lang['proposal_email']                         = 'Elektronička pošta';
$lang['proposal_date_created']                  = 'Stvoreno Datuma';
$lang['proposal_open_till']                     = 'Otvoreno Do';
$lang['proposal_status_open']                   = 'Otvoreno';
$lang['proposal_status_accepted']               = 'Prihvaćeno';
$lang['proposal_status_declined']               = 'Odbijeno';
$lang['proposal_status_sent']                   = 'Poslano';
$lang['proposal_expired']                       = 'Isteklo';
$lang['proposal_subject']                       = 'Naslov';
$lang['proposal_total']                         = 'Ukupno';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'Sve';
$lang['proposals_leads_related']                = 'Odnosi se na Potencijalnog Kupca';
$lang['proposals_customers_related']            = 'Odnosi se na Klijenta';
$lang['proposal_related']                       = 'Povezano';
$lang['proposal_for_lead']                      = 'Potencijalni Kupac';
$lang['proposal_for_customer']                  = 'Klijent';
$lang['proposal']                               = 'Ponuda';
$lang['proposal_lowercase']                     = 'ponuda';
$lang['proposals']                              = 'Ponude';
$lang['proposals_lowercase']                    = 'ponude';
$lang['new_proposal']                           = 'Nova Ponuda';
$lang['proposal_currency']                      = 'Valuta';
$lang['proposal_allow_comments']                = 'Dozvoli Komentare';
$lang['proposal_allow_comments_help']           = 'Ako označite ove opcije, komentari će biti dozvoljeni kada vaši klijenti pogledaju prijedlog.';

$lang['proposal_edit']                          = 'Uredi';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Pošalji putem e-pošte';
$lang['proposal_send_to_email_title']           = 'Pošalji ponudu putem e-pošte';
$lang['proposal_attach_pdf']                    = 'Dodaj PDF';
$lang['proposal_preview_template']              = 'Pregledaj Predložak';
$lang['proposal_view']                          = 'Pogledaj Ponudu';
$lang['proposal_copy']                          = 'Kopiraj';
$lang['proposal_delete']                        = 'Izbriši';
$lang['proposal_to']                            = 'Za';
$lang['proposal_add_comment']                   = 'Dodaj Komentar';
$lang['proposal_sent_to_email_success']         = 'Ponuda poslana uspješno na adresu e-pošte';
$lang['proposal_sent_to_email_fail']            = 'Neuspjeh kod slanja ponude na adresu e-pošte';
$lang['proposal_copy_fail']                     = 'Neuspjeh kod kopiranja ponude';
$lang['proposal_copy_success']                  = 'Ponuda uspješno kopirana';
$lang['proposal_status_changed_success']        = 'Status ponude je uspješno promijenjen';
$lang['proposal_status_changed_fail']           = 'Neuspjeh kod promjene statusa ponude';
$lang['proposal_assigned']                      = 'Dodijeljeno';
$lang['proposal_comments']                      = 'Komentari';
$lang['proposal_convert']                       = 'Pretvori';
$lang['proposal_convert_estimate']              = 'Predračun';
$lang['proposal_convert_invoice']               = 'Račun';
$lang['proposal_convert_to_estimate']           = 'Pretvori u Predračun';
$lang['proposal_convert_to_invoice']            = 'Pretvori u račun';
$lang['proposal_convert_to_lead_disabled_help'] = 'Morate pretvoriti potencijalnog kupca u klijenta kako biste ga stvorili %s';
$lang['proposal_convert_not_related_help']      = 'Predračun mora biti povezan s kupcem kako bi se pretvorio u %s';
$lang['proposal_converted_to_estimate_success'] = 'Ponuda je uspješno pretvorena u predračun';
$lang['proposal_converted_to_invoice_success']  = 'Ponuda je uspješno pretvorena u račun';
$lang['proposal_converted_to_estimate_fail']    = 'Neuspjeh kod pretvorbe ponude u predračun';
$lang['proposal_converted_to_invoice_fail']     = 'Neuspjeh kod pretvorbe ponude u račun';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Ukupno %s';
$lang['proposal_accept_info']  = 'Prihvati';
$lang['proposal_decline_info'] = 'Odbij';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Ponovno postavi';
$lang['customer_reset_password_heading']  = 'Ponovno postavite lozinku';
$lang['customer_forgot_password_heading'] = 'Zaboravljena lozinka';
$lang['customer_forgot_password']         = 'Zaboravljena lozinka?';
$lang['customer_reset_password']          = 'Lozinka';
$lang['customer_reset_password_repeat']   = 'Ponovi lozinku';
$lang['customer_forgot_password_email']   = 'Adresa e-pošte';
$lang['customer_forgot_password_submit']  = 'Podnesi';
$lang['customer_ticket_subject']          = 'Naslov';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Ponude';

# Tasks
$lang['add_task_attachments']                 = 'Privitak';
$lang['task_view_attachments']                = 'Privici';
$lang['task_view_description']                = 'Opis';

# Customer Groups
$lang['customer_group_add_heading']  = 'Dodaj novu grupu klijenata';
$lang['customer_group_edit_heading'] = 'Uredi grupu klijenata';
$lang['new_customer_group']          = 'Nova grupa klijenata';
$lang['customer_group_name']         = 'Naziv';
$lang['customer_groups']             = 'Grupe';
$lang['customer_group']              = 'Grupa Klijenta';
$lang['customer_group_lowercase']    = 'grupa klijenta';

$lang['customer_have_invoices_by']       = 'Sadrži račune sa statusom %s';
$lang['customer_have_estimates_by']      = 'Sadrži predračune sa statusom %s';
$lang['customer_have_contracts_by_type'] = 'Sadrži ugovore vrste %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Prikaži na tablici';
$lang['custom_field_show_on_client_portal']      = 'Prikaži na portalu klijenta';
$lang['custom_field_show_on_client_portal_help'] = 'Ako je ovo polje označeno, također će se prikazati u tablicama';
$lang['custom_field_visibility']                 = 'Vidljivost';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Ovdje možete dodati i prevesti string. Dakle, ako djelatnik / sustav ima jezik koji nije zadani, nazivi stavki izbornika bit će izdani na jeziku djelatnika. Inače, ako string ne postoji u prevodnoj datoteci, preuzima se niz koji unesete ovdje.';
$lang['utilities_menu_icon']                = 'Ikona';
$lang['active_menu_items']                  = 'Stake Aktivnog Izbornika';
$lang['inactive_menu_items']                = 'Stavke Neaktivnog Izbornika';
$lang['utilities_menu_permission']          = 'Dozvola';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Naziv';
$lang['utilities_menu_save']                = 'Spremi Izbornik';

# Knowledge Base
$lang['view_articles_list']     = 'Pogledaj Članke';
$lang['view_articles_list_all'] = 'Svi Članci';
$lang['als_add_article']        = 'Dodaj Članak';
$lang['als_all_articles']       = 'Članci';
$lang['als_kb_groups']          = 'Grupe';

# Customizer Menu
$lang['menu_builder']            = 'Postavke izbornika';
$lang['main_menu']               = 'Glavni izbornik';
$lang['setup_menu']              = 'Postavi izbornik';
$lang['utilities_menu_url_help'] = '%s automatski je dodana URL-u';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Spam Filteri';
$lang['spam_filter']                  = 'Spam Filter';
$lang['new_spam_filter']              = 'Novi Spam Filter';
$lang['spam_filter_blocked_senders']  = 'Blokirani pošiljatelji';
$lang['spam_filter_blocked_subjects'] = 'Blokirani Naslovi';
$lang['spam_filter_blocked_phrases']  = 'Blokirane fraze';
$lang['spam_filter_content']          = 'Sadržaj';
$lang['spamfilter_edit_heading']      = 'Uredi Spam Filter';
$lang['spamfilter_add_heading']       = 'Dodaj Spam Filter';
$lang['spamfilter_type']              = 'Vrsta';
$lang['spamfilter_type_subject']      = 'Naslov';
$lang['spamfilter_type_sender']       = 'Pošiljatelj';
$lang['spamfilter_type_phrase']       = 'Fraza';

# Tickets
$lang['block_sender']               = 'Blokiraj pošiljatelja';
$lang['sender_blocked']             = 'Pošiljatelj blokiran';
$lang['sender_blocked_successfully'] = 'Pošiljatelj uspješno blokiran';
$lang['ticket_date_created']        = 'Stvoreno';

#KB
$lang['edit_kb_group']             = 'Uredi Grupu';
# Leads
$lang['edit_source']               = 'Uredi izvor';
$lang['edit_status']               = 'Uredi Status';
# Contacts
$lang['contract_type_edit']        = 'Uredi Vrstu Ugovora';
# Reports
$lang['report_by_customer_groups'] = 'Ukupna vrijednost po grupama kupaca';
#Utilities
$lang['ticket_pipe_log']           = 'Ticket Pipe Log';																											
$lang['ticket_pipe_name']          = 'Od Imena';
$lang['ticket_pipe_email_to']      = 'Za';
$lang['ticket_pipe_email']         = 'Sa e-pošte';
$lang['ticket_pipe_subject']       = 'Naslov';
$lang['ticket_pipe_message']       = 'Poruka';
$lang['ticket_pipe_date']          = 'Datum';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_latest_activity']       = 'Zadnja Aktivnost';
$lang['home_my_tasks']              = 'Mojih Aktivnosti';
$lang['home_latest_activity']       = 'Zadnja Aktivnost';
$lang['home_my_todo_items']         = 'Osobni zadaci';
$lang['home_widget_view_all']       = 'Pogledaj Sve';
$lang['home_stats_full_report']     = 'Cijelo Izvješće';

# Validation

$lang['form_validation_required']    = 'Polje {field} je obavezno.';
$lang['form_validation_valid_email'] = 'Polje {field} mora sadržavati važeću adresu e-pošte.';
$lang['form_validation_matches']     = 'Polje {field} se ne podudara sa {param} poljem.';
$lang['form_validation_is_unique']   = 'Polje {field} mora sadržavati jedinstvenu vrijednost.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Današnji događaj - %s ...';
$lang['not_event_public'] = 'Javni događaj počinje danas - %s ...';
$lang['not_contract_expiry_reminder'] = 'Podsjetnik o isteku ugovora - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Ponaljajući trošak - aktivnost ponavljajućeg posla';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Ponavljajući računi - aktivnost ponavljajućeg posla';
$lang['not_recurring_total_renewed'] = 'Ukupno obnovljeno: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Radnja preuzeta iz ponavljajućih troškova';
$lang['not_invoice_created'] = 'Račun Stvoren:';
$lang['not_invoice_renewed'] = 'Obnovljena račun:';
$lang['not_expense_renewed'] = 'Obnovljeni trošak:';
$lang['not_invoice_sent_to_customer'] = 'Račun dostavljen klijentu: %s';
$lang['not_invoice_sent_yes'] = 'Da';
$lang['not_invoice_sent_not'] = 'Ne';
$lang['not_action_taken_from_recurring_invoice'] = 'Radnja preuzeta s ponavljajućeg računa:';
$lang['not_new_reminder_for'] = 'Novi podsjetnik za %s';
$lang['not_received_one_or_more_messages_lead'] = 'Primio je još jednu e-poruku od potencijalnog kupca';
$lang['not_received_lead_imported_email_integration'] = 'Potencijalni kupac uvezen prek integracije e-pošte';
$lang['not_lead_imported_attachment'] = 'Uvezeni privitak iz e-pošte';
$lang['not_estimate_status_change'] = 'Uvezeni privitak iz e-pošte';
$lang['not_estimate_status_updated'] = 'Procjena statusa Ažurirano: Od: %s do %s';
$lang['not_goal_message_success'] = 'Čestitamo! Postigli smo novi cilj. <br /> Vrsta cilja: %s
<br />Uspjeh cilja: %s
<br />Ukupni uspjeh: %s
<br />Početak: %s
<br />Završetak: %s';
$lang['not_assigned_lead_to_you'] = 'potencijalni kupac %s je dodijeljen vama';
$lang['not_lead_activity_assigned_to'] = '%s je dodijeljen %s';
$lang['not_lead_activity_attachment_deleted'] = 'Izbrisan Privitak';
$lang['not_lead_activity_status_updated'] = '%s ažurian status potencijalnog kupca od %s do %s';
$lang['not_lead_activity_contacted'] = '%s kontaktirao je ovog porencijalnog kupca %s';
$lang['not_lead_activity_created'] = '%s stvoren potencijalni kupac';
$lang['not_lead_activity_marked_lost'] = 'Označen kao izgubljen';
$lang['not_lead_activity_unmarked_lost'] = 'Odznačen kao izgubljen';
$lang['not_lead_activity_marked_junk'] = 'Prebačen u smeće';
$lang['not_lead_activity_unmarked_junk'] = 'Vraćen iz smeća';
$lang['not_lead_activity_added_attachment'] = 'Privitak dodan';
$lang['not_lead_activity_converted_email'] = 'Promijenjena je adresa e-pošte potenijalnog kupca. Prva adresa e-pošte je bila: %s i dodana kao klijent sa adresom e-pošte %s';
$lang['not_lead_activity_converted'] = 'Potencijalni kupac %s je pretvoren u klijenta';
$lang['not_liked_your_post'] = '%s se sviđa tvoja objava %s ...';
$lang['not_commented_your_post'] = '%s je komentirao tvoju objavu %s ...';
$lang['not_liked_your_comment'] = '%s se sviđa tvoj komentar %s ...';
$lang['not_proposal_assigned_to_you'] = 'Ponuda je dodijeljena Vama - %s ...';
$lang['not_proposal_comment_from_client'] = 'Novi komentar klijenta na ponudu %s ...';
$lang['not_proposal_proposal_accepted'] = 'Ponuda Prihvaćena';
$lang['not_proposal_proposal_declined'] = 'Ponuda Odbijena';
$lang['not_task_added_you_as_follower'] = 'je dodao Vas kao operativca na aktivnost %s ...';
$lang['not_task_added_someone_as_follower'] = 'added %s as follower on task %s ...';
$lang['not_task_added_himself_as_follower'] = 'added himself as follower on task %s ...';
$lang['not_task_assigned_to_you'] = 'assigned a task to you %s ...';
$lang['not_task_assigned_someone'] = 'assigned %s to task %s ...';
$lang['not_task_will_do_user'] = 'will do task %s ...';
$lang['not_task_new_attachment'] = 'New Attachment Added';
$lang['not_task_marked_as_complete'] = 'aktivnost označena kao završena %s';
$lang['not_task_unmarked_as_complete'] = 'aktivnost odznačena kao završena %s';
$lang['not_ticket_assigned_to_you'] = 'Zahtjev je dodijeljen Vama - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Zahtijev je ponovno dodijeljen Vama - %s ...';
$lang['not_estimate_customer_accepted'] = 'Congratulations! Client accepted estimate with number %s';															
$lang['not_estimate_customer_declined'] = 'Client declined estimate with number %s';
$lang['estimate_activity_converted'] = 'converted this estimate to invoice.<br /> %s';
$lang['estimate_activity_created'] = 'Created the estimate';
$lang['invoice_estimate_activity_removed_item'] = 'removed item <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Estimate number changed from %s to %s';
$lang['invoice_activity_number_changed'] = 'Invoice number changed from %s to %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'updated item short description from %s to %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'updated item long description from <b>%s</b> to <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'updated item rate from %s to %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'updated quantity on item <b>%s</b> from %s to %s';
$lang['invoice_estimate_activity_added_item'] = 'added new item <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'sent estimate to client';
$lang['estimate_activity_client_accepted_and_converted'] = 'Customer accepted this estimate. Estimate is converted to invoice with number %s';
$lang['estimate_activity_client_accepted'] = 'Customer accepted this estimate';
$lang['estimate_activity_client_declined'] = 'Client declined this estimate';
$lang['estimate_activity_marked'] = 'marked estimate as %s';
$lang['invoice_activity_status_updated'] = 'Invoice status updated from %s to %s';
$lang['invoice_activity_created'] = 'created the invoice';
$lang['invoice_activity_from_expense'] = 'converted to invoice from expense';
$lang['invoice_activity_recurring_created'] = '[Recurring] Invoice created by CRON';
$lang['invoice_activity_recurring_from_expense_created'] = '[Invoice From Expense] Invoice created by CRON';													
$lang['invoice_activity_sent_to_client_cron'] = 'Račun poslan kupcu putem ponavljajućeg posla';
$lang['invoice_activity_sent_to_client'] = 'račun poslana klijientu';
$lang['invoice_activity_marked_as_sent'] = 'račun označena kao poslana';
$lang['invoice_activity_payment_deleted'] = 'obrisana je uplata za račun. Uplata #%s, ukupni iznos %s';
$lang['invoice_activity_payment_made_by_client'] = 'Klijent je uplatio račun od ukupno <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'zabilježeno je plaćanje od ukupno <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'dodao privitak';

# Navigation
$lang['top_search_placeholder'] = 'Traži...';

# Staff
$lang['staff_profile_inactive_account'] = 'Ovaj djelatnik nije aktivan';

# Estimates
$lang['copy_estimate'] = 'Kopiraj predračun';
$lang['estimate_copied_successfully'] = 'Predračun je uspješno kopiran';
$lang['estimate_copied_fail'] = 'Greška kod kopiranja predračuna';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Aktivnosti meni dodijeljeno';
$lang['tasks_view_follower_by_user'] = 'Aktivnosti koje pratim';
$lang['no_tasks_found'] = 'Nema pronađenih aktivnosti';

# Leads
$lang['leads_dt_datecreated'] = 'Stvoreno';
$lang['leads_sort_by'] = 'Sortiraj';
$lang['leads_sort_by_datecreated'] = 'Datum stvaranja';
$lang['leads_sort_by_kanban_order'] = 'Redoslijed na ploči';

# Proposals
$lang['proposal_items_name'] = 'Stavka';
$lang['proposal_items_description'] = 'Opis';
$lang['proposal_items_qty'] = 'Kol';
$lang['proposal_items_rate'] = 'Stopa';
$lang['proposal_items_tax'] = 'PDV';
$lang['proposal_items_amount'] = 'Iznos';

# Authentication
$lang['check_email_for_resetting_password'] = 'Provjerite vašu ulaznu poštu elektroničke pošte za daljnje upute oko ponovnog postavljanja lozinke';
$lang['inactive_account'] = 'Račun nije aktivan';
$lang['error_setting_new_password_key'] = 'Greška kod postavljanja nove lozinke';
$lang['password_reset_message'] = 'Vaša lozinka je ponovno postavljena. Molimo Vas prijavite se sada!';
$lang['password_reset_message_fail'] = 'Greška kod ponovnog postavljanja lozinke. Pokušajte ponovno.';
$lang['password_reset_key_expired'] = 'Ključ za lozinku je istekao ili je korisnik pogrešan';
$lang['admin_auth_reset_pass_repeat'] = 'Ponovite Lozinku';
$lang['auth_reset_pass_email_not_found'] = 'Adresa elektroničke pošte nije pronađena';
$lang['auth_reset_password_submit'] = 'Ponovno postavite lozinku';

# Settings
$lang['settings_amount_to_words'] = 'Iznos u riječi';
$lang['settings_amount_to_words_desc'] = 'Izlazni ukupni iznos u riječima na računu/predračunu';
$lang['settings_amount_to_words_enabled'] = 'Omogući';
$lang['settings_total_to_words_lowercase'] = 'Broj u riječi sa malim slovima';
$lang['settings_show_tax_per_item'] = 'Prikaži porez po stavki';

# Reports
$lang['report_sales_months_three_months'] = 'Zadnja 3 mjeseca';
$lang['report_invoice_number'] = 'Račun #';
$lang['report_invoice_customer'] = 'Klijent';
$lang['report_invoice_date'] = 'Datum';
$lang['report_invoice_duedate'] = 'Datum Dospijeća';
$lang['report_invoice_amount'] = 'Iznos';
$lang['report_invoice_amount_with_tax'] = 'Iznos sa porezom';
$lang['report_invoice_amount_open'] = 'Otvoreni iznos';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Ukupan iznos sa porezom';
$lang['report_invoice_total_amount_without_tax'] = 'Ukupan iznos bez poreza';
$lang['report_invoice_total_taxes'] = 'Porezi';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Statistika po Statusu Projekta';
$lang['home_invoice_overview'] = 'Pregled Računa';
$lang['home_estimate_overview'] = 'Pregled Predračuna';
$lang['home_proposal_overview'] = 'Pregled Ponuda';
$lang['home_lead_overview'] = 'Pregled Potencijalnih Kupaca';

$lang['home_my_projects'] = 'Mojih projekata';
$lang['home_announcements'] = 'Obavijesti';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limitiraj broj potencijalnih kupaca na ploči prema statusu';
$lang['settings_group_misc'] = 'Razno';
$lang['show_projects_on_calendar'] = 'Projekti';
$lang['settings_media_max_file_size_upload'] = 'Maksimalna veličina datoteke za slanje u medijima (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Dozvoli klijentu/djelatniku da doda/uredi komentare zadataka samo u prvom satu (nije primjenjivo na administratore)';

# Email templates
$lang['email_template_only_domain_email'] = 'Samo domenska adresa elektroničke pošte';

# Announcements
$lang['dismiss_announcement'] = 'Odbaci objavu';
$lang['dismiss_announcement'] = 'Odbaci objavu';
$lang['announcement_from'] = 'Od:';
$lang['announcement_date'] = 'Datum objave: %s';
$lang['announcement_not_found'] = 'Objava nije pronađena';
$lang['announcements_recent'] = 'Najnovije objave';

# General
$lang['zip_invoices'] = 'Zip Računa';
$lang['zip_estimates'] = 'Zip Predračuni';
$lang['zip_payments'] = 'Zip Plaćanja';
$lang['setup_help'] = 'Pomoć';
$lang['clients_list_company'] = 'Tvrtka';
$lang['dt_button_export'] = 'Izvezi';

$lang['dt_entries'] = 'zapisa';
$lang['invoice_total_paid'] = 'Ukupno plaćeno';
$lang['invoice_amount_due'] = 'Dospjeli iznos';
$lang['report_invoice_discount'] = 'Popusti';

# Calendar
$lang['calendar_project'] = 'Projekt';

# Leads
$lang['leads_import_assignee'] = 'Odgovoran (Dodijeljen)';
$lang['customer_from_lead'] = 'Klijent od %s';
$lang['lead_kan_ban_attachments'] = 'Privici: %s';
$lang['leads_sort_by_lastcontact'] = 'Zadnji kontakt';

# Tasks
$lang['task_comment_added'] = 'Komentar je uspješno dodan';
$lang['task_duedate'] = 'Datum Dospijeća';
$lang['task_view_comments'] = 'Komentari';
$lang['task_comment_updated'] = 'Komentar ažuriran';
$lang['task_visible_to_client'] = 'Vidljivo klijentu';
$lang['task_hourly_rate'] = 'Satnica';
$lang['hours'] = 'Sati';
$lang['seconds'] = 'Sekunda';
$lang['minutes'] = 'Minuta';
$lang['task_start_timer'] = 'Pokreni brojač';
$lang['task_stop_timer'] = 'Zaustavi brojač';
$lang['task_billable_help'] = 'Ako odaberete naplativo, aktivnost će biti prikazana kao stavka na računu';
$lang['task_billable'] = 'Naplativo';
$lang['task_billable_yes'] = 'Naplativo';
$lang['task_billable_no'] = 'Nije Naplativo';
$lang['task_billed'] = 'Naplaćeno';
$lang['task_billed_yes'] = 'Naplaćeno';
$lang['task_billed_no'] = 'Nije Naplaćeno';
$lang['task_user_logged_time'] = 'Prijavljen već:';
$lang['task_total_logged_time'] = 'Ukupno vrijeme prijave:';
$lang['task_is_billed'] = 'Ova aktivnost će biti naplaćena na računu broj %s';
$lang['task_statistics'] = 'Statistika';
$lang['task_milestone'] = 'Dostignuće';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Poruka je uspješno ažurirana';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Aktivnosti projekta nisu uključene u ovom popisu.';
$lang['show_quantity_as'] = 'Prikaži količinu kao:';
$lang['quantity_as_qty'] = 'Kom';
$lang['quantity_as_hours'] = 'Sati';
$lang['invoice_table_hours_heading'] = 'Sati';
$lang['bill_tasks'] = 'Naplati aktivnosti';
$lang['invoice_estimate_sent_to_email'] = 'Pošalji na adresu e-pošte';

# Estimates
$lang['estimate_table_hours_heading'] = 'Sati';

# General
$lang['is_customer_indicator'] = 'Klijent';
$lang['print']            = 'Ispis';
$lang['customer_permission_projects']            = 'Projekti';
$lang['no_timers_found']            = 'Nema pokrenutih brojača';
$lang['timers_started_confirm_logout']            = 'Pronađeni pokrenuti brojači!<br /><br />Jeste li sigurni da se želite odjaviti bez zaustavljanja brojača?';
$lang['confirm_logout']            = 'Odjava';
$lang['timer_top_started']            = 'Pokrenut %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'Ne možete promijeniti način naplate. Pronađene su već naplaćene aktivnosti za ovaj projekt.';
$lang['project_customer_permission_warning'] = 'Sustav je ukazao da primarni kontakt nema dozvole za projekte. Priarni kontakt neče moći vidjeti projekt. Razmotrite o dodavanju dozvole u profilu kontakta.';
$lang['project_invoice_timesheet_start_time'] = 'Vrijeme početka: %s';
$lang['project_invoice_timesheet_end_time'] = 'Vrijeme završetka: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Prijavljeno vrijeme: %s';
$lang['project_view_as_client'] = 'Pregladaj projekt kao klijent';
$lang['project_mark_all_tasks_as_completed'] = 'Označi sve zadatke kao završene i zaustavi sve brojače vremena (Obavijest neće biti poslana članovima projekta)';
$lang['project_not_started_status_tasks_timers_found'] = 'Pronađeni su pokrenuti brojači vremena za ovaj projekt no projekt je u statusu "Nije započeto". Prijedlog je promijeniti status projekta na "U toku"';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Nije započeo';
$lang['project_status_2'] = 'U toku';
$lang['project_status_3'] = 'Na čekanju';
$lang['project_status_4'] = 'Završeno';

$lang['project_file_uploaded_by_customer'] = 'Klijent';
$lang['project_file_dateadded'] = 'Datum prijenosa';
$lang['project_file_filename'] = 'Datoteka';
$lang['project_file__filetype'] = 'Vrsta datoteke';
$lang['project_file_visible_to_customer'] = 'Vidljivo je klijentu';
$lang['project_file_uploaded_by'] = 'Prenio';
$lang['edit_project'] = 'Uredi Projekt';
$lang['copy_project'] = 'Kopiraj Projekt';
$lang['delete_project'] = 'Izbriši Projekt';
$lang['project_task_assigned_to_user'] = 'Aktivnost je dodijeljena Vama';
$lang['seconds'] = 'Sekunde';
$lang['hours'] = 'Sati';
$lang['minutes'] = 'Minute';
$lang['project']                 = 'Projekt';
$lang['project_lowercase']       = 'projekt';
$lang['projects']                = 'Projekti';
$lang['projects_lowercase']      = 'projekti';
$lang['project_settings']      = 'Postavke Projekta';
$lang['project_invoiced_successfully']             = 'Projekt je fakturiran uspješno';
$lang['new_project']             = 'Novi projekt';
$lang['project_files']            = 'Datoteke';
$lang['project_activity']            = 'Aktivnosti';
$lang['project_name']            = 'Naziv Projekta';
$lang['project_description']            = 'Opis';
$lang['project_customer']            = 'Klijent';
$lang['project_start_date']            = 'Početak';
$lang['project_datecreated']            = 'Kreirano Datuma';
$lang['project_deadline']            = 'Rok';
$lang['project_billing_type']            = 'Vrsta naplate';
$lang['project_billing_type_fixed_cost']            = 'Fiksna stopa';
$lang['project_billing_type_project_hours']            = 'Sati projekta';
$lang['project_billing_type_project_task_hours']            = 'Sati aktivnosti';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Temeljeno na satnoj stopi aktivnosti';
$lang['project_rate_per_hour']            = 'Stopa po satu';
$lang['project_total_cost']            = 'Ukupna stopa';
$lang['project_members']            = 'Članovi';
$lang['project_member_removed']     = 'Član projekta je uspješno uklonjen';
$lang['project_overview']           = 'Pregled Projekata';
$lang['project_gant']            = 'Plan';
$lang['project_milestones']            = 'Dostignuća';
$lang['project_milestone_order']            = 'Poredak';
$lang['project_milestone_duedate_passed']            = 'Datum dospijeća';
$lang['record_timesheet']            = 'Kontrolna kartica';
$lang['new_milestone']            = 'Novo dostignuće';
$lang['edit_milestone']            = 'Uredi dostignuće';
$lang['milestone_name']            = 'Naziv';
$lang['milestone_due_date']            = 'Do datuma';
$lang['project_milestone']            = 'Dostignuće';
$lang['project_notes']            = 'Bilješke';
$lang['project_timesheets']            = 'Kontrolne kartice';
$lang['project_timesheet']            = 'Kontrolna kartica';
$lang['milestone_total_logged_time']            = 'Vrijeme trajanja prijave';
$lang['project_overview_total_logged_hours']            = 'Ukupno sati prijavljen';
$lang['milestones_uncategorized']            = 'Nekategorizirano';
$lang['milestone_no_tasks_found']            = 'Nema pronađenih aktivnosti';
$lang['project_copied_successfully']            = 'Podaci o projektu su uspješno kopirani';
$lang['failed_to_copy_project']            = 'Neuspjelo kupiranje projekta';
$lang['copy_project_task_include_check_list_items']            = 'Kopiraj stavke spiska';
$lang['copy_project_task_include_assignees']            = 'Kopirajte iste operativce';
$lang['copy_project_task_include_followers']            = 'Kopirajte iste odgovorne osobe';

$lang['project_days_left']            = 'Preostaje Dana';
$lang['project_open_tasks']            = 'Otvorenih Aktivnosti';
$lang['timesheet_stop_timer']            = 'Zaustavi Brojač';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Neuspješno dodavanje na kontrolnu karticu. Vrijeme završetka je manje od vremena početka';
$lang['project_timesheet_user']            = 'Djelatnik';
$lang['project_timesheet_start_time']            = 'Početak';
$lang['project_timesheet_end_time']            = 'Završetak';
$lang['project_timesheet_time_spend']            = 'Utrošeno Vrijeme';
$lang['project_timesheet_task']            = 'Aktivnost';
$lang['project_invoices']                = 'Računi';
$lang['total_logged_hours_by_staff']            = 'Ukupno Prijavljeno Vrijeme';
$lang['invoice_project']            = 'Račun za projekt';
$lang['invoice_project_info']            = 'Podaci o računu projekta';
$lang['invoice_project_data_single_line']            = 'Jedna linija';
$lang['invoice_project_data_task_per_item']            = 'Aktivnost po stavci';
$lang['invoice_project_data_timesheets_individually']            = 'Svaka kontrolna kartica ponaosob';
$lang['invoice_project_item_name_data']            = 'Naziv stavke';
$lang['invoice_project_description_data']            = 'Opis';
$lang['invoice_project_projectname_taskname']            = 'Naziv projekta + Naziv aktivnosti';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Sve aktinvosti + ukupno prijavljeno vrijeme po aktivnosti';
$lang['invoice_project_project_name_data']            = 'Naziv projekta';
$lang['invoice_project_timesheet_individually_data']            = 'Početno vrijeme kontrolne kartice + završno vrijeme + ukupno prijavljeno vrijeme';
$lang['invoice_project_total_logged_time_data']            = 'Ukupno prijavljeno vrijeme';

$lang['project_allow_client_to'] = 'Dozvoli klijentu da %s';
$lang['project_setting_view_task_attachments'] = 'vidi dodatke aktivnostima';
$lang['project_setting_view_task_checklist_items'] = 'vidi stavke aktivnosti na popisu';
$lang['project_setting_upload_files'] = 'prenese datoteke';
$lang['project_setting_view_task_comments'] = 'vidi komentare na aktivnosti';
$lang['project_setting_upload_on_tasks'] = 'prenese dodatke na aktivnostima';
$lang['project_setting_view_task_total_logged_time'] = 'pogleda ukupno prijavljeno vrijeme po aktivnosti';
$lang['project_setting_open_discussions'] = 'otvorene rasprave';
$lang['project_setting_comment_on_tasks'] = 'komentirati projektne aktivnosti';
$lang['project_setting_view_tasks'] = 'vidi aktivnosti';
$lang['project_setting_view_milestones'] = 'vidi dostignuća';
$lang['project_setting_view_gantt'] = 'plan';
$lang['project_setting_view_timesheets'] = 'vidi kontrolne kartice';
$lang['project_setting_view_activity_log'] = 'vidi dnevnik aktivnosti';
$lang['project_setting_view_team_members'] = 'vidi članove tima';

$lang['project_discussion_visible_to_customer_yes']                 = 'Vidljivo';
$lang['project_discussion_visible_to_customer_no']                 = 'Nevidljivo';

$lang['project_discussion_posted_on']                 = 'Objavljeno na %s';
$lang['project_discussion_posted_by']                 = 'Objavio %s';
$lang['project_discussion_failed_to_delete']                 = 'Neuspjeh kod brisanja rasprave';
$lang['project_discussion_deleted']                 = 'Rasporava je obrisana uspješno';
$lang['project_discussion_no_activity']                 = 'Nema Aktivnosti';
$lang['project_discussion']                 = 'Rasprava';
$lang['project_discussions']                 = 'Rasprave';
$lang['edit_discussion'] = 'Uredi Raspravu';
$lang['new_project_discussion'] = 'Stvori Raspravu';
$lang['project_discussion_subject'] = 'Naslov';
$lang['project_discussion_description'] = 'Opis';
$lang['project_discussion_show_to_customer'] = 'Vidljivo Klijentima';
$lang['project_discussion_total_comments'] = 'Ukupno komentara';
$lang['project_discussion_last_activity'] = 'Zadnja aktivnost';
$lang['discussion_add_comment'] = 'Dodaj komentar';
$lang['discussion_newest'] = 'Najnoviji';
$lang['discussion_oldest'] = 'Najstariji';
$lang['discussion_attachments'] = 'Privici';
$lang['discussion_send'] = 'Pošalji';
$lang['discussion_reply'] = 'Odgovori';
$lang['discussion_edit'] = 'Uredi';
$lang['discussion_edited'] = 'Promijenjena';
$lang['discussion_you'] = 'Vi';
$lang['discussion_save'] = 'Spremi';
$lang['discussion_delete'] = 'Izbriši';
$lang['discussion_view_all_replies'] = 'Prikaži sve odgovore';
$lang['discussion_hide_replies'] = 'Sakrij odgovore';
$lang['discussion_no_comments'] = 'Nema komentara';
$lang['discussion_no_attachments'] = 'Nema privitaka';
$lang['discussion_attachments_drop'] = 'Povucite i ispustite za prijenos datoteke';
$lang['project_note'] = 'Bilješka';
$lang['project_note_private'] = 'Privatna bilješka';
$lang['project_save_note'] = 'Spremi bilješku';

# Project Activity
$lang['project_activity_created'] = 'Izradio je projekt';
$lang['project_activity_updated'] = 'Ažurirao je projekt';
$lang['project_activity_removed_team_member'] = 'Uklonio je člana tima';
$lang['project_activity_added_team_member'] = 'Dodao je novog člana tima';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Označio je sve aktivnosti završenima';
$lang['project_activity_recorded_timesheet'] = 'Zabilježeno vremensko razdoblje';
$lang['project_activity_task_name'] = 'Aktivnost:';
$lang['project_activity_deleted_discussion'] = 'Obrisana Rasprava';
$lang['project_activity_created_discussion'] = 'Stvorena rasprava';
$lang['project_activity_updated_discussion'] = 'Ažurirana Rasprava';
$lang['project_activity_commented_on_discussion'] = 'Komentirano na raspravu';
$lang['project_activity_deleted_discussion_comment'] = 'Izbrisan komentar rasprave';
$lang['project_activity_deleted_milestone'] = 'Obrisano dostignuće';
$lang['project_activity_updated_milestone'] = 'Ažurirano dostignuće';
$lang['project_activity_created_milestone'] = 'Stvoreno novo dostignuće';
$lang['project_activity_invoiced_project'] = 'Fakturiran projekt';
$lang['project_activity_task_marked_complete'] = 'Aktivnost označena kao završena';
$lang['project_activity_task_unmarked_complete'] = 'Aktivnost odznačena kao završena';
$lang['project_activity_task_deleted'] = 'Obrisana aktivnost';
$lang['project_activity_new_task_comment'] = 'Komentar na aktivnost';
$lang['project_activity_new_task_attachment'] = 'Prenesen je privitak na aktivnost';
$lang['project_activity_new_task_assignee'] = 'Dodan je novi operativac na aktivnost';
$lang['project_activity_task_assignee_removed'] = 'Uklonjen je operativac dodijeljen aktivnosti';
$lang['project_activity_task_timesheet_deleted'] = 'Kontrolna kartica je uklonjena';
$lang['project_activity_uploaded_file'] = 'Prenesena je datoteka projekta';
$lang['project_activity_status_updated'] = 'Ažuriran je status projekta';
$lang['project_activity_visible_to_customer'] = 'Vidljivo klijentu';
$lang['project_activity_project_file_removed'] = 'Uklonjena datoteka projekta';

# Notifications - Deprecated - THESE notifications are Deprecated and will be removed in further released don't translate them
$lang['not_customer_uploaded_project_file'] = 'Nova datoteka je prenesena';
$lang['not_customer_created_new_project_discussion'] = 'Nova rasprava na projektu je stvorena';
$lang['not_customer_commented_on_project_discussion'] = 'Novi komentar je dodan na raspravu projekta';

# Customers area
$lang['clients_my_estimates'] = 'Predračuni';
$lang['client_no_reply'] = 'Nema odgovora';
$lang['clients_nav_projects'] = 'Projekti';
$lang['clients_my_projects'] = 'Projekti';
$lang['client_profile_image'] = 'Slika profila';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Otkazani računi su isključeni iz izvještaja';
$lang['invoices_merge_cancel_merged_invoices'] = 'Označite pripojene račune kao otkazane umjesto brisanja';
$lang['invoice_marked_as_cancelled_successfully'] = 'Račun je uspješno označen kao otkazan';
$lang['invoice_unmarked_as_cancelled'] = 'Račun je uspješno odznačena kao odbačen';

$lang['tasks_reminder_notification_before'] = 'Podsjetnik za istek roka za izvršenje aktivnosti (Dana) unaprijed';
$lang['not_task_deadline_reminder'] = 'Podsjetnik za istek roka za izvršenje aktivnosti';
$lang['dt_length_menu_all'] = 'Svi';
$lang['task_not_finished'] = 'Nije Završeno';
$lang['task_billed_cant_start_timer'] = 'Aktivnost naplaćena. Brojač se ne može pokrenuti.';
$lang['invoice_task_billable_timers_found'] = 'Pronađeni su pokrenuti brojači';
$lang['project_timesheet_not_updated'] = 'Bez utjecaja na kontrolnu karticu';
$lang['project_invoice_task_no_timers_found'] = 'Nema pronađenih brojača za ovu aktivnost';
$lang['invoice_project_tasks_not_started'] = 'Još nije započeto | Datum početka: %s';
$lang['invoice_project_see_billed_tasks'] = 'Vidi aktivnosti koje će biti naplaćene ovim računom';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Sve naplaćene aktivnosti će biti označene kao završene';
$lang['invoice_project_nothing_to_bill'] = 'Nema aktivnosti za naplatu. Slobodno dodajte što želite pod stavke računa.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Nije moguće naplatiti aktivnosti s budućim datumom početka';
$lang['invoice_project_stop_all_timers'] = 'Zaustavi sve brojače';
$lang['invoice_project_stop_billable_timers_only'] = 'Zaustavi samo brojače koji će se naplatiti';
$lang['project_tasks_total_timers_stopped'] = 'Zaustavljeno ukupno %s brojača';
$lang['project_invoice_timers_started'] = 'Brojači vremena aktivnosti su pronađeni na naplativim aktivnostima, račun ne može biti napravljena. Molimo Vas da zaustavite brojače kako biste mogli stvoriti račun.';
$lang['task_start_timer_only_assignee'] = 'Morate biti označeni kao operativac za ovaj zadatak kako biste pokrenuli brojač! ';
$lang['task_comments'] = 'Komentari';
$lang['invoice_total_tax'] = 'Porez ukupno';
$lang['estimates_total_tax'] = 'Porez ukupno';
$lang['report_invoice_total_tax'] = 'Porez ukupno';
$lang['home_tickets'] = 'Zahtjevi';
$lang['home_project_activity'] = 'Zadnja aktivnost na projektu';
$lang['home_project_activity_not_found'] = 'Nisu pronađene nikakve aktivnosti na projektu';
$lang['view_tracking'] = 'Pregledi praćenja';
$lang['view_date'] = 'Datum';
$lang['view_ip'] = 'IP Adresa';
$lang['article_total_views'] = 'Ukupni broj pogleda';
$lang['leads_source'] = 'Izvor';
$lang['invoices_available_for_merging'] = 'Računi dostupni za spajanje';
$lang['invoices_merge_discount'] = 'Morat ćete primijeniti popust od ukupno %s ručno na ovom računu';
$lang['invoice_merge_number_warning'] = 'Spajanje račun stvorit će praznine u brojevima račun. Nemojte spojiti račune ako želite da nema nedostataka u povijesti račun. Imate i mogućnost ručne prilagodbe brojeva računa ako želite ispuniti praznine.';
$lang['invoice_mark_as'] = 'Označi kao %s';
$lang['invoice_unmark_as'] = 'Odznači kao %s';
$lang['invoice_status_cancelled'] = 'Otkazano';
$lang['tasks_reminder_notification_before_help'] = 'Obavijestiti operativce aktivnosti o roku X dana ranije. Obavijest / e-poruka šalju se samo operativcima. Ako je razlika između datuma početka aktivnosti i datuma završetka aktivnosti manja od dana podsjetnika, obavijest se neće poslati.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Označi sve aktivnosti';
$lang['lead_company'] = 'Tvrtka';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Potvrdi';
$lang['task_assigned'] = 'Odgovoran';
$lang['switch_to_pipeline'] = 'Prebaci se na kartice';
$lang['switch_to_list_view'] = 'Prebaci se na popis';
$lang['estimates_pipeline'] = 'Kartice predračuna';
$lang['estimates_pipeline_sort'] = 'Sortiraj prema';
$lang['estimates_sort_expiry_date'] = 'Datum isteka';
$lang['estimates_sort_pipeline'] = 'Slijed Kartica';
$lang['estimates_sort_datecreated'] = 'Datum stvaranja';
$lang['estimates_sort_estimate_date'] = 'Datum predračuna';
$lang['estimate_set_reminder_title'] = 'Postavi podsjetnik za predračun';
$lang['invoice_set_reminder_title'] = 'Postavi podsjetnik za račun';
$lang['estimate_reminders'] = 'Podsjetnici';
$lang['invoice_reminders'] = 'Podsjetnici';
$lang['estimate_notes'] = 'Bilješke';
$lang['estimate_add_note'] = 'Dodaj Bilješku';
$lang['dropdown_non_selected_tex'] = 'Nije odabrano';
$lang['auto_close_ticket_after'] = 'Automatski zatvori zahtjev nakon (sati)';
$lang['event_description'] = 'Opis';
$lang['delete_event'] = 'Izbriši';
$lang['not_new_ticket_created'] = 'Novi zahtjev je otvoren u Vašem odjelu - %s';
$lang['receive_notification_on_new_ticket'] = 'Dostavi obavijest po otvaranju novog zahtjeva';
$lang['receive_notification_on_new_ticket_help'] = 'Svi djelatnici koji pripadaju odjelu otvorenog zahtjeva, dobiti će obavijest da je otvoren novi zahtjev';
$lang['event_updated'] = 'Događaj je uspješno ažuriran';
$lang['customer_contacts'] = 'Kontakti';
$lang['new_contact'] = 'Novi Kontakt';
$lang['contact'] = 'Kontakt';
$lang['contact_lowercase'] = 'kontakt';
$lang['contact_primary'] = 'Primarni kontakt';
$lang['contact_position'] = 'Položaj';
$lang['contact_active'] = 'Active';
$lang['client_company_info'] = 'Detalji tvrtke';
$lang['proposal_save'] = 'Spremi Ponudu';
$lang['calendar'] = 'Kalendar';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Slova';
$lang['settings_pdf_table_heading_color'] = 'Boja stavke zaglavlja tablice';
$lang['settings_pdf_table_heading_text_color'] = 'Boja teksta na zaglavlju tablice';
$lang['settings_pdf_font_size'] = 'Zadana veličina fonta';
$lang['proposal_status_draft'] = 'Skica';
$lang['custom_field_contacts'] = 'Kontakti';
$lang['company_primary_email'] = 'Primarna elektronička pošta';
$lang['client_register_contact_info'] = 'Primarne informacije o kontaktu';
$lang['client_register_company_info'] = 'Podaci o tvrtci';
$lang['contact_permissions_info'] = 'Svakako postavite odgovarajuće dozvole za ovaj kontakt';
$lang['default_leads_kanban_sort'] = 'Sortiranje zadanih potencijalnih kupaca';
$lang['default_leads_kanban_sort_type'] = 'Sortiranje';
$lang['order_ascending'] = 'Uzlazno';
$lang['order_descending'] = 'Silazno';
$lang['calendar_expand'] = 'proširi';
$lang['proposal_reminders'] = 'Podsjetnici';
$lang['proposal_set_reminder_title'] = 'Postavite podsjetnik za ponudu';
$lang['settings_allowed_upload_file_types'] = 'Dopuštene vrste datoteka';
$lang['no_primary_contact'] = 'Ovaj klijent ima primarni kontakt. Morate postaviti primarni kontakt za prijavu kao klijent. Preporučljivo je da svi korisnisi imaju primarne kontakte.';
$lang['leads_merge_customer'] = 'Polja klijenta se spajaju';
$lang['leads_merge_contact'] = 'Polja kontakta se spajaju';
$lang['leads_merge_as_contact_field'] = 'Spoji kao polje za kontakt';
$lang['lead_convert_to_client_phone'] = 'Telefon';
$lang['invoice_status_report_all'] = 'Sve';
$lang['import_contact_field'] = 'Polje za kontakt';


$lang['file_uploaded_success'] = 'Nema pogreške, datoteka je učitana s uspjehom';
$lang['file_exceeds_max_filesize'] = 'Prenesena datoteka premašuje direktivu upload_max_filesize u php.ini';
$lang['file_exceeds_maxfile_size_in_form'] = 'Prenesena datoteka prelazi MAX_FILE_SIZE direktivu navedenu u HTML obliku';
$lang['file_uploaded_partially'] = 'Prenesena je datoteka samo djelomično prenesena';
$lang['file_not_uploaded'] = '0 datoteka preneseno';
$lang['file_missing_temporary_folder'] = 'Nedostaje privremena mapa';
$lang['file_failed_to_write_to_disk'] = 'Zapisivanje datoteke na disk nije uspjelo.';
$lang['file_php_extension_blocked'] = 'PHP nastavak zaustavio je prijenos datoteka.';
$lang['calendar_expand'] = 'proširi';
$lang['view_pdf'] = 'Pogledaj PDF';
$lang['expense_repeat_every'] = 'Ponovi svakih';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Prebaci na ploču';
$lang['survey_no_questions'] = 'Ova anketa još nema dodanih pitanja.';
$lang['survey_submit'] = 'Pošalji';
$lang['contract_content'] = 'Ugovor';
$lang['contract_save'] = 'Spremi ugovor';
$lang['contract_send_to_email'] = 'Pošalji putem e-pošte';
$lang['contract_send_to_client_modal_heading'] = 'Pošaljite ugovor e-poštom';
$lang['contract_send_to'] = 'Pošalji na';
$lang['contract_send_to_client_attach_pdf'] = 'Prikvači PDF';
$lang['contract_send_to_client_preview_template'] = 'Pregled predloška e-pošte';
$lang['include_attachments_to_email'] = 'Priložite privitke e-pošti';
$lang['contract_sent_to_client_success'] = 'Ugovor je uspješno poslan klijentu';
$lang['contract_sent_to_client_fail'] = 'Neuspjeh kod slanja ugovora';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Pogrešno korisničko ime ili lozinka';
$lang['client_old_password_incorrect']     = 'Vaša stara lozinka nije točna';
$lang['client_password_changed']          = 'Vaša lozinka je promijenjena';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Ukupno izbrisanih potencijalnih kupaca: %s';
$lang['total_clients_deleted'] = 'Ukupno izbrisanih klijenata: %s';
$lang['confirm_action_prompt'] = 'Jeste li sigurni da želite izvršiti ovu radnju?';
$lang['mass_delete'] = 'Masovno Brisanje';
$lang['email_protocol'] = 'Protokol Elektroničke pošte';
$lang['add_edit_members'] = 'Dodaj/Uredi Članove';
$lang['project_overview_logged_hours'] = 'Prijavljeno vrijeme:';
$lang['project_overview_billable_hours'] = 'Naplativi Sati:';
$lang['project_overview_billed_hours'] = 'Naplaćeni Sati:';
$lang['project_overview_unbilled_hours'] = 'Nenaplaćeni Sati:';
$lang['calendar_first_day'] = 'Prvi Dan';
$lang['permission_view'] = 'Pogled';
$lang['permission_edit'] = 'Uredi';
$lang['permission_create'] = 'Stvori';
$lang['permission_delete'] = 'Izbriši';
$lang['permission'] = 'Dozvola';
$lang['permissions'] = 'Dozvole';
$lang['proposals_pipeline'] = 'Kartice Ponuda';
$lang['proposals_pipeline_sort'] = 'Sortiraj prema';
$lang['proposals_sort_open_till'] = 'Otvoreno do';
$lang['proposals_sort_pipeline'] = 'Redoslijed Kartica';
$lang['proposals_sort_datecreated'] = 'Stvoreno Datuma';
$lang['proposals_sort_proposal_date'] = 'Datum Ponude';
$lang['is_not_staff_member'] = 'Nije djelatnik';
$lang['lead_created'] = 'Stvoreno';
$lang['access_tickets_to_none_staff_members'] = 'Dozvoli pristup zahtjevima korisnicima koji nisu djelatnici tvrtke';
$lang['project_expenses'] = 'Troškovi';
$lang['expense_currency'] = 'Valuta';
$lang['currency_valid_code_help'] = 'Obavezno unesite valjani ISO kod.';
$lang['week'] = 'Tjedan';
$lang['weeks'] = 'Tjedana';
$lang['month'] = 'Mjesec';
$lang['months'] = 'Mjeseci';
$lang['year'] = 'Godina';
$lang['years'] = 'Godina';
$lang['expense_report_category'] = 'Kategorija';
$lang['expense_paid_via'] = 'Plaćeni putem %s';
$lang['item_as_expense'] = '[Trošak]';
$lang['show_help_on_setup_menu'] = 'Prikaži stavku izbornika pomoći na izborniku postavki';
$lang['customers_summary_total'] = 'Ukupan broj klijenata';
$lang['filter_by'] = 'Sortiraj';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Ključ stranice';
$lang['recaptcha_secret_key'] = 'Tajni ključ';
$lang['recaptcha_error'] = 'reCAPTCHA polje Vam govori jeste li ili niste robot.';
$lang['smtp_username'] = 'SMTP Korisničko ime';
$lang['smtp_username_help'] = 'Ispunite samo ako vaš klijent e-pošte koristi korisničko ime za SMTP prijavu.';
$lang['pinned_project']= 'Prikvačeni Projekt';
$lang['pin_project']= 'Prikvači Projekt';
$lang['unpin_project']= 'Odkvači Projekt';
$lang['smtp_encryption']= 'Šifriranje e-pošte';
$lang['smtp_encryption_none']= 'Nema';
$lang['show_proposals_on_calendar']= 'Ponude';
$lang['invoice_project_see_billed_expenses']= 'Pogledajte troškove koji će se naplatiti ovim računom';
$lang['project_overview_expenses'] = 'Ukupni Troškovi';
$lang['project_overview_expenses_billable'] = 'Naplativi Troškovi';
$lang['project_overview_expenses_billed'] = 'Naplaćeni Troškovi';
$lang['project_overview_expenses_unbilled'] = 'Nenaplaćeni Troškovi';
$lang['announcement_date_list'] = 'Datum';
$lang['project_setting_view_finance_overview'] = 'pregled financijskog stanja';
$lang['show_all_tasks_for_project_member'] = 'Dopustite svim korisnicima da vide sve poslove vezane uz projekte (uključuje i ljude koji ne rade u tvrtki)';
$lang['not_staff_added_as_project_member'] = 'Vas je dodao kao člana projekta';
$lang['report_expenses_base_currency_select_explanation'] = 'Morate odabrati valutu jer je sustav pronašao različite valute za troškove.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Zabilježeni trošak';
$lang['save_customer_and_add_contact'] = 'Spremi i stvori kontakt';
$lang['tickets_chart_weekly_opening_stats'] = 'Tjedna Statistika';
$lang['related_knowledgebase_articles'] = 'Povezani Članci';
$lang['detailed_overview'] = 'Pregled Aktivnosti';
$lang['tasks_total_checklists_finished'] = 'Ukupne stavke kontrolnog popisa označene kao gotove';
$lang['tasks_total_added_attachments'] = 'Ukupno dodanih privitaka';
$lang['tasks_total_comments'] = 'Ukupno komentara';
$lang['task_finished_on_time'] = 'Završeno na vrijeme?';
$lang['task_finished_on_time_indicator'] = 'Da';
$lang['task_not_finished_on_time_indicator'] = 'Ne';
$lang['task_filter_fetch_month_by'] = 'Dohvati mjesec od';
$lang['filter'] = 'Sortiraj';
$lang['task_filter_detailed_all_months'] = 'Svi Mjeseci';
$lang['kb_article_slug'] = 'Žeton';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'Ako se zahtjev uvozi putem e-pošte i kontakt ne postoji u CRM-u, polja neće biti zamijenjena.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Zaustavite sve druge brojače kada pokrenete novi brojač';
$lang['notification_when_customer_pay_invoice'] = 'Primajte obavijest kod uplate računa od strane klijenta (ugrađena)';
$lang['not_invoice_payment_recorded'] = 'Nova uplata po računu - %s';
$lang['email_template_contact_warning'] = 'Ako kontakt nije prijavljen kod spajanja, kontakt polja neće biti zamijenjena.';
$lang['theme_style'] = 'Stil Teme';
$lang['change_role_permission_warning'] = 'Izmjena dozvola uloge neće se odraziti na trenutne djelatnike koji imaju tu ulogu dodijeljenu.';
$lang['task_copied_successfully'] = 'Aktivnost je uspješno kopirana';
$lang['failed_to_copy_task'] = 'Neuspješno kopiranje aktivnosti';
$lang['not_project_file_uploaded'] = 'Dodana je nova datoteka na projekt';
$lang['settings_calendar_color'] = '%s Boja';
$lang['settings_calendar_colors_heading'] = 'Stil';
$lang['reminder'] = 'Podsjetnik';
$lang['back_to_tasks_list'] = 'Nazad na popis aktivnosti';
$lang['copy_task_confirm'] = 'Potvrdi';
$lang['changing_items_affect_warning'] = 'Izmijenjene podatke o stavci neće utjecati na stvoreni račun/predračun/ponudu.';
$lang['tax_is_used_in_expenses_warning'] = 'Nije moguće ažurirati ovaj porez jer postoje tansakcije troškova koje ga koriste.';
$lang['note'] = 'Bilješka';
$lang['leads_staff_report_converted'] = 'Ukupno pretvoreni potencijalni kupci';
$lang['leads_staff_report_created'] = 'Ukupno stvorenih potencijalnih kupaca';
$lang['leads_staff_report_lost'] = 'Ukupan broj izgubljenih potencijalnih kupaca';
$lang['client_go_to_dashboard'] = 'Povratak na kontrolnu ploču';
$lang['show_estimate_reminders_on_calendar'] = 'Podsjetnici za predračune';
$lang['show_invoice_reminders_on_calendar'] = 'Podsjetnici za račune';
$lang['calendar_estimate_reminder'] = 'Podsjetnik za predračun';
$lang['calendar_invoice_reminder'] = 'Podsjetnik za račun';
$lang['show_proposal_reminders_on_calendar'] = 'Podsjetnici za ponude';
$lang['calendar_proposal_reminder'] = 'Podsjetnik za ponudu';
$lang['proposal_due_after']= 'Ponuda istiće nakon (dana)';
$lang['project_progress']= 'Napredak';
$lang['calculate_progress_through_tasks']= 'Izračunajte napredak putem aktivnosti';
$lang['allow_customer_to_change_ticket_status']= 'Dopustite klijentu promjenu statusa zahtjeva iz korisničkog područja';
$lang['switch_to_general_report']= 'Prijeđi na izvješće djelatnika';
$lang['switch_to_staff_report']= 'Prijeđi na generalno izvješće';
$lang['generate']= 'Generiraj';
$lang['from_date']= 'Od datuma';
$lang['to_date']= 'Do datuma';
$lang['not_results_found']= 'Nema pronađenih rezultata';
$lang['lead_lock_after_convert_to_customer']= 'Zabranite uređivanje potencijalnog kupca po pretvorbi u klijenta (ne vrijedi za administratore sustava)';
$lang['default_pipeline_sort'] = 'Zadano sortiranje kartica';
$lang['not_goal_message_failed'] = 'Cilj nije ostvaren!<br /> Vrsta Cilja: %s
<br />Cilj Postignut: %s
<br />Ukupno Postignuće: %s
<br />Datum početka: %s
<br />Datum završetka: %s';
$lang['toggle_full_view'] = 'Uključi cijeli prikaz';
$lang['not_estimate_invoice_deleted'] = 'izbrisana je stvorena račun';
$lang['not_task_new_comment'] = 'komentirao je aktivnost %s';

# Version 1.1.8
$lang['invoice_number_exists'] = 'Ovaj broj računa postoji u tekućoj godini.';
$lang['estimate_number_exists'] = 'Ovaj broj predračuna postoji u tekućoj godini.';
$lang['email_exists'] = 'Adresa e-pošte već postoji';
$lang['not_uploaded_project_file'] = 'Nova datoteka je prenesena';
$lang['not_created_new_project_discussion'] = 'Nova rasporava na projektu je stvorena';
$lang['not_commented_on_project_discussion'] = 'Novi komentar na raspravu projekta';
$lang['all_staff_members'] = 'Svi djelatnici';
$lang['help_project_permissions'] = 'VIDI dopušta djelatniku da vidi SVE projekte. Ukoliko želite da vide samo one na kojima rade (dodani su kao članovi projekta), nemojte dati dozvolu VIDI.';
$lang['help_tasks_permissions'] = 'VIDI dopušta djelatniku da vidi SVE zadatke. Ukoliko želite da vide samo one na kojima su zaduženi ili operativci, nemojte dati dizvolu VIDI.';
$lang['expense_recurring_days'] = 'Dan(a)';
$lang['expense_recurring_weeks'] = 'Tjedan(a)';
$lang['expense_recurring_months'] = 'Mjesec(i)';
$lang['expense_recurring_years'] = 'Godina';
$lang['reset_to_default_color'] = 'Ponovno postavi na zadanu boju';
$lang['pdf_logo_width'] = 'Širina logotipa (PX)';
$lang['drop_files_here_to_upload'] = 'Ispustite datoteke za prijenos ovdje';
$lang['browser_not_support_drag_and_drop'] = 'Vaš pretraživač ne podržava povuci i ispusti način prijenosa datoteka';
$lang['remove_file'] = 'Ukloni datoteku';
$lang['you_can_not_upload_any_more_files'] = 'Ne možete prenjeti više niti jednu datoteku';
$lang['custom_field_only_admin'] = 'Zabravni pristup svima osim administratora';
$lang['leads_default_source'] = 'Zadani izvor';
$lang['clear_activity_log'] = 'Izbriši zapisnik';
$lang['default_contact_permissions'] = 'Zadane dozvole kontakta';
$lang['invoice_activity_marked_as_cancelled'] = 'račun označena kao otkazana';
$lang['invoice_activity_unmarked_as_cancelled'] = 'račun odznačena kao otkazana';
$lang['wait_text'] = 'Molimo Pričekajte...';
$lang['projects_summary'] = 'Sažetak projekta';
$lang['dept_imap_host'] = 'IMAP Domačin';
$lang['dept_encryption'] = 'Šifriranje';
$lang['dept_email_password'] = 'Lozinka';
$lang['dept_email_no_encryption'] = 'Nema šifriranja';
$lang['failed_to_decrypt_password'] = 'Neuspjeh kod dešifriranja lozinke';
$lang['delete_mail_after_import'] = 'Izbriši adresu e-pošte nakon uvoza?';
$lang['expiry_reminder_enabled'] = 'Pošalji podsjetnik o isteku';
$lang['send_expiry_reminder_before'] = 'Pošalji podsjetnik o isteku prije (dana)';
$lang['not_expiry_reminder_sent'] = 'Podsjetnik o isteku je poslan';
$lang['send_expiry_reminder'] = 'Pošalji podsjetnik o isteku';
$lang['sent_expiry_reminder_success'] = 'Podsjetnik o isteku je uspješno poslan';
$lang['sent_expiry_reminder_fail'] = 'Neuspjeh kod slanja podsjetnika o isteku';
$lang['leads_default_status'] = 'Zadani status';
$lang['item_description_placeholder'] = 'Opis';
$lang['item_long_description_placeholder'] = 'Dugi opis';
$lang['item_quantity_placeholder'] = 'Količina';
$lang['item_rate_placeholder'] = 'Stopa';
$lang['tickets_summary'] = 'Sažetak zahtjeva';
$lang['tasks_list_priority'] = 'Prioritet';
$lang['ticket_status_db_2'] = 'U toku';
$lang['ticket_status_db_1'] = 'Otvoren';
$lang['ticket_status_db_3'] = 'Odgovoren';
$lang['ticket_status_db_4'] = 'Na čekanju';
$lang['ticket_status_db_5'] = 'Zatvoren';
$lang['ticket_priority_db_1'] = 'Nizak';
$lang['ticket_priority_db_2'] = 'Srednji';
$lang['ticket_priority_db_3'] = 'Visok';
$lang['customer_have_projects_by'] = 'Sadržava projekte po statusu %s';
$lang['customer_have_proposals_by'] = 'Sadržava ponude po statusu %s';
$lang['do_not_redirect_payment'] = 'Nemoj me preusmjeriti na procesor plaćanja';
$lang['project_tickets'] = 'Zahtjevi';
$lang['invoice_report'] = 'Izvještaj Računa';
$lang['payment_modes_report'] = 'Načini Plaćanja (Transakcije)';
$lang['customer_admins'] = 'Administratori Klijenta';
$lang['assign_admin'] = 'Dodijeli administratora';
$lang['customer_admin_date_assigned'] = 'Dodijeljen datuma';
$lang['customer_admin_login_as_client_message'] = 'Bok %s. Dodan si kao admin ovom klijentu.';
$lang['ticket_form_validation_file_size'] = 'Veličina datoteke mora biti manje od %s';
$lang['has_transactions_currency_base_change'] = 'Promjena osnovne valute je moguća samo ako nema spremljenih transakcija u toj valuti. Obrišite sve transakcije sa tom valutom kako biste promijenili osnovnu valutu.';
$lang['customers_sort_all'] = 'Sve';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Dopusti recaptcha na klijentskom području (Prijava/Registracija)';
$lang['project_marked_as_finished'] = 'Projekt je završen';
$lang['project_status_updated'] = 'Status projekta je ažuriran';
$lang['remove_decimals_on_zero'] = 'Ukloni decimale na brojevima/novcu s nulom nakon decimalnog razdjelnika (2,00 će postati 2, 2,25 će ostati 2,25)';
$lang['remove_tax_name_from_item_table'] = 'Ukloni naziv poreza iz stavke u retku tablice';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Nisu naplativi troškovi po kategorijama';
$lang['billable_expenses_by_categories'] = 'Naplativni troškovi po kategorijama';
$lang['format_letter_size'] = 'A4 Pejzaž';
$lang['pdf_formats'] = 'Formati Dokumenta';
$lang['swap_pdf_info'] = 'Zamijenite tvrtku/pojedinosti o klijentu (detalji tvrtke na desnoj strani, detalji kupca na lijevoj strani)';
$lang['invoice_estimate_pdf_text_color'] = 'Račun/Ponuda boje teksta';
$lang['expenses_filter_by_categories'] = 'Po Kategorijama';
$lang['task_copy'] = 'Kopiraj';
$lang['estimate_status'] = 'Status';
$lang['expenses_report_exclude_billable'] = 'Izuzmi Naplative Troškove';
$lang['expenses_total'] = 'Ukupno';
$lang['estimate_activity_added_attachment'] = 'Dodan Dodatak';
$lang['show_to_customer'] = 'Pokaži Klijentu';
$lang['hide_from_customer'] = 'Sakrij Klijentu';
$lang['expenses_report_total'] = 'Ukupno';
$lang['expenses_report'] = 'Izvještaj troškova';
$lang['expenses_report_tax'] = 'Porez';
$lang['expenses_report_total_tax'] = 'Ukupni porez';
$lang['expenses_detailed_report'] = 'Detaljno izvješće';
$lang['expense_not_billable'] = 'Nije Naplativo';
$lang['notification_settings'] = 'Postavke Obavijesti';
$lang['staff_with_roles'] = 'Djelatnici koji imaju dodijeljene uloge';
$lang['specific_staff_members'] = 'Posebni djelatnici';
$lang['proposal_mark_as'] = 'Označi Kao %s';
$lang['kb_report_total_answers'] = 'Ukupno';
$lang['ticket_message_edit'] = 'Uredi';
$lang['invoice_files'] = 'Datoteke Računa';
$lang['estimate_files'] = 'Datoteke Predračuna';
$lang['proposal_files'] = 'Datoteke Ponude';
$lang['invoices_awaiting_payment'] = 'Nenaplaćeni računi';
$lang['tasks_not_finished'] = 'Nezavršenih Aktivnosti';
$lang['outstanding_invoices'] = 'Računi u valuti';
$lang['past_due_invoices'] = 'Dospijeli računi';
$lang['paid_invoices'] = 'Plačeni računi';
$lang['invoice_estimate_year'] = 'Godina';
$lang['no_results_text_search_dropdown'] = 'Nema pronađenih rezultata';
$lang['task_stats_logged_hours'] = 'Prijavljen Sati';
$lang['leads_converted_to_client'] = 'Novih klijenata iz potencijalnih kupaca';
$lang['task_assigned_from'] = 'Ovu aktivnost Vam je dodijelio %s';
$lang['auto_check_for_new_notifications'] = 'Automatska provjera za nove obavijesti (sekunde - postavite 0 da biste onemogućili)';
$lang['recurring_ends_on'] = 'Završava (Ostavite prazno za zauvijek)';
$lang['new_note'] = 'Nova Bilješka';
$lang['my_tickets_assigned'] = 'Zahtjevi meni dodijeljeni';
$lang['filter_by_assigned'] = 'Od strane pridruženog člana';
$lang['staff_stats_total_logged_time'] = 'Ukupno prijavljeno vrijeme';
$lang['staff_stats_last_month_total_logged_time'] = 'Prijavljeno vrijeme prošli mjesec';
$lang['staff_stats_this_month_total_logged_time'] = 'Prijavljeno vrijeme ovaj mjesec';
$lang['staff_stats_last_week_total_logged_time'] = 'Prijavljeno vrijeme prošli tjedan';
$lang['staff_stats_this_week_total_logged_time'] = 'Prijavljeno vrijeme ovaj tjedan';
// Dont change this because are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description'] = 'Opis';
$lang['description_visible_to_customer'] = 'Pokaži opis klijentu';
$lang['upcoming_tasks'] = 'Nadolazeće aktivnosti';
$lang['paymentmethod_two_checkout_account_number'] = 'Broj računa (ID Prodavača)';
$lang['paymentmethod_two_checkout_private_key'] = 'Privatni Ključ';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Javni Ključ';
$lang['payment_credit_card_number'] = 'Broj Kartice';
$lang['payment_credit_card_expiration_date'] = 'Datum Isteka';
$lang['payment_billing_email'] = 'Adresa e-pošte';
$lang['payment_billing_name'] = 'Naziv Naplate';
$lang['submit_payment'] = 'Pošaljite Plaćanje';
$lang['2checkout_notice_payment'] = 'Pojedinosti o kreditnoj kartici obrađuju se putem sigurnog tokena koji pruža 2Checkout';
$lang['2checkout_usage_notice'] = 'SSL je potreban ako upotrebljavate API za plaćanje 2Checkout. Potrebno je sigurno pozvati tokenization i autorizacije. Sustav će funkcionirati bez SSL-a, međutim, to će vas staviti izvan sukladnosti, što može dovesti do deaktiviranja API dozvola.';
$lang['custom_field_disallow_customer_to_edit'] = 'Ne dopusti korisnicima da uređuju ovo polje';
$lang['project_due_notice'] = 'Ovaj projekt je u zakašnjenju %s dana';
$lang['not_lead_added_attachment'] = '%s je dodao novi privitak potencijalnom kupcu';
$lang['lead_note_date_added'] = '%s je dodao novu bilješku';
$lang['recurring_custom'] = 'Proizvoljno';
// don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years'] = $lang['expense_recurring_years'];
$lang['invoice_recurring_days'] = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks'] = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Smjer';
$lang['notify_project_members_status_change'] = 'Obavijestite članove projekta da se status promijenio';
$lang['not_project_status_updated'] = 'Status projekta je promijenjen iz %s u %s';
$lang['ticket_not_found'] = 'Zahtjev nije pronađen';
$lang['project_not_found'] = 'Projekt nije pronađen';
$lang['export_project_data'] = 'Izvezi podatke o projektu';
$lang['total_project_members'] = 'Ukupan Broj Članova na Projektu';
$lang['total_project_files'] = 'Priloženih Datoteka';
$lang['total_project_discussions_created'] = 'Stvorenih Rasprava';
$lang['project_member'] = 'Član';
$lang['total_project_discussions_comments'] = 'Ukupan broj komentara na raspravama';
$lang['staff_total_task_assigned'] = 'Ukupan broj dodijeljenih aktivnosti';
$lang['staff_total_comments_on_tasks'] = 'Komentara na aktivnost';
$lang['project_members_overview'] = 'Pregled članova projekta';
$lang['project_milestones_overview'] = 'Pregled Dostignuća';
$lang['total_tasks_in_milestones'] = 'Ukupan broj dodijeljenih aktivnosti';
$lang['total_task_members_assigned'] = 'Ukupan broj odgovornih';
$lang['total_task_members_followers'] = 'Ukupno operativaca';
$lang['total_milestones'] = 'Ukupan broj dostignuća';
$lang['total_project_worked_days'] = 'Ukupno je radio';
$lang['finance_overview'] = 'Pregled financija';
$lang['project_custom_fields'] = 'Proizvoljna polja';
$lang['total_tickets_related_to_project'] = 'Ukupno zahtjeva povezanih sa projektom';
$lang['projects_total_invoices_created'] = 'Ukupno stvorenih račun';
$lang['total_invoiced_amount'] = 'Ukupno fakturirana suma';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Ne šaljite obavijest o plaćanju računa na kontakte klijenta';
$lang['no_preview_available_for_file'] = 'Za tu datoteku nije dostupan pregled.';
$lang['project_activity_deleted_file_discussion_comment'] = 'Datoteka sa komentara na rasporavi je obrisana';
$lang['file_not_found'] = 'Datoteka nije pronađena';
$lang['email_template_discussion_info'] = 'Ovaj se predložak koristi za komentare u raspravi na projektu. (rasprave o datotekama i redovne rasprave)';
$lang['format_a4_portrait_size'] = 'Portret';
$lang['only_show_contact_tickets'] = 'U području klijenata prikazuju se samo zahtjevi vezani uz prijavljeni kontakt (Primarni kontakt nije primijenjen)';
$lang['cancel_overdue_reminders_invoice'] = 'Spriječite slanje propuštenih podsjetnika za ovaj račun';
$lang['customer_shipping_address_notice'] = 'Nemojte ispuniti podatke o dostavi ako nećete koristiti adresu za dostavu na računima kupaca';
$lang['timesheets_overview'] = 'Pregled Kontrolnih Kartica';
$lang['invoice_status_draft'] = 'Skica';
$lang['save_as_draft'] = 'Spremi kao skicu';
$lang['convert_and_save_as_draft'] = 'Pretvori i spremi kao skicu';
$lang['convert'] = 'Pretvori';
$lang['exclude_invoices_draft_from_client_area'] = 'Isključite Račune s statusom skice iz korisničkog sučelja';
$lang['invoice_draft_status_info'] = 'Ova račun ima status Skice, status će se automatski promijeniti kada pošaljete račun klijentu ili ga označite kao poslanim.';
$lang['task_info'] = 'Info Aktivnosti';
$lang['recurring_tasks'] = 'Ponavljajuće';
// don't translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recurring_months'] = $lang['expense_recurring_months'];
$lang['task_recurring_years'] = $lang['expense_recurring_years'];
$lang['task_recurring_days'] = $lang['expense_recurring_days'];
$lang['task_recurring_weeks'] = $lang['expense_recurring_weeks'];
$lang['todays_tasks'] = 'Današnje aktivnosti';
$lang['payment_mode_invoices_only'] = 'Samo Računi';
$lang['payment_mode_expenses_only'] = 'Samo Troškovi';
$lang['task_no_checklist_items_found'] = 'Stavke za odraditi nisu pronađene za ovu aktivnost';
$lang['task_no_description'] = 'Nema opisa ove aktivnosti';
$lang['expenses_reminders'] = 'Podsjetnici';
$lang['expense_set_reminder_title'] = 'Postavi podsjetnik troška';
$lang['calendar_expense_reminder'] = 'Podsjetnici Troškova';
$lang['recurring_task'] = 'Ponavljajuća Aktivnost';
$lang['disable_email_from_being_sent'] = 'Onemogući slanje ove poruke e-pošte';
$lang['not_sent_indicator'] =  'Nije Poslano';
$lang['proposal_status_revised'] =  'Revidirano';
$lang['customer_currency_change_notice'] =  'Ako klijent koristi neku drugu valutu osim osnovne svakako je potrebno odabrati odgovarajuću valutu za tog klijenta. Promjena valute nije moguća nakon što se transakcije zabilježe.';
$lang['click_to_add_content'] =  'Kliknite ovdje za dodavanje sadržaja';
$lang['related_to_project'] =  'Ovo %s povezano je sa %s: %s';
$lang['back_to_lead'] =  'Povratak na Potenijalnog Kupca';
$lang['add_task_timer_started_warning'] =  'Zaustavite trenutno pokrenuti brojač za ovu aktivnost kako biste mogli dodati novog ručno.';
$lang['sending_email_contact_permissions_warning'] =  'Neuspjeh kod automatskog odabira kontakat klijenta. Budite sigurni da klijent ima kontakte koji su na njega vezani sa dozvolama %s';

# Version 1.2.6
$lang['currently_supported_currencies'] = 'Trenutačno podržane valute';
$lang['authorize_notice'] = 'SSL je potreban ako upotrebljavate API za plaćanje Authorize.net za autorizaciju. Authorize.net podržava samo jednu valutu po računu. Svakako dodajte samo jednu valutu povezanu s vašim autorizacijskim računom u polju valuta.';
$lang['settings_paymentmethod_developer_mode'] = 'Način razvojnog programera';
$lang['payment_cardholder_name'] = 'Ime i prezime vlasnika kartice';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'API ID Prijave';
$lang['settings_paymentmethod_mollie_api_key'] =  'API Ključ';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'API ID Transakcije';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Tajni Ključ';
$lang['leads_report_converted_notice'] =  'Samo potencijalni kupac koji priprada zadanom statusu klijenta će biti pretvoren potencijalni kupac, ako potencijalni kupac pripada zadanom statusu klijenta i nije pretvoren u klijenta svejedno će se račuati kao pretvoren potencijalni kupac';
$lang['payment_method'] = 'Način Plaćanja';
$lang['payment_method_info'] = 'Neki pristupnici plaćanja podržavaju različite/više načia plaćanja kao što su Kreditna kartica, Paypal i transakcijski račun.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP Ključ';
$lang['project_invoice_select_all_expenses'] = 'Odaberite sve troškove';
$lang['role_update_staff_permissions'] = 'Ažurirajte sve Update all dozvole djelatnika koji koriste ovu ulogu';
$lang['customer_active'] = 'Aktivan';
$lang['note_updated_successfully'] = 'Bilješka je uspješno ažurirana';
$lang['update_note'] = 'Ažuriraj bilješku';
$lang['update_comment'] = 'Ažuriraj komentar';
$lang['comment_updated_successfully'] = 'Komentar je uspješno ažuriran';
$lang['staff_send_welcome_email'] = 'Pošalji e-poštu dobrodošlice';
$lang['proposal_warning_email_change'] = 'E-pošta je promijenjena za %s. Ovaj %s je vezan za ponudu/e. Želite li ažurirati sve e-pošte na ponudama povezanim sa %s?';
$lang['update_proposal_email_yes'] = 'Da, ažuriraj sve linkove.';
$lang['update_proposal_email_no'] = 'Ne, ja ću ažurirati ručno.';
$lang['proposals_emails_updated'] = 'Sve e-pošte ponuda su koje su povezane sa %s su ažurirane na %s';
$lang['custom_field_company'] = 'Tvrtka';
$lang['actions'] = 'Akcije';
$lang['project_mark_as'] = 'Označi kao %s';
$lang['todo_edit_title'] = 'Uredi osobne zadatke';
$lang['additional_action_required'] = 'Potrebne su dodatne akcije!';
$lang['project_mark_tasks_finished_confirm'] = 'Potvrdi';
$lang['project_marked_as_success'] = 'Projekt je uspješno označen kao %s';
$lang['project_marked_as_failed'] = 'Neuspjeh kod označavanja projekta kao %s';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Automatski dodijeli kao administratora nakon konverzije';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Ako je ova opcija postaljena na YES djelatnici koji pretvore potencijalnog kupca u klijenta će postati administratori tog klijenta. NAPOMENA: Ova opcija će se primijeniti samo na djelatnike koji nemaju dozvola za pregled klijenata';
$lang['auto_close_tickets_disable'] = 'Postavi 0 za onemogućeno';
$lang['task_checklist_item_completed_by'] = 'Završio %s';
$lang['staff_email_signature_help'] = 'Ako ostavite prazno zadan potpis iz postavki će biti korišten';
$lang['customer_sales'] = 'Prodaja';
$lang['default_task_priority'] = 'Zadani prioritet';
$lang['project_send_created_email'] = 'Pošalji e-poštu vezanu za projekt';
$lang['survey_send_to_lists'] = 'Pošalji anketu na popis';
$lang['survey_send_notice'] = 'Elektroničke pošte će biti poslane preko ponavljajućeg posla po satu.';
$lang['view_permission_auto_checked'] = 'Dozvola za pregled je automatski označena. Vi trebate označiti dozvolu za pregled ako želite koristiti ostale opcije bez poteškoća. Uredi, stvori, obriši se ne mogu koristiti bez dozvole za pregled.';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'Prikaži plaćanja računa (transakcije) u PDF-u';
$lang['bulk_actions'] = 'Zajedničke Radnje';
$lang['additional_filters'] = 'Napredno sortiranje';
$lang['expenses_available_to_bill'] = 'Troškovi za fakturiranje';
$lang['bulk_action_customers_groups_warning'] = 'If you do not select any group all groups assigned to the selected customers will be removed.';
$lang['customer_attachments_show_in_customers_area'] = 'Prikaži na području kupca';
$lang['customer_attachments_show_notice'] = 'Samo datoteke predane od strane klijenta imaju mogućnost da se prikažu/sakriju u podrućju kupca.';
$lang['customer_profile_files'] = 'Datoteke';
$lang['no_files_found'] = 'Nema pronađenih datoteka';
$lang['survey_customers_all'] = 'Svi djelatnici';
$lang['custom_field_column'] = 'Rešetka (Bootstrap Stupac npr. 12) - Maksimalno je 12';
$lang['task_status'] = 'Status';
$lang['task_status_1'] = 'Nije započeo';
$lang['task_status_2'] = 'Čekaju se povratne informacije';
$lang['task_status_3'] = 'Testiranje';
$lang['task_status_4'] = 'U toku';
$lang['task_status_5'] = 'Završeno';
$lang['task_mark_as'] = 'Označi kao %s';
$lang['task_marked_as_success'] = 'Aktivnost je označena uspješno kao %s';
$lang['task_drag_drop_notice'] = 'Povuci i ispusti se koristi kako bi se lakše izmijenilo %s. Redoslijed neće biti primijenjen za ovo područje.';
$lang['search_tasks'] = 'Pretraži Aktivnosti';
$lang['tasks_kanban_limit'] = 'Limitiraj aktivnosti na ploči po statusu';
$lang['show_on_invoice_on_pdf'] = 'Prikaži %s na računma u PDF';
$lang['show_pay_link_to_invoice_pdf'] = 'Prikaži link plaćanja na pdf-u (Nije primijenjivo ako je status fakutre otkazno)';
$lang['no_leads_found'] = 'Nisu pronađeni potencijalni kupci';
$lang['created_today'] = 'Stvoreno Danas';
$lang['total_tasks_deleted'] = 'Ukupno obrisanih aktivnosti: %s';
$lang['total_tickets_delete'] = 'Ukupno obrisanih zahtjeva: %s';
$lang['total_tickets_delete'] = 'Ukupno obrisanih zahtjeva: %s';
$lang['format_letter_portrait'] = 'Portret pisma';
$lang['format_letter_landscape'] = 'Pejsaž pisma';
$lang['period_datepicker'] = 'Točka';
$lang['total_by_hourly_rate'] = 'Ukupno po satu';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'npr. PDV stavke 15&#37; će biti prikazan 15&#37; bez naziva poreza (Ne može se primijeniti ako postoji više porez sa istim imenom i postotkom poreza za stavku)';
$lang['back_to_project'] = 'Nazad na projekt';
$lang['view_kanban'] = 'Pogledaj ploču';
$lang['invoice_is_overdue'] = 'Ova račun je u valuti već %s dana';

# Version 1.2.9
$lang['time_decimal'] = 'Vrijeme (decimalno)';
$lang['time_h'] = 'Vrijeme (sati)';
$lang['proposal_number_prefix'] = 'Prefiks Broja Ponude';
$lang['settings_number_padding_prefix'] = 'Ispunjavanje nula za format prefiksa <br /> <small>npr. Ako je ova vrijednost 3 broj će biti formatiran: 005 ili 025</small>';
$lang['this_week_payments'] = 'Ovotjedne uplate';
$lang['last_week_payments'] = 'Prošlotjedne uplate';
$lang['not_published_new_post'] = 'nova objava';
$lang['expense_name'] = 'Naziv';
$lang['expense_name_help'] = 'Za osobnu uporabu';
$lang['adjustments'] = 'Podešavanja';
$lang['tax_breakdown'] = 'Porezna podjela';
$lang['payments_received'] = 'Primljenih uplata';
$lang['not_lead_activity_created_proposal'] = 'Stvorio novu ponudu - %s';
$lang['lead_title'] = 'Položaj';
$lang['lead_address'] = 'Adresa';
$lang['lead_city'] = 'Grad';
$lang['lead_state'] = 'Županija';
$lang['lead_country'] = 'Država';
$lang['lead_zip'] = 'Poštanski broj';
$lang['lead_is_public_yes'] = 'Da';
$lang['lead_is_public_no'] = 'Ne';
$lang['lead_info'] = 'Informacije o potencijalnom kupcu';
$lang['lead_general_info'] = 'Općenite informacije';
$lang['lead_latest_activity'] = 'Zadnja aktivnost';
$lang['item_description_new_lines_notice'] = 'Novi redovi nisu podržani za opis stavke. Koristite stavku dugi opis umjesto toga.';
$lang['estimates_report'] = 'Izvještaj predračuna';
$lang['confirm'] = 'Potvrdi';
$lang['delete_staff'] = 'Obriši djelatnika';
$lang['delete_staff_info'] = 'Određeni podaci ovog djelatnika trebaju biti prebečni drugom korisniku. Molimo Vas da odaberete korisnika na kojega želite prebaciti podatke.';
$lang['estimate_items'] = 'Stavke Predračuna';
$lang['no_proposals_found'] = 'Nema pronađenih ponuda';
$lang['no_estimates_found'] = 'Nema pronađenih predračuna';
$lang['pipeline_limit_status'] = 'Limit kartica po statusu';
$lang['settings_update'] = 'Ažuriranje sustava';
$lang['purchase_key'] = 'Ključ kupovine';
$lang['update_now'] = 'Ažurirajte sada';
$lang['update_available'] = 'Ažuriranje je dostupno';
$lang['latest_version'] = 'Zadnja verzija';
$lang['your_version'] = 'Vaša verzija';
$lang['using_latest_version'] = 'Vi koristite najnoviju verziju';
$lang['mark_as_active'] = 'Označi kao aktivno';
$lang['customer_inactive_message'] = 'Ovo je neaktivan profil klijenta i određene značajke mogu biti onemogućene';
$lang['active_customers'] = 'Aktivni Klijenti';
$lang['inactive_active_customers'] = 'Neaktivni Klijenti';
$lang['include_proposal_items_merge_field_help'] = 'Uključite stavke ponude sa spojenim poljem bilo gdje u tijelu ponude kao %s';
$lang['all_data_synced_successfully'] = 'Svi podaci su uspješno sinkronizirani';
$lang['sync_now'] = 'Sinkroniziraj sada';
$lang['sync_data'] = 'Sinkroniziraj podatke';
$lang['sync_proposals_up_to_date'] = 'Sve ponude su ažurirane, nema ničega za sinkronizaciju';
$lang['proposal_sync_1_info'] = 'Svi podaci ponude su spremljeni zasebno za svaku ponudu nakon stvaranja iste. Ažuriranje %s informacija neće utjecati na prethdno stvorene ponude za ovog %s.';
$lang['proposal_sync_2_info'] = 'Ako ste ažurirali vaše %s informacije, možete sinkronizirati sve nove podatke pridružene ponudama. Ovo je popis polja koja se mogu sinkronizirati.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Uključi i dodatne detalje za stavku dugog opisa uzetog sa ovog troška.';

# Version 1.4.0
$lang['calendar_events_limit'] = 'Limit događaja po kalendaru (Mjesečni i tjedni pregled)';
$lang['show_page_number_on_pdf'] = 'Prikaži broj stranica na PDF-u';
$lang['customer_active_inactive_help'] = 'Neće biti prikazan u padajućem izborniku kada se stvaraju novi zapisi';
$lang['item_groups'] = 'Grupe';
$lang['item_group'] = 'Grupa Stavke';
$lang['item_group_name'] = 'Naziv Grupe';
$lang['new_item_group'] = 'Nova Grupa';
$lang['show_setup_menu_item_only_on_hover'] = 'Prikaži meni postavki samo kada se pređe mišem preko područja glavnog sidebara';
$lang['internal_article'] = 'Interni članak';
$lang['expenses_created_from_this_recurring_expense'] = 'Stvoreni troškovi po ovom ponavljajućem trošku';
$lang['convert_to_task'] = 'Pretvori u aktivnost';
$lang['next_invoice_date'] = 'Datum sljedeće fakure: %s';
$lang['next_expense_date'] = 'Datum sljedećeg troška: %s';
$lang['invoice_recurring_from'] = 'Ovaj račun je kreiran iz ponavljajućeg računa broj: %s';
$lang['expense_recurring_from'] = 'Ovaj trošak je stvoren iz ponavaljajućeg troška: %s';
$lang['child_invoices'] = 'Djeca računa';
$lang['child_expenses'] = 'Djeca troškova';
$lang['no_announcements'] = 'Nama obavijesti';
$lang['unit'] = 'Jedinica';
$lang['permission_view_own'] = 'Prikaz (vlastito)';
$lang['permission_global'] = 'Globalno';
$lang['permission_customers_based_on_admins'] = 'Na temelju administratora klijenta';
$lang['permission_payments_based_on_invoices'] = 'Temeljeno na prikazu račun (vlastite) dozvole';
$lang['permission_projects_based_on_assignee'] = 'Ako djelatnik nema dozvolu pregleda (Globalnu) prikazati će mu se samo projekti gdje su djelatnici dodani kao članovi projekta.';
$lang['permission_tasks_based_on_assignee'] = 'Ako djelatnik nema dozvolu pregleda (Globalnu) prikazati će mu se samo aktivnosti na kojima je delatnik operativac, nositelj ili je aktivnost javna te u Postavi/Postavke/Aktivnosti Dozvolite svim djelatnicima da vide sve aktivnosti koje se odnose na projekt postavite kao Da kada je aktivnost povezana sa projektom.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Odabrana je prema zadanim postavkama na računu';
$lang['paymentmethod_braintree_merchant_id'] = 'ID trgovca';
$lang['paymentmethod_braintree_private_key'] = 'Privatni ključ';
$lang['paymentmethod_braintree_public_key'] = 'Javni ključ';
$lang['company_requires_vat_number_field'] = 'Tvrtka zahtjeva korištenje polja za PDV broj';
$lang['no_company_view_profile'] = 'Osoba - Pogledaj Profil';
$lang['company_is_required'] = 'Polje tvrtke je obavezno?';
$lang['estimate_invoiced'] = 'Fakturirano';
$lang['file_date_uploaded'] = 'Preneseno dana';
$lang['allow_contact_to_delete_files'] = 'Dozvolite kontaktima da obrišu svoje datoteke koje su prenesene preko područja za kupca';
$lang['file'] = 'Datoteka';
$lang['customer_contact_person_only_one_allowed'] = 'Samo je 1 kontakt dozvoljen kada polje tvrtke nije ispunjeno. Sustav će gumiti ovog klijenta kao osobu.';
$lang['web_to_lead'] = 'Web Obrazac u potencijalnog kupca';
$lang['web_to_lead_form'] = 'Web Obrazac u formu potencijalnog kupca';
$lang['new_form'] = 'Novi obrazac';
$lang['form_name'] = 'Naziv obrasca';
$lang['cf_option_in_use'] = 'Opcija koju želite ukloniti se koristi i ne može biti uklonjena. Opcija je automatski dodana postojećim opcijama.';
$lang['form_builder'] = 'Graditelj Obrasca';
$lang['form_information'] = 'Postavke i detalji obrasca';
$lang['form_builder_create_form_first'] = 'Stvori obrazac prvo kako bi mogli koristiti graditelja obrazaca.';
$lang['notify_assigned_user'] = 'Odgovorna osoba';
$lang['form_recaptcha'] = 'Koristi Google Recaptcha';
$lang['form_lang_validation'] = 'Jezik';
$lang['form_lang_validation_help'] = 'Za poruke potvrde';
$lang['form_btn_submit_text'] = 'Tekst gumba za slanje';
$lang['form_success_submit_msg'] = 'Poruka koja se prikazuje kada je obrazac uspješno poslan';
$lang['total_submissions'] = 'Ukupni podnesci';
$lang['form_integration_code'] = 'Kod Integracije';
$lang['not_lead_imported_from_form'] = 'Novi potencijalni kupac je uvezen sa Web obrasca u obrazac potencijalnog kupca - %s';
$lang['not_lead_activity_log_attachment'] = 'Privitak je uvezen sa obrasca - %s';
$lang['form_integration_code_help'] = 'Kopirajte i zalijepite kod bilo gdje na svojem web-u kako bi se forma prikazala, osim toga, možete prilagoditi širinu i visinu px kako bi odgovarala vašoj web stranici.';
$lang['invoice_not_found'] = 'Račun nije pronađen';
$lang['estimate_not_found'] = 'Predračun nije pronađen';
$lang['expense_not_found'] = 'Trošak nije pronađen';
$lang['proposal_not_found'] = 'Ponuda nije pronađena';
$lang['new_task_assigned_non_user'] = 'Dodijeljena Vam je nova aktivnost - %s';
$lang['no_child_found'] = 'Nema pronađene djece %s';
$lang['company_vat_number'] = 'OIB';
$lang['not_lead_assigned_from_form'] = 'Novi potencijani kupac Vam je dodijeljen';
$lang['not_lead_activity_assigned_from_form'] = '%s ima dodijeljenog novog potencijalnog kupca';
$lang['form_allow_duplicate'] = 'Dozvolite dupli unos %s u bazu?';
$lang['track_duplicate_by_field'] = 'Zabranite dupli unos na polju';
$lang['and_track_duplicate_by_field'] = '+ polje (ostavite prazno kako biste pratili duple unose po 1 polju)';
$lang['create_the_duplicate_form_data_as_task'] = 'Stvorite duplikat %s podataka kao aktivnost i dodijelite odgovornom djelatniku';
$lang['create_the_duplicate_form_data_as_task_help'] = 'Koristi se za daljnji pregled podneska i poduzimanje potrebnih radnji';
$lang['currently_selected'] = 'Trenutno označeno';
$lang['search_ajax_empty'] = 'Odaberite i počnite pisati';
$lang['search_ajax_placeholder'] = 'Upiši za traženje...';
$lang['search_ajax_searching'] = 'Tražim...';
$lang['search_ajax_initialized'] = 'Počnite sa upisom za pretraživanje';
$lang['lead_description'] = 'Opis';
$lang['lead_website'] = 'WWW';
$lang['invoice_activity_auto_converted_from_estimate'] = 'Račun je stvoren automatikom iz predračuna sa brojem %s';
$lang['hour_of_day_perform_auto_operations'] = 'Sat za automatske opreacije';
$lang['hour_of_day_perform_auto_operations_format'] = 'Format 24 sata npr. 9 for 9am or 15 for 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Koristi se za ponavljajuće račune, zakašnjelih obavijesti itd.';
$lang['use_minified_files'] = 'Upotrijebite verziju minificiranih datoteka za css i js (samo datoteke sustava)';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'Zamijećena je promjena loga ili favicona. Ukoliko još uvijek vidite stari logo ili favicon obrišite keš pretraživača';
$lang['kb_search_articles'] = 'Pretražite članke baze znanja';
$lang['kb_search'] = 'Pretraga';
$lang['have_a_question'] = 'Imate pitanje?';
$lang['card_expiration_year'] = 'Godina isteka';
$lang['card_expiration_month'] = 'Mjesec isteka';
$lang['client_website'] = 'WWW';
$lang['search_project_members'] = 'Pretraži članove projekta...';
$lang['cf_translate_input_link_title'] = 'Naslov';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'Kliknite ovdje za dodavanje veze';
$lang['task_edit_delete_timesheet_notice'] = 'Zadatak kontrolne kartice %s, ne možete %s kontrolnu karticu.';
$lang['department_username'] = 'IMAP korisničko ime';
$lang['department_username_help'] = 'Samo ispunite ovo polje ako vaš IMAP poslužitelj koristi korisničko ime za prijavu umjesto adrese e-pošte. Imajte na umu da ćete i dalje trebati dodati adresu e-pošte.';
$lang['total_tickets_deleted'] = 'Ukupno obrisanih zahtjeva: %s';

# Version 1.5.1
$lang['ticket_linked_to_project'] = 'Ovaj zahtjev je vezan za projekt: %s';
$lang['only_own_files_contacts'] = 'Kontakti vide samo vlastite datoteke prenesene u području korisnika (datoteke prenesene u profil korisnika)';
$lang['only_own_files_contacts_help'] = 'Ako ručno dijelite datoteku s korisničkim profilom na druge kontakte, moći će vidjeti datoteku.';
$lang['share_file_with'] = 'Podijeli datoteku s';
$lang['file_share_visibility_notice'] = 'Ta se datoteka ne dijeli s kontaktima, prebacite vidljivost ponovno da biste mogli ponovno učitati';
$lang['share_file_with_show'] = 'Datoteka se dijeli s: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Omogućite primarnom kontaktu da biste pregledali / uredili pojedinosti o naplati i dostavi';
$lang['estimate_due_after'] = 'Estimate Due After (days)';

# Version 1.6.0
$lang['my_timesheets'] = 'Moje Kontrolne Kartice';
$lang['today'] = 'Danas';
$lang['open_in_dropbox'] = 'Otvori u Dropbox-u';
$lang['show_primary_contact'] = 'Prikaži puni naziv primarnog kontakta %s';
$lang['view_members_timesheets'] = 'Pogledaj sve kontrolne kartice';
$lang['priority'] = 'Prioritet';
$lang['fetch_from_google'] = 'Dohvatite od Googlea';
$lang['customer_fetch_lat_lng_usage'] = 'Ispunite adresu, grad i zemlju prije dohvaćanja kako biste dobili najbolji rezultat.';
$lang['g_search_address_not_found'] = 'Adresa nije pronađena, pokušajte ponovo';
$lang['proposals_report'] = 'Izvještaj ponuda';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Ako djelatnik nema dozvolu za POGLED jedino će moći stvoriti nove zahtjeve iz admin područja na korisničke kontakte gdje je dodijeljen kao administrator klijenta.';
$lang['staff_members_open_tickets_to_all_contacts'] = 'Dopustiti djelatnicima da otvore zahtjeve za sve kontakte?';
$lang['charts_based_report'] = 'Izvješće temeljeno na grafikonima';
$lang['delete_backups_older_then'] = 'Automatski izbrisati sigurnosne kopije starije od X dana (postavite 0 da biste onemogućili)';
$lang['responsible_admin'] = 'Odgovorni administrator';
$lang['tags'] = 'Tagovi';
$lang['tag'] = 'Tag';
$lang['customer_map_notice'] = 'Potrebno je unijeti longitudu i latitudu u profil klijenta da bi se mapa prikazala ovdje';
$lang['default_view'] = 'Zadani pregled';
$lang['day'] = 'Dan';
$lang['agenda'] = 'Dnevni red';
$lang['timesheet_tags'] = 'Oznake kontrolne kartice';
$lang['show_more'] = 'Prikaži više';
$lang['show_less'] = 'Prikaži manje';
$lang['project_completed_date'] = 'Završeno dana';
$lang['language'] = 'Jezik';
$lang['this_week'] = 'Ovaj tjedan';
$lang['last_week'] = 'Prošli tjedan';
$lang['this_month'] = 'Ovaj mjesec';
$lang['last_month'] = 'Prošli mjesec';
$lang['no_description_project'] = 'Nem opisa za ovaj projekt';
$lang['sales_string'] = 'Prodaja';
$lang['no_project_members'] = 'Nema dodijeljenih članova ovom projektu';
$lang['search_by_tags'] = 'Koristite # + naziv tag-a za pretraživanje po tagovima';
$lang['project_status_5'] = 'Otkazano';

# Version 1.7.0
$lang['not_activity_new_reminder_created'] = 'Postavite novi podsjetnik za %s sa datumom %s';
$lang['not_activity_new_task_created'] = 'Stvoren je novi zadatak - %s';
$lang['recurring_invoice_draft_notice'] = 'Ovaj račun se nalazi u skicama, morate ga označiti kao poslan. Ponavljajući računi koji imaju status nedovršeni neće biti automatski kreirani.';
$lang['recurring_recreate_hour_notice'] = '%s će biti ponovo kreirana u vrijeme određeno u postavkama, na lokaciji Pristup>Postavke – Automatski zadaci';
$lang['invoice_project_include_timesheets_notes'] = 'Uključi napomenu svake kontrolne kartice u opisu predmeta';
$lang['events'] = 'Događaji';
$lang['clear'] = 'Pregledan';
$lang['auto_mark_as_public'] = 'Automatski označi kao javno';
$lang['time_format'] = 'Formatiranje vremena';
$lang['time_format_24'] = '24 sata';
$lang['time_format_12'] = '12 sati';
$lang['delete_activity_log_older_then'] = 'Izbriši aktivnosti sistema starije od X mjeseci';
$lang['mark_as_read'] = 'Označi kao pročitano';
$lang['mark_all_as_read'] = 'Označi sve kao pročitano';
$lang['tax_1'] = 'Porez 1';
$lang['tax_2'] = 'Porez 2';
$lang['total_with_tax'] = 'Ukupno sa porezom';
$lang['new_task_auto_assign_current_member'] = 'Automatski stvori autora zadatka kad je novi zadatak stvoren';
$lang['new_task_auto_assign_current_member_help'] = 'Ne odnosi se na zadatke koji su povezani sa projektom i autor nije član projekta';
$lang['copy_project_tasks_status'] = 'Status zadatka';
$lang['tasks_summary'] = 'Sažetak aktivnosti';
$lang['show_gantt_by'] = 'Prikaži plan kao';
$lang['vault'] = 'Sef';
$lang['new_vault_entry'] = 'Novi zapis u sef';
$lang['server_address'] = 'Adresa servera';
$lang['port'] = 'Ulaz';
$lang['vault_username'] = 'Korisničko ime';
$lang['vault_password'] = 'Lozinka';
$lang['vault_description'] = 'Kratki opis';
$lang['vault_entry'] = 'Zapis Sefa';
$lang['no_port_provided'] = 'Nije omogućeno';
$lang['view_password'] = 'Vidi lozinku';
$lang['security_reasons_re_enter_password'] = 'Iz sigurnosnih razloga, molimo Vas da unesete Vašu lozinku ispod';
$lang['password_change_fill_notice'] = 'Ispunite polje s lozinkom, samo ukoliko ju želite promijeniti';
$lang['vault_password_user_not_correct'] = 'Vaša lozinka je netočna, molimo pokušajte ponovo';
$lang['no_vault_entries'] = 'Nema pronađenih zapisa u sefu ovog klijenta.';
$lang['vault_entry_created_from'] = 'Ovaj svod je stvoren od strane  %s';
$lang['vault_entry_last_update'] = 'Zadnje ažurirano od strane %s';
$lang['vault_entry_visible_to_all'] = 'Vidljivo svim djelatnicima, koje ima pristup ovom klijentu';
$lang['vault_entry_visible_creator'] = 'Vidljivo samo meni (administrator nije isključen)';
$lang['vault_entry_visible_administrators'] = 'Vidljivo samo administratorima';
$lang['my_reminders'] = 'Mojih Podsjetnika';
$lang['reminder_related'] = 'Povezano sa';
$lang['event_notification'] = 'Obavijesti';
$lang['days'] = 'Dana';
$lang['reminder_notification_placeholder'] = 'Npr. 30 minuta prije';
$lang['event_color'] = 'Boja događaja';
$lang['group_by_task'] = 'Sortiraj po zadatku';
$lang['save'] = 'Spremi';
$lang['disable_languages'] = 'Onemogući jezike';

# Version 1.8.0
$lang['not_customer_viewed_invoice'] = 'Račun broj %s je pregledan';
$lang['not_customer_viewed_estimate'] = 'Predračun broj %s je pregledan';
$lang['not_customer_viewed_proposal'] = 'Ponuda broj %s je pregledana';
$lang['display_inline'] = 'Prikaz redoslijeda';
$lang['email_header'] = 'Zadano zaglavlje';
$lang['email_footer'] = 'Zadano podnožje';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Isključi nedovršene zahtjeve iz područja klijenta';
$lang['pusher_app_key'] = 'APP ključ';
$lang['pusher_app_secret'] = 'APP tajna';
$lang['pusher_app_id'] = 'APP ID';
$lang['pusher_cluster_notice'] = 'Ostaviti prazno da bi se upotrijebio nositelj klastera';
$lang['pusher_enable_realtime_notifications'] = 'Omogući obavijesti u stvarnom vremenu';
$lang['task_is_overdue'] = 'Ovaj zadatak je istekao';
$lang['this_year'] = 'Ove godine';
$lang['last_year'] = 'Prošle godine';
$lang['customer_statement'] = 'Odobrenje';
$lang['customer_statement_for'] = 'Odobrenje klijenta za %s';
$lang['account_summary'] = 'Sažetak računa';
$lang['statement_beginning_balance'] = 'Početno stanje';
$lang['invoiced_amount'] = 'Fakturirani Iznos';
$lang['amount_paid'] = 'Plaćeni iznos';
$lang['statement_from_to'] = '%s do %s';
$lang['customer_statement_info'] = 'Prikaz svih račun i plaćanja između %s i %s';
$lang['balance_due'] = 'Stanje na dan';
$lang['statement_heading_date'] = 'Datum';
$lang['statement_heading_details'] = 'Detalji';
$lang['statement_heading_amount'] = 'Iznos';
$lang['statement_heading_payments'] = 'Plaćanja';
$lang['statement_heading_balance'] = 'Stanje';
$lang['statement_invoice_details'] = 'Račun %s - na dan %s';
$lang['statement_payment_details'] = 'Plaćanje (%s) za račun %s';
$lang['statement_bill_to'] = 'Za';
$lang['send_to_email']          = 'Pošalji na email';
$lang['statement_sent_to_client_success'] = 'Izjava je uspješna poslana klijentu';
$lang['statement_sent_to_client_fail']    = 'Poteškoće tijekom slanja izjave';
$lang['view_account_statement']    = 'Pregledaj izjavu računa';
$lang['text_not_recommended_for_servers_limited_resources'] = 'Nije preporučeno, ukoliko server ima ograničene resurse. Npr. Dijejeni hosting';
$lang['tasks_bull_actions_assign_notice'] = 'Ukoliko je zadatak povezan sa projektom, a zaposlenik kojem dodijeljujete zadatak nije član projekta, on/a će biti automatski dodan kao član';
$lang['company_information'] = 'Podaci o tvrtci';
$lang['ticket_form'] = 'Forma zahtjeva';
$lang['ticket_form_subject'] = 'Naslov';
$lang['ticket_form_name'] = 'Vaše ime';
$lang['ticket_form_email'] = 'Adresa e-pošte';
$lang['ticket_form_department'] = 'Odjel';
$lang['ticket_form_message'] = 'Poruka';
$lang['ticket_form_priority'] = 'Važnost';
$lang['ticket_form_service'] = 'Servis';
$lang['ticket_form_submit'] = 'Pošalji';
$lang['ticket_form_attachments'] = 'Prilozi';

$lang['success_submit_msg'] = 'Zahvaljujemo što ste nas kontaktirali. Uskoro ćemo Vam se povratno javiti.';
$lang['vault_entry_share_on_projects'] = 'Podijeli unos ovog svoda u projekt s članovima projekta';
$lang['project_shared_vault_entry_login_details'] = 'Pregledaj detalje prijave klijenta';
$lang['iso_code'] = 'ISO Kod';
$lang['estimates_not_invoiced'] = 'Nije Fakturirano';
$lang['show_on_ticket_form'] = 'Prikaži na formatu zahtjeva';
$lang['cancel_upload'] = 'Obustavi prijenos podataka';
$lang['show_table_export_button'] = 'Prikaži gumb za eksportiranje tablice';
$lang['show_table_export_all'] = 'Za sve djelatnike';
$lang['show_table_export_admins'] = 'Jedino za administratore';
$lang['show_table_export_hide'] = 'Sakrij gumb za eksportiranje svim djelatnicima';
$lang['task_created_by'] = 'Stvorio %s';
$lang['validation_extension_not_allowed'] = 'Tip datoteke nije podržan';
$lang['allow_staff_view_proposals_assigned'] = 'Dozvoli djelatnicima pregled zahtjeva koji su im dodijeljeni';
$lang['task_users_working_on_tasks_multiple'] = 'Trenutno %s radi na ovom zadatku';
$lang['task_users_working_on_tasks_single'] = 'Trenutno %s radi na ovom zadatku';

# Version 1.9.0
$lang['estimated_hours'] = 'Procijenjeni broj sati';
$lang['two_factor_auth_failed_to_send_code'] = 'Slanje dvofaznog autentifikacijskog kôda na email nije uspjelo, SMTP postavke možda nisu odgovarajuće postavljene';
$lang['two_factor_auth_code_sent_successfully'] = 'Poslan je email na %s s verifikacijskom kôdom kako bi se potvrdila Vaša prijava';
$lang['enable_two_factor_authentication'] = 'Omogući autentifikaciju u dva koraka';
$lang['two_factor_authentication_info'] = 'Autentifikacija u dva koraka je dostavljena putem emaila, prije omogućavanja dvofaktorske autentifikacije potrebno je provjeriti jesu li Vaše SMTP postavke ispravno postavljene i je li sustav u mogućnosti poslati email. Jedinstveni autentifikacijski ključ će biti poslan na email nakon prijave';
$lang['timesheets_overview_all_members_notice_admins'] = 'Pregled kontrolnih kartica za sve djelatnike moguć je samo administratorima.';
$lang['two_factor_authentication'] = 'Autentifikacija u dva koraka';
$lang['two_factor_authentication_code'] = 'Kod';
$lang['admin_two_factor_auth_heading'] = 'Autentifikacijski kôd';
$lang['two_factor_code_not_valid'] = 'Autentifikacijski kôd nije valjan';
$lang['back_to_login'] = 'Idi natrag na prijavu';
$lang['enter_activity'] = 'Unos aktivnosti';
$lang['attach_files'] = 'Priloži datoteke';
$lang['no_tags_used'] = 'Nema oznaka korištenih od strane sustava';
$lang['exclude_completed_tasks'] = 'Isključi dovršene zadatke';
$lang['modal_width_class'] = 'Modalni dialog za klasom';
$lang['contract_copy'] = 'Kopija';
$lang['contract_copied_successfully'] = 'Ugovor kopiran uspješno';
$lang['contract_copied_fail'] = 'Neuspješno kopiranje ugovora';
$lang['project_marked_as_finished_to_contacts'] = 'Poslan <b>Projekt označen kao dovršen</b> email kontaktima klijenata';
$lang['only_admins'] = 'Samo administrator';
$lang['new_notification'] = 'Nova obavijest!';
$lang['enable_desktop_notifications'] = 'Omogući obavijesti na radnoj površini';
$lang['save_and_send'] = 'Spremi i Pošalji';
$lang['private'] = 'Privatno';
$lang['task_created_at'] = 'Stvoreno %s';
$lang['hide_notified_reminders_from_calendar'] = 'Sakrij dovršene podsjetnike u kalendaru';
$lang['last_active'] = 'Zadnje aktivan';
$lang['open_ticket'] = 'Otvori zahtjev';
$lang['task_add_description'] = 'Dodaj opis';
$lang['project_setting_create_tasks'] = 'Stvori zadatak';
$lang['project_setting_edit_tasks'] = 'uredi zadatak (samo zadaci stvoreni iz kontakata)';

# Version 1.9.2
$lang['items_report'] = 'Izvještaj o artiklima';
$lang['reports_item'] = 'Artikl';
$lang['quantity_sold'] = 'Prodana količina';
$lang['total_amount'] = 'Ukupan iznos';
$lang['avg_price'] = 'Prosječna cijena';
$lang['item_report_paid_invoices_notice'] = 'Izvještaj o artiklima je napravljen samo na temelju plaćenih račun, prije popusta i poreza';
$lang['overview'] = 'Pregled';
$lang['timer_started_change_status_in_progress'] = 'Promijeni status zadatka u „U toku“ kada započne odbrojavanje vremena (vrijedi samo za zadatke koji imaju status „Nije pokrenuto“';
$lang['company_info_format'] = 'Format informacija o tvrtki (PDF i HTML)';
$lang['customer_info_format'] = 'Format informacija o klijentu (PDF i HTML)';
$lang['custom_field_info_format_embed_info'] = 'Proizvoljna polja za %s se mogu jednostavno spojiti sa PDF i HTML dokumentima, tako što se omogući spajanje u formatu stranicu na sljedećoj stranici: %s';
$lang['transfer_lead_notes_to_customer'] = 'Prijenos uvodi bilješke u profil klijenta';
$lang['authorized_signature_text'] = 'Autorizirani potpis';
$lang['show_pdf_signature_invoice'] = 'Prikaži PDF potpis na računu';
$lang['show_pdf_signature_estimate'] = 'Prikaži PDF potpis na predračunu';
$lang['signature'] = 'Potpis';
$lang['signature_image'] = 'Slika potpisa';
$lang['insert_checklist_templates'] = 'Unesi predloške liste za provjeru';
$lang['save_as_template'] = 'Spremi kao predložak';
$lang['scroll_responsive_tables_help'] = 'Tablice s velikom količinom podataka imat će horizontalni pregled, umjesto redaka sažetih u „+“ ikoni';
$lang['scroll_responsive_tables'] = 'Aktiviraj sažimanje pregleda tablice';
$lang['invoice_item_add_edit_rate_currency'] = 'Ocijeni - %s';
$lang['total_files_deleted'] = 'Ukupno obrisanih datoteka: %s';
$lang['invalid_transaction'] = 'Nevažeča transakcija. Molimo Vas pokušajte ponovno.';
$lang['payment_gateway_payu_money_key'] = 'PayU Money Key';
$lang['payment_gateway_payu_money_salt'] = 'PayU Money Salt';
$lang['settings_paymentmethod_description'] = 'Opis plaćanja kontrolne ploče';

# Version 1.9.3
$lang['default_ticket_reply_status'] = 'Podešen je zadani status prilikom odgovaranja na zahtjev';
$lang['ticket_add_response_and_back_to_list'] = 'Vrati se na listu zahtjeva nekon što je odgovor podnesen';

# Version 1.9.4
$lang['default_task_status'] = 'Zadani status prilikom kreiranja novog zahtjeva';
$lang['custom_field_pdf_html_help'] = 'Provjerite prije nastavka' . $lang['custom_field_show_on_client_portal'] . ' polja koja mogu biti prilagođena tako da budu vidljiva na sučelju klijentima i kad klijenti preuzimaju PDF ili primaju PDF putem e-mail-a.';
$lang['auto'] = 'Auto';
$lang['email_queue'] = 'Red čekanja elektroničke pošte';
$lang['email_queue_enabled'] = 'Omogućite red čekanja elektroničke pošte';
$lang['email_queue_skip_attachments'] = 'Nemojte dodati elektroničku poštu sa privicima u red čekanja.';
$lang['disable'] = 'Onemogući';
$lang['enable'] = 'Omogući';
$lang['auto_dismiss_desktop_notifications_after'] = 'Automatski isključi notifikacije radne ploče nakon x sekundi (0 do isključenja)';
$lang['proposal_info_format'] = 'Format informativnog zahtjeva (PDF ili HTML)';
$lang['hide_tasks_on_main_tasks_table'] = 'Sakrij projektne zahtjeve u glavnoj tablici zahtjeva (admin sučelje)';
$lang['ticket_replies_order'] = 'Redoslijed rješavanja zahtjeva';
$lang['ticket_replies_order_notice'] = 'Inicijalna poruka prilikom podnošenja zahtjeva će uvijek biti prikazana kao prva.';
$lang['invoice_cancelled_email_disabled'] = 'Račun je otkazan. Odznači kao otkazano da bi slanje elektroničke pošte klijentu bilo moguće';
$lang['email_notifications'] = 'E-mail obavijesti';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Plaćanje je zabilježeno, e-mail je poslan na: %s';
$lang['exclude_inactive'] = 'Isključi neaktivne';
$lang['disable_all'] = 'Onemogući sve';
$lang['enable_all'] = 'Omogući sve';
$lang['reccuring_invoice_option_gen_and_send'] = 'Stvori i automatski pošalji obnovljeni račun klijentu';
$lang['reccuring_invoice_option_gen_unpaid'] = 'Kreiraj neplaćeni račun';
$lang['reccuring_invoice_option_gen_draft'] = 'Kreiraj skicu računa';
$lang['event_created_by'] = 'Ovaj događaj je kreiran od strane %s';

# Version 1.9.5
$lang['customers_assigned_to_me'] = 'Klijenti dodijeljeni meni';
$lang['bcc_all_emails'] = 'Stavi me u BCC svih e-mailova';
$lang['confirmation_of_identity'] = 'Potvrda identiteta';
$lang['accept_identity_confirmation'] = 'Zatraži priznavanje potvrde identiteta';
$lang['accepted_identity_info'] = 'Ovaj %s je prihvaćen od strane %s na zahtjev %s s IP adrese %s';
$lang['clear_this_information'] = 'Očisti ovu informaciju';
$lang['new_task_auto_follower_current_member'] = 'Automatski dodaj autora zahtjeva kao pratitelja zahtjeva, kad je novi zahtjev kreiran';
$lang['expenses_report_net'] = 'Neto iznos (suma svih stavki)';
$lang['expense_field_billable_help'] = 'Ukoliko je naplativo, %s može biti dodano u opširniji opis plaćanja.';
$lang['task_biillable_checked_on_creation'] = 'Opcija naplativo je automatski provjerena, kad je novi zahtjev stvoren?';
$lang['pause_overdue_reminders'] = 'Pauziraj istekle podsjetnike';
$lang['resume_overdue_reminders'] = 'Sažmi istekle podsjetnike';
# Credit Notes
$lang['credit_notes'] = 'Odobrenja';
$lang['credit_note'] = 'Odobrenje';
$lang['credit_note_lowercase'] = 'odobrenje';
$lang['credit_note_not_found'] = 'Odobrenje nije pronađeno';
$lang['credit_note_date'] = 'Datum odobrenja';
$lang['credit_date'] = 'Datum';
$lang['settings_sales_next_credit_note_number'] = 'Slijedeći broj odobrenja';
$lang['credit_note_number_prefix'] = 'Prefiks broja odobrenja';
$lang['credit_note_number'] = 'Odobrenje #';
$lang['credit_note_number_exists'] = 'Broj odobrenja već postoji';
$lang['show_shipping_on_credit_note'] = 'Prikaži podaktke o pošiljci na odobrenju';
$lang['credit_note_number_decrement_on_delete'] = 'Umanji broj odobrenja po brisanju.';
$lang['credit_note_number_decrement_on_delete_help'] = 'Broj će biti umanjen samo u slučaju da je ovo zadnje stvoreno odobrenje.';
$lang['credit_note_status'] = 'Status';
$lang['credit_note_status_open'] = 'Otvoreno';
$lang['credit_note_status_closed'] = 'Zatvoreno';
$lang['credit_note_status_void'] = 'Poništiti';
$lang['credit_note_mark_as_open'] = 'Označi kao otvoreno';
$lang['new_credit_note'] = 'Novo odobrenje';
$lang['credit_note_amount'] = 'Iznos';
$lang['credit_note_remaining_credits'] = 'Preostali iznos';
$lang['credit_note_client_note'] = 'Napomena';
$lang['invoices_credited'] = 'Računi za koje su vezana odobrenja';
$lang['apply_credits'] = 'Potvrdi odobrenja';
$lang['x_credits_available'] = '%s odobrenja dostupno.';
$lang['credit_amount'] = 'Iznos odobrenja';
$lang['credits_available'] = 'Dostupna odobrenja';
$lang['amount_to_credit'] = 'Iznos za odobrenje';
$lang['invoice_credits_applied'] = 'Odobrenje uspješno dodano na račun';
$lang['applied_credits'] = 'Dodana odobrenja';
$lang['credit_amount_bigger_then_invoice_balance'] = 'Ukupan iznos odobrenja je veći od iznosa računa';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'Ukupan iznos odobrenja je veći od preostalog iznosa odobrenja';
$lang['credited_invoices_not_found'] = 'Odobreni računi nisu pronađeni';
$lang['credit_invoice_number'] = 'Broj Računa';
$lang['credits_used'] = 'Odobrenja iskorišteno';
$lang['credits_remaining'] = 'Odobrenja preostalo';
$lang['amount_credited'] = 'Odobreni iznos';
$lang['credits_applied_cant_delete_status_closed'] = 'Ovo odobrenje ima status Zatvoreno, potrebno je obrisati odobrenja slijedom kako bi se obrisalo ovo odobrenje.';
$lang['credits_applied_cant_delete_credit_note'] = 'Ovo odobrenje ima već dodijeljenih iznosa za odobriti, prvo trebate obrisati odobrenja slijedom da biste mogli obrisati ovo odobrenje.';
$lang['credit_note_pdf_heading'] = 'ODOBRENJE';
$lang['show_status_on_pdf'] = 'Prikaži %s status na PDF dokumentu';
$lang['show_pdf_signature_credit_note'] = 'Prikaži PDF potpis na odobrenju';
$lang['calendar_credit_note_reminder'] = 'Podsjetnik za odobrenje';
$lang['show_credit_note_reminders_on_calendar'] = 'Podsjetnici za odobrenja';
$lang['reminders'] = 'Podsjetnici';
$lang['invoice_activity_applied_credits'] = 'Primjenjena odobrenja od %s do %s';
$lang['create_credit_note'] = 'Stvori novo odobrenje';
$lang['confirm_invoice_credits_from_credit_note'] = 'Kada stvarate odobrenje iz neplaćenog računa, iznos odobrenja će biti primjenjen za taj račun. Jeste li sigurni da želite stvoriti odobrenje?';
$lang['credit_invoice_date'] = 'Datum računa';
$lang['apply_to_invoice'] = 'Primjeni na račun';
$lang['apply_credits_from'] = 'Primjeni odobrenje sa %s';
$lang['credits_successfully_applied_to_invoices'] = 'Odobrenja na računima uspješno primjenjena';
$lang['credit_note_send_to_client_modal_heading'] = 'Pošalji odobrenje klijentu';
$lang['credit_note_sent_to_client_success'] = 'Odobrenje je uspješno poslano klijentu';
$lang['credit_note_sent_to_client_fail']    = 'Naišli smo na problem kod slanja odobrenja na adresu elektroničke pošte';
$lang['credit_note_no_invoices_available'] = 'Nema dostupnih račun za ovog klijenta.';
$lang['show_total_paid_on_invoice'] = 'Prikaži ukupan plaćeni iznos na računu';
$lang['show_credits_applied_on_invoice'] = 'Prikaži odobrenja primjenjena na račun';
$lang['show_amount_due_on_invoice'] = 'Prikaži dospijeli iznos na računu';
$lang['customer_profile_update_credit_notes'] = 'Ažuriraj podatke o pošiljci/plaćanju na svim prethodnim odobrenjima (Zatvorena odobrenja neće biti obuhvaćena)';
$lang['zip_credit_notes'] = 'Zip Odobrenja';
$lang['statement_credit_note_details'] = 'Odobrenje %s';
$lang['statement_credits_applied_details'] = 'Iznos primijenjen sa odobrenja %s - %s za plaćanje %s';
$lang['credit_note_files'] = 'Datoteke odobrenja';
$lang['credit_notes_report'] = 'Izvještaj odobrenja';

$lang['credit_note_set_reminder_title'] = 'Postavi podsjetnik za odobrenje';
$lang['credit_note_add_edit_client_note'] = $lang['invoice_add_edit_client_note'];
$lang['credit_note_bill_to'] = $lang['invoice_bill_to'];
$lang['credit_note_prefix'] = $lang['settings_sales_invoice_prefix'];
$lang['credit_note_admin_note'] = $lang['invoice_add_edit_admin_note'];
$lang['credit_note_total'] = $lang['invoice_total'];
$lang['credit_note_adjustment'] = $lang['invoice_adjustment'];
$lang['credit_note_discount'] = $lang['invoice_discount'];
$lang['credit_note_subtotal'] = $lang['invoice_subtotal'];
$lang['credit_note_table_quantity_heading'] = $lang['invoice_table_quantity_heading'];
$lang['credit_note_table_hours_heading'] = $lang['invoice_table_hours_heading'];
$lang['credit_note_table_item_heading'] = $lang['invoice_table_item_heading'];
$lang['credit_note_table_item_description'] = $lang['invoice_table_item_description'];
$lang['credit_note_table_rate_heading'] = $lang['invoice_table_rate_heading'];
$lang['credit_note_table_tax_heading'] = $lang['invoice_table_tax_heading'];
$lang['credit_note_table_amount_heading'] = $lang['invoice_table_amount_heading'];
$lang['credit_notes_list_all'] = $lang['invoices_list_all'];

# Version 1.9.7
$lang['ticket_assigned'] = 'Dodijeljeno';
$lang['dashboard_options'] = 'Postavke nadzorne ploče';
$lang['reset_dashboard'] = 'Ponovno postavi nadzornu ploču';
$lang['widgets'] = 'Widgeti';
$lang['s_chart'] = 'Dijagram - %s';
$lang['quick_stats'] = 'Brza Statistika';
$lang['user_widget'] = 'Korisnički Widget';
$lang['widgets_visibility_help_text'] = 'Widgeti se prikazuju samo u slučaju da imaju dovoljno podataka te nemaju opciju da budu skriveni ili prikazani.';
$lang['show_project_on_estimate'] = 'Prikaži naziv projekta na Predračunu';
$lang['show_project_on_invoice'] = 'Prikaži naziv projekta na Računu';
$lang['show_project_on_credit_note'] = 'Prikaži naziv projekta na odobrenju';
$lang['visible_tabs'] = 'Vidljive kartice';
$lang['all'] = 'Sve';
$lang['view_widgetable_area'] = 'Pogledaj Područje Widgeta';
$lang['hide_widgetable_area'] = 'Sakrij Područje Widgeta';
$lang['no_items_warning'] = 'Unesite barem jednu stavku.';
$lang['item_forgotten_in_preview'] = 'Zaboravili ste dodati ovu stavku?';
$lang['not_task_status_changed'] = '%s - status zadatka je promijenjen na %s';
$lang['not_project_activity_task_status_changed'] = 'Promijenjen je status zadatka';
$lang['reset'] = 'Ponovno postavi';
$lang['save_message_as_predefined_reply'] = 'Spremi poruku kao unaprijed definirani odgovor';
$lang['inline_create_option'] = 'Dopusti korisnicima koji nisu administratori da stvore %s u %s području stvaranja/izmjene?';
$lang['inline_create'] = 'Stvori u redu';
$lang['inline_create_option_predefined_replies'] = 'Dopusti korisnicima koji nisu administratori da spreme unaprijed definirane odgovore iz poruka zahtjeva';
$lang['reminders_view_none_admin'] = 'Prikazuju se tvoji podsjetnici i podsjetnici koje si ti stvorio.';
$lang['show_tabs_and_options'] = 'Prikaži kartice i opcije';
$lang['no_milestones_found'] = 'Ovaj projekt nema dostignuća';
$lang['lead_is_contact_create_task'] = 'Stvori zadatak ako je pošiljatelj elektroničke pošte već klijent i dodijelite ga odgovornom djelatniku.';
$lang['existing_customer'] = 'Postojeći klijent';
$lang['use_company_name_instead'] = 'Koristi naziv tvrtk umjesto';
$lang['customer_delete_transactions_warning'] = 'Ovaj kljent ima zabilježene transakcije, %s, trebali biste obrisati transakcije ili ih premjestiti drugom klijentu kako biste mogli izvesti ovu radnju.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] =  'Neuspjeh kod automatskog odabira kontakta klijenta. Utvrdite ima li klijent aktivnih kontakata i dodijeljenih kontakata sa omogućenim obavještavanjem putem elektroničke pošte za %s.';
$lang['help_leads_create_permission'] = 'Svi djelatnici mogu stvoriti potencijalnog kupca, osim čanova koji nisu djelatnici';
$lang['help_leads_edit_permission'] = 'Svatko tko ima pristup pojedinom potencijalnom kupcu može urediti većinu podataka potencijalnog kupca';
$lang['triggers'] = 'Okidači';
$lang['notice_only_one_active_sms_gateway'] = 'Samo 1 SMS pristupnik može biti aktivan';
$lang['sms_trigger_disable_tip'] = 'Ostavite prazno kako biste onemogućili pojedini okidač.';
$lang['tables'] = 'Tablice';
$lang['only_project_tasks'] = 'Samo zadaci vezani na projekt';
$lang['download_all'] = 'Preuzmi sve';
$lang['settings_sales_credit_note_number_format'] = 'Format broja odobrenja';
$lang['sms_reminder_sent_to'] = 'SMS podjstnik je poslan %s';
$lang['ideal_customer_statement_descriptor'] = 'Opis bankovne izjave (prikazan u bankovnoj izjavi klijenta)';
$lang['payment_received_awaiting_confirmation'] = 'Vaša uplata je zaprimljena i čeka potvrdu.';
$lang['discount_fixed_amount'] = 'Fiksni Iznos';
$lang['timesheet_duration_instead'] = 'Umjesto toga upišite vrijeme trajanja';
$lang['timesheet_date_instead'] = 'Umjesto toga postavite vrijeme početka i vrijeme završetka';
$lang['allow_non_admin_members_to_import_leads'] = 'Dopustite korisnicima koji nisu administratori da uvezu potencijalne kupce';
$lang['project_hide_tasks_settings_info'] = 'Zadaci su isključeni iz glavne tablice zadataka za ovaj projekt, zadatka vezane na projetk možete vidjeti samo u ovom području.';

# Version 1.9.9
$lang['ticket_create_no_contact'] = 'Zahtjevi bez kontakata';
$lang['ticket_create_to_contact'] = 'Zahtjevi za odgovoriti';
$lang['showing_billable_tasks_from_project'] = 'Prikaži naplative zadatke sa projekta.';
$lang['no_billable_tasks_found'] = 'Nema pronađenih naplativih zadataka';
$lang['help_leads_permission_view'] = 'Ako ova dozvola nije označena, djelatnik će moći vidjeti potencijalne kupce kojima su dodijljeni, koje su stvorili i one koji su označeni kao javni';