import { quillText } from './func/quillText';
import { backCameraStream } from './func/cameraStream';
import { addDataHandler } from './func/formHandler';
import { getLocation } from './func/geoLocation';

document.addEventListener("DOMContentLoaded", function () {
  quillText();
  backCameraStream();
  getLocation();
  addDataHandler();
});
