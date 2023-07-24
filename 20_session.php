<?php
//setting sessoin
    // session is used to manage information across different pages 
    // to start session we can use built in fuction like below

    session_start();

    // setting info in session superglobal
    $_SESSION['username'] = "Harry";
    $_SESSION['favCat'] = "Books";
    echo "we have saved your session<br>";

?>

<?php
//getting session

// because i am getting session data on same page i don't have to start session but to access data on different page you need to start session
// session_start();
echo "Welcome". $_SESSION['username'];
echo "<br> Your favorite category is ". $_SESSION['favCat'];

?>

<?php
// destroying session

// session_start();
session_unset();
session_destroy();
echo "<br> you have been logged out";

?>