document.addEventListener("DOMContentLoaded", () => {
  let kofiOptions = Joomla.getOptions("kofi_options");

  kofiWidgetOverlay.draw(kofiOptions.username, {
    type: kofiOptions.type,
    "floating-chat.donateButton.text": kofiOptions.donateButtonText,
    "floating-chat.donateButton.background-color":
      kofiOptions.donateButtonBackgroundColor,
    "floating-chat.donateButton.text-color": kofiOptions.donateButtonTextColor,
  });
});
