Kata 57 https://github.com/CloudSalander/kata-jrpg-combat
Final Fantasy
3 personajes: Nom, Punts de vida actual, Punts de magia actual, Comandes
Cada comanda es una opció/acció que el personatge pot realitzar. Cada comanda té un nom i al ser invocat mostra un missatge relacionat.

Per exemple, si el personatge Cloud fa servir la comanda "Atacar" es mostrarà per pantalla:

"Cloud ha atacat!"

A més, crea una lògica que ens retorni el personatge amb menys vida actual en el moment.

Logica de diseño:
empezar por lo mas chiquitito -> comando
Opciones: switch, array asociativo, 
abstraer el comando: clase abstracta y subclases para cada comando: eso permite escalar
Otra clase seran los personajes: son responsables de sus atributos nombre vida y magia y usan los comandos pero no saben como se implementan.
separacion de responsabilidades
hay un requisito funcional del personaje: "cual es el que tiene menos vida" que requiere que se cree una entidad que los integre: 
opcion: array y funcion que determine el minimo no inclumple solid pero no queda muy limpio
Opcion más limpia: una clase que aglutine

Ver codigo de Ruben: abstract class Command {
    constructor promoted que permite declarar los atributos.
    el nombre "object" es una palabra clave, no deberia usarse para nombrar clases o te dara problemas
}
cuando tienes mil includes al inicio de una fichero
usar namespace para reducir la carga de includes
tambien autoload 
tambien cargar include en un fichero php e incluir este mismo