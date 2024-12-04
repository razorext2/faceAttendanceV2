import { quillText } from "./quillText";
import { zoomImage } from "./zoomImage";
import { editDataHandler } from "./formHandler";

document.addEventListener("DOMContentLoaded", function () {
  quillText(data);
  zoomImage();
  editDataHandler();
})