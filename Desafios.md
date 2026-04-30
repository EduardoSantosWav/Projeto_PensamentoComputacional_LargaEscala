# Desafios e Soluções Propostas

## Desafio 1: Picos de Acesso em Lançamentos (Drops)
**Problema:** Durante o lançamento de coleções exclusivas da AXIS LAB., o volume de acessos simultâneos pode sobrecarregar o servidor.
**Solução:** Implementação de Filas de Mensagens e sistemas de Cache (como Redis) para processar as requisições de forma ordenada sem derrubar o banco de dados.

## Desafio 2: Integridade de Estoque
**Problema:** Evitar que dois clientes comprem a última unidade de uma camiseta ao mesmo tempo.
**Solução:** Implementação de "Locks" (travas) transacionais no banco de dados durante o processo de checkout.

## Desafio 3: Performance de Imagens
**Problema:** O design brutalista exige fotos de alta resolução, o que pode tornar o site lento.
**Solução:** Utilização de compressão WebP e carregamento preguiçoso (Lazy Loading) para otimizar a velocidade de carregamento.
-
