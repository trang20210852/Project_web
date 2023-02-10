<title>AJAX Forms - Web - dcode</title>
<link rel="stylesheet" href="http://youtube.local/assets/dcode.css">
<link rel="shortcut icon" href="http://youtube.local/assets/favicon.ico">

<style>
    #form-messages {
        background-color: rgb(255, 232, 232);
        border: 1px solid red;
        color: red;
        display: none;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 10px;
        padding: 10px 25px;
        max-width: 250px;
    }
</style>

<body>
    <h1>AJAX Forms - Web - dcode</h1>
    <div class="form">
        <ul id="form-messages"></ul>

        <label for="username">Username</label>
        <input type="text" id="username" spellcheck="false">

        <label for="password">Password</label>
        <input type="password" id="password">

        <button type="submit" id="btn-submit">Login</button>
    </div>
    <script>
        const form = {
            username: document.getElementById('username'),
            password: document.getElementById('password'),
            submit: document.getElementById('btn-submit'),
            messages: document.getElementById('form-messages')
        };

        form.submit.addEventListener('click', () => {
            const request = new XMLHttpRequest();

            request.onload = () => {
                let responseObject = null;

                try {
                    responseObject = JSON.parse(request.responseText);
                } catch (e) {
                    console.error('Could not parse JSON!');
                }

                if (responseObject) {
                    handleResponse(responseObject);
                }
            };

            const requestData = `username=${form.username.value}&password=${form.password.value}`;

            request.open('post', 'check.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });

        function handleResponse (responseObject) {
            if (responseObject.ok) {
                location.href = '1.php';
            } else {
                while (form.messages.firstChild) {
                    form.messages.removeChild(form.messages.firstChild);
                }

                responseObject.messages.forEach((message) => {
                    const li = document.createElement('li');
                    li.textContent = message;
                    form.messages.appendChild(li);
                });

                form.messages.style.display = "block";
            }
        }
    </script>
</body>