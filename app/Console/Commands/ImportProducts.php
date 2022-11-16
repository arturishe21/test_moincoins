<?php

namespace App\Console\Commands;

use App\Imports\ProductsImport;
use Illuminate\Console\Command;

class ImportProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import products';

    public function handle(): void
    {
        $this->output->title('Starting import');
        (new ProductsImport)->withOutput($this->output)->import(storage_path('/data/product.csv'));
        $this->output->title('Import successful');
    }
}