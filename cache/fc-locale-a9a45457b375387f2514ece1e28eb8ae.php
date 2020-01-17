<?php return array (
  'section.default.title' => 'Artykuły',
  'section.default.abbrev' => 'ART',
  'default.genres.article' => 'Tekst artykułu',
  'default.journalSettings.checklist.notPreviouslyPublished' => 'Tekst nie był dotąd nigdzie opublikowany ani nie jest przedmiotem postępowania w innym czasopiśmie.',
  'default.journalSettings.checklist.fileFormat' => 'Tekst zapisany w formacie OpenOffice, Microsoft Word, RTF lub WordPerfect.',
  'default.journalSettings.checklist.addressesLinked' => 'Jeżeli jest dostępny należy dostarczyć URL dla pozycji bibliograficznych.',
  'default.journalSettings.forAuthors' => 'Czy jesteś zaintersowany(a) zgłoszeniem tekstu do tego czasopisma? Rekomendujemy zapoznanie się z zawartością strony <a href="{$indexUrl}/{$journalPath}/about">O czasopiśmie</a>, na której zamieszczone są zasady czasopisma oraz <a href="{$indexUrl}/{$journalPath}/about/submissions#authorGuidelines">Instrukcja dla autorów</a>. Autor musi <a href="{$indexUrl}/{$journalPath}/user/register">zarejestrować się</a> na stronie czasopisma, zanim rozpocznie proces recenzji lub  <a href="{$indexUrl}/index/login">zalogować się</a>, jeżeli posiada już konto w systemie. Proces zgłoszenia tekstu składa się z pięciu kroków.',
  'default.journalSettings.publicationFee' => 'Publikacja artykułu',
  'default.journalSettings.purchaseIssueFee' => 'Kup numer',
  'default.groups.name.manager' => 'Administrator czasopisma',
  'default.groups.plural.manager' => 'Administratorzy czasopisma',
  'default.groups.abbrev.manager' => 'ADMIN',
  'default.groups.name.editor' => 'Redaktor czasopisma',
  'default.groups.plural.editor' => 'Redaktorzy czasopisma',
  'default.groups.abbrev.editor' => 'RED',
  'default.groups.name.guestEditor' => 'Redaktor gościnny',
  'default.groups.plural.guestEditor' => 'Redaktorzy gościnni',
  'default.groups.abbrev.guestEditor' => 'RED G',
  'default.groups.name.sectionEditor' => 'Redaktor działu',
  'default.groups.plural.sectionEditor' => 'Redaktorzy działu',
  'default.groups.abbrev.sectionEditor' => 'RED DZ',
  'default.groups.name.subscriptionManager' => 'Menadżer subskrypcji',
  'default.groups.plural.subscriptionManager' => 'Menadżerowie subskrypcji',
  'default.groups.abbrev.subscriptionManager' => 'SUB',
  'default.genres.researchInstrument' => 'Narzędzie badawcze',
  'default.genres.researchMaterials' => 'Materiały',
  'default.genres.researchResults' => 'Wyniki badań',
  'default.genres.transcripts' => 'Transkrypcje',
  'default.genres.dataAnalysis' => 'Analiza danych',
  'default.genres.dataSet' => 'Zestaw danych',
  'default.genres.sourceTexts' => 'Kody źródłowe',
  'default.groups.name.externalReviewer' => 'Recenzent',
  'default.groups.plural.externalReviewer' => 'Recenzenci',
  'default.groups.abbrev.externalReviewer' => 'REC',
  'default.journalSettings.emailSignature' => '<br/>
________________________________________________________________________<br/>
<a href="{$ldelim}$contextUrl{$rdelim}">{$ldelim}$contextName{$rdelim}</a>',
  'default.journalSettings.checklist.bibliographicRequirements' => 'Tekst został sformatowany zgodnie z wytycznymi dla autora określającymi styl i zasady sporządzania bibliografii.',
  'default.journalSettings.privacyStatement' => 'Wprowadzone do systemu dane i osobowe oraz adresy e-mail będą wykorzystywane wyłącznie do celów wydawniczych czasopisma.',
  'default.journalSettings.openAccessPolicy' => 'Czasopismo zapewnia otwarty dostęp (open access) do pełnych tekstów, niezwłocznie po ich opublikowaniu. Dzięki temu czasopisma wspiera globalny obieg wiedzy.',
  'default.journalSettings.purchaseArticleFee' => 'Kup artykuł',
  'default.journalSettings.membershipFee' => 'Członkowstwo',
  'default.journalSettings.checklist.submissionAppearance' => 'Interlinia 1; wysokość pisma 12 pkt; stosowana raczej kursywa niż podkreślenia (za wyjątkiem adresów stron internetowych); wszystkie rysunki oraz tabele są umieszczone w tekście w odpowiednich miejscach (nie na końcu).',
  'default.journalSettings.authorSelfArchivePolicy' => 'Czasopismo zezwala autorom i zachęca ich do zamieszczania swoich artykułów na prywatnych stronach internetowych oraz w instytucjonalnych repozytoriach. Dotyczy to zarówno wersji przed opublikowaniem, jak i wersji po publikacji. Udostępniając swoje artykuły są zobowiązani do zamieszczenia szczegółowych informacji bibliograficznych, w szczególności (o ile to tylko możliwe) podania tytułu tego czasopisma.',
  'default.journalSettings.refLinkInstructions' => '<h4>Aby dodać odnośnik do procesu tworzenia układu</h4>
	<p>Kiedy zamieniasz zgłoszenie na HTML lub PDF, upewnij się, że wszystkie hiperłącza w zgłoszeniu są aktywne.</p>
	<h4>A. Kiedy autor przedstawia link do źródła danych</h4>
	<ol>
	<li>Podczas gdy zgłoszenie jest nadal w formacie przetwarzania tekstu (np. Word), dodaj wyrażenie VIEW ITEM na końcu odnośnika, który ma URL.</li>
	<li>Zmień tę frazę w hiperłącze, zaznaczając ją i używając narzędzia Word Wstaw hiperłącze i adresu URL przygotowanego w #2.</li>
	</ol>
	<h4>B. Umożliwienie Czytelnikom wyszukiwania w Google Scholar w celu uzyskania referencji</h4>
	<ol>
		<li>Podczas gdy zgłoszenie jest jeszcze w formacie przetwarzania tekstu (np. Word), skopiuj tytuł odnośnika na liście Referencji (jeśli wydaje się, że jest on zbyt powszechny, np. tytuł "Pokój" - kopiuj autora i tytuł).</li>
		<li>Wklej tytuł odnośnika pomiędzy %22, umieszczając znak + pomiędzy każdym słowem: http://scholar.google.com/scholar?q=%22WKLEJ+TYTUL+TUTAJ%22&hl=en&lr=&btnG=Search.</li>

	<li>Dodaj wyrażenie GS SEARCH na końcu każdego cytatu na liście referencyjnej zgłoszenia.</li>
	<li>Zmień tę frazę w hiperłącze, zaznaczając ją i używając narzędzia Word Wstaw hiperłącze i adresu URL przygotowanego w #2.</li>
	</ol>
	<h4>C. Umożliwienie czytelnikom wyszukiwania referencji z DOI</h4>
	<ol>
	<li>Gdy zgłoszenie jest jeszcze w Word, skopiuj partię odnośników do CrossRef Text Query http://www.crossref.org/freeTextQuery/.</li>
	<li>Wklej każde polecenie DOI, które zawiera zapytanie w następującym adresie URL (pomiędzy = i &): http://www.cmaj.ca/cgi/external_ref?access_num=PASTE DOI#HERE&link_type=DOI.</li>
	<li>Dodaj wyrażenie CrossRef na końcu każdego cytatu w liście referencyjnej zgłoszenia.</li>
	<li>Zmień tę frazę w hiperłącze, zaznaczając frazę i używając narzędzia Word Wstaw hiperłącze i odpowiedniego adresu URL przygotowanego w #2.</li>
	</ol>',
  'default.journalSettings.proofingInstructions' => '<p>Etap korekty ma na celu wychwycenie wszelkich błędów w pisowni, gramatyce i formatowaniu. Na tym etapie nie można wprowadzać większych zmian merytorycznych, chyba że zostanie to omówione z redaktorem działu. W zakładce Layout kliknij na VIEW PROOF, aby zobaczyć formaty HTML, PDF i inne dostępne formaty plików używane do publikacji tego elementu.</p>
	<h4>W przypadku błędów ortograficznych i gramatycznych</h4>

	<p>Skopiuj problematyczne słowo lub grupy słów i wklej je do pola Korekty z instrukcjami "ZAMIEŃ" do redaktora w następujący sposób:</p>

	<pre>1. ZAMIEŃ...
	then the others
	NA...
	than the others</pre>
	<br />
	<pre>2. ZAMIEŃ...
	Malinowsky
	NA...
	Malinowski</pre>
	<br />

	<h4>Błędy formatowania</h4>

	<p>Opisz lokalizację i charakter problemu w polu Korekta po wpisaniu w tytule "FORMATOWANIE" w następujący sposób:</p>
	<br />
	<pre>3. FORMATOWANIE
	Liczby w tabeli 3 nie są wyrównane w trzeciej kolumnie.</pre>
	<br />
	<pre>4. FORMATOWANIE
	Akapit rozpoczynający się od słów "Ten ostatni temat..." nie jest wcięty.</pre>',
  'default.journalSettings.forReaders' => 'Zachęcamy czytelników, aby zarejestrowali się na stronie w celu uzyskiwania powiadomień od czasopisma. W tym celu należy kliknąć przycisk <a href="{$indexUrl}/{$journalPath}/user/register">Zarejestruj</a> znajdujący się w górnej części strony. W wyniku rejestracji czytelnicy będą otrzymywać na skrzynkę e-mail spisy treści nowych numerów. To pozwoli również czasopismu zapewnić dodatkowe wsparcie czytelnikom. Przed rejestracją czytelnicy powinni zapoznać się z <a href="{$indexUrl}/{$journalPath}/about/submissions#privacyStatement">Polityką prywatności</a>.',
  'default.journalSettings.forLibrarians' => 'Zachęcamy bibliotekarzy do włączenia strony czasopisma do ich systemów bibliotecznych.',
  'default.journalSettings.lockssLicense' => 'Czasopismo to wykorzystuje system LOCKSS do tworzenia rozproszonego systemu archiwizacji pomiędzy uczestniczącymi bibliotekami i pozwala tym bibliotekom tworzyć stałe archiwa czasopisma na potrzeby konserwacji i odnowy. <a href="http://www.lockss.org/">Więcej...</a>',
  'default.journalSettings.clockssLicense' => 'Czasopismo to wykorzystuje system CLOCKSS do tworzenia rozproszonego systemu archiwizacji pomiędzy uczestniczącymi bibliotekami i pozwala tym bibliotekom tworzyć stałe archiwa czasopisma na potrzeby konserwacji i odnowy. <a href="http://clockss.org/">Więcej...</a>',
  'section.default.policy' => 'Treść polityki prywatności.',
); ?>