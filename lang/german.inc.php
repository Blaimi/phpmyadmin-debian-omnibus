<?php
/* $Id: german.inc.php,v 1.121 2002/01/05 18:25:45 loic1 Exp $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$month = array('Jan', 'Feb', 'M�rz', 'April', 'Mai', 'Juni', 'Juli', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y um %H:%M';


$strAccessDenied = 'Zugriff verweigert.';
$strAction = 'Aktion';
$strAddDeleteColumn = 'Spalten hinzuf�gen/entfernen';
$strAddDeleteRow = 'Zeilen hinzuf�gen/entfernen';
$strAddToIndex = '%s&nbsp;Spalten zum Index hinzuf�gen';
$strAddNewField = 'Neue Feld(er) hinzuf�gen';
$strAddPriv = 'Rechte hinzuf�gen';
$strAddPrivMessage = 'Rechte wurden hinzugef�gt.';
$strAddSearchConditions = 'Suchkondition (Argumente f�r das WHERE-Statement):';
$strAddUser = 'Neuen Benutzer hinzuf�gen';
$strAddUserMessage = 'Der Benutzer wurde hinzugef�gt.';
$strAffectedRows = ' Betroffene Datens�tze: ';
$strAfter = 'Nach';
$strAfterInsertBack = 'zur�ck';
$strAfterInsertNewInsert = 'Neuen Datensatz einf�gen';
$strAll = 'Alle';
$strAlterOrderBy = 'Tabelle sortieren nach';
$strAnalyzeTable = 'Analysiere Tabelle';
$strAnd = 'und';
$strAnIndex = 'Ein Index wurde in %s erzeugt';
$strAny = 'Jeder';
$strAnyColumn = 'Jede Spalte';
$strAnyDatabase = 'Jede Datenbank';
$strAnyHost = 'Jeder Host';
$strAnyTable = 'Jede Tabelle';
$strAnyUser = 'Jeder Benutzer';
$strAPrimaryKey = 'Ein Prim�rschl�ssel wurde in %s erzeugt';
$strAscending = 'aufsteigend';
$strAtBeginningOfTable = 'An den Anfang der Tabelle';
$strAtEndOfTable = 'An das Ende der Tabelle';
$strAttr = 'Attribute';

$strBack = 'Zur�ck';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - nicht editierbar !';
$strBookmarkDeleted = 'SQL-Abfrage wurde gel�scht.';
$strBookmarkLabel = 'Titel';
$strBookmarkQuery = 'Gespeicherte SQL-Abfrage';
$strBookmarkThis = 'SQL-Abfrage speichern';
$strBookmarkView = 'Nur zeigen';
$strBrowse = 'Anzeigen';
$strBzip = '"BZip komprimiert"';

$strCantLoadMySQL = 'MySQL Erweiterung konnte nicht geladen werden,<br />bitte PHP Konfiguration �berpr�fen.';
$strCantRenameIdxToPrimary = 'Kann Index nicht in PRIMARY umbenennen!';
$strCarriage = 'Wagenr�cklauf \\r';
$strChange = '�ndern';
$strCheckAll = 'Alle ausw�hlen';
$strCheckDbPriv = 'Rechte einer Datenbank pr�fen';
$strCheckTable = '�berpr�fe Tabelle';
$strColumn = 'Spalte';
$strColumnNames = 'Spaltennamen';
$strCompleteInserts = 'Vollst�ndige \'INSERT\'s';
$strConfirm = 'Bist du dir wirklich sicher?';
$strCopyTable = 'Kopiere Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strCopyTableOK = 'Tabelle %s wurde kopiert nach %s.';
$strCreate = 'Erzeugen';
$strCreateIndex = 'Index �ber&nbsp;%s&nbsp;Spalten anlegen';
$strCreateIndexTopic = 'Neuen Index anlegen';
$strCreateNewDatabase = 'Neue Datenbank erzeugen';
$strCreateNewTable = 'Neue Tabelle erstellen in Datenbank ';
$strCriteria = 'Kriterium';

$strData = 'Daten';
$strDatabase = 'Datenbank ';
$strDatabaseHasBeenDropped = 'Datenbank %s wurde gel�scht.';
$strDatabases = 'Datenbanken';
$strDatabasesStats = 'Statistiken �ber alle Datenbanken';
$strDataOnly = 'Nur Daten';
$strDefault = 'Standard';
$strDelete = 'L�schen';
$strDeleted = 'Die Zeile wurde gel�scht.';
$strDeletedRows = 'Gel�schte Zeilen:';
$strDeleteFailed = 'L�schen fehlgeschlagen!';
$strDeleteUserMessage = 'Der Benutzer wurde gel�scht %s.';
$strDescending = 'absteigend';
$strDisplay = 'Zeige';
$strDisplayOrder = 'Sortierung nach:';
$strDoAQuery = 'Suche �ber Beispielwerte ("query by example") (Platzhalter: "%")';
$strDocu = 'Dokumentation';
$strDoYouReally = 'M�chten Sie wirklich diese Abfrage ausf�hren: ';
$strDrop = 'L�schen';
$strDropDB = 'Datenbank l�schen:';
$strDropTable = 'Tabelle l�schen:';
$strDumpingData = 'Daten f�r Tabelle';
$strDynamic = 'dynamisch';

$strEdit = '�ndern';
$strEditPrivileges = 'Rechte �ndern';
$strEffective = 'Effektiv';
$strEmpty = 'Leeren';
$strEmptyResultSet = 'MySQL lieferte ein leeres Resultset zur�ck (d.h. null Zeilen).';
$strEnd = 'Ende';
$strEnglishPrivileges = ' Anmerkung: MySQL Rechtename werden in Englisch angegeben ';
$strError = 'Fehler';
$strExtendedInserts = 'Erweiterte \'INSERT\'s';
$strExtra = 'Extra';

$strField = 'Feld';
$strFieldHasBeenDropped = 'Spalte %s wurde entfernt.';
$strFields = 'Felder';
$strFieldsEmpty = ' Sie m�ssen angeben wie viele Felder die Tabelle haben soll! ';
$strFieldsEnclosedBy = 'Felder eingeschlossen von';
$strFieldsEscapedBy = 'Felder escaped von';
$strFieldsTerminatedBy = 'Felder getrennt mit';
$strFixed = 'starr';
$strFlushTable = 'Verwerfen der Tabelle ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Das Formular ist leer !';
$strFullText = 'vollst�ndige Textfelder';
$strFunction = 'Funktion';

$strGenTime = 'Erstellungszeit';
$strGo = 'OK';
$strGrants = 'Rechte';
$strGzip = '"GZip komprimiert"';

$strHasBeenAltered = 'wurde ge�ndert.';
$strHasBeenCreated = 'wurde erzeugt.';
$strHome = 'Home';
$strHomepageOfficial = ' Offizielle phpMyAdmin Homepage ';
$strHomepageSourceforge = ' Sourceforge phpMyAdmin Download Homepage ';
$strHost = 'Host';
$strHostEmpty = 'Es wurde kein Host angegeben!';

$strIdxFulltext = 'Volltext';
$strIfYouWish = 'Wenn Sie nur bestimmte Spalten importieren m�chten, geben Sie diese bitte hier an.';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s wurde entfernt.';
$strIndexName = 'Index Name&nbsp;:';
$strIndexType = 'Index Typ&nbsp;:';
$strIndexes = 'Indizes';
$strIgnore = 'Ignorieren';
$strInsert = 'Einf�gen';
$strInsertAsNewRow = ' Als neuen Datensatz speichern ';
$strInsertedRows = 'Eingef�gte Zeilen:';
$strInsertNewRow = 'Neue Zeile einf�gen';
$strInsertTextfiles = 'Textdatei in Tabelle einf�gen';
$strInstructions = 'Befehle';
$strInUse = 'in Benutzung';
$strInvalidName = '"%s" ist ein reserviertes Wort, welches nicht als Datenbank-, Feld- oder Tabellenname verwendet werden darf.';

$strKeepPass = 'Kennwort nicht ver�ndert';
$strKeyname = 'Name';
$strKill = 'Beenden';

$strLength = ' L�nge ';
$strLengthSet = 'L�nge/Set*';
$strLimitNumRows = 'Eintr�ge pro Seite';
$strLineFeed = 'Zeilenvorschub: \\n';
$strLines = 'Zeilen';
$strLinesTerminatedBy = 'Zeilen getrennt mit';
$strLocationTextfile = 'Datei';
$strLogout = 'Neu einloggen';

$strModifications = '�nderungen gespeichert.';
$strModify = 'Ver�ndern';
$strModifyIndexTopic = 'Index modifizieren';
$strMoveTable = 'Verschiebe Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strMoveTableOK = 'Tabelle %s wurde nach %s verschoben.';
$strMySQLReloaded = 'MySQL neu gestartet.';
$strMySQLSaid = 'MySQL meldet: ';
$strMySQLServerProcess = 'MySQL %pma_s1% auf %pma_s2% als %pma_s3%';
$strMySQLShowProcess = 'Prozesse anzeigen';
$strMySQLShowStatus = 'MySQL-Laufzeit-Informationen anzeigen';
$strMySQLShowVars = 'MySQL-System-Variablen anzeigen';

$strName = 'Name';
$strNbRecords = 'Datens�tze';
$strNext = 'N�chste';
$strNo = 'Nein';
$strNoDatabases = 'Keine Datenbanken';
$strNoDropDatabases = '"DROP DATABASE" Anweisung wurde deaktiviert.';
$strNoFrames = 'phpMyAdmin arbeitet besser mit einem <b>Frame</b> f�higen Browser.';
$strNoIndex = 'Kein Index definiert!';
$strNoIndexPartsDefined = 'Keine Indizies definiert.';
$strNoModification = 'Keine �nderung';
$strNone = 'keine';
$strNoPassword = 'Kein Kennwort';
$strNoPrivileges = 'Keine Rechte';
$strNoQuery = 'Kein SQL-Befehl!';
$strNoRights = 'Du hast nicht genug Rechte um fortzufahren!';
$strNoTablesFound = 'Keine Tabellen in der Datenbank gefunden.';
$strNotNumber = 'Das ist keine Zahl!';
$strNotValidNumber = ' ist keine g�ltige Zeilennummer!';
$strNoUsersFound = 'Keine(n) Benutzer gefunden.';
$strNull = 'Null';
$strNumberIndexes = ' Anzahl der erweiterten Indizes ';

$strOftenQuotation = 'H�ufig Anf�hrungszeichen. Optional bedeutet, da� nur Textfelder von den angegeben Zeichen eingeschlossen sind.';
$strOptimizeTable = 'Optimiere Tabelle';
$strOptionalControls = 'Optional. Bestimmt, wie Sonderzeichen kenntlich gemacht werden.';
$strOptionally = 'optional';
$strOr = 'Oder';
$strOverhead = '�berhang';

$strPartialText = 'gek�rzte Textfelder';
$strPassword = 'Kennwort';
$strPasswordEmpty = 'Es wurde kein Kennwort angegeben!';
$strPasswordNotSame = 'Die eingegebenen Kennw�rter sind nicht identisch!';
$strPmaDocumentation = 'phpMyAdmin Dokumentation';
$strPHPVersion = 'PHP Version';
$strPos1 = 'Anfang';
$strPrevious = 'Vorherige';
$strPrimary = 'Prim�rschl�ssel';
$strPrimaryKey = 'Prim�rschl�ssel';
$strPrimaryKeyHasBeenDropped = 'Der Prim�rschl�ssel wurde gel�scht';
$strPrimaryKeyName = 'Der Name des Prim�rschl�ssels muss PRIMARY lauten!';
$strPrimaryKeyWarning = 'Der Name des Prim�rschl�ssels darf <b>nur</b> "PRIMARY" lauten.';
$strPrintView = 'Druckansicht';
$strPrivileges = 'Rechte';
$strProperties = 'Eigenschaften';

$strQBE = 'Suche �ber Beispielwerte';
$strQBEDel = 'Entf.';
$strQBEIns = 'Einf.';
$strQueryOnDb = ' SQL-Befehl in der Datenbank <b>%s</b>:';

$strRecords = 'Eintr�ge';
$strReloadFailed = 'MySQL Neuladen fehlgeschlagen.';
$strReloadMySQL = 'MySQL neu starten';
$strRememberReload = 'Der Server muss neugestartet werden.';
$strRenameTable = 'Tabelle umbenennen in';
$strRenameTableOK = 'Tabelle %s wurde umbenannt in %s.';
$strRepairTable = 'Repariere Tabelle';
$strReplace = 'Ersetzen';
$strReplaceTable = 'Tabelleninhalt ersetzen';
$strReset = 'Zur�cksetzen';
$strReType = 'Wiederholen';
$strRevoke = 'Entfernen';
$strRevokeGrant = '\'Grant\' entfernen';
$strRevokeGrantMessage = 'Du hast das Recht \'Grant\' entfernt f�r %s';
$strRevokeMessage = 'Du hast die Rechte entfernt f�r %s';
$strRevokePriv = 'Rechte entfernen';
$strRowLength = 'Zeilenl�nge';
$strRows = 'Zeilen';
$strRowsFrom = 'Datens�tze, beginnend ab';
$strRowSize = 'Zeilengr��e';
$strRowsModeHorizontal = 'untereinander';
$strRowsModeOptions = '%s angeordnet und wiederhole die Kopfzeilen nach %s Datens�tzen.';
$strRowsModeVertical = 'nebeneinander';
$strRowsStatistic = 'Zeilenstatistik';
$strRunning = 'auf %s';
$strRunQuery = 'SQL Befehl ausf�hren';
$strRunSQLQuery = 'SQL-Befehl(e) ausf�hren in Datenbank %s';

$strSave = 'Speichern';
$strSelect = 'Teilw. anzeigen';
$strSelectFields = 'Felder ausw�hlen (mind. eines):';
$strSelectNumRows = 'in der Abfrage';
$strSend = 'Senden';
$strSequence = ' Sequenz ';
$strServerChoice = 'Server Ausw�hlen';
$strServerVersion = 'Server Version';
$strSetEnumVal = 'Wenn das Feld vom Type \'ENUM\' oder \'SET\' ist, benutzen Sie das Format: \'a\',\'b\',\'c\',....<br />Wann immer Sie ein Backslash ("\") oder ein einfaches Anf�hrungszeichen ("\'") verwenden,<br \>setzen Sie bitte ein Backslash vor das Zeichen.  (z.B.: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Zeige';
$strShowAll = 'Alles anzeigen';
$strShowingRecords = 'Zeige Datens�tze ';
$strShowPHPInfo = 'PHP Informationen anzeigen';
$strShowThisQuery = 'SQL Befehl hier wieder anzeigen';
$strSingly = '(einmalig)';
$strSize = 'Gr��e';
$strSort = 'Sortierung';
$strSpaceUsage = 'Speicherplatzverbrauch';
$strSQLQuery = 'SQL-Befehl';
$strStartingRecord = 'Anfangszeile';
$strStatement = 'Angaben';
$strStrucCSV = 'CSV-Daten';
$strStrucData = 'Struktur und Daten';
$strStrucDrop = 'Mit \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV-Daten f�r MS Excel';
$strStrucOnly = 'Nur Struktur';
$strSubmit = 'Abschicken';
$strSuccess = 'Ihr SQL-Befehl wurde erfolgreich ausgef�hrt.';
$strSum = 'Summe';

$strTable = 'Tabelle ';
$strTableComments = 'Tabellen-Kommentar';
$strTableEmpty = 'Der Tabellenname ist leer!';
$strTableHasBeenDropped = 'Tabelle %s wurde gel�scht';
$strTableHasBeenEmptied = 'Tabelle %s wurde geleert';
$strTableHasBeenFlushed = 'Tabelle %s wurde geschlossen und zwischengespeicherte Daten gespeichert.';
$strTableMaintenance = 'Hilfsmittel';
$strTables = '%s Tabellen';
$strTableStructure = 'Tabellenstruktur f�r Tabelle';
$strTableType = 'Tabellentyp';
$strTextAreaLength = 'Wegen der L�nge ist dieses<br />Feld vielleicht nicht editierbar.';
$strTheContent = 'Der Inhalt Ihrer Datei wurde eingef�gt.';
$strTheContents = 'Der Inhalt der CSV-Datei ersetzt die Eintr�ge mit den gleichen Prim�r- oder Unique-Schl�sseln.';
$strTheTerminator = 'Der Trenner zwischen den Feldern.';
$strTotal = 'insgesamt';
$strType = 'Typ';

$strUncheckAll = 'Auswahl entfernen';
$strUnique = 'Unique';
$strUpdatePrivMessage = 'Die Rechte wurden ge�ndert %s.';
$strUpdateProfile = 'Benutzer �ndern:';
$strUpdateProfileMessage = 'Benutzer wurde ge�ndert.';
$strUpdateQuery = 'Aktualisieren';
$strUsage = 'Verbrauch';
$strUseBackquotes = ' Tabellen- und Feldnamen in einfachen Anf�hrungszeichen ';
$strUser = 'Benutzer';
$strUserEmpty = 'Kein Benutzername eingegeben!';
$strUserName = 'Benutzername';
$strUsers = 'Benutzer';
$strUseTables = 'Verwendete Tabellen';

$strValue = 'Wert';
$strViewDump = 'Dump (Schema) der Tabelle anzeigen';
$strViewDumpDB = 'Dump (Schema) der Datenbank anzeigen';

$strWelcome = 'Willkommen bei %s';
$strWithChecked = 'markierte:';
$strWrongUser = 'Falscher Benutzername/Passwort. Zugriff verweigert.';

$strYes = 'Ja';

$strZip = '"Zip komprimiert"';

// To translate
$strCardinality = 'Cardinality';
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strLogin = 'Login';
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';
$strShowCols = 'Show columns';
$strShowTables = 'Show tables';

?>
