/**
 * Created by julien on 17/05/2017.
 */
function getEventById($url, $document, $id) {
    fetch($url).then(function (data) {
        $document.getElementById('resultDiv').appendChild('<tr><td></td></tr>')
    })
}