<?php return array (
  'plugins.importexport.users.displayName' => 'Wtyczka do importu/eksportu użytkowników w XML',
  'plugins.importexport.users.description' => 'Import i eksport użytkowników',
  'plugins.importexport.users.import.importUsers' => 'Importuj użytkowników',
  'plugins.importexport.users.import.failedToImportUser' => 'Błąd importowania użytkowników',
  'plugins.importexport.users.import.failedToImportRole' => 'Błąd przydzielania roli dla użytkownika',
  'plugins.importexport.users.import.dataFile' => 'Plik danych użytkownika',
  'plugins.importexport.users.cliUsage' => 'Użycie: {$scriptName} {$pluginName} [command] ...
Komendy:
	import [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [userId1] [userId2] ...',
  'plugins.importexport.users.cliUsage.examples' => 'Przykłady:
	Importuj użytkowników myJournal z myImportFile.xml:
	{$scriptName} {$pluginName} import myImportFile.xml myJournal

	Eksportuj wszystkich użytkowników z myJournal:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal

	Eksportuj użytkowników z ID:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal 1 2',
  'plugins.importexport.users.import.instructions' => 'Wybierz plik z danymi w formacie XML zawierający informacje o użytkowniku, celem ich zaimportowania do tego czasopisma<br /><br />Sprawdź, czy plik do zaimportowania zawiera nazwę użytkownika lub adres e-mail, które już istnieją w systemie. Takie dane nie mogą być zaimportowane.',
  'plugins.importexport.users.import.sendNotify' => 'Wyślij e-mail z powiadomieniem zawierającym nazwę użytkownika i hasło do każdego zaimportowanego użytkownika.',
  'plugins.importexport.users.import.continueOnError' => 'Kontynuuj import użytkowników jeżeli nastąpi problem.',
  'plugins.importexport.users.import.usersWereImported' => 'Następujący użytkownicy zostali zaimportowani do systemu.',
  'plugins.importexport.users.import.errorsOccurred' => 'Wystąpił błąd podczas importu',
  'plugins.importexport.users.import.confirmUsers' => 'Potwierdź, że ci użytkownicy chcą być zaimportowani do systemu',
  'plugins.importexport.users.import.warning' => 'Uwaga',
  'plugins.importexport.users.import.encryptionMismatch' => 'Nie możesz używać haseł z {$importHash}; OJS jest skonfigurowany do używania {$ojsHash}. Jeżeli chcesz kontynuować, musisz zresetować zaimportowane hasła użytkowników.',
  'plugins.importexport.users.unknownPress' => 'Została podana nieznana ścieżka czasopisma "{$journalPath}".',
  'plugins.importexport.users.export.exportUsers' => 'Eksportuj użytkowników',
  'plugins.importexport.users.export.exportByRole' => 'Eksportuj według roli',
  'plugins.importexport.users.export.exportAllUsers' => 'Eksportuj wszystkich',
  'plugins.importexport.users.export.errorsOccurred' => 'Wystąpiły błędy podczas eksportu',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Nie można zapisać do pliku "{$fileName}".',
  'plugins.importexport.users.importComplete' => 'Import zakończony. Zostali zaimportowani użytkownicy, których nazwy i adresy e-mail nie znajdowały się wcześniej w systemie.',
  'plugins.importexport.users.results' => 'Wyniki',
  'plugins.importexport.users.uploadFile' => 'Prześlij plik "Import" w celu kontynuowania',
); ?>