<?php
/* $Id$ */

/**
 * Translated by Yukihiro Kawada <kawada at den.fujifilm.co.jp>
 */

$charset = 'euc-jp';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('バイト', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('日', '月', '火', '水', '木', '金', '土');
$month = array('1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y年 %B %d日 %H:%M';
$timespanfmt = '%s 日, %s 時, %s 分 %s 秒';

$strAPrimaryKey = '主キーが%sに追加されました。';
$strAbortedClients = '中断';
$strAbsolutePathToDocSqlDir = 'docSQLへの絶対パスを設定して下さい';
$strAccessDenied = 'アクセスは拒否されました。';
$strAction = '実行';
$strAddDeleteColumn = 'フィールド列の「追加／削除」';
$strAddDeleteRow = '条件行の「追加／削除」';
$strAddNewField = 'フィールドの追加';
$strAddPriv = '新しい特権の追加';
$strAddPrivMessage = '新しい特権を追加しました。';
$strAddPrivilegesOnDb = 'データベースへ特権の追加';
$strAddPrivilegesOnTbl = 'テーブルへ特権の追加';
$strAddSearchConditions = '検索条件文を追加してください。("where"の節文):';
$strAddToIndex = ' &nbsp;%s&nbsp;の列をインデックスに追加しました';
$strAddUser = 'ユーザーの追加';
$strAddUserMessage = 'ユーザーを追加しました。';
$strAddedColumnComment = 'カラムのコメント追加されました';
$strAddedColumnRelation = 'カラムのリレーションが追加されました';
$strAdministration = '管理';
$strAffectedRows = '影響された行数:';
$strAfter = '後に %s';
$strAfterInsertBack = '戻る';
$strAfterInsertNewInsert = '新レコードの追加';
$strAll = '全部';
$strAllTableSameWidth = '全てのテーブルを同じ幅で表示しますか?';
$strAlterOrderBy = 'テーブル順番の条件';
$strAnIndex = 'インデックスが%sに追加されていました。';
$strAnalyzeTable = 'テーブルを分析します。';
$strAnd = 'AND';
$strAny = '全て';
$strAnyColumn = '全列';
$strAnyDatabase = '全データベース';
$strAnyHost = '全てのホスト';
$strAnyTable = '全てのテーブル';
$strAnyUser = '全てのユーザー';
$strAscending = '昇順';
$strAtBeginningOfTable = 'テーブルの最初';
$strAtEndOfTable = 'テーブルの最後';
$strAttr = '表示';

$strBack = '戻る';
$strBeginCut = '切り取り開始';
$strBeginRaw = 'RAW開始';
$strBinary = ' バイナリ ';
$strBinaryDoNotEdit = ' バイナリ -  修正出来ません';
$strBookmarkDeleted = 'ブックマークを正常に削除しました。';
$strBookmarkLabel = 'ラベル';
$strBookmarkQuery = 'ブックマークされているSQLクエリー';
$strBookmarkThis = 'SQLクエリーをブックマークする';
$strBookmarkView = '表示のみ';
$strBrowse = '表示';
$strBzError = 'このphpバージョンはBz2拡張が壊れているのでphpMyAdminが圧縮ダンプ出来ません。phpMyAdminのコンフィグレーションファイルの<code>$cfg[\'BZipDump\']</code> を <code>FALSE</code>に設定して下さい。Bz2圧縮機能を使いたい場合にはphpのバージョンを上げて下さい。phpバグ報告 %s 詳細。';
$strBzip = '"bzipされる"';

$strCannotLogin = 'MySQLサーバーにログイン出来ません';
$strCantLoad = '扱えない拡張子のファイルです,<br />PHPの設定をチェックしてください。';
$strCantLoadMySQL = 'MySQLを実行できません。<br />PHPの設定を確認して下さい。';
$strCantLoadRecodeIconv = '文字セット変換を行うためには組み込まれていない iconv または GNU recode の拡張が必要です。php に、この拡張設定を行っておくか、phpMyAdminでは文字セット変換をしない設定にして下さい。';
$strCantRenameIdxToPrimary = 'インデックスの名前をPRIMARYに変更できません。';
$strCantUseRecodeIconv = 'iconv、libiconv、recode_stringのどの関数も使用出来ません。php の設定をチェックしてください。';
$strCardinality = 'カーディナリティ';
$strCarriage = 'キャリッジリターン: \\r';
$strChange = '変更';
$strChangeDisplay = '表示させるフィールドを選んで下さい';
$strChangePassword = 'パスワードの変更';
$strCharsetOfFile = 'ファイルの文字セット:';
$strCheckAll = '全てをマーク';
$strCheckDbPriv = 'データベースの特権の確認';
$strCheckPrivs = '特権のチェック';
$strCheckPrivsLong = 'データベース &quot;%s&quot; の特権チェック。';
$strCheckTable = 'テーブルをチェックします。';
$strChoosePage = '編集するページを選択して下さい';
$strColComFeat = '列コメント表示機能';
$strColumn = '列';
$strColumnNames = '列(コラム)名';
$strColumnPrivileges = 'コラム特定 特権';
$strCommand = 'コマンド';
$strComments = 'コメント';
$strCompleteInserts = '完全なINSERT文の作成';
$strCompression = '圧縮';
$strConfigFileError = 'phpMyAdminがコンフィグレーションファイルを読み込むことが出来ません！<br />文法エラーが起きたか、ファイルが見つかりません。<br />下のリンクからコンフィグレーションファイルを直接読み込んで、phpのエラーメッセージを確認して下さい。 大抵の場合、区切り文字やセミコロンを忘れています。<br />もし空白のページが現れたら全てうまく行っています。';
$strConfigureTableCoord = '%s テーブルのカーディナリティを設定して下さい';
$strConfirm = '実行しても良いですか？';
$strConnections = '接続';
$strCookiesRequired = 'ここから先はクッキーが許可されている必要があります。';
$strCopyTable = 'テーブルを(database<b>.</b>table)にコピーする:';
$strCopyTableOK = '%sテーブルを%sにコピーしました。';
$strCouldNotKill = 'phpMyAdminがスレッド%sを終了させることが出来ませんでした。多分、既に終了しています。';
$strCreate = '作成';
$strCreateIndex = '&nbsp;%s&nbsp;の列のインデックスの作成';
$strCreateIndexTopic = '新しいインデックスの作成';
$strCreateNewDatabase = '新しいDBを作成します。';
$strCreateNewTable = '現在のDBに新しいテーブルを作成します。 %s --> ';
$strCreatePage = '新規ページの作成';
$strCreatePdfFeat = 'PDF作成機能';
$strCriteria = '絞込み基準';

$strDBGContext = 'コンテキスト';
$strDBGContextID = 'コンテキストID';
$strDBGHits = 'ヒット';
$strDBGLine = '行';
$strDBGMaxTimeMs = '最大時間, ms';
$strDBGMinTimeMs = '最小時間, ms';
$strDBGModule = 'モジュール';
$strDBGTimePerHitMs = 'ヒット率, ms';
$strDBGTotalTimeMs = '総計時間, ms';
$strData = 'データ';
$strDataDict = 'データ辞書';
$strDataOnly = 'データのみ';
$strDatabase = 'データベース';
$strDatabaseHasBeenDropped = 'データベース%sを正常に削除しました。';
$strDatabaseWildcard = 'データベース(ワイルドカード使用可):';
$strDatabases = 'データベース';
$strDatabasesDropped = '%s データベースは削除されました。';
$strDatabasesStats = 'データベースの統計';
$strDatabasesStatsDisable = '統計を無効';
$strDatabasesStatsEnable = '統計を許可';
$strDatabasesStatsHeavyTraffic = '注意: データベース統計を許可するとMySQLとWEBサーバーの間で重いトラフィックが発生するかもしれません。';
$strDbPrivileges = 'データベース特定 特権';
$strDefault = '基本値';
$strDefaultValueHelp = 'デフォルト値のために、バックスラッシュエスケープや引用符なしの1個だけの値を入れて下さい, このフォーマットは: a';
$strDelete = '削除';
$strDeleteAndFlush = 'ユーザーを削除して特権をリロードします。';
$strDeleteAndFlushDescr = 'これはクリアーです。特権をリロードするので少々時間がかかります。';
$strDeleteFailed = '削除に失敗しました';
$strDeleteUserMessage = 'ユーザー%sを削除しました。';
$strDeleted = '選択した列を削除しました。';
$strDeletedRows = '削除された行数:';
$strDeleting = '%s を削除中';
$strDescending = '降順';
$strDisabled = '無効';
$strDisplay = '表示';
$strDisplayFeat = 'テーブル情報表示機能';
$strDisplayOrder = '発表順番:';
$strDisplayPDF = 'PDFスキーマの表示';
$strDoAQuery = '"例のQUERY"を実行 (wildcard: "%")';
$strDoYouReally = '本当に実行しても良いですか？ --> ';
$strDocu = 'ヘルプ';
$strDrop = '削除';
$strDropDB = 'データベース%sの削除 ';
$strDropSelectedDatabases = '選択されたデータベースの削除';
$strDropTable = 'テーブルの削除';
$strDropUsersDb = 'ユーザーと同じ名前を持つデータベースを削除します。';
$strDumpXRows = '%s 列をダンプ。始める列は %s.';
$strDumpingData = 'テーブルのダンプデータ';
$strDynamic = 'ダイナミック';

$strEdit = '修正';
$strEditPDFPages = 'PDFの編集 ページ';
$strEditPrivileges = '特権を修正';
$strEffective = '実効';
$strEmpty = '空にする';
$strEmptyResultSet = 'MySQLが空の値を返しました。(例えば行が空とか).';
$strEnabled = '有効';
$strEncto = 'エンコーディングへ変換する'; // encoding convert
$strEnd = '最後';
$strEndCut = '切り取り終了';
$strEndRaw = 'RAW終了';
$strEnglishPrivileges = ' 注意: MySQLの特権の名前は英語で表示しています。';
$strError = 'エラー';
$strExplain = 'Explain SQL';
$strExport = 'エクスポート';
$strExportToXML = 'XML形式でエクスポート';
$strExtendedInserts = '長いINSERT文の作成';
$strExtra = '追加';

$strFailedAttempts = '失敗しました';
$strField = 'フィールド';
$strFieldHasBeenDropped = 'フィールド%sが正常に削除されました';
$strFields = 'フィールド';
$strFieldsEmpty = ' フィールド数は空です。 ';
$strFieldsEnclosedBy = 'フィールド囲み記号';
$strFieldsEscapedBy = 'フィールドのエスケープ記号';
$strFieldsTerminatedBy = 'フィールド区切り記号';
$strFileCouldNotBeRead = 'ファイルを読めません';
$strFixed = '固定';
$strFlushPrivilegesNote = '注意: phpMyAdmin はMySQLの特権テーブルから直接にユーザー特権を得ます。もしマニュアルで特権が変更されていると、このテーブルの内容とは異なるかもしれません。この場合、続けるまえに %s特権リロード%s をする必要があります。';
$strFlushTable = 'テーブルのキャッシュを空にする("FLUSH")';
$strFormEmpty = 'フォームでは値がありませんでした。';
$strFormat = 'フォーマット';
$strFullText = '全文';
$strFunction = '関数';

$strGenBy = '生成された by';
$strGenTime = '作成の時間';
$strGeneralRelationFeat = 'リレーション機能';
$strGlobalPrivileges = 'グローバル特権';
$strGlobalValue = 'グローバル値';
$strGo = '実行';
$strGrantOption = 'Grant';
$strGrants = '付与';
$strGzip = '"gzipされる"';

$strHasBeenAltered = 'を変更しました。';
$strHasBeenCreated = 'を作成しました。';
$strHaveToShow = '表示するために、少なくてもひとつのカラムを選択しなければなりません。';
$strHome = 'メーンページへ';
$strHomepageOfficial = 'phpMyAdminホーム';
$strHomepageSourceforge = 'SourceforgeのphpMyAdminダウンロードページ';
$strHost = 'ホスト';
$strHostEmpty = 'ホスト名は空です!';

$strId = 'ID';
$strIdxFulltext = '全文';
$strIfYouWish = 'テーブルのコラム(列)にデータを追加する場合は、フィールドリストをカンマで区分してください。';
$strIgnore = '無視';
$strIgnoringFile = 'ファイルを無視 %s';
$strImportDocSQL = 'docSQLファイルインポート';
$strImportFiles = 'インポートファイル';
$strImportFinished = 'インポートが終了しました';
$strInUse = '使用中';
$strIndex = 'インデックス';
$strIndexHasBeenDropped = 'インデックス%sが削除されました';
$strIndexName = 'インデックス名&nbsp;:';
$strIndexType = 'インデックスのタイプ&nbsp;:';
$strIndexes = 'インデックス数';
$strInsecureMySQL = 'あなたのコンフィグレーションファイルの設定がMySQLデフォルトの特権アカウントになっています (rootユーザでパスワードなし) 。 MySQLサーバーもこのデフォルト設定で動作しているので、侵入者に対して無防備です。このセキュリティーホールは必ず閉ざして下さい。';
$strInsert = '追加';
$strInsertAsNewRow = '新しい行としての追加';
$strInsertNewRow = '新しい行の追加';
$strInsertTextfiles = 'テーブルにテキストファイルの追加';
$strInsertedRows = '追加された行数:';
$strInstructions = '実施例';
$strInvalidName = '"%s"は予約語ですから「データベース／テーブル／フィールド」名には使えません。';

$strJumpToDB = '&quot;%s&quot; データベースへジャンプ.';
$strJustDelete = '特権テーブルからユーザーを即削除します。';
$strJustDeleteDescr = '&quot;削除済&quot; ユーザーは特権がリロードされるまでサーバーにアクセス可能です。';

$strKanjiEncodConvert = '漢字コード変換'; // kanji code convert
$strKeepPass = 'パスワードを変更しない';
$strKeyname = 'キー名';
$strKill = '停止';

$strLaTeX = 'LaTeX';
$strLandscape = 'ランドスケープ';
$strLength = '長さ';
$strLengthSet = '長さ/セット*';
$strLimitNumRows = 'ページの最大レコード数';
$strLineFeed = '改行文字: \\n';
$strLines = '行';
$strLinesTerminatedBy = '行の終端記号';
$strLinkNotFound = 'リンクが見つかりません';
$strLinksTo = 'リンク';
$strLocalhost = 'ローカル';
$strLocationTextfile = 'テキストファイルの場所';
$strLogPassword = 'パスワード:';
$strLogUsername = 'ユーザー名:';
$strLogin = 'ログイン';
$strLoginInformation = 'ログイン情報';
$strLogout = 'ログアウト';

$strMissingBracket = '括弧がありません';
$strModifications = 'を正しく修正しました。';
$strModify = '修正';
$strModifyIndexTopic = 'インデックスの変更';
$strMoreStatusVars = 'さらに変数の状態';
$strMoveTable = 'テーブルを(database<b>.</b>table)に移動:';
$strMoveTableOK = 'テーブル%sが%s移動されました。';
$strMySQLCharset = 'MySQLの文字セット';
$strMySQLReloaded = 'MySQLを新しく読み込みました。';
$strMySQLSaid = 'MySQLのメッセージ --> ';
$strMySQLServerProcess = 'MySQL %pma_s1%は%pma_s2%上%pma_s3%として実行しています。';
$strMySQLShowProcess = 'MySQLプロセスの表示';
$strMySQLShowStatus = 'MySQLのランタイム情報';
$strMySQLShowVars = 'MySQLのシステム変数';

$strName = '名前';
$strNext = '次へ';
$strNo = 'いいえ';
$strNoDatabases = 'データベース数';
$strNoDatabasesSelected = 'データベースが選択されていません。';
$strNoDescription = '記述がありません';
$strNoDropDatabases = '"DROP DATABASE"ステートメントは禁止される。';
$strNoExplain = 'Explain SQLをスキップ';
$strNoFrames = 'phpMyAdminは<b>フレーム</b>をサポートしたブラウザでの利用をお勧めします。';
$strNoIndex = 'インデックスは設定されていません。';
$strNoIndexPartsDefined = 'インデックスの部分は設定されていません。';
$strNoModification = '変更無し';
$strNoPassword = 'パスワード無し';
$strNoPhp = 'PHPコード無し';
$strNoPrivileges = '特権無し';
$strNoQuery = 'SQLクエリー無し';
$strNoRights = '現在特権を持ってないのでここに入れません。';
$strNoTablesFound = '現在のDBにテーブルはありません。';
$strNoUsersFound = '該当ユーザーは見つかりませんでした。';
$strNoUsersSelected = 'ユーザーが選択されていません。';
$strNoValidateSQL = 'SQL検証をスキップ';
$strNone = '無し';
$strNotNumber = 'これは番号ではありません。';
$strNotOK = 'OKじゃない';
$strNotSet = '<b>%s</b> テーブルが見つからないか、%s がありません。';
$strNotValidNumber = ' は行の正しい番号ではありません ';
$strNull = '空の値(Null)';
$strNumSearchResultsInTable = '%s 件が <i>%s</i>テーブルで見つかりました';
$strNumSearchResultsTotal = '<b>件数:</b> <i>%s</i> が見つかりました';
$strNumTables = 'テーブル';

$strOK = 'OK';
$strOftenQuotation = '引用符号です。オプションは、charまたはvarcharフィールドのみ" "で囲まれていることを意味します。';
$strOperations = '操作';
$strOptimizeTable = 'テーブルを最適化します。';
$strOptionalControls = '特殊文字の読み込み/書き込みオプション';
$strOptionally = 'オプションです。';
$strOptions = 'オプション';
$strOr = 'OR';
$strOverhead = 'オーバーヘッド';

$strPHP40203 = 'あなたはマルチバイト文字(mbstring)の扱いに重大なバグのあるPHP 4.2.3を使っています。PHPのバグレポート19404です。phpMyAdminを使うなら、このバージョンのPHPはお奨めしません...と言うかpatchをあてないと動きません。';
$strPHPVersion = 'PHP バージョン';
$strPageNumber = 'ページ番号:';
$strPartialText = '部分的な文書';
$strPassword = 'パスワード';
$strPasswordChanged = 'パスワードは %s 変更されました。';
$strPasswordEmpty = 'パスワードが空です。';
$strPasswordNotSame = 'パスワードが同じではありません。';
$strPdfDbSchema = '"%s" データベース - %s頁の図';
$strPdfInvalidPageNum = 'PDFページが未定義！';
$strPdfInvalidTblName = '"%s" テーブルがありません!';
$strPdfNoTables = 'テーブルがありません';
$strPerHour = '時毎';
$strPhp = 'PHPコードの作成';
$strPmaDocumentation = 'phpMyAdminのドキュメント';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> を必ずconfigファイルの中で設定して下さい!';
$strPortrait = 'ポートレイト';
$strPos1 = '最初';
$strPrevious = '以前';
$strPrimary = '主要';
$strPrimaryKey = '主キー';
$strPrimaryKeyHasBeenDropped = '主キーを削除しました。';
$strPrimaryKeyName = '主キーの名前は... PRIMARYではなければいけません。';
$strPrimaryKeyWarning = '("PRIMARY"はちょうど主キーの名前ではなければいけません。';
$strPrint = '印刷';
$strPrintView = '印刷用表示';
$strPrivDescAllPrivileges = 'GRANTを除く全ての特権を含みます。';
$strPrivDescAlter = '存在するテーブル構造の変更を許可します。';
$strPrivDescCreateDb = '新しいデータベース、テーブルの作成を許可します。';
$strPrivDescCreateTbl = '新しいテーブルの作成を許可します。';
$strPrivDescCreateTmpTable = 'テンポラリーテーブルの作成を許可します。';
$strPrivDescDelete = 'データの削除を許可します。';
$strPrivDescDropDb = 'データベースとテーブルの削除を許可します。';
$strPrivDescDropTbl = 'テーブルの削除を許可します。';
$strPrivDescExecute = 'ストアードプロシジャーが走るのを許可します; このMySQL版では意味ありません。';
$strPrivDescFile = 'データのインポート、データのファイルへのエクスポートを許可します。';
$strPrivDescGrant = '特権テーブルのリロードなしにユーザー、特権の追加を許可します。';
$strPrivDescIndex = 'インデックスの作成、削除を許可します。';
$strPrivDescInsert = 'データの挿入、入れ替えを許可します。';
$strPrivDescLockTables = '現在のスレッドのロッキングテーブルを許可します。';
$strPrivDescMaxConnections = '1時間内に新しく接続可能な数を制限します。';
$strPrivDescMaxQuestions = '1時間内にサーバーにクエリを送れる数を制限します。';
$strPrivDescMaxUpdates = '1時間内にテーブル、データベースに対しての変更が発生するコマンドの数を制限します。';
$strPrivDescProcess3 = '他のユーザープロセスを停止出来ることを許可します。';
$strPrivDescProcess4 = 'プロセスリスト中の完全なクエリの表示を許可します。';
$strPrivDescReferences = 'このMySQLバージョンでは意味ありません。';
$strPrivDescReload = 'サーバーのリロード、キャッシュのクリアを許可します。';
$strPrivDescReplClient = 'スレーブかマスターを要求できる権利をユーザーに与えます。';
$strPrivDescReplSlave = 'レプリケーションスレーブが必要です。';
$strPrivDescSelect = 'データの読み出し許可。';
$strPrivDescShowDb = 'データベースの完全なリストへのアクセス件を与えます。';
$strPrivDescShutdown = 'サーバーのシャットダウンを許可します。';
$strPrivDescSuper = '最大の接続数に達しても接続を許可します。多くの管理操作はグローバル変数や他ユーザープロセスの終了が出来るような設定が必要です。';
$strPrivDescUpdate = 'データの修正を許可します。';
$strPrivDescUsage = '特権がありません。';
$strPrivileges = '特権';
$strPrivilegesReloaded = '特権はリロードされました。';
$strProcesslist = 'プロセスリスト';
$strProperties = 'プロパティ';
$strPutColNames = '最初の1行目にフィールド名を追加';

$strQBE = 'クエリー';
$strQBEDel = '削除';
$strQBEIns = '挿入';
$strQueryOnDb = 'データベースのSQLクエリー <b>%s</b>:';
$strQueryStatistics = '<b>クエリー統計</b>: その始めから, %s クエリーがサーバーに送られるまで。';
$strQueryType = 'クエリータイプ';

$strReType = '再記入';
$strReceived = '受信済';
$strRecords = 'レコード数';
$strReferentialIntegrity = '結合項目のチェック:';
$strRelationNotWorking = 'リレーション機能を動かすためのリンクテーブルが有効になっていません。 %sここ%sをクリックして原因を見つけて下さい。';
$strRelationView = 'リレーション表示';
$strRelationalSchema = 'リレーショナルスキーマ';
$strReloadFailed = 'MySQLのリロードに失敗しました。';
$strReloadMySQL = 'MySQLのリロード';
$strReloadingThePrivileges = '特権をリロード中';
$strRememberReload = 'サーバーのリロードを忘れないで下さい。';
$strRemoveSelectedUsers = '選択されたユーザーを削除します';
$strRenameTable = 'テーブル名の変更';
$strRenameTableOK = '%sを%sに名前を変更しました。';
$strRepairTable = 'テーブルを復旧します。';
$strReplace = '置き換える';
$strReplaceTable = 'ファイルでテーブルを置き換える';
$strReset = 'リセット';
$strResourceLimits = '    リソースの制限';
$strRevoke = '廃止';
$strRevokeAndDelete = 'ユーザーから有効な特権を全て破棄して削除します。';
$strRevokeAndDeleteDescr = 'ユーザーは特権リロードするまでUSAGE特権のままです。';
$strRevokeGrant = ' 付与の取消';
$strRevokeGrantMessage = '%sの付与特権を取消しました。';
$strRevokeMessage = '%sの特権を取消しました';
$strRevokePriv = '特権の取消';
$strRowLength = '行の長さ';
$strRowSize = ' 行のサイズ ';
$strRows = '行';
$strRowsFrom = '開始行';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = '方向: %s : %s 列ずつヘッダーを繰り返し発表する';
$strRowsModeVertical = '重直';
$strRowsStatistic = '行の統計';
$strRunQuery = 'クエリーの実行';
$strRunSQLQuery = 'データベース%sにSQLクエリー実行';
$strRunning = 'が実行中です。 %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'あなたはSQLパーサーでバグを見つけられるかもしれません。あなたのクエリーを念入りに確かめて、引用符が正しくミスマッチがないかチェックしましょう。その他の失敗にはテキストエリアで引用した外側にバイナリーコードが付いてファイルがアップロードされてしまったような原因が考えられます。また、あなたのクエリーをMySQLのコマンドラインを使って試すことも出来ます。MySQLサーバーは以下のようにエラーを出します。そこには問題を解決する手助けがあるでしょう。コマンドラインでは成功しても、まだ問題がある場合、パーサーが失敗する場合には、問題のあるSQLクエリーをひとつの文に減らしてみて下さい。そして以下のセクションでデータを切り取ってBUG報告を送って下さい:';
$strSQLParserUserError = 'あなたのSQLクエリーにエラーがあります。MySQLサーバーは以下のようにエラーを出します。そこには問題を解決する手助けがあるでしょう。';
$strSQLQuery = '実行されたSQLクエリー';
$strSQLResult = 'SQLの結果';
$strSQPBugInvalidIdentifer = '認証が無効です';
$strSQPBugUnclosedQuote = '引用符が閉じていない';
$strSQPBugUnknownPunctuation = '無効な句読点文字です';
$strSave = '保存';
$strScaleFactorSmall = '１ページ内に図表を配置させるためには大きさが小さ過ぎます';
$strSearch = '検索';
$strSearchFormTitle = 'データベース内の検索';
$strSearchInTables = 'テーブルの指定:';
$strSearchNeedle = '検索する単語、または値 (ワイルドカードは: "%"):';
$strSearchOption1 = 'いずれかの単語を含む';
$strSearchOption2 = '全ての単語を含む';
$strSearchOption3 = '正確なフレーズ';
$strSearchOption4 = '正規表現';
$strSearchResultsFor = '検索結果 "<i>%s</i>" %s:';
$strSearchType = '検索条件:';
$strSelect = '選択';
$strSelectADb = 'データベースを選択してください';
$strSelectAll = '全選択';
$strSelectFields = 'フィールドの選択(一つ以上):';
$strSelectNumRows = 'クエリー';
$strSelectTables = 'テーブルの選択';
$strSend = 'ファイルに落とす';
$strSent = '送信';
$strServer = 'サーバー %s';
$strServerChoice = 'サーバーの選択';
$strServerStatus = 'ランタイム情報';
$strServerStatusUptime = 'このMySQLサーバーは %s にて動作中。  %sから開始してます。';
$strServerTabProcesslist = 'プロセス';
$strServerTabVariables = '変数';
$strServerTrafficNotes = '<b>サーバートラフィック</b>: このテーブルはMySQLサーバーが起動してからのネットワークトラフィックの統計を表示します。';
$strServerVars = 'サーバー変数と設定値';
$strServerVersion = 'サーバーのバージョン';
$strSessionValue = 'セッション値';
$strSetEnumVal = 'フィールドタイプが"enum"又は"set"の場合は値をこのフォーマットを使って入力して下さい: \'a\',\'b\',\'c\'...<br />バックスラッシュ「"\"」又はクオート「"\'"」を入力したいと、頭にバックスラッシュを付けて下さい「例: \'\\\\xyz\' or \'a\\\'b\'」。';
$strShow = '表示';
$strShowAll = '全て発表';
$strShowColor = '色表示';
$strShowCols = '列の発表';
$strShowDatadictAs = 'データ辞書フォーマット';
$strShowGrid = 'グリッドの表示';
$strShowPHPInfo = 'PHP情報';
$strShowTableDimension = 'テーブルの大きさを表示';
$strShowTables = 'テーブルの発表';
$strShowThisQuery = ' 実行したクエリーをここに表示する ';
$strShowingRecords = 'レコード表示';
$strSingly = '(一回)';
$strSize = 'サイズ';
$strSort = 'ソート';
$strSpaceUsage = 'ディスク使用量';
$strSplitWordsWithSpace = '各単語はスペース文字(" ")で区切って下さい';
$strStatement = 'ステートメント';
$strStatus = '状態';
$strStrucCSV = 'CSVデータ';
$strStrucData = '構造とデータ';
$strStrucDrop = '\'drop table\'を追加';
$strStrucExcelCSV = 'Ms ExcelへのCSVデータ';
$strStrucOnly = '構造のみ';
$strStructPropose = 'テーブル構造の確認';
$strStructure = '構造';
$strSubmit = '実行';
$strSuccess = 'SQLクエリーが正常に実行されました。';
$strSum = '合計';

$strTable = 'テーブル ';
$strTableComments = 'テーブルの説明';
$strTableEmpty = 'テーブル名は空です。';
$strTableHasBeenDropped = 'テーブル%sを削除しました。';
$strTableHasBeenEmptied = 'テーブル%sを空にしました。';
$strTableHasBeenFlushed = 'テーブル%sのキャッシュを空にしました。';
$strTableMaintenance = 'テーブル管理';
$strTableOfContents = 'テーブルの内容';
$strTableStructure = 'テーブルの構造';
$strTableType = 'テーブルのタイプ';
$strTables = '%sテーブル';
$strTblPrivileges = 'テーブル特定 特権';
$strTextAreaLength = ' 長さの所為でこのフィールドを<br /> 修正出来ない可能性があります ';
$strTheContent = 'ファイルのデータを挿入しました。';
$strTheContents = 'ファイルのデータで、選択したテーブルの主要キーまたは唯一なキーに一致する列を置き換えます。';
$strTheTerminator = 'フィールドの終端記号です。';
$strThisHost = 'このホスト';
$strThisNotDirectory = 'これはディレクトリではありません';
$strThreadSuccessfullyKilled = 'スレッド %s は終了しました。';
$strTime = '時間';
$strTotal = '合計';
$strTotalUC = '合計';
$strTraffic = 'トラフィック';
$strType = 'フィールドタイプ';

$strUncheckAll = '全てのマークを削除';
$strUnique = '唯一';
$strUnselectAll = '全解放';
$strUpdatePrivMessage = '%sの特権をアップデートしました。';
$strUpdateProfile = 'プロファイルのアップデート:';
$strUpdateProfileMessage = 'プロファイルをアップデートしました。';
$strUpdateQuery = 'クエリーのアップデート';
$strUsage = '使用量';
$strUseBackquotes = '逆クオートでテーブル名やフィールド名を囲む';
$strUseTables = '使うテーブル';
$strUseTextField = 'テキストフィールドを使用';
$strUser = 'ユーザー';
$strUserAlreadyExists = 'ユーザー %s は既に存在します!';
$strUserEmpty = 'ユーザー名は空です。';
$strUserName = 'ユーザー名';
$strUserNotFound = '選択されたユーザーは特権テーブルに見つかりませんでした。';
$strUserOverview = 'ユーザー概観';
$strUsers = 'ユーザー';
$strUsersDeleted = '選択されたユーザーは削除されました。';

$strValidateSQL = 'SQLの検証';
$strValidatorError = 'SQL検証機能の初期化が出来ません。%sdocumentation%sに記述されているようにPHP拡張ライブラリがインストールされているかチェックして下さい。';
$strValue = '値';
$strVar = '変数';
$strViewDump = 'テーブルのダンプ(スキーマ)表示';
$strViewDumpDB = 'DBのダンプ(スキーマ)表示';

$strWebServerUploadDirectory = 'webサーバー上でアップロード';
$strWebServerUploadDirectoryError = 'アップロードを行うディレクトリがありません。。';
$strWelcome = '%sへようこそ';
$strWithChecked = 'チェックしたものを:';
$strWritingCommentNotPossible = 'コメントの書き込みが有効ではありません';
$strWritingRelationNotPossible = 'リレーションの書き込みが有効ではありません';
$strWrongUser = 'ユーザ名またはパスワードが正しくありません。<br />アクセスは拒否されました。';

$strXkana = '全角カナへ変換する'; // convert to X208-kana

$strYes = 'はい';

$strZeroRemovesTheLimit = '注意: オプションを 0 (ゼロ)に設定すると制限がなくなります。';
$strZip = '"zipされる"';

// To translate

$strDbSpecific = 'database-specific';  //to translate

$strGlobal = 'global';  //to translate

$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate

$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strAutomaticLayout = 'Automatic layout';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateRemember = 'remember template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
?>
