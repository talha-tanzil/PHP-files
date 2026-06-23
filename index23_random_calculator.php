<?php
// Initialize variables to store results or errors
$result = '';
$error = '';

// Check if the form has been submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize user input data
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Validation: Ensure both fields are filled with numeric values
    if ($num1 === '' || $num2 === '') {
        $error = "Please enter both numbers.";
    } elseif (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "Both inputs must be valid numbers.";
    } else {
        // Cast values to floats for accurate mathematical operations
        $num1 = (float)$num1;
        $num2 = (float)$num2;

        // Conditional if-else block to evaluate the selected math operation
        if ($operator == "add") {
            $result = $num1 + $num2;
        } elseif ($operator == "subtract") {
            $result = $num1 - $num2;
        } elseif ($operator == "multiply") {
            $result = $num1 * $num2;
        } elseif ($operator == "divide") {
            // Prevent execution if user tries to divide by zero
            if ($num2 == 0) {
                $error = "Division by zero error.";
            } else {
                $result = $num1 / $num2;
            }
        } else {
            $error = "Invalid operator selected.";
        }
    }
}
?>