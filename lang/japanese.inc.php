<?php
/* $Id: japanese.inc.php,v 1.79 2001/12/16 23:52:44 lem9 Exp $ */

$charset = 'euc-jp';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('�Х���', 'KB', 'MB', 'GB');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('1��','2��','3��','4��','5��','6��','7��','8��','9��','10��','11��','12��');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Yǯ%B%e�� %H:%M';


$strAccessDenied = '���������ϵ��ݤ���ޤ�����';
$strAction = '�¹�';
$strAddDeleteColumn = '�ե��������Ρ��ɲá������';
$strAddDeleteRow = '���ԤΡ��ɲá������';
$strAddNewField = '�ե�����ɤ��ɲ�';
$strAddPriv = '�������ø����ɲ�';
$strAddPrivMessage = '�������ø����ɲä��ޤ�����';
$strAddSearchConditions = '�������ʸ���ɲä��Ƥ���������("where"����ʸ):';
$strAddToIndex = ' &nbsp;%s&nbsp;����򥤥�ǥå������ɲä��ޤ���';
$strAddUser = '�桼�������ɲ�';
$strAddUserMessage = '�桼�������ɲä��ޤ�����';
$strAffectedRows = '�ƶ����줿�Կ�:';
$strAfter = '���-->';
$strAfterInsertBack = '����';
$strAfterInsertNewInsert = '���쥳���ɤ��ɲ�';
$strAll = '����';
$strAlterOrderBy = '�ơ��֥���֤ξ��';
$strAnalyzeTable = '�ơ��֥��ʬ�Ϥ��ޤ���';
$strAnd = '�ڤ�';
$strAnIndex = '����ǥå�����%s���ɲõ��Ƥ��ޤ�����';
$strAny = '����';
$strAnyColumn = '�������';
$strAnyDatabase = '���ǡ����١���';
$strAnyHost = '���ƤΥۥ���';
$strAnyTable = '���ƤΥơ��֥�';
$strAnyUser = '���ƤΥ桼����';
$strAPrimaryKey = '���ץ�����%s���ɲä���ޤ�����';
$strAscending = '�夬��';
$strAtBeginningOfTable = '�ơ��֥�κǽ�';
$strAtEndOfTable = '�ơ��֥�κǸ�';
$strAttr = 'ɽ��';

$strBack = '���';
$strBinary = ' �Х��ʥ� ';
$strBinaryDoNotEdit = ' �Х��ʥ� -  ��������ޤ���';
$strBookmarkDeleted = '�֥å��ޡ���������˺�����ޤ�����';
$strBookmarkLabel = '��٥�';
$strBookmarkQuery = '�֥å��ޡ�������Ƥ���SQL�����꡼';
$strBookmarkThis = 'SQL�����꡼��֥å��ޡ�������';
$strBookmarkView = 'ȯɽ����';
$strBrowse = 'ɽ��';
$strBzip = '"bzip�����"';

$strCantLoadMySQL = 'MySQL��¹ԤǤ��ޤ���<br />PHP��������ǧ���Ʋ�������';
$strCantRenameIdxToPrimary = '����ǥå�����̾����PRIMARY���ѹ��Ǥ��ޤ���';
$strCardinality = '������';
$strCarriage = '�����å��꥿����: \\r';
$strChange = '�ѹ�';
$strCheckAll = '�����˥ޡ������դ�';
$strCheckDbPriv = '�ǡ����١������ø��γ�ǧ';
$strCheckTable = '�ơ��֥������å����ޤ���';
$strColumn = '��';
$strColumnNames = '��(�����)̾';
$strCompleteInserts = '������INSERTʸ�κ���';
$strConfirm = '�����ˤ�ꤿ���Ǥ���?';
$strCopyTable = '�ơ��֥��(database<b>.</b>table)�˥��ԡ�����:';
$strCopyTableOK = '%s�ơ��֥��%s�˥��ԡ����ޤ�����';
$strCreate = '����';
$strCreateIndex = '&nbsp;%s&nbsp;����Υ���ǥå����κ���';
$strCreateIndexTopic = '����������ǥå����κ���';
$strCreateNewDatabase = '������DB��������ޤ���';
$strCreateNewTable = '���ߤ�DB�˿������ơ��֥��������ޤ��� --> ';
$strCriteria = '���';

