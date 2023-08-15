<?php

namespace App\Console\Commands;

use App\Models\GroupUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UserMember extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:member {user_id} {group_id}';

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
        $user_id = $this->argument('user_id');
        $user = User::find($user_id);
        if($user['active'] === false){
            $user->update([
                'active' => true
            ]);
        }
        GroupUser::firstOrCreate([
            'user_id' => $user_id,
            'group_id' => $this->argument('group_id'),
            'expired_at' => Carbon::now()
        ]);
    }
}
