<?php

namespace SEOPressPro\Actions\Table;

defined('ABSPATH') or exit('Cheatin&#8217; uh?');

use SEOPress\Core\Hooks\ExecuteHooks;
use SEOPressPro\Models\Table\TableStructure;
use SEOPressPro\Models\Table\TableColumn;
use SEOPressPro\Models\Table\Table;

class WorkerTable implements ExecuteHooks {

    public function hooks() {
        add_action('init', [$this, 'init']);
    }

    public function init() {
        $tables = seopress_pro_get_service('TableList')->getTables();

        seopress_pro_get_service('TableManager')->createTablesIfNeeded($tables);
    }
}
