{**
 * plugins/generic/lensGalley/articleGalley.tpl
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Embedded viewing of a JATS XML galley.
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$article->getLocalizedTitle()|escape}

<div class="page">
	{capture assign="xmlUrl"}{url op="download" path=$article->getBestArticleId($currentJournal)|to_array:$galley->getBestGalleyId($currentJournal) escape=false}{/capture}
	{include file=$displayTemplatePath xmlUrl=$xmlUrl}
</div>

{include file="frontend/components/footer.tpl"}
