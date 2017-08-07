// Rollover  v2.0.1


function isDefined(property) {
  return (typeof property != 'undefined');
}

var rolloverInitialized = false;
function rolloverInit() {
   if (!rolloverInitialized && isDefined(document.images)) {
      
      // get all images (including all <input type="image">s)
      // use getElementsByTagName() if supported
      var images = new Array();
      if (isDefined(document.getElementsByTagName)) {
         images = document.getElementsByTagName('img');
         var inputs = document.getElementsByTagName('input');
         for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].type == 'image') {
               images[images.length] = inputs[i];
            }
         }
      }
      
      // otherwise, use document.images and document.forms collections
      // remove if not supporting IE4, Opera 4-5
      else {
         images = document.images;
         inputs = new Array();
         for (var formIndex = 0; formIndex < document.forms.length; formIndex++) {
            for (var elementIndex = 0; elementIndex < document.forms.elements.length; elementIndex++) {
               if (isDefined(document.forms.elements[i].src)) {
                  inputs[inputs.length] = document.forms.elements[i];
               }
            }
         }
      }
      
      // get all images with '_off.' in src value
      for (var i = 0; i < images.length; i++) {
         if (images[i].src.indexOf('_off.') != -1) {
            var image = images[i];
            
            // store the off state filename in a property of the image object
            image.offImage = new Image();
			