$strData = '�ǡ���';
$strDatabase = '�ǡ����١���';
$strDatabaseHasBeenDropped = '�ǡ����١���%s������˺�����ޤ�����';
$strDatabases = '�ǡ����١���';
$strDatabasesStats = '�ǡ����١���������';
$strDataOnly = '�ǡ����Ф���';
$strDefault = '������';
$strDelete = '���';
$strDeleted = '���򤷤���������ޤ�����';
$strDeleteFailed = '����˼��Ԥ��ޤ���';
$strDeleteUserMessage = '�桼����%s�������ޤ�����';
$strDeletedRows = '������줿�Կ�:';
$strDescending = '������';
$strDisplay = 'ɽ��';
$strDisplayOrder = 'ȯɽ����:';
$strDoAQuery = '"���QUERY"��¹� (wildcard: "%")';
$strDocu = '�إ��';
$strDoYouReally = '�����˼���¹Ԥ��ޤ��� --> ';
$strDrop = '���';
$strDropDB = 'DB�κ�� -->';
$strDropTable = '�ơ��֥�κ��';
$strDumpingData = '�ơ��֥�Υ���ץǡ���';
$strDynamic = '�����ʥߥå�';

$strEdit = '����';
$strEditPrivileges = '�ø�����';
$strEffective = '���¾�';
$strEmpty = '���ˤ���';
$strEmptyResultSet = 'MySQL�������ͤ�꥿���󤷤ޤ�����(i.e. zero rows).';
$strEnd = '�Ǹ�';
$strEnglishPrivileges = ' ���: MySQL���ø���̾���ϱѸ��ȯɽ���Ƥ��롣';
$strError = '���顼';
$strExtendedInserts = 'Ĺ��INSERTʸ�κ���';
$strExtra = '�ɲ�';

$strField = '�ե������';
$strFieldHasBeenDropped = '�ե������%s������˺������ޤ���';
$strFields = '�ե������';
$strFieldsEmpty = ' �ե�����ɿ��϶��Ǥ��� ';
$strFieldsEnclosedBy = '�ե�����ɤ��Ϥ��ʸ��';
$strFieldsEscapedBy = '�ե�����ɤΥ���������ʸ��';
$strFieldsTerminatedBy = '�ե�����ɤν�λʸ��';
$strFixed = '����';
$strFlushTable = '�ơ��֥�Υ���å������ˤ���("FLUSH")';
$strFormat = '�ե����ޥå�';
$strFormEmpty = '�ե�����Ǥ��ͤ�����ޤ���Ǥ�����';
$strFullText = '��ʸ';
$strFunction = '�ؿ�';

$strGenTime = '�����λ���';
$strGo = '�¹�';
$strGrants = '��Ϳ';
$strGzip = '"gzip�����"';

$strHasBeenAltered = '���ѹ����ޤ�����';
$strHasBeenCreated = '��������ޤ�����';
$strHome = '�᡼��ڡ�����';
$strHomepageOfficial = 'phpMyAdmin�ۡ���';
$strHomepageSourceforge = 'Sourceforge�Ǥ�phpMyAdmin�Υ����Υ��ɥڡ���';
$strHost = '�ۥ���';
$strHostEmpty = '�ۥ���̾�϶��Ǥ�!';

