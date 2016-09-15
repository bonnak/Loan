import { onresize } from '../ui/actions.js';

export default{
  bind: function () {
  },
  update: function (newValue, oldValue) {
    onresize();
  },
  unbind: function () {
  }
}