<script type="text/javascript">
document.getElementById('rescueForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting via the default HTML form action

    const myHeaders = new Headers({
        "Authorization": "App 7ecce03e64d550d94cb5431880cc49df-65a4fa2b-2236-4669-a126-e0e29749c5f7",
        "Content-Type": "application/json",
        "Accept": "application/json"
    });

    const district = document.getElementById('district').value;
    const location = document.getElementById('location').value;
    const messageText = document.getElementById('messageText').value;

    const raw = JSON.stringify({
        "messages": [
            {
                "destinations": [{"to":"265897042038"}], // Add more numbers or modify as needed
                "from": "DodmaRescue",
                "text": messageText + " Please head to " + location + " in " + district + " for rescue."
            }
        ]
    });

    const requestOptions = {
        method: "POST",
        headers: myHeaders,
        body: raw,
        redirect: "follow"
    };

    fetch("https://y3ydrg.api.infobip.com/sms/2/text/advanced", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.error('Error:', error));
});
</script>
