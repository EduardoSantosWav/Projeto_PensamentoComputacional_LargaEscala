Projeto – Pensamento Computacional para Sistemas de Larga Escala
Descrição
Este projeto consiste na concepção e documentação de uma plataforma de e-commerce voltada para a marca AXIS LAB., focada em vestuário com estética minimalista e brutalista. O trabalho aplica os pilares do pensamento computacional para estruturar um sistema escalável e eficiente.

Objetivos
Relacionar os fundamentos de engenharia de software com o pensamento computacional.

Estruturar uma aplicação de e-commerce capaz de lidar com picos de demanda (larga escala).

Aplicar metodologias ágeis (Scrum/Kanban) na organização das tarefas de desenvolvimento.

Documentar a abstração e decomposição de módulos complexos de venda online.

Sistema Proposto
Nome do Sistema: E-commerce AXIS LAB.
Descrição:
Plataforma de vendas Direct-to-Consumer (DTC) que integra:

Catálogo de produtos com foco em drops de coleções.

Carrinho de compras e checkout integrado a gateways de pagamento.

Painel administrativo para gestão de estoque e pedidos.

Sistema de rastreamento e notificações para o cliente.

Pensamento Computacional Aplicado
Decomposição:
Gestão de Inventário: Controle de SKU, cores e tamanhos (ex: boxy shirts, tank tops).

Módulo de Pagamentos: Integração segura com APIs bancárias e cartões.

Logística: Cálculo de frete e integração com transportadoras.

User Experience (UX): Interface focada na identidade visual brutalista da marca.

Reconhecimento de Padrões:
Fluxo de checkout seguindo o padrão "One Page Checkout".

Filtros de busca baseados em categorias comuns de vestuário.

Persistência de dados do carrinho utilizando sessões de usuário.

Abstração:
Modelagem de dados simplificada para representar as entidades "Cliente", "Pedido" e "Produto" (UML).

Ocultação da complexidade das APIs de terceiros (pagamento/frete) através de interfaces de integração.

Algoritmos:
Lógica para aplicação de cupons de desconto progressivos.

Algoritmo de cálculo de prazo de entrega baseado em CEP e disponibilidade de estoque.

Metodologia de Desenvolvimento

Ferramentas: GitHub Projects para gestão de tarefas e versionamento de código.

Desafios Identificados
Escalabilidade: Suporte a grandes acessos simultâneos durante o lançamento de novos "drops".

Segurança: Proteção de dados transacionais e conformidade com a LGPD.

Performance: Otimização de imagens de alta qualidade (essenciais para moda) sem comprometer o carregamento da página.
