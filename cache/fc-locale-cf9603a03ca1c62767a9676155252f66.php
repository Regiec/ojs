<?php return array (
  'plugins.importexport.medra.displayName' => 'Wtyczka eksportu/rejestracji mEDRA',
  'plugins.importexport.medra.description' => 'Eksportuj metadane numeru, artykułu lub pliku w formacie Onix dla DOI (O4DOI) w agencji rejestrującej DOI: mEDRA.',
  'plugins.importexport.medra.intro' => 'Jeżeli chcesz zarejestrować DOI w mEDRA, postępuj zgodnie z poniższymi wskazówkami
		<a href="http://www.medra.org/en/guide.htm" target="_blank">strona mEDRA</a>
		aby uzyskać nazwę użytkownika i hasło. Jeżeli nie posiadasz nazwy użytkownika i hasła nadal możesz eksportować dane w formacie mEDRA XML (Onix dla DOI)
		ale nie możesz zarejestrować DOI w mEDRA z poziomu OJS.',
  'plugins.importexport.medra.settings.form.description' => 'Skonfiguruj wtyczkę eksportu mEDRA:',
  'plugins.importexport.medra.settings.form.username' => 'Użytkownik',
  'plugins.importexport.medra.settings.form.usernameRequired' => 'Wprowadź nazwę użytkownika mEDRA. Nazwa użytkownika nie może zawierać dwukropka.',
  'plugins.importexport.medra.settings.form.registrantName' => 'Nazwa instytucji zarejestrowanej w mEDRA.',
  'plugins.importexport.medra.settings.form.registrantNameRequired' => 'Wprowadź instytucję, która jest zarejestrowana w mEDRA.',
  'plugins.importexport.medra.settings.form.fromFields' => 'Osoba odpowiedzialna za kontakt z mEDRA w sprawach technicznych:',
  'plugins.importexport.medra.settings.form.fromCompany' => 'Instytucja',
  'plugins.importexport.medra.settings.form.fromCompanyRequired' => 'Wprowadź instytucje, która jest technicznie odpowiedzialna za ekspoert DOI (np. instytucję zapewniającą hosting serwera).',
  'plugins.importexport.medra.settings.form.fromName' => 'Osoba do kontaktu',
  'plugins.importexport.medra.settings.form.fromNameRequired' => 'Wprowadź osobę do kontaktu w sprawach technicznych.',
  'plugins.importexport.medra.settings.form.fromEmail' => 'E-mail',
  'plugins.importexport.medra.settings.form.fromEmailRequired' => 'Wprowadź e-mail osoby do kontaktu w sprawach technicznych.',
  'plugins.importexport.medra.settings.form.publicationCountry' => 'Wybierz kraj, który będzie podany jako \'publication country\' w mEDRA.',
  'plugins.importexport.medra.settings.form.exportIssuesAs' => 'Wybierz, czy chcesz eksportować numery jako <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'works\' lub \'manifestations\'</a>.',
  'plugins.importexport.medra.settings.form.work' => 'work',
  'plugins.importexport.medra.settings.form.manifestation' => 'manifestation',
  'plugins.importexport.medra.settings.form.exportIssuesAs.label' => 'Numery eksportowane jako',
  'plugins.importexport.medra.settings.form.automaticRegistration.description' => 'OJS zarejestruje przypisane DOI automatycznie w mEDRA. Zauważ, że zadanie to zostanie wykonane zaraz po publikacji. Może sprawdzić, czy wszystkie dane zostały zarejestrowane.',
  'plugins.importexport.medra.settings.form.testMode.description' => 'Wykorzystaj testowy API mEDRA (środowisko tekstowe) do rejestracji DOI. Nie zapomnij usunąć tej opcji przed produkcją.',
  'plugins.importexport.medra.workOrProduct' => 'DOI przypisane do artykułów będzie eksportowane do mEDRA jako <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'works\'</a>. DOIs przypisane do plików będzie eksportowane jako <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'manifestations\'</a>.',
  'plugins.importexport.medra.senderTask.name' => 'zadanie automatycznej rejestracji w mEDRA',
  'plugins.importexport.medra.cliUsage' => 'Użycie: 
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...',
); ?>