<?php
/* $Id: chinese_gb.inc.php,v 1.92 2001/12/16 23:52:44 lem9 Exp $ */

$charset = 'gb2312';
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


$strAccessDenied = '���ʱ��ܾ�';
$strAction = 'ִ�в���';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = '������ֶ�';
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddSearchConditions = '��Ӽ������� ("where" ��������)��';
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAfter = 'After'; //to translate
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = 'Analyze table'; //to translate
$strAnd = 'And'; //to translate (tbl_qbe.php)
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAscending = 'Ascending'; //to translate (tbl_qbe.php)
$strAtBeginningOfTable = 'At Beginning of Table'; //to translate
$strAtEndOfTable = 'At End of Table'; //to translate
$strAttr = '����';

$strBack = '����';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = '���';

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = '�س�: \\r';
$strChange = '�ı�';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = 'Check table'; //to translate
$strColumn = 'Column'; //to translate
$strColumnNames = '�ֶ���';
$strCompleteInserts = 'Complete inserts'; //to translate
$strConfirm = 'Do you really want to do it?'; //to translate
$strCopyTableOK = '���ݱ� %s �Ѿ��ɹ�����Ϊ %s��';
$strCreate = '����';
$strCreateNewDatabase = '����һ���µ����ݿ�';
$strCreateNewTable = '����һ���µ����ݱ������ݿ� ';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php)

$strData = 'Data'; //to translate
$strDatabase = '���ݿ� ';
$strDatabases = '���ݿ�';
$strDataOnly = 'Data only'; //to translate
$strDefault = 'ȱʡֵ';
$strDelete = 'ɾ��';
$strDeleted = '�ü�¼�Ѿ���ɾ����';
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDescending = 'Desending'; //to translate (tbl_qbe.php)
$strDisplay = 'Display'; //to translate
$strDoAQuery = '��ִ�� "��ѯʾ��" (ͨ���: "%")';
$strDocu = '�ĵ�';
$strDoYouReally = '��ȷ��Ҫ ';
$strDrop = '����';
$strDropDB = '�������ݿ� ';
$strDumpingData = '������������ݿ�����';
$strDynamic = 'dynamic'; //to translate

$strEdit = '�༭';
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = '���';
$strEmptyResultSet = 'MySQL ���صĲ�ѯ���Ϊ�ա� (ԭ�����Ϊ��û���ҵ����������ļ�¼��)';
$strEnd = '����';
$strError = '����';
$strExtra = '����';

$strField = '�ֶ�';
$strFields = '�ֶ�';
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFunction = '����';

$strGenTime = 'Generation Time'; //to translate
$strGo = '��ʼ';
$strGrants = 'Grants'; //to translate

$strHasBeenAltered = '�Ѿ����޸ġ�';
$strHasBeenCreated = '�Ѿ�������';
$strHome = '��Ŀ¼';
$strHomepageOfficial = 'Official phpMyAdmin Homepage'; //to translate
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page'; //to translate
$strHost = '����';
$strHostEmpty = 'The host name is empty!'; //to translate

$strIfYouWish = '�����Ҫָ��������ֶΣ���ô������ö��Ÿ������ֶ��б�';
$strIndex = '����';
$strIndexes = 'Indexes'; //to translate
$strInsert = '����';
$strInsertAsNewRow = 'Insert as new row'; //to translate
$strInsertNewRow = '�����¼�¼';
$strInsertTextfiles = '���ı��ļ�����ȡ���ݣ����뵽���ݱ�';
$strInUse = 'in use'; //to translate

$strKeyname = '����';
$strKill = 'Kill'; //to translate

$strLength = 'Length'; //to translate
$strLengthSet = '����/Set*';
$strLimitNumRows = 'records per page'; //to translate
$strLineFeed = '���У�\\n';
$strLines = '���� ';
$strLocationTextfile = '�ı��ļ���λ��';
$strLogout = '�˳�ϵͳ';

$strModifications = '�޸ĺ�������Ѿ����̡�';
$strModify = 'Modify'; //to translate (tbl_qbe.php)
$strMySQLReloaded = 'MySQL ����������ɡ�';
$strMySQLSaid = 'MySQL ���أ�';
$strMySQLShowProcess = '��ʾ����';
$strMySQLShowStatus = '��ʾ MySQL ��������Ϣ';
$strMySQLShowVars = '��ʾ MySQL ��ϵͳ����';

