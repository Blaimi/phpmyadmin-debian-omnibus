<?php
/* $Id: brazilian_portuguese.inc.php,v 1.94 2001/12/16 23:52:44 lem9 Exp $ */

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


$strAccessDenied = 'Acesso Negado';
$strAction = 'A��es';
$strAddDeleteColumn = 'Adiciona/Remove Colunas';
$strAddDeleteRow = 'Adiciona/Remove Condi��es de busca';
$strAddNewField = 'Adiciona novo campo';
$strAddPriv = 'Adiciona um novo Privil�gio';
$strAddPrivMessage = 'Privil�gio adicionado.';
$strAddSearchConditions = 'Condi��o de Pesquisa (Complemento da clausula "onde"):';
$strAddUser = 'Adicionar um novo usu�rio';
$strAddUserMessage = 'Usu�rio adcionado.';
$strAffectedRows = 'Registro afetados:';
$strAfter = 'Depois';
$strAll = 'Todos';
$strAlterOrderBy = 'Alterar tabela ordenada por';
$strAnalyzeTable = 'Analizar tabela';
$strAnd = 'E';
$strAnIndex = 'Um �ndice foi adicionado a %s'; 
$strAny = 'Qualquer';
$strAnyColumn = 'Qualquer coluna';
$strAnyDatabase = 'Qualquer banco de dados';
$strAnyHost = 'Qualquer servidor';
$strAnyTable = 'Qualquer tabela';
$strAnyUser = 'Qualquer usu�rio';
$strAPrimaryKey = 'Uma chave prim�ria foi adicionada a %s'; 
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No come�o da tabela';
$strAtEndOfTable = 'Ao fim da tabela';
$strAttr = 'Atributos';

$strBack = 'Voltar';
$strBinary = ' Bin�rio ';
$strBinaryDoNotEdit = ' Bin�rio - n�o edite ';
$strBookmarkLabel = 'Nome';
$strBookmarkQuery = 'Procura de SQL salva';
$strBookmarkThis = 'Salvar essa procura de SQL';
$strBookmarkView = 'Apenas visualiza';
$strBrowse = 'Visualiza';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'n�o foi poss�vel carregar extens�o do MySQL,<br />por favor cheque a configura��o do PHP.';
$strCarriage = 'Caracter de retorno: \\r';
$strChange = 'Muda';
$strCheckAll = 'Check All';
$strCheckDbPriv = 'Verifica Privil�gios do Banco de Dados';
$strCheckTable = 'Verifica tabela';
$strColumn = 'Coluna';
$strColumnNames = 'Nome da Colunas';
$strCompleteInserts = 'Inser��es Completas';
$strConfirm = 'Voc� tem certeza?';
$strCopyTableOK = 'Tabela %s copiada para %s.';
$strCreate = 'Cria';
$strCreateNewDatabase = 'Cria novo banco de dados';
$strCreateNewTable = 'Cria nova tabela no banco de dados ';
$strCriteria = 'Crit�rio';

$strData = 'Dados';
$strDatabase = 'Banco de Dados ';
$strDatabases = 'Banco de Dados';
$strDatabasesStats = 'Estatisticas da base';
$strDataOnly = 'Dados apenas';
$strDefault = 'Padr�o';
$strDelete = 'Remove';
$strDeleted = 'Registro eliminado';
$strDeletedRows = 'Registro deletados:';
$strDeleteFailed = 'N�o foi poss�vel apagar!';
$strDeleteUserMessage = 'Voc� deletou o usu�rio %s.';
$strDescending = 'Descendente';
$strDisplay = 'Tela';
$strDisplayOrder = 'Ordenado por:';
$strDoAQuery = 'Fa�a uma "procura por exemplo" (coringa: "%")';
$strDocu = 'Documenta��o';
$strDoYouReally = 'Confirma : ';
$strDrop = 'Elimina';
$strDropDB = 'Elimina o banco de dados: ';
$strDropTable = 'Remove Tabela';
$strDumpingData = 'Extraindo dados da tabela';
$strDynamic = 'din�mico';

$strEdit = 'Edita';
$strEditPrivileges = 'Edita Privil�gios';
$strEffective = 'Efetivo';
$strEmpty = 'Limpa';
$strEmptyResultSet = 'MySQL retornou um conjunto vazio (ex. zero registros).';
$strEnd = 'Fim';
$strEnglishPrivileges = ' Nota: nomes de privil�gios do MySQL s�o expressos em ingl�s ';
$strError = 'Erro';
$strExtendedInserts = 'Extended inserts';
$strExtra = 'Extra';

$strField = 'Campo';
$strFieldHasBeenDropped = 'Campo %s foi deletado'; 
$strFields = 'Campos';
$strFieldsEmpty = ' O campo count esta vazio! ';
$strFieldsEnclosedBy = 'Campos delimitados por'; 
$strFieldsEscapedBy = 'Campo contornado por'; 
$strFieldsTerminatedBy = 'Campos terminados por'; 
$strFixed = 'fixo';
$strFormat = 'Formato';
$strFormEmpty = 'Faltando valores do form !';
$strFullText = 'Textos completos';
$strFunction = 'Fun�oes';

