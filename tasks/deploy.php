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
		
		\Cli::write('Git Updated.', 'green');
	}
	
	public static function cache()
	{
		\Cli::write('Clearing the cache...');
		
		\Cli::write('Cache Cleared.', 'green');
	}
	
	public static function migrate()
	{
		\Cli::write('Starting Migration Process...');
		
		\Cli::write('Migration Completed.', 'green');
	}
}