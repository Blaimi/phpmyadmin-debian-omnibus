<?php
/* $Id: slovak-iso.inc.php,v 1.75 2001/12/16 23:52:44 lem9 Exp $ */
/* By: lubos klokner <erkac@vault-tec.sk> */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$left_font_family = '"verdana CE", "Arial CE", verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = '"verdana CE", "Arial CE", helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB');

$day_of_week = array('Ne', 'Po', '�t', 'St', '�t', 'Pi', 'So');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'M�j', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%B, %Y - %H:%M';


$strAccessDenied = 'Pr�stup zamietnut�';
$strAction = 'Akcia';
$strAddDeleteColumn = 'Prida�/Odobra� polia st�pcov';
$strAddDeleteRow = 'Prida�/Odobra� krit�ria riadku';
$strAddNewField = 'Prida� nov� pole';
$strAddPriv = 'Prida� nov� privil�gium';
$strAddPrivMessage = 'Privil�gium bolo pridan�.';
$strAddSearchConditions = 'Prida� vyh�ad�vacie parametre (obsah dotazu po "where" pr�kaze):';
$strAddToIndex = 'Prida� do indexu &nbsp;%s&nbsp;st�pec';
$strAddUser = 'Prida� nov�ho pou��vate�a';
$strAddUserMessage = 'Pou��vate� bol pridan�.';
$strAffectedRows = ' Ovplyvnen� riadky: ';
$strAfter = 'Po';
$strAfterInsertBack = 'Sp�';
$strAfterInsertNewInsert = 'Vlo�i� nov� z�znam';
$strAll = 'V�etko';
$strAlterOrderBy = 'Zmeni� poradie tabu�ky pod�a';
$strAnalyzeTable = 'Analyzova� tabu�ku';
$strAnd = 'a';
$strAnIndex = 'Bol pridan� index pre %s';
$strAny = 'Ak�ko�vek';
$strAnyColumn = 'Ak�ko�vek st�pec';
$strAnyDatabase = 'Ak�ko�vek datab�za';
$strAnyHost = 'Ak�ko�vek hostite�';
$strAnyTable = 'Ak�ko�vek tabu�ka';
$strAnyUser = 'Akyko�vek pou��vate�';
$strAPrimaryKey = 'Bol pridan� prim�rny pre %s';
$strAscending = 'Vzostupne';
$strAtBeginningOfTable = 'Na za�iatku tabu�ky';
$strAtEndOfTable = 'Na konci tabu�ky';
$strAttr = 'Atrib�ty';

$strBack = 'Sp�';
$strBinary = 'Bin�rny';
$strBinaryDoNotEdit = 'Bin�rny - neupravujte ';
$strBookmarkDeleted = 'Z�znam z ob��ben�ch bol zmazan�.';
$strBookmarkLabel = 'N�zov';
$strBookmarkQuery = 'Ob��ben� SQL dotaz';
$strBookmarkThis = 'Prida� tento SQL dotaz do ob��ben�ch';
$strBookmarkView = 'Iba prezrie�';
$strBrowse = 'Prech�dza�';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'nieje mo�n� nahra� roz��renie pre MySQL,<br />pros�m skontrolujte konfigur�ciu PHP.';
$strCantRenameIdxToPrimary = 'Nieje mo�n� premenova� index na PRIMARY!';
$strCardinality = 'Mohutnos�';
$strCarriage = 'N�vrat voz�ku (Carriage return): \\r';
$strChange = 'Zmeni�';
$strCheckAll = 'Ozna�i� v�etko';
$strCheckDbPriv = 'Skontrolova� privil�gia datab�zy';
$strCheckTable = 'Skontrolova� tabu�ku';
$strColumn = 'St�pec';
$strColumnNames = 'N�zvy st�pcov';
$strCompleteInserts = '�pln� vlo�enie';
$strConfirm = 'Skuto�ne si �el�te toto vykona�?';
$strCopyTable = 'Skop�rova� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strCopyTable = 'Skop�rova� tabu�ku do';
$strCopyTableOK = 'Tabu�ka %s bola skor�rovan� do %s.';
$strCreate = 'Vytvori�';
$strCreateIndex = 'Vytvori� index na&nbsp;%s&nbsp;st�pcoch';
$strCreateIndexTopic = 'Vytvori� nov� index';
$strCreateNewDatabase = 'Vytvori� nov� datab�zu';
$strCreateNewTable = 'Vytvori� nov� tabu�ku v datab�ze ';
$strCriteria = 'Krit�ria';

