<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('UserTableSeeder');
		 $this->call('PostTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		 DB::table('users')->delete();

		 User::create([
		 		'email' 	=> 'ramosjosemari@gmail.com',
		 		'password'  => Hash::make('test'),
		 		'nickname'	=> 'Don Jose',
		 		'firstname'	=> 'JM',
		 		'lastname'	=> 'Ramos',
		 		'role'		=> 1
		 	]);

	}
}

class PostTableSeeder extends Seeder {

	public function run()
	{
		DB::table('posts')->delete();
	
		Post::create([
				'author_id'		=>	1,
				'title'			=> 'Welcome to Villa Boracay Resort!',
				'content'		=>	'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
				'status'		=> 1,
				'type'			=> 0,
				'image'			=> 'bora.jpg',
				'category'		=>	'resort'
			]);

		Post::create([
				'author_id'		=>	1,
				'title'			=> 'La la la La-preza',
				'content'		=>	'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
				'status'		=> 1,
				'type'			=> 0,
				'image'			=> 'strawberry.jpg',
				'category'		=>	'etc..'
			]);
		
		Post::create([
				'author_id'		=>	1,
				'title'			=> 'Palawan Boat Club',
				'content'		=>	'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
				'status'		=> 1,
				'type'			=> 1,
				'image'			=> 'palawan.jpg',
				'category'		=> 'etc..'
			]);
	}

	class PackageTableSeeder extends Seeder {
		
	}
}