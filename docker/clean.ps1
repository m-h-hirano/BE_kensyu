Write-Host "Cleaning volume.."
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^0.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^1.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^2.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^3.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^4.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^5.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^6.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^7.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^8.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^9.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^a.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^b.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^c.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^d.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^e.*")
docker volume rm $(docker volume ls -qf dangling=true | grep -G "^f.*")