$strData = 'D�ta';
$strDatabase = 'Datab�za ';
$strDatabaseHasBeenDropped = 'Datab�za %s bola zmazan�.';
$strDatabases = 'datab�z(y)';
$strDatabasesStats = '�tatistiky datab�zy';
$strDataOnly = 'Iba d�ta';
$strDefault = 'Predvolen�';
$strDelete = 'Zmaza�';
$strDeleted = 'Riadok bol zmazan�';
$strDeletedRows = 'Zmazan� riadky:';
$strDeleteFailed = 'Mazanie bolo ne�spe�n�!';
$strDeleteUserMessage = 'Pou��vate� %s bol zmazan�.';
$strDescending = 'Zostupne';
$strDisplay = 'Zobrazi�';
$strDisplayOrder = 'Zobrazi� zoraden�:';
$strDoAQuery = 'Vykona� "dotaz pod�a pr�kladu" (wildcard: "%")';
$strDocu = 'Dokument�cia';
$strDoYouReally = 'Skuto�ne chcete vykona� pr�kaz ';
$strDrop = 'Odstr�ni�';
$strDropDB = 'Odstr�ni� datab�zu ';
$strDropTable = 'Zru�i� tabu�ku';
$strDumpingData = 'Dampujem d�ta pre tabu�ku';
$strDynamic = 'dynamic';

$strEdit = 'Upravi�';
$strEditPrivileges = 'Upravi� privil�gia';
$strEffective = 'Efekt�vny';
$strEmpty = 'Vypr�zdni�';
$strEmptyResultSet = 'MySQL vr�til pr�zdny v�sledok (tj. nulov� po�et riadkov).';
$strEnd = 'Koniec';
$strEnglishPrivileges = ' Pozn�mka: n�zvy MySQL privil�gi� s� uv�dzan� v angli�tine. ';
$strError = 'Chyba';
$strExtendedInserts = 'Roz��ren� vkladanie';
$strExtra = 'Extra';

$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s bolo odstr�nen�';
$strFields = 'Polia';
$strFieldsEmpty = ' Po�et pol� je pr�zdny! ';
$strFieldsEnclosedBy = 'Polia uzatvoren�';
$strFieldsEscapedBy = 'Polia uveden� pomocou';
$strFieldsTerminatedBy = 'Polia ukon�en�';
$strFixed = 'pevn�';
$strFlushTable = 'Vypr�zdni� tabu�ku ("FLUSH")';
$strFormat = 'Form�t';
$strFormEmpty = 'Ch�baj�ca polo�ka vo formul�ri !';
$strFullText = 'Pln� texty';
$strFunction = 'Funkcia';

$strGenTime = 'Vygenerovan�:';
$strGo = 'Vykonaj';
$strGrants = 'Privil�gia';
$strGzip = '"gzip-ovan�"';

$strHasBeenAltered = 'bola zmenen�.';
$strHasBeenCreated = 'bola vytvoren�.';
$strHome = 'Domov';
$strHomepageOfficial = 'Ofici�lne str�nky phpMyAdmin-a';
$strHomepageSourceforge = 'Download str�nka phpMyAdmin-a (Sourceforge)';
$strHost = 'Hostitel';
$strHostEmpty = 'N�zov hostitela je pr�zdny!';

