// Default Laravel bootstrapper, installs axios
import './bootstrap';

// Added: Actual Bootstrap JavaScript dependency
import 'bootstrap';

// Added: Popper.js dependency for popover support in Bootstrap
import '@popperjs/core';


/**
 *  A function that copies the text via clicking
 * @param text  The parameter that will be copied
 * @returns {boolean}   If there was something to be copier or not
 */

function copy(text) {
    var input = document.createElement('textarea'); // Create a text area element
    input.innerHTML = text; // Copy the given parameter to the text area
    document.body.appendChild(input);   // Append it to the DOM
    input.select(); // Select the text area element
    var result = document.execCommand('copy');  // Copy to the clipboard the text of text area
    document.body.removeChild(input);   // Remove the text area from DOM
    return result;  // Return if it was successful or not
}
