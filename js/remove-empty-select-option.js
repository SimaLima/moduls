/*
 * REMOVE EMPTY SELECT OPTION
 * Go through options and remove elements without value.
 */
 select
     .find('option')
     .filter(function() {
         return !this.value || $.trim(this.value).length == 0;
     })
     .remove();