$strIdxFulltext = 'Cel� text';
$strIfYouWish = 'Ak si zel�te nahra� iba ur�it� st�pce tabu�ky, �pecifikujte ich ako zoznam pol� oddelen� �iarkou.';
$strIgnore = 'Ignorova�';
$strIndex = 'Index';
$strIndexes = 'Indexy';
$strIndexHasBeenDropped = 'Index pre %s bol odstr�nen�';
$strIndexName = 'Meno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strInsert = 'Vlo�i�';
$strInsertAsNewRow = 'Vlo�i� ako nov� riadok';
$strInsertedRows = 'Vlo�en� riadky:';
$strInsertNewRow = 'Vlo�i� nov� riadok';
$strInsertTextfiles = 'Vlo�i� textov� s�bory do tabu�ky';
$strInstructions = 'In�trukcie';
$strInUse = 'pr�ve sa pou��va';
$strInvalidName = '"%s" je rezervovan� slovo, nem��e by� pou�it� ako n�zov datab�zy/tabu�ky/po�a.';

$strKeepPass = 'Nezmeni� heslo';
$strKeyname = 'K���ov� n�zov';
$strKill = 'Zabi�';

$strLength = 'D�ka';
$strLengthSet = 'D�ka/Nastavi�*';
$strLimitNumRows = 'z�znamov na str�nku';
$strLineFeed = 'Ukon�enie riadku (Linefeed): \\n';
$strLines = 'Riadky';
$strLinesTerminatedBy = 'Riadky ukon�en�';
$strLocationTextfile = 'Lok�cia textov�ho s�boru';
$strLogout = 'Odhl�si� sa';

$strModifications = 'Zmeny boli ulo�en�';
$strModify = 'Zmeni�';
$strModifyIndexTopic = 'Modifikova� index';
$strMoveTable = 'Presun�� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strMoveTableOK = 'Tabu�ka %s bola presunut� do %s.';
$strMySQLReloaded = 'MySQL znovu-na��tan�.';
$strMySQLSaid = 'MySQL hl�si: ';
$strMySQLServerProcess = 'MySQL %pma_s1% be�i na %pma_s2% ako %pma_s3%';
$strMySQLShowProcess = 'Zobrazi� procesy';
$strMySQLShowStatus = 'Zobrazi� MySQL inform�cie o behu';
$strMySQLShowVars = 'Zobrazi� MySQL syst�mov� premenn�';

$strName = 'N�zov';
$strNbRecords = 'Po�et z�znamov';
$strNext = '�al��';
$strNo = 'Nie';
$strNoDatabases = '�iadne datab�zy';
$strNoDropDatabases = 'Mo�nos� "DROP DATABASE" vypnut�.';
$strNoFrames = 'phpMyAdmin funguje lep�ie s prehliada�mi podporuj�cimi <b>r�my</b>.';
$strNoIndex = 'Nebol definovan� �iadny index!';
$strNoIndexPartsDefined = '�asti indexu neboli definovan�!';
$strNoModification = '�iadna zmena';
$strNone = '�iadny';
$strNoPassword = '�iadne heslo';
$strNoPrivileges = '�iadne privil�gia';
$strNoQuery = '�iadny SQL dotaz!';
$strNoRights = 'Nem�te dostato�n� pr�va na vykonanie tejto akcie!';
$strNoTablesFound = 'Neboli n�jden� �iadne tabu�ky v tejto dat�baze.';
$strNotNumber = 'Toto nieje ��slo!';
$strNotValidNumber = ' nieje platn� ��slo riadku!';
$strNoUsersFound = 'Nebol n�jden� �iadny pou��vate�.';
$strNull = 'Nulov�';
$strNumberIndexes = ' Po�et roz��ren�ch indexov ';

