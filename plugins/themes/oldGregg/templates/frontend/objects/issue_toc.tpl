{**
 * templates/frontend/objects/issue_toc.tpl
 *
 * Copyright (c) 2018 Vitaliy Bezsheiko, MD
 *
 * Distributed under the GNU GPL v3.
 *
 *}

<div class="obj_issue_toc">
    <div class="container">

        {* Indicate if this is only a preview *}
        {if !$issue->getPublished()}
            {include file="frontend/components/notification.tpl" type="warning" messageKey="editor.issues.preview"}
        {/if}

        {* Issue introduction area above articles *}
        <div class="heading">

{assign var=issueCover value=$issue->getLocalizedCoverImageUrl()}
       {if $issueCover}
            {assign var="issueDetailsCol" value="8"}
            <div class="thumbnail">
                <a class="cover" href="{url|escape op="view" page="issue" path=$issue->getBestIssueId()}">
                    <img class="img-responsive" src="{$issueCover|escape}"{if $issue->getLocalizedCoverImageAltText() != ''} alt="{$issue->getLocalizedCoverImageAltText()|escape}"{/if}>
                </a>
            </div>
        {/if}
    




            {* Description *}
            {if $issue->hasDescription()}
                <div class="injournal-description">
                    {$issue->getLocalizedDescription()|strip_unsafe_html}
                </div>
            {/if}

            {* PUb IDs (eg - DOI) *}
            {foreach from=$pubIdPlugins item=pubIdPlugin}
                {if $issue->getPublished()}
                    {assign var=pubId value=$issue->getStoredPubId($pubIdPlugin->getPubIdType())}
                {else}
                    {assign var=pubId value=$pubIdPlugin->getPubId($issue)}{* Preview pubId *}
                {/if}
                {if $pubId}
                    {assign var="doiUrl" value=$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
                    <div class="pub_id {$pubIdPlugin->getPubIdType()|escape}">
                        <span class="type">
                            {$pubIdPlugin->getPubIdDisplayType()|escape}:
                        </span>
                        <span class="id">
                            {if $doiUrl}
                                <a href="{$doiUrl|escape}">
                                    {$doiUrl}
                                </a>
                            {else}
                                {$pubId}
                            {/if}
                        </span>
                    </div>
                {/if}
            {/foreach}
        </div>

        {* Full-issue galleys *}

        

        {* Articles *}

        {foreach name=sections from=$publishedArticles item=section}
            {if $section.articles}
                {if $section.title}
                    <h2 class="issue-section-title text-center">
                        {$section.title|escape}
                    </h2>
                {/if}
                {foreach from=$section.articles item=article}
                    <div class="card one-article-intoc">
                        {include file="frontend/objects/article_summary.tpl"}
                    </div>
                {/foreach}
            {/if}
        {/foreach}
        
    </div><!-- container -->
</div>
