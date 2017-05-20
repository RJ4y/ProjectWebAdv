/**
 * Created by julien on 17/05/2017.
 */
function getEventById(url, div, eventId) {
    $finalUrl = url + eventId;
    fetch($finalUrl, {
        method: 'get'
    }).then(function (response) {
        return response.json();
    }).then(function (json) {
        console.log(json);
        var tableStr = returnEventsInTable(json);
        div.insertAdjacentHTML('beforeend', tableStr);
    }).catch(function (error) {
        alert("Error: " + error);
    });
}

function addEvent(url, div, event){
    fetch(url, {
        method: 'post',
        
    })
}

function returnEventsInTable(event) {
    $resultStr = "<table>" +
        "<tr>" +
        "<th>Event id</th>" +
        "<th>Titel</th>" +
        "<th>Klant id</th>" +
        "<th>Adres id</th>" +
        "<th>Type</th>" +
        "<th>Planning datum</th>" +
        "<th>Omschijving</th>" +
        "<th>Personeel id</th>" +
        "<th>Start datum</th>" +
        "<th>Eind datum</th>" +
        "<th>Verwachte aanwezigheid</th>"
        "</tr>";

        $resultStr += "<tr>";
        $resultStr += "<td>" + event.eventId + "</td>" +
            "<td>" + event.naam + "</td>" +
            "<td>" + event.klantId + "</td>" +
            "<td>" + event.adresId + "</td>" +
            "<td>" + event.type + "</td>" +
            "<td>" + event.planningDatum + "</td>" +
            "<td>" + event.omschrijving + "</td>" +
            "<td>" + event.personeelId + "</td>" +
            "<td>" + event.startDatum + "</td>" +
            "<td>" + event.eindDatum + "</td>"+
            "<td>" + event.verwachteAanwezigheid + "</td>";
        $resultStr += "</tr>";
    $resultStr += "</table>";
    return $resultStr;
}