<?php
/* $Id: bulgarian-win1251.inc.php,v 1.97 2001/12/16 23:52:44 lem9 Exp $ */

$charset = 'windows-1251';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('�����', 'KB', 'MB', 'GB');

$day_of_week = array('���', '���', '��', '��', '���', '���', '���');
$month = array('������', '��������', '����', '�����', '���', '���', '���', '������', '���������', '�������', '�������', '��������');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y � %H:%M';


$strAccessDenied = '������� ������';
$strAction = '��������';
$strAddDeleteColumn = '������/������ ������ �� ��������';
$strAddDeleteRow = '������/������ ��� �� ��������';
$strAddNewField = '������ ���� ����';
$strAddPriv = '�������� �� ���� ����������';
$strAddPrivMessage = '��� ��������� ���� ����������.';
$strAddSearchConditions = '������ ������� �� ������� (���� �� "where" �������):';
$strAddToIndex = ' &nbsp;%s&nbsp;������(�) ���� �������� ��� ������� ';
$strAddUser = '�������� �� ��� ����������.';
$strAddUserMessage = '��� ��������� ��� ����������.';
$strAffectedRows = '��������� ����:';
$strAfter = '����';
$strAfterInsertBack = '�� �����';
$strAfterInsertNewInsert = '������ ��� �����';
$strAll = '������';
$strAlterOrderBy = '������� ��������� ��';
$strAnalyzeTable = '����������� �� ���������';
$strAnd = '�';
$strAnIndex = '���� ������� ������ �� %s';
$strAny = '�����';
$strAnyColumn = '����� ������';
$strAnyDatabase = '����� ���� �����';
$strAnyHost = '����� ����';
$strAnyTable = '����� �������';
$strAnyUser = '����� ����������';
$strAPrimaryKey = '�e�e ������� ������ ���� ��� ';
$strAscending = '���������';
$strAtBeginningOfTable = '�� �������� �� ���������';
$strAtEndOfTable = '�� ���� �� ���������';
$strAttr = '��������';

$strBack = '�����';
$strBinary = ' ������� ';
$strBinaryDoNotEdit = ' ������� - �� �� ��������� ';
$strBookmarkDeleted = 'Bookmark ���� ������.';
$strBookmarkLabel = '������';
$strBookmarkQuery = '��������� �� SQL-���������';
$strBookmarkThis = '������ ���� SQL-���������';
$strBookmarkView = '���� ���������';
$strBrowse = '��������';
$strBzip = '"bzip-����"';

$strCantLoadMySQL = '�� ���� �� ������ MySQL ������������,<br />���� ��������� �������������� �� PHP.';
$strCantRenameIdxToPrimary = '�� ���� �� ����������� ������� �� PRIMARY!';
$strCardinality = '����������';
$strCarriage = '������ �� ���� �� ���: \\r';
$strChange = '�������';
$strCheckAll = '�������� ������';
$strCheckDbPriv = '������� ������������ �� ��';
$strCheckTable = '�������� �� ���������';
$strColumn = '������';
$strColumnNames = '��� �� ������';
$strCompleteInserts = '����� INSERT-�';
$strConfirm = '������������ �� ������� �� �� ���������?';
$strCopyTable = '�������� �� ������� (���� �� �����<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� �������� � %s.';
$strCreate = '������';
$strCreateIndex = '������ ������ ����� &nbsp;%s&nbsp;������';
$strCreateIndexTopic = '������ ��� ������';
$strCreateNewDatabase = '������ ���� ��';
$strCreateNewTable = '������ ���� ������� � �� ';
$strCriteria = '��������';

