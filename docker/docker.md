docker container stop $(docker container ls -aq) && docker container rm $(docker container ls -aq)

for container_id in $(docker ps -q); do   echo "Container ID: ${container_id}";   echo "Image Name: $(docker inspect -f '{{ .Config.Image }}' ${container_id})";   echo "IP Address: $(docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' ${container_id})"; done


docker-compose run --rm composer create-project symfony/website-skeleton nombre-del-proyecto




