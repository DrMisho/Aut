export default {
  inserted(el, binding) {
    const modifiers = binding.modifiers ||
        /* istanbul ignore next */
        {};
    const value = binding.value;
    const isObject = typeof value === 'object';
    const callback = isObject ? value.handler : value;
    const {
      once,
      ...modifierKeys
    } = modifiers;
    const hasModifiers = Object.keys(modifierKeys).length > 0;
    const hasOptions = isObject && value.options; // Options take top priority

    const options = hasOptions ? value.options : hasModifiers // If we have modifiers, use only those provided
        ? {
          attributes: modifierKeys.attr,
          childList: modifierKeys.child,
          subtree: modifierKeys.sub,
          characterData: modifierKeys.char // Defaults to everything on

        } : {
          attributes: true,
          childList: true,
          subtree: true,
          characterData: true
        };
    const observer = new MutationObserver((mutationsList, observer) => {
      /* istanbul ignore if */
      if (!el._mutate) return; // Just in case, should never fire

      callback(mutationsList, observer); // If has the once modifier, unbind

      once && unbind(el);
    });
    observer.observe(el, options);
    el._mutate = {
      observer
    };
  },
  unbind(el) {
    /* istanbul ignore if */
    if (!el._mutate) return;

    el._mutate.observer.disconnect();

    delete el._mutate;
  }
};
