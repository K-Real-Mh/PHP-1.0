<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$orderId = post('id');
	delOrder($orderId);
}


redirect($_SERVER['HTTP_REFERER']);