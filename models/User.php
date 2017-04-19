<?php

require_once __DIR__ . '/Model.php';

class User extends Model {
    protected static $table = 'users';

    // override the __set method so that we can hash passwords. if the
    // given key is not a password, just call the parent method
    public function __set($name, $value)
    {
        if ($name == 'password') {
            $value = password_hash($value, PASSWORD_DEFAULT);
        }
        parent::__set($name, $value);
    }

    /**
     * find a user by username or email
     *
     * @param string $usernameOrEmail
     * @return User|null returns null if no matching record is found
     */
    public static function findByUsernameOrEmail($usernameOrEmail)
    {
        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE username = :username OR email = :email';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $usernameOrEmail, PDO::PARAM_STR);
        $stmt->bindValue(':email', $usernameOrEmail, PDO::PARAM_STR);
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($results) {
            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }

        public function insertUser() {
        // TODO: call dbConnect to ensure we have a database connection
        self::dbConnect();

        // TODO: use the $connection static property to create a perpared statement for
        //       inserting a record into the parks table
            // TODO: use the $this keyword to bind the values from this object to
        //       the prepared statement

        $statement = self::$dbc->prepare('INSERT INTO users (name, email, username, password) VALUES (:name, :email, :username, :password)');

        $statement->bindValue(':name', $this->name, PDO::PARAM_STR);

        $statement->bindValue(':email', $this->email, PDO::PARAM_STR);

        $statement->bindValue(':username', $this->username, PDO::PARAM_STR);

        $statement->bindValue(':password', $this->password, PDO::PARAM_STR);

        $statement->execute();
        
        // TODO: execute the statement and set the $id property of this object to
        //       the newly created id

        $this->id = self::$dbc->lastInsertId();
    }
}