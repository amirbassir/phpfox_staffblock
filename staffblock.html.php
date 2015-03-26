{if Phpfox::getLib('module')->getFullControllerName() != 'staffblock.index'}
	{if Phpfox::getParam('staffblock.is_module_active')}
<div class="greeting">
<script type="text/javascript">
	var Digital=new Date()
	var hours=Digital.getHours()
	
	if (hours>=5&&hours<=11) //MESSAGE FOR MORNING
	document.write('<b>{$sFullName} &nbsp; {phrase var='staffblock.good_morning'}</b>')
	else if (hours==12) //MESSAGE FOR NOON
	document.write('<b>{$sFullName} &nbsp; {phrase var='staffblock.it_is_high_noon'}</b>')
	else if (hours>=13&&hours<=17) //MESSAGE FOR AFTERNOON
	document.write('<b>{$sFullName} &nbsp; {phrase var='staffblock.good_afternoon'}</b>')
	else if (hours>=18&&hours<=20) //MESSAGE FOR EVENING (6pm-8pm)
	document.write('<b{$sFullName} &nbsp; >{phrase var='staffblock.good_evening'}</b>')
	else if (hours>=21&&hours<=11) //MESSAGE FOR NIGHT (9pm-11pm)
	document.write('<b>{$sFullName} &nbsp; {phrase var='staffblock.good_night'}</b>')
	else //MESSAGE FOR LATE NIGHT, EARLY MORNING (12pm-4am)
	document.write('<b>{$sFullName} &nbsp; {phrase var='staffblock.are_you_still_awake'}</b>')
</script>
</div>
<div class="separate"></div>
<!--####################################################################################-->
		{if Phpfox::getParam('staffblock.is_actice_staff_info')}
			{if $aCountAdmins != 0}
<div style="background-color: #{$sAdminColor};" class="pfcstaffblock">
	<span style="float: right;">
		{phrase var='staffblock.user_admin'}
	</span>
	<span style="float: left;">
		{$aCountAdmins}&nbsp;{phrase var='staffblock.admin_count'}
	</span>
</div>
	{if !Phpfox::getParam('staffblock.auto_resize') || $aCountAdmins < $aResizeCount}
<div class="staffblock_images">
<ul>
	{foreach from=$aUserImages name=adminusers item=aUserImage}
		<li>{img user=$aUserImage suffix='_50_square' max_width=$aMaxWidth max_height=$aMaxWidth}</li>
	{/foreach}
</ul>
</div>
{else}
<div class="staffblock_images">
<ul>
	{foreach from=$aUserImages name=adminusers item=aUserImage}
		<li>{img user=$aUserImage suffix='_50_square' max_width=$aMinWidth max_height=$aMinWidth}</li>
	{/foreach}
</ul>
</div>
	{/if}
<div class="separate"></div>
			{/if}
