<?php
/* $Id: korean.inc.php,v 1.77 2001/12/16 23:52:44 lem9 Exp $ */

$charset = 'ks_c_5601-1987';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = '������ �źεǾ����ϴ�.';
$strAction = '����';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = '�ʵ� �߰��ϱ�';
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddSearchConditions = '�˻� ���� ������ �߰��Ͻʽÿ�. ("where" ������):';
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAfter = '������-->';
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = '���̺� �м�';
$strAnd = 'And'; //to translate (tbl_qbe.php)
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAscending = 'Ascending'; //to translate (tbl_qbe.php)
$strAtBeginningOfTable = '���̺��� ó��';
$strAtEndOfTable = '���̺��� ������';
$strAttr = '����';

$strBack = '�ڷ�';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = '����';

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = 'ĳ���� ����: \\r';
$strChange = '����';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = '���̺� üũ';
$strColumn = 'Column'; //to translate
$strColumnNames = 'Į��(��) �̸�';
$strCompleteInserts = '������ INSERT�� �ۼ�';
$strConfirm = 'Do you really want to do it?'; //to translate
$strCopyTableOK = '%s ���̺��� %s ���� ����Ǿ����ϴ�.';
$strCreate = ' ����� ';
$strCreateNewDatabase = '���ο� ������ ���̽��� ����ϴ�';
$strCreateNewTable = '������ ������ ���̽��� ���ο� ���̺��� ����ϴ�. -->';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php)

$strData = 'Data'; //to translate
$strDatabase = '������ ���̽� ';
$strDatabases = '������ ���̽� ';
$strDataOnly = 'Data only'; //to translate
$strDefault = '�⺻��';
$strDelete = '����';
$strDeleted = '������ ���� ���� �Ͽ����ϴ�.';
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDescending = 'Desending'; //to translate (tbl_qbe.php)
$strDisplay = '����';
$strDoAQuery = '"QUERY ��(��)"�� ���� (wildcard: "%")';
$strDocu = '����';
$strDoYouReally = '������ ������ �����Ͻðڽ��ϱ�? --> ';
$strDrop = '����';
$strDropDB = '������ ���̽� ���� -->';
$strDumpingData = '���̺��� ���� ������';
$strDynamic = 'dynamic'; //to translate

$strEdit = '����';
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = '����';
$strEmptyResultSet = 'MySQL �� ���� �����Ͽ����ϴ�.';
$strEnd = '������';
$strError = '����';
$strExtra = '�߰�';

$strField = '�ʵ�';
$strFields = '�ʵ�';
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFunction = '�Լ�';

$strGenTime = 'Generation Time'; //to translate
$strGo = '����';
$strGrants = 'Grants'; //to translate

$strHasBeenAltered = '��(��) �����Ͽ����ϴ�.';
$strHasBeenCreated = '��(��) �ۼ��Ͽ����ϴ�.';
$strHome = 'MainPage';
$strHomepageOfficial = 'phpMyAdmin Ȩ ������';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHost = 'ȣ��Ʈ';
$strHostEmpty = 'The host name is empty!'; //to translate

$strIfYouWish = '���̺� ��(�ݷ�)�� �����͸� �߰��� ���� �ʵ� ����Ʈ�� �޸��� ������ �ֽʽÿ�. ';
$strIndex = '�ε���';
$strIndexes = 'Indexes'; //to translate
$strInsert = '�߰�';
$strInsertAsNewRow = 'Insert as new row'; //to translate
$strInsertNewRow = '�� ���� �߰�';
$strInsertTextfiles = '���̺� �ؽ�Ʈ ���� �߰�';
$strInUse = 'in use'; //to translate

$strKeyname = 'Ű �̸�';
$strKill = 'Kill'; //to translate

$strLength = 'Length'; //to translate
$strLengthSet = '����/��Ʈ*';
$strLimitNumRows = '�������� ���ڵ� ��';
$strLineFeed = '���� ����: \\n';
$strLines = '��(��)';
$strLocationTextfile = 'SQL ���� ������ �ؽ�Ʈ ����';
$strLogout = '�α� �ƿ�';

