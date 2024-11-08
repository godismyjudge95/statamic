<?php

return [
    'activate_account_notification_body' => 'Ricevi questa mail perché abbiamo ricevuto una richiesta di reimpostazione della password per il tuo account.',
    'activate_account_notification_subject' => 'Attiva il tuo account',
    'addon_has_more_releases_beyond_license_body' => 'È possibile aggiornare, ma sarà necessario effettuare l\'upgrade o acquistare una nuova licenza.',
    'addon_has_more_releases_beyond_license_heading' => 'Questo componente aggiuntivo ha più release oltre il limite di licenza.',
    'addon_install_command' => 'Per installare questo componente aggiuntivo, eseguire il seguente comando',
    'addon_list_loading_error' => 'Si è verificato un errore durante il caricamento dei componenti aggiuntivi. Riprova più tardi.',
    'addon_uninstall_command' => 'Per disinstallare questo componente aggiuntivo, eseguire il seguente comando',
    'asset_container_allow_uploads_instructions' => 'Quando abilitato, darà agli utenti la possibilità di caricare file in questo contenitore.',
    'asset_container_blueprint_instructions' => 'I progetti definiscono campi personalizzati aggiuntivi durante la modifica dei media.',
    'asset_container_create_folder_instructions' => 'Quando abilitato, fornisce all\'utente la possibilità di creare cartelle in questo container.',
    'asset_container_disk_instructions' => 'I dischi del filesystem identificano dove vengono salvati i file - in locale o in una posizione remota come Amazon S3. Possono essere configurati in `config/filesystems.php`',
    'asset_container_handle_instructions' => 'Utilizzato come riferimento a questo contenitore sul frontend. Non è semplice modificarlo successivamente.',
    'asset_container_intro' => 'I media risiedono in cartelle sul server o su altri servizi di archiviazione. Ognuna di queste posizioni viene chiamata contenitore.',
    'asset_container_move_instructions' => 'Quando abilitato, consente agli utenti di spostare file in questo contenitore.',
    'asset_container_quick_download_instructions' => 'Quando abilitato, aggiunge un pulsante per il download rapido nel gestore dei media.',
    'asset_container_rename_instructions' => 'Quando abilitato, consente agli utenti di rinominare i file in questo contenitore.',
    'asset_container_source_preset_instructions' => 'Le immagini caricate verranno elaborate in modo permanente utilizzando questa preimpostazione.',
    'asset_container_title_instructions' => 'Di solito un nome plurale, come "Immagini" o "Documenti"',
    'asset_container_validation_rules_instructions' => 'Queste regole verranno applicate ai file caricati.',
    'asset_container_warm_intelligent_instructions' => 'Generare le preimpostazioni appropriate al momento del caricamento.',
    'asset_container_warm_presets_instructions' => 'Specificare quali preimpostazioni generare al momento del caricamento.',
    'asset_folders_directory_instructions' => 'Ti consigliamo di evitare spazi e caratteri speciali per mantenere puliti i tuoi URL.',
    'asset_replace_confirmation' => 'I riferimenti a questa risorsa all\'interno del contenuto saranno aggiornati alla risorsa selezionata di seguito.',
    'asset_reupload_confirmation' => 'Sei sicuro di voler ricaricare questa risorsa?',
    'asset_reupload_warning' => 'È possibile che si verifichino problemi di caching a livello di browser o di server. Potrebbe essere preferibile sostituire la risorsa.',
    'blueprints_hidden_instructions' => 'Nasconde il blueprint dai pulsanti di creazione nel CP',
    'blueprints_intro' => 'I progetti definiscono e organizzano i campi per creare modelli di contenuto per raccolte, form e altri tipi di dati.',
    'blueprints_title_instructions' => 'Di solito un nome singolare, come "Articolo" o "Prodotto"',
    'cache_utility_application_cache_description' => 'Cache unificata di Laravel utilizzata da Statamic, dai componenti aggiuntivi e dai pacchetti di Composer.',
    'cache_utility_description' => 'Gestisci e visualizza informazioni importanti sui vari livelli di cache di Statamic.',
    'cache_utility_image_cache_description' => 'La cache delle immagini memorizza copie di tutte le immagini trasformate e ridimensionate.',
    'cache_utility_stache_description' => 'La Stache è il content store di Statamic che funziona in modo molto simile a un database. Viene generato automaticamente dai tuoi file di contenuti.',
    'cache_utility_static_cache_description' => 'Le pagine statiche bypassano  Statamic e vengono renderizzate direttamente dal server per il massimo delle prestazioni.',
    'choose_entry_localization_deletion_behavior' => 'Scegli l\'azione che desideri eseguire sulle voci localizzate.',
    'collection_configure_date_behavior_private' => 'Privato - Nascoste dagli elenchi, non accessibili tramite URL',
    'collection_configure_date_behavior_public' => 'Pubblico - Sempre visibili',
    'collection_configure_date_behavior_unlisted' => 'Non in elenco: Nascoste dagli elenchi, accessibili tramite URL',
    'collection_configure_dated_instructions' => 'Le date di pubblicazione possono essere utilizzate per pianificare e far scadere i contenuti.',
    'collection_configure_handle_instructions' => 'Utilizzato come riferimento a questa raccolta sul frontend. Non è semplice modificarlo successivamente.',
    'collection_configure_intro' => 'Una raccolta è un gruppo di voci correlate che condividono comportamento, attributi e impostazioni.',
    'collection_configure_layout_instructions' => 'Imposta il layout predefinito di questa raccolta. Le voci possono sovrascrivere questa impostazione con un campo `template` chiamato `layout`. È insolito cambiare questa impostazione.',
    'collection_configure_origin_behavior_instructions' => 'Quando si localizza una voce, quale sito deve essere utilizzato come origine?',
    'collection_configure_origin_behavior_option_active' => 'Utilizzare il sito attivo della voce da modificare',
    'collection_configure_origin_behavior_option_root' => 'Utilizzare il sito in cui la voce è stata originariamente creata',
    'collection_configure_origin_behavior_option_select' => 'Lasciare che l\'utente selezioni l\'origine',
    'collection_configure_propagate_instructions' => 'Automatically propagate new entries to all configured sites.',
    'collection_configure_require_slugs_instructions' => 'Whether entries are required to have slugs.',
    'collection_configure_template_instructions' => 'Imposta il template predefinito di questa raccolta. Le voci possono sovrascrivere questa impostazione con un campo `template`.',
    'collection_configure_title_format_instructions' => 'Impostare questa opzione per far sì che le voci di questa raccolta generino automaticamente i loro titoli. Per saperne di più consultare la [documentazione](https://statamic.dev/collections#titles).',
    'collection_configure_title_instructions' => 'Consigliamo un nome plurale, come "Articoli" o "Prodotti".',
    'collection_next_steps_blueprints_description' => 'Gestisci i progetti e i campi disponibili per questa raccolta.',
    'collection_next_steps_configure_description' => 'Configura URL e percorsi, definisci progetti, comportamenti relativi alla data, ordinamento e altre opzioni.',
    'collection_next_steps_create_entry_description' => 'Crea la prima voce o alcuni segnaposto temporanei, dipende da te.',
    'collection_next_steps_scaffold_description' => 'Generare rapidamente progetti vuoti e template frontend in base al nome della raccolta.',
    'collection_revisions_instructions' => 'Abilita le revisioni per questa Collezione.',
    'collection_scaffold_instructions' => 'Scegli quali risorse generare. I file esistenti non verranno sovrascritti.',
    'collections_blueprint_instructions' => 'Le voci in questa raccolta possono utilizzare uno qualsiasi di questi progetti.',
    'collections_default_publish_state_instructions' => 'Le nuove voci di questa raccolta verranno pubblicate come impostazione predefinita invece di essere in "bozza".',
    'collections_future_date_behavior_instructions' => 'Come dovrebbero comportarsi le voci con date future.',
    'collections_links_instructions' => 'Le voci in questa raccolta possono contenere collegamenti (reindirizzamenti) ad altre voci o URL.',
    'collections_mount_instructions' => 'Scegli una voce su cui montare questa raccolta. Ulteriori informazioni nella [documentazione](https://statamic.dev/collections-and-entries#mounting).',
    'collections_orderable_instructions' => 'Abilita l\'ordinamento manuale attraverso il trascinamento.',
    'collections_past_date_behavior_instructions' => 'Come dovrebbero comportarsi le voci con date passate.',
    'collections_preview_target_refresh_instructions' => 'Aggiorna automaticamente l\'anteprima durante la modifica. Disattivando questa opzione verrà utilizzato postMessage.',
    'collections_preview_targets_instructions' => 'Gli URL da visualizzare in Live Preview. Per saperne di più, consultare la [documentazione](https://statamic.dev/live-preview#preview-targets).',
    'collections_route_instructions' => 'La route definisce il pattern URL delle voci.',
    'collections_sort_direction_instructions' => 'Direzione di ordinamento predefinita.',
    'collections_taxonomies_instructions' => 'Collega le voci di questa raccolta alle tassonomie. I campi verranno aggiunti automaticamente alle form di pubblicazione.',
    'dictionaries_countries_emojis_instructions' => 'Se includere le emoji delle bandiere nelle etichette.',
    'dictionaries_countries_region_instructions' => 'Facoltativamente, filtra i paesi per regione.',
    'duplicate_action_localizations_confirmation' => 'Vuoi davvero eseguire questa azione? Anche le localizzazioni saranno duplicate.',
    'duplicate_action_warning_localization' => 'Questa voce è una localizzazione. La voce di origine verrà duplicata.',
    'duplicate_action_warning_localizations' => 'Una o più voci selezionate sono localizzazioni. In quei casi, la voce di origine verrà invece duplicata.',
    'email_utility_configuration_description' => 'Le impostazioni del servizio mail sono presenti in <code>:path</code>',
    'email_utility_description' => 'Controlla la configurazione del servizio mail ed invia email di test.',
    'entry_origin_instructions' => 'La nuova localizzazione erediterà i valori dalla voce del sito selezionato.',
    'expect_root_instructions' => 'Considera la prima pagina dell\'albero come "radice" o "homepage".',
    'field_conditions_always_save_instructions' => 'Salva sempre il valore del campo, anche se il campo è nascosto.',
    'field_conditions_field_instructions' => 'Puoi inserire qualsiasi handle di campo. Non sei limitato alle opzioni nel menu a discesa.',
    'field_conditions_instructions' => 'Quando mostrare o nascondere questo campo.',
    'field_desynced_from_origin' => 'Non sincronizzato con l\'originale. Clicca per sincronizzare e ripristinare il valore originale.',
    'field_synced_with_origin' => 'Sincronizzato con l\'originale. Clicca o modifica il campo per annullare la sincronizzazione.',
    'field_validation_advanced_instructions' => 'Aggiungi una convalida più avanzata a questo campo.',
    'field_validation_required_instructions' => 'Controllare se questo campo è obbligatorio o meno.',
    'field_validation_sometimes_instructions' => 'Convalida solo quando questo campo è visibile o inviato.',
    'fields_blueprints_description' => 'I progetti definiscono i campi per strutture di contenuti come raccolte, tassonomie, utenti e form.',
    'fields_default_instructions' => 'Impostare il valore predefinito.',
    'fields_display_instructions' => 'L\'etichetta del campo visualizzata nel Pannello di controllo.',
    'fields_duplicate_instructions' => 'Indica se questo campo deve essere incluso nella duplicazione dell\'elemento.',
    'fields_fieldsets_description' => 'I fieldset sono raggruppamenti di campi semplici, flessibili e completamente opzionali che aiutano a organizzare campi riutilizzabili preconfigurati.',
    'fields_handle_instructions' => 'La variabile del campo nel template.',
    'fields_instructions_instructions' => 'Visualizzate sotto l\'etichetta del campo. È supportato il formato Markdown.',
    'fields_instructions_position_instructions' => 'Mostrare le istruzioni sopra o sotto il campo.',
    'fields_listable_instructions' => 'Visibilità di questo campo come colonna negli elenchi.',
    'fields_replicator_preview_instructions' => 'Controlla la visibilità dell\'anteprima nei set Replicator/Bard.',
    'fields_sortable_instructions' => 'Controlla se il campo deve essere ordinabile nelle viste elenco.',
    'fields_visibility_instructions' => 'Controllo della visibilità dei campi nei moduli di pubblicazione.',
    'fieldset_import_fieldset_instructions' => 'Fieldset da importare.',
    'fieldset_import_prefix_instructions' => 'Il prefisso che deve essere applicato a ciascun campo quando vengono importati. per esempio. eroe_',
    'fieldset_intro' => 'I fieldset sono raggruppamenti di campi riutilizzabili all\'interno dei progetti.',
    'fieldset_link_fields_prefix_instructions' => 'Prefisso applicato ad ogni campo collegato al fieldset. Utile se desideri importare gli stessi campi più volte.',
    'fieldsets_handle_instructions' => 'Utilizzato per fare riferimento a questo set di campi altrove. Non è banale cambiare in seguito.',
    'fieldsets_title_instructions' => 'Generalmente descrive quali campi saranno presenti al suo interno, come "Blocco Immagine"',
    'filters_view_already_exists' => 'Esiste già una vista con questo nome. La creazione di questa vista sovrascriverà la vista esistente con questo nome.',
    'focal_point_instructions' => 'Impostare un punto focale consente il ritaglio dinamico di foto con un soggetto che rimane nel frame.',
    'focal_point_previews_are_examples' => 'Le anteprime di ritaglio sono solo di esempio',
    'forgot_password_enter_email' => 'Inserisci il tuo indirizzo mail così da poterti inviare il link per reimpostare la password.',
    'form_configure_blueprint_instructions' => 'Scegli tra i progetti esistenti o creane uno nuovo.',
    'form_configure_email_attachments_instructions' => 'Allegare gli asset caricati a questa e-mail.',
    'form_configure_email_bcc_instructions' => 'Indirizzo email del/dei destinatario/i in CCN - separato da virgole.',
    'form_configure_email_cc_instructions' => 'Indirizzo email del/dei destinatario/i della CC - separato/i da virgole.',
    'form_configure_email_from_instructions' => 'Lascia vuoto per utilizzare il valore predefinito',
    'form_configure_email_html_instructions' => 'Il template per la versione html di questa mail.',
    'form_configure_email_instructions' => 'Configura le mail da inviare alla ricezione di una nuova richiesta.',
    'form_configure_email_markdown_instructions' => 'Renderizza la versione HTML di questa e-mail usando markdown.',
    'form_configure_email_reply_to_instructions' => 'Lascia vuoto per utilizzare la mail del mittente',
    'form_configure_email_subject_instructions' => 'Oggetto della mail',
    'form_configure_email_text_instructions' => 'Il template per la versione testuale di questa mail.',
    'form_configure_email_to_instructions' => 'Email del destinatario.',
    'form_configure_handle_instructions' => 'Utilizzato come riferimento di questa form sul frontend. Non è semplice modificarlo successivamente.',
    'form_configure_honeypot_instructions' => 'Nome campo da utilizzare come Honeypot. Gli Honeypot sono campi speciali utilizzati per ridurre lo spam da parte dei bot.',
    'form_configure_intro' => 'Le form vengon utilizzare per raccogliere informazioni dai visitatori ed inviare eventi e notifiche in caso di nuovi invii.',
    'form_configure_mailer_instructions' => 'Scegli il mailer per inviare questa email. Lascia vuoto per tornare al mailer predefinito.',
    'form_configure_store_instructions' => 'Disabilita per interrompere il salvataggio degli invii. Gli eventi e le notifiche saranno comunque inviati.',
    'form_configure_title_instructions' => 'Di solito un invito all\'azione, come "Contattaci".',
    'getting_started_widget_blueprints' => 'I progetti definiscono i campi personalizzati utilizzati per creare e archiviare i tuoi contenuti.',
    'getting_started_widget_collections' => 'Le raccolte contengono i diversi tipi di contenuto del tuo sito.',
    'getting_started_widget_docs' => ' Impara ad utilizzare Statamic utilizzando le sue funzionalità nel modo giusto.',
    'getting_started_widget_header' => 'Introduzione a Statamic',
    'getting_started_widget_intro' => 'Per iniziare a costruire il tuo nuovo sito Statamic, ti consigliamo di iniziare con questi passaggi.',
    'getting_started_widget_navigation' => 'Crea elenchi multilivello di link che possono essere utilizzati per barre di navigazione, footer e così via.',
    'getting_started_widget_pro' => 'Statamic Pro aggiunge account utente illimitati, ruoli, permessi, integrazione git, revisioni, multi-sito e altro!',
    'git_disabled' => 'L\'integrazione di Statamic Git è attualmente disabilitata.',
    'git_nothing_to_commit' => 'Niente da impegnare, percorsi di contenuto puliti!',
    'git_utility_description' => 'Gestisci i contenuti monitorati da Git.',
    'global_search_open_using_slash' => 'Posizionati sulla ricerca globale usando il tasto <kbd>/</kbd>',
    'global_set_config_intro' => 'I Global Set gestiscono i contenuti disponibili nell\'intero sito, come i dettagli dell\'azienda, le informazioni di contatto o le impostazioni del frontend.',
    'global_set_no_fields_description' => 'È possibile aggiungere campi al Blueprint o aggiungere manualmente variabili al set stesso.',
    'globals_blueprint_instructions' => 'Gestisce i campi da visualizzare durante la modifica delle variabili.',
    'globals_configure_handle_instructions' => 'Utilizzato come riferimento a questo Global Set sul frontend. Non è semplice modificarlo successivamente.',
    'globals_configure_intro' => 'Un Global Set è un gruppo di variabili disponibili in tutte le pagine del frontend.',
    'globals_configure_title_instructions' => 'Consigliamo un nome che ne rappresenti il contenuto. Ad esempio: "Marchio" o "Azienda"',
    'impersonate_action_confirmation' => 'Verrai loggato come questo utente. Puoi tornare al tuo account usando il menu avatar.',
    'licensing_config_cached_warning' => 'Eventuali modifiche apportate ai file .env o di configurazione non verranno rilevate finché non si cancella la cache. Se vedi risultati di licenza imprevisti qui, potrebbe essere a causa di questo. Puoi usare il <code>php artisan config:cache</code> per rigenerare la cache.',
    'licensing_error_invalid_domain' => 'Dominio non valido',
    'licensing_error_invalid_edition' => 'La licenza è per l\'edizione :edition',
    'licensing_error_no_domains' => 'Nessun dominio specificato',
    'licensing_error_no_site_key' => 'Nessuna chiave di licenza del sito',
    'licensing_error_outside_license_range' => 'Licenza valida per le versioni :start e :end',
    'licensing_error_unknown_site' => 'Sito sconosciuto',
    'licensing_error_unlicensed' => 'Licenza mancante',
    'licensing_incorrect_key_format_body' => 'Sembra che la chiave del sito non sia nel formato corretto. Controllare la chiave e riprovare. È possibile ottenere la chiave del sito dall\'area del proprio account su statamic.com. È alfanumerica e lunga 16 caratteri. Assicurarsi di non utilizzare la chiave di licenza legacy, che è un UUID.',
    'licensing_incorrect_key_format_heading' => 'Formato errato della chiave del sito',
    'licensing_production_alert' => 'Questo sito utilizza Statamic Pro e addon commerciali. Si prega di acquistare le licenze appropriate.',
    'licensing_production_alert_addons' => 'Questo sito utilizza addon commerciali. Si prega di acquistare le licenze appropriate.',
    'licensing_production_alert_renew_statamic' => 'L\'utilizzo di questa versione di Statamic Pro richiede il rinnovo della licenza.',
    'licensing_production_alert_statamic' => 'Questo sito utilizza Statamic Pro. Si prega di acquistare una licenza.',
    'licensing_sync_instructions' => 'I dati da statamic.com vengono sincronizzati ogni ora. Forza una sincronizzazione per visualizzare le modifiche che hai apportato.',
    'licensing_trial_mode_alert' => 'Questo sito utilizza Statamic Pro e addon commerciali. Assicurati di acquistare le licenze prima del lancio. Grazie!',
    'licensing_trial_mode_alert_addons' => 'Questo sito utilizza addon commerciali. Assicurati di acquistare le licenze prima del lancio. Grazie!',
    'licensing_trial_mode_alert_statamic' => 'Questo sito utilizza Statamic Pro. Assicurati di acquistare una licenza prima del lancio. Grazie!',
    'licensing_utility_description' => 'Visualizza e risolvi i dettagli della licenza.',
    'max_depth_instructions' => 'Imposta il numero massimo di livelli di profondità di una pagina. Lascia vuoto per nessun limite.',
    'max_items_instructions' => 'Imposta il numero massimo di voci selezionabili.',
    'navigation_configure_blueprint_instructions' => 'Scegli tra i progetti esistenti o creane uno nuovo.',
    'navigation_configure_collections_instructions' => 'Abilita il collegamento alle voci in queste raccolte.',
    'navigation_configure_handle_instructions' => 'Utilizzato come riferimento a questo menu sul frontend. Non è semplice modificarlo successivamente.',
    'navigation_configure_intro' => 'I menu sono elenchi multi-livello di collegamenti che possono essere utilizzati per creare barre di navigazione, footer, sitemap e così via.',
    'navigation_configure_select_across_sites' => 'Consenti la selezione di voci da altri siti.',
    'navigation_configure_settings_intro' => 'Abilita il collegamento alle raccolte, imposta una profondità massima e altri comportamenti.',
    'navigation_configure_title_instructions' => 'Consigliamo un nome che corrisponda a dove verrà utilizzato, ad esempio "Menu principale" o "Menu footer".',
    'navigation_documentation_instructions' => 'Ulteriori informazioni sulla creazione, la configurazione e il render dei menu.',
    'navigation_link_to_entry_instructions' => 'Aggiungi un link a una voce. Abilita il collegamento a raccolte aggiuntive nell\'area di configurazione.',
    'navigation_link_to_url_instructions' => 'Aggiungi un link a qualsiasi URL interno o esterno. Abilita il collegamento alle voci nella configurazione del menu.',
    'outpost_error_422' => 'Errore durante la comunicazione con statamic.com.',
    'outpost_error_429' => 'Troppe richieste a statamic.com.',
    'outpost_issue_try_later' => 'Si è verificato un problema durante la comunicazione con statamic.com. Per favore riprova più tardi.',
    'outpost_license_key_error' => 'Stamic non è riuscito a decifrare il file della chiave di licenza fornito. Scaricalo di nuovo da statamic.com.',
    'password_protect_enter_password' => 'Inserire la password per sbloccare',
    'password_protect_incorrect_password' => 'Password errata.',
    'password_protect_token_invalid' => 'Token non valido o scaduto.',
    'password_protect_token_missing' => 'Manca il token di sicurezza. È necessario arrivare a questa schermata dall\'URL originale protetto.',
    'phpinfo_utility_description' => 'Controlla la configurazione di PHP ed i moduli installati.',
    'preference_favorites_instructions' => 'Le scorciatoie che verranno visualizzate all\'apertura della barra di ricerca globale. In alternativa, è possibile visitare la pagina e utilizzare l\'icona pin in alto per aggiungerla a questo elenco.',
    'preference_locale_instructions' => 'La lingua preferita per il pannello di controllo.',
    'preference_start_page_instructions' => 'La pagina da visualizzare quando si accede al pannello di controllo.',
    'publish_actions_create_revision' => 'Verrà creata una revisione basata sulla copia di lavoro. L\'attuale revisione non cambierà.',
    'publish_actions_current_becomes_draft_because_scheduled' => 'Poiché la revisione corrente viene pubblicata e hai selezionato una data futura, una volta inviata, la revisione funzionerà come una bozza fino alla data selezionata.',
    'publish_actions_publish' => 'Le modifiche alla copia di lavoro verranno applicate alla voce e sarà pubblicata immediatamente.',
    'publish_actions_schedule' => 'Le modifiche alla copia di lavoro verranno applicate alla voce ed apparirà pubblicata nella data selezionata.',
    'publish_actions_unpublish' => 'L\'attuale revisione non sarà pubblicata.',
    'reset_password_notification_body' => 'Ricevi questa mail perché abbiamo ricevuto una richiesta di reimpostazione della password per il tuo account.',
    'reset_password_notification_no_action' => 'Se non hai richiesto la reimpostazione della password, non sono necessarie ulteriori azioni.',
    'reset_password_notification_subject' => 'Reimposta la password',
    'role_change_handle_warning' => 'La modifica dell\'handle non aggiornerà i riferimenti negli utenti e nei gruppi.',
    'role_handle_instructions' => 'Gli handle vengono utilizzati come riferimento a questo ruolo nel frontend. Non può essere facilmente modificato.',
    'role_intro' => 'I ruoli sono gruppi di autorizzazioni di accesso e permessi di azione che possono essere assegnati a utenti e gruppi di utenti.',
    'role_title_instructions' => 'Di solito un nome singolare, come Editor o Admin.',
    'search_utility_description' => 'Gestisci e visualizza informazioni importanti sugli indici di ricerca di Statamic.',
    'session_expiry_enter_password' => 'Inserisci la password per continuare da dove eri rimasto',
    'session_expiry_logged_out_for_inactivity' => 'Sei stato disconnesso perché risulti inattivo da un po\'.',
    'session_expiry_logging_out_in_seconds' => 'Risulti inattivo da un po\'e verrai disconnesso tra :seconds secondi. Clicca per estendere la sessione.',
    'session_expiry_new_window' => 'Apertura in una nuova finestra. Torna dopo aver effettuato l\'accesso.',
    'show_slugs_instructions' => 'Per visualizzare gli slug nella vista ad albero.',
    'site_configure_attributes_instructions' => 'Aggiungi attributi arbitrari alla configurazione del tuo sito a cui potrai accedere nei tuoi modelli. [Scopri di più](https://statamic.dev/multi-site#additional-attributes).',
    'site_configure_handle_instructions' => 'Un riferimento unico a questo sito. Non è banale modificarlo in seguito.',
    'site_configure_lang_instructions' => 'Scopri di più sulle [Lingue](https://statamic.dev/multi-site#language).',
    'site_configure_locale_instructions' => 'Scopri di più sulle [impostazioni locali](https://statamic.dev/multi-site#locale).',
    'site_configure_name_instructions' => 'Il nome utente è visibile in tutto il pannello di controllo.',
    'site_configure_url_instructions' => 'Scopri di più sugli [URL del sito](https://statamic.dev/multi-site#url).',
    'status_expired_with_date' => 'Scaduto il :date',
    'status_published_with_date' => 'Pubblicato il :date',
    'status_scheduled_with_date' => 'Pubblicazione programmata per :date',
    'taxonomies_blueprints_instructions' => 'I termini di questa tassonomia possono utilizzare uno qualsiasi di questi progetti.',
    'taxonomies_collections_instructions' => 'Le raccolte che utilizzano questa tassonomia.',
    'taxonomies_preview_target_refresh_instructions' => 'Aggiorna automaticamente l\'anteprima durante la modifica. Disattivando questa opzione verrà utilizzato postMessage.',
    'taxonomies_preview_targets_instructions' => 'Gli URL da visualizzare in Live Preview. Per saperne di più, consultare la [documentazione](https://statamic.dev/live-preview#preview-targets).',
    'taxonomy_configure_handle_instructions' => 'Utilizzato come riferimento a questa tassonomia sul frontend. Non è semplice modificarlo successivamente.',
    'taxonomy_configure_intro' => 'Una tassonomia è un sistema di classificazione dei dati in base ad un insieme di caratteristiche uniche, come categoria o colore.',
    'taxonomy_configure_layout_instructions' => 'Imposta il layout predefinito di questa tassonomia. I termini possono sovrascrivere questa impostazione con un campo `layout`.',
    'taxonomy_configure_template_instructions' => 'Imposta il modello predefinito di questa tassonomia.',
    'taxonomy_configure_term_template_instructions' => 'Imposta il modello predefinito di questa tassonomia. I termini possono sovrascrivere questa impostazione con un campo `template`.',
    'taxonomy_configure_title_instructions' => 'Ti consigliamo di utilizzare un sostantivo plurale, come "Categorie" o "Tags".',
    'taxonomy_next_steps_blueprints_description' => 'Gestisci i progetti e i campi disponibili per questa tassonomia.',
    'taxonomy_next_steps_configure_description' => 'Configura nomi, associa raccolte, definisci progetti e altro.',
    'taxonomy_next_steps_create_term_description' => 'Crea il primo termine o inserisci dei termini come segnaposto, dipende da te.',
    'try_again_in_seconds' => '{0,1}Riprova adesso.|Riprova tra :count secondi.',
    'units.B' => ':count B',
    'units.GB' => ':count GB',
    'units.KB' => ':count KB',
    'units.MB' => ':count MB',
    'units.ms' => ':countms',
    'units.s' => ':counts',
    'updater_require_version_command' => 'Per richiedere una versione specifica, eseguire il seguente comando',
    'updater_update_to_latest_command' => 'Per aggiornare alla versione più recente, eseguire il seguente comando',
    'uploader_append_timestamp' => 'Aggiungi timestamp',
    'uploader_choose_new_filename' => 'Scegli un nuovo nome file',
    'uploader_discard_use_existing' => 'Ignora e usa il file esistente',
    'uploader_overwrite_existing' => 'Sovrascrivi il file esistente',
    'user_activation_email_not_sent_error' => 'L\'email di attivazione non è stata inviata. Controlla la configurazione della tua email e riprova.',
    'user_groups_intro' => 'I gruppi di utenti consentono di organizzare gli utenti e applicare ruoli basati su autorizzazioni.',
    'user_groups_role_instructions' => 'Assegna ruoli per fornire agli utenti di questo gruppo tutte le autorizzazioni corrispondenti.',
    'user_groups_title_instructions' => 'Di solito un sostantivo plurale, come Editori o Fotografi',
    'user_wizard_account_created' => 'L\'account utente è stato creato.',
    'user_wizard_intro' => 'Gli utenti possono essere assegnati a ruoli che personalizzano le loro autorizzazioni, accesso e capacità in tutto il Pannello di controllo.',
    'user_wizard_invitation_body' => 'Attiva il tuo nuovo account Statamic su :site per iniziare a gestire questo sito web. Per motivi di sicurezza, il link seguente scade dopo :expiry ore. Successivamente, contatta l\'amministratore del sito per richiedere una nuova password.',
    'user_wizard_invitation_intro' => 'Invia una mail di benvenuto con i dettagli di attivazione dell\'account al nuovo utente.',
    'user_wizard_invitation_share' => 'Copia queste credenziali e condividile con <code>:email</code> tramite il tuo metodo preferito.',
    'user_wizard_invitation_share_before' => 'Dopo la creazione dell\'utente, verranno forniti i dettagli da condividere con <code>:email</code> tramite il tuo metodo preferito.',
    'user_wizard_invitation_subject' => 'Attiva il tuo nuovo account Statamic su :site',
    'user_wizard_roles_groups_intro' => 'Gli utenti possono essere assegnati a ruoli che personalizzano le loro autorizzazioni, accesso e capacità in tutto il Pannello di controllo.',
    'user_wizard_super_admin_instructions' => 'I Super Admin hanno il controllo completo e l\'accesso a tutto il pannello di controllo. Concedi saggiamente questo ruolo.',
    'view_more_count' => 'Visualizza :count altro',
    'width_x_height' => ':width x :height',
];
