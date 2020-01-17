<?php return array (
  'plugins.generic.usageStats.settings.logging' => 'Dostęp do opcji dziennika',
  'plugins.generic.usageStats.settings.createLogFiles' => 'Utwórz plik dziennika',
  'plugins.generic.usageStats.settings.createLogFiles.description' => 'Aktywacja tej wtyczki spowoduje dostęp do plików dziennika wewnątrz katalogu z plikami. Te pliki mogą być wykorzystane do ekstrakcji danych ze statystykami użycia. Jeżeli nie chcesz utworzyć dostępu do plików dziennika możesz pozostawić tę opcję wyłączoną i wykorzystać pliki dziennika z własnego serwera.',
  'plugins.generic.usageStats.settings.saved' => 'Ustawienia wtyczki ze statystykami użycia zostały zapisane',
  'plugins.generic.usageStats.settings.logParseRegex' => 'Analizuj pliki logu wyrażeń regularnych',
  'plugins.generic.usageStats.settings.logParseRegex.description' => 'Domyślne wyrażenie regularne może analizować pliki dziennika dostępu Apache w połączonym formacie, a także pliki dziennika wtyczki. Jeśli pliki dziennika dostępu mają inny format, należy wstawić wyrażenie regularne, które może je przeanalizować i podać oczekiwane wartości. Zobacz UsageStatsLoader :: _ getDataFromLogEntry (), aby uzyskać więcej informacji.',
  'plugins.generic.usageStats.settings.dataPrivacyOption' => 'Opcja prywatności danych',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath' => 'Ścieżka do pliku dla animizującego oprogramowania salt',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath.invalid' => 'Plik oprogramowania salt nie jest zapisywalny',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requirements' => 'Aby zapewnić prywatność danych, musisz określić plik czytelny i zapisywalny przez użytkownika sieci, aby zawierał losowo wygenerowaną wartość salt. Plik ten NIE może być archiwizowany, aby zapewnić ochronę prywatności. Salt jest generowana losowo przy użyciu: funkcji mcrypt_create_iv, która wymaga mcrypt PHP; funkcja openssl_random_pseudo_bytes, która wymaga PHP openssl; plik / dev / urandom, który działa tylko na systemach * nix; lub funkcja mt_rand, która nie jest kryptograficznie bezpieczna. Tak więc, jeśli używasz serwera Windows, upewnij się, że zainstalowałeś mcrypt PHP lub openssl włączony, aby mieć kryptograficznie bezpieczną wygenerowany salt.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.description' => 'Activate this option to use a plugin version that respects privacy legislations, i.e. that is logging hashed IP addresses, informs the users about the tracking and provides an opt-out option for users. Note: when using this option you will not be able to use the geo features of the plugin.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requiresSalt' => 'Włączenie prywatności danych wymaga pliku salt.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesCity' => 'Włączenie prywatności danych wyklucza miasto jako statystykę opcjonalną.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesRegion' => 'Włączenie prywatności danych wyklucza region jako statystykę opcjonalną.',
  'plugins.generic.usageStats.settings.dataPrivacyCheckbox' => 'Szanuj prywatność danych',
  'plugins.generic.usageStats.settings.optionalColumns' => 'Opcjonalne informacje statystyczne',
  'plugins.generic.usageStats.settings.optionalColumns.description' => 'Włącz lub wyłącz gromadzenie następujących opcjonalnych informacji. Wpłynie to na możliwe raporty statystyczne, które możesz pobrać, a także wpłynie na rozmiar bazy danych. NIE ZMIENIAJ, chyba że w pełni rozumiesz, co robisz.',
  'plugins.generic.usageStats.settings.optionalColumns.cityRequiresRegion' => 'Opcjonalna kolumna „Miasto” wymaga opcjonalnej kolumny „Region”.',
  'plugins.generic.usageStats.settings.archives' => 'Archiwa',
  'plugins.generic.usageStats.settings.compressArchives.description' => 'Aktywuj tę opcję, aby skompresować zarchiwizowane pliki dziennika za pomocą narzędzia gzip (będziesz musiał skonfigurować ustawienia gzip wewnątrz config.inc.php). Jeśli masz witrynę o dużym natężeniu ruchu, dobrym pomysłem jest włączenie tej opcji, dzięki czemu możesz zaoszczędzić trochę dodatkowego miejsca na dysku.',
  'plugins.generic.usageStats.settings.compressArchives' => 'Kompresuj archiwa',
  'plugins.generic.usageStats.settings.statsDisplayOptions' => 'Opcje wyświetlania statystyk',
  'plugins.generic.usageStats.settings.statsDisplayOptions.contextWide' => 'Te ustawienia zostaną zastosowane tylko do statystyk użytkowania dla {$contextName}.',
  'plugins.generic.usageStats.settings.statsDisplayOptions.display' => 'Wyświetl wykres statystyk przesyłania dla czytnika',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType' => 'Wybierz typ wykresu, aby wyświetlić statystyki pobierania',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.bar' => 'Słupkowy',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.line' => 'Liniowy',
  'plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount' => 'Zdefiniuj maksymalną liczbę danych do przedstawienia w tym samym czasie dla określonego punktu osi X. Wyższa wartość może generować trudne do zrozumienia wykresy. Między 3 a 5 jest bezpieczne.',
  'plugins.generic.usageStats.usageStatsLoaderName' => 'Zadanie ładowania pliku statystyki użytkowania',
  'plugins.generic.usageStats.openFileFailed' => 'Plik {$file} nie mógł zostać otwarty i został odrzucony.',
  'plugins.generic.usageStats.invalidLogEntry' => 'Numer linii {$lineNumber} z pliku {$file} nie jest prawidłowym wpisem do dziennika. Plik został odrzucony.',
  'plugins.generic.usageStats.removeUrlError' => 'Numer linii {$lineNumber} z pliku {$file} zawiera adres URL, z którego system nie może usunąć podstawowego adresu URL.',
  'plugins.generic.usageStats.loadDataError' => 'Nie można załadować danych wyodrębnionych z pliku {$file}. Plik został ponownie przeniesiony na scenę.',
  'plugins.generic.usageStats.pluginNotEnabled' => 'Wtyczka statystyki użytkowania jest wyłączona. Nie przetworzono plików dziennika.',
  'plugins.generic.usageStats.processingPathNotEmpty' => 'Katalog {$directory} nie jest pusty. Może to wskazywać na poprzednio nieudany proces lub równoległy proces. Ten plik zostanie automatycznie ponownie przetworzony, jeśli używasz także scheduleTasksAutoStage.xml, w przeciwnym razie będziesz musiał ręcznie przenieść dowolne pojedyncze pliki z katalogu przetwarzania z powrotem do katalogu scen.',
  'plugins.generic.usageStats.displayName' => 'Statystyki użycia',
  'plugins.generic.usageStats.description' => 'Przedstaw statystyki użytkowania obiektów danych. Może używać plików dziennika dostępu do serwera w celu wyodrębnienia statystyk.',
  'plugins.reports.usageStats.report.displayName' => 'Raport statystyki użytkowania PKP',
  'plugins.reports.usageStats.report.description' => 'Raport o domyślnych statystykach użytkowania PKP (LICZNIK gotowy)',
  'plugins.generic.usageStats.optout.displayName' => 'Statystyki użytkowania informacji o prywatności',
  'plugins.generic.usageStats.optout.description' => 'Statystyki użytkowania informacji o prywatności',
  'plugins.generic.usageStats.optout.title' => 'Informacje o statystykach użytkowania',
  'plugins.generic.usageStats.optout.shortDesc' => 'Zapisujemy anonimowe pliki dziennika statystyk użytkowania. Aby uzyskać szczegółowe informacje, przeczytaj <a href="{$privacyInfo}"> informacje o prywatności </a>.',
  'plugins.generic.usageStats.optout.done' => '<p> Pomyślnie zrezygnowano z gromadzenia statystyk użytkowania. Gdy zobaczysz tę wiadomość, żadne statystyki nie będą zbierane z twojego korzystania z tej strony. Kliknij poniższy przycisk, aby cofnąć swoją decyzję. </p>',
  'plugins.generic.usageStats.optin' => 'Włącz',
  'plugins.generic.usageStats.optout' => 'Wyłącz',
  'plugins.generic.usageStats.optout.cookie' => '<p> Jeśli chcesz, możesz zrezygnować z procesu zbierania danych. Klikając poniższy przycisk rezygnacji, możesz aktywnie zdecydować, czy wziąć udział w analizie statystycznej. Po kliknięciu przycisku rezygnacji tworzony jest w systemie <em> plik cookie </em>, który przechowuje Twoją decyzję. Jeśli ustawienia prywatności Twojej przeglądarki prowadzą do automatycznego usuwania plików cookie, będziesz musiał zrezygnować ponownie przy następnym wejściu na tę stronę. Plik cookie jest ważny tylko dla jednej przeglądarki. Jeśli używasz innej przeglądarki, będziesz musiał zrezygnować ponownie. Żadne indywidualne informacje nie są przechowywane w tym pliku cookie. Te pliki cookie są ważne przez rok od ostatniego dostępu. </p>
<p> Należy pamiętać, że decyzja o rezygnacji ze szczegółowego procesu oceny nie wpływa na ogólne dzienniki serwera. Zapoznaj się z naszą ogólną <a href="{$privacyStatementUrl}"> polityką prywatności </a>. </p>',
  'plugins.reports.usageStats.metricType' => 'PKP/LICZNIK',
  'plugins.reports.usageStats.metricType.full' => 'Statystyki PKP (LICZNIK gotowy)',
  'plugins.generic.usageStats.statsSum' => 'Sumuj wszystkie pobrane pliki',
  'plugins.generic.usageStats.noStats' => 'Pobieranie danych nie jest jeszcze dostępne.',
  'plugins.generic.usageStats.monthInitials' => 'Sty Lut Mar Kwi Maj Cze Lip Sie Wrz Paź Lis Gru',
  'plugins.generic.usageStats.downloads' => 'Pliki do pobrania',
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.ojs2' => 'Każdy dziennik może zastąpić te ustawienia na stronie wtyczek dziennika.',
  'plugins.generic.usageStats.optout.description.long.ojs2' => '<h3> Ogólne informacje o prywatności </h3>
<p> Zapoznaj się z naszym ogólnym <a href="{$privacyStatementUrl}"> oświadczeniem o prywatności </a>. </p>
<h3> Statystyki użytkowania </h3>
<p> Aby móc analizować wykorzystanie i wpływ naszego czasopisma i opublikowanych artykułów, zbieramy i rejestrujemy dostęp do strony głównej czasopisma, zagadnień, artykułów, galerii i plików dodatkowych. W tym procesie wszystkie dane są anonimizowane. Żadne dane osobowe nie są rejestrowane. Adresy IP są anonimizowane przez wymieszanie (przy użyciu <em> SHA 256 </em>) w połączeniu z <em> bezpieczną długością 64 znaków </em>, która jest automatycznie <em> generowana losowo i zastępowana codziennie < / em>. Dlatego adresów IP nie można odtworzyć. </p>
<p> Następujące informacje są zbierane obok zanonimizowanych adresów IP: </p>
<ul>
<li> Typ dostępu (np. administracyjny) </li>
<li> Czas żądania </li>
<li> Żądany adres URL </li>
<li> Kod statusu HTTP </li>
<li> Przeglądarka </li>
</ul>
<p> Zebrane dane są używane wyłącznie do celów oceny. Żadne adresy IP nie są mapowane na identyfikatory użytkowników. Z technicznego punktu widzenia niemożliwe jest śledzenie określonego zestawu danych na konkretny adres IP. </p>',
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.omp' => 'Każde kliknięcie może nadpisać te ustawienia ze strony wtyczki',
  'plugins.generic.usageStats.optout.description.long.omp' => '<h3> Ogólne informacje o prywatności </h3>
<p> Zapoznaj się z naszym ogólnym <a href="{$privacyStatementUrl}"> oświadczeniem o prywatności </a>. </p>
<h3> Statystyki użytkowania </h3>
<p> Aby móc analizować wykorzystanie i wpływ naszych publikacji, zbieramy i rejestrujemy dostęp do strony głównej, kategorii, serii, książek i plików. W tym procesie wszystkie dane są anonimizowane. Żadne dane osobowe nie są rejestrowane. Adresy IP są anonimizowane przez wymieszanie (przy użyciu <em> SHA 256 </em>) w połączeniu z <em> bezpieczną długością 64 znaków </em>, która jest automatycznie <em> generowana losowo i zastępowana codziennie < / em>. Dlatego adresów IP nie można odtworzyć. </p>
<p> Następujące informacje są zbierane obok zanonimizowanych adresów IP: </p>
<ul>
<li> Typ dostępu (np. administracyjny) </li>
<li> Czas żądania </li>
<li> Żądany adres URL </li>
<li> Kod statusu HTTP </li>
<li> Przeglądarka </li>
</ul>
<p> Zebrane dane są używane wyłącznie do celów oceny. Żadne adresy IP nie są mapowane na identyfikatory użytkowników. Z technicznego punktu widzenia niemożliwe jest śledzenie określonego zestawu danych na konkretny adres IP. </p>',
); ?>