$strModifications = '�� �ٸ��� �����Ͽ����ϴ�.';
$strModify = 'Modify'; //to translate (tbl_qbe.php)
$strMySQLReloaded = 'MySQL�� ���� �о� �鿴���ϴ�.';
$strMySQLSaid = 'MySQL �޼���: ';
$strMySQLShowProcess = 'MySQL ���μ��� ����';
$strMySQLShowStatus = 'MySQL ��Ÿ�� ���� ����';
$strMySQLShowVars = 'MySQL �ý��� ���� ����';

$strName = '�̸�';
$strNext = '��������';
$strNo = ' �ƴϿ� ';
$strNoPassword = 'No Password'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = '������ DB���� ���̺��� �����ϴ�.';
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNull = 'Null';
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOftenQuotation = '�ο� ��ȣ�Դϴ�. �ɼ���, char Ȥ�� varchar �ʵ常�� " "�� ���ο��� ���� �ǹ��մϴ�.';
$strOptimizeTable = '���̺� ����ȭ';
$strOptionalControls = 'Ư������ �б�/���� �ɼ�';
$strOptionally = '�ɼ��Դϴ�.';
$strOr = 'Ȥ��';
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Password'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPos1 = 'ó��';
$strPrevious = '��������';
$strPrimary = 'Primary';
$strPrimaryKey = 'Primary Ű';
$strPrintView = '�μ�� ����';
$strPrivileges = 'Privileges'; //to translate
$strProperties = '������Ƽ';

$strQBE = '��(��)���� ���� ����';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strRecords = '��ϼ�';
$strReloadFailed = 'MySQL�� �о� ���̱⿡ �����Ͽ����ϴ�.';
$strReloadMySQL = 'MySQL �ٽ� �о� ���̱�';
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = '���̺� �̸� �����ϱ�';
$strRenameTableOK = '%s��(��) %s(��)�� �����Ͽ����ϴ�.';
$strRepairTable = '���̺� ����';
$strReplace = '��ġ(����)�ϱ�';
$strReplaceTable = '���Ϸ� ���̺� ��ġ�ϱ�';
$strReset = '����Ʈ';
$strReType = 'Re-type'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for %s'; //to translate
$strRevokeMessage = 'You have revoked the privileges for %s'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = '������';
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunning = '�� �������Դϴ�. %s';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)

$strSave = '����';
$strSelect = '����';
$strSelectFields = '�ʵ� ���� (�ϳ� �̻�):';
$strSelectNumRows = '����';
$strSend = '�۽�';
$strSequence = 'Seq.'; //to translate
$strServerVersion = 'Server version'; //to translate
$strShow = '����';
$strShowingRecords = '��� ����';
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = 'Sort'; //to translate (tbl_qbe.php)
$strSpaceUsage = 'Space usage'; //to translate
$strSQLQuery = '����� SQL����';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'CSV ������';
$strStrucData = '������ ������';
$strStrucDrop = '\'drop table\' �߰�';
$strStrucOnly = '������';
$strSubmit = '����';
$strSuccess = 'SQL-query�� �ٸ��� ����Ǿ����ϴ�.';
$strSum = 'Sum'; //to translate

$strTable = '���̺� ';
$strTableComments = '���̺� ����';
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableStructure = '���̺� ����';
$strTableType = '���̺� Ÿ��';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = '������ �����͸� �����Ͽ����ϴ�.';
$strTheContents = '������ �����ͷ� ������ ���̺��� primary Ȥ�� unique Ű�� ��ġ�ϴ� ���� ��ġ(����)��Ű�ڽ��ϴ�.';
$strTheTerminator = '�ʵ��� ���� ��ȣ �Դϴ�.';
$strTotal = '�հ�';
$strType = '�ʵ� Ÿ����';

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = '����ũ Ÿ����';
$strUpdateQuery = 'Update Query'; //to translate (tbl_qbe.php)
$strUsage = 'Usage'; //to translate
$strUser = 'User'; //to translate
$strUserEmpty = 'The user name is empty!'; //to translate
$strUserName = 'User name'; //to translate
$strUsers = 'Users'; //to translate
$strUseTables = 'Use Tables'; //to translate (tbl_qbe.php)

$strValue = '��';
$strViewDump = '���̺��� ����(��Ű��) ������ ����';
$strViewDumpDB = 'DB�� ����(��Ű��) ������ ����';

