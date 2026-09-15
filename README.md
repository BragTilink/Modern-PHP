# PHP Moderno — Curso em Vídeo

Anotações dos meus estudos de **PHP Moderno** pelo Curso em Vídeo.

---

# PHP

Para executar os códigos PHP durante os estudos, utilize a pasta destinada ao servidor/local de desenvolvimento (a "pasta especial" mencionada no curso).

Para escrever algo na tela, podemos utilizar:

```php
echo "Olá, mundo!";
```

Também é possível utilizar:

```php
print "Olá, mundo!";
```

`echo` é o mais utilizado para exibir informações.

## Emojis

A partir do **PHP 7**, é possível utilizar `\u{}` dentro de strings com aspas duplas para representar caracteres Unicode.

```php
echo "PHP \u{1F418}";
```

Resultado:

```text
PHP 🐘
```

---

# Variáveis e Constantes

## Variável

Uma **variável** é um espaço na memória cujo valor pode mudar durante a execução do programa.

No PHP, uma variável é criada utilizando o símbolo `$`:

```php
$nome = "João";
$idade = 20;
```

O valor de uma variável pode ser alterado:

```php
$idade = 20;
$idade = 21;
```

---

## Constante

Uma **constante** representa um valor que não deve ser alterado durante a execução do programa.

Uma constante pode ser declarada usando `const`:

```php
const NOME = "João";
```

Enquanto uma variável utiliza `$`:

```php
$idade = 20;
```

uma constante não utiliza `$`:

```php
const IDADE = 20;
```

### Resumindo

| Variável                    | Constante                       |
| --------------------------- | ------------------------------- |
| Pode ter seu valor alterado | Não deve ter seu valor alterado |
| Usa `$`                     | Não usa `$`                     |
| `$nome`                     | `NOME`                          |

---

# Regras para Identificadores

Identificadores são os nomes utilizados para variáveis, constantes, funções, classes etc.

Para variáveis:

1. Devem começar com `$`.
2. Depois do `$`, o nome deve começar com uma letra ou `_`.
3. Podem conter letras de `A-Z` e `a-z`, números de `0-9` e `_`.
4. O PHP permite caracteres acentuados e outros caracteres Unicode, embora seja recomendado evitar isso nos nomes.
5. O PHP é **case-sensitive**: maiúsculas e minúsculas fazem diferença.
6. Existem nomes reservados/especiais que não podem ser utilizados livremente, como `$this`.

Exemplo:

```php
$nome = "Carlos";
$Nome = "João";
```

São duas variáveis diferentes.

---

# Recomendações para Identificadores

Além das regras obrigatórias, existem boas práticas para deixar o código mais organizado.

1. Dê nomes claros e fáceis de identificar.
2. Evite nomes excessivamente curtos ou longos.
3. Defina um padrão de nomenclatura e utilize-o em todo o projeto.
4. Para variáveis, prefira nomes em letras minúsculas.
5. Para constantes, prefira letras maiúsculas.
6. Para métodos e atributos, utilize **camelCase**.
7. Para constantes, utilize **SNAKE_CASE**.

Exemplos:

```php
$nomeCompleto = "João Silva";

const TAXA_JUROS = 0.05;
```

---

# Tipos de Dados

Os tipos de dados indicam que tipo de informação uma variável pode armazenar.

## Tipos escalares

São os tipos mais básicos.

### `string`

Representa uma sequência de caracteres:

```php
$nome = "João";
```

Strings podem conter letras, números e símbolos.

---

### `int` / `integer`

Representa números inteiros, sem parte decimal:

```php
$idade = 20;
```

---

### `float` / `double`

Representa números com casas decimais:

```php
$altura = 1.75;
```

No PHP, normalmente utilizamos `.` para separar a parte inteira da decimal.

---

### `bool` / `boolean`

Representa um valor lógico.

Possui apenas dois valores:

```php
true
false
```

Exemplo:

```php
$aprovado = true;
```

---

# Tipos Compostos

## `array`

Um `array` permite armazenar vários valores em uma única estrutura.

```php
$frutas = ["Maçã", "Banana", "Laranja"];
```

---

## `object`

Representa um objeto criado a partir de uma classe.

```php
class Pessoa {
    public string $nome;
}
```

---

# Tipos Especiais

## `null`

Representa a ausência de um valor.

```php
$nome = null;
```

---

## `resource`

Representa uma referência para um recurso externo, como determinados recursos abertos pelo PHP.

É um tipo mais específico e aparece principalmente ao trabalhar com determinados recursos do sistema.

---

## `callable`

Representa algo que pode ser chamado como uma função, como uma função ou método.

---

## `mixed`

`mixed` significa que um valor pode ser de vários tipos diferentes.

Por exemplo, uma variável pode receber uma `string`, `int`, `array` etc.

---

# Strings

Strings são sequências de caracteres.

No PHP, podemos utilizar principalmente:

* aspas duplas `" "`
* aspas simples `' '`
* Heredoc
* Nowdoc

---

## Aspas duplas

Com aspas duplas, o PHP interpreta variáveis e determinadas sequências especiais dentro da string.

