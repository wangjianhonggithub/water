<?php 
namespace app\index\model;
use think\Model;
class Project extends Model
{
	//调取全部
	public static function GetAll()
    {
		$project = new Project;
		$result = $project->where('display=1')->SELECT();
    	return $result;
    }
	
    
}
 ?>