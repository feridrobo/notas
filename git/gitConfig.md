## :computer: Configuracion de Git

### :gear: Instalación de Git 
```
sudo apt install git 
```
```
#verificar la version de git
git --version
```

### :open_file_folder: Creación de un repositorio
```
git init
```

### :open_file_folder: Mostrar los archivos y carpetas en el directorio actual (incluyendo los ocultos)
```
ls -all
```

### :gear: Ver la configuración de Git
```
git config -l
```


### :bust_in_silhouette: Configurar la identidad del usuario en Git:
```
git config --global user.email "feridrobo3@gmail.com"
```
```
git config --global user.name "Manuel Idrobo"
```
```
git config -l
```

### :key: Generar una clave SSH
```
ssh-keygen -t rsa -b 4096 -C "feridrobo@gmail.com"
```


### Mostrar las claves :closed_lock_with_key:
```
cat .ssh/id_rsa #clave privada 
```

```
cat .ssh/id_rsa.pub #clave pública
```

- Para que la conexion funcione debes agregar la clave publica en github > setting > ssh

### :rocket: Iniciar el agente SSH
```
eval $(ssh-agent -s)
```

### :heavy_plus_sign:  Agregar la clave privada al agente SSH
```
ssh-add .ssh/id_rsa
```

### :open_file_folder:  Cambiar al directorio "repo"
```
cd repo/
```

### :globe_with_meridians: Mostrar los repositorios remotos
```
git remote -
```

### Mostrar los repositorios remotos (detallado):globe_with_meridians: 
```
git remote -v
```

### :heavy_plus_sign: Agregar los archivos al área de preparación
```
git add .
```

### :pushpin: Realizar el primer commit
```
git commit -m "first commit"
```

### :recycle: Cambiar el nombre de la rama a "main"
```
git branch -M main
```

### :link: Agregar el repositorio remoto "origin"
```
git remote add origin https://github.com/feridrobo/notas.git
```

### :outbox_tray: Empujar los cambios al repositorio remoto
```
git push -u origin main
```

### :link: Agregar el repositorio remoto "origin" con SSH
```
git remote add origin git@github.com:feridrobo/notas.git
```

### :mag: Mostrar los repositorios remotos
```
git remote -v
```

### :pencil: Cambiar la URL del repositorio remoto "origin" a SSH
```
git remote set-url origin git@github.com:feridrobo/notas.git
```
```
git remote -v
```

### :rocket: sube los cambios al repositorio remoto
```
git push -u origin main
```

### :page_facing_up: Mostrar las diferencias entre el último commit y los archivos actuales
```
git diff
```