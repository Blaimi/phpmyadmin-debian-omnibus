<?php
/* $Id: danish.inc.php,v 1.95 2001/12/16 23:52:44 lem9 Exp $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('S�n', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'L�r');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d/%m %Y kl. %H:%M:%S';


$strAccessDenied = 'Adgang N�gtet';
$strAction = 'Handling';
$strAddDeleteColumn = 'Tilf�j/Slet felt kolonne';
$strAddDeleteRow = 'Tilf�j/Slet kriterie r�kke';
$strAddNewField = 'Tilf�j nyt felt';
$strAddPriv = 'Tilf�j nyt privilegium';
$strAddPrivMessage = 'Du har tilf�jet et nyt privilegium.'; 
$strAddSearchConditions = 'Tilf�j s�gekriterier (kroppen af "WHERE" s�tningen):';
$strAddUser = 'Tilf�j en ny bruger';
$strAddUserMessage = 'Du har tilf�jet en ny bruger.';
$strAffectedRows = 'Ber�rte r�kker:';
$strAfter = 'Efter';
$strAll = 'Alle';
$strAlterOrderBy = 'Arranger r�kkeorden efter';
$strAnalyzeTable = 'Analyser tabel';
$strAnd = 'Og';
$strAnIndex = 'Der er tilf�jet et indeks til %s';
$strAny = 'Enhver'; 
$strAnyColumn = 'Enhver kolonne';
$strAnyDatabase = 'Enhver database';
$strAnyHost = 'Enhver v�rt';
$strAnyTable = 'Enhver tabel';
$strAnyUser = 'Enhver bruger';
$strAPrimaryKey = 'Der er f�jet en prim�r n�gle til %s';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'I begyndelsen af tabel';
$strAtEndOfTable = 'I slutningen af tabel';
$strAttr = 'Attributter';

$strBack = 'Tilbage';
$strBinary = ' Bin�rt ';
$strBinaryDoNotEdit = ' Bin�rt - m� ikke �ndres ';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'SQL-foresp�rgsel med bogm�rke';
$strBookmarkThis = 'Lav bogm�rke til denne SQL-foresp�rgsel';
$strBookmarkView = 'Kun oversigt';
$strBrowse = 'Vis';
$strBzip = '"bzipped"'; //to translate

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = 'Carriage return: \\r';
$strChange = '�ndre';
$strCheckAll = 'Afm�rk alt'; 
$strCheckDbPriv = 'Tjek database privilegier';
$strCheckTable = 'Tjek tabel';
$strColumn = 'Kolonne';
$strColumnNames = 'Kolonne navne';
$strCompleteInserts = 'Lav komplette inserts';
$strConfirm = 'Ikke du sikker p� at du vil g�re det?';
$strCopyTable = 'Kopier tabel til (database<b>.</b>tabel):';
$strCopyTableOK = 'Tabellen %s er nu kopieret til: %s.';
$strCreate = 'Opret';
$strCreateNewDatabase = 'Opret ny database';
$strCreateNewTable = 'Opret ny tabel i database ';
$strCriteria = 'Kriterier';

$strData = 'Data'; 
$strDatabase = 'Database: ';
$strDatabaseHasBeenDropped = 'Database %s er slettet.';
$strDatabases = 'databaser';
$strDatabasesStats = 'Database statistik';
$strDataOnly = 'Kun data';
$strDefault = 'Standardv�rdi';
$strDelete = 'Slet';
$strDeleted = 'R�kken er slettet!';
$strDeletedRows = 'Slettede r�kker:';
$strDeleteFailed = 'Kan ikke slette!';
$strDeleteUserMessage = 'Du har slettet brugeren %s.';
$strDescending = 'Faldende'; 
$strDisplay = 'Vis';
$strDisplayOrder = 'R�kkef�lge af visning:';
$strDoAQuery = 'K�r en foresp�rgsel p� felter (wildcard: "%")';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Er du sikker p� at du vil ';
$strDrop = 'Slet';
$strDropDB = 'Slet database ';
$strDropTable = 'Slet tabel';  
$strDumpingData = 'Data dump for tabellen';
$strDynamic = 'dynamisk';

$strEdit = 'Ret';
$strEditPrivileges = 'Ret privilegier';
$strEffective = 'Effektiv'; 
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL returnerede ingen data (fx ingen r�kker).';
$strEnd = 'Slut';
$strEnglishPrivileges = ' NB: Navne p� MySQL privilegier er p� engelsk ';
$strError = 'Fejl';
$strExtendedInserts = 'Extended inserts';  //to translate
$strExtra = 'Ekstra';

$strField = 'Feltnavn';
$strFieldHasBeenDropped = 'Felt %s er slettet';
$strFields = 'Felter';
$strFieldsEmpty = ' Felttallet har ingen v�rdi! '; 
$strFieldsEnclosedBy = 'Felter indrammet med';
$strFieldsEscapedBy = 'Felter escaped med';
$strFieldsTerminatedBy = 'Felter afsluttet med';
$strFixed = 'ordnet'; 
$strFormat = 'Format'; //to translate
$strFormEmpty = 'Ingen v�rdi i formularen !'; 
$strFullText = 'Komplette tekster';
$strFunction = 'Funktion';

$strGenTime = 'Genereringstidspunkt'; 
$strGo = 'Udf�r';
$strGrants = 'Tildelinger';
$strGzip = '"gzipped"';  //to translate

$strHasBeenAltered = 'er �ndret.';
$strHasBeenCreated = 'er oprettet.';
$strHome = 'Hjem';
$strHomepageOfficial = 'Officiel phpMyAdmin hjemmeside ';
$strHomepageSourceforge = 'Ny phpMyAdmin hjemmeside ';
$strHost = 'V�rt';
$strHostEmpty = 'Der er intet v�rtsnavn!'; 

$strIdxFulltext = 'Fuldtekst';
$strIfYouWish = 'Hvis du kun �nsker at importere nogle af tabellens kolonner, angives de med en kommasepareret felt liste.';
$strIndex = 'Indeks';
$strIndexes = 'Indekser';
$strIndexHasBeenDropped = 'Index %s er blevet slettet';
$strInsert = 'Inds�t';
$strInsertAsNewRow = 'Inds�t som ny r�kke';
$strInsertedRows = 'Indsatte r�kker:';
$strInsertNewRow = 'Inds�t ny r�kke';
$strInsertTextfiles = 'Importer tekstfil til tabellen';
$strInstructions = 'Instruktioner';
$strInvalidName = '"%s" er et reserveret ord, du kan ikke bruge det som database-, tabel- eller feltnavn.';
$strInUse = 'i brug';

$strKeepPass = 'Password m� ikke �ndres';
$strKeyname = 'N�gle';
$strKill = 'Kill'; //to translate

$strLength = 'L�ngde';
$strLengthSet = 'L�ngde/V�rdi*';
$strLimitNumRows = 'poster pr. side';
$strLineFeed = 'Linefeed: \\n';
$strLines = 'Linier';
$strLinesTerminatedBy = 'Linier afsluttet med';
$strLocationTextfile = 'Tekstfilens placering';
$strLogout = 'Log af';

$strModifications = 'Rettelserne er gemt!';
$strModify = 'Ret'; 
$strMoveTable = 'Flyt tabel til (database<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s er flyttet til %s.';
$strMySQLReloaded = 'MySQL genstartet.';
$strMySQLSaid = 'MySQL returnerede: ';
$strMySQLServerProcess = 'MySQL %pma_s1% k�rer p� %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Vis tr�de';
$strMySQLShowStatus = 'Vis MySQL runtime information';
$strMySQLShowVars = 'Vis MySQL system variable';

$strName = 'Navn';
$strNbRecords = 'Antal records';
$strNext = 'N�ste';
$strNo = 'Nej';
$strNoDatabases = 'Ingen databaser'; 
$strNoDropDatabases = '"DROP DATABASE" erkl�ringer kan ikke bruges.';
$strNoModification = 'Ingen �ndring';
$strNoPassword = 'Intet password';
$strNoPrivileges = 'Ingen privilegier';
$strNoQuery = 'Ingen SQL foresp�rgsel!';
$strNoRights = 'Du har ikke tilstr�kkelige rettigheder til at v�re her!'; 
$strNoTablesFound = 'Ingen tabeller fundet i databasen.';
$strNotNumber = 'Dette er ikke et tal!';
$strNotValidNumber = ' er ikke et gyldigt r�kkenummer!';
$strNoUsersFound = 'Ingen bruger(e) fundet.'; 
$strNull = 'Nulv�rdi';
$strNumberIndexes = ' Antal udvidede indeks ';

$strOftenQuotation = 'Ofte anf�rselstegn. OPTIONALLY betyder at kun char og varchar felter er omsluttet med det valgte "tekstkvalifikator"-tegn.'; //skal muligvis �ndres
$strOptimizeTable = 'Optimer tabel';
$strOptionalControls = 'Valgfrit. Kontrollerer hvordan specialtegn skrives eller l�ses.';
$strOptionally = 'OPTIONALLY';
$strOr = 'Eller';
$strOverhead = 'Overhead'; 

$strPartialText = 'Delvise tekster';
$strPassword = 'Password'; 
$strPasswordEmpty = 'Der er ikke angivet noget password!';
$strPasswordNotSame = 'De to passwords er ikke ens!';
$strPHPVersion = 'PHP version';
$strPmaDocumentation = 'phpMyAdmin dokumentation'; 
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�r n�gle';
$strPrimaryKeyHasBeenDropped = 'Prim�rn�glen er slettet';
$strPrintView = 'Vis (udskriftvenlig)';
$strPrivileges = 'Privilegier';
$strProperties = 'Egenskaber';

$strQBE = 'Query by Example';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)
$strQueryOnDb = 'SQL-foresp�rgsel til database <b>%s</b>:';

$strRecords = 'Poster';
$strReloadFailed = 'Genstart af MySQL fejlede.';
$strReloadMySQL = 'Genstart MySQL';
$strRememberReload = 'Husk at indl�se serveren.';
$strRenameTable = 'Omd�b tabel til';
$strRenameTableOK = 'Tabellen %s er nu omd�bt til: %s';
$strRepairTable = 'Reparer tabel';
$strReplace = 'Erstat';
$strReplaceTable = 'Erstat data i tabellen med filens data';
$strReset = 'Nulstil';
$strReType = 'Skriv igen'; 
$strRevoke = 'Tilbagekald';
$strRevokeGrant = 'Tilbagekald tildeling'; 
$strRevokeGrantMessage = 'Du har tilbagekaldt det tildelte privilegium for %s';
$strRevokeMessage = 'Du har tilbagekaldt privilegierne for %s';
$strRevokePriv = 'Tilbagekald privilegier';
$strRowLength = 'R�kke l�ngde';
$strRows = 'R�kker';
$strRowsFrom = 'r�kker startende fra';
$strRowSize = ' R�kke st�rrelse ';
$strRowsStatistic = 'R�kke statistik';
$strRunning = 'k�rer p� %s';
$strRunQuery = 'Send foresp�rgsel';
$strRunSQLQuery = 'K�r SQL forsp�rgsel(er) p� database %s';

$strSave = 'Gem';
$strSelect = 'V�lg';
$strSelectFields = 'V�lg mindst eet felt:';
$strSelectNumRows = 'i foresp�rgsel';
$strSend = 'Send';
$strSequence = 'Seq.'; //to translate
$strServerChoice = 'Server valg'; 
$strServerVersion = 'Server version'; 
$strSetEnumVal = 'Hvis et felt er af typen "enum" eller "set", skal v�rdierne angives p� formen: \'a\',\'b\',\'c\'...<br />Skulle du f� brug for en backslash ("\") eller et enkelt anf�rselstegn ("\'") blandt disse v�rdier, s� tilf�j en ekstra backslash (fx \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Vis';
$strShowAll = 'Vis alt'; 
$strShowCols = 'Vis kolonner';
$strShowingRecords = 'Viser poster ';
$strShowPHPInfo = 'Vis PHP information';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis foresp�rgslen her igen ';
$strSingly = '(enkeltvis)'; 
$strSize = 'St�rrelse'; 
$strSort = 'Sorter';
$strSpaceUsage = 'Pladsforbrug';
$strSQLQuery = 'SQL-foresp�rgsel';
$strStartingRecord = 'Begyndende post';
$strStatement = 'Erkl�ringer'; 
$strStrucCSV = 'CSV data';
$strStrucData = 'Struturen og data';
$strStrucDrop = 'Tilf�j \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strStrucOnly = 'Kun strukturen';
$strSubmit = 'Send';
$strSuccess = 'Din SQL-foresp�rgsel blev udf�rt korrekt';
$strSum = 'Sum'; 

$strTable = 'Tabel: ';
$strTableComments = 'Tabel kommentarer';
$strTableEmpty = 'Intet tabelnavn!';
$strTableHasBeenDropped = 'Tabel %s er slettet';
$strTableHasBeenEmptied = 'Tabel %s er t�mt';
$strTableMaintenance = 'Tabel vedligehold';
$strTables = '%s tabel(ler)'; 
$strTableStructure = 'Struktur dump for tabellen';
$strTableType = 'Tabel type';
$strTextAreaLength = ' P� grund af feltets l�ngde,<br /> kan det muligvis ikke �ndres ';
$strTheContent = 'Filens indhold er importeret.';
$strTheContents = 'Filens indhold erstatter den valgte tabels r�kker for r�kker med identisk prim�r eller unik n�gle.';
$strTheTerminator = 'Felterne afgr�nses af dette tegn.';
$strTotal = 'total';
$strType = 'Datatype';

$strUncheckAll = 'Fjern alle m�rker';
$strUnique = 'Unik';
$strUpdatePrivMessage = 'Du har opdateret privilegierne for %s.';
$strUpdateProfile = 'Opdater profil:';
$strUpdateProfileMessage = 'Profilen er blevet opdateret.';
$strUpdateQuery = 'Opdater foresp�rgsel';
$strUsage = 'Benyttelse';
$strUseBackquotes = 'Use backquotes with tables and fields\' names';
$strUser = 'Bruger';
$strUserEmpty = 'Intet brugernavn!';
$strUserName = 'Brugernavn'; 
$strUsers = 'Brugere';
$strUseTables = 'Benyt tabeller';

$strValue = 'V�rdi';
$strViewDump = 'Vis dump (skema) over tabel';
$strViewDumpDB = 'Vis dump (skema) af database';

$strWelcome = 'Velkommen til %s';
$strWithChecked = 'Med det afm�rkede:';
$strWrongUser = 'Forkert brugernavn/kodeord. Adgang n�gtet.';

$strYes = 'Ja';

$strZip = '"zipped"'; //to translate

// To translate
$strAfterInsertBack = 'Return';
$strAfterInsertNewInsert = 'Insert a new record';
$strBookmarkDeleted = 'The bookmark has been deleted.';
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strFlushTable = 'Flush the table ("FLUSH")';
$strLogin = 'Login';
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strTableHasBeenFlushed = 'Table %s has been flushed';

// Indexes
$strAddToIndex = 'Add to index &nbsp;%s&nbsp;column(s)';
$strCantRenameIdxToPrimary = 'Can\'t rename index to PRIMARY!';
$strCardinality = 'Cardinality';
$strCreateIndex = 'Create an index on&nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Create a new index';
$strIgnore = 'Ignore';
$strIndexName = 'Index name&nbsp;:';
$strIndexType = 'Index type&nbsp;:';
$strModifyIndexTopic = 'Modify an index';
$strNone = 'None';
$strNoIndexPartsDefined = 'No index parts defined!';
$strNoIndex = 'No index defined!';
$strPrimaryKeyName = 'The name of the primary key must be... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>must</b> be the name of and <b>only of</b> a primary key!)';
$strRowsModeVertical=" vertical ";  //to translate
$strRowsModeHorizontal=" horizontal ";  //to translate
$strRowsModeOptions=" in %s mode and repeat headers after %s cells ";  //to translate
?>
