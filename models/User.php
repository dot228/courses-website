<?php

namespace models;

class User
{
    protected static $tableName = 'users';
    public static function addUser($username,$password,$email,$reg_date, $role)
    {
        \core\Core::getInstance()->db->insert(
            self::$tableName, [
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'reg_date' => $reg_date,
                'role' => $role
            ]
        );
    }

    public static function deleteUser($username, $password)
    {
        \core\Core::getInstance()->db->delete(
            self::$tableName, [
                'username' => $username,
                'password' => $password
            ]
        );
    }

    public static function updateUser($newValuesArray, $ConditionArray)
    {

        \core\Core::getInstance()->db->update(
            self::$tableName, $newValuesArray,$ConditionArray
        );
    }

    public static function selectUser($conditionArray)
    {
        $res = \core\Core::getInstance()->db->select(
            self::$tableName, '*', $conditionArray
        );
        return $res;
    }

    public static function isLoginExists($login)
    {
        $user = \core\Core::getInstance()->db->select(self::$tableName,'*',[
            'username' => $login
        ]);
        return !empty($user);
    }

    public static function verifyUser($login,$password)
    {
        $user = \core\Core::getInstance()->db->select(self::$tableName,'*',[
            'username' => $login,
            'password' => $password
        ]);
        return !empty($user);
    }

    public static function getUserByLoginAndPassword($login,$password)
    {
        $user = \core\Core::getInstance()->db->select(self::$tableName,'*',[
            'username' => $login,
            'password' => $password
        ]);
        return $user;
    }

    public static function authenticateUser($user)
    {
        $_SESSION['user'] = $user;
    }

    public static function logoutUser()
    {
        unset($_SESSION['user']);
    }

    public static function isUserAuthenticated() {
        return isset($_SESSION['user']);
    }

    public static function getCurrentAuthenticatedUser()
    {
        return $_SESSION['user'];
    }
    public static function getCurrentAuthenticatedUserId()
    {
        $user = $_SESSION['user'];
        return $user[0]['id_user'];
    }
    public static function getUserRole()
    {
        $user = User::getCurrentAuthenticatedUser();
        $role = $user[0]['role'];
        return $role;
    }
}