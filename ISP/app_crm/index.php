<?php

require __DIR__.'/vendor/autoload.php';

use src\dao\ContractModel;
use src\dao\LeadModel;
use src\dao\UserModel;

$contractModel = new ContractModel();
$leadModel = new LeadModel();
$userModel = new UserModel();

print_r($contractModel);
print_r($leadModel);
print_r($userModel);