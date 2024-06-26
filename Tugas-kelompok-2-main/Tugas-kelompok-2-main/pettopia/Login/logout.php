
The error you're encountering is because the session_unset() function does not take any arguments. It is used to unset all session variables. If you want to unset a specific session variable, you should use the unset() function.

Here is the corrected code:

php
Copy code
<?php

session_start();

// Unset the 'user' session variable
unset($_SESSION['user']);

// Or, if you want to destroy all session data, you can use session_unset() without any arguments
// session_unset();

// Redirect to index.php
header("Location: index.php");
exit();