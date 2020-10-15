{if isset($smarty.request.state) && $smarty.request.state === 'debug'}
{if $smarty.const.APP_ENV === null}
{elseif !($smarty.const.APP_ENV === 'production' || $smarty.const.APP_ENV === 'prod')}
{debug}
{/if}
{/if}