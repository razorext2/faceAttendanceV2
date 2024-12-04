export function quillText() {
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

  CustomEmbed.blotName = 'customEmbed';
  CustomEmbed.tagName = 'div';
  Quill.register(CustomEmbed);

  const quill = new Quill('#editor', {
    theme: 'snow',
    placeholder: 'Tulis keterangan...',
    modules: {
      toolbar: [
        [{ 'header': [1, 2, false] }],
        ['bold', 'italic', 'underline'],
        ['code-block'],
        [{ 'list': 'ordered' }, { 'list': 'bullet' }]
      ],
    }
  });

  document.querySelector('.ql-toolbar').classList.add('dark:bg-white', 'rounded-t-lg');
  document.querySelector('.ql-picker').classList.add('dark:bg-white');
  document.getElementById('editor').classList.add('!h-96', 'rounded-b-lg');
  document.getElementById("keterangan").classList.add("mt-2");

  $('#store').on('click', function () {
    const content = quill.root.innerHTML;
    $('#keterangan').val(content);
  });
}
