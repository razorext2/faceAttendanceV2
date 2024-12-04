import { quillText } from './quillText';
import { backCameraStream } from './cameraStream';
import { addDataHandler } from './formHandler';
import { getLocation } from './geoLocation';

document.addEventListener("DOMContentLoaded", function () {
  quillText();
  backCameraStream();
  getLocation();
  addDataHandler();
});
