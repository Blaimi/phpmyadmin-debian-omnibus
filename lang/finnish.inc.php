<?php
/* $Id: finnish.inc.php,v 1.37 2001/12/18 17:53:46 lem9 Exp $ */

/*
 * Finnish language file by Visa Kopu, visa@visakopu.net
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('tavua', 'kt', 'Mt', 'Gt');

$day_of_week = array('Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La');
$month = array('Tammi', 'Helmi', 'Maalis', 'Huhti', 'Touko', 'Kes�', 'Hein�', 'Elo', 'Syys', 'Loka', 'Marras', 'Joulu');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y klo %H:%M';


$strAccessDenied = 'P��sy kielletty';
$strAction = 'Toiminto';
$strAddDeleteColumn = 'Lis��/poista sarakkeita';
$strAddDeleteRow = 'Lis��/poista hakuehtoja';
$strAddNewField = 'Lis�� sarake';
$strAddPriv = 'Lis�� k�ytt�oikeus';
$strAddPrivMessage = 'Olet lis�nnyt uuden k�ytt�oikeuden.';
$strAddSearchConditions = 'Lis�� hakuehtoja ("where"-lauseen sis�lt�):';
$strAddToIndex = 'Lis�� indeksi &nbsp;%s&nbsp;sarakkeisiin';
$strAddUser = 'Lis�� uusi k�ytt�j�';
$strAddUserMessage = 'Olet lis�nnyt uuden k�ytt�j�n.';
$strAffectedRows = 'Rivej�:';
$strAfter = 'J�lkeen sarakkeen:';
$strAfterInsertBack = 'Takaisin';
$strAfterInsertNewInsert = 'Lis�� uusi rivi';
$strAll = 'Kaikki';
$strAlterOrderBy = 'J�rjest� taulu';
$strAnalyzeTable = 'Analysoi taulu';
$strAnd = 'Ja';
$strAnIndex = 'Sarakkeelle %s on lis�tty indeksi';
$strAny = 'Mik� tahansa';
$strAnyColumn = 'Mik� tahansa sarake';
$strAnyDatabase = 'Mik� tahansa tietokanta';
$strAnyHost = 'Mik� tahansa palvelin';
$strAnyTable = 'Mik� tahansa taulu';
$strAnyUser = 'Mik� tahansa k�ytt�j�';
$strAPrimaryKey = 'Sarakkeelle %s on lis�tty ensisijainen avain';
$strAscending = 'Nouseva';
$strAtBeginningOfTable = 'Taulun alkuun';
$strAtEndOfTable = 'Taulun loppuun';
$strAttr = 'Attribuutit';

$strBack = 'Takaisin';
$strBinary = 'Bin��ridata';
$strBinaryDoNotEdit = 'Bin��ridataa - �l� muokkaa';
$strBookmarkDeleted = 'Tallennettu SQL-lause on poistettu.';
$strBookmarkLabel = 'Tunniste';
$strBookmarkQuery = 'Tallennettu SQL-lause';
$strBookmarkThis = 'Tallenna SQL-lause';
$strBookmarkView = 'N�yt�';
$strBrowse = 'Selaa';
$strBzip = '"bzip-pakattu"';

$strCantLoadMySQL = 'MySQL-laajennusta ei voitu ladata,<br />tarkista PHP:n asetukset.';
$strCantRenameIdxToPrimary = 'Indeksi� ei voi muuttaa PRIMARY-nimiseksi!';
$strCardinality = 'Kardinaliteetti';
$strCarriage = 'CR-rivinvaihto: \\r';
$strChange = 'Muokkaa';
$strCheckAll = 'Tarkista kaikki';
$strCheckDbPriv = 'Tarkista tietokannan k�ytt�oikeudet';
$strCheckTable = 'Tarkista taulu';
$strColumn = 'Sarake';
$strColumnNames = 'Sarakkeiden nimet';
$strCompleteInserts = 'T�ydelliset insert-lauseet';
$strConfirm = 'Oletko varma, ett� haluat tehd� t�m�n?';
$strCookiesRequired = 'Selaimessa pit�� olla cookietuki p��ll� t�st� eteenp�in.';
$strCopyTable = 'Kopioi taulu (tietokanta<b>.</b>taulu):';
$strCopyTableOK = 'Taulu %s on kopioitu nimelle %s.';
$strCreate = 'Luo';
$strCreateIndex = 'Luo sarakkeista indeksi';
$strCreateIndexTopic = 'Luo uusi indeksi';
$strCreateNewDatabase = 'Luo uusi tietokanta';
$strCreateNewTable = 'Luo uusi taulu tietokantaan ';
$strCriteria = 'Hakuehdot';

$strData = 'Data';
$strDatabase = 'Tietokanta ';
$strDatabases = 'tietokantaa';
$strDatabaseHasBeenDropped = 'Tietokanta %s on pudotettu.';
$strDatabasesStats = 'Tietokantastatistiikka';
$strDataOnly = 'Vain data';
$strDefault = 'Oletusarvo';
$strDelete = 'Poista';
$strDeleted = 'Rivi on poistettu';
$strDeletedRows = 'Poistetut rivit:';
$strDeleteFailed = 'Poistaminen ep�onnistui!';
$strDeleteUserMessage = 'K�ytt�j� %s on poistettu.';
$strDescending = 'Laskeva';
$strDisplay = 'N�yt�';
$strDisplayOrder = 'Lajitteluj�rjestys:';
$strDoAQuery = 'Suorita "esimerkin mukainen haku" (jokerimerkki: "%")';
$strDocu = 'Ohjeet';
$strDoYouReally = 'Oletko varma ett� haluat ';
$strDrop = 'Pudota';
$strDropDB = 'Pudota tietokanta ';
$strDropTable = 'Pudota taulu';
$strDumpingData = 'Vedostan dataa taulusta';
$strDynamic = 'dynaaminen';

$strEdit = 'Muokkaa';
$strEditPrivileges = 'Muokkaa k�ytt�oikeuksia';
$strEffective = 'Varsinainen';
$strEmpty = 'Tyhjenn�';
$strEmptyResultSet = 'MySQL palautti tyhj�n vastauksen (ts. nolla rivi�).';
$strEnd = 'Loppu';
$strEnglishPrivileges = ' Huom. MySQL-k�ytt�oikeuksien nimet ovat englanniksi ';
$strError = 'Virhe';
$strExtendedInserts = 'Yhteinen insert-lause';
$strExtra = 'Lis�tiedot';

$strField = 'Sarake';
$strFieldHasBeenDropped = 'Sarake %s on pudotettu';
$strFields = 'Sarakkeet';
$strFieldsEmpty = ' Sarakkeiden lukum��r� on nolla! ';
$strFieldsEnclosedBy = 'Sarakkeiden ymp�r�intimerkki';
$strFieldsEscapedBy = 'Koodinvaihtomerkki (escape)';
$strFieldsTerminatedBy = 'Sarakkeiden erotinmerkki';
$strFixed = 'kiinte�';
$strFlush = 'Tyhjenn� v�limuisti';
$strFormat = 'Muoto';
$strFormEmpty = 'Tarvittava tieto puuttuu lomakkeesta!';
$strFullText = 'Koko tekstit';
$strFunction = 'Funktio';

$strGenTime = 'Luontiaika';
$strGo = 'Suorita';
$strGrants = 'Luvat';
$strGzip = '"gzip-pakattu"';

$strHasBeenAltered = 'on muutettu.';
$strHasBeenCreated = 'on luotu.';
$strHome = 'Etusivu';
$strHomepageOfficial = 'phpMyAdminin viralliset sivut';
$strHomepageSourceforge = 'phpMyAdminin sivut SourceForge-palvelussa';
$strHost = 'Palvelin';
$strHostEmpty = 'Palvelimen nimi puuttuu!';

$strIdxFulltext = 'Koko teksti';
$strIfYouWish = 'Jos haluat hakea vain osan taulun sarakkeista, sy�t� pilkuilla erotettu lista sarakkeiden nimist�.';
$strIgnore = 'J�t� huomiotta';
$strIndex = 'Indeksi';
$strIndexHasBeenDropped = 'Indeksi %s on pudotettu';
$strIndexes = 'Indeksit';
$strIndexName = 'Indeksin nimi:';
$strIndexType = 'Indeksin tyyppi:';
$strInsert = 'Lis�� rivi';
$strInsertAsNewRow = 'Lis�� uutena rivin�';
$strInsertedRows = 'Lis�tyt rivit:';
$strInsertNewRow = 'Lis�� uusi rivi';
$strInsertTextfiles = 'Sy�t� tekstitiedosto tauluun';
$strInstructions = 'komentoa';
$strInUse = 'k�yt�ss�';
$strInvalidName = '"%s" on varattu sana eik� sit� voi k�ytt�� tietokannan, taulun tai sarakkeen nimen�.';

$strKeepPass = '�l� vaihda salasanaa';
$strKeyname = 'Avaimen nimi';
$strKill = 'Tapa';

$strLength = 'Pituus';
$strLengthSet = 'Pituus/Arvot*';
$strLimitNumRows = 'Rivej�/sivu';
$strLineFeed = 'LF-rivinvaihto: \\n';
$strLines = 'Rivit';
$strLinesTerminatedBy = 'Rivien erotinmerkki';
$strLocationTextfile = 'Tiedoston sijainti';
$strLogin = 'Kirjaudu sis��n';
$strLogout = 'Poistu';
$strLogPassword = 'Salasana:';
$strLogUsername = 'K�ytt�j�tunnus:';

$strModifications = 'Muutokset tallennettu';
$strModify = 'Muokkaa';
$strModifyIndexTopic = 'Muokkaa indeksi�';
$strMoveTable = 'Siirra taulu (tietokanta<b>.</b>taulu):';
$strMoveTableOK = 'Taulu %s on siirretty %s.';
$strMySQLReloaded = 'MySQL uudelleenladattu.';
$strMySQLSaid = 'MySQL ilmoittaa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% palvelimella %pma_s2% k�ytt�j�n� %pma_s3%';
$strMySQLShowProcess = 'N�yt� prosessit';
$strMySQLShowStatus = 'N�yt� MySQL:n ajonaikaiset tiedot';
$strMySQLShowVars = 'N�yt� MySQL:n j�rjestelm�muuttujat';

$strName = 'Nimi';
$strNbRecords = 'Rivien lukum��r�';
$strNext = 'Seuraava';
$strNo = 'Ei';
$strNoDatabases = 'Ei tietokantoja';
$strNoDropDatabases = '"DROP DATABASE"-lauseiden k�ytt� on estetty.';
$strNoFrames = 'phpMyAdmin toimii parhaiten <b>kehyksi�</b> tukevalla selaimella.';
$strNoIndex = 'Indeksi� ei ole m��ritelty!';
$strNoIndexPartsDefined = 'Indeksin osia ei ole m��ritelty!';
$strNoModification = 'Ei muutoksia';
$strNone = 'Ei mit��n';
$strNoPassword = 'Ei salasanaa';
$strNoPrivileges = 'Ei k�ytt�oikeuksia';
$strNoRights = 'Sinulla ei ole tarpeeksi oikeuksia!';
$strNoQuery = 'Ei SQL lausetta!';
$strNoTablesFound = 'Tietokannasta ei l�ytynyt yht��n taulua.';
$strNotNumber = 'T�m� ei ole numero!';
$strNotValidNumber = ' ei ole hyv�ksytt�v� rivin numero!';
$strNoUsersFound = 'K�ytt�ji� ei l�ytynyt.';
$strNull = 'Tyhj�';
$strNumberIndexes = ' Kehittyneiden indeksien m��r� ';

$strOftenQuotation = 'Yleens� lainausmerkki. "Valinnaisesti" tarkoittaa, ett� vain char- ja varchar-tyyppiset sarakkeet ymp�r�id��n annetulla ymp�r�intimerkill�.';
$strOptimizeTable = 'Optimoi taulu';
$strOptionalControls = 'Valinnainen. Ohjaa erikoismerkkien lukua ja kirjoitusta.';
$strOptionally = 'Valinnaisesti';
$strOr = 'Tai';
$strOverhead = 'K�ytt�m�t�n';

$strPartialText = 'Osittaiset tekstit';
$strPassword = 'Salasana';
$strPasswordEmpty = 'Salasana puuttuu!';
$strPasswordNotSame = 'Salasanat eiv�t ole samat!';
$strPHPVersion = 'PHP:n versio';
$strPmaDocumentation = 'phpMyAdminin dokumentaatio';
$strPos1 = 'Alku';
$strPrevious = 'Edellinen';
$strPrimary = 'Ensisijainen';
$strPrimaryKey = 'Ensisijainen avain';
$strPrimaryKeyHasBeenDropped = 'Ensisijainen avain on pudotettu';
$strPrimaryKeyName = 'Ensisijaisen avaimen nimen� pit�� olla PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" saa olla <b>vai n ja ainoastaan</b>ensisijaisen avaimen nimen�!)';
$strPrintView = 'Tulostusversio';
$strPrivileges = 'K�ytt�oikeudet';
$strProperties = 'Asetukset';

$strQBE = 'Esimerkin mukainen haku';
$strQBEDel = 'Poista';
$strQBEIns = 'Lis��';
$strQueryOnDb = 'Suorita SQL-lause tietokannassa <b>%s</b>:';

$strRecords = 'rivi�';
$strReloadFailed = 'MySQL:n uudelleenlataus ep�onnistui.';
$strReloadMySQL = 'Lataa MySQL uudelleen';
$strRememberReload = 'Muista k�ynnist�� palvelin uudestaan.';
$strRenameTable = 'Nime� taulu uudelleen';
$strRenameTableOK = 'Taulun %s nimi on nyt %s';
$strRepairTable = 'Korjaa taulu';
$strReplace = 'Korvaa';
$strReplaceTable = 'Korvaa taulun nykyiset rivit tiedostolla';
$strReset = 'Tyhjenn�';
$strReType = 'Kirjoita uudelleen';
$strRevoke = 'Mit�t�i';
$strRevokeGrant = 'Mit�t�i lupa';
$strRevokeGrantMessage = 'Olet peruuttanut k�ytt�j�n %s GRANT-oikeuden';
$strRevokeMessage = 'Olet peruuttanut k�ytt�j�n %s k�ytt�oikeudet';
$strRevokePriv = 'Mit�t�i k�ytt�oikeudet';
$strRowLength = 'Rivin pituus';
$strRows = 'rivi�';
$strRowsFrom = 'rivi� alkaen rivist�';
$strRowSize = ' Rivin koko ';
$strRowsModeVertical= 'pystysuora';
$strRowsModeHorizontal= 'vaakasuora';
$strRowsModeOptions= '%ssti, otsikoita toistetaan %s:n rivin v�lein';
$strRowsStatistic = 'Rivistatistiikka';
$strRunning = 'palvelimella %s';
$strRunQuery = 'Suorita';
$strRunSQLQuery = 'Suorita SQL-lauseita tietokannassa %s';

$strSave = 'Tallenna';
$strSelect = 'Hae';
$strSelectFields = 'Valitse sarakkeet (v�hint��n yksi):';
$strSelectNumRows = 'lauseessa';
$strSend = 'Tallenna tiedostoksi';
$strSequence = 'Jakso';
$strServerChoice = 'Valitse palvelin';
$strServerVersion = 'Palvelimen versio';
$strSetEnumVal = 'Jos sarakkeen tietotyyppi on "enum" tai "set", sy�t� vaaditut arvot t�ss� muodossa: \'a\',\'b\',\'c\'...<br />Jos tarvitset arvoissa kenoviivaa ("\") tai heittomerkki� ("\'"), laita merkin eteen kenoviiva (esim. \'\\\\xyz\' tai \'a\\\'b\').';
$strShow = 'N�yt�';
$strShowAll = 'N�yt� kaikki'; 
$strShowCols = 'N�yt� sarakkeet';
$strShowingRecords = 'N�kyvill� rivit ';
$strShowPHPInfo = 'N�yt� tietoja PHP:n asetuksista';
$strShowTables = 'N�yt� taulut';
$strShowThisQuery = ' N�yt� lause uudelleen ';
$strSingly = '(yksitellen)';
$strSize = 'Koko';
$strSort = 'J�rjestys';
$strSpaceUsage = 'Levytilan k�ytt�';
$strSQLQuery = 'SQL-lause';
$strStartingRecord = 'Aloitusrivi';
$strStatement = 'Tieto';
$strStrucCSV = 'CSV-muotoinen data';
$strStrucData = 'Rakenne ja data';
$strStrucDrop = 'Lis�� \'DROP TABLE\'-rivit';
$strStrucExcelCSV = 'CSV-muoto MS Exceli� varten';
$strStrucOnly = 'Vain rakenne';
$strSubmit = 'L�het�';
$strSuccess = 'SQL-lause on suoritettu';
$strSum = 'Summa';

$strTable = 'taulu ';
$strTableComments = 'Kommentoi taulua';
$strTableEmpty = 'Taulun nimi puuttuu!';
$strTableHasBeenDropped = 'Taulu %s on pudotettu';
$strTableHasBeenEmptied = 'Taulu %s on tyhjennetty';
$strTableHasBeenFlushed = 'Taulun %s v�limuisti on tyhjennetty';
$strTableMaintenance = 'Taulun huolto';
$strTables = '%s taulu(a)';
$strTableStructure = 'Rakenne taululle';
$strTableType = 'Taulun muoto';
$strTextAreaLength = ' Pituudestaan johtuen<br /> t�t� saraketta ei ehk� voi muokata ';
$strTheContent = 'Tiedoston sis�lt� on sy�tetty.';
$strTheContents = 'Tiedoston sis�lt� korvaa valitusta taulusta ne rivit, joissa on sama ensisijainen (primary) tai yksik�sitteinen (unique) avain kuin tiedoston riveiss�.';
$strTheTerminator = 'Sarakkeiden erotin.';
$strTotal = 'yhteens�';
$strType = 'Tyyppi';

$strUncheckAll = 'Poista valinta kaikista';
$strUnique = 'Uniikki';
$strUpdatePrivMessage = 'K�ytt�j�n %s k�ytt�oikeudet on p�ivitetty.';
$strUpdateProfile = 'P�ivit� profiili:';
$strUpdateProfileMessage = 'Profiili on p�ivitetty.';
$strUpdateQuery = 'P�ivit� lause';
$strUsage = 'Tila';
$strUseBackquotes = 'Laita taulujen ja sarakkeiden nimet lainausmerkkeihin';
$strUser = 'K�ytt�j�';
$strUserEmpty = 'K�ytt�j�n nimi puuttuu!';
$strUserName = 'K�ytt�j�nimi';
$strUsers = 'k�ytt�j��';
$strUseTables = 'K�yt� tauluja';

$strValue = 'Arvo';
$strViewDump = 'Tee vedos (dump) taulusta';
$strViewDumpDB = 'Tee vedos (dump) tietokannasta';

$strWelcome = 'Tervetuloa, toivottaa %s';
$strWithChecked = 'Valitut:';
$strWrongUser = 'V��r� k�ytt�j�tunnus tai salasana. P��sy kielletty.';

$strYes = 'Kyll�';

$strZip = '"zip-pakattu"';

// To translate

?>
