<?php
/* $Id: romanian.inc.php,v 1.48 2001/12/20 19:46:29 lem9 Exp $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = 'Acces interzis';
$strAction = 'Actiune';
$strAddDeleteColumn = 'Adauga/Sterge coloane';
$strAddDeleteRow = 'Adauga/Sterge criteriu';
$strAddNewField = 'Adauga camp nou';
$strAddPriv = 'Adauga un nou drept de acces';
$strAddPrivMessage = 'Ati adaugat un nou drept de acces.';
$strAddSearchConditions = 'Adauga conditie de cautare (parte a comenzii "where"):';
$strAddToIndex = 'Adauga la coloana(ele) index &nbsp;%s&nbsp;';
$strAddUser = 'Adauga un utilizator nou';
$strAddUserMessage = 'Ati adaugat un nou utilizator.';
$strAffectedRows = 'Linii afectate:';
$strAfter = 'Dupa';
$strAfterInsertBack = 'Revenire';
$strAfterInsertNewInsert = 'Adauga o noua inregistrare';
$strAll = 'Toate';
$strAlterOrderBy = 'Alterare ordine tabel dupa (Alter table order by)';
$strAnalyzeTable = 'Analizare tabel';
$strAnd = 'Si (And)';
$strAnIndex = 'A fost adaugat un index la %s';
$strAny = 'Oricare';
$strAnyColumn = 'Oricare coloana';
$strAnyDatabase = 'Oricare baza de date';
$strAnyHost = 'Oricare host';
$strAnyTable = 'Oricare tabel';
$strAnyUser = 'Oricare utilizator';
$strAPrimaryKey = 'A fost adaugat o cheie primara la %s';
$strAscending = 'Crescatoare';
$strAtBeginningOfTable = 'La inceputul tabelului';
$strAtEndOfTable = 'La sfarsitul tabelului';
$strAttr = 'Proprietati';

$strBack = 'Inapoi';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'Binar - a nu se edita';
$strBookmarkDeleted = 'Eticheta a fost stearsa.';
$strBookmarkLabel = 'Eticheta - Label';
$strBookmarkQuery = 'Comanda SQL salvata (Bookmarked SQL-query)';
$strBookmarkThis = 'Salveaza aceasta comanda SQL';
$strBookmarkView = 'Numai vizualizare';
$strBrowse = 'Navigare';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'extensia MySQL nu se incarca,<br />va rugam verificati configuratia PHP.';
$strCantRenameIdxToPrimary = 'Nu poti redenumi index-ul la un nume PRIMARY!';
$strCardinality = 'Cardinalitate';
$strCarriage = 'Enter: \\r';
$strChange = 'Schimbare';
$strCheckAll = 'Marcheaza toate';
$strCheckDbPriv = 'Marcheaza drepturile de acces la baza de date';
$strCheckTable = 'Verificare tabel';
$strColumn = 'Coloana';
$strColumnNames = 'Numele coloanelor';
$strCompleteInserts = 'Rezolva inserarea';
$strConfirm = 'Sunteti sigur ca doriti sa continuati?';
$strCookiesRequired = 'Trebuie sa aveti activat "cookies".';
$strCopyTable = 'Copiaza tabela la (database<b>.</b>table):';
$strCopyTableOK = 'Tabelul %s a fost copiat la %s.';
$strCreate = 'Creaza';
$strCreateIndex = 'Creaza un index pe&nbsp;%s&nbsp;coloana';
$strCreateIndexTopic = 'Creaza un nou index';
$strCreateNewDatabase = 'Creaza baza de date noua';
$strCreateNewTable = 'Creaza tabel nou in baza de date ';
$strCriteria = 'Criteriu';

$strData = 'Date';
$strDatabase = 'Baza de date ';
$strDatabaseHasBeenDropped = 'Baza de date %s a fost aruncat.';
$strDatabases = 'Baze de date';
$strDatabasesStats = 'Statisticile bazelor de date';
$strDataOnly = 'Numai date';
$strDefault = 'Setare de baza';
$strDelete = 'Sterge';
$strDeleted = 'Linia a fost stearsa';
$strDeletedRows = 'Randuri sterse:';
$strDeleteFailed = 'Stergere nereusita!';
$strDeleteUserMessage = 'Ati sters utilizatorul %s.';
$strDescending = 'Descrescator';
$strDisplay = 'Afisare';
$strDisplayOrder = 'Ordine de afisare:';
$strDoAQuery = 'Executa un "query by example" (wildcard: "%")';
$strDocu = 'Documentatie';
$strDoYouReally = 'Sunteti sigur ca doriti sa ';
$strDrop = 'Arunca';
$strDropDB = 'Arunca baza de date';
$strDropTable = 'Arunca tabelul';
$strDumpingData = 'Salvarea datelor din tabel';
$strDynamic = 'dinamic';

$strEdit = 'Editare';
$strEditPrivileges = 'Editeaza drepturile de acces';
$strEffective = 'Efectiv';
$strEmpty = 'Goleste';
$strEmptyResultSet = 'MySQL a dat un set de rezultate gol (ex. zero linii).';
$strEnd = 'Sfarsit';
$strEnglishPrivileges = ' Important: numele drepturilor de acces MySQL apar in engleza ';
$strError = 'Eroare';
$strExtendedInserts = 'Inserari extinse';
$strExtra = 'Extra';

$strField = 'Camp';
$strFieldHasBeenDropped = 'Campul %s a fost aruncat';
$strFields = 'Campuri';
$strFieldsEmpty = ' Rezultat gol ';
$strFieldsEnclosedBy = 'Campuri incadrate de';
$strFieldsEscapedBy = 'Campuri realizate de';
$strFieldsTerminatedBy = 'Campuri terminate de';
$strFixed = 'fixat';
$strFlushTable = 'Curatarea tabelului ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Valoarea lipseste in formular !';
$strFullText = 'Texte intregi';
$strFunction = 'Functie';

$strGenTime = 'Timp de generare';
$strGo = 'Executa';
$strGrants = 'Drepturi';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'a fost alterat.';
$strHasBeenCreated = 'a fost creat.';
$strHome = 'Pagina de start';
$strHomepageOfficial = 'Pagina oficiala phpMyAdmin';
$strHomepageSourceforge = 'Pagina de descarcare Sourceforge phpMyAdmin';
$strHost = 'Gazda (Host)';
$strHostEmpty = 'Numele de gazda este gol!';

$strIdxFulltext = 'Tot textul'; 
$strIfYouWish = 'In cazul in care doriti sa incarcati numai o parte a coloanelor tabelului, specificati o lista separata prin virgula.';
$strIgnore = 'Ignora';
$strIndex = 'Index';
$strIndexes = 'Indexuri';
$strIndexHasBeenDropped = 'Index %s a fost aruncat';
$strIndexName = 'Nume index&nbsp;:';
$strIndexType = 'Tip index&nbsp;:';
$strInsert = 'Inserare';
$strInsertAsNewRow = 'Insereaza ca o noua linie';
$strInsertedRows = 'Randuri inserate:';
$strInsertNewRow = 'Insereaza o noua linie';
$strInsertTextfiles = 'Insereaza fisiere de text in tabel';
$strInstructions = 'Instructiuni';
$strInUse = 'in folosinta';
$strInvalidName = '"%s" este un cuvant rezervat, nu o poti folosi ca o baza de date/tabela/nume de camp.';

$strKeepPass = 'Nu schimbati parola';
$strKeyname = 'Nume cheie';
$strKill = 'Opreste';

$strLength = 'Lungime';
$strLengthSet = 'Lungime/Setare';
$strLimitNumRows = 'Numarul de inregistrari de pe pagina';
$strLineFeed = 'Dezvoltare linie: \\n';
$strLines = 'Linii';
$strLinesTerminatedBy = 'Linii terminate de';
$strLocationTextfile = 'Locatia fisierului text';
$strLogin = 'Autentificare';
$strLogout = 'Deconectare';
$strLogPassword = 'Parola:';
$strLogUsername = 'Nume utilizator:';

$strModifications = 'Modificarile au fost salvate';
$strModify = 'Modificare';
$strModifyIndexTopic = 'Modifica un index';
$strMoveTable = 'Muta tabela la (database<b>.</b>table):';
$strMoveTableOK = 'Tabela %s a fost mutat la %s.';
$strMySQLReloaded = 'MySQL reincarcat.';
$strMySQLSaid = 'MySQL zice: ';
$strMySQLServerProcess = 'MySQL %pma_s1% ruland pe %pma_s2% ca %pma_s3%';
$strMySQLShowProcess = 'Afiseaza procesele';
$strMySQLShowStatus = 'Afiseaza informatiile runtime MySQL';
$strMySQLShowVars = 'Afiseaza variabilele de sistem MySQL';

$strName = 'Nume';
$strNbRecords = 'Numar de inregistrari';
$strNext = 'Urmatorul';
$strNo = 'Nu';
$strNoDropDatabases = 'Comenzile "DROP DATABASE" sunt dezactivate.';
$strNoDatabases = 'Nu sunt baze de date';
$strNoFrames = 'phpMyAdmin are o interfata mai prietenoasa cu navigator care lucreaza cu <b>frame-uri</b>.';
$strNoIndex = 'Index nu este definit!';
$strNoIndexPartsDefined = 'Nu sunt definite parti din index!';
$strNoModification = 'Nici o schimbare';
$strNone = 'Nici unul(a)';
$strNoPassword = 'Nu exista parola';
$strNoPrivileges = 'Nu exista drepturi de acces';
$strNoQuery = 'Nu exista cerere SQL!';
$strNoRights = 'Nu detineti drepturi de acces pentru a va afla aici!';
$strNoTablesFound = 'Nu s-a gasit nici un tabel in baza de date.';
$strNotNumber = 'Acesta nu este un numar!';
$strNotValidNumber = 'Nu este un numar valid de linie!';
$strNoUsersFound = 'Nu s-a gasit nici un utilizator.';
$strNull = 'Nul';
$strNumberIndexes = ' Numarul indexurilor avansate ';

$strOftenQuotation = 'Adesea ghilimele. OPTIONAL inseamna ca numai campurile char si varchar sunt incluse intre caracterele "incadrat intre".';
$strOptimizeTable = 'Optimizare tabel';
$strOptionalControls = 'Optional. Controleaza modul in care se citeste sau se scrie un caracter special.';
$strOptionally = 'OPTIONAL';
$strOr = 'Sau';
$strOverhead = 'Asupra';

$strPartialText = 'Texte partiale';
$strPassword = 'Parola';
$strPasswordEmpty = 'Parola este goala!';
$strPasswordNotSame = 'Parolele nu corespund!';
$strPmaDocumentation = 'Documentatie phpMyAdmin';
$strPHPVersion = 'Versiune PHP';
$strPos1 = 'Incepe';
$strPrevious = 'Anterior';
$strPrimary = 'Primar';
$strPrimaryKey = 'Cheie primara';
$strPrimaryKeyHasBeenDropped = 'Cheia primara a fost aruncat';
$strPrimaryKeyName = 'Numele cheii primare trebuie sa fie ... PRIMARY!';
$strPrimaryKeyWarning = '("Numele PRIMARY" <b>trebuie</b> sa fie <b>numai la</b> cheie primara!)';
$strPrintView = 'Viziualizare imprimare';
$strPrivileges = 'Drepturi de acces';
$strProperties = 'Atribute';

$strQBE = 'Comanda prin exemplu (Query by Example)';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Comanda SQL pe baza de date <b>%s</b>:';

$strRecords = 'Inregistrari';
$strReloadFailed = 'Reincarcare MySQL nereusita.';
$strReloadMySQL = 'Reincarcare MySQL';
$strRememberReload = 'Nu uitati sa reincarcati serverul.';
$strRenameTable = 'Rename tabel la';
$strRenameTableOK = 'Tabelului %s i s-a dat un numele de %s';
$strRepairTable = 'Reparare tabel';
$strReplace = 'Inlocuire';
$strReplaceTable = 'Inlocuieste datele tabelului cu fisier';
$strReset = 'Resetare';
$strReType = 'Re-type';
$strRevoke = 'Revocare';
$strRevokeGrant = 'Revocare Grant';
$strRevokeGrantMessage = 'Drepturile tale Grant au fost revocate pentru %s';
$strRevokeMessage = 'Drepturile tale au fost revocate pentru %s';
$strRevokePriv = 'Revocare drepturi de acces';
$strRowLength = 'Lungime linie';
$strRows = 'Linie';
$strRowsFrom = 'linii incepand cu';
$strRowSize = ' Marime linie ';
$strRowsModeVertical= 'vertical';
$strRowsModeHorizontal= 'orizontal';
$strRowsModeOptions= 'in mod %s si repetare antet dupa %s celule';
$strRowsStatistic = 'Statisticile randului';
$strRunning = 'ruland pe %s';
$strRunQuery = 'Trimite comanda';
$strRunSQLQuery = 'Run SQL query/queries pe baza de date %s';

$strSave = 'Salveaza';
$strSelect = 'Selecteaza';
$strSelectFields = 'Selecteaza campurile (cel putin unul):';
$strSelectNumRows = 'in comanda (in query)';
$strSend = 'Trimite';
$strSequence = 'Seq.';
$strServerChoice = 'Alegerea serverului';
$strServerVersion = 'Versiune server';
$strSetEnumVal = 'Daca campul este "enum" sau "set", va rugam adaugati valori folosind formatul: \'a\',\'b\',\'c\'...<br />Daca aveti nevoie sa puneti bara intoarsa (backslash) ("\") sau semnul ("\'") la aceste valori, folositi exemplul ( \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Afiseaza';
$strShowAll = 'Arata toate'; 
$strShowCols = 'Arata coloanele';
$strShowingRecords = 'Afiseaza inregistrari';
$strShowPHPInfo = 'Arata informatia PHP';
$strShowTables = 'Arata tabelele';
$strShowThisQuery = ' Afiseaza aceasta comanda din nou aici ';
$strSingly = '(singly)';
$strSize = 'Marime';
$strSort = 'Sortare';
$strSpaceUsage = 'Utilizare spatiu';
$strSQLQuery = 'Comansa SQL';
$strStartingRecord = 'Incepere inregistrare';
$strStatement = 'Comenzi';
$strStrucCSV = 'Date CSV';
$strStrucData = 'Structura si date';
$strStrucDrop = 'Adauga \'salveaza tabel\'';
$strStrucExcelCSV = 'Date CSV pentru MS Excel';
$strStrucOnly = 'Numai structura';
$strSubmit = 'Trimite';
$strSuccess = 'Comanda dumneavoastra SQL a fost executata cu succes';
$strSum = 'Sum';

$strTable = 'tabel ';
$strTableComments = 'Comentarii tabel';
$strTableEmpty = 'Numele de tabel este gol!';
$strTableHasBeenDropped = 'Tabelul %s a fost aruncat';
$strTableHasBeenEmptied = 'Tabelul %s a fost golit';
$strTableHasBeenFlushed = 'Tabelul %s a fost curatat';
$strTableMaintenance = 'Administrare tabel';
$strTables = '%s tabele';
$strTableStructure = 'Structura de tabel pentru tabelul';
$strTableType = 'Tipul tabelului';
$strTextAreaLength = ' Datorita lungimii sale, <br /> acest camp s-ar putea sa nu fie editabil';
$strTheContent = 'Continutul fisierului dumneavoastra a fost inserat.';
$strTheContents = 'Continutul acestui fisier inlocuieste continutul tabelului selectat pentru liniile cu cheie primara identica.';
$strTheTerminator = 'Terminatorul campurilor.';
$strTotal = 'total';
$strType = 'Tip';

$strUncheckAll = 'Deselecteaza toate';
$strUnique = 'Unic';
$strUpdatePrivMessage = 'Ati actualizat privilegiile pentru %s.';
$strUpdateProfile = 'Actualizarea profilului:';
$strUpdateProfileMessage = 'Profilul a fost actualizat.';
$strUpdateQuery = 'Reinnoire comanda';
$strUsage = 'Utilizare';
$strUseBackquotes = 'Utilizati apostroful pentru numele tabelelor si a campurilor';
$strUser = 'Utilizator';
$strUserEmpty = 'Numele de utilizator este gol!';
$strUserName = 'Nume de utilizator';
$strUsers = 'Utilizatori';
$strUseTables = 'Utilizare tabele';

$strValue = 'Valoare';
$strViewDump = 'Vizualizarea schemei tabelului';
$strViewDumpDB = 'Vizualizarea schemei bazei de date';

$strWelcome = 'Bine ai venit la %s';
$strWrongUser = 'Nume de utilizator/Parola incorecta. Accesul interzis.';
$strWithChecked = 'Verificat cu:';

$strYes = 'Da';

$strZip = '"zipped"';

// To translate

?>
