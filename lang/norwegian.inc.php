<?php
/* $Id: norwegian.inc.php,v 1.104 2001/12/18 18:19:42 lem9 Exp $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('S�n', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'L�r');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B, %Y klokka %H:%M %p';


$strAccessDenied = 'Ingen tilgang';
$strAction = 'Handling';
$strAddDeleteColumn = 'Legg til/Slett kolonne';
$strAddDeleteRow = 'Legg til/Slett kriterie rad';
$strAddNewField = 'Legg til felt';
$strAddPriv = 'Legg til nytt privilegie';
$strAddPrivMessage = 'Du har lagt til ett nytt privilegie.';
$strAddSearchConditions = 'Legg til s�ke-kriterier (innhold i "where"-setningen):';
$strAddToIndex = 'Legg til indeks &nbsp;%s&nbsp;kolonne(r)';
$strAddUser = 'Legg til en ny bruker';
$strAddUserMessage = 'Du har lagt til en ny bruker.';
$strAffectedRows = 'Ber�rte rader:';
$strAfter = 'Etter';
$strAfterInsertBack = 'Returner';
$strAfterInsertNewInsert = 'Sett inn en ny post';
$strAll = 'Alle';
$strAlterOrderBy = 'Endre tabell rekkef�lge ved';
$strAnalyzeTable = 'Analyser tabell';
$strAnd = 'Og';
$strAnIndex = 'En indeks har blitt lagt til %s';
$strAny = 'Alle';
$strAnyColumn = 'Alle kolonner';
$strAnyDatabase = 'Alle databaser';
$strAnyHost = 'Alle verter';
$strAnyTable = 'Alle tabeller';
$strAnyUser = 'Alle brukere';
$strAPrimaryKey = 'En prim�r-n�kkel har blitt lagt til %s';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'Ved begynnelsen av tabellen';
$strAtEndOfTable = 'Ved slutten av tabellen';
$strAttr = 'Attributter';

$strBack = 'Tilbake';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - m� ikke redigeres ';
$strBookmarkDeleted = 'Bokmerket har blitt slettet.';
$strBookmarkLabel = 'Navn';
$strBookmarkQuery = 'Lagret SQL-sp�rring';
$strBookmarkThis = 'Lagre denne SQL-sp�rringen';
$strBookmarkView = 'Bare se';
$strBrowse = 'Se p�';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'kan ikke starte MySQL modulen,<br />vennligst kontroller PHP konfigureringen.';
$strCantRenameIdxToPrimary = 'Kan ikke endre indeks til PRIMARY!';
$strCardinality = 'Kardinalitet'; 
$strCarriage = 'Linjeskift (Mac): \\r';
$strChange = 'Endre';
$strCheckAll = 'Kontroller alle';
$strCheckDbPriv = 'Kontroller database privilegier';
$strCheckTable = 'Kontroller tabell';
$strColumn = 'Kolonne';
$strColumnNames = 'Kolonnenavn';
$strCompleteInserts = 'Komplette innlegg';
$strConfirm = '�nsker du virkelig � gj�re det?';
$strCookiesRequired = 'Cookies m� v�re sl�tt p� forbi dette punkt.';
$strCopyTable = 'Kopier tabell til (database<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s er kopiert til %s.';
$strCreate = 'Opprett';
$strCreateIndex = 'Lag en indeks p&aring;&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lag en ny indeks';
$strCreateNewDatabase = 'Opprett ny database';
$strCreateNewTable = 'Opprett ny tabell i database ';
$strCriteria = 'Kriterier';

$strData = 'Data';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Databasen %s har blitt slettet';
$strDatabases = 'databaser';
$strDatabasesStats = 'Statistikk for databaser';
$strDataOnly = 'Bare data';
$strDefault = 'Standard';
$strDelete = 'Slett';
$strDeleted = 'Raden er slettet';
$strDeletedRows = 'Slettede rader:';
$strDeleteFailed = 'Slettingen misslyktes!';
$strDeleteUserMessage = 'Du har slettet brukeren %s.';
$strDescending = 'Synkende';
$strDisplay = 'Vis';
$strDisplayOrder = 'Visningsrekkef�lge:';
$strDoAQuery = 'Utf�r en "query by example" (wildcard: "%")';
$strDocu = 'Dokumentasjon';
$strDoYouReally = 'Vil du virkelig ';
$strDrop = 'Slett';
$strDropDB = 'Slett databasen ';
$strDropTable = 'Slett tabell';
$strDumpingData = 'Data-ark for tabell';
$strDynamic = 'dynamisk';

$strEdit = 'Endre';
$strEditPrivileges = 'Rediger privilegier';
$strEffective = 'Effektiv';
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL returnerte tomt resultat (m.a.o. ingen rader).';
$strEnd = 'Slutt';
$strEnglishPrivileges = ' OBS: MySQL privilegie navn er p� engelsk ';
$strError = 'Feil';
$strExtra = 'Ekstra';

$strField = 'Felt';
$strFieldHasBeenDropped = 'Feltet %s har blitt slettet';
$strFields = 'Felter';
$strFieldsEmpty = ' Antall felter er tommt! ';
$strFieldsEnclosedBy = 'Felter omsluttet av';
$strFieldsEscapedBy = 'Felter "escaped" med';
$strFieldsTerminatedBy = 'Felter avsluttet med';
$strFixed = 'statisk';
$strFlushTable = 'Oppfrisk tabellen ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Manglende verdi i skjemaet!';
$strFullText = 'Hele strenger';
$strFunction = 'Funksjon';

$strGenTime = 'Generert den';
$strGo = 'Utf�r';
$strGrants = 'Rettigheter';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'er endret.';
$strHasBeenCreated = 'er opprettet.';
$strHome = 'Hjem';
$strHomepageOfficial = 'Offisiell phpMyAdmin Hjemmeside';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin nedlastingsside';
$strHost = 'Vert';
$strHostEmpty = 'Vertsnavnet er tomt!';

$strIdxFulltext = 'Fulltekst';
$strIfYouWish = 'Hvis du �nsker � kun lese inn enkelte av tabellens kolonner, angi en komme-separert felt-liste.';
$strIgnore = 'Ignorer';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeksen %s har blitt slettet';
$strIndexes = 'Indekser';
$strIndexName = 'Indeks navn&nbsp;:';
$strIndexType = 'Indeks type&nbsp;:';
$strInsert = 'Sett inn';
$strInsertAsNewRow = 'Sett inn som ny rad';
$strInsertedRows = 'Innsatte rader:';
$strInsertNewRow = 'Sett inn ny rad';
$strInsertTextfiles = 'Les tekstfil inn i tabell';
$strInstructions = 'Instruksjoner';
$strInUse = 'i bruk';
$strInvalidName = '"%s" er ett reservert ord, du kan ikke bruke det som et database/tabell/felt navn.';

$strKeepPass = 'Ikke endre passordet';
$strKeyname = 'N�kkel';
$strKill = 'Avslutt';

$strLength = 'Lengde';
$strLengthSet = 'Lengde/Sett*';
$strLimitNumRows = 'Antall poster per side';
$strLineFeed = 'Linjeskift: \\n';
$strLines = 'Linjer';
$strLinesTerminatedBy = 'Linker avsluttet med';
$strLocationTextfile = 'Plassering av filen';
$strLogin = 'Logg inn';
$strLogout = 'Logg ut';
$strLogPassword = 'Passord:';
$strLogUsername = 'Brukernavn:';

$strModifications = 'Endringene er lagret';
$strModify = 'Endre';
$strModifyIndexTopic = 'Endre en indeks';
$strMoveTable = 'Flytt tabell til (database<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har blitt flyttet til %s.';
$strMySQLReloaded = 'MySQL omstartet.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% som kj�rer p� %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Vis prosesser';
$strMySQLShowStatus = 'Vis MySQL runtime informasjon';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNbRecords = 'antall poster';
$strNext = 'Neste';
$strNo = 'Nei';
$strNoDatabases = 'Ingen databaser';
$strNoDropDatabases = '"DROP DATABASE" uttrykk er avsl�tt.';
$strNoFrames = 'phpMyAdmin er mere brukervennlig med en <b>ramme-kapabel</b> web-leser.';
$strNoIndex = 'Ingen indeks definert!';
$strNoIndexPartsDefined = 'Ingen indeks deler definert!';
$strNoModification = 'Ingen endring';
$strNone = 'Ingen';
$strNoPassword = 'Intet passord';
$strNoPrivileges = 'Ingen privilegier';
$strNoQuery = 'Ingen SQL spxrring!';
$strNoRights = 'Du har ikke nok rettigheter til � v�re her n�!';
$strNoTablesFound = 'Ingen tabeller i databasen.';
$strNotNumber = 'Dette er ikke ett tall!';
$strNotValidNumber = ' er ikke et gyldig rad nummer!';
$strNoUsersFound = 'Ingen bruker(e) funnet.';
$strNull = 'Null';
$strNumberIndexes = ' Antall avanserte indekser ';

$strOftenQuotation = 'Ofte anf�rselstegn. Valgfritt inneb�rer at kun tekstfelter ("char" og "varchar") felter er omfattet av tegnet.';
$strOptimizeTable = 'Optimiser tabell';
$strOptionalControls = 'Valgfritt. Angir hvordan spesialtegn skrives eller leses.';
$strOptionally = 'Valgfritt';
$strOr = 'Eller';
$strOverhead = 'Overheng';

$strPartialText = 'Delvis tekst';
$strPassword = 'Passord';
$strPasswordEmpty = 'Passordet er blankt!';
$strPasswordNotSame = 'Passordene er ikke like!';
$strPHPVersion = 'PHP Versjon';
$strPmaDocumentation = 'phpMyAdmin Dokumentasjon';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rn�kkel';
$strPrimaryKeyHasBeenDropped = 'Prim�r-n�kkelen har blitt slettet';
$strPrimaryKeyName = 'Navnet til  prim&aelig;rn&oslash;kkelen m&aring; v&aelig;re... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>m&aring;</b> v&aelig;re navnet til og <b>bare til</b> en prim&aelig;rn&oslash;kkel!)';
$strPrintView = 'Forh�ndsvisning';
$strPrivileges = 'Privilegier';
$strProperties = 'Egenskaper';

$strQBE = 'Sp�rring ved eksempel';
$strQBEDel = 'Slett';
$strQBEIns = 'Sett inn';
$strQueryOnDb = 'SQL-sp�rring i database <b>%s</b>:';

$strRecords = 'Rader';
$strReloadFailed = 'Omstart av MySQL feilet.';
$strReloadMySQL = 'Omstart av MySQL';
$strRememberReload = 'Husk � re-starte serveren.';
$strRenameTable = 'Endre tabellens navn';
$strRenameTableOK = 'Tabellen %s har f�tt nytt navn %s';
$strRepairTable = 'Reparer tabell';
$strReplace = 'Erstatt';
$strReplaceTable = 'Erstatt tabell med filen';
$strReset = 'T�m skjema';
$strReType = 'Gjenta';
$strRevoke = 'Tilbakekall';
$strRevokeGrant = 'Tilbakekall Grant';
$strRevokeGrantMessage = 'Du har tilbakekalt Grant privilegiet til %s';
$strRevokeMessage = 'Du har fjernet privilegiene til %s';
$strRevokePriv = 'Tibakekall privilegier';
$strRowLength = 'Rad lengde';
$strRows = 'Rader';
$strRowsFrom = 'rader fra';
$strRowSize = ' Rad st�relse ';
$strRowsModeVertical= 'loddrett';
$strRowsModeHorizontal= 'vannrett';
$strRowsModeOptions= 'i %s modus og gjenta headers etter %s celler';
$strRowsStatistic = 'Rad statistikk';
$strRunning = 'som kj�rer p� %s';
$strRunQuery = 'Kj�r sp�rring';
$strRunSQLQuery = 'Kj�r SQL sp�rring/sp�rringer mot databasen %s';

$strSave = 'Lagre';
$strSelect = 'Sp�rring';
$strSelectFields = 'Velg felt (minst ett):';
$strSelectNumRows = 'i sp�rring';
$strSend = 'Last ned og lagre som fil';
$strSequence = 'Rekkef�lge';
$strServerChoice = 'Server valg';
$strServerVersion = 'Server versjon';
$strSetEnumVal = 'Hvis felttypen er "enum" eller "set", skriv inn verdien med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du skulle trenge � ha en skr�strek ("\") eller en enkel apostrof ("\'") blant disse verdiene, skriv en skr�strek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Vis';
$strShowAll = 'Vis alle';
$strShowCols = 'Vis kolonner';
$strShowingRecords = 'Viser rader ';
$strShowPHPInfo = 'Vis PHP informasjon';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis denne sp�rring her igjen ';
$strSingly = '(enkeltvis)';
$strSize = 'St�relse';
$strSort = 'Sorter';
$strSpaceUsage = 'Plass bruk';
$strSQLQuery = 'SQL-sp�rring';
$strStartingRecord = 'Start post';
$strStatement = 'Oversikt';
$strStrucCSV = 'CSV data';
$strStrucData = 'Struktur og data';
$strStrucDrop = 'Legg til \'drop table\'';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strStrucOnly = 'Kun struktur';
$strSubmit = 'Send';
$strSuccess = 'Kommandoen/sp�rringen er utf�rt';
$strSum = 'Sum';

$strTable = 'tabell ';
$strTableComments = 'Tabell kommentarer';
$strTableEmpty = 'Tabellnavnet er tomt!';
$strTableHasBeenDropped = 'Tabellen %s har blitt slettet';
$strTableHasBeenEmptied = 'Tabellen %s har blitt t�mt';
$strTableHasBeenFlushed = 'Tabelen %s har blitt oppfrisket';
$strTableMaintenance = 'Tabell vedlikehold';
$strTables = '%s tabell(er)';
$strTableStructure = 'Tabell-struktur for tabell';
$strTableType = 'Tabell type';
$strTextAreaLength = ' P� grunn av sin lengde,<br /> s� vil muligens dette feltet ikke v�re redigerbar ';
$strTheContent = 'Innholdet av filen er lagt inn.';
$strTheContents = 'Innholdet av filen erstatter valgt tabell for rader med lik identifikator eller unikt felt';
$strTheTerminator = 'Tegn som angir slutt p� felter.';
$strTotal = 'totalt';
$strType = 'Type';

$strUncheckAll = 'Fjern avmerking';
$strUnique = 'Unik';
$strUpdatePrivMessage = 'Du har oppdatert privilegiene til %s.';
$strUpdateProfile = 'Oppdater profil:';
$strUpdateProfileMessage = 'Profilen har blitt oppdatert.';
$strUpdateQuery = 'Oppdater sp�rring';
$strUsage = 'Bruk';
$strUseBackquotes = 'Bruk venstre anf�rselstegn med tabell og felt navn';
$strUser = 'Bruker';
$strUserEmpty = 'Brukernavnet er tomt!';
$strUserName = 'Brukernavn';
$strUsers = 'Brukere';
$strUseTables = 'Bruk tabeller';

$strValue = 'Verdi';
$strViewDump = 'Vis dump (skjema) av tabell';
$strViewDumpDB = 'Vis dump (skjema) av database';

$strWelcome = 'Velkommen til %s';
$strWithChecked = 'Med avkrysset:';
$strWrongUser = 'Ugyldig brukernavn/passord. Ingen tilgang.';

$strYes = 'Ja';

$strZip = '"komprimert (zip)"';

// To translate
?>
