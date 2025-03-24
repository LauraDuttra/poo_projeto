//  O polimorfismo permite que diferentes CLASSES tenhsm o mesmo método, mas 
// funcionando de formas diferentes


class pessoa{
    constructor(nome) {
        // o constructor é um método tradicional
        this.nome = nome;
    }
    apresentar= () =>console.log (`Oi meu nome é, ${this.nome} e sou uma aluna.`)
}

class  Aluno extends pessoa{
    apresetar = () =>console.log(`Oi meu nome é, ${this.nome} e sou um aluno.`);
}

class Professor extends pessoa{
    apresentar = () =>console.log(`Oi meu nome é, ${this.nome} e sou um professor.`)
}

// criando objetos
const Isabela = new Aluno ("Isabela");
const Raul = new Professor ("Raul")

Isabela.apresentar();
Raul.apresentar();


// Explicação Polimorfismo
// - PESSOA tem um método padrão APRESENTAR();
// - ALUNO e PROFESSOR herdam esse metodo, mas reescrevem, para exibir msg diferentes.
// - Mesmo metodo, e comportamentos diferentes isso é polimorfismo.
