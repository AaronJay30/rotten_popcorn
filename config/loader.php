<style>
    .loader-container {
        width: 100vw;
        height: 100vh;
        position: absolute;
        background-color: #212121;
    }

    .loader {
        width: 150px;
        position: absolute;
        top: 50%;
        left: 40%;
        height: 40px;
        border-radius: 50%;
        position: relative;
        animation: bounce 5s infinite;
    }

    .loader::before {
        content: 'OGNITA';
        position: absolute;
        display: block;
        left: -28%;
        bottom: 55%;
        color: green;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 4em;
        font-weight: 900;
        font-style: italic;
        animation: div-color-change 5s infinite;
    }

    .loader::after {
        content: 'SANTI';
        position: absolute;
        top: 30%;
        left: 25%;
        color: #212121;
        font-size: .5em;
        font-weight: 800;
        letter-spacing: 10px;
        z-index: 1;
    }

    @keyframes bounce {
        0% {
            background-color: red;
            transform: translateX(0) translateY(60px);
        }

        25% {
            background-color: blue;
            transform: translateX(60px) translateY(0);
        }

        55% {
            background-color: green;
            transform: translateX(0) translateY(-60px);
        }

        75% {
            background-color: yellow;
            transform: translateX(-60px) translateY(0);
        }

        100% {
            background-color: purple;
            transform: translateX(0) translateY(60px);
        }
    }

    @keyframes div-color-change {
        0% {
            color: red;
        }

        25% {
            color: blue;
        }

        55% {
            color: green;
        }

        75% {
            color: yellow;
        }

        100% {
            color: purple;
        }
    }
</style>
<div class="loader-container" id="loader-container">
    <div class="loader"></div>
</div>

<script>
    setTimeout(function() {
        const element = document.getElementById('loader-container');
        element.style.display = 'none';
    }, 60000);
</script>