$strName = '����';
$strNext = '��һ��';
$strNo = '��';
$strNoPassword = 'No Password'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = '���ݿ���û�����ݱ�';
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNull = 'Null';
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOftenQuotation = 'ͨ��Ϊ���š� ��ѡ�С� ��ʾʹ�����š���Ϊֻ�� char �� varchar ���͵�������Ҫ��������������';
$strOptimizeTable = 'Optimize table'; //to translate
$strOptionalControls = '��ѡ�����ڶ�ȡ��д��������ַ���';
$strOptionally = 'ѡ��';
$strOr = 'Or'; //to translate
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Password'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPos1 = '��ʼ';
$strPrevious = 'ǰһ��';
$strPrimary = '����';
$strPrimaryKey = '����';
$strPrintView = 'Print view'; //to translate
$strPrivileges = 'Privileges'; //to translate
$strProperties = '����';

$strQBE = '��ѯģ��';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strRecords = '��¼';
$strReloadFailed = 'MySQL ����ʧ�ܡ�';
$strReloadMySQL = '���� MySQL';
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = '�����ݱ����Ϊ';
$strRenameTableOK = '���ݱ� %s �����Ѿ����ó� %s��';
$strRepairTable = 'Repair table'; //to translate
$strReplace = '�滻';
$strReplaceTable = '�����ݱ�������������ı��ļ��滻��';
$strReset = '����';
$strReType = 'Re-type'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for %s'; //to translate
$strRevokeMessage = 'You have revoked the privileges for %s'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = 'rows starting from'; //to translate
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunning = '������ %s';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)

$strSave = '�洢';
$strSelect = 'ѡ��';
$strSelectFields = '����ѡ��һ���ֶΣ�';
$strSelectNumRows = 'in query'; //to translate
$strSend = '����';
$strSequence = 'Seq.'; //to translate
$strServerVersion = 'Server version'; //to translate
$strShow = 'Show'; //to translate
$strShowingRecords = '��ʾ��¼ ';
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = 'Sort'; //to translate (tbl_qbe.php)
$strSpaceUsage = 'Space usage'; //to translate
$strSQLQuery = 'SQL ���';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'CSV ����';
$strStrucData = '�ṹ������';
$strStrucDrop = '��� \'drop table\'';
$strStrucOnly = 'ֻѡ��ṹ';
$strSubmit = '����';
$strSuccess = '�����е� SQL ����Ѿ��ɹ������ˡ�';
$strSum = 'Sum'; //to translate

$strTable = '���ݱ� ';
$strTableComments = 'Table comments'; //to translate
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableStructure = '���ݱ�Ľṹ';
$strTableType = 'Table type'; //to translate
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = '�ļ��е������Ѿ����뵽���ݱ��С�';
$strTheContents = '�ļ��е����ݽ���ȡ�� ��ѡ�������ݱ��о��� ��ͬ��������Ψһ���� ��¼��';
$strTheTerminator = '��Щ�ֶεĽ�����';
$strTotal = '�ܼ�';
$strType = '����';

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = 'Ψһ';
$strUpdateQuery = 'Update Query'; //to translate (tbl_qbe.php)
$strUsage = 'Usage'; //to translate
$strUser = 'User'; //to translate
$strUserEmpty = 'The user name is empty!'; //to translate
$strUserName = 'User name'; //to translate
$strUsers = 'Users'; //to translate
$strUseTables = 'Use Tables'; //to translate (tbl_qbe.php)

$strValue = 'ֵ';
$strViewDump = '�鿴���ݱ�Ľṹ��ժҪ��Ϣ��';
$strViewDumpDB = '�鿴���ݿ�Ľṹ��ժҪ��Ϣ��';

$strWelcome = '��ӭʹ�� %s';
$strWrongUser = '������󣬷��ʱ��ܾ���';

$strYes = '��';

// automatic generated by langxlorer.php (June 27, 2001, 6:53 pm)
// V0.11 - experimental (Steve Alberty - alberty@neptunlabs.de)
$strBinary = ' Binary ';  //to translate
$strBinaryDoNotEdit = ' Binary - do not edit ';  //to translate
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';  //to translate
$strNotNumber = 'This is not a number!';  //to translate
$strNotValidNumber = ' is not a valid row number!';  //to translate

// export Zip (July 07, 2001, 19:48am)
$strBzip = '"bzipped"';
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
$strDisplayOrder = 'Display order';
$strDropTable = 'Drop table';
$strExtendedInserts = 'Extended inserts';
$strFieldsEmpty = ' The field count is empty! ';  //to translate
$strFieldsEnclosedBy = 'Fields enclosed by';//to translate
$strFieldsEscapedBy = 'Fields escaped by';//to translate
$strFieldHasBeenDropped = 'Field %s has been dropped';//to translate
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
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
$strMySQLServerProcess = 'MySQL %pma_s1% running on %pma_s2% as %pma_s3%';
$strNbRecords = 'no. of records';
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoModification = 'No change';
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
$strShowThisQuery = ' Show this query here again ';
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
