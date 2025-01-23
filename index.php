<?php 

//you can delete all this files its just for testing purposes only(contact, test.php)

//Also the index.php file should be deleted and create yours 
//Htaccess can also be written based on your project configuration settings
namespace Redanselm\PhpRouter;
require_once 'src/Router.php';

//Router::handle('GET', '/test', 'test.php');
Router::get('/test', 'test.php');
Router::get('/contact', 'contact.php');

// Router::get ('/test', function(){

//     echo "am the function";
// });


// function testMe(){
//     echo 'This works as well';
// }

// Router::get('/test', 'testMe');