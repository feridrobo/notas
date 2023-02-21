## Instalar Docker

- Asegurarse de tener instalado Curl:

  - ``` 
    curl --version 
    ```
  - ```
    sudo apt update
    ```
  - ```
    sudo apt install curl
    ```



- Instalar Dependencias:

  - ```
    sudo apt install apt-transport-https ca-certificates curl software-properties-common
    ```



- Agregar la clave GPG de Docker:

  - ```
    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
    ```



- Agregar el repositorio de Docker:

  - ```
    sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
    ```



- Actualizar la base de datos de paquetes:

  - ```
    sudo apt update
    ```



- Instalar Docker:

  - ```
    sudo apt-get install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
    ```



- Verificar que Docker esté instalado:

  - ```
    sudo systemctl status docker
    ```


- Instalar Docker Compose:

  - ``` 
      sudo curl -L https://github.com/docker/compose/releases/latest/download/docker-compose-linux-$(uname -m) -o /usr/local/bin/docker-compose
    ```
  - ```
    sudo chmod u+x /usr/local/bin/docker-compose
    ```



- Verificar que Docker Compose esté instalado:

  - ```
    sudo docker-compose --version
    ```

