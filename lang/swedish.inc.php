<?php
/* $Id: swedish.inc.php,v 1.98 2001/12/18 18:03:31 lem9 Exp $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
$byteUnits = array('bytes', 'kB', 'MB', 'GB');

$day_of_week = array('S�n', 'M�n', 'Tis', 'Ons', 'Tors', 'Fre', 'L�r');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y kl %H:%M';


$strAccessDenied = '�tkomst nekad';
$strAction = '�tg�rd';
$strAddDeleteColumn = 'L�gg till/ta bort f�ltkolumner';
$strAddDeleteRow = 'L�gg till/ta bort villkorsrader';
$strAddNewField = 'L�gg till f�lt';
$strAddPriv = 'L�gg till ett nytt privilegium';
$strAddPrivMessage = 'Du har lagt till ett nytt privilegium.';
$strAddSearchConditions = 'L�gg till s�kvillkor (uttryck i "where"-sats):';
$strAddToIndex = 'L�gg till&nbsp;%s&nbsp;kolumn(er) till index';
$strAddUser = 'L�gg till ny anv�ndare';
$strAddUserMessage = 'Du har lagt till en ny anv�ndare.';
$strAffectedRows = 'P�verkade rader:';
$strAfter = 'Efter';
$strAfterInsertBack = 'Tillbaka';
$strAfterInsertNewInsert = 'L�gg till en ny rad';
$strAll = 'Alla';
$strAlterOrderBy = 'Sortera om tabellen efter';
$strAnalyzeTable = 'Analysera tabell';
$strAnd = 'Och';
$strAnIndex = 'Ett index har lagts till f�r %s';
$strAny = 'N�gon';
$strAnyColumn = 'N�gon kolumn';
$strAnyDatabase = 'N�gon databas';
$strAnyHost = 'N�gon v�rd';
$strAnyTable = 'N�gon tabell';
$strAnyUser = 'N�gon anv�ndare';
$strAPrimaryKey = 'En prim�r myckel har lagts till p� %s';
$strAscending = 'Stigande';
$strAtBeginningOfTable = 'I b�rjan av tabellen';
$strAtEndOfTable = 'I slutet av tabellen';
$strAttr = 'Attribut';

$strBack = 'Bak�t';
$strBinary = 'Bin�r';
$strBinaryDoNotEdit = 'Bin�r - �ndra inte';
$strBookmarkDeleted = 'Bokm�rket har raderats.';
$strBookmarkLabel = 'Etikett';
$strBookmarkQuery = 'Bokm�rkt SQL-fr�ga';
$strBookmarkThis = 'Skapa bokm�rke f�r den h�r SQL-fr�gan';
$strBookmarkView = 'Visa endast';
$strBrowse = 'Visa';
$strBzip = '"bzippad"';

$strCantLoadMySQL = 'kan inte ladda MySQL-till�gg,<br />var god och kontrollera PHP-konfigurationen.';
$strCantRenameIdxToPrimary = 'Kan inte byta namn p� index till "PRIMARY"!';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Vagnretur: \\r';
$strChange = '�ndra';
$strCheckAll = 'Markera alla';
$strCheckDbPriv = 'Kontrollera databasprivilegier';
$strCheckTable = 'Kontrollera tabell';
$strColumn = 'Kolumn';
$strColumnNames = 'Kolumn-namn';
$strCompleteInserts = 'Kompletta infogningar';
$strConfirm = 'Vill du verkligen g�ra det?';
$strCookiesRequired = 'Kakor (cookies) m�ste till�tas f�r att g� vidare.';
$strCopyTable = 'Kopiera tabellen till (databas<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s har kopierats till %s.';
$strCreate = 'Skapa';
$strCreateIndex = 'Skapa ett index f�r&nbsp;%s&nbsp;kolumn(er)';
$strCreateIndexTopic = 'Skapa ett nytt index';
$strCreateNewDatabase = 'Skapa ny databas';
$strCreateNewTable = 'Skapa ny tabell i databas ';
$strCriteria = 'Villkor';

$strData = 'Data';
$strDatabase = 'Databas ';
$strDatabaseHasBeenDropped = 'Databasen %s har tagits bort.';
$strDatabases = 'databaser';
$strDatabasesStats = 'Databas-statistik';
$strDataOnly = 'Enbart data';
$strDefault = 'Standard';
$strDelete = 'Radera';
$strDeleted = 'Raden har raderats';
$strDeletedRows = 'Raderade rader';
$strDeleteFailed = 'Raderingen misslyckades!';
$strDeleteUserMessage = 'Du har tagit bort anv�ndaren %s.';
$strDescending = 'Fallande';
$strDisplay = 'Visa';
$strDisplayOrder = 'Visningsordning:';
$strDoAQuery = 'Utf�r en "query by example" (wildcard: "%")';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Vill du verkligen ';
$strDrop = 'Radera';
$strDropDB = 'Radera databas ';
$strDropTable = 'Radera tabell';
$strDumpingData = 'Data i tabell';
$strDynamic = 'dynamisk';

$strEdit = '�ndra';
$strEditPrivileges = '�ndra privilegier';
$strEffective = 'Effektivt';
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL skickade tillbaka ett tomt resultat (dvs inga rader).';
$strEnd = 'Slut';
$strEnglishPrivileges = ' Viktigt: MySQL-privilegiumnamn anges p� engelska ';
$strError = 'Fel';
$strExtendedInserts = 'Ut�kade infogningar';
$strExtra = 'Extra';

$strField = 'F�lt';
$strFieldHasBeenDropped = 'F�ltet %s har tagits bort';
$strFields = 'F�lt';
$strFieldsEmpty = ' Antalet f�lt �r noll! ';
$strFieldsEnclosedBy = 'F�lten omges av';
$strFieldsEscapedBy = 'Specialtecken i f�lt f�reg�s av';
$strFieldsTerminatedBy = 'F�lten avslutas med';
$strFixed = 'fast';
$strFlushTable = 'Reng�r tabellen ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'V�rde saknas i formul�ret!';
$strFullText = 'Fullst�ndig text';
$strFunction = 'Funktion';

$strGenTime = 'Skapad';
$strGo = 'K�r';
$strGrants = 'Befogenheter';
$strGzip = '"gzippad"';

$strHasBeenAltered = 'har �ndrats.';
$strHasBeenCreated = 'har skapats.';
$strHome = 'Hem';
$strHomepageOfficial = 'phpMyAdmin:s officiella hemsida';
$strHomepageSourceforge = 'phpMyAdmin Sourceforge-nedladdningssida';
$strHost = 'V�rd';
$strHostEmpty = 'V�rdnamnet �r ej satt!';

$strIdxFulltext = 'Heltext';
$strIfYouWish = 'Om du vill ladda enbart n�gra av tabellens kolumner, ange en kommaseparerad f�ltlista.';
$strIgnore = 'Ignorera';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s har tagits bort';
$strIndexName = 'Indexnamn&nbsp;:';
$strIndexType = 'Indextyp&nbsp;:';
$strIndexes = 'Index';
$strInsert = 'L�gg till';
$strInsertAsNewRow = 'L�gg till som ny rad';
$strInsertedRows = 'Tillagda rader:';
$strInsertNewRow = 'L�gg till ny rad';
$strInsertTextfiles = 'Importera textfil till tabellen';
$strInstructions = 'Instruktioner';
$strInUse = 'anv�nds';
$strInvalidName = '"%s" �r ett reserverat ord, du kan inte anv�nda det som ett namn p� en databas/tabell/f�lt.';

$strKeepPass = '�ndra inte l�senordet';
$strKeyname = 'Nyckel';;
$strKill = 'D�da';

$strLength = 'L�ngd';
$strLengthSet = 'L�ngd/V�rden*';
$strLimitNumRows = 'rader per sida';
$strLineFeed = 'Radframmatning: \\n';
$strLines = 'Rader';
$strLinesTerminatedBy = 'Raderna avslutas med';
$strLocationTextfile = 'Textfilens plats';
$strLogin = 'Logga in';
$strLogout = 'Logga ut';
$strLogPassword = 'L�senord:';
$strLogUsername = 'Anv�ndarnamn:';

$strModifications = '�ndringarna har sparats';
$strModify = '�ndra';
$strModifyIndexTopic = '�ndra ett index';
$strMoveTable = 'Flytta tabellen till (databas<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har flyttats till %s.';
$strMySQLReloaded = 'MySQL har startats om.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% k�rs p� %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Visa processer';
$strMySQLShowStatus = 'Visa MySQL-k�rningsinformation';
$strMySQLShowVars = 'Visa MySQL:s systemvariabler';

$strName = 'Namn';
$strNbRecords = 'Antal rader';
$strNext = 'N�sta';
$strNo = 'Nej';
$strNoDatabases = 'Inga databaser';
$strNoDropDatabases = '"DROP DATABASE"-instruktioner �r avst�ngda.';
$strNoFrames = 'phpMyAdmin fungerar tyv�rr endast med webbl�sare som hanterar ramar.';
$strNoIndex = 'Inga index �r definierade!';
$strNoIndexPartsDefined = 'Inga delar av index �r definierade!';
$strNoModification = 'Ingen f�r�ndring';
$strNone = 'Inget';
$strNoPassword = 'Inget l�senord';
$strNoPrivileges = 'Inga privilegier';
$strNoQuery = 'Ingen SQL-fr�ga!';
$strNoRights = 'Du har inte tillr�cklig beh�righet f�r att vara h�r!';
$strNoTablesFound = 'Inga tabeller funna i databasen.';
$strNotNumber = 'Det �r inte ett nummer!';
$strNotValidNumber = ' �r inte ett giltigt radnummer!';
$strNoUsersFound = 'Hittade ingen anv�ndare.';
$strNull = 'Null';
$strNumberIndexes = ' Antal avancerade index ';

$strOftenQuotation = 'Ofta citattecken. Frivilligt betyder att bara \'char\' och \'varchar\' f�lten omgivs av det angivna tecken.';
$strOptimizeTable = 'Optimera tabell';
$strOptionalControls = 'Frivilligt. Styr hur l�sning och skrivning av specialtecken utf�rs.';
$strOptionally = 'Frivilligt';
$strOr = 'Eller';
$strOverhead = 'Outnyttjat';

$strPartialText = 'Avkortade texter';
$strPassword = 'L�senord';
$strPasswordEmpty = 'L�senordet �r tomt!';
$strPasswordNotSame = 'L�senorden �r inte lika!';
$strPHPVersion = 'PHP-version';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPos1 = 'B�rjan';
$strPrevious = 'F�reg�ende';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rnyckel';
$strPrimaryKeyHasBeenDropped = 'Den prim�ra nyckeln har tagits bort';
$strPrimaryKeyName = 'Prim�rnyckelns namn m�ste vara "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>m�ste</b> vara namnet p� och <b>endast p�</b> en prim�rnyckel!)';
$strPrintView = 'Utskriftsv�nlig visning av ovanst�ende';
$strPrivileges = 'Privilegier';
$strProperties = 'Inst�llningar';

$strQBE = 'Skapa fr�ga mha formul�r (Query by Example)';
$strQBEDel = 'Ta bort';
$strQBEIns = 'Infoga';
$strQueryOnDb = 'SQL-fr�ga i databas <b>%s</b>:';

$strRecords = 'Rader';
$strReloadFailed = 'Omstart av MySQL misslyckades.';
$strReloadMySQL = 'Starta om MySQL';
$strRememberReload = 'Kom ih�g att starta om servern.';
$strRenameTable = 'D�p om tabellen till';
$strRenameTableOK = 'Tabell %s har d�pts om till %s';
$strRepairTable = 'Reparera tabell';
$strReplace = 'Ers�tt';
$strReplaceTable = 'Ers�tt tabelldata med fil';
$strReset = 'Nollst�ll';
$strReType = 'Skriv om';
$strRevoke = 'Upph�v';
$strRevokeGrant = 'Upph�v befogenhet';
$strRevokeGrantMessage = 'Du har upph�vt privilegiet \'tilldela befogenheter\' f�r %s';
$strRevokeMessage = 'Du har upph�vt privilegierna f�r %s';
$strRevokePriv = 'Upph�v privilegier';
$strRowLength = 'Radl�ngd';
$strRows = 'Rader';
$strRowsFrom = 'rader med b�rjan fr�n';
$strRowSize = 'Radstorlek';
$strRowsModeVertical= 'lodr�tt';
$strRowsModeHorizontal= 'v�gr�tt';
$strRowsModeOptions= 'i %s format och upprepa rubrikerna efter %s celler';
$strRowsStatistic = 'Radstatistik';
$strRunning = 'k�rs p� %s';
$strRunQuery = 'K�r fr�ga';
$strRunSQLQuery = 'K�r SQL-fr�ga/fr�gor i databasen %s';

$strSave = 'Spara';
$strSelect = 'V�lj';
$strSelectFields = 'V�lj f�lt (minst ett):';
$strSelectNumRows = 'i fr�ga';
$strSend = 'Skicka';
$strSequence = 'Sekv.';
$strServerChoice = 'Serverval';
$strServerVersion = 'Serverversion';
$strSetEnumVal = 'Om en f�lttyp �r "enum" eller "set", var god ange v�rden enligt f�ljande format: \'a\',\'b\',\'c\'...<br />Om du beh�ver l�gga till ett bak�tstreck ("\") eller ett enkelcitat ("\'") i v�rdena, skriv ett bak�tstreck f�re tecknet (till exempel \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Visa';
$strShowAll = 'Visa alla';
$strShowCols = 'Visa kolumner';
$strShowingRecords = 'Visar rader ';
$strShowPHPInfo = 'Visa PHP-information';
$strShowTables = 'Visa tabeller';
$strShowThisQuery = ' Visa den h�r fr�gan igen ';
$strSingly = '(ensam)';
$strSize = 'Storlek';
$strSort = 'Sortering';
$strSpaceUsage = 'Utrymmesanv�ndning';
$strSQLQuery = 'SQL-fr�ga';
$strStartingRecord = 'B�rjar med rad';
$strStatement = 'Uppgift';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur och data';
$strStrucDrop = 'L�gg till \'ta bort tabell\'';
$strStrucExcelCSV = 'CSV f�r MS Excel-data';
$strStrucOnly = 'Enbart struktur';
$strSubmit = 'S�nd';
$strSuccess = 'Din SQL-fr�ga utf�rdes korrekt';
$strSum = 'Summa';

$strTable = 'tabell ';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnamnet �r tomt!';
$strTableHasBeenDropped = 'Tabellen %s har tagits bort';
$strTableHasBeenEmptied = 'Tabellen %s har t�mts';
$strTableHasBeenFlushed = 'Tabellen %s har rengjorts';
$strTableMaintenance = 'Tabellunderh�ll';
$strTables = '%s tabell(er)';
$strTableStructure = 'Struktur f�r tabell';
$strTableType = 'Tabelltyp';
$strTextAreaLength = ' P� grund av dess l�ngd,<br /> kanske detta f�lt inte kan redigeras ';
$strTheContent = 'Filens inneh�ll har importerats.';
$strTheContents = 'Filens inneh�ll ers�tter den valda tabellens rader som har identiska prim�ra eller unika nycklar.';
$strTheTerminator = 'F�ltavslutare.';
$strTotal = 'totalt';
$strType = 'Typ';

$strUncheckAll = 'Avmarkera alla';
$strUnique = 'Unik';
$strUpdatePrivMessage = 'Du har uppdaterat privilegierna f�r %s.';
$strUpdateProfile = 'Uppdatera profil:';
$strUpdateProfileMessage = 'Profilen har uppdaterats.';
$strUpdateQuery = 'Uppdatera fr�ga';
$strUsage = 'Anv�ndning';
$strUseBackquotes = 'Anv�nd bak�tcitat runt tabell- och f�ltnamn';
$strUser = 'Anv�ndare';
$strUserEmpty = 'Anv�ndarnamnet �r tomt!';
$strUserName = 'Anv�ndarnamn';
$strUsers = 'Anv�ndare';
$strUseTables = 'Anv�nd tabeller';

$strValue = 'V�rde';
$strViewDump = 'Visa SQL-satser f�r tabellen';
$strViewDumpDB = 'Visa SQL-satser f�r databasen';

$strWelcome = 'V�lkommen till %s';
$strWithChecked = 'Med markerade:';
$strWrongUser = 'Fel anv�ndarnamn/l�senord. �tkomst nekad.';

$strYes = 'Ja';

$strZip = '"zippad"';

// To translate

?>