```php
echo "Olá, mundo!";
```

Também podemos utilizar Unicode:

```php
echo "PHP \u{1F418}";
```

Resultado:

```text
PHP 🐘
```

As variáveis também podem ser interpoladas:

```php
$nome = "João";

echo "Olá, $nome!";
```

Resultado:

```text
Olá, João!
```

---

## Aspas simples

Com aspas simples, o PHP não realiza interpolação de variáveis.

```php
$nome = "João";

echo 'Olá, $nome!';
```

Resultado:

```text
Olá, $nome!
```

Também não há interpretação de `\u{}`:

```php
echo 'PHP \u{1F418}';
```

Resultado:

```text
PHP \u{1F418}
```

---

# Interpolação

**Interpolação** é quando o PHP substitui uma variável dentro de uma string pelo valor armazenado nela.

Exemplo:

```php
$nome = "Carlos";

echo "Meu nome é $nome.";
```

Resultado:

```text
Meu nome é Carlos.
```

A interpolação funciona em strings com **aspas duplas**.

---

# Concatenação

O operador `.` (ponto) é utilizado para **concatenar**, ou seja, juntar strings.

```php
$nome = "Carlos";

echo "Olá, " . $nome;
```

Resultado:

```text
Olá, Carlos
```

Podemos concatenar várias partes:

```php
echo "Olá, " . $nome . "! Seja bem-vindo.";
```

---

## Constantes e concatenação

Constantes não são interpoladas da mesma forma que variáveis.

Por isso, podemos utilizar concatenação:

```php
const NOME = "Carlos";

echo "O nome é " . NOME;
```

---

## Funções dentro de strings

Colocar uma função dentro de uma string não faz o PHP executar essa função.

Por exemplo:

```php
echo "Estamos no ano de date('Y')";
```

O PHP interpretará `date('Y')` como texto.

Para executar a função, podemos utilizar concatenação:

```php
echo "Estamos no ano de " . date('Y');
```

---

# Aspas dentro de strings

É possível utilizar aspas simples dentro de aspas duplas:

```php
echo "Ele disse: 'Olá!'";
```

E aspas duplas dentro de aspas simples:

```php
echo 'Ele disse: "Olá!"';
```

---

# Sequências de Escape

As sequências de escape permitem representar determinados caracteres dentro de strings.

| Sequência | Função               |
| --------- | -------------------- |
| `\n`      | Nova linha           |
| `\t`      | Tabulação horizontal |
| `\\`      | Barra invertida      |
| `\$`      | Símbolo `$`          |
| `\"`      | Aspas duplas         |
| `\'`      | Aspas simples        |
| `\u{}`    | Caractere Unicode    |

### Exemplo

```php
echo "Olá!\nTudo bem?";
```

Resultado:

```text
Olá!
Tudo bem?
```

Para colocar aspas duplas dentro de uma string delimitada por aspas duplas:

```php
echo "Ele disse: \"Olá!\"";
```

---

# Heredoc

O **Heredoc** permite criar strings maiores utilizando uma sintaxe semelhante a um bloco de texto.

Exemplo:

```php
$texto = <<<TEXTO
Este é um texto
escrito em várias linhas.
TEXTO;
```

O Heredoc permite interpolação de variáveis.

---

# Nowdoc

O **Nowdoc** é semelhante ao Heredoc, porém seu conteúdo é tratado de forma semelhante às aspas simples.

Exemplo:

```php
$texto = <<<'TEXTO'
Este é um texto
com $variavel escrito literalmente.
TEXTO;
```

A variável não será interpolada.

---

# Operadores Aritméticos

O PHP possui os principais operadores matemáticos:

| Operador | Operação         |
| -------- | ---------------- |
| `+`      | Adição           |
| `-`      | Subtração        |
| `*`      | Multiplicação    |
| `/`      | Divisão          |
| `%`      | Resto da divisão |
| `**`     | Potenciação      |

Exemplos:

```php
$a = 10;
$b = 3;

echo $a + $b;  // 13
echo $a - $b;  // 7
echo $a * $b;  // 30
echo $a / $b;  // 3.333...
echo $a % $b;  // 1
echo $a ** $b; // 1000
```

> **Atenção:** `%` não significa "divisão inteira" nem "módulo" no sentido de uma operação que retorna a parte inteira. No PHP, `%` retorna o **resto da divisão inteira**.

---

## Conversão automática de tipos

O PHP possui conversões automáticas de tipos em determinadas operações.

Por exemplo:

```php
$a = "10";
$b = 5;

echo $a + $b;
```

Nesse contexto, o PHP pode interpretar `"10"` como um número e realizar a soma.

Resultado:

```text
15
```

Mesmo assim, é importante entender os tipos e não depender excessivamente de conversões automáticas, principalmente em sistemas maiores.

---

# Funções Matemáticas

O PHP possui várias funções prontas para operações matemáticas.