$strIdxFulltext = '��ʸ';
$strIfYouWish = '�ơ��֥�Υ����(��)�˥ǡ������ɲä�����ϡ��ե�����ɥꥹ�Ȥ򥫥�ޤǶ�ʬ���Ƥ���������';
$strIgnore = '̵��';
$strIndex = '����ǥå���';
$strIndexes = '����ǥå�����';
$strIndexHasBeenDropped = '����ǥå���%s���������ޤ���';
$strIndexName = '����ǥå���̾&nbsp;:';
$strIndexType = '����ǥå����Υ�����&nbsp;:';
$strInsert = '�ɲ�';
$strInsertAsNewRow = '�������ԤȤ��Ƥ��ɲ�';
$strInsertedRows = '�ɲä��줿�Կ�:';
$strInsertNewRow = '�������Ԥ��ɲ�';
$strInsertTextfiles = '�ơ��֥�˥ƥ����ȥե�������ɲ�';
$strInstructions = '����';
$strInUse = '������';
$strInvalidName = '"%s"����Ͽ���줿���դǤ�����֥ǡ����١������ơ��֥롿�ե�����ɡ�̾�ǤϻȤ��ޤ���';

$strKeepPass = '�ѥ���ɤ��ѹ����ʤ�';
$strKeyname = '����̾';
$strKill = '���';

$strLength = 'Ĺ��';
$strLengthSet = 'Ĺ��/���å�*';
$strLimitNumRows = '�ڡ����Υ쥳���ɿ�';
$strLineFeed = '����ʸ��: \\n';
$strLines = '��';
$strLinesTerminatedBy = '�Ԥν�λʸ��';
$strLocationTextfile = 'SQL�Υ���ץǡ�������¸����Ƥ���ƥ����ȥե�����';
$strLogin = '������';
$strLogout = '��������';

$strModifications = '���������������ޤ�����';
$strModify = '����';
$strModifyIndexTopic = '����ǥå������ѹ�';
$strMoveTable = '�ơ��֥��(database<b>.</b>table)�˰�ư:';
$strMoveTableOK = '�ơ��֥�%s��%s��ư����ޤ�����';
$strMySQLReloaded = 'MySQL�򿷤����ɤ߹��ߤޤ�����';
$strMySQLSaid = 'MySQL�Υ�å����� --> ';
$strMySQLServerProcess = 'MySQL %pma_s1%��%pma_s2%��%pma_s3%�Ȥ��Ƽ¹Ԥ��Ƥ��ޤ���';
$strMySQLShowProcess = 'MySQL�ץ�����ɽ��';
$strMySQLShowStatus = 'MySQL�Υ�󥿥������';
$strMySQLShowVars = 'MySQL�Υ����ƥ��ѿ�';

$strName = '̾��';
$strNbRecords = '�쥳���ɿ�';
$strNext = '����';
$strNo = '������';
$strNoDatabases = '�ǡ����١�����';
$strNoDropDatabases = '"DROP DATABASE"���ơ��ȥ��Ȥ϶ػߤ���롣';
$strNoFrames = '<b>�ե졼��</b>�����ʥ֥饦������Ȥä���phpMyAdmin�����ϻȤ��䤹���Ǥ���';
$strNoIndex = '����ǥå��������ꤵ��Ƥ��ޤ���';
$strNoIndexPartsDefined = '����ǥå�������ʬ�����ꤵ��Ƥ��ޤ���';
$strNoModification = '�ѹ�̵';
$strNone = '̵';
$strNoPassword = '�ѥ����̵��';
$strNoPrivileges = '�ø�̵��';
$strNoQuery = 'SQL�����꡼̵!';
$strNoRights = '�����ø�����äƤʤ��ΤǤ���������ޤ���';
$strNoTablesFound = '���ߤ�DB�˥ơ��֥�Ϥ���ޤ���';
$strNotNumber = '������ֹ�ǤϤ���ޤ���';
$strNotValidNumber = ' �ϹԤ��������ֹ�ǤϤ���ޤ��� ';
$strNoUsersFound = '�桼�����ϸ��Ĥ���ޤ���Ǥ�����';
$strNull = '������(Null)';
$strNumberIndexes = ' ��������ǥå����� ';

