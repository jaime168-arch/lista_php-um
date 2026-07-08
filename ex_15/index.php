<?php

require_once __DIR__ . '/funcoes.php';

echo "=== TESTANDO A BIBLIOTECA DE FUNÇÕES ===\n\n";


echo "1. IMC (80kg, 1.80m): " . calcularIMC(80, 1.80) . "\n";


$email = "jaime@sesi.com";
echo "2. E-mail '{$email}' é válido?: " . (validarEmail($email) ? "Sim" : "Não") . "\n";


echo "3. Senha Aleatória Gerada: " . gerarSenhaAleatoria(10) . "\n";


$textoVogais = "Lógica de Programação com PHP";
echo "4. Quantidade de vogais em '{$textoVogais}': " . contarVogais($textoVogais) . "\n";


$original = "SESI 2026";
echo "5. Texto '{$original}' invertido: " . inverterTexto($original) . "\n";


$nascimento = "2005-04-15";
echo "6. Quem nasceu em {$nascimento} tem: " . calcularIdade($nascimento) . " anos\n";


$dolar = 100;
echo "7. US$ {$dolar} em Reais (cotação R$ 5.50): R$ " . number_format(converterMoeda($dolar), 2, ',', '.') . "\n";

$foneSujo = "47999887766";
echo "8. Telefone Formatado: " . formatarTelefone($foneSujo) . "\n";


$horaAtual = 14; 
echo "9. Saudação para às {$horaAtual}h: " . gerarSaudacao($horaAtual) . "!\n";

$senhaTeste = "Sesi2026";
echo "10. A senha '{$senhaTeste}' é considerada forte?: " . (validarSenhaForte($senhaTeste) ? "Sim" : "Não") . "\n";