| Função           | Função                              |
| ---------------- | ----------------------------------- |
| `abs()`          | Valor absoluto                      |
| `base_convert()` | Converte números entre bases        |
| `ceil()`         | Arredonda para cima                 |
| `floor()`        | Arredonda para baixo                |
| `round()`        | Arredonda para o valor mais próximo |
| `hypot()`        | Calcula a hipotenusa                |
| `intdiv()`       | Realiza divisão inteira             |
| `min()`          | Retorna o menor valor               |
| `max()`          | Retorna o maior valor               |
| `pi()`           | Retorna o valor de π                |
| `pow()`          | Potenciação                         |
| `sin()`          | Seno                                |
| `cos()`          | Cosseno                             |
| `tan()`          | Tangente                            |
| `sqrt()`         | Raiz quadrada                       |

Exemplos:

```php
echo abs(-10);       // 10
echo ceil(4.2);      // 5
echo floor(4.8);     // 4
echo round(4.6);     // 5
echo intdiv(10, 3);  // 3
echo sqrt(25);       // 5
```

---

# Superglobais

As **superglobais** são variáveis especiais disponibilizadas pelo PHP que podem ser acessadas em diferentes escopos.

Algumas das principais são:

* `$_GET`
* `$_POST`
* `$_REQUEST`
* `$_COOKIE`
* `$_FILES`
* `$_SESSION`
* `$_ENV`
* `$_SERVER`
* `$GLOBALS`

---

## `$_GET`

É utilizada para receber dados enviados através do método **GET**, normalmente por meio da URL.

Exemplo de URL:

```text
pagina.php?nome=Carlos
```

No PHP:

```php
echo $_GET["nome"];
```

Resultado:

```text
Carlos
```

---

## Query String

A parte da URL que contém parâmetros enviados dessa maneira é chamada de **query string**.

Exemplo:

```text
pagina.php?nome=Carlos&idade=20
```

Nesse caso:

```text
nome=Carlos
idade=20
```

são parâmetros da query string.

---

# `$_POST`

É utilizada para receber dados enviados através do método **POST**, normalmente por formulários.

Exemplo:

```html
<form method="post">
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>
```

No PHP:

```php
$nome = $_POST["nome"];
```

---

# `$_REQUEST`

Combina dados provenientes de algumas fontes de entrada, principalmente:

* `$_GET`
* `$_POST`
* `$_COOKIE`

Exemplo:

```php
$nome = $_REQUEST["nome"];
```

Apesar de ser prática, em sistemas reais geralmente é melhor especificar explicitamente a origem dos dados usando `$_GET` ou `$_POST`.

---

# `$_COOKIE`

Permite acessar os cookies enviados pelo navegador.

```php
$_COOKIE
```

Cookies podem ser utilizados para armazenar pequenas informações no navegador do usuário.

---

# `$_FILES`

É utilizada para receber informações sobre **arquivos enviados através de formulários**.

Exemplo:

```php
$_FILES["arquivo"]
```

> `$_FILES` não é responsável por "pegar arquivos feitos downloads". Ela é utilizada principalmente para **uploads de arquivos** enviados pelo usuário.

---

# `$_SESSION`

É utilizada para armazenar variáveis de sessão.

```php
$_SESSION
```

Sessões são muito utilizadas em sistemas de login, por exemplo, para manter o usuário autenticado enquanto navega pelo sistema.

---

# `$_ENV`

Contém informações relacionadas às **variáveis de ambiente** disponíveis para o PHP.

```php
$_ENV
```

Variáveis de ambiente são muito utilizadas para configurações que não devem ficar diretamente no código, como determinadas credenciais e configurações de ambiente.

---

# `$_SERVER`

Contém informações sobre o servidor e sobre a requisição atual.

```php
$_SERVER
```

Por exemplo:

```php
$_SERVER["REQUEST_METHOD"]
```

pode indicar se a requisição foi feita utilizando `GET`, `POST` etc.

---

# `$GLOBALS`

Permite acessar variáveis globais através do array `$GLOBALS`.

```php
$GLOBALS
```

Ele contém referências para variáveis definidas no escopo global.

---

# PHP + HTML

Uma aplicação PHP pode receber informações de um formulário HTML, processá-las e gerar uma nova página HTML.

Porém, simplesmente fazer o PHP receber os dados do HTML e devolver tudo novamente para a página nem sempre é a melhor abordagem.

Em aplicações maiores, é importante organizar corretamente:

* HTML
* PHP
* lógica de negócio
* processamento dos dados
* acesso ao banco de dados
* segurança

---

# Formulário PHP Retroalimentado

Um **formulário retroalimentado** é um formulário em que o PHP recebe os dados enviados pelo usuário e, ao gerar novamente a página, mantém ou utiliza essas informações.

Esse conceito é importante para criar formulários mais interativos e evitar que o usuário precise preencher novamente informações após uma submissão.

Exemplo conceitual:

```text
Usuário
   ↓
Preenche formulário HTML
   ↓
Envia os dados
   ↓
PHP recebe com $_POST
   ↓
PHP processa os dados
   ↓
PHP gera novamente o HTML
   ↓
Usuário recebe a página atualizada
```

Esse conceito será utilizado posteriormente para construir sistemas web mais completos.
