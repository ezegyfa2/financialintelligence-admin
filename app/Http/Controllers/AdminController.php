<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\Crm\Controllers\BlueAdminController;

class AdminController extends BlueAdminController
{
    public $indexTemplateName = 'financialintelligence_admin_index';
    public $editTemplateName = 'financialintelligence_admin_edit';
    public $templateFolderPath = __DIR__ . '/../Templates';
    public $filterFormItemPrefix = 'financialintelligence-admin-filter';
}
