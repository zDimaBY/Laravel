/* window.addEventListener('DOMContentLoaded', () => {
  function req() {
    const request = new XMLHttpRequest()
    request.open('GET', 'http://localhost:3000/people')
    request.setRequestHeader('Content-type', 'application/json; charset=utf-8')
    request.send()
    request.addEventListener('readystatechange', function () {
      if (request.readyState === 4 && request.status == 200) {
        let data = JSON.parse(request.response)
        console.log(data)
      } else {
        console.error('error')
      }
    })
  }
  req()
})
 */
function funcBefore() {
  $('#text').text('Loanding data')
}
function funcSuccess(data) {
  $('#text').text(data)
}
$(document).ready(function () {
  $('#load').bind('click', function () {
    var turn = '0'
    $.ajax({
      url: 'conect.php',
      type: 'POST',
      data: { name: turn },
      dataType: 'html',
      beforeSend: funcBefore,
      success: funcSuccess,
    })
  })
})
