<?php
$module_name = 'ET__ExpenseTracker';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'EXPENSE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPENSE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'PAIDBY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PAIDBY',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'CATEGORY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
