<?php return array (
  'plugins.importexport.native.displayName' => 'Wtyczka natywnego XML',
  'plugins.importexport.native.description' => 'Importuje i eksportuje artykuły i numery z OJS w natywnym formacie XML.',
  'plugins.importexport.native.import' => 'Import',
  'plugins.importexport.native.import.instructions' => 'Prześlij plik XML do importu',
  'plugins.importexport.native.exportSubmissionsSelect' => 'Wybierz artykuły do eksportu',
  'plugins.importexport.native.exportSubmissions' => 'Eksportuj artykuły',
  'plugins.importexport.native.exportIssues' => 'Eksportuj numery',
  'plugins.importexport.native.results' => 'Wyniki',
  'plugins.inportexport.native.uploadFile' => 'Prześlij plik pod "Import", aby kontynuować.',
  'plugins.importexport.native.importComplete' => 'Import ukończony z sukcesem. Poniższe pozycje zostały zaimportowane:',
  'plugins.importexport.native.cliUsage' => 'Użycie: {$scriptName} {$pluginName} [command] ...
Komendy:
	import [xmlFileName] [journal_path] [user_name] ...
	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	export [xmlFileName] [journal_path] article [articleId]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]

Dodatkowe parametry są wymagane do zaimportowania danych, w zależności od korzenia węzła w dokumencie XML.

Jeżeli korzeniem jest <article> lub <articles>, wymagane są dodatkowe parametry.
Akceptowane są następujące formaty:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]',
  'plugins.importexport.native.error.unknownSection' => 'Nieznany dział {$param}',
  'plugins.importexport.native.error.unknownUser' => 'Określony użytkownik nie istnieje: "{$userName}".',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'Tytuł działu "{$section1Title}" oraz tytuł działu "{$section2Title}" w numerze "{$issueTitle}" połączyły się z różnymi istniejącymi działami w czasopiśmie.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'Tytuł działu "{$section1Title}" w numerze "{$issueTitle}" połączył się z istniejącym działem czasopisma, ale inny tytuł działu nie łączy się z innym tytułem istniejącego działu w czasopiśmie.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'Skrót działu "{$section1Abbrev}" i skrót działu "{$section2Abbrev}" w numerze "{$issueTitle}" połączyły się z różnymi istniejącymi działami w czasopiśmie.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'Skrót działu "{$sectionAbbrev}" w numerze "{$issueTitle}" połączył się z istniejącym działem czasopisma, ale inny skrót tego działu nie połączył się z innym skrótem istniejącego działu czasopisma.',
  'plugins.importexport.native.import.error.issueIdentificationMatch' => 'Żaden lub więcej niż jeden numer jest połączony z podanych identyfikatorem numeru: "{$issueIdentification}".',
  'plugins.importexport.native.import.error.issueIdentificationDuplicate' => 'Istniejący numer  {$issueId} jest połączony z podanym identyfikatorem: "{$issueIdentification}".  Ten numer nie może być modyfikowany, ale można do niego dodawać artykuły.',
  'plugins.importexport.native.import.error.issueIdentificationMissing' => 'Brakuje elementu identyfikatora w artykule "{$articleTitle}".',
  'plugins.importexport.native.import.error.publishedDateMissing' => 'Artykuł "{$articleTitle}" jest umieszczony w numerze, ale nie posiada daty publikacji.',
); ?>