$strOftenQuotation = '�������Ǥ������ץ����ϡ�char�ޤ���varchar�ե�����ɤΤ�" "�ǰϤޤ�Ƥ��뤳�Ȥ��̣���ޤ���';
$strOptimizeTable = '�ơ��֥���Ŭ�����ޤ���';
$strOptionalControls = '�ü�ʸ�����ɤ߹���/�񤭹��ߥ��ץ����';
$strOptionally = '���ץ����Ǥ���';
$strOr = '����';
$strOverhead = '�����С��إå�';

$strPartialText = '��ʬŪ��ʸ��';
$strPassword = '�ѥ����';
$strPasswordEmpty = '�ѥ���ɤ϶��Ǥ���';
$strPasswordNotSame = '�ѥ���ɤ϶��Ǥ���';
$strPHPVersion = 'PHP �С������';
$strPmaDocumentation = 'phpMyAdmin�Υɥ������';
$strPos1 = '�ǽ�';
$strPrevious = '����';
$strPrimary = '����';
$strPrimaryKey = '���ץ���';
$strPrimaryKeyHasBeenDropped = '���ץ��������������ޤ�����';
$strPrimaryKeyName = '���ץ�����̾����... PRIMARY�ǤϤʤ���Ф����ޤ���';
$strPrimaryKeyWarning = '("PRIMARY"�Ϥ��礦�ɼ��ץ�����̾���ǤϤʤ���Ф����ޤ���';
$strPrintView = '������ɽ��';
$strPrivileges = '�ø�';
$strProperties = '�ץ�ѥƥ�';

$strQBE = '�㤫�饯���꡼�¹�';
$strQBEDel = '���';
$strQBEIns = '��';
$strQueryOnDb = '�ǡ����١�����SQL�����꡼ <b>%s</b>:';

$strRecords = '�쥳���ɿ�';
$strReloadFailed = 'MySQL�Υ���ɤ˼��Ԥ��ޤ�����';
$strReloadMySQL = 'MySQL�Υ����';
$strRememberReload = '�����С��Υ���ɤ�˺��ʤ��ǲ�������';
$strRenameTable = '�ơ��֥�̾���ѹ�';
$strRenameTableOK = '%s��%s��̾�����ѹ����ޤ�����';
$strRepairTable = '�ơ��֥�����줷�ޤ���';
$strReplace = '�֤�������';
$strReplaceTable = '�ե�����ǥơ��֥���֤�������';
$strReset = '�ꥻ�å�';
$strReType = '�Ƶ���';
$strRevoke = '�ѻ�';
$strRevokeGrant = ' ��Ϳ�μ��';
$strRevokeGrantMessage = '%s����Ϳ�ø����ä��ޤ�����';
$strRevokeMessage = '%s���ø����ä��ޤ���';
$strRevokePriv = '�ø��μ��';
$strRowLength = '�Ԥ�Ĺ��';
$strRows = '��';
$strRowsFrom = '���Ϲ�';
$strRowSize = ' �ԤΥ����� ';
$strRowsStatistic = '�Ԥ�����';
$strRunning = '���¹���Ǥ��� %s';
$strRunQuery = '�����꡼�μ¹�';
$strRunSQLQuery = '�ǡ����١���%s��SQL�����꡼�¹�';

