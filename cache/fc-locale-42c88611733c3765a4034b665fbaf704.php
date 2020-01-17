<?php return array (
  'plugins.pubIds.urn.displayName' => 'URN',
  'plugins.pubIds.urn.description' => 'Wtyczka umożliwia przypisanie Uniform Resource Names (ujednoliconego formatu nazw zasobów) do numerów, tekstów i plików w OJS.',
  'plugins.pubIds.urn.manager.settings.description' => 'Skonfiguruj wtyczkę, aby zarządzać i korzystać z URN w OJS.',
  'plugins.pubIds.urn.manager.settings.urnObjects' => 'Zawartość czasopisma',
  'plugins.pubIds.urn.manager.settings.urnObjectsRequired' => 'Wybierz obiekty, do których powinny zostać przypisane URN.',
  'plugins.pubIds.urn.manager.settings.explainURNs' => 'Wybierz obiekty, do których zostały przypisane Uniform Resource Names (URN):',
  'plugins.pubIds.urn.manager.settings.enableIssueURN' => 'Numery',
  'plugins.pubIds.urn.manager.settings.enableSubmissionURN' => 'Artykuły',
  'plugins.pubIds.urn.manager.settings.enableRepresentationURN' => 'Pliki',
  'plugins.pubIds.urn.manager.settings.urnPrefix' => 'Prefiks URN',
  'plugins.pubIds.urn.manager.settings.urnSuffix' => 'Sufiks URN',
  'plugins.pubIds.urn.manager.settings.urnPrefix.description' => 'Prefiks URN jest ustalony, nigdy nie zmieniaj tej części URN (np. ""urn:nbn:de:0000-").',
  'plugins.pubIds.urn.manager.settings.form.urnPrefixPattern' => 'Wzór prefiksu URN musi mieć format: "urn:"&lt;NID&gt;":"&lt;NSS&gt;.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.description' => 'Sufiks URN może przyjąć dowolną formę, ale musi być unikalny wśród opublikowanych obiektów z przypisanym tym samym prefiksem URN.',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern' => 'Użyj poniższego wzoru aby wygenerować sufiksy URN. Wykorzystaj %j dla inicjału czasopisma, %v dla oznaczenia tomu, %i dla oznaczenia numeru, %Y dla roku, %a dla identyfikatora artykułu w OJS, %g dla identyfikatora pliku z artykułem w OJS, %f dla identyfikatora pliku w OJS, %p dla numeru strony oraz %x dla "dostosowanego identyfikatora".',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.example' => 'Na przykład, vol%viss%ipp%p może wygenerować sufiks URN "vol3iss2pp230".',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.issues' => 'dla numerów',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.submissions' => 'dla artykułów',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.representations' => 'dla plików z artykułami',
  'plugins.pubIds.urn.manager.settings.urnIssueSuffixPatternRequired' => 'Wprowadź wzór sufiksu URN dla numerów.',
  'plugins.pubIds.urn.manager.settings.urnSubmissionSuffixPatternRequired' => 'Wprowadź wzór sufiksu URN dla artykułów.',
  'plugins.pubIds.urn.manager.settings.urnRepresentationSuffixPatternRequired' => 'Wprowadź wzór sufiksu URN dla plików z artykułami.',
  'plugins.pubIds.urn.manager.settings.urnSuffixDefault' => 'Użyj domyślnych wzorów.',
  'plugins.pubIds.urn.manager.settings.urnSuffixDefault.description' => '%j.v%vi%i dla numerów <br />%j.v%vi%i.%a dla artykułów<br />%j.v%vi%i.%a.g%g dla plików z artykułami.',
  'plugins.pubIds.urn.manager.settings.urnSuffixCustomIdentifier' => 'Wprowadź unikalny sufiks URN dla każdej opublikowanej pozycji. Znajdziesz dodatkowe pole URN dla każdej pozycji na stronie z metadanymi.',
  'plugins.pubIds.urn.manager.settings.checkNo' => 'Numer kontrolny',
  'plugins.pubIds.urn.manager.settings.checkNo.label' => 'Numer kontrolny zostanie automatycznie wygenerowany i dodany na końcu, jako ostatnia cyfra URN.',
  'plugins.pubIds.urn.manager.settings.namespace' => 'Przestrzeń nazw',
  'plugins.pubIds.urn.manager.settings.namespace.choose' => 'Wybierz',
  'plugins.pubIds.urn.manager.settings.namespace.description' => 'Przestrzeń nazw trwałego identyfikatora zwykle wymaga rejestracji (np. w Deutsche Nationalbibliothek).',
  'plugins.pubIds.urn.manager.settings.urnResolver' => 'Resolver URL',
  'plugins.pubIds.urn.manager.settings.urnResolver.description' => '(np. http://nbn-resolving.de/)',
  'plugins.pubIds.urn.manager.settings.form.urnResolverRequired' => 'Wprowadź rozwiązany URL.',
  'plugins.pubIds.urn.manager.settings.urnReassign' => 'Ponownie przydziel URN',
  'plugins.pubIds.urn.manager.settings.urnReassign.description' => 'Jeśli zmieniałeś(aś) konfigurację URN, przypisane URN nie ulegną zmianie. Raz skonfigurowane URN jest zachowane. Użyj tego przycisku aby wyczyścić istniejące URN i przypisać do istniejących obiektów URN na podstawie nowych ustawień.',
  'plugins.pubIds.urn.manager.settings.urnReassign.confirm' => 'Czy na pewno usunąć wszystkie istniejące URN?',
  'plugins.pubIds.urn.editor.urn' => 'URN',
  'plugins.pubIds.urn.editor.urnObjectTypeIssue' => 'numer',
  'plugins.pubIds.urn.editor.urnObjectTypeSubmission' => 'artykuł',
  'plugins.pubIds.urn.editor.urnObjectTypeRepresentation' => 'plik z artykułem',
  'plugins.pubIds.urn.editor.customSuffixMissing' => 'URN nie może być przypisany ponieważ nie ma ustawionego sufiksu.',
  'plugins.pubIds.urn.editor.patternNotResolved' => 'URN nie może być przypisane ponieważ nie ma ustawionego wzoru.',
  'plugins.pubIds.urn.editor.canBeAssigned' => 'Widzisz podgląd URN. Zaznacz pole i zapisz, aby przypisać URN.',
  'plugins.pubIds.urn.editor.assigned' => 'URN został przypisany do {$pubObjectType}.',
  'plugins.pubIds.urn.editor.urnSuffixCustomIdentifierNotUnique' => 'Dany sufiks URN jest już wykorzystany w innej opublikowanej pozycji. Wprowadź unikalny sufiks dla każdej pozycji.',
  'plugins.pubIds.urn.editor.clearObjectsURN' => 'Wyczyść URN',
  'plugins.pubIds.urn.editor.clearObjectsURN.confirm' => 'Czy na pewno usunąć istniejący URN?',
  'plugins.pubIds.urn.editor.clearIssueObjectsURN' => 'Wyczyść URN numeru',
  'plugins.pubIds.urn.editor.clearIssueObjectsURN.confirm' => 'Czy na pewno wyczyścić istniejące URN numeru?',
  'plugins.pubIds.urn.editor.clearIssueObjectsURN.description' => 'Użyj poniższej opcji, aby wyczyścić URN dla wszystkich obiektów (artykułów i plików z artykułami) aktualnie umieszczonych w numerze.',
  'plugins.pubIds.urn.editor.addCheckNo' => 'Dodaj numer kontrolny',
  'plugins.pubIds.urn.editor.assignURN' => 'Przypisz URN {$pubId} do {$pubObjectType}',
  'plugins.pubIds.urn.editor.assignURN.emptySuffix' => 'URN nie może być przypisany ponieważ nie ma ustawionego sufiksu.',
  'plugins.pubIds.urn.editor.assignURN.pattern' => 'URN {$pubId} nie może być przypisany ponieważ nie ma ustawionego wzoru.',
  'plugins.pubIds.urn.editor.assignURN.assigned' => 'URN {$pubId} został przypisany.',
  'plugins.pubIds.urn.form.checkNoRequired' => 'Brakuje numeru kontrolnego.',
); ?>