$strGenTime = 'Tempo de Genera��o';
$strGo = 'Executa';
$strGrants = 'Conceder';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'foi alterado.';
$strHasBeenCreated = 'foi criado.';
$strHome = 'Principal';
$strHomepageOfficial = 'P�gina Oficial do phpMyAdmin';
$strHomepageSourceforge = 'Nova P�gina do phpMyAdmin';
$strHost = 'Servidor';
$strHostEmpty = 'O nome do servidor est� vazio!';

$strIfYouWish = 'Para carregar apenas algumas colunas da tabela, fa�a uma lista separada por v�rgula.';
$strIndex = '�ndice';
$strIndexHasBeenDropped = '�ndice %s foi deletado'; 
$strIndexes = '�ndices';
$strInsert = 'Insere';
$strInsertAsNewRow = 'Insere uma nova coluna';
$strInsertedRows = 'Linhas Inseridas:';
$strInsertNewRow = 'Insere novo registro';
$strInsertTextfiles = 'Insere arquivo texto na tabela';
$strInstructions = 'Instru��es';
$strInUse = 'em uso';

$strKeyname = 'Nome chave';
$strKill = 'Matar';

$strLength = 'Tamanho';
$strLengthSet = 'Tamanho/Definir*';
$strLimitNumRows = 'records per page';
$strLineFeed = 'Caracter de Alimenta��o de Linha: \\n';
$strLines = 'Linhas';
$strLinesTerminatedBy = 'Linhas terminadas por'; 
$strLocationTextfile = 'Localiza��o do arquivo texto';
$strLogout = 'Sair';

$strModifications = 'Modifica��es foram salvas';
$strModify = 'Modificar';
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensagens do MySQL : ';
$strMySQLShowProcess = 'Mostra os Processos';
$strMySQLShowStatus = 'Mostra informa��o de runtime do MySQL';
$strMySQLShowVars = 'Mostra vari�veis de sistema do MySQL';

$strName = 'Nome';
$strNbRecords = 'no. de registros';
$strNext = 'Pr�ximo';
$strNo = 'N�o';
$strNoDatabases = 'Sem bases';
$strNoDropDatabases = 'O comando "DROP DATABASE" esta desabilitado.';
$strNoModification = 'Sem Mudan�a';
$strNoPassword = 'Sem Senha';
$strNoPrivileges = 'Sem Privil�gios';
$strNoRights = 'Voc� n�o tem direitos suficientes para estar aqui agora!';
$strNoTablesFound = 'Nenhuma tabela encontrada no banco de dados';
$strNotNumber = 'Isto n�o � um n�mero!';
$strNotValidNumber = ' n�o � um n�mero de registro valido!';
$strNoUsersFound = 'Nenhum usu�rio(s) encontrado.';
$strNull = 'Nulo';
$strNumberIndexes = ' N�mero de �ndices avan�ados ';

$strOftenQuotation = 'Em geral aspas. OPCIONAL significa que apenas campos de caracteres s�o delimitados por caracteres "delimitadores"';
$strOptimizeTable = 'Optimizar tabela';
$strOptionalControls = 'Opcional. Controla como ler e escrever caracteres especiais.';
$strOptionally = 'OPCIONAL';
$strOr = 'Ou';
$strOverhead = 'Sobre Carga'; //to translate -> How is this word used in the program?

$strPartialText = 'Textos parciais';
$strQueryOnDb = 'SQL-query na base ';
$strPassword = 'Senha';
$strPasswordEmpty = 'A senhas est� vazia!';
$strPasswordNotSame = 'As senhas n�o s�o a mesma!';
$strPHPVersion = 'Vers�o do PHP';
$strPmaDocumentation = 'Documenta��o do phpMyAdmin ';
$strPos1 = 'In�cio';
$strPrevious = 'Anterior';
$strPrimary = 'Prim�ria';
$strPrimaryKey = 'Chave Prim�ria';
$strPrimaryKeyHasBeenDropped = 'A chave prim�ria foi deletada'; 
$strPrintView = 'Visualiza��o para Impress�o';
$strPrivileges = 'Privil�gios';
$strProperties = 'Propriedades';

$strQBE = 'Procura por Exemplo';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strRecords = 'Registros';
$strReloadFailed = 'Reinicializa��o do MySQL falhou.';
$strReloadMySQL = 'Reinicializa o MySQL';
$strRememberReload = 'Lembre-se recarregar o servidor.';
$strRenameTable = 'Renomeia a tabela para ';
$strRenameTableOK = 'Tabela %s renomeada para %s';
$strRepairTable = 'Reparar tabela';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os dados da tabela pelos do arquivo';
$strReset = 'Resetar';
$strReType = 'Re-digite';
$strRevoke = 'Revogar';
$strRevokeGrant = 'Revogar Privil�gio de Conceder';
$strRevokeGrantMessage = 'Voc� revogou o privil�gio de conceder para %s';
$strRevokeMessage = 'Voc� revogou os privil�gios para %s';
$strRevokePriv = 'Revogar Privil�gios';
$strRowLength = 'Tamanho da Coluna';
$strRows = 'Colunas';
$strRowsFrom = 'colunas come�ando de';
$strRowSize = ' Tamanho do registro ';
$strRowsStatistic = 'Estatist�cas da Coluna';
$strRunning = 'Rodando em %s';
$strRunQuery = 'Envia Query';
$strRunSQLQuery = 'Fazer procura(s) SQL no banco de dados %s'; 

