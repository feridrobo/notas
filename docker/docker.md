docker container stop $(docker container ls -aq) && docker container rm $(docker container ls -aq)

for container_id in $(docker ps -q); do   echo "Container ID: ${container_id}";   echo "Image Name: $(docker inspect -f '{{ .Config.Image }}' ${container_id})";   echo "IP Address: $(docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' ${container_id})"; done

docker exec -it laravel-docker57_db_1 psql -U myuser mydatabase

psql -h 192.168.32.2 -p 5432 -U  myuser mydatabase