$strOftenQuotation = '�asto uvodzuj�ce znaky. Volite�ne znamena, �e iba polia typu char a varchar s� uzatvoren� do "uzatv�rac�ch" znakov.';
$strOptimizeTable = 'Optimalozova� tabu�ku';
$strOptionalControls = 'Voliteln�. Ur�uje ako zapisova� alebo ��ta� �peci�lne znaky.';
$strOptionally = 'Volite�ne';
$strOr = 'alebo';
$strOverhead = 'Naviac';

$strPartialText = '�iasto�n� texty';
$strPassword = 'Heslo';
$strPasswordEmpty = 'Heslo je pr�zdne!';
$strPasswordNotSame = 'Hesl� sa nezhoduj�!';
$strPHPVersion = 'Verzia PHP';
$strPmaDocumentation = 'phpMyAdmin Dokument�cia';
$strPos1 = 'Za�iatok';
$strPrevious = 'Predch�dzaj�ci';
$strPrimary = 'Prim�rny';
$strPrimaryKey = 'Prim�rny k���';
$strPrimaryKeyHasBeenDropped = 'Prim�rny k��� bol zru�en�';
$strPrimaryKeyName = 'N�zov prim�rneho k��ca mus� by�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mus�</b> by� <b>iba</b> meno prim�rneho k���a!)';
$strPrintView = 'N�h�ad k tla�i';
$strPrivileges = 'Privil�gia';
$strProperties = 'Vlastnosti';

$strQBE = 'Dotaz pod�a pr�kladu';
$strQBEDel = 'Zmaza�';
$strQBEIns = 'Vlo�i�';
$strQueryOnDb = ' SQL dotaz v datab�ze <b>%s</b>:';

$strRecords = 'Z�znamov';
$strReloadFailed = 'Znovu-na��tanie MySQL bolo ne�spe�n�.';
$strReloadMySQL = 'Znovu-na��ta� MySQL';
$strRememberReload = 'Nezabudnite znovu-na��ta� MySQL server.';
$strRenameTable = 'Premenova� tabu�ku na';
$strRenameTableOK = 'Tabu�ka %s bola premenovan� na %s';
$strRepairTable = 'Opravi� tabu�ku';
$strReplace = 'Nahradi�';
$strReplaceTable = 'Nahradi� d�ta v tabu�ke s�borom';
$strReset = 'P�vodn� (Reset)';
$strReType = 'Nap�sa� znova';
$strRevoke = 'Zrusi�';
$strRevokeGrant = 'Zru�i� polovenie pridelova� privil�gia';
$strRevokeGrantMessage = 'Bolo zru�en� pr�vo pridelova� privil�gia pre %s';
$strRevokeMessage = 'Boli zru�en� privil�gia pre %s';
$strRevokePriv = 'Zru�i� privil�gia';
$strRowLength = 'D�ka riadku';
$strRows = 'Riadkov';
$strRowsFrom = 'riadky za��naj� od';
$strRowSize = ' Ve�kos� riadku ';
$strRowsStatistic = '�tatistika riadku';
$strRunning = 'be�i na %s';
$strRunQuery = 'Odo�li dotaz';
$strRunSQLQuery = 'Spusti� SQL dotaz/dotazy na datab�zu %s';

