# Actividades de repaso de POO

Implementa una clase denominada “CuentaCorriente”. Dicha clase tendrá las siguientes características:

- Sus atributos serán todos privados: el número de la cuenta corriente, el nombre del tiutlar de la cuenta y el importe de que dispone.

- Dispondrá de un constructor sin parámetros y otro constructor con tres parámetros.

- Tendrá los siguientes métodos:

  - ingresarDinero

  - retirarDinero

  - transferirDinero (se le debe pasar un objerto de tipo “CuentaCorriente”, a donde se transferirá el dinero)

  - consultarSaldo

- Establece los parámetros que consideres necesarios en los métodos anteriores. Debes definir el tipo de los parámetros y de los valores devueltos para impedir que el programador cometa algún tipo de error al invocarlos. Comprueba que se genera un error en caso de que no coincida el tipo de los parámetros y/o los valores devueltos por los métodos.

Implementa un PHP que valide la correcta definición de las clases anteriores.

---

Crea una clase base denominada "Electrodoméstico" con las siguientes características:

- Sus atributos serán “precio base”, “color”, “consumo energético” (letras entre A y F) y “peso”.

- Implementa un constructor con todos los atributos pasados por parámetro.

- Por defecto, el color del electrodoméstico será blanco, el consumo energético sera F, el precioBase será 100 € y el peso 5 kg. Utiliza constantes para almacenar estos valores. Dichas constantes se utilizarán en los constructores correspondientes para asignar los valores iniciales a los atributos.

- Los colores posibles para los electrodomésticos serán "blanco", "negro", "rojo", "azul" y "gris".

- Los métodos que se deben implementar son:

  - Métodos get de todos los atributos.

  - "comprobarConsumoEnergetico(string letra)": este método comprueba que la letra es correcta. Si es correcta, la devuelve. Si no es correcta, devolverá la letra por defecto. Será un método privado que lo invicará el constructor correspondiente.

  - "comprobarColor(string color)": Su funcionamiento será análogo al anterior método.

  - "precioFinal()": devolverá el precio del electrodoméstico. según el consumo energético y el peso aumentara su precio base en base a la siguiente tabla:

| Consumo energético | Aumento de precio |
|:------------------:|:-----------------:|
| A                  | 100 €             |
| B                  | 80 €              |
| C                  | 60 €              |
| D                  | 50 €              |
| E                  | 30 €              |
| F                  | 10 €              |

|Peso              | Aumento de precio |
|:----------------:|:-----------------:|
| Entre 0 y 19 kg  | 10 €              |
| Entre 20 y 49 kg | 50 €              |
| Entre 50 y 79 kg | 80 €              |
| Mayor que 80 kg  | 100 €             |

Crearemos una subclase llamada "Lavadora" con las siguientes características:

- Incluirá el atributo “carga”, ademas de los atributos heredados.

- Por defecto, la carga será de 5 kg. Usa una constante para ello. Este valor lo almacenará el constructor correspondiente.

- Los constructores que se implementaran serán:

  - Un constructor por defecto (sin parámetros).

  - Un constructor con el precio y peso. El resto por defecto.

  - Un constructor con la carga y el resto de atributos heredados.

- Todos los constructores deberían hacer uso del constructor de la clase base.

- Los métodos que se implementara serán:

  - Método get de carga.

  - precioFinal():, si tiene una carga mayor de 30 kg, aumentara el precio 50 €. En caso contrario no se incrementará el precio. Llama al método de la clase base y añade el código necesario.

Crea una subclase llamada "Televisión" con las siguientes características:

- Sus atributos son "resolución" (en pulgadas) y "sintonizadorTDT" (booleano), ademas de los atributos heredados.

- Por defecto, la resolución será de 20 pulgadas y el valor de "sintonizadorTDT" será false.

- Los constructores que se implementaran serán:

  - Un constructor por defecto.

  - Un constructor con el precio y peso. El resto por defecto.

  - Un constructor con la resolución, sintonizador TDT y el resto de atributos heredados.

- Los métodos que se implementara serán:

  - Método get de "resolución" y "sintonizadorTDT".

  - precioFinal(): si tiene una resolución mayor de 40 pulgadas, se incrementará el precio un 30% y si tiene un sintonizador TDT incorporado, aumentará 50 €.  Haz uso del método de la clase base correspondiente.

Implementa un PHP que valide la correcta definición de las clases anteriores.
