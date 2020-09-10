<?php
class DbLibs {
    /////////////////////////////////////
    // DB connection = connectDB ($connect_info)
    // Initial connection database
    /////////////////////////////////////
    // INPUT:
    // 1. $connect_info['hostname'] = Database server name of IP
    // 2. $connect_info['db_name'] = Database name
	// 3. $connect_info['db_username'] = Database username
	// 4. $connect_info['db_password'] = Database password
    /////////////////////////////////////
    // OUTPUT:
    // Connection
    /////////////////////////////////////
    public function connectDB($connect_info)
    {
		// Initail attribute //
		$db_host = $connect_info['hostname'];
		$db_name = $connect_info['db_name'];
        $db_user = $connect_info['db_username'];
        $db_pwd  = $connect_info['db_password'];

		// Create database connection string//
        $connect_str = "mysql:host=".$db_host.";dbname=".$db_name.";charset=utf8";

        try {
			// Connect to database server by Slim PDO
            $connect_db = new \Slim\PDO\Database($connect_str, $db_user, $db_pwd);
        } catch (PDOException $e) {
			// When error //
            $error_msg = "connectDB $db_host Caught exception: ".$e->getMessage().")\n";
			//Write log //
            // ... //
            die();
        }
        return $connect_db;
    }
}