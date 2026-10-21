<?php
function enviarCodigo(string $para, string $codigo): void {
    error_log("Código para $para: $codigo");
}