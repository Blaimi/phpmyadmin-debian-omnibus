<?php
/* $Id: chinese_big5.inc.php,v 1.92 2001/12/16 23:52:44 lem9 Exp $ */
// Last translation by: Taiyen Hung �x����<yen789@pchome.com.tw>

$charset = 'big5';
$text_dir = 'ltr';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = '�ڵ��s��';
$strAction = '����';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = '�W�[�s���';
$strAddPriv = '�W�[�s�v��';
$strAddPrivMessage = 'You have added a new privilege.'; //�z�w�g���U���o��ϥΪ̼W�[�F�s�v��(this variable can't show Chinese correctly)
$strAddSearchConditions = '�W�[�˯����� ("where" �l�y���D��)';
$strAddUser = '�s�W�ϥΪ�';
$strAddUserMessage = 'You have added a new user.';//�z�w�s�W�F�@�ӷs�ϥΪ�(this variable can't show Chinese correctly)
$strAfter = 'After'; //should expressed in English
$strAll = '����';
$strAlterOrderBy = 'Alter table order by';
$strAnalyzeTable = '���R��ƪ�';
$strAnd = 'And'; //to translate (tbl_qbe.php)
$strAny = '����';
$strAnyColumn = '�������';
$strAnyDatabase = '�����Ʈw';
$strAnyHost = '����D��';
$strAnyTable = '�����ƪ�';
$strAnyUser = '����ϥΪ�';
$strAscending = 'Ascending'; //to translate (tbl_qbe.php)
$strAtBeginningOfTable = '���ƪ�}�Y';
$strAtEndOfTable = '���ƪ����';
$strAttr = '�ݩ�';

$strBack = '�^�W�@��';
$strBinary = 'Binary'; //should expressed in English
$strBinaryDoNotEdit = 'Binary - ����s��';
$strBookmarkLabel = '���ҦW��';
$strBookmarkQuery = 'SQL �y�k����';
$strBookmarkThis = '�N�� SQL �y�k�[�J����';
$strBookmarkView = '�d��';
$strBrowse = '�s��';
$strBzip = '"bzipped"';

$strCantLoadMySQL = '������J MySQL extension,<br />���ˬd PHP ���պA�]�w';
$strCarriage = '�k��: \\r';
$strChange = '�ק�';
$strCheckAll = '����';
$strCheckDbPriv = '�ˬd��Ʈw�v��';
$strCheckTable = '�ˬd��ƪ�';
$strColumn = '���';
$strColumnNames = '���W��';
$strCompleteInserts = 'Complete inserts'; 
$strConfirm = '�z�T�w�n�o�˰�?';
$strCopyTableOK = '�w�g�N��ƪ� %s �ƻs�� %s.'; 
$strCreate = '�إ�';
$strCreateNewDatabase = '�إ߷s��Ʈw';
$strCreateNewTable = '�إ߷s��ƪ���Ʈw ';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php)

$strData = '���';
$strDatabase = '��Ʈw';
$strDatabases = '��Ʈw';
$strDataOnly = '�u�����';
$strDefault = '�w�]��';
$strDelete = '�R��';
$strDeleted = '�O���w�Q�R��';
$strDeleteFailed = '�R������!';
$strDescending = 'Desending'; //to translate (tbl_qbe.php)
$strDisplay = '���';
$strDoAQuery = '�H�d�Ҭd�� (�U�Φr�� : "%")';
$strDocu = '�������';
$strDoYouReally = '�z�T�w�n ';
$strDrop = '�R��';
$strDropDB = '�R����Ʈw';
$strDumpingData = 'Dumping data for table'; //should expressed in English
$strDynamic = '�ʺA';

$strEdit = '�s��';
$strEditPrivileges = '�s���v��';
$strEffective = '���';
$strEmpty = '�M��';
$strEmptyResultSet = 'MySQL �Ǧ^���d�ߵ��G���� (��]�i�ର�G�S�����ŦX���󪺰O��)';
$strEnd = '�̫�@��';
$strEnglishPrivileges = '�`�N: MySQL �v���W�ٷ|�Q�������^��';
$strError = '���~';
$strExtra = '���[';

$strField = '���';
$strFields = '���';
$strFixed = '�T�w';
$strFormat = '�榡';
$strFunction = '���';

$strGenTime = '�إߤ��';
$strGo = 'Go';
$strGrants = 'Grants'; //should expressed in English
$strGzip = '"gzipped"';

