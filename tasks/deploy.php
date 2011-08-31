<?php

namespace Fuel\Tasks;

class Deploy {

	public static function run()
	{
		\Cli::write('Starting deploy process...');
		
		self::git();
		self::migrate();
		self::cache();
		
		\Cli::write('Deploy Complete.', 'green');
		\Cli::beep();
	}
	
	public static function git()
	{
		\Cli::write('Updating Git...');
		exec(\Config::get('deploy.'.\Config::get('environment').'.git_command'), $out);
		\Cli::write($out);
		\Cli::write('Git Updated.', 'green');
	}
	
	public static function cache()
	{
		\Cli::write('Clearing the cache...');
		\Cache::delete_all();
		\Cli::write('Cache Cleared.', 'green');
	}
	
	public static function migrate()
	{
		\Cli::write('Starting Migration Process...');
		exec(\Config::get('deploy.'.\Config::get('environment').'.migrate_command'), $out);
		\Cli::write($out);
		\Cli::write('Migration Completed.', 'green');
	}
}