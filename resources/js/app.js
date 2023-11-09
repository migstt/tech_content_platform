import './bootstrap';
import Editor from '@toast-ui/editor'
import 'codemirror/lib/codemirror.css';
import '@toast-ui/editor/dist/toastui-editor.css';

const editor = new Editor({
  el: document.querySelector('#editor'),
  height: '450px',
  initialEditType: 'markdown',
  placeholder: 'Write something cool!',
});

document.querySelector('#publishJournalForm').addEventListener('submit', e => {
  e.preventDefault();
  document.querySelector('#contents').value = editor.getMarkdown();
  e.target.submit();
});
