<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
// use Eloquent;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->command->info('Users Table seeded successfully!');

        $this->call(AuthorsTableSeeder::class);
        $this->command->info('Authors Table seeded successfully!');

        $this->call(BooksTableSeeder::class);
        $this->command->info('Books Table seeded successfully!');

        \Illuminate\Database\Eloquent\Model::reguard();
    }
}















 // 	从数据库表中取得单一数据列的单一字段
        // 	 = DB::table('users')->where('name', 'John')->pluck('name');
        // 	取得单一字段值的列表
        // 	 = DB::table('roles')->lists('title');
        // 	这个方法将会回传含有数据库表 role 的 title 字段值的数组。您也可以通过下面的方法，为回传的数组指定自定义键值。
        // 	 = DB::table('roles')->lists('title', 'name');
        // 	 = DB::table('users')->select('name as user_name')->get();
        // 	增加查询子句到现有的的查询中
        // 	 = DB::table('users')->select('name');
        // 	 = ->addSelect('age')->get();
        // 	DB::transaction(function()
        // 	{
        // 	    DB::table('users')->update(array('votes' => 1));
        // 	    DB::table('posts')->delete();
        // 	});
        // 	    注意: 任何 transaction 抛出的异常都将导致事务自动回滚.
        // 	有时你需要自己手动开启一个事务:
        // 	DB::beginTransaction();
        // 	你可以用过 rollback 方法手动回滚事务:
        // 	DB::rollback();
        // 	最后,你可以使用 commit 方法来提交:
        // 	DB::commit();
        // Eloquent
        // 	Model::create(array('key' => 'value'));
        // 	// Find first matching record by attributes or create
        // 	Model::firstOrCreate(array('key' => 'value'));
        // 	// Find first record by attributes or instantiate
        // 	Model::firstOrNew(array('key' => 'value'));
        // 	// Create or update a record matching attibutes, and fill with values
        // 	Model::updateOrCreate( = array('key' => 'value'),  = array('key' => 'value'));
        // 	// Fill a model with an array of attributes, beware of mass assignment!
        // 	Model::fill();
        // 	Model::destroy(1);
        // 	Model::all();
        // 	Model::find(1);
        // 	// Find using dual primary key
        // 	Model::find(array('first', 'last'));
        // 	// Throw an exception if the lookup fails
        // 	Model::findOrFail(1);
        // 	// Find using dual primary key and throw exception if the lookup fails
        // 	Model::findOrFail(array('first', 'last'));
        // 	Model::where('foo', '=', 'bar')->get();
        // 	Model::where('foo', '=', 'bar')->first();
        // 	// dynamic
        // 	Model::whereFoo('bar')->first();
        // 	// Throw an exception if the lookup fails
        // 	Model::where('foo', '=', 'bar')->firstOrFail();
        // 	Model::where('foo', '=', 'bar')->count();
        // 	Model::where('foo', '=', 'bar')->delete();
        // 	//Output raw query
        // 	Model::where('foo', '=', 'bar')->toSql();
        // 	Model::whereRaw('foo = bar and cars = 2', array(20))->get();
        // 	Model::remember(5)->get();
        // 	Model::remember(5, 'cache-key-name')->get();
        // 	Model::cacheTags('my-tag')->remember(5)->get();
        // 	Model::cacheTags(array('my-first-key','my-second-key'))->remember(5)->get();
        // 	Model::on('connection-name')->find(1);
        // 	Model::with('relation')->get();
        // 	Model::all()->take(10);
        // 	Model::all()->skip(10);
        // 	// Default Eloquent sort is ascendant
        // 	Model::all()->orderBy('column');
        // 	Model::all()->orderBy('column','desc');

        // Soft Delete
        // 	Model::withTrashed()->where('cars', 2)->get();
        // 	// Include the soft deleted models in the results
        // 	Model::withTrashed()->where('cars', 2)->restore();
        // 	Model::where('cars', 2)->forceDelete();
        // 	// Force the result set to only included soft deletes
        // 	Model::onlyTrashed()->where('cars', 2)->get();

        // Events
        // 	Model::creating(function(){});
        // 	Model::created(function(){});
        // 	Model::updating(function(){});
        // 	Model::updated(function(){});
        // 	Model::saving(function(){});
        // 	Model::saved(function(){});
        // 	Model::deleting(function(){});
        // 	Model::deleted(function(){});
        // 	Model::observe(new FooObserver);

        // Eloquent Configuration
        // 	// Disables mass assignment exceptions from being thrown from model inserts and updates
        // 	Eloquent::unguard();
        // 	// Renables any ability to throw mass assignment exceptions
        // 	Eloquent::reguard();