$strData = '�����';
$strDatabase = ' �� ';
$strDatabaseHasBeenDropped = '������ ����� %s ���� �������.';
$strDatabases = '���� �� �����';
$strDatabasesStats = ' ���������� �� ������ �����';
$strDataOnly = '���� �����';
$strDefault = '�� ������������';
$strDelete = '������';
$strDeleted = '����� ���� ������';
$strDeletedRows = '������� ������:';
$strDeleteFailed = '��������� ���������!';
$strDeleteUserMessage = '��� �������� ���������� %s.';
$strDescending = '���������';
$strDisplay = '������';
$strDisplayOrder = '������ ��������:';
$strDoAQuery = '������� "��������� �� ������" (������ ��  ����������: "%")';
$strDocu = '������������';
$strDoYouReally = '������������ �� ������� ��';
$strDrop = '�������';
$strDropDB = '������� �� ';
$strDropTable = '������ ���������';
$strDumpingData = '���� (�����) �� ������� � ���������';
$strDynamic = '���������';

$strEdit = '�����������';
$strEditPrivileges = '����������� �� ������������';
$strEffective = '���������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ����� ������ �������� (�.�. ���� ������).';
$strEnd = '����';
$strEnglishPrivileges = ' ���������: ������� �� ������������ �� MySQL �� �������� �� ���������. ';
$strError = '������';
$strExtendedInserts = '��������� INSERT-�';
$strExtra = '������������';

$strField = '����';
$strFieldHasBeenDropped = '������ %s ���� �������';
$strFields = '������';
$strFieldsEmpty = ' ������ �� �������� � ������! ';
$strFieldsEnclosedBy = '�������� �� �������� ���';
$strFieldsEscapedBy = '���������� ���� ����������� �������';
$strFieldsTerminatedBy = '�������� ��������� ���';
$strFixed = '��������';
$strFlushTable = '�������� ���� �� ��������� ("FLUSH")';
$strFormat = '������';
$strFormEmpty = '������ �������� ��� �������!';
$strFullText = '����� ��������';
$strFunction = '�������';

$strGenTime = '����� �� ����������';
$strGo = '�������';
$strGrants = 'Grant&nbsp;����.';
$strGzip = '"gzip-����"';

$strHasBeenAltered = '���� ���������.';
$strHasBeenCreated = '���� ���������.';
$strHome = '������';
$strHomepageOfficial = '��������� phpMyAdmin ��� ��������';
$strHomepageSourceforge = 'phpMyAdmin �������� �� Sourceforge';
$strHost = '����';
$strHostEmpty = '����� �� ����� � ������!';

$strIdxFulltext = '�������������';
$strIfYouWish = '��� ������� �� �������� ���� ����� ������ �� ���������, ������� ������ �� �������� ��������� ��� �������.';
$strIgnore = '���������';
$strIndex = '������';
$strIndexes = '�������';
$strIndexHasBeenDropped = '������� %s ���� ������';
$strIndexName = '��� �� �������&nbsp;:';
$strIndexType = '��� �� �������&nbsp;:';
$strInsert = '������';
$strInsertAsNewRow = '������ ���� ��� ���';
$strInsertedRows = '�������� ����:';
$strInsertNewRow = '������ ��� ���';
$strInsertTextfiles = '������ �������� ������� � ���������';
$strInstructions = '����������';
$strInUse = '�����';
$strInvalidName = '"%s" � �������� ���� � ��� �� ������ �� � ���������� �� ��� �� ���� �� �����,������� ��� ����. ';

$strKeepPass = '�� �� �� ����� ��������';
$strKeyname = '��� �� �����';
$strKill = '����';

$strLength = '�������';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '���� �� ��������';
$strLineFeed = '������ �� ���� �� ���: \\n';
$strLines = '������';
$strLinesTerminatedBy = '������� ��������� �';
$strLocationTextfile = '�������������� �� ��������� ����';
$strLogin = '����';
$strLogout = '����� �� ���������';

