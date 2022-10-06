import Driver from 'driver.js/src/index';

window.Driver = Driver;

/*
    driver.js/src/index.js
    add extra option
    onClose: () => null,              // When close button is clicked

    +

    change the code
    if (!clickedHighlightedElement && !clickedPopover && this.options.allowClose) {
      this.reset();
      return;
    }
    to
    if (!clickedHighlightedElement && !clickedPopover && this.options.allowClose) {
      const currentStep = this.steps[this.currentStep];
      if (currentStep && currentStep.options && currentStep.options.onClose) {
        currentStep.options.onClose(this.overlay.highlightedElement);
      }
      this.reset();
      return;
    }

    +

    Change the code
    if (closeClicked) {
      this.reset();
      return;
    }
    to
    if (closeClicked) {
      const currentStep = this.steps[this.currentStep];
      if (currentStep && currentStep.options && currentStep.options.onClose) {
        currentStep.options.onClose(this.overlay.highlightedElement);
      }
      this.reset();
      return;
    }
 */