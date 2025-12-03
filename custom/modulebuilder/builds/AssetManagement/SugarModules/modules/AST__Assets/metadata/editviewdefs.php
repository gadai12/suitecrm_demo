<?php
$module_name = 'AST__Assets';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'assigned_user',
            'studio' => 'visible',
            'label' => 'LBL_ASSIGNED_USER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'code',
            'label' => 'LBL_CODE',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'category',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'asset_type',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'purchase_date',
            'label' => 'LBL_PURCHASE_DATE',
          ),
          1 => 
          array (
            'name' => 'purchase_price',
            'label' => 'LBL_PURCHASE_PRICE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'warranty_expiration',
            'label' => 'LBL_WARRANTY_EXPIRATION',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
