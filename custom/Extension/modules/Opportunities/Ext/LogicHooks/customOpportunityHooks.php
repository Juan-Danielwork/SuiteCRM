<?php
$hook_array['before_save'][] = array(
    10,
    'check duplicate name',
    'custom/modules/Opportunities/Hooks/customOppLogicHooks.php',
    'customOpportunityLogicHook',
    'checkNameField'
);