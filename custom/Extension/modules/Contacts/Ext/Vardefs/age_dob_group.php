<?php 
$dictionary['Contact']['fields']['dob'] = array(
    'name' => 'dob_c',
    'vname' => 'LBL_DOB',
    'type' => 'date',
   'required' => true,
    'audited' => true,
     'massupdate' => true,
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);

$dictionary['Contact']['fields']['age'] = array(
    'name' => 'age_c',
    'vname' => 'LBL_AGE',
    'type' => 'int',
    'len' => 3,
    'required' => true,
    'audited' => true,
);
$dictionary['Contact']['fields']['age_group'] = array(
    'name' => 'age_group_c',
    'vname' => 'LBL_AGE_GROUP',
    'type' => 'varchar',        
    'len' => 255,
    'options' => 'age_group_list', 
    'audited' => true,
);
?>