{**
 * templates/frontend/pages/indexJournal.tpl
 *
 * Copyright (c) 2018 Vitaliy Bezsheiko
 * Distributed under the GNU GPL v3.
 *
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()|escape}


   
<div class="page_index_journal">
    <div class="index-page-content">
        <div class="row">
            
            <div class="col-md-8">
                <div class="row">


      
          
                    {if $showSummary && $journalDescription}
                        <div class="journal-summary-title col-md-12">
                            <h3>{translate key="plugins.gregg.journal.summary"}</h3>
                        </div>
                        <div class="summary-content">
                            {$journalDescription|strip_unsafe_html}
                        </div>




                    {/if}
 <div class="journal-summary-title col-md-12">
                            <h3>{translate key="navigation.current"}</h3>
                        </div>
<div class="col-md-12 current-journal">
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

</div>


                    <div class="recent-articles-section-title col-md-12">
                        <h3>{translate key="plugins.gregg.latest"}</h3>
                    </div>
                    {foreach from=$publishedArticles item=article key=k}
                        <div class="recent-wrapper col-md-6">
                            <div class="card">
                                 


                                <!-- <a href="{url page="article" op="view" path=$article->getBestArticleId()}">
                                    <img class="card-img-top" src="{$article->getLocalizedCoverImageUrl()|escape}">
                                </a> -->

                            


                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a class="recent-article-title"
                                           href="{url page="article" op="view" path=$article->getBestArticleId()}">
                                            {$article->getLocalizedTitle()|escape}
                                        </a>
                                    </h4>
                                    <p class="card-text">
                                        {foreach from=$article->getAuthors() key=k item=author}
                                            <span>{$author->getLocalizedFamilyName()|escape}
                                                {if $k<($article->getAuthors()|@count - 1)}
                                                    {$author->getLocalizedGivenName()|regex_replace:"/(?<=\w)\w+/":".,"|escape}
                                                {else}
                                                    {$author->getLocalizedGivenName()|regex_replace:"/(?<=\w)\w+/":"."|escape}
                                                {/if}</span>
                                        {/foreach}
                                    </p>
                                </div>
                                

                                <div class="card-footer">
                                    <small class="text-muted">
                                        {$issue->getIssueSeries()|escape}
                                        |
                                        {$article->getSectionTitle()|escape}
                                        |
                                        {$article->getDatePublished()|date_format:"%Y-%m-%d"}
                                    </small>
                                    <small>
                                    {if !$hideGalleys && $article->getGalleys()}
            <div class="btn-group" role="group">
                {foreach from=$article->getGalleys() item=galley}
                    {if $primaryGenreIds}
                        {assign var="file" value=$galley->getFile()}
                        {if !$galley->getRemoteUrl() && !($file && in_array($file->getGenreId(), $primaryGenreIds))}
                            {continue}
                        {/if}
                    {/if}
                    {assign var="hasArticleAccess" value=$hasAccess}
                    {if ($article->getAccessStatus() == $smarty.const.ARTICLE_ACCESS_OPEN)}
                        {assign var="hasArticleAccess" value=1}
                    {/if}
                    {include file="frontend/objects/galley_link.tpl" parent=$article hasAccess=$hasArticleAccess}
                {/foreach}

            </div>
        {/if}</small>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
                {call_hook name="Templates::Index::journal"}
            </div>
            <div class="col-md-4">
                {if empty($isFullWidth)}
                    {capture assign="sidebarCode"}{call_hook name="Templates::Common::Sidebar"}{/capture}
                    {if $sidebarCode}
                        {if $latestIssues}
                            {include file="frontend/objects/issue_slider.tpl"}

                        {/if}
                        <div class="pkp_structure_sidebar" role="complementary"
                             aria-label="{translate|escape key="common.navigation.sidebar"}">
                            {$sidebarCode}
                        </div>
                    {/if}
                {/if}
            </div>
        </div>
    </div>
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