$strModifications = '��������� ���� ���������';
$strModify = '�������';
$strModifyIndexTopic = '������� �� ������';
$strMoveTable = '����������� �� ������� ��� (���� �� �����<b>.</b>�������):';
$strMoveTableOK = '��������� %s ���� ���������� ��� %s.';
$strMySQLReloaded = 'MySQL � ����������.';
$strMySQLSaid = 'MySQL ��������: ';
$strMySQLServerProcess = 'MySQL %pma_s1% � ��������� �� %pma_s2% ���� %pma_s3%';
$strMySQLShowProcess = '������ ���������';
$strMySQLShowStatus = '������ ����������� �� MySQL';
$strMySQLShowVars = '������ ���������� ���������� �� MySQL';

$strName = '���';
$strNbRecords = '���� ������';
$strNext = '�������';
$strNo = '��';
$strNoDatabases = '���� ���� �� �����';
$strNoDropDatabases = '"DROP DATABASE" ������� � ���������.';
$strNoFrames = 'phpMyAdmin � �� ���������� ��� ���������� �������, ����� �������� <b>frames</b>.';
$strNoIndex = '�� � ��������� ������!';
$strNoIndexPartsDefined = '�� �� ���������� ����� �� ������!';
$strNoModification = '���� �������';
$strNone = '����';
$strNoPassword = '���� ������';
$strNoPrivileges = '���� ����������';
$strNoQuery = '���� SQL ������!';
$strNoRights = '� ������� �� ����������� � ���������� ����� �� �� �� �������� ���!';
$strNoTablesFound = '� ������ ����� ���� �������.';
$strNotNumber = '���� �� � �����!';
$strNotValidNumber = ' �� � ������� ����� �� ���!';
$strNoUsersFound = '���� ����������(�).';
$strNull = '������';
$strNumberIndexes = ' ���� ������ ������� ';

$strOffSet = '����������';
$strOftenQuotation = '���������� �������. �� ����� ��������, �� ���� ������ char � varchar �� ��������� � �������.';
$strOptimizeTable = '������������ �� ���������';
$strOptionalControls = '�� �����. ���������� ��� �� �� ����� ��� ����� ��������� �������.';
$strOptionally = '�� �����';
$strOr = '���';
$strOverhead = '�������� �����';

$strPartialText = '�������� ��������';
$strPassword = '������';
$strPasswordEmpty = '�������� � ������!';
$strPasswordNotSame = '�������� �� � ������!';
$strPHPVersion = '������ �� PHP ';
$strPmaDocumentation = 'phpMyAdmin ������������';
$strPos1 = '������';
$strPrevious = '��������';
$strPrimary = 'PRIMARY';
$strPrimaryKey = '������ ����';
$strPrimaryKeyHasBeenDropped = ' ������� ���� ���� ������.';
$strPrimaryKeyName = '����� �� ������� ���� ������ �� �... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> �� � ����� �� <b>� ���������� ��</b> ������� ����!)';
$strPrintView = '������ �� �����';
$strPrivileges = '����������';
$strProperties = '��������';

$strQBE = '��������� �� ������';
$strQBEDel = '������';
$strQBEIns = '������';
$strQueryOnDb = 'SQL-������ ��� ������ �� ����� <b>%s</b>:';

$strRecords = '������';
$strReloadFailed = '��������� ���� �� ������������ �� MySQL.';
$strReloadMySQL = '��������� MySQL';
$strRememberReload = '�� ���������� �� ����������� �������.';
$strRenameTable = '����������� ��������� ��';
$strRenameTableOK = '������� %s ���� ������������ �� %s';
$strRepairTable = '��������� �� ���������';
$strReplace = '�������';
$strReplaceTable = '������� ������� �� ��������� � ������� �� �����';
$strReset = '�������';
$strReType = '������';
$strRevoke = '������';
$strRevokeGrant = '�������� �� Grant&nbsp;����.';
$strRevokeGrantMessage = '��� ����������� Grant ������������ �� %s';
$strRevokeMessage = '��� ��������� ������������ �� %s';
$strRevokePriv = '������ �� ����������';
$strRowLength = '������� �� ����';
$strRows = '������';
$strRowsFrom = '���� ���������� ��';
$strRowSize = ' ������ �� ��� ';
$strRowsStatistic = '���������� �� ��������';
$strRunning = '������ �� %s';
$strRunQuery = '������� ��������';
$strRunSQLQuery = '���������� SQL ������/������ ��� ���� �� ����� %s';

