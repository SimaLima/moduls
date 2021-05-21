/*
 * FUNCTION BASICS
 * Types of function definition: declaration, expression, IIFE
 */

// function declaration
function functionDeclaration() {
    console.log('function declaration')
}
functionDeclaration();


// function expression
var functionExpression = function() {
    console.log('function expression');
}
functionExpression();


// IIFE - immediately-invoked function expression
(function() {
    console.log('IIFE');
})();
