import Quill from "quill";

export function quillInputBuilder() {

  const BlockEmbed = Quill.import('blots/block/embed');

  class CustomEmbed extends BlockEmbed {
    static create(value) {
      let node = super.create();
      node.setAttribute('data-value', value);
      return node;
    }

    static format(node) {
      return node.getAttribute('data-value');
    }
  }

  // Register the custom blot
  CustomEmbed.blotName = 'customEmbed'; // The name you want to use
  CustomEmbed.tagName = 'div'; // HTML tag
  Quill.register(CustomEmbed);

  // Initialize Quill
  const quill = new Quill('#editor', {
    theme: 'snow',
    placeholder: 'Tulis keterangan...',
    modules: {
      toolbar: [
        [{
          'header': [1, 2, false]
        }],
        ['bold', 'italic', 'underline'],
        ['image', 'code-block'],
        [{
          'list': 'ordered'
        }, {
          'list': 'bullet'
        }]
      ],
    }
  });

  document.querySelector('.ql-toolbar').classList.add('dark:bg-white', 'rounded-t-lg');
  document.querySelector('.ql-picker').classList.add('dark:bg-white');
  document.getElementById('editor').classList.add('!h-96', 'rounded-b-lg');
}