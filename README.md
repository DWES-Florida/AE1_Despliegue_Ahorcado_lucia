# Práctica AE1 - Juego del Ahorcado

Aplicación desarrollada en PHP con control de versiones en Git, modelado de ramas, resolución de conflictos y despliegue en entornos locales y cloud.

## Cómo se juega

1. Al abrir la página, el juego elige una palabra secreta al azar. Cada letra aparece como una `?`.
2. Escribe una letra en el cuadro de texto y pulsa **Adivinar**.
3. Si la letra está en la palabra, se muestra en su posición. Si no está, pierdes una vida.
4. Empiezas con **6 vidas**. Las letras que ya has usado aparecen en la parte inferior, y no se pueden repetir.
5. **Ganas** si descubres todas las letras de la palabra antes de quedarte sin vidas.
6. **Pierdes** si te quedas sin vidas.
7. Al terminar la partida se abre una página de victoria o de derrota, con un botón **Jugar de nuevo** que te devuelve al juego.

## Ejecución

El juego necesita un servidor con PHP (por ejemplo Apache o Nginx con PHP-FPM). Copia los archivos a la carpeta pública del servidor y abre `index.php` en el navegador.

## Estructura

- `index.php`: página principal y lógica del juego.
- `ganar.php`: página que se muestra al ganar.
- `perder.php`: página que se muestra al perder.
- `style.css`: estilos de la aplicación.