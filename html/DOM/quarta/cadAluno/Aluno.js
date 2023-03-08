export class Aluno {
    nome; //_nome;
    matricula;
    nota1;
    nota2;
    nota3;
    /*
        get nome() {
            return this._nome;
        }

       set nome(name) {
            this._nome = name;
        }
    */
    constructor(nome, matricula, nota1, nota2, nota3) {
        this.nome = nome;
        this.matricula = matricula;
        this.nota1 = nota1;
        this.nota2 = nota2;
        this.nota3 = nota3;
    }
    exibeInfo() {
        return `Aluno: ${this.nome} - mat: ${this.matricula}
        Notas: N1: ${this.nota1} - N2: ${this.nota2} - N3: ${this.nota3}
        Média: ${this.calculaMedia()}`;
    }
    calculaMedia() {
        return ((this.nota1 + this.nota2 + this.nota3) / 3).toFixed(2);
    }
    /*
        getPrimeiroNome() {
            return this.nome.split(" ")[0];
        }
    */
}

const a1 = new Aluno('João das Neves', 1155, 10, 9, 10);
console.log(a1.exibeInfo());