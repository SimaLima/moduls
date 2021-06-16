/*
 * OBJECTS: PROPERTIES AND METHODS
 * Basic handling with objects.
 */

var person = {
    firstName: 'Simun',
    lastName: 'Ivanac',
    age: 25,
    fullName: function() {
        return this.firstName + ' ' + this.lastName;
    }
};

// changing values (objectName.property || objectName['property'])
person.age = 25.5;

// add property
person.nationality = 'Croatian';

// delete property
delete person.age;

// accessing methods (objectName.methodName())
person.fullName();

// add method to object
person.fullNameReversed = function() {
    return this.lastName + ' ' + this.firstName;
};