$strSave = '������';
$strSelect = '������';
$strSelectFields = '������ ���� (������� ����):';
$strSelectNumRows = '� �����������';
$strSend = '�������';
$strSequence = '���.';
$strServerChoice = '����� �� ������';
$strServerVersion = '������ �� �������';
$strSetEnumVal = '��� ���� �� ������ � "enum" ��� "set", ���� �������� ����������� ����������� ���� ������: \'a\',\'b\',\'c\'...<br />��� � ���������� �� ������� ������� ����� ("\") ��� �������� ("\'") ����� ���� ���������, ������� ������� ����� ���� ��� (��������:  \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '������';
$strShowAll = '������ ������';
$strShowCols = '������ ��������';
$strShowingRecords = '������� ������ ';
$strShowPHPInfo = '������ ���������� �� PHP ';
$strShowTables = '������ ���������';
$strShowThisQuery = ' ������ ���� ������ ������ ';
$strSingly = '(����������)';
$strSize = '������';
$strSort = '���������';
$strSpaceUsage = '���������� �����';
$strSQLQuery = 'SQL-���������';
$strStartingRecord = '������� �����';
$strStatement = '���������';
$strStrucCSV = 'CSV �����';
$strStrucData = '����������� � �������';
$strStrucDrop = '������ \'������ ���������\'';
$strStrucExcelCSV = 'CSV �� Ms Excel �����';
$strStrucOnly = '���� �����������';
$strSubmit = '�������';
$strSuccess = '������ SQL-��������� ���� ��������� �������';
$strSum = '����';

$strTable = '������� ';
$strTableComments = '��������� ��� ���������';
$strTableEmpty = '����� �� ��������� � ������!';
$strTableHasBeenDropped = '��������� %s ���� �������';
$strTableHasBeenEmptied = '��������� %s ���� ����������';
$strTableHasBeenFlushed = '���� �� ������� %s ���� ���������';
$strTableMaintenance = '��������� �� ���������';
$strTables = '%s �������(�)';
$strTableStructure = '��������� �� �������';
$strTableType = '��� �� ���������';
$strTextAreaLength = ' ������ ��������� ��,<br /> ���� ���� ���� �� �� � ������������ ';
$strTheContent = '������������ �� ����� ���� �����������.';
$strTheContents = '������������ �� ����� �������� ������������ �� ��������� �� ������ � ��������� �������� ��� �������� �������.';
$strTheTerminator = '������ �� ���� �� ����.';
$strTotal = '������';
$strType = '���';

$strUncheckAll = '����������� ������';
$strUnique = '��������';
$strUpdatePrivMessage = '��� ���������� ������������ �� %s.';
$strUpdateProfile = '���������� �� ������:';
$strUpdateProfileMessage = '������� ���� �������.';
$strUpdateQuery = '������� �����������';
$strUsage = '����������';
$strUseBackquotes = '��������� ������� ������� ����� ����� �� ������� � ������';
$strUser = '����������';
$strUserEmpty = '��������������� ��� � ������!';
$strUserName = '������������� ���';
$strUsers = '�����������';
$strUseTables = '��������� ���������';

$strValue = '��������';
$strViewDump = '������ ���� (�����) �� ���������';
$strViewDumpDB = '������ ���� (�����) �� ��';

$strWelcome = '����� ����� � %s';
$strWithChecked = '������ ��� �������:';
$strWrongUser = '������ ���/������. ������� ������.';

$strYes = '��';

$strZip = '"zip-����"';

// To translate
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';
$strRowsModeVertical=" vertical ";  //to translate
$strRowsModeHorizontal=" horizontal ";  //to translate
$strRowsModeOptions=" in %s mode and repeat headers after %s cells ";  //to translate
?>
