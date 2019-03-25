# Javascript Sticky footer
## Bulletproof/cross-browser (IE6+).
## Simple and easy to implement, only require the footer tag to be presented.

```
// Sticky footer
var wrapper = document.createElement('div');
var footer = document.getElementsByTagName('footer')[0];

// Move the body's children (not footer) into wrapper
while (document.body.firstChild !== footer) {
  wrapper.appendChild(document.body.firstChild);
}

// Append the wrapper to the body
document.body.insertAdjacentElement('afterbegin', wrapper); 

// Add minheight to the wrapper
function setMinHeight(){
  wrapper.style.minHeight = window.innerHeight - footer.offsetHeight + 'px';
}
 
// Change minheight value if window resised
setMinHeight();
window.onresize = function() {
  setMinHeight();
}
```
