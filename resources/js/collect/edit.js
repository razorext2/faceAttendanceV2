import { quillText } from "./func/quillText";
import { zoomImage } from "./func/zoomImage";
import { editDataHandler } from "./func/formHandler";

document.addEventListener("DOMContentLoaded", function () {
  quillText(data, true);
  zoomImage();
  editDataHandler();
})