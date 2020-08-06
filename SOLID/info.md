S - Single Responsibility Principle (Princicio da Responsabilidade Única);
O - Open-Closed Principle (Princípio Aberto-Fecado);
L - Liskov Substituition Principle (Princípio da Substituição Liskov);
I - Interface Segregation Principle (Princípio da Segregação de Classe);
D - Dependency Inversion Principle (Princípio da inversão de Dependencia);

S - Single Responsibility Principle (Princicio da Responsabilidade Única) - toda classe deve ter um e somente
um motivo pra mudar, a classe deve ter um motivo, ex classe deus. Trabalhando por exemplo com DAO que uma classe 
trata do Objeto e a outra trata dos movimentações, o model do MVC quase sempre viola esse principio;

O - Open-Closed Principle (Princípio Aberto-Fecado) - o objeto, classe etc... elas devem estar aberto para extensão,
ou seja possivel estentder a funcionalidade delas, porém fechadas para modificações; podemos usar o implements(interface) nas classes
para estar trabalhando com extensão aberta.

L - Liskov Substituition Principle (Princípio da Substituição Liskov) - o nome é insano, esse nome vem da pessoa que criou esse
principio que no caso é a barbara liskov, ela apresentou esse principio em 1980, a definição original é de que se para cada objeto
o1-tipo-S tem um objeto 02-tipo-T, de forma que para todos os programas P definidos em termos de P, o comportamento de P é inalteravel
quando 01 é substituido por 02 então S é um subtipo de T.

I - Interface Segregation Principle (Princípio da Segregação de Classe) - em uma interface eu tenho de ter apenas os metodos essenciais
das classes que estão implmentando ela. Criando uma interface que extends aquela primeira classe, por exemplo: Classe aves, não podemos colocar altitude, porque existem aves que não voam, temos de criar uma extenção dessa classe chamada avesQueVoam, e colocamos altitude 
nessa classe que, que vai usar todos os metodos de aves + os metodos de avesQueVoam.

D - Dependency Inversion Principle (Princípio da inversão de Dependencia) - usa uma interface, e manda para uma classe uma outra classe
que use a interface solicitada.