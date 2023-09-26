<?php
// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.



function generatePassword($length) {
    $randCharacter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {
        $password = $password.$randCharacter[rand(0, strlen($randCharacter)-1)];
    }
    
    return $password;
}

$passwords = [];
for ($i = 0; $i < 2; $i++) {
    $passwords[] = generatePassword(12);
}

print_r($passwords);










?>