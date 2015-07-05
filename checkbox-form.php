<?php

if(isset($_POST['formWheelchair'])&&
	$_POST['formWheelchair'] == 'Yes')
{
	echo "Need E-mail";
}
else
{
	echo "Do not Need E-mail";
}