<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

    /* ------- Outputting Content ------- */

    // Echo - Output strings, numbers, html, etc
    echo 'Hello';
    echo 123;
    echo '<h3>Hello</h3>';
    echo 1, "hiii", "<h5>nice</h5>"; // Multiple lines can be displayed
    // echo [1,2,3]; Not possible.

    // print - Similar to echo, but a bit slower
    print 'Hello from normal print-';
    // print 1, 'hi' ---> is not possible. only one parameter can be given

    // print_r - Gives a bit more info. Can be used to print arrays
    print_r('Hello from print_r');
    print_r(['1', 2, 3]);

    // var_dump - Even more info like data type and length
    var_dump('Hello from var_dump');
    var_dump([1, '2', 3]);
    var_dump(true);

    // another way of displaying the values
    var_export(true);

    // Escaping characters with a backslash
    echo 'Is your name O\'reilly?';

    /* ------------ Comments ------------ */

    // This is a single line comment

    /*
        * This is a multi-line comment
    */

    // If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Output Page</title>
    </head>
    <body>
        <!-- You can output PHP including variables, etc -->
        <h1>Hello <?php echo 'Brad'; ?></h1>
        <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
        <h1>Hello <?= 'Brad' ?></h1>
    </body>
</html>