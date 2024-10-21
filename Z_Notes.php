Single quoted strings will display things exactly “as is.” Variables will not be
substituted for their values. The first example above (echo ‘Hello $name’; ) will print
out Hello $name.
Double quote strings will display a host of escaped characters and variables in the
strings will be substituted for their values. The second example above (echo “Hello
$name” ) will print out Hello Alan if the $name variable contains ‘Alan’.

equal to sign
assignments
$a = 1;
$b = '1';

comparison, not strict as it compares just values and assumes it assumes after casting(convserting a variable from one type to another) they are the session_name
$a == $b;  returns true


strict comparison even with the types
$a === $b; returns false


not equal to 
$a != $b;

not identical
$a !== $b;