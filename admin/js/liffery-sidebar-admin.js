/**
 * IIFE to prevent external collision
 */
(function () {
  var currentHeight = 1000

  function setLifferyIframeHeight () {
    var frame = document.getElementById('liffery-accounts-iframe')
    frame.setAttribute('height', currentHeight)
  }

  window.addEventListener('message', (payload) => {
    // We dynamically set the frame height here to prevent double y-scroll bars
    var data = payload.data
    if (data && data.bodyHeight && typeof data.bodyHeight === 'number') {
      currentHeight = data.bodyHeight + 250
      setLifferyIframeHeight()
    }
  })
})()