$strSave = 'Salva';
$strSelect = 'Procura';
$strSelectFields = 'Selecione os campos (no m�nimo 1)';
$strSelectNumRows = 'in query';
$strSend = 'Envia';
$strSequence = 'Sequ�ncia';
$strServerChoice = 'Sele��o da Base';
$strServerVersion = 'Vers�o do Servidor';
$strShow = 'Mostrar';
$strShowingRecords = 'Mostrando registros ';
$strShowPHPInfo = 'Mostra informa��es do PHP';
$strShowThisQuery = ' Mostra esta query novamente ';
$strSingly = '(singly)'; //to translate
$strSize = 'Tamanho';
$strSort = 'Ordena';
$strSpaceUsage = 'Uso do espa�o';
$strSQLQuery = 'comando SQL';
$strStartingRecord = 'Registro inicial'; 
$strStatement = 'Comandos';
$strStrucCSV = 'Dados CSV';
$strStrucData = 'Estrutura e dados';
$strStrucDrop = 'Adiciona \'Sobrescrever\'';
$strStrucExcelCSV = 'CSV para dados Ms Excel';
$strStrucOnly = 'Somente estrutura';
$strSubmit = 'Submete';
$strSuccess = 'Seu comando SQL foi executado com sucesso';
$strSum = 'Soma';

$strTable = 'tabela ';
$strTableComments = 'Coment�rios da tabela';
$strTableEmpty = 'O Nome da Tabela est� vazio!';
$strTableHasBeenDropped = 'Tabela %s foi deletada'; 
$strTableHasBeenEmptied = 'Tabela %s foi esvaziada'; 
$strTableMaintenance = 'Tabela de Manuten��o';
$strTables = '%s tabela(s)';
$strTableStructure = 'Estrutura da tabela';
$strTableType = 'Tipo da Tabela';
$strTextAreaLength = ' Por causa da sua largura,<br /> esse campo pode n�o ser edit�vel ';
$strTheContent = 'O conte�do do seu arquivo foi inserido';
$strTheContents = 'O conte�do do arquivo substituiu o conte�do da tabela que tinha a mesma chave prim�ria ou �nica';
$strTheTerminator = 'Terminador de campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Desmarca Todos';
$strUnique = '�nico';
$strUpdatePrivMessage = 'Voc� mudou os privil�ios para %s.';
$strUpdateQuery = 'Atualiza Query';
$strUsage = 'Uso';
$strUseBackquotes = 'Usa aspas simples nos nomes de tabelas e campos';
$strUser = 'Usu�rio';
$strUserEmpty = 'O nome do usu�rio est� vazio!';
$strUserName = 'Nome do usu�rio';
$strUsers = 'Usu�rios';
$strUseTables = 'Usar Tabelas';

$strValue = 'Valor';
$strViewDump = 'Ver o esquema da tabela';
$strViewDumpDB = 'Ver o esquema do banco de dados';

$strWelcome = 'Bem vindo ao %s';
$strWrongUser = 'Usu�rio ou Senha errado. Acesso Negado.';

$strYes = 'Sim';

// To translate
$strAfterInsertBack = 'Return';
$strAfterInsertNewInsert = 'Insert a new record';
$strBookmarkDeleted = 'The bookmark has been deleted.';
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strCopyTable = 'Copy table to (database<b>.</b>table):';
$strDatabaseHasBeenDropped = 'Database %s has been dropped.';  //to translate
$strFlushTable = 'Flush the table ("FLUSH")';
$strIdxFulltext = 'Fulltext';  //to translate 
$strInvalidName = '"%s" is a reserved word, you can\'t use it as a database/table/field name.'; //to translate
$strKeepPass = 'Do not change the password';//to translate
$strLogin = 'Login';
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
$strMySQLServerProcess = 'MySQL %pma_s1% running on %pma_s2% as %pma_s3%';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoQuery = 'No SQL query!';  //to translate
$strQueryOnDb = 'SQL-query on database <b>%s</b>:';
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').'; //to translate
$strShowAll = 'Show all'; // to translate
$strShowCols = 'Show columns';
$strShowTables = 'Show tables';
$strTableHasBeenFlushed = 'Table %s has been flushed';
$strUpdateProfile = 'Update profile:';//to translate
$strUpdateProfileMessage = 'The profile has been updated.';//to translate
$strWithChecked = 'With selected:'; //to translate
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
