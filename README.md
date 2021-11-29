3.
- Lo encontramos en PHP_INT_MAX.
- int(2147483647) en sistemas de 32 bits y int(9223372036854775807) en sistemas de 64 bits.

4.
Si intentamos leer una propiedad que no existe previamente nos dará un error.
A partir de cuando la escribamos se guardará en el objeto instanciado, no en la clase o en todos los objetos de las clases.

[Actividad 4](actividadCuatro.php)

5.
Si que se activarán.

Si una propiedad si una clase padre es privada o protegida y una clase hija quiere obtener esas propiedades se tendrá que añadir delante:
```
parent::
```

[Actividad 5](actividadCinco.php)

6.

[Actividad 6](actividadSeis.php)
