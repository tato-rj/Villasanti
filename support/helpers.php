<?php

function mailto($subject = null)
{
	return 'mailto:'.config('mail.from.address').'?subject='.$subject;
}

function social($platform)
{
	return config('social.'.$platform);
}
