<?php

/**
 * This file is necessary to include to use all the in-built libraries of /opt/fmc_repository/Reference/Common
 */
require_once '/opt/fmc_repository/Process/Reference/Common/common.php';

/**
 * List all the parameters required by the task
 */
function list_args()
{

}

/*$dev=$context['sw'];
$dev=getIdFromUbiId($dev);
$vlan='1';
$int=$context['port'];
$obj_params=array();
$obj_params['object_id']=$int;
$obj_params['vlan']=$vlan;
//$obj_params['description']=$desc;
*/
$context['sub_order'] = '';
$context['service_order'] = '';
//$context['port'] = '';

$context['status'] = 'free';
/*
$cmd_obj=array("vlan_to_int" => array("$int" => $obj_params));
$response = execute_command_and_verify_response($dev, CMD_UPDATE, $cmd_obj, "Interface VLAN update");
$response=json_decode($response, true);
  if ($response['wo_status'] !== ENDED) {
      $response = json_encode($response);
      echo $response;
      exit;
  }
*/
task_success('Resouce Added back to the Pool');
?>