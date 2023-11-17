Feature: Basic Arithmetic Operations

    Scenario: Addition
        Given a calculator is turned on
        When I enter the numbers 10 and 5 and press the + button
        Then the result displayed should be 15

    Scenario: Subtraction
        Given a calculator is turned on
        When I enter the numbers 10 and 5 and press the - button
        Then the result displayed should be 5

    Scenario: Multiplication
        Given a calculator is turned on
        When I enter the numbers 10 and 5 and press the * button
        Then the result displayed should be 50

    Scenario: Division
        Given a calculator is turned on
        When I enter the numbers 10 and 5 and press the / button
        Then the result displayed should be 2

    Scenario: Division by Zero Handling
        Given a calculator is turned on
        When I enter the numbers 10 and 0 and press the / button
        Then the result displayed should be an error message stating "Cannot divide by zero!"

    Scenario 6: Chain Operations
        Given a calculator is turned on
        When I enter the numbers 5, press the + button, enter 3, press the * button, enter 2, and press the = button
        Then the result displayed should be 16 (5 + 3 * 2)

    Scenario: Decimal Numbers
        Given a calculator is turned on
        When I enter the numbers 3.5 and 2.5 and press the + button
        Then the result displayed should be 6

    Scenario: Negative Numbers
        Given a calculator is turned on
        When I enter the numbers -8 and 4 and press the - button
        Then the result displayed should be -12
