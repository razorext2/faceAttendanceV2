import { quillText } from "./func/quillText";
import { zoomImage } from "./func/zoomImage";
import { confirmAction } from "./func/validate";

document.addEventListener("DOMContentLoaded", function () {
  quillText(data, false);
  zoomImage();
  confirmAction();
})