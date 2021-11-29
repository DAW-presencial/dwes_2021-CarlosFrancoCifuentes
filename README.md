3.
- Lo encontramos en PHP_INT_MAX.
- int(2147483647) en sistemas de 32 bits y int(9223372036854775807) en sistemas de 64 bits.

4.
Si intentamos leer una propiedad que no existe previamente nos dará un error.
A partir de cuando la escribamos se guardará en el objeto instanciado, no en la clase o en todos los objetos de las clases.

[Actividad 4](actividadCuatro.php)

5.
¿se activan las funciones del padre?

No se activan y es más, con linter salta un error:
```
Undefined function '__get'.
```
Para que se activen las funciones padre tendremos que poner antes del método:
```
parent::nombreMetodo
```
¿cómo afecta a la subclase que una propiedad sea privada o protegida en la clase padre?

Afecta en que para acceder a esa propiedad se tendrá que usar el método mágico.
```
$propiedadPadre = parent::__get($nombrePropiedad)
```
De esta manera guardaremos la propiedad invisible que tiene el padre en una variable de la clase hija.

[Actividad 5](actividadCinco.php)

6.

[Actividad 6](actividadSeis.php)
