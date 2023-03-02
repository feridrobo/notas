# Usuarios, grupos, permisos y procesos


## Usuarios

- `useradd`: crea un nuevo usuario en el sistema.
- `usermod`: modifica un usuario existente en el sistema.
- `userdel`: elimina un usuario del sistema.
- `passwd`: cambia la contraseña de un usuario.
- `whoami`: muestra el nombre del usuario actual.
- `su`: cambia al usuario superusuario.
- `who`: muestra quién está conectado al sistema.


## Grupos

- `groupadd`: crea un nuevo grupo en el sistema.
- `groupmod`: modifica un grupo existente en el sistema.
- `groupdel`: elimina un grupo del sistema.
- `usermod -aG`: agrega un usuario a un grupo.
- `chgrp`: cambia el grupo de un archivo o directorio.

## Permisos

- `chmod`: cambia los permisos de un archivo o directorio.
- `chown`: cambia el propietario de un archivo o directorio.
- `setuid`: establece el bit setuid para un archivo.
- `setgid`: establece el bit setgid para un archivo.
- `sticky bit`: establece el sticky bit para un directorio.

## Procesos

- `ps`: muestra los procesos en ejecución en el sistema.
- `top`: muestra los procesos en ejecución en tiempo real.
- `htop`: una alternativa mejorada de `top` que permite interactuar con ellos.
- `kill`: detiene la ejecución de un proceso.
- `pkill`: detiene la ejecución de uno o varios procesos según su nombre o identificador.
- `killall`: detiene la ejecución de todos los procesos según su nombre.
- `nice`: cambia la prioridad de un proceso.
- `renice`: cambia la prioridad de un proceso en ejecución.
- `bg`: pone en segundo plano un proceso suspendido.
- `fg`: pone en primer plano un proceso suspendido.
- `jobs`: muestra los trabajos en segundo plano y suspendidos.
- `pstree`: muestra los procesos en ejecución en forma de árbol.
- `strace`: rastrea las llamadas al sistema y las señales de un proceso.
- `lsof`: muestra los archivos abiertos por los procesos en ejecución.
- `pgrep`: busca procesos según su nombre o identificador.
