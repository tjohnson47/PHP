<?php
echo "<form action= 'quiz2.php' method='get'>";

echo "Enter your first name <input type= 'text' name='first'><br />";
echo "Enter your last name <input type= 'text' name='last'><br />";
echo "Enter your password <input type= 'password' name='pass'><br />";
echo "Enter your email<input type= 'text' name='email'><br />";
echo "M <input type= 'radio' name='Gender' value='male'>";
echo "F <input type= 'radio' name='Gender' value= 'female'><br />";
echo "<input type= 'checkbox' name='val[]' value='Hoagie'> Hoagie<br />";
echo "<input type= 'checkbox' name='val[]' value='Panini'> Panini<br />";
echo "<input type= 'checkbox' name='val[]' value='Chips'> Chips<br />";
echo "<input type= 'checkbox' name='val[]' value='Soda'> Soda<br />";
echo "<input type= 'checkbox' name='val[]' value='Salad'> Salad<br />";

echo "<select name='payment'>";
echo "<option 'Check'>Check</option>";
echo "<option 'Cash'>Cash</option>";
echo "<option 'Visa'>Visa</option>";
echo "<option 'MasterCard'>MasterCard</option>";
echo "<option 'American Express'>American Express</option>";

echo "</select>";
Echo "<input type= 'submit' value='Click Me'>";
echo "</form>";




?>

