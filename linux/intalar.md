# Instalar linux

## Crear una USB booteable:

1. Descarga la ISO de ubuntu o distribucion de linux que prefieras

2. Inserta una unidad USB en tu computadora.

3. Abre Rufus y selecciona la unidad USB que acabas de insertar en la lista de dispositivos disponibles.

4. Haz clic en el botón "Seleccionar" y busca el archivo ISO de Ubuntu.

5. Asegúrate de que las opciones de partición y sistema de archivos estén configuradas como "MBR" y "FAT32", respectivamente.

6. Haz clic en "Iniciar" para comenzar a crear la usb booteable. Esto borrará todo el contenido de la unidad.

7. Una vez que se complete el proceso, retira la USB de la computadora.

8. Ahora que has creado una usb booteable, puedes usarla para instalar Ubuntu en tu computadora. Asegúrate de configurar la BIOS de tu computadora para iniciar desde la USB antes de intentar instalar Ubuntu.

## Instalación Ubuntu cifrado

1. Selecciona el idioma de instalación y haz clic en "Continuar".

2. Selecciona la opción "Instalar Ubuntu".

3. Selecciona el idioma Ingles y la distribución de teclado español si tu equipo tiene un 'ñ' en el teclado.

4. En la siguiente pantalla, selecciona la opción "Normal" para la instalación, y marca la casilla "Descargar actualizaciones" si agregaste ya alguna red de wi-fi.

5. En la pantalla de "Tipo de instalación", selecciona la opción "Personalizada".

6. En la pantalla de "Preparación del disco", selecciona la opción "LVM con cifrado".

7. A continuación, se te presentará una pantalla para configurar el almacenamiento LVM. Selecciona "Crear grupo de volúmenes" y configura el tamaño deseado para el volumen físico.

8. A continuación, crea un volumen lógico para la partición del sistema de archivos, y configura el tamaño deseado para la partición.

9. Crea otro volumen lógico para el directorio /home, y configura el tamaño deseado para la partición.

10. En la pantalla de "Detalles del cifrado", configura la clave de cifrado deseada y haz clic en "Instalar ahora".

11. Confirma la configuración de la instalación y haz clic en "Continuar" para comenzar la instalación.

12. Una vez que la instalación haya finalizado, reinicia el equipo.