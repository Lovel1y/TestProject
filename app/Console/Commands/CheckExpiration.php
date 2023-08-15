<?php

namespace App\Console\Commands;

use App\Models\GroupUser;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckExpiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:check_expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (GroupUser::all() as $user) {
            if($user['expired_at'] < Carbon::now()->timezone('Europe/Moscow')){
                DB::delete("DELETE FROM group_user WHERE group_id =". $user['group_id'] . " AND user_id=" . $user['user_id']);
            }
        }
    }
}
