// **Addition de deux nombres :** Écrivez un programme qui prend les nombres 5 et 3 en tant que variables, les ajoute ensemble, puis affiche le résultat.

// let valeur1 = 5
// let valeur2 =3

// console.log(valeur1+valeur2)

// **Soustraction de deux nombres :** Écrivez un programme qui prend les nombres 10 et 7 en tant que variables, les soustrait l'un de l'autre, puis affiche le résultat.

// let x = 10
// let y = 7

// console.log(x-y)

// **Multiplication de deux nombres :** Écrivez un programme qui prend les nombres 4 et 6 en tant que variables, les multiplie ensemble, puis affiche le résultat.

// let x = 4
// let y = 6

// console.log(x*y)

// **Concaténation de prénom et nom :** Écrivez un programme qui crée les variables `prenom` avec la valeur "John" et `nom` avec la valeur "Doe", et concatène-les pour former une seule chaîne représentant un nom complet. Affichez ensuite cette chaîne.

// let prenom = "John"
// let nom = "Doe"

// console.log(prenom, nom)

// **Construction d'une phrase :** Écrivez un programme qui crée les variables `sujet` avec la valeur "Le chat", `verbe` avec la valeur "mange", et `objet` avec la valeur "la souris", et les concatène pour former une phrase. Par exemple, "Le chat mange la souris".

// let sujet = "le chat"
// let verbe = "mange"
// let objet = "la souris"

// console.log(sujet, verbe, objet)

// **Fonction de salutation :** Écrivez une fonction nommée `saluer` qui prend le nom "Alice" en tant que paramètre et renvoie une chaîne de salutation personnalisée. Par exemple, elle doit renvoyer "Bonjour, Alice!".

// function saluer(Alice){
//     return "Bonjour" + " " + Alice;
// }
// console.log(saluer("Alice"))

// **Fonction de multiplication :** Écrivez une fonction nommée `multiplication` qui prend les nombres 7 et 8 en tant que paramètres et renvoie leur produit.

// function multiplication(valeur1, valeur2) {
//      return valeur1 * valeur2
    
// }
// let resultat = multiplication(7, 8)
// console.log(resultat)

// **Création et affichage d'un tableau :** Écrivez un programme qui crée un tableau avec les nombres 1, 2, 3, 4, 5, puis affiche chaque élément du tableau dans la console.

// let tableau = [1, 2, 3, 4, 5];
// tableau.forEach(element => {1, 2, 3, 4, 5
    
// });

// console.log(tableau)

// **Ajout et suppression d'éléments d'un tableau :** Écrivez un programme qui crée un tableau vide, ajoute les nombres 10, 20, 30 à ce tableau à l'aide de la méthode `push()`, puis supprime le premier élément à l'aide de la méthode `shift()`.

// let tableau = [];
// tableau.push(10,20,30);
// tableau.shift()


// console.log(tableau)

// **Création et affichage d'un objet :** Écrivez un programme qui crée un objet représentant une personne avec des propriétés telles que `nom` avec la valeur "Alice", `age` avec la valeur 25, `ville` avec la valeur "Paris", puis affiche les propriétés de cet objet dans la console.

// let personne = {
//     prenom: 'Alice',
//     age: 25,
//     ville: 'Paris'

// }
// console.log(personne)

// **Modification d'un objet :** Écrivez un programme qui crée un objet représentant un compte bancaire avec des propriétés telles que `solde` avec la valeur 1000 et `titulaire` avec la valeur "John Doe", puis modifie le solde de ce compte en ajoutant la valeur 500.

// let compte = {
//     solde: 1000,
//     titulaire: 'John Doe',
    
// }
// compte.solde = compte.solde + 500;

// console.log(compte)

// let age = 18

// if (age >= 18 ) {
//     console.log("majeur")
// }
// else  {
//     console.log("mineur")
// }

// Affichez les nombres pairs de 1 à 20 en utilisant une boucle for.

// for (let i = 2; i < 21; i+=2) {
//     console.log(i)

    
// }

// function annee(mois) {
//     switch (mois) {
//         case 1: 
//         case 3:    
//         case 5:    
//         case 7:    
//         case 8:    
//         case 10:
//         case 12: 
//             return 31   
//         case 2:
//         case 4:
//         case 6:
//         case 9:                
//         case 11:                
//             return 30
//     }
    
// }
// console.log("Le nombre de jours dans le mois de janvier est : " + annee(1))

// function nombreDeJours(num){
//     let nombreDeJours;
//     let annee = new Date().getFullYear();
//     switch (num) {
//     case 1:
//         nombreDeJours = 31;
//         break;
//     case 2:
//         if (annee % 4 == 0)
//             nombreDeJours =  29;
        
//         else nombreDeJours = 28;
//         ;
//         break;
//     case 3:
//         nombreDeJours = 31;
//         break;
//     case 4:
//         nombreDeJours = 30;
//         break;
//     case 5:
//         nombreDeJours = 31;
//         break;
//     case 6:
//         nombreDeJours = 30;
//         break;
//     case 7:
//         nombreDeJours = 31;
//         break;
//     case 8:
//         nombreDeJours = 31;
//         break;
//     case 9:
//         nombreDeJours = 30;
//         break;
//     case 10:
//         nombreDeJours = 31;
//         break;
//     case 11:
//         nombreDeJours = 30;
//         break;
//     case 12:
//         nombreDeJours = 31;
//         break;
//     default:
//         nombreDeJours = "mois invalide";
// }


// console.log("nombre de jour : " + nombreDeJours);
// }

// nombreDeJours(2);

// Exercice DOM 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

// let bouton =document.getElementById("bouton")
// let paragraphe =document.getElementById("paragraphe")

// bouton.addEventListener("click", function() {
// paragraphe.textContent ="Hello, world !"
// })

// exo DOM 2 ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

// let bouton =document.getElementById("bouton")
// let paragraphe =document.getElementById("paragraphe")

// bouton.addEventListener("click", function() {
//     paragraphe.style.color = "red";
// })

// EXO DOM 3::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

// let bouton =document.getElementById("bouton")
// let ul =document.getElementById("ul")
// let li = document.createElement("li")
// let txtli = document.createTextNode("lorem loremloremlorem")

// bouton.addEventListener("click", function() {
// li.appendChild(txtli)
// ul.appendChild(li)

// })

// EXO dom 4//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// function supprimerPremierElement() {
//     let ul = document.getElementById("liste");
//     let PremierElement = ul.firstElementChild;
//     ul.removeChild(PremierElement);
// }

// EXO DOM 5/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