$strWelcome = 'Welcome to %s';
$strWrongUser = '������ Ȥ�� �н����尡 �ٸ��� �ʽ��ϴ�. <br /> ������ �źεǾ����ϴ�.';

$strYes = ' �� ';

// automatic generated by langxlorer.php (June 27, 2001, 6:53 pm)
// V0.11 - experimental (Steve Alberty - alberty@neptunlabs.de)
$strBinary = ' Binary ';  //to translate
$strBinaryDoNotEdit = ' Binary - do not edit ';  //to translate
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';  //to translate
$strNotNumber = 'This is not a number!';  //to translate
$strNotValidNumber = ' is not a valid row number!';  //to translate

// export Zip (July 07, 2001, 19:48am)
$strBzip = '"bzipped"';  //to translate
$strGzip = '"gzipped"';  //to translate
$strZip = '"zipped"';  //to translate

// To translate
$strAffectedRows = 'Affected rows:';
$strAfterInsertBack = 'Return';
$strAfterInsertNewInsert = 'Insert a new record';
$strAnIndex = 'An index has been added on %s';//to translate
$strAPrimaryKey = 'A primary key has been added on %s';//to translate
$strBookmarkDeleted = 'The bookmark has been deleted.';
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strCopyTable = 'Copy table to (database<b>.</b>table):';
$strDatabaseHasBeenDropped = 'Database %s has been dropped.';  //to translate
$strDatabasesStats = 'Databases statistics';//to translate
$strDeletedRows = 'Deleted rows:';
$strDeleteUserMessage = 'You have deleted the user %s.';//to translate
$strDisplayOrder = 'Display order:';
$strDropTable = 'Drop table';
$strFieldHasBeenDropped = 'Field %s has been dropped';//to translate
$strFieldsEmpty = ' The field count is empty! ';  //to translate
$strFieldsEnclosedBy = 'Fields enclosed by';//to translate
$strFieldsEscapedBy = 'Fields escaped by';//to translate
$strFieldsTerminatedBy = 'Fields terminated by';//to translate
$strFlushTable = 'Flush the table ("FLUSH")';
$strFormEmpty = 'Missing value in the form !';
$strFullText = 'Full Texts';//to translate
$strIdxFulltext = 'Fulltext';  //to translate 
$strIndexHasBeenDropped = 'Index %s has been dropped';//to translate
$strInsertedRows = 'Inserted rows:';
$strInstructions = 'Instructions';//to translate
$strInvalidName = '"%s" is a reserved word, you can\'t use it as a database/table/field name.'; //to translate
$strKeepPass = 'Do not change the password';//to translate
$strLinesTerminatedBy = 'Lines terminated by';//to translate
$strLogin = 'Login';
$strLogPassword = 'Password&nbsp;:';
$strLogUsername = 'Username&nbsp;:';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
$strMySQLServerProcess = 'MySQL %pma_s1% running on %pma_s2% as %pma_s3%';
$strNbRecords = 'no. of records';
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoModification = 'No change'; // To translate
$strNoQuery = 'No SQL query!';  //to translate
$strPartialText = 'Partial Texts';//to translate
$strPmaDocumentation = 'phpMyAdmin Documentation';//to translate 
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';//to translate
$strQueryOnDb = 'SQL-query on database <b>%s</b>:';
$strRowSize = ' Row size ';  //to translate
$strRunSQLQuery = 'Run SQL query/queries on database %s';//to translate
$strServerChoice = 'Server Choice';//to translate 
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Show all'; // to translate
$strShowCols = 'Show columns';
$strShowPHPInfo = 'Show PHP information';  // To translate
$strShowTables = 'Show tables';
$strShowThisQuery = ' Show this query here again ';  //to translate
$strStartingRecord = 'Starting record';//to translate
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTableHasBeenDropped = 'Table %s has been dropped';//to translate
$strTableHasBeenEmptied = 'Table %s has been emptied';//to translate
$strTableHasBeenFlushed = 'Table %s has been flushed';
$strTables = '%s table(s)';  //to translate
$strUpdatePrivMessage = 'You have updated the privileges for %s.';//to translate
$strUpdateProfile = 'Update profile:';//to translate
$strUpdateProfileMessage = 'The profile has been updated.';//to translate
$strUseBackquotes = 'Use backquotes with tables and fields\' names';
$strWithChecked = 'With selected:';

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
