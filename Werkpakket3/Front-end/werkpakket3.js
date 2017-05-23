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
        var tableStr = returnEventsInTable(json);
        div.insertAdjacentHTML('beforeend', tableStr);
    }).catch(function (error) {
        alert("Error: " + error);
    });
}

function addEvent(url, event) {
    fetch(url, {
        method: 'post',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(event)
    }).then(function (response) {
        if (response.status == 201) {
            alert("Event created !");
        } else {
            alert("Something went wrong !\n" + response.status);
        }
    }).catch(function (error) {
        alert("Error: " + error);
    });
}

function returnEventsInTable(event) {
    $resultStr = "<table>" +
        "<tr>" +
        "<th>Event id</th>" +
        "<th>Titel</th>" +
        "<th>Datum ingave</th>" +
        "<th>Klant id</th>" +
        "<th>Start datum</th>" +
        "<th>Eind datum</th>" +
        "<th>Omschrijving</th>" +
        "<th>Verwachte aanwezigheid</th>" +
        "<th>Type</th>" +
        "<th>Toegewezen personeel id</th>"
    "</tr>";
    $resultStr += "<tr>";
    $resultStr += "<td>" + event[0].id + "</td>" +
        "<td>" + event[0].titel + "</td>" +
        "<td>" + event[0].datumIngave + "</td>" +
        "<td>" + event[0].klantId + "</td>" +
        "<td>" + event[0].startDatum + "</td>" +
        "<td>" + event[0].eindDatum + "</td>" +
        "<td>" + event[0].omschrijving + "</td>" +
        "<td>" + event[0].verwachteAanwezigheid + "</td>" +
        "<td>" + event[0].type + "</td>" +
        "<td>" + event[0].toegewezenPersoneel + "</td>";
    $resultStr += "</tr>";
    $resultStr += "</table>";
    return $resultStr;
}