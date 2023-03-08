class Aluno {
    nome;
    matricula;
    nota1;
    nota2;
    nota3;
    constructor(nome, matricula, n1, n2, n3) {
        this.nome = nome;
        this.matricula = matricula;
        this.nota1 = n1;
        this.nota2 = n2;
        this.nota3 = n3;
    } 
    exibeInfo() {
        return `Aluno: ${this.nome} - mat: ${this.matricula}
        Notas: N1: ${this.nota1} - N2: ${this.nota2} - N3: ${this.nota3}
        Média: ${this.calculaMedia()}`;
    }
    calculaMedia() {
        return ((this.nota1 + this.nota2 + this.nota3) / 3).toFixed(2);
    }
}
let a2 = {
    "nome": "João das Neves",
    "matricula": 16555,
    "nota1": 10,
    "nota1": 9,
    "nota1": 10
};
const a1 = new Aluno('Edkallenn', 16777, 10, 9, 10);
console.log(a1);
console.log(a1.exibeInfo());
console.log(a2);