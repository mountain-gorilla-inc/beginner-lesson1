<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new User;$model->name = 'user01';$model->password = bcrypt('1234');$model->is_admin = true;$model->is_leader = false;$model->save();
        $model = new User;$model->name = 'user02';$model->password = bcrypt('1234');$model->is_admin = false;$model->is_leader = true;$model->save();
        $model = new User;$model->name = 'user03';$model->password = bcrypt('1234');$model->is_admin = false;$model->is_leader = false;$model->save();
        $model = new User;$model->name = 'user04';$model->password = bcrypt('1234');$model->is_admin = false;$model->is_leader = false;$model->save();
    }
}
