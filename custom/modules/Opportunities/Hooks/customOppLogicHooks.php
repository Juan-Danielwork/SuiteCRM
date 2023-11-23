<?php
class customOpportunityLogicHook
{
	public function checkNameField($bean,$event,$arguments) 
	{
		global $db;
		if(empty($bean->fetched_row['id']))
		{
			$sql = "select id,name from opportunities where name='".$bean->name."'";
			$result = $db->query($sql);
			if($result->num_rows > 0) {
				$row = $db->fetchByAssoc($result);
				$number = str_replace("-",'',str_replace("AV", '', $row['name']));
				$number = str_replace(date('my'), '', $number)+1;
				$bean->name = "AV-".$number."-".date('m-y');
			}
		}
	}
}	