<?php return array (
  'plugins.importexport.crossref.description' => 'Eksportuj lub zarejestruj metadane artykułu w formacie CrossRef.',
  'plugins.importexport.crossref.displayName' => 'Wtyczka eksportu/rejestracji CrossRef',
  'plugins.importexport.crossref.requirements' => 'Wymagania',
  'plugins.importexport.crossref.requirements.satisfied' => 'Wszystkie wymagania wtyczki zostały spełnione.',
  'plugins.importexport.crossref.error.publisherNotConfigured' => 'Organizacja wydająca czasopismo nie została skonfigurowana! Musisz uzupełnić brakujące elementy <a href="{$journalSettingsUrl}" target="_blank">na stronie konfiguracji czasopisma</a> w kroku 1.5.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'Elementy wymagane dla poprawnego deponowania CrossRef.',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Nazwa organizacji deponującej',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'Email organizacji deponującej',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Podaj nazwę organizacji deponującej.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Podaj email organizacji deponującej.',
  'plugins.importexport.crossref.settings.form.username' => 'Nazwa użytkownika',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Podaj nazwę użytkownika którą otrzymałeś od CrossRef.',
  'plugins.importexport.crossref.senderTask.name' => 'Zadanie automatycznej rejestracji CrossRef',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'OJS deponuje DOI automatycznie do CrossRef w momencie publikacji artykułów. Pamiętaj, że proces deponowania może zająć chwilę. Możesz sprawdzić wszystkie niezarejestrowane teksty <a href="{$unregisteredURL}">tutaj</a>.',
  'plugins.importexport.crossref.registrationIntro' => 'Wtyczka może zostać skonfigurowana do automatycznego rejestrowania DOI z CrossRef. W tym celu będziesz potrzebował nazwę użytkownika oraz hasło (możesz je uzyskać od <a href="http://www.crossref.org" target="_blank">CrossRef</a>. Jeżeli nie posiadasz nazwy użytkownika oraz hasła, możesz eksportować pozycje do formatu CrossRef XML, ale nie będziesz mógł rejestrować DOI z CrossRef za pomocą OJS.',
  'plugins.importexport.crossref.cliUsage' => 'Przykład użycia:
{$scriptName} {$pluginName} export xmlFileName journal_path {issues|articles} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register journal_path {issues|articles} objectId1 [objectId2] ...',
  'plugins.importexport.crossref.error.issnNotConfigured' => 'ISSN czasopisma nie został skonfigurowany! Musisz dodać ISSN na <a href="{$journalSettingsUrl}" target="_blank">stronie konfiguracji czasopisma</a>.',
  'plugins.importexport.crossref.error.noDOIContentObjects' => 'Artykuły nie zostały skonfigurowane do współpracy z DOI - eksport nie jest możliwy.',
  'plugins.importexport.crossref.settings.form.testMode.description' => 'Wykorzystaj API CrossRef (środowisko testowe) dla testowania DOI. Nie zapomnij usunąć tego ustawienia przed finalnym zdeponowaniem DOI.',
  'plugins.importexport.crossref.issues.description' => 'Uwaga: Tylko numery (nie artykuły) zostaną uwzględnione do eksportu/rejestracji.',
  'plugins.importexport.crossref.status.submitted' => 'Przesłane',
  'plugins.importexport.crossref.status.completed' => 'Zdeponowane',
  'plugins.importexport.crossref.status.failed' => 'Nieudane',
  'plugins.importexport.crossref.status.registered' => 'Aktywne',
  'plugins.importexport.crossref.status.markedRegistered' => 'Oznaczone jako aktywne',
  'plugins.importexport.crossref.action.export' => 'Pobierz XML',
  'plugins.importexport.crossref.action.markRegistered' => 'Oznacz jako aktywne',
  'plugins.importexport.crossref.action.register' => 'Prześlij',
  'plugins.importexport.crossref.action.checkStatus' => 'Sprawdź status',
  'plugins.importexport.crossref.notification.failed' => 'Błąd rejestracji DOI. Przejdź do Narzędzia -> Import/Eksport > CrossRef XML aby sprawdzić błędy.',
  'plugins.importexport.crossref.register.error.mdsError' => 'Przesyłanie nieudane! Serwer DOI zwrócił błąd: \'{$param}\'.',
  'plugins.importexport.crossref.register.success' => 'Przesyłanie zakończone sukcesem!',
  'plugins.importexport.crossref.export.error.issueNotFound' => 'Żaden numer nie pasuje do ID "{$issueId}".',
  'plugins.importexport.crossref.export.error.articleNotFound' => 'Żaden tekst nie pasuje do ID "{$articleId}".',
  'plugins.importexport.crossref.settings.form.validation' => 'Sprawdź poprawność XML. Użyj tej opcji do pobrania XML w celu ręcznej rejestracji DOI.',
  'plugins.importexport.crossref.statusLegend' => '448/5000
<p> Status wpłaty: </p>
<p>
- Nie zdeponowano: nie podjęto próby wpłaty dla tego DOI. <br />
- Aktywny: DOI został zdeponowany i działa poprawnie. <br />
- Niepowodzenie: depozyt DOI nie powiódł się. <br />
- Oznaczone jako aktywne: DOI zostało ręcznie oznaczone jako aktywne.
</p>
<p> Wyświetlany jest tylko status ostatniej próby wpłaty. </p>
<p> Jeśli wpłata się nie powiedzie, rozwiąż problem i spróbuj ponownie zarejestrować DOI. </p>',
  'plugins.importexport.crossref.register.success.warning' => 'Rejestracja zakończyła się powodzeniem, ale pojawiło się następujące ostrzeżenie: „{$param}”.',
); ?>