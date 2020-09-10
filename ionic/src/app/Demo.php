<?php
class Demo {
    /////////////////////////////////////
    // Read data to table = getUser ($connect_info)
    // Read user information to table 
    /////////////////////////////////////
    // INPUT:
	// 1. DB PDO connection
	// 2. user ID
    /////////////////////////////////////
    // OUTPUT:
    // return : result_exec
    /////////////////////////////////////
    public function getUser($db_pdo, $us_id)
    {
		// Validation //
        // ... //
        try {
            // SELECT * FROM users WHERE id = ?
            $select_stmt = $db_pdo->select()
                                   ->from('user_info')
                                   ->where('us_id', '=', $us_id);
            $stmt = $select_stmt->execute();
            $result_data = $stmt->fetch();
        } catch (PDOException $e) {
			// When error //
            $error_msg = "DB Caught exception: ".$e->getMessage().")\n";
			echo $error_msg;
			//Should write log //
            // ... //
            die();
        }
        return $result_data;
    }
    /////////////////////////////////////
    // Insert data to table = insUser ($db_pdo, $firstname ,$lastname)
    // Insert user information to table 
    /////////////////////////////////////
    // INPUT:
	// 1. DB PDO connection
    // 2. $firstname : Firstname
	// 3. $lastname  : Lastname
    /////////////////////////////////////
    // OUTPUT:
    // return : result_exec
    /////////////////////////////////////
    public function insUser($db_pdo, $firstname ,$lastname)
    {
		// Validation //
        // ... //
        try {
            // INSERT INTO users ( id , usr , pwd ) VALUES ( ? , ? , ? )
            $ins_stmt = $db_pdo->insert(array('firstname', 'lastname'))
                               ->into('user_info')
                               ->values(array($firstname, $lastname));
            $result_exec = $ins_stmt->execute(false);
        } catch (PDOException $e) {
			// When error //
            $error_msg = "DB Caught exception: ".$e->getMessage().")\n";
			echo $error_msg;
			//Should write log //
            // ... //
            die();
        }
        return $result_exec;
    }
    /////////////////////////////////////
    // Update data to table = updUser ($connect_info)
    // Update user information to table 
    /////////////////////////////////////
    // INPUT:
	// 1. DB PDO connection
	// 2. user ID
    // 3. $firstname : Firstname
	// 4. $lastname  : Lastname
    /////////////////////////////////////
    // OUTPUT:
    // return : result_exec
    /////////////////////////////////////
    public function updUser($db_pdo, $us_id, $firstname ,$lastname)
    {
		// Validation //
        // ... //
        try {
            // UPDATE users SET usr = ? , pwd = ? WHERE id = ?
            $upd_stmt = $db_pdo->update(array('firstname' => $firstname,
			                                  'lastname' => $lastname
			                            ))
                               ->table('users')
                               ->where('us_id', '=', $us_id);
						   
            $result_exec = $upd_stmt->execute();
        } catch (PDOException $e) {
			// When error //
            $error_msg = "DB Caught exception: ".$e->getMessage().")\n";
			echo $error_msg;
			//Should write log //
            // ... //
            die();
        }
        return $result_exec;
    }
    /////////////////////////////////////
    // Delete data to table = delUser ($connect_info)
    // Delete user information to table 
    /////////////////////////////////////
    // INPUT:
	// 1. DB PDO connection
	// 2. user ID
    /////////////////////////////////////
    // OUTPUT:
    // return : result_exec
    /////////////////////////////////////
    public function delUser($db_pdo, $us_id)
    {
		// Validation //
        // ... //
        try {
            // DELETE FROM users WHERE id = ?
            $del_stmt = $db_pdo->delete()
                            ->from('users')
                            ->where('us_id', '=', $us_id);
            $result_exec = $del_stmt->execute();
        } catch (PDOException $e) {
			// When error //
            $error_msg = "DB Caught exception: ".$e->getMessage().")\n";
			echo $error_msg;
			//Should write log //
            // ... //
            die();
        }
        return $result_exec;
    }
}