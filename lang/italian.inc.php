<?php
/* $Id: italian.inc.php,v 1.107 2001/12/24 11:18:58 loic1 Exp $ */
/* Pietro Danesi <danone@aruba.it>  07.09.2001 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'); //italian days
$month = array('Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'); //italian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //italian time


$strAccessDenied = 'Accesso negato';
$strAction = 'Azione';
$strAddDeleteColumn = 'Aggiungi/Cancella campo';
$strAddDeleteRow = 'Aggiungi/Cancella criterio';
$strAddNewField = 'Aggiungi un nuovo campo';
$strAddPriv = 'Aggiungi un nuovo privilegio';
$strAddPrivMessage = 'Hai aggiunto un nuovo privilegio.';
$strAddSearchConditions = 'Aggiungi condizioni di ricerca (corpo della clausola "where"):';
$strAddToIndex = 'Aggiungi all\'indice &nbsp;%s&nbsp;colonna/e';
$strAddUser = 'Aggiungi un nuovo utente';
$strAddUserMessage = 'Hai aggiunto un nuovo utente.';
$strAffectedRows = 'Righe affette:';
$strAfter = 'Dopo';
$strAfterInsertBack = 'Indietro';
$strAfterInsertNewInsert = 'Inserisci un nuovo record';
$strAll = 'Tutti';
$strAlterOrderBy = 'Altera tabella ordinata per';
$strAnalyzeTable = 'Analizza tabella';
$strAnd = 'E';
$strAnIndex = 'Un indice � stato aggiunto in %s';
$strAny = 'Qualsiasi';
$strAnyColumn = 'Qualsiasi colonna';
$strAnyDatabase = 'Qualsiasi database';
$strAnyHost = 'Qualsiasi host';
$strAnyTable = 'Qualsiasi tabella';
$strAnyUser = 'Qualsiasi utente';
$strAPrimaryKey = 'Una chiave primaria � stata aggiunta in %s';
$strAscending = 'Crescente';
$strAtBeginningOfTable = 'All\'inizio della tabella';
$strAtEndOfTable = 'Alla fine della tabella';
$strAttr = 'Attributi';

$strBack = 'Indietro';
$strBinary = 'Binario';
$strBinaryDoNotEdit = 'Tipo di dato Binario - non modificare';
$strBookmarkDeleted = 'Il bookmark � stato cancellato.';
$strBookmarkLabel = 'Etichetta';
$strBookmarkQuery = 'Query SQL aggiunte ai preferiti';
$strBookmarkThis = 'Aggiungi ai preferiti questa query SQL';
$strBookmarkView = 'Visualizza solo';
$strBrowse = 'Mostra';
$strBzip = '"compresso con bzip2"';

$strCantLoadMySQL = 'impossibile caricare l\'estensione MySQL,<br />controlla la configurazione di PHP.';
$strCantRenameIdxToPrimary = 'Impossibile rinominare l\'indice a PRIMARIO!';
$strCardinality = 'Cardinalit�';
$strCarriage = 'Ritorno carrello: \\r';
$strChange = 'Modifica';
$strCheckAll = 'Seleziona tutti';
$strCheckDbPriv = 'Controlla i privilegi del database';
$strCheckTable = 'Controlla tabella';
$strColumn = 'Colonna';
$strColumnNames = 'Nomi delle colonne';
$strCompleteInserts = 'Inserimenti completi';
$strConfirm = 'Sicuro di volerlo fare?';
$strCookiesRequired = 'Da questo punto in poi, i cookies devono essere abilitati.';
$strCopyTable = 'Copia la tabella nel (database<b>.</b>tabella):';
$strCopyTableOK = 'La tabella %s � stata copiata su %s.';
$strCreate = 'Crea';
$strCreateIndex = 'Crea un indice su &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Crea un nuovo indice';
$strCreateNewDatabase = 'Crea un nuovo database';
$strCreateNewTable = 'Crea una nuova tabella nel database ';
$strCriteria = 'Criterio';

$strData = 'Dati';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Il Database %s � stato eliminato.';
$strDatabases = 'database';
$strDatabasesStats = 'Statistiche dei databases';
$strDataOnly = 'Solo dati';
$strDefault = 'Predefinito';
$strDelete = 'Cancella';
$strDeleted = 'La riga � stata cancellata';
$strDeletedRows = 'Righe cancellate:';
$strDeleteFailed = 'Cancellazione fallita!';
$strDeleteUserMessage = 'Hai cancellato l\'utente %s.';
$strDelPassMessage = 'Hai cancellato la password per';
$strDescending = 'Decrescente';
$strDisplay = 'Visualizza';
$strDisplayOrder = 'Ordine di visualizzazione:';
$strDoAQuery = 'Esegui "query da esempio" (carattere jolly: "%")';
$strDocu = 'Documentazione';
$strDoYouReally = 'Confermi: ';
$strDrop = 'Elimina';
$strDropDB = 'Elimina database ';
$strDropTable = 'Elimina la tabella';
$strDumpingData = 'Dump dei dati per la tabella';
$strDynamic = 'dinamico';

$strEdit = 'Modifica';
$strEditPrivileges = 'Modifica Privilegi';
$strEffective = 'Effettivo';
$strEmpty = 'Svuota';
$strEmptyResultSet = 'MySQL ha restituito un insieme vuoto (i.e. zero righe).';
$strEnd = 'Fine';
$strEnglishPrivileges = 'Nota: i nomi dei privilegi di MySQL sono in Inglese';
$strError = 'Errore';
$strExtendedInserts = 'Inserimenti estesi';
$strExtra = 'Extra';

$strField = 'Campo';
$strFieldHasBeenDropped = 'Il campo %s � stato eliminato';
$strFields = 'Campi';
$strFieldsEmpty = ' Il contatore dei campi � vuoto! ';
$strFieldsEnclosedBy = 'Campo composto da';
$strFieldsEscapedBy = 'Campo impedito da';
$strFieldsTerminatedBy = 'Campo terminato da';
$strFixed = 'fisso';
$strFlushTable = 'Inizializza ("FLUSH") la tabella';
$strFormat = 'Formato';
$strFormEmpty = 'Valore mancante nel form!';
$strFullText = 'Testo completo';
$strFunction = 'Funzione';

$strGenTime = 'Generato il';
$strGo = 'Esegui';
$strGrants = 'Permetti';
$strGzip = '"compresso con gzip"';

$strHasBeenAltered = '� stato modificato.';
$strHasBeenCreated = '� stato creato.';
$strHome = 'Home';
$strHomepageOfficial = 'Home page ufficiale di phpMyAdmin';
$strHomepageSourceforge = 'Home page di phpMyAdmin su sourceforge.net';
$strHost = 'Host';
$strHostEmpty = 'Il nome di host � vuoto!';

$strIdxFulltext = 'Testo completo';
$strIfYouWish = 'Per caricare i dati solo per alcune colonne della tabella, specificare la lista dei campi (separati da virgole).';
$strIgnore = 'Ignora';
$strIndex = 'Indice';
$strIndexHasBeenDropped = 'L\'indice %s � stato eliminato';
$strIndexes = 'Indici';
$strIndexName = 'Nome dell\'indice&nbsp;:';
$strIndexType = 'Tipo di indice&nbsp;:';
$strInsert = 'Inserisci';
$strInsertAsNewRow = 'Inserisci come nuova riga';
$strInsertedRows = 'Righe inserite:';
$strInsertNewRow = 'Inserisci una nuova riga';
$strInsertTextfiles = 'Inserisci un file di testo nella tabella';
$strInstructions = 'Istruzioni';
$strInUse = 'in uso';
$strInvalidName = '"%s" &egrave; una parola riservata; non &egrave; possibile utilizzarla come nome di database/tabella/campo.';

$strKeepPass = 'Non cambiare la password';
$strKeyname = 'Nome chiave';
$strKill = 'Uccidi';

$strLength = 'Lunghezza';
$strLengthSet = 'Lunghezza/Set*';
$strLimitNumRows = 'record per pagina';
$strLineFeed = 'Fine riga: \\n';
$strLines = 'Record';
$strLinesTerminatedBy = 'Linee terminate da';
$strLocationTextfile = 'Percorso del file';
$strLogin = 'Connetti';
$strLogout = 'Disconnetti';
$strLogPassword = 'Password:';
$strLogUsername = 'Nome utente:';

$strModifications = 'Le modifiche sono state salvate';
$strModify = 'Modifica';
$strModifyIndexTopic = 'Modifica un indice';
$strMoveTable = 'Sposta la tabella nel (database<b>.</b>tabella):';
$strMoveTableOK = 'La tabella %s &egrave; stata spostata in %s.';
$strMySQLReloaded = 'MySQL riavviato.';
$strMySQLSaid = 'Messaggio di MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% in esecuzione su %pma_s2% come %pma_s3%';
$strMySQLShowProcess = 'Visualizza processi in esecuzione';
$strMySQLShowStatus = 'Visualizza informazioni di runtime di MySQL';
$strMySQLShowVars = 'Visualizza variabili di sistema di MySQL';

$strName = 'Nome';
$strNbRecords = 'n. di record';
$strNext = 'Prossimo';
$strNo = ' No ';
$strNoDatabases = 'Nessun database';
$strNoDropDatabases = 'I comandi "DROP DATABASE" sono disabilitati.';
$strNoFrames = 'phpMyAdmin � pi� amichevole con un browser che supporta i frames';
$strNoIndex = 'Nessun indice definito!';
$strNoIndexPartsDefined = 'Nessuna parte di indice definita!';
$strNoModification = 'Nessun cambiamento';
$strNone = 'Nessuno';
$strNoPassword = 'Nessuna Password';
$strNoPrivileges = 'Nessun Privilegio';
$strNoQuery = 'Nessuna query SQL!';
$strNoRights = 'Non hai i permessi per effettuare questa operazione!';
$strNoTablesFound = 'Non ci sono tabelle nel database.';
$strNotNumber = 'Questo non � un numero!';
$strNotValidNumber = ' non � una riga valida!';
$strNoUsersFound = 'Nessun utente trovato.';
$strNull = 'Null';
$strNumberIndexes = 'Numero di indici avanzati';

$strOftenQuotation = 'In genere da doppi apici (virgolette). OPZIONALE indica che solo i campi <I>char</I> e <I>varchar</I> devono essere delimitati dal carattere indicato.';
$strOptimizeTable = 'Ottimizza tabella';
$strOptionalControls = 'Opzionale. Questo carattere controlla come scrivere o leggere i caratteri speciali.';
$strOptionally = 'OPZIONALE';
$strOr = 'O';
$strOverhead = 'In eccesso';

$strPartialText = 'Testo parziale';
$strPassword = 'Password';
$strPasswordEmpty = 'La password � vuota!';
$strPasswordNotSame = 'La password non coincide!';
$strPHPVersion = 'Versione PHP';
$strPmaDocumentation = 'Documentazione di phpMyAdmin';
$strPos1 = 'Inizio';
$strPrevious = 'Precedente';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Chiave primaria';
$strPrimaryKeyHasBeenDropped = 'La chiave primaria � stata eliminata';
$strPrimaryKeyName = 'Il nome della chiave primaria deve essere... PRIMARIO!';
$strPrimaryKeyWarning = '("PRIMARIO" <b>deve</b> essere il nome di, e <b>solo di</b>, una chiave primaria!)';
$strPrintView = 'Visualizza per stampa';
$strPrivileges = 'Privilegi';
$strProperties = 'Propriet�';

$strQBE = 'Query da esempio';
$strQBEDel = 'Cancella';
$strQBEIns = 'Aggiungi';
$strQueryOnDb = 'SQL-query sul database <b>%s</b>:';

$strRecords = 'Record';
$strReloadFailed = 'Riavvio di MySQL fallito.';
$strReloadMySQL = 'Riavvia MySQL';
$strRememberReload = 'Ricorda di riavviare MySQL.';
$strRenameTable = 'Rinomina la tabella in';
$strRenameTableOK = 'La tabella %s � stata rinominata %s';
$strRepairTable = 'Ripara tabella';
$strReplace = 'Sostituisci';
$strReplaceTable = 'Sostituisci i dati della tabella col file';
$strReset = 'Riavvia';
$strReType = 'Reinserisci';
$strRevoke = 'Revoca';
$strRevokeGrant = 'Revoca permessi';
$strRevokeGrantMessage = 'Hai revocato i privilegi di permesso per %s';
$strRevokeMessage = 'Hai revocato i privilegi per %s';
$strRevokePriv = 'Revoca privilegi';
$strRowLength = 'Lunghezza riga';
$strRows = 'Righe';
$strRowsFrom = 'righe a partire da';
$strRowSize = 'Dimensione riga';
$strRowsModeHorizontal = ' orizzontale ';
$strRowsModeOptions = ' in modalit� %s e ripeti gli headers dopo %s celle ';
$strRowsModeVertical = ' verticale ';
$strRowsStatistic = 'Statistiche righe';
$strRunning = 'in esecuzione su %s';
$strRunQuery = 'Invia Query';
$strRunSQLQuery = 'Esegui la/e query SQL sul database %s';

$strSave = 'Salva';
$strSelect = 'Seleziona';
$strSelectFields = 'Seleziona campi (almeno uno):';
$strSelectNumRows = 'nella query';
$strSend = 'Salva con nome...';
$strSequence = 'Sequenza';
$strServerChoice = 'Scelta del server';
$strServerVersion = 'Versione MySQL';
$strSetEnumVal = 'Se il tipo di campo � "enum" o "set", immettere i valori usando il formato: \'a\',\'b\',\'c\'...<br />Se comunque dovete mettere dei backslashes ("\") o dei single quote ("\'") davanti a questi valori, backslashateli (per esempio \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tutti';
$strShowCols = 'Mostra le colonne';
$strShowingRecords = 'Visualizzazione record ';
$strShowPHPInfo = 'Mostra le info sul PHP';
$strShowTables = 'Mostra le tabelle';
$strShowThisQuery = 'Mostra questa query di nuovo';
$strSingly = '(singolarmente)';
$strSize = 'Dimensione';
$strSort = 'Ordinamento';
$strSpaceUsage = 'Spazio utilizzato';
$strSQLQuery = 'query SQL';
$strStartingRecord = 'Record iniziale';
$strStatement = 'Istruzioni';
$strStrucCSV = 'dati CSV';
$strStrucData = 'Struttura e dati';
$strStrucDrop = 'Aggiungi \'drop table\'';
$strStrucExcelCSV = 'CSV per dati Ms Excel';
$strStrucOnly = 'Solo struttura';
$strSubmit = 'Invia';
$strSuccess = 'La query � stata eseguita con successo';
$strSum = 'Totali';

$strTable = 'tabella ';
$strTableComments = 'Commenti sulla tabella';
$strTableEmpty = 'Il nome della tabella � vuoto!';
$strTableHasBeenDropped = 'La tabella %s � stata eliminata';
$strTableHasBeenEmptied = 'La tabella %s � stata svuotata';
$strTableHasBeenFlushed = 'La tabella %s � stata inizializzata';
$strTableMaintenance = 'Amministrazione tabella';
$strTables = '%s tabella(e)';
$strTableStructure = 'Struttura della tabella';
$strTableType = 'Tipo tabella';
$strTextAreaLength = ' A causa della sua lunghezza,<br /> questo campo non pu� essere modificato ';
$strTheContent = 'Il contenuto del file � stato inserito.';
$strTheContents = 'Il contenuto del file sostituisce le righe della tabella con la stessa chiave primaria o chiave unica.';
$strTheTerminator = 'Il carattere terminatore dei campi.';
$strTotal = 'Totali';
$strType = 'Tipo';

$strUncheckAll = 'Deseleziona tutti';
$strUnique = 'Unica';
$strUpdatePrivMessage = 'Hai aggiornato i permessi per %s.';
$strUpdateProfile = 'Aggiorna profilo:';
$strUpdateProfileMessage = 'Il profilo &egrave; stato aggiornato.';
$strUpdateQuery = 'Aggiorna Query';
$strUsage = 'Utilizzo';
$strUseBackquotes = 'Usa i backquotes con i nomi delle tabelle e dei campi';
$strUser = 'Utente';
$strUserEmpty = 'Il nome utente � vuoto!';
$strUserName = 'Nome utente';
$strUsers = 'Utenti';
$strUseTables = 'Utilizza tabelle';

$strValue = 'Valore';
$strViewDump = 'Visualizza dump (schema) della tabella';
$strViewDumpDB = 'Visualizza dump (schema) del database';

$strWelcome = 'Benvenuto in %s';
$strWithChecked = 'Se selezionati:';
$strWrongUser = 'Nome utente o password errati. Accesso negato.';

$strYes = ' Si ';

$strZip = '"compresso con zip"';


// To translate

?>
