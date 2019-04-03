<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Command;

class ClearUnfinishedData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear unfinished products and categories';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try  {
            Product::unfinished()->get()->each->delete();
            Category::unfinished()->get()->each->delete();
            $this->info('Successfully deleted!');
        } catch(\Exception $e) {
            $this->error('Something went wrong!');
        }

    }
}
