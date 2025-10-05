<body>
    <footer>
        <p id="reloj">
            <?php
            echo date("d/m/Y H:i:s");
            ?>
        </p>

        <script>
            function actualizarReloj() {
                const ahora = new Date();
                const fecha = ahora.toLocaleDateString();
                const hora = ahora.toLocaleTimeString();
                document.getElementById("reloj").textContent = `${fecha} ${hora}`;
            }

            setInterval(actualizarReloj);
            actualizarReloj();
        </script>
    </footer>
</body>