$strSave = 'Ulo�i�';
$strSelect = 'Vybra�';
$strSelectFields = 'Zvoli� pole (najmenej jedno):';
$strSelectNumRows = 'v dotaze';
$strSend = 'Po�li';
$strSequence = 'Seq.';
$strServerChoice = 'Vo�ba serveru';
$strServerVersion = 'Verzia serveru';
$strSetEnumVal = 'Ak je pole typu "enum" alebo "set", pros�m zad�vajte hodnoty v tvare: \'a\',\'b\',\'c\'...<br />Ak dokonca porebujete zada� sp�tn� lom�tko ("\") alebo apostrof ("\'") pri t�chto hodnot�ch, zadajte ich napr�klad takto \'\\\\xyz\' alebo \'a\\\'b\'.';
$strShow = 'Uk�za�';
$strShowAll = 'Zobrazi� v�etko';
$strShowCols = 'Zobrazi� st�pce';
$strShowingRecords = 'Uk�za� z�znamy ';
$strShowPHPInfo = 'Zobrazi� inform�cie o PHP';
$strShowTables = 'Zobrazi� tabu�ky';
$strShowThisQuery = ' Zobrazi� tento dotaz znovu ';
$strSingly = '(po jednom)';
$strSize = 'Ve�kos�';
$strSort = 'Triedi�';
$strSpaceUsage = 'Zabran� miesto';
$strSQLQuery = 'SQL dotaz';
$strStartingRecord = 'Za�iatok z�znamu';
$strStatement = '�daj';
$strStrucCSV = 'CSV d�ta';
$strStrucData = '�trukt�ru a d�ta';
$strStrucDrop = 'Pridaj \'vyma� tabu�ku\'';
$strStrucExcelCSV = 'CSV pre Ms Excel d�ta';
$strStrucOnly = 'Iba �trukt�ru';
$strSubmit = 'Odo�li';
$strSuccess = 'SQL dotaz bol �spe�ne vykonan�';
$strSum = 'Celkom';

$strTable = 'tabu�ka ';
$strTableComments = 'Koment�r k tabu�ke';
$strTableEmpty = 'Tabu�ka je pr�zdna!';
$strTableHasBeenDropped = 'Tabu�ka %s bola odstr�nen�';
$strTableHasBeenEmptied = 'Tabu�ka %s bola vypr�zden�';
$strTableHasBeenFlushed = 'Tabu�ka %s bola vypr�zdnen�';
$strTableMaintenance = '�dr�ba tabu�ky';
$strTables = '%s tabu�ka(y)';
$strTableStructure = '�trukt�ra tabu�ky pre tabu�ku';
$strTableType = 'Typ tabu�ky';
$strTextAreaLength = ' Toto mo�no nepojde upravi�,<br /> k�li svojej d�ke ';
$strTheContent = 'Obsah V�ho s�boru bol vlo�en�.';
$strTheContents = 'Obsah s�boru prep�e obsah vybranej tabu�ky v riadkoch s identick�m prim�rnym alebo unik�tnym k���om.';
$strTheTerminator = 'Ukon�enie pol�.';
$strTotal = 'celkovo';
$strType = 'Typ';

$strUncheckAll = 'Odzna�i� v�etko';
$strUnique = 'Unik�tny';
$strUpdatePrivMessage = 'Boli aktualizovan� privil�gia pre %s.';
$strUpdateProfile = 'Aktualizova� profil:';
$strUpdateProfileMessage = 'Profil bol aktualizovan�.';
$strUpdateQuery = 'Aktualizova� dotaz';
$strUsage = 'Vyu�itie';
$strUseBackquotes = ' Pou�i� opa�n� apostrof pri n�zvoch tabuliek a pol� ';
$strUser = 'Pou��vate�';
$strUserEmpty = 'Meno pou��vate�a je pr�zdne!';
$strUserName = 'Meno pou��vate�a';
$strUsers = 'Pou��vatelia';
$strUseTables = 'Pou�i� tabu�ky';

$strValue = 'Hodnota';
$strViewDump = 'Zobrazi� dump (sch�mu) tabu�ky';
$strViewDumpDB = 'Zobrazi� dump (sch�mu) datab�zy';

$strWelcome = 'Vitajte v %s';
$strWithChecked = 'V�ber:';
$strWrongUser = 'Zl� pou��vate�sk� meno alebo heslo. Pr�stup zamietnut�.';

$strYes = '�no';

$strZip = '"zo zipovan�"';


// To translate
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strLogin = 'Login';
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';

$strRowsModeVertical=" vertical ";  //to translate
$strRowsModeHorizontal=" horizontal ";  //to translate
$strRowsModeOptions=" in %s mode and repeat headers after %s cells ";  //to translate
?>