$strSave = '��¸';
$strSelect = '����';
$strSelectFields = '�ե�����ɤ�����(��İʾ�):';
$strSelectNumRows = '�����꡼';
$strSend = '����';
$strSequence = '��.';
$strServerChoice = '�����С�������';
$strServerVersion = '�����С��ΥС������';
$strSetEnumVal = '�ե�����ɥ����פ�"enum"����"set"�ξ����ͤ򤳤Υե����ޥåȤ�Ȥä����Ϥ��Ʋ�����: \'a\',\'b\',\'c\'...<br />�Хå�����å����"\"�����ϥ������ȡ�"\'"�פ����Ϥ������ȡ�Ƭ�˥Хå�����å�����դ��Ʋ���������: \'\\\\xyz\' or \'a\\\'b\'�ס�';
$strShow = 'ɽ��';
$strShowAll = '����ȯɽ';
$strShowCols = '���ȯɽ';
$strShowingRecords = '�쥳����ɽ��';
$strShowPHPInfo = 'PHP�����ȯɽ';
$strShowTables = '�ơ��֥��ȯɽ';
$strShowThisQuery = ' �ޤ����Υ����꡼�򤳤���ȯɽ���� ';
$strSingly = '(���)';
$strSize = '������';
$strSort = '������';
$strSpaceUsage = '�ǥ�����������';
$strSQLQuery = '�¹Ԥ��줿SQL�����꡼';
$strStartingRecord = '�ǽ�Τ����';
$strStatement = '���ơ��ȥ���';
$strStrucCSV = 'CSV�ǡ���';
$strStrucData = '��¤�ȥǡ���';
$strStrucDrop = '\'drop table\'���ɲ�';
$strStrucExcelCSV = 'Ms Excel�ؤ�CSV�ǡ���';
$strStrucOnly = '��¤�Τ�';
$strSubmit = '�¹�';
$strSuccess = 'SQL�����꡼������˼¹Ԥ���ޤ�����';
$strSum = '���';

$strTable = '�ơ��֥� ';
$strTableComments = '�ơ��֥������';
$strTableEmpty = '�ơ��֥�̾�϶��Ǥ���';
$strTableHasBeenDropped = '�ơ��֥�%s�������ޤ�����';
$strTableHasBeenEmptied = '�ơ��֥�%s����ˤ��ޤ�����';
$strTableHasBeenFlushed = '�ơ��֥�%s�Υ���å������ˤ��ޤ�����';
$strTableMaintenance = '�ơ��֥����';
$strTables = '%s�ơ��֥�';
$strTableStructure = '�ơ��֥�ι�¤';
$strTableType = '�ơ��֥�Υ�����';
$strTextAreaLength = ' Ĺ���ν�٤Ǥ��Υե�����ɤ�<br /> ��������ʤ����줬����ޤ� ';
$strTheContent = '�ե�����Υǡ������������ޤ�����';
$strTheContents = '�ե�����Υǡ����ǡ����򤷤��ơ��֥�μ��ץ����ޤ���ͣ��ʥ����˰��פ�������֤������ޤ���';
$strTheTerminator = '�ե�����ɤν�λʸ���Ǥ���';
$strTotal = '���';
$strType = '�ե�����ɥ�����';

$strUncheckAll = '���ƤΥޡ����κ��';
$strUnique = 'ͣ��';
$strUpdatePrivMessage = '%s���ø��򥢥åץǡ��Ȥ��ޤ�����';
$strUpdateProfile = '�ץ�ե�����Υ��åץǡ���:';
$strUpdateProfileMessage = '�ץ�ե�����򥢥åץǡ��Ȥ��ޤ�����';
$strUpdateQuery = '�����꡼�Υ��åץǡ���';
$strUsage = '������';
$strUseBackquotes = '�ե������Ȥ�ơ��֥�̾��ե������̾�μ���˻Ȥ�';
$strUser = '�桼����';
$strUserEmpty = '�桼����̾�϶��Ǥ���';
$strUserName = '�桼����̾';
$strUsers = '�桼����';
$strUseTables = '�Ȥ��ơ��֥�';

$strValue = '��';
$strViewDump = '�ơ��֥�Υ����(��������)ɽ��';
$strViewDumpDB = 'DB�Υ����(��������)ɽ��';

$strWelcome = '%s�ؤ褦����';
$strWithChecked = '�����å�������Τ�:';
$strWrongUser = '�桼��̾�ޤ��ϥѥ���ɤ�����������ޤ���<br />���������ϵ��ݤ���ޤ�����';

$strYes = '�Ϥ�';

$strZip = '"zip�����"';

// To translate
$strCardinality = 'Cardinality';
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';

$strRowsModeVertical=" vertical ";  //to translate
$strRowsModeHorizontal=" horizontal ";  //to translate
$strRowsModeOptions=" in %s mode and repeat headers after %s cells ";  //to translate
?>
