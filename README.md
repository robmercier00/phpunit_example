
# phpunit_example

This repo provides some examples of PHPUnit tests. The tests are run as follows:

CalculatorTest->testAdd() tests that Calculator->add() adds two numbers together.  
CalculatorTest->testSubtract() tests that Calculator->subtract() subtracts the
first number from the second number.  
CalculatorTest->testMultiply() tests that Calculator->multiply() multiplies two
numbers together.  
CalculatorTest->testDivide() tests that Calculator->divide() divides the first
number by the second number.  
CalculatorTest->testIsMultiple() tests that Calculator->isMultiple() to ensure
that the first number is a multiple of the second number.

Assuming you've got PHPUnit installed, running these tests is as simple as
entering `phpunit CalculatorTest.php` in your terminal from inside this directory.
