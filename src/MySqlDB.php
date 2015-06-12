<?php
        
class MySqlDB
{
	private static $hostname = "localhost";
	private static $user = "admin";
	private static $pw = "123456";
	private static $database = "myfavicons";
	
	private static $connection = false;
	
	public static function connect()
	{
                if (self::$connection == false)
                {	// Only connects if there isn't already a connection
                        self::$connection = new mysqli(self::$hostname, self::$user, self::$pw, self::$database);
                        
                        if (self::$connection->connect_error)
                        {
                                die("Connection failed: " . self::$connection->connect_error);
                        }				
                }
	}
	
	private static function query($sql)
	{
		self::connect();
		
		$result = self::$connection->query($sql);
    
		$output = array();
		
                while ($row = $result->fetch_array())
                {
                        array_push($output, $row);
                }
		
		return $output;			
	}
        
        public static function querySelect($sql)
        {
            return self::query($sql);
        }
        
        public static function queryInsert($sql)
        {
            self::connect();
            
            if (self::$connection->query($sql) === TRUE)
            {
                return true;
            }
            else 
            {
                return false;
            }            
        }
        
        public static function queryUpdate($sql)
        {
            self::connect();
            
            if (self::$connection->query($sql) === TRUE)
            {
                return true;
            }
            else 
            {
                return false;
            }
        }
}