$strHasBeenAltered = '�w�g�ק�';
$strHasBeenCreated = '�w�g�إ�';
$strHome = '�D�ؿ�';
$strHomepageOfficial = 'phpMyAdmin �x�����';
$strHomepageSourceforge = 'phpMyAdmin �U������';
$strHost = '�D��';
$strHostEmpty = '�п�J�D���W��!';

$strIfYouWish = '�p�G�z�n���w��ƶפJ�����A�п�J�γr���j�}�����W��';
$strIndex = '����';
$strIndexes = '����';
$strInsert = '�s�W';
$strInsertAsNewRow = '�x�s���s�O��';
$strInsertNewRow = '�s�W�@���O��';
$strInsertTextfiles = '�N��r�ɸ�ƶפJ��ƪ�';
$strInUse = '�ϥΤ�';

$strKeyname = '��W';
$strKill = 'Kill'; //�t�Ϋ��O��½

$strLength = '����';
$strLengthSet = '����/���X*';
$strLimitNumRows = '���O��/�C��';
$strLineFeed = '����: \\n';
$strLines = '���';
$strLocationTextfile = '��r�ɮת���m';
$strLogout = '�n�X�t��';

$strModifications = '�ק�w�x�s';
$strModify = 'Modify'; //to translate (tbl_qbe.php)
$strMySQLReloaded = 'MySQL ���s���J����';
$strMySQLSaid = 'MySQL �Ǧ^�G ';
$strMySQLShowProcess = '��ܵ{�� (Process)';
$strMySQLShowStatus = '��� MySQL ���檬�A';
$strMySQLShowVars = '��� MySQL �t���ܼ�';

$strName = '�W��';
$strNbRecords = '���}�l�F�C�X�O������';
$strNext = 'Next';
$strNo = ' �_ ';
$strNoPassword = '���αK�X';
$strNoPrivileges = '�S���v��';
$strNoRights = '�z�{�b�S���������v���b�o��!';
$strNoTablesFound = '��Ʈw���S����ƪ�';
$strNotNumber = '�п�J�Ʀr!';
$strNotValidNumber = '���O���Ī��C��!';
$strNoUsersFound = '�S�����ϥΪ�';
$strNull = 'Null'; //should expressed in English
$strNumberIndexes = ' Number of advanced indexes '; //should expressed in English

$strOftenQuotation = '�̱`�Ϊ��O�޸��A�u�D�����v��ܥu�� char �M varchar ���|�Q�]�A�_��';
$strOptimizeTable = '�̨ΤƸ�ƪ�';
$strOptionalControls = '�D���n�ﶵ�A�Ψ�Ū�g�S��r��';
$strOptionally = '�D����';
$strOr = '��';
$strOverhead = 'Overhead';

$strPassword = '�K�X';
$strPasswordEmpty = '�п�J�K�X!';
$strPasswordNotSame = '�G����J���K�X���P!';
$strPHPVersion = 'PHP����';
$strPos1 = '�Ĥ@��';
$strPrevious = '�e�@��';
$strPrimary = '�D��';
$strPrimaryKey = '�D��';
$strPrintView = 'Print view';
$strPrivileges = '�v��';
$strProperties = '�ݩ�';

$strQBE = '�̽d�Ҭd�� (QBE)';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strRecords = '�O��';
$strReloadFailed = '���s���JMySQL����';
$strReloadMySQL = '���s���J MySQL';
$strRememberReload = 'Remember reload the server.'; //�O�o�����D��(this variable can't show Chinese correctly)
$strRenameTable = '�N��ƪ��W��';
$strRenameTableOK = '�w�g�N��ƪ� %s ��W�� %s';
$strRepairTable = '�״_��ƪ�';
$strReplace = '���N';
$strReplaceTable = '�H�ɮר��N��ƪ���';
$strReset = '���m';
$strReType = '�T�{�K�X';
$strRevoke = '����';
$strRevokeGrant = '���� Grant �v��';
$strRevokeGrantMessage = '�z�w�����U���o��ϥΪ̪� Grant �v��: %s';
$strRevokeMessage = '�z�w�����U���o��ϥΪ̪��v��: %s';
$strRevokePriv = '�����v��';
$strRowLength = '��ƦC����';
$strRows = '��ƦC�C��';
$strRowsFrom = '���O���A�}�l�C��:';
$strRowSize = '��ƦC�j�p';
$strRowsStatistic = '��ƦC�έp�ƭ�';
$strRunning = '����� %s';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)

$strSave = '�x�s';
$strSelect = '���';
$strSelectFields = '������ (�ܤ֤@��)';
$strSelectNumRows = '�d�ߤ�';
$strSend = '�o�e';
$strSequence = '�ǦC';
$strServerVersion = '��Ʈw����';
$strShow = '���';
$strShowingRecords = '��ܰO��';
$strShowThisQuery = '�b�o�̭��s��ܻy�k ';
$strSingly = '(singly)';
$strSize = '�j�p';
$strSort = 'Sort'; //to translate (tbl_qbe.php)
$strSpaceUsage = '�w�ϥΪŶ�';
$strSQLQuery = 'SQL �y�k';
$strStatement = '�ԭz';
$strStrucCSV = 'CSV ���';
$strStrucData = '���c�P���';
$strStrucDrop = '�W�[ \'drop table\'';
$strStrucOnly = '�u�����c';
$strSubmit = '�e�X';
$strSuccess = '�z��SQL�y�k�w���Q����';
$strSum = '�`�p';

$strTable = '��ƪ�';
$strTableComments = '��ƪ���Ѥ�r';
$strTableEmpty = '�п�J��ƪ�W��!';
$strTableMaintenance = '��ƪ���@';
$strTableStructure = 'Table structure for table'; //should expressed in English
$strTableType = '��ƪ�����';
$strTextAreaLength = ' �ѩ���׭���<br /> ����줣��s��';
$strTheContent = '�ɮפ��e�w�g�פJ��ƪ�';
$strTheContents = '�ɮפ��e�N�|���N��w����ƪ��㦳�ۦP�D��ΰߤ@�䪺�O��';
$strTheTerminator = '���j��쪺�r��';
$strTotal = '�`�p';
$strType = '���A';

$strUncheckAll = '��������';
$strUnique = '�ߤ@';
$strUpdateQuery = 'Update Query'; //to translate (tbl_qbe.php)
$strUsage = '�ϥ�';
$strUser = '�ϥΪ�';
$strUserEmpty = '�п�J�ϥΪ̦W��!';
$strUserName = '�ϥΪ̦W��';
$strUsers = '�ϥΪ�';
$strUseTables = 'Use Tables'; //to translate (tbl_qbe.php)

$strValue = '��';
$strViewDump = '�˵���ƪ��ƥ����n (dump schema)';
$strViewDumpDB = '�˵���Ʈw���ƥ����n (dump schema)';

$strWelcome = '�w��ϥ� %s';
$strWrongUser = '���~���ϥΪ̦W�٩αK�X   �ڵ��s��';

$strYes = ' �O ';

// To translate
$strAffectedRows = ' Rows affected: ';  //to translate
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
$strExtendedInserts = 'Extended inserts';
$strFieldsEmpty = ' The field count is empty! ';  //to translate
$strFieldHasBeenDropped = 'Field %s has been dropped';//to translate
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
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
$strMySQLServerProcess = 'MySQL %pma_s1% running on %pma_s2% as %pma_s3%';
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoModification = 'No change';
$strNoQuery = 'No SQL query!';  //to translate
$strPartialText = 'Partial Texts';//to translate
$strPmaDocumentation = 'phpMyAdmin Documentation';//to translate 
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';//to translate
$strQueryOnDb = ' SQL-query on database <b>%s</b>:';  //to translate
$strRunSQLQuery = 'Run SQL query/queries on database %s';//to translate
$strServerChoice = 'Server Choice';//to translate 
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Show all'; // to translate
$strShowCols = 'Show columns';
$strShowPHPInfo = 'Show PHP information';  // To translate
$strShowTables = 'Show tables';
$strStartingRecord = 'Starting record';//to translate
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTableHasBeenDropped = 'Table %s has been dropped';//to translate
$strTableHasBeenEmptied = 'Table %s has been emptied';//to translate
$strTableHasBeenFlushed = 'Table %s has been flushed';
$strTables = '%s table(s)';  //to translate
$strUpdatePrivMessage = 'You have updated the privileges for %s.';//to translate
$strUpdateProfile = 'Update profile:';//to translate
$strUpdateProfileMessage = 'The profile has been updated.';//to translate
$strUseBackquotes = ' Use backquotes with tables and fields names ';  //to translate
$strWithChecked = 'With selected:';
$strZip = '"zipped"';  //to translate

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
