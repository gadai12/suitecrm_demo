<?php
$module_name = 'ET__ExpenseTracker';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'category',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'paidby',
            'studio' => 'visible',
            'label' => 'LBL_PAIDBY',
          ),
          1 => 
          array (
            'name' => 'notes',
            'studio' => 'visible',
            'label' => 'LBL_NOTES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'expense_date',
            'label' => 'LBL_EXPENSE_DATE',
          ),
          1 => 
          array (
            'name' => 'receipt',
            'studio' => 'visible',
            'label' => 'LBL_RECEIPT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
