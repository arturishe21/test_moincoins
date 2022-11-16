<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Imports\CateroriesImport;

class ImportCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import categories';

    public function handle(): void
    {
        $this->output->title('Starting import');
        (new CateroriesImport)->withOutput($this->output)->import(storage_path('/data/category.csv'));
        $this->output->title('Import successful');
    }
}