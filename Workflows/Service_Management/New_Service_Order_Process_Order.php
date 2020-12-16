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
  create_var_def('service_order_id', 'String');
  create_var_def('service_type', 'String');
  create_var_def('fe_order_id', 'String');
  create_var_def('nw_grp_id', 'String');
  //create_var_def('region_id', 'String');
  //create_var_def('infra_id', 'String');
  create_var_def('ho_line_id', 'String');
  create_var_def('ho_suborder_id', 'String');
  create_var_def('ho_al_order_id', 'String');
  //create_var_def('br_line_id', 'String');
  //create_var_def('br_suborder_id', 'String');
  //create_var_def('br_al_order_id', 'String');
  create_var_def('vpn_id', 'String');
  create_var_def('vpn_suborder_id', 'String');
  create_var_def('ho_core_line_id', 'String');
  //create_var_def('ho_br_line_id', 'String');
}

$context['status']='ordered';

task_success('Order Processed');
//task_error('Task FAILED');
?>