# Actualización de los repositorios
sudo apt-get update

# Instalación de curl
sudo apt-get install -y curl

# Instalación de paquetes necesarios para agregar repositorios HTTPS
sudo apt-get install -y apt-transport-https ca-certificates gnupg-agent software-properties-common

# Instalación de la clave GPG para el repositorio de Docker
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -

# Agregar el repositorio de Docker a los repositorios del sistema
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"

# Actualización de los repositorios
sudo apt-get update

# Instalación de Docker
sudo apt-get install -y docker-ce docker-ce-cli containerd.io
sudo usermod -aG docker ghost

# Instalación de Docker Compose
sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose

# Crear el grupo docker si no existe
sudo groupadd docker

# Agregue su usuario al grupo docker
sudo usermod -aG docker $USER

# Para evitar tener que cerrar sesión y volver a iniciar sesión, inicie sesión en el nuevo grupo Docker.
newgrp docker

# Instalación de Snap
sudo apt-get install snapd

# Instalación de PhpStorm a través de Snap
sudo snap install phpstorm --classic


# Instalar paquetes necesarios Homebrew
sudo apt-get install build-essential curl file git python3 ruby tar zlib1g-dev

# Instalar Homebrew
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

# Configurar variables de entorno Homebrew
test -d ~/.linuxbrew && eval "$(~/.linuxbrew/bin/brew shellenv)"
test -d /home/linuxbrew/.linuxbrew && eval "$(/home/linuxbrew/.linuxbrew/bin/brew shellenv)"
test -r ~/.bash_profile && echo "eval \"\$($(brew --prefix)/bin/brew shellenv)\"" >> ~/.bash_profile
echo "eval \"\$($(brew --prefix)/bin/brew shellenv)\"" >> ~/.profile


# Instalación de Visual Studio Code
sudo snap install --classic code

# Instalación de Git
sudo apt-get install -y git

# Descarga de NoSQLBooster para Linux
wget -O ~/Downloads/nosqlbooster.AppImage https://s3.nosqlbooster.com/download/releasesv8/nosqlbooster4mongo-8.0.3.AppImage

# Cambio de permisos para el archivo de NoSQLBooster
sudo chmod +x ~/Downloads/nosqlbooster.AppImage

# Instalación de Mutagen a través de Brew
brew install mutagen-io/mutagen/mutagen-beta

# Recomendacion Reiniciar equipo despues de ejecutar este archivo