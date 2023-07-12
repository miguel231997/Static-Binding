<?php

class Database
{
    protected static $table = 'enteties';

    public static function getTableName()
    {
        return static::$table;
    }
}

class User extends Database
{
    protected static $table = 'user';
}

class Post extends Database 
{
    protected static $table = 'posts';
}

echo User::getTableName();
echo Post::getTableName();

?>

In this example, we have a base class Database with a static property $table and a static method getTableName(). The subclasses User and Post inherit from Database and override the $table property with their own values.

When we call the getTableName() method on the User and Post classes, Late Static Binding is used. The static::$table expression resolves the correct value of $table based on the context of the calling subclass. As a result, we get the expected output of "users" when calling User::getTableName() and "posts" when calling Post::getTableName().

This demonstrates how Late Static Binding allows the static method in the base class to reference the correct static property based on the subclass that calls the method. It provides a way to access overridden static properties in an inheritance hierarchy, enabling more flexible and dynamic behavior in static method calls.