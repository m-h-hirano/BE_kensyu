Write-Host "Deleting container.."
./down.ps1

Write-Host "Starting Container.."
docker-compose up -d

Write-Host "Initializing application"
docker exec -it docker_web_1 bash /var/www/app/sh/init.sh
docker exec -it docker_